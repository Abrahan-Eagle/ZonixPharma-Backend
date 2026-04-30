<?php

namespace Tests\Unit;

use App\Models\Prescription;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Casos básicos del modelo Prescription (estados, scopes y constantes).
 */
class PrescriptionModelTest extends TestCase
{
    use RefreshDatabase;

    public function test_status_helpers(): void
    {
        $prescription = new Prescription([
            'status' => Prescription::STATUS_PENDING_VALIDATION,
        ]);
        $this->assertTrue($prescription->isPending());
        $this->assertFalse($prescription->isApproved());
        $this->assertFalse($prescription->isRejected());

        $prescription->status = Prescription::STATUS_APPROVED;
        $this->assertTrue($prescription->isApproved());

        $prescription->status = Prescription::STATUS_REJECTED;
        $this->assertTrue($prescription->isRejected());
    }

    public function test_pending_scope_filters_by_status(): void
    {
        $patient = \App\Models\Profile::factory()->create();

        Prescription::create([
            'patient_profile_id' => $patient->id,
            'prescribing_doctor_name' => 'Dr. Test',
            'image_url' => '/storage/test1.png',
            'status' => Prescription::STATUS_PENDING_VALIDATION,
            'prescription_type' => Prescription::TYPE_COMMON,
        ]);

        Prescription::create([
            'patient_profile_id' => $patient->id,
            'prescribing_doctor_name' => 'Dr. Test',
            'image_url' => '/storage/test2.png',
            'status' => Prescription::STATUS_APPROVED,
            'prescription_type' => Prescription::TYPE_COMMON,
        ]);

        $this->assertSame(1, Prescription::pending()->count());
    }
}
