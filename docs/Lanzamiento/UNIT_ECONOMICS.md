# Unit Economics — Zonix Pharma

> **Última actualización:** 10 mayo 2026 (§7.1 guía de lectura cohort).
> Documento que explica cómo gana dinero Zonix Pharma a nivel de farmacia individual.
> Cifras base propagadas al [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) y al [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).

## 1. Modelo simple

Zonix Pharma cobra a la farmacia un **servicio de plataforma** en formato **híbrido:** **cuota fija** + **fee porcentual sobre el GMV del mes en app**, según **tier** (Basic / Pro / Enterprise) y **bandas de GMV** definidos en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5. Los porcentajes son **moderados** (≈0,6%-1% según tier), no un take-rate tipo agregador (25-35% GMV).

Para **proyecciones de runway** del pack se usa **ARPF USD 45/mes** como **placeholder** (ingreso medio por farmacia activa) **hasta** recalibrar con **mix real** de tiers y GMV en piloto. Ese valor **no** sustituye al modelo híbrido: es solo ancla numérica compatible con la tabla mes a mes vigente.

```
Revenue por farmacia = ARPF mensual × Lifetime promedio
                     = USD 45 × 20 meses
                     = USD 900 (LTV)   ← placeholder hasta ARPF híbrido medido
```

```
Costo de adquirir farmacia = USD 109 (CAC)   ← construcción §3 (2× Sales B2B)
```

```
LTV / CAC = 900 / 109 ≈ 8,3x
```

```
Payback CAC = 109 / 45 ≈ 2,4 meses
```

## 2. ARPF (Average Revenue Per Farmacia)

**Modelo vigente (cobro):** cuota fija **USD 20 / 35 / 50** por nivel + **% sobre GMV** en app por banda. El ARPF contable será **suma de cuota + fee variable** cada mes.

**Placeholder USD 45/mes:** se conserva en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) y resúmenes hasta tener **GMV en app** y distribución por tier. Al actualizar ARPF, recalcular LTV, LTV/CAC y payback en este documento y en los hermanos.

**Sensibilidad (ARPF más bajo):** si el ARPF efectivo fuera **USD 41/mes** (mix desfavorable), LTV = **USD 820**; LTV/CAC ≈ **7,5x** con CAC base **USD 109**. Sigue por encima del umbral típico “> 3x” SaaS SMB.

## 3. CAC (Customer Acquisition Cost)

**Construcción bottom-up del CAC** (alineada a **2 ejecutivos Sales B2B** y **~8 farmacias firmadas/mes** en régimen de crucero; comisión **USD 30** por farmacia firmada):

| Componente | Costo por farmacia firmada |
|---|---|
| Comisión Sales B2B (USD 30 por firma) | USD 30 |
| Costo proporcional fijo **2×** Sales (USD **240**/mes ÷ **8** firmas/mes) | USD **30** |
| Marketing digital geo-targeteado (Meta + canales B2B) | USD 25 |
| Material impreso, brochures, demos | USD 5 |
| Customer Support proporcional para onboarding inicial | USD 10 |
| Pérdida en farmacias que cancelan en primer mes (10% de las firmadas) | USD 9 |
| **CAC total promedio** | **USD 109** |

**Sensibilidad:** si la comisión marginal sube a **USD 50** por firma para acelerar adopción, CAC sube **+USD 20** → **USD 129**; LTV/CAC ≈ **7,0x**. Aún sólido frente a benchmarks 3-5x.

## 4. LTV (Lifetime Value)

**Construcción:**

```
LTV = ARPF × (1 / churn mensual)
LTV = USD 45 × (1 / 0,05)
LTV = USD 45 × 20 meses
LTV = USD 900
```

### 4.1 Churn mensual: 5%

**Por qué 5%:**
- Mediana SaaS B2B SMB en LatAm: **3-7% mensual** ([fuente: ChartMogul SaaS Benchmarks 2025](https://chartmogul.com/blog/saas-benchmarks/), [Recurly LatAm Report 2024](https://recurly.com/research/)).
- Marketplace farmacéutico es más sticky que SaaS general (la farmacia depende del catálogo y de la ruta de delivery ya construida con sus pacientes habituales).
- Pero menos sticky que ERP / CRM porque la farmacia puede simplemente dejar de marketear su tienda Zonix.

**5% mensual = 60% anual.** En cohortes:
- Mes 1: 100 farmacias.
- Mes 2: 95.
- Mes 6: 73.
- Mes 12: 54.
- Mes 20: 36.
- Lifetime promedio = 1/0,05 = 20 meses.

### 4.2 Sensibilidad a churn

| Churn mensual | Lifetime | LTV | LTV/CAC | Lectura |
|---|---|---|---|---|
| 3% | 33 meses | USD 1.485 | ~13,6x | Excelente — solo si el producto resulta ser muy sticky. |
| 5% (base) | 20 meses | USD 900 | **~8,3x** | **Caso base, conservador.** |
| 7% | 14 meses | USD 630 | ~5,8x | Aceptable, alarma de optimización. |
| 10% | 10 meses | USD 450 | ~4,1x | Marginal, requiere intervención. |
| 15% | 6,7 meses | USD 300 | ~2,8x | Insostenible. Trigger de pivote. |

**Decisión:** el modelo se construye con 5%. Si churn supera 7% en mes 6, se activa plan de retención (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)).

## 5. Payback CAC

```
Payback = CAC / ARPF
        = USD 109 / USD 45
        ≈ 2,4 meses
```

**Lectura:** la farmacia cubre el costo de adquisición en **~2,4 meses** de cuota+fee **al nivel del placeholder ARPF**; al medir ARPF híbrido real, recalcular payback.

**Benchmark SaaS B2B:**
- Excelente: < 12 meses.
- Bueno: 12-18 meses.
- Aceptable: 18-24 meses.

**Zonix Pharma: ~2,4 meses** con los supuestos actuales. SaaS B2B típicos tardan más porque tienen períodos de prueba largos o billing anual.

## 6. Equilibrio operativo mensual (revenue ≥ burn)

Definición: mes en el que **revenue mensual ≥ burn mensual**.

```
Burn promedio mensual (Base, año 1) ≈ USD 7.499
Revenue mensual necesario (referencia) ≈ mismo orden que burn por tramo
Farmacias activas necesarias (ARPF placeholder 45) ≈ 7.371 / 45
                             ≈ 164 farmacias (tramo “bajo” mes 7–12)
```

El burn **real** va por **tramos** **7.402 / 7.738 / 7.371** ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3). La proyección Base llega a **120** activas mes 12 con revenue **USD 5.400** vs burn **USD 7.371** → **no** hay equilibrio en M12 con ARPF 45 sin cambiar supuestos ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 y §1.4).

**Lectura:** equilibrio mensual **posterior a mes 12** salvo mitigaciones (mix Pro/Enterprise, GMV real, más firmas o ajuste de gasto).

## 7. Cohort analysis simulado

Ejemplo: cohort de 10 farmacias firmadas en el mes 4, con churn 5% mensual.

| Mes | Farmacias activas de la cohort | ARPF acumulado de la cohort |
|---|---|---|
| 4 | 10,0 | USD 450 |
| 5 | 9,5 | USD 877 |
| 6 | 9,0 | USD 1.282 |
| 9 | 7,7 | USD 2.420 |
| 12 | 6,6 | USD 3.412 |
| 18 | 4,8 | USD 4.961 |
| 24 | 3,5 | USD 6.108 |

Después de 24 meses (mes 28 del calendario), la cohort sigue generando USD 158/mes y todavía no se ha extinguido.

**Lectura:** el modelo es suma de cohorts; cada nuevo mes se añade una cohort nueva mientras las viejas se extinguen lentamente. Para el año 3 hay 12+ cohorts simultáneas pagando.

### 7.1 Guía de lectura (qué significa la tabla)

**Qué es una cohort**  
Una cohort es un **grupo de farmacias que firmaron el mismo mes**. Aquí se toma **10 farmacias que entran en el mes 4** y se sigue solo a ese grupo en el tiempo.

**Columna “Farmacias activas de la cohort”**  
Es cuántas de esas **10** siguen activas **mes a mes** si cada mes se van **5%** (churn) de las que quedaban el mes anterior. Los números con decimales (9,5; 9,0; …) son un **promedio** típico en modelos; en la realidad son farmacias enteras, pero la matemática del churn se expresa así.

**Columna “ARPF acumulado de la cohort”**  
Es el **dinero total** que ese grupo ha pagado a Zonix **sumando todos los meses** desde que empezó (desde el mes 4 del ejemplo). Se asume **USD 45 por farmacia y por mes** (el **placeholder** ARPF del pack). Por ejemplo: en el mes 5 el grupo paga aproximadamente **9,5 × 45** ese mes; el acumulado **877** incluye lo del mes 4 más lo del mes 5 (con redondeos de la tabla).

**La frase “USD 158/mes” y “mes 28”**  
**24 meses después** del inicio de la cohort (mes 4 + 24 = **mes 28** del calendario de la empresa), aún quedan **~3,5** farmacias activas de las 10 originales. Ese resto paga ~**3,5 × 45 ≈ 158 USD al mes**. **“Todavía no se ha extinguido”** significa que la cohort no llega a cero: con churn 5% queda un **rabo** de clientes que siguen un tiempo generando ingreso.

**Por qué importa la “Lectura” de abajo**  
En operación real **no** hay una sola cohort: cada mes entran **nuevas** farmacias. El **revenue total** de la plataforma es la **suma** de muchas cohortes (las viejas se van apagando y las nuevas entran). Por eso al **año 3** puede haber **12+ cohortes** a la vez aportando.

**En una frase:** la tabla es un **ejemplo numérico** de cómo **10 farmacias** que entran juntas generan ingreso mes a mes y cómo el **churn** reduce ese grupo; sirve para pensar el negocio en **capas de cohortes**, no solo “una farmacia suelta”.

## 8. Comparación con benchmarks reales

| Métrica | Zonix Pharma | Farmalisto (México/Colombia) | Promedio SaaS B2B SMB LatAm |
|---|---|---|---|
| Modelo cobro | Cuota + % GMV (híbrido) | Comisión + delivery | Subscription |
| LTV / CAC | **~8,3x** | ~5x estimado | 3-5x |
| Payback CAC | **~2,4 meses** | ~10-14 meses estimado | 12-18 meses |
| Churn mensual | 5% (target) | ~6% estimado | 5-7% |
| Gross margin | ~92% (software / plataforma; sin logística directa del medicamento) | ~65% (incluye costo logístico) | ~70-80% |

**Lectura para el inversor:** Zonix Pharma tiene buen payback y LTV/CAC frente a benchmarks porque **no** opera logística directa del medicamento (intermediación + software). Los ratios usan **ARPF placeholder (USD 45)** y **CAC con 2× Sales (USD 109)** hasta datos de piloto.

## 9. Sensibilidades al modelo

### Caso pesimista

- ARPF: USD 35 (mix desfavorable).
- CAC: USD 130 (Sales B2B menos eficiente).
- Churn: 8% mensual.
- LTV: USD 437.
- LTV/CAC: 3,4x.
- Payback CAC: 3,7 meses.
- Break-even mensual: **~165+** farmacias activas (referencia vs burn **~USD 7,5k**/mes y ARPF USD 35).
- **Implicación:** se llegaría a break-even más allá del mes 12 del plan base. Se necesitaría capital extra o recorte de burn para extender runway.

### Caso optimista

- ARPF: USD 55 (mix favorable).
- CAC: USD 75 (marketing orgánico funciona bien).
- Churn: 4% mensual.
- LTV: USD 1.375.
- LTV/CAC: 18,3x.
- Payback CAC: 1,4 meses.
- Break-even mensual: 82 farmacias activas.
- **Implicación:** break-even en mes 8-9. Año 2 con revenue mensual USD 12-15k.

## 10. Conclusión

| Métrica | Valor |
|---|---|
| **ARPF** | USD 45/mes *(placeholder hasta GMV piloto)* |
| **CAC** | USD **109** *(2× Sales + supuestos §3)* |
| **Lifetime promedio** | 20 meses |
| **LTV** | USD 900 |
| **LTV/CAC** | **~8,3x** |
| **Payback CAC** | **~2,4 meses** |
| **Equilibrio operativo mensual** | **Post-M12** con ARPF 45 y burn replanteado ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.4) |
| **Margen bruto del modelo** | ~92% |

**Para el inversor:**
> Zonix Pharma compite en unit economics con marketplace farmacéuticos LatAm comparables (Farmalisto): cobro **híbrido** (fija + % bajo sobre GMV) mantiene take-rate total **muy inferior** al de agregadores tipo Rappi; no opera logística directa del medicamento. Los ratios usan **ARPF placeholder (USD 45)** y **CAC USD 109** hasta recalibración con GMV piloto.

## 11. Documentos hermanos

- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): cómo se traduce a flujo mes a mes.
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md): de dónde sale el burn Base (~USD **7.499**/mes promedio; tramos **7.402 / 7.738 / 7.371**).
- [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md): de dónde sale el SAM extendido.
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md): fuentes de churn LatAm y benchmarks Farmalisto.
