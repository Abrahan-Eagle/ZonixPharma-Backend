<?php

namespace Tests\Feature;

use App\Models\Commerce;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class AuthRoleEscalationTest extends TestCase
{
    use RefreshDatabase;

    public function test_register_rejects_delivery_agent_role(): void
    {
        $response = $this->postJson('/api/auth/register', [
            'name' => 'Repartidor',
            'email' => 'delivery@example.com',
            'role' => 'delivery_agent',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['role']);
    }

    public function test_register_rejects_delivery_company_role(): void
    {
        $response = $this->postJson('/api/auth/register', [
            'name' => 'Empresa',
            'email' => 'company@example.com',
            'role' => 'delivery_company',
        ]);

        $response->assertStatus(422)
            ->assertJsonValidationErrors(['role']);
    }

    public function test_onboarding_commerce_role_requires_admin_approval_for_dashboard(): void
    {
        $user = User::factory()->create(['role' => 'users', 'completed_onboarding' => 0]);
        Profile::factory()->create(['user_id' => $user->id]);

        Sanctum::actingAs($user);

        $update = $this->putJson("/api/onboarding/{$user->id}", [
            'completed_onboarding' => true,
            'role' => 'commerce',
        ]);
        $update->assertStatus(200);
        $this->assertSame('commerce', $user->fresh()->role);

        $commerce = Commerce::whereHas('profile', fn ($q) => $q->where('user_id', $user->id))->first();
        $this->assertNotNull($commerce);
        $this->assertSame('pending_review', $commerce->status);

        $dashboard = $this->getJson('/api/commerce/dashboard');
        $dashboard->assertStatus(403);
    }
}
