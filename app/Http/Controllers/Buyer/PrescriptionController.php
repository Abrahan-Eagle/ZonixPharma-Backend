<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePrescriptionRequest;
use App\Models\Order;
use App\Models\Prescription;
use App\Services\PrescriptionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Endpoints buyer para subir y consultar recetas médicas.
 *
 * Rutas (auth:sanctum + role:users):
 *   POST   /api/buyer/prescriptions
 *   GET    /api/buyer/prescriptions
 *   GET    /api/buyer/prescriptions/{prescription}
 *   DELETE /api/buyer/prescriptions/{prescription}   (solo si pending_validation)
 */
class PrescriptionController extends Controller
{
    public function __construct(private readonly PrescriptionService $prescriptions)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile) {
            return $this->unauthenticated();
        }

        $items = Prescription::query()
            ->where('patient_profile_id', $profile->id)
            ->orderByDesc('created_at')
            ->paginate((int) min($request->input('per_page', 20), 100));

        return response()->json([
            'success' => true,
            'data' => $items->items(),
            'pagination' => [
                'total' => $items->total(),
                'per_page' => $items->perPage(),
                'current_page' => $items->currentPage(),
                'last_page' => $items->lastPage(),
            ],
        ]);
    }

    public function show(Prescription $prescription): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile || $prescription->patient_profile_id !== $profile->id) {
            return response()->json([
                'success' => false,
                'message' => 'Receta no encontrada.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $prescription->load(['order', 'commerce']),
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
            $stored = $request->file('image')->store('prescriptions', 'local');
            $imageUrl = Storage::url($stored);
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
            'data' => $prescription->fresh(['order', 'commerce']),
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

        $prescription->delete();

        return response()->json([
            'success' => true,
            'message' => 'Receta eliminada.',
        ]);
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
