# Spec Kit (SDD) en Zonix Pharma

> **Última actualización:** 27 mayo 2026  
> **Toolkit:** [github/spec-kit](https://github.com/github/spec-kit) v0.8.15 (`specify-cli`)

## Arquitectura

| Repo | Rol |
|------|-----|
| **ZonixPharma-Backend** | Hub SDD: `specs/`, `.specify/`, constitution canon |
| **ZonixPharma-Front** | Espejo Cursor: skills `speckit-*`; specs en Backend |

## Skills: speckit vs zonix

| Namespace | Ubicación | Propósito |
|-----------|-----------|-----------|
| `speckit-*` (core) | `~/.cursor/skills/` vía `install.sh --all` | Proceso SDD (specify, plan, tasks, implement) |
| `speckit-git-*` | `.agents/skills/` | Hooks git Spec Kit (local capa 5) |
| `zonix-*` | `.agents/skills/` | Dominio Pharma, API, Rx, finanzas pack, legal VE |

**Regla:** Spec Kit no reemplaza Jarvis. En implementación, invocar siempre las `zonix-*` del dominio.

## Flujo en Cursor

1. `/speckit-constitution` — [.specify/memory/constitution.md](../../.specify/memory/constitution.md)
2. `/speckit-specify` — crear `specs/00N-feature/spec.md`
3. `/speckit-clarify` — antes de plan si hay ambigüedad
4. `/speckit-plan` — `plan.md` con rutas Backend + Front
5. `/speckit-tasks` — `tasks.md` con prefijos `backend:` / `front:`
6. `/speckit-analyze` — coherencia pre-implement
7. `/speckit-implement` — **solo con OK explícito del usuario**

## Cuándo usar qué

| Tarea | Herramienta |
|-------|-------------|
| Nueva feature producto (API + app) | Spec Kit + `zonix-*` dominio |
| Bugfix puntual | Jarvis + `systematic-debugging` |
| Pack `docs/Lanzamiento/` | `zonix-lanzamiento-docs` — **no** Spec Kit |
| Pitch / finanzas / SAFE | `zonix-fundraising-narrative`, `zonix-financial-model` |

## Piloto

Feature de referencia: [specs/001-block-rx-strict-checkout/](../../specs/001-block-rx-strict-checkout/) (artefactos listos; implement pendiente OK).

## CLI útil

```bash
specify version
specify integration list
cd ZonixPharma-Backend && specify init . --force --integration cursor-agent --script sh
```

Instalación: `uv tool install specify-cli --from git+https://github.com/github/spec-kit.git@v0.8.15`

## Overrides Zonix

Plantillas dual-repo: `.specify/templates/overrides/plan-template.md`, `tasks-template.md`
