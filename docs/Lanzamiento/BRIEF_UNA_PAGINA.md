# Zonix Pharma — Brief de una página

> **Última actualización:** 5 mayo 2026.
> Documento ancla del pack. Léase primero. Todas las cifras están detalladas en los documentos hermanos del directorio [docs/Lanzamiento/](README.md).

## Qué es

**Zonix Pharma** es un marketplace farmacéutico digital para Venezuela. Conecta pacientes con farmacias afiliadas para comprar OTC y medicamentos con receta (Rx), con validación de receta por farmacéutico colegiado y delivery a domicilio o pickup en sucursal.

Es un fork destructivo del producto operativo **Zonix Eats** (mismo equipo, misma tecnología, mismas integraciones de pago manual VE), reorientado al vertical farmacia. La base técnica está construida y probada: backend Laravel con ~397 tests pasando y app Flutter sin issues de análisis.

## Problema que resuelve

1. **Para el paciente:** desabastecimiento de medicinas, recorrer 3-5 farmacias para encontrar un producto, sin transparencia de precios y sin manejo digital de la receta.
2. **Para la farmacia mediana o independiente:** competir contra Farmatodo, Locatel y Saas internacional sin presencia digital propia, sin canal de delivery propio y sin trazabilidad de pago.
3. **Para el ecosistema:** la receta médica venezolana sigue siendo física, manuscrita y vulnerable a errores. El marketplace digitaliza la validación con un farmacéutico colegiado.

## Por qué ahora (timing — ALTA #10 forense)

1. **Mercado pharma VE está en recuperación post-crisis:** +17,49% YoY en unidades 2024-2025 (IMS Health). Hace 2 años el mercado se contraía; en 2 años más estará cubierto por competidores digitales. **2026 es la ventana.**
2. **Stack ya construido:** Zonix Eats lleva 4 años de desarrollo; el fork a Pharma se hace en 30-45 días vs. 12-18 meses de empezar desde cero.
3. **Competencia digital débil en VE:** Rappi y PedidosYa Pharmacy solo cubren cadenas premium. Farmatodo y Locatel no abren marketplace. **First-mover en farmacia mediana e independiente.**
4. **Métodos de pago manuales VE están maduros:** Pago Móvil C2P + Zelle + Binance Pay USDT cubren el 95% de la población bancarizada. Hace 5 años no era posible.

## Diferenciadores claros

- **Membresía B2B fija en USD** (Basic 25 / Pro 60 / Enterprise 120, dinámica según GMV de la farmacia): la farmacia no pierde el 25-35% de su GMV en comisiones como en Rappi o PedidosYa Pharmacy.
- **Validación Rx por farmacéutico colegiado de la propia farmacia** dentro de la app, ya construida en backend. Cumple con la **Ley del Ejercicio de la Farmacia VE** sin que Zonix tenga que contratar un farmacéutico interno.
- **Métodos de pago manuales VE soportados nativos:** Pago Móvil C2P, transferencia, Zelle, Binance Pay USDT — sin pasarelas internacionales caras, sin Stripe, sin necesidad de cuenta empresarial extranjera para operar.
- **Stack autocontenido y probado:** backend MVP en producción interna con 397 tests pasando, frontend Flutter sin issues, Pusher real-time + Firebase FCM ya integrados.
- **Equipo lean (5 full-time + 2 freelance en Base; Growth +1 asesor):** runway de 12 meses con USD 75k. Founder técnico: **Abrahan Pulido**.

## Mercado y oportunidad (validados)

- **TAM Venezuela:** USD 1.638M/año (389M unidades × USD 4,21 promedio, fuente IMS Health VE 2025). Crecimiento +17,49% YoY en unidades. CAGR 6,1% proyectado 2026-2032.
- **TAM regional Carabobo:** ~350-450 farmacias (226 solo en Valencia metro, [Farmacias Saas](https://www.saasvenezuela.com/sucursales) y directorios públicos).
- **SAM zona piloto (Bella Florida + El Socorro):** 30-50 farmacias durante el primer trimestre.
- **SOM realista al cierre del año:** 107 farmacias activas (1,8% del SAM extendido a Valencia metro). Con eso se llega al **break-even mes 11**.

## Modelo financiero (escenario Base)

| Concepto | Valor |
|---|---|
| Capital pedido | **USD 75.000** |
| Runway | 12 meses |
| Burn promedio mensual | USD 4.521 |
| Buffer ya incluido (inflación VE) | 20% |
| ARPF (revenue por farmacia) | USD 45/mes |
| CAC | USD 94 |
| Churn mensual (mediana SMB SaaS LatAm) | 5% |
| LTV | USD 900 |
| **LTV/CAC** | **9,6x** |
| Payback CAC | 2,1 meses |
| **Mes break-even** | **Mes 11 (107 farmacias activas)** |
| Año 2 proyección revenue conservadora | USD 96k anuales |
| Año 3 proyección revenue (cobertura nacional) | USD 480k anuales |

Detalle completo y construcción mes a mes en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). Detalle por línea de gasto en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md).

### Sensibilidad del modelo (ALTA #3 forense)

| Escenario | Tasa firma/mes | Churn | ARPF | Mes break-even | Cash cierre año 1 |
|---|---|---|---|---|---|
| Pesimista (probabilidad 20%) | 4-7 | 7% | USD 40 | Mes 13-14 | USD 8-10k (extender capital con bridge) |
| **Base (probabilidad 50%)** | **8-15** | **5%** | **USD 45** | **Mes 11** | **USD 41k** |
| Optimista (probabilidad 30%) | 12-20 | 4% | USD 50 | Mes 8-9 | USD 50k+ |

Detalle de las 3 sensibilidades en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 7.

## Instrumento de inversión propuesto

- **SAFE post-money cap USD 550.000** (escenario Base). Sin valuación, sin tasa de interés, sin fecha de vencimiento. El inversor convierte a equity en la próxima ronda con cap o descuento, lo que sea más favorable para él.
- **Ticket sugerido:** USD 25.000 / 50.000 / 75.000 (lead investor).
- **Equity implícito si cap se aplica:** ~13,6% post-money para USD 75k.
- **Cap table:** [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).

## Equipo

- **Founder / CEO / CTO:** **Abrahan Pulido** — Ingeniero en Informática (IUTVAL), full stack Laravel + Flutter + MySQL, 8+ años en producto; fundador de Zonix Eats, Corral X, Zonix y Zonix Imports. Contacto: `ing.pulido.abrahan@gmail.com`, +58 412 4352014, [LinkedIn](https://www.linkedin.com/in/abrahan-pulido-909a35b7/), [aiblockweb.com](https://aiblockweb.com).
- **Sales B2B:** USD 120 fijo + USD 30 comisión por farmacia firmada. [PENDIENTE].
- **Customer Support:** USD 300/mes. [PENDIENTE].
- **Marketing Lead + CEO interino delegado:** USD 500/mes. [PENDIENTE].
- **Delivery Ops Coordinator:** USD 400/mes desde mes 2. [PENDIENTE].
- **Contador externo (freelance):** USD 130/mes — IVA, ISLR, factura digital SENIAT.
- **Abogado externo (freelance):** USD 200/mes — contratos, T&C, SAPI.

## Hitos a 12 meses

| Mes | Hito |
|---|---|
| 1-3 | Constitución legal C.A., onboarding 5-10 farmacias en Bella Florida y El Socorro, Day-D del piloto al final del mes 3. |
| 4-6 | Expansión a 30-50 farmacias activas en Valencia metro. Primer mes con revenue > USD 1.500. |
| 7-9 | 60-80 farmacias activas. Validación Rx en producción con > 200 recetas validadas. Primer mes con revenue > USD 3.500. |
| 10-12 | 90-120 farmacias activas. **Break-even operativo en el mes 11.** Cierre del año con runway extra y revenue mensual > USD 4.500. |

## Riesgos principales y mitigaciones

| Riesgo | Mitigación |
|---|---|
| Inflación VE 387-618% en 2026 | Buffer 20% (ponderado: 30% costos en bolívares, 10% costos en USD). Plan de contingencia si devaluación > 100% trimestral. |
| Regulación farmacéutica venezolana | Cada farmacia afiliada aporta su propio farmacéutico colegiado (KYC + verificación MPPS, ver [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §7.4). Dictamen **abogado + farmacéutico asesor** antes de Day-D (§8.2.1 mismo doc). Asesor regulatorio on-demand en Growth. |
| Publicidad y claims en salud | Checklist **Do/Don't** y aprobación creativos: [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §1.1; avisos al paciente en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) §2.1. |
| Competencia de Farmatodo / Locatel | No competimos en su segmento (cadenas premium); competimos en farmacias medianas e independientes que NO tienen canal digital propio. |
| Adopción inicial lenta del paciente | Marketing primero a farmacias (B2B); el paciente entra orgánico una vez la farmacia ya tiene catálogo cargado. |
| Pagos manuales VE complejos | Ya implementados y probados en Zonix Eats. Webhook YCloud para WhatsApp OTP. SENIAT factura digital integrada. |

## Pregunta al inversor

> Buscamos USD 75.000 vía SAFE con post-money cap USD 550.000 para llevar Zonix Pharma a break-even operativo en 11 meses con 107 farmacias activas en Valencia, y en el año 2 expandir a Maracay y Maracaibo con un revenue anual proyectado de USD 96k. La tecnología ya está construida; lo que se financia es **comercialización, hosting, equipo y buffer de inflación**.

## Llamada a la acción

- Reunión de 30 minutos: [agenda en CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).
- Mensaje para enviar al inversor: [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md).
- Detalle financiero completo: [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).
- Análisis multi-perspectiva del pack: [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md).
- Identidad de marca para diseño de assets externos: [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md).
- Marco regulatorio VE para due diligence: [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md), [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md).
