---
name: deep-interview-ops
description: >
  Entrevista socrática antes de tareas ambiguas en proyecto activo. Gate claridad mínima 3.5/5.
  Trigger: UI vaga, flujo KYC/onboarding sin spec, cambios navegación global.
license: UNLICENSED
metadata:
  version: "1.1.0"
  auto_invoke:
    - "Requisitos ambiguos"
  related-skills:
    - brainstorming-ops
    - product-kyc-ui
---

# Deep interview ops — proyecto activo

> Con Spec Kit (`.specify/`), preferir `speckit-clarify` para clarificación estructurada de `spec.md`.

Adaptado desde clawvis-openclaw.

## Gate

```
NO EJECUTAR SI CLARIDAD PROMEDIO < 3.5 / 5.0
```

## Secuencia

`deep-interview-ops` → `brainstorming-ops` → ejecución

## 6 dimensiones

| Dimensión | Pregunta guía |
|-----------|---------------|
| Alcance | ¿Qué pantallas/widgets? ¿Web + móvil? |
| Criterio de éxito | ¿Analyze + tests + criterio UX? |
| Restricciones | ¿Tema claro/oscuro? ¿Offline? |
| Dependencias | ¿API lista en backend `dev`? |
| Riesgos | ¿BuildContext async? ¿Permisos cámara? |
| Contexto | ¿Stitch assets? ¿Walkthrough previo? |

## Casos típicos proyecto

- Onboarding + KYC UI
- Chat legibilidad / realtime
- Marketplace filtros y cards
- Mi Perfil / documentos rancho

---

## Overlay ZonixPharma Backend

Gate claridad **≥ 3.5/5** antes de ejecutar.

### 6 dimensiones (API/DB)

Alcance endpoints/modelos, criterio éxito (test feature), restricciones prod/regulatorio VE, dependencias Frontend, riesgos (Rx, PII salud, cold chain), contexto `active_context`.

### Casos típicos

Órdenes + `pending_prescription_validation`, validación farmacéutico, lotes FIFO, pagos manuales VE, multi-sede commerce, cadena de frío delivery.

Secuencia: `deep-interview-ops` → `brainstorming-ops` → Spec Kit o ejecución.
