<?php

namespace App\Http\Controllers\Commerce\Concerns;

use App\Models\Commerce;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

trait ResolvesCommerce
{
    /**
     * Resolver farmacia activa: query/body commerce_id, header X-Commerce-Id o principal.
     * Si el id no pertenece al perfil, responde 403 (sin fallback al principal).
     */
    protected function resolveCommerce(Request $request): Commerce|JsonResponse|null
    {
        $profile = Auth::user()?->profile;
        if (! $profile) {
            return null;
        }

        $commerceId = $request->query('commerce_id')
            ?? $request->header('X-Commerce-Id')
            ?? $request->input('commerce_id');

        if ($commerceId) {
            $commerce = $profile->commerces()->find($commerceId);
            if (! $commerce) {
                return response()->json([
                    'success' => false,
                    'message' => 'No autorizado para operar esta farmacia o el identificador no existe.',
                ], 403);
            }

            return $commerce;
        }

        return $profile->getPrimaryCommerce();
    }

    /**
     * @return Commerce|JsonResponse
     */
    protected function resolveCommerceOrNotFound(Request $request): Commerce|JsonResponse
    {
        $commerce = $this->resolveCommerce($request);
        if ($commerce instanceof JsonResponse) {
            return $commerce;
        }
        if (! $commerce) {
            return response()->json([
                'success' => false,
                'message' => 'Comercio no encontrado para el usuario autenticado',
            ], 404);
        }

        return $commerce;
    }
}
