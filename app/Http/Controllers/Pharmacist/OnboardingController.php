<?php

namespace App\Http\Controllers\Pharmacist;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePharmacistProfileRequest;
use App\Models\PharmacistProfile;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

/**
 * Onboarding del farmacéutico colegiado: crea o actualiza el
 * `pharmacist_profiles` del usuario autenticado.
 *
 * Rutas (auth:sanctum + role:pharmacist):
 *   GET  /api/pharmacist/onboarding   → estado actual
 *   POST /api/pharmacist/onboarding   → crear/actualizar (multipart)
 */
class OnboardingController extends Controller
{
    public function show(): JsonResponse
    {
        $profile = Auth::user()?->profile;
        if (! $profile) {
            return response()->json([
                'success' => false,
                'message' => 'No autenticado.',
            ], 401);
        }

        $pharmacist = PharmacistProfile::where('profile_id', $profile->id)->first();

        return response()->json([
            'success' => true,
            'data' => [
                'pharmacist' => $pharmacist,
                'license_valid' => $pharmacist?->isLicenseValid() ?? false,
            ],
        ]);
    }

    public function store(StorePharmacistProfileRequest $request): JsonResponse
    {
        $profile = Auth::user()?->profile;
        if (! $profile) {
            return response()->json([
                'success' => false,
                'message' => 'No autenticado.',
            ], 401);
        }

        $payload = [
            'mpps_number' => $request->input('mpps_number'),
            'college_license_number' => $request->input('college_license_number'),
            'license_expires_at' => $request->input('license_expires_at'),
            'notes' => $request->input('notes'),
        ];

        if ($request->hasFile('title_image')) {
            $stored = $request->file('title_image')->store('pharmacist_titles', 'local');
            $payload['title_image_url'] = Storage::url($stored);
        }

        // Mantener `verified` en false hasta que un admin verifique manualmente
        // la colegiación (ver flujo en docs/PLAN_REGULATORIO_PHARMA_VE.md).
        $pharmacist = PharmacistProfile::updateOrCreate(
            ['profile_id' => $profile->id],
            $payload + ['verified' => false],
        );

        return response()->json([
            'success' => true,
            'message' => 'Datos colegiados enviados. Un administrador validará tu MPPS antes de habilitarte para validar recetas.',
            'data' => $pharmacist,
        ]);
    }
}
