# Unit Economics — Zonix Pharma

> **Última actualización:** 4 mayo 2026.
> Documento que explica cómo gana dinero Zonix Pharma a nivel de farmacia individual.
> Todos los números están propagados al [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) y al [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).

## 1. Modelo simple

Zonix Pharma cobra a la farmacia una membresía mensual fija en USD. **No cobra comisión sobre GMV.** Es un SaaS B2B + marketplace en costo unitario.

```
Revenue por farmacia = ARPF mensual × Lifetime promedio
                     = USD 45 × 20 meses
                     = USD 900 (LTV)
```

```
Costo de adquirir farmacia = USD 94 (CAC)
```

```
LTV / CAC = 900 / 94 = 9.6x
```

```
Payback CAC = 94 / 45 = 2.1 meses
```

## 2. ARPF (Average Revenue Per Farmacia)

Mix de tiers en farmacia activa:

| Tier | Precio | % del portafolio asumido | Contribución al ARPF |
|---|---|---|---|
| Basic | USD 25/mes | 60% | USD 15 |
| Pro | USD 60/mes | 30% | USD 18 |
| Enterprise | USD 120/mes | 10% | USD 12 |
| **ARPF total** | | | **USD 45/mes** |

**Justificación del mix:**
- 60% Basic porque la mayoría de farmacias del piloto son independientes con 1 sucursal y GMV < USD 1.500/mes.
- 30% Pro porque hay un grupo claro de farmacias con buen movimiento (USD 1.500-5.000 GMV/mes).
- 10% Enterprise porque las cadenas pequeñas (3-8 sucursales) son raras pero altamente valiosas.

**Sensibilidad:** si el mix cambia a 70/25/5 (peor), ARPF baja a USD 41. LTV baja a USD 820. LTV/CAC sigue siendo > 8x. Aceptable.

## 3. CAC (Customer Acquisition Cost)

**Construcción bottom-up del CAC:**

| Componente | Costo por farmacia firmada |
|---|---|
| Comisión Sales B2B (USD 30 fijo + USD 30 por firma) | USD 30 (marginal por firma) |
| Costo proporcional Sales B2B fijo (USD 120/mes ÷ 8 farmacias firmadas/mes promedio en cruise mode) | USD 15 |
| Marketing digital geo-targeteado (Meta + Google Ads B2B) | USD 25 |
| Material impreso, brochures, demos | USD 5 |
| Customer Support proporcional para onboarding inicial | USD 10 |
| Pérdida en farmacias que cancelan en primer mes (10% de las firmadas) | USD 9 |
| **CAC total promedio** | **USD 94** |

**Sensibilidad:** si subimos comisión Sales a USD 50 por firma para acelerar adopción, CAC sube a USD 114. LTV/CAC = 7,9x. Aún muy bueno.

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
| 3% | 33 meses | USD 1.485 | 15,8x | Excelente — solo si el producto resulta ser muy sticky. |
| 5% (base) | 20 meses | USD 900 | 9,6x | **Caso base, conservador.** |
| 7% | 14 meses | USD 630 | 6,7x | Aceptable, alarma de optimización. |
| 10% | 10 meses | USD 450 | 4,8x | Marginal, requiere intervención. |
| 15% | 6,7 meses | USD 300 | 3,2x | Insostenible. Trigger de pivote. |

**Decisión:** el modelo se construye con 5%. Si churn supera 7% en mes 6, se activa plan de retención (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)).

## 5. Payback CAC

```
Payback = CAC / ARPF
        = USD 94 / USD 45
        = 2,1 meses
```

**Lectura:** la farmacia paga su propio costo de adquisición en menos de 2 meses y medio. Después de eso, es ganancia.

**Benchmark SaaS B2B:**
- Excelente: < 12 meses.
- Bueno: 12-18 meses.
- Aceptable: 18-24 meses.

**Zonix Pharma: 2,1 meses.** Esto es porque la membresía se paga mensual desde el primer día. SaaS B2B típicos tardan más porque tienen períodos de prueba largos o billing anual.

## 6. Mes break-even operativo

Definición: mes en el que **revenue mensual ≥ burn mensual**.

```
Burn promedio mensual = USD 4.521
Revenue mensual necesario = USD 4.521
Farmacias activas necesarias = 4.521 / 45
                             = 100,5 farmacias
```

Con cushion de 6,5%: **107 farmacias activas para break-even**.

**Mes en que se alcanza:** mes 11 según el modelo de [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).

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

## 8. Comparación con benchmarks reales

| Métrica | Zonix Pharma | Farmalisto (México/Colombia) | Promedio SaaS B2B SMB LatAm |
|---|---|---|---|
| Modelo cobro | Membresía fija | Comisión + delivery | Subscription |
| LTV / CAC | 9,6x | ~5x estimado | 3-5x |
| Payback CAC | 2,1 meses | ~10-14 meses estimado | 12-18 meses |
| Churn mensual | 5% (target) | ~6% estimado | 5-7% |
| Gross margin | ~92% (membresía pura, costos servidor mínimos) | ~65% (incluye costo logístico) | ~70-80% |

**Lectura para el inversor:** Zonix Pharma tiene mejores unit economics que Farmalisto en payback y gross margin porque NO opera logística directa, solo intermedia. La logística la operan farmacias (catálogo) y empresas de delivery (entrega).

## 9. Sensibilidades al modelo

### Caso pesimista

- ARPF: USD 35 (mix 75% Basic / 20% Pro / 5% Enterprise).
- CAC: USD 130 (Sales B2B menos eficiente).
- Churn: 8% mensual.
- LTV: USD 437.
- LTV/CAC: 3,4x.
- Payback CAC: 3,7 meses.
- Break-even mensual: 129 farmacias activas.
- **Implicación:** se llegaría a break-even en mes 13-14, no en mes 11. Se necesitaría capital extra USD 8-15k para extender runway.

### Caso optimista

- ARPF: USD 55 (mix 50% Basic / 35% Pro / 15% Enterprise).
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
| **ARPF** | USD 45/mes |
| **CAC** | USD 94 |
| **Lifetime promedio** | 20 meses |
| **LTV** | USD 900 |
| **LTV/CAC** | **9,6x** |
| **Payback CAC** | 2,1 meses |
| **Break-even operativo** | Mes 11 con 107 farmacias activas |
| **Margen bruto del modelo** | ~92% |

**Para el inversor:**
> Zonix Pharma tiene unit economics superiores a marketplace farmacéuticos LatAm comparables (Farmalisto), gracias al modelo de membresía fija (sin compresión por comisión) y a no operar logística directa. LTV/CAC de 9,6x con payback de 2,1 meses indica un negocio escalable: cada dólar de marketing genera USD 9,60 de revenue lifetime, recuperado en menos de 3 meses.

## 11. Documentos hermanos

- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): cómo se traduce a flujo mes a mes.
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md): de dónde sale el burn USD 4.521.
- [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md): de dónde sale el SAM extendido.
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md): fuentes de churn LatAm y benchmarks Farmalisto.
