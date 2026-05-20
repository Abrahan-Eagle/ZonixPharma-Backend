---
name: zonix-api-patterns
description: Patrones de API REST de Zonix Pharma. Response format, paginación, roles (buyer/commerce/pharmacist/delivery/admin), middleware, errores y convenciones marketplace farmacéutico VE.
trigger: Cuando se creen nuevos endpoints, controladores, respuestas de API, middleware de autenticación, o se modifiquen rutas.
scope: routes/api.php, app/Http/Controllers/, app/Http/Middleware/
author: Zonix Team
version: 2.0
---

> **Zonix Pharma:** API REST del marketplace farmacéutico — prefijos buyer/commerce/pharmacist, respuesta `{ success, data, message }`, roles en `AGENTS.md`.
# Patrones de API — Zonix Pharma

## Roles (Terminología Estándar)

| Nivel | Código en BD | Nombre Estándar | Alias aceptados            |
| ----- | ------------ | --------------- | -------------------------- |
| 0     | `users`      | **Buyer**       | Comprador, Cliente         |
| 1     | `commerce`   | **Commerce**    | Comercio, Restaurante      |
| 2     | `delivery`   | **Delivery**    | Delivery Agent, Repartidor |
| 3     | `admin`      | **Admin**       | Administrador              |

> **Nota sobre rutas compartidas:** Endpoints como `/api/profiles`, `/api/phones`, `/api/addresses` no llevan prefijo de rol porque son multi-rol.

## 1. Response Format Estándar

**TODAS** las respuestas deben seguir este formato:

### Éxito:

```json
{
    "success": true,
    "message": "Operación exitosa",
    "data": { ... }
}
```

### Error:

```json
{
    "success": false,
    "message": "Descripción del error"
}
```

### Con paginación (Laravel paginate):

```json
{
    "data": [...],
    "current_page": 1,
    "per_page": 15,
    "total": 100,
    "last_page": 7,
    "links": { "first": "...", "last": "...", "prev": null, "next": "..." }
}
```

## 2. Patrón de Controlador

```php
public function actionName(Request $request)
{
    try {
        // 1. Autenticación y permisos
        $user = Auth::user()->load('profile.commerces');
        $profile = $user->profile;

        if (!$profile) {
            return response()->json([
                'success' => false,
                'message' => 'Profile not found'
            ], 404);
        }

        // 2. Validación
        $request->validate([
            'campo' => 'required|string|max:255',
        ]);

        // 3. Lógica de negocio
        $result = Model::create([...]);

        // 4. Respuesta exitosa
        return response()->json([
            'success' => true,
            'message' => 'Operación exitosa',
            'data' => $result
        ]);

    } catch (\Exception $e) {
        // 5. Error handling
        \Log::error('Error en acción: ' . $e->getMessage());
        return response()->json([
            'success' => false,
            'message' => 'Error interno: ' . $e->getMessage()
        ], 500);
    }
}
```

## 3. Códigos de Estado HTTP

| Código | Uso en Zonix                                           |
| ------ | ------------------------------------------------------ |
| `200`  | Éxito general (GET, PUT, DELETE)                       |
| `201`  | Recurso creado (POST)                                  |
| `400`  | Transición de estado inválida, datos incorrectos       |
| `403`  | No autorizado (Commerce no es dueño de la orden, etc.) |
| `404`  | Profile/Order/Product no encontrado                    |
| `422`  | Error de validación de Laravel                         |
| `500`  | Error interno del servidor                             |

## 4. Roles y Middleware

### Roles del sistema:

| Rol             | Middleware      | Prefijo de ruta |
| --------------- | --------------- | --------------- |
| `users` (Buyer) | `role:users`    | `/buyer/`       |
| `commerce`      | `role:commerce` | `/commerce/`    |
| `delivery`      | `role:delivery` | `/delivery/`    |
| `admin`         | `role:admin`    | `/admin/`       |

### Estructura de rutas:

```php
// Rutas públicas (sin auth)
Route::get('/ping', ...);
Route::get('/banks', ...);
Route::get('/available-payment-methods', ...);

// Auth routes (throttle)
Route::prefix('auth')->middleware('throttle:auth')->group(function () {
    Route::post('/register', ...);
    Route::post('/login', ...);
    Route::post('/google', ...);
});

// Rutas protegidas (auth:sanctum)
Route::middleware('auth:sanctum')->group(function () {
    // Compartidas entre roles
    Route::prefix('profiles')->group(...);
    Route::prefix('addresses')->group(...);
    Route::prefix('location')->group(...);

    // Por rol
    Route::middleware('role:users')->prefix('buyer')->group(...);
    Route::middleware('role:commerce')->prefix('commerce')->group(...);
    Route::middleware('role:delivery')->prefix('delivery')->group(...);
    Route::middleware('role:admin')->prefix('admin')->group(...);
});
```

## 5. Autenticación

**Sistema:** Laravel Sanctum (token-based)

```php
// Login → retorna token
$token = $user->createToken('auth_token')->plainTextToken;

// Cada request requiere header:
// Authorization: Bearer {token}

// Logout
$user->currentAccessToken()->delete();
```

### Google OAuth:

```
POST /api/auth/google → { "id_token": "google_token" }
```

## 6. Paginación

```php
// Estándar: 15 items por página
$perPage = $request->input('per_page', 15);
$results = Model::query()->paginate($perPage);

// El frontend envía: ?per_page=20&page=2
return response()->json($results);
```

## 7. Verificación de Propiedad (Commerce)

**PATRÓN CRÍTICO:** Siempre verificar que el recurso pertenece al usuario:

```php
$user = Auth::user()->load('profile.commerces');
$profile = $user->profile;

// Verificar que el usuario tiene commerces
if (!$profile || !$profile->commerces()->exists()) {
    return response()->json(['error' => 'User is not associated with a commerce'], 403);
}

// Verificar que la orden pertenece al commerce del usuario
if (!$profile->commerces()->where('id', $order->commerce_id)->exists()) {
    return response()->json(['error' => 'Unauthorized'], 403);
}

// Para commerce_id específico solicitado
if ($request->has('commerce_id')) {
    $requested = $profile->commerces()->find($request->commerce_id);
    if (!$requested) {
        return response()->json(['error' => 'Unauthorized'], 403);
    }
    $commerce = $requested;
}
```

## 8. Módulos de API por Feature

| Módulo        | Prefijo                | Endpoints clave                          |
| ------------- | ---------------------- | ---------------------------------------- |
| Auth          | `/auth/`               | register, login, google, logout, refresh |
| Profile       | `/profiles/`           | CRUD, delivery-agent, commerce           |
| Orders        | `/buyer/orders/`       | CRUD, payment-proof, cancel              |
| Cart          | `/buyer/cart/`         | add, show, update-quantity, remove       |
| Restaurants   | `/buyer/restaurants/`  | index, show                              |
| Payments      | `/buyer/payments/`     | methods, card, mobile, refund            |
| Tracking      | `/buyer/tracking/`     | order status, delivery location          |
| Reviews       | `/buyer/reviews/`      | rate restaurant/delivery                 |
| Chat          | `/chat/`               | conversations, messages, FCM             |
| Search        | `/buyer/search/`       | restaurants, products, categories        |
| Promotions    | `/buyer/promotions/`   | coupons, validate, apply                 |
| Gamification  | `/buyer/gamification/` | points, rewards, badges                  |
| Location      | `/location/`           | update, nearby, route, geocode           |
| Notifications | `/notifications/`      | list, stats, mark-read, push             |
| Analytics     | `/admin/analytics/`    | overview, revenue, KPI                   |

## 9. Throttling

```php
Route::middleware('throttle:auth')    // Rutas de autenticación
Route::middleware('throttle:create')  // Creación de órdenes
```

## 10. Reglas de Oro

1. **SIEMPRE usar `auth:sanctum`** para rutas protegidas
2. **SIEMPRE verificar propiedad** del recurso antes de modificar
3. **SIEMPRE paginar** listados con `per_page` configurable
4. **SIEMPRE retornar `success: true/false`** en la respuesta
5. **SIEMPRE loggear errores** con `\Log::error()`
6. **NUNCA exponer errores internos** en producción (mostrar mensaje genérico)
7. **Validar PRIMERO**, lógica de negocio DESPUÉS

## 11. Deprecaciones

- **`profiles.phone`** — campo deprecado, se lee vía accessor desde tabla `phones` (ver `zonix-onboarding` § 5.7)

## 12. Cross-references

- **Estados de orden:** `zonix-order-lifecycle` § 1-2
- **Sistema de pagos:** `zonix-payments` § 1-4
- **Eventos en tiempo real:** `zonix-realtime-events` § 3
- **Onboarding por rol:** `zonix-onboarding` § 1-2
