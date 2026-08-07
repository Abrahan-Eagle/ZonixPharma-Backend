# Proyección financiera 12 meses (+ año 2 y 3 + plan contingencia)

> **Última actualización:** 30 julio 2026 (v4 — anclas Lean **canon Excel** — esc.1 vigente: pricing 45/60/70 + %GMV 8/7/5).
> **Canon Lean:** SAFE **USD 237.412** = Fase 0 **50.260** + burn M1–M12 **172.152** + reserva **15.000**; caja Day-D **187.152**; equity **~39,57%** @ cap **600k**. Fuente: [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx).
> **Esc.1 vigente (v4):** pricing **45/60/70 + %GMV 8/7/5**; FCF Y1 **+59.079**; BE mensual **M5**; cash M12 **246.231**; revenue Y1 **228.796**; costos Y1 **169.717** (Detallado burn ask **172.152**).
> **Tabla §1.1 M1–M12** = esc.1 vigente.
> Cifras en USD constantes con buffer 20% ya aplicado al burn (Excel).

## 0. Fase 0 (T+0 → Day-D = T+90) — antes del mes 1 del modelo

**Convención:** **T+0** = wire del capital **USD 237.412** (Lean Excel v4). **Day-D** = **T+90** = inicio del piloto público en app = **M1**.

### 0.1 Outflow Fase 0 (ancla Excel v4)

| Sub-fase | Período | Outflow (USD) |
|---|---|---|
| **0a** | T+0 a T+30 | **33.010** |
| **0b** | T+30 a T+60 | **8.625** |
| **0c** | T+60 a T+90 | **8.625** |
| **Total Fase 0** | | **50.260** |
| **One-shots** (dentro Fase 0) | | **22.365** |
| **Caja al Day-D (inicio M1)** | | **187.152** *(237.412 − 50.260)* |

### 0.2 Tier vigente (Lean Excel v4 — ask único)

| Tier | Capital ref. | Equipo comercial | Territorio / meta | Firmas Y1 ref. | Activas M12 ref. |
|------|--------------|------------------|-------------------|----------------|------------------|
| **Lean** *(Excel — ask único v4)* | **237.412** | **4× Sales** @ **350** + **CEO** | **Carabobo independientes** | ~185 | ~159 |

### 0.2b Burn Lean Excel esc.1 (post-Day-D)

| Concepto | Valor |
|----------|-------|
| Burn M1–M12 (esc.1) | **169.717** (M1 **11.411** / M2 **14.846** / M3–12 **14.346**) |
| Burn M1–M12 (Detallado) | **172.152** (~14.346/mes) — incluye comisiones Sales + items no en Año 1 esc.1 |
| Reserva | **15.000** |
| FCF Y1 / cash M12 (esc.1) | **+59.079** (BE **M5**); cash M12 **246.231** (187.152 + 59.079) |

> Diferencia burn esc.1 (169.717) vs Detallado (172.152) = comisiones Sales + items no incluidos en hoja "Año 1 escenario 1" — `[PENDIENTE FP&A reconciliar]`.

## 1. Modelo del escenario Lean — USD 237.412 (Excel) — esc.1 vigente

> **Esc.1 v4:** pricing **45/60/70 + %GMV 8/7/5**. Tabla §1.1 = Excel Año 1 esc.1 (BE FCF **M5**; cash Day-D **187.152**; FCF Y1 **+59.079**; cash M12 **246.231**; revenue Y1 **228.796**; costos Y1 **169.717**).

**Equipo Lean (esc.1):** CEO + Founder + Co-CEO **1.000/mes** c/u · **Dev 1.000** (esc.1: Dev x2 @ 1.000) · **4× Sales 350 base** · CS+CM **500** — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1.1.

### 1.1 Tabla mes a mes *(esc.1 v4 — pricing 45/60/70 + %GMV 8/7/5)*

| Mes | Firmadas | Activas | Revenue | Burn | FCF mensual | FCF acumulado |
|---|---|---|---|---|---|---|
| 1 | 13 | 40 | 7.520 | 11.411 | −3.891 | −3.891 |
| 2 | 13 | 51 | 9.588 | 14.846 | −5.258 | −9.149 |
| 3 | 14 | 62 | 11.656 | 14.346 | −2.690 | −11.839 |
| 4 | 15 | 74 | 13.912 | 14.346 | −434 | −12.273 |
| 5 | 15 | 85 | 15.980 | 14.346 | +1.634 | −10.639 |
| 6 | 16 | 97 | 18.236 | 14.346 | +3.890 | −6.749 |
| 7 | 16 | 108 | 20.304 | 14.346 | +5.958 | −791 |
| 8 | 16 | 119 | 22.372 | 14.346 | +8.026 | 7.235 |
| 9 | 17 | 130 | 24.440 | 14.346 | +10.094 | 17.329 |
| 10 | 17 | 141 | 26.508 | 14.346 | +12.162 | 29.491 |
| 11 | 17 | 151 | 28.388 | 14.346 | +14.042 | 43.533 |
| 12 | 16 | 159 | 29.892 | 14.346 | +15.546 | **59.079** |
| **Total año 1** | **185** | **159** *(M12)* | **228.796** | **169.717** | **+59.079** | — |

> **Lectura esc.1 v4:** FCF Y1 **+59.079**; break-even FCF mensual desde **M5**. Revenue Y1 **228.796**. Costos Y1 **169.717**. Cash M12 **246.231** (187.152 + 59.079).

> **Billing (ajuste pack):** la columna **Revenue** = P&L Excel (híbrido cuota **45/60/70** + %GMV **8/7/5**). **ARPF ~52** es placeholder de UNIT_ECONOMICS — **no** el cociente Revenue÷activas (M1: 7.520/40 ≈ 188). Detalle comercial: [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5.

| Escenario billing | Revenue Y1 (ref.) | Cash M12 (ref.) | Nota |
|---|---|---|---|
| **Sin waiver** *(tabla arriba — planning principal esc.1)* | **228.796** | **246.231** | Caso central pitch (esc.1 v4 — revenue 228.796) |
| **Con waiver primeras 10** (cuota USD 0 × 2 meses) | **~228.343** *(−~453)* | **~245.778** | Delta ingreso proxy [PROPUESTA B2B §11](PROPUESTA_VALOR_CLIENTE_B2B.md). |

### 1.2 Hipótesis aplicadas (esc.1 v4)

- **Churn mensual:** **5%** target ([UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)).
- **Tasa de firma:** **~185** altas brutas M1–M12 con **4× Sales** (curva ×1,0).
- **Equipo comercial:** **4× Sales** base **350/mes** c/u + comisión por firma (no modelada en burn fijo).
- **Dev en nómina:** **1.000/mes** (esc.1: Dev x2 @ 1.000) — aparte del founder técnico.
- **One-shots:** **22.365** en Fase 0 (legal 5.050 + intro 5.640 + HQ/CapEx 11.675 — canon v4).
- **Burn esc.1:** M1 **11.411** / M2 **14.846** / M3–M12 **14.346**/mes ([PRESUPUESTO](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3). Total costos Y1 esc.1 **169.717** (Detallado ask **172.152**).
- **Pricing:** cuota fija **45/60/70** + %GMV **8/7/5** según banda (esc.1 v4).

### 1.3 Capital deployment (esc.1 v4)

| Mes | Cash inicial | Inflow | Outflow | Cash final |
|---|---|---|---|---|
| **Day-D (M1)** | **187.152** | 7.520 | 11.411 | 183.261 |
| 2 | 183.261 | 9.588 | 14.846 | 178.003 |
| 3 | 178.003 | 11.656 | 14.346 | 175.313 |
| 4 | 175.313 | 13.912 | 14.346 | 174.879 |
| 5 | 174.879 | 15.980 | 14.346 | 176.513 |
| 6 | 176.513 | 18.236 | 14.346 | 180.403 |
| 7 | 180.403 | 20.304 | 14.346 | 186.361 |
| 8 | 186.361 | 22.372 | 14.346 | 194.387 |
| 9 | 194.387 | 24.440 | 14.346 | 204.481 |
| 10 | 204.481 | 26.508 | 14.346 | 216.643 |
| 11 | 216.643 | 28.388 | 14.346 | 230.685 |
| 12 | 230.685 | 29.892 | 14.346 | **246.231** |

> Al cierre M12: **USD 246.231** cash (esc.1: 187.152 + FCF Y1 +59.079). **Equilibrio FCF mensual desde M5.**

### 1.4 Break-even y mitigaciones (esc.1 v4)

Con el **esc.1 vigente** (pricing **45/60/70 + %GMV 8/7/5**), el FCF mensual es negativo M1–M4 y positivo desde **M5** (ingresos M1 **7.520** < costos **11.411**). Mitigaciones si la curva real va más lenta: (1) recorte de burn (valla, Meta); (2) mejorar mix ARPF; (3) bridge trimestral. FCF Y1 **+59.079**; cash M12 **246.231**.

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
| Cash M6 < **180.403** | Recorte Meta 50%; pausar valla; bridge founder |
| Firmas < 8/mes × 2 meses | Revisar script Sales; mom-test pricing (GUIA §2.1) |
| CAC > 139 +20% | Reducir comisiones variable; foco referidos farmacia |

## 4. Año 3 — referencia `[LARGO PLAZO]`

Conservador **~USD 180k–204k/año** sin Serie A. Ver MODELO Año 3.

## 5. Éxito / cobertura nacional `[PENDIENTE FP&A]`

Hipótesis **~USD 480k/año** requiere puente farmacias × ARPF — **no ancla pre-seed**. Recalcular con FP&A antes de citar en pitch institucional.

## 6. Sensibilidad P10 / P50 / P90 (esc.1 v4)

| Escenario | Activas M12 | Cash M12 |
|-----------|-------------|----------|
| P10 pesimista | ~120 | **`[PENDIENTE FP&A]`** (no usar ~25k legado) |
| **P50 base (Lean esc.1)** | **~159** | **246.231** *(187.152 + FCF +59.079)* |
| P90 optimista | ~200 | **`[PENDIENTE FP&A]`** (no usar ~52k legado) |

---

**Tier capital v4 (ask único):** Lean **237.412 (Excel)** @ cap **600k** → equity **~39,57%**. Ver [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md).
