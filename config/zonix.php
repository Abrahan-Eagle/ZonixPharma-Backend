<?php

return [

    /*
    |--------------------------------------------------------------------------
    | URLs de servicios externos (sin hardcode en controladores)
    |--------------------------------------------------------------------------
    */
    // Routing en cascada: ORS (opcional) → Valhalla → OSRM FOSSGIS → OSRM demo → interpolado (RouteCalculationService)
    'ors_api_key' => env('ZONIX_ORS_API_KEY', ''),
    'ors_directions_base' => rtrim(env('ZONIX_ORS_DIRECTIONS_BASE', 'https://api.openrouteservice.org/v2/directions'), '/'),
    'valhalla_route_url' => rtrim(env('ZONIX_VALHALLA_ROUTE_URL', 'https://valhalla1.openstreetmap.de/route'), '/'),
    'osrm_fossgis_base_url' => rtrim(env('ZONIX_OSRM_FOSSGIS_BASE_URL', 'https://routing.openstreetmap.de/routed-car'), '/'),
    'osrm_demo_base_url' => rtrim(env('ZONIX_OSRM_DEMO_BASE_URL', env('ZONIX_OSRM_BASE_URL', 'https://router.project-osrm.org')), '/'),
    'routing_http_timeout' => (int) env('ZONIX_ROUTING_HTTP_TIMEOUT', 5),

    /** @deprecated Usar osrm_demo_base_url; se mantiene para .env existentes */
    'osrm_base_url' => rtrim(env('ZONIX_OSRM_BASE_URL', 'https://router.project-osrm.org'), '/'),

    'nominatim_reverse_url' => env('ZONIX_NOMINATIM_REVERSE_URL', 'https://nominatim.openstreetmap.org/reverse'),
    'nominatim_search_url' => env('ZONIX_NOMINATIM_SEARCH_URL', 'https://nominatim.openstreetmap.org/search'),

    /*
    |--------------------------------------------------------------------------
    | Valores por defecto de negocio (configurables por entorno)
    |--------------------------------------------------------------------------
    */
    'default_delivery_fee' => (float) (env('ZONIX_DEFAULT_DELIVERY_FEE', 5.00)),

    // Tarifa delivery: base + por km (para cálculo automático)
    'delivery_fee_base' => (float) (env('ZONIX_DELIVERY_FEE_BASE', 1.50)),
    'delivery_fee_per_km' => (float) (env('ZONIX_DELIVERY_FEE_PER_KM', 0.50)),
    'delivery_fee_min' => (float) (env('ZONIX_DELIVERY_FEE_MIN', 2.00)),
    'delivery_fee_max' => (float) (env('ZONIX_DELIVERY_FEE_MAX', 15.00)),

    'default_preparation_time_minutes' => (int) (env('ZONIX_DEFAULT_PREPARATION_TIME_MINUTES', 12)),

    // Fallbacks solo cuando en BD no hay coords (ej. comercio sin dirección). Producción: todo viene de GPS/BD.
    'default_commerce_lat' => (float) (env('ZONIX_DEFAULT_COMMERCE_LAT', 10.1620)),
    'default_commerce_lng' => (float) (env('ZONIX_DEFAULT_COMMERCE_LNG', -68.0074)),

    /*
    |--------------------------------------------------------------------------
    | Analytics: fallbacks cuando no hay datos
    |--------------------------------------------------------------------------
    */
    'analytics' => [
        'delivery_time_comparison_period1' => (float) (env('ZONIX_ANALYTICS_DELIVERY_TIME_P1', 32.5)),
        'delivery_time_comparison_period2' => (float) (env('ZONIX_ANALYTICS_DELIVERY_TIME_P2', 28.5)),
        'avg_preparation_fallback_minutes' => (float) (env('ZONIX_ANALYTICS_AVG_PREP_FALLBACK', 12.5)),
        'satisfaction_fallback_rating' => (float) (env('ZONIX_ANALYTICS_SATISFACTION_FALLBACK', 4.5)),
    ],

    /*
    |--------------------------------------------------------------------------
    | Seeders: IDs y valores de demo (evitar hardcode en seeders)
    |--------------------------------------------------------------------------
    */
    'seeder' => [
        'demo_order_id' => (int) (env('ZONIX_SEEDER_DEMO_ORDER_ID', 4)),
        'default_delivery_fee' => (float) (env('ZONIX_SEEDER_DEFAULT_DELIVERY_FEE', 5.00)),
    ],

    /*
    |--------------------------------------------------------------------------
    | Ruta repartidor → cliente: waypoint opcional (solo demo o punto fijo).
    | En producción dejar sin definir: la ruta usa solo coords reales (repartidor desde
    | GPS → BD, cliente desde dirección guardada en BD). Si se define, OSRM dibuja la
    | ruta pasando por ese punto.
    |--------------------------------------------------------------------------
    */
    'tracking_waypoint_lat' => env('ZONIX_TRACKING_WAYPOINT_LAT') !== null && env('ZONIX_TRACKING_WAYPOINT_LAT') !== '' ? (float) env('ZONIX_TRACKING_WAYPOINT_LAT') : null,
    'tracking_waypoint_lng' => env('ZONIX_TRACKING_WAYPOINT_LNG') !== null && env('ZONIX_TRACKING_WAYPOINT_LNG') !== '' ? (float) env('ZONIX_TRACKING_WAYPOINT_LNG') : null,

    /*
    |--------------------------------------------------------------------------
    | Delivery observability (SLA y alertas operativas)
    |--------------------------------------------------------------------------
    */
    'observability' => [
        'window_hours' => (int) env('ZONIX_OBS_WINDOW_HOURS', 24),
        'unassigned_threshold_minutes' => (int) env('ZONIX_OBS_UNASSIGNED_THRESHOLD_MINUTES', 5),
        'tracking_frozen_minutes' => (int) env('ZONIX_OBS_TRACKING_FROZEN_MINUTES', 5),
        'alert_dedupe_minutes' => (int) env('ZONIX_OBS_ALERT_DEDUPE_MINUTES', 30),
    ],

    /*
    |--------------------------------------------------------------------------
    | Legacy payments deprecation (buyer/payments/*)
    |--------------------------------------------------------------------------
    */
    'legacy_payments' => [
        'sunset' => env('ZONIX_LEGACY_PAYMENTS_SUNSET', 'Fri, 31 Jul 2026 23:59:59 GMT'),
        'phase' => env('ZONIX_LEGACY_PAYMENTS_PHASE', 'warn'),
        'replacement' => '/api/buyer/orders/{id}/payment-info + /api/buyer/orders/{id}/payment-proof',
    ],

    /*
    |--------------------------------------------------------------------------
    | Pedidos simultáneos (buyer): cuenta órdenes no entregadas ni canceladas.
    | 0 = sin límite. Valores habituales: 5–7.
    |--------------------------------------------------------------------------
    */
    'buyer_max_concurrent_open_orders' => (int) env('ZONIX_BUYER_MAX_CONCURRENT_OPEN_ORDERS', 7),

    /*
    |--------------------------------------------------------------------------
    | Caducidad automática: órdenes pending_payment sin pago (comando programado).
    | max_age: desde created_at. after_approval: desde approved_for_payment_at (si existe).
    | 0 desactiva esa regla. enabled=false desactiva el comando por completo.
    |--------------------------------------------------------------------------
    */
    'expire_pending_payment' => [
        'enabled' => filter_var(env('ZONIX_EXPIRE_PENDING_PAYMENT_ENABLED', true), FILTER_VALIDATE_BOOLEAN),
        'max_age_minutes' => (int) env('ZONIX_PENDING_PAYMENT_MAX_AGE_MINUTES', 1440),
        'after_approval_minutes' => (int) env('ZONIX_PENDING_PAYMENT_AFTER_APPROVAL_MINUTES', 60),
        // No cancelar por TTL si ya hay comprobante subido y aún no fue validado/rechazado (comercio debe decidir).
        'skip_if_proof_pending' => filter_var(env('ZONIX_EXPIRE_SKIP_IF_PROOF_PENDING', true), FILTER_VALIDATE_BOOLEAN),
    ],

    /*
    |--------------------------------------------------------------------------
    | Reglas farmacéuticas Zonix Pharma
    |--------------------------------------------------------------------------
    |
    |  - block_rx_without_prescription: default false (flujo permisivo MVP).
    |    Si true (opt-in), el checkout falla si el carrito tiene productos Rx
    |    y no se envía prescription_id de una receta approved sin otro pedido.
    |  - prescription_validation_ttl_minutes: vida de una receta pendiente
    |    de validación; al vencer se cancela el pedido asociado. Valor <= 0
    |    desactiva expires_at (sin caducidad automática por TTL; ver warning en log).
    |  - disallow_promotions_on_rx: si true, ninguna promoción/cupón se
    |    aplica a líneas con requires_prescription = true.
    |  - require_cold_chain_handling: si true, los productos cold_chain
    |    no permiten ciertos modos de delivery sin trazabilidad.
    */
    'pharma' => [
        'block_rx_without_prescription' => filter_var(env('ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION', false), FILTER_VALIDATE_BOOLEAN),
        'prescription_validation_ttl_minutes' => (int) env('ZONIX_PHARMA_PRESCRIPTION_VALIDATION_TTL_MINUTES', 60),
        'disallow_promotions_on_rx' => filter_var(env('ZONIX_PHARMA_DISALLOW_PROMOTIONS_ON_RX', true), FILTER_VALIDATE_BOOLEAN),
        'require_cold_chain_handling' => filter_var(env('ZONIX_PHARMA_REQUIRE_COLD_CHAIN_HANDLING', true), FILTER_VALIDATE_BOOLEAN),
        /** Hostnames permitidos para `image_url` externa (coma-separados). Vacío = solo adjunto multipart cifrado. */
        'prescription_allowed_image_hosts' => array_values(array_filter(array_map('trim', explode(',', (string) env('ZONIX_PHARMA_PRESCRIPTION_IMAGE_HOSTS', ''))))),
        /** Días tras estado terminal del pedido antes de purgar adjunto y anonimizar metadatos de receta. */
        'prescription_retention_days_after_terminal' => (int) env('ZONIX_PHARMA_PRESCRIPTION_RETENTION_DAYS', 90),
    ],

];
