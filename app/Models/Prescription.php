<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Receta médica adjunta a un pedido cuando hay productos Rx.
 * Validada por un farmacéutico colegiado (rol `pharmacist`) de la
 * farmacia despachadora.
 */
class Prescription extends Model
{
    use HasFactory;

    public const STATUS_PENDING_VALIDATION = 'pending_validation';
    public const STATUS_APPROVED = 'approved';
    public const STATUS_REJECTED = 'rejected';
    public const STATUS_EXPIRED = 'expired';

    public const TYPE_COMMON = 'common';
    public const TYPE_RETAINED = 'retained';
    public const TYPE_SPECIAL = 'special';

    protected $fillable = [
        'patient_profile_id',
        'order_id',
        'commerce_id',
        'prescribing_doctor_name',
        'prescribing_doctor_license',
        'prescribing_doctor_specialty',
        'issued_at',
        'image_url',
        'prescription_type',
        'status',
        'validated_by_profile_id',
        'validated_at',
        'rejection_reason',
        'expires_at',
    ];

    protected $casts = [
        'issued_at' => 'date',
        'validated_at' => 'datetime',
        'expires_at' => 'datetime',
    ];

    public function patient()
    {
        return $this->belongsTo(Profile::class, 'patient_profile_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function commerce()
    {
        return $this->belongsTo(Commerce::class);
    }

    public function validator()
    {
        return $this->belongsTo(Profile::class, 'validated_by_profile_id');
    }

    public function isPending(): bool
    {
        return $this->status === self::STATUS_PENDING_VALIDATION;
    }

    public function isApproved(): bool
    {
        return $this->status === self::STATUS_APPROVED;
    }

    public function isRejected(): bool
    {
        return $this->status === self::STATUS_REJECTED;
    }

    public function isExpired(): bool
    {
        return $this->status === self::STATUS_EXPIRED
            || ($this->expires_at !== null && $this->expires_at->isPast());
    }

    public function scopePending($query)
    {
        return $query->where('status', self::STATUS_PENDING_VALIDATION);
    }

    public function scopeForCommerce($query, int $commerceId)
    {
        return $query->where('commerce_id', $commerceId);
    }
}
