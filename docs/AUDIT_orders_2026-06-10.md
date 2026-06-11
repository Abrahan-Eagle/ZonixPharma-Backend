# Auditoría módulo Orders (buyer) — Zonix Pharma

**Fecha:** 10 junio 2026  
**Prompt:** [PROMPT_AUDIT_360_ZONIX.md](PROMPT_AUDIT_360_ZONIX.md)  
**Parámetros:** `MODO=modulo` · `MODULO=orders` · `PROFUNDIDAD=completa`  
**Alcance:** Backend `Buyer/OrderController`, `Buyer/TrackingController`, `Buyer/OrderTrackingController` · Front `order_service.dart`, `lib/features/screens/orders/*`, modelo `Order`

---

## Veredicto ejecutivo (CTO)

- **Semáforo global: VERDE-ÁMBAR.** Ciclo Rx (lotes 1–2) cerrado en backend; Front con countdown TTL y CTA subir receta. Persiste deuda UX en **mensajes HTTP crudos** en algunos paths de `OrderService` y copy legacy `restaurant` en rating/chat (P2).
- **Quick win P1 (lote 3):** helper `order_api_errors.dart` + envelope `success` en list/show/tracking/cancel/fetch.
- **Backend store:** errores de creación ya usan `errorResponse` sin filtrar `getMessage()` al cliente (500 genérico) — **OK AppSec**.

---

## Fase 0 — Baseline

| Gate | Resultado |
| ---- | --------- |
| `php artisan test --parallel` | **OK** — 435+ passed |
| `flutter analyze` | **OK** |
| `flutter test` | **OK** — 230+ passed (~1 skip) |

---

## Fase 1 — Scope Map

| Capa | Rutas / archivos clave |
| ---- | ---------------------- |
| Buyer orders API | `POST/GET /api/buyer/orders`, `{id}`, cancel, payment-proof, tracking, delivery-qr |
| Tracking legacy | `GET /api/buyer/tracking/order/{id}`, `OrderTrackingController` |
| Front service | `order_service.dart` (~628 líneas) |
| UI buyer | 11 pantallas en `lib/features/screens/orders/` |

### Inventario contrato

| Endpoint Backend | Front consumer | Estado |
| ---------------- | -------------- | ------ |
| `GET /buyer/orders` paginado `{ data: { items, pagination } }` | `fetchOrders` + `_extractListFromEnvelope` | ✓ compatible |
| `GET /buyer/orders/{id}` `{ success, data }` | `getOrderById` | ✓ lote 3 exige `success` |
| `POST /buyer/orders/{id}/cancel` | `cancelOrder` | ✓ lote 3 |
| `GET /buyer/orders/{orderId}/tracking` | `getOrderTracking` | ✓ Pharma Rx timeline (lote 2) |
| `GET /buyer/orders/{id}/payment-info` | `getPaymentInfo` | ✓ |
| Chat `/buyer/orders/{id}/messages` | `getOrderMessages` / `sendOrderMessage` | ✓ dual envelope |

---

## Fase 2 — Hallazgos

### [ORD-001] fetchOrders ignoraba `success: false` en HTTP 200
- **Severidad:** P1 · **Estado lote 3:** Remediado

### [ORD-002] getOrderById / tracking / cancel sin helper unificado
- **Evidencia:** mensajes `Error … ${statusCode}` en branches else
- **Severidad:** P1 · **Estado lote 3:** `orderHttpErrorMessage` + tests

### [ORD-003] createOrder duplicaba parsing error_code
- **Severidad:** P2 · **Estado lote 3:** centralizado en helper

### [ORD-004] Copy legacy `restaurant` en rating y chat
- **Evidencia:** `order_rating_page.dart`, `buyer_order_chat_page.dart` case `'restaurant'`
- **Severidad:** P2 · **Backlog:** alias pharma en UI copy, no rompe API

### [ORD-005] Rx E2E no automatizado
- **Severidad:** P2 · **Doc:** [SMOKE_RX_E2E.md](SMOKE_RX_E2E.md)

### [ORD-006] Positivo — Rx lifecycle
- `pending_prescription_validation` → TTL command → cancel orphan
- Front: `expiresAt`, countdown chip, CTA receta en detalle
- Tests: `ExpirePendingPrescriptionsCommandTest`, `OrderTest` tracking Rx

---

## Fase 3 — Remediación lote 3

| Archivo | Cambio |
| ------- | ------ |
| `front:lib/features/utils/order_api_errors.dart` | Nuevo helper ORDER_* |
| `front:lib/features/services/order_service.dart` | success + helper en list/show/tracking/cancel/create |
| `front:test/features/utils/order_api_errors_test.dart` | 3 tests |

---

## Fase 4 — Verificación

```bash
cd ZonixPharma-Backend && php artisan test --parallel
cd ZonixPharma-Front && flutter analyze && flutter test
```

---

## Próximos pasos

1. Ejecutar smoke manual [SMOKE_RX_E2E.md](SMOKE_RX_E2E.md).
2. P2: renombrar labels restaurant→farmacia en rating/chat UI.
3. P2: tests widget `order_detail_page` countdown Rx.
