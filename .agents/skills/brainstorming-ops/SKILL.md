---
name: brainstorming-ops
description: >
  OBLIGATORIO antes de tareas complejas en proyecto activo: pantallas, providers, navegación,
  flujos KYC/onboarding. Propone alternativas y obtiene aprobación antes de codificar.
  Trigger: Planificar módulo, feature ambiguo, rediseño UI.
license: UNLICENSED
metadata:
  author: proyecto Team
  version: "1.0.0"
  scope: [root]
  auto_invoke:
    - "Planificar desarrollo"
    - "Iniciar módulo"
  related-skills:
    - deep-interview-ops
    - jarvis-core
    - product-ui-design
---

# Brainstorming ops — proyecto activo

Adaptado desde clawvis-openclaw.

## Regla

**NO escribir código** hasta diseño aprobado por el usuario.

## Cuándo se activa

- Nueva pantalla o flujo (marketplace, chat, perfil, KYC)
- Cambios en Provider / navegación
- Tema, accesibilidad, responsive
- Integración API nueva en servicios

## Checklist

1. Leer `AGENTS.md`, `docs/active_context.md`, `{producto}-flutter-arch`, `{producto}-ui-design`.
2. Preguntas clarificadoras.
3. 2–3 alternativas (widgets, estado, rutas).
4. Plan en `.agents/plans/implementation_plan.md`.
5. OK del usuario.

## Secuencia

```
deep-interview-ops (si vago) → brainstorming-ops → task-pipeline-ops → ejecución
```

## Contexto proyecto

- Siempre `AppConfig.apiUrl` — sin URLs hardcodeadas.
- Provider + servicios por feature.
- Tema: `corral_x_theme.dart`.

---

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
