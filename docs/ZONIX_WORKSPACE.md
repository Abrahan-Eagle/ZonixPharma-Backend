# Workspace Zonix Pharma (canon)

> **No duplicar** skills `zonix-*` ni `docs/zonix/` en repos **CorralX**. Usar solo estos paths.

## Repos oficiales

| Repo | Ruta absoluta (ejemplo) | Rol |
|------|-------------------------|-----|
| **Backend** | `ZonixPharma-Backend/` | Laravel API, skills agente (canon), pack Lanzamiento |
| **Front** | `ZonixPharma-Front/` | Flutter; stubs inversor → Backend |

## Documentación forense y roles

| Recurso | Ruta |
|---------|------|
| Pack inversor (22 docs) | [docs/Lanzamiento/](Lanzamiento/README.md) |
| Skills agente (30 `zonix-*`) | `.agents/skills/zonix-*/` |
| Router startup | [docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md](zonix/SKILLS_STARTUP_USAR_NO_USAR.md) |
| Routing JARVIS | [docs/zonix/roles_matrix.json](zonix/roles_matrix.json) |
| Routing JARVIS | [docs/zonix/roles_matrix.json](zonix/roles_matrix.json) |
| Matriz roles humanos | [docs/Lanzamiento/ROLES_SKILLS_ZONIX.md](Lanzamiento/ROLES_SKILLS_ZONIX.md) |

## CorralX (marketplace ganadero)

- **CorralX-Frontend** y **CorralX-Backend** son otro producto.
- Si aparecen carpetas `docs/zonix/` o `.agents/skills/zonix-*` en CorralX, **eliminarlas**; canon aquí.
- Insumos locales de auditoría (p. ej. clones awesome en `uploads/`) no se versionan en CorralX.

## Regla de oro para agentes

Cifras (101k / 118k / 135k, SAFE caps, ARPF) y legal VE solo desde **pack Lanzamiento** + skill `zonix-startup-context`.

## JARVIS onboarding (Capa 0 + Paso C)

| Recurso | Uso |
|---------|-----|
| Chat Cursor | `init jarvis` |
| Terminal | `bash …/jarvis-skills-library/scripts/init-jarvis.sh --min c` |
| Manifest Backend | `.agents/skills/.global-sync-manifest` (48 skills Laravel/ops) |
| Manifest Front | `../ZonixPharma-Front/.agents/skills/.global-sync-manifest` (45 skills Flutter + ui-router) |
| Integración | [docs/ZONIX_JARVIS_INTEGRATION.md](ZONIX_JARVIS_INTEGRATION.md) |
| Library | `jarvis-skills-library/docs/ZONIX_INTEGRATION.md` |

**Roles:** `jarvis-experts` (panel global) + `zonix-jarvis-subagents-map` (routing VE/Rx/regulatorio) — coexisten; precedencia en `jarvis-core/OVERLAY.md`.

**Spec Kit:** activo en `.specify/` + `speckit-*` — no usar para `docs/Lanzamiento/` (usar `zonix-lanzamiento-docs`).
