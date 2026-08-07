> **Espejo Pack Aliado** (sync v5 7-ago-2026) desde [`docs/Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md`](../../../docs/Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md). Fuente de verdad = Lanzamiento + Excel v4.

# Presupuesto 12 meses — referencia

> **Última actualización:** 7 agosto 2026 (Lean **Excel v4** — SAFE **237.412** — ask único; esc.1: pricing **45/60/70 + %GMV 8/7/5**; FCF Y1 **+59.079**; cash M12 **246.231**).
> Documento que detalla **línea por línea** los gastos durante 12 meses para el escenario **Lean (ask único v4)**.
> Las cifras están justificadas en [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md).
> Cifras en **USD constantes**, con buffer 20% ya aplicado al total para cubrir devaluación bolívar.

## 1. Resumen ejecutivo — escenario Lean (ask único v4)

| Concepto                      | **Lean — 4× Sales (Excel 237.412 — ask único)**                     |
| ----------------------------- | ------------------------------------------------------------------- |
| Capital pedido                | **237.412**                                                         |
| Runway                        | 12 meses post-Day-D                                                 |
| Burn promedio mensual (esc.1) | **~14.143**/mes (costos Y1 **169.717**/12); pico M2 **14.846** |
| Activas M12 ref.              | ~159                                                                |
| SAFE post-money cap (ref.)    | **USD 600.000**                                                     |
| Equity ref. (capital/cap)     | **~39,57%**                                                         |
| Diferencias clave             | **4× @ 350**, Dev junior, CEO + Co-CEO, asesor regulatorio incluido |
| FCF Y1 / cash M12 (esc.1)     | **+59.079** (BE **M5**); cash M12 **246.231** (187.152 + 59.079) |

### 1.1 Equipo y sueldos Lean _(USD/mes, base; comisiones Sales aparte — esc.1 v4)_

| Rol                                               | Lean (esc.1)                        |
| ------------------------------------------------- | ----------------------------------- |
| CEO                                               | 1.000                               |
| Founder CEO/CTO                                   | 1.000                               |
| Co-CEO Head Sales&Ops                             | 1.000                               |
| Dev (Flutter/Laravel)                             | **1.000** _(esc.1: Dev x2 @ 1.000)_ |
| Sales B2B (base c/u)                              | **4×** 350                          |
| CS + Community Manager                            | 500                                 |
| Contador + Abogado (incl. asesor regulatorio 120) | 330                                 |
| Herramientas IA                                   | 425                                 |
| HQ + servicios + hosting                          | 734                                 |

## 2. Escenario Lean — USD 237.412 (4× Sales bootstrap Carabobo — ask único v4)

> **Rol del tier:** Fase 0 (T+90) + **12 meses** post-Day-D con **CEO**, **Co-CEO**, **4× Sales**, **Dev en nómina**, HQ casa, stack IA y valla pequeña. Tabla mes a mes en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.

### 2.1 Replante operativo v4 (esc.1)

- **HQ tipo casa** USD **500/mes**.
- **Valla pequeña 3m×2m:** **USD 350/mes desde mes 3**.
- **Meta Ads:** **USD 800** meses 1–6 · **USD 500** meses 7–12.
- **4× Sales B2B** → línea **~USD 1.400/mes** base (350 c/u).
- **Dev** **1.000/mes** (esc.1: Dev x2 @ 1.000); **CEO + Founder + Co-CEO** **1.000/mes** c/u; **IA ~425/mes**; **CapEx 4 PCs ~3.700** + **video pitch B2B 800** en one-shots.

### 2.2 One-shots Lean (canon v4)

| Concepto                                                            | USD        |
| ------------------------------------------------------------------- | ---------- |
| Constitución C.A. + trámites HQ                                     | **5.050**  |
| Intro mercado (web, brochures, tablets, visitas, **video B2B 800**) | **5.640**  |
| HQ + CapEx (depósito, adecuación, **4 PCs**, alquiler Fase 0 3×750) | **11.675** |
| **Total one-shots**                                                 | **22.365** |

### 2.3 Burn mensual recurrente Lean (esc.1 v4)

| Concepto                                          | USD/mes (esc.1)       |
| ------------------------------------------------- | --------------------- |
| Dev (esc.1: Dev x2 @ 1.000)                       | **1.000**             |
| 4× Sales B2B (base)                               | **1.400**             |
| CS + Community Manager                            | **500**               |
| CEO + Founder + Co-CEO                            | **3.000**             |
| Herramientas IA                                   | **425**               |
| Contador + Abogado (incl. asesor regulatorio 120) | **330**               |
| HQ casa                                           | **500**               |
| Servicios oficina + hosting/SaaS/Firebase         | **234**               |
| Meta (800 M1–6 / 500 M7–12)                       | tramos                |
| Valla pequeña (desde M3)                          | 350 · 0 M1–2          |
| Material + transporte + contingencia              | 1.322 / 1.308 / 1.241 |

**Tramos esc.1 v4 (con buffer 20%):**

| Tramo                       | Meses | Burn/mes (USD) |
| --------------------------- | ----- | -------------- |
| M1 — sin valla, Meta 800      | 1     | **11.411**     |
| M2 — transición               | 2     | **14.846**     |
| M3–M12 — régimen              | 3–12  | **14.346**/mes |

**Total burn Y1 esc.1:** **169.717** (vs Detallado **172.152** — diferencia por comisiones Sales + items no incluidos en Año 1 esc.1 — `[PENDIENTE FP&A reconciliar]`).

#### 2.3.1 Desglose hosting / SaaS (fila **234** USD/mes Lean)

| Componente                                           | USD/mes | Notas                                                                            |
| ---------------------------------------------------- | ------- | -------------------------------------------------------------------------------- |
| Servicios oficina (Nameshared VPS ref.)              | **80**  | Infra app staging/prod piloto                                                    |
| SaaS stack (Cursor/Claude proxy, dominio, SSL, etc.) | **120** | Ver MODELO §S2 footnote SaaS                                                     |
| Firebase Phone Auth SMS (proxy)                      | **34**  | OTP paciente — README §C.10                                                      |
| **Total fila hosting**                               | **234** | **80 + 120 + 34 = 234** (reconcilia AUD-v3-01 vs PROYECCION sin recalcular §1.3) |

### 2.4 Total Lean 12 meses (canon v4 — aritmética cerrada)

| Concepto                                     | USD         |
| -------------------------------------------- | ----------- |
| Fase 0 (one-shots 22.365 + operativa 27.895) | **50.260**  |
| Burn 12 meses (Detallado)                    | **172.152** |
| Reserva caja                                 | **15.000**  |
| **Total capital SAFE Lean**                  | **237.412** |

> **Validación aritmética:** 50.260 + 172.152 + 15.000 = **237.412** ✓ (canon Excel v4).
> **Puente Fase 0:** wire **237.412** − Fase 0 **50.260** = caja Day-D **187.152**. Cash M12 esc.1: **246.231** (187.152 + FCF +59.079).

## 3. Buffer inflación VE

Metodología ponderada (30% costos Bs / 10% USD) — **20%** incorporado en contingencia mensual.

---

**Fuente canónica numérica:** [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) · generador [`_tools/generate_modelo_financiero_v2.py`](_tools/generate_modelo_financiero_v2.py).
