# Proyección financiera 12 meses (+ año 2 y 3 + plan contingencia)

> **Última actualización:** 11 mayo 2026 (replante comercial: cuota fija **+USD 5** por tier **25/40/55**, **4×** Sales B2B, ARPF placeholder **~50**, burn tramos **7.462 / 7.798 / 7.431**; **sin** bono piloto farmacias ni **delivery fee subsidiado** en burn — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md); **última milla por concesión** a operador especializado).
> Documento que traduce los unit economics y el presupuesto a un flujo mes a mes para los 3 escenarios.
> Cifras en USD constantes con buffer 20% ya aplicado al burn.

## 1. Modelo del escenario Base (USD 101k)

**Nota modelo comercial:** el revenue de farmacias en la tabla usa **ARPF USD ~50/mes** como placeholder ([UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)): mix **60/30/10** Basic/Pro/Enterprise con cuota fija **USD 25 / 40 / 55** (+**USD 5** por nivel respecto al ancla histórico 20/35/50) y la **misma** parte variable % GMV que §5 B2B. El cobro vigente sigue siendo **híbrido** ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5); conviene **recalibrar la columna Revenue** cuando haya GMV piloto.

**Nota replante operativo (mayo 2026):** el **burn** mensual integra **HQ casa USD 500**, **sueldo founder USD 1.000**, **sueldo Co-CEO / CEO operativo USD 1.000**, **stack IA ~USD 425/mes**, **replante salarial** (CS+CM, Marketing, Delivery) y **4× ejecutivos Sales B2B** (USD **120** fijo c/u + **USD 30**/firma — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.1 / §3.3). Los **CapEx 4 PCs** van en **one-shots** mes 1 (**no** en el burn recurrente). El ticket **Base** sigue en **USD 101.000**; el **desglose** presupuestario tras retirar **bono piloto** y **delivery fee subsidiado** muestra **reserva positiva** (**+USD 484**) en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.4. Con **ARPF ~50** y la **misma curva de farmacias**, el **equilibrio mensual** (revenue ≥ burn) queda **después del mes 12**; mitigaciones en §1.4. **Última milla:** la ejecuta **empresa(s) concesionaria(s)** ([PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) cabecera; [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §1.1).

### 1.1 Tabla mes a mes

**Convención:** la tabla siguiente es el **caso central de planning** (**sin** waiver promocional de **cuota USD 0** en meses 1–2 del piloto B2B — ver [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §11 y fila **«con waiver»** al pie). Así el runway **no** sobrestima caja frente a una promesa comercial opcional.

| Mes | Farmacias firmadas | Farmacias activas | Revenue (USD/mes) | Burn (USD/mes) | Cash flow mensual | Cash flow acumulado |
|---|---|---|---|---|---|---|
| 1 | 5 | 5 | 39 | 7.462 | -7.423 | -7.423 |
| 2 | 6 | 10 | 183 | 7.462 | -7.279 | -14.702 |
| 3 | 6 | 15 | 400 | 7.798 | -7.398 | -22.100 |
| 4 | 8 | 22 | 850 | 7.798 | -6.948 | -29.048 |
| 5 | 10 | 31 | 1.350 | 7.798 | -6.448 | -35.496 |
| 6 | 11 | 41 | 1.850 | 7.798 | -5.948 | -41.444 |
| 7 | 12 | 51 | 2.350 | 7.431 | -5.081 | -46.525 |
| 8 | 14 | 64 | 3.000 | 7.431 | -4.431 | -50.956 |
| 9 | 15 | 78 | 3.700 | 7.431 | -3.731 | -54.687 |
| 10 | 14 | 92 | 4.300 | 7.431 | -3.131 | -57.818 |
| **11** | **14** | **107** | **5.350** | **7.431** | **-2.081** | **-59.899** |
| 12 | 13 | 120 | 6.000 | 7.431 | -1.431 | -61.330 |
| **Total año 1 (sin waiver)** | **128** | **120** | **29.372** | **90.702** | **-61.330** | |
| **Total año 1 (con waiver primeras 10)** | **128** | **120** | **29.150** | **90.702** | **-61.552** | |

> **Lectura (versión sin waiver, planning principal):** cash flow operativo acumulado **~−USD 61.330** (columna *Cash flow acumulado* mes 12). Con **USD 101.000** de capital y **~USD 9.808** de one-shots mes 1 (bloque **Base §3.2** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md): Lean **4.458** + depósito/amueblado HQ + adecuación + **CapEx 4 PCs**; **no** incluye sueldos **Co-CEO**/founder, que van en **burn**), el **cash en caja** al cierre del año 1 queda **~USD 29.862** (ver §1.3). Burn recurrente por tramo: **7.462 / 7.798 / 7.431** USD/mes ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3), incluye **Co-CEO USD 1.000/mes** y **4× Sales**.
>
> **Lectura (versión con waiver B2B — cuota USD 0 meses 1–2 cohort inicial):** la fila **«con waiver primeras 10»** asume **~USD 222** menos de ingreso acumulado año 1 vs. sin waiver (**condonación** proxy de los ingresos modelados en **meses 1 y 2**; coherente con **39 + 183** en la tabla sin waiver). **Cash en caja** cierre año 1 **~USD 29.640** (ver [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md) §8.1). Si el waiver se aplicara distinto (p. ej. más farmacias o más meses), **recalcular** con FP&A. **Break-even mensual** con ARPF ~50 y burn actual: **posterior a mes 12** salvo mejora de mix/GMV o curva de farmacias.

### 1.2 Hipótesis aplicadas al modelo

- **Tasa de churn mensual:** **5%** como **objetivo** de retención B2B (coherente con [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)). La columna *Farmacias activas* de §1.1 es el **stock operativo** al cierre de mes (cuentas con capacidad de operar en app); **no** se obtiene solo de la fórmula escolar `stock_{n−1} × 0,95 + firmas_n` sobre enteros, porque el modelo incorpora **calendario de activación** (carta de intención → onboarding → primera orden) y **bajas por no-activación**. Para due diligence, **la tabla §1.1 es fuente de verdad** hasta recalibrar con datos de piloto.
- **Revenue vs. `activas × ARPF ~50` (billing parcial y mix):** en meses **1–10** el **revenue** puede quedar **por debajo** de `farmacia_activas × USD 50` porque (1) las **altas del mes** suelen facturar **solo la parte proporcional** del período (días activos post-onboarding dentro del mes calendario), alineado a la política de **alta en mes parcial** ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5.6); (2) el **mix tier** (Basic/Pro/Enterprise) y el **fee % sobre GMV** pueden dejar el ingreso **bajo** el placeholder **50** hasta que el GMV en app madure. A partir de **mes 11** del caso central, el modelo muestra **revenue ≈ activas × 50** (cohorte mayoritariamente en régimen de facturación completa).
- **Tasa de firma:** crece de 5 (mes 1) a 15 (mes 9), luego se estabiliza en 13-14/mes.
- **Mix tier (referencia revenue):** 60% Basic / 30% Pro / 10% Enterprise → ARPF efectivo **USD ~50/mes** (cuota fija media +**USD 5**/farmacia vs. 20/35/50) hasta actualizar por bandas GMV híbridas.
- **Equipo comercial:** **4 ejecutivos Sales B2B** (USD **120** fijo c/u + **USD 30**/firma); comisiones implícitas en el volumen de firmas del modelo (~**128** altas año → **~USD 801**/mes de línea Sales de media con **4×** fijos + comisión sobre la misma curva de firmas).
- **Marketing digital:** **Meta Ads** — **USD 800/mes** meses **1–6**, **USD 500/mes** meses **7–12** (promedio **~USD 650**/mes), coherente con [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3.
- **One-shots:** **~USD 9.808** en el mes 1 (incluye CapEx **4 PCs** — no en el burn recurrente).
- **Buffer 20% (ponderado):** ya incorporado en los **USD/mes** de burn por tramo (misma metodología que el documento de presupuesto).

### 1.3 Capital deployment

| Mes | Cash inicial | Inflow | Outflow | Cash final |
|---|---|---|---|---|
| 1 | 101.000 | 39 | 17.270 (7.462 burn + 9.808 one-shots) | 83.769 |
| 2 | 83.769 | 183 | 7.462 | 76.490 |
| 3 | 76.490 | 400 | 7.798 | 69.092 |
| 4 | 69.092 | 850 | 7.798 | 62.144 |
| 5 | 62.144 | 1.350 | 7.798 | 55.696 |
| 6 | 55.696 | 1.850 | 7.798 | 49.748 |
| 7 | 49.748 | 2.350 | 7.431 | 44.667 |
| 8 | 44.667 | 3.000 | 7.431 | 40.236 |
| 9 | 40.236 | 3.700 | 7.431 | 36.505 |
| 10 | 36.505 | 4.300 | 7.431 | 33.374 |
| 11 | 33.374 | 5.350 | 7.431 | 31.293 |
| 12 | 31.293 | 6.000 | 7.431 | 29.862 |

> **Lectura:** al cierre del año 1, Zonix Pharma tiene **USD ~29.862 de cash** (~**30%** del capital **USD 101.000** recibido) con el replante de costos fijos + **Co-CEO** + **4×** Sales y cuota fija **25/40/55**, **sin** bono piloto ni **delivery fee subsidiado** en el burn ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.1 / §3.3). El colchón sigue permitiendo **arranque de año 2** sin ronda obligatoria inmediata si el revenue cumple trayectoria — ver sensibilidades §7.
>
> **Waiver B2B (opcional):** la tabla anterior es **sin** waiver. Con la variante **«con waiver primeras 10»** (**~USD 222** menos de inflow acumulado año 1 — ver §1.1), la caja al cierre año 1 es **~USD 29.640** (misma cadena de **Outflow**, inflow reducido según política de waiver vs. la columna mostrada).

### 1.4 Break-even y mitigaciones (post-replante)

Con **burn ~7.431–7.798** USD/mes y **ARPF placeholder ~50**, hacen falta **>~149–151 farmacias activas** al mix actual para cubrir burn solo con cuota modelo (orden de magnitud: **7.431 ÷ 50**; promedio anual **~7.559 ÷ 50**). La tabla §1.1 llega a **120** activas al mes 12 → **no** hay equilibrio mensual en mes 12 sin cambiar supuestos. **Mitigaciones:** (1) subir ARPF efectivo con **mix Pro/Enterprise** o GMV real; (2) acelerar **firmas** o reducir churn; (3) **timing** de gastos (IA, bonus variables, **entrada escalonada** sueldo Co-CEO o **reducir** headcount Sales si la curva de firmas lo permite); (4) **bridge** trimestral si el inversor lo acepta.

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
2. Reducir **Meta Ads** a **50%** del plan (ahorro orden **USD 250–400**/mes según tramo).
3. Renegociar coworking u oficina (cambio a coworking más barato si ya estaba en oficina propia).
4. Evaluar reducción 1 hire (ej. Delivery Ops Coordinator si hay < 30 órdenes/día).

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
| ARPF | USD **~50** *(placeholder hasta recalibrar con bandas GMV híbridas; cuota fija 25/40/55)* | USD 35-55 | Revisar mix por banda / GMV si < 35 |
| CAC | USD **139** | USD 90-170 | Revisar canales si > 170 |
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
- **Cash al cierre año 1:** **por debajo** del caso central **~USD 29.862** (orden magnitud **USD 20–26k** si se materializa; refinar FP&A con burn **~7,4k**). Runway acortado vs. plan.
- **Acción:** acelerar Serie A o bridge round mes 12-14.

### 7.2 Escenario base (probabilidad 50%)

- Lo descrito en sección 1.

### 7.3 Escenario optimista (probabilidad 30%)

- Adopción 130% del plan: 156 farmacias en mes 12.
- Churn 4% mensual.
- ARPF USD 55 (más Pro, Enterprise y GMV en app sobre la base 25/40/55).
- Revenue mes 12: USD 8.580 *(156 × 55 orden de magnitud; refinar con mix real).*
- **Cash al cierre año 1:** **~USD 35–43k** (orden magnitud sobre despliegue **101k**; refinar con FP&A). Runway extra vs. Base.
- **Acción:** evaluar expansión más agresiva año 2 o levantar Serie A en mes 18 con métricas más fuertes.

## 8. Coherencia con el resto del pack

- Capital pedido **USD 101k** (Base) coincide con [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [README.md](README.md), [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).
- Burn por tramo (**7.462 / 7.798 / 7.431**) y promedio **~7.559** coinciden con [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3.
- ARPF USD **~50** (placeholder), CAC USD **139**, churn 5%, LTV USD **1.000** coinciden con [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).
- **Break-even operativo mensual (revenue ≥ burn):** con el replante de costos fijos, **4×** Sales y ARPF ~50 **no** se alcanza en mes 12 en la tabla §1.1; ver §1.4 y [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md).
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
