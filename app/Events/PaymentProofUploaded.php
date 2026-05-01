<?php

namespace App\Events;

use App\Models\Order;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

/**
 * El comprador subió comprobante de pago (comercio o envío) sin cambiar
 * el estado de la orden. Evita emitir OrderStatusChanged duplicado cuando
 * el estado sigue en pending_payment.
 */
class PaymentProofUploaded implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Order $order;

    public string $paymentType;

    private string $eventId;

    private string $occurredAt;

    public function __construct(Order $order, string $paymentType)
    {
        $this->order = $order;
        $this->paymentType = $paymentType;
        $this->eventId = (string) Str::uuid();
        $this->occurredAt = now()->toIso8601String();
    }

    public function broadcastOn(): array
    {
        $channels = [
            new PrivateChannel('orders.'.$this->order->id),
        ];
        if ($this->order->commerce_id) {
            $channels[] = new PrivateChannel('commerce.'.$this->order->commerce_id);
        }

        return $channels;
    }

    public function broadcastAs(): string
    {
        return 'PaymentProofUploaded';
    }

    public function broadcastWith(): array
    {
        return [
            'event_id' => $this->eventId,
            'schema_version' => 'v1',
            'occurred_at' => $this->occurredAt,
            'order_id' => $this->order->id,
            'order_number' => $this->order->order_number,
            'status' => $this->order->status,
            'payment_type' => $this->paymentType,
        ];
    }
}
