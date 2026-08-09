# Auditoría 8 fases — Módulo Commerce Zonix Pharma

**Fecha:** 10 junio 2026  
**Parámetros:** `MODO=modulo` · `MODULO=commerce` · `PROFUNDIDAD=completa`  
**Repos:** ZonixPharma-Backend + ZonixPharma-Front  
**Prompt base:** [PROMPT_AUDIT_360_ZONIX.md](PROMPT_AUDIT_360_ZONIX.md)  
**Auditoría previa:** piloto jun-2026 re-verificado e integrado aquí (archivo piloto eliminado ago 2026).

---

## FASE 0 — Inventario

### Tabla archivo | tipo | responsabilidad | riesgo

| Archivo | Tipo | Responsabilidad | Riesgo |
| ------- | ---- | --------------- | ------ |
| `routes/api/commerce.php` | Rutas | 37 rutas `/api/commerce/*` bajo `auth:sanctum` + `role:commerce` + `commerce.approved` | Alto |
| `EnsureCommerceApproved.php` | Middleware | Bloquea panel si farmacia no `approved`; whitelist CRUD perfil/comercios | Alto |
| `CommerceDataController.php` | API | GET/PUT `/api/commerce`, logo; `resolveCommerce()` con `X-Commerce-Id` | Alto |
| `CommerceListController.php` | API | Multi-sede: list/create/set-primary | Medio |
| `OrderController.php` (Commerce) | API | Órdenes, status, validate-payment, reject, QR | Alto |
| `ProductController.php` | API | CRUD medicamentos + toggle; solo `getPrimaryCommerce()` | Alto |
| `DashboardController.php` | API | KPIs dashboard farmacia | Medio |
| `AnalyticsController.php` | API | 6 endpoints analytics | Medio |
| `CommercePromotionController.php` | API | CRUD promos; Rx no descuenta en backend (config) | Medio |
| `CommercePostController.php` | API | Posts del comercio | Bajo |
| `Admin/CommerceController.php` | API admin | Aprobación `status`, toggle open | Alto |
| `StoreProductRequest.php` | Validación | Campos Pharma Rx/cold_chain/INHRR | Alto |
| `Commerce.php` (model) | Modelo | Entidad farmacia, `status`, `is_primary` | Medio |
| `commerce_api_errors.dart` | Front util | Parseo `error_code` 403 middleware | Alto |
| `commerce_*_service.dart` (×9) | Front services | HTTP panel commerce | Alto |
| `commerce_*.dart` modelos (×5) | Front models | Parseo JSON órdenes/productos | Medio |
| `screens/commerce/*` (×22) | Front UI | Panel farmacia | Medio (brand) |
| `CommerceOrderTest.php` etc. (×4) | Tests | Feature commerce backend | Medio |

**Archivos revisados (lectura directa o grep+lectura parcial):** 58

### Flujos críticos a trazar

1. **Aprobación farmacia → panel:** Admin `PUT /api/admin/commerces/{id}/status` → middleware `COMMERCE_PENDING_APPROVAL` → dashboard vacío vs datos reales.
2. **Producto Rx:** `commerce_product_form_page` → `CommerceProductService.createProduct` → `POST /api/commerce/products` + `StoreProductRequest` (requires_prescription, prescription_type).
3. **Orden pago:** Buyer crea orden Rx (`pending_prescription_validation` → `pending_payment`) → commerce `approve-for-payment` → buyer sube comprobante → `validate-payment` con `DB::transaction` + `lockForUpdate`.

### Endpoints API commerce (rol `commerce`)

| Método | Ruta | Controller |
| ------ | ---- | ---------- |
| GET | `/api/commerce` | CommerceDataController@show |
| PUT | `/api/commerce` | CommerceDataController@update |
| POST | `/api/commerce/logo` | CommerceDataController@uploadLogo |
| GET | `/api/commerce/commerces` | CommerceListController@index |
| POST | `/api/commerce/commerces` | CommerceListController@store |
| PUT | `/api/commerce/commerces/{commerce}/set-primary` | CommerceListController@setPrimary |
| GET | `/api/commerce/dashboard` | DashboardController@index |
| GET/POST/PUT/PATCH/DELETE | `/api/commerce/products` (+ resource) | ProductController |
| PUT | `/api/commerce/products/{id}/toggle-disponible` | ProductController@toggleDisponible |
| GET | `/api/commerce/orders` | OrderController@index |
| GET | `/api/commerce/orders/{order}` | OrderController@show |
| PUT | `/api/commerce/orders/{order}/status` | OrderController@updateStatus |
| POST | `/api/commerce/orders/{id}/validate-payment` | OrderController@validatePayment |
| POST | `/api/commerce/orders/{id}/approve-for-payment` | OrderController@approveForPayment |
| POST | `/api/commerce/orders/{id}/reject` | OrderController@rejectOrder |
| GET | `/api/commerce/orders/{id}/pickup-qr` | OrderController@pickupQr |
| POST | `/api/commerce/orders/{id}/validar-comprobante` | OrderController@validarComprobante (alias) |
| GET/POST/PUT/PATCH/DELETE | `/api/commerce/promotions` | CommercePromotionController |
| PUT | `/api/commerce/promotions/{id}/toggle` | CommercePromotionController@toggle |
| GET | `/api/commerce/posts` | CommercePostController@index |
| GET ×6 | `/api/commerce/analytics/*` | AnalyticsController |

**Relacionados admin (aprobación):** `GET/PUT /api/admin/commerces/*`

✅ **Fase 0 completada** — Sin bloqueadores. Continúo Fase 1.

---

## FASE 1 — Automatizado

| Comando | Resultado |
| ------- | --------- |
| `php artisan test --parallel` | **OK** — 413 passed, 1694 assertions |
| `./vendor/bin/pint --test` | **FAIL** — exit 1; violaciones en archivos **fuera** del módulo commerce (ExportController, LegalController, PrescriptionFileStorageService, PharmaPilotPaymentCatalogTest) |
| `php artisan route:list --path=commerce` | **OK** — 44 rutas listadas (incl. admin + profiles) |
| `flutter analyze --no-fatal-infos` | **OK** — No issues found |
| `flutter test` | **OK** — 227 passed, ~1 skip |

### Greps olores (módulo commerce)

| Patrón | Resultado |
| ------ | --------- |
| `TODO/FIXME` en `commerce*` Front | 0 |
| URLs hardcodeadas `http(s)://` en services commerce | 0 (solo detección en `_sanitizeUserMessage`) |
| Secretos obvios en commerce | 0 |
| `Colors.` / `Color(0x` en `screens/commerce/` | **22 archivos**, ~319 ocurrencias combinadas |
| `getMessage()` expuesto al cliente en `Controllers/Commerce` | **0** (solo `Log::error`) |
| `DB::transaction` en Commerce controllers | OrderController@validatePayment, CommerceListController@setPrimary |

✅ **Fase 1 completada** — Pint global falla pero no bloquea commerce funcional. Continúo Fase 2.

---

## FASE 2 — Contratos API ↔ Cliente

### Matriz resumida (desalineaciones confirmadas)

| Endpoint | Backend | Front consumer | ¿Alineado? | Problema |
| -------- | ------- | -------------- | ---------- | -------- |
| GET `/api/commerce/orders` | envelope + `data.items` + pagination | `CommerceOrderService.getOrders` + `_extractListFromEnvelope` | **Sí** | — |
| PUT `/api/commerce/orders/{id}/status` | `{success, message}` sin `order` | `updateOrderStatus` refetch vía `getOrder` | **Parcial** | Extra round-trip |
| POST `validate-payment` | envelope + error_code | `validatePayment` parsea message/errors | **Sí** | — |
| GET `/api/commerce/products` | `data` list + `pagination` top-level | `getProductsPage` | **Sí** | — |
| GET `/api/commerce/products-stats` | **No existe** | `CommerceProductService.getProductStats:371` | **No** | Huérfano 404 |
| POST `/api/commerce/products/upload-image` | **No existe** | `uploadProductImage:395` | **No** | Upload va en store/update multipart |
| GET `/api/commerce/promotions/stats` | **No existe** | `getPromotionStats:220` | **No** | Huérfano 404 |
| GET `/api/commerce/dashboard` | `{success, data: {...}}` | `CommerceService.getCommerceStatistics` | **Sí** | Usa `commerceHttpErrorMessage` |
| GET `/api/commerce/analytics/revenue` | envelope | `getRevenue` else branch | **Parcial** | Error solo statusCode |
| GET `/api/commerces` | **No existe** (canónico: `/api/commerce/commerces`) | `CommerceService.getCommerces:21` | **No** | Legacy; método no usado en UI |
| GET `/api/commerce/promotions/{id}` | **Raw model JSON** sin envelope | `getPromotion:76` retorna `data` crudo | **Parcial** | Front espera mapa plano; rompe si backend unifica envelope |
| 403 `commerce.approved` | `{success, message, error_code}` | `commerce_api_errors.dart` | **Sí** | Solo donde se usa el helper |
| GET `/api/location/delivery-zones` | Location API | `commerce_delivery_zone_service.dart` | **Sí** | Fuera prefix commerce pero usado en pantallas zones |

### Hallazgos F2 (detalle)

#### [COM2-001] Endpoints huérfanos en Front
- **Etiqueta:** breaking
- **Severidad:** Alta (P1)
- **Evidencia:** `commerce_product_service.dart:371,395` · `commerce_promotion_service.dart:220` · `routes/api/commerce.php` sin rutas equivalentes
- **Impacto:** 404 si UI invoca stats/upload standalone
- **Fix:** Eliminar métodos muertos o implementar rutas backend

#### [COM2-002] Rollout incompleto de commerceHttpErrorMessage
- **Etiqueta:** issue
- **Severidad:** Alta (P1)
- **Evidencia:** Helper en 7 puntos vs ~24 throws con `statusCode` en services (`commerce_analytics_service.dart:60,82,127,149`, `commerce_list_service.dart:33`, etc.)
- **Impacto:** Farmacia pending approval ve "Error 403" en analytics/list
- **Fix:** Usar helper en todos los branches HTTP error

#### [COM2-003] CommercePromotionController@show sin envelope
- **Etiqueta:** breaking
- **Severidad:** Media (P2)
- **Evidencia:** `CommercePromotionController.php:76` — `return response()->json($promotion)`
- **Impacto:** Inconsistente con index/store; Front `getPromotion` asume mapa raíz
- **Fix:** Unificar `{success, data}` o adaptar Front explícitamente

✅ **Fase 2 completada** — 3 contratos desalineados críticos + 2 parciales. Continúo Fase 3.

---

## FASE 3 — Dominio y datos

#### [COM3-001] validatePayment con transacción y lock — praise
- **Etiqueta:** praise
- **Severidad:** —
- **Evidencia:** `OrderController.php:216-217` — `DB::transaction` + `lockForUpdate()`
- **Impacto:** Protege doble validación de comprobante

#### [COM3-002] Multi-sede inconsistente entre controllers
- **Etiqueta:** bug
- **Severidad:** Alta (P1)
- **Evidencia:** `CommerceDataController` usa `resolveCommerce()` + `X-Commerce-Id`; `ProductController.php:24`, `AnalyticsController.php:27`, `OrderController.php:29` usan solo `getPrimaryCommerce()`. `CommercePromotionController.php:32` usa `$user->profile?->commerce` (hasOne `is_primary`, puede ser **null** si no hay primary marcado)
- **Impacto:** Farmacia con sede secundaria activa opera catálogo/analytics de la primary incorrecta
- **Fix:** Trait compartido `resolveCommerce()` en todos los controllers commerce

#### [COM3-003] Órdenes Rx sin tab en panel commerce
- **Etiqueta:** bug
- **Severidad:** Alta (P1)
- **Evidencia:** `commerce_orders_page.dart:36-43` — tabs sin `pending_prescription_validation`; `_statusColor` default no distingue Rx (`:259-275`)
- **Impacto:** Órdenes esperando receta solo visibles en "Todas"; farmacia puede perderlas
- **Fix:** Tab + color + filtro API para `pending_prescription_validation`

#### [COM3-004] getReadyOrders === getPreparingOrders
- **Etiqueta:** bug
- **Severidad:** Media (P2)
- **Evidencia:** `commerce_order_service.dart:304-310` — ambos `status: 'processing'`
- **Impacto:** Helpers legacy confusos si se reutilizan
- **Fix:** Documentar o mapear estados reales del state machine

#### [COM3-005] Dashboard pending_orders usa `paid` + `processing`
- **Etiqueta:** question
- **Severidad:** Media (P2)
- **Evidencia:** `DashboardController.php:30-32` — `whereIn('status', ['paid', 'processing'])`
- **Impacto:** [HIPÓTESIS] En Pharma el flujo puede ser `pending_payment` post-Rx; KPI "pendientes" puede subcontar
- **Fix:** Alinear con `zonix-order-lifecycle` estados activos commerce

#### [COM3-006] CommerceProductControllerTest datos Eats
- **Etiqueta:** nitpick
- **Severidad:** Baja (P3)
- **Evidencia:** `CommerceProductControllerTest.php:39` — `'name' => 'Pizza Test'`
- **Impacto:** Test válido pero copy inconsistente con Pharma
- **Fix:** Renombrar fixture a medicamento OTC

✅ **Fase 3 completada** — Multi-sede y Rx tabs son gaps de dominio prioritarios. Continúo Fase 4.

---

## FASE 4 — Seguridad

#### [COM4-001] CommerceDataController ownership endurecido — praise
- **Etiqueta:** praise
- **Severidad:** —
- **Evidencia:** `CommerceDataController.php:26-31` — 403 si `commerce_id` no pertenece al perfil
- **Impacto:** Sin fallback silencioso (fix mayo 2026 verificado)

#### [COM4-002] Simulación de éxito en update datos de pago
- **Etiqueta:** security + bug
- **Severidad:** Alta (P1)
- **Evidencia:** `commerce_data_service.dart:132-139` — retorna `{success: true}` en 404/catch
- **Impacto:** Farmacia cree que guardó datos de pago móvil; riesgo operativo/fraude percibido
- **Fix:** Propagar error al usuario; no fake success en writes

#### [COM4-003] Sin throttle en rutas `/api/commerce/*`
- **Etiqueta:** security
- **Severidad:** Media (P2)
- **Evidencia:** `routes/api/commerce.php:8` — solo sanctum+role+approved; buyer routes usan `throttle:*`
- **Impacto:** Abuso de listados/analytics/upload logo
- **Fix:** `throttle:60,1` o similar en grupo commerce

#### [COM4-004] Pusher channel auth usa `profile->commerce` no `getPrimaryCommerce`
- **Etiqueta:** security + bug
- **Severidad:** Media (P2)
- **Evidencia:** `routes/channels.php:38-41` — `$user->profile?->commerce?->id`
- **Impacto:** Multi-sede sin `is_primary`: suscripción realtime falla → órdenes no refrescan
- **Fix:** Usar `getPrimaryCommerce()` o validar membership en `commerces()`

#### [COM4-005] Upload logo validado
- **Etiqueta:** praise
- **Severidad:** —
- **Evidencia:** `CommerceDataController.php:108-109` — `image|mimes:jpeg,png,jpg|max:5120`
- **Impacto:** Alineado AppSec uploads

#### [COM4-006] Respuestas auth legacy `{error: ...}`
- **Etiqueta:** issue
- **Severidad:** Media (P2)
- **Evidencia:** `OrderController.php:25`, `AnalyticsController.php:23` — sin `success: false`
- **Impacto:** `commerceHttpErrorMessage` no lee campo `error`; mensaje genérico
- **Fix:** Unificar envelope + extender helper para `error` legacy

#### OWASP aplicable al módulo

| OWASP | Estado commerce |
| ----- | --------------- |
| A01 Broken Access Control | Parcial — ownership OK en orders/data; multi-sede gaps |
| A02 Cryptographic Failures | N/A en scope |
| A03 Injection | OK — Form Requests product |
| A04 Insecure Design | Issue — fake success pagos |
| A05 Security Misconfiguration | Issue — sin throttle commerce |
| A07 Auth Failures | OK — Sanctum + role middleware |
| A09 Logging | OK — getMessage solo en logs |

✅ **Fase 4 completada** — Fake success pagos es el hallazgo AppSec más grave del módulo. Continúo Fase 5.

---

## FASE 5 — UI / Estado (Flutter)

#### [COM5-001] WIP dashboard/orders — mounted checks — praise
- **Etiqueta:** praise
- **Severidad:** —
- **Evidencia:** `commerce_dashboard_page.dart:116-157`, `commerce_orders_page.dart:85-100` — guards `mounted` post-async
- **Impacto:** Patrón correcto BuildContext

#### [COM5-002] Deuda brand masiva Colors.*
- **Etiqueta:** issue
- **Severidad:** Media (P2)
- **Evidencia:** 22 archivos en `screens/commerce/` con ~319 usos `Colors.`/`Color(0x` (grep); confirmado en AUDIT_UI_PHARMA NEEDS REWORK
- **Impacto:** Inconsistencia marca Pharma, dark mode
- **Fix:** Sprint `MODULO=commerce-ui` con `AppColors.brand*`

#### [COM5-003] Product form Pharma — praise
- **Etiqueta:** praise
- **Severidad:** —
- **Evidencia:** `commerce_product_form_page.dart:175-178` — envía requires_prescription, controlled_substance, cold_chain alineado con `StoreProductRequest`
- **Impacto:** Contrato Rx UI→API correcto

#### [COM5-004] Copy legacy "restaurante"
- **Etiqueta:** issue
- **Severidad:** Media (P2)
- **Evidencia:** `commerce_add_restaurant_page.dart`, `commerce_list_page.dart` (AUDIT_UI_PHARMA)
- **Impacto:** UX Pharma incorrecta
- **Fix:** Renombrar copy a "farmacia"

#### [COM5-005] Errores en orders page propagan message del service
- **Etiqueta:** praise
- **Severidad:** —
- **Evidencia:** `commerce_orders_page.dart:86-98` — muestra `Exception` message (beneficia de commerceHttpErrorMessage en getOrders)
- **Impacto:** UX mejora con QW-1

✅ **Fase 5 completada** — UI funcional Rx en form; brand/copy pendiente. Continúo Fase 6.

---

## FASE 6 — Tests

### Mapa regla → test

| Regla de negocio | Test | Estado |
| ---------------- | ---- | ------ |
| Commerce lista/muestra/actualiza orden | `CommerceOrderTest` | Cubierto |
| Pickup delivered vs delivery blocked | `CommerceOrderTest` | Cubierto |
| CRUD productos commerce | `CommerceProductControllerTest` | Cubierto (sin campos Rx) |
| Métodos de pago sin duplicados | `CommercePaymentMethodTest` | Cubierto (ruta `/api/payments`, no commerce prefix) |
| Flujo e-commerce general | `EcommerceFlowTest` | Parcial |
| Middleware `commerce.approved` 403 + error_code | — | **GAP** |
| validatePayment rechazo sin motivo 422 | — | **GAP** |
| Multi-sede set-primary + operar sede B | — | **GAP** |
| Producto Rx requires_prescription + prescription_type | — | **GAP** |
| Front commerce services / commerce_api_errors | — | **GAP** (0 tests) |

### Tests skip
- Front: ~1 skip global (onboarding); ninguno específico commerce.

### Propuesta mínima tests alto valor (Backend Feature)

1. `EnsureCommerceApprovedTest` — pending_review → 403 `COMMERCE_PENDING_APPROVAL` en GET orders; whitelist GET `/api/commerce` OK.
2. `CommerceOrderValidatePaymentTest` — reject sin `rejection_reason` → 422 `PAYMENT_REJECTION_REASON_REQUIRED`.
3. `CommerceProductRxTest` — POST product con `requires_prescription=true` sin `prescription_type` → 422.

✅ **Fase 6 completada** — 4 gaps críticos sin cobertura. Continúo Fase 7.

---

## FASE 7 — Docs y memoria

| Documento | Divergencia |
| --------- | ----------- |
| Piloto commerce jun-2026 (eliminado) | Hallazgos COM-001–010 **re-verificados** e integrados; este informe es canónico |
| `AUDIT_UI_PHARMA.md` | Commerce NEEDS REWORK — **sin cambio** |
| `docs/active_context.md` | **No menciona** WIP `commerce_api_errors` ni auditoría commerce jun 2026 — desactualizado |
| `MIGRACION_EATS_PHARMA.md` | `CommerceService.getCommerces`, copy restaurante, Pizza en tests — **deuda Eats residual** |
| `plantillas/PROMPT_AUDIT_360_ZONIX.md` | Creado 10 jun — alineado con metodología usada |

✅ **Fase 7 completada** — Proponer actualizar `active_context.md` (requiere OK usuario). Continúo Fase 8.

---

## FASE 8 — Informe final

### Resumen ejecutivo

1. **Tests verdes** (413 BE / 227 FE) pero **Pint global falla** en archivos ajenos al módulo.
2. **Contrato API↔Front:** 3 endpoints huérfanos en services + envelope heterogéneo en promos/auth.
3. **Dominio Pharma:** panel commerce **no filtra órdenes Rx** (`pending_prescription_validation`); multi-sede rota en productos/analytics/promos/Pusher.
4. **Seguridad:** fake success en update datos pago es el riesgo operativo más grave; sin throttle en grupo commerce.
5. **Quick win:** extender `commerceHttpErrorMessage` a todos los services (~2h, alto impacto UX).

### Métricas

| Métrica | Valor |
| ------- | ----- |
| Archivos revisados | 58 |
| Hallazgos bloqueantes (P0) | 0 |
| Hallazgos altos (P1) | 6 |
| Hallazgos medios (P2) | 10 |
| Hallazgos bajos (P3) | 1 |
| Praise | 6 |
| Gaps de tests | 4 (+ Front services sin tests) |
| Contratos desalineados | 5 (3 huérfanos + 2 parciales) |

### Top 10 priorizados

| # | Severidad | Archivo | Problema | Fix |
| - | --------- | ------- | -------- | --- |
| 1 | P1 | `commerce_data_service.dart:132-139` | Fake success en update pagos | Propagar error; quitar modo offline en writes |
| 2 | P1 | `commerce_product_service.dart` + routes | Endpoints huérfanos stats/upload | Eliminar o implementar rutas |
| 3 | P1 | `commerce_promotion_service.dart:220` | GET promotions/stats huérfano | Idem |
| 4 | P1 | `commerce_orders_page.dart:36-43` | Sin tab/filtro Rx pending_prescription | Tab + color + filtro API |
| 5 | P1 | `ProductController.php` + peers | Multi-sede solo primary | `resolveCommerce()` compartido |
| 6 | P1 | `commerce_*_service.dart` (6 archivos) | Errores HTTP crudos sin helper | Rollout `commerceHttpErrorMessage` |
| 7 | P2 | `routes/channels.php:38-41` | Pusher auth multi-sede | `getPrimaryCommerce()` o membership |
| 8 | P2 | `routes/api/commerce.php` | Sin throttle | Añadir throttle grupo |
| 9 | P2 | `CommercePromotionController.php:76` | show sin envelope | Unificar API response |
| 10 | P2 | `screens/commerce/*` | ~319 Colors.* legacy | Sprint brand tokens |

### Preguntas abiertas (bloquean decisión de producto)

1. ¿Eliminar métodos huérfanos (`getProductStats`, `uploadProductImage`, `getPromotionStats`) o implementar endpoints backend?
2. ¿Multi-sede es MVP Day-D o post-Day-D? Define si `X-Commerce-Id` debe propagarse desde Front en todos los services.

### Siguiente lote sugerido

- **`MODULO=commerce-ui`** — brand + copy farmacia (22 pantallas)
- **`MODULO=orders`** — state machine end-to-end incluyendo Rx TTL
- Tests Feature: `EnsureCommerceApprovedTest` + `CommerceProductRxTest`

---

## Checkpoints por fase

| Fase | Estado | Bloqueadores |
| ---- | ------ | ------------ |
| F0 Inventario | ✅ | — |
| F1 Automatizado | ✅ | Pint global (fuera scope commerce) |
| F2 Contratos | ✅ | — |
| F3 Dominio | ✅ | — |
| F4 Seguridad | ✅ | — |
| F5 UI | ✅ | — |
| F6 Tests | ✅ | — |
| F7 Docs | ✅ | — |
| F8 Informe | ✅ | — |

**Generado:** 10 junio 2026 · JARVIS Audit Lead · Solo lectura (sin cambios de código)

---

## Remediación aplicada (post-informe)

**Fecha cierre:** 10 junio 2026 · **Rama:** `dev` (Backend + Front pushed)

| ID / tema | Estado |
| --------- | ------ |
| P1 fake success writes, Pusher multi-sede, throttle, envelope promos | ✅ |
| P2 `commerce_api_errors`, tab Rx, métodos huérfanos, URL commerces | ✅ |
| Multi-sede `ResolvesCommerce` + `CommerceContext` + `CommerceMultiSedeTest` | ✅ |
| COM3-005 KPI `pending_orders` (Rx + pago + preparación) | ✅ `CommerceDashboardTest` |
| COM3-004 `getReadyOrders` alias documentado | ✅ Front |
| COM3-006 copy Pizza → OTC en test | ✅ |
| Brand `Colors.*` en `screens/commerce/*` | ✅ (ya `AppColors`; 3 transparent) |

**Siguiente módulo sugerido:** `MODULO=orders` (state machine E2E + Rx TTL) o `MODULO=pharmacist`.
