<?php

namespace Database\Factories;

use App\Models\PharmacistProfile;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PharmacistProfile>
 */
class PharmacistProfileFactory extends Factory
{
    protected $model = PharmacistProfile::class;

    public function definition(): array
    {
        return [
            'profile_id' => Profile::factory(),
            'mpps_number' => $this->faker->numerify('MPPS-######'),
            'college_license_number' => $this->faker->numerify('CMF-######'),
            'license_expires_at' => $this->faker->dateTimeBetween('+6 months', '+3 years'),
            'title_image_url' => null,
            'verified' => true,
            'verified_at' => now(),
            'verified_by_profile_id' => null,
            'notes' => null,
        ];
    }
}
