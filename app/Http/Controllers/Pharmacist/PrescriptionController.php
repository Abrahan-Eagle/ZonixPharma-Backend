<?php

namespace App\Http\Controllers\Pharmacist;

use App\Http\Controllers\Controller;
use App\Http\Requests\RejectPrescriptionRequest;
use App\Models\Commerce;
use App\Models\PharmacistProfile;
use App\Models\Prescription;
use App\Services\PrescriptionAuditLogger;
use App\Services\PrescriptionFileStorageService;
use App\Services\PrescriptionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

/**
 * Endpoints del farmacéutico colegiado para validar recetas.
 *
 * Rutas (auth:sanctum + role:pharmacist):
 *   GET   /api/pharmacist/prescriptions/pending
 *   GET   /api/pharmacist/prescriptions/{prescription}
 *   GET   /api/pharmacist/prescriptions/{prescription}/file
 *   POST  /api/pharmacist/prescriptions/{prescription}/approve
 *   POST  /api/pharmacist/prescriptions/{prescription}/reject
 */
class PrescriptionController extends Controller
{
    public function __construct(
        private readonly PrescriptionService $prescriptions,
        private readonly PrescriptionFileStorageService $prescriptionFiles,
    ) {}

    public function pendingIndex(Request $request): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile) {
            return $this->unauthenticated();
        }

        $commerceIds = $this->commerceIdsForPharmacist($profile->id);

        $items = Prescription::query()
            ->with(['order', 'commerce'])
            ->whereIn('commerce_id', $commerceIds)
            ->pending()
            ->orderBy('created_at')
            ->paginate((int) min($request->input('per_page', 20), 100));

        $mapped = collect($items->items())->map(fn (Prescription $p) => $this->serializePrescription($p))->all();

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

    public function historyIndex(Request $request): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile) {
            return $this->unauthenticated();
        }

        $commerceIds = $this->commerceIdsForPharmacist($profile->id);
        $terminalStatuses = [
            Prescription::STATUS_APPROVED,
            Prescription::STATUS_REJECTED,
            Prescription::STATUS_EXPIRED,
        ];

        $query = Prescription::query()
            ->with(['order', 'commerce'])
            ->whereIn('commerce_id', $commerceIds)
            ->whereIn('status', $terminalStatuses)
            ->orderByDesc('validated_at')
            ->orderByDesc('updated_at');

        $status = $request->input('status');
        if (is_string($status) && $status !== '' && in_array($status, $terminalStatuses, true)) {
            $query->where('status', $status);
        }

        $items = $query->paginate((int) min($request->input('per_page', 20), 100));
        $mapped = collect($items->items())->map(fn (Prescription $p) => $this->serializePrescription($p))->all();

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
        if (! $profile || ! $this->canAccess($profile->id, $prescription)) {
            return response()->json([
                'success' => false,
                'message' => 'Receta no encontrada.',
            ], 404);
        }

        $prescription->load(['patient', 'order.commerce', 'commerce']);
        PrescriptionAuditLogger::log(
            $prescription,
            'pharmacist_view_json',
            $request,
            'pharmacist',
            $profile->id,
        );

        return response()->json([
            'success' => true,
            'data' => $this->serializePrescription($prescription),
        ]);
    }

    public function downloadFile(Request $request, Prescription $prescription): Response
    {
        $profile = $this->resolveProfile();
        if (! $profile || ! $this->canAccess($profile->id, $prescription)) {
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
            PrescriptionAuditLogger::log($prescription, 'pharmacist_redirect_external', $request, 'pharmacist', $profile->id);

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

        PrescriptionAuditLogger::log($prescription, 'pharmacist_download_file', $request, 'pharmacist', $profile->id);

        return response($payload['binary'], 200, [
            'Content-Type' => $payload['mime'],
            'Content-Disposition' => 'inline; filename="prescription-'.$prescription->id.'"',
        ]);
    }

    public function approve(Prescription $prescription): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile || ! $this->canAccess($profile->id, $prescription)) {
            return response()->json([
                'success' => false,
                'message' => 'Receta no encontrada.',
            ], 404);
        }
        if (! $this->pharmacistLicenseValid($profile->id)) {
            return response()->json([
                'success' => false,
                'message' => 'Licencia de farmacéutico no verificada o vencida.',
                'error_code' => 'PHARMACIST_LICENSE_INVALID',
            ], 403);
        }

        $approved = $this->prescriptions->approve($prescription, $profile->id);

        return response()->json([
            'success' => true,
            'message' => 'Receta aprobada.',
            'data' => $approved->fresh(['order']),
        ]);
    }

    public function reject(RejectPrescriptionRequest $request, Prescription $prescription): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile || ! $this->canAccess($profile->id, $prescription)) {
            return response()->json([
                'success' => false,
                'message' => 'Receta no encontrada.',
            ], 404);
        }
        if (! $this->pharmacistLicenseValid($profile->id)) {
            return response()->json([
                'success' => false,
                'message' => 'Licencia de farmacéutico no verificada o vencida.',
                'error_code' => 'PHARMACIST_LICENSE_INVALID',
            ], 403);
        }

        $rejected = $this->prescriptions->reject(
            $prescription,
            $profile->id,
            (string) $request->input('reason'),
        );

        return response()->json([
            'success' => true,
            'message' => 'Receta rechazada.',
            'data' => $rejected->fresh(['order']),
        ]);
    }

    private function serializePrescription(Prescription $prescription): array
    {
        $arr = $prescription->toArray();
        $url = (string) ($arr['image_url'] ?? '');
        if (str_starts_with($url, 'http://') || str_starts_with($url, 'https://')) {
            return $arr;
        }
        if ($this->prescriptionFiles->isSecureOrLegacyFile($url)) {
            $arr['image_url'] = null;
            $arr['prescription_file_download_url'] = url('/api/pharmacist/prescriptions/'.$prescription->id.'/file');
        }

        return $arr;
    }

    private function commerceIdsForPharmacist(int $pharmacistProfileId): array
    {
        return Commerce::query()
            ->where('pharmacist_in_charge_profile_id', $pharmacistProfileId)
            ->pluck('id')
            ->all();
    }

    private function canAccess(int $pharmacistProfileId, Prescription $prescription): bool
    {
        $commerceIds = $this->commerceIdsForPharmacist($pharmacistProfileId);

        return in_array((int) $prescription->commerce_id, $commerceIds, true);
    }

    private function pharmacistLicenseValid(int $profileId): bool
    {
        $pharmacist = PharmacistProfile::where('profile_id', $profileId)->first();

        return $pharmacist !== null && $pharmacist->isLicenseValid();
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
