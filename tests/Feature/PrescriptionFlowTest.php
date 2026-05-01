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

/**
 * Flujo end-to-end de receta médica:
 *  1. Buyer sube receta sobre un pedido Rx (`pending_prescription_validation`).
 *  2. Pharmacist responsable de la farmacia aprueba la receta.
 *  3. El pedido pasa a `pending_payment`.
 *  4. Camino alterno: pharmacist rechaza → pedido se cancela.
 */
class PrescriptionFlowTest extends TestCase
{
    use RefreshDatabase;

    public function test_buyer_uploads_prescription_then_pharmacist_approves(): void
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
            'mpps_number' => 'MPPS-'.$pharmacistProfile->id,
            'verified' => true,
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
        $response->assertStatus(201)->assertJsonPath('success', true);

        $prescriptionId = (int) $response->json('data.id');
        $this->assertGreaterThan(0, $prescriptionId);
        $this->assertSame(
            Order::STATUS_PENDING_PRESCRIPTION,
            $order->fresh()->status
        );

        Sanctum::actingAs($pharmacistUser);
        $approve = $this->postJson(
            "/api/pharmacist/prescriptions/{$prescriptionId}/approve",
            [],
        );
        $approve->assertStatus(200)->assertJsonPath('success', true);

        $this->assertSame(
            Order::STATUS_PENDING_PAYMENT,
            $order->fresh()->status
        );
        $this->assertSame(
            Prescription::STATUS_APPROVED,
            Prescription::find($prescriptionId)->status
        );
    }

    public function test_second_prescription_upload_while_pending_returns_409(): void
    {
        Storage::fake('local');

        [$buyer, $buyerProfile] = $this->makeBuyer();
        $commerce = Commerce::factory()->withProfile()->create([
            'open' => true,
            'status' => 'approved',
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
        $payload = [
            'order_id' => $order->id,
            'prescribing_doctor_name' => 'Dr. Primera',
            'prescription_type' => Prescription::TYPE_COMMON,
            'image' => UploadedFile::fake()->image('rx1.jpg'),
        ];
        $this->postJson('/api/buyer/prescriptions', $payload)->assertStatus(201);

        $this->postJson('/api/buyer/prescriptions', [
            'order_id' => $order->id,
            'prescribing_doctor_name' => 'Dr. Segunda',
            'prescription_type' => Prescription::TYPE_COMMON,
            'image' => UploadedFile::fake()->image('rx2.jpg'),
        ])->assertStatus(409);
    }

    public function test_pharmacist_rejects_prescription_cancels_order(): void
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
            'mpps_number' => 'MPPS-rej-'.$pharmacistProfile->id,
            'verified' => true,
        ]);

        $order = Order::create([
            'profile_id' => $buyerProfile->id,
            'commerce_id' => $commerce->id,
            'delivery_type' => 'pickup',
            'status' => Order::STATUS_PENDING_PRESCRIPTION,
            'requires_prescription' => true,
            'total' => 18.00,
            'delivery_fee' => 0,
        ]);

        Sanctum::actingAs($buyer);
        $upload = UploadedFile::fake()->image('rx.jpg');
        $response = $this->postJson('/api/buyer/prescriptions', [
            'order_id' => $order->id,
            'prescribing_doctor_name' => 'Dr. Méndez',
            'prescription_type' => Prescription::TYPE_RETAINED,
            'image' => $upload,
        ]);
        $prescriptionId = (int) $response->json('data.id');

        Sanctum::actingAs($pharmacistUser);
        $reject = $this->postJson(
            "/api/pharmacist/prescriptions/{$prescriptionId}/reject",
            ['reason' => 'Receta vencida'],
        );
        $reject->assertStatus(200)->assertJsonPath('success', true);

        $this->assertSame(Order::STATUS_CANCELLED, $order->fresh()->status);
        $this->assertSame(
            Prescription::STATUS_REJECTED,
            Prescription::find($prescriptionId)->status
        );
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
