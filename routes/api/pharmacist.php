<?php

use App\Http\Controllers\Pharmacist\DashboardController as PharmacistDashboardController;
use App\Http\Controllers\Pharmacist\OnboardingController as PharmacistOnboardingController;
use App\Http\Controllers\Pharmacist\PrescriptionController as PharmacistPrescriptionController;
use Illuminate\Support\Facades\Route;

/**
 * Rutas del rol `pharmacist` (farmacéutico colegiado responsable).
 * Protegidas por sanctum + role pharmacist.
 */
Route::middleware(['auth:sanctum', 'role:pharmacist'])->prefix('pharmacist')->group(function () {
    Route::get('/dashboard', [PharmacistDashboardController::class, 'index']);

    Route::get('/onboarding', [PharmacistOnboardingController::class, 'show']);
    Route::post('/onboarding', [PharmacistOnboardingController::class, 'store']);

    Route::prefix('prescriptions')->group(function () {
        Route::get('/pending', [PharmacistPrescriptionController::class, 'pendingIndex']);
        Route::get('/{prescription}', [PharmacistPrescriptionController::class, 'show']);
        Route::get('/{prescription}/file', [PharmacistPrescriptionController::class, 'downloadFile'])
            ->middleware('throttle:prescription-download');
        Route::post('/{prescription}/approve', [PharmacistPrescriptionController::class, 'approve']);
        Route::post('/{prescription}/reject', [PharmacistPrescriptionController::class, 'reject']);
    });
});
