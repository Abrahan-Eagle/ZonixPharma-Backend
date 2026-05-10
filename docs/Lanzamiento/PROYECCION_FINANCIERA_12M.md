# Proyección financiera 12 meses (+ año 2 y 3 + plan contingencia)

> **Última actualización:** 10 mayo 2026.
> Documento que traduce los unit economics y el presupuesto a un flujo mes a mes para los 3 escenarios.
> Cifras en USD constantes con buffer 20% ya aplicado al burn.

## 1. Modelo del escenario Base (USD 101k)

**Nota modelo comercial:** el revenue de farmacias en la tabla usa **ARPF USD 45/mes** como placeholder ([UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)). El cobro vigente es **híbrido fija + % GMV** ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5); conviene **recalibrar la columna Revenue** cuando haya GMV piloto sin alterar la lectura principal de burn/runway.

**Nota replante operativo (mayo 2026):** el **burn** mensual integra **HQ casa USD 500**, **sueldo founder USD 1.000**, **sueldo Co-CEO / CEO operativo USD 1.000**, **stack IA ~USD 425/mes** y **replante salarial** (CS+CM, Marketing, Delivery). Los **CapEx 4 PCs** van en **one-shots** mes 1 (**no** en el burn recurrente) — alineado a [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3 y §6.1. El ticket **Base** sube de **USD 95k** a **USD 101k** para absorber **~12.000 USD/año** del segundo al mando sin romper el cierre contable del presupuesto. Con **ARPF 45** y la **misma curva de farmacias**, el **equilibrio mensual** (revenue ≥ burn) queda **después del mes 12**; mitigaciones: mix de tier / GMV, acelerar firmas, ajuste de gasto fijo, **entrada escalonada** del sueldo Co-CEO o **bridge** a mitad de año (ver §1.4).

### 1.1 Tabla mes a mes

**Convención:** la tabla siguiente es el **caso central de planning** (**sin** waiver promocional de **cuota USD 0** en meses 1–2 del piloto B2B — ver [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §11 y fila **«con waiver»** al pie). Así el runway **no** sobrestima caja frente a una promesa comercial opcional.

| Mes | Farmacias firmadas | Farmacias activas | Revenue (USD/mes) | Burn (USD/mes) | Cash flow mensual | Cash flow acumulado |
|---|---|---|---|---|---|---|
| 1 | 5 | 5 | 35 | 7.402 | -7.367 | -7.367 |
| 2 | 6 | 10 | 165 | 7.402 | -7.237 | -14.604 |
| 3 | 6 | 15 | 360 | 7.738 | -7.378 | -21.982 |
| 4 | 8 | 22 | 765 | 7.738 | -6.973 | -28.955 |
| 5 | 10 | 31 | 1.215 | 7.738 | -6.523 | -35.478 |
| 6 | 11 | 41 | 1.665 | 7.738 | -6.073 | -41.551 |
| 7 | 12 | 51 | 2.115 | 7.371 | -5.256 | -46.807 |
| 8 | 14 | 64 | 2.700 | 7.371 | -4.671 | -51.478 |
| 9 | 15 | 78 | 3.330 | 7.371 | -4.041 | -55.519 |
| 10 | 14 | 92 | 3.870 | 7.371 | -3.501 | -59.020 |
| **11** | **14** | **107** | **4.815** | **7.371** | **-2.556** | **-61.576** |
| 12 | 13 | 120 | 5.400 | 7.371 | -1.971 | -63.547 |
| **Total año 1 (sin waiver)** | **128** | **120** | **26.435** | **89.982** | **-63.547** | |
| **Total año 1 (con waiver primeras 10)** | **128** | **120** | **26.235** | **89.982** | **-63.747** | |

> **Lectura (versión sin waiver, planning principal):** cash flow operativo acumulado **~−USD 63.547** (columna *Cash flow acumulado* mes 12). Con **USD 101.000** de capital y **~USD 10.408** de one-shots mes 1 (bloque **Base §3.2** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md): Lean **5.058** + depósito/amueblado HQ + adecuación + **CapEx 4 PCs**; **no** incluye sueldos **Co-CEO**/founder, que van en **burn**), el **cash en caja** al cierre del año 1 queda **~USD 27.045** (ver §1.3). Burn recurrente por tramo: **7.402 / 7.738 / 7.371** USD/mes ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3), incluye **Co-CEO USD 1.000/mes**.
>
> **Lectura (versión con waiver B2B — cuota USD 0 meses 1–2 cohort inicial):** la fila **«con waiver primeras 10»** asume **~USD 200** menos de ingreso acumulado año 1 vs. sin waiver (**condonación** proxy de los ingresos modelados en **meses 1 y 2**; coherente con **35 + 165** en la tabla sin waiver). **Cash en caja** cierre año 1 **~USD 26.845** (ver [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md) §8.1). Si el waiver se aplicara distinto (p. ej. más farmacias o más meses), **recalcular** con FP&A. **Break-even mensual** con ARPF 45 y burn actual: **posterior a mes 12** salvo mejora de mix/GMV o curva de farmacias.

### 1.2 Hipótesis aplicadas al modelo

- **Tasa de churn mensual:** 5% aplicado a farmacias activas del mes anterior.
- **Tasa de firma:** crece de 5 (mes 1) a 15 (mes 9), luego se estabiliza en 13-14/mes.
- **Mix tier (referencia revenue):** 60% Basic / 30% Pro / 10% Enterprise → ARPF efectivo **USD 45/mes** hasta actualizar por bandas GMV híbridas.
- **Equipo comercial:** **2 ejecutivos Sales B2B** (USD **120** fijo c/u + **USD 30**/firma); comisiones implícitas en el volumen de firmas del modelo (~**128** altas año → **~USD 560**/mes de línea Sales de media).
- **Marketing digital:** **Meta Ads** — **USD 800/mes** meses **1–6**, **USD 500/mes** meses **7–12** (promedio **~USD 650**/mes), coherente con [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3.
- **One-shots:** **~USD 10.408** en el mes 1 (incluye CapEx **4 PCs** — no en el burn recurrente).
- **Buffer 20% (ponderado):** ya incorporado en los **USD/mes** de burn por tramo (misma metodología que el documento de presupuesto).

### 1.3 Capital deployment

| Mes | Cash inicial | Inflow | Outflow | Cash final |
|---|---|---|---|---|
| 1 | 101.000 | 35 | 17.810 (7.402 burn + 10.408 one-shots) | 83.225 |
| 2 | 83.225 | 165 | 7.402 | 75.988 |
| 3 | 75.988 | 360 | 7.738 | 68.610 |
| 4 | 68.610 | 765 | 7.738 | 61.637 |
| 5 | 61.637 | 1.215 | 7.738 | 55.114 |
| 6 | 55.114 | 1.665 | 7.738 | 49.041 |
| 7 | 49.041 | 2.115 | 7.371 | 43.785 |
| 8 | 43.785 | 2.700 | 7.371 | 39.114 |
| 9 | 39.114 | 3.330 | 7.371 | 35.073 |
| 10 | 35.073 | 3.870 | 7.371 | 31.572 |
| 11 | 31.572 | 4.815 | 7.371 | 29.016 |
| 12 | 29.016 | 5.400 | 7.371 | 27.045 |

> **Lectura:** al cierre del año 1, Zonix Pharma tiene **USD ~27.045 de cash** (~**27%** del capital **USD 101.000** recibido) con el replante de costos fijos + **Co-CEO**. El colchón sigue permitiendo **arranque de año 2** sin ronda obligatoria inmediata si el revenue cumple trayectoria — ver sensibilidades §7.
>
> **Waiver B2B (opcional):** la tabla anterior es **sin** waiver. Con la variante **«con waiver primeras 10»** (**~USD 200** menos de inflow acumulado año 1 — ver §1.1), la caja al cierre año 1 es **~USD 26.845** (misma cadena de **Outflow**, inflow reducido en **35** mes 1 y **165** mes 2 respecto a la columna mostrada).

### 1.4 Break-even y mitigaciones (post-replante)

Con **burn ~7.371–7.738** USD/mes y **ARPF placeholder 45**, hacen falta **>~165 farmacias activas** al mix actual para cubrir burn solo con cuota modelo (orden de magnitud). La tabla §1.1 llega a **120** activas al mes 12 → **no** hay equilibrio mensual en mes 12 sin cambiar supuestos. **Mitigaciones:** (1) subir ARPF efectivo con **mix Pro/Enterprise** o GMV real; (2) acelerar **firmas** o reducir churn; (3) **timing** de gastos (IA, bonus variables, **entrada escalonada** sueldo Co-CEO); (4) **bridge** trimestral si el inversor lo acepta.

## 2. Año 2 — proyección conservadora

### 2.1 Hipótesis año 2

- Expansión a Maracay (mes 13-14) y Maracaibo (mes 18).
- Sin nueva ronda de capital.
- Marketing digital + Sales B2B se replica con costos similares en ambas ciudades.
- Churn estabiliza en 5%.

### 2.2 Tabla agregada año 2

| Trimestre año 2 | Farmacias activas | Revenue mensual | Burn mensual | Cash flow trimestral |
|---|---|---|---|---|
| Q1 (mes 13-15) | 130-160 | 5.850-7.200 | 5.500 (sube por Maracay) | +650 a +5.100 |
| Q2 (mes 16-18) | 165-185 | 7.425-8.325 | 6.000 (sube por Maracaibo) | +4.275 a +6.975 |
| Q3 (mes 19-21) | 190-205 | 8.550-9.225 | 6.500 | +6.150 a +8.175 |
| Q4 (mes 22-24) | 210-225 | 9.450-10.125 | 6.500 | +8.850 a +10.875 |
| **Total año 2** | **220 (cierre)** | **8.000-9.000 promedio** | **6.000-6.500** | **~USD 30.000-40.000 cash positivo** |

### 2.3 Revenue anual proyectado año 2

```
Revenue total año 2 = ~USD 96.000-108.000
Burn total año 2 = ~USD 75.000
EBITDA año 2 = ~USD 20.000-30.000 positivo
```

### 2.4 Burn año 2 — desglose conceptual (due diligence)

*Orden de magnitud para preguntas de fondo pre-Serie A; líneas finales las cierra FP&A con contador.*

| Rubro | USD/mes (orden) | Notas |
|---|---|---|
| Equipo core (Sales, CS, Marketing, Delivery Ops) | 2.000-2.800 | Replica parcial segundo ciudad |
| Hosting + SaaS + APIs | 150-250 | Escala MAU/GMV |
| Marketing digital (2 ciudades) | 900-1.400 | Meta/Google geo |
| Legal / contador / asesor puntual | 400-600 | Base + puntual |
| Oficina + servicios VE | 350-500 | FX-sensitive |
| Imprevistos / buffer | 400-600 | Mantiene discipline |
| **Total burn mensual año 2** | **~5.500-6.500** | Alineado §2.2 |

## 3. Año 3 — proyección con primera serie A potencial

### 3.1 Hipótesis año 3

- Cobertura nacional: Caracas + Barquisimeto (además de Valencia, Maracay, Maracaibo).
- **Posible Serie A en mes 28-30** con ticket USD 500k-1M.
- Si se levanta Serie A: el SAFE actual convierte. El cap **USD 600k** (Base) determina equity del inversor del piloto.
- Sin Serie A: revenue año 3 sostiene operación + crecimiento moderado.

### 3.2 Tabla agregada año 3 (sin Serie A — caso conservador)

| Trimestre año 3 | Farmacias activas | Revenue mensual | Burn mensual |
|---|---|---|---|
| Q1 | 240-280 | 10.800-12.600 | 7.500 |
| Q2 | 290-330 | 13.050-14.850 | 8.500 |
| Q3 | 340-380 | 15.300-17.100 | 9.500 |
| Q4 | 400-440 | 18.000-19.800 | 10.500 |
| **Total año 3** | **440 (cierre)** | **15.000-17.000 promedio** | **8.500-9.500** |

### 3.3 Revenue anual proyectado año 3

```
Revenue total año 3 = ~USD 180.000-204.000
Si éxito: ~USD 480.000 (cobertura completa nacional con Serie A)
```

## 4. Plan de contingencia ante shocks macroeconómicos

### 4.1 Trigger 1: Devaluación bolívar > 100% en un trimestre

**Acciones inmediatas (en orden de prioridad):**

1. Cortar valla publicitaria (USD 350-700/mes ahorrados).
2. Reducir delivery fee subsidiado a USD 0.
3. Reducir **Meta Ads** a **50%** del plan (ahorro orden **USD 250–400**/mes según tramo).
4. Renegociar coworking u oficina (cambio a coworking más barato si ya estaba en oficina propia).
5. Evaluar reducción 1 hire (ej. Delivery Ops Coordinator si hay < 30 órdenes/día).

**Efecto:** burn mensual baja a USD 3.000-3.300. Runway extendido 4-6 meses adicionales.

### 4.2 Trigger 2: Adopción real < 50% del plan en mes 6

**Trigger:** farmacias activas < 21 en mes 6 (vs. plan de 41).

**Acciones:**

1. Revisar pricing: ofrecer 6 meses Basic gratis a farmacias del piloto inicial.
2. Cambiar comisión Sales B2B: de USD 30/firma a USD 60/firma (mantener motivación).
3. Marketing digital exclusivamente B2B (no B2C todavía).
4. Encuesta cualitativa a farmacias rechazadas.
5. Considerar pivote comercial: si rechazan el paquete de bandas/% vigente, evaluar ajuste de **umbrales o porcentajes** (política comercial, no producto).

### 4.3 Trigger 3: Churn > 8% mensual durante 3 meses consecutivos

**Acciones:**

1. Programa de retención: Customer Support contacta directamente a farmacias en riesgo.
2. Reducción de tier sin penalty (Pro → Basic sin sobrecosto).
3. Análisis de causa: encuesta a las que cancelaron.
4. Mejoras de producto basadas en feedback.

### 4.4 Trigger 4: Regulación nueva sobre marketplaces farmacéuticos

**Acciones:**

1. Asesor regulatorio externo activado (**USD 200-500/mes ad hoc** si hay **emergencia** regulatoria; en escenario **Growth** ya existe **USD 120/mes** recurrente — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §4.1).
2. Pause de onboarding nuevo mientras se evalúa cumplimiento.
3. Modificación operativa según requisitos.
4. Comunicación transparente al inversor.

## 5. Variables que afectan la proyección y rango aceptable

| Variable | Valor base | Rango aceptable | Acción si fuera del rango |
|---|---|---|---|
| Tasa de firma mensual | 8-15 | 5-20 | Pivot ofertas si < 5; añadir Sales si > 20 |
| Churn mensual | 5% | 3-7% | Activar retención si > 7% |
| ARPF | USD 45 *(placeholder hasta recalibrar con bandas GMV híbridas)* | USD 35-55 | Revisar mix por banda / GMV si < 35 |
| CAC | USD **109** | USD 80-150 | Revisar canales si > 150 |
| Inflación VE (valor base / narrativa) | **Trayectoria BCV 2026:** desaceleración hacia **un dígito mensual desde may. 2026**; acumulado anual orden **~134-220%** si se cumple guía oficial — escenario **stress** **387-618%** (Anova/Cendas/Ecoanalítica) | 200-1.000% (stress) | Activar plan contingencia si escenario stress > 800% o devaluación > 100% trimestral |
| **FX Bs/USD (Treasury)** | Tipo **BCV** oficial movilidad alta (ej. referencia pack mayo 2026 **~497 Bs/USD**, **+66% YTD** orden de magnitud) | Devaluación > 15% mensual vs. plan | Acelerar conversión USD→Bs para gastos locales; revisar política en [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §3.3 |

## 6. Métricas que se reportan al inversor

### 6.1 Mensuales (los primeros 6 meses)

- Cash en banco al cierre del mes.
- Burn rate del mes.
- Revenue del mes.
- Farmacias firmadas / activas / canceladas.
- Pedidos totales y GMV agregado.
- Tickets de soporte.
- Issues técnicos abiertos.

### 6.2 Trimestrales (después de mes 6)

- Lo anterior agregado.
- LTV / CAC actualizado.
- Mix de tiers actual.
- NPS B2B y B2C.
- Métricas operativas (tiempo entrega, validación Rx, % dispute).
- Plan próximos 90 días.
- Solicitud de aprobación si se sale del plan en > 15%.

### 6.3 Plantilla de investor update (email mensual, meses 1-6)

**Asunto:** Zonix Pharma — Investor update [Mes / Año]

**Cuerpo (bullets obligatorios):**

1. **Cash** al cierre del mes (USD) y **burn** del mes.
2. **Revenue** del mes (servicio plataforma farmacias: fija + % GMV) vs. plan.
3. **Farmacias:** activas / nuevas altas / bajas (churn).
4. **Operación:** pedidos completados; GMV agregado si se acuerda compartirlo con el inversor.
5. **Hitos** del plan [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) cumplidos o desviados (con causa).
6. **Riesgos** top 1-3 y mitigación en curso.
7. **Ask** opcional al inversor (intros, mentores, follow-on).

**Adjuntos opcionales:** export CSV métricas; captura dashboard anonimizado.

**FX / bolívares:** reportar cifras operativas en **USD** con nota de tipo de cambio de referencia usado para gastos locales; contador consolida libros según norma VE.

### 6.4 Dashboard operativo (COO) — KPIs consolidados

| Área | KPI | Frecuencia |
|---|---|---|
| Comercial | Firmas/mes, activaciones/mes, tiempo medio onboarding (días) | Semanal |
| Producto | Pedidos/día, GMV, validaciones Rx/día, incidentes P1 | Diario |
| Soporte | Tickets/mes por FTE CS (**referencia LatAm:** ~200-400 tickets/mes por agente) | Mensual |
| Delivery | Tiempo promesa vs. real, NPS entrega, disputas | Mensual |
| Finanzas | Burn, runway meses, cobro farmacias (% mora) | Mensual |
| Datos | Calidad cierre GMV vs. facturación, discrepancias por farmacia | Mensual |

### 6.5 Métricas de producto (CPO) — investor update opcional

A partir de mes 4: **DAU/MAU**, **retención D7/D30** compradores, adopción features (Rx upload, tracking). No bloquean runway; refuerzan narrativa Serie A.

## 7. Escenarios pesimista y optimista

### 7.1 Escenario pesimista (probabilidad 20%)

- Adopción 50% del plan: 60 farmacias en mes 12 vs. plan 120.
- Churn 7% mensual.
- ARPF USD 40.
- Revenue mes 12: USD 2.400.
- **Cash al cierre año 1:** **por debajo** del caso central **~USD 27.045** (orden magnitud **USD 18–24k** si se materializa; refinar FP&A con burn **~7,4k**). Runway acortado vs. plan.
- **Acción:** acelerar Serie A o bridge round mes 12-14.

### 7.2 Escenario base (probabilidad 50%)

- Lo descrito en sección 1.

### 7.3 Escenario optimista (probabilidad 30%)

- Adopción 130% del plan: 156 farmacias en mes 12.
- Churn 4% mensual.
- ARPF USD 50 (más Pro y Enterprise).
- Revenue mes 12: USD 7.800.
- **Cash al cierre año 1:** **~USD 34–42k** (orden magnitud sobre despliegue **101k**; refinar con FP&A). Runway extra vs. Base.
- **Acción:** evaluar expansión más agresiva año 2 o levantar Serie A en mes 18 con métricas más fuertes.

## 8. Coherencia con el resto del pack

- Capital pedido **USD 101k** (Base) coincide con [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [README.md](README.md), [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).
- Burn por tramo (**7.402 / 7.738 / 7.371**) y promedio **~7.499** coinciden con [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3.
- ARPF USD 45 (placeholder), CAC USD **109**, churn 5%, LTV USD 900 coinciden con [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).
- **Break-even operativo mensual (revenue ≥ burn):** con el replante de costos fijos y ARPF 45 **no** se alcanza en mes 12 en la tabla §1.1; ver §1.4 y [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md).
- TAM USD 1.638M y SAM Valencia 226 farmacias coinciden con [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md).

## 9. Documentos hermanos

- [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md): resumen.
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md): construcción de ARPF, CAC, LTV.
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md): detalle del burn.
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md): fuentes de cifras macro.
- [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md): cap table y SAFE post-money cap.

## 10. Roadmap de producto (referencia T+X)

| Ventana | Entrega | Objetivo |
|---|---|---|
| **T+90** | Piloto estable: catálogo, Rx, pagos manuales, delivery | PMF operativo ciudad 1 |
| **T+180** | **Asistente farmacológico IA** (informativo, límites legales) | Conversión carrito + educación paciente |
| **T+270** | **Módulo comparación / borrador pedido droguerías** | Retención B2B, menos fricción abastecimiento |
| **T+360** | Informes BI avanzados, mejoras ranking/fraud rules | Preparación Serie A |

*Prioridades exactas se validan con discovery post-Day-D; dependencias: presupuesto API IA (~USD 50-100/mes inicial — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §6).*
