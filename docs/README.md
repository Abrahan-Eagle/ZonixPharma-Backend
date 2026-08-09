# Docs — Zonix Pharma Backend

Mapa post-ola 3 (ago 2026). Tres zonas. Cifras de raise → solo `Lanzamiento/` + Excel.

## Canon producto (raíz — leer primero)

| Archivo | Uso |
|---------|-----|
| [`active_context.md`](active_context.md) | Memoria de sesión IA |
| [`BRAND_ZONIX_PHARMA.md`](BRAND_ZONIX_PHARMA.md) | Marca y tokens |
| [`PLAN_RX_VALIDATION.md`](PLAN_RX_VALIDATION.md) | Flujo Rx / endpoints |
| [`PLAN_REGULATORIO_PHARMA_VE.md`](PLAN_REGULATORIO_PHARMA_VE.md) | Marco MPPS / INHRR |

## Ingeniería

| Carpeta | Contenido |
|---------|-----------|
| [`audits/`](audits/) | Audits vivos + migración Eats→Pharma |
| [`ops/`](ops/) | Deploy, VPS, env, tech debt, `cursorignore.example` |
| [`ops/deploy/`](ops/deploy/) | Deploy FTP / Aiblock |
| [`product/`](product/) | Flujos pagos, phones |
| [`qa/`](qa/) | Smoke Rx E2E |
| [`runbooks/`](runbooks/) | Checkout / lifecycle órdenes |
| [`plantillas/`](plantillas/) | Prompts JARVIS (360, landing, pack) |
| [`zonix/`](zonix/) | Spec Kit, startup router, roles_matrix, JARVIS/workspace |

## Negocio

| Carpeta | Contenido |
|---------|-----------|
| [`Lanzamiento/`](Lanzamiento/) | Pack inversor / SoT financiero (Excel v4) |
| [`Inversionistas/`](Inversionistas/) | CRM candidatos a capital |
| [`Pack_Aliado_Gabriel_Barrios/`](Pack_Aliado_Gabriel_Barrios/) | Pack aliado (md + docx) |

## Regla

- Canon de producto o lectura diaria → **raíz**
- Evidencia / ops / prompts / JARVIS → **ingeniería**
- Raise / CRM / aliado → **negocio**

## Limpiezas

- **Ola 1:** eliminado `archive/`
- **Ola 2:** eliminados `agents/`, snapshots audits, forenses zonix
- **Ola 3:** `.venv` local; prompt Eats + CURSOR_MEJORAS; JARVIS/WORKSPACE→`zonix/`; MIGRACION→`audits/`; cursorignore→`ops/`
