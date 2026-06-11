<?php

namespace Tests\Feature\Commerce;

use App\Models\Commerce;
use App\Models\Order;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CommerceDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_pending_orders_includes_rx_and_payment_queue(): void
    {
        $user = User::factory()->create(['role' => 'commerce']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);
        $commerce = Commerce::factory()->create([
            'profile_id' => $profile->id,
            'is_primary' => true,
            'status' => 'approved',
        ]);

        Order::factory()->create([
            'commerce_id' => $commerce->id,
            'status' => 'pending_prescription_validation',
        ]);
        Order::factory()->create([
            'commerce_id' => $commerce->id,
            'status' => 'pending_payment',
        ]);
        Order::factory()->create([
            'commerce_id' => $commerce->id,
            'status' => 'paid',
        ]);
        Order::factory()->create([
            'commerce_id' => $commerce->id,
            'status' => 'delivered',
        ]);

        Sanctum::actingAs($user);

        $this->getJson('/api/commerce/dashboard')
            ->assertOk()
            ->assertJsonPath('data.pending_orders', 3);
    }
}
