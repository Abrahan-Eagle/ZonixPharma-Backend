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
| Skills SDD | `.cursor/skills/speckit-*` (`/speckit-specify`, `/speckit-plan`, …) |
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
  - Forense: [docs/zonix/ANALISIS_FORENSE_CURSO_UNIMOOC_2026-06.md](docs/zonix/ANALISIS_FORENSE_CURSO_UNIMOOC_2026-06.md) (115 `.srt`, 8 buckets M1–M7).
  - Nueva skill: `zonix-lean-canvas` (Canvas 9 bloques, bilateral, pivot).
  - Ampliadas: `zonix-launch-piloto`, `zonix-b2b-sales`, `zonix-financial-model`, `zonix-startup-context`, `zonix-fundraising-narrative` (M2), `zonix-lanzamiento-docs` (M5 CAC).
  - Repaso completo (cierre P2): ciclo viral M5, cuota/economía de canal M4/M6, organización Fase 0 M1, red flags inversor corporativo M7 (`zonix-investor-materials`).
  - Router: [docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md](docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md), `roles_matrix.json`.
- **10 jun 2026 — Remediación módulo commerce (auditoría 360° + multi-sede).**
  - Auditoría: [docs/AUDIT_commerce_8fases_2026-06-10.md](docs/AUDIT_commerce_8fases_2026-06-10.md), [docs/PROMPT_AUDIT_360_ZONIX.md](docs/PROMPT_AUDIT_360_ZONIX.md).
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
  - Skills proceso: `.cursor/skills/speckit-*` (complementan `.agents/skills/zonix-*`).
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
  - Documentación: [docs/BRAND_ZONIX_PHARMA.md](docs/BRAND_ZONIX_PHARMA.md), [docs/PLAN_RX_VALIDATION.md](docs/PLAN_RX_VALIDATION.md), [docs/PLAN_REGULATORIO_PHARMA_VE.md](docs/PLAN_REGULATORIO_PHARMA_VE.md), [docs/MIGRACION_EATS_PHARMA.md](docs/MIGRACION_EATS_PHARMA.md).
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

## Available Skills

| Skill | Ruta |
| ----- | ---- |
| `laravel-specialist` | [.agents/skills/laravel-specialist/SKILL.md](.agents/skills/laravel-specialist/SKILL.md) |
| `api-design-principles` | [.agents/skills/api-design-principles/SKILL.md](.agents/skills/api-design-principles/SKILL.md) |
| `architecture-patterns` | [.agents/skills/architecture-patterns/SKILL.md](.agents/skills/architecture-patterns/SKILL.md) |
| `clean-code-principles` | [.agents/skills/clean-code-principles/SKILL.md](.agents/skills/clean-code-principles/SKILL.md) |
| `code-review-excellence` | [.agents/skills/code-review-excellence/SKILL.md](.agents/skills/code-review-excellence/SKILL.md) |
| `error-handling-patterns` | [.agents/skills/error-handling-patterns/SKILL.md](.agents/skills/error-handling-patterns/SKILL.md) |
| `security` | [.agents/skills/security/SKILL.md](.agents/skills/security/SKILL.md) |
| `mysql-best-practices` | [.agents/skills/mysql-best-practices/SKILL.md](.agents/skills/mysql-best-practices/SKILL.md) |
| `systematic-debugging` | [.agents/skills/systematic-debugging/SKILL.md](.agents/skills/systematic-debugging/SKILL.md) |
| `test-driven-development` | [.agents/skills/test-driven-development/SKILL.md](.agents/skills/test-driven-development/SKILL.md) |
| `git-commit` | [.agents/skills/git-commit/SKILL.md](.agents/skills/git-commit/SKILL.md) |

### Custom (Zonix)

| Skill | Descripción | Ruta |
| ----- | ----------- | ---- |
| `zonix-api-patterns` | Response, paginación, roles, middleware Pharma | [.agents/skills/zonix-api-patterns/SKILL.md](.agents/skills/zonix-api-patterns/SKILL.md) |
| `zonix-order-lifecycle` | Estados de orden incluyendo `pending_prescription_validation` | [.agents/skills/zonix-order-lifecycle/SKILL.md](.agents/skills/zonix-order-lifecycle/SKILL.md) |
| `zonix-delivery-system` | Haversine, OSRM, zonas, tracking, cadena de frío | [.agents/skills/zonix-delivery-system/SKILL.md](.agents/skills/zonix-delivery-system/SKILL.md) |
| `zonix-realtime-events` | Pusher, FCM, broadcasting, canales | [.agents/skills/zonix-realtime-events/SKILL.md](.agents/skills/zonix-realtime-events/SKILL.md) |
| `zonix-payments` | Pagos manuales VE (pago móvil, transferencia, Zelle, Binance Pay) | [.agents/skills/zonix-payments/SKILL.md](.agents/skills/zonix-payments/SKILL.md) |
| `context-updater` | Resumir sesión en `docs/active_context.md` | [.agents/skills/context-updater/SKILL.md](.agents/skills/context-updater/SKILL.md) |
| `documentar-avances` | Proponer "Cambios recientes" en AGENTS.md/README | [.agents/skills/documentar-avances/SKILL.md](.agents/skills/documentar-avances/SKILL.md) |
| `zonix-lanzamiento-roles` | Panel roles pack Lanzamiento → Docs/Empresa/Sistema + skills agente | [.agents/skills/zonix-lanzamiento-roles/SKILL.md](.agents/skills/zonix-lanzamiento-roles/SKILL.md) |
| `zonix-empresa-ve` | Constitución C.A., RIF, banco, SAFE, laboral piloto (checklist; no dictamen) | [.agents/skills/zonix-empresa-ve/SKILL.md](.agents/skills/zonix-empresa-ve/SKILL.md) |
| `zonix-launch-piloto` | Plan T+0 → Day-D (T+90) → M12; KPIs farmacias; playbook Co-CEO/Sales | [.agents/skills/zonix-launch-piloto/SKILL.md](.agents/skills/zonix-launch-piloto/SKILL.md) |
| `zonix-lean-canvas` | Lean Canvas operativo (UniMOOC Steve Blank); hipótesis, pivot, bilateral | [.agents/skills/zonix-lean-canvas/SKILL.md](.agents/skills/zonix-lean-canvas/SKILL.md) |
| `zonix-b2b-sales` | Playbook Sales B2B (×4), prospección farmacias, objeciones | [.agents/skills/zonix-b2b-sales/SKILL.md](.agents/skills/zonix-b2b-sales/SKILL.md) |
| `zonix-startup-context` | Contexto canónico pre-seed (tiers 101/118/135k, anclas numéricas) | [.agents/skills/zonix-startup-context/SKILL.md](.agents/skills/zonix-startup-context/SKILL.md) |
| `zonix-financial-model` | Coherencia PROYECCION, UNIT, PRESUPUESTO (marketplace farmacia VE) | [.agents/skills/zonix-financial-model/SKILL.md](.agents/skills/zonix-financial-model/SKILL.md) |
| `zonix-investor-materials` | Data room ligero, gaps pack, checklist inversor | [.agents/skills/zonix-investor-materials/SKILL.md](.agents/skills/zonix-investor-materials/SKILL.md) |
| `zonix-fundraising-narrative` | Pitch, MENSAJE_ENVIO, Q&A SAFE | [.agents/skills/zonix-fundraising-narrative/SKILL.md](.agents/skills/zonix-fundraising-narrative/SKILL.md) |
| `zonix-regulatory-ve` | MPPS/INHRR, copy salud, Rx (lente; no dictamen) | [.agents/skills/zonix-regulatory-ve/SKILL.md](.agents/skills/zonix-regulatory-ve/SKILL.md) |
| `zonix-prescriptions` | Receta médica, validación farmacéutico, TTL, controlados | [.agents/skills/zonix-prescriptions/SKILL.md](.agents/skills/zonix-prescriptions/SKILL.md) |
| `zonix-medicine-catalog` | Catálogo medicamentos, lotes FIFO, INHRR, cold chain | [.agents/skills/zonix-medicine-catalog/SKILL.md](.agents/skills/zonix-medicine-catalog/SKILL.md) |
| `zonix-disputes-and-refunds` | Disputas, reembolsos manuales, penalizaciones | [.agents/skills/zonix-disputes-and-refunds/SKILL.md](.agents/skills/zonix-disputes-and-refunds/SKILL.md) |
| `zonix-analytics` | KPIs admin/commerce, agregaciones órdenes | [.agents/skills/zonix-analytics/SKILL.md](.agents/skills/zonix-analytics/SKILL.md) |
| `zonix-jarvis-subagents-map` | Tarea Zonix → subagent VoltAgent (lente) → skill `zonix-*` canon | [.agents/skills/zonix-jarvis-subagents-map/SKILL.md](.agents/skills/zonix-jarvis-subagents-map/SKILL.md) |
| `zonix-legal-contracts-ve` | Checklist contrato marco farmacia, SAFE, laboral VE | [.agents/skills/zonix-legal-contracts-ve/SKILL.md](.agents/skills/zonix-legal-contracts-ve/SKILL.md) |
| `zonix-founder-ops-index` | Índice curado awesome-ceo/cto/tpm (sin cifras fuera del pack) | [.agents/skills/zonix-founder-ops-index/SKILL.md](.agents/skills/zonix-founder-ops-index/SKILL.md) |
| `zonix-lanzamiento-docs` | Mejorar/auditar docs/Lanzamiento; marcos Busqueda GitHub adaptados | [.agents/skills/zonix-lanzamiento-docs/SKILL.md](.agents/skills/zonix-lanzamiento-docs/SKILL.md) |
| `zonix-brand-ops` | Naming, tono pharma VE, 60-30-10, anti-patterns Eats | [.agents/skills/zonix-brand-ops/SKILL.md](.agents/skills/zonix-brand-ops/SKILL.md) |
| `zonix-web-design` | Landing Blade, zonix.css, WCAG web | [.agents/skills/zonix-web-design/SKILL.md](.agents/skills/zonix-web-design/SKILL.md) |
| `zonix-design-enforcer` | Heurísticas 8pt/WCAG (stub → Front Flutter) | [.agents/skills/zonix-design-enforcer/SKILL.md](.agents/skills/zonix-design-enforcer/SKILL.md) |

---

## Auto-invoke Skills

| Acción | Skill |
| ------ | ----- |
| Crear/modificar controladores o rutas | `laravel-specialist` + `zonix-api-patterns` |
| Diseñar nuevos endpoints API | `api-design-principles` |
| Crear migraciones de BD | `mysql-best-practices` + **norma Migraciones** (editar create, no crear add/change) |
| Agregar autenticación / autorización | `security` |
| Crear/modificar tests | `test-driven-development` |
| Debuggear un error | `systematic-debugging` |
| Trabajar con estados / flujo de órdenes | `zonix-order-lifecycle` |
| Implementar eventos broadcast | `zonix-realtime-events` |
| Lógica de pagos | `zonix-payments` |
| Calcular distancias/zonas | `zonix-delivery-system` |
| Hacer git commit | `git-commit` |
| Cerrar sesión con cambios relevantes | `context-updater` |
| Finalizar tarea y documentar avances | `documentar-avances` |
| Trabajar con pack Lanzamiento / roles / pitch inversor | `zonix-startup-context` + `zonix-lanzamiento-roles` + `documentar-avances` |
| Mejorar o auditar un `.md` en `docs/Lanzamiento/` | `zonix-startup-context` + **`zonix-lanzamiento-docs`** + skill del router (tabla en skill) |
| Auditar finanzas del pack (PROYECCION, UNIT, PRESUPUESTO) | `zonix-startup-context` + `zonix-financial-model` |
| Preparar data room / gaps inversor | `zonix-startup-context` + `zonix-investor-materials` |
| Redactar pitch / email inversor | `zonix-startup-context` + `zonix-fundraising-narrative` |
| Copy regulatorio / Rx en documentos | `zonix-regulatory-ve` + asesor humano |
| Trabajar con recetas / validación farmacéutico | `zonix-prescriptions` |
| Catálogo medicamentos / lotes | `zonix-medicine-catalog` |
| Disputas y reembolsos | `zonix-disputes-and-refunds` |
| Dashboards y métricas admin/commerce | `zonix-analytics` |
| Constituir empresa / SAFE / laboral VE | `zonix-startup-context` + `zonix-empresa-ve` + `zonix-lanzamiento-roles` |
| Calendario piloto / hitos T+30/60/90 / Day-D | `zonix-launch-piloto` + `zonix-startup-context` |
| Ejecutar plan comercial post-wire | `zonix-launch-piloto` + `zonix-lanzamiento-roles` |
| Prospección / cierre farmacias B2B | `zonix-b2b-sales` + `zonix-launch-piloto` |
| Lean Canvas / modelo negocio piloto | `zonix-startup-context` + `zonix-lean-canvas` + `zonix-launch-piloto` |
| Tarea multi-rol compleja (qué subagent + qué skill) | `zonix-jarvis-subagents-map` + `zonix-lanzamiento-roles` |
| Revisar contrato marco farmacia / SAFE / laboral (checklist) | `zonix-legal-contracts-ve` + `zonix-empresa-ve` + `zonix-regulatory-ve` |
| Lectura founder CEO/CTO/TPM (due diligence, 90 días) | `zonix-founder-ops-index` + `zonix-startup-context` |
| Nueva feature producto (spec → plan → tasks) | Spec Kit (`speckit-*`) + skills `zonix-*` del dominio — ver [SPEC_KIT_ZONIX.md](docs/zonix/SPEC_KIT_ZONIX.md) |
| Refactor / feature multi-módulo full-stack | Spec Kit + `zonix-order-lifecycle` / `zonix-api-patterns` / `zonix-ui-design` (Front) según módulo |
| Landing / welcome / CSS marketing | `zonix-web-design` + `zonix-brand-ops` |
| Copy marca / ASO / revisión anti-Eats | `zonix-brand-ops` |
| UI Flutter (desde Backend, coordinación) | Front `zonix-ui-design` + `zonix-design-enforcer` |

---

## Documentos clave (Pharma)

- **[docs/BRAND_ZONIX_PHARMA.md](docs/BRAND_ZONIX_PHARMA.md)** — paleta, tipografía, do/don't, tokens.
- **[docs/PLAN_RX_VALIDATION.md](docs/PLAN_RX_VALIDATION.md)** — flujo de validación de receta y endpoints.
- **[docs/PLAN_REGULATORIO_PHARMA_VE.md](docs/PLAN_REGULATORIO_PHARMA_VE.md)** — regulación VE, MPPS, INHRR, datos de salud.
- **[docs/MIGRACION_EATS_PHARMA.md](docs/MIGRACION_EATS_PHARMA.md)** — qué cambió en la transformación Eats → Pharma.
- **[docs/DEPLOY_PHARMA_AIBLOCK.md](docs/DEPLOY_PHARMA_AIBLOCK.md)** — deploy FTP GitHub Actions → `pharma.aiblockweb.com`.
- **Matriz roles → skills:** [docs/zonix/roles_matrix.json](docs/zonix/roles_matrix.json) + skill `zonix-lanzamiento-roles` (el `.md` ROLES_SKILLS_ZONIX del pack ya no está versionado).
- **[docs/Lanzamiento/README.md](docs/Lanzamiento/README.md)** — índice pack inversor (22 documentos).
- **[docs/zonix/ANALISIS_FORENSE_SKILLS.md](docs/zonix/ANALISIS_FORENSE_SKILLS.md)** — auditoría forense multi-rol de skills `zonix-*`.
- **[docs/zonix/research_links.md](docs/zonix/research_links.md)** — enlaces GitHub skills/roles (adaptar/evitar).
- **[docs/zonix/roles_matrix.json](docs/zonix/roles_matrix.json)** — routing JARVIS por rol y tarea + `skills_inventory`.
- **[docs/zonix/SPEC_KIT_ZONIX.md](docs/zonix/SPEC_KIT_ZONIX.md)** — Spec Kit (SDD) vs Jarvis `zonix-*`.
- **[docs/PROMPT_AUDIT_360_ZONIX.md](docs/PROMPT_AUDIT_360_ZONIX.md)** — super prompt auditoría exhaustiva (360° / código / por módulo); complementa `PROMPT_AUDIT_FORENSE.md` y `AUDIT_API_PATTERNS_*`.
- **[docs/AUDIT_commerce_2026-06-10.md](docs/AUDIT_commerce_2026-06-10.md)** — piloto auditoría módulo commerce (contrato API↔Front, `commerce_api_errors`).
- **[docs/AUDIT_pharmacist_2026-06-10.md](docs/AUDIT_pharmacist_2026-06-10.md)** — auditoría módulo pharmacist + remediación lote 3 (envelope, onboarding throttle).
- **[docs/AUDIT_orders_2026-06-10.md](docs/AUDIT_orders_2026-06-10.md)** — auditoría módulo orders buyer + `order_api_errors`.
- **[docs/AUDIT_buyer_catalog_2026-06-10.md](docs/AUDIT_buyer_catalog_2026-06-10.md)** — auditoría catálogo buyer + `product_api_errors`.
- **[docs/AUDIT_delivery_2026-06-10.md](docs/AUDIT_delivery_2026-06-10.md)** — auditoría módulo delivery + `delivery_api_errors`.
- **[docs/AUDIT_admin_2026-06-10.md](docs/AUDIT_admin_2026-06-10.md)** — auditoría panel admin + `admin_api_errors`.
- **[docs/SMOKE_RX_E2E.md](docs/SMOKE_RX_E2E.md)** — checklist smoke manual flujo Rx E2E.
- **[specs/README.md](specs/README.md)** — índice features Spec Kit.

---

**Documentación completa de lógica de negocio:** Ver `README.md`
**Última actualización:** 27 mayo 2026
