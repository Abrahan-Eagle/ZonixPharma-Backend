## Overlay ZonixPharma Backend

Extensión producto Laravel API marketplace farmacéutico VE. **Precede sobre la base global** donde se contradiga.

### Skill Bootstrap (Paso 0 — tareas no triviales)

Antes de editar código:

1. `Read` → `.agents/skills/SKILL_INDEX.md` (índice compacto).
2. `Read` → `.agents/skills/jarvis-core/SKILL.md`.
3. Consultar tabla auto-invoke en `AGENTS.md` para la acción del usuario.
4. Declarar en la **primera respuesta** (junto a `> Roles:`):

```text
> Skills: jarvis-core (local) → zonix-api-patterns (local) → test-driven-development (local)
```

5. `Read` cada skill declarada **antes** de implementar.
6. Al cerrar: skills planificadas vs leídas (ver `.cursor/skill-usage.jsonl` vía hook).

**Capas:** `local` = `.agents/skills/` del repo · `global` = `~/.cursor/skills/` (solo si se usa explícitamente).

### Spec Kit / SDD (activo en Zonix)

Zonix **sí** usa `.specify/` y Spec Kit para **features de producto** (API + Flutter).

| Ámbito | Cadena |
|--------|--------|
| Feature producto | `sdd-router` (global) → `~/.cursor/skills/speckit-*` → skills `zonix-*` del dominio |
| Guía canon | [docs/zonix/SPEC_KIT_ZONIX.md](docs/zonix/SPEC_KIT_ZONIX.md) |
| Constitution | `.specify/memory/constitution.md` |
| Specs hub | `specs/` (Backend); Front espejo en `../ZonixPharma-Front` |

**No usar Spec Kit** para `docs/Lanzamiento/` ni cifras inversor → `zonix-lanzamiento-docs` + pack `docs/Lanzamiento/`.

Ignorar solo filas globales que no aplican: `kitty-router`, `openspec-router` (si no hay `.kittify/` / `openspec/`).

### Panel de expertos + routing Zonix

| Capa | Skill | Uso |
|------|-------|-----|
| 1 | `jarvis-experts` | Declarar roles (`> Roles: backend + AppSec`) — roster global |
| 2 | `zonix-jarvis-subagents-map` | Routing regulatorio VE, Rx, B2B farmacias, pack Lanzamiento |
| 3 | `zonix-lanzamiento-roles` | Panel roles pack inversor / empresa VE |

**Precedencia:** `jarvis-experts` primero; `zonix-jarvis-subagents-map` cuando la tarea cruce dominio Pharma/regulatorio/startup.

### Protocolo de calidad (Zonix Backend)

| Skill | Cuándo |
|-------|--------|
| `deep-interview-ops` | Requisitos vagos (claridad ≥ 3.5/5) |
| `brainstorming-ops` | Antes de planificar/codificar módulo (fuera de Spec Kit ya aprobado) |
| `task-pipeline-ops` | Tareas >3 pasos: Plan→Spec→Exec→Verify→Fix |
| `verification-before-completion` | **Obligatorio** antes de "listo" o commit |
| `structured-commits-ops` | Commits con decisiones de arquitectura |
| `session-learner-ops` | Cierre módulo → `docs/active_context.md` |
| `parallel-judge-ops` | Diffs de alto riesgo (Rx, pagos, PII salud) |
| `human-in-the-loop-ops` | Push/merge/prod sin OK explícito |
| `doubt-driven-development` | Decisiones no triviales in-flight |

**Dominio sensible:** `zonix-regulatory-ve`, `zonix-prescriptions`, `zonix-payments`, datos de salud (MPPS/INHRR).

### Precedencia Zonix Backend

| Fase | Cadena |
|------|--------|
| Tarea no trivial | `jarvis-experts` → `zonix-jarvis-subagents-map` (si aplica) |
| Requisitos ambiguos | `deep-interview-ops` → `brainstorming-ops` |
| Nueva feature producto | Spec Kit (`speckit-*`) + `zonix-*` del dominio |
| Iniciar módulo (sin spec) | `brainstorming-ops` → `task-pipeline-ops` → `writing-plans` |
| Implementar API | `test-driven-development` + `zonix-api-patterns` + skill `zonix-*` |
| Bug / test fallido | `systematic-debugging` |
| Órdenes / Rx / pagos | `zonix-order-lifecycle` / `zonix-prescriptions` / `zonix-payments` |
| Realtime | `zonix-realtime-events` |
| Landing Blade | `zonix-web-design` + `ui-router` (global) + `zonix-brand-ops` |
| Pack Lanzamiento / inversor | `zonix-lanzamiento-docs` (no Spec Kit) |
| Terminar módulo | `verification-before-completion` → `session-learner-ops` → `finishing-a-development-branch` |
| Crear commit | `verification-before-completion` → `work-unit-commits-ops` → `git-commit` → `structured-commits-ops` |
| PR >400 líneas | `chained-pr-ops` |
| Crear/preparar PR | `branch-pr-ops` (+ `git-guardrails-ops` en push) |
| Docs = código | `docs-alignment-ops` |
| Push / merge | `git-guardrails-ops` |
| Arquitectura API | **Primaria:** `zonix-api-patterns` |
| Memoria Engram (MCP) | `engram-router` → `engram-memory-protocol` (opcional) |

### Workflow modular

1. Panel de expertos — declarar roles.
2. Spec o plan — `specs/` (Spec Kit) o `.agents/plans/implementation_plan.md`.
3. Desarrollo — Sanctum, Services, Eloquent, política migraciones en `AGENTS.md`.
4. Feedback — validación usuario antes de cerrar.
5. Testing — `php artisan test` + `verification-before-completion`.
6. Memoria — `docs/active_context.md`, `documentar-avances` si aplica.
7. Commit — solo con orden explícita; ramas `dev` / `main`.

**Canon workspace:** [docs/ZONIX_WORKSPACE.md](docs/ZONIX_WORKSPACE.md).
