<?php

namespace Database\Factories;

use App\Models\MedicineLot;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicineLot>
 */
class MedicineLotFactory extends Factory
{
    protected $model = MedicineLot::class;

    public function definition(): array
    {
        $qty = $this->faker->numberBetween(50, 500);

        return [
            'product_id' => Product::factory(),
            'lot_number' => strtoupper($this->faker->bothify('LOT-####??')),
            'expiry_date' => $this->faker->dateTimeBetween('+3 months', '+24 months'),
            'manufactured_at' => $this->faker->dateTimeBetween('-12 months', '-1 month'),
            'quantity_received' => $qty,
            'quantity_available' => $qty,
            'received_at' => $this->faker->dateTimeBetween('-30 days', 'now'),
            'supplier' => $this->faker->company(),
            'notes' => null,
        ];
    }
}
