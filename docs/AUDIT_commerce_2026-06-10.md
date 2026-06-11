# Auditoría módulo Commerce — Zonix Pharma

**Fecha:** 10 junio 2026  
**Prompt:** [PROMPT_AUDIT_360_ZONIX.md](PROMPT_AUDIT_360_ZONIX.md)  
**Parámetros:** `MODO=modulo` · `MODULO=commerce` · `PROFUNDIDAD=completa`  
**Alcance:** Backend `app/Http/Controllers/Commerce/*`, `routes/api/commerce.php` · Front `lib/features/services/commerce_*.dart`, `lib/features/utils/commerce_api_errors.dart` · contrato cross-repo

---

## Veredicto ejecutivo (CTO)

- **Semáforo global: ÁMBAR.** Tests en verde (413 Backend, 227 Front ~1 skip) y el helper `commerce_api_errors.dart` es un avance real en UX de errores 403; persisten **deuda de contrato API↔Front**, **inconsistencia de manejo de errores** entre services y **envelope JSON heterogéneo** en controladores commerce (heredado de auditoría API mayo 2026).
- **Quick win más rentable:** extender `commerceHttpErrorMessage` a todos los métodos de `commerce_*_service.dart` que aún muestran solo `statusCode` (≤2h, impacto directo en panel farmacia).
- **Riesgo operativo P1:** endpoints Front huérfanos (`/api/commerce/products-stats`, `/upload-image`, `/promotions/stats`) no existen en `routes/api/commerce.php` — fallarán si la UI los invoca.
- **Incoherencia de dominio P2:** `getReadyOrders()` y `getPreparingOrders()` filtran ambos por `processing` — tabs de órdenes pueden duplicar datos.
- **Backend OrderController** ya no expone `getMessage()` al cliente en catch (solo Log) — **mejora verificada** vs `AUDIT_API_PATTERNS_2026-05-01.md`; Analytics/Dashboard mantienen respuestas `{ error: ... }` sin `success` en auth (C1 parcial).

---

## Fase 0 — Baseline

| Gate | Resultado |
| ---- | --------- |
| `php artisan test --parallel` | **OK** — 413 passed, 1694 assertions |
| `flutter analyze --no-fatal-infos` | **OK** — No issues found |
| `flutter test` | **OK** — 227 passed, ~1 skip |

---

## Fase 1 — Scope Map

| Capa | Elementos | Archivos clave | Tests Backend |
| ---- | --------- | -------------- | ------------- |
| Rutas commerce | 28 rutas bajo `/api/commerce` | `routes/api/commerce.php` | — |
| Controllers | 8 clases | `Commerce/*Controller.php` | `CommerceProductControllerTest.php`, órdenes en `OrderTest.php` |
| Front services | 10 servicios + helper errores | `commerce_*_service.dart`, `commerce_api_errors.dart` | Sin tests dedicados commerce panel |
| Front UI commerce | ~21 pantallas | `lib/features/screens/commerce/*` | Parcial vía widget tests |

### Inventario grep (olores)

| Indicador | Backend Commerce | Front commerce services |
| --------- | ---------------- | ----------------------- |
| `getMessage()` en respuesta JSON al cliente | **0** (solo en `Log::error`) | N/A |
| Uso de `commerceHttpErrorMessage` | N/A | **7 archivos** importan helper |
| Errores solo `statusCode` (sin helper) | N/A | **~24 throws** en 6 services |
| Endpoints Front no en rutas Backend | 3 huérfanos detectados | ver COM-003 |

---

## Fase 2 — Hallazgos

### [COM-001] Errores HTTP crudos en analytics (sin commerceHttpErrorMessage)
- **Rol:** Front
- **Hallazgo:** `getRevenue`, `getOrders`, `getCustomers` y `getPerformance` lanzan `Exception('Error … ${response.statusCode}')` en lugar de parsear `message` / `error_code` del backend (403 pending approval).
- **Evidencia:** `ZonixPharma-Front/lib/features/services/commerce_analytics_service.dart:60`, `:82`, `:127`, `:149`
- **Riesgo:** UX — farmacia pendiente de aprobación ve "Error 403" en reportes.
- **Severidad:** P1
- **Recomendación:** Usar `commerceHttpErrorMessage(action, response)` en todos los branches `else` de analytics, igual que `getOverview` y `getProducts`.
- **Skill:** `zonix-ui-design` + patrón WIP en `commerce_data_service.dart`
- **Verificación:** Simular 403 con farmacia `pending_review`; UI debe mostrar mensaje MPPS/admin, no código HTTP.

### [COM-002] Cobertura parcial de commerceHttpErrorMessage (WIP inconsistente)
- **Rol:** Front
- **Hallazgo:** El helper centralizado existe y está bien diseñado (`COMMERCE_PENDING_APPROVAL`, `COMMERCE_PROFILE_REQUIRED`), pero solo algunos métodos lo usan; el resto mantiene mensajes genéricos o concatena `$e`.
- **Evidencia:** `commerce_api_errors.dart:11-31` (helper OK) vs `commerce_product_service.dart:132`, `commerce_list_service.dart:33`, `commerce_promotion_service.dart:78`
- **Riesgo:** UX inconsistente en el mismo panel commerce.
- **Severidad:** P1
- **Recomendación:** Refactor mecánico: reemplazar throws con statusCode por `commerceHttpErrorMessage` en `commerce_list_service`, `commerce_product_service`, `commerce_promotion_service`, `commerce_analytics_service`, y paths secundarios de `commerce_order_service`.
- **Skill:** `flutter-expert`, DRY
- **Verificación:** `rg "statusCode\)" lib/features/services/commerce*.dart` → 0 en branches de error HTTP.

### [COM-003] Endpoints Front huérfanos (no en Backend)
- **Rol:** Contrato cross-repo
- **Hallazgo:** Tres URLs llamadas desde services no están registradas en `routes/api/commerce.php`.
- **Evidencia:**
  - `commerce_product_service.dart:371` → `GET /api/commerce/products-stats` — **sin ruta**
  - `commerce_product_service.dart:395` → `POST /api/commerce/products/upload-image` — **sin ruta** (upload va en multipart del `store`/`update`)
  - `commerce_promotion_service.dart:220` → `GET /api/commerce/promotions/stats` — **sin ruta**
- **Riesgo:** 404 en runtime si pantallas de reportes/promos invocan estos métodos.
- **Severidad:** P1
- **Recomendación:** (a) Eliminar métodos muertos si no hay UI, o (b) implementar rutas en Backend, o (c) redirigir a analytics/overview existente.
- **Skill:** `zonix-api-patterns`
- **Verificación:** `rg "products-stats|upload-image|promotions/stats" ZonixPharma-Backend/routes` → 0; grep Front callers.

### [COM-004] CommerceService apunta a rutas legacy incorrectas
- **Rol:** Front
- **Hallazgo:** `getCommerces()` usa `GET /api/commerces` (no existe para rol commerce); la ruta canónica es `GET /api/commerce/commerces` (`CommerceListService`).
- **Evidencia:** `commerce_service.dart:21` vs `routes/api/commerce.php:9`
- **Riesgo:** Código muerto hoy (solo `getCommerceStatistics` se usa desde dashboard), pero confunde mantenimiento y reintroduce bugs si alguien llama `getCommerces()`.
- **Severidad:** P2
- **Recomendación:** Deprecar métodos no usados o delegar a `CommerceListService`; corregir URL a `/api/commerce/commerces`.
- **Skill:** `zonix-api-patterns`
- **Verificación:** `rg "getCommerces\(\)" lib` — solo definición; safe to refactor.

### [COM-005] getReadyOrders y getPreparingOrders — mismo filtro
- **Rol:** Front
- **Hallazgo:** Ambos métodos llaman `getOrders(status: 'processing')`.
- **Evidencia:** `commerce_order_service.dart:304-310`
- **Riesgo:** UX — tabs "Preparando" y "Listo" muestran el mismo conjunto si la UI los usa.
- **Severidad:** P2
- **Recomendación:** Alinear con state machine Backend (`zonix-order-lifecycle`): p.ej. `ready` → `processing` + subestado o status distinto si existe; documentar mapping en comentario.
- **Skill:** `zonix-order-lifecycle`
- **Verificación:** Revisar estados reales en `OrderStateMachineService` y pantalla `commerce_orders_page.dart`.

### [COM-006] updateOrderStatus — respuesta sin objeto order
- **Rol:** Contrato cross-repo
- **Hallazgo:** Backend `updateStatus` responde solo `{ success, message }` (línea 173); Front espera `data['order']` y si falta hace refetch (`getOrder`).
- **Evidencia:** Backend `OrderController.php:173` · Front `commerce_order_service.dart:185-189`
- **Riesgo:** Deuda técnica — doble round-trip en cada cambio de estado; funcional pero lento en red mala.
- **Severidad:** P2
- **Recomendación:** Backend devolver `data: { order: ... }` en envelope estándar, o Front documentar refetch intencional.
- **Skill:** `zonix-api-patterns`
- **Verificación:** Test integración o log de 1 vs 2 requests por update.

### [COM-007] Envelope JSON inconsistente en errores auth (C1)
- **Rol:** Backend
- **Hallazgo:** Varios controllers commerce devuelven `{ error: 'No autenticado' }` sin `success: false` ni `message`.
- **Evidencia:** `OrderController.php:25`, `AnalyticsController.php:23`, `DashboardController.php:18`
- **Riesgo:** Front debe parsear múltiples shapes; `commerceHttpErrorMessage` no lee campo `error`.
- **Severidad:** P2
- **Recomendación:** Unificar a `{ success: false, message: '...' }` o adoptar trait `ApiResponse`.
- **Skill:** `zonix-api-patterns` (C1, C2)
- **Verificación:** Matriz C1 en próxima pasada `MODULO=api`.

### [COM-008] CommerceDataService simula éxito offline en pagos (riesgo silencioso)
- **Rol:** Front
- **Hallazgo:** En catch/404 de actualización de datos de pago, retorna `{ success: true, message: '... modo offline' }`.
- **Evidencia:** `commerce_data_service.dart:132-139`
- **Riesgo:** Farmacia cree que guardó datos de pago cuando no persistieron.
- **Severidad:** P2
- **Recomendación:** Mostrar error al usuario; offline solo para lectura cache, no para writes.
- **Skill:** `zonix-payments`
- **Verificación:** Test widget o manual con API caída.

### [COM-009] Positivo — commerce_api_errors y OrderController endurecidos
- **Rol:** Front + Backend
- **Hallazgo:** Helper nuevo prioriza `error_code` del middleware `commerce.approved`; OrderController loguea excepciones sin filtrar `getMessage()` al cliente.
- **Evidencia:** `commerce_api_errors.dart:15-21` · `OrderController.php:72-74`, `:175-177`
- **Riesgo:** N/A (mejora)
- **Severidad:** — (nota)
- **Recomendación:** Replicar patrón en resto de services commerce.
- **Skill:** `code-review-excellence`

### [COM-010] UI commerce — deuda brand (referencia cruzada)
- **Rol:** Front UI
- **Hallazgo:** Módulo `screens/commerce` sigue en estado **NEEDS REWORK** según auditoría UI mayo 2026 (170+ `Colors.*`, copy "restaurante").
- **Evidencia:** `ZonixPharma-Front/docs/AUDIT_UI_PHARMA.md` §2
- **Riesgo:** UX/marca Pharma
- **Severidad:** P2 (no bloqueante funcional commerce API)
- **Recomendación:** Sprint UI separado `MODULO=commerce-ui` o `MODULO=brand`.
- **Skill:** `zonix-ui-design`, `zonix-design-enforcer`

---

## Fase 3 — Síntesis

### Matriz severidad

| Severidad | Count |
| --------- | ----- |
| P0 | 0 |
| P1 | 3 |
| P2 | 6 |
| P3 | 0 |
| Nota positiva | 1 |

### Semáforo por área

| Área | Semáforo | Nota |
| ---- | -------- | ---- |
| API Backend commerce | ÁMBAR | C1 parcial en auth errors; orders/products mejor que analytics histórico |
| Contrato BE↔Front | ROJO | 3 endpoints huérfanos + envelope mixto |
| Front services (WIP) | ÁMBAR | Helper bueno, rollout incompleto |
| Tests | VERDE | Backend commerce cubierto parcialmente; sin tests unitarios services |
| UI commerce | ROJO | Ver AUDIT_UI_PHARMA |
| Seguridad | VERDE | Sin exposición getMessage al cliente en bucket commerce |

### Quick wins (≤2h)

| ID | Acción | Archivos |
| -- | ------ | -------- |
| QW-1 | Aplicar `commerceHttpErrorMessage` en analytics + list + product reads | `commerce_analytics_service.dart`, `commerce_list_service.dart`, `commerce_product_service.dart` |
| QW-2 | Marcar `@Deprecated` + redirect `getCommerces()` → `CommerceListService` | `commerce_service.dart` |
| QW-3 | Comentar o eliminar métodos huérfanos `getProductStats`, `uploadProductImage`, `getPromotionStats` si UI no los usa | `commerce_product_service.dart`, `commerce_promotion_service.dart` |

---

## Fase 4 — Verificación de cierre

| Gate | Baseline | Cierre auditoría |
| ---- | -------- | ---------------- |
| Backend tests | 413 OK | Sin cambios de código en esta sesión |
| Flutter analyze | 0 issues | Sin cambios |
| Flutter test | 227 OK | Sin cambios |

**Hallazgos no verificados en runtime:** COM-003 (404 real), COM-008 (simulación offline), COM-005 (UI tabs) — requieren smoke manual o tests E2E.

---

## Contrato API ↔ Front (matriz resumida)

| Front service | Endpoint | Backend route | Estado |
| ------------- | -------- | ------------- | ------ |
| CommerceDataService | GET/PUT `/api/commerce` | ✓ | OK |
| CommerceListService | `/api/commerce/commerces` | ✓ | OK |
| CommerceOrderService | `/api/commerce/orders/*` | ✓ | OK (updateStatus refetch) |
| CommerceProductService | `/api/commerce/products` | ✓ | OK |
| CommerceProductService | `/api/commerce/products-stats` | ✗ | **HUÉRFANO** |
| CommerceProductService | `/api/commerce/products/upload-image` | ✗ | **HUÉRFANO** |
| CommercePromotionService | `/api/commerce/promotions/*` | ✓ | OK |
| CommercePromotionService | `/api/commerce/promotions/stats` | ✗ | **HUÉRFANO** |
| CommerceAnalyticsService | `/api/commerce/analytics/*` | ✓ | OK |
| CommercePostService | GET `/api/commerce/posts` | ✓ | OK |
| CommerceService | GET `/api/commerces` | ✗ | **LEGACY** |
| CommerceService | GET `/api/commerce/dashboard` | ✓ | OK |

---

## Próximos pasos sugeridos

1. Aprobar QW-1/QW-3 en Front (WIP alineado con `commerce_api_errors.dart`).
2. Ejecutar `MODO=modulo MODULO=commerce-ui PROFUNDIDAD=rapida` para cerrar deuda visual.
3. Re-ejecutar `MODULO=api` bucket Commerce only para refrescar scores C1–C12 post-remediaciones mayo.

**Generado con:** [PROMPT_AUDIT_360_ZONIX.md](PROMPT_AUDIT_360_ZONIX.md)
