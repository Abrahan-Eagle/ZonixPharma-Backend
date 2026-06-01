# Implementation Plan: Block Rx Without Prescription (Strict Mode)

**Branch**: `001-block-rx-strict-checkout` | **Date**: 2026-05-27 | **Spec**: [spec.md](./spec.md)

**Hub**: ZonixPharma-Backend | **Front sibling**: `../ZonixPharma-Front`

## Summary

Harden and document the existing `block_rx_without_prescription` flag end-to-end: Backend already gates `OrderController@store` when true; pilot validates tests, error messages, and Flutter checkout alignment. No schema change expected.

## Technical Context

**Language/Version**: PHP 8.1+ (Laravel 10), Dart 3.5+ (Flutter ≥3.5)

**Storage**: MySQL — existing `orders.prescription_id`, `products.requires_prescription`

**Testing**: `php artisan test --filter=OrderTest`, Flutter cart/checkout tests

**Config**: `config/zonix.php` → `pharma.block_rx_without_prescription` ← `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION`

## Constitution Check

- [x] Dual-repo paths documented
- [x] Pharma Rx rules addressed
- [x] No new add/change migrations planned
- [x] Skills: `zonix-order-lifecycle`, `zonix-prescriptions`, `zonix-api-patterns`, `zonix-ui-design`

## Project Structure

### Documentation

```text
specs/001-block-rx-strict-checkout/
├── spec.md
├── plan.md
├── tasks.md
├── research.md
└── analyze.md
```

### Backend paths

```text
config/zonix.php
app/Http/Controllers/Buyer/OrderController.php
tests/Feature/OrderTest.php
.env.example
docs/PLAN_RX_VALIDATION.md  # cross-link after implement
```

### Frontend paths

```text
lib/features/screens/cart/cart_page.dart
lib/features/screens/cart/checkout_page.dart
lib/features/services/cart_service.dart
lib/features/screens/prescriptions/prescription_upload_page.dart
test/  # add/update if missing
```

**Structure Decision**: Brownfield enhancement; primary logic exists Backend L425 area in OrderController; Front needs policy-aware UX parity.

## Research Summary

See [research.md](./research.md). Backend tests at `OrderTest` lines ~555–638 already cover flag true/false. Gap analysis: verify Flutter does not allow pay when API would reject.

## Complexity Tracking

None — using existing config and controller branch.
