<?php

namespace App\Http\Controllers\Commerce;

use App\Http\Controllers\Controller;
use App\Models\Promotion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommercePromotionController extends Controller
{
    /**
     * Promociones globales (`commerce_id` null) solo las muta un administrador.
     */
    private function assertPromotionMutable(Promotion $promotion, $user, ?int $commerceId): void
    {
        if ($promotion->commerce_id !== null && $promotion->commerce_id !== $commerceId) {
            abort(403, 'No tienes acceso a esta promoción');
        }

        if ($promotion->commerce_id === null && ($user->role ?? null) !== 'admin') {
            abort(403, 'Las promociones globales solo pueden ser modificadas por un administrador.');
        }
    }

    /**
     * Listar promociones del comercio (o globales si commerce_id es null).
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        $commerce = $user->profile?->commerce;
        $commerceId = $commerce?->id;

        $query = Promotion::query();
        if ($commerceId) {
            $query->where(function ($q) use ($commerceId) {
                $q->where('commerce_id', $commerceId)->orWhereNull('commerce_id');
            });
        } else {
            $query->whereNull('commerce_id');
        }

        $query->orderByDesc('created_at');

        $perPage = min(max((int) $request->input('per_page', 20), 1), 100);
        $paginated = $query->paginate($perPage);

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

    /**
     * Mostrar una promoción.
     *
     * @param  int  $id
     */
    public function show($id)
    {
        $promotion = Promotion::findOrFail($id);
        $user = Auth::user();
        $commerceId = $user->profile?->commerce?->id;

        if ($promotion->commerce_id !== null && $promotion->commerce_id !== $commerceId) {
            abort(403, 'No tienes acceso a esta promoción');
        }

        return response()->json([
            'success' => true,
            'data' => $promotion,
        ]);
    }

    /**
     * Crear promoción.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'discount_type' => 'required|in:percentage,fixed',
            'discount_value' => 'required|numeric|min:0',
            'minimum_order' => 'nullable|numeric|min:0',
            'maximum_discount' => 'nullable|numeric|min:0',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'terms_conditions' => 'nullable|string|max:1000',
            'priority' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $user = Auth::user();
        $commerce = $user->profile?->commerce;

        $data = $request->only([
            'title', 'description', 'discount_type', 'discount_value',
            'minimum_order', 'maximum_discount', 'start_date', 'end_date',
            'terms_conditions', 'priority',
        ]);
        $data['minimum_order'] = $data['minimum_order'] ?? 0;
        $data['priority'] = $data['priority'] ?? 0;
        $data['is_active'] = $request->boolean('is_active', true);
        $data['commerce_id'] = $commerce?->id;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('promotions', 'public');
            $baseUrl = config('app.env') === 'production'
                ? config('app.url_production')
                : config('app.url_local');
            $data['image_url'] = $baseUrl.'/storage/'.$path;
        }

        $promotion = Promotion::create($data);

        return response()->json([
            'success' => true,
            'data' => $promotion,
        ], 201);
    }

    /**
     * Actualizar promoción.
     *
     * @param  int  $id
     */
    public function update(Request $request, string|int $id)
    {
        $promotion = Promotion::findOrFail($id);
        $user = Auth::user();
        $commerceId = $user->profile?->commerce?->id;

        $this->assertPromotionMutable($promotion, $user, $commerceId);

        $request->validate([
            'title' => 'sometimes|string|max:255',
            'description' => 'sometimes|string',
            'discount_type' => 'sometimes|in:percentage,fixed',
            'discount_value' => 'sometimes|numeric|min:0',
            'minimum_order' => 'nullable|numeric|min:0',
            'maximum_discount' => 'nullable|numeric|min:0',
            'start_date' => 'sometimes|date',
            'end_date' => 'sometimes|date',
            'terms_conditions' => 'nullable|string|max:1000',
            'priority' => 'nullable|integer|min:0',
            'is_active' => 'nullable|boolean',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        $data = $request->only([
            'title', 'description', 'discount_type', 'discount_value',
            'minimum_order', 'maximum_discount', 'start_date', 'end_date',
            'terms_conditions', 'priority',
        ]);
        if ($request->has('is_active')) {
            $data['is_active'] = $request->boolean('is_active');
        }
        $data = array_filter($data, fn ($v) => $v !== null);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('promotions', 'public');
            $baseUrl = config('app.env') === 'production'
                ? config('app.url_production')
                : config('app.url_local');
            $data['image_url'] = $baseUrl.'/storage/'.$path;
        }

        $promotion->update($data);

        return response()->json([
            'success' => true,
            'data' => $promotion->fresh(),
        ]);
    }

    /**
     * Eliminar promoción.
     *
     * @param  int  $id
     */
    public function destroy(string|int $id)
    {
        $promotion = Promotion::findOrFail($id);
        $user = Auth::user();
        $commerceId = $user->profile?->commerce?->id;

        $this->assertPromotionMutable($promotion, $user, $commerceId);

        $promotion->delete();

        return response()->json(['success' => true]);
    }

    /**
     * Activar/desactivar promoción.
     *
     * @param  int  $id
     */
    public function toggle(string|int $id)
    {
        $promotion = Promotion::findOrFail($id);
        $user = Auth::user();
        $commerceId = $user->profile?->commerce?->id;

        $this->assertPromotionMutable($promotion, $user, $commerceId);

        $promotion->update(['is_active' => ! $promotion->is_active]);

        return response()->json([
            'success' => true,
            'data' => $promotion->fresh(),
        ]);
    }
}
