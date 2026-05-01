<?php

namespace App\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Str;

class DeliveryLocationUpdated implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public string|int|null $orderId;

    public string|int $deliveryAgentId;

    public string|int|null $companyId;

    public float|int|string $latitude;

    public float|int|string $longitude;

    public ?string $estimatedArrival;

    private string $eventId;

    private string $occurredAt;

    public function __construct(string|int|null $orderId, string|int $deliveryAgentId, float|int|string $latitude, float|int|string $longitude, ?string $estimatedArrival = null, string|int|null $companyId = null)
    {
        $this->orderId = $orderId;
        $this->deliveryAgentId = $deliveryAgentId;
        $this->latitude = $latitude;
        $this->longitude = $longitude;
        $this->estimatedArrival = $estimatedArrival;
        $this->companyId = $companyId;
        $this->eventId = (string) Str::uuid();
        $this->occurredAt = now()->toISOString();
    }

    public function broadcastOn(): array
    {
        $channels = [
            new PrivateChannel('delivery.'.$this->deliveryAgentId),
        ];

        if ($this->orderId) {
            $channels[] = new PrivateChannel('orders.'.$this->orderId);
        }

        if ($this->companyId) {
            $channels[] = new PrivateChannel('company.'.$this->companyId);
        }

        return $channels;
    }

    /**
     * Get the data to broadcast.
     */
    public function broadcastWith(): array
    {
        return [
            'event_id' => $this->eventId,
            'schema_version' => 'v1',
            'occurred_at' => $this->occurredAt,
            'order_id' => $this->orderId,
            'delivery_agent_id' => $this->deliveryAgentId,
            'location' => [
                'latitude' => $this->latitude,
                'longitude' => $this->longitude,
            ],
            'estimated_arrival' => $this->estimatedArrival,
            'timestamp' => $this->occurredAt,
        ];
    }

    /**
     * The event's broadcast name.
     */
    public function broadcastAs(): string
    {
        return 'DeliveryLocationUpdated';
    }
}
