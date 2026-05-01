<?php

namespace App\Services;

use App\Models\Prescription;
use App\Models\PrescriptionAccessLog;
use Illuminate\Http\Request;

class PrescriptionAuditLogger
{
    public static function log(
        Prescription $prescription,
        string $action,
        ?Request $request = null,
        ?string $actorRole = null,
        ?int $actorProfileId = null,
        ?array $meta = null,
    ): void {
        PrescriptionAccessLog::query()->create([
            'prescription_id' => $prescription->id,
            'actor_profile_id' => $actorProfileId,
            'actor_role' => $actorRole,
            'action' => $action,
            'ip_address' => $request?->ip(),
            'user_agent' => $request ? substr((string) $request->userAgent(), 0, 512) : null,
            'meta' => $meta,
        ]);
    }
}
