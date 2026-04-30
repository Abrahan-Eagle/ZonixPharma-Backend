<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Cobertura del catálogo público de farmacias (canónico Zonix Pharma).
 * Espeja el contrato de RestaurantControllerTest sobre `/api/buyer/pharmacies`.
 */
class PharmacyControllerTest extends TestCase
{
    use RefreshDatabase;

    private function actingAsBuyer(): void
    {
        $user = \App\Models\User::factory()->create(['role' => 'users']);
        \Laravel\Sanctum\Sanctum::actingAs($user);
    }

    public function test_can_list_pharmacies(): void
    {
        $this->actingAsBuyer();
        \App\Models\Commerce::factory()->withProfile()->count(3)->create([
            'open' => true,
            'status' => 'approved',
        ]);

        $response = $this->getJson('/api/buyer/pharmacies');
        $response->assertStatus(200)
            ->assertJsonPath('success', true)
            ->assertJsonStructure([
                'success',
                'data' => [
                    'items',
                    'pharmacies',
                    'restaurants',
                    'data',
                    'pagination' => ['current_page', 'per_page', 'total', 'last_page'],
                ],
                'message',
            ]);
    }

    public function test_can_show_pharmacy_details(): void
    {
        $this->actingAsBuyer();
        $commerce = \App\Models\Commerce::factory()->withProfile()->create([
            'open' => true,
            'status' => 'approved',
        ]);

        $response = $this->getJson("/api/buyer/pharmacies/{$commerce->id}");
        $response->assertStatus(200)
            ->assertJsonPath('success', true)
            ->assertJsonPath('data.id', $commerce->id);
    }

    public function test_show_pharmacy_not_found_returns_404(): void
    {
        $this->actingAsBuyer();
        $response = $this->getJson('/api/buyer/pharmacies/999');
        $response->assertStatus(404)->assertJsonPath('success', false);
    }
}
