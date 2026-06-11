<?php

namespace Tests\Feature\Commerce;

use App\Models\Commerce;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class CommerceMultiSedeTest extends TestCase
{
    use RefreshDatabase;

    /** @return array{user: User, profile: Profile, primary: Commerce, secondary: Commerce} */
    private function createMultiSedeUser(): array
    {
        $user = User::factory()->create(['role' => 'commerce']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);
        $primary = Commerce::factory()->create([
            'profile_id' => $profile->id,
            'is_primary' => true,
            'status' => 'approved',
            'business_name' => 'Farmacia Principal',
        ]);
        $secondary = Commerce::factory()->create([
            'profile_id' => $profile->id,
            'is_primary' => false,
            'status' => 'approved',
            'business_name' => 'Farmacia Secundaria',
        ]);

        return compact('user', 'profile', 'primary', 'secondary');
    }

    public function test_products_scoped_by_x_commerce_id_header(): void
    {
        ['user' => $user, 'primary' => $primary, 'secondary' => $secondary] = $this->createMultiSedeUser();

        Product::factory()->create([
            'commerce_id' => $primary->id,
            'name' => 'Producto Sede A',
        ]);
        Product::factory()->create([
            'commerce_id' => $secondary->id,
            'name' => 'Producto Sede B',
        ]);

        Sanctum::actingAs($user);

        $this->getJson('/api/commerce/products', [
            'X-Commerce-Id' => (string) $primary->id,
        ])
            ->assertOk()
            ->assertJsonPath('success', true)
            ->assertJsonCount(1, 'data')
            ->assertJsonFragment(['name' => 'Producto Sede A']);

        $this->getJson('/api/commerce/products', [
            'X-Commerce-Id' => (string) $secondary->id,
        ])
            ->assertOk()
            ->assertJsonPath('success', true)
            ->assertJsonCount(1, 'data')
            ->assertJsonFragment(['name' => 'Producto Sede B']);
    }

    public function test_without_header_uses_primary_commerce(): void
    {
        ['user' => $user, 'primary' => $primary, 'secondary' => $secondary] = $this->createMultiSedeUser();

        Product::factory()->create([
            'commerce_id' => $primary->id,
            'name' => 'Solo Principal',
        ]);
        Product::factory()->create([
            'commerce_id' => $secondary->id,
            'name' => 'Solo Secundaria',
        ]);

        Sanctum::actingAs($user);

        $this->getJson('/api/commerce/products')
            ->assertOk()
            ->assertJsonCount(1, 'data')
            ->assertJsonFragment(['name' => 'Solo Principal']);
    }

    public function test_foreign_commerce_id_returns_403(): void
    {
        ['user' => $user, 'primary' => $primary] = $this->createMultiSedeUser();

        $otherUser = User::factory()->create(['role' => 'commerce']);
        $otherProfile = Profile::factory()->create(['user_id' => $otherUser->id]);
        $foreignCommerce = Commerce::factory()->create([
            'profile_id' => $otherProfile->id,
            'is_primary' => true,
            'status' => 'approved',
        ]);

        Product::factory()->create([
            'commerce_id' => $primary->id,
            'name' => 'Producto Propio',
        ]);

        Sanctum::actingAs($user);

        $this->getJson('/api/commerce/products', [
            'X-Commerce-Id' => (string) $foreignCommerce->id,
        ])
            ->assertStatus(403)
            ->assertJsonPath('success', false);
    }

    public function test_set_primary_changes_default_scope(): void
    {
        ['user' => $user, 'primary' => $primary, 'secondary' => $secondary] = $this->createMultiSedeUser();

        Product::factory()->create([
            'commerce_id' => $primary->id,
            'name' => 'En A',
        ]);
        Product::factory()->create([
            'commerce_id' => $secondary->id,
            'name' => 'En B',
        ]);

        Sanctum::actingAs($user);

        $this->putJson("/api/commerce/commerces/{$secondary->id}/set-primary")
            ->assertOk()
            ->assertJsonPath('success', true);

        $this->getJson('/api/commerce/products')
            ->assertOk()
            ->assertJsonCount(1, 'data')
            ->assertJsonFragment(['name' => 'En B']);
    }
}
