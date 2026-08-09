# Docs — Zonix Pharma Backend

Índice de la carpeta `docs/` tras triage (ago 2026). **No** mezclar con el pack inversor (`Lanzamiento/`) ni el CRM (`Inversionistas/`).

## Raíz (canon — leer primero)

| Archivo | Uso |
|---------|-----|
| [`active_context.md`](active_context.md) | Memoria de sesión IA |
| [`BRAND_ZONIX_PHARMA.md`](BRAND_ZONIX_PHARMA.md) | Marca y tokens |
| [`PLAN_RX_VALIDATION.md`](PLAN_RX_VALIDATION.md) | Flujo Rx / endpoints |
| [`PLAN_REGULATORIO_PHARMA_VE.md`](PLAN_REGULATORIO_PHARMA_VE.md) | Marco MPPS / INHRR |
| [`MIGRACION_EATS_PHARMA.md`](MIGRACION_EATS_PHARMA.md) | Snapshot fork Eats → Pharma |
| [`ZONIX_WORKSPACE.md`](ZONIX_WORKSPACE.md) | Mapa multi-repo |
| [`ZONIX_JARVIS_INTEGRATION.md`](ZONIX_JARVIS_INTEGRATION.md) | Onboarding JARVIS / skills |
| [`cursorignore.example`](cursorignore.example) | Plantilla Cursor ignore |

## Subcarpetas

| Carpeta | Contenido |
|---------|-----------|
| [`Lanzamiento/`](Lanzamiento/) | Pack inversor / SoT financiero (Excel v4) |
| [`Inversionistas/`](Inversionistas/) | CRM candidatos a capital |
| [`Pack_Aliado_Gabriel_Barrios/`](Pack_Aliado_Gabriel_Barrios/) | Pack aliado (md + docx) |
| [`audits/`](audits/) | Auditorías de módulo / API (jun–may 2026) |
| [`ops/`](ops/) | Deploy, VPS, env, tech debt, DX Cursor |
| [`ops/deploy/`](ops/deploy/) | Deploy FTP / Aiblock |
| [`runbooks/`](runbooks/) | Incidentes checkout / lifecycle órdenes |
| [`qa/`](qa/) | Smoke Rx E2E (checklist vivo) |
| [`product/`](product/) | Flujos pagos, phones |
| [`plantillas/`](plantillas/) | Prompts JARVIS (360, forense, landing, pack) |
| [`zonix/`](zonix/) | Análisis skills / research forense |
| [`agents/`](agents/) | Notas auxiliares agentes |


## Regla

Si un documento es **canon de producto o IA diaria** → raíz.  
Si es **evidencia / ops / prompt / histórico** → subcarpeta.  
Cifras de raise → solo `Lanzamiento/` + Excel.

## Limpieza (9 ago 2026)

Se eliminó `docs/archive/` (Eats histórico, smoke snapshot, forense docs 360, CONTEXTO_IA, research crudo GitHub). Canon y `audits/`/`ops/`/`qa/` vivos permanecen.
