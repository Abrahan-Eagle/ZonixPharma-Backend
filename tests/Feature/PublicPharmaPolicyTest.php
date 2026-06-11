<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class PublicPharmaPolicyTest extends TestCase
{
    use RefreshDatabase;

    public function test_public_pharma_policy_returns_config_flags(): void
    {
        config([
            'zonix.pharma.block_rx_without_prescription' => true,
            'zonix.pharma.prescription_validation_ttl_minutes' => 45,
        ]);

        $this->getJson('/api/pharma-policy')
            ->assertStatus(200)
            ->assertJsonPath('success', true)
            ->assertJsonPath('data.block_rx_without_prescription', true)
            ->assertJsonPath('data.prescription_validation_ttl_minutes', 45);
    }
}
