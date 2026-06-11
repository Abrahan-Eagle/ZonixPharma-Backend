<?php

namespace Tests\Feature\Commerce;

use App\Models\Commerce;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class EnsureCommerceApprovedTest extends TestCase
{
    use RefreshDatabase;

    public function test_pending_commerce_cannot_list_orders_but_can_read_profile(): void
    {
        $user = User::factory()->create(['role' => 'commerce']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);
        Commerce::factory()->create([
            'profile_id' => $profile->id,
            'is_primary' => true,
            'status' => 'pending_review',
            'open' => true,
        ]);

        Sanctum::actingAs($user);

        $this->getJson('/api/commerce/orders')
            ->assertStatus(403)
            ->assertJson([
                'success' => false,
                'error_code' => 'COMMERCE_PENDING_APPROVAL',
            ]);

        $this->getJson('/api/commerce')
            ->assertStatus(200)
            ->assertJson(['success' => true]);
    }
}
