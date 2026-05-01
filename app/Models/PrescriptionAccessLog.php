<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PrescriptionAccessLog extends Model
{
    protected $fillable = [
        'prescription_id',
        'actor_profile_id',
        'actor_role',
        'action',
        'ip_address',
        'user_agent',
        'meta',
    ];

    protected $casts = [
        'meta' => 'array',
    ];

    public function prescription(): BelongsTo
    {
        return $this->belongsTo(Prescription::class);
    }

    public function actorProfile(): BelongsTo
    {
        return $this->belongsTo(Profile::class, 'actor_profile_id');
    }
}
