# Unit Economics — Zonix Pharma

> **Última actualización:** 30 julio 2026 (UE ARPF/CAC/LTV; burn Lean pitch = Excel **~14.346**/mes / **172.152**/Y1; esc.1 P&L costos M1 **11.411** / M2 **14.846** / M3–12 **14.346**).
> Documento que explica cómo gana dinero Zonix Pharma a nivel de farmacia individual.
> Cifras base propagadas al [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) y al [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).

## 1. Modelo simple

Zonix Pharma cobra a la farmacia un **servicio de plataforma** en formato **híbrido:** **cuota fija** + **fee porcentual sobre el GMV del mes en app**, según **tier** (Basic / Pro / Enterprise) y **bandas de GMV** definidos en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5. Tasas esc.1 Excel: **Basic 8% / Pro 7% / Enterprise 5%** (rango **5–8%**), por debajo del take-rate tipo agregador (25-35% GMV).

Para **proyecciones de runway** del pack se usa **ARPF USD ~52/mes** como **placeholder** (Excel v4) (ingreso medio por farmacia activa al mix **60/30/10** Basic/Pro/Enterprise con cuota **45 / 60 / 70** + % GMV) **hasta** recalibrar con **mix real** de tiers y GMV en piloto. Ese valor **no** sustituye al modelo híbrido: es solo ancla numérica; el P&L esc.1 usa cuota + comisión GMV (ingresos Y1 **228.796**).

```
Revenue por farmacia = ARPF mensual × Lifetime promedio
                     = USD 52 × 20 meses
                     = USD 1.040 (LTV)   ← placeholder hasta ARPF híbrido medido
```

```
Costo de adquirir farmacia = USD 139 (CAC)   ← construcción §3 (Sales B2B; headline conservador)
```

```
LTV / CAC = 1.040 / 139 ≈ 7,5x
```

```
Payback CAC = 139 / 52 ≈ 2,7 meses
```

## 2. ARPF (Average Revenue Per Farmacia)

**Modelo vigente (cobro):** cuota fija **USD 45 / 60 / 70** por nivel + **% sobre GMV** en app por banda. El ARPF contable será **suma de cuota + fee variable** cada mes.

**Placeholder USD ~52/mes:** se conserva en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) y resúmenes hasta tener **GMV en app** y distribución por tier. Al actualizar ARPF, recalcular LTV, LTV/CAC y payback en este documento y en los hermanos.

**Sensibilidad (ARPF más bajo):** si el ARPF efectivo fuera **USD 41/mes** (mix desfavorable), LTV = **USD 820**; LTV/CAC ≈ **5,9x** con CAC base **USD 139**. Sigue por encima del umbral típico “> 3x” SaaS SMB. Con el **esc.1 vigente** (pricing 45/60/70 + % GMV), el equilibrio FCF mensual es desde **M5** (FCF M1–M4 negativo; cash Day-D **187.152**).

### 2.1 WTP y pricing (lente monetizing-innovation)

| Concepto | Aplicación Zonix | Regla pack |
|----------|------------------|------------|
| Valor económico para la farmacia | Visibilidad digital + pedidos + menos fricción Rx vs solo mostrador | Cualitativo hasta GMV real post-Day-D |
| WTP (techo) | Lo que la farmacia acepta vs cuota **45/60/70** + % GMV (esc.1 v4) | Comparar con ARPF **~52** placeholder |
| Cercas de precio | Bandas por GMV (Basic / Pro / Enterprise) | [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5 — **no** cambiar % sin decisión founder |
| **Recalibración ARPF** | Tras **≥30 días** post-Day-D con GMV y mix tier medidos | Actualizar §2, PROYECCION §1.1, BRIEF — **no** antes de piloto |
| **Mom-test pre-Day-D** | **≥3** entrevistas pricing (cuota **45/60/70** + % GMV — esc.1 v4) con hechos pasados | Evidencia en [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §4.0 fila 5 — **no** inventar WTP sin minutas |
| Waiver piloto | Primeras 10 farmacias, 2 meses sin cuota fija | Solo si está en contrato; recalcular PROYECCION §1.1 fila waiver |

**Nota:** ARPF **~52** es **placeholder** hasta recalibrar con mix real de tiers y GMV en piloto.

## 3. CAC (Customer Acquisition Cost)

**Construcción bottom-up del CAC** (alineada a **4× Sales** en tier Lean y **~8 farmacias firmadas/mes** en régimen de crucero para el **cálculo del CAC**; la curva comercial v3.3 asume **~185 firmas/año (~15/mes pico)** en [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.1 — **stock de activas** es fuente de verdad para revenue):

| Componente | Costo por farmacia firmada |
|---|---|
| Comisión Sales B2B (USD 40 por firma) | USD 40 |
| Costo proporcional fijo **4×** Sales Lean (base **1.400**/mes ÷ **~16** firmas/mes — capacidad canal) | USD **~88** |
| Marketing digital geo-targeteado (Meta + canales B2B) | USD 25 |
| Material impreso, brochures, demos | USD 5 |
| Customer Support proporcional para onboarding inicial | USD 10 |
| Pérdida en farmacias que cancelan en primer mes (10% de las firmadas) | USD 9 |
| **Suma bottom-up explícita** | **USD ~177** |
| **CAC headline pitch (conservador redondeado v3.3)** | **USD 139** *(no cambiar sin decisión founder; recalcular post-piloto)* |

**Sensibilidad:** si la comisión marginal sube a **USD 50** por firma para acelerar adopción, CAC sube **+USD 20** → **USD 159**; LTV/CAC ≈ **6,5x** (LTV **1.040**). Aún sólido frente a benchmarks 3-5x.

**Nota dual de denominador (Steve Blank L6.14 — capacidad de canal):** el **CAC 139** usa **~8 firmas/mes** (régimen crucero, escenario **conservador** — ancla del pitch). Si el equipo sostiene mayor ritmo de firmas, el prorrateo fijo baja y el CAC implícito sería menor — el **139** incorpora margen de seguridad. **No cambiar el headline 139 sin decisión founder.** Puente con MODELO S3.2: el costo Sales base Lean **~USD 1.400/mes** (4×350) + comisiones al ritmo de firmas.

## 4. LTV (Lifetime Value)

**Construcción:**

```
LTV = ARPF × (1 / churn mensual)
LTV = USD 52 × (1 / 0,05)
LTV = USD 52 × 20 meses
LTV = USD 1.040
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
| 3% | 33 meses | USD 1.733 | ~12,5x | Excelente — solo si el producto resulta ser muy sticky. |
| 5% (base) | 20 meses | USD 1.040 | **~7,5x** | **Caso base (ARPF ~52).** |
| 7% | 14 meses | USD 743 | ~5,3x | Aceptable, alarma de optimización. |
| 10% | 10 meses | USD 520 | ~3,7x | Marginal, requiere intervención. |
| 15% | 6,7 meses | USD 347 | ~2,5x | Insostenible. Trigger de pivote. |

**Decisión:** el modelo se construye con 5%. Si churn supera 7% en mes 6, se activa plan de retención (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)).

## 5. Payback CAC

```
Payback = CAC / ARPF
        = USD 139 / USD 52
        ≈ 2,7 meses
```

**Lectura:** la farmacia cubre el costo de adquisición en **~2,7 meses** de cuota+fee **al nivel del placeholder ARPF**; al medir ARPF híbrido real, recalcular payback.

**Benchmark SaaS B2B:**
- Excelente: < 12 meses.
- Bueno: 12-18 meses.
- Aceptable: 18-24 meses.

**Zonix Pharma: ~2,7 meses** con los supuestos actuales. SaaS B2B típicos tardan más porque tienen períodos de prueba largos o billing anual.

## 6. Equilibrio operativo mensual (revenue ≥ burn)

Definición: mes en el que **revenue mensual ≥ burn mensual**.

**Esc.1 vigente (v4 — pricing 45/60/70 + % GMV):**

```
Burn promedio mensual (Lean Excel esc.1, año 1) ≈ USD 11.411–14.346 (esc.1) — Total Y1 169.717
Revenue M1 esc.1 = USD **7.520** (Excel Año 1; ARPF ~52 + cuota 45/60/70 + % GMV)
→ M1: ingresos 7.520 < costos 11.411; FCF+ desde M5
FCF Y1 esc.1: **+59.079**; break-even mensual desde **M5**; cash M12 **246.231** (187.152 + 59.079)
```

**Lectura:** el caso central esc.1 asume **~185 firmas** en 12 meses post-Day-D con **4× Sales** (Lean 237.412). Ask único: **USD 237.412** @ cap **600k**.

## 7. Cohort analysis simulado

Ejemplo: cohort de 10 farmacias firmadas en el mes 4, con churn 5% mensual.

| Mes | Farmacias activas de la cohort | ARPF acumulado de la cohort |
|---|---|---|
| 4 | 10,0 | USD 520 |
| 5 | 9,5 | USD 1.014 |
| 6 | 9,0 | USD 1.482 |
| 9 | 7,7 | USD 2.797 |
| 12 | 6,6 | USD 3.943 |
| 18 | 4,8 | USD 5.732 |
| 24 | 3,5 | USD 7.058 |

Después de 24 meses (mes 28 del calendario), la cohort sigue generando ~**USD 182/mes** (3,5 × 52) y todavía no se ha extinguido.

**Lectura:** el modelo es suma de cohorts; cada nuevo mes se añade una cohort nueva mientras las viejas se extinguen lentamente. Para el año 3 hay 12+ cohorts simultáneas pagando.

### 7.1 Guía de lectura (qué significa la tabla)

**Qué es una cohort**  
Una cohort es un **grupo de farmacias que firmaron el mismo mes**. Aquí se toma **10 farmacias que entran en el mes 4** y se sigue solo a ese grupo en el tiempo.

**Columna “Farmacias activas de la cohort”**  
Es cuántas de esas **10** siguen activas **mes a mes** si cada mes se van **5%** (churn) de las que quedaban el mes anterior. Los números con decimales (9,5; 9,0; …) son un **promedio** típico en modelos; en la realidad son farmacias enteras, pero la matemática del churn se expresa así.

**Columna “ARPF acumulado de la cohort”**  
Es el **dinero total** que ese grupo ha pagado a Zonix **sumando todos los meses** desde que empezó (desde el mes 4 del ejemplo). Se asume **USD ~52 por farmacia y por mes** (el **placeholder** ARPF del pack). Por ejemplo: en el mes 5 el grupo paga aproximadamente **9,5 × 52** ese mes; el acumulado **974** incluye lo del mes 4 más lo del mes 5 (con redondeos de la tabla).

**La frase “USD 182/mes” y “mes 28”**  
**24 meses después** del inicio de la cohort (mes 4 + 24 = **mes 28** del calendario de la empresa), aún quedan **~3,5** farmacias activas de las 10 originales. Ese resto paga ~**3,5 × 52 ≈ 182 USD al mes**. **“Todavía no se ha extinguido”** significa que la cohort no llega a cero: con churn 5% queda un **rabo** de clientes que siguen un tiempo generando ingreso.

**Por qué importa la “Lectura” de abajo**  
En operación real **no** hay una sola cohort: cada mes entran **nuevas** farmacias. El **revenue total** de la plataforma es la **suma** de muchas cohortes (las viejas se van apagando y las nuevas entran). Por eso al **año 3** puede haber **12+ cohortes** a la vez aportando.

**En una frase:** la tabla es un **ejemplo numérico** de cómo **10 farmacias** que entran juntas generan ingreso mes a mes y cómo el **churn** reduce ese grupo; sirve para pensar el negocio en **capas de cohortes**, no solo “una farmacia suelta”.

## 8. Comparación con benchmarks reales

| Métrica | Zonix Pharma | Farmalisto (México/Colombia) | Promedio SaaS B2B SMB LatAm |
|---|---|---|---|
| Modelo cobro | Cuota + % GMV (híbrido) | Comisión + delivery | Subscription |
| LTV / CAC | **~7,5x** | ~5x estimado | 3-5x |
| Payback CAC | **~2,7 meses** | ~10-14 meses estimado | 12-18 meses |
| Churn mensual | 5% (target) | ~6% estimado | 5-7% |
| Gross margin | ~92% (software / plataforma; sin logística directa del medicamento) | ~65% (incluye costo logístico) | ~70-80% |

> **Nota AUD-05:** el ~92% es margen bruto de plataforma **antes** de waiver comercial §11 (cuota USD 0 meses 1–2 primeras 10 farmacias) y antes de S&M variable. Margen **post-waiver** requiere recalibración FP&A post-piloto.

**Lectura para el inversor:** Zonix Pharma tiene buen payback y LTV/CAC frente a benchmarks porque **no** opera logística directa del medicamento (intermediación + software). Los ratios usan **ARPF placeholder (USD ~52)** y **CAC USD 139** hasta datos de piloto.

## 9. Sensibilidades al modelo

### Caso pesimista

- ARPF: USD 35 (mix desfavorable).
- CAC: USD 130 (Sales B2B menos eficiente).
- Churn: 8% mensual.
- LTV: USD 437.
- LTV/CAC: 3,4x.
- Payback CAC: 3,7 meses.
- **Break-even mensual (fórmula ARPF×N):** con burn Lean Excel esc.1 **~USD 11.411–14.346** y **ARPF 35**, hacen falta **~326–410** farmacias (no ~159). Con **ARPF ~52** → **~219–276** activas. La curva comercial ref. **~159 M12** **no** alcanza BE por fórmula ARPF×N a 35 — escenario pesimista de UE.
- **Implicación:** el **BE FCF M5** del esc.1 (P&L híbrido Excel) **no** se transfiere al caso ARPF 35; son lentes distintas (híbrido vs ARPF×N).

### Caso optimista

- ARPF: USD 55 (mix favorable).
- CAC: USD 75 (marketing orgánico funciona bien).
- Churn: 4% mensual.
- LTV: USD 1.375.
- LTV/CAC: 18,3x.
- Payback CAC: 1,4 meses.
- **Break-even mensual (fórmula explícita):** con burn Excel esc.1 **~USD 11.411–14.346** y **ARPF 55** → **~189–195** farmacias.
- **Implicación:** con ARPF ~55 y cuota 45/60/70 + % GMV, el proyecto tiene BE FCF desde **M5** (FCF M1–M4 negativo; cash Day-D **187.152**).

## 10. Conclusión

| Métrica | Valor |
|---|---|
| **ARPF** | USD **~52**/mes *(placeholder hasta GMV piloto; cuota 45/60/70 + % GMV — esc.1 v4)* |
| **CAC** | USD **139** *(Sales + supuestos §3)* |
| **Lifetime promedio** | 20 meses |
| **LTV** | USD 1.040 |
| **LTV/CAC** | **~7,5x** |
| **Payback CAC** | **~2,7 meses** |
| **Equilibrio operativo mensual** | **M5** (esc.1: FCF M1–M4 negativo; cash M12 **246.231**) |
| **Margen bruto del modelo** | ~92% |

**Para el inversor:**
> Zonix Pharma compite en unit economics con marketplace farmacéuticos LatAm comparables (Farmalisto): cobro **híbrido** (fija + % bajo sobre GMV) mantiene take-rate total **muy inferior** al de agregadores tipo Rappi; no opera logística directa del medicamento. Los ratios usan **ARPF placeholder (USD ~52)** y **CAC USD 139** hasta recalibración con GMV piloto.

## 11. Documentos hermanos

- [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) + [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx): consolidado gastos/ingresos/egresos y sensibilidad.
- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): cómo se traduce a flujo mes a mes.
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md): desglose Lean por línea (esc.1).
- [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx): burn **Lean Excel** (~USD **14.346**/mes; Y1 **172.152**); tramos esc.1 **11.411 / 14.846 / 14.346**.
- [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md): de dónde sale el SAM extendido.
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md): fuentes de churn LatAm y benchmarks Farmalisto.
