<?php

namespace Database\Factories;

use App\Models\Prescription;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescription>
 */
class PrescriptionFactory extends Factory
{
    protected $model = Prescription::class;

    public function definition(): array
    {
        return [
            'patient_profile_id' => Profile::factory(),
            'order_id' => null,
            'commerce_id' => null,
            'prescribing_doctor_name' => $this->faker->name(),
            'prescribing_doctor_license' => $this->faker->numerify('########'),
            'prescribing_doctor_specialty' => $this->faker->randomElement(['Medicina general', 'Cardiología', 'Pediatría']),
            'issued_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
            'image_url' => 'secure:prescriptions/test-'.$this->faker->uuid().'.enc',
            'prescription_type' => Prescription::TYPE_COMMON,
            'status' => Prescription::STATUS_PENDING_VALIDATION,
            'validated_by_profile_id' => null,
            'validated_at' => null,
            'rejection_reason' => null,
            'expires_at' => now()->addHour(),
        ];
    }

    public function approved(): static
    {
        return $this->state(fn (array $attributes) => [
            'status' => Prescription::STATUS_APPROVED,
            'validated_at' => now(),
        ]);
    }
}
