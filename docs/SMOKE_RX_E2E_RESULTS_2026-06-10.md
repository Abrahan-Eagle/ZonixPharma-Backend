# Resultados smoke Rx E2E — verificación automatizada

**Fecha ejecución:** 10 junio 2026  
**Entorno:** local SQLite tests (`php artisan test`)  
**Manual en dispositivo:** pendiente (requiere seed + cuentas buyer/pharmacist)

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

**Total filtro Rx smoke:** 22 tests, 84 assertions — **PASS**

---

## Checklist UI (Front — tests unitarios/widget)

| Ítem | Cobertura | Resultado |
| ---- | --------- | --------- |
| Countdown Rx | `test/features/utils/rx_countdown_test.dart` | ✅ |
| Errores orden buyer | `test/features/utils/order_api_errors_test.dart` | ✅ |
| Errores receta | `test/features/utils/pharmacist_api_errors_test.dart` | ✅ |
| Parseo orden Rx | `test/models/order_test.dart` | ✅ |
| Modo estricto checkout (policy + picker) | implementado lote 6 — smoke manual recomendado | ⏳ manual |

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

Ver checklist original: [SMOKE_RX_E2E.md](SMOKE_RX_E2E.md).
