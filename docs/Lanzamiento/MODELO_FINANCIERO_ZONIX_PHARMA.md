# Modelo Financiero Zonix Pharma — gastos, ingresos y egresos

> **Última actualización:** 26 julio 2026 (**v3.9.3 Excel** — sync desde Descargas `MODELO_FINANCIERO_170726 v3.xlsx`).
> **Propósito:** consolidado único para **inversor**, **FP&A** y aliados. Espejo versionado de [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx).
> **Canon Lean:** SAFE **USD 210.760** = Fase 0 **50.260** + burn M1–M12 **145.500** + reserva **15.000**; Day-D **160.500**; equity **~35,13%** @ cap **600k**; burn prom. **~12.125**/mes.
> **Hojas:** **14** (Detallado, Hoja3, Hoja1, Hoja2, ESTA SI VALE, Año 1 esc.1/esc.2, Año 2–5, Flujo Total, Tasa Crecimiento).
> **Generador legacy:** [`_tools/generate_modelo_financiero_v2.py`](_tools/generate_modelo_financiero_v2.py) puede no regenerar v3.9.3 — fuente operativa = xlsx sync. `.fods` puede quedar desfasado.
> **No sustituye:** contador SENIAT ni dictamen abogado.

## S0 — Visual template Pizza QLQ (piel v3.9.1)

El Excel **v3.9.1** adopta la **apariencia** del template inversor `Propuesta_Pizza QLQ.xlsx` (colores, fuentes, merges, anchos, zoom). La **lógica financiera Zonix** (SAFE, farmacias, filas resumidas en Flujo Total, IRR col J) **no cambia**.

**v3.9.1 (merges):** helpers `merge_cols`, `style_block_title_merge`, `style_subtotal_yellow_row` en [`pizza_visual_theme.py`](_tools/pizza_visual_theme.py). Patrón Pizza replicado en geometría **E:F** (descripción ancha) y **E:I** (títulos de bloque) en espejos **Hoja3**, **Hoja1**, **ESTA SI VALE**; banner **AÑO n** merge **C:N** en hojas Año; subtotales espejo en amarillo `#FFFF00`. Panel lateral Hoja1 desplazado a **L–M** (libera col J para **% SAFE**). Verify: ≥30 merges Hoja3/ESTA, ≥20 Hoja1.

| Elemento | Valor Pizza QLQ | Uso en Zonix v3.9 |
|----------|-----------------|-------------------|
| Verde banner | `#00B050` | Título Detallado, Hoja3, Hoja1, ESTA |
| Header púrpura | `#AC75D5` | ITEMS/DATOS, headers tabulares |
| Lavanda premisas | `#D1B2E8` | Filas alternadas premisas Flujo / Años |
| Naranja años | `#FFC000` | Headers Año 1–5 en Flujo Total y Tasa |
| Rojo TOTAL | `#FF0000` | Columna TOTAL Flujo Total |
| Amarillo subtotales | `#FFFF00` | Subtotales Detallado / totales FCF |
| Fuente Flujo/Tasa | Aptos Narrow 9pt | Métricas VAN/TIR/payback |
| Fuente Años | Arial 8pt | Bloque premisas B:C |
| Zoom Detallado / Hoja3 / ESTA | 64 / 60 / 70 | `finish_pizza_sheet` |

**Disclaimer reunión:** la paleta verde/púrpura es **familiaridad formato QLQ**, no branding final Zonix Pharma ([`BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md) navy/teal sigue en producto). Contenido = marketplace + SAFE, **no** reparto 70/30 Pizza. Canon pitch = Excel Detallado / Hoja3 (ask **210.760**); no hay spec layout Pizza separada en el pack.

## Convenciones

| Etiqueta | Significado |
|----------|-------------|
| *(ancla pack)* | Cifra citada en PROYECCION / UNIT / PRESUPUESTO / ESTRUCTURA_LEGAL |
| `[SUPUESTO MODELO]` | Extensión del pack para años 4–5, sensibilidad o valoración — recalibrar post-piloto |
| `[LARGO PLAZO — no ancla pre-seed]` | Años 2–5 direccionales; no usar en pitch pre-seed sin disclaimer |
| **Ilustrativo SAFE** | Reparto de flujos **no vinculante** — el SAFE convierte en Serie A, no reparte dividendos hoy |

**Calendario:** **T+0** = wire capital · **Day-D = T+90** = inicio M1 comercial · **M1–M12** = primer año post-Day-D.

### Índice de hojas Excel (v3.9.3 — 14 hojas; piel QLQ en espejos)

| Hoja Excel | Sección MD | Contenido |
|------------|------------|-----------|
| **Detallado de la inversión.** | S2 | Constitución C.A. ~5.050 · intro/HQ one-shots · MO Fase 0 (incl. **Dev**) · Fase 0 bottom-up · use of funds · **resumen lateral K–M** |
| **Hoja3** | S2.5 | **Sección A** use-of-funds (100%) · **Sección B** desglose operativo (enlace Detallado + disclaimer + puente cross) · **lateral espejo Detallado** + timeline 0a–0c · **merges E:F / E:I** |
| **Hoja1** | S2.1c | **Vista Pizza 8 bloques** (equipos, adecuación, MO, transporte, alquiler, constitución, marketing, materia) — espejo **Detallado** + col **J % SAFE** + panel **L–M** · subtotales amarillos |
| **Hoja2** | S3 | Tramos Meta / valla (referencia mensual) |
| **ESTA SI VALE** | S1 + S4 | **Espejo Pizza v3.9.1:** merges bloque + col **K** ref. Año 2 · simulador M1-M12 · panel unit economics (col M) · burn → Año 1 |
| **Año 1** … **Año 5** | S3 + S5 | P&L mensual · costos ESTA · **cash ini/final = fórmulas** (A1) · banner **AÑO n** merge C:N |
| **Flujo Total** | S6 | Consolidado 5 años, CCF **`$C$6` equity**, TIR/payback sobre CCF acum |
| **Tasa Crecimiento** | S7 | Drivers **enlazados** a hojas Año (activas, revenue, burn prom.) |

---

## S1 — Supuestos y unit economics

*(Equivalente hoja «ESTA SI VALE» del ejemplo Pizza QLQ.)*

### S1.1 Producto y modelo de ingreso

| Concepto | Valor | Fuente |
|----------|-------|--------|
| Producto | Marketplace farmacéutico B2B2C (OTC + Rx), Valencia piloto | README pack |
| Revenue B2B | Cuota fija **USD 45 / 60 / 70** + **% GMV** por banda | PROPUESTA_VALOR_CLIENTE_B2B §5 (esc.1 Excel v3.9.3) |
| ARPF placeholder | **USD ~50/mes** por farmacia activa | UNIT_ECONOMICS |
| Mix tier (planning) | 60% Basic / 30% Pro / 10% Enterprise | PROYECCION §1.2 |
| Margen bruto plataforma | **~92%** (sin logística del medicamento) | UNIT_ECONOMICS §8 |
| GMV / take-rate (año 2+) | Documentar cuando haya GMV piloto | `[PENDIENTE GMV]` |

### S1.2 Unit economics (ancla pack)

| Métrica | Valor |
|---------|-------|
| CAC farmacia | **USD 139** |
| Churn mensual (target) | **5%** |
| Lifetime promedio | **20 meses** |
| LTV | **USD 1.000** |
| LTV / CAC | **~7,2x** |
| Payback CAC | **~2,8 meses** |
| Farmacias activas M12 (esc.1) | **159** — con **4× Sales** v3.9.3: FCF **+237.793** Y1 (positivo desde M1 con pricing 45/60/70 + % GMV) |
| Equilibrio mensual (esc.1) | **M1** — revenue 11.960 > burn 10.411 desde el primer mes |

### S1.2b Equipo y sueldos Lean *(esc.1 v3.9.3 — USD/mes, base; comisiones Sales aparte)*

| Rol | Lean (esc.1) |
|-----|------|
| CEO | 1.000 |
| Founder CEO/CTO | 1.000 |
| Co-CEO Head Sales&Ops | 1.000 |
| **Dev (Flutter/Laravel)** | **1.000** *(esc.1: Dev x2 @ 1.000)* |
| Sales B2B (base c/u) | **4×** 350 |
| CS + Community Manager | 500 |
| Contador + Abogado (incl. asesor regulatorio 120) | 330 |
| Herramientas IA | 425 |
| HQ + servicios + hosting | 734 |

> **Benchmarks VE 2026:** AVGH oct-2025 (profesional pleno ~785; gerencia media ~1.563). Dev local 600–1.000; Sales B2B base 150–1.000 + comisión. Lean documenta sueldos **bajo mercado** a cambio de ticket menor — validar contratos `[PENDIENTE]`.

### S1.3 Instrumento SAFE *(canon v3.9.3 — ask único)*

| Término | Valor |
|----------|-------|
| **Tier** | **Lean** (4× Sales bootstrap Carabobo) |
| Capital SAFE | **USD 210.760** |
| SAFE post-money cap | **USD 600.000** |
| Equity implícito si cap aplica | **~35,13%** *(210.760 / 600k)* |
| Burn prom. mensual | **~12.125** |

### S1.4 Premisas valoración `[SUPUESTO MODELO]`

| Premisa | Valor | Nota |
|---------|-------|------|
| Inversión inicial (wire T+0) | **−USD 210.760** | Escenario Lean Excel v3.9.3 |
| Tasa de descuento (VAN) | **25%** | Referencia pre-seed LatAm; no WACC auditado |
| Horizonte VAN | 3 y 5 años | Post Day-D |
| Reparto flujos ilustrativo | **~35,13%** inversor / **~64,87%** founder | **No** es cláusula SAFE; solo escenario didáctico |

---

## S2 — Inversión detallada y Fase 0 (use of funds)

*(Equivalente «Detallado de la inversión» — v3.1 con **resumen lateral** cols K–M tipo plantilla Pizza QLQ.)*

### S2.0 Mapping Pizza QLQ → Zonix *(solo estructura UX; rubros físicos excluidos)*

| Bloque Pizza QLQ | Bloque Zonix v3.7 (Hoja1) | Nota |
|------------------|---------------------------|------|
| **Equipos** (hornos ~16k) | **4 PCs** **3.700** | CapEx tecnológico SaaS |
| **Adecuación** (~14k Pizza) | Depósito + adecuación HQ **1.650** | Parte de HQ **5.350** total |
| Mano de obra | MO Fase 0 (×3 meses) + **MO operativa post-Day-D** (USD/mes en Detallado) | Sales comisiones **aparte** (ESTA, variable) |
| Transporte refrigerado | Transporte B2B (referencia) + contingencia burn | Sin flota propia |
| Constitución + permisos | Constitución C.A. **5.050** | **Sin** BPF/CPE/permisos farmacia aliada |
| Intro 3 meses | Intro demo + marketing pre + **video B2B 800** | One-shots **~22.365** (legal+intro+HQ CapEx incl. alquiler Fase 0) |
| Marketing mensual | Bloque desglosado en Detallado + ESTA/Año 1 | **No suma** al TOTAL SAFE (anti triple-conteo) |
| Materia prima | N/A → Hosting/SaaS/SMS **~154/mes** | Footnote SaaS **120** + SMS **34** |
| Total + % equity | TOTAL SAFE **210.760** + resumen lateral **~35,13%** | Cap ref. 600k |

### S2.1 One-shots Fase 0 — Lean *(ancla v3.9.3)* — ver hoja **Detallado de la inversión.**

| Rubro | Total USD |
|-------|-----------|
| **Constitución empresa** (Registro+acta, SENIAT, municipales HQ, bomberos, banco, sello, SAPI) | **5.050** |
| **Intro mercado** (web, brochures, tablets demo, visitas, reservas, tarjetas, **video pitch B2B**) | **5.640** |
| **HQ + CapEx** (amueblado, adecuación, 4 PCs, impresora, alquiler Fase 0 3×750) | **11.675** |
| **Total one-shots Lean** | **22.365** |

> Pack documental conservador **1.150–1.450** en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) §1.4. Excel v2.4 usa costos **sinceros** de constitución C.A. + local HQ (referencia trámites reales VE). **No** incluye BPF, CPE ni permisos sanitarios de operación farmacéutica.

### S2.1c Hoja1 — Vista Pizza 8 bloques *(datos ZonixPharma, v3.7)*

Plantilla Pizza **Hoja1** lista equipos, adecuación, MO, transporte, alquiler, legal, marketing y materia en una pestaña. Zonix **v3.7** replica esa estructura con **espejos read-only** al Detallado (cero montos Pizza hardcoded).

| # | Bloque Hoja1 | Contenido Zonix | Ancla / fuente |
|---|--------------|-----------------|----------------|
| 1 | **equipos** | 4 PCs operativos | **3.700** · `pc_start`…`pc_end` |
| 2 | **adecuación** | Depósito + amueblado + pintura/señalética | **1.650** · filas HQ iniciales |
| 3 | **mano de obra** | MO Fase 0 × 3 meses | `subtotal_mo_fase0` |
| 4 | **transporte** | Transporte B2B (ref.) | `subtotal_transporte_ref` |
| 5 | **alquiler** | HQ casa USD/mes post-Day-D | `hq_alquiler_row` (~500/mes) |
| 6 | **constitución empresa y permisos** | C.A. VE (sin BPF/CPE farmacia) | **5.050** · `subtotal_legal` |
| 7 | **marketing** | Intro demo + mkt pre 3 meses | **3.808** + **~2.250** |
| 8 | **materia** | Hosting/SaaS/SMS marketplace | **~154/mes** · `hosting_saas_row` + ESTA |

| Elemento transversal | Detalle |
|---------------------|---------|
| Col **I % SAFE** | Espejo Detallado col H en cada línea |
| Panel | CapEx HQ ref · TOTAL SAFE **210.760** · burn · reserva **15.000** · % equity **~35,13%** |
| Disclaimer | Datos ZonixPharma — **no sumar bloques al TOTAL SAFE** (one-shots en Hoja3 §A) |

> **Reunión:** **Hoja1** = misma estructura visual que Pizza, rubros Zonix. Use-of-funds oficial = **Hoja3 §A**. Drill-down = **Detallado**. Unit economics = **ESTA**.

### S2.1d ESTA SI VALE — Espejo template Pizza *(v3.8 / v3.8.1 / v3.8.2)*

Pizza concentra en **ESTA** el desglose operativo + simulador de utilidad. Zonix **v3.8** replica esa lógica con datos marketplace (sin COGS pizza ni BPF/CPE).

**v3.8.1 (fix col J):** en Zonix **col H = Total USD** y **col I = % SAFE** (distinto a Pizza donde I = total). Factores escalación (+40% MO, +30% transporte, −50% intro) van en **filas dedicadas** antes de cada bloque; fórmula Año 2 = `H×(1+factor)` — sin referencias circulares.

**v3.8.2 (layout compacto):** burn catálogo y simulador marketplace comparten la **misma fila inicial** (justo debajo de los bloques inversión), como en Pizza — sin hueco de ~30 filas entre secciones. Bandas gastos fijos SaaS (col P) más densas (filas 12/17/22).

| Sección ESTA | Equivalente Pizza | Contenido Zonix |
|--------------|-------------------|-----------------|
| **A — Bloques inversión** (cols E–J) | MO admin, transporte, legal, intro | Espejo Detallado: MO Fase 0, transporte B2B, constitución C.A., intro + mkt pre · col **J** escalación Año 2 ref. |
| **B — Gastos fijos** (cols P–Q) | Bandas utilidad 70-50% / 60-40% / 50-30% | 3 escenarios margen SaaS · ref. burn÷activas — **no sumar SAFE** |
| **C — Simulador** (cols O–W) | Grid 8 meses cantidad×precio×utilidad | **M1-M12** farmacias activas × ARPF vs burn · enlaces **Año 1** · stress **P10** ARPF 40 |
| **D — Panel unit economics** (col M+) | — (Pizza no tiene SaaS metrics) | LTV/CAC, tiers, P10/P50/P90 (conservar v3.7) |
| **Burn Detallado / Hoja3** | — | **~12.125/mes** → **145.500**/Y1 (canon ask). Esc.1 P&L: **10.411 / 10.747 / 10.380**. |

> **Reunión:** **ESTA** = single pane due diligence (como Pizza). CapEx equipos/HQ → **Hoja1**. TOTAL SAFE → **Hoja3 §A**. No sumar bloques ESTA + Hoja1 + Hoja3.

### S2.1b Desglose Detallado (no one-shots)

| Bloque | Contenido | Nota |
|--------|-----------|------|
| **Mano de obra Fase 0** | Founder, Co-CEO, **Dev**, **4× Sales**, CS, IA, legal/contador × 3 meses | Incluida en **Fase 0 50.260** |
| **MO operativa post-Day-D** | Misma nómina, USD/mes | Espejo burn Año 1 — **no duplicar** en TOTAL SAFE |
| **Transporte B2B** | Visitas, logística demo, eventos | **~500** en intro + **~280/mes** en burn |
| **Marketing mensual** | Meta, valla, hosting, contingencia — **montos en Detallado** | Enlaza ESTA; nota anti-duplicado |
| **Sales comisiones** | **~40 USD/firma** × curva firmadas (prom/mes en ESTA) | Variable — no en burn fijo Lean |
| **Materia prima** | **No aplica** (marketplace SaaS) | Equivalente: hosting/SaaS/SMS en ESTA **~154/mes** |

### S2.2 Outflow Fase 0 (T+0 → Day-D)

| Sub-fase | Período | Outflow USD |
|----------|---------|-------------|
| **0a** | T+0–30 | **33.010** (one-shots 22.365 + transporte + mes 1 MO/renta/mkt) |
| **0b** | T+30–60 | **8.625** (MO 7.125 + renta 750 + mkt pre 750) |
| **0c** | T+60–90 | **8.625** (MO 7.125 + renta 750 + mkt pre 750) |
| **Total Fase 0** | | **50.260** |
| **Caja al Day-D (inicio M1)** | | **160.500** *(210.760 − 50.260)* |

### S2.3 Use of funds — Lean 12 meses *(ancla v3.9.3 — aritmética cerrada)*

| Concepto | USD |
|----------|-----|
| **Fase 0** (T+0→Day-D: one-shots 22.365 + operativa 27.895) | **50.260** |
| Burn operativo M1–M12 | **145.500** |
| Reserva caja | **15.000** |
| **Total capital SAFE Lean** | **210.760** |

> **Validación aritmética:** 50.260 + 145.500 + 15.000 = **210.760** ✓ (canon Excel v3.9.3). Desglose Fase 0: one-shots (legal+intro+HQ CapEx **incl. alquiler Fase 0**) **22.365** + operativa (MO+mkt+transporte) **27.895** = **50.260**.

### S2.5 Hoja3 — resumen inversión *(layout Pizza QLQ adaptado, v3.5.2)*

Plantilla de referencia: **Hoja3** de Propuesta Pizza QLQ («Pizzas congeladas» — MO, legal, intro, materia prima). Zonix **vuelca la data del Detallado** sin duplicar montos ni BPF/CPE/materia prima.

| Sección Hoja3 | Contenido | % sobre TOTAL SAFE |
|---------------|-----------|-------------------|
| **A — Use of funds** | One-shots (legal+intro+HQ) · Burn M1–M12 · Reserva · **TOTAL % = SUM(H11:H13)** | **Sí — suma 100%** (~13% / ~87% / <1%) |
| **B — Desglose operativo** | Banner *informativo — no sumar bloques al TOTAL SAFE* · Constitución · Intro · Mkt pre · MO Fase 0 · Transporte ref. · HQ · footnote SaaS · **Validación cross (ops burn)** · Subtotal Fase 0 | **No** (informativo; orden legal-first como Detallado) |
| **Lateral K–M** | **Espejo Detallado:** one-shots · Fase 0 operativa (cross) · sub-fases **0a/0b/0c** · Caja Day-D · Burn · Reserva · TOTAL SAFE · % equity (fórmula) · ref. MO/mkt mensual + enlace **→ ESTA SI VALE** | No |

> **Disclaimer on-sheet (Sección B):** *«Informativo — no sumar bloques al TOTAL SAFE. Subtotal Fase 0 = modelo timing 0a–0c, no suma de columnas visibles.»* La fila **Validación: Fase 0 − one-shots − mkt pre (ops burn)** enlaza `cross_ops_fase0` del Detallado y cierra el gap ~1,9k entre suma de bloques visibles y subtotal timing.

> **Disclaimer reunión:** no sumar % de la Sección B como si fueran slices del SAFE. **Fase0 + Burn + Reserva ≈ 118%** del SAFE — trampa numérica documentada en verify; solo la **Sección A** suma 100%. Marketing pre (~2.250) está **dentro de Fase 0**, no en one-shots. Equivalente Pizza «materia prima» → footnote **SaaS ~154/mes** (**ESTA SI VALE**).

#### S2.5.1 Mapping Pizza QLQ → bloques Hoja3 Sección B

Tabla detallada de rubros (Detallado + MO post-Day-D): ver **[S2.0](#s20-mapping-pizza-qlq--zonix-solo-estructura-ux-rubros-físicos-excluidos)**. Resumen solo **Hoja3 Sección B**:

| Bloque Pizza (Hoja3) | Bloque Zonix (Hoja3 Sección B) | Hoja fuente |
|----------------------|--------------------------------|-------------|
| MO administrativa | Mano de obra Fase 0 (3 meses) | Detallado |
| Transporte refrigerado | Transporte B2B (referencia) | Detallado |
| Constitución + BPF/CPE | Constitución C.A. (sin BPF/CPE) | Detallado |
| Intro 3 meses | Intro mercado + Marketing pre-lanzamiento | Detallado |
| HQ / equipamiento | HQ y CapEx | Detallado |
| Materia prima | Footnote SaaS (~154/mes en ESTA) | texto + enlace ESTA |
| — | Validación cross (ops burn) | Detallado `cross_ops_fase0` |
| — | Subtotal Fase 0 (T+0→Day-D) | Detallado |

---

## S3 — Año 1 — flujo mensual Lean (M1–M12)

*(Equivalente hoja «Año 1».)*

**Convención ingreso:** revenue = placeholder **ARPF ~50** × dinámica de activas (PROYECCION §1.1). **Egresos:** burn por tramo incluye todas las líneas §2.3 PRESUPUESTO.

### S3.1 Tabla operativa mes a mes *(ancla esc.1 Excel v3.9.3 — pricing 45/60/70 + % GMV)*

| Mes | Firmadas (altas) | Activas (cierre) | Ingresos USD | Egresos (burn) USD | FCF mensual | FCF acumulado |
|-----|------------------|------------------|--------------|-------------------|-------------|---------------|
| 1 | 13 | 40 | 11.960 | 10.411 | +1.549 | 1.549 |
| 2 | 13 | 51 | 15.249 | 10.411 | +4.838 | 6.387 |
| 3 | 14 | 62 | 18.538 | 10.747 | +7.791 | 14.178 |
| 4 | 15 | 74 | 22.126 | 10.747 | +11.379 | 25.557 |
| 5 | 15 | 85 | 25.415 | 10.747 | +14.668 | 40.225 |
| 6 | 16 | 97 | 29.003 | 10.747 | +18.256 | 58.481 |
| 7 | 16 | 108 | 32.292 | 10.380 | +21.912 | 80.393 |
| 8 | 16 | 119 | 35.581 | 10.380 | +25.201 | 105.594 |
| 9 | 17 | 130 | 38.870 | 10.380 | +28.490 | 134.084 |
| 10 | 17 | 141 | 42.159 | 10.380 | +31.779 | 165.863 |
| 11 | 17 | 151 | 45.149 | 10.380 | +34.769 | 200.632 |
| 12 | 16 | 159 | 47.541 | 10.380 | +37.161 | **237.793** |
| **Total año 1** | **185** | **159** *(M12)* | **363.883** | **126.090** | **+237.793** | — |

> **Lectura Excel esc.1:** FCF Y1 **+237.793** (positivo desde M1). Revenue Y1 **363.883** (cuota fija 45/60/70 + comisión % GMV). Cash M12 **398.293** (160.500 + 237.793).

### S3.2 Desglose egresos recurrentes — hoja **Año 1** (filas por rubro × Mes 1–12)

> Totales esc.1: burn tramo A **10.411** / B **10.747** / C **10.380** → Total Y1 **126.090**. Desglose completo por rubro: hoja **"Año 1 escenario 1"** del Excel v3.9.3. Diferencia vs burn Detallado **145.500** (12.125/mes) = comisiones Sales + items no incluidos en Año 1 esc.1 — `[PENDIENTE FP&A reconciliar]`.

| Línea | USD/mes (referencia) | Tramo / nota |
|-------|----------------------|--------------|
| Dev (Flutter/Laravel) | **1.000** | Fijo *(esc.1: Dev x2 @ 1.000)* |
| 4× Sales B2B (base) | **1.400** | Fijo (350 c/u) |
| CS + Community Manager | **500** | Fijo |
| CEO + Founder + Co-CEO | **3.000** | Fijo |
| Herramientas IA | **425** | Fijo |
| Contador + Abogado | **330** | Fijo |
| HQ casa | **500** | Fijo |
| Servicios oficina | **80** | §2.3.1 PRESUPUESTO |
| Hosting + SaaS + Firebase OTP | **154** | §2.3.1 PRESUPUESTO |
| Meta Ads | **800** M1–6 · **500** M7–12 | Variable por tramo (Año 1) |
| Valla pequeña 3m×2m | **350** M3+ · **0** M1–2 | Variable (Año 1) |
| Material + transporte + contingencia | **1.322** M1–2 · **1.308** M3–6 · **1.241** M7–12 | Incluye buffer VE 20% |
| **Burn tramo A** (M1–2) | **10.411** | Total fila «Total Costos» |
| **Burn tramo B** (M3–6) | **10.747** | |
| **Burn tramo C** (M7–12) | **10.380** | |

> Costos fijos enlazados a **ESTA SI VALE** col. I; Meta/valla/contingencia por tramo en Año 1. Sin fila «Cuadre buffer» visible.

### S3.3 Cash deployment *(ancla PROYECCION §1.3)*

**v2.2:** filas **Cash inicial mes** y **Cash final mes** en **Año 1** son **fórmulas vivas**:

- **M1 cash ini** = Caja al Day-D Excel **160.500** (210.760 − 50.260).
- **Cash final mes** = cash ini + Total Ingresos − Total Costos (por mes).
- **M2+ cash ini** = cash final del mes anterior.

| Mes | Cash inicial | Inflow | Outflow | Cash final |
|-----|--------------|--------|---------|------------|
| Day-D (M1) | 160.500 | 11.960 | 10.411 | 162.049 |
| 2 | 162.049 | 15.249 | 10.411 | 166.887 |
| 3 | 166.887 | 18.538 | 10.747 | 174.678 |
| 4 | 174.678 | 22.126 | 10.747 | 186.057 |
| 5 | 186.057 | 25.415 | 10.747 | 200.725 |
| 6 | 200.725 | 29.003 | 10.747 | 218.981 |
| 7 | 218.981 | 32.292 | 10.380 | 240.893 |
| 8 | 240.893 | 35.581 | 10.380 | 266.094 |
| 9 | 266.094 | 38.870 | 10.380 | 294.584 |
| 10 | 294.584 | 42.159 | 10.380 | 326.363 |
| 11 | 326.363 | 45.149 | 10.380 | 361.132 |
| 12 | 361.132 | 47.541 | 10.380 | **398.293** |

> **Lectura esc.1 v3.9.3:** cash M12 **398.293** (160.500 caja Day-D + 237.793 FCF Y1).

---

## S4 — Sensibilidad Lean y escenarios

### S4.1 Escenario Lean *(canon v3.9.3 — ask único)*

| Concepto | Lean 210.760 (canon) |
|----------|------------|
| Burn prom. mensual | 12.125 |
| One-shots (legal+intro+HQ CapEx) | 22.365 |
| Fase 0 total (T+0→Day-D) | 50.260 |
| Reserva caja | 15.000 |
| Activas M12 (curva Lean) | ~159 |
| Firmas Y1 | ~185 |
| Sales en nómina | 4× @ 350 |
| Curva comercial | ×1,0 |
| Dev en nómina | 1.000 (esc.1) |
| Cash M12 | **398.293** |
| FCF Y1 | **+237.793** |

### S4.2 Escenarios P10 / P50 / P90 *(PROYECCION §6)*

| Escenario | Prob. | Activas M12 | ARPF | Revenue M12 (ord.) | Cash M12 (ord.) |
|-----------|-------|-------------|------|-------------------|-----------------|
| **P10 pesimista** | 20% | ~120 | 40 | ~4.800 | ~25.000 |
| **P50 base** | 50% | ~159 | ~50 | ~47.541 | **398.293** |
| **P90 optimista** | 30% | ~200 | 55 | ~11.000 | ~52.000 |

### S4.3 Sensibilidad unit economics

| Variable | Base | Rango | Impacto |
|----------|------|-------|---------|
| ARPF | 50 | 35–55 | Equilibrio ~160 → ~232 (ARPF 35) o ~145 (ARPF 55) |
| CAC | 139 | 90–170 | LTV/CAC 7,2x → 5,9x–11,1x |
| Churn | 5% | 3–7% | LTV 1.000 → 650–1.650 |

---

## S5 — Año 2 a 5 — proyección anual

*(Equivalente hojas «Año 2»–«Año 5» + extensión.)*

> **`[LARGO PLAZO — no ancla pre-seed]`** — rangos de [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §2–§3; años 4–5 `[SUPUESTO MODELO]`.

### S5.1 Resumen anual consolidado

| Año | Farmacias activas (cierre) | Revenue anual USD | Costos anual USD | FCF anual USD | Nota |
|-----|----------------------------|-------------------|------------------|---------------|------|
| **1** (M1–M12) | 159 | **363.883** | **126.090** | **+237.793** | *(esc.1 v3.9.3)* |
| **2** | ~220 | **~102.000** | **~96.000** | **~6.000** | PROYECCION §2.3 (mid-range) |
| **3** | ~440 | **~192.000** | **~108.000** | **~84.000** | PROYECCION §3.2 conservador |
| **4** | ~520 `[SUPUESTO]` | **~240.000** | **~130.000** | **~110.000** | Expansión nacional parcial |
| **5** | ~600 `[SUPUESTO]` | **~300.000** | **~150.000** | **~150.000** | Serie A opcional mes 28–30 |

### S5.2 Detalle año 2 por trimestre `[LARGO PLAZO]`

| Trimestre | Activas | Revenue/mes USD | Burn/mes USD | CF trimestral (aprox.) |
|-----------|---------|-----------------|--------------|------------------------|
| Q1 (M13–15) | 130–160 | 5.850–7.200 | 7.500–8.000 | −2.500 a −1.200 |
| Q2 (M16–18) | 165–185 | 7.425–8.325 | 7.800–8.200 | −400 a +800 |
| Q3 (M19–21) | 190–205 | 8.550–9.225 | 8.000–8.500 | +1.500 a +2.700 |
| Q4 (M22–24) | 210–225 | 9.450–10.125 | 8.000–8.500 | +4.000 a +5.500 |

### S5.3 Detalle año 3 por trimestre `[LARGO PLAZO]`

| Trimestre | Activas | Revenue/mes USD | Burn/mes USD |
|-----------|---------|-----------------|--------------|
| Q1 | 240–280 | 10.800–12.600 | ~7.500 |
| Q2 | 290–330 | 13.050–14.850 | ~8.500 |
| Q3 | 340–380 | 15.300–17.100 | ~9.500 |
| Q4 | 400–440 | 18.000–19.800 | ~10.500 |

> Escenario **éxito** año 3 (~USD 480k revenue) citado en PROYECCION §3.3 solo con Serie A + cobertura nacional — **no** mezclar con fila conservadora sin etiquetar.

---

## S6 — Flujo consolidado, valoración (VAN/TIR) y reparto ilustrativo

*(Equivalente «Flujo Total».)*

### S6.1 FCF anual para valoración

| Año | FCF operativo USD | Fuente |
|-----|-------------------|--------|
| 0 (inversión) | **−210.760** | Wire Lean T+0 |
| 1 | **+237.793** | S3.1 total (esc.1 — pricing 45/60/70 + % GMV) |
| 2 | **+6.000** | PROYECCION §2.3 EBITDA mid |
| 3 | **+84.000** | PROYECCION §3.2 mid |
| 4 | **+110.000** | `[SUPUESTO MODELO]` |
| 5 | **+150.000** | `[SUPUESTO MODELO]` |

### S6.2 Valoración `[SUPUESTO MODELO]` — tasa descuento **25%**

| Métrica | Valor USD | Fórmula / lectura |
|---------|-----------|-------------------|
| VP flujos años 0–5 | **~331.290** | Hoja **Flujo Total** — celda VP Flujos(5) (esc.1 cash flows) |
| **VAN(5)** (wire 210.760) | **~120.530** | VP Flujos(5) − wire = 331.290 − 210.760. **Positivo** en esc.1 (pricing 45/60/70) |
| **VAN(3)** (wire 210.760) | **~26.294** | VP Flujos(3) ~237.054 − wire 210.760. Positivo en esc.1 |
| **TIR (5 años)** | **~55%** *(estimado)* | Vector: −210.760 + FCF años 1–5 esc.1. `[PENDIENTE FP&A — recalcular exacto]` |
| **TIR (3 años)** | **~40%** *(estimado)* | Horizonte corto con FCF A1 positivo esc.1. `[PENDIENTE FP&A]` |
| **Tasa Requerida (r)** | **25%** | `=Flujo Total!C8` — fila dedicada bajo TIR |
| **% SAFE recuperado (CCF acum Y5)** | **~98%** ilustrativo | `CCF acum Y5 / wire` — esc.1 cubre ~98% del wire en 5 años |
| **Payback inversor (ilustrativo)** | **~Año 2–3** en esc.1 | Año en que **CCF acumulado** ≥ USD 210.760; esc.1 con FCF Y1 +237.793 sugiere payback ~Y2. `[PENDIENTE FP&A]` |

> **Lectura inversor pre-seed v3.9.3 (esc.1):** Con pricing 45/60/70 + comisión % GMV, el escenario base muestra **VAN(5) positivo (~120k)** y **TIR ~55%** — atractivo para pre-seed. Recalcular con FP&A antes de pitch institucional para confirmar que el % GMV del esc.1 es realista con GMV piloto.

### S6.3 Reparto de flujos **ilustrativo** (no cláusula SAFE)

**Equity:** participación inversor Lean **~35,13%** (210.760/600k). Hojas Año/Flujo pueden aún mostrar **35,13%** hasta re-link — preferir Detallado/Hoja3 para ask.

| Parte | % ilustrativo | FCF año 5 ilustrativo |
|-------|---------------|------------------------|
| Inversor SAFE (cap 600k) | **35,13%** | *(recalcular CCF)* |
| Founder + equipo (pre-dilución Serie A) | **64,87%** | **~122.010** |

**Disclaimer:** Zonix Pharma usa **SAFE post-money cap** ([ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md)). El inversor **no** recibe reparto de caja operativa hasta conversión; esta tabla es **solo didáctica** (contraste con modelos 70/30 tipo Pizza QLQ).

### S6.4 Dilución referencia

| Evento | Founder | Inversor SAFE |
|--------|---------|---------------|
| Pre-SAFE | 100% | 0% |
| Post-conversión (cap 600k aplica) | **~64,87%** | **~35,13%** |
| Serie A hipotética (500k @ 2M pre) | Ver ESTRUCTURA_LEGAL §3.3 | Dilución adicional |

---

## S7 — Drivers y tasas de crecimiento

*(Equivalente «Tasa Crecimiento».)*

### S7.1 Drivers revenue año 1 *(ancla pack)*

| Driver | M1 | M6 | M12 |
|--------|----|----|-----|
| Farmacias activas | 40 | 97 | 159 |
| ARPF placeholder USD | ~50 | ~50 | ~50 |
| Revenue mensual USD (esc.1) | ~11.960 | ~29.003 | ~47.541 |
| Churn mensual target | 5% | 5% | 5% |

### S7.2 Tasas de crecimiento `[LARGO PLAZO / SUPUESTO]`

| Variable | Año 1→2 | Año 2→3 | Año 3→4 | Año 4→5 |
|----------|---------|---------|---------|---------|
| Farmacias activas | +38% (~159→220) | +100% (~220→440) | +18% | +15% |
| Revenue anual | +70% | +88% | +25% | +25% |
| Burn mensual prom. | +6% | +12% | +10% | +8% |

### S7.3 GMV y take-rate (post-piloto) `[PENDIENTE GMV]`

```
GMV_mes = pedidos_completados × ticket_promedio
Revenue_híbrido_mes = Σ (cuota_fija_tier + GMV_mes_farmacia × take_rate_banda)
```

Recalibrar ARPF y S3 cuando existan **≥30 días** de GMV post-Day-D (UNIT_ECONOMICS §2.1).

---

## Checklist de coherencia (zonix-financial-model)

- [x] **Ask único Lean 210.760** @ cap 600k → equity **~35,13%**
- [x] SAFE cap **600.000**; equity Lean **~35,13%**
- [x] Burn M1–M12 **145.500** (~12.125/mes); buffer VE 20% en contingencia Excel
- [x] **Aritmética use-of-funds cerrada:** Fase 0 **50.260** + Burn **145.500** + Reserva **15.000** = **210.760** ✓
- [x] One-shots Lean **22.365** (legal 5.050 + intro 5.640 + HQ/CapEx 11.675)
- [x] Fase 0 **50.260**; caja Day-D **160.500**
- [x] Flujo Total: refs vivas, **TIR(3/5) %**, **Tasa r**, **% SAFE recuperado**, payback + lectura, resumen Y5 K/L
- [x] Detallado v3.9.3: resumen lateral K–M, MO/marketing mensual desglosado, anti triple-conteo
- [ ] Recalibrar con GMV piloto — `[PENDIENTE]`
- [ ] Validar VAN/TIR con wire 210.760 + esc.1 cash flows — `[Requiere FP&A/contador]`
- [x] Cash M12 esc.1 (pricing 45/60/70) = **398.293** (160.500 + FCF +237.793)

---

## Documentos hermanos

- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) — flujo M1–M12 y Fase 0
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) — CAC, LTV, payback
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) — burn línea por línea
- [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) — SAFE y cap table
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md) — benchmarks SaaS/hosting
- [RESUMEN_ALIADO_GABRIEL_BARRIOS.md](RESUMEN_ALIADO_GABRIEL_BARRIOS.md) — outreach Grupo Morr (no incluir en zip inversor por defecto)

**Archivo Excel:** [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) — **12 hojas** (v3.1). Copia local: `/home/aipp/Descargas/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`.
