# Research: 001-block-rx-strict-checkout

**Date**: 2026-05-27

## Existing Backend behavior

- `config/zonix.php`: `block_rx_without_prescription` default `false` via `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION`.
- `Buyer/OrderController@store`: checks flag when cart requires prescription (~L425).
- `tests/Feature/OrderTest.php`: scenarios with `config(['zonix.pharma.block_rx_without_prescription' => true/false])`.

## Default MVP vs strict

| Mode | Rx without prescription |
|------|-------------------------|
| Default (`false`) | Order may be created → `pending_prescription_validation` |
| Strict (`true`) | Order creation blocked until approved `prescription_id` |

## Flutter (to verify on implement)

- `cart_service.requiresPrescription` / `prescriptionRequiredItems` exist.
- `checkout_page` / `cart_page` should respect strict mode (may need API hint or config endpoint — **clarify on implement** if no env sync to app).

## References

- [docs/PLAN_RX_VALIDATION.md](../../docs/PLAN_RX_VALIDATION.md)
- [AGENTS.md](../../AGENTS.md) § Reglas farmacéuticas
- Skills: `zonix-prescriptions`, `zonix-order-lifecycle`
