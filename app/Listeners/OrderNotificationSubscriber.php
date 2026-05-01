<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Events\OrderStatusChanged;
use App\Events\PaymentValidated;
use App\Events\PrescriptionRejected;
use App\Events\PrescriptionUploaded;
use App\Events\PrescriptionValidated;
use App\Models\Commerce;
use App\Services\NotificationService;
use Illuminate\Events\Dispatcher;
use Illuminate\Support\Facades\Log;

class OrderNotificationSubscriber
{
    protected NotificationService $notificationService;

    public function __construct(NotificationService $notificationService)
    {
        $this->notificationService = $notificationService;
    }

    public function onOrderCreated(OrderCreated $event): void
    {
        Log::debug('OrderNotificationSubscriber: OrderCreated', ['order_id' => $event->order->id]);
        $order = $event->order;
        $commerce = $order->commerce;

        if ($commerce && $commerce->profile_id) {
            $orderNumber = $order->order_number ?? $order->id;
            $this->notificationService->notify(
                $commerce->profile_id,
                'Nuevo pedido recibido',
                "Has recibido un nuevo pedido #{$orderNumber}.",
                'commerce_order',
                [
                    'order_id' => (string) $order->id,
                    'order_number' => $order->order_number ?? (string) $order->id,
                ]
            );
        }
    }

    public function onOrderStatusChanged(OrderStatusChanged $event): void
    {
        $order = $event->order;
        $status = $order->status;
        $profileId = $order->profile_id;

        $messages = [
            'pending_prescription_validation' => 'Tu pedido contiene medicamentos con receta. El farmacéutico la validará en breve.',
            'pending_payment' => 'Tu pedido está listo para pagar. Sube el comprobante para continuar.',
            'paid' => 'Tu pago fue confirmado. La farmacia preparará tu pedido.',
            'processing' => 'La farmacia está preparando tu pedido.',
            'shipped' => 'Tu pedido va en camino.',
            'delivered' => 'Pedido entregado. Cuídate mucho y sigue las indicaciones.',
            'cancelled' => 'Tu pedido ha sido cancelado.',
        ];

        Log::debug('OrderNotificationSubscriber: OrderStatusChanged', [
            'order_id' => $order->id,
            'status' => $status,
            'has_message' => isset($messages[$status]),
        ]);

        if (isset($messages[$status])) {
            $body = $messages[$status];
            if ($status === 'shipped' && ($order->delivery_type ?? '') === 'pickup') {
                $body = 'Tu pedido está listo para retirar en la farmacia.';
            }

            $this->notificationService->notify(
                $profileId,
                'Actualización de pedido',
                $body,
                'order',
                ['order_id' => (string) $order->id, 'status' => $status]
            );
        }
    }

    public function onPaymentValidated(PaymentValidated $event): void
    {
        Log::debug('OrderNotificationSubscriber: PaymentValidated', [
            'order_id' => $event->order->id,
            'is_validated' => $event->isValidated,
        ]);
        $order = $event->order;
        $orderNumber = $order->order_number ?? $order->id;

        if ($event->isValidated) {
            $this->notificationService->notify(
                $order->profile_id,
                'Pago validado',
                "El pago de tu pedido #{$orderNumber} fue validado correctamente.",
                'order',
                ['order_id' => (string) $order->id]
            );
        } else {
            $this->notificationService->notify(
                $order->profile_id,
                'Pago rechazado',
                "El comprobante de tu pedido #{$orderNumber} fue rechazado.",
                'order',
                ['order_id' => (string) $order->id]
            );
        }
    }

    public function onPrescriptionUploaded(PrescriptionUploaded $event): void
    {
        $prescription = $event->prescription;
        Log::debug('OrderNotificationSubscriber: PrescriptionUploaded', [
            'prescription_id' => $prescription->id,
            'commerce_id' => $prescription->commerce_id,
        ]);

        // Notificar al farmacéutico colegiado responsable de la farmacia
        // (si la farmacia tiene asignado uno) para que valide la receta.
        if ($prescription->commerce_id) {
            $commerce = Commerce::find($prescription->commerce_id);
            $pharmacistProfileId = $commerce?->pharmacist_in_charge_profile_id;
            if ($pharmacistProfileId) {
                $this->notificationService->notify(
                    $pharmacistProfileId,
                    'Nueva receta para validar',
                    "Receta #{$prescription->id} pendiente de validación.",
                    'prescription',
                    [
                        'prescription_id' => (string) $prescription->id,
                        'order_id' => (string) ($prescription->order_id ?? ''),
                    ]
                );
            }
        }
    }

    public function onPrescriptionValidated(PrescriptionValidated $event): void
    {
        $prescription = $event->prescription;
        Log::debug('OrderNotificationSubscriber: PrescriptionValidated', [
            'prescription_id' => $prescription->id,
        ]);

        $patientProfileId = $prescription->patient_profile_id;
        if ($patientProfileId) {
            $this->notificationService->notify(
                $patientProfileId,
                'Receta aprobada',
                'Tu receta fue aprobada. Continúa con el pago para que tu pedido sea preparado.',
                'prescription',
                [
                    'prescription_id' => (string) $prescription->id,
                    'order_id' => (string) ($prescription->order_id ?? ''),
                ]
            );
        }
    }

    public function onPrescriptionRejected(PrescriptionRejected $event): void
    {
        $prescription = $event->prescription;
        Log::debug('OrderNotificationSubscriber: PrescriptionRejected', [
            'prescription_id' => $prescription->id,
        ]);

        $patientProfileId = $prescription->patient_profile_id;
        if ($patientProfileId) {
            $reason = $prescription->rejection_reason
                ?: 'Sin detalles. Contacta a la farmacia para más información.';
            $this->notificationService->notify(
                $patientProfileId,
                'Receta rechazada',
                "El farmacéutico rechazó tu receta. Motivo: {$reason}",
                'prescription',
                [
                    'prescription_id' => (string) $prescription->id,
                    'order_id' => (string) ($prescription->order_id ?? ''),
                ]
            );
        }
    }

    public function subscribe(Dispatcher $events): array
    {
        return [
            OrderCreated::class => 'onOrderCreated',
            OrderStatusChanged::class => 'onOrderStatusChanged',
            PaymentValidated::class => 'onPaymentValidated',
            PrescriptionUploaded::class => 'onPrescriptionUploaded',
            PrescriptionValidated::class => 'onPrescriptionValidated',
            PrescriptionRejected::class => 'onPrescriptionRejected',
        ];
    }
}
