<?php

namespace App\Events;

use App\Models\Prescription;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

/**
 * Se emite cuando el farmacéutico rechaza la receta.
 * El pedido se cancela.
 */
class PrescriptionRejected implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public Prescription $prescription;

    private string $eventId;

    private string $occurredAt;

    public function __construct(Prescription $prescription)
    {
        $this->prescription = $prescription;
        $this->eventId = (string) Str::uuid();
        $this->occurredAt = now()->toISOString();
    }

    public function broadcastOn(): array
    {
        $this->prescription->loadMissing('patient');
        $userId = $this->prescription->patient?->user_id;

        $channels = [];
        if ($this->prescription->order_id) {
            $channels[] = new PrivateChannel('orders.'.$this->prescription->order_id);
        }
        if ($userId) {
            $channels[] = new PrivateChannel('user.'.$userId);
        }
        if ($this->prescription->commerce_id) {
            $channels[] = new PrivateChannel('commerce.'.$this->prescription->commerce_id);
        }

        return $channels;
    }

    public function broadcastWith(): array
    {
        return [
            'event_id' => $this->eventId,
            'schema_version' => 'v1',
            'occurred_at' => $this->occurredAt,
            'prescription_id' => $this->prescription->id,
            'order_id' => $this->prescription->order_id,
            'commerce_id' => $this->prescription->commerce_id,
            'status' => $this->prescription->status,
            'rejection_reason' => $this->prescription->rejection_reason,
        ];
    }

    public function broadcastAs(): string
    {
        return 'PrescriptionRejected';
    }
}
