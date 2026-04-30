<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Producto de farmacia / medicamento (Zonix Pharma).
 *
 * Conceptualmente es un Medicine; mantiene la clase `Product` por
 * compatibilidad con los servicios y controllers existentes.
 */
class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'commerce_id',
        'category_id',
        'name',
        'description',
        'price',
        'image',
        'available',
        'stock_quantity',
        // Identificación farmacéutica
        'active_ingredient',
        'dosage_form',
        'concentration',
        'presentation',
        'manufacturer',
        // Regulación / trazabilidad
        'health_registry',
        'barcode',
        'atc_code',
        // Reglas Rx / cadena de frío
        'requires_prescription',
        'prescription_type',
        'controlled_substance',
        'cold_chain',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'available' => 'boolean',
        'stock_quantity' => 'integer',
        'requires_prescription' => 'boolean',
        'controlled_substance' => 'boolean',
        'cold_chain' => 'boolean',
    ];

    public function commerce()
    {
        return $this->belongsTo(Commerce::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function orderItems()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class, 'order_items');
    }

    /**
     * Lotes con fecha de vencimiento. El despacho FIFO los consume
     * por `expiry_date` ascendente entre los que tienen
     * `quantity_available > 0`.
     */
    public function lots()
    {
        return $this->hasMany(MedicineLot::class)->orderBy('expiry_date');
    }

    /**
     * Lotes activos (con cantidad disponible y no vencidos).
     */
    public function activeLots()
    {
        return $this->hasMany(MedicineLot::class)
            ->where('quantity_available', '>', 0)
            ->where('expiry_date', '>=', now()->toDateString())
            ->orderBy('expiry_date');
    }

    public function isPrescriptionRequired(): bool
    {
        return (bool) ($this->requires_prescription ?? false);
    }

    public function isControlled(): bool
    {
        return (bool) ($this->controlled_substance ?? false);
    }

    public function requiresColdChain(): bool
    {
        return (bool) ($this->cold_chain ?? false);
    }
}
