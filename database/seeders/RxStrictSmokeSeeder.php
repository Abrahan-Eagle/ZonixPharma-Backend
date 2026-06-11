<?php

namespace Database\Seeders;

use App\Models\Commerce;
use App\Models\Prescription;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

/**
 * Datos opcionales para smoke manual modo Rx estricto.
 *
 * Crea una receta `approved` sin `order_id` para el buyer principal (user 1)
 * y la farmacia del commerce principal (user 6), si existen tras ZonixDemoSeeder.
 *
 * Uso: php artisan db:seed --class=RxStrictSmokeSeeder
 * Requiere: ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION=true en .env para probar checkout estricto.
 */
class RxStrictSmokeSeeder extends Seeder
{
    public function run(): void
    {
        $buyer = User::query()->where('role', 'users')->orderBy('id')->first();
        $buyerProfile = $buyer?->profile ?? Profile::query()
            ->whereHas('user', fn ($q) => $q->where('role', 'users'))
            ->orderBy('id')
            ->first();
        if (! $buyerProfile) {
            $this->command?->warn('RxStrictSmokeSeeder: buyer / profile no encontrado — omitido.');

            return;
        }

        $commerce = Commerce::query()
            ->where('status', 'approved')
            ->orderBy('id')
            ->first();

        if (! $commerce) {
            $this->command?->warn('RxStrictSmokeSeeder: commerce aprobado no encontrado — omitido.');

            return;
        }

        $exists = Prescription::query()
            ->where('patient_profile_id', $buyerProfile->id)
            ->where('commerce_id', $commerce->id)
            ->where('status', Prescription::STATUS_APPROVED)
            ->whereNull('order_id')
            ->exists();

        if ($exists) {
            $this->command?->info('RxStrictSmokeSeeder: receta pre-aprobada ya existe — omitido.');

            return;
        }

        $rxProduct = Product::query()
            ->where('commerce_id', $commerce->id)
            ->where('requires_prescription', true)
            ->where('available', true)
            ->orderBy('id')
            ->first();

        Prescription::create([
            'patient_profile_id' => $buyerProfile->id,
            'commerce_id' => $commerce->id,
            'order_id' => null,
            'prescribing_doctor_name' => 'Dr. Smoke Demo',
            'prescribing_doctor_license' => 'MPPS-DEMO-001',
            'image_url' => 'prescriptions/smoke-demo-rx.jpg',
            'prescription_type' => Prescription::TYPE_COMMON,
            'status' => Prescription::STATUS_APPROVED,
            'validated_at' => now(),
        ]);

        $this->command?->info(sprintf(
            'RxStrictSmokeSeeder: receta approved id lista para buyer profile %d + commerce %d%s.',
            $buyerProfile->id,
            $commerce->id,
            $rxProduct ? " (Rx product id {$rxProduct->id})" : ''
        ));
    }
}
