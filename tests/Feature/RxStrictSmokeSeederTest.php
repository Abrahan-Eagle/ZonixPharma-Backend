<?php

namespace Tests\Feature;

use App\Models\Commerce;
use App\Models\Prescription;
use App\Models\Product;
use App\Models\Profile;
use App\Models\User;
use Database\Seeders\RxStrictSmokeSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RxStrictSmokeSeederTest extends TestCase
{
    use RefreshDatabase;

    public function test_creates_approved_prescription_without_order(): void
    {
        $buyer = User::factory()->create(['role' => 'users']);
        Profile::factory()->create(['user_id' => $buyer->id]);
        $commerce = Commerce::factory()->withProfile()->create([
            'open' => true,
            'status' => 'approved',
        ]);
        Product::factory()->create([
            'commerce_id' => $commerce->id,
            'requires_prescription' => true,
            'available' => true,
        ]);

        $this->seed(RxStrictSmokeSeeder::class);

        $this->assertSame(1, Prescription::query()
            ->where('status', Prescription::STATUS_APPROVED)
            ->whereNull('order_id')
            ->count());
    }
}
