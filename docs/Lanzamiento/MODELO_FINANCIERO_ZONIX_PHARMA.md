# Modelo Financiero Zonix Pharma — gastos, ingresos y egresos

> **Última actualización:** 22 junio 2026 (v3.8.2 — layout ESTA compacto; v3.8.1 fix col J; v3.8 espejo Pizza + Hoja1 v3.7).
> **Propósito:** consolidado único (estilo modelo Excel multi-hoja) para **inversor**, **FP&A** y aliados (p. ej. Gabriel Barrios — Grupo Morr). Espejo versionado del archivo [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx).
> **Generador:** [`_tools/generate_modelo_financiero_v2.py`](_tools/generate_modelo_financiero_v2.py) (openpyxl). Regenerar: `docs/Lanzamiento/_tools/.venv/bin/python3 generate_modelo_financiero_v2.py` · Verificar: `docs/Lanzamiento/_tools/verify_modelo_financiero.py` (checks v3.8.2) · Copia local: `cp MODELO_FINANCIERO_ZONIX_PHARMA.xlsx ~/Descargas/`
> **Cifras:** USD constantes; buffer inflación VE **20%** (Lean/Base) **incorporado en la fila «Material + transporte + contingencia»** por tramo (PRESUPUESTO §6) — no hay fila «Cuadre buffer» en el P&L.
> **No sustituye:** contador SENIAT ni dictamen abogado — marcar `[Requiere FP&A/contador]` donde aplique.

## Convenciones

| Etiqueta | Significado |
|----------|-------------|
| *(ancla pack)* | Cifra citada en PROYECCION / UNIT / PRESUPUESTO / ESTRUCTURA_LEGAL |
| `[SUPUESTO MODELO]` | Extensión del pack para años 4–5, sensibilidad o valoración — recalibrar post-piloto |
| `[LARGO PLAZO — no ancla pre-seed]` | Años 2–5 direccionales; no usar en pitch pre-seed sin disclaimer |
| **Ilustrativo SAFE** | Reparto de flujos **no vinculante** — el SAFE convierte en Serie A, no reparte dividendos hoy |

**Calendario:** **T+0** = wire capital · **Day-D = T+90** = inicio M1 comercial · **M1–M12** = primer año post-Day-D.

### Índice de hojas Excel (v3.8.1 — 12 hojas)

| Hoja Excel | Sección MD | Contenido |
|------------|------------|-----------|
| **Detallado de la inversión.** | S2 | Constitución C.A. ~5.050 · intro/HQ one-shots · MO Fase 0 (incl. **Dev**) · Fase 0 bottom-up · use of funds · **resumen lateral K–M** |
| **Hoja3** | S2.5 | **Sección A** use-of-funds (100%) · **Sección B** desglose operativo (enlace Detallado + disclaimer + puente cross) · **lateral espejo Detallado** + timeline 0a–0c |
| **Hoja1** | S2.1c | **Vista Pizza 8 bloques** (equipos, adecuación, MO, transporte, alquiler, constitución, marketing, materia) — espejo **Detallado** + col **I % SAFE** + panel J–K |
| **Hoja2** | S3 | Tramos Meta / valla (referencia mensual) |
| **ESTA SI VALE** | S1 + S4 | **Espejo Pizza v3.8.2:** layout compacto (burn + simulador misma fila ~58) · MO/transporte/legal/intro + factores Año 2 · simulador M1-M12 · panel unit economics (col M) · burn → Año 1 |
| **Año 1** … **Año 5** | S3 + S5 | P&L mensual · costos ESTA · **cash ini/final = fórmulas** (A1) |
| **Flujo Total** | S6 | Consolidado 5 años, CCF **`$C$6` equity**, TIR/payback sobre CCF acum |
| **Tasa Crecimiento** | S7 | Drivers **enlazados** a hojas Año (activas, revenue, burn prom.) |

---

## S1 — Supuestos y unit economics

*(Equivalente hoja «ESTA SI VALE» del ejemplo Pizza QLQ.)*

### S1.1 Producto y modelo de ingreso

| Concepto | Valor | Fuente |
|----------|-------|--------|
| Producto | Marketplace farmacéutico B2B2C (OTC + Rx), Valencia piloto | README pack |
| Revenue B2B | Cuota fija **USD 25 / 40 / 55** + **% GMV** por banda | PROPUESTA_VALOR_CLIENTE_B2B §5 |
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
| Farmacias activas equilibrio (Lean, ARPF ~50) | **~160** — con **4× Sales** v3.5: **~159 activas M12**, **casi** equilibrio mensual M12 (revenue **~7.950** vs burn **~7.980**) |
| **Lean+** (mismo capital Lean, curva ×1,15) | **~183 activas M12**, **~212 firmas Y1** — **equilibrio mensual M10** (rev **~8.107** vs burn **~7.980**); cash M12 **~49.825** |

### S1.2b Equipo y sueldos por tier *(v3.0 bottom-up — USD/mes, base; comisiones Sales aparte)*

| Rol | Lean (bootstrap) | Base (piso mercado) | Growth (mercado pleno) | Blitz (Carabobo agresivo) |
|-----|------------------|---------------------|------------------------|---------------------------|
| Founder CEO/CTO | 1.000 | 1.200 | 1.500 | 1.200 |
| Co-CEO Head Sales&Ops | 1.000 | 1.200 | 1.500 | 1.200 |
| **Dev (Flutter/Laravel)** | **600** junior | **1.000** mid | **1.800** senior | **1.000** mid |
| Sales B2B (base c/u) | **4×** 350 | **4×** 400 | **4×** 450 | **6×** 400 |
| CS + Community Manager | 400 | 500 | 600 | 550 |
| Marketing Lead / diseñador B2B | — | **300** | **150** | **300** |
| Google Ads / YouTube B2B | — | **300** | **300** | **500** |
| Coordinador Partners | — | 350 | 450 | 400 |
| Asesor regulatorio | — | 120 | 120 | 120 |
| Contador + Abogado | 330 | 450 | 600 | 450 |
| Herramientas IA | 425 | 425 | 425 | 425 |
| HQ + servicios + hosting | 734 | 734 | 734 | 734 |

> **Benchmarks VE 2026:** AVGH oct-2025 (profesional pleno ~785; gerencia media ~1.563). Dev local 600–1.000; Sales B2B base 150–1.000 + comisión. Lean documenta sueldos **bajo mercado** a cambio de ticket menor — validar contratos `[PENDIENTE]`.

### S1.3 Tiers de capital e instrumento *(capital = suma bottom-up; no ticket fijo)*

| Tier | Capital | SAFE cap | Equity ref. | Burn prom. |
|------|---------|----------|-------------|------------|
| **Lean** (4× Sales bootstrap Carabobo) | **~111.988** *(≈112k)* | **600.000** | **~18,66%** | **~8.108** |
| **Base** (4× Sales piso mercado) | **~157.268** *(≈157k)* | **~912.814** | **~17,23%** | **~10.898** |
| **Growth** (4× Sales mercado pleno) | **~187.478** *(≈187k)* | **~1.205.345** | **~15,55%** | **~12.698** |
| **Blitz** (6× Sales Carabobo agresivo) | **~184.878** *(≈185k)* | **~1.287.681** | **~14,36%** | **~11.998** |

> **Geografía:** Lean/Base/Growth = **4× Sales**, misma curva (~159 activas M12). **Blitz** = **6× Sales** + curva **×1,5** (~**238 activas M12**, ~**279 firmas** Y1) para capturar **>80%** independientes Carabobo — ver [CENSO_FARMACIAS_CARABOBO_FASE0.md](CENSO_FARMACIAS_CARABOBO_FASE0.md). Stretch goal; no sustituye ask principal Lean hasta censo §7 validado.

### S1.3b Escenarios operativos Lean+ *(v3.5 — mismo capital ~112k, sin 6× Sales)*

**Lean+** no es un ticket SAFE distinto: reutiliza **burn y capital** del tier **Lean** (~**111.988**). Es un escenario de **ejecución comercial** más agresivo con **4× Sales** (sin contratar vendedores extra).

| Variante | Palanca | Activas M11 | Mes BE | Notas |
|----------|---------|-------------|--------|-------|
| **Lean+ comercial** | Curva firmas/activas **×1,15** | **~174** | **M10** | **~212 firmas Y1**; revenue M12 **~9.142**; cash M12 **~49.825** |
| **Lean+ unit economics** | **ARPF ~53** (curva ×1,0) | **~151** | **M11** | Sin acelerar captación; mix Pro/Enterprise o GMV mayor |
| Lean (base) | Curva ×1,0, ARPF ~50 | ~151 | — (casi M12) | Ask principal pre-seed |

> **Lectura founder:** si el objetivo es **equilibrio antes de M12** sin subir a **Blitz ~185k** (6× Sales), la palanca preferida es **Lean+ comercial** (+15% en curva, validar con censo §7). Alternativa: **ARPF ~53** con la curva base (BE **M11** justo).

**Riesgo:** curva ×1,15 implica **~214 firmas** brutas Y1 vs **~185** en Lean — confirmar densidad por municipio Carabobo antes de prometer en pitch.

### S1.4 Premisas valoración `[SUPUESTO MODELO]`

| Premisa | Valor | Nota |
|---------|-------|------|
| Inversión inicial (wire T+0) | **−USD ~111.988** | Escenario Lean v3.3 |
| Tasa de descuento (VAN) | **25%** | Referencia pre-seed LatAm; no WACC auditado |
| Horizonte VAN | 3 y 5 años | Post Day-D |
| Reparto flujos ilustrativo | **~18,66%** inversor / **~81,34%** founder | **No** es cláusula SAFE; solo escenario didáctico |

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
| Intro 3 meses | Intro demo + marketing pre + **video B2B 800** | One-shots **~14.208** |
| Marketing mensual | Bloque desglosado en Detallado + ESTA/Año 1 | **No suma** al TOTAL SAFE (anti triple-conteo) |
| Materia prima | N/A → Hosting/SaaS/SMS **~154/mes** | Footnote SaaS **120** + SMS **34** |
| Total + % equity | TOTAL SAFE **~111.988** + resumen lateral **~18,66%** | Cap ref. 600k |

### S2.1 One-shots Fase 0 — Lean *(ancla v3.1)* — ver hoja **Detallado de la inversión.**

| Rubro | Total USD |
|-------|-----------|
| **Constitución empresa** (Registro+acta, SENIAT, municipales HQ, bomberos, banco, sello, SAPI) | **5.050** |
| **Intro mercado** (web, brochures, tablets, visitas, reservas, **video pitch B2B**) | **3.808** |
| **HQ + CapEx** (depósito, adecuación, 4 PCs) | **5.350** |
| **Total one-shots Lean** | **~14.208** |

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
| Panel J–K | CapEx HQ ref · TOTAL SAFE **~112k** · burn MO+mkt · reserva **490** · % equity |
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
| **Burn catálogo** (fila ~58+, col I) | — | **~8.108/mes** → **Año 1** (canon operativo) · alineado horizontalmente con simulador |

> **Reunión:** **ESTA** = single pane due diligence (como Pizza). CapEx equipos/HQ → **Hoja1**. TOTAL SAFE → **Hoja3 §A**. No sumar bloques ESTA + Hoja1 + Hoja3.

### S2.1b Desglose Detallado (no one-shots)

| Bloque | Contenido | Nota |
|--------|-----------|------|
| **Mano de obra Fase 0** | Founder, Co-CEO, **Dev**, **4× Sales**, CS, IA, legal/contador × 3 meses | Incluida en **Fase 0 ~33.835** |
| **MO operativa post-Day-D** | Misma nómina, USD/mes | Espejo burn Año 1 — **no duplicar** en TOTAL SAFE |
| **Transporte B2B** | Visitas, logística demo, eventos | **~500** en intro + **~280/mes** en burn |
| **Marketing mensual** | Meta, valla, hosting, contingencia — **montos en Detallado** | Enlaza ESTA; nota anti-duplicado |
| **Sales comisiones** | **~40 USD/firma** × curva firmadas (prom/mes en ESTA) | Variable — no en burn fijo Lean |
| **Materia prima** | **No aplica** (marketplace SaaS) | Equivalente: hosting/SaaS/SMS en ESTA **~154/mes** |

### S2.2 Outflow Fase 0 (T+0 → Day-D)

| Sub-fase | Período | Outflow USD |
|----------|---------|-------------|
| **0a** | T+0–30 | **~17.813** (one-shots ~14.208 + burn parcial) |
| **0b** | T+30–60 | **8.011** |
| **0c** | T+60–90 | **8.011** |
| **Total Fase 0** | | **~33.835** |
| **Caja al Day-D (inicio M1)** | | **~78.153** *(~111.988 − 33.835)* |

### S2.3 Use of funds — Lean 12 meses *(ancla v3.3)*

| Concepto | USD |
|----------|-----|
| One-shots Fase 0 | **~14.208** |
| Burn operativo M1–M12 | **97.290** |
| Reserva imprevistos | **490** |
| **Total capital Lean** | **~111.988** |

### S2.4 One-shots adicionales Base / Growth

| Concepto | Base | Growth |
|----------|------|--------|
| Delta vs Lean (valla mediana + bono asesor) | **+900** → **~10.708** | igual Base |
| Reserva caja adicional | **~10.590** | **~20.000** |

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

### S3.1 Tabla operativa mes a mes *(ancla PROYECCION §1.1)*

| Mes | Firmadas (altas) | Activas (cierre) | Ingresos USD | Egresos (burn) USD | FCF mensual | FCF acumulado |
|-----|------------------|------------------|--------------|-------------------|-------------|---------------|
| 1 | 13 | 40 | 1.500 | 8.011 | −6.511 | −6.511 |
| 2 | 13 | 51 | 2.168 | 8.011 | −5.843 | −12.354 |
| 3 | 14 | 62 | 3.100 | 8.347 | −5.247 | −17.601 |
| 4 | 15 | 74 | 3.700 | 8.347 | −4.647 | −22.248 |
| 5 | 15 | 85 | 4.250 | 8.347 | −4.097 | −26.345 |
| 6 | 16 | 97 | 4.850 | 8.347 | −3.497 | −29.842 |
| 7 | 16 | 108 | 5.400 | 7.980 | −2.580 | −32.422 |
| 8 | 16 | 119 | 5.950 | 7.980 | −2.030 | −34.452 |
| 9 | 17 | 130 | 6.500 | 7.980 | −1.480 | −35.932 |
| 10 | 17 | 141 | 7.050 | 7.980 | −930 | −36.862 |
| 11 | 17 | 151 | 7.550 | 7.980 | −430 | −37.292 |
| 12 | 16 | 159 | 7.950 | 7.980 | −30 | **−37.322** |
| **Total año 1** | **185** | **159** *(M12)* | **59.968** | **97.290** | **−37.322** | — |

> **Lectura v3.3 (4× Sales):** **casi** equilibrio mensual en **M12** (revenue **~7.950** vs burn **~7.980**). Cash M12 teórico **~40.831**.

### S3.2 Desglose egresos recurrentes — hoja **Año 1** (filas por rubro × Mes 1–12)

| Línea | USD/mes (referencia) | Tramo / nota |
|-------|----------------------|--------------|
| Dev junior (Flutter/Laravel) | **600** | Fijo |
| 4× Sales B2B (base) | **1.400** | Fijo (350 c/u) |
| CS + Community Manager | **400** | Fijo |
| Founder + Co-CEO | **2.000** | Fijo |
| Herramientas IA | **425** | Fijo |
| Contador + Abogado | **330** | Fijo |
| HQ casa | **500** | Fijo |
| Servicios oficina | **80** | §2.3.1 PRESUPUESTO |
| Hosting + SaaS + Firebase OTP | **154** | §2.3.1 PRESUPUESTO |
| Meta Ads | **800** M1–6 · **500** M7–12 | Variable por tramo (Año 1) |
| Valla pequeña 3m×2m | **350** M3+ · **0** M1–2 | Variable (Año 1) |
| Material + transporte + contingencia | **1.322** M1–2 · **1.308** M3–6 · **1.241** M7–12 | Incluye buffer VE 20% |
| **Burn tramo A** (M1–2) | **8.011** | Total fila «Total Costos» |
| **Burn tramo B** (M3–6) | **8.347** | |
| **Burn tramo C** (M7–12) | **7.980** | |

> Costos fijos enlazados a **ESTA SI VALE** col. I; Meta/valla/contingencia por tramo en Año 1. Sin fila «Cuadre buffer» visible.

### S3.3 Cash deployment *(ancla PROYECCION §1.3)*

**v2.2:** filas **Cash inicial mes** y **Cash final mes** en **Año 1** son **fórmulas vivas**:

- **M1 cash ini** = `'Detallado de la inversión.'!G*` (Caja al Day-D = ~111.988 − Fase 0 ≈ **78.153** v3.3).
- **Cash final mes** = cash ini + Total Ingresos − Total Costos (por mes).
- **M2+ cash ini** = cash final del mes anterior.

| Mes | Cash inicial | Inflow | Outflow | Cash final |
|-----|--------------|--------|---------|------------|
| Day-D (M1) | 78.153 | 1.500 | 8.011 | 71.642 |
| 2 | 71.642 | 2.168 | 8.011 | 65.799 |
| 3 | 65.799 | 3.100 | 8.347 | 60.552 |
| 4 | 60.552 | 3.700 | 8.347 | 55.905 |
| 5 | 55.905 | 4.250 | 8.347 | 51.808 |
| 6 | 51.808 | 4.850 | 8.347 | 48.311 |
| 7 | 48.311 | 5.400 | 7.980 | 45.731 |
| 8 | 45.731 | 5.950 | 7.980 | 43.701 |
| 9 | 43.701 | 6.500 | 7.980 | 42.221 |
| 10 | 42.221 | 7.050 | 7.980 | 41.291 |
| 11 | 41.291 | 7.550 | 7.980 | 40.861 |
| 12 | 40.861 | 7.950 | 7.980 | **40.831** |

> **Lectura:** al cierre M12 queda **~36%** del capital inicial (**40.831 / 111.988**), neto Fase 0 + operación año 1 con **4× Sales** bootstrap.

---

## S4 — Sensibilidad Lean / Base / Growth / Blitz y escenarios

*(Aporte nuevo — no existía en Pizza como hoja separada.)*

### S4.1 Comparativa tiers *(ancla PRESUPUESTO §1)*

| Concepto | Lean ~112k | Base ~157k | Growth ~187k | Blitz ~185k |
|----------|------------|------------|--------------|-------------|
| Burn prom. mensual | 8.108 | 10.898 | 12.698 | 11.998 |
| One-shots | 14.208 | 15.108 | 15.108 | 15.108 |
| Fase 0 total | 33.835 | 41.145 | 44.755 | 43.840 |
| Reserva caja | 490 | ~10.590 | ~20.000 | ~25.000 |
| Activas M12 (curva tier) | ~159 | ~159 | ~159 | **~238** |
| Firmas Y1 | ~185 | ~185 | ~185 | **~279** |
| Sales en nómina | 4× @ 350 | 4× @ 400 | 4× @ 450 | **6× @ 400** |
| Curva comercial | ×1,0 | ×1,0 | ×1,0 | **×1,5** |
| Dev en nómina | junior 600 | mid 1.000 | senior 1.800 | mid 1.000 |
| Google Ads B2B | No | 300/mes | 300/mes | **500/mes** |
| Cash M12 teórico | ~40.831 | *(recalc)* | *(recalc)* | **~87.020** |
| FCF Y1 | −37.322 | *(recalc)* | *(recalc)* | **−54.018** |

> **Blitz:** revenue M12 **~11.925** vs burn **~12.020** → **casi equilibrio mensual M12** con **238 activas** (vs Lean **159**). Equilibrio operativo **antes** en términos de activas (~M10–M11 con ~220+).

### S4.2 Escenarios P10 / P50 / P90 / Blitz *(PROYECCION §7)*

| Escenario | Prob. | Activas M12 | ARPF | Revenue M12 (ord.) | Cash M12 (ord.) |
|-----------|-------|-------------|------|-------------------|-----------------|
| **P10 pesimista** | 20% | ~120 | 40 | ~4.800 | ~25.000 |
| **P50 base** | 50% | ~159 | ~50 | ~7.950 | **~40.831** |
| **P90 optimista** | 30% | ~200 | 55 | ~11.000 | ~52.000 |
| **Blitz stretch (6× Sales)** | stretch | **~238** | ~50 | **~11.925** | **~87.020** |

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
| **1** (M1–M12) | 159 | **59.968** | **97.290** | **−37.322** | *(ancla v3.3)* |
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
| 0 (inversión) | **−~111.988** | Wire Lean T+0 |
| 1 | **−37.322** | S3.1 total |
| 2 | **+6.000** | PROYECCION §2.3 EBITDA mid |
| 3 | **+84.000** | PROYECCION §3.2 mid |
| 4 | **+110.000** | `[SUPUESTO MODELO]` |
| 5 | **+150.000** | `[SUPUESTO MODELO]` |

### S6.2 Valoración `[SUPUESTO MODELO]` — tasa descuento **25%**

| Métrica | Valor USD | Fórmula / lectura |
|---------|-----------|-------------------|
| VP flujos años 0–5 | **~−790** | Hoja **Flujo Total** — celda **VAN(5)** (recalcular Excel) |
| **VAN(5)** | **~−790** | Negativo en Lean v3.5.1 — esperable pre-seed con FCF A1 negativo |
| **TIR (5 años)** | **Fórmula `=IRR`** en Flujo Total | Vector J: −~112k + FCF años 1–5 |
| **Payback inversor (ilustrativo)** | **Flujo Total** — fila Payback | Año en que **CCF acumulado** ≥ USD ~111.988; **no promesa contractual** |

> **Lectura inversor pre-seed v3.3:** VAN(5) puede seguir **negativo** en Lean bootstrap (4× Sales sueldos bajo mercado + Dev en nómina). Base/Growth añaden reserva y sueldos de mercado. Recalcular con FP&A antes de pitch institucional.

### S6.3 Reparto de flujos **ilustrativo** (no cláusula SAFE)

**v3.5.1:** CCF anual = FCF × **`Flujo Total!C6`** (participación inversor **18,66%**). Founders = **`=1-C6`**. No usar C5 (ARPF).

| Parte | % ilustrativo | FCF año 5 ilustrativo |
|-------|---------------|------------------------|
| Inversor SAFE (cap 600k) | **18,66%** | **~27.990** |
| Founder + equipo (pre-dilución Serie A) | **81,34%** | **~122.010** |

**Disclaimer:** Zonix Pharma usa **SAFE post-money cap** ([ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md)). El inversor **no** recibe reparto de caja operativa hasta conversión; esta tabla es **solo didáctica** (contraste con modelos 70/30 tipo Pizza QLQ).

### S6.4 Dilución referencia

| Evento | Founder | Inversor SAFE |
|--------|---------|---------------|
| Pre-SAFE | 100% | 0% |
| Post-conversión (cap 600k aplica) | **~81,34%** | **~18,66%** |
| Serie A hipotética (500k @ 2M pre) | Ver ESTRUCTURA_LEGAL §3.3 | Dilución adicional |

---

## S7 — Drivers y tasas de crecimiento

*(Equivalente «Tasa Crecimiento».)*

### S7.1 Drivers revenue año 1 *(ancla pack)*

| Driver | M1 | M6 | M12 |
|--------|----|----|-----|
| Farmacias activas | 40 | 97 | 159 |
| ARPF placeholder USD | ~50 | ~50 | ~50 |
| Revenue mensual USD | ~1.500 | ~4.850 | ~7.950 |
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

- [x] Tiers Lean **~112k** / Base **~157k** / Growth **~187k** / Blitz **~185k** (v3.4 — Blitz **6× Sales** stretch)
- [x] SAFE caps **600k / ~913k / ~1.205M**; equity ref. **18,66% / 17,23% / 15,55%**
- [x] Burn M1–M12 suma **97.290**; buffer VE 20% **dentro de contingencia** (1.322 / 1.308 / 1.241)
- [x] Ingresos Año 1 **59.968**; FCF **−37.322**; costos enlazados **ESTA SI VALE**
- [x] Flujo Total: refs vivas, **TIR(3/5)**, payback CCF acum, CCF/Por recuperar
- [x] Fase 0 **~33.835**; caja Day-D **~78.153**; cierre M12 **~40.831**
- [x] Detallado v3.1: resumen lateral K–M, MO/marketing mensual desglosado, anti triple-conteo
- [x] **verify v3.1:** guards Pizza mapping, comisiones Sales, Growth marketing_lead
- [ ] Recalibrar con GMV piloto — `[PENDIENTE]`
- [ ] Validar VAN/TIR e impuestos — `[Requiere FP&A/contador]`

---

## Documentos hermanos

- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) — flujo M1–M12 y Fase 0
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) — CAC, LTV, payback
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) — burn línea por línea
- [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) — SAFE y cap table
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md) — benchmarks SaaS/hosting
- [RESUMEN_ALIADO_GABRIEL_BARRIOS.md](RESUMEN_ALIADO_GABRIEL_BARRIOS.md) — outreach Grupo Morr (no incluir en zip inversor por defecto)

**Archivo Excel:** [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) — **12 hojas** (v3.1). Copia local: `/home/aipp/Descargas/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`.
