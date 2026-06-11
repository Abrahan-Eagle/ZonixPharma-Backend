<?php

namespace Tests\Feature\Commerce;

use App\Models\Commerce;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CommerceProductRxTest extends TestCase
{
    use RefreshDatabase;

    public function test_rx_product_requires_prescription_type(): void
    {
        $user = User::factory()->commerce()->create();
        $profile = \App\Models\Profile::factory()->create(['user_id' => $user->id]);
        Commerce::factory()->create([
            'profile_id' => $profile->id,
            'is_primary' => true,
        ]);

        Sanctum::actingAs($user);

        $this->postJson('/api/commerce/products', [
            'name' => 'Ibuprofeno 400mg',
            'description' => 'Antiinflamatorio Rx',
            'price' => 5.50,
            'available' => true,
            'requires_prescription' => true,
        ])
            ->assertStatus(422)
            ->assertJsonValidationErrors(['prescription_type']);
    }

    public function test_rx_product_with_prescription_type_is_created(): void
    {
        $user = User::factory()->commerce()->create();
        $profile = \App\Models\Profile::factory()->create(['user_id' => $user->id]);
        Commerce::factory()->create([
            'profile_id' => $profile->id,
            'is_primary' => true,
        ]);

        Sanctum::actingAs($user);

        $this->postJson('/api/commerce/products', [
            'name' => 'Ibuprofeno 400mg',
            'description' => 'Antiinflamatorio Rx',
            'price' => 5.50,
            'available' => true,
            'requires_prescription' => true,
            'prescription_type' => 'common',
        ])
            ->assertStatus(201)
            ->assertJsonFragment(['name' => 'Ibuprofeno 400mg']);
    }
}
