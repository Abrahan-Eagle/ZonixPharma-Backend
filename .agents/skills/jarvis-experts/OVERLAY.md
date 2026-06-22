## Overlay ZonixPharma Backend

Roster y combinaciones para API Laravel Zonix Pharma. Ver también `AGENTS.md` → Panel de Expertos + `zonix-jarvis-subagents-map`.

### Especialización

Marketplace farmacéutico VE: recetas Rx, farmacéutico colegiado, lotes FIFO, cadena de frío, pagos manuales VE, MPPS/INHRR (lente regulatoria, no dictamen legal).

### Combinaciones recomendadas

| Tipo de tarea | Combinación |
|---------------|-------------|
| Endpoint público nuevo | backend + AppSec |
| Upload receta / PII salud | backend + AppSec + privacidad |
| Auth / tokens Sanctum | backend + AppSec + DBA |
| Migración FK / Rx | backend + DBA + SRE |
| Job cola (FCM, Pusher) | backend + integraciones + SRE |
| Validación receta / controlados | backend + privacidad + `zonix-regulatory-ve` (lente) |
| Query lenta | backend + DBA |
| Refactor grande | arquitecto + tech lead + QA |
| Pack Lanzamiento / inversor | delivery + `zonix-lanzamiento-roles` + legal consultivo |

### Anti-patrones

- Más de 3 roles declarados.
- Pedir permiso para AppSec en endpoint con datos de salud.
- Usar Spec Kit para docs de inversor (`docs/Lanzamiento/`).

### Review adversarial

| Momento | Skill |
|---------|-------|
| Duda in-flight sobre una decisión mientras construyes | `doubt-driven-development` |
| Artefacto terminado / pre-merge / diffs de alto riesgo (Rx, pagos) | `parallel-judge-ops` |
