<?php

namespace Tests\Feature;

use App\Models\Commerce;
use App\Models\Order;
use App\Models\PharmacistProfile;
use App\Models\Prescription;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class PharmacistDashboardTest extends TestCase
{
    use RefreshDatabase;

    public function test_pharmacist_dashboard_returns_stats_envelope(): void
    {
        [$pharmacistUser, $pharmacistProfile] = $this->makePharmacist();
        $commerce = Commerce::factory()->withProfile()->create([
            'open' => true,
            'status' => 'approved',
            'pharmacist_in_charge_profile_id' => $pharmacistProfile->id,
        ]);
        PharmacistProfile::create([
            'profile_id' => $pharmacistProfile->id,
            'mpps_number' => 'MPPS-dash-'.$pharmacistProfile->id,
            'verified' => true,
        ]);

        Prescription::create([
            'patient_profile_id' => Profile::factory()->create()->id,
            'order_id' => Order::factory()->create([
                'commerce_id' => $commerce->id,
                'profile_id' => Profile::factory()->create()->id,
            ])->id,
            'commerce_id' => $commerce->id,
            'prescribing_doctor_name' => 'Dr. Test',
            'image_url' => 'prescriptions/test.jpg',
            'prescription_type' => Prescription::TYPE_COMMON,
            'status' => Prescription::STATUS_PENDING_VALIDATION,
        ]);

        Sanctum::actingAs($pharmacistUser);
        $response = $this->getJson('/api/pharmacist/dashboard');

        $response->assertStatus(200)
            ->assertJsonPath('success', true)
            ->assertJsonPath('data.license_valid', true)
            ->assertJsonStructure([
                'data' => [
                    'stats' => ['pending', 'today_total', 'today_approved'],
                    'commerces',
                ],
            ]);
        $this->assertSame(1, $response->json('data.stats.pending'));
    }

    public function test_pharmacist_cannot_approve_without_verified_license(): void
    {
        Storage::fake('local');

        [$buyer, $buyerProfile] = $this->makeBuyer();
        [$pharmacistUser, $pharmacistProfile] = $this->makePharmacist();
        $commerce = Commerce::factory()->withProfile()->create([
            'open' => true,
            'status' => 'approved',
            'pharmacist_in_charge_profile_id' => $pharmacistProfile->id,
        ]);
        PharmacistProfile::create([
            'profile_id' => $pharmacistProfile->id,
            'mpps_number' => 'MPPS-unverified',
            'verified' => false,
        ]);

        $order = Order::create([
            'profile_id' => $buyerProfile->id,
            'commerce_id' => $commerce->id,
            'delivery_type' => 'pickup',
            'status' => Order::STATUS_PENDING_PRESCRIPTION,
            'requires_prescription' => true,
            'total' => 25.00,
            'delivery_fee' => 0,
        ]);

        Sanctum::actingAs($buyer);
        $upload = UploadedFile::fake()->image('receta.jpg');
        $response = $this->postJson('/api/buyer/prescriptions', [
            'order_id' => $order->id,
            'prescribing_doctor_name' => 'Dr. Pérez',
            'prescription_type' => Prescription::TYPE_COMMON,
            'image' => $upload,
        ]);
        $prescriptionId = (int) $response->json('data.id');

        Sanctum::actingAs($pharmacistUser);
        $approve = $this->postJson(
            "/api/pharmacist/prescriptions/{$prescriptionId}/approve",
            [],
        );

        $approve->assertStatus(403)
            ->assertJsonPath('success', false)
            ->assertJsonPath('error_code', 'PHARMACIST_LICENSE_INVALID');
    }

    /** @return array{0: User, 1: Profile} */
    private function makeBuyer(): array
    {
        $user = User::factory()->create(['role' => 'users']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);

        return [$user, $profile];
    }

    /** @return array{0: User, 1: Profile} */
    private function makePharmacist(): array
    {
        $user = User::factory()->create(['role' => 'pharmacist']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);

        return [$user, $profile];
    }
}
