# Zonix Pharma Constitution

> **Hub SDD:** ZonixPharma-Backend (`specs/`, `.specify/`).  
> **Canon largo:** [AGENTS.md](../../AGENTS.md), [.cursorrules](../../.cursorrules).  
> **Front hermano:** `../ZonixPharma-Front` — rutas Flutter en planes/tasks con prefijo explícito.

**Version**: 1.0.0 | **Ratified**: 2026-05-27 | **Last Amended**: 2026-05-27

---

## I. Collaboration & Governance (NON-NEGOTIABLE)

1. **User leads the project** — ask before acting; propose diffs; wait for explicit OK before editing multiple files or implementing `/speckit-implement`.
2. **No git push/merge** without explicit user order; local commits only when requested.
3. **User tests first** before production deploy claims.
4. **Session context:** read `docs/active_context.md` when resuming work.
5. **Jarvis skills** (`.agents/skills/zonix-*`) remain mandatory for domain logic; Spec Kit (`~/.cursor/skills/speckit-*` via `install.sh --all`) governs SDD workflow only.
6. **Do not use Spec Kit** for `docs/Lanzamiento/` (investor pack, financial figures) — use `zonix-lanzamiento-docs` + `zonix-startup-context`.

---

## II. Dual-Repository Architecture

| Repo | Role | Stack |
|------|------|-------|
| **ZonixPharma-Backend** | API hub, specs canon, Laravel | PHP 8.1+, Laravel 10, MySQL, Sanctum |
| **ZonixPharma-Front** | Mobile client | Flutter ≥3.5, Dart 3.5+, Provider |

- Feature specs live in **Backend** `specs/00N-feature-name/`.
- Every plan and task list MUST include **Backend paths** and **Frontend paths** when the feature touches UI.
- API contract changes require alignment with `zonix-api-patterns` response envelope.

---

## III. Backend Engineering Principles

1. **Business logic in Services**, not Controllers.
2. **Form Requests** for all input validation.
3. **`DB::transaction()`** for critical multi-step writes.
4. **Eager loading** (`with()`) — no N+1 on list endpoints.
5. **Paginate** all list endpoints.
6. **API response pattern:**
   ```json
   { "success": true|false, "data": {}, "message": "" }
   ```
7. **Migrations:** NEVER `add_*` / `change_*` on existing tables — edit the original `create_*` migration only.
8. **Uploads:** max 5MB; allowed MIME types only.

### Pharma domain (config `config/zonix.php` → `pharma`)

| Key | Default | Behavior |
|-----|---------|----------|
| `block_rx_without_prescription` | `false` | `true` = checkout blocks Rx without approved `prescription_id` |
| `prescription_validation_ttl_minutes` | 60 | Pending Rx TTL; expiry cancels order |
| `disallow_promotions_on_rx` | `true` | No discounts on Rx line items |
| `require_cold_chain_handling` | `true` | `cold_chain` products restrict delivery modes |

**Roles (7):** `users` (Buyer), `commerce` (Pharmacy), `pharmacist`, `delivery_company`, `delivery_agent`, `delivery`, `admin`.

**Realtime:** Pusher + FCM (`zonix_pharma_fcm`) — **NO WebSocket**.

---

## IV. Frontend Engineering Principles

1. **`AppConfig.apiUrl`** — never hardcode API URLs.
2. **`AuthHelper.getAuthHeaders()`** for authenticated requests.
3. **`Consumer<Service>`** for reactive rebuilds (Provider).
4. **Colors:** `AppColors.brand*` / `Theme` — no `Colors.*` or `Color(0x...)` in `lib/features/screens/**`.
5. **Uni-pharmacy cart** — one commerce per cart.
6. **Rx UI:** badge "Requiere receta"; block pay until valid prescription when strict mode or order state requires it.
7. **Cold chain:** warn in checkout; restrict delivery UI without equipment.

---

## V. Quality Gates

| Repo | Command | Gate |
|------|---------|------|
| Backend | `./vendor/bin/pint --test` | Must pass on touched PHP |
| Backend | `php artisan test` | Must pass; use `--filter=` for scoped runs |
| Frontend | `flutter analyze --no-fatal-infos` | No new errors/warnings in touched files |
| Frontend | `flutter test` | Must pass |

Do not claim completion without running relevant gates.

---

## VI. Spec-Driven Workflow (Spec Kit)

1. `/speckit-constitution` — this file (amend with user approval).
2. `/speckit-specify` — what & why (no tech stack in first pass).
3. `/speckit-clarify` — before plan when ambiguous.
4. `/speckit-plan` — Laravel + Flutter paths, contracts, data model.
5. `/speckit-tasks` — ordered tasks with file paths; `[P]` for parallel-safe.
6. `/speckit-analyze` — consistency check before implement.
7. `/speckit-implement` — **only after user OK**; respect Jarvis collaboration rules.

Branch naming: `00N-short-description` (e.g. `001-block-rx-strict-checkout`).

---

## VII. Auto-Invoke Skills (by task type)

| Task | Skills |
|------|--------|
| API / controllers / routes | `laravel-specialist`, `zonix-api-patterns` |
| Orders / Rx flow | `zonix-order-lifecycle`, `zonix-prescriptions` |
| Payments VE | `zonix-payments` |
| Delivery / geo | `zonix-delivery-system` |
| Pusher / FCM | `zonix-realtime-events` |
| Flutter screens | `flutter-expert`, `zonix-ui-design` |
| Regulated copy | `zonix-regulatory-ve` + human advisor |

Full matrix: [AGENTS.md](../../AGENTS.md) § Auto-invoke Skills.

---

## VIII. Key Reference Documents

- [docs/BRAND_ZONIX_PHARMA.md](../../docs/BRAND_ZONIX_PHARMA.md)
- [docs/PLAN_RX_VALIDATION.md](../../docs/PLAN_RX_VALIDATION.md)
- [docs/PLAN_REGULATORIO_PHARMA_VE.md](../../docs/PLAN_REGULATORIO_PHARMA_VE.md)
- [docs/audits/MIGRACION_EATS_PHARMA.md](../../docs/audits/MIGRACION_EATS_PHARMA.md)
- [docs/zonix/SPEC_KIT_ZONIX.md](../../docs/zonix/SPEC_KIT_ZONIX.md) — router speckit vs Jarvis

---

## Governance

- This constitution is the **executable summary** for Spec Kit phases; `AGENTS.md` remains the detailed canon.
- Amendments require user approval and version bump in the header.
- Complexity beyond these rules must be justified in plan § Complexity Tracking.
