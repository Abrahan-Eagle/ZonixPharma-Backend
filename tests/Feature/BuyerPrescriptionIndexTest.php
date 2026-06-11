<?php

namespace Tests\Feature;

use App\Models\Commerce;
use App\Models\Order;
use App\Models\Prescription;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class BuyerPrescriptionIndexTest extends TestCase
{
    use RefreshDatabase;

    public function test_buyer_can_list_own_prescriptions(): void
    {
        [$buyer, $profile] = $this->makeBuyer();
        $commerce = Commerce::factory()->withProfile()->create([
            'open' => true,
            'status' => 'approved',
        ]);
        $order = Order::create([
            'profile_id' => $profile->id,
            'commerce_id' => $commerce->id,
            'delivery_type' => 'pickup',
            'status' => Order::STATUS_PENDING_PRESCRIPTION,
            'requires_prescription' => true,
            'total' => 10,
            'delivery_fee' => 0,
        ]);
        Prescription::create([
            'patient_profile_id' => $profile->id,
            'order_id' => $order->id,
            'commerce_id' => $commerce->id,
            'prescribing_doctor_name' => 'Dr. Test',
            'image_url' => 'prescriptions/test.jpg',
            'prescription_type' => Prescription::TYPE_COMMON,
            'status' => Prescription::STATUS_PENDING_VALIDATION,
        ]);

        Sanctum::actingAs($buyer);
        $response = $this->getJson('/api/buyer/prescriptions');

        $response->assertStatus(200)
            ->assertJsonPath('success', true)
            ->assertJsonCount(1, 'data')
            ->assertJsonStructure([
                'data' => [['id', 'status', 'prescribing_doctor_name']],
                'pagination' => ['total', 'per_page', 'current_page', 'last_page'],
            ]);
    }

    public function test_buyer_cannot_delete_processed_prescription(): void
    {
        [$buyer, $profile] = $this->makeBuyer();
        $commerce = Commerce::factory()->withProfile()->create();
        $prescription = Prescription::create([
            'patient_profile_id' => $profile->id,
            'commerce_id' => $commerce->id,
            'prescribing_doctor_name' => 'Dr. X',
            'image_url' => 'prescriptions/x.jpg',
            'prescription_type' => Prescription::TYPE_COMMON,
            'status' => Prescription::STATUS_APPROVED,
        ]);

        Sanctum::actingAs($buyer);
        $this->deleteJson("/api/buyer/prescriptions/{$prescription->id}")
            ->assertStatus(422)
            ->assertJsonPath('success', false)
            ->assertJsonPath('error_code', 'PRESCRIPTION_ALREADY_PROCESSED');
    }

    /** @return array{0: User, 1: Profile} */
    private function makeBuyer(): array
    {
        $user = User::factory()->create(['role' => 'users']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);

        return [$user, $profile];
    }
}
