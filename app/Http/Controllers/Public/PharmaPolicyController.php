<?php

namespace App\Http\Controllers\Public;

use App\Http\Controllers\Controller;
use Illuminate\Http\JsonResponse;

/**
 * Políticas Pharma expuestas al cliente (sin auth) para alinear checkout Flutter.
 */
class PharmaPolicyController extends Controller
{
    public function __invoke(): JsonResponse
    {
        $pharma = config('zonix.pharma', []);

        return response()->json([
            'success' => true,
            'data' => [
                'block_rx_without_prescription' => (bool) ($pharma['block_rx_without_prescription'] ?? false),
                'prescription_validation_ttl_minutes' => (int) ($pharma['prescription_validation_ttl_minutes'] ?? 60),
                'disallow_promotions_on_rx' => (bool) ($pharma['disallow_promotions_on_rx'] ?? true),
                'require_cold_chain_handling' => (bool) ($pharma['require_cold_chain_handling'] ?? true),
            ],
        ]);
    }
}
