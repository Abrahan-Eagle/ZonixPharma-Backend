<?php

namespace App\Http\Controllers\Pharmacist;

use App\Http\Controllers\Controller;
use App\Models\Commerce;
use App\Models\PharmacistProfile;
use App\Models\Prescription;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Auth;

/**
 * Dashboard del farmacéutico responsable.
 *
 * Rutas (auth:sanctum + role:pharmacist):
 *   GET /api/pharmacist/dashboard
 */
class DashboardController extends Controller
{
    public function index(): JsonResponse
    {
        $profile = Auth::user()?->profile;
        if (! $profile) {
            return response()->json([
                'success' => false,
                'message' => 'No autenticado.',
            ], 401);
        }

        $commerceIds = Commerce::query()
            ->where('pharmacist_in_charge_profile_id', $profile->id)
            ->pluck('id')
            ->all();

        $pharmacist = PharmacistProfile::where('profile_id', $profile->id)->first();

        $pendingCount = Prescription::query()
            ->whereIn('commerce_id', $commerceIds)
            ->pending()
            ->count();

        $todayCount = Prescription::query()
            ->whereIn('commerce_id', $commerceIds)
            ->whereDate('created_at', today())
            ->count();

        $approvedCount = Prescription::query()
            ->whereIn('commerce_id', $commerceIds)
            ->where('status', Prescription::STATUS_APPROVED)
            ->whereDate('validated_at', today())
            ->count();

        return response()->json([
            'success' => true,
            'data' => [
                'pharmacist' => $pharmacist,
                'commerces' => $commerceIds,
                'stats' => [
                    'pending' => $pendingCount,
                    'today_total' => $todayCount,
                    'today_approved' => $approvedCount,
                ],
                'license_valid' => $pharmacist?->isLicenseValid() ?? false,
            ],
        ]);
    }
}
