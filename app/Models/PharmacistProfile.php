<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Datos colegiados del farmacéutico responsable. Asociado 1:1 con un
 * `Profile` cuyo rol es `pharmacist`.
 */
class PharmacistProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'profile_id',
        'mpps_number',
        'college_license_number',
        'license_expires_at',
        'title_image_url',
        'verified',
        'verified_at',
        'verified_by_profile_id',
        'notes',
    ];

    protected $casts = [
        'license_expires_at' => 'date',
        'verified_at' => 'datetime',
        'verified' => 'boolean',
    ];

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function commercesInCharge()
    {
        return $this->hasMany(Commerce::class, 'pharmacist_in_charge_profile_id', 'profile_id');
    }

    public function isLicenseValid(): bool
    {
        if (! $this->verified) {
            return false;
        }
        if ($this->license_expires_at === null) {
            return true;
        }
        return $this->license_expires_at->isFuture();
    }
}
