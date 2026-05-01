<?php

namespace App\Console\Commands;

use App\Models\Order;
use App\Models\Prescription;
use App\Services\PrescriptionFileStorageService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

/**
 * Purga adjuntos y anonimiza metadatos de recetas asociadas a pedidos en estado
 * terminal (entregado / cancelado) tras el periodo configurado en zonix.pharma.
 */
class PurgeStalePrescriptionPersonalDataCommand extends Command
{
    protected $signature = 'zonix:purge-prescription-personal-data {--dry-run : Solo listar cantidad sin modificar}';

    protected $description = 'Elimina archivos de receta y anonimiza datos clínicos tras retención post-pedido terminal';

    public function handle(PrescriptionFileStorageService $files): int
    {
        $days = max(1, (int) config('zonix.pharma.prescription_retention_days_after_terminal', 90));
        $cutoff = now()->subDays($days);
        $dry = (bool) $this->option('dry-run');

        $query = Prescription::query()
            ->whereNotNull('image_url')
            ->whereHas('order', function ($q) use ($cutoff): void {
                $q->whereIn('status', [Order::STATUS_DELIVERED, Order::STATUS_CANCELLED])
                    ->where('updated_at', '<', $cutoff);
            });

        $count = (clone $query)->count();
        $this->info("Recetas candidatas a purga: {$count} (días={$days}, dry-run=".($dry ? 'yes' : 'no').')');

        if ($dry || $count === 0) {
            return self::SUCCESS;
        }

        $purged = 0;
        $query->orderBy('id')->chunkById(100, function ($rows) use ($files, &$purged): void {
            foreach ($rows as $prescription) {
                DB::transaction(function () use ($prescription, $files, &$purged): void {
                    $files->deleteByReference($prescription->image_url);
                    $prescription->update([
                        'image_url' => 'purged',
                        'prescribing_doctor_name' => '[deleted]',
                        'prescribing_doctor_license' => null,
                        'prescribing_doctor_specialty' => null,
                        'rejection_reason' => null,
                    ]);
                    $purged++;
                });
            }
        });

        $this->info("Purgadas: {$purged}");

        return self::SUCCESS;
    }
}
