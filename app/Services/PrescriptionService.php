<?php

namespace App\Services;

use App\Events\PrescriptionRejected;
use App\Events\PrescriptionUploaded;
use App\Events\PrescriptionValidated;
use App\Models\Order;
use App\Models\Prescription;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

/**
 * Lógica de negocio de recetas médicas (Rx) en Zonix Pharma.
 *
 * Responsabilidades:
 *  - Crear/registrar la receta vinculada a un pedido pendiente Rx.
 *  - Aprobarla (mueve el pedido de `pending_prescription_validation` a `pending_payment`).
 *  - Rechazarla (cancela el pedido y libera reservas si aplica).
 *  - Marcar como expirada por TTL (job programado).
 */
class PrescriptionService
{
    public function __construct(
        private readonly OrderStateMachineService $stateMachine,
    ) {
    }

    /**
     * Subir una receta. Crea la entrada `prescriptions` y la vincula al pedido.
     */
    public function upload(array $data, Order $order): Prescription
    {
        return DB::transaction(function () use ($data, $order) {
            $ttlMinutes = (int) config('zonix.pharma.prescription_validation_ttl_minutes', 60);

            $prescription = Prescription::create([
                'patient_profile_id' => $order->profile_id,
                'order_id' => $order->id,
                'commerce_id' => $order->commerce_id,
                'prescribing_doctor_name' => $data['prescribing_doctor_name'] ?? '',
                'prescribing_doctor_license' => $data['prescribing_doctor_license'] ?? null,
                'prescribing_doctor_specialty' => $data['prescribing_doctor_specialty'] ?? null,
                'issued_at' => $data['issued_at'] ?? null,
                'image_url' => $data['image_url'],
                'prescription_type' => $data['prescription_type'] ?? Prescription::TYPE_COMMON,
                'status' => Prescription::STATUS_PENDING_VALIDATION,
                'expires_at' => $ttlMinutes > 0 ? now()->addMinutes($ttlMinutes) : null,
            ]);

            $order->update([
                'prescription_id' => $prescription->id,
                'status' => Order::STATUS_PENDING_PRESCRIPTION,
                'requires_prescription' => true,
            ]);

            event(new PrescriptionUploaded($prescription));

            Log::info('prescription_uploaded', [
                'prescription_id' => $prescription->id,
                'order_id' => $order->id,
                'commerce_id' => $order->commerce_id,
                'ttl_minutes' => $ttlMinutes,
            ]);

            return $prescription;
        });
    }

    /**
     * Aprobar receta (sólo el farmacéutico colegiado de la farmacia).
     */
    public function approve(Prescription $prescription, int $pharmacistProfileId): Prescription
    {
        return DB::transaction(function () use ($prescription, $pharmacistProfileId) {
            if (! $prescription->isPending()) {
                return $prescription;
            }

            $prescription->update([
                'status' => Prescription::STATUS_APPROVED,
                'validated_by_profile_id' => $pharmacistProfileId,
                'validated_at' => now(),
            ]);

            $order = $prescription->order;
            if ($order && $order->status === Order::STATUS_PENDING_PRESCRIPTION) {
                $this->stateMachine->applyTransition(
                    order: $order,
                    actorRole: 'pharmacist',
                    toStatus: Order::STATUS_PENDING_PAYMENT,
                    actorId: $pharmacistProfileId,
                    source: 'prescription_approval',
                    reason: 'Receta validada por farmacéutico colegiado.',
                );
                $order->update(['prescription_validated_at' => now()]);
            }

            event(new PrescriptionValidated($prescription));

            Log::info('prescription_approved', [
                'prescription_id' => $prescription->id,
                'order_id' => $prescription->order_id,
                'pharmacist_profile_id' => $pharmacistProfileId,
            ]);

            return $prescription;
        });
    }

    /**
     * Rechazar receta y cancelar el pedido si estaba esperando esta validación.
     */
    public function reject(Prescription $prescription, int $pharmacistProfileId, string $reason): Prescription
    {
        return DB::transaction(function () use ($prescription, $pharmacistProfileId, $reason) {
            if (! $prescription->isPending()) {
                return $prescription;
            }

            $prescription->update([
                'status' => Prescription::STATUS_REJECTED,
                'validated_by_profile_id' => $pharmacistProfileId,
                'validated_at' => now(),
                'rejection_reason' => $reason,
            ]);

            $order = $prescription->order;
            if ($order && $order->status === Order::STATUS_PENDING_PRESCRIPTION) {
                $this->stateMachine->applyTransition(
                    order: $order,
                    actorRole: 'pharmacist',
                    toStatus: Order::STATUS_CANCELLED,
                    actorId: $pharmacistProfileId,
                    source: 'prescription_rejection',
                    reason: $reason,
                );
                $order->update(['cancellation_reason' => 'Receta rechazada: '.$reason]);
            }

            event(new PrescriptionRejected($prescription));

            Log::info('prescription_rejected', [
                'prescription_id' => $prescription->id,
                'order_id' => $prescription->order_id,
                'pharmacist_profile_id' => $pharmacistProfileId,
                'reason' => $reason,
            ]);

            return $prescription;
        });
    }

    /**
     * Marca como expiradas las recetas pendientes cuyo TTL venció y cancela
     * los pedidos asociados que sigan en `pending_prescription_validation`.
     */
    public function expirePending(): int
    {
        $now = now();
        $expired = 0;

        Prescription::pending()
            ->whereNotNull('expires_at')
            ->where('expires_at', '<', $now)
            ->chunkById(100, function ($prescriptions) use (&$expired) {
                foreach ($prescriptions as $prescription) {
                    DB::transaction(function () use ($prescription, &$expired) {
                        $prescription->update(['status' => Prescription::STATUS_EXPIRED]);

                        $order = $prescription->order;
                        if ($order && $order->status === Order::STATUS_PENDING_PRESCRIPTION) {
                            $this->stateMachine->applyTransition(
                                order: $order,
                                actorRole: 'admin',
                                toStatus: Order::STATUS_CANCELLED,
                                source: 'prescription_ttl_expired',
                                reason: 'Receta no validada dentro del TTL.',
                            );
                            $order->update(['cancellation_reason' => 'Receta no validada en el plazo permitido.']);
                        }
                        $expired++;
                    });
                }
            });

        return $expired;
    }
}
