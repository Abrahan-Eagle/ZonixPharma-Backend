# Zonix Pharma — Brief de una página

> **Última actualización:** 22 junio 2026 (v3.5 — **Lean+** operativo + tiers **Blitz 6×** stretch).
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

- **Modelo B2B híbrido en USD** (cuota fija **25 / 40 / 55** + porcentaje moderado sobre GMV en app según banda): estructuralmente muy por debajo del take-rate **20–30% GMV** típico de **PedidosYa** en VE. Detalle en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5.
- **Validación Rx por farmacéutico colegiado de la propia farmacia** dentro de la app, ya construida en backend. Modelo alineado a regulación farmacéutica VE *[PENDIENTE dictamen abogado + farmacéutico asesor antes de Day-D]*; Zonix **no** sustituye al farmacéutico titular de la farmacia.
- **Métodos de pago manuales VE soportados nativos:** Pago Móvil C2P, transferencia, Zelle, Binance Pay USDT — sin pasarelas internacionales caras, sin Stripe, sin necesidad de cuenta empresarial extranjera para operar.
- **Stack en staging/VPS** (go-live público T+7–12 Fase 0): backend con **443** tests pasando (re-verificar pre-reunión); frontend Flutter sin issues en analyze; Pusher + FCM integrados en código. **Release tiendas + Firebase OTP (SMS):** hitos **T+7–12** de Fase 0 — no asumir Play/App Store el día del wire ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md)).
- **Equipo lean:** **4× Sales** + **Dev junior** en nómina en tier **Lean ~112k** (bootstrap **Carabobo independientes**). Runway **12 meses** con **~USD 112k** (mínimo viable). **Recomendado:** **~USD 157k** (Base — sueldos mercado + reserva). **Growth:** **~USD 187k** (Dev senior + colchón). Founder técnico: **Abrahan Pulido**.

### Liquidez y defensibilidad (marketplace)

- **Oferta primero:** **4× Sales** + catálogo en farmacias piloto **antes** de tráfico masivo a pacientes; **~40 activas** en M1 ([MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.1).
- **Moat operativo:** Rx digital por farmacéutico de **cada** farmacia + **switching cost** (catálogo, historial, contrato híbrido) + pagos VE nativos — no solo «llegamos primero» (§2.11 CONTEXTO).
- **Flywheel + 4 lados:** más farmacias → más pacientes → más GMV → más reinversión ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §4.4); modelo marketplace de cuatro lados (farmacia, paciente, delivery, farmacéutico) en [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md). Vista Business Model Canvas: CONTEXTO §2.12.

### Equipo piloto Lean (~112k — 4× Sales bootstrap) — resumen

| Rol | Tipo | Compensación ref. (USD/mes) | Notas |
|---|---|---|---|
| Founder / CEO / CTO | FTE | **1.000** | Abrahan Pulido — producto + tech |
| Co-CEO / CEO operativo | FTE | **1.000** | Comercial / operación / corporate |
| **Dev (Flutter/Laravel)** | FTE | **600** | Junior — en nómina v3 |
| Sales B2B (**×4**) | FTE | **350** base + **40**/firma | Comisión a rep que cierra |
| Customer Support + Community Manager | FTE | **400** | Soporte + comunidad |
| Contador externo | Freelance | **130** | SENIAT / honorarios |
| Abogado externo | Freelance | **200** | SAFE, contratos, T&C |
| Asesor regulatorio farmacéutico | Externo | **120** | Solo **Base ~157k** / **Growth ~187k** |

> Detalle burn y equipo: [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S1.2b, S3.2.

## Mercado y oportunidad (validados)

- **TAM Venezuela:** USD 1.638M/año (389M unidades × USD 4,21 promedio, fuente **Cifar VE**, datos **IMS/IQVIA** 2025). Crecimiento +17,49% YoY en unidades. CAGR 6,1% proyectado 2026-2032.
- **TAM regional Carabobo:** ~350-450 farmacias (226 solo en Valencia metro, [Farmacias Saas](https://www.saasvenezuela.com/sucursales) y directorios públicos).
- **SAM zona piloto (Valencia metro):** 30-50 farmacias primer trimestre operativo; foco HQ **San Diego / Av. Bolívar Norte** (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)).
- **SOM / cierre año 1 (M12 post-Day-D):** **~159 farmacias activas** en el caso central Lean ([MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.1). Con **4× Sales**, modelo **híbrido** y **ARPF ~50** *(placeholder)*, **casi equilibrio mensual en M12** (revenue **~7.950** vs burn **~7.980**).

### Tiers (Lean / Lean+ / Base / Growth / Blitz)

| Tier | Capital ref. | Comercial | Diferenciador vs tier inferior |
|------|--------------|-----------|--------------------------------|
| **Lean ~112k** | **~USD 111.988** | **4× Sales @ 350** | Bootstrap Carabobo — sueldos bajo mercado |
| **Lean+ ~112k** *(operativo)* | **~USD 111.988** *(= Lean)* | **4× Sales @ 350**, curva **×1,15** | **BE ~M10**, **~183 activas M12** — sin 6 vendedores |
| **Base ~157k** | **~USD 157.268** | **4× Sales @ 400** | Sueldos mercado + Google Ads B2B + diseñador + reserva **~10,6k** |
| **Growth ~187k** | **~USD 187.478** | **4× Sales @ 450** | Dev senior + colchón **~20k** |
| **Blitz ~185k** *(stretch)* | **~USD 184.878** | **6× Sales @ 400** | **+2 vendedores**, curva **×1,5**, **~238 activas M12**, reserva **25k** |

> **Ask principal:** **Lean ~112k**. **Lean+** = mismo ticket con ejecución comercial +15% (alternativa a **Blitz** si no se duplica nómina Sales). Censo: [CENSO_FARMACIAS_CARABOBO_FASE0.md](CENSO_FARMACIAS_CARABOBO_FASE0.md).

## Modelo financiero (escenario Lean — mínimo viable ~USD 112k)

**Resumen por tier** (escalera capital — ver [README.md](README.md) § Cifras clave):

> **Nota v3.3 (jun 2026):** capital = suma bottom-up; **4× Sales** en los tres tiers. Fuente: [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md).

| Concepto | Lean (~112k) | Base (~157k — recomendado) | Growth (~187k) |
|---|---|---|---|
| Capital pedido | **~USD 111.988** | **~USD 157.268** | **~USD 187.478** |
| SAFE cap | **600.000** | **~912.814** | **~1.205.345** |
| Burn prom. mensual | **~8.108** | **~10.898** | **~12.698** |

**Detalle escenario Lean** (tabla M1–M12 en [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.1):

| Concepto | Valor (Lean — tabla M1–M12 v3.3) |
|---|---|
| Capital pedido | **~USD 111.988** *(≈112k)* |
| Runway | **Fase 0 (~90 días)** + **12 meses** post-Day-D |
| Burn promedio mensual | **~USD 8.108** (tramos **8.011 / 8.347 / 7.980**) |
| One-shots (Fase 0 / pre-Day-D) | **~USD 14.208** |
| Fase 0 (T+0→Day-D T+90) + caja inicio M1 | **~USD 33.835** outflow Fase 0; **~USD 78.153** caja al Day-D |
| Buffer ya incluido (inflación VE) | 20% |
| Revenue acumulado año 1 | **~USD 59.968** |
| FCF año 1 | **−USD 37.322** |
| ARPF (revenue por farmacia) | USD **~50**/mes *(placeholder)* |
| CAC | USD **139** |
| Churn mensual (mediana SMB SaaS LatAm) | 5% |
| LTV | USD 1.000 |
| **LTV/CAC** | **~7,2x** |
| Payback CAC | **~2,8 meses** |
| **Equilibrio mensual (revenue ≥ burn)** | **Casi en M12** (~159 activas, ARPF ~50) |
| **Cash cierre año 1** (M12 post-Day-D) | **~USD 40.831** (~36% del capital inicial) |
| Año 2 proyección revenue conservadora | USD 96k–108k anuales |
| Año 3 revenue ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §3.3) | **Conservador:** ~USD 180k–204k/año (sin Serie A). **Éxito / cobertura nacional:** hasta ~USD 480k/año. |

Detalle completo y construcción mes a mes en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). Detalle por línea de gasto en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md).

### Sensibilidad del modelo

| Escenario | Tasa firma/mes | Churn | ARPF* | Activas M12 (ref.) | Revenue M12 (ref.) | Equilibrio mensual (ref.) | Cash cierre año 1 |
|---|---|---|---|---|---|---|---|
| Pesimista (probabilidad 20%) | **~50% plan** *(~8 firmas/mes ref.)* | 7% | USD 40 | **~40** | **~USD 1.600** | Post-año 1 + bridge | **~USD 5–8k** |
| **Base (probabilidad 50%)** | **~15**/mes post-Day-D | **5%** | **USD ~50** | **~159** | **~USD 7.950** | **Casi M12** | **~USD 40.831** |
| Optimista (probabilidad 30%) | **130% plan** *(ref. §7.3)* | 4% | USD 55 | **~104** | **~USD 5.720** | Año 2 si escala Sales | **~USD 18–22k** |

\*Misma convención que la tabla anterior: ARPF es **referencia provisional** hasta recalibrar con GMV real y modelo híbrido ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5).

Detalle de las 3 sensibilidades en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 7.

## Instrumento de inversión propuesto

- **SAFE post-money** con cap según tier: **600k (Lean ~112k)** · **~913k (Base ~157k — recomendado)** · **~1.205M (Growth ~187k)**.
- **Ticket sugerido:** USD 25.000 / 50.000 / **~111.988** (lead mínimo) / **~157.268** (recomendado) / **~187.478** (acelerado).
- **Equity implícito Lean:** **~18,66%** (111.988 / 600k). Base **~17,23%**; Growth **~15,55%**.
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
| 10-12 | **~141–159 activas**; **casi equilibrio M12**; cierre M12 con **~USD 40.831** cash y revenue mensual **~USD 7.950**. |

## Riesgos principales y mitigaciones

| Riesgo | Mitigación |
|---|---|
| Inflación VE 2026 | **BCV mayo 2026:** proyección de **desaceleración** (inflación mensual de **un dígito desde mayo**). Escenarios externos pesimistas citan **387-618%** anual — el pack usa buffer **20%** (ponderado: 30% costos en bolívares, 10% en USD) + plan contingencia si devaluación > 100% trimestral. |
| Regulación farmacéutica venezolana | Cada farmacia afiliada aporta su propio farmacéutico colegiado. Dictamen **abogado + farmacéutico asesor** antes de Day-D. Asesor on-demand incluido en **Base/Growth** (~157k/~187k). |
| Publicidad y claims en salud | Checklist **Do/Don't** y aprobación creativos: [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §1.1; avisos al paciente en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) §2.1. |
| Competencia de Farmatodo / Locatel | No competimos en su segmento (cadenas premium); competimos en farmacias medianas e independientes que **no** tienen **app / marketplace** propio integrado. |
| Adopción inicial lenta del paciente | **Liquidez B2B primero** (§2.10 CONTEXTO): catálogo + **~28 activas** pre-Day-D; demanda vía referidos farmacia + Meta geo; no tráfico masivo sin oferta. |
| Pagos manuales VE complejos | Implementados en código (**staging/VPS**); OTP paciente vía **Firebase Phone Auth** (SMS) en hito T+7–12 Fase 0. Factura digital SENIAT cuando la empresa esté constituida y el trámite esté habilitado. |

## Pregunta al inversor

> ¿Te sumas a **~USD 112k** (Lean — **4× Sales** bootstrap Carabobo) vía SAFE cap **600.000**, con opción **~157k recomendado** / **~187k Growth**, para **Fase 0 + 12 meses** post-Day-D? Objetivo modelo central: **~USD 40.831** cash M12 y **~159 activas** — casi equilibrio mensual en M12 ([MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3).

**Por qué ahora (sin urgencia falsa):** mercado pharma VE **+17,49%** unidades (Cifar); stack **~4 años** ya en staging; ventana **early mover** en independientes Valencia 2026 — el pack detalla supuestos y sensibilidad antes de comprometer capital.

### Pre-requisitos DD (founder — antes de reunión institucional)

Checklist **P0** en [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md): URL **GitHub** o acceso repo bajo NDA; **% dedicación** Zonix Pharma vs otros compromisos; **2–3 referencias** verificables; re-ejecutar **443 tests** y actualizar [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1.2; **NDA** / data room si el inversor lo exige.

## Llamada a la acción

**Siguiente paso concreto:** reunión de **30 min** con guion en [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md). Si prefieres revisar antes:

1. [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) + [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 — números y tesis.
2. [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) — texto listo para compartir.
3. [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) — pack ↔ producto (opcional DD técnico).

Marco regulatorio VE: [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md), pagos [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §10. Identidad de marca: [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md).
