<?php

namespace Database\Factories;

use App\Models\Commerce;
use App\Models\Profile;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Commerce>
 */
class CommerceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $pharmacyImages = [
            'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?w=500&h=300&fit=crop',
            'https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?w=500&h=300&fit=crop',
            'https://images.unsplash.com/photo-1584308666744-24d5c474f87a?w=500&h=300&fit=crop',
            'https://images.unsplash.com/photo-1582719471384-894fbb16e074?w=500&h=300&fit=crop',
        ];

        $membershipType = $this->faker->randomElement(['basic', 'premium', 'enterprise']);
        $membershipFees = ['basic' => 50, 'premium' => 100, 'enterprise' => 200];
        $testing = app()->environment('testing');

        return [
            'profile_id' => Profile::factory(),
            'is_primary' => true,
            'business_name' => $this->faker->company,
            'business_type' => $this->faker->randomElement([
                'pharmacy', 'drogueria', 'botica', 'cadena_farmacia', 'optica_farmacia',
            ]),
            'tax_id' => $this->faker->numerify('J-########-#'),
            'image' => $this->faker->randomElement($pharmacyImages),
            'address' => $this->faker->address,
            // En testing: abierto por defecto (listados buyer, pedidos). Tests de cerrado pasan open => false.
            'open' => $testing ? true : $this->faker->boolean(70),
            'schedule' => [
                'monday' => ['open' => '08:00', 'close' => '18:00'],
                'tuesday' => ['open' => '08:00', 'close' => '18:00'],
                'wednesday' => ['open' => '08:00', 'close' => '18:00'],
                'thursday' => ['open' => '08:00', 'close' => '18:00'],
                'friday' => ['open' => '08:00', 'close' => '18:00'],
                'saturday' => ['open' => '09:00', 'close' => '16:00'],
                'sunday' => ['open' => '10:00', 'close' => '15:00'],
            ],
            'membership_type' => $membershipType,
            'membership_monthly_fee' => $membershipFees[$membershipType],
            'membership_expires_at' => $this->faker->dateTimeBetween('now', '+1 year'),
            'commission_percentage' => $this->faker->randomFloat(2, 5, 15), // 5% a 15%
            'cancellation_count' => $this->faker->numberBetween(0, 5),
            'last_cancellation_date' => $this->faker->optional(0.3)->dateTimeBetween('-6 months', 'now'),
            'status' => 'approved',
            'pharmacist_in_charge_profile_id' => null,
            'health_permit_number' => $this->faker->optional(0.6)->numerify('PS-######'),
            'health_permit_expires_at' => $this->faker->optional(0.6)->dateTimeBetween('+6 months', '+3 years'),
        ];
    }

    /**
     * Indicate that the commerce should be created with a profile.
     */
    public function withProfile()
    {
        return $this->afterCreating(function (Commerce $commerce) {
            $profile = Profile::factory()->create();
            $commerce->update(['profile_id' => $profile->id]);
        });
    }
}
