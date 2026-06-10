<?php

namespace Tests\Feature;

use App\Models\Commerce;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use App\Services\OrderStateMachineService;
use App\Services\OrderStockService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class OrderStockRestockTest extends TestCase
{
    use RefreshDatabase;

    public function test_cancellation_via_state_machine_restores_stock_once(): void
    {
        [$buyer, $profile, $order, $product] = $this->makeOrderWithStock(initialStock: 7, quantity: 2);

        $decision = app(OrderStateMachineService::class)->applyTransition(
            $order,
            'buyer',
            'cancelled',
            $profile->id,
            'test',
            'test cancel'
        );
        $this->assertTrue($decision['allowed']);

        $this->assertSame(7, $product->fresh()->stock_quantity);
        $this->assertTrue($product->fresh()->available);
        $this->assertNotNull($order->fresh()->stock_restocked_at);

        app(OrderStockService::class)->restoreForCancelledOrder($order->fresh());
        $this->assertSame(7, $product->fresh()->stock_quantity);
    }

    public function test_buyer_cancel_restores_stock(): void
    {
        [$buyer, $profile, $order, $product] = $this->makeOrderWithStock(initialStock: 4, quantity: 1);
        $order->update(['status' => 'pending_payment', 'approved_for_payment' => true]);

        Sanctum::actingAs($buyer);
        $response = $this->postJson("/api/buyer/orders/{$order->id}/cancel", [
            'reason' => 'Ya no lo necesito',
        ]);

        $response->assertStatus(200);
        $this->assertSame(4, $product->fresh()->stock_quantity);
        $this->assertSame('cancelled', $order->fresh()->status);
    }

    public function test_prescription_rejection_restores_stock(): void
    {
        [$buyer, $profile, $order, $product] = $this->makeOrderWithStock(initialStock: 13, quantity: 3);
        $order->update([
            'status' => Order::STATUS_PENDING_PRESCRIPTION,
            'requires_prescription' => true,
        ]);

        $stateMachine = app(OrderStateMachineService::class);
        $stateMachine->applyTransition(
            $order,
            'pharmacist',
            'cancelled',
            $profile->id,
            'prescription_rejection',
            'Receta ilegible'
        );

        $this->assertSame(13, $product->fresh()->stock_quantity);
    }

    /**
     * @return array{0: User, 1: Profile, 2: Order, 3: Product}
     */
    private function makeOrderWithStock(int $initialStock, int $quantity): array
    {
        $buyer = User::factory()->create(['role' => 'users']);
        $profile = Profile::factory()->create(['user_id' => $buyer->id]);
        $commerceUser = User::factory()->create(['role' => 'commerce']);
        $commerceProfile = Profile::factory()->create(['user_id' => $commerceUser->id]);
        $commerce = Commerce::factory()->create([
            'profile_id' => $commerceProfile->id,
            'status' => 'approved',
            'open' => true,
        ]);

        $product = Product::factory()->create([
            'commerce_id' => $commerce->id,
            'stock_quantity' => $initialStock,
            'available' => $initialStock > 0,
        ]);

        $order = Order::create([
            'profile_id' => $profile->id,
            'commerce_id' => $commerce->id,
            'delivery_type' => 'pickup',
            'status' => 'pending_payment',
            'approved_for_payment' => true,
            'total' => $product->price * $quantity,
            'delivery_fee' => 0,
        ]);

        OrderItem::create([
            'order_id' => $order->id,
            'product_id' => $product->id,
            'quantity' => $quantity,
            'unit_price' => $product->price,
        ]);

        $product->decrement('stock_quantity', $quantity);

        return [$buyer, $profile, $order, $product];
    }
}
