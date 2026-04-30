<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use App\Services\PharmacyService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

/**
 * Catálogo público buyer de farmacias.
 *
 * Rutas (auth:sanctum + role:users):
 *   GET /api/buyer/pharmacies            → listado paginado (canonical)
 *   GET /api/buyer/pharmacies/{id}       → detalle
 *
 * Compatibilidad legacy (mismo controlador, mismas respuestas):
 *   GET /api/buyer/restaurants
 *   GET /api/buyer/restaurants/{id}
 */
class PharmacyController extends Controller
{
    public function __construct(protected PharmacyService $pharmacyService)
    {
    }

    public function index(Request $request): JsonResponse
    {
        $perPage = min(max((int) $request->input('per_page', 15), 1), 100);
        $paginator = $this->pharmacyService->getAllPharmacies($perPage);
        $items = $paginator->items();

        return response()->json([
            'success' => true,
            'data' => [
                'items' => $items,
                // Aliases en respuesta para compatibilidad con clientes existentes
                // hasta retirar los nombres legacy de Eats.
                'restaurants' => $items,
                'pharmacies' => $items,
                'data' => $items,
                'pagination' => [
                    'current_page' => $paginator->currentPage(),
                    'last_page' => $paginator->lastPage(),
                    'per_page' => $paginator->perPage(),
                    'total' => $paginator->total(),
                ],
            ],
            'message' => 'Farmacias obtenidas exitosamente',
        ]);
    }

    public function show($id): JsonResponse
    {
        $pharmacy = $this->pharmacyService->getCatalogVisiblePharmacyById((int) $id);
        if (! $pharmacy) {
            return response()->json([
                'success' => false,
                'data' => null,
                'message' => 'Farmacia no encontrada',
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $pharmacy,
            'message' => 'Farmacia encontrada',
        ]);
    }
}
