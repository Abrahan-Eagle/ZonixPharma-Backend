---
name: jarvis-core
description: >
  Protocolo base del sistema JARVIS para cualquier proyecto. Define honestidad, foco de negocio y flujo de trabajo modular.
  Trigger: Al iniciar un nuevo feature, planificar desarrollo, terminar un módulo, o modificar el sistema en sí.
license: UNLICENSED
metadata:
  author: JARVIS Global
  version: "2.0"
  scope: [global]
  auto_invoke:
    - "Iniciar módulo"
    - "Planificar desarrollo"
    - "Terminar módulo"
  triggers: jarvis, workflow, módulo, feature, plan, core
  related-skills:
    - jarvis-experts
    - session-startup-ops
    - sdd-router
    - kitty-router
    - openspec-router
    - speckit-lifecycle-router
    - sdd-x-index
    - ui-router
    - open-design-router
    - stitch-router
    - ai-media-landing-ops
    - ecc-router
    - cyber-neo-router
    - kalman-anomaly-router
    - learning-loop-router
    - agent-skills-router
    - claude-skills-router
    - skill-loop-router
    - human-in-the-loop-ops
    - scenario-router
    - strategic-briefing-ops
    - speckit-specify
    - speckit-plan
    - speckit-taskstoissues
    - code-review-playbook
    - git-commit
    - brainstorming-ops
    - task-pipeline-ops
    - verification-before-completion
    - session-learner-ops
    - writing-plans
    - executing-plans
    - using-git-worktrees
    - finishing-a-development-branch
    - project-bootstrap-ops
    - fan-out-synthesize-ops
    - strategic-compact-ops
    - context-packs-ops
allowed-tools: [Read, Edit, Write, Glob, Grep, Bash, WebFetch, WebSearch, Task]
---

# JARVIS Core System (global)

Skill global en `jarvis-skills-library` → `~/.cursor/skills/`. Skills de **dominio** del producto (`{producto}-*`) viven en `.agents/skills/` del repo activo.

Proyecto **nuevo o legacy sin JARVIS**: escribe **`init jarvis`** en el chat (skill `project-bootstrap-ops`, [PROJECT_ONBOARDING.md](../../../docs/PROJECT_ONBOARDING.md)) antes de planificar features.

Si el repo tiene `.kittify/`, ver `kitty-router` ([docs/SPEC_KITTY_INTEGRATION.md](../../../docs/SPEC_KITTY_INTEGRATION.md)) — **no** `speckit-*`.

Si el repo tiene `openspec/` (sin otros marcadores SDD), ver `openspec-router` ([docs/AWESOME_SPEC_KITS.md](../../../docs/AWESOME_SPEC_KITS.md)) — **no** `speckit-*`.

Si el repo tiene `.specify/` (sin `.kittify/` ni `openspec/`), ver `sdd-router` y cadena `speckit-*` ([docs/SDD_SPECKIT_INTEGRATION.md](../../../docs/SDD_SPECKIT_INTEGRATION.md)).

Para UI/UX en código, ver `ui-router` ([docs/UI_UX_PRO_MAX_INTEGRATION.md](../../../docs/UI_UX_PRO_MAX_INTEGRATION.md)).

Para artefactos visuales marketing (carrusel, deck, email HTML), ver `open-design-router` ([docs/OPEN_DESIGN_INTEGRATION.md](../../../docs/OPEN_DESIGN_INTEGRATION.md)) — no `speckit-specify`.

Para prototipos web en Google Stitch (MCP, DESIGN.md, stitch-loop), ver `stitch-router` ([docs/STITCH_UPSTREAM.md](../../../docs/STITCH_UPSTREAM.md)) — no sustituye `ui-router` en Flutter/Blade del producto.

Para landings con media generativa IA (cadena Claude → Nano Banana → Veo/Kling → Claude Design → Claude Code, video hero en loop), ver `ai-media-landing-ops` — no sustituye `ui-router` (UI en repo) ni `open-design-router` (artefacto standalone).

Para what-if estratégico y simulación multi-agente, ver `scenario-router` ([docs/STRANGEVERSE_INTEGRATION.md](../../../docs/STRANGEVERSE_INTEGRATION.md), [docs/MIROFISH_UPSTREAM.md](../../../docs/MIROFISH_UPSTREAM.md)) — no `speckit-specify` salvo que el escenario derive en feature.

Para briefing estratégico / estado general del proyecto, ver `strategic-briefing-ops` — no `scenario-analysis-ops` ni `speckit-specify`.

Para harness ECC (hooks, instincts, rules idioma, `ecc consult`), ver `ecc-router` ([docs/ECC_INTEGRATION.md](../../../docs/ECC_INTEGRATION.md)) — no sustituye este workflow.

Para auditoría de seguridad profunda read-only (Cyber Neo, 11 dominios, reporte OWASP 2025), ver `cyber-neo-router` ([docs/CYBER_NEO_INTEGRATION.md](../../../docs/CYBER_NEO_INTEGRATION.md)) — no sustituye `security` ni este workflow.

Para detección runtime y política escalonada ante spikes (Kalman + agente), ver `kalman-anomaly-router` ([docs/KALMAN_ANOMALY_INTEGRATION.md](../../../docs/KALMAN_ANOMALY_INTEGRATION.md)) — no sustituye `cyber-neo` ni este workflow.

Para captura/consolidación de aprendizajes de sesión (scan/wrap-up), ver `learning-loop-router` ([docs/LEARNING_LOOP_INTEGRATION.md](../../../docs/LEARNING_LOOP_INTEGRATION.md)) — complemento de `session-learner-ops`, no sustituto.

Para orquestación automática de loops multi-skill (`skill-loop.yml` + CLI), ver `skill-loop-router` ([docs/SKILL_LOOP_INTEGRATION.md](../../../docs/SKILL_LOOP_INTEGRATION.md)) — no sustituye `jarvis-core` ni `learning-loop`.

Para pack Addy Osmani (doubt-driven in-flight vs canónico JARVIS), ver `agent-skills-router` ([docs/AGENT_SKILLS_ADDY_INTEGRATION.md](../../../docs/AGENT_SKILLS_ADDY_INTEGRATION.md)) — solo `doubt-driven-development` curado; no sustituye `speckit-*`.

Para pack Rezvani/claude-skills (auditoría pre-install vs megapack), ver `claude-skills-router` ([docs/CLAUDE_SKILLS_REZVANI_INTEGRATION.md](../../../docs/CLAUDE_SKILLS_REZVANI_INTEGRATION.md)) — solo `skill-security-auditor` curado.

Para gobernanza humana en bucles agénticos (HITL/HOTL, umbrales, terminación), ver `human-in-the-loop-ops` ([docs/LOOP_AI_ECOSYSTEM.md](../../../docs/LOOP_AI_ECOSYSTEM.md)) — complementa `git-guardrails-ops` y `skill-loop-router`.

Para orquestación por defecto (Map-Reduce agentico / Fan-out-and-synthesize: N workers paralelos → orquestador sintetiza), ver `fan-out-synthesize-ops` — **obligatorio** en tareas no triviales salvo exenciones documentadas en esa skill.

Para SD-X (dev + diseño + docs + validate), ver `sdd-x-index` ([docs/SDX_ECOSYSTEM.md](../../../docs/SDX_ECOSYSTEM.md)).

## Protocolo de calidad

| Skill | Cuándo |
|-------|--------|
| `deep-interview-ops` | Requisitos vagos (claridad ≥ 3.5/5) |
| `brainstorming-ops` | Antes de planificar/codificar módulo |
| `task-pipeline-ops` | Tareas >3 pasos |
| `verification-before-completion` | **Obligatorio** antes de "listo" |
| `structured-commits-ops` | Commits con decisiones de arquitectura |
| `session-learner-ops` | Cierre módulo → `docs/active_context.md` |
| `writing-plans` / `executing-plans` | Plan en `.agents/plans/` |
| `using-git-worktrees` | Worktrees aislados |
| `requesting-code-review` / `receiving-code-review` | Review pre-merge |
| `finishing-a-development-branch` | Cierre con tests del stack |

## Precedencia de skills

Cuando `AGENTS.md` lista varias skills para la misma acción, aplicar esta secuencia:

| Fase | Cadena |
|------|--------|
| Integrar / diagnosticar JARVIS (`init jarvis`) | `project-bootstrap-ops` → [PROJECT_ONBOARDING.md](../../../docs/PROJECT_ONBOARDING.md) → OK usuario → Paso A/B/C |
| Iniciar / retomar sesión | `session-startup-ops` → (Roles/Skills) → resto según tarea |
| Modo research / produce / review | `context-packs-ops` (declarar `> Context pack: …`) |
| Compactar o traspasar sesión | `strategic-compact-ops` → `handoff` |
| Cualquier tarea no trivial | `jarvis-experts` → **`fan-out-synthesize-ops`** → (resto según fase) |
| Nueva feature de producto (con `.kittify/`) | `kitty-router` → charter/specify/plan/tasks (Cursor) → `spec-kitty next` → review/accept/merge (OK usuario) |
| Nueva feature de producto (con `openspec/`) | `openspec-router` → `/opsx:propose` → `/opsx:apply` (OK usuario) → `/opsx:archive` |
| Nueva feature de producto (con `.specify/`) | `sdd-router` → `speckit-constitution` → `speckit-specify` → `speckit-clarify` (opc.) → `speckit-plan` → `speckit-tasks` → `speckit-taskstoissues` (opc.) → `speckit-analyze` → `speckit-implement` (OK usuario) → `speckit-converge` (opc.) |
| Requisitos ambiguos | `deep-interview-ops` → `brainstorming-ops` (sin Spec Kit) o `speckit-clarify` (con Spec Kit) |
| Iniciar módulo (sin `.specify/`) | `jarvis-core` → `brainstorming-ops` → `writing-plans` → `task-pipeline-ops` |
| Planificar desarrollo (sin `.specify/`) | `brainstorming-ops` → `writing-plans` → `executing-plans` |
| Bug o test fallido (con `.specify/`) | `speckit-lifecycle-router` → bugfix branch o `systematic-debugging` si sin extensions |
| Hotfix producción | `speckit-lifecycle-router` (hotfix) + `git-guardrails-ops` |
| Implementar feature / bugfix (sin `.specify/`) | `test-driven-development` + skill dominio `{producto}-*` |
| Terminar módulo | `verification-before-completion` → `session-learner-ops` → `finishing-a-development-branch` |
| Crear commit | `verification-before-completion` → `work-unit-commits-ops` → `git-commit` → `structured-commits-ops` |
| PR >400 líneas / stacked PRs | `chained-pr-ops` |
| Crear o preparar PR | `branch-pr-ops` (+ `git-guardrails-ops` en push) |
| Memoria persistente Engram (MCP) | `engram-router` → `engram-memory-protocol` |
| Triage backlog issues/PRs | `backlog-triage-ops` |
| Docs deben igualar código | `docs-alignment-ops` |
| Docs/PR con baja carga cognitiva (README, RFC, onboarding) | `cognitive-doc-design-ops` |
| Comentarios humanos (PR, issue, review, Slack) | `comment-writer-ops` |
| Push / merge | `git-guardrails-ops` (solo con orden explícita del usuario) |
| Code review | `code-review-playbook` (+ opcional requesting/receiving) |
| Decisión no trivial alta stakes (auth, prod, irreversible) | `agent-skills-router` → `doubt-driven-development` (opcional in-flight; no bloquea TDD ni review) |
| Auditar skill externa antes de instalar | `claude-skills-router` → `skill-security-auditor` (+ `validate-skills.sh`) |
| UI/UX en código, landing en repo, a11y, layout | `ui-router` → skill dominio `{producto}-ui-design` / `zonix-web-design` → `ui-ux-pro-max` → `responsive-design` (opc.) |
| Carrusel, deck, email HTML, prototipo standalone | `open-design-router` → `open-design` (daemon OD) |
| Prototipo web Stitch (MCP, stitch::generate-design, stitch-loop) | `stitch-router` → skills upstream ([STITCH_UPSTREAM.md](../../../docs/STITCH_UPSTREAM.md)) |
| Landing con media generativa IA (video hero loop, Nano Banana + Veo + Claude Design/Code) | `ai-media-landing-ops` → checkpoints HITL → `verification-before-completion` |
| Briefing estratégico / estado general | `strategic-briefing-ops` |
| What-if / escenarios estratégicos | `scenario-router` → `scenario-analysis-ops` o `{producto}-scenario-analysis` |
| Simulación multi-agente / opinión pública | `scenario-router` → `strangeverse` (API :5001) |
| Harness ECC (hooks, instincts, rules, consult) | `ecc-router` → `ecc` / `install-ecc-runtime.sh` |
| Auditoría seguridad profunda read-only + reporte | `cyber-neo-router` → skill `cyber-neo` |
| Diseño defensa runtime / spikes / política DDoS | `kalman-anomaly-router` → `kalman-anomaly-defense` |
| Diseñar loop de agente (loop vs prompt, anatomía, conciso/controlado) | `agent-loop-engineering` → `skill-loop-router` / `human-in-the-loop-ops` |
| Loop automático impl→review→verify (YAML) | `skill-loop-router` → skill `skill-loop` + `skill-loop run` (OK usuario) |
| Orquestación fan-out (explore, audit, implement, debug) | `fan-out-synthesize-ops` (N Task paralelos → síntesis → writer único) |
| Verificación adversarial paralela / "día del juicio" | `parallel-judge-ops` (fase Verify de `fan-out-synthesize-ops`; Task readonly en paralelo) |
| Auditoría automática pre-gate (LLM-as-judge) | `llm-as-judge-ops` |
| Loop autónomo / decisión alta stakes con gate humano | `human-in-the-loop-ops` → `git-guardrails-ops` / `approval-gate` según acción |
| SD-X ambiguo / multi-arte (dev+UI+docs) | `sdd-x-index` → `sdd-router` o `ui-router` según tabla SD-X |

## Directivas principales

1. **Honestidad:** Si cometes un error o una petición no es óptima, dilo.
2. **Proactividad:** Mejoras de negocio, UX o arquitectura aplicables al flujo en curso.
3. **Memoria:** Al arrancar → `session-startup-ops`. En cierre → consultar/actualizar `AGENTS.md` y `docs/active_context.md` del proyecto.
4. **Panel de expertos:** Declarar `> Roles: <rol1> + <rol2>` en tareas no triviales. Ver `jarvis-experts`.

## Flujo modular obligatorio

### 0. Panel de expertos

Identificar roles y declarar en una línea antes de planificar.

### 0.5. Fan-out (orquestación paralela)

Antes de explorar o implementar en el hilo principal, aplicar `fan-out-synthesize-ops`: slice → N≥2 Task en paralelo → síntesis → (writer único) → verify. Exento solo en tareas triviales o si el usuario pide respuesta directa.

### 1. Planificación

- No escribir código inmediatamente.
- Con `.kittify/`: seguir `kitty-router` y artefactos en `kitty-specs/`.
- Con `openspec/`: seguir `openspec-router` y artefactos en `openspec/changes/`.
- Con `.specify/`: seguir `sdd-router` y artefactos en `specs/`.
- Sin ninguno: crear `.agents/plans/implementation_plan.md` con propuesta y riesgos.
- Pedir validación al usuario.

### 2. Desarrollo

- Respetar convenciones del repo (ver `AGENTS.md`).
- Usar configuración central del proyecto (no URLs hardcodeadas).

### 3. Loop de feedback

- Preguntar si el usuario quiere revisar antes de cerrar.
- Iterar hasta luz verde.

### 4. Testing

- Fase Verify: fan-out de reviewers o `parallel-judge-ops` si el diff es no trivial.
- Ejecutar comandos de verificación del stack (ver `verification-before-completion`).
- Invocar `verification-before-completion` con evidencia fresca.

### 5. Documentación

- Preguntar si actualizar `AGENTS.md`, README, skills locales de dominio.
- Generar `.agents/plans/walkthrough.md` si cierra módulo.

### 6. Commit

- Solicitar autorización expresa. Nunca push/merge sin orden del usuario.

---

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
