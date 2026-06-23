# Presupuesto 12 meses — referencia

> **Última actualización:** 22 junio 2026 (v3.4 — **4× Sales** tiers + **Blitz 6×** ~185k stretch).
> Documento que detalla **línea por línea** los gastos durante 12 meses para los 3 escenarios.
> Las cifras están justificadas en [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md).
> Cifras en **USD constantes**, con buffer 20% ya aplicado al total para cubrir devaluación bolívar.

## 1. Resumen ejecutivo de los 3 escenarios

| Concepto | **Lean — 4× Sales (~112k)** | **Base — mercado (~157k)** | **Growth — pleno (~187k)** | **Blitz — 6× Sales (~185k)** |
|---|---|---|---|---|
| Capital pedido | **~111.988** *(≈112k)* | **~157.268** *(≈157k)* | **~187.478** *(≈187k)* | **~184.878** *(≈185k)* |
| Runway | 12 meses post-Day-D | 12 meses post-Day-D | 12 meses post-Day-D | 12 meses post-Day-D |
| Burn promedio mensual | **~8.108** | **~10.898** | **~12.698** | **~11.998** |
| Activas M12 ref. | ~159 | ~159 | ~159 | **~238** |
| SAFE post-money cap (ref.) | **USD 600.000** | **~USD 912.814** | **~USD 1.205.345** | **~USD 1.287.681** |
| Equity ref. (capital/cap) | **~18,66%** | **~17,23%** | **~15,55%** | **~14,36%** |
| Diferencias clave | **4× @ 350**, Dev junior | **4× @ 400**, diseñador + Ads | **4× @ 450**, Dev senior | **6× @ 400**, curva ×1,5, reserva **25k** |

> **Filosofía v3.4:** Lean/Base/Growth = **4× Sales**, misma curva. **Blitz** = stretch territorial Carabobo. Censo: [CENSO_FARMACIAS_CARABOBO_FASE0.md](CENSO_FARMACIAS_CARABOBO_FASE0.md).

### 1.1 Equipo y sueldos por tier *(USD/mes, base; comisiones Sales aparte)*

| Rol | Lean | Base | Growth |
|-----|------|------|--------|
| Founder CEO/CTO | 1.000 | 1.200 | 1.500 |
| Co-CEO Head Sales&Ops | 1.000 | 1.200 | 1.500 |
| Dev (Flutter/Laravel) | **600** junior | **1.000** mid | **1.800** senior |
| Sales B2B (base c/u) | **4×** 350 | **4×** 400 | **4×** 450 |
| CS + Community Manager | 400 | 500 | 600 |
| Marketing Lead / diseñador B2B | — | **300** | **150** |
| Google Ads / YouTube B2B | — | **300** | **300** |
| Coordinador Partners | — | 350 | 450 |
| Asesor regulatorio | — | 120 | 120 |
| Contador + Abogado | 330 | 450 | 600 |
| Herramientas IA | 425 | 425 | 425 |
| HQ + servicios + hosting | 734 | 734 | 734 |

## 2. Escenario Lean — USD ~112.000 (4× Sales bootstrap Carabobo)

> **Rol del tier:** Fase 0 (T+90) + **12 meses** post-Day-D con **Co-CEO**, **4× Sales**, **Dev junior en nómina**, HQ casa, stack IA y valla pequeña. Tabla mes a mes en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.

### 2.1 Replante operativo v3.3

- **HQ tipo casa** USD **500/mes**.
- **Valla pequeña 3m×2m:** **USD 350/mes desde mes 3**.
- **Meta Ads:** **USD 800** meses 1–6 · **USD 500** meses 7–12.
- **4× Sales B2B** → línea **~USD 1.400/mes** base (350 c/u).
- **Dev junior** **600/mes**; **Founder + Co-CEO** **1.000/mes** c/u; **IA ~425/mes**; **CapEx 4 PCs ~3.700** + **video pitch B2B 800** en one-shots.

### 2.2 One-shots Lean

| Concepto | USD |
|---|---|
| Constitución C.A. + trámites HQ | **5.050** |
| Intro mercado (web, brochures, tablets, visitas, **video B2B 800**) | **3.808** |
| HQ + CapEx (depósito, adecuación, **4 PCs**) | **5.350** |
| **Total one-shots** | **~14.208** |

### 2.3 Burn mensual recurrente Lean

| Concepto | USD/mes |
|---|---|
| Dev junior | **600** |
| 4× Sales B2B (base) | **1.400** |
| CS + Community Manager | **400** |
| Founder + Co-CEO | **2.000** |
| Herramientas IA | **425** |
| Contador + Abogado | **330** |
| HQ casa | **500** |
| Servicios oficina + hosting/SaaS/Firebase | **234** |
| Meta (800 M1–6 / 500 M7–12) | tramos |
| Valla pequeña (desde M3) | 350 · 0 M1–2 |
| Material + transporte + contingencia | 1.322 / 1.308 / 1.241 |

**Tramos con buffer 20%:**

| Tramo | Meses | Burn/mes (USD) |
|---|---|---|
| A — sin valla, Meta 800 | 1–2 | **8.011** |
| B — valla pequeña, Meta 800 | 3–6 | **8.347** |
| C — valla pequeña, Meta 500 | 7–12 | **7.980** |

**Promedio Lean:** **~8.108**/mes → **97.290** anual.

#### 2.3.1 Desglose hosting / SaaS (fila **234** USD/mes Lean)

| Componente | USD/mes | Notas |
|---|---|---|
| Servicios oficina (Nameshared VPS ref.) | **80** | Infra app staging/prod piloto |
| SaaS stack (Cursor/Claude proxy, dominio, SSL, etc.) | **120** | Ver MODELO §S2 footnote SaaS |
| Firebase Phone Auth SMS (proxy) | **34** | OTP paciente — README §C.10 |
| **Total fila hosting** | **234** | **80 + 120 + 34 = 234** (reconcilia AUD-v3-01 vs PROYECCION sin recalcular §1.3) |

### 2.4 Total Lean 12 meses

| Concepto | USD |
|---|---|
| One-shots | **~14.208** |
| Burn 12 meses | **97.290** |
| Reserva imprevistos | **490** |
| **Total Lean** | **~111.988** |

> **Puente Fase 0:** wire **~111.988** − Fase 0 **~33.835** = caja Day-D **~78.153**. Cash M12 teórico **~40.831** (4× Sales, casi equilibrio M12).

## 3. Escenario Base — USD ~157.000

- **4× Sales** base 400; **Dev mid 1.000**; coordinador **350**; asesor **120**; **diseñador 300/mes**; **Google Ads B2B 300/mes**; valla mediana **700** desde M2; Meta **800** todo el año; one-shot **video caso éxito 800**; reserva **~10.590**.
- Capital **~157.268** · Fase 0 **~41.145** · burn anual **~130.776**.

## 4. Escenario Growth — USD ~187.000

- **4× Sales** base 450; **Dev senior 1.800**; diseñador **150/mes**; **Google Ads 300/mes**; resto como Base + mayor reserva **~20.000**.
- Capital **~187.478** · Fase 0 **~44.755** · burn anual **~152.370**.

## 5. Tabla comparativa rápida

| Línea | Lean (~112k) | Base (~157k) | Growth (~187k) |
|---|---|---|---|
| **Capital pedido** | **~111.988** | **~157.268** | **~187.478** |
| Burn prom. | **~8.108** | **~10.898** | **~12.698** |
| Sales en nómina | 4× @ 350 | 4× @ 400 | 4× @ 450 |
| Territorio ref. | Carabobo bootstrap | Carabobo + reserva | Carabobo + colchón |
| Dev | junior 600 | mid 1.000 | senior 1.800 |
| Marketing v3.3 | Meta + valla | + diseñador + Google Ads | + diseñador 150 + Google Ads |
| SAFE cap | 600.000 | ~912.814 | ~1.205.345 |

## 6. Buffer inflación VE

Metodología ponderada (30% costos Bs / 10% USD) — **20%** incorporado en contingencia mensual. Ver nota histórica en versiones anteriores §6.

---

**Fuente canónica numérica:** [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) · generador [`_tools/generate_modelo_financiero_v2.py`](_tools/generate_modelo_financiero_v2.py).
