# Feature Specification: Block Rx Without Prescription (Strict Mode)

**Feature Branch**: `001-block-rx-strict-checkout`

**Created**: 2026-05-27

**Status**: Draft — pilot Spec Kit artifact (implementation pending user OK)

**Input**: Enable opt-in strict checkout for Rx products: when `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION=true`, Buyer cannot complete order creation/checkout with Rx line items unless an approved `prescription_id` is attached.

## User Scenarios & Testing

### User Story 1 — Strict mode blocks Rx checkout without prescription (Priority: P1)

As a **Buyer**, when the marketplace runs in strict Rx mode, I must not place an order containing prescription-required products unless I have linked an **approved** prescription for that pharmacy/order context.

**Why this priority**: Regulatory and pilot readiness; aligns with `block_rx_without_prescription` config already partially implemented in Backend.

**Independent Test**: With `config('zonix.pharma.block_rx_without_prescription') === true`, POST order with Rx product and no `prescription_id` returns error; with valid approved prescription succeeds.

**Acceptance Scenarios**:

1. **Given** strict mode ON and cart has Rx items, **When** Buyer submits order without `prescription_id`, **Then** API returns `success: false` with clear message (no order in `pending_payment`).
2. **Given** strict mode ON and approved prescription linked, **When** Buyer submits order, **Then** order is created with correct `prescription_id` and state per `zonix-order-lifecycle`.
3. **Given** strict mode OFF (default MVP), **When** Buyer submits Rx order without prescription, **Then** order may enter `pending_prescription_validation` (existing behavior preserved).

---

### User Story 2 — Flutter surfaces strict-mode errors (Priority: P2)

As a **Buyer** on the app, when strict mode is active, I see a clear message on cart/checkout and cannot tap "Pagar" until prescription requirements are met.

**Why this priority**: API-only enforcement is insufficient for UX; users need guidance to upload/link prescription.

**Independent Test**: Checkout page shows blocking banner; pay button disabled when `requiresPrescription` and no valid prescription in strict mode (client reflects API policy).

**Acceptance Scenarios**:

1. **Given** cart with Rx items and strict policy from API/config, **When** user opens checkout, **Then** banner explains prescription requirement and CTA to `PrescriptionUploadPage`.
2. **Given** valid prescription linked, **When** user reaches checkout, **Then** pay action is enabled.

---

### User Story 3 — Operations toggle via env (Priority: P3)

As **Admin/ops**, strict mode is controlled by `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION` without code deploy of business rules.

**Independent Test**: Toggle env + config cache clear changes behavior; documented in `.env.example`.

**Acceptance Scenarios**:

1. **Given** env `true`, **When** config is loaded, **Then** `config('zonix.pharma.block_rx_without_prescription')` is true.

## Requirements

### Functional

- FR-001: Backend MUST enforce strict block in `Buyer/OrderController@store` when flag true and cart contains `requires_prescription` products.
- FR-002: Error response MUST use standard Zonix API envelope with actionable `message`.
- FR-003: Existing tests in `OrderTest` for strict mode MUST remain green; extend if gaps found.
- FR-004: Front MUST align checkout/cart UX with strict vs permissive modes (no false enable of pay).
- FR-005: Promotions on Rx lines remain governed by `disallow_promotions_on_rx` (unchanged).

### Non-Functional

- NFR-001: No new migration unless schema gap discovered (brownfield).
- NFR-002: Feature documented in `docs/PLAN_RX_VALIDATION.md` cross-reference after implement.

## Review & Acceptance Checklist

- [x] User stories prioritized and independently testable
- [x] Strict vs default MVP behavior distinguished
- [ ] Legal/regulatory copy reviewed (`zonix-regulatory-ve`) before production pilot
- [ ] User approved `/speckit-implement`

## Out of Scope

- Changing default from `false` to `true` in production without founder decision
- Pharmacist validation workflow changes (separate spec)
- Pack Lanzamiento / investor documentation
