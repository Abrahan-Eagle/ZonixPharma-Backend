<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrescriptionRequest;
use App\Models\Order;
use App\Models\Prescription;
use App\Services\PrescriptionAuditLogger;
use App\Services\PrescriptionFileStorageService;
use App\Services\PrescriptionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

/**
 * Endpoints buyer para subir y consultar recetas médicas.
 *
 * Rutas (auth:sanctum + role:users):
 *   POST   /api/buyer/prescriptions
 *   GET    /api/buyer/prescriptions
 *   GET    /api/buyer/prescriptions/{prescription}
 *   GET    /api/buyer/prescriptions/{prescription}/file
 *   DELETE /api/buyer/prescriptions/{prescription}   (solo si pending_validation)
 */
class PrescriptionController extends Controller
{
    public function __construct(
        private readonly PrescriptionService $prescriptions,
        private readonly PrescriptionFileStorageService $prescriptionFiles,
    ) {}

    public function index(Request $request): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile) {
            return $this->unauthenticated();
        }

        $items = Prescription::query()
            ->with(['order', 'commerce'])
            ->where('patient_profile_id', $profile->id)
            ->orderByDesc('created_at')
            ->paginate((int) min($request->input('per_page', 20), 100));

        $mapped = collect($items->items())->map(fn (Prescription $p) => $this->serializePrescription($p, $request))->all();

        return response()->json([
            'success' => true,
            'data' => $mapped,
            'pagination' => [
                'total' => $items->total(),
                'per_page' => $items->perPage(),
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
            ],
        ]);
    }

    public function show(Request $request, Prescription $prescription): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile || $prescription->patient_profile_id !== $profile->id) {
            return response()->json([
                'success' => false,
                'message' => 'Receta no encontrada.',
            ], 404);
        }

        $prescription->load(['order', 'commerce']);
        PrescriptionAuditLogger::log(
            $prescription,
            'buyer_view_json',
            $request,
            'users',
            $profile->id,
        );

        return response()->json([
            'success' => true,
            'data' => $this->serializePrescription($prescription, $request),
        ]);
    }

    public function downloadFile(Request $request, Prescription $prescription): Response
    {
        $profile = $this->resolveProfile();
        if (! $profile || $prescription->patient_profile_id !== $profile->id) {
            return response()->json([
                'success' => false,
                'message' => 'Receta no encontrada.',
            ], 404);
        }

        $url = (string) $prescription->image_url;
        if ($url === '') {
            return response()->json(['success' => false, 'message' => 'Sin adjunto.'], 404);
        }

        if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://')) {
            PrescriptionAuditLogger::log($prescription, 'buyer_redirect_external', $request, 'users', $profile->id);

            return redirect()->away($url);
        }

        try {
            $payload = $this->prescriptionFiles->getBinaryForDownload($url);
        } catch (\Throwable $e) {
            return response()->json([
                'success' => false,
                'message' => 'No se pudo recuperar el archivo de la receta.',
            ], 404);
        }

        PrescriptionAuditLogger::log($prescription, 'buyer_download_file', $request, 'users', $profile->id);

        return response($payload['binary'], 200, [
            'Content-Type' => $payload['mime'],
            'Content-Disposition' => 'inline; filename="prescription-'.$prescription->id.'"',
        ]);
    }

    public function store(StorePrescriptionRequest $request): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile) {
            return $this->unauthenticated();
        }

        $order = Order::find($request->integer('order_id'));
        if (! $order || $order->profile_id !== $profile->id) {
            return response()->json([
                'success' => false,
                'message' => 'Pedido no encontrado.',
            ], 404);
        }

        if ($order->status !== Order::STATUS_PENDING_PRESCRIPTION) {
            return response()->json([
                'success' => false,
                'message' => 'Solo puedes subir receta mientras el pedido espera validación de receta.',
                'error_code' => 'PRESCRIPTION_NOT_ALLOWED_FOR_STATUS',
            ], 422);
        }

        $imageUrl = $request->input('image_url');
        if ($request->hasFile('image')) {
            $imageUrl = $this->prescriptionFiles->storeFromUpload($request->file('image'));
        }

        if (! $imageUrl) {
            return response()->json([
                'success' => false,
                'message' => 'Imagen de la receta requerida.',
            ], 422);
        }

        $data = $request->validated();
        $data['image_url'] = $imageUrl;

        $prescription = $this->prescriptions->upload($data, $order);

        return response()->json([
            'success' => true,
            'message' => 'Receta enviada para validación.',
            'data' => $this->serializePrescription($prescription->fresh(['order', 'commerce']), $request),
        ], 201);
    }

    public function destroy(Prescription $prescription): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile || $prescription->patient_profile_id !== $profile->id) {
            return response()->json([
                'success' => false,
                'message' => 'Receta no encontrada.',
            ], 404);
        }

        if (! $prescription->isPending()) {
            return response()->json([
                'success' => false,
                'message' => 'No se puede eliminar una receta ya validada o rechazada.',
                'error_code' => 'PRESCRIPTION_ALREADY_PROCESSED',
            ], 422);
        }

        DB::transaction(function () use ($prescription) {
            $locked = Prescription::query()
                ->whereKey($prescription->id)
                ->lockForUpdate()
                ->firstOrFail();

            if (! $locked->isPending()) {
                throw new \RuntimeException('PRESCRIPTION_ALREADY_PROCESSED');
            }

            $this->prescriptionFiles->deleteByReference($locked->image_url);
            $locked->delete();
        });

        return response()->json([
            'success' => true,
            'message' => 'Receta eliminada.',
        ]);
    }

    private function serializePrescription(Prescription $prescription, Request $request): array
    {
        $arr = $prescription->toArray();
        $url = (string) ($arr['image_url'] ?? '');
        if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://')) {
            return $arr;
        }
        if ($this->prescriptionFiles->isSecureOrLegacyFile($url)) {
            $arr['image_url'] = null;
            $arr['prescription_file_download_url'] = url('/api/buyer/prescriptions/'.$prescription->id.'/file');
        }

        return $arr;
    }

    private function resolveProfile(): ?\App\Models\Profile
    {
        $user = Auth::user();

        return $user?->profile;
    }

    private function unauthenticated(): JsonResponse
    {
        return response()->json([
            'success' => false,
            'message' => 'No autenticado.',
        ], 401);
    }
}
