<?php

namespace Tests\Feature;

use App\Models\PharmacistProfile;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class PharmacistOnboardingTest extends TestCase
{
    use RefreshDatabase;

    public function test_pharmacist_can_view_onboarding_status(): void
    {
        [$user, $profile] = $this->makePharmacist();
        PharmacistProfile::create([
            'profile_id' => $profile->id,
            'mpps_number' => 'MPPS-100',
            'verified' => false,
        ]);

        Sanctum::actingAs($user);
        $response = $this->getJson('/api/pharmacist/onboarding');

        $response->assertStatus(200)
            ->assertJsonPath('success', true)
            ->assertJsonPath('data.license_valid', false)
            ->assertJsonPath('data.pharmacist.mpps_number', 'MPPS-100');
    }

    public function test_pharmacist_can_submit_onboarding_profile(): void
    {
        Storage::fake('local');
        [$user, $profile] = $this->makePharmacist();

        Sanctum::actingAs($user);
        $response = $this->postJson('/api/pharmacist/onboarding', [
            'mpps_number' => 'MPPS-NEW-1',
            'college_license_number' => 'COL-99',
            'license_expires_at' => now()->addYear()->toDateString(),
            'notes' => 'Registro piloto',
        ]);

        $response->assertStatus(200)
            ->assertJsonPath('success', true)
            ->assertJsonPath('data.mpps_number', 'MPPS-NEW-1')
            ->assertJsonPath('data.verified', false);

        $this->assertDatabaseHas('pharmacist_profiles', [
            'profile_id' => $profile->id,
            'mpps_number' => 'MPPS-NEW-1',
            'verified' => false,
        ]);
    }

    public function test_pharmacist_onboarding_accepts_title_image(): void
    {
        Storage::fake('local');
        [$user] = $this->makePharmacist();

        Sanctum::actingAs($user);
        $response = $this->post('/api/pharmacist/onboarding', [
            'mpps_number' => 'MPPS-IMG',
            'license_expires_at' => now()->addMonths(6)->toDateString(),
            'title_image' => UploadedFile::fake()->image('titulo.jpg'),
        ], ['Accept' => 'application/json']);

        $response->assertStatus(200)
            ->assertJsonPath('success', true);
        $this->assertNotNull($response->json('data.title_image_url'));
    }

    public function test_non_pharmacist_cannot_submit_onboarding(): void
    {
        $user = User::factory()->create(['role' => 'users']);
        Profile::factory()->create(['user_id' => $user->id]);
        Sanctum::actingAs($user);

        $this->postJson('/api/pharmacist/onboarding', [
            'mpps_number' => 'MPPS-X',
            'license_expires_at' => now()->addYear()->toDateString(),
        ])->assertStatus(403);
    }

    public function test_verified_preserved_when_updating_notes_only(): void
    {
        [$user, $profile] = $this->makePharmacist();
        PharmacistProfile::create([
            'profile_id' => $profile->id,
            'mpps_number' => 'MPPS-KEEP',
            'college_license_number' => 'COL-1',
            'verified' => true,
        ]);

        Sanctum::actingAs($user);
        $response = $this->postJson('/api/pharmacist/onboarding', [
            'mpps_number' => 'MPPS-KEEP',
            'college_license_number' => 'COL-1',
            'license_expires_at' => now()->addYear()->toDateString(),
            'notes' => 'Actualización menor',
        ]);

        $response->assertStatus(200)->assertJsonPath('success', true);
        $this->assertDatabaseHas('pharmacist_profiles', [
            'profile_id' => $profile->id,
            'verified' => true,
            'notes' => 'Actualización menor',
        ]);
    }

    /** @return array{0: User, 1: Profile} */
    private function makePharmacist(): array
    {
        $user = User::factory()->create(['role' => 'pharmacist']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);

        return [$user, $profile];
    }
}
