# Zonix Pharma — Brief de una página

> **Última actualización:** 26 julio 2026 (v3.9.3 — Lean **canon Excel**: capital **USD 210.760**; Fase 0 **50.260**; burn M1–M12 **145.500**; reserva **15.000**; Day-D **160.500**; equity **~35,13%** @ cap **600k**. Fuente: [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) (= Descargas `MODELO_FINANCIERO_170726 v3.xlsx`). Esc.1 vigente: pricing **45/60/70** + % GMV; FCF Y1 **+237.793**; cash M12 **398.293**.)
> Documento ancla del pack. Léase primero. Todas las cifras están detalladas en los documentos hermanos del directorio [docs/Lanzamiento/](README.md).

## Qué es

**Zonix Pharma** es un marketplace farmacéutico **B2B2C** en Venezuela: el paciente compra en app; la **farmacia independiente o mediana** despacha; un **farmacéutico colegiado de esa farmacia** valida Rx cuando aplica; la **última milla** la hace un **partner** (`delivery_company` + agentes) bajo contrato marco — **sin flota propia** de Zonix.

**Para el inversor (una línea):** llevamos al canal que hoy paga 25–35% a agregadores o no tiene app propia un stack digital con **fee bajo + Rx validado**, en un mercado pharma **existente** de USD 1,638M/año — no inventamos categoría ([CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §2.9).

**Estado producto:** vertical farmacia sobre stack **~4 años**; capa Pharma (Rx, roles) **~30–45 días** ya invertidos. **Hoy:** staging/VPS, **443** tests backend (re-verificar pre-reunión); Flutter analyze/tests en verde. **Day-D (T+90):** OTP Firebase + tiendas + smoke E2E — hitos **T+7–12** Fase 0 ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md)).

## Problema que resuelve

*StoryBrand — el paciente es el héroe; Zonix es la guía. Sin promesas terapéuticas.*

**Para el paciente** *(problema externo: tiempo, stock, precio, receta)*

1. **Stock incierto y tiempo perdido:** recorrer 3–5 farmacias sin saber si tendrán el medicamento.
2. **Precio opaco:** sin comparador entre farmacias afiliadas, puede pagar más en la primera opción *(hipótesis piloto **15–25%**, no garantizada — [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md))*.
3. **Entrega sin trazabilidad:** el pedido “sale” pero no hay seguimiento en tiempo real ni visibilidad del repartidor partner.
4. **Receta en papel:** se pierde o se daña; quien paga desde el exterior no puede coordinar pedido y receta de forma digital.
5. **Dudas antes de comprar:** sin canal rápido para orientación informativa (genérico vs. original, etc.) — *asistente IA en roadmap Año 1 (no piloto)*.

**Para la farmacia mediana o independiente** *(problema externo: visibilidad, costo agregador, operación)*

1. **Competir sin app propia** frente a cadenas premium (Farmatodo, Locatel) y agregadores, sin marketplace ni delivery integrado.
2. **Comisión alta en agregadores:** **PedidosYa** (VE) suele retener **20–30%** del GMV digital; paga mucho sin herramientas propias de gestión. *(Rappi: referencia LatAm, no opera en VE.)*
3. **Operación fragmentada:** órdenes, inventario, comprobantes y Rx en WhatsApp y papel; poca trazabilidad y retrabajo.
4. **Captación limitada:** depende del tráfico a pie; poca coordinación entre marketing digital y presencia física.
5. **Compras a droguerías sin comparador:** catálogos en PDF/WhatsApp — *módulo proveedores en roadmap Año 1 (no piloto)*.

**Para el ecosistema**

- La receta médica venezolana sigue siendo física y vulnerable a errores. Zonix digitaliza la **validación** con el farmacéutico colegiado de cada farmacia — no sustituye al criterio médico ni al titular de la farmacia.

## Por qué ahora (timing)

1. **Mercado pharma VE está en recuperación post-crisis:** +17,49% YoY en unidades 2024-2025 (**Cifar**, datos IMS/IQVIA). Hace 2 años el mercado se contraía; en 2 años más estará cubierto por competidores digitales. **2026 es la ventana.**
2. **Stack ya construido:** el **stack Zonix Pharma** lleva ~4 años de desarrollo; el **fork al vertical farmacia** (capa Rx, roles Pharma) equivale a **~30–45 días de esfuerzo de producto** ya invertido — **no** confundir con **Fase 0 = T+90** (legal, equipo, onboarding farmacias y release en tiendas antes de Day-D — [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)).
3. **Competencia digital débil en VE:** **PedidosYa Pharmacy** cubre cadenas e independientes en marketplace generalista. Farmatodo y Locatel no abren marketplace B2B. **Early mover** en farmacias medianas e independientes (Valencia metro) — mercado **existente**, no categoría nueva ([CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §2.9).
4. **Métodos de pago manuales VE están maduros:** Pago Móvil C2P + Zelle + Binance Pay USDT cubren el 95% de la población bancarizada. Hace 5 años no era posible.

## Diferenciadores claros

- **Modelo B2B híbrido en USD** (cuota fija **45 / 60 / 70** + porcentaje moderado sobre GMV en app según banda — esc.1 v3.9.3): estructuralmente muy por debajo del take-rate **20–30% GMV** típico de **PedidosYa** en VE. Detalle en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5.
- **Validación Rx por farmacéutico colegiado de la propia farmacia** dentro de la app, ya construida en backend. Modelo alineado a regulación farmacéutica VE *[PENDIENTE dictamen abogado + farmacéutico asesor antes de Day-D]*; Zonix **no** sustituye al farmacéutico titular de la farmacia.
- **Métodos de pago manuales VE soportados nativos:** Pago Móvil C2P, transferencia, Zelle, Binance Pay USDT — sin pasarelas internacionales caras, sin Stripe, sin necesidad de cuenta empresarial extranjera para operar.
- **Stack en staging/VPS** (go-live público T+7–12 Fase 0): backend con **443** tests pasando (re-verificar pre-reunión); frontend Flutter sin issues en analyze; Pusher + FCM integrados en código. **Release tiendas + Firebase OTP (SMS):** hitos **T+7–12** de Fase 0 — no asumir Play/App Store el día del wire ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md)).
- **Equipo lean:** **CEO** + **Founder CEO/CTO** + **Co-CEO** + **4× Sales** + **Dev** en nómina en tier **Lean 210.760** (bootstrap **Carabobo independientes**). Runway **Fase 0 + 12 meses** post-Day-D con **USD 210.760**. Founder técnico: **Abrahan Pulido**.

### Liquidez y defensibilidad (marketplace)

- **Oferta primero:** **4× Sales** + catálogo en farmacias piloto **antes** de tráfico masivo a pacientes; **~40 activas** en M1 ([MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.1 — curva `[PENDIENTE]` vs burn v3.9.3).
- **Moat operativo:** Rx digital por farmacéutico de **cada** farmacia + **switching cost** (catálogo, historial, contrato híbrido) + pagos VE nativos — no solo «llegamos primero» (§2.11 CONTEXTO).
- **Flywheel + 4 lados:** más farmacias → más pacientes → más GMV → más reinversión ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §4.4); modelo marketplace de cuatro lados (farmacia, paciente, delivery, farmacéutico) en [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md). Vista Business Model Canvas: CONTEXTO §2.12.

### Equipo piloto Lean (210.760 — 4× Sales + CEO) — resumen

| Rol | Tipo | Compensación ref. (USD/mes) | Notas |
|---|---|---|---|
| CEO | FTE | **1.000** | Dirección general (rol adicional v3.9.3) |
| Founder / CEO / CTO | FTE | **1.000** | Abrahan Pulido — producto + tech |
| Co-CEO / Head Sales&Ops | FTE | **1.000** | Comercial / operación / corporate |
| **Dev (Flutter/Laravel)** | FTE | **1.000** | Junior — alineado a MO Fase 0 |
| Sales B2B (**×4**) | FTE | **350** base + **40**/firma | Comisión a rep que cierra |
| Customer Support + Community Manager | FTE | **500** | Soporte + comunidad |
| Contador + Abogado | Freelance | **800** | SENIAT + SAFE/contratos (paquete) |
| Herramientas IA | Opex | **425** | Stack productividad |
| Asesor regulatorio farmacéutico | Externo | **120** | Incluido en burn Lean (rubro Contador+Abogado 330) |

> Detalle burn y equipo: [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S1.2b, S3.2.

## Mercado y oportunidad (validados)

- **TAM Venezuela:** USD 1.638M/año (389M unidades × USD 4,21 promedio, fuente **Cifar VE**, datos **IMS/IQVIA** 2025). Crecimiento +17,49% YoY en unidades. CAGR 6,1% proyectado 2026-2032.
- **TAM regional Carabobo:** ~350-450 farmacias (226 solo en Valencia metro, [Farmacias Saas](https://www.saasvenezuela.com/sucursales) y directorios públicos).
- **SAM zona piloto (Valencia metro):** 30-50 farmacias primer trimestre operativo; foco HQ **San Diego / Av. Bolívar Norte** (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)).
- **SOM / cierre año 1 (M12 post-Day-D):** **~159 farmacias activas** en el caso central Lean ([MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.1). Con **4× Sales**, modelo **híbrido** (pricing **45/60/70** + % GMV) y **ARPF ~50** *(placeholder)*, **profitable desde M1** en esc.1 (revenue **11.960** > burn **10.411**); FCF Y1 **+237.793**; cash M12 **398.293**.

### Tier vigente (Lean Excel v3.9.3 — ask único)

| Tier | Capital ref. | Comercial | Diferenciador |
|------|--------------|-----------|---------------|
| **Lean 210.760** *(v3.9.3 Excel — ask único)* | **USD 210.760** | **4× Sales @ 350** + **CEO** | Bootstrap Carabobo — Fase 0 **50.260**; burn M1–M12 **145.500** |

> **Ask único (v3.9.3):** **Lean USD 210.760** @ cap **600k** → equity **~35,13%**. Censo: [CENSO_FARMACIAS_CARABOBO_FASE0.md](CENSO_FARMACIAS_CARABOBO_FASE0.md).

## Modelo financiero (escenario Lean Excel — USD 210.760)

**Resumen Lean v3.9.3** ([`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) sync 26-jul-2026 = Descargas `MODELO_FINANCIERO_170726 v3.xlsx`):

| Concepto | Lean v3.9.3 |
|---|---|
| Capital pedido (TOTAL SAFE) | **USD 210.760** *(≈211k)* |
| SAFE cap ref. | **600.000** → equity **~35,13%** |
| One-shots (legal+intro+HQ CapEx) | **USD 22.365** |
| Fase 0 operativa (MO+mkt+transporte) | **USD 27.895** |
| Fase 0 total (T+0→Day-D) | **USD 50.260** (0a **33.010** / 0b **8.625** / 0c **8.625**) |
| Caja al Day-D (inicio M1) | **USD 160.500** |
| Burn M1–M12 | **USD 145.500** (MO **~7.825**/mes + renta **750** + opex **~4.300**; ≈**12.125**/mes) |
| Reserva caja | **15.000** |
| Burn prom. mensual (post-Day-D) | **~USD 12.125** |
| Identidad categorías = timing | **0** (validación Detallado) |
| Identidad SAFE | **50.260 + 145.500 + 15.000 = 210.760** |

> **Esc.1 vigente:** pricing **45/60/70** + % GMV; ingresos Y1 **363.883**; FCF Y1 **+237.793**; cash M12 **398.293**. Tabla M1–M12: [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 · [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) §S3.1.

**Detalle escenario Lean:**

| Concepto | Valor |
|---|---|
| Capital pedido | **USD 210.760** *(≈211k)* |
| Runway | **Fase 0 (~90 días)** + **12 meses** post-Day-D |
| Burn promedio mensual | **~USD 12.125** |
| One-shots | **USD 22.365** |
| Fase 0 + caja Day-D | **USD 50.260** outflow; **USD 160.500** caja al Day-D |
| Buffer ya incluido (inflación VE) | 20% (en contingencia del burn) |
| ARPF / CAC / LTV | USD **~50** / **139** / **1.000** *(placeholders pack — sin cambio)* |
| **LTV/CAC** | **~7,2x** |
| Cash / equilibrio M12 | **Cash M12 398.293** (esc.1: 160.500 + FCF +237.793); profitable desde M1 |

Detalle completo y construcción mes a mes en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). Detalle por línea de gasto en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md).

### Sensibilidad del modelo

| Escenario | Tasa firma/mes | Churn | ARPF* | Activas M12 (ref.) | Revenue M12 (ref.) | Equilibrio mensual (ref.) | Cash cierre año 1 |
|---|---|---|---|---|---|---|---|
| Pesimista (probabilidad 20%) | **~50% plan** *(~8 firmas/mes ref.)* | 7% | USD 40 | **~120** | **`[PENDIENTE FP&A — esc.1]`** | Esc.1 base es profitable M1; P10 sin modelo cerrado | **`[PENDIENTE FP&A — esc.1]`** |
| **Base (probabilidad 50%)** | **~15**/mes post-Day-D | **5%** | **USD ~50** | **~159** | **~USD 47.541** (esc.1) | **M1** (revenue 11.960 > burn 10.411) | **USD 398.293** (esc.1: 160.500 + FCF +237.793) |
| Optimista (probabilidad 30%) | **130% plan** *(ref. §7.3)* | 4% | USD 55 | **~200** | **`[PENDIENTE FP&A — esc.1]`** | Escala Sales | **`[PENDIENTE FP&A — esc.1]`** |

\*Misma convención que la tabla anterior: ARPF es **referencia provisional** hasta recalibrar con GMV real y modelo híbrido ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5).

Detalle de las 3 sensibilidades en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 7.

## Instrumento de inversión propuesto

- **SAFE post-money** con cap ref. **600k (Lean 210.760)** — equity **~35,13%**.
- **Ticket sugerido:** USD 25.000 / 50.000 / **210.760** (lead Lean v3.9.3 Excel — ask único).
- **Equity implícito Lean:** **~35,13%** (210.760 / 600k).
- **Cap table:** [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).

## Equipo

- **Founder / CEO / CTO:** **Abrahan Pulido** — Ingeniero en Informática (IUTVAL), full stack Laravel + Flutter + MySQL, 8+ años en producto; fundador de **Zonix Pharma** (evolución del mismo stack desde delivery B2C), **Corral X**, **Zonix Imports** y **Aiblockweb**. Contacto: `ing.pulido.abrahan@gmail.com`, +58 412 4352014, [LinkedIn](https://www.linkedin.com/in/abrahan-pulido-909a35b7/), [aiblockweb.com](https://aiblockweb.com).
- **Sales B2B (4 ejecutivos Lean):** USD **350** base c/u + USD **40** comisión por farmacia firmada.
- **Customer Support + Community Manager:** USD **350**/mes (+50 si KPI → 400).
- **Marketing Lead + apoyo a dirección:** USD **400**/mes (+100 bonus si KPI); dirección general: **Co-CEO**.
- **Coordinador de Partners Logísticos:** USD **300**/mes (+100 si KPI → 400) desde mes 1 (Base) — **enlace operativo** con **empresa(s) concesionaria(s)** de última milla; Zonix **no** opera flota propia.
- **Contratación / nombres** de los roles anteriores: plantilla operativa en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) (montos ya cerrados en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2).
- **Contador externo (freelance):** USD 130/mes — IVA, ISLR, factura digital SENIAT.
- **Abogado externo (freelance):** USD 200/mes — contratos, T&C, SAPI.

## Hitos a 12 meses

| Mes | Hito |
|---|---|
| 1-3 | **Fase 0:** constitución, equipo, HQ (**San Diego / Av. Bolívar Norte**), stack en **VPS Nameshared**, OTP **Firebase**; onboarding farmacias piloto — **Day-D = T+90** (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)). |
| 4-6 | **M1–M3 post-Day-D:** rampa a **~62 activas**; revenue > **USD 3.100**/mes hacia M3 (MODELO S3.1). |
| 7-9 | **~108–130 activas**; validación Rx en producción *(objetivo operativo)*; revenue **~USD 5.400–6.500**/mes (M7–M9). |
| 10-12 | **~141–159 activas** *(curva ref.)*; **cash M12 398.293** (esc.1: 160.500 + FCF +237.793); revenue ref. **~USD 47.541** (esc.1 — pricing 45/60/70 + % GMV). |

## Riesgos principales y mitigaciones

| Riesgo | Mitigación |
|---|---|
| Inflación VE 2026 | **BCV mayo 2026:** proyección de **desaceleración** (inflación mensual de **un dígito desde mayo**). Escenarios externos pesimistas citan **387-618%** anual — el pack usa buffer **20%** (ponderado: 30% costos en bolívares, 10% en USD) + plan contingencia si devaluación > 100% trimestral. |
| Regulación farmacéutica venezolana | Cada farmacia afiliada aporta su propio farmacéutico colegiado. Dictamen **abogado + farmacéutico asesor** antes de Day-D. Asesor on-demand incluido en burn Lean (rubro Contador+Abogado 330). |
| Publicidad y claims en salud | Checklist **Do/Don't** y aprobación creativos: [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §1.1; avisos al paciente en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) §2.1. |
| Competencia de Farmatodo / Locatel | No competimos en su segmento (cadenas premium); competimos en farmacias medianas e independientes que **no** tienen **app / marketplace** propio integrado. |
| Adopción inicial lenta del paciente | **Liquidez B2B primero** (§2.10 CONTEXTO): catálogo + **~28 activas** pre-Day-D; demanda vía referidos farmacia + Meta geo; no tráfico masivo sin oferta. |
| Pagos manuales VE complejos | Implementados en código (**staging/VPS**); OTP paciente vía **Firebase Phone Auth** (SMS) en hito T+7–12 Fase 0. Factura digital SENIAT cuando la empresa esté constituida y el trámite esté habilitado. |

## Pregunta al inversor

> ¿Te sumas a **USD 210.760** (Lean v3.9.3 Excel — **CEO + 4× Sales** bootstrap Carabobo) vía SAFE cap **600.000** *(equity ~35,13%)*, para **Fase 0 (50.260) + 12 meses** post-Day-D (burn **145.500**)? Cash M12: **398.293** (esc.1: 160.500 + FCF +237.793) — ver BRIEF § modelo y [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx).

**Por qué ahora (sin urgencia falsa):** mercado pharma VE **+17,49%** unidades (Cifar); stack **~4 años** ya en staging; ventana **early mover** en independientes Valencia 2026 — el pack detalla supuestos y sensibilidad antes de comprometer capital.

### Pre-requisitos DD (founder — antes de reunión institucional)

Checklist **P0** en [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md): URL **GitHub** o acceso repo bajo NDA; **% dedicación** Zonix Pharma vs otros compromisos; **2–3 referencias** verificables; re-ejecutar **443 tests** y actualizar [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1.2; **NDA** / data room si el inversor lo exige.

## Llamada a la acción

**Siguiente paso concreto:** reunión de **30 min** con guion en [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md). Si prefieres revisar antes:

1. [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) + [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 — números y tesis.
2. [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) — texto listo para compartir.
3. [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) — pack ↔ producto (opcional DD técnico).

Marco regulatorio VE: [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md), pagos [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §10. Identidad de marca: [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md).
