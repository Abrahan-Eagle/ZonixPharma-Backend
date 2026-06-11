<?php

namespace Tests\Feature\Commerce;

use App\Models\Commerce;
use App\Models\Order;
use App\Models\OrderPayment;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CommerceOrderValidatePaymentTest extends TestCase
{
    use RefreshDatabase;

    public function test_reject_payment_without_reason_returns_422_with_error_code(): void
    {
        $user = User::factory()->create(['role' => 'commerce']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);
        $commerce = Commerce::factory()->create([
            'profile_id' => $profile->id,
            'is_primary' => true,
            'open' => true,
        ]);

        $order = Order::factory()->create([
            'commerce_id' => $commerce->id,
            'status' => 'pending_payment',
            'approved_for_payment' => true,
        ]);

        OrderPayment::updateOrCreate(
            ['order_id' => $order->id, 'type' => 'food'],
            [
                'amount' => 10,
                'payment_proof' => 'payment_proofs/test.jpg',
                'payment_proof_uploaded_at' => now(),
            ]
        );

        Sanctum::actingAs($user);

        $this->postJson("/api/commerce/orders/{$order->id}/validate-payment", [
            'is_valid' => false,
        ])
            ->assertStatus(422)
            ->assertJson([
                'success' => false,
                'error_code' => 'PAYMENT_REJECTION_REASON_REQUIRED',
            ])
            ->assertJsonValidationErrors(['rejection_reason']);
    }
}
