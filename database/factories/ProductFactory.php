<?php

namespace Database\Factories;

use App\Models\Commerce;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Factory de Product (medicamento / producto de farmacia).
 *
 * Por default crea OTC sin Rx, sin cadena de frío y sin sustancia
 * controlada. Tests que necesiten Rx pueden encadenar `->state(fn() => [
 *   'requires_prescription' => true,
 *   'prescription_type' => 'common',
 * ])`.
 *
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        // Imágenes ilustrativas neutras (placeholders). En producción
        // cada farmacia subirá la foto real del producto. Las URLs
        // vienen de Unsplash (banco libre) con keywords farmacéuticas.
        $pharmaImages = [
            'https://images.unsplash.com/photo-1587854692152-cbe660dbde88?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1576091160550-2173dba999ef?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1587854680352-936b22b91030?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1631549916768-4119b2e5f926?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1584308666744-24d5c474f2ae?auto=format&fit=crop&w=600&q=80',
            'https://images.unsplash.com/photo-1559757175-08d6f6c4e3a4?auto=format&fit=crop&w=600&q=80',
        ];

        $dosageForms = [
            'tablet', 'capsule', 'syrup', 'suspension', 'cream', 'drops',
            'solution', 'spray', 'ointment',
        ];

        $activeIngredients = [
            'paracetamol', 'ibuprofeno', 'acetaminofén', 'amoxicilina',
            'loratadina', 'omeprazol', 'metformina', 'losartán',
            'azitromicina', 'cetirizina', 'salbutamol', 'vitamina C',
            'multivitamínico', 'sulfato ferroso',
        ];

        $manufacturers = [
            'Laboratorios Vargas', 'Genven', 'Calox', 'Elmor',
            'Behrens', 'Belfar', 'Drogueria Nena',
        ];

        $testing = app()->environment('testing');

        return [
            'commerce_id' => Commerce::factory(),
            'category_id' => \App\Models\Category::inRandomOrder()->first()?->id,
            'name' => ucfirst($this->faker->word()).' '.$this->faker->numberBetween(100, 1000).'mg',
            'description' => $this->faker->paragraph(),
            'price' => $this->faker->randomFloat(2, 1.5, 60),
            'image' => $this->faker->randomElement($pharmaImages),
            // En testing: disponible y con stock para evitar flakes en buyer/cart.
            'available' => $testing ? true : $this->faker->boolean(85),
            'stock_quantity' => $testing
                ? 100
                : $this->faker->optional(0.7)->numberBetween(0, 100),
            'active_ingredient' => $this->faker->randomElement($activeIngredients),
            'dosage_form' => $this->faker->randomElement($dosageForms),
            'concentration' => $this->faker->numberBetween(50, 1000).'mg',
            'presentation' => 'Caja x '.$this->faker->numberBetween(10, 30).' unidades',
            'manufacturer' => $this->faker->randomElement($manufacturers),
            'health_registry' => 'E.F. '.$this->faker->numberBetween(10000, 99999),
            'requires_prescription' => false,
            'prescription_type' => null,
            'controlled_substance' => false,
            'cold_chain' => false,
        ];
    }

    /**
     * State: medicamento Rx común (antibiótico, antihipertensivo, etc.).
     */
    public function rx(): self
    {
        return $this->state(fn () => [
            'requires_prescription' => true,
            'prescription_type' => 'common',
        ]);
    }

    /**
     * State: medicamento controlado (psicotrópico/opioide). Receta retenida.
     */
    public function controlled(): self
    {
        return $this->state(fn () => [
            'requires_prescription' => true,
            'prescription_type' => 'retained',
            'controlled_substance' => true,
        ]);
    }

    /**
     * State: producto que requiere cadena de frío (insulina, vacunas, biológicos).
     */
    public function coldChain(): self
    {
        return $this->state(fn () => [
            'cold_chain' => true,
            'requires_prescription' => true,
            'prescription_type' => 'common',
        ]);
    }

    public function withCommerce()
    {
        return $this->afterCreating(function (Product $product) {
            $commerce = Commerce::factory()->create();
            $product->update(['commerce_id' => $commerce->id]);
        });
    }
}
