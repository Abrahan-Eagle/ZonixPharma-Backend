<?php

namespace Tests\Unit;

use App\Models\MedicineLot;
use Carbon\Carbon;
use Tests\TestCase;

/**
 * Casos básicos del modelo MedicineLot.
 */
class MedicineLotModelTest extends TestCase
{
    public function test_is_expired_detects_past_expiry(): void
    {
        $lot = new MedicineLot([
            'expiry_date' => Carbon::now()->subDay()->toDateString(),
        ]);
        $this->assertTrue($lot->isExpired());
    }

    public function test_is_not_expired_when_future(): void
    {
        $lot = new MedicineLot([
            'expiry_date' => Carbon::now()->addMonth()->toDateString(),
        ]);
        $this->assertFalse($lot->isExpired());
    }

    public function test_is_expiring_soon_within_window(): void
    {
        $lot = new MedicineLot([
            'expiry_date' => Carbon::now()->addDays(15)->toDateString(),
        ]);
        $this->assertTrue($lot->isExpiringSoon(days: 60));
        $this->assertFalse($lot->isExpiringSoon(days: 7));
    }
}
