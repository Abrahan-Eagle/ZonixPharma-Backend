# AGENTS.md - Zonix Pharma Backend (Laravel API)

> Instrucciones para AI coding agents trabajando en el backend de Zonix Pharma.
> Para documentación detallada de lógica de negocio, ver `README.md`.
> Para reglas de mantenimiento y coherencia de skills, ver `MAINTENANCE_SKILLS.md`.

## Contexto de sesión

**Al iniciar o retomar trabajo:** leer [docs/active_context.md](docs/active_context.md) si existe.

---

## Brand y experiencia (fuente canónica)

**Nombre en UI:** Zonix Pharma (no variantes coloquiales). **Producto:** marketplace farmacéutico digital del ecosistema Zonix (vertical **Pharma**, no Eats).

**Identidad visual:** símbolo Z geométrico (zona superior marina + diagonal + base teal con nodo), wordmark en negrita + **PHARMA** en mayúsculas teal con tracking amplio. **Paleta y principios UX** (tech-pharma, legibilidad móvil, sin clichés médicos ruidosos, no mezclar claims/assets de Zonix Eats en pantallas Pharma): todo el detalle, tokens, do/don’t, grid de iconos y checklist de contraste en **[docs/BRAND_ZONIX_PHARMA.md](docs/BRAND_ZONIX_PHARMA.md)**.

`.cursorrules` remite aquí: no mantener un segundo párrafo de marca duplicado fuera de BRAND + esta sección.

---

## Spec-Driven Development (Spec Kit)

Toolkit oficial GitHub para features de **producto** (API + Flutter). **No** usar para `docs/Lanzamiento/` ni cifras inversor.

| Concepto | Ubicación |
| -------- | --------- |
| Constitution | [.specify/memory/constitution.md](.specify/memory/constitution.md) |
| Feature specs | [specs/](specs/) (hub Backend) |
| Skills SDD | `~/.cursor/skills/speckit-*` (`/speckit-specify`, `/speckit-plan`, …) vía `install.sh --all` |
| Skills dominio | `.agents/skills/zonix-*` (siempre en implement) |
| Guía router | [docs/zonix/SPEC_KIT_ZONIX.md](docs/zonix/SPEC_KIT_ZONIX.md) |
| Front espejo | `../ZonixPharma-Front` — specs en Backend |

**Flujo:** specify → clarify (opc.) → plan → tasks → analyze → implement (**solo con OK usuario**).

---

## Project Overview

| Métrica | Valor |
| ------------------------ | -------------------------------------------------- |
| **Producto** | Zonix Pharma — marketplace farmacéutico Venezuela (OTC + Rx) |
| **Framework** | Laravel 10.x / PHP 8.1+ |
| **Base de Datos** | MySQL |
| **Versión** | 1.0.0 |
| **Estado** | Migración Eats → Pharma (fork destructivo) en progreso |
| **Roles** | 7 (users, commerce, pharmacist, delivery, delivery_agent, delivery_company, admin) |
| **Última actualización** | 10 junio 2026 |

### Cambios recientes

- **11 jun 2026 — Curso UniMOOC Steve Blank → skills startup.**
  - Forense UniMOOC: destilado en skills `zonix-lean-canvas` / `zonix-launch-piloto` (informe HISTÓRICO eliminado ago 2026).
  - Nueva skill: `zonix-lean-canvas` (Canvas 9 bloques, bilateral, pivot).
  - Ampliadas: `zonix-launch-piloto`, `zonix-b2b-sales`, `zonix-financial-model`, `zonix-startup-context`, `zonix-fundraising-narrative` (M2), `zonix-lanzamiento-docs` (M5 CAC).
  - Repaso completo (cierre P2): ciclo viral M5, cuota/economía de canal M4/M6, organización Fase 0 M1, red flags inversor corporativo M7 (`zonix-investor-materials`).
  - Router: [docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md](docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md), `roles_matrix.json`.
- **10 jun 2026 — Remediación módulo commerce (auditoría 360° + multi-sede).**
  - Auditoría: [docs/audits/AUDIT_commerce_8fases_2026-06-10.md](docs/audits/AUDIT_commerce_8fases_2026-06-10.md), [docs/plantillas/PROMPT_AUDIT_360_ZONIX.md](docs/plantillas/PROMPT_AUDIT_360_ZONIX.md).
  - Backend: trait `ResolvesCommerce` + header `X-Commerce-Id`; throttle `60,1`; Pusher multi-sede; KPI dashboard alineado a cola Rx/pago/preparación; tests `CommerceMultiSedeTest`, `CommerceDashboardTest`, `EnsureCommerceApproved`, `CommerceProductRx`, `CommerceOrderValidatePayment`.
  - Verificación: `php artisan test --parallel` → **422+ passed**.
- **10 jun 2026 — Remediación módulo pharmacist (lote 2 — historial).**
  - `GET /api/pharmacist/prescriptions/history`; tests `PharmacistPrescriptionHistoryTest`.
  - Verificación: **431 passed**.
- **10 jun 2026 — Remediación módulo pharmacist (lote 1).**
  - Throttle `30,1` en approve/reject Rx; tests `PharmacistDashboardTest` (KPIs + licencia inválida).
- **10 jun 2026 — Remediación buyer orders (Rx post-checkout, lote 2).**
  - `OrderTrackingController`: timeline Rx, copy Pharma, clave `pharmacy` + alias `restaurant`, pasos dinámicos.
  - Tests: `ExpirePendingPrescriptionsCommandTest`, `OrderTest::test_legacy_order_tracking_includes_rx_state_and_pharmacy`.
- **10 jun 2026 — Remediación buyer orders (Rx post-checkout, lote 1).**
  - `Buyer/OrderController`: cancel usa `message` de state machine + 409 en transición inválida; throttle `30,1` en cancel/payment-proof/comprobante.
  - Tests: `OrderTest` cancel Rx + timeline Rx.
- **27 may 2026 — Spec Kit (SDD) integrado en Jarvis (producto, no Lanzamiento).**
  - [github/spec-kit](https://github.com/github/spec-kit) v0.8.15: `specify-cli`, integración `cursor-agent` en Backend (hub) y Front (espejo).
  - Hub: `specs/`, `.specify/memory/constitution.md`, overrides dual-repo en `.specify/templates/overrides/`.
  - Skills proceso: `~/.cursor/skills/speckit-*` + `.agents/skills/speckit-git-*` (complementan `.agents/skills/zonix-*`).
  - Piloto: [specs/001-block-rx-strict-checkout/](specs/001-block-rx-strict-checkout/) — artefactos listos; implement con OK usuario.
  - Guía: [docs/zonix/SPEC_KIT_ZONIX.md](docs/zonix/SPEC_KIT_ZONIX.md).
- **27 may 2026 — Skills startup Jarvis (founder-playbook / shawnpang destilados, sin repos externos).**
  - Nuevas secciones: `zonix-startup-context` (Market Type), `zonix-financial-model` (waiver 100m-offers), `zonix-launch-piloto` (beachhead/chasm), `zonix-fundraising-narrative` (Cialdini), `zonix-lanzamiento-docs` (anti-patrones + router BRIEF/PERFIL).
  - Guía: [docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md](docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md).
- **30 abr 2026 — Transformación Zonix Eats → Zonix Pharma (fork destructivo, MVP completo Rx).**
  - Branding: `Zonix Pharma`, `com.zonix.pharma`, `zonix://pharmacy/{id}`, canal FCM `zonix_pharma_fcm`, dominio `zonixpharma.com`.
  - Paleta Pharma fría (#1E2A5A, #0F4C5C, #56C7B8, #A8DCCB, #F5F7FA, #C7CFD9, #142033, #F2A65A) en `app_colors.dart` + tema light/dark Pharma con Plus Jakarta Sans.
  - Modelo de datos: `products` ampliado (principio activo, presentación, INHRR, ATC, requires_prescription, prescription_type, controlled_substance, cold_chain). `commerces` ampliado (pharmacist_in_charge, health_permit). `orders` ampliado (estado `pending_prescription_validation`, `prescription_id`, `cold_chain_required`).
  - Tablas nuevas: `medicine_lots`, `prescriptions`, `pharmacist_profiles`. Eliminadas: `product_extras`, `product_preferences`.
  - Rol nuevo: `pharmacist`. Eventos nuevos: `PrescriptionUploaded`, `PrescriptionValidated`, `PrescriptionRejected`. Servicio `PrescriptionService`. Controllers `Pharmacist/PrescriptionController`, `Pharmacist/DashboardController`, `Buyer/PrescriptionController`, `Buyer/PharmacyController` (shim `RestaurantController` deprecado).
  - Documentación: [docs/BRAND_ZONIX_PHARMA.md](docs/BRAND_ZONIX_PHARMA.md), [docs/PLAN_RX_VALIDATION.md](docs/PLAN_RX_VALIDATION.md), [docs/PLAN_REGULATORIO_PHARMA_VE.md](docs/PLAN_REGULATORIO_PHARMA_VE.md), [docs/audits/MIGRACION_EATS_PHARMA.md](docs/audits/MIGRACION_EATS_PHARMA.md).
  - Validación pendiente: `php artisan test`, `flutter test`, build APK debug, smoke OTC y Rx (bloque 7 y 8 del plan).

---

## Modelo de datos: Profile como entidad principal

- `Profile` es la entidad principal para datos de persona (comprador, comercio, delivery, **pharmacist**): teléfonos, documentos y direcciones pertenecen al perfil (`profile_id` en `phones`, `documents`, `addresses`).
- `Users` tiene relación 1:1 con `Profile`.
- El farmacéutico colegiado tiene además un `pharmacist_profiles` con sus datos colegiados (MPPS, licencia).

---

## Setup Commands

```bash
# Instalar
composer install

# Configurar entorno
cp .env.example .env
php artisan key:generate

# Base de datos (consolidada en migraciones create_* Pharma)
php artisan migrate:fresh --seed

# Servidor
php artisan serve

# Scheduler (TTL recetas, expiración pending_payment, etc.)
php artisan schedule:work

# Tests
php artisan test
```

---

## CI y quality gates

| Repo | Workflow / comando | Qué valida |
| ---- | ------------------- | ---------- |
| **Backend** | [`.github/workflows/ci.yml`](.github/workflows/ci.yml) en push/PR a `main`, `develop`, `dev` | Laravel Pint (`./vendor/bin/pint --test`) y `php artisan test --parallel` tras `composer install` y `php artisan key:generate`. |
| **Frontend** | [`.github/workflows/ci.yml`](../ZonixPharma-Front/.github/workflows/ci.yml) o local | `flutter pub get`, `flutter analyze --no-fatal-infos` (el job falla con error/warning; infos heredados se van cerrando), `flutter test`. |

**Umbral recomendado (PRs Pharma):** backend en verde según CI; Flutter: no introducir **warnings** nuevos; objetivo final **cero infos** en `lib/features/screens/**`. Nuevas pantallas: sin `Color(0x…)` ni `Colors.*` fuera de `AppColors` / `Theme` (ver `.cursorrules`).

---

## Roles y rutas (Pharma)

| Rol | Prefijo principal | Notas |
| --- | ----------------- | ----- |
| `users` | `/api/buyer/*` | Carrito, pedidos, recetas (`/api/buyer/prescriptions`), farmacias (`/api/buyer/pharmacies`, alias `/restaurants`). |
| `commerce` | `/api/commerce/*` | Inventario, lotes, órdenes, comprobantes. |
| `pharmacist` | `/api/pharmacist/*` | Validación de recetas, dashboard. |
| `delivery_agent` / `delivery` | `/api/delivery/*` | Asignaciones, tracking, ganancias. |
| `delivery_company` | `/api/delivery-company/*` | Agentes, asignación, métricas. |
| `admin` | `/api/admin/*` | Dashboard, usuarios, métricas, audit log. |

---

## Reglas farmacéuticas (Pharma)

Configurables en `config/zonix.php` (sección `pharma`):

- `block_rx_without_prescription` (default **false**, opt-in `true`): en modo estricto el checkout exige `prescription_id` aprobada; en default el pedido entra en `pending_prescription_validation` sin receta previa.
- `prescription_validation_ttl_minutes` (default 60): TTL de receta pendiente; al vencer cancela el pedido.
- `disallow_promotions_on_rx` (default true): no aplicar descuentos a líneas Rx.
- `require_cold_chain_handling` (default true): `cold_chain = true` restringe modos de delivery.

---

## Panel de Expertos JARVIS (siempre activo)

JARVIS opera como agencia de desarrollo completa. Declarar roles en una línea: `> Roles: backend (Laravel) + AppSec`. Roster global: skill `jarvis-experts`. Routing dominio Pharma/regulatorio: `zonix-jarvis-subagents-map` + `zonix-lanzamiento-roles` (pack Lanzamiento).

---

## Skills — Capas y sync global

**Precedencia por fase:** [`jarvis-core`](.agents/skills/jarvis-core/SKILL.md) → overlay Zonix.

| Capa | Patrón | Ejemplos |
|------|--------|----------|
| 0 Global-sync | `.global-sync-manifest` | `jarvis-core`, `brainstorming-ops` (library + `OVERLAY.md`) |
| 1 Orquestación | `jarvis-*` | `jarvis-core`, `jarvis-experts` |
| 2 Proceso | `*-ops` | `task-pipeline-ops`, `verification-before-completion` |
| 3 Dominio Zonix | `zonix-*` | `zonix-api-patterns`, `zonix-prescriptions` — **solo locales** |
| 4 Genéricas | manifest passthrough | `laravel-specialist`, `security` |
| 5 Solo local | no en manifest | `documentar-avances`, `ui-ux-pro-max` (ZONIX.md), `speckit-git-*` |

Tras `git pull` en jarvis-skills-library: `./scripts/sync-global-skills-from-library.sh` + `./scripts/check-global-skills-sync.sh`. Ver `MAINTENANCE_SKILLS.md`.

---

## Available Skills

Todos los skills y sus directivas se auto-generan usando `python3 .agents/skills/sync.sh`.

<!-- SKILLS-START -->
| Skill | Descripción | Ruta |
|-------|-------------|------|
| `agent-loop-engineering` | Diseño de loops de agente concisos, reducidos y controlados: anatomía estímulo→iteración→stop, cuándo loop vs prompt, tipos de loop y mapeo a skills JARVIS. | [.agents/skills/agent-loop-engineering/SKILL.md](.agents/skills/agent-loop-engineering/SKILL.md) |
| `api-design-principles` | Master REST and GraphQL API design principles to build intuitive, scalable, and maintainable APIs that delight developers. Use when designing new APIs, reviewing API specifications, or establishing API design standards. | [.agents/skills/api-design-principles/SKILL.md](.agents/skills/api-design-principles/SKILL.md) |
| `architecture-patterns` | Implement proven backend architecture patterns including Clean Architecture, Hexagonal Architecture, and Domain-Driven Design. Use when architecting complex backend systems or refactoring existing applications for better maintainability. | [.agents/skills/architecture-patterns/SKILL.md](.agents/skills/architecture-patterns/SKILL.md) |
| `backlog-triage-ops` | Triage de backlog GitHub: auditar issues/PRs abiertos, clasificar disposición (merge, request-changes, close, needs-design), priorizar y generar reporte accionable. | [.agents/skills/backlog-triage-ops/SKILL.md](.agents/skills/backlog-triage-ops/SKILL.md) |
| `brainstorming-ops` | OBLIGATORIO antes de tareas complejas en proyecto activo: pantallas, providers, navegación, flujos KYC/onboarding. Propone alternativas y obtiene aprobación antes de codificar. | [.agents/skills/brainstorming-ops/SKILL.md](.agents/skills/brainstorming-ops/SKILL.md) |
| `branch-pr-ops` | Workflow branch + PR: naming conventional, checklist pre-PR, issue linking, presupuesto review, gh integration. Adaptable al AGENTS.md del repo. | [.agents/skills/branch-pr-ops/SKILL.md](.agents/skills/branch-pr-ops/SKILL.md) |
| `chained-pr-ops` | Divide PRs grandes en cadenas reviewables (stacked o feature-branch chain): regla 400 líneas, diagrama de dependencias, integración gh. | [.agents/skills/chained-pr-ops/SKILL.md](.agents/skills/chained-pr-ops/SKILL.md) |
| `clean-code-principles` | SOLID principles, design patterns, DRY, KISS, and clean code fundamentals. Use when reviewing architecture, checking code quality, refactoring, or discussing design decisions. Triggers on "review architecture", "check code quality", "SOLID principles", "design patterns", or "clean code". | [.agents/skills/clean-code-principles/SKILL.md](.agents/skills/clean-code-principles/SKILL.md) |
| `code-review-excellence` | DEPRECATED — usar code-review-playbook. Stub de compatibilidad para manifests legacy. | [.agents/skills/code-review-excellence/SKILL.md](.agents/skills/code-review-excellence/SKILL.md) |
| `code-review-playbook` | Use this skill when conducting or improving code reviews. Provides structured review processes, conventional comments patterns, language-specific checklists, and feedback templates. | [.agents/skills/code-review-playbook/SKILL.md](.agents/skills/code-review-playbook/SKILL.md) |
| `cognitive-doc-design-ops` | Diseñar docs con baja carga cognitiva: lead with answer, progressive disclosure, checklists para review. | [.agents/skills/cognitive-doc-design-ops/SKILL.md](.agents/skills/cognitive-doc-design-ops/SKILL.md) |
| `comment-writer-ops` | Redactar comentarios de colaboración cálidos y directos: PR, issues, reviews, Slack. | [.agents/skills/comment-writer-ops/SKILL.md](.agents/skills/comment-writer-ops/SKILL.md) |
| `context-packs-ops` | Modos de sesión ligeros research / produce / review (concepto ECC contexts/, sin inyección runtime). Define qué skills primar y qué evitar por modo. | [.agents/skills/context-packs-ops/SKILL.md](.agents/skills/context-packs-ops/SKILL.md) |
| `context-updater` | Actualizar el contexto de sesión para que la IA "recuerde" entre sesiones. Resumir cambios relevantes en docs/active_context.md al cerrar o finalizar una sesión de trabajo significativa. | [.agents/skills/context-updater/SKILL.md](.agents/skills/context-updater/SKILL.md) |
| `deep-interview-ops` | Entrevista socrática antes de tareas ambiguas en proyecto activo. Gate claridad mínima 3.5/5. | [.agents/skills/deep-interview-ops/SKILL.md](.agents/skills/deep-interview-ops/SKILL.md) |
| `docs-alignment-ops` | Alinear documentación con código: docs describen comportamiento actual, mismo PR que el cambio, ejemplos verificables. | [.agents/skills/docs-alignment-ops/SKILL.md](.agents/skills/docs-alignment-ops/SKILL.md) |
| `documentar-avances` | Al finalizar una tarea relevante, proponer el párrafo para "Cambios recientes" en AGENTS.md y/o README. El usuario aprueba antes de que se escriba en el repo. | [.agents/skills/documentar-avances/SKILL.md](.agents/skills/documentar-avances/SKILL.md) |
| `doubt-driven-development` | Revisión adversarial in-flight de decisiones no triviales: CLAIM → EXTRACT → DOUBT → RECONCILE → STOP. | [.agents/skills/doubt-driven-development/SKILL.md](.agents/skills/doubt-driven-development/SKILL.md) |
| `e2e-testing-patterns` | Master end-to-end testing with Playwright and Cypress to build reliable test suites that catch bugs, improve confidence, and enable fast deployment. Use when implementing E2E tests, debugging flaky tests, or establishing testing standards. | [.agents/skills/e2e-testing-patterns/SKILL.md](.agents/skills/e2e-testing-patterns/SKILL.md) |
| `engram-memory-protocol` | Disciplina de memoria persistente con Engram MCP: mem_save, mem_search, mem_context, cierre de sesión y recuperación post-compactación. | [.agents/skills/engram-memory-protocol/SKILL.md](.agents/skills/engram-memory-protocol/SKILL.md) |
| `engram-router` | Orquesta memoria persistente Engram (MCP) vs context-updater/handoff/active_context JARVIS. | [.agents/skills/engram-router/SKILL.md](.agents/skills/engram-router/SKILL.md) |
| `error-handling-patterns` | Master error handling patterns across languages including exceptions, Result types, error propagation, and graceful degradation to build resilient applications. Use when implementing error handling, designing APIs, or improving application reliability. | [.agents/skills/error-handling-patterns/SKILL.md](.agents/skills/error-handling-patterns/SKILL.md) |
| `executing-plans` | Ejecutar plan Flutter paso a paso. | [.agents/skills/executing-plans/SKILL.md](.agents/skills/executing-plans/SKILL.md) |
| `fan-out-synthesize-ops` | Orquestación por defecto JARVIS: Map-Reduce agentico / Fan-out-and-synthesize — N subagentes en paralelo recaudan contexto → sesión principal (orquestador) sintetiza → writer único aplica → verify. | [.agents/skills/fan-out-synthesize-ops/SKILL.md](.agents/skills/fan-out-synthesize-ops/SKILL.md) |
| `finishing-a-development-branch` | Cerrar feature Flutter: analyze + test, opciones merge/PR. | [.agents/skills/finishing-a-development-branch/SKILL.md](.agents/skills/finishing-a-development-branch/SKILL.md) |
| `frontend-design` | Create distinctive, production-grade frontend interfaces with high design quality. Use this skill when the user asks to build web components, pages, artifacts, posters, or applications (examples include websites, landing pages, dashboards, React components, HTML/CSS layouts, or when styling/beautifying any web UI). Generates creative, polished code and UI design that avoids generic AI aesthetics. | [.agents/skills/frontend-design/SKILL.md](.agents/skills/frontend-design/SKILL.md) |
| `git-commit` | Execute git commit with conventional commit message analysis, intelligent staging, and message generation. Use when user asks to commit changes, create a git commit, or mentions "/commit". Supports: (1) Auto-detecting type and scope from changes, (2) Generating conventional commit messages from diff, (3) Interactive commit with optional type/scope/description overrides, (4) Intelligent file staging for logical grouping | [.agents/skills/git-commit/SKILL.md](.agents/skills/git-commit/SKILL.md) |
| `git-guardrails-ops` | Protección git: bloquea push a main, advierte en dev, exige confirmación antes de comandos destructivos. | [.agents/skills/git-guardrails-ops/SKILL.md](.agents/skills/git-guardrails-ops/SKILL.md) |
| `github-actions-templates` | Create production-ready GitHub Actions workflows for automated testing, building, and deploying applications. Use when setting up CI/CD with GitHub Actions, automating development workflows, or creating reusable workflow templates. | [.agents/skills/github-actions-templates/SKILL.md](.agents/skills/github-actions-templates/SKILL.md) |
| `github-code-review` | DEPRECATED — usar code-review-playbook. Stub de compatibilidad para manifests legacy. | [.agents/skills/github-code-review/SKILL.md](.agents/skills/github-code-review/SKILL.md) |
| `handoff` | Compactar la sesion actual en un documento de traspaso para continuar en otro agente o chat. Complementa session-learner-ops (cierre de modulo) y active_context.md. | [.agents/skills/handoff/SKILL.md](.agents/skills/handoff/SKILL.md) |
| `human-in-the-loop-ops` | Gobernanza humana en bucles agénticos: HITL/HOTL/automation-bounded, umbrales de confianza, condiciones de terminación y escalamiento. | [.agents/skills/human-in-the-loop-ops/SKILL.md](.agents/skills/human-in-the-loop-ops/SKILL.md) |
| **`jarvis-core`** | **Protocolo base del sistema JARVIS para cualquier proyecto. Define honestidad, foco de negocio y flujo de trabajo modular.** | [.agents/skills/jarvis-core/SKILL.md](.agents/skills/jarvis-core/SKILL.md) |
| `jarvis-experts` | Panel de Expertos JARVIS (agencia de desarrollo virtual). Define roster de roles, criterios de activación, combinaciones recomendadas y plantilla de declaración. | [.agents/skills/jarvis-experts/SKILL.md](.agents/skills/jarvis-experts/SKILL.md) |
| `laravel-specialist` | Use when building Laravel 10+ applications requiring Eloquent ORM, API resources, or queue systems. Invoke for Laravel models, Livewire components, Sanctum authentication, Horizon queues. | [.agents/skills/laravel-specialist/SKILL.md](.agents/skills/laravel-specialist/SKILL.md) |
| `legal-alternativo-content` | Playbook dual: (A–C) higiene legal corporativa multi-empresa / multi-jurisdicción (Zonix Pharma y otras startups tech) con patrones internacionales + packs MX/VE; (D) contenido Legal Alternativo / Hugette (TikTok/IG, claims MX). Capas A–C para docs/contratos/PI de empresa (sí Zonix higiene); capa D solo guiones del canal (no copiar CTA/guiones Hugette a pack inversor ni UI Pharma). Salud/Rx VE → zonix-regulatory-ve. | [.agents/skills/legal-alternativo-content/SKILL.md](.agents/skills/legal-alternativo-content/SKILL.md) |
| `mysql-best-practices` | MySQL development best practices for schema design, query optimization, and database administration | [.agents/skills/mysql-best-practices/SKILL.md](.agents/skills/mysql-best-practices/SKILL.md) |
| `notebooklm-router` | Orquesta consulta RAG a Google NotebookLM (corpus grande/duradero con citas) vía MCP `notebooklm-mcp` vs subida directa al contexto y vs Engram (memoria cross-session). | [.agents/skills/notebooklm-router/SKILL.md](.agents/skills/notebooklm-router/SKILL.md) |
| `parallel-judge-ops` | Patrón "día del juicio": 2+ jueces adversariales en paralelo e independientes → orquestador valida real vs ruido → subagente aplica fixes → itera hasta sin hallazgos o max iterations. | [.agents/skills/parallel-judge-ops/SKILL.md](.agents/skills/parallel-judge-ops/SKILL.md) |
| `playwright-skill` | Complete browser automation with Playwright. Auto-detects dev servers, writes clean test scripts to /tmp. Test pages, fill forms, take screenshots, check responsive design, validate UX, test login flows, check links, automate any browser task. Use when user wants to test websites, automate browser interactions, validate web functionality, or perform any browser-based testing. | [.agents/skills/playwright-skill/SKILL.md](.agents/skills/playwright-skill/SKILL.md) |
| `qa-testing-playwright` | E2E web testing with Playwright. Use when writing tests, debugging flakes, or setting up CI with selectors, sharding, and network mocking. | [.agents/skills/qa-testing-playwright/SKILL.md](.agents/skills/qa-testing-playwright/SKILL.md) |
| `receiving-code-review` | Recibir feedback de review con verificación. Delega estándares a code-review-playbook. | [.agents/skills/receiving-code-review/SKILL.md](.agents/skills/receiving-code-review/SKILL.md) |
| `requesting-code-review` | Pedir code review antes de merge. Delega checklist a code-review-playbook. | [.agents/skills/requesting-code-review/SKILL.md](.agents/skills/requesting-code-review/SKILL.md) |
| `security` | OWASP security patterns, secrets management, security testing | [.agents/skills/security/SKILL.md](.agents/skills/security/SKILL.md) |
| `security-requirement-extraction` | Derive security requirements from threat models and business context. Use when translating threats into actionable requirements, creating security user stories, or building security test cases. | [.agents/skills/security-requirement-extraction/SKILL.md](.agents/skills/security-requirement-extraction/SKILL.md) |
| `session-learner-ops` | Tras cerrar módulo UI: patrones en docs/active_context.md y walkthrough. | [.agents/skills/session-learner-ops/SKILL.md](.agents/skills/session-learner-ops/SKILL.md) |
| `session-startup-ops` | Protocolo de arranque de sesión (concepto ECC session-start, sin hooks). Checklist: active_context, Engram si activo, Roles/Skills, plan/handoff pendiente. | [.agents/skills/session-startup-ops/SKILL.md](.agents/skills/session-startup-ops/SKILL.md) |
| `skill-creator` | Guide for creating effective skills. This skill should be used when users want to create a new skill (or update an existing skill) that extends Claude's capabilities with specialized knowledge, workflows, or tool integrations. | [.agents/skills/skill-creator/SKILL.md](.agents/skills/skill-creator/SKILL.md) |
| `software-architecture` | Guide for quality focused software architecture. This skill should be used when users want to write code, design architecture, analyze code, in any case that relates to software development. | [.agents/skills/software-architecture/SKILL.md](.agents/skills/software-architecture/SKILL.md) |
| `speckit-git-commit` | Auto-commit changes after a Spec Kit command completes | [.agents/skills/speckit-git-commit/SKILL.md](.agents/skills/speckit-git-commit/SKILL.md) |
| `speckit-git-feature` | Create a feature branch with sequential or timestamp numbering | [.agents/skills/speckit-git-feature/SKILL.md](.agents/skills/speckit-git-feature/SKILL.md) |
| `speckit-git-initialize` | Initialize a Git repository with an initial commit | [.agents/skills/speckit-git-initialize/SKILL.md](.agents/skills/speckit-git-initialize/SKILL.md) |
| `speckit-git-remote` | Detect Git remote URL for GitHub integration | [.agents/skills/speckit-git-remote/SKILL.md](.agents/skills/speckit-git-remote/SKILL.md) |
| `speckit-git-validate` | Validate current branch follows feature branch naming conventions | [.agents/skills/speckit-git-validate/SKILL.md](.agents/skills/speckit-git-validate/SKILL.md) |
| `sql-optimization-patterns` | Master SQL query optimization, indexing strategies, and EXPLAIN analysis to dramatically improve database performance and eliminate slow queries. Use when debugging slow queries, designing database schemas, or optimizing application performance. | [.agents/skills/sql-optimization-patterns/SKILL.md](.agents/skills/sql-optimization-patterns/SKILL.md) |
| `strategic-compact-ops` | Compactación estratégica (concepto ECC strategic-compact, sin hooks). Sugiere compactar en hitos lógicos; preserva decisiones, verificación y TODOs vía handoff + Engram. | [.agents/skills/strategic-compact-ops/SKILL.md](.agents/skills/strategic-compact-ops/SKILL.md) |
| `stripe-integration` | Implement Stripe payment processing for robust, PCI-compliant payment flows including checkout, subscriptions, and webhooks. Use when integrating Stripe payments, building subscription systems, or ... | [.agents/skills/stripe-integration/SKILL.md](.agents/skills/stripe-integration/SKILL.md) |
| `structured-commits-ops` | Commits con trailers de decisión en proyecto activo. Complementa git-commit. | [.agents/skills/structured-commits-ops/SKILL.md](.agents/skills/structured-commits-ops/SKILL.md) |
| `systematic-debugging` | Use when encountering any bug, test failure, or unexpected behavior, before proposing fixes | [.agents/skills/systematic-debugging/SKILL.md](.agents/skills/systematic-debugging/SKILL.md) |
| `task-pipeline-ops` | Pipeline multi-paso proyecto activo: Plan → Spec → Exec → Verify → Fix (máx. 3). | [.agents/skills/task-pipeline-ops/SKILL.md](.agents/skills/task-pipeline-ops/SKILL.md) |
| `test-driven-development` | Use when implementing any feature or bugfix, before writing implementation code | [.agents/skills/test-driven-development/SKILL.md](.agents/skills/test-driven-development/SKILL.md) |
| `using-git-worktrees` | Worktree aislado para features Flutter proyecto. Base dev. | [.agents/skills/using-git-worktrees/SKILL.md](.agents/skills/using-git-worktrees/SKILL.md) |
| `verification-before-completion` | OBLIGATORIO antes de declarar cualquier tarea completada en cualquier proyecto. Ejecuta verificación fresca del stack y solo entonces afirma éxito. | [.agents/skills/verification-before-completion/SKILL.md](.agents/skills/verification-before-completion/SKILL.md) |
| `webapp-testing` | Toolkit for interacting with and testing local web applications using Playwright. Supports verifying frontend functionality, debugging UI behavior, capturing browser screenshots, and viewing browser logs. | [.agents/skills/webapp-testing/SKILL.md](.agents/skills/webapp-testing/SKILL.md) |
| `work-unit-commits-ops` | Commits por unidad de trabajo reviewable: un propósito, tests/docs con el código, historia clara. Puente a chained PRs. | [.agents/skills/work-unit-commits-ops/SKILL.md](.agents/skills/work-unit-commits-ops/SKILL.md) |
| `writing-plans` | Plan bite-sized Flutter antes de codificar. .agents/plans/implementation_plan.md | [.agents/skills/writing-plans/SKILL.md](.agents/skills/writing-plans/SKILL.md) |
| **`zonix-ai-landing-pipeline`** | **Orquesta el pipeline NEONFALL adaptado a Zonix Pharma: Claude (research + prompts), Nano Banana 2 (imágenes), Veo 3 o Kling (video loop hero), Claude Design (borrador hero), Claude Code (resto del sitio). Integración final en Blade + zonix.css. Usar cuando el usuario pida landing con IA, hero con video loop, Claude Design, generación de assets para welcome.blade.php o marketing web pharma.** | [.agents/skills/zonix-ai-landing-pipeline/SKILL.md](.agents/skills/zonix-ai-landing-pipeline/SKILL.md) |
| **`zonix-analytics`** | **Analytics y reportes Zonix Pharma. KPIs farmacia/admin, órdenes Rx, delivery, ARPF/GMV piloto y buenas prácticas SQL.** | [.agents/skills/zonix-analytics/SKILL.md](.agents/skills/zonix-analytics/SKILL.md) |
| **`zonix-api-patterns`** | **Patrones de API REST de Zonix Pharma. Response format, paginación, roles (buyer/commerce/pharmacist/delivery/admin), middleware, errores y convenciones marketplace farmacéutico VE.** | [.agents/skills/zonix-api-patterns/SKILL.md](.agents/skills/zonix-api-patterns/SKILL.md) |
| **`zonix-b2b-sales`** | **Playbook Sales B2B Zonix Pharma (×4). Prospección farmacias Valencia, contrato marco, onboarding panel. Invocar zonix-launch-piloto para hitos T+60–Day-D.** | [.agents/skills/zonix-b2b-sales/SKILL.md](.agents/skills/zonix-b2b-sales/SKILL.md) |
| **`zonix-brand-ops`** | **Branding operativo Zonix Pharma — naming, tono pharma VE, regla 60-30-10, anti-patterns Eats/AI-slop. Usar en copy landing, ASO, emails, dashboards y revisión visual pre-PR.** | [.agents/skills/zonix-brand-ops/SKILL.md](.agents/skills/zonix-brand-ops/SKILL.md) |
| **`zonix-delivery-system`** | **Sistema de delivery Zonix Pharma. Asignación, Haversine, OSRM, zonas, tracking y cadena de frío en última milla (partners, sin flota propia).** | [.agents/skills/zonix-delivery-system/SKILL.md](.agents/skills/zonix-delivery-system/SKILL.md) |
| **`zonix-design-enforcer`** | **Enforcer calidad visual — canon Flutter en ZonixPharma-Front. Heurísticas 8pt/WCAG compartidas con web.** | [.agents/skills/zonix-design-enforcer/SKILL.md](.agents/skills/zonix-design-enforcer/SKILL.md) |
| **`zonix-disputes-and-refunds`** | **Disputas y reembolsos manuales Zonix Pharma. Penalizaciones por cancelación, resolución CS y contexto pedidos Rx/OTC.** | [.agents/skills/zonix-disputes-and-refunds/SKILL.md](.agents/skills/zonix-disputes-and-refunds/SKILL.md) |
| **`zonix-empresa-ve`** | **Constitución y gobierno corporativo Zonix Pharma en Venezuela (C.A., RIF, banco, SAFE, laboral). Checklist T+0–T+30. Invocar zonix-startup-context primero. No sustituye abogado ni contador.** | [.agents/skills/zonix-empresa-ve/SKILL.md](.agents/skills/zonix-empresa-ve/SKILL.md) |
| **`zonix-financial-model`** | **Modelo financiero Zonix Pharma (marketplace farmacia VE). Coherencia PROYECCION, UNIT_ECONOMICS, PRESUPUESTO; escenarios Lean/Base/Growth; Fase 0 T+90. No sustituye contador SENIAT.** | [.agents/skills/zonix-financial-model/SKILL.md](.agents/skills/zonix-financial-model/SKILL.md) |
| **`zonix-founder-ops-index`** | **Índice curado CEO/CTO/TPM para founder Zonix Pharma. Enlaces a kuchin awesome-ceo/cto/tpm. Cifras solo desde zonix-startup-context y pack Lanzamiento.** | [.agents/skills/zonix-founder-ops-index/SKILL.md](.agents/skills/zonix-founder-ops-index/SKILL.md) |
| **`zonix-fundraising-narrative`** | **Narrativa fundraising Zonix Pharma — pitch bullets, email/WhatsApp inversor, Q&A SAFE pre-seed VE. Basado en MENSAJE_ENVIO y CONTEXTO_PITCH. Invocar zonix-startup-context primero.** | [.agents/skills/zonix-fundraising-narrative/SKILL.md](.agents/skills/zonix-fundraising-narrative/SKILL.md) |
| **`zonix-inversionistas-crm`** | **CRM interno de candidatos a capital Zonix Pharma — forense URL, ficha/notas/resumen CEO+PDF, rúbrica T/S/E/V/C/R, ranking. No es data room ni pitch. No contactar ni commit sin OK.** | [.agents/skills/zonix-inversionistas-crm/SKILL.md](.agents/skills/zonix-inversionistas-crm/SKILL.md) |
| **`zonix-investor-materials`** | **Materiales inversor Zonix Pharma — data room ligero, checklist due diligence, gaps pack Lanzamiento. Alineado a docs/Lanzamiento y CHECKLIST_PRE_INVERSOR. No sustituye abogado ni contador.** | [.agents/skills/zonix-investor-materials/SKILL.md](.agents/skills/zonix-investor-materials/SKILL.md) |
| **`zonix-jarvis-subagents-map`** | **Mapeo tareas Zonix Pharma → subagents externos (lente VoltAgent) → skills zonix-* obligatorias. No instalar subagents de terceros en el repo.** | [.agents/skills/zonix-jarvis-subagents-map/SKILL.md](.agents/skills/zonix-jarvis-subagents-map/SKILL.md) |
| **`zonix-lanzamiento-docs`** | **Mejorar y auditar documentos en docs/Lanzamiento con marcos founder-playbook/shawnpang adaptados a Zonix Pharma VE. Router por archivo; cifras solo desde pack. Invocar zonix-startup-context primero.** | [.agents/skills/zonix-lanzamiento-docs/SKILL.md](.agents/skills/zonix-lanzamiento-docs/SKILL.md) |
| **`zonix-lanzamiento-roles`** | **Panel de roles y competencias del pack Lanzamiento Zonix Pharma. Mapea rol humano → skills → Docs/Empresa/Sistema → skills agente. Usar al redactar pack inversor, constitución VE o priorizar lentes JARVIS.** | [.agents/skills/zonix-lanzamiento-roles/SKILL.md](.agents/skills/zonix-lanzamiento-roles/SKILL.md) |
| **`zonix-launch-piloto`** | **Plan de acción y ejecución del piloto Zonix Pharma. Calendario T+0 (wire) → Day-D (T+90) → M12 post-Day-D. KPIs farmacias, roles Co-CEO/Sales/CS. Invocar zonix-startup-context si hay fechas o caja.** | [.agents/skills/zonix-launch-piloto/SKILL.md](.agents/skills/zonix-launch-piloto/SKILL.md) |
| **`zonix-lean-canvas`** | **Lean Canvas operativo Zonix Pharma (Steve Blank UniMOOC). Rellena y valida los 9 bloques para piloto Valencia B2B2C. Use when canvas, modelo de negocio, hipótesis por bloque, socios clave o mercado bilateral. Invocar zonix-startup-context primero; cifras solo del pack.** | [.agents/skills/zonix-lean-canvas/SKILL.md](.agents/skills/zonix-lean-canvas/SKILL.md) |
| **`zonix-legal-contracts-ve`** | **Revisión checklist de contratos VE (marco farmacia B2B, SAFE, laboral). Salida [PENDIENTE abogado]. Invocar zonix-empresa-ve y zonix-regulatory-ve primero.** | [.agents/skills/zonix-legal-contracts-ve/SKILL.md](.agents/skills/zonix-legal-contracts-ve/SKILL.md) |
| **`zonix-medicine-catalog`** | **Catálogo de medicamentos Zonix Pharma. Atributos farmacéuticos del Product, lotes (medicine_lots) FIFO, registro INHRR, ATC, regulación, cadena de frío.** | [.agents/skills/zonix-medicine-catalog/SKILL.md](.agents/skills/zonix-medicine-catalog/SKILL.md) |
| **`zonix-order-lifecycle`** | **Ciclo de vida de órdenes Zonix Pharma. Estados (incl. pending_prescription_validation), transiciones, cancelación, penalidades y eventos broadcast.** | [.agents/skills/zonix-order-lifecycle/SKILL.md](.agents/skills/zonix-order-lifecycle/SKILL.md) |
| **`zonix-payments`** | **Pagos manuales VE en Zonix Pharma (pago móvil, transferencia, Zelle, Binance Pay). Zonix no es PSP; ver PLAN_METODOS_PAGO y zonix-order-lifecycle.** | [.agents/skills/zonix-payments/SKILL.md](.agents/skills/zonix-payments/SKILL.md) |
| **`zonix-prescriptions`** | **Sistema de receta médica (Rx) en Zonix Pharma. Modelo Prescription, validación por farmacéutico colegiado, TTL, controlados, eventos broadcast.** | [.agents/skills/zonix-prescriptions/SKILL.md](.agents/skills/zonix-prescriptions/SKILL.md) |
| **`zonix-realtime-events`** | **Eventos en tiempo real Zonix Pharma. Pusher, FCM (canal zonix_pharma_fcm), broadcasting Rx y órdenes, canales y payloads.** | [.agents/skills/zonix-realtime-events/SKILL.md](.agents/skills/zonix-realtime-events/SKILL.md) |
| **`zonix-regulatory-ve`** | **Marco regulatorio Venezuela Zonix Pharma — MPPS, INHRR, Rx, farmacovigilancia, copy salud. Lente para docs Lanzamiento y producto. No dictamen legal; citar PLAN_REGULATORIO o [PENDIENTE].** | [.agents/skills/zonix-regulatory-ve/SKILL.md](.agents/skills/zonix-regulatory-ve/SKILL.md) |
| **`zonix-startup-context`** | **Contexto canónico Zonix Pharma (pre-seed VE). Leer ANTES de finanzas, pitch o auditoría pack. Ancla cifras Lean/Base/Growth y rutas docs/Lanzamiento. No regenerar números sin citar fuente.** | [.agents/skills/zonix-startup-context/SKILL.md](.agents/skills/zonix-startup-context/SKILL.md) |
| **`zonix-web-design`** | **Sistema de diseño web Zonix Pharma (Blade + zonix.css). Landing welcome, navbar, tokens CSS, WCAG, anti-AI-slop alineado a BRAND. Precede frontend-design genérico.** | [.agents/skills/zonix-web-design/SKILL.md](.agents/skills/zonix-web-design/SKILL.md) |
| `zoom-out` | Explicar código o un cambio en el contexto del sistema completo del proyecto activo (módulos, capas, flujos). Uso bajo demanda. | [.agents/skills/zoom-out/SKILL.md](.agents/skills/zoom-out/SKILL.md) |
<!-- SKILLS-END -->

---

## Auto-invoke Skills

Aplicar precedencia de [`jarvis-core`](.agents/skills/jarvis-core/SKILL.md) cuando varias skills coincidan.

<!-- AUTO-INVOKE-START -->
| Acción | Skill |
|--------|-------|
| Abrir PR con gh | `branch-pr-ops` |
| Actualizar docs tras cambio de código | `docs-alignment-ops` |
| Address review feedback | `receiving-code-review` |
| Agent loop engineering / no prompts haz loops | `agent-loop-engineering` |
| Alta stakes verificar antes de commit | `doubt-driven-development` |
| Auditar finanzas del pack (PROYECCION, UNIT, PRESUPUESTO) | `zonix-financial-model` |
| Auditar finanzas del pack (PROYECCION, UNIT, PRESUPUESTO) | `zonix-startup-context` |
| Auditar open issues como maintainer | `backlog-triage-ops` |
| Auditoría módulo | `fan-out-synthesize-ops` |
| Buscar contexto previo mem_search mem_context | `engram-memory-protocol` |
| Calcular distancias/zonas | `zonix-delivery-system` |
| Calendario piloto / hitos T+30/60/90 / Day-D | `zonix-launch-piloto` |
| Calendario piloto / hitos T+30/60/90 / Day-D | `zonix-startup-context` |
| Cambio API CLI setup que afecta documentación | `docs-alignment-ops` |
| Catálogo medicamentos / lotes | `zonix-medicine-catalog` |
| Cerrar sesión | `context-updater` |
| Cerrar sesión con cambios relevantes | `documentar-avances` |
| Cierre sesión con mem_session_summary | `engram-memory-protocol` |
| Clasificar PRs merge request-changes close | `backlog-triage-ops` |
| Code review | `code-review-playbook` |
| Code review GitHub | `github-code-review` |
| Code review antes de merge | `requesting-code-review` |
| Code review excellence | `code-review-excellence` |
| Comando git destructivo | `git-guardrails-ops` |
| Compactar contexto | `strategic-compact-ops` |
| Compactar o traspasar sesion | `handoff` |
| Compactar o traspasar sesion | `strategic-compact-ops` |
| Condiciones de terminación bucle autónomo | `human-in-the-loop-ops` |
| Configurar NotebookLM MCP en Cursor | `notebooklm-router` |
| Configurar engram en Cursor | `engram-router` |
| Constituir empresa / SAFE / laboral VE | `zonix-empresa-ve` |
| Constituir empresa / SAFE / laboral VE | `zonix-startup-context` |
| Consultar NotebookLM / notebook con citas | `notebooklm-router` |
| Contratos / PI / T&C / privacidad corporativo (Zonix u otra empresa) | `legal-alternativo-content` |
| Copy marca / ASO / revisión anti-Eats | `zonix-brand-ops` |
| Copy regulatorio / Rx en documentos | `zonix-regulatory-ve` |
| Corpus grande de documentos para RAG | `notebooklm-router` |
| Crear commit | `git-commit` |
| Crear commit | `structured-commits-ops` |
| Crear commit | `verification-before-completion` |
| Crear commit | `work-unit-commits-ops` |
| Crear o preparar pull request | `branch-pr-ops` |
| Crear/modificar controladores o rutas | `zonix-api-patterns` |
| Cualquier tarea no trivial | `fan-out-synthesize-ops` |
| Cualquier tarea no trivial | `jarvis-experts` |
| Dashboards y métricas admin/commerce | `zonix-analytics` |
| Decidir loop vs prompt simple | `agent-loop-engineering` |
| Decisión cross-rol | `jarvis-experts` |
| Decisión no trivial seguridad producción | `doubt-driven-development` |
| Definir alcance de un módulo | `jarvis-experts` |
| Diseñar loop de agente | `agent-loop-engineering` |
| Disputas y reembolsos | `zonix-disputes-and-refunds` |
| Dividir diff grande en slices reviewables | `chained-pr-ops` |
| Dividir implementación en commits reviewables | `work-unit-commits-ops` |
| Doc largo, denso o difícil de escanear | `cognitive-doc-design-ops` |
| Día del juicio / jueces paralelos | `parallel-judge-ops` |
| Ejecutar plan comercial post-wire | `zonix-lanzamiento-roles` |
| Ejecutar plan comercial post-wire | `zonix-launch-piloto` |
| Encontrar bug o test fallido | `systematic-debugging` |
| Escribir descripción de PR o notas para review | `cognitive-doc-design-ops` |
| Escribir feedback de code review para humano | `comment-writer-ops` |
| Estandarizar prácticas de review | `code-review-playbook` |
| Evitar PR monolítico desde SDD tasks | `work-unit-commits-ops` |
| Explorar codebase | `fan-out-synthesize-ops` |
| Finalizar tarea y documentar avances | `documentar-avances` |
| Gates humanos antes de acción irreversible | `human-in-the-loop-ops` |
| Guardar decisión o bugfix en Engram | `engram-memory-protocol` |
| Guiones Legal Alternativo / Hugette (TikTok/IG) | `legal-alternativo-content` |
| HITL HOTL umbrales de confianza | `human-in-the-loop-ops` |
| Hacer git push o merge | `git-guardrails-ops` |
| Human-in-the-loop diseño de loop | `human-in-the-loop-ops` |
| Implementar eventos broadcast | `zonix-realtime-events` |
| Implementar feature multi-archivo | `fan-out-synthesize-ops` |
| Implementar feature o bugfix | `test-driven-development` |
| Iniciar módulo | `brainstorming-ops` |
| Iniciar módulo | `jarvis-core` |
| Iniciar módulo | `task-pipeline-ops` |
| Iniciar módulo | `writing-plans` |
| Iniciar sesión | `session-startup-ops` |
| Investigar bug | `fan-out-synthesize-ops` |
| Iterar hasta lograr un objetivo medible | `agent-loop-engineering` |
| Landing / welcome / CSS marketing | `zonix-web-design` |
| Landing con IA, hero video loop, Nano Banana / Veo / Claude Design | `zonix-ai-landing-pipeline` |
| Lean Canvas / modelo negocio piloto | `zonix-lean-canvas` |
| Lean Canvas / modelo negocio piloto | `zonix-startup-context` |
| Lectura founder CEO/CTO/TPM (due diligence, 90 días) | `zonix-founder-ops-index` |
| Lectura founder CEO/CTO/TPM (due diligence, 90 días) | `zonix-startup-context` |
| Lógica de pagos | `zonix-payments` |
| Mejorar o auditar un .md en docs/Lanzamiento/ | `zonix-lanzamiento-docs` |
| Mejorar o auditar un .md en docs/Lanzamiento/ | `zonix-startup-context` |
| Memoria persistente Engram MCP | `engram-router` |
| Modo produce | `context-packs-ops` |
| Modo research | `context-packs-ops` |
| Modo review | `context-packs-ops` |
| Naming de branch y checklist pre-PR | `branch-pr-ops` |
| Nueva candidata inversionista / forense fondo VE / scoring CRM Inversionistas | `zonix-inversionistas-crm` |
| PR supera 400 líneas o presupuesto de review | `chained-pr-ops` |
| Pedir code review | `requesting-code-review` |
| Planificar desarrollo | `brainstorming-ops` |
| Planificar desarrollo | `jarvis-core` |
| Planificar desarrollo | `writing-plans` |
| Preparar commits antes de abrir PR | `work-unit-commits-ops` |
| Preparar data room / gaps inversor | `zonix-investor-materials` |
| Preparar data room / gaps inversor | `zonix-startup-context` |
| Prospección / cierre farmacias B2B | `zonix-b2b-sales` |
| Recibir code review | `receiving-code-review` |
| Redactar comentario de PR o issue | `comment-writer-ops` |
| Redactar o mejorar README, RFC, onboarding o guía | `cognitive-doc-design-ops` |
| Redactar pitch / email inversor | `zonix-fundraising-narrative` |
| Redactar pitch / email inversor | `zonix-startup-context` |
| Requisitos ambiguos | `deep-interview-ops` |
| Respuesta de maintainer o mensaje async al equipo | `comment-writer-ops` |
| Retomar proyecto | `session-startup-ops` |
| Revisar contrato marco farmacia / SAFE / laboral (checklist) | `zonix-legal-contracts-ve` |
| Revisar pull request | `code-review-playbook` |
| Sesión larga sugerir compactación | `strategic-compact-ops` |
| Stacked PRs o chained PRs | `chained-pr-ops` |
| Tarea multi-rol compleja (qué subagent + qué skill) | `zonix-jarvis-subagents-map` |
| Terminar módulo | `finishing-a-development-branch` |
| Terminar módulo | `jarvis-core` |
| Terminar módulo | `session-learner-ops` |
| Terminar módulo | `verification-before-completion` |
| Trabajar con estados / flujo de órdenes | `zonix-order-lifecycle` |
| Trabajar con pack Lanzamiento / roles / pitch inversor | `zonix-lanzamiento-roles` |
| Trabajar con pack Lanzamiento / roles / pitch inversor | `zonix-startup-context` |
| Trabajar con recetas / validación farmacéutico | `zonix-prescriptions` |
| Triage backlog issues y PRs | `backlog-triage-ops` |
| Validar diff/PR con 2+ revisores independientes | `parallel-judge-ops` |
| Verificación adversarial paralela de un artefacto | `parallel-judge-ops` |
| Verificar que docs igualan comportamiento actual | `docs-alignment-ops` |
| doubt-driven revisión adversarial | `doubt-driven-development` |
| mem_save mem_search contexto entre sesiones | `engram-router` |
| nlm login nlm setup add cursor | `notebooklm-router` |
<!-- AUTO-INVOKE-END -->

---

## Documentos clave (Pharma)

- **[docs/BRAND_ZONIX_PHARMA.md](docs/BRAND_ZONIX_PHARMA.md)** — paleta, tipografía, do/don't, tokens.
- **[docs/PLAN_RX_VALIDATION.md](docs/PLAN_RX_VALIDATION.md)** — flujo de validación de receta y endpoints.
- **[docs/PLAN_REGULATORIO_PHARMA_VE.md](docs/PLAN_REGULATORIO_PHARMA_VE.md)** — regulación VE, MPPS, INHRR, datos de salud.
- **[docs/audits/MIGRACION_EATS_PHARMA.md](docs/audits/MIGRACION_EATS_PHARMA.md)** — qué cambió en la transformación Eats → Pharma.
- **[docs/ops/deploy/DEPLOY_PHARMA_AIBLOCK.md](docs/ops/deploy/DEPLOY_PHARMA_AIBLOCK.md)** — deploy FTP GitHub Actions → `pharma.aiblockweb.com`.
- **Matriz roles → skills:** [docs/zonix/roles_matrix.json](docs/zonix/roles_matrix.json) + skill `zonix-lanzamiento-roles` (el `.md` ROLES_SKILLS_ZONIX del pack ya no está versionado).
- **[docs/Lanzamiento/README.md](docs/Lanzamiento/README.md)** — índice pack inversor (22 documentos).
- **[docs/zonix/roles_matrix.json](docs/zonix/roles_matrix.json)** — routing JARVIS por rol y tarea + `skills_inventory`.
- **[docs/zonix/SPEC_KIT_ZONIX.md](docs/zonix/SPEC_KIT_ZONIX.md)** — Spec Kit (SDD) vs Jarvis `zonix-*`.
- **[docs/plantillas/PROMPT_LANDING_IA_ZONIX.md](docs/plantillas/PROMPT_LANDING_IA_ZONIX.md)** — super prompt auditoría landing + plan pipeline IA (NEONFALL adaptado); invoca `zonix-ai-landing-pipeline` + web/brand/regulatorio.
- **[docs/plantillas/PROMPT_AUDIT_360_ZONIX.md](docs/plantillas/PROMPT_AUDIT_360_ZONIX.md)** — super prompt auditoría exhaustiva (360° / código / por módulo); complementa [`docs/audits/AUDIT_API_PATTERNS_2026-05-01.md`](docs/audits/AUDIT_API_PATTERNS_2026-05-01.md).
- **[docs/qa/SMOKE_RX_E2E.md](docs/qa/SMOKE_RX_E2E.md)** — checklist smoke manual flujo Rx E2E.
- **[specs/README.md](specs/README.md)** — índice features Spec Kit.

---

**Documentación completa de lógica de negocio:** Ver `README.md`
**Última actualización:** 27 mayo 2026
