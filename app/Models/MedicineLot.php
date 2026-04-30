<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Lote de medicamento. Permite trazabilidad y despacho FIFO por
 * fecha de vencimiento.
 */
class MedicineLot extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_id',
        'lot_number',
        'expiry_date',
        'manufactured_at',
        'quantity_received',
        'quantity_available',
        'received_at',
        'supplier',
        'notes',
    ];

    protected $casts = [
        'expiry_date' => 'date',
        'manufactured_at' => 'date',
        'received_at' => 'date',
        'quantity_received' => 'integer',
        'quantity_available' => 'integer',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function isExpired(): bool
    {
        return $this->expiry_date !== null && $this->expiry_date->isPast();
    }

    public function isExpiringSoon(int $days = 60): bool
    {
        if ($this->expiry_date === null) {
            return false;
        }
        return $this->expiry_date->lte(now()->addDays($days));
    }
}
