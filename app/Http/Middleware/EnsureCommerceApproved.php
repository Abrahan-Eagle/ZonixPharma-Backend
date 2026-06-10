<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Bloquea operaciones de comercio hasta que el establecimiento esté aprobado por admin.
 */
class EnsureCommerceApproved
{
    public function handle(Request $request, Closure $next): Response
    {
        $user = $request->user();
        if (! $user || $user->role !== 'commerce') {
            return $next($request);
        }

        $commerce = $user->profile?->commerce;
        if (! $commerce) {
            return response()->json([
                'success' => false,
                'message' => 'Debes registrar tu farmacia antes de acceder al panel comercial.',
                'error_code' => 'COMMERCE_PROFILE_REQUIRED',
            ], 403);
        }

        if ($commerce->status === 'approved') {
            return $next($request);
        }

        $path = trim($request->path(), '/');
        $method = strtoupper($request->method());

        $allowed = match (true) {
            $path === 'api/commerce/commerces' && in_array($method, ['GET', 'POST'], true) => true,
            $path === 'api/commerce' && in_array($method, ['GET', 'PUT'], true) => true,
            str_starts_with($path, 'api/commerce/commerces/') && $method === 'PUT' => true,
            default => false,
        };

        if ($allowed) {
            return $next($request);
        }

        return response()->json([
            'success' => false,
            'message' => 'Tu farmacia está pendiente de aprobación por el administrador.',
            'error_code' => 'COMMERCE_PENDING_APPROVAL',
            'data' => ['commerce_status' => $commerce->status],
        ], 403);
    }
}
