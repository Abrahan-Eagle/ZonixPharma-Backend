# Proyección financiera 12 meses (+ año 2 y 3 + plan contingencia)

> **Última actualización:** 22 junio 2026 (v3.4 — tiers **4× Sales** + stretch **Blitz 6× Sales**).
> Documento que traduce los unit economics y el presupuesto a un flujo mes a mes para los 3 escenarios.
> Cifras en USD constantes con buffer 20% ya aplicado al burn.

## 0. Fase 0 (T+0 → Day-D = T+90) — antes del mes 1 del modelo

**Convención:** **T+0** = wire del capital **~USD 111.988** (Lean v3.3). **Day-D** = **T+90** = inicio del piloto público en app = **M1** de la tabla §1.1.

### 0.1 Outflow Fase 0 (ancla v3.3)

| Sub-fase | Período | Outflow (USD) |
|---|---|---|
| **0a** | T+0 a T+30 | **~17.813** (one-shots ~14.208 + burn parcial) |
| **0b** | T+30 a T+60 | **8.011** |
| **0c** | T+60 a T+90 | **8.011** |
| **Total Fase 0** | | **~33.835** |
| **Caja al Day-D (inicio M1)** | | **~78.153** *(~111.988 − 33.835)* |

### 0.2 Tiers (Lean / Lean+ / Base / Growth / Blitz)

| Tier | Capital ref. | Equipo comercial | Territorio / meta | Firmas Y1 ref. | Activas M12 ref. |
|------|--------------|------------------|-------------------|----------------|------------------|
| **Lean** | **~112k** | **4× Sales** @ **350** (bootstrap) | **Carabobo independientes** (~150–250; [CENSO_FARMACIAS_CARABOBO_FASE0.md](CENSO_FARMACIAS_CARABOBO_FASE0.md)) | ~185 | ~159 |
| **Lean+** *(operativo)* | **~112k** *(= Lean)* | **4× Sales** @ **350** | Misma geografía; curva **×1,15** | **~212** | **~183** |
| **Base** | **~157k** | **4× Sales** @ **400** (piso mercado) | Carabobo + reserva/marketing | ~185 | ~159 |
| **Growth** | **~187k** | **4× Sales** @ **450** (mercado pleno) | Carabobo + Dev senior + colchón | ~185 | ~159 |
| **Blitz** *(stretch)* | **~185k** | **6× Sales** @ **400** | **Conquista Carabobo** (curva ×1,5) | **~279** | **~238** |

> **Lectura v3.5:** **Lean+** = mismo capital que Lean, **+15%** en curva comercial → **BE ~M10** sin 6 vendedores. **Blitz** = **+2 vendedores** + curva **×1,5** — alternativa si se prefiere headcount sobre intensidad comercial.

### 0.2b Escenario Lean+ — resumen operativo *(mismo SAFE ~112k)*

| Concepto | Lean+ |
|----------|-------|
| Capital pedido | **~USD 111.988** *(= Lean)* |
| Burn prom. mensual | **~USD 8.108** *(= Lean)* |
| Firmas Y1 | **~212** |
| Activas M12 | **~183** |
| Revenue Y1 | **~USD 68.962** |
| FCF Y1 | **−28.328** |
| Cash M12 | **~USD 49.825** |
| Equilibrio mensual | **M10** (rev **~8.107** vs burn **~7.980**) |

> Fuente: [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) §S1.3b. Tabla M1–M12: §1.5 abajo.

### 0.3 Escenario Blitz — resumen agresivo *(stretch, no ask principal)*

| Concepto | Blitz ~185k |
|----------|-------------|
| Capital pedido | **~USD 184.878** |
| SAFE cap | **~USD 1.287.681** |
| Burn prom. mensual | **~USD 11.998** |
| Fase 0 | **~USD 43.840** |
| Caja Day-D | **~USD 141.038** |
| Revenue Y1 | **~USD 89.952** |
| FCF Y1 | **−54.018** |
| Cash M12 | **~USD 87.020** |
| Equilibrio mensual | **Casi M12** (rev **~11.925** vs burn **~12.020**) con **238 activas** |

> Fuente bottom-up: [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) §S4. Pitch conservador: **Lean ~112k**; Blitz solo tras censo §7 o bridge explícito.

## 1. Modelo del escenario Lean — USD ~112.000 (bootstrap 4× Sales Carabobo)

> **Nota v3.3:** curva comercial **4× Sales** (escala 1,0). Con **ARPF ~50**, **M12** revenue **~7.950** vs burn **~7.980** → **casi equilibrio mensual** en cierre de año 1. Base/Growth añaden colchón y capacidad de marketing/regulatorio.

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

> **Lectura:** FCF acumulado operativo **~−37.322**. Con caja Day-D **~78.153**, cash en caja M12 **~40.831**. **M12** revenue **~7.950** vs burn **~7.980** → **casi equilibrio mensual** (±30 USD/mes con ARPF ~50).

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

### 1.5 Escenario Lean+ — mismo capital ~112k, curva ×1,15 *(v3.5)*

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

> §2 y §3 sin GMV piloto — no usar en pitch pre-seed sin disclaimer. Anclas pack: §0–§1.

*(Contenido años 2–3 sin cambio material vs versión anterior — recalcular post-piloto.)*

## 7. Sensibilidad P10 / P50 / P90

| Escenario | Activas M12 | Cash M12 |
|-----------|-------------|----------|
| P10 | ~120 | ~25.000 |
| **P50 base (Lean)** | **~159** | **~40.831** |
| **Lean+ stretch** | **~183** | **~49.825** |
| P90 | ~200 | ~52.000 |
| Blitz stretch | ~238 | ~87.020 |

---

**Tiers capital v3.5:** Lean **~112k** · **Lean+ operativo (mismo $)** · Base **~157k** · Growth **~187k** · Blitz **~185k** — ver [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) §S1.3–§S1.3b.
