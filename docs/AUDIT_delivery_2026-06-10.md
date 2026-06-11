# Auditoría módulo Delivery — Zonix Pharma

**Fecha:** 10 junio 2026  
**Prompt:** [PROMPT_AUDIT_360_ZONIX.md](PROMPT_AUDIT_360_ZONIX.md)  
**Parámetros:** `MODO=modulo` · `MODULO=delivery` · `PROFUNDIDAD=completa`  
**Alcance:** `Delivery/DeliveryController`, `DeliveryCompany/CompanyController`, `DeliveryService`, `DeliveryCompanyService`, pantallas `delivery/*` y `delivery_company/*`

---

## Veredicto ejecutivo

- **Semáforo: VERDE.** Rutas `/api/delivery/*` y `/api/delivery-company/*` alineadas con Front; tests backend amplios (`DeliveryControllerTest`, `DeliveryCompanyAssignOrderTest`, `DeliveryObservabilityTest`).
- **Remediación lote 8:** `delivery_api_errors.dart`, mensajes UX en `DeliveryService`, copy Pharma (Farmacia), test `GET /api/delivery/me`.

---

## Contrato API ↔ Front

| Endpoint | Front | Estado |
| -------- | ----- | ------ |
| GET `/delivery/me` | `DeliveryService.getMyAgentId` | ✓ |
| GET `/delivery/available-orders` | `getAvailableOrders` / `_getAvailableOrdersRaw` | ✓ lote 8 errores |
| GET `/delivery/orders` | `getDeliveryOrders` | ✓ |
| POST `/delivery/orders/{id}/accept` | `acceptOrder` | ✓ `error_code` 409 |
| POST `/delivery/orders/{id}/scan-pickup` | `scanPickup` | ✓ lote 8 mensajes |
| POST `/delivery/orders/{id}/scan-delivery` | `scanDelivery` | ✓ lote 8 mensajes |
| PATCH `/delivery/orders/{id}/status` | `updateOrderStatus` | ✓ state machine |
| GET `/delivery/history/{agentId}` | `getDeliveryHistory` | ✓ |
| GET `/delivery/earnings/{agentId}` | `getDeliveryEarnings` | ✓ |
| GET `/delivery-company/dashboard` | `DeliveryCompanyService.loadDashboard` | ✓ (sin helper aún — P2) |

---

## Hallazgos cerrados

| ID | Tema | Estado |
| -- | ---- | ------ |
| DEL-001 | Errores HTTP genéricos en DeliveryService | ✅ `deliveryHttpErrorMessage` |
| DEL-002 | `error_code` backend no mapeado en Front (accept, QR, status) | ✅ lote 8 |
| DEL-003 | UI dice "Comercio" en flujo repartidor | ✅ "Farmacia" |
| DEL-004 | Sin test explícito `/delivery/me` | ✅ `test_me_returns_authenticated_agent` |

---

## Pendiente P2

- `DeliveryCompanyService`: helper compartido o `delivery_company_api_errors.dart` (dashboard, assign, validate payment).
- Cadena de frío: restringir aceptación si pedido `cold_chain_required` y agente sin flag — ver `zonix-delivery-system`.
- `delivery_order_detail_page`: fallback `commerce` vs `business_name` ya cubierto; unificar label "Farmacia" en routes map subtitle.

---

## Verificación

```bash
php artisan test --filter=DeliveryController
flutter test test/features/utils/delivery_api_errors_test.dart
flutter analyze lib/features/services/delivery_service.dart
```
