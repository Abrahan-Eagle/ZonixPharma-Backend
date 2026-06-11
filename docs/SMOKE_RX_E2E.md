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
- [ ] Smoke manual en dispositivo — ver [SMOKE_RX_E2E_RESULTS_2026-06-10.md](SMOKE_RX_E2E_RESULTS_2026-06-10.md)

---

## Verificación automatizada (10 jun 2026)

Suite backend Rx: **22 tests PASS**. Detalle en [SMOKE_RX_E2E_RESULTS_2026-06-10.md](SMOKE_RX_E2E_RESULTS_2026-06-10.md).

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
```
