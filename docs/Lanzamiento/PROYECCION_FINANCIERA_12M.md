# Proyección financiera 12 meses (+ año 2 y 3 + plan contingencia)

> **Última actualización:** 11 junio 2026 (tiers Lean 101k / Base 118k / Growth 135k).
> Documento que traduce los unit economics y el presupuesto a un flujo mes a mes para los 3 escenarios.
> Cifras en USD constantes con buffer 20% ya aplicado al burn.

## 0. Fase 0 (T+0 → Day-D = T+90) — antes del mes 1 del modelo

**Convención:** **T+0** = wire del capital **USD 101.000**. **Day-D** = **T+90** = inicio del piloto público en app = **M1** de la tabla §1.1. En esos **~90 días** se ejecuta constitución, equipo, HQ, stack productivo, onboarding de farmacias piloto y pre-lanzamiento (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)). El **burn** y los **one-shots** de esa ventana se consolidan aquí; **M1** **no** vuelve a cargar one-shots.

### 0.1 Outflow Fase 0 (orden de magnitud, FP&A)

| Sub-fase | Período | Componentes | Outflow (USD) |
|---|---|---|---|
| **0a** | T+0 a T+30 | One-shots **Lean §2.2** (**~9.808**) + burn parcial (fundación legal, founder, Co-CEO, HQ mínimo, stack sin equipo comercial completo — proxy **~3.325**) | **~13.133** |
| **0b** | T+30 a T+60 | Burn mensual tramo A (**7.462**) — equipo ya armado | **7.462** |
| **0c** | T+60 a T+90 | Burn mensual tramo A (**7.462**) — onboarding farmacias + pre-Day-D | **7.462** |
| **Total Fase 0** | | | **~28.057** |
| **Caja al Day-D (inicio M1)** | | **101.000 − 28.057** | **~72.943** |

> **Lectura:** la caja disponible para el **primer mes de operación comercial en app** es **~USD 72.943** (no **101.000**). La tabla §1.3 despliega M1–M12 desde esa base.

## 1. Modelo del escenario Lean — USD 101.000 (mínimo viable)

> **Nota tiers:** la tabla §1.1 corresponde al **Lean (mínimo viable)**. **Base (118k)** y **Growth (135k)** heredan la misma curva de revenue; el delta es **burn mayor + reserva** — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3–§4.

**Nota modelo comercial:** el revenue de farmacias en la tabla §1.1 usa **ARPF USD ~50/mes** como placeholder ([UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)): mix **60/30/10** Basic/Pro/Enterprise con cuota fija **USD 25 / 40 / 55** y la **misma** parte variable % GMV que §5 B2B. El cobro vigente sigue siendo **híbrido** ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5); conviene **recalibrar la columna Revenue** cuando haya GMV piloto.

**Nota replante operativo (mayo 2026):** el **burn** mensual integra **HQ casa USD 500**, **sueldo founder USD 1.000**, **sueldo Co-CEO USD 1.000**, **stack IA ~USD 425/mes**, **4× Sales B2B** — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.1 / §2.3. CapEx **4 PCs** en **Fase 0**. Ticket **Lean = USD 101.000**; reserva **+490** §2.4. **Equilibrio mensual M11** (~**151 activas**).

### 1.1 Tabla mes a mes

**Convención:** **M1** = primer mes **después de Day-D (T+90)**. La tabla es el **caso central de planning** (**sin** waiver promocional de **cuota USD 0** en meses 1–2 del piloto B2B — ver [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §11 y fila **«con waiver»** al pie).

| Mes | Farmacias firmadas | Farmacias activas | Revenue (USD/mes) | Burn (USD/mes) | Cash flow mensual | Cash flow acumulado |
|---|---|---|---|---|---|---|
| 1 | 13 | 40 | 1.500 | 7.462 | -5.962 | -5.962 |
| 2 | 13 | 51 | 2.168 | 7.462 | -5.294 | -11.256 |
| 3 | 14 | 62 | 3.100 | 7.798 | -4.698 | -15.954 |
| 4 | 15 | 74 | 3.700 | 7.798 | -4.098 | -20.052 |
| 5 | 15 | 85 | 4.250 | 7.798 | -3.548 | -23.600 |
| 6 | 16 | 97 | 4.850 | 7.798 | -2.948 | -26.548 |
| 7 | 16 | 108 | 5.400 | 7.431 | -2.031 | -28.579 |
| 8 | 16 | 119 | 5.950 | 7.431 | -1.481 | -30.060 |
| 9 | 17 | 130 | 6.500 | 7.431 | -931 | -30.991 |
| 10 | 17 | 141 | 7.050 | 7.431 | -381 | -31.372 |
| **11** | **17** | **151** | **7.550** | **7.431** | **+119** | **-31.253** |
| 12 | 16 | 159 | 7.950 | 7.431 | +519 | -30.734 |
| **Total año 1 (sin waiver)** | **175** | **159** *(M12)* | **59.968** | **90.702** | **—** | **—** |
| **Total año 1 (con waiver primeras 10)** | **175** | **159** *(M12)* | **~59.515** | **90.702** | **—** | **—** |

> **Lectura (versión sin waiver, planning principal):** cash flow operativo acumulado **M1–M12** **~−USD 30.734** (columna *Cash flow acumulado* mes 12). Con **caja Day-D ~USD 72.943** (tras **Fase 0** §0.1), el **cash en caja** al cierre del año 1 (M12) queda **~USD 42.209** (ver §1.3). Burn recurrente por tramo: **7.462 / 7.798 / 7.431** USD/mes ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3), incluye **Co-CEO USD 1.000/mes** y **4× Sales**.
>
> **Lectura (versión con waiver B2B — cuota USD 0 meses 1–2 cohort inicial):** la fila **«con waiver primeras 10»** asume **~USD 453** menos de ingreso acumulado año 1 vs. sin waiver (**proxy** — **recalibrar** con FP&A cuando se fije política de waiver). **Cash en caja** cierre año 1 **~USD 41.756**. **Break-even mensual:** **mes 11** en el caso central sin waiver.

**Nota FP&A — origen del proxy waiver (~453):** supuesto comercial [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §11: **primeras 10 farmacias**, **cuota fija USD 0** en **meses 1–2** de relación (GMV se mide igual). El ajuste **~453** en la fila «con waiver» de §1.1 es un **proxy** hasta modelo por cohorte: orden de magnitud **10 farmacias × ~2 meses × ~USD 20–25** de componente cuota media en meses tempranos del caso sin waiver (no sustituye recálculo si la política comercial amplía alcance o incluye % GMV). **Planning principal del inversor:** fila **sin waiver** y caja M12 **~42.209**.

### 1.2 Hipótesis aplicadas al modelo

- **Tasa de churn mensual:** **5%** como **objetivo** de retención B2B (coherente con [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)). La columna *Farmacias activas* de §1.1 es el **stock operativo** al cierre de mes; incorpora **pre-carga** de **~28 activas** al Day-D (Fase 0) y rampa comercial **4×** Sales. Para due diligence, **la tabla §1.1 es fuente de verdad** hasta recalibrar con datos de piloto.
- **Revenue vs. `activas × ARPF ~50`:** en meses iniciales el revenue puede quedar **por debajo** del placeholder por **billing parcial** y mix GMV ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5.6); a partir de **M11** el modelo muestra **revenue ≥ burn** con **~151 activas**.
- **Tasa de firma:** **~175** firmas en 12 meses post-Day-D (curva agresiva alineada a **4** vendedores × **10** visitas/día en ventana comercial — ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §2.5–2.6). **La tasa de cierre real está `[PENDIENTE Sales Lead — dato T+60]`**: hasta entonces la curva §1.1 es **hipótesis de capacidad de canal**, no compromiso — sanity check bottom-up en [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) §3.1 (Steve Blank L6.14).
- **Mix tier (referencia revenue):** 60% Basic / 30% Pro / 10% Enterprise → ARPF efectivo **USD ~50/mes** hasta actualizar por bandas GMV híbridas.
- **Equipo comercial:** **4 ejecutivos Sales B2B** (USD **120** fijo c/u + **USD 30**/firma); comisiones implícitas en **~175** altas año → línea Sales **~USD 801**/mes de media.
- **Marketing digital:** **Meta Ads** — **USD 800/mes** meses **1–6**, **USD 500/mes** meses **7–12** (promedio **~USD 650**/mes), coherente con [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3.
- **One-shots:** **~USD 9.808** en **Fase 0** (incluye CapEx **4 PCs** — no en M1).
- **Buffer 20% (ponderado):** ya incorporado en los **USD/mes** de burn por tramo (misma metodología que el documento de presupuesto).

### 1.3 Capital deployment

| Mes | Cash inicial | Inflow | Outflow | Cash final |
|---|---|---|---|---|
| **Day-D (M1)** | **72.943** | 1.500 | 7.462 | 66.981 |
| 2 | 66.981 | 2.168 | 7.462 | 61.687 |
| 3 | 61.687 | 3.100 | 7.798 | 56.989 |
| 4 | 56.989 | 3.700 | 7.798 | 52.891 |
| 5 | 52.891 | 4.250 | 7.798 | 49.343 |
| 6 | 49.343 | 4.850 | 7.798 | 46.395 |
| 7 | 46.395 | 5.400 | 7.431 | 44.364 |
| 8 | 44.364 | 5.950 | 7.431 | 42.883 |
| 9 | 42.883 | 6.500 | 7.431 | 41.952 |
| 10 | 41.952 | 7.050 | 7.431 | 41.571 |
| 11 | 41.571 | 7.550 | 7.431 | 41.690 |
| 12 | 41.690 | 7.950 | 7.431 | **42.209** |

> **Lectura:** al cierre del **año 1 post-Day-D (M12)**, Zonix Pharma tiene **USD ~42.209 de cash** (~**42%** del capital **USD 101.000** recibido en T+0, **neto** de **Fase 0** y del cash flow operativo M1–M12), con **Co-CEO** + **4×** Sales y cuota **25/40/55**, **sin** bono piloto ni **delivery fee subsidiado** en el burn ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.1 / §2.3). **Equilibrio mensual** en **M11** (revenue **7.550** > burn **7.431**).
>
> **Waiver B2B (opcional):** con la variante **«con waiver primeras 10»** (**~USD 453** menos de inflow acumulado año 1 — ver §1.1), la caja al cierre M12 es **~USD 41.756** (misma cadena de **Outflow**).

### 1.4 Break-even y mitigaciones (post-replante)

Con **burn ~7.431–7.798** USD/mes y **ARPF placeholder ~50**, el **caso central** de §1.1 alcanza **equilibrio mensual** en **mes 11** (**~151 activas**, revenue **7.550**). Si la curva de firmas o el ARPF real quedan **por debajo**, **mitigaciones:** (1) subir ARPF efectivo con **mix Pro/Enterprise** o GMV real; (2) acelerar **firmas** o reducir churn; (3) **timing** de gastos (IA, bonus variables, **entrada escalonada** sueldo Co-CEO o **reducir** headcount Sales si la curva lo permite); (4) **bridge** trimestral si el inversor lo acepta.

## 2. Año 2 — proyección conservadora `[LARGO PLAZO — no ancla pre-seed]`

> §2 y §3 son **rangos direccionales sin GMV piloto**: no usarlos como ancla en pitch ni due diligence pre-seed; recalcular con datos reales post-Day-D. Las anclas del pack son §0–§1 (año 1).

### 2.1 Hipótesis año 2

- Expansión a Maracay (mes 13-14) y Maracaibo (mes 18).
- Sin nueva ronda de capital.
- Marketing digital + Sales B2B se replica con costos similares en ambas ciudades.
- Churn estabiliza en 5%.

### 2.2 Tabla agregada año 2

| Trimestre año 2 | Farmacias activas | Revenue mensual | Burn mensual | Cash flow trimestral (aprox.) |
|---|---|---|---|---|
| Q1 (mes 13-15) | 130-160 | 5.850-7.200 | 7.500-8.000 (sube por Maracay) | **−2.500 a −1.200** |
| Q2 (mes 16-18) | 165-185 | 7.425-8.325 | 7.800-8.200 (sube por Maracaibo) | **−400 a +800** |
| Q3 (mes 19-21) | 190-205 | 8.550-9.225 | 8.000-8.500 | **+1.500 a +2.700** |
| Q4 (mes 22-24) | 210-225 | 9.450-10.125 | 8.000-8.500 | **+4.000 a +5.500** |
| **Total año 2** | **220 (cierre)** | **8.000-9.000 promedio** | **~7.500-8.500** | **~USD 3.000-7.000 cash positivo acumulado** |

> **Lectura FP&A:** Q1–Q2 pueden ser **ligeramente negativos** en cash operativo (expansión Maracay/Maracaibo antes de escala revenue). El rango **+3k–+7k** anual es conservador vs. la lectura anterior (+30–40k). Recalcular con datos reales post-M12.

### 2.3 Revenue anual proyectado año 2

```
Revenue total año 2 = ~USD 96.000-108.000
Burn total año 2 = ~USD 90.000-102.000
EBITDA año 2 = ~USD −6.000 a +18.000 (break-even operativo hacia fin de año 2; no asumir +20-30k sin recalibrar)
```

### 2.4 Burn año 2 — desglose conceptual (due diligence)

*Orden de magnitud para preguntas de fondo pre-Serie A; líneas finales las cierra FP&A con contador.*

| Rubro | USD/mes (orden) | Notas |
|---|---|---|
| Equipo core (Sales, CS, Marketing, Coordinador de Partners Logísticos) | 2.000-2.800 | Replica parcial segundo ciudad |
| Hosting + SaaS + APIs | 150-250 | Escala MAU/GMV |
| Marketing digital (2 ciudades) | 900-1.400 | Meta/Google geo |
| Legal / contador / asesor puntual | 400-600 | Base + puntual |
| Oficina + servicios VE | 350-500 | FX-sensitive |
| Imprevistos / buffer | 400-600 | Mantiene discipline |
| **Total burn mensual año 2** | **~7.500-8.500** | Alineado §2.2; expansión Maracay/Maracaibo sin duplicar HQ ni founder |

## 3. Año 3 — proyección con primera serie A potencial `[LARGO PLAZO — no ancla pre-seed]`

### 3.1 Hipótesis año 3

- Cobertura nacional: Caracas + Barquisimeto (además de Valencia, Maracay, Maracaibo).
- **Posible Serie A en mes 28-30** con ticket USD 500k-1M.
- Si se levanta Serie A: el SAFE actual convierte. El cap **USD 600k** (**Lean**) determina equity del inversor del piloto.
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
3. Renegociar arriendo HQ (casa/local San Diego / Av. Bolívar Norte).
4. Evaluar reducción 1 hire (ej. **Coordinador de Partners Logísticos** si hay < 30 órdenes/día).

**Efecto:** burn mensual baja a **~USD 5.500–6.300** (cortes plausibles: valla **350** + Meta **~50%** **~400** + 1 hire **~300–400** ≈ **~1.050–1.150** ahorro vs. burn Lean **~7.500**). Runway extendido **~1–2 meses** adicionales según mix de cortes.

### 4.2 Trigger 2: Adopción real < 50% del plan en mes 6

**Trigger:** farmacias activas < **48** en mes 6 post-Day-D (vs. plan **97** en M6 — §1.1).

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
| Tasa de firma mensual | **~15**/mes post-Day-D (curva §1.1) | 8-22 | Pivot ofertas si < 8; añadir Sales si > 22 sostenido |
| Churn mensual | 5% | 3-7% | Activar retención si > 7% |
| ARPF | USD **~50** *(placeholder hasta recalibrar con bandas GMV híbridas; cuota fija 25/40/55)* | USD 35-55 | Revisar mix por banda / GMV si < 35 |
| CAC | USD **139** | USD 90-170 | Revisar canales si > 170 |
| Inflación VE (valor base / narrativa) | **Trayectoria BCV 2026:** desaceleración hacia **un dígito mensual desde may. 2026**; acumulado anual orden **~134-220%** si se cumple guía oficial — escenario **stress** **387-618%** (Anova/Cendas/Ecoanalítica) | 200-1.000% (stress) | Activar plan contingencia si escenario stress > 800% o devaluación > 100% trimestral |
| **FX Bs/USD (Treasury)** | Tipo **BCV** oficial movilidad alta (ej. referencia pack mayo 2026 **~497 Bs/USD**, **+66% YTD** orden de magnitud) | Devaluación > 15% mensual vs. plan | Acelerar conversión USD→Bs para gastos locales; revisar política en [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §2.3 |

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

- Adopción 50% del plan: **~80** farmacias activas en mes 12 post-Day-D vs. plan **~159**.
- Churn 7% mensual.
- ARPF USD 40.
- Revenue mes 12: orden magnitud **~USD 3.200** (80 × 40).
- **Cash al cierre año 1 (M12):** **por debajo** del caso central **~USD 42.209** (orden magnitud **USD 25–32k** si se materializa; refinar FP&A con burn **~7,4k**). Runway acortado vs. plan.
- **Acción:** acelerar Serie A o bridge round mes 12-14.

### 7.2 Escenario base (probabilidad 50%)

- Lo descrito en sección 1.

### 7.3 Escenario optimista (probabilidad 30%)

- Adopción 130% del plan: **~207** farmacias activas en mes 12 post-Day-D vs. plan **~159**.
- Churn 4% mensual.
- ARPF USD 55 (más Pro, Enterprise y GMV en app sobre la base 25/40/55).
- Revenue mes 12: USD **~11.385** *(207 × 55 orden de magnitud; refinar con mix real).*
- **Cash al cierre año 1 (M12):** **~USD 48–55k** (orden magnitud sobre despliegue **101k** + Fase 0; refinar con FP&A). Runway extra vs. Base.
- **Acción:** evaluar expansión más agresiva año 2 o levantar Serie A en mes 18 con métricas más fuertes.

## 8. Coherencia con el resto del pack

- Capital pedido **USD 101k** (**Lean — mínimo viable**) coincide con [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [README.md](README.md), [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).
- Burn por tramo (**7.462 / 7.798 / 7.431**) y promedio **~7.559** coinciden con [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3.
- ARPF USD **~50** (placeholder), CAC USD **139**, churn 5%, LTV USD **1.000** coinciden con [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).
- **Break-even operativo mensual (revenue ≥ burn):** en el caso central §1.1, **mes 11** con **~151 activas**; ver §1.4 y [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md).
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
| **T+90** (= **Day-D**; inicio **M1** financiero §1.1) | Piloto estable: catálogo, Rx, pagos manuales, delivery | PMF operativo ciudad 1 |
| **T+180** | **Asistente farmacológico IA** (informativo, límites legales) | Conversión carrito + educación paciente |
| **T+270** | **Módulo comparación / borrador pedido droguerías** | Retención B2B, menos fricción abastecimiento |
| **T+360** | Informes BI avanzados, mejoras ranking/fraud rules | Preparación Serie A |

*Prioridades exactas se validan con discovery post-Day-D; dependencias: presupuesto API IA (~USD 50-100/mes inicial — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §6).*
