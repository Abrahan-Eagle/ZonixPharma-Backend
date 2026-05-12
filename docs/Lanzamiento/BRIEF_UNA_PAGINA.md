# Zonix Pharma — Brief de una página

> **Última actualización:** 11 mayo 2026.
> Documento ancla del pack. Léase primero. Todas las cifras están detalladas en los documentos hermanos del directorio [docs/Lanzamiento/](README.md).

## Qué es

**Zonix Pharma** es un marketplace farmacéutico digital para Venezuela. Conecta pacientes con farmacias afiliadas para comprar OTC y medicamentos con receta (Rx), con validación de receta por farmacéutico colegiado y **entrega a domicilio o pickup en sucursal**. La **última milla** la ejecutan **empresa(s) de delivery especializada(s)** bajo **concesión o contrato marco** con Zonix Pharma; la plataforma **no** opera flota propia de reparto.

Es la **vertical farmacia** del **stack Zonix Pharma** (~4 años de código probado; misma base que delivery B2C previo): mismo equipo, misma tecnología, mismas integraciones de pago manual VE. La base técnica está construida y probada: backend Laravel con **397** tests pasando; app Flutter **sin issues** en `flutter analyze lib` en verificación Front mayo 2026 (suite `flutter test` en verde; CI según repo ZonixPharma-Front).

## Problema que resuelve

**Para el paciente**

1. **Desabastecimiento y tiempo perdido:** recorrer 3-5 farmacias sin saber si tendrán stock del medicamento.
2. **Precios opacos:** sin comparador, puede pagar hasta ~25% más yendo a la primera opción; no ve el mismo producto a mejor precio en otra farmacia afiliada.
3. **Sin conexión clara con el delivery:** el pedido “sale” pero no hay seguimiento en tiempo real ni trazabilidad del repartidor.
4. **Receta en papel:** se pierde, se arruga; quien paga desde el exterior no puede gestionar el pedido y la receta de forma digital.
5. **Dudas antes de comprar:** sin canal rápido para orientación informativa (indicaciones, genérico vs. original, interacciones) antes del pedido — *asistente con IA en roadmap Año 1 (no piloto)*.

**Para la farmacia mediana o independiente**

1. **Competir sin canal digital propio** frente a cadenas premium (Farmatodo, Locatel) y agregadores internacionales, sin delivery integrado ni visibilidad online.
2. **Comisión alta en agregadores:** Rappi / PedidosYa suelen cobrar 25-35% del GMV digital; paga mucho sin herramientas propias de gestión a cambio.
3. **Administración fragmentada:** órdenes, inventario, comprobantes y Rx en WhatsApp, papel y hojas sueltas; poca trazabilidad y mucho retrabajo.
4. **Sin marketing digital ni presencia física coordinada:** no capta pacientes nuevos fuera del radio caminable; depende solo del tráfico a pie.
5. **Compras a droguerías sin comparador:** catálogos y precios de proveedores en PDF/WhatsApp; no hay forma ágil de filtrar y armar pedidos a las droguerías elegidas — *módulo de gestión de proveedores en roadmap Año 1 (no piloto)*.

**Para el ecosistema**

- La receta médica venezolana sigue siendo física, manuscrita y vulnerable a errores. Zonix Pharma digitaliza la validación con un farmacéutico colegiado.

## Por qué ahora (timing — ALTA #10 forense)

1. **Mercado pharma VE está en recuperación post-crisis:** +17,49% YoY en unidades 2024-2025 (**Cifar**, datos IMS/IQVIA). Hace 2 años el mercado se contraía; en 2 años más estará cubierto por competidores digitales. **2026 es la ventana.**
2. **Stack ya construido:** el **stack Zonix Pharma** lleva ~4 años de desarrollo; el ajuste al vertical farmacia se hace en 30-45 días vs. 12-18 meses desde cero.
3. **Competencia digital débil en VE:** Rappi y PedidosYa Pharmacy solo cubren cadenas premium. Farmatodo y Locatel no abren marketplace. **First-mover en farmacia mediana e independiente.**
4. **Métodos de pago manuales VE están maduros:** Pago Móvil C2P + Zelle + Binance Pay USDT cubren el 95% de la población bancarizada. Hace 5 años no era posible.

## Diferenciadores claros

- **Modelo B2B híbrido en USD** (cuota fija **25 / 40 / 55** + porcentaje moderado sobre GMV en app según banda): estructuralmente muy por debajo del take-rate 25-35% GMV de Rappi o PedidosYa Pharmacy. Detalle en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5.
- **Validación Rx por farmacéutico colegiado de la propia farmacia** dentro de la app, ya construida en backend. Cumple con la **Ley del Ejercicio de la Farmacia VE** sin que **Zonix Pharma** tenga que contratar un farmacéutico interno.
- **Métodos de pago manuales VE soportados nativos:** Pago Móvil C2P, transferencia, Zelle, Binance Pay USDT — sin pasarelas internacionales caras, sin Stripe, sin necesidad de cuenta empresarial extranjera para operar.
- **Stack autocontenido y probado:** backend MVP en producción interna con 397 tests pasando, frontend Flutter sin issues, Pusher real-time + Firebase FCM ya integrados.
- **Equipo lean:** roles contratados Base = **Co-CEO** + **4× Sales B2B** + CS+CM + Marketing + Delivery Ops (+ founder técnico); 2 freelance (Contador, Abogado). Runway **12 meses** con **USD 101k** (Base). Founder técnico: **Abrahan Pulido**.

## Mercado y oportunidad (validados)

- **TAM Venezuela:** USD 1.638M/año (389M unidades × USD 4,21 promedio, fuente **Cifar VE**, datos **IMS/IQVIA** 2025). Crecimiento +17,49% YoY en unidades. CAGR 6,1% proyectado 2026-2032.
- **TAM regional Carabobo:** ~350-450 farmacias (226 solo en Valencia metro, [Farmacias Saas](https://www.saasvenezuela.com/sucursales) y directorios públicos).
- **SAM zona piloto (Bella Florida + El Socorro):** 30-50 farmacias durante el primer trimestre.
- **SOM realista al cierre del año:** 107 farmacias activas (1,8% del SAM extendido a Valencia metro). Con **4 Sales + curva Meta**, **cuota fija 25/40/55** y el **replante de costos fijos** (founder, HQ, IA, equipo — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §6.1), el **equilibrio mensual** (revenue ≥ burn) con **ARPF ~50** queda **después del mes 12** salvo mitigaciones ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.4).

## Modelo financiero (escenario Base)

| Concepto | Valor |
|---|---|
| Capital pedido | **USD 101.000** |
| Runway | 12 meses |
| Burn promedio mensual | **~USD 7.559** (tramos **7.462 / 7.798 / 7.431**) |
| One-shots mes 1 (CapEx + depósito HQ, etc.) | **~USD 9.808** |
| Buffer ya incluido (inflación VE) | 20% |
| ARPF (revenue por farmacia) | USD **~50**/mes *(placeholder hasta GMV piloto; cobro = híbrido cuota 25/40/55 — [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md))* |
| CAC | USD **139** |
| Churn mensual (mediana SMB SaaS LatAm) | 5% |
| LTV | USD 1.000 |
| **LTV/CAC** | **~7,2x** |
| Payback CAC | **~2,8 meses** |
| **Equilibrio mensual (revenue ≥ burn)** | **Post mes 12** con ARPF ~50 y burn actual (**4×** Sales); **~151** farmacias activas orden de magnitud (**~149** con burn tramo C **7.431** ÷ 50; **~151** con burn promedio **~7.559** ÷ 50 — ver §1.4 [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md), [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §6) |
| **Cash cierre año 1** (despliegue capital Base) | **~USD 29.862** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3) |
| Año 2 proyección revenue conservadora | USD 96k–108k anuales |
| Año 3 revenue ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §3.3) | **Conservador:** ~USD 180k–204k/año (sin Serie A). **Éxito / cobertura nacional:** hasta ~USD 480k/año. |

Detalle completo y construcción mes a mes en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). Detalle por línea de gasto en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md).

### Sensibilidad del modelo (ALTA #3 forense)

| Escenario | Tasa firma/mes | Churn | ARPF* | Equilibrio mensual (ref.) | Cash cierre año 1 |
|---|---|---|---|---|---|
| Pesimista (probabilidad 20%) | 4-7 | 7% | USD 40 | Post-M12 + bridge | **~USD 25-30k** cash cierre A1 (orden magnitud vs. central **~29.862**; [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §7.1) |
| **Base (probabilidad 50%)** | **8-15** | **5%** | **USD ~50** | **Post-M12** (mitigaciones §1.4 PROYECCION) | **~USD 29.862** |
| Optimista (probabilidad 30%) | 12-20 | 4% | USD 55 | Antes si mix/GMV mejora | **~USD 35–43k** (orden magnitud; alineado §7.3 [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md); refinar FP&A) |

\*Misma convención que la tabla anterior: ARPF es **referencia provisional** hasta recalibrar con GMV real y modelo híbrido ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5).

Detalle de las 3 sensibilidades en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 7.

## Instrumento de inversión propuesto

> **Nota escenarios (paradoja Growth &lt; Base en capital pedido):** el ticket **Growth (USD 90k)** es **menor** que **Base (USD 101k)** porque el modelo **Growth** en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §4.3 **predató** el replante **Co-CEO + stack IA** del Base §3.3 y **no** incluye esas líneas en su burn — por eso el capital pedido puede ser **inferior** pese al nombre «Growth». Para comparación **apples-to-apples** entre Lean / Base / Growth, ver la nota bajo la tabla de cifras clave en [README.md](README.md).

- **SAFE post-money cap USD 600.000** (escenario Base). Sin valuación, sin tasa de interés, sin fecha de vencimiento. El inversor convierte a equity en la próxima ronda con cap o descuento, lo que sea más favorable para él.
- **Ticket sugerido:** USD 25.000 / 50.000 / **101.000** (lead) u otros tickets acordados.
- **Equity implícito si cap se aplica:** **~16,83%** post-money para USD 101k (101.000 / 600.000).
- **Cap table:** [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).

## Equipo

- **Founder / CEO / CTO:** **Abrahan Pulido** — Ingeniero en Informática (IUTVAL), full stack Laravel + Flutter + MySQL, 8+ años en producto; fundador de **Zonix Pharma** (evolución del mismo stack desde delivery B2C), **Corral X**, **Zonix Imports** y **Aiblockweb**. Contacto: `ing.pulido.abrahan@gmail.com`, +58 412 4352014, [LinkedIn](https://www.linkedin.com/in/abrahan-pulido-909a35b7/), [aiblockweb.com](https://aiblockweb.com).
- **Sales B2B (4 ejecutivos):** USD **120** fijo c/u + USD **30** comisión por farmacia firmada.
- **Customer Support + Community Manager:** USD **350**/mes (+50 si KPI → 400).
- **Marketing Lead + apoyo a dirección:** USD **400**/mes (+100 bonus si KPI); dirección general: **Co-CEO**.
- **Delivery Ops Coordinator:** USD **300**/mes (+100 si KPI → 400) desde mes 1 (Base) — **enlace operativo** con **empresa(s) concesionaria(s)** de última milla; Zonix **no** opera flota propia.
- **Contratación / nombres** de los roles anteriores: plantilla operativa en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) (montos ya cerrados en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3).
- **Contador externo (freelance):** USD 130/mes — IVA, ISLR, factura digital SENIAT.
- **Abogado externo (freelance):** USD 200/mes — contratos, T&C, SAPI.

## Hitos a 12 meses

| Mes | Hito |
|---|---|
| 1-3 | Constitución legal C.A., onboarding 5-10 farmacias en Bella Florida y El Socorro, Day-D del piloto al final del mes 3. |
| 4-6 | Expansión a 30-50 farmacias activas en Valencia metro. Primer mes con revenue > USD 1.500. |
| 7-9 | 60-80 farmacias activas. Validación Rx en producción con > 200 recetas validadas. Primer mes con revenue > USD 3.500. |
| 10-12 | 90-120 farmacias activas. **Ruta a equilibrio mensual** con mitigaciones (mix GMV, firmas, gasto) — ver [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.4. Cierre del año con **~USD 29.862** cash y revenue mensual > USD 5.000. |

## Riesgos principales y mitigaciones

| Riesgo | Mitigación |
|---|---|
| Inflación VE 2026 | **BCV mayo 2026:** proyección de **desaceleración** (inflación mensual de **un dígito desde mayo**). Escenarios externos pesimistas citan **387-618%** anual — el pack usa buffer **20%** (ponderado: 30% costos en bolívares, 10% en USD) + plan contingencia si devaluación > 100% trimestral. |
| Regulación farmacéutica venezolana | Cada farmacia afiliada aporta su propio farmacéutico colegiado (KYC + verificación MPPS, ver [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §7.4). Dictamen **abogado + farmacéutico asesor** antes de Day-D (§8.2.1 mismo doc). Asesor regulatorio on-demand en Growth. |
| Publicidad y claims en salud | Checklist **Do/Don't** y aprobación creativos: [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §1.1; avisos al paciente en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) §2.1. |
| Competencia de Farmatodo / Locatel | No competimos en su segmento (cadenas premium); competimos en farmacias medianas e independientes que NO tienen canal digital propio. |
| Adopción inicial lenta del paciente | Marketing primero a farmacias (B2B); el paciente entra orgánico una vez la farmacia ya tiene catálogo cargado. |
| Pagos manuales VE complejos | Ya implementados y probados en la **plataforma Zonix Pharma**. Webhook YCloud para WhatsApp OTP. SENIAT factura digital integrada. |

## Pregunta al inversor

> Buscamos **USD 101.000** vía SAFE con post-money cap **USD 600.000** para operar Zonix Pharma **12 meses** con runway, **Co-CEO** (segundo al mando) y **~USD 29.862** cash proyectado al cierre año 1 ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3), **Meta Ads + 4 Sales B2B**, **cuota plataforma 25/40/55 USD**, y narrativa honesta de **equilibrio mensual post-M12** salvo mejora de mix/GMV o curva de firmas (§1.4). Año 2: expansión Maracay + Maracaibo, revenue anual **USD 96–108k** referencia. Año 3: dos lecturas en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §3.3 — **conservador** ~**USD 180k–204k**/año (sin Serie A) vs **hasta ~USD 480k**/año en escenario **éxito / cobertura nacional**. La tecnología ya está construida; lo que se financia es **comercialización, hosting, equipo doble dirección, IA, CapEx HQ y buffer de inflación**.

## Llamada a la acción

- Reunión de 30 minutos: [agenda en CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).
- Mensaje para enviar al inversor: [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md).
- Detalle financiero completo: [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).
- Análisis multi-perspectiva del pack: [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md).
- Identidad de marca para diseño de assets externos: [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md).
- Marco regulatorio VE para due diligence: [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md), [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md).
