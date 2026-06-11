<?php

namespace Tests\Feature;

use App\Models\Commerce;
use App\Models\Order;
use App\Models\PharmacistProfile;
use App\Models\Prescription;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class PharmacistPrescriptionHistoryTest extends TestCase
{
    use RefreshDatabase;

    public function test_pharmacist_history_lists_processed_prescriptions_only(): void
    {
        [$pharmacistUser, $pharmacistProfile] = $this->makePharmacist();
        $commerce = Commerce::factory()->withProfile()->create([
            'open' => true,
            'status' => 'approved',
            'pharmacist_in_charge_profile_id' => $pharmacistProfile->id,
        ]);
        PharmacistProfile::create([
            'profile_id' => $pharmacistProfile->id,
            'mpps_number' => 'MPPS-hist-'.$pharmacistProfile->id,
            'verified' => true,
        ]);

        $patientProfile = Profile::factory()->create();
        $order = Order::factory()->create([
            'profile_id' => $patientProfile->id,
            'commerce_id' => $commerce->id,
        ]);

        Prescription::create([
            'patient_profile_id' => $patientProfile->id,
            'order_id' => $order->id,
            'commerce_id' => $commerce->id,
            'prescribing_doctor_name' => 'Dr. Pending',
            'image_url' => 'prescriptions/pending.jpg',
            'prescription_type' => Prescription::TYPE_COMMON,
            'status' => Prescription::STATUS_PENDING_VALIDATION,
        ]);

        $approved = Prescription::create([
            'patient_profile_id' => $patientProfile->id,
            'order_id' => $order->id,
            'commerce_id' => $commerce->id,
            'prescribing_doctor_name' => 'Dr. OK',
            'image_url' => 'prescriptions/ok.jpg',
            'prescription_type' => Prescription::TYPE_COMMON,
            'status' => Prescription::STATUS_APPROVED,
            'validated_by_profile_id' => $pharmacistProfile->id,
            'validated_at' => now(),
        ]);

        Sanctum::actingAs($pharmacistUser);
        $response = $this->getJson('/api/pharmacist/prescriptions/history');

        $response->assertStatus(200)
            ->assertJsonPath('success', true);
        $ids = collect($response->json('data'))->pluck('id')->all();
        $this->assertContains($approved->id, $ids);
        $this->assertCount(1, $ids);
    }

    public function test_pharmacist_history_filters_by_status(): void
    {
        [$pharmacistUser, $pharmacistProfile] = $this->makePharmacist();
        $commerce = Commerce::factory()->withProfile()->create([
            'pharmacist_in_charge_profile_id' => $pharmacistProfile->id,
        ]);
        PharmacistProfile::create([
            'profile_id' => $pharmacistProfile->id,
            'mpps_number' => 'MPPS-filter',
            'verified' => true,
        ]);

        $patientProfile = Profile::factory()->create();
        $order = Order::factory()->create([
            'profile_id' => $patientProfile->id,
            'commerce_id' => $commerce->id,
        ]);

        Prescription::create([
            'patient_profile_id' => $patientProfile->id,
            'order_id' => $order->id,
            'commerce_id' => $commerce->id,
            'prescribing_doctor_name' => 'Dr. OK',
            'image_url' => 'prescriptions/a.jpg',
            'prescription_type' => Prescription::TYPE_COMMON,
            'status' => Prescription::STATUS_APPROVED,
            'validated_at' => now(),
        ]);

        Prescription::create([
            'patient_profile_id' => $patientProfile->id,
            'order_id' => $order->id,
            'commerce_id' => $commerce->id,
            'prescribing_doctor_name' => 'Dr. No',
            'image_url' => 'prescriptions/r.jpg',
            'prescription_type' => Prescription::TYPE_COMMON,
            'status' => Prescription::STATUS_REJECTED,
            'validated_at' => now(),
            'rejection_reason' => 'Receta ilegible',
        ]);

        Sanctum::actingAs($pharmacistUser);
        $response = $this->getJson('/api/pharmacist/prescriptions/history?status=rejected');

        $response->assertStatus(200);
        $statuses = collect($response->json('data'))->pluck('status')->unique()->all();
        $this->assertSame(['rejected'], $statuses);
    }

    /** @return array{0: User, 1: Profile} */
    private function makePharmacist(): array
    {
        $user = User::factory()->create(['role' => 'pharmacist']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);

        return [$user, $profile];
    }
}
