<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/**
 * Posts/publicaciones del commerce (de todos sus comercios).
 */
class CommercePostController extends Controller
{
    /**
     * Listar posts de los comercios del perfil.
     * GET /api/commerce/posts
     */
    public function index(Request $request): JsonResponse
    {
        $profile = Auth::user()->profile;
        if (! $profile) {
            return response()->json([
                'success' => false,
                'message' => 'Perfil no encontrado',
            ], 404);
        }

        $commerceIds = $profile->commerces()->pluck('id');
        $perPage = min(max((int) $request->input('per_page', 20), 1), 100);
        $paginated = Post::whereIn('commerce_id', $commerceIds)
            ->with('commerce:id,business_name')
            ->orderByDesc('created_at')
            ->paginate($perPage);

        return response()->json([
            'success' => true,
            'data' => $paginated->items(),
            'pagination' => [
                'total' => $paginated->total(),
                'per_page' => $paginated->perPage(),
                'current_page' => $paginated->currentPage(),
                'last_page' => $paginated->lastPage(),
            ],
        ]);
    }
}
