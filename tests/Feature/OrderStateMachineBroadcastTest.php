<?php

namespace Tests\Feature;

use App\Events\OrderStatusChanged;
use App\Models\Order;
use App\Services\OrderStateMachineService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Event;
use Tests\TestCase;

class OrderStateMachineBroadcastTest extends TestCase
{
    use RefreshDatabase;

    public function test_apply_transition_dispatches_order_status_changed_when_status_changes(): void
    {
        Event::fake([OrderStatusChanged::class]);

        $order = Order::factory()->create([
            'status' => 'pending_payment',
            'approved_for_payment' => true,
        ]);

        $profileId = $order->commerce->profile_id;
        $svc = app(OrderStateMachineService::class);
        $decision = $svc->applyTransition(
            $order->fresh(),
            'commerce',
            'paid',
            $profileId,
            'test',
            'unit'
        );

        $this->assertTrue($decision['allowed'] ?? false);
        Event::assertDispatched(OrderStatusChanged::class);
    }

    public function test_apply_transition_does_not_dispatch_when_idempotent(): void
    {
        Event::fake([OrderStatusChanged::class]);

        $order = Order::factory()->create([
            'status' => 'paid',
            'approved_for_payment' => true,
        ]);

        $profileId = $order->commerce->profile_id;
        $svc = app(OrderStateMachineService::class);
        $svc->applyTransition(
            $order->fresh(),
            'commerce',
            'paid',
            $profileId,
            'test',
            'unit'
        );

        Event::assertNotDispatched(OrderStatusChanged::class);
    }
}
