## Overlay ZonixPharma Backend

Pipeline: PLAN → SPEC → EXEC → VERIFY → FIX (≤3) → COMPLETE | ESCALATE

### SPEC (Laravel)

| Paso | Done when |
|------|-----------|
| Endpoint | Test feature pasa + JSON documentado (`zonix-api-patterns`) |
| Migración | `migrate` OK + política AGENTS (editar create) |
| Feature Spec Kit | Artefactos en `specs/` + constitution alineada |

### VERIFY

`php artisan test` + `verification-before-completion`.

### Cierre

`docs/active_context.md`, `documentar-avances` si aplica.
