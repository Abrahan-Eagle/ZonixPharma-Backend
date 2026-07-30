# Proyección financiera 12 meses (+ año 2 y 3 + plan contingencia)

> **Última actualización:** 30 julio 2026 (v3.9.3 — anclas Lean **canon Excel** — esc.1 vigente: pricing 45/60/70 + % GMV).
> **Canon Lean:** SAFE **USD 210.760** = Fase 0 **50.260** + burn M1–M12 **145.500** + reserva **15.000**; caja Day-D **160.500**; equity **~35,13%** @ cap **600k**. Fuente: [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx).
> **Esc.1 vigente (v3.9.3):** pricing **45/60/70** + % GMV; FCF Y1 **+237.793** (profitable desde M1); cash M12 **398.293** (160.500 + 237.793); burn tramos **10.411 / 10.747 / 10.380** (Total Y1 **126.090**).
> **Tabla §1.1 M1–M12** = esc.1 vigente.
> Cifras en USD constantes con buffer 20% ya aplicado al burn (Excel).

## 0. Fase 0 (T+0 → Day-D = T+90) — antes del mes 1 del modelo

**Convención:** **T+0** = wire del capital **USD 210.760** (Lean Excel v3.9.3). **Day-D** = **T+90** = inicio del piloto público en app = **M1**.

### 0.1 Outflow Fase 0 (ancla Excel v3.9.3)

| Sub-fase | Período | Outflow (USD) |
|---|---|---|
| **0a** | T+0 a T+30 | **33.010** |
| **0b** | T+30 a T+60 | **8.625** |
| **0c** | T+60 a T+90 | **8.625** |
| **Total Fase 0** | | **50.260** |
| **One-shots** (dentro Fase 0) | | **22.365** |
| **Caja al Day-D (inicio M1)** | | **160.500** *(210.760 − 50.260)* |

### 0.2 Tier vigente (Lean Excel v3.9.3 — ask único)

| Tier | Capital ref. | Equipo comercial | Territorio / meta | Firmas Y1 ref. | Activas M12 ref. |
|------|--------------|------------------|-------------------|----------------|------------------|
| **Lean** *(Excel — ask único v3.9.3)* | **210.760** | **4× Sales** @ **350** + **CEO** | **Carabobo independientes** | ~185 | ~159 |

### 0.2b Burn Lean Excel esc.1 (post-Day-D)

| Concepto | Valor |
|----------|-------|
| Burn M1–M12 (esc.1) | **126.090** (tramos A **10.411** / B **10.747** / C **10.380**) |
| Burn M1–M12 (Detallado) | **145.500** (~12.125/mes) — incluye comisiones Sales + items no en Año 1 esc.1 |
| Reserva | **15.000** |
| FCF Y1 (esc.1) | **+237.793** (profitable desde M1) |
| Cash M12 (esc.1) | **398.293** (160.500 + 237.793) |

> Diferencia burn esc.1 (126.090) vs Detallado (145.500) = comisiones Sales + items no incluidos en hoja "Año 1 escenario 1" — `[PENDIENTE FP&A reconciliar]`.

## 1. Modelo del escenario Lean — USD 210.760 (Excel) — esc.1 vigente

> **Esc.1 v3.9.3:** pricing **45/60/70** + % GMV. Tabla §1.1 = esc.1 vigente (profitable desde M1, FCF Y1 +237.793, cash M12 398.293).

**Equipo Lean (esc.1):** CEO + Founder + Co-CEO **1.000/mes** c/u · **Dev 1.000** (esc.1: Dev x2 @ 1.000) · **4× Sales 350 base** · CS+CM **500** — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1.1.

### 1.1 Tabla mes a mes *(esc.1 v3.9.3 — pricing 45/60/70 + % GMV)*

| Mes | Firmadas | Activas | Revenue | Burn | FCF mensual | FCF acumulado |
|---|---|---|---|---|---|---|
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

> **Lectura esc.1 v3.9.3:** FCF Y1 **+237.793** (positivo desde M1 — revenue 11.960 > burn 10.411). Cash M12 **398.293** (160.500 caja Day-D + 237.793 FCF Y1).

> **Billing (ajuste pack):** la columna **Revenue** es **ARPF placeholder ~50 × activas** (cuota fija + % GMV agregados — [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §2). No desglosa mes a mes cuota / fee GMV / prorrateo; eso vive en política comercial [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5.

| Escenario billing | Revenue Y1 (ref.) | Cash M12 (ref.) | Nota |
|---|---|---|---|
| **Sin waiver** *(tabla arriba — planning principal esc.1)* | **363.883** | **398.293** | Caso central pitch (esc.1 v3.9.3) |
| **Con waiver primeras 10** (cuota USD 0 × 2 meses) | **~363.430** *(−~453)* | **~397.840** | Delta ingreso proxy [PROPUESTA B2B §11](PROPUESTA_VALOR_CLIENTE_B2B.md). |

### 1.2 Hipótesis aplicadas (esc.1 v3.9.3)

- **Churn mensual:** **5%** target ([UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)).
- **Tasa de firma:** **~185** altas brutas M1–M12 con **4× Sales** (curva ×1,0).
- **Equipo comercial:** **4× Sales** base **350/mes** c/u + comisión por firma (no modelada en burn fijo).
- **Dev en nómina:** **1.000/mes** (esc.1: Dev x2 @ 1.000) — aparte del founder técnico.
- **One-shots:** **22.365** en Fase 0 (legal 5.050 + intro 5.640 + HQ/CapEx 11.675 — canon v3.9.3).
- **Burn tramos esc.1:** **10.411 / 10.747 / 10.380** ([PRESUPUESTO](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3). Total Y1 **126.090**.
- **Pricing:** cuota fija **45/60/70** + % GMV según banda (esc.1 v3.9.3).

### 1.3 Capital deployment (esc.1 v3.9.3)

| Mes | Cash inicial | Inflow | Outflow | Cash final |
|---|---|---|---|---|
| **Day-D (M1)** | **160.500** | 11.960 | 10.411 | 162.049 |
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

> Al cierre M12: **USD 398.293** cash (esc.1: 160.500 caja Day-D + 237.793 FCF Y1), con **4× Sales** bootstrap + **Dev** en nómina. **Profitable desde M1.**

### 1.4 Break-even y mitigaciones (esc.1 v3.9.3)

Con el **esc.1 vigente** (pricing **45/60/70** + % GMV), el proyecto es **profitable desde M1** (revenue **11.960** > burn **10.411**). El equilibrio mensual **ya no es un riesgo** en el caso base. Mitigaciones si la curva real va más lenta o el mix de pricing es desfavorable: (1) recorte de burn (valla, Meta); (2) mejorar mix ARPF (más farmacias en banda 60/70); (3) bridge trimestral; (4) **no requiere más capital** gracias al FCF Y1 +237.793.

## 2. Año 2 — proyección conservadora `[LARGO PLAZO — no ancla pre-seed]`

> §2–§6 sin GMV piloto — no usar en pitch pre-seed sin disclaimer. Anclas pack: §0–§1.

| Concepto | Referencia |
|----------|------------|
| Revenue anual | **USD 96k–108k** conservador ([MODELO](MODELO_FINANCIERO_ZONIX_PHARMA.md) Año 2) |
| Activas cierre | ~220 (MODELO Año 2) |
| Burn | Escalar nómina/marketing solo con caja y métricas post-Day-D |

## 3. Contingencia y mitigaciones

| Trigger | Acción |
|---------|--------|
| Cash M6 < **218.981** | Recorte Meta 50%; pausar valla; bridge founder |
| Firmas < 8/mes × 2 meses | Revisar script Sales; mom-test pricing (GUIA §2.1) |
| CAC > 139 +20% | Reducir comisiones variable; foco referidos farmacia |

## 4. Año 3 — referencia `[LARGO PLAZO]`

Conservador **~USD 180k–204k/año** sin Serie A. Ver MODELO Año 3.

## 5. Éxito / cobertura nacional `[PENDIENTE FP&A]`

Hipótesis **~USD 480k/año** requiere puente farmacias × ARPF — **no ancla pre-seed**. Recalcular con FP&A antes de citar en pitch institucional.

## 6. Sensibilidad P10 / P50 / P90 (esc.1 v3.9.3)

| Escenario | Activas M12 | Cash M12 (esc.1) |
|-----------|-------------|----------|
| P10 pesimista (ARPF 35) | ~120 | ~25.000 *(estimado)* |
| **P50 base (Lean esc.1)** | **~159** | **398.293** *(160.500 + FCF +237.793)* |
| P90 optimista (ARPF 55) | ~200 | ~52.000 *(estimado)* |

---

**Tier capital v3.9.3 (ask único):** Lean **210.760 (Excel)** @ cap **600k** → equity **~35,13%**. Ver [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md).
