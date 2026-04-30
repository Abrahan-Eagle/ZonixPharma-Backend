<?php

namespace App\Http\Controllers\Pharmacist;

use App\Http\Controllers\Controller;
use App\Http\Requests\RejectPrescriptionRequest;
use App\Models\Commerce;
use App\Models\PharmacistProfile;
use App\Models\Prescription;
use App\Services\PrescriptionService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Endpoints del farmacéutico colegiado para validar recetas.
 *
 * Rutas (auth:sanctum + role:pharmacist):
 *   GET   /api/pharmacist/prescriptions/pending
 *   GET   /api/pharmacist/prescriptions/{prescription}
 *   POST  /api/pharmacist/prescriptions/{prescription}/approve
 *   POST  /api/pharmacist/prescriptions/{prescription}/reject
 */
class PrescriptionController extends Controller
{
    public function __construct(private readonly PrescriptionService $prescriptions)
    {
    }

    public function pendingIndex(Request $request): JsonResponse
    {
        $profile = $this->resolveProfile();
        if (! $profile) {
            return $this->unauthenticated();
        }

        $commerceIds = $this->commerceIdsForPharmacist($profile->id);

        $items = Prescription::query()
            ->whereIn('commerce_id', $commerceIds)
            ->pending()
            ->orderBy('created_at')
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
        if (! $profile || ! $this->canAccess($profile->id, $prescription)) {
            return response()->json([
                'success' => false,
                'message' => 'Receta no encontrada.',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $prescription->load(['patient', 'order.commerce', 'commerce']),
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
