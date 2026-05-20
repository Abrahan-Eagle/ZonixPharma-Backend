<?php

namespace App\Support;

/**
 * Catálogo de métodos de pago para piloto Zonix Pharma (VE).
 * Zonix no es PSP: el paciente paga directo a farmacia/repartidor con comprobante.
 *
 * @see docs/Lanzamiento/PLAN_METODOS_PAGO.md
 */
final class PharmaPilotPaymentCatalog
{
    /** Tipos permitidos al registrar métodos de cobro en farmacia/repartidor. */
    public static function allowedCommerceTypes(): array
    {
        return [
            'mobile_payment',
            'bank_transfer',
            'cash',
            'digital_wallet',
            'other',
        ];
    }

    /** Tipos legacy Eats / internacionales — no ofrecer en checkout piloto. */
    public static function prohibitedGatewayTypes(): array
    {
        return ['stripe', 'mercadopago', 'paypal', 'card'];
    }

    /**
     * GET /api/available-payment-methods (PaymentMethodController).
     *
     * @return list<array{type: string, name: string, description: string, icon: string, enabled: bool}>
     */
    public static function forPublicAvailableEndpoint(): array
    {
        return [
            [
                'type' => 'mobile_payment',
                'name' => 'Pago Móvil (C2P)',
                'description' => 'Pago a la farmacia vía pago móvil; confirmación con comprobante',
                'icon' => 'smartphone',
                'enabled' => true,
            ],
            [
                'type' => 'bank_transfer',
                'name' => 'Transferencia bancaria',
                'description' => 'Transferencia a cuenta de la farmacia; referencia en comprobante',
                'icon' => 'account_balance',
                'enabled' => true,
            ],
            [
                'type' => 'digital_wallet',
                'name' => 'Zelle / Binance Pay (USDT)',
                'description' => 'Billetera o USDT según datos de la farmacia; sin webhook automático Zonix',
                'icon' => 'account_balance_wallet',
                'enabled' => true,
            ],
            [
                'type' => 'cash',
                'name' => 'Efectivo',
                'description' => 'Pago contra entrega o en farmacia (pickup)',
                'icon' => 'money',
                'enabled' => true,
            ],
            [
                'type' => 'card',
                'name' => 'Tarjeta internacional',
                'description' => 'No disponible en piloto Venezuela',
                'icon' => 'credit_card',
                'enabled' => false,
            ],
            [
                'type' => 'paypal',
                'name' => 'PayPal',
                'description' => 'No operativo para empresas locales VE en piloto',
                'icon' => 'paypal',
                'enabled' => false,
            ],
            [
                'type' => 'stripe',
                'name' => 'Stripe',
                'description' => 'Legacy — no piloto Pharma',
                'icon' => 'stripe',
                'enabled' => false,
            ],
            [
                'type' => 'mercadopago',
                'name' => 'MercadoPago',
                'description' => 'Legacy — no piloto Pharma',
                'icon' => 'mercadopago',
                'enabled' => false,
            ],
        ];
    }

    /**
     * Legacy GET buyer/payments/methods (deprecado; misma política piloto).
     *
     * @return list<array<string, mixed>>
     */
    public static function forLegacyBuyerPaymentMethods(): array
    {
        return [
            [
                'id' => 'mobile_payment',
                'name' => 'Pago Móvil',
                'icon' => 'smartphone',
                'description' => 'Pago móvil C2P a la farmacia',
                'enabled' => true,
                'supported_banks' => ['banesco', 'banco_de_venezuela', 'bbva', 'provincial', 'mercantil'],
            ],
            [
                'id' => 'bank_transfer',
                'name' => 'Transferencia bancaria',
                'icon' => 'account_balance',
                'description' => 'Transferencia a cuenta de la farmacia',
                'enabled' => true,
                'supported_cards' => [],
            ],
            [
                'id' => 'digital_wallet',
                'name' => 'Zelle / Binance Pay',
                'icon' => 'account_balance_wallet',
                'description' => 'Según datos publicados por la farmacia',
                'enabled' => true,
                'supported_cards' => [],
            ],
            [
                'id' => 'cash',
                'name' => 'Efectivo',
                'icon' => 'money',
                'description' => 'Pago al momento de la entrega o en farmacia',
                'enabled' => true,
                'supported_cards' => [],
            ],
            [
                'id' => 'credit_card',
                'name' => 'Tarjeta de Crédito/Débito',
                'icon' => 'credit_card',
                'description' => 'No disponible en piloto VE',
                'enabled' => false,
                'supported_cards' => [],
            ],
            [
                'id' => 'paypal',
                'name' => 'PayPal',
                'icon' => 'paypal',
                'description' => 'No piloto Pharma',
                'enabled' => false,
                'supported_cards' => [],
            ],
            [
                'id' => 'stripe',
                'name' => 'Stripe',
                'icon' => 'stripe',
                'description' => 'Legacy Eats — deshabilitado',
                'enabled' => false,
                'supported_cards' => [],
            ],
            [
                'id' => 'mercadopago',
                'name' => 'MercadoPago',
                'icon' => 'mercadopago',
                'description' => 'Legacy — deshabilitado',
                'enabled' => false,
                'supported_cards' => [],
            ],
        ];
    }
}
