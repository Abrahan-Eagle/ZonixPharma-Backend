<?php

namespace App\Services;

use App\Models\Order;
use Illuminate\Support\Facades\Log;

/**
 * Reposición idempotente de stock al cancelar pedidos.
 */
class OrderStockService
{
    /**
     * Repone inventario de los ítems del pedido una sola vez.
     *
     * @return bool true si se repuso stock en esta llamada
     */
    public function restoreForCancelledOrder(Order $order): bool
    {
        if ($order->stock_restocked_at !== null) {
            return false;
        }

        $order->loadMissing('orderItems.product');

        foreach ($order->orderItems as $item) {
            $product = $item->product;
            if ($product && $product->stock_quantity !== null) {
                $product->increment('stock_quantity', $item->quantity);
                if ($product->stock_quantity > 0 && ! $product->available) {
                    $product->update(['available' => true]);
                }
            }
        }

        $order->update(['stock_restocked_at' => now()]);

        Log::info('order_stock_restored', [
            'order_id' => $order->id,
            'items_count' => $order->orderItems->count(),
        ]);

        return true;
    }
}
