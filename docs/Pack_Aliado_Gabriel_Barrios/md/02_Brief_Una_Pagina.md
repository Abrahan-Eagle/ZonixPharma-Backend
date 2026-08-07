> **Espejo Pack Aliado** (sync v7 7-ago-2026) desde Lanzamiento. Canon Excel v4 SAFE **237.412**; pricing **45/60/70 + %GMV 8/7/5**.

# Zonix Pharma — Brief de una página

> **Última actualización:** 7 agosto 2026 (estado producto: MVP técnico vs evidencia de mercado; Lean **USD 237.412** intacto).
> Documento ancla del pack. Léase primero. Todas las cifras están detalladas en los documentos hermanos del directorio [docs/Lanzamiento/](README.md).

## Qué es

**Zonix Pharma** es un marketplace farmacéutico **B2B2C** en Venezuela: el paciente compra en app; la **farmacia independiente o mediana** despacha; un **farmacéutico colegiado de esa farmacia** valida Rx cuando aplica; la **última milla** la hace un **partner** (`delivery_company` + agentes) bajo contrato marco — **sin flota propia** de Zonix.

**Para el inversor (una línea):** llevamos al canal que hoy paga **20–30%** a PedidosYa Pharmacy (o no tiene app propia) un stack digital con **fee bajo + Rx validado**, en un mercado pharma **existente** de USD 1,638M/año — no inventamos categoría ([CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §2.9). _(Rappi LatAm 25–35% = benchmark regional, no operador VE.)_

**Estado producto:** vertical farmacia sobre stack **~4 años**; capa Pharma (Rx, roles) **~30–45 días** ya invertidos. **Hoy (MVP técnico):** staging/VPS (`zonixpharma.com` / `pharma.aiblockweb.com`), **443** tests backend (re-verificar pre-reunión); Flutter en verde. **Evidencia de mercado (en curso):** demo producto 3–5 min + early adopters Valencia — ver [APRENDIZAJE_500_EVIDENCIA_MERCADO.md](APRENDIZAJE_500_EVIDENCIA_MERCADO.md). **Aún no:** Play Store / piloto con farmacias reales a escala. **Day-D (T+90):** OTP Firebase + tiendas + smoke E2E — hitos **T+7–12** Fase 0.

## Problema que resuelve

_StoryBrand — el paciente es el héroe; Zonix es la guía. Sin promesas terapéuticas._

**Para el paciente** _(problema externo: tiempo, stock, precio, receta)_

1. **Stock incierto y tiempo perdido:** recorrer 3–5 farmacias sin saber si tendrán el medicamento.
2. **Precio opaco:** sin comparador entre farmacias afiliadas, puede pagar más en la primera opción _(hipótesis piloto **15–25%**, no garantizada — [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md))_.
3. **Entrega sin trazabilidad:** el pedido “sale” pero no hay seguimiento en tiempo real ni visibilidad del repartidor partner.
4. **Receta en papel:** se pierde o se daña; quien paga desde el exterior no puede coordinar pedido y receta de forma digital.
5. **Dudas antes de comprar:** sin canal rápido para orientación informativa (genérico vs. original, etc.) — _asistente IA en roadmap Año 1 (no piloto)_.

**Para la farmacia mediana o independiente** _(problema externo: visibilidad, costo agregador, operación)_

1. **Competir sin app propia** frente a cadenas premium (Farmatodo, Locatel) y agregadores, sin marketplace ni delivery integrado.
2. **Comisión alta en agregadores:** **PedidosYa** (VE) suele retener **20–30%** del GMV digital; paga mucho sin herramientas propias de gestión. _(Rappi: referencia LatAm, no opera en VE.)_
3. **Operación fragmentada:** órdenes, inventario, comprobantes y Rx en WhatsApp y papel; poca trazabilidad y retrabajo.
4. **Captación limitada:** depende del tráfico a pie; poca coordinación entre marketing digital y presencia física.
5. **Compras a droguerías sin comparador:** catálogos en PDF/WhatsApp — _módulo proveedores en roadmap Año 1 (no piloto)_.

**Para el ecosistema**

- La receta médica venezolana sigue siendo física y vulnerable a errores. Zonix digitaliza la **validación** con el farmacéutico colegiado de cada farmacia — no sustituye al criterio médico ni al titular de la farmacia.

## Por qué ahora (timing)

1. **Mercado pharma VE está en recuperación post-crisis:** +17,49% YoY en unidades 2024-2025 (**Cifar**, datos IMS/IQVIA). Hace 2 años el mercado se contraía; en 2 años más estará cubierto por competidores digitales. **2026 es la ventana.**
2. **Stack ya construido:** el **stack Zonix Pharma** lleva ~4 años de desarrollo; el **fork al vertical farmacia** (capa Rx, roles Pharma) equivale a **~30–45 días de esfuerzo de producto** ya invertido — **no** confundir con **Fase 0 = T+90** (legal, equipo, onboarding farmacias y release en tiendas antes de Day-D — [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)).
3. **Competencia digital débil en VE:** **PedidosYa Pharmacy** cubre cadenas e independientes en marketplace generalista. Farmatodo y Locatel no abren marketplace B2B. **Early mover** en farmacias medianas e independientes (Valencia metro) — mercado **existente**, no categoría nueva ([CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §2.9).
4. **Métodos de pago manuales VE están maduros:** Pago Móvil C2P + Zelle + Binance Pay USDT cubren el 95% de la población bancarizada. Hace 5 años no era posible.

## Diferenciadores claros

- **Modelo B2B híbrido en USD** (cuota fija **45 / 60 / 70** + **%GMV 8 / 7 / 5** según banda — esc.1 v4): estructuralmente muy por debajo del take-rate **20–30% GMV** típico de **PedidosYa** en VE. Detalle en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5.
- **Validación Rx por farmacéutico colegiado de la propia farmacia** dentro de la app, ya construida en backend. Modelo alineado a regulación farmacéutica VE _[PENDIENTE dictamen abogado + farmacéutico asesor antes de Day-D]_; Zonix **no** sustituye al farmacéutico titular de la farmacia.
- **Métodos de pago manuales VE soportados nativos:** Pago Móvil C2P, transferencia, Zelle, Binance Pay USDT — sin pasarelas internacionales caras, sin Stripe, sin necesidad de cuenta empresarial extranjera para operar.
- **Stack en staging/VPS** (go-live público T+7–12 Fase 0): backend con **443** tests pasando (re-verificar pre-reunión); frontend Flutter sin issues en analyze; Pusher + FCM integrados en código. **Release tiendas + Firebase OTP (SMS):** hitos **T+7–12** de Fase 0 — no asumir Play/App Store el día del wire ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md)).
- **Equipo lean:** **CEO** + **Founder CEO/CTO** + **Co-CEO** + **Dev** + **4× Sales** + **CS/CM** + externos (contador/abogado) en tier **Lean 237.412** (bootstrap **Carabobo independientes**). Runway **Fase 0 + 12 meses** post-Day-D con **USD 237.412**. Founder técnico: **Abrahan Pulido**.

### Liquidez y defensibilidad (marketplace)

- **Oferta primero:** **4× Sales** + catálogo en farmacias piloto **antes** de tráfico masivo a pacientes; **~40 activas** en M1 ([MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.1 — curva `[PENDIENTE]` vs burn v4).
- **Moat operativo:** Rx digital por farmacéutico de **cada** farmacia + **switching cost** (catálogo, historial, contrato híbrido) + pagos VE nativos — no solo «llegamos primero» (§2.11 CONTEXTO).
- **Flywheel + 4 lados:** más farmacias → más pacientes → más GMV → más reinversión ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §4.4); modelo marketplace de cuatro lados (farmacia, paciente, delivery, farmacéutico) en [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md). Vista Business Model Canvas: CONTEXTO §2.12.

### Equipo piloto Lean (237.412 — tabla burn) — resumen

| Rol                                  | Tipo      | Compensación ref. (USD/mes) | Notas                                              |
| ------------------------------------ | --------- | --------------------------- | -------------------------------------------------- |
| CEO                                  | FTE       | **1.000**                   | Dirección general (rol adicional v4)           |
| Founder / CEO / CTO                  | FTE       | **1.000**                   | Abrahan Pulido — producto + tech                   |
| Co-CEO / Head Sales&Ops              | FTE       | **1.000**                   | Comercial / operación / corporate                  |
| **Dev (Flutter/Laravel)**            | FTE       | **1.000**                   | Celda lean **1.000**; nota esc.1 «Dev x2 @ 1.000» = mismo tope de línea (no 2k) — PRESUPUESTO §1.1 |
| Sales B2B (**×4**)                   | FTE       | **350** base + **40**/firma | Comisión a rep que cierra                          |
| Customer Support + Community Manager | FTE       | **500**                     | Soporte + comunidad                                |
| Contador + Abogado (+ asesor Rx)     | Freelance | **330**                     | Incluye asesor regulatorio farmacéutico **120** (PRESUPUESTO: una sola fila 330) |
| Herramientas IA                      | Opex      | **425**                     | Stack productividad                                |

> Detalle burn y equipo: [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S1.2b, S3.2.

## Mercado y oportunidad (validados)

- **TAM Venezuela:** USD 1.638M/año (389M unidades × USD 4,21 promedio, fuente **Cifar VE**, datos **IMS/IQVIA** 2025). Crecimiento +17,49% YoY en unidades. CAGR 6,1% proyectado 2026-2032.
- **TAM regional Carabobo:** ~350-450 farmacias (226 solo en Valencia metro, [Farmacias Saas](https://www.saasvenezuela.com/sucursales) y directorios públicos).
- **SAM zona piloto (Valencia metro):** 30-50 farmacias primer trimestre operativo; foco HQ **San Diego / Av. Bolívar Norte** (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)).
- **SOM / cierre año 1 (M12 post-Day-D):** **~159 farmacias activas** en el caso central Lean ([MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.1). Con **4× Sales**, modelo **híbrido** (pricing **45/60/70** + % GMV) y **ARPF ~52** _(placeholder)_, equilibrio FCF mensual desde **M5** (FCF M1–M4 negativo; ingresos M1 **7.520** < costos **11.411**); FCF Y1 **+59.079**; cash M12 **246.231**.

### Tier vigente (Lean Excel v4 — ask único)

| Tier                                          | Capital ref.    | Comercial                    | Diferenciador                                                   |
| --------------------------------------------- | --------------- | ---------------------------- | --------------------------------------------------------------- |
| **Lean 237.412** _(v4 Excel — ask único)_ | **USD 237.412** | **4× Sales @ 350** + equipo tabla burn | Bootstrap Carabobo — Fase 0 **50.260**; burn M1–M12 **172.152** |

> **Ask único (v4):** **Lean USD 237.412** @ cap **600k** → equity **~39,57%**. Censo: [CENSO_FARMACIAS_CARABOBO_FASE0.md](CENSO_FARMACIAS_CARABOBO_FASE0.md).

## Modelo financiero (escenario Lean Excel — USD 237.412)

**Resumen Lean v4** ([`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) sync 7-ago-2026 = Descargas `MODELO_FINANCIERO_040826_v4.xlsx`):

| Concepto                             | Lean v4                                                                            |
| ------------------------------------ | -------------------------------------------------------------------------------------- |
| Capital pedido (TOTAL SAFE)          | **USD 237.412** _(≈237k)_                                                              |
| SAFE cap ref.                        | **600.000** → equity **~39,57%**                                                       |
| One-shots (legal+intro+HQ CapEx)     | **USD 22.365**                                                                         |
| Fase 0 operativa (MO+mkt+transporte) | **USD 27.895**                                                                         |
| Fase 0 total (T+0→Day-D)             | **USD 50.260** (0a **33.010** / 0b **8.625** / 0c **8.625**)                           |
| Caja al Day-D (inicio M1)            | **USD 187.152**                                                                        |
| Burn M1–M12                          | **USD 172.152** (Detallado ≈**14.346**/mes; desglose nómina+HQ+mkt en MODELO S1.2b / PRESUPUESTO — no sumar sub-líneas inventadas) |
| Reserva caja                         | **15.000**                                                                             |
| Burn prom. mensual (post-Day-D)      | **~USD 14.346**                                                                        |
| Identidad categorías = timing        | **0** (validación Detallado)                                                           |
| Identidad SAFE                       | **50.260 + 172.152 + 15.000 = 237.412**                                                |

> **Esc.1 vigente:** pricing **45/60/70 + %GMV 8/7/5**; ingresos Y1 **228.796**; costos Y1 **169.717**; FCF Y1 **+59.079**; cash M12 **246.231**. Tabla M1–M12: [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 · [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) §S3.1.

**Detalle escenario Lean:**

| Concepto                          | Valor                                                                     |
| --------------------------------- | ------------------------------------------------------------------------- |
| Capital pedido                    | **USD 237.412** _(≈237k)_                                                 |
| Runway                            | **Fase 0 (~90 días)** + **12 meses** post-Day-D                           |
| Burn promedio mensual             | **~USD 14.346**                                                           |
| One-shots                         | **USD 22.365**                                                            |
| Fase 0 + caja Day-D               | **USD 50.260** outflow; **USD 187.152** caja al Day-D                     |
| Buffer ya incluido (inflación VE) | 20% (en contingencia del burn)                                            |
| ARPF / CAC / LTV                  | USD **~52** / **139** / **1.040** _(ARPF Excel v4; LTV=52×20 — UNIT)_      |
| **LTV/CAC**                       | **~7,5x**                                                                 |
| Cash / equilibrio M12             | **Cash M12 246.231** (esc.1: 187.152 + FCF +59.079); BE FCF desde **M5** (FCF M1–M4 negativo) |

### Sensibilidad del modelo

| Escenario                    | Tasa firma/mes                       | Churn  | ARPF\*      | Activas M12 (ref.) | Revenue M12 (ref.)             | Equilibrio mensual (ref.)                           | Cash cierre año 1                               |
| ---------------------------- | ------------------------------------ | ------ | ----------- | ------------------ | ------------------------------ | --------------------------------------------------- | ----------------------------------------------- |
| Pesimista (probabilidad 20%) | **~50% plan** _(~8 firmas/mes ref.)_ | 7%     | USD 40      | **~120**           | **`[PENDIENTE FP&A — esc.1]`** | Esc.1 base BE FCF M5; P10 sin modelo cerrado | **`[PENDIENTE FP&A — esc.1]`**                  |
| **Base (probabilidad 50%)**  | **~15**/mes post-Day-D               | **5%** | **USD ~52** | **~159**           | **~USD 29.892** (M12 esc.1)        | **M5** (FCF+ desde M5)               | **USD 246.231** (187.152 + FCF +59.079) |
| Optimista (probabilidad 30%) | **130% plan** _(ref. §7.3)_          | 4%     | USD 55      | **~200**           | **`[PENDIENTE FP&A — esc.1]`** | Escala Sales                                        | **`[PENDIENTE FP&A — esc.1]`**                  |

\*Misma convención que la tabla anterior: ARPF es **referencia provisional** hasta recalibrar con GMV real y modelo híbrido ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5).

Detalle de las 3 sensibilidades en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 7.

## Instrumento de inversión propuesto

- **SAFE post-money** con cap ref. **600k (Lean 237.412)** — equity **~39,57%**.
- **Ticket sugerido:** USD 25.000 / 50.000 / **237.412** (lead Lean v4 Excel — ask único).
- **Equity implícito Lean:** **~39,57%** (237.412 / 600k).
- **Cap table:** [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).

## Equipo

- **Founder / CEO / CTO:** **Abrahan Pulido** — Ingeniero en Informática (IUTVAL), full stack Laravel + Flutter + MySQL, 8+ años en producto; fundador de **Zonix Pharma** (evolución del mismo stack desde delivery B2C), **Corral X**, **Zonix Imports** y **Aiblockweb**. Contacto: `ing.pulido.abrahan@gmail.com`, +58 412 4352014, [LinkedIn](https://www.linkedin.com/in/abrahan-pulido-909a35b7/), [aiblockweb.com](https://aiblockweb.com).
- **Sales B2B (4 ejecutivos Lean):** USD **350** base c/u + USD **40** comisión por farmacia firmada.
- **Customer Support + Community Manager:** USD **500**/mes (tabla Lean / burn 237.412).
- **Marketing Lead / Coordinador Partners:** **fuera del burn Lean 237.412** (roadmap Base/Growth o post-wire) — no están en la tabla piloto Lean arriba.
- **Contratación / nombres** de los roles anteriores: plantilla operativa en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) (montos ya cerrados en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2).
- **Contador + Abogado (+ asesor Rx) freelance:** **USD 330/mes** agregados (incluye asesor regulatorio farmacéutico **120** — misma fila PRESUPUESTO/MODELO; no sumar 130+200 aparte del asesor).

## Hitos a 12 meses

| Mes   | Hito                                                                                                                                                                                                                                          |
| ----- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| 1-3   | **Fase 0:** constitución, equipo, HQ (**San Diego / Av. Bolívar Norte**), stack en **VPS Nameshared**, OTP **Firebase**; onboarding farmacias piloto — **Day-D = T+90** (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)). |
| 4-6   | **M1–M3 post-Day-D:** rampa a **~62 activas**; revenue M3 **USD 11.656** (MODELO S3.1 esc.1).                                                                                                                                            |
| 7-9   | **~108–130 activas**; validación Rx en producción _(objetivo operativo)_; revenue **~USD 20.304–24.440**/mes (M7–M9 esc.1).                                                                                                                           |
| 10-12 | **~141–159 activas** _(curva ref.)_; **cash M12 246.231** (esc.1: 187.152 + FCF +59.079); revenue ref. **~USD 29.892** (esc.1 — pricing 45/60/70 + % GMV).                                                                                   |

## Riesgos principales y mitigaciones

| Riesgo                              | Mitigación                                                                                                                                                                                                                                                                                       |
| ----------------------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------ |
| Inflación VE 2026                   | **BCV mayo 2026:** proyección de **desaceleración** (inflación mensual de **un dígito desde mayo**). Escenarios externos pesimistas citan **387-618%** anual — el pack usa buffer **20%** (ponderado: 30% costos en bolívares, 10% en USD) + plan contingencia si devaluación > 100% trimestral. |
| Regulación farmacéutica venezolana  | Cada farmacia afiliada aporta su propio farmacéutico colegiado. Dictamen **abogado + farmacéutico asesor** antes de Day-D. Asesor on-demand incluido en burn Lean (rubro Contador+Abogado 330).                                                                                                  |
| Publicidad y claims en salud        | Checklist **Do/Don't** y aprobación creativos: [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §1.1; avisos al paciente en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) §2.1.                                                                             |
| Competencia de Farmatodo / Locatel  | No competimos en su segmento (cadenas premium); competimos en farmacias medianas e independientes que **no** tienen **app / marketplace** propio integrado.                                                                                                                                      |
| Adopción inicial lenta del paciente | **Liquidez B2B primero** (§2.10 CONTEXTO): catálogo + **~28 activas** pre-Day-D; demanda vía referidos farmacia + Meta geo; no tráfico masivo sin oferta.                                                                                                                                        |
| Pagos manuales VE complejos         | Implementados en código (**staging/VPS**); OTP paciente vía **Firebase Phone Auth** (SMS) en hito T+7–12 Fase 0. Factura digital SENIAT cuando la empresa esté constituida y el trámite esté habilitado.                                                                                         |

## Pregunta al inversor

> ¿Te sumas a **USD 237.412** (Lean v4 Excel — equipo tabla burn: CEO+Founder+Co-CEO+Dev+4×Sales+CS) vía SAFE cap **600.000** _(equity ~39,57%)_, para **Fase 0 (50.260) + 12 meses** post-Day-D (burn **172.152**)? Cash M12: **246.231** (esc.1: 187.152 + FCF +59.079) — ver BRIEF § modelo y [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx).

**Por qué ahora (sin urgencia falsa):** mercado pharma VE **+17,49%** unidades (Cifar); stack **~4 años** ya en staging; ventana **early mover** en independientes Valencia 2026 — el pack detalla supuestos y sensibilidad antes de comprometer capital.

### Pre-requisitos DD (founder — antes de reunión institucional)

Checklist **P0** en [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md): URL **GitHub** o acceso repo bajo NDA; **% dedicación** Zonix Pharma vs otros compromisos; **2–3 referencias** verificables; re-ejecutar **443 tests** y actualizar [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1.2; **NDA** / data room si el inversor lo exige.

## Llamada a la acción

**Siguiente paso concreto:** reunión de **30 min** con guion en [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md). Si prefieres revisar antes:

1. [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) + [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 — números y tesis.
2. [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) — texto listo para compartir.
3. [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) — pack ↔ producto (opcional DD técnico).

Marco regulatorio VE: [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md), pagos [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §10. Identidad de marca: [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md).
