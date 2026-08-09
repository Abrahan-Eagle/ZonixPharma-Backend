# Forense 360° `docs/` — skills + jueces (2026-08-09)

> **Remediación aplicada → PASS2:** [`FORENSIC_DOCS_360_PASS2_2026-08-09.md`](FORENSIC_DOCS_360_PASS2_2026-08-09.md) (score ~4.2/5). Este archivo es el snapshot **pre-fix** (PASS1).

> **Modo:** solo lectura + este informe. **No** editar pack / Inversionistas / LA hasta **OK founder** post-juicio.  
> **Inventario:** **160** `*.md` bajo `docs/`. Binarios (PDF/xlsx) no parseados; solo se anotan si un MD los cita.  
> **Canon cifras:** SAFE Lean **USD 237.412** = Fase 0 **50.260** + burn Detallado **172.152** + reserva **15.000**; cap **600k** → equity **~39,57%**; Day-D caja **187.152**; esc.1 cash M12 **246.231** (`zonix-startup-context` + pack Lanzamiento).  
> **Método:** fan-out W1–W8 (skills por lote vía `.cursor/rules/zonix-docs-startup.mdc`) → síntesis orquestador → Fase 3 jueces A/B (sección al pie tras juicio).

---

## 1. Veredicto ejecutivo

| Dimensión | Estado |
|-----------|--------|
| **Ask Lean 237.412 en cluster pitch/finanzas (W1)** | Sólido — BRIEF ↔ PROYECCION ↔ PRESUPUESTO ↔ ESTRUCTURA alineados |
| **Riesgo credibilidad pre-envío** | **Alto** — copy listo (MENSAJE 800/mes), PLAN cash M6 erróneo, CRM ask ~211k / ~174k residual |
| **Frontera LA ↔ pack Lanzamiento** | **Limpia** (0 leak Hugette/LFDA en Lanzamiento) |
| **Slim LA** | Cumple (8 MD + `ids_tt.txt`; bulk gitignored) |
| **Higiene paths `/home` / `~/Descargas`** | **P0** en MODELO, Pack 18, `active_context`, plantillas, audits landing |
| **Producto raíz (`product/`)** | Lexicon Eats residual + flujo pago sin rama Rx — **P0** |

**Resumen en una línea:** el pack financiero canónico está bien anclado a **237.412**; la deuda es **drift en CRM/fichas históricas**, **bugs operativos en PLAN**, **copy pitch inconsistente (LTV/CAC y burn legal)** y **docs producto/ops con bleed Eats o links rotos** — no hace falta reescribir el Excel.

**Score post-juicio (orquestador, 1–5):** **3.8** — pack financiero canónico sólido; deuda = CRM histórico + copy pitch + higiene paths/`product/`.

---

## 2. Matriz por lote (W1–W8)

| ID | Lote | ~MD | Skills | KEEP dominante | FIX/DROP clave |
|----|------|-----|--------|----------------|----------------|
| **W1** | Lanzamiento pitch/finanzas | ~18 | `startup-context` → `lanzamiento-docs` → `financial` / `fundraising` | Sí (núcleo SAFE) | MENSAJE **800** vs **330**; MODELO pie v3.1 + `/home`; LTV/CAC **7,2** vs **7,5** |
| **W2** | Resto Lanzamiento | ~17 | `startup-context` → `lanzamiento-docs` → `launch-piloto` | Sí (Day-D/ops) | PLAN cash M6 **~46k** vs **~180.403**; pricing mom-test **25/40/55** vs **45/60/70**; cluster 500 duplicado (TRIM) |
| **W3** | Inv 500-latam + `_intel` + raíz CRM | ~19 | `startup-context` → `investor-materials` / `inversionistas-crm` | Gate 500 OK | `RESUMEN_FACIL` ask **~211k**; scores Epakon/Casa212 README≠comparativo |
| **W4** | Resto Inversionistas (fondos) | ~35 | igual W3 | Forense técnico bueno | Masivo **~174k** en FICHA/CEO; **DROP** `RESUMEN_FACIL` VELA; PII/paths |
| **W5** | Pack_Aliado_Gabriel | 19 | `startup-context` → `lanzamiento-docs` | Ask 237.412 OK | Wire legal≠plan (cuenta personal); mismos pie `/home` + LTV drift |
| **W6** | audits + LegalAlternativo | 20 | router + `legal-alternativo-content` | LA frontera OK | Pie FORENSIC_VIDEOS rutas slim; v1.3.2 residual; Documentos v1 vs EXTRACT §6 |
| **W7** | zonix / plantillas / ops / runbooks / qa | ~18 | startup + ops | Spec Kit≠Lanzamiento OK | `ZONIX_WORKSPACE` **101/118/135k**; `PROMPT_PACK` 3-tier; 16 links rotos; `roles_matrix` gaps |
| **W8** | Raíz docs + product | ~10 | `brand-ops` / `regulatory-ve` / `context-updater` | BRAND/PLAN_RX núcleo OK | Eats en `product/`; `/home` en `active_context`; package Android sin nota transitoria |

---

## 3. P0 / P1 / P2 (consolidado)

### P0 — Antes de envío inversor / outreach Plan A / data room

| # | Fuente | Hallazgo | FIX propuesto (no aplicado) |
|---|--------|----------|------------------------------|
| P0-01 | W1 | `MENSAJE_ENVIO` Slide 7: contador+abogado **800**/mes vs canon **330** | Cambiar a **330** (incl. Rx 120) |
| P0-02 | W1/W5 | `MODELO_FINANCIERO*.md` (+ Pack `18`): pie **12 hojas v3.1** + `/home/aipp/Descargas/...` vs cabecera **14 hojas v4** | DROP pie; citar solo xlsx en repo |
| P0-03 | W1/W5 | LTV/CAC **~7,2x** (CHECKLIST, PERFIL, skill) vs UNIT **~7,5x** (LTV **1.040**) | Canon = UNIT; alinear guion + skill |
| P0-04 | W2 | `PLAN_LANZAMIENTO_COMERCIAL` §5 DoD cash M6 **~46.395** vs PROYECCION **~180.403** | Corregir a **~180.403** |
| P0-05 | W2 | PLAN §4.0 pricing mom-test **25/40/55** vs pack **45/60/70** | Alinear nota discovery |
| P0-06 | W3 | `500-latam/RESUMEN_FACIL.md` ask **~211 mil** | **237.412** |
| P0-07 | W3/W4 | Scores Epakon **73 vs 70**, Casa212 **71 vs 68**; orden ranking distinto | Una fuente de verdad (comparativo o CEO) |
| P0-08 | W4 | Fichas/CEO residuales **~174k** / equity **~35%** (arqos, bid-lab, FI, impulsa, plus58, SVVE, …) | Barrido global → **237.412 / ~39,57%** |
| P0-09 | W4 | `fondo-impacto-vela/RESUMEN_FACIL.md` contradice CEO (alcanzable + **211k**) | **DROP** o reescritura desde CEO |
| P0-10 | W4 | Epakon/Casa212 tono “cubre / tamaño del ask” con cheque **150k** vs Lean **237.412** | Copy “parcial ~63%” |
| P0-11 | W5 | Wire: legal **no** cuenta personal vs plan T+0 **cuenta personal transitoria** | Unificar escrow/tranche/empresa |
| P0-12 | W7 | `ZONIX_WORKSPACE.md` cifras **101/118/135k** sin histórico | Lean **237.412** + hist. |
| P0-13 | W8 | `product/FLUJO_PAGO_ORDEN.md` lexicon Eats + sin `pending_prescription_validation` | Reescribir Pharma + rama Rx |
| P0-14 | W8 | `product/logica-pagos-por-rol.md` «comida + envío» | Lexicon medicamentos |
| P0-15 | W8 | `active_context.md` paths `/home/aipp/Descargas/...` | Solo rutas repo |
| P0-16 | W8 | `BRAND` package `com.zonix.pharma` sin nota Android actual `com.zonix.eats` | Fila estado build + link MIGRACION |

### P1 — Coherencia / higiene (siguiente sprint docs)

| # | Tema |
|---|------|
| P1-01 | BRIEF / BRIEFING fechas vencidas; quitar Descargas en BRIEF |
| P1-02 | Cluster 500: TRIM `INFORME_FACIL` / Parte A CEO; canon = APRENDIZAJE + BARRA |
| P1-03 | `ROLES_SKILLS`: links rotos `ANALISIS_FORENSE.md`; postura AGENTS “no versionado” vs MD vivo |
| P1-04 | Pack Aliado: sync headers v5–v8; `manifest` doc 09 mal mapeado; títulos Growth ~187k |
| P1-05 | LA: pie FORENSIC_VIDEOS + REPASO jueces post-slim; v1.3.2→1.3.3; Documentos v1 supersedido |
| P1-06 | audits jun-2026 + ops/zonix: **~16+** links relativos rotos |
| P1-07 | `PROMPT_PACK_LANZAMIENTO_INVERSOR.md` aún Lean/Base/Growth default |
| P1-08 | `roles_matrix`: 5 skills AGENTS ausentes; `skills_count` 33 vs IDs únicos |
| P1-09 | Paths `~/Descargas` / PII emails/tel en CRM (`_intel`, FI, SVVE, VELA) |
| P1-10 | Línea explícita evidencia **pre-raise** vs hitos **post-wire** (~28 activas Day-D) |
| P1-11 | `PLAN_RX` «cifrado en disco» vs `PLAN_REGULATORIO` brecha app-level |
| P1-12 | `LOGICA_MODULO_PHONE` contradicción FKs §1 vs §4 |

### P2 — Mantenimiento

- Regenerar PDF `RESUMEN_COMPARATIVO` / docx BRIEFING / Excel cache tras FIX scores.
- Deadlines históricos (VIP50 10 ago, Casa212 15 ago, Gemini 17 ago) → marcar pasado.
- UUIDs subagente como “links” en forenses → texto plano.
- TRIM volumen `active_context` (~358 → ~80 líneas vivas).

---

## 4. Incoherencias de cifras (mapa)

| Tema | Canon | Drift detectado |
|------|-------|-----------------|
| Ask SAFE | **237.412** | CRM **~211k** (RESUMEN_FACIL 500, VELA FACIL); fichas **~174k**; workspace **101/118/135k**; Pack/prompts Base/Growth **~157/187k** sin hist. |
| Equity @ 600k | **~39,57%** | VELA / legacy **~35%** |
| LTV / LTV:CAC | UNIT **1.040 / ~7,5x** | CHECKLIST/PERFIL/skill **~7,2x** / LTV **1.000** |
| Contador+abogado | **330**/mes | MENSAJE Slide 7 **800** |
| Cash M6 | **~180.403** | PLAN DoD **~46.395** |
| Burn prom. | Detallado **~14.346** vs esc.1/12 **~14.143** | Nota faltante (no error si se documenta) |
| Excel metadatos | **14 hojas v4** | Pie **12 hojas v3.1** |

---

## 5. Paths personales / secretos de máquina

| Ubicación | Patrón |
|-----------|--------|
| `Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.md` | `/home/aipp/Descargas/...` |
| `Pack_Aliado/.../18_Guia_Modelo_Financiero.md` | mismo |
| `docs/active_context.md` | `/home/aipp/Descargas/...` (v4 y hist. v3) |
| `plantillas/PROMPT_PACK_...` | `/home/aipp/jarvis-startup/...` |
| `audits/AUDIT_landing_ia_...` | `/home/aipp/Descargas/hero` |
| CRM `_intel` / NOTAS VELA / Gemini / SVS | `~/Descargas/...`, workspace Cursor |

**Acción:** sustituir por rutas **relativas al repo** o “artefacto local founder (no versionado)”.

---

## 6. Mezcla LA / pack

| Check | Resultado |
|-------|-----------|
| Hugette / LFDA / IMPI / LegalAlternativo en `Lanzamiento/` | **0 hits** |
| Slim LA (sin analyses/transcripts en árbol) | **OK** |
| Riesgo residual | Prosa en FORENSIC_VIDEOS / REPASO que apunta a jueces post-slim (P1, no leak pack) |

---

## 7. Recomendaciones (sin auto-aplicar)

1. **Lote A (1–2 h):** P0-01…P0-06 + P0-11 + P0-15 (pitch + PLAN + FACIL 500 + wire + active_context paths).  
2. **Lote B (medio día):** barrido CRM **~174k** (P0-08) + scores (P0-07) + DROP VELA FACIL (P0-09).  
3. **Lote C:** `product/` Eats+Rx (P0-13/14) + BRAND package (P0-16) + workspace/prompt tiers (P0-12, P1-07).  
4. **Lote D:** links rotos ops/zonix/audits + higiene LA v1.3.3 + roles_matrix.  
5. **Skill:** actualizar `zonix-startup-context` LTV **1.040** / **~7,5x** en el mismo PR que CHECKLIST (evitar skill↔pack drift).

**Fuera de alcance esta pasada:** editar masivo pack, commit/push, re-Whisper, OCR PDF.

---

## 8. Inventario por carpeta

| Carpeta | MD |
|---------|-----|
| Inversionistas | 60 |
| Lanzamiento | 35 |
| Pack_Aliado_Gabriel_Barrios | 19 |
| audits | 12 (+ este informe = 13) |
| LegalAlternativo | 8 |
| zonix | 5 |
| plantillas | 5 |
| ops | 5 |
| product | 3 |
| runbooks | 2 |
| raíz + qa + PLAN_* + BRAND + active_context + README | 7 |
| **Total pre-informe** | **160** |

---

## 9. Fase 3 — Día del juicio (cerrado 2026-08-09)

| Juez | Lente | Score (1–5) | Real vs ruido (síntesis) |
|------|-------|-------------|--------------------------|
| **A** | Cifras / pack | **4** | REAL: 800↔330, cash M6, 211k/174k, LTV 7,2↔7,5. SOBRE-PESADO: P0-05 mom-test 25/40/55 (máx. P1); P0-09 DROP VELA entero; P0-12 workspace. Faltantes: espejos **46.395** (PERFIL + Pack 10/04); Epakon NOTAS «150k cubre Lean»; skill LTV |
| **B** | Higiene / LA / paths / DROP | **4** | REAL: paths ≥11 archivos, Eats en `product/`, frontera LA limpia, pie MODELO. RUÍDO parcial: P0-12 → **P1**. DROP seguro = pies `/home` + fix líneas 211k; **no** borrar RESUMEN_FACIL enteros |
| **Orquestador post-juicio** | | **3.8** | Informe usable; rebajar P0-05/P0-09/P0-12; ampliar P0-04 a espejos |

### Ajustes al informe tras jueces

| ID original | Acción |
|-------------|--------|
| P0-05 (pricing mom-test) | → **P1** (guía discovery acotada) |
| P0-09 (DROP VELA FACIL) | → **FIX in-place** línea 211k (no DROP archivo) |
| P0-12 (ZONIX_WORKSPACE 101/118/135k) | → **P1** (anti-ejemplo confuso, no canon) |
| P0-04 | Extender a `PERFIL_MERCADO` + Pack `10`/`04` |
| Nuevo | Epakon `NOTAS` «150k cubre Lean» → **P0** copy CRM |

### FIX after OK (lista consolidada, priorizada)

**Lote A — credibilidad pitch/CRM (1–2 h)**  
1. MENSAJE Slide 7: **800 → 330**.  
2. Cash M6 **46.395 → ~180.403** en PLAN + PERFIL + Pack Aliado 10/04.  
3. `500-latam/RESUMEN_FACIL` + VELA FACIL L47: ask **237.412** (no 211k).  
4. Epakon NOTAS: «150k cubre Lean» → parcial **~63%** de **237.412**.  
5. Barrido CRM **~174k / ~35% → 237.412 / ~39,57%**.  
6. Scores Epakon/Casa212: una fuente (comparativo **o** CEO).  
7. LTV **1.040 / ~7,5x** en CHECKLIST + PERFIL + skill `zonix-startup-context`.

**Lote B — higiene (mismo día o siguiente)**  
8. DROP pies MODELO + Pack 18 (`/home` + v3.1).  
9. Sanitizar `/home` y `~/Descargas` en `active_context`, plantillas, audits, CRM NOTAS.  
10. Unificar wire legal vs plan (escrow/tranche/empresa — no cuenta personal).  
11. Reescribir `product/FLUJO_PAGO_ORDEN` + fix «comida» en logica-pagos; BRAND nota Android `com.zonix.eats`.  
12. `ZONIX_WORKSPACE` L31: citar Lean **237.412**; quitar o etiquetar 101/118/135k.

---

## 10. Gate founder

**Estado:** forense + jueces **cerrados**. Score consolidado **~3.8/5**.  
**No aplicar FIX** hasta OK explícito del founder (lotes A/B o selección).

---

*Orquestador JARVIS — forense docs 360° 2026-08-09. Workers: W1–W8 readonly.*
