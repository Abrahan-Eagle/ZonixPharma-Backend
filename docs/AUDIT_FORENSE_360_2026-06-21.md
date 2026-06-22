# AUDIT_FORENSE_360 — Zonix Pharma (Backend + Front)

**Fecha:** 21 junio 2026  
**Modo:** 360 · Profundidad completa  
**Repos:** `ZonixPharma-Backend` (Laravel) · `ZonixPharma-Front` (Flutter)  
**Metodología:** [`PROMPT_AUDIT_360_ZONIX.md`](PROMPT_AUDIT_360_ZONIX.md) Fases 0–4  
**Roles:** CTO + QA/SDET + AppSec + UX/Brand  

---

## 1. Resumen ejecutivo (CTO)

### Veredicto global: **ÁMBAR**

Zonix Pharma tiene un **MVP Rx operativo** con cadena de remediación junio 2026 (commerce, pharmacist, orders, buyer catalog/prescriptions, delivery, admin). La suite automatizada está **verde y mejorada** respecto a la documentación previa. Persisten tres frentes de deuda:

1. **Patrones API transversales (ROJO)** — envelope heterogéneo, trait `ApiResponse` casi sin adopción, exposición puntual de `$e->getMessage()` al cliente.
2. **Marca UI Flutter (ROJO-MAJOR)** — 87/92 archivos en `screens/` usan `Colors.*` en lugar de tokens `AppColors.brand*`.
3. **Módulos sin auditoría 360° dedicada (ÁMBAR)** — payments, auth, cart, chat, profiles/onboarding, disputes, privacy; varios con envelope parcial y sin helpers `*_api_errors.dart` en Front.

**Riesgo operativo inmediato (P0 funcional):** smoke UI Rx en dispositivo físico/emulador sigue pendiente ([`SMOKE_RX_E2E.md`](SMOKE_RX_E2E.md) checklist manual).

### Semáforo por área

| Área | Semáforo | Estado vs jun 2026 |
|------|----------|-------------------|
| Rx / prescriptions | **VERDE** | CONFIRMADO — flujo API + UI strict/permissive implementado |
| Orders lifecycle | **VERDE-ÁMBAR** | CONFIRMADO — copy legacy `restaurant` P2 |
| Commerce multi-sede | **VERDE** | CONFIRMADO — `ResolvesCommerce`, `X-Commerce-Id` |
| Pharmacist | **VERDE** | CONFIRMADO — historial, throttle, envelope |
| Delivery / delivery_company | **VERDE** | CONFIRMADO — helpers Front lote 10 |
| Admin | **VERDE** | CONFIRMADO — statistics envelope lote 10 |
| API patterns global | **ROJO** | CONFIRMADO — mejora parcial (Handler, Payment ownership); deuda sistémica |
| Payments / auth / chat / cart / disputes / privacy | **ÁMBAR** | **NUEVO** — sin AUDIT dedicado previo |
| medicine_lots / FIFO | **ÁMBAR** | CONFIRMADO — esquema sí, API no (documentado en código) |
| UI brand buyer/commerce | **ROJO** | CONFIRMADO — `Colors.*` masivo |
| Deploy / plataforma | **ÁMBAR** | CONFIRMADO — FTP workflow OK; Android `com.zonix.eats`; Firebase iOS ausente |
| Realtime | **VERDE** | CONFIRMADO — Pusher + FCM `zonix_pharma_fcm`; sin WebSocket runtime |
| Tests CI | **VERDE** | **MEJORA** — Backend 443 (+7 vs doc 436); Front 241 (+3 vs doc 238) |

---

## 2. Baseline Fase 0 (ejecutado 21 jun 2026)

| Gate | Comando | Resultado | vs doc jun |
|------|---------|-----------|------------|
| Backend tests | `php artisan test --parallel` | **443 passed**, 1822 assertions | ↑ vs 436 documentados |
| Backend style | `./vendor/bin/pint --test` | **PASS** (457 files) | OK |
| Front analyze | `flutter analyze --no-fatal-infos` | **1 info** — `checkout_page.dart:285` `deprecated_member_use` (`value` → `initialValue`) | OK (sin errors/warnings) |
| Front tests | `flutter test` | **241 passed**, **1 skipped** (`auth_helper_integration_test`) | ↑ vs 238 documentados |

**Hallazgo P3 (NUEVO):** info deprecación Flutter 3.33 en picker receta strict — [`checkout_page.dart:285`](../../ZonixPharma-Front/lib/features/screens/cart/checkout_page.dart).

**Hallazgo P0 funcional (CONFIRMADO):** ítem manual [`SMOKE_RX_E2E.md`](SMOKE_RX_E2E.md) «Smoke manual UI Flutter en dispositivo» sigue `[ ]`.

---

## 3. Scope Map (Fase 1)

| Capa | Conteo | Archivos ancla |
|------|--------|----------------|
| Migraciones | 61 | `database/migrations/` (+ 3 `add_*` fuera de norma AGENTS) |
| Controladores HTTP | 82 | `app/Http/Controllers/` |
| Rutas API (~) | 331 | `routes/api/*.php` |
| Form Requests | 14 | `app/Http/Requests/` |
| Services Backend | 22 | `app/Services/` |
| Tests Backend | 77 archivos | `tests/Feature/`, `tests/Unit/` |
| Pantallas Flutter | 92 `.dart` | `lib/features/screens/` |
| Services Front | 38 | `lib/features/services/` |
| Models Front | 12 | `lib/models/` |
| Helpers `*_api_errors` | 7 | `lib/features/utils/` |
| Tests Front | 56 archivos | `test/` |
| Skills dominio `zonix-*` | 30 | Backend 21 + Front 9 (4 stubs) |

**Config Pharma** — [`config/zonix.php`](../../ZonixPharma-Backend/config/zonix.php) L138–147:

- `block_rx_without_prescription` → default **false** (permisivo)
- `prescription_validation_ttl_minutes` → 60
- `disallow_promotions_on_rx` → true
- `require_cold_chain_handling` → true
- `prescription_retention_days_after_terminal` → 90

---

## 4. Hallazgos por bucket (evidencia `ruta:línea`)

### Bucket A — API patterns transversal

**Estado vs [`AUDIT_API_PATTERNS_2026-05-01.md`](AUDIT_API_PATTERNS_2026-05-01.md):** ROJO persistente con mejoras puntuales.

| ID | Sev | Estado | Evidencia | Impacto | Recomendación |
|----|-----|--------|-----------|---------|---------------|
| A-01 | P0 | CONFIRMADO (reducido) | Exposición `$e->getMessage()` al **cliente**: `Buyer/OrderController.php:763`, `:1125`; `Profiles/DocumentController.php:209`; `ReviewController.php:59` | Filtración stack/SQL en respuestas JSON | Usar `jsonError()` genérico; log server-side only |
| A-02 | P1 | CONFIRMADO | Trait [`ApiResponse.php`](../../ZonixPharma-Backend/app/Http/Traits/ApiResponse.php) existe; adopción en **2** controladores (`ProfileController`, `AddressController` en Profiles) — grep `ApiResponse` en `app/Http/Controllers/` | Envelope inconsistente (~33% doc may; mejora parcial no medida exhaustiva) | Ola 1: migrar top-5 peor score (Commerce Analytics/Dashboard, Chat raíz) |
| A-03 | P1 | CONFIRMADO | **14** Form Requests vs **82** controladores; inline `$request->validate()` predominante | Validación dispersa, difícil testear | Extraer Form Requests en payments, chat, disputes |
| A-04 | P2 | RESUELTO parcial | `Payment/PaymentController.php:209-220` — ownership `payment_method_id` verificado + idempotencia comprobante (`PAYMENT_ALREADY_SUBMITTED` L194-200) | Era P0 en audit may | Cerrar ticket A-04 en backlog |
| A-05 | P2 | CONFIRMADO | `Buyer/CartController.php:177` — `$message = $e->getMessage()` en `businessErrorResponse` | Mensajes de negocio cart (stock, closed) — aceptable si son excepciones controladas | Documentar allowlist; evitar excepciones genéricas |
| A-06 | P2 | CONFIRMADO | `Commerce/AnalyticsController`, `Commerce/DashboardController` — scores 2/12 (audit may) | KPIs commerce sin envelope estándar | Alinear en sprint brand/API olas |

**Handler global (MEJORA):** [`Handler.php:34-48`](../../ZonixPharma-Backend/app/Exceptions/Handler.php) — `handleApiException` devuelve envelope en ValidationException; no sustituye catch locales con `getMessage()`.

---

### Bucket B — Rx + regulatory

| ID | Sev | Estado | Evidencia | Impacto | Recomendación |
|----|-----|--------|-----------|---------|---------------|
| B-01 | P1 | CONFIRMADO | `medicine_lots` — **cero rutas** en `routes/`; [`PharmacyService.php:20-23`](../../ZonixPharma-Backend/app/Services/PharmacyService.php) documenta explícitamente «no consulta lotes ni FIFO» | Inventario por lote no operable en commerce API | Spec post-MVP o documentar en README como demo-only |
| B-02 | — | RESUELTO | Spec [`001-block-rx-strict-checkout/tasks.md`](../../ZonixPharma-Backend/specs/001-block-rx-strict-checkout/tasks.md) — **Implementado lote 6, 10 jun 2026** (T001–T016 checked) | — | Cerrar spec como done |
| B-03 | — | CONFIRMADO | `GET /api/pharma-policy` — [`routes/api/public.php:14`](../../ZonixPharma-Backend/routes/api/public.php) | Front `PharmaPolicyService` consume policy | OK |
| B-04 | P0 func | CONFIRMADO | Smoke UI dispositivo pendiente — [`SMOKE_RX_E2E.md`](SMOKE_RX_E2E.md) L53 | Riesgo regresión UX Rx no detectada en CI | Ejecutar escenarios A/B/C manual; restaurar `.env` permisivo |
| B-05 | — | CONFIRMADO | Rx UI: `cart_page.dart:42-44` banners Rx/coldChain; `order_detail_page.dart:644` CTA «Subir receta»; `product_detail_page.dart:446-460` badges Rx/controlado/frío | AUDIT_UI may stale en badges — **REMEDIADO** en código | Actualizar `AUDIT_UI_PHARMA.md` |

**Re-verificación AUDIT jun:** pharmacist, buyer_prescriptions, orders — **VERDE** mantenido (443 tests incluyen suite Rx).

---

### Bucket C — Módulos sin AUDIT 360° previo

#### C.1 Payments

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| C-PAY-01 | P2 | `Payment/PaymentController.php:236-239` | Catch genérico sin `getMessage()` al cliente — **OK** |
| C-PAY-02 | P2 | Front `payment_service.dart` — parsea `success` (L39,66,92…) | Sin `payment_api_errors.dart` — mensajes HTTP crudos en fallos |
| C-PAY-03 | P2 | Flujo VE real = comprobante manual (`USE_PAYMENT_PROOF_FLOW` L222-231) | Coherente con `zonix-payments`; no Stripe en prod VE |

#### C.2 Auth

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| C-AUTH-01 | P2 | `routes/api/auth.php` — grupo `throttle:auth` | Rate limit login OK |
| C-AUTH-02 | P2 | `AuthController.php:365,388` — `getMessage()` solo en **Log** | No expuesto al cliente en esas líneas |
| C-AUTH-03 | P3 | Front `sign_in_screen.dart:33` — asset `LogosZonixPharma` | Brand OK; import legacy `storefront_qr_scanner_page` L16 |

#### C.3 Cart

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| C-CART-01 | P2 | `CartController.php` — envelope `{success,data,message,error_code}` en errores L208-213 | Patrón correcto |
| C-CART-02 | P2 | Front `cart_service.dart:185+` — exige `success == true` | Sin helper dedicado |
| C-CART-03 | P3 | `cart_page.dart` — sin navegación directa a `PrescriptionUploadPage` | Flujo vía `order_detail` post-checkout — diseño aceptable |

#### C.4 Chat

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| C-CHAT-01 | P1 | `chat_service.dart:84,123` — `throw Exception('Error … ${response.statusCode}')` | Sin parseo envelope ni códigos legibles |
| C-CHAT-02 | P2 | `Chat/ChatController.php` — 37 `response()->json(`; mix envelope | Deuda API patterns |
| C-CHAT-03 | P2 | Realtime orden buyer vía Pusher en `commerce_chat_messages_page` (comentario L225 chat_service) | No depender de `ChatService.messageStream` para orders |

#### C.5 Profiles / onboarding

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| C-PROF-01 | P1 | `ProfileController.php:528-536` — `addCommerceToProfile` catch; L536 expone `exception` key si `app.debug` | Filtración en staging debug |
| C-PROF-02 | P2 | 14 Form Requests; Profile/Phone/Document parcialmente cubiertos | Onboarding multi-rol sin AUDIT UI dedicado |
| C-PROF-03 | P3 | Front `onboarding/_archive/` — 3 archivos deprecados | Ignorar en sprint brand o eliminar |

#### C.6 Disputes

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| C-DIS-01 | P2 | `Admin/DisputeController.php:32-41` — envelope + paginate | Score alto (~9/12 audit may) |
| C-DIS-02 | P2 | Front `dispute_service.dart` — sin `dispute_api_errors.dart` | Mensajes genéricos en UI buyer |

#### C.7 Privacy / GDPR

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| C-PRIV-01 | P1 | `Buyer/PrivacyController.php` — 9 respuestas con `success` (grep) | Revisar retención recetas vs `prescription_retention_days` |
| C-PRIV-02 | P2 | `AccountDeletionController.php:255` — log only getMessage | Verificar envelope respuesta delete |
| C-PRIV-03 | P2 | Front `account_deletion_page.dart` — 30 usos `Colors.*` | Brand MAJOR |

#### C.8 Analytics global

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| C-AN-01 | P2 | `Analytics/AnalyticsController.php` — refs legacy `restaurant` (audit may) | Renombrar a pharmacy en métricas |

---

### Bucket D — Matriz contrato API ↔ Front

#### Helpers `*_api_errors.dart` (7/38 servicios HTTP relevantes)

| Helper | Servicios cubiertos | Test unit |
|--------|---------------------|-----------|
| `commerce_api_errors` | 9 servicios commerce_* | No |
| `order_api_errors` | `order_service.dart` | Sí |
| `product_api_errors` | `product_service.dart` | Sí |
| `pharmacist_api_errors` | `prescription_service`, onboarding | Sí |
| `delivery_api_errors` | `delivery_service.dart` | Sí |
| `admin_api_errors` | `admin_service.dart` | Sí |
| `delivery_company_api_errors` | `delivery_company_service.dart` | Sí |

**Sin helper (prioridad P2):** `cart_service`, `payment_service`, `chat_service`, `dispute_service`, `restaurant_service`, `promotion_service`, `address_service`, `account_deletion_service`, `buyer_review_service`, `auth/api_service`.

#### Matriz endpoint → service (muestra crítica Rx/orders)

| Endpoint Backend | Service Front | Model | Envelope OK | Helper errors |
|------------------|---------------|-------|-------------|---------------|
| `POST /api/buyer/orders` | `order_service.dart` | `order.dart` | Sí (jun) | `order_api_errors` |
| `GET /api/pharma-policy` | `pharma_policy_service.dart` | — | Sí | N/A (público) |
| `POST /api/buyer/prescriptions` | `prescription_service.dart` | `prescription.dart` | Sí | `pharmacist_api_errors` |
| `GET /api/pharmacist/prescriptions/history` | `prescription_service.dart` | `prescription.dart` | Sí | `pharmacist_api_errors` |
| `GET /api/buyer/cart` | `cart_service.dart` | `cart_item.dart` | Parcial | **Falta** |
| `POST /api/buyer/payments/*` | `payment_service.dart` | — | Parcial | **Falta** |
| `GET /api/chat/conversations/*` | `chat_service.dart` | — | No | **Falta** |
| `GET /api/buyer/restaurants` (legacy) | `restaurant_service.dart` | `restaurant.dart` | Parcial | **Falta** |
| Commerce `X-Commerce-Id` | `commerce_*_service.dart` | `commerce.dart` | Sí (jun) | `commerce_api_errors` |

---

### Bucket E — UI brand + reglas farmacéuticas

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| E-01 | P2 | **87/92** archivos `lib/features/screens/**` con `Colors.*` (grep 21 jun) | Peores: `order_detail_page.dart` (112), `checkout_page.dart` (73), `admin_analytics_page.dart` (56) |
| E-02 | P2 | **5 archivos sin** `Colors.*`: `onboarding_provider`, `onboarding_service`, `commerce_onboarding_flow`, `pharmacist_onboarding_page`, `prescription_image_viewer` | — |
| E-03 | P2 | Copy legacy: **24 archivos** con `restaurant/Restaurant` en `lib/`; pico `restaurant_service.dart` (~90 refs), `restaurants_page.dart` (~83) | UI debe decir «Farmacia» |
| E-04 | P2 | Reglas Rx UI **implementadas** — ver B-05 | AUDIT_UI may parcialmente obsoleto |
| E-05 | P1 | Android [`build.gradle:13,30`](../../ZonixPharma-Front/android/app/build.gradle) — `applicationId`/`namespace` = `com.zonix.eats` | Firebase compartido Eats; objetivo `com.zonix.pharma` |
| E-06 | P1 | **0** archivos `GoogleService-Info.plist` en repo Front | Firebase iOS pendiente |
| E-07 | — | FCM canal [`fcm_bootstrap.dart:18`](../../ZonixPharma-Front/lib/app/fcm_bootstrap.dart) — `zonix_pharma_fcm` | OK Pharma |

**Módulos UI sin auditoría jun 2026 (candidatos sprint brand):** auth, onboarding (8+ UI), settings (4), help, notifications, DomainProfiles (31 archivos), account_deletion, delivery_company UI (6).

---

### Bucket F — Realtime + seguridad + DevOps

| ID | Sev | Evidencia | Notas |
|----|-----|-----------|-------|
| F-01 | — | WebSocket runtime: **0** controllers; comentarios legacy en `NotificationController.php:118,232` | Realtime = Pusher |
| F-02 | — | `tests/Feature/WebSocketTest.php` — valida `/api/broadcasting/auth` (Pusher) | OK |
| F-03 | P2 | Throttle named routes: **16** `throttle:*` en `routes/api/` (commerce 60,1; buyer orders 30,1; pharmacist 30,1/10,1; auth; prescription upload/download) | Admin/chat/profile dependen throttle global `api` |
| F-04 | P2 | Deploy [`.github/workflows/main.yml`](../../ZonixPharma-Backend/.github/workflows/main.yml) — tests pre-FTP → `pharma.aiblockweb.com` | Secrets FTP/`ENV_CONTENT` — verificar en GitHub |
| F-05 | P2 | CI [`.github/workflows/ci.yml`](../../ZonixPharma-Backend/.github/workflows/ci.yml) — Pint + parallel tests | Front CI: analyze + test |

**Legacy Eats Backend:** `Buyer/RestaurantController.php` shim → `PharmacyController`; rutas `/restaurants` con `deprecate.legacy:*` en `buyer.php`.

---

### Bucket G — Docs vs código

| Documento | Alineación | Acción |
|-----------|------------|--------|
| `active_context.md` (Backend/Front) | Parcial | Actualizar cifras tests (443/241); marcar smoke UI pendiente |
| `AUDIT_UI_PHARMA.md` (may) | **Stale** | Badges Rx/cart banners ya en código; recuento Colors 87/92 |
| `AUDIT_API_PATTERNS` (may) | Parcial | Payment ownership resuelto; getMessage puntual persiste |
| `MIGRACION_EATS_PHARMA.md` | Parcial | medicine_lots API gap documentado en `PharmacyService` |
| Spec `001-block-rx-strict-checkout` | **Alineado** | tasks.md marca implementado |

**Migraciones norma AGENTS:** 3 archivos `add_*` post-create: `add_commerce_id_to_addresses`, `add_delivery_company_id_to_orders`, `add_context_and_entity_fks_to_phones` — deuda P3 documental.

---

## 5. Inventario legacy Eats

| Señal | Backend | Front |
|-------|---------|-------|
| `restaurant` refs | ~17 archivos `app/` | 24 archivos `lib/` |
| `com.zonix.eats` | — | Android `build.gradle` |
| WebSocket | 0 runtime | 0 runtime |
| Typedef legacy | — | `typedef Pharmacy = Restaurant` en `restaurant.dart` |

**Plan sunset P2:** retirar aliases `/restaurants` tras métricas 410/deprecation headers + migrar `SearchController`/`AnalyticsController` a nomenclatura pharmacy.

---

## 6. Regulatorio VE (código vs [`PLAN_REGULATORIO_PHARMA_VE.md`](PLAN_REGULATORIO_PHARMA_VE.md))

| Requisito | Código | Semáforo |
|-----------|--------|----------|
| Rx validada por farmacéutico colegiado | `Pharmacist/PrescriptionController`, rol `pharmacist` | VERDE |
| TTL receta pendiente | `ExpirePendingPrescriptionsCommand`, config 60 min | VERDE |
| Retención datos receta | `prescription_retention_days_after_terminal` = 90; purge command | VERDE |
| Promos no en Rx | `disallow_promotions_on_rx` default true | VERDE |
| Cadena de frío | `require_cold_chain_handling`; flags product/cart | VERDE |
| Lotes FIFO dispensación | Tabla sí; API no | ÁMBAR |
| Cifrado datos salud | Parcial — revisar storage recetas (`PrescriptionFileStorageService`) | ÁMBAR (AppSec follow-up) |

---

## 7. Priorización P0–P3 y Top 15 acciones

### P0 — Inmediato

1. **Smoke UI Rx dispositivo** — escenarios A/B/C [`SMOKE_RX_E2E.md`](SMOKE_RX_E2E.md); restaurar `.env` permisivo post-prueba.
2. **Eliminar exposición cliente `$e->getMessage()`** — `OrderController:763,1125`, `DocumentController:209`, `ReviewController:59`.
3. **Verificar secrets deploy FTP** — `FTP_*`, `ENV_CONTENT` en GitHub; primer `migrate` cPanel.

### P1 — Sprint siguiente

4. Adoptar `ApiResponse` trait en olas (Commerce Analytics/Dashboard, Chat).
5. Helpers Front: `cart_api_errors`, `payment_api_errors`, `chat_api_errors`, `dispute_api_errors`.
6. Android migration plan `com.zonix.pharma` + Firebase iOS `GoogleService-Info.plist`.
7. Auditar `ProfileController` debug leak L536 en entornos no-local.

### P2 — Deuda técnica / marca

8. Sprint brand: `restaurants/*`, `products/*`, `cart/*`, `orders/order_detail_page.dart` → `AppColors.brand*`.
9. Renombrar copy/métodos `restaurant` → `pharmacy` en Search/Analytics/API responses.
10. Consolidar migraciones `add_*` en `create_*` (solo entornos fresh local).
11. CI lint opcional: rechazar `Colors.` en `lib/features/screens/**`.
12. Actualizar `AUDIT_UI_PHARMA.md` con estado jun 2026.

### P3 — Post-MVP

13. API `medicine_lots` commerce (FIFO) o documentar explícitamente post-Day-D.
14. Eliminar carpetas vacías `affiliate/`, `favorites/`; onboarding `_archive/`.
15. Fix info Flutter `checkout_page.dart:285` (`initialValue`).

---

## 8. Roadmap por lotes (sin implementar — requiere OK usuario)

| Lote | Alcance | Estimación review |
|------|---------|-------------------|
| L1 | P0 getMessage + smoke doc results | 1 PR Backend pequeño + checklist QA |
| L2 | Helpers API Front (cart, payment, chat, dispute) | 1 PR Front ~200 líneas |
| L3 | ApiResponse olas 1–2 (5 controladores) | 2 PRs Backend chained |
| L4 | Brand buyer path (restaurants, products, cart, order_detail) | 1 PR Front grande — considerar chained |
| L5 | Platform (Android ID, Firebase iOS) | PR config + docs ops |

---

## 9. Anexo — Re-verificación AUDIT jun 2026

| Documento AUDIT | Fecha | Re-verificación 21 jun | Cambio |
|-----------------|-------|------------------------|--------|
| `AUDIT_commerce_8fases_2026-06-10` | 10 jun | VERDE | Sin regresión tests |
| `AUDIT_pharmacist_2026-06-10` | 10 jun | VERDE | Sin regresión |
| `AUDIT_orders_2026-06-10` | 10 jun | VERDE-ÁMBAR | Copy legacy P2 |
| `AUDIT_buyer_prescriptions_2026-06-10` | 10 jun | VERDE | Sin regresión |
| `AUDIT_buyer_catalog_2026-06-10` | 10 jun | VERDE | Sin regresión |
| `AUDIT_delivery_2026-06-10` | 10 jun | VERDE | Sin regresión |
| `AUDIT_admin_2026-06-10` | 10 jun | VERDE | Sin regresión |
| `AUDIT_API_PATTERNS_2026-05-01` | 1 may | ROJO (mejora parcial) | Payment ownership RESUELTO |
| `AUDIT_UI_PHARMA` | 1 may | ROJO (stale) | Rx badges REMEDIADOS en código |
| `AUDIT_landing_ia_2026-06-17` | 17 jun | Fuera scope producto | — |

---

## 10. Firma

**Baseline verificado:** Backend 443 OK · Pint OK · Front 241 OK (~1 skip) · Analyze 1 info  
**Próximo paso recomendado:** OK usuario para L1 (P0 getMessage) o smoke UI manual con registro en `SMOKE_RX_E2E_RESULTS_*.md`.

*Generado por JARVIS Audit Lead — auditoría solo lectura; sin cambios de código en repos.*
