---
name: zonix-analytics
description: Analytics y reportes Zonix Pharma. KPIs farmacia/admin, órdenes Rx, delivery, ARPF/GMV piloto y buenas prácticas SQL.
trigger: Cuando se trabajen dashboards, métricas, reportes, filtros de fechas o consultas agregadas sobre órdenes, comercios o delivery.
scope: app/Http/Controllers/Admin/AnalyticsController.php, app/Http/Controllers/Commerce/AnalyticsController.php, app/Services/AnalyticsService.php, database/migrations/*analytics*
author: Zonix Team
version: 1.0
---

> **Zonix Pharma:** KPIs y reportes para farmacias y admin; agregaciones sobre órdenes Pharma (incl. estados Rx). Ver `AGENTS.md`.
# Analytics y reportes — Zonix Pharma

## 1. KPIs Clave

- **Ingresos**: suma de `orders.total` filtrado por rango de fechas y estado `paid|processing|shipped|delivered`.
- **Órdenes por estado**: conteo agrupado por `status` (ver `zonix-order-lifecycle` § 1).
- **Ticket promedio**: promedio de `orders.total` en rango dado.
- **Performance delivery**:
  - Tiempo medio desde `shipped` → `delivered`.
  - Órdenes entregadas vs canceladas por delivery.
- **Commerce analytics**:
  - Ventas por comercio.
  - Productos más vendidos.
  - Horas pico de pedidos.

## 1.1 KPIs piloto (planning — no producción)

Fuente numérica: [PROYECCION_FINANCIERA_12M.md](../../docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md) §1.1 (tier **Lean 101k**). Invocar `zonix-startup-context` antes de citar cifras. **No inventar** métricas de GMV real hasta Day-D.

| KPI | Referencia plan | Uso en dashboard |
|-----|-----------------|------------------|
| **ARPF** (ingreso mensual por farmacia activa) | Placeholder **~USD 50** | Comparar revenue commerce / farmacias activas |
| **Farmacias activas** | Equilibrio **M11 ~151**; **M12 ~159**; firmas año 1 **~175** | Conteo `commerce` con órdenes pagadas en ventana |
| **GMV** (órdenes pagadas) | Derivado de órdenes `paid|processing|shipped|delivered` | Suma `orders.total` — no confundir con revenue Zonix (cuota + fee) |
| **Burn mensual ref.** | M11 **7.431** USD (Lean) | Solo reporting interno vs `zonix-financial-model` |

Cuando exista GMV piloto real, contrastar desviación vs PROYECCION §7 (sensibilidad).

## 2. Patrones de Consultas

- **Siempre filtrar por rango de fechas** (`created_at` o `payment_validated_at`):

```php
$from = $request->date('from', now()->startOfMonth());
$to   = $request->date('to', now());

$query = Order::whereBetween('created_at', [$from->startOfDay(), $to->endOfDay()]);
```

- **Estados válidos para métricas de venta**:

```php
$paidStatuses = ['paid', 'processing', 'shipped', 'delivered'];
$query->whereIn('status', $paidStatuses);
```

- **Usar agregaciones de base de datos**, no colecciones en PHP:

```php
$stats = $query->selectRaw('
    COUNT(*) as orders_count,
    SUM(total) as revenue,
    AVG(total) as avg_ticket
')->first();
```

## 3. Buenas Prácticas de Performance

- Índices recomendados:
  - `orders.status`
  - `orders.created_at`
  - `orders.commerce_id`
  - `orders.delivery_type`
- Evitar N+1:
  - Para analytics por producto/comercio, usar `join` y `groupBy` en lugar de cargar modelos y mapear en PHP.
- Limitar tamaño de respuesta:
  - Para tablas de detalle (lista de órdenes), **siempre paginar**.

## 4. Endpoints Típicos

### Admin

- `GET /api/admin/analytics/overview`
- `GET /api/admin/analytics/orders-by-status`
- `GET /api/admin/analytics/top-commerces`

### Commerce

- `GET /api/commerce/analytics/overview`
- `GET /api/commerce/analytics/top-products`
- `GET /api/commerce/analytics/orders-by-hour`

Patrón de respuesta:

```php
return response()->json([
    'success' => true,
    'data' => [
        'orders_count' => $stats->orders_count,
        'revenue' => $stats->revenue,
        'avg_ticket' => $stats->avg_ticket,
    ],
    'message' => 'Analytics calculados correctamente',
]);
```

## 5. Reglas de Negocio

- Las métricas de ingresos **no** incluyen órdenes `cancelled` ni `pending_payment`.
- El `delivery_fee` se considera ingreso para el comercio solo si el modelo de negocio lo define así; por defecto, va al delivery (ver `zonix-payments` § 5).
- Los reportes por comercio **siempre** deben filtrar por `commerce_id` asociado al perfil autenticado (ver `zonix-api-patterns` § 7).

## 6. Cross-references

- **Pagos y montos**: `zonix-payments` § 5 (campos financieros en `orders` y `commerces`).
- **Estados de orden**: `zonix-order-lifecycle` § 1-2.
- **Sistema de delivery**: `zonix-delivery-system` § 8 (flujo de asignación y tiempos).

