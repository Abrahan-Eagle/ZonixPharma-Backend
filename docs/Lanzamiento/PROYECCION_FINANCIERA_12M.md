# Proyección financiera 12 meses (+ año 2 y 3 + plan contingencia)

> **Última actualización:** 26 julio 2026 (v3.9.3 — anclas Lean **canon Excel**).
> **Canon Lean:** SAFE **USD 210.760** = Fase 0 **50.260** + burn M1–M12 **145.500** + reserva **15.000**; caja Day-D **160.500**; burn prom. **~12.125**/mes; equity **~35,13%** @ cap **600k**. Fuente: [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx).
> **Tabla §1.1 M1–M12** (burn **8.011/8.347/7.980**, cash M12 **~40.831**) = **legado burn ~8.1k** — **`[PENDIENTE FP&A]`** regenerar mes a mes vs burn Excel. No usar 40.831 / 78.153 / 111.988 como ask vigente.
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

### 0.2 Tiers (Lean Excel / Base / Growth / Blitz hist.)

| Tier | Capital ref. | Equipo comercial | Territorio / meta | Firmas Y1 ref. | Activas M12 ref. |
|------|--------------|------------------|-------------------|----------------|------------------|
| **Lean** *(Excel)* | **210.760** | **4× Sales** @ **350** | **Carabobo independientes** | ~185 | ~159 |
| **Lean+** *(operativo hist.)* | *[OBSOLETO ask ~112k]* | **4× Sales** @ **350** | Curva **×1,15** | **~212** | **~183** |
| **Base** *(hist.)* | **~157.268** | **4× Sales** @ **400** | Carabobo + reserva | ~185 | ~159 |
| **Growth** *(hist.)* | **~187.478** | **4× Sales** @ **450** | Dev senior + colchón | ~185 | ~159 |
| **Blitz** *(stretch hist.)* | **~184.878** | **6× Sales** @ **400** | Curva ×1,5 | **~279** | **~238** |

> **Ask principal:** Lean Excel **210.760**. Asks **~112k / ~174k** = `[OBSOLETO]`.

### 0.2b Burn Lean Excel (post-Day-D)

| Concepto | Valor |
|----------|-------|
| Burn M1–M12 | **145.500** |
| Burn prom. mensual | **~12.125** |
| Reserva | **15.000** |
| Cash M12 | **`[PENDIENTE FP&A]`** |

> Tabla M1–M12 detallada: §1.1 abajo = **legado** hasta recalcular.

## 1. Modelo del escenario Lean — USD 210.760 (Excel) / tabla §1.1 legado

> **`[PENDIENTE FP&A]`:** la tabla §1.1 usa burn legado **~8.1k**/mes y cash M12 **~40.831**. Canon vigente: burn **145.500** (~**12.125**/mes), Day-D **160.500**. Curva activas/revenue §1.1 se conserva como **referencia comercial** hasta regenerar.

**Equipo Lean:** Founder + Co-CEO **1.000/mes** c/u · **Dev junior 600** · **4× Sales 350 base** · CS+CM **400** — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1.1.

### 1.1 Tabla mes a mes *(caso central sin waiver)*

| Mes | Firmadas | Activas | Revenue | Burn | FCF mensual | FCF acumulado |
|---|---|---|---|---|---|---|
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

> **Lectura (legado):** FCF acum. **~−37.322** y cash M12 **~40.831** asumen Day-D **~78.153** y burn **~8.1k**. Con Excel: Day-D **160.500** y burn **12.125** → cash M12 **`[PENDIENTE FP&A]`**.

> **Billing (ajuste pack):** la columna **Revenue** es **ARPF placeholder ~50 × activas** (cuota fija + % GMV agregados — [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §2). No desglosa mes a mes cuota / fee GMV / prorrateo; eso vive en política comercial [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5 y, si se implementa layout Excel B, como línea «ajuste billing» ([MODELO_FINANCIERO_LAYOUT_PIZZA_QLQ_ESPECIFICACION.md](MODELO_FINANCIERO_LAYOUT_PIZZA_QLQ_ESPECIFICACION.md) §3.2).

| Escenario billing | Revenue Y1 (ref.) | Cash M12 (ref.) | Nota |
|---|---|---|---|
| **Sin waiver** *(tabla arriba — planning principal)* | **59.968** | **~40.831** | Caso central pitch |
| **Con waiver primeras 10** (cuota USD 0 × 2 meses) | **~59.515** *(−~453)* | *[PENDIENTE FP&A]* | Delta ingreso proxy [PROPUESTA B2B §11](PROPUESTA_VALOR_CLIENTE_B2B.md). No restar a ciegas del cash §1.3 hasta recalibrar FP&A al firmar waiver en contrato. |

### 1.2 Hipótesis aplicadas

- **Churn mensual:** **5%** target ([UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)).
- **Tasa de firma:** **~185** altas brutas M1–M12 con **4× Sales** (curva ×1,0).
- **Equipo comercial:** **4× Sales** base **350/mes** c/u + comisión por firma (no modelada en burn fijo).
- **Dev en nómina:** **600/mes** junior — aparte del founder técnico.
- **One-shots:** **~14.208** en Fase 0 (CapEx 4 PCs + video B2B 800 incluido).
- **Burn tramos:** **8.011 / 8.347 / 7.980** ([PRESUPUESTO](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3).

### 1.3 Capital deployment

| Mes | Cash inicial | Inflow | Outflow | Cash final |
|---|---|---|---|---|
| **Day-D (M1)** | **78.153** | 1.500 | 8.011 | 71.642 |
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

> Al cierre M12: **~USD 40.831** cash (~**36%** del capital T+0), con **4× Sales** bootstrap + **Dev** en nómina.

### 1.4 Break-even y mitigaciones

Con **burn ~7.980** (tramo C) y **ARPF ~50**, el equilibrio mensual (~**160 activas**) se **roza en M12** (**~159 activas**, revenue **~7.950**). Mitigaciones si la curva real va más lenta: (1) **Lean+** — curva **×1,15** con mismo capital (**BE ~M10**, ver §1.5); (2) subir ARPF a **~53** (**BE ~M11** sin acelerar curva); (3) tier **Base ~157k**; (4) bridge trimestral; (5) **Blitz ~185k** (6× Sales).

### 1.5 Escenario Lean+ — mismo capital ~112k `[OBSOLETO]`, curva ×1,15 *(v3.5 hist.)*

> **Nota:** no es un SAFE distinto — mismo burn que Lean. Escenario operativo stretch documentado en [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) §S1.3b.

| Mes | Activas Lean+ | Revenue Lean+ | Burn (Lean) | Gap mensual | Gap Lean (ref.) |
|-----|---------------|---------------|-------------|-------------|-----------------|
| 1 | 46 | 1.725 | 8.011 | −6.286 | −6.511 |
| 2 | 59 | 2.493 | 8.011 | −5.518 | −5.843 |
| 3 | 71 | 3.565 | 8.347 | −4.782 | −5.247 |
| 4 | 85 | 4.255 | 8.347 | −4.092 | −4.647 |
| 5 | 98 | 4.888 | 8.347 | −3.459 | −4.097 |
| 6 | 112 | 5.578 | 8.347 | −2.769 | −3.497 |
| 7 | 124 | 6.210 | 7.980 | −1.770 | −2.580 |
| 8 | 137 | 6.842 | 7.980 | −1.138 | −2.030 |
| 9 | 150 | 7.475 | 7.980 | −505 | −1.480 |
| 10 | 162 | **8.107** | 7.980 | **+127** | −930 |
| 11 | 174 | **8.682** | 7.980 | **+702** | −430 |
| 12 | 183 | **9.142** | 7.980 | **+1.162** | −30 |

> **Lectura:** **equilibrio mensual desde M10**; cash M12 teórico **~49.825** (vs **~40.831** Lean). Requiere **~212 firmas Y1** (+15% vs Lean) — validar censo §7 antes de pitch agresivo.

## 2. Año 2 — proyección conservadora `[LARGO PLAZO — no ancla pre-seed]`

> §2–§6 sin GMV piloto — no usar en pitch pre-seed sin disclaimer. Anclas pack: §0–§1.

| Concepto | Referencia |
|----------|------------|
| Revenue anual | **USD 96k–108k** conservador ([MODELO](MODELO_FINANCIERO_ZONIX_PHARMA.md) Año 2) |
| Activas cierre | ~220 (MODELO Año 2) |
| Burn | Escalar con tier Base/Growth si se activa expansión |

## 3. Escenarios Base / Growth (puntero)

> **No recalcular aquí** — ver [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) §S1.3–§S4 y [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3–§4.

| Tier | Capital | Burn prom. | SAFE cap |
|------|---------|------------|----------|
| Base ~157k | **~157.268** | **~10.898**/mes | **~912.814** |
| Growth ~187k | **~187.478** | **~12.698**/mes | **~1.205.345** |

## 4. Contingencia y mitigaciones

| Trigger | Acción |
|---------|--------|
| Cash M6 < **48.311** | Recorte Meta 50%; pausar valla; bridge founder |
| Firmas < 8/mes × 2 meses | Revisar script Sales; mom-test pricing (GUIA §2.1) |
| CAC > 139 +20% | Reducir comisiones variable; foco referidos farmacia |

## 5. Año 3 — referencia `[LARGO PLAZO]`

Conservador **~USD 180k–204k/año** sin Serie A. Ver MODELO Año 3.

## 6. Éxito / cobertura nacional `[PENDIENTE FP&A]`

Hipótesis **~USD 480k/año** requiere puente farmacias × ARPF — **no ancla pre-seed**. Disclaimer §3.3: recalcular con FP&A antes de citar en pitch institucional.

## 7. Sensibilidad P10 / P50 / P90

| Escenario | Activas M12 | Cash M12 |
|-----------|-------------|----------|
| P10 | ~120 | ~25.000 |
| **P50 base (Lean)** | **~159** | **~40.831** |
| **Lean+ stretch** | **~183** | **~49.825** |
| P90 | ~200 | ~52.000 |
| Blitz stretch | ~238 | ~87.020 |

---

**Tiers capital v3.9.3:** Lean **210.760 (Excel)** · Base/Growth/Blitz **históricos** — ver [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md). Ask **~112k** = `[OBSOLETO]`.
