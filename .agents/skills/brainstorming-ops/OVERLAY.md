## Overlay ZonixPharma Backend

Producto Laravel API marketplace farmacéutico — no holding OpenClaw.

### Cuándo se activa

- Nuevo módulo API (órdenes Rx, recetas, commerce multi-sede, delivery)
- Migraciones, auth Sanctum, integraciones FCM/Pusher
- Cambios regulatorios copy (lente `zonix-regulatory-ve`)

### Checklist

1. Leer `AGENTS.md`, `docs/active_context.md`, skills `zonix-*` del dominio
2. Preguntas clarificadoras (una a la vez)
3. 2–3 alternativas con trade-offs
4. Diseño (BD, API, tests) → `specs/` (Spec Kit) o `.agents/plans/implementation_plan.md`
5. OK del usuario antes de código

### Contexto Zonix

- API: Sanctum, formato `{ success, data, message }` — ver `zonix-api-patterns`
- Migraciones: editar `create_*`, no acumular `add_*` (norma AGENTS.md)
- Features producto: Spec Kit; Lanzamiento: `zonix-lanzamiento-docs`
