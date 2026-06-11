<?php

namespace Tests\Feature;

use App\Models\Commerce;
use App\Models\Order;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class ExpirePendingPrescriptionsCommandTest extends TestCase
{
    use RefreshDatabase;

    public function test_command_cancels_orphan_rx_order_when_upload_ttl_expired(): void
    {
        config(['zonix.pharma.prescription_validation_ttl_minutes' => 60]);

        $buyer = User::factory()->create(['role' => 'users']);
        $profile = Profile::factory()->create(['user_id' => $buyer->id]);
        $commerce = Commerce::factory()->withProfile()->create(['open' => true, 'status' => 'approved']);

        $order = Order::create([
            'profile_id' => $profile->id,
            'commerce_id' => $commerce->id,
            'delivery_type' => 'pickup',
            'status' => Order::STATUS_PENDING_PRESCRIPTION,
            'requires_prescription' => true,
            'prescription_id' => null,
            'expires_at' => now()->subMinute(),
            'total' => 20,
            'delivery_fee' => 0,
        ]);

        Artisan::call('zonix:expire-pending-prescriptions');

        $this->assertSame(Order::STATUS_CANCELLED, $order->fresh()->status);
        $this->assertStringContainsString(
            'Receta no subida',
            (string) $order->fresh()->cancellation_reason
        );
    }

    public function test_command_skips_when_ttl_disabled(): void
    {
        config(['zonix.pharma.prescription_validation_ttl_minutes' => 0]);

        $buyer = User::factory()->create(['role' => 'users']);
        $profile = Profile::factory()->create(['user_id' => $buyer->id]);
        $commerce = Commerce::factory()->withProfile()->create(['open' => true, 'status' => 'approved']);

        $order = Order::create([
            'profile_id' => $profile->id,
            'commerce_id' => $commerce->id,
            'delivery_type' => 'pickup',
            'status' => Order::STATUS_PENDING_PRESCRIPTION,
            'requires_prescription' => true,
            'prescription_id' => null,
            'expires_at' => now()->subMinute(),
            'total' => 20,
            'delivery_fee' => 0,
        ]);

        Artisan::call('zonix:expire-pending-prescriptions');

        $this->assertSame(Order::STATUS_PENDING_PRESCRIPTION, $order->fresh()->status);
    }
}
