<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Añade cabeceras HTTP Deprecation / Sunset para rutas API legacy (Eats → Pharma).
 */
class DeprecationHeadersMiddleware
{
    public function handle(Request $request, Closure $next, string $feature = 'legacy'): Response
    {
        /** @var Response $response */
        $response = $next($request);

        $response->headers->set('Deprecation', 'true');
        $response->headers->set('Sunset', 'Wed, 01 Oct 2027 00:00:00 GMT');
        $response->headers->set('X-Deprecated-Feature', $feature);

        return $response;
    }
}
