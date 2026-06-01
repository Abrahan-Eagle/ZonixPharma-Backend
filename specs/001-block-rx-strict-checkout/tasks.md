# Tasks: Block Rx Without Prescription (Strict Mode)

**Input**: [spec.md](./spec.md), [plan.md](./plan.md)

**Status**: Ready for `/speckit-implement` after **user OK** — not executed in pilot bootstrap.

## Phase 1: Setup

- [x] T001 Confirm spec folder `specs/001-block-rx-strict-checkout/`
- [x] T002 Review constitution + `zonix-order-lifecycle`, `zonix-prescriptions`

## Phase 2: Foundational

- [ ] T003 backend: Audit `OrderController@store` strict branch vs spec acceptance scenarios
- [ ] T004 backend: Confirm `.env.example` documents `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION`

## Phase 3: User Story 1 — Backend strict enforcement (P1)

- [ ] T005 [US1] backend: `app/Http/Controllers/Buyer/OrderController.php` — align error message/copy with API patterns
- [ ] T006 [US1] backend: `tests/Feature/OrderTest.php` — extend coverage if edge cases missing
- [ ] T007 [US1] backend: `php artisan test --filter=OrderTest`

**Checkpoint**: US1 API behavior verified in strict/default modes

## Phase 4: User Story 2 — Flutter checkout UX (P2)

- [ ] T008 [P] [US2] front: `lib/features/screens/cart/checkout_page.dart` — block pay + banner when Rx strict
- [ ] T009 [P] [US2] front: `lib/features/screens/cart/cart_page.dart` — consistent messaging
- [ ] T010 [US2] front: `lib/features/screens/prescriptions/prescription_upload_page.dart` — navigation from CTA
- [ ] T011 [US2] front: `flutter test` (scoped cart/checkout if tests exist)

**Checkpoint**: US2 UX matches Backend policy

## Phase 5: User Story 3 — Ops documentation (P3)

- [ ] T012 [US3] backend: `docs/PLAN_RX_VALIDATION.md` — note strict mode toggle
- [ ] T013 [US3] backend: `docs/active_context.md` — post-implement note (user approval)

## Phase 6: Polish

- [ ] T014 backend: `./vendor/bin/pint --test` on touched PHP
- [ ] T015 [P] front: `flutter analyze` on touched `lib/features/screens/cart/`
- [ ] T016 Run `/speckit-analyze` or review [analyze.md](./analyze.md)

## Dependencies

```text
T003 → T005 → T007 → T008 → T011 → T012 → T014/T015
```
