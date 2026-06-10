<?php

namespace Tests\Feature;

use App\Models\Commerce;
use App\Models\Document;
use App\Models\Order;
use App\Models\Profile;
use App\Models\Promotion;
use App\Models\User;
use App\Services\PrescriptionService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Laravel\Sanctum\Sanctum;
use Tests\TestCase;

class ForensicPhase3Test extends TestCase
{
    use RefreshDatabase;

    public function test_orphan_rx_order_expires_when_prescription_not_uploaded(): void
    {
        config(['zonix.pharma.prescription_validation_ttl_minutes' => 60]);

        $buyer = User::factory()->create(['role' => 'users']);
        $profile = Profile::factory()->create(['user_id' => $buyer->id]);
        $commerce = Commerce::factory()->withProfile()->create(['open' => true, 'status' => 'approved']);

        $order = Order::create([
            'profile_id' => $profile->id,
            'commerce_id' => $commerce->id,
            'delivery_type' => 'pickup',
            'status' => Order::STATUS_PENDING_PRESCRIPTION,
            'requires_prescription' => true,
            'prescription_id' => null,
            'expires_at' => now()->subMinute(),
            'total' => 20,
            'delivery_fee' => 0,
        ]);

        $expired = app(PrescriptionService::class)->expireOrphanRxOrders();

        $this->assertSame(1, $expired);
        $this->assertSame(Order::STATUS_CANCELLED, $order->fresh()->status);
    }

    public function test_commerce_cannot_mutate_global_promotion(): void
    {
        $commerceUser = User::factory()->create(['role' => 'commerce']);
        $profile = Profile::factory()->create(['user_id' => $commerceUser->id]);
        $commerce = Commerce::factory()->create(['profile_id' => $profile->id, 'status' => 'approved']);

        $global = Promotion::create([
            'title' => 'Global promo',
            'description' => 'Plataforma',
            'discount_type' => 'percentage',
            'discount_value' => 10,
            'minimum_order' => 0,
            'start_date' => now()->subDay(),
            'end_date' => now()->addMonth(),
            'is_active' => true,
            'commerce_id' => null,
        ]);

        Sanctum::actingAs($commerceUser);

        $this->putJson('/api/commerce/promotions/'.$global->id, [
            'title' => 'Hack',
        ])->assertStatus(403);

        $this->deleteJson('/api/commerce/promotions/'.$global->id)
            ->assertStatus(403);

        $this->putJson('/api/commerce/promotions/'.$global->id.'/toggle')
            ->assertStatus(403);
    }

    public function test_kyc_document_upload_uses_private_storage(): void
    {
        Storage::fake('local');

        $user = User::factory()->create(['role' => 'users']);
        Profile::factory()->create(['user_id' => $user->id]);
        Sanctum::actingAs($user);

        $response = $this->postJson('/api/documents', [
            'profile_id' => $user->id,
            'type' => 'ci',
            'number_ci' => 12345678,
            'front_image' => UploadedFile::fake()->image('ci.jpg'),
        ]);

        $response->assertStatus(201);
        $documentId = (int) $response->json('document.id');
        $this->assertStringStartsWith(
            'secure:kyc_documents/',
            (string) Document::find($documentId)->getRawOriginal('front_image')
        );

        $download = $this->get('/api/documents/'.$documentId.'/file');
        $download->assertStatus(200);
    }

    public function test_payment_proof_upload_uses_private_storage(): void
    {
        Storage::fake('local');

        $user = User::factory()->create(['role' => 'users']);
        $profile = Profile::factory()->create(['user_id' => $user->id]);
        $commerce = Commerce::factory()->create(['profile_id' => $profile->id]);

        $order = Order::factory()->create([
            'profile_id' => $profile->id,
            'commerce_id' => $commerce->id,
            'status' => 'pending_payment',
            'approved_for_payment' => true,
        ]);

        Sanctum::actingAs($user);
        $file = UploadedFile::fake()->image('proof.jpg');

        $response = $this->postJson("/api/buyer/orders/{$order->id}/payment-proof", [
            'payment_proof' => $file,
            'payment_method' => 'pago_movil',
            'reference_number' => 'REF999',
        ]);

        $response->assertStatus(200);
        $proof = (string) $order->fresh()->payment_proof;
        $this->assertStringStartsWith('secure:payment_proofs/', $proof);

        $this->get("/api/buyer/orders/{$order->id}/payment-proof")
            ->assertStatus(200);
    }
}
