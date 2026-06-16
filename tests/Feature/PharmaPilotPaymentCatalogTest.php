<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PharmaPilotPaymentCatalogTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_available_payment_methods_excludes_enabled_stripe_and_paypal(): void
    {
        $response = $this->getJson('/api/available-payment-methods');
        $response->assertStatus(200)->assertJson(['success' => true]);

        $methods = collect($response->json('data'));
        $stripe = $methods->firstWhere('type', 'stripe');
        $paypal = $methods->firstWhere('type', 'paypal');
        $mobile = $methods->firstWhere('type', 'mobile_payment');

        $this->assertNotNull($stripe);
        $this->assertFalse($stripe['enabled']);
        $this->assertNotNull($paypal);
        $this->assertFalse($paypal['enabled']);
        $this->assertNotNull($mobile);
        $this->assertTrue($mobile['enabled']);
    }

    public function test_legacy_buyer_payment_methods_catalog_pilot_ve(): void
    {
        $user = \App\Models\User::factory()->create(['role' => 'users']);
        $this->actingAs($user, 'sanctum');

        $response = $this->getJson('/api/buyer/payments/methods');
        $response->assertStatus(200)->assertJsonPath('meta.pilot_mode', 'pharma_ve_manual');

        $methods = collect($response->json('data'));
        $this->assertTrue($methods->firstWhere('id', 'mobile_payment')['enabled']);
        $this->assertFalse($methods->firstWhere('id', 'stripe')['enabled']);
        $this->assertFalse($methods->firstWhere('id', 'credit_card')['enabled']);
    }
}
