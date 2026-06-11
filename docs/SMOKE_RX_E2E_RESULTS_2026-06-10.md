# Resultados smoke Rx E2E — verificación automatizada

**Fecha ejecución:** 10 junio 2026 (actualizado verificación completa **11 junio 2026**)  
**Entorno:** local SQLite tests (`php artisan test`) + API local `:8000`  
**Manual en dispositivo Flutter:** pendiente (requiere app + modo estricto en `.env`)

---

## Escenarios cubiertos por tests backend

| Escenario smoke | Test / suite | Resultado |
| ---------------- | ------------ | --------- |
| A — Orden Rx permisiva sin receta previa | `OrderTest::test_create_order_with_rx_succeeds_without_prescription_when_block_rx_is_off` | ✅ |
| A — Upload → approve → pending_payment | `PrescriptionFlowTest::test_buyer_uploads_prescription_then_pharmacist_approves` | ✅ |
| A — Rechazo receta cancela orden | `PrescriptionFlowTest::test_pharmacist_rejects_prescription_cancels_order` | ✅ |
| A — Idempotencia upload 409 | `PrescriptionFlowTest::test_second_prescription_upload_while_pending_returns_409` | ✅ |
| B — TTL / expiración | `ForensicPhase3Test::test_orphan_rx_order_expires_when_prescription_not_uploaded` | ✅ |
| C — Licencia farmacéutico inválida 403 | `PharmacistDashboardTest::test_pharmacist_cannot_approve_without_verified_license` | ✅ |
| Tracking legacy 6 pasos Rx | `OrderTest::test_legacy_order_tracking_includes_rx_state_and_pharmacy` | ✅ |
| Cancel buyer desde pending Rx | `OrderTest::test_buyer_cancel_rx_order_from_pending_prescription_validation` | ✅ |
| Modo estricto bloquea sin prescription_id | `OrderTest::test_create_order_with_rx_fails_when_block_rx_on_without_prescription` | ✅ |
| Modo estricto OK con receta aprobada | `OrderTest::test_create_order_with_rx_succeeds_when_block_rx_on_with_approved_prescription` | ✅ |
| Historial pharmacist | `PharmacistPrescriptionHistoryTest` (2 tests) | ✅ |
| Index buyer recetas | `BuyerPrescriptionIndexTest` (2 tests) | ✅ |
| Política pública pharma | `PublicPharmaPolicyTest` | ✅ |

**Total filtro Rx smoke:** 21 tests — **PASS** (11 jun 2026)

**Suite completa (11 jun 2026):**

| Repo | Comando | Resultado |
| ---- | ------- | --------- |
| Backend | `php artisan test --parallel` | **443 passed**, 1822 assertions |
| Front | `flutter test` | **238 passed**, ~1 skip |

---

## Smoke API local (servidor `php artisan serve :8000`)

| Paso | Comando / endpoint | Resultado 11 jun 2026 |
| ---- | ------------------ | --------------------- |
| Seed receta strict | `php artisan db:seed --class=RxStrictSmokeSeeder` | ✅ receta `approved` profile 1 + commerce 1 (Rx product id 3) |
| Política pública | `GET /api/pharma-policy` | ✅ `block_rx_without_prescription: false` (`.env` actual) |
| Listado recetas buyer | `GET /api/buyer/prescriptions` (user 1 Sanctum) | ✅ incluye receta id 1 `approved`, `order_id: null`, commerce Farmacia El Socorro |

Para probar **modo estricto** en local:

```bash
# .env
ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION=true
php artisan config:clear
# GET /api/pharma-policy → block_rx_without_prescription: true
# App: carrito Rx product id 3 → checkout → picker receta id 1 → confirmar
```

### Smoke API modo estricto (11 jun 2026 — ejecutado)

Con `.env` temporal `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION=true` + `config:clear` + buyer user 1 (Sanctum):

| Paso | Request | Resultado |
| ---- | ------- | --------- |
| Política | `GET /api/pharma-policy` | ✅ `block_rx_without_prescription: true` |
| Bloqueo sin receta | `POST /api/buyer/orders` (producto Rx id 3, sin `prescription_id`) | ✅ **422** `ORDER_RX_PRESCRIPTION_REQUIRED` |
| Checkout OK | `POST /api/buyer/orders` + `prescription_id: 1` | ✅ **201** `status: pending_payment`, `prescription_id: 1`, orden id 13 |
| Restauración dev | `.env` → `false`, `config:clear`, `RxStrictSmokeSeeder` | ✅ nueva receta libre para próximo smoke UI |

**Nota:** el token Sanctum debe ser de rol `users` (buyer). User id 2 es `delivery_agent` → 401 en rutas buyer.

## Checklist UI (Front — tests unitarios/widget)

| Ítem | Cobertura | Resultado |
| ---- | --------- | --------- |
| Countdown Rx | `test/features/utils/rx_countdown_test.dart` | ✅ |
| Errores orden buyer | `test/features/utils/order_api_errors_test.dart` | ✅ |
| Errores receta | `test/features/utils/pharmacist_api_errors_test.dart` | ✅ |
| Parseo orden Rx | `test/models/order_test.dart` | ✅ |
| Modo estricto checkout (policy + picker) | `checkout_strict_rx_test.dart` + API strict 11 jun | ✅ widget; ⏳ manual UI dispositivo |

---

## Comando reproducir

```bash
cd ZonixPharma-Backend
php artisan test --filter='Prescription|ExpirePendingPrescriptions|PharmacistDashboard|BuyerPrescription|PublicPharmaPolicy|OrderTest::test_create_order_with_rx|OrderTest::test_legacy_order_tracking|ForensicPhase3'

cd ../ZonixPharma-Front
flutter test test/features/utils/rx_countdown_test.dart test/features/utils/order_api_errors_test.dart test/models/order_test.dart
```

---

## Pendiente manual (dispositivo)

1. Login buyer → carrito Rx → checkout permisivo → subir receta → login pharmacist → aprobar → comprobante.
2. Repetir con `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION=true` y receta pre-aprobada en seed.

```bash
# Tras migrate:fresh --seed (ZonixDemoSeeder)
php artisan db:seed --class=RxStrictSmokeSeeder
# .env: ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION=true && php artisan config:clear
```

Ver checklist original: [SMOKE_RX_E2E.md](SMOKE_RX_E2E.md).
