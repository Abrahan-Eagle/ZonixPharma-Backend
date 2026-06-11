# Tasks: Block Rx Without Prescription (Strict Mode)

**Input**: [spec.md](./spec.md), [plan.md](./plan.md)

**Status**: Implementado lote 6 — 10 junio 2026

## Phase 1: Setup

- [x] T001 Confirm spec folder `specs/001-block-rx-strict-checkout/`
- [x] T002 Review constitution + `zonix-order-lifecycle`, `zonix-prescriptions`

## Phase 2: Foundational

- [x] T003 backend: Audit `OrderController@store` strict branch vs spec acceptance scenarios
- [x] T004 backend: Confirm `.env.example` documents `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION`

## Phase 3: User Story 1 — Backend strict enforcement (P1)

- [x] T005 [US1] backend: `OrderController@store` — mensaje user-facing sin referencia ops env
- [x] T006 [US1] backend: `tests/Feature/OrderTest.php` — escenarios strict/default
- [x] T007 [US1] backend: `GET /api/pharma-policy` + `PublicPharmaPolicyTest`

**Checkpoint**: US1 API behavior verified in strict/default modes ✅

## Phase 4: User Story 2 — Flutter checkout UX (P2)

- [x] T008 [P] [US2] front: `checkout_page.dart` — strict banner + picker receta + bloqueo confirmar
- [x] T009 [P] [US2] front: `cart_page.dart` — mensaje strict vía `PharmaPolicyService`
- [x] T010 [US2] front: `order_service.createOrder` envía `prescription_id`; errores `ORDER_RX_*`
- [x] T011 [US2] front: tests `order_api_errors_test.dart`

**Checkpoint**: US2 UX matches Backend policy ✅

## Phase 5: User Story 3 — Ops documentation (P3)

- [x] T012 [US3] backend: `docs/PLAN_RX_VALIDATION.md` — endpoint público pharma-policy
- [x] T013 [US3] backend: `docs/active_context.md` — nota lote 6

## Phase 6: Polish

- [x] T014 backend: tests verdes
- [x] T015 [P] front: `flutter analyze` en cart/checkout
- [x] T016 Spec tasks actualizado (este archivo)

## Dependencies

```text
T003 → T005 → T007 → T008 → T011 → T012 → T014/T015
```
