<?php

namespace App\Services;

use App\Models\Commerce;
use App\Models\DeliveryAgent;
use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class OrderService
{
    public function __construct(
        private readonly OrderStateMachineService $stateMachine,
    ) {}

    /**
     * Obtener las órdenes del comprador autenticado.
     *
     * @param  int  $perPage
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function getUserOrders($perPage = 15)
    {
        $user = Auth::user();
        $profile = $user->profile;

        if (! $profile) {
            return collect();
        }

        return Order::where('profile_id', $profile->id)
            ->orderBy('created_at', 'desc')
            ->with('commerce', 'products', 'orderPayments')
            ->withCount([
                'reviews as restaurant_review_count' => function ($query) {
                    $query->where('reviewable_type', Commerce::class);
                },
                'reviews as delivery_review_count' => function ($query) {
                    $query->where('reviewable_type', DeliveryAgent::class);
                },
            ])
            ->paginate($perPage);
    }

    /**
     * Obtener detalles de una orden específica del comprador.
     *
     * @param  int  $orderId
     * @param  int  $userId
     * @return \App\Models\Order|null
     */
    public function getOrderDetails(string|int $orderId, string|int $userId)
    {
        $user = \App\Models\User::with('profile')->find($userId);
        $profile = $user ? $user->profile : null;

        if (! $profile) {
            return null;
        }

        return Order::where('profile_id', $profile->id)
            ->where('id', $orderId)
            ->with(['products', 'commerce', 'orderPayments'])
            ->withCount([
                'reviews as restaurant_review_count' => function ($query) {
                    $query->where('reviewable_type', Commerce::class);
                },
                'reviews as delivery_review_count' => function ($query) {
                    $query->where('reviewable_type', DeliveryAgent::class);
                },
            ])
            ->first();
    }

    /**
     * Cancelar una orden pendiente del comprador vía máquina de estados (restock incluido).
     *
     * @param  int  $orderId
     * @param  int  $userId
     * @return true|string True si se cancela, mensaje de error si no.
     */
    public function cancelOrder(string|int $orderId, string|int $userId, ?string $reason = null)
    {
        $user = \App\Models\User::find($userId);
        $profile = $user ? $user->profile : null;

        if (! $profile) {
            return 'Usuario sin perfil';
        }

        $order = Order::where('profile_id', $profile->id)->find($orderId);
        if (! $order) {
            return 'Orden no encontrada';
        }

        $cancellable = [Order::STATUS_PENDING_PAYMENT, Order::STATUS_PENDING_PRESCRIPTION];
        if (! in_array($order->status, $cancellable, true)) {
            return 'No se puede cancelar esta orden';
        }

        if ($order->status === Order::STATUS_PENDING_PAYMENT) {
            $timeLimit = $order->created_at->addMinutes(5);
            if (now()->greaterThan($timeLimit)) {
                return 'El tiempo límite para cancelar esta orden ha expirado (5 minutos)';
            }
        }

        try {
            DB::transaction(function () use ($order, $profile, $reason) {
                $decision = $this->stateMachine->applyTransition(
                    $order,
                    'buyer',
                    Order::STATUS_CANCELLED,
                    $profile->id,
                    'order_service_cancel',
                    $reason ?? 'Customer requested cancellation',
                );

                if (! ($decision['allowed'] ?? false)) {
                    throw new \RuntimeException($decision['message'] ?? 'No se puede cancelar esta orden');
                }

                $order->update([
                    'cancellation_reason' => $reason ?? 'Customer requested cancellation',
                ]);
            });
        } catch (\RuntimeException $e) {
            return $e->getMessage();
        }

        return true;
    }
}
