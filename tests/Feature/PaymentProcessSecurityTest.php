<?php

namespace Tests\Feature;

use App\Models\Commerce;
use App\Models\Order;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class PaymentProcessSecurityTest extends TestCase
{
    use RefreshDatabase;

    private User $buyer;

    private Profile $buyerProfile;

    private Order $order;

    private PaymentMethod $buyerPaymentMethod;

    private PaymentMethod $otherPaymentMethod;

    protected function setUp(): void
    {
        parent::setUp();

        $this->buyer = User::factory()->create(['role' => 'users']);
        $this->buyerProfile = Profile::factory()->create(['user_id' => $this->buyer->id]);

        $otherBuyer = User::factory()->create(['role' => 'users']);
        $otherProfile = Profile::factory()->create(['user_id' => $otherBuyer->id]);

        $commerceUser = User::factory()->create(['role' => 'commerce']);
        $commerceProfile = Profile::factory()->create(['user_id' => $commerceUser->id]);
        $commerce = Commerce::factory()->create([
            'profile_id' => $commerceProfile->id,
            'open' => true,
            'status' => 'approved',
        ]);

        $product = Product::factory()->create([
            'commerce_id' => $commerce->id,
            'available' => true,
            'stock_quantity' => 10,
        ]);

        $this->order = Order::create([
            'profile_id' => $this->buyerProfile->id,
            'commerce_id' => $commerce->id,
            'delivery_type' => 'pickup',
            'status' => 'pending_payment',
            'approved_for_payment' => true,
            'approved_for_payment_at' => now(),
            'total' => $product->price,
            'delivery_fee' => 0,
        ]);

        $this->buyerPaymentMethod = $this->buyer->paymentMethods()->create([
            'type' => 'mobile_payment',
            'phone' => '04141234567',
            'is_active' => true,
        ]);

        $this->otherPaymentMethod = $otherBuyer->paymentMethods()->create([
            'type' => 'mobile_payment',
            'phone' => '04149876543',
            'is_active' => true,
        ]);
    }

    public function test_process_payment_rejects_foreign_payment_method_idor(): void
    {
        Sanctum::actingAs($this->buyer);

        $response = $this->postJson('/api/payments/process', [
            'amount' => (float) $this->order->total,
            'currency' => 'USD',
            'payment_method_id' => $this->otherPaymentMethod->id,
            'order_id' => $this->order->id,
            'description' => 'Pago pedido',
        ]);

        $response->assertStatus(403);
        $this->assertSame('pending_payment', $this->order->fresh()->status);
        $this->assertNull($this->order->fresh()->payment_validated_at);
    }

    public function test_process_payment_rejects_order_not_approved_for_payment(): void
    {
        $this->order->update([
            'approved_for_payment' => false,
            'approved_for_payment_at' => null,
        ]);

        Sanctum::actingAs($this->buyer);

        $response = $this->postJson('/api/payments/process', [
            'amount' => (float) $this->order->total,
            'currency' => 'USD',
            'payment_method_id' => $this->buyerPaymentMethod->id,
            'order_id' => $this->order->id,
            'description' => 'Pago pedido',
        ]);

        $response->assertStatus(422);
        $this->assertSame('pending_payment', $this->order->fresh()->status);
    }

    public function test_process_payment_does_not_mark_order_paid(): void
    {
        Sanctum::actingAs($this->buyer);

        $response = $this->postJson('/api/payments/process', [
            'amount' => (float) $this->order->total,
            'currency' => 'USD',
            'payment_method_id' => $this->buyerPaymentMethod->id,
            'order_id' => $this->order->id,
            'description' => 'Pago pedido',
        ]);

        $response->assertStatus(422)
            ->assertJsonPath('error_code', 'USE_PAYMENT_PROOF_FLOW');

        $fresh = $this->order->fresh();
        $this->assertSame('pending_payment', $fresh->status);
        $this->assertNull($fresh->payment_validated_at);
        $this->assertNull($fresh->payment_proof);
    }

    public function test_process_payment_rejects_invalid_order_status(): void
    {
        $this->order->update(['status' => 'processing']);

        Sanctum::actingAs($this->buyer);

        $response = $this->postJson('/api/payments/process', [
            'amount' => (float) $this->order->total,
            'currency' => 'USD',
            'payment_method_id' => $this->buyerPaymentMethod->id,
            'order_id' => $this->order->id,
            'description' => 'Pago pedido',
        ]);

        $response->assertStatus(422);
    }
}
