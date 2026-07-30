# AUDIT — MODELO_FINANCIERO_170726 v3.xlsx (Lean)

> **Snapshot auditoría 26/07/2026:** cifras del cuerpo son hallazgos del día; **canon vigente** = [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) / [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) (ask **210.760**, esc.1 FCF **+237.793**, cash M12 **398.293**).

> **Fecha:** 2026-07-26  
> **Fuente numérica:** `/home/aipp/Descargas/MODELO_FINANCIERO_170726 v3.xlsx` (etiqueta Detallado **v3.9.3**, 17-jul-2026)  
> **Método:** fan-out pack (4 workers) → extracción 14 hojas → 1 agente/hoja → síntesis → jueces adversariales (sección final)  
> **Alcance:** informe de hallazgos (26 jul). **Sync pack (misma fecha):** canon Excel **210.760** adoptado en BRIEF/README/skills + xlsx repo copiado.  
> **Skills:** `zonix-startup-context` → `zonix-financial-model` → `fan-out-synthesize-ops` → `parallel-judge-ops`

---

## 1. Veredicto

**Estado sync (26 jul 2026):** ask oficial congelado = **Excel Detallado 210.760**. Pack pitch + legal + presupuesto + MODELO.md/xlsx + skills alineados. Cash M12 / tabla §1.1 mes a mes = **`[PENDIENTE FP&A]`**. Hojas internas Año1/Flujo/ESTA del xlsx pueden aún mostrar **111.988 / 18,66%** — drift Excel interno, no ask de pitch.

| Canon | Ask Lean (USD) | Equity implícita @600k | Fase 0 | Burn M1–M12 | Reserva | Estado |
|-------|----------------|------------------------|--------|-------------|---------|--------|
| **Excel Detallado/Hoja3** (= pack pitch) | **210.760** | **~35,13%** | **50.260** | **145.500** | **15.000** | **VIGENTE** |
| **BRIEF intermedio (pre-sync)** | **~174.102** | **~29,02%** | **~50.260** | **~123.352** | **490** | **[OBSOLETO]** |
| **Pack legado** (PROYECCION §1.1 fila a fila / GaboTic hist.) | **~111.988** | **~18,66%** | **~33.835** | **97.290** | **490** | **histórico / `[PENDIENTE FP&A]`** |

- Dilución en hojas Año 2–5 / Flujo / ESTA puede seguir en **18,66%** hasta re-link Excel.  
- Repo `docs/Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx` = copia sync Descargas v3 (75K).

**Pendiente post-sync:** FP&A recalcula cash M12 + curva; unificar wire en Flujo/ESTA/Año1; Base/Growth recalibrar.

---

## 2. Anclas pack (síntesis workers A–D)

> **Snapshot pre-sync (26 jul AM).** Tras sync, ask vigente = §1 **210.760**. Cuerpo §2–§9 conserva hallazgos del día del juicio (no reescribir).

### Pitch (Worker A — BRIEF / README / CONTEXTO)

- Ask Lean canónico cabecera: **~174.102**; Fase 0 **~50.260**; burn Y1 **~123.352**; reserva **490**; caja Day-D **~123.842**; burn prom. **~10.279**/mes.  
- SAFE cap Lean **600.000**; equity **~29,02%** `[PENDIENTE decisión cap]`.  
- Tiers Base/Growth históricos **~157k / ~187k** (a recalibrar).  
- CONTEXTO y glosarios aún arrastran **~112k** y burn **~8.108**.  
- Xlsx conciliado citado: Descargas `MODELO_FINANCIERO_170726 v3.xlsx`.

### Proyección / unit / presupuesto (Worker B)

- Lean legado: wire **~111.988**; Fase 0 **~33.835**; Day-D **~78.153**; burn Y1 **97.290**; cash M12 **~40.831**.  
- ARPF **~50**; cuotas **25/40/55**; CAC **139**; LTV **1.000**; LTV/CAC **~7,2x**; payback **~2,8 m**; BE **~159–160** activas.  
- Conflicto UNIT vs PRESUPUESTO en burn Base (**~9.898** vs **~10.898**).

### Modelo MD (Worker C)

- MD repo = **v3.9.1 / 12 hojas** / SAFE **~111.988** — **no** es v3.9.3 pitch.  
- Spec Pizza layout B **no implementada**.  
- Disclaimer: no sumar Hoja1 + Hoja3 §B + ESTA al TOTAL SAFE.

### Legal / checklist (Worker D)

- ESTRUCTURA: Lean **~112k @600k → ~18,66%**; cap table founder **~81,34%**.  
- CHECKLIST: ask **~174–175k @600k → ~29,02%** `[PENDIENTE]`.  
- FAQ exige use-of-funds 100% y burn/runway coherentes — hoy el Excel no puede responder un único número.

---

## 3. Matriz hoja × ancla pack

| # | Hoja | SAFE / wire | Fase 0 | Burn / opex | Equity | vs pitch 174k | vs legado 112k |
|---|------|-------------|--------|-------------|--------|---------------|----------------|
| 1 | Detallado | **210.760** | **50.260** | burn **145.500** | **~35,13%** | drift ask/burn/reserva | drift |
| 2 | Hoja3 | **210.760** | **50.260** | **145.500** | **~35,13%** | drift | drift |
| 3 | Hoja1 | ref **210.760** | espejo | CapEx **11.675** | **~35,13%** | drift | drift |
| 4 | Hoja2 | — | — | Meta 800/500; valla **350** | — | missing | missing |
| 5 | ESTA SI VALE | Lean UI **111.988** | parcial | burn catálogo **8.108** | texto **18,66%** | drift | match parcial |
| 6 | Año 1 esc. 1 | **210.760** | cash ini 160.500 | costos **126.090** | 18,66% | drift (rev 364k) | drift |
| 7 | Año 1 esc. 2 | **111.988** | cash ini **160.500** (incoherente) | **97.290** | 18,66% | drift | SAFE/burn match; cash no |
| 8 | Año 1 GaboTic | **111.988** | cash ini 160.500 | **97.290**; O25 **59.968** | 18,66% | drift | P&L match; cash M12 **123.178** ≠ 40.831 |
| 9–12 | Año 2–5 | — | — | FCF hoja = rev (bug) | **18,66%** | missing 174k | wire vía Flujo |
| 13 | Flujo Total | wire **−111.988** | — | FCF correcto | **18,66%** | missing 174k | match wire |
| 14 | Tasa Crecimiento | — | — | Y1→Y2 rev **−72%** | — | cliff vs pitch | — |

---

## 4. Inconsistencias internas Excel (P0/P1)

### P0

1. **Trilema de ask:** 210.760 (Detallado) vs 174.102 (pitch) vs 111.988 (ESTA/GaboTic/Flujo wire).  
2. **Burn:** Detallado **145.500** vs ESTA **~8.108**/mes vs Año1 esc1 **126.090** vs pack **97.290** vs pitch **~123.352**.  
3. **Opex valla vs permiso HQ:** Hoja2 valla **350**/mes desde M3 (ESTA ~292 prorrateado). El ítem Detallado **G13=1.500** es **licencia/permisos municipales HQ (one-shot)**, no «valla/mes» — *corrección J1: el informe borrador maletiquetó esa celda*.  
4. **Cash ini Año 1:** las tres hojas Año1 usan **160.500** (=210.760−50.260) aunque esc2/GaboTic declaran SAFE **111.988**.  
5. **Founder fantasma:** Detallado G45=3.000 entra en subtotal MO Fase 0 21.375; Hoja3/Hoja1/ESTA omiten la fila pero conservan el subtotal.  
6. **Año 2–5 FCF:** en hojas anuales FCF mensual = revenue (no resta costos); Flujo Total sí resta (Y2 FCF=6.000).  
7. **ESTA:** celdas `#VALUE!` en bloque márgenes; tiers Lean aún en 111.988.

### P1

- Headers versión mezclados (Hoja3 E7 v3.9.1 vs K9 v3.9.3).  
- Hoja1 M6=4.300 etiquetado como burn mensual (es solo marketing; burn real Detallado 12.125).  
- Esc1 cuotas **45/60/70** ≠ pack **25/40/55**; GaboTic fuerza O25=59.968 con ajuste billing O24≈−40k.  
- Payback inversor Flujo: CCF Y5 **~97,94%** del wire 111.988 → etiqueta `[LARGO PLAZO]`.  
- Tasa Y1→Y2 revenue **−71,97%** (Y1 esc1 363.883 → Y2 102.000) — cliff narrativo.

### P2

- Comisiones variables “no en burn fijo”.  
- Activas Año3/4 saltos sin ramp mensual.  
- Y4–Y5 etiquetados SUPUESTO +25% mecánico.

---

## 5. Red flags inversor

| Flag | Por qué importa |
|------|-----------------|
| Tres asks / tres equities al mismo cap 600k | Due diligence rompe en minuto 1 |
| Pitch 174k ≠ Excel 210.760 | README dice que el xlsx Descargas es el conciliado — **no cuadra** |
| Dilución slides 18,66% vs ask 29% vs Excel 35% | Cap table ESTRUCTURA obsoleta vs ask |
| Utilidad Y1 +237k (esc1) vs FCF pack −37k (GaboTic) | Dos historias de rentabilidad |
| VAN/TIR altos con Y1 no comparable a Y2–Y5 | Modelo largo plazo no audit-ready |
| `#VALUE!` en ESTA | Señal de workbook no cerrado |

---

## 6. Diff vs repo

| Artefacto | Estado |
|-----------|--------|
| `docs/Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx` | Versión anterior (~58 KB, jun); **no** es el v3 Descargas |
| `MODELO_FINANCIERO_ZONIX_PHARMA.md` | v3.9.1 / ask ~112k |
| `PROYECCION_FINANCIERA_12M.md` / `PRESUPUESTO_*` | Anclas ~112k; cash M12 ~40.831 |
| `BRIEF_UNA_PAGINA.md` / README cabecera | Ask ~174.102; marca xlsx Descargas como fuente — **números Excel actuales = 210.760** |
| `ESTRUCTURA_LEGAL_Y_EQUITY.md` | Cap table 18,66% / 112k |

---

## 7. Recomendaciones priorizadas

1. **HITL founder:** elegir ask oficial — **A)** Excel 210.760, **B)** pitch 174.102 (recalcular Excel), **C)** legado 112k (revertir pitch).  
2. Propagar: Fase 0, burn, reserva, Day-D, equity %, wire Flujo, ESTA tiers, labels Año1.  
3. Confirmar valla **350** en burn Detallado (y no confundir con licencia HQ **1.500** one-shot).  
4. Exponer fila **Founder** en espejos Hoja3/Hoja1/ESTA.  
5. Corregir FCF Año 2–5 (= rev − costos) o marcar hojas como “ingresos only”.  
6. Reparar `#VALUE!` ESTA.  
7. Sync: copiar xlsx Descargas → repo + actualizar MD/PROYECCION/ESTRUCTURA **solo tras** paso 1.  
8. Marcar cash M12 / BE como `[PENDIENTE FP&A]` hasta cierre.

---

## 8. Fichas por hoja (resumen ejecutivo)

Detalle completo en outputs de agentes de hoja (sesión 2026-07-26). Resumen:

1. **Detallado** — Canon SAFE 210.760; validación G93=0; CapEx 11.675 dentro de one-shots 22.365.  
2. **Hoja3** — Use-of-funds 100% = Detallado; Founder omitido en filas.  
3. **Hoja1** — Espejo CapEx; advertencia no sumar CapEx al SAFE.  
4. **Hoja2** — Meta/valla drivers (valla 350); Detallado G13=1500 es licencia HQ one-shot (no valla).  
5. **ESTA** — UE pack (50/139/7,2x); Lean UI 111.988; `#VALUE!`.  
6. **Año1 esc1** — Pricing alto; rev 364k; SAFE 210.760.  
7. **Año1 esc2** — Híbrido SAFE 112k + cash 160.5k.  
8. **GaboTic** — Pack comercial; FCF −37k; cash M12 123k ≠ 40.8k.  
9–12. **Año2–5** — Largo plazo; bug FCF; dilución 18,66%.  
13. **Flujo** — Wire −111.988; VAN5≈219k; payback no cierra Y5.  
14. **Tasa** — Y1→Y2 −72%.

---

## 9. Veredicto jueces (parallel-judge-ops)

Jueces independientes (no compartieron hallazgos). Orquestador clasifica **real vs ruido**.

### Scores

| Juez | Rúbrica | Score |
|------|---------|-------|
| **J1** coherencia financiera | Calidad del informe vs evidencia Excel | **6.5 / 10** |
| **J2** due diligence inversor | Readiness pitch | **2 / 10** (no mostrar) |

### Clasificación orquestador

| Hallazgo | Fuente | Clasificación | Acción |
|----------|--------|---------------|--------|
| Trilema ask 210.760 / 174.102 / 111.988 | J1 parcial + J2 real | **REAL** (Excel+Flujo/ESTA confirmados; 174k vía pack workers — re-spot BRIEF recomendado) | HITL congelar ask |
| SAFE Excel 50.260+145.500+15.000=210.760; espejo Hoja3 | J1 confirmado | **REAL** | Canon interno Excel |
| Dilución 18,66% vs 29% vs 35% | J1+J2 | **REAL** | Una cap table |
| Burn múltiples / runway | J1 parcial (mezcla unidades) + J2 real | **REAL** (con matiz: no comparar 8.108/mes con 145.500/año sin normalizar; esc1 126k = costos P&L ≠ burn Detallado) | Un burn oficial |
| Cash ini 160.500 con SAFE 111.988 | J1+J2 | **REAL** | Alinear por escenario |
| FCF Año2–5 = revenue; Flujo OK | J1+J2 | **REAL** | Fix o no mostrar IRR |
| Founder fantasma 3.000 | J1+J2 | **REAL** | Exponer fila |
| «Valla Detallado 1.500/mes» | J1 **falso** | **RUIDO / error del informe** | Corregido en §4: es licencia HQ one-shot |
| Pitch xlsx “conciliado” no concilia | J2 | **REAL** | Sync post-HITL |
| Dos P&L Y1 (+237k vs −37k) | J2 | **REAL** | Una base pitch |
| `#VALUE!` ESTA / versiones mezcladas | J2 | **REAL** (higiene) | Reparar |
| Spec Pizza / MD desfasado | J2 | **RUIDO para DD 10 min** | Sync después |
| CapEx 11.675 “puro” | J1 parcial | **PARCIAL** | G81 incluye alquiler Fase 0 + CapEx |

### Conclusión post-jueces

El veredicto §1 (**no listo para pitch**) se **mantiene**. Corrección material al informe: retirar P0 «valla 1.500/mes». Prioridad founder = preguntas J2 (ask, %, burn, P&L Y1, reserva/cash M12).
