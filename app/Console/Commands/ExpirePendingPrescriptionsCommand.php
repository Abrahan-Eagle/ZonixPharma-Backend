<?php

namespace App\Console\Commands;

use App\Services\PrescriptionService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

/**
 * Caduca recetas en `pending_validation` cuyo TTL venció (`expires_at < now`).
 * Cuando una receta queda `expired`, la orden asociada (si seguía en
 * `pending_prescription_validation`) se cancela vía
 * {@see PrescriptionService::expirePending()}.
 *
 * Configuración:
 *   - `config/zonix.php` `pharma.prescription_validation_ttl_minutes` (default 60).
 *   - Variable `ZONIX_PHARMA_PRESCRIPTION_VALIDATION_TTL_MINUTES`.
 *
 * Programación: cada minuto en `local`/`testing`, cada 5 minutos en otros
 * entornos (ver `app/Console/Kernel.php`).
 */
class ExpirePendingPrescriptionsCommand extends Command
{
    protected $signature = 'zonix:expire-pending-prescriptions
        {--dry-run : Solo cuenta candidatas sin marcarlas como expiradas}';

    protected $description = 'Caduca recetas pendientes de validación cuyo TTL venció y cancela el pedido asociado.';

    public function handle(PrescriptionService $prescriptions): int
    {
        $ttl = (int) config('zonix.pharma.prescription_validation_ttl_minutes', 0);
        if ($ttl <= 0) {
            Log::warning('zonix_expire_pending_prescriptions_skipped', [
                'reason' => 'prescription_validation_ttl_minutes <= 0',
                'hint' => 'Sin TTL no se asigna expires_at al subir recetas; este comando no caduca recetas por tiempo.',
            ]);
            $this->warn('TTL de validación de recetas desactivado (<=0): no se caducan recetas por tiempo. Ver config zonix.pharma.prescription_validation_ttl_minutes.');

            return self::SUCCESS;
        }

        if ($this->option('dry-run')) {
            $candidates = \App\Models\Prescription::query()
                ->where('status', \App\Models\Prescription::STATUS_PENDING_VALIDATION)
                ->whereNotNull('expires_at')
                ->where('expires_at', '<', now())
                ->count();
            $this->info("Candidatas a expirar: {$candidates}");

            return self::SUCCESS;
        }

        $expired = $prescriptions->expirePending();

        Log::info('prescriptions_expired_batch', [
            'expired' => $expired,
            'ttl_minutes' => $ttl,
        ]);

        $this->info("Recetas caducadas: {$expired}");

        return self::SUCCESS;
    }
}
