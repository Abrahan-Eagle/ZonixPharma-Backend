# Smoke manual — flujo Rx E2E (Zonix Pharma)

**Fecha:** 10 junio 2026  
**Prerequisitos:** Backend `php artisan serve`, Front `flutter run`, seed con farmacia aprobada + producto Rx + farmacéutico verificado.

---

## Roles y cuentas de prueba

| Rol | Acción |
| --- | ------ |
| **Buyer** (`users`) | Crear pedido con producto `requires_prescription=true` |
| **Pharmacist** (`pharmacist`) | MPPS verificado (`pharmacist_profiles.verified=1`) vinculado a la farmacia |
| **Commerce** (opcional) | Ver orden en panel tras aprobación Rx |

---

## Escenario A — Modo permisivo (default)

`ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION=false`

1. **Buyer:** agregar medicamento Rx al carrito → checkout → crear orden.
2. **Esperado:** orden en `pending_prescription_validation`; detalle muestra chip TTL / plazo receta.
3. **Buyer:** CTA **Subir receta** → `PrescriptionUploadPage` → multipart OK → receta `pending_validation`.
4. **Pharmacist:** tab **Pendientes** → abrir receta → ver imagen (`/file` autenticado) → **Aprobar**.
5. **Esperado:** orden pasa a `pending_payment`; buyer puede subir comprobante.
6. **Opcional:** rechazar en paso 4 → orden cancelada o receta `rejected` según reglas TTL.

---

## Escenario B — TTL expirado

1. Crear orden Rx sin subir receta.
2. Ejecutar `php artisan zonix:expire-pending-prescriptions` (o esperar TTL config).
3. **Esperado:** orden cancelada; receta huérfana expirada; buyer ve estado actualizado al refrescar.

---

## Escenario C — Licencia farmacéutico inválida

1. Farmacéutico con `verified=false` intenta aprobar.
2. **Esperado:** API 403 `PHARMACIST_LICENSE_INVALID`; UI mensaje legible (no "Error 403").

---

## Checklist rápido

- [x] Countdown visible en `order_detail_page` cuando `expiresAt` presente — cubierto `rx_countdown_test.dart`
- [x] Cancel buyer respeta `success: true` y mensaje 409 legible — `OrderTest` + `order_api_errors.dart`
- [x] Historial pharmacist filtra aprobadas/rechazadas/expiradas — `PharmacistPrescriptionHistoryTest`
- [x] Tracking legacy incluye paso validación receta (6 pasos Rx) — `OrderTest::test_legacy_order_tracking_includes_rx_state_and_pharmacy`
- [x] Modo estricto API — smoke curl 11 jun (422 sin receta, 201 con `prescription_id`) — ver historial en `active_context` / CI (snapshot RESULTS eliminado ago 2026)
- [ ] Smoke manual UI Flutter en dispositivo — permisivo + estricto

---

## Verificación automatizada (10 jun 2026)

Suite backend Rx: **22 tests PASS** (corrida jun 2026; snapshot RESULTS eliminado — re-correr `php artisan test` para evidencia fresca).

---

## Comandos útiles

```bash
# Backend tests Rx/orders
php artisan test --filter=Prescription
php artisan test --filter=OrderTest
php artisan test --filter=ExpirePendingPrescriptions

# Front
flutter test test/models/order_test.dart
flutter test test/features/utils/order_api_errors_test.dart
flutter test test/features/services/pharma_policy_service_test.dart
flutter test test/widgets/checkout_strict_rx_test.dart
```

---

## Runbook smoke UI Flutter (dispositivo / emulador)

**Prerequisitos**

| Item | Valor local típico |
| ---- | ------------------ |
| Backend | `php artisan serve --host=0.0.0.0 --port=8000` |
| Front `.env` | `API_URL_LOCAL=http://<IP-LAN>:8000` (misma red que el teléfono) |
| Seed strict | `php artisan db:seed --class=RxStrictSmokeSeeder` |
| Buyer | user id **1** (Abrahan) o demo buyer id **3** — **no** user 2 (`delivery_agent`) |
| Producto Rx demo | id **3** Amoxicilina, farmacia commerce id **1** |

**Escenario permisivo** (`.env` backend `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION=false`)

1. Login buyer → farmacia El Socorro → agregar Amoxicilina → carrito.
2. Checkout → banner “Tu pedido requiere receta médica” (no picker).
3. Confirmar → orden `pending_prescription_validation` → CTA subir receta.

**Escenario estricto** (backend `.env` `=true` + `php artisan config:clear`)

1. **Reiniciar app** (checkout refresca política con `forceRefresh` al abrir).
2. Mismo carrito Rx → checkout → banner **“Modo estricto Rx”** + dropdown **Receta aprobada**.
3. Elegir receta `#1 · Dr. Smoke Demo` → **Recoger** (pickup) → **Confirmar Pedido**.
4. Esperado: orden `pending_payment` (sin pantalla upload intermedia).

**Archivos clave Front**

- `lib/features/services/pharma_policy_service.dart` — `GET /api/pharma-policy`
- `lib/features/screens/cart/checkout_page.dart` — picker strict + `prescription_id` en orden
- `lib/features/screens/cart/cart_page.dart` — banner Rx en carrito

---
