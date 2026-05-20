# Zonix Pharma — Brief de una página

> **Última actualización:** 20 mayo 2026.
> Documento ancla del pack. Léase primero. Todas las cifras están detalladas en los documentos hermanos del directorio [docs/Lanzamiento/](README.md).

## Qué es

**Zonix Pharma** es un marketplace farmacéutico digital para Venezuela. Conecta pacientes con farmacias afiliadas para comprar OTC y medicamentos con receta (Rx), con validación de receta por farmacéutico colegiado y **entrega a domicilio o pickup en sucursal**. La **última milla** la ejecutan **empresa(s) de delivery especializada(s)** bajo **concesión o contrato marco** con Zonix Pharma; la plataforma **no** opera flota propia de reparto.

Es la **vertical farmacia** del **stack Zonix Pharma** (~4 años de código probado; misma base que delivery B2C previo): mismo equipo, misma tecnología, mismas integraciones de pago manual VE. La base técnica está construida y probada: backend Laravel con **399** tests pasando; app Flutter **sin issues** en `flutter analyze lib` en verificación Front mayo 2026 (suite `flutter test` en verde; CI según repo ZonixPharma-Front).

## Problema que resuelve

**Para el paciente**

1. **Desabastecimiento y tiempo perdido:** recorrer 3-5 farmacias sin saber si tendrán stock del medicamento.
2. **Precios opacos:** sin comparador, puede pagar hasta ~25% más yendo a la primera opción; no ve el mismo producto a mejor precio en otra farmacia afiliada.
3. **Sin conexión clara con el delivery:** el pedido “sale” pero no hay seguimiento en tiempo real ni trazabilidad del repartidor.
4. **Receta en papel:** se pierde, se arruga; quien paga desde el exterior no puede gestionar el pedido y la receta de forma digital.
5. **Dudas antes de comprar:** sin canal rápido para orientación informativa (indicaciones, genérico vs. original, interacciones) antes del pedido — *asistente con IA en roadmap Año 1 (no piloto)*.

**Para la farmacia mediana o independiente**

1. **Competir sin app propia** frente a cadenas premium (Farmatodo, Locatel) y agregadores internacionales, sin delivery integrado ni visibilidad online en marketplace.
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
- **Stack autocontenido y probado:** backend MVP en producción interna con 399 tests pasando, frontend Flutter sin issues, Pusher real-time + Firebase FCM ya integrados.
- **Equipo lean:** **9 FTE** + **2 freelance** en tier **Lean 101k** (detalle en tabla siguiente). Runway **12 meses** con **USD 101k** (mínimo viable). **Recomendado:** **USD 118k** (Base). Founder técnico: **Abrahan Pulido**.

### Equipo piloto Lean (101k) — resumen

| Rol | Tipo | Compensación ref. (USD/mes) | Notas |
|---|---|---|---|
| Founder / CEO / CTO | FTE | **1.000** | Abrahan Pulido — producto + tech |
| Co-CEO / CEO operativo | FTE | **1.000** | Comercial / operación / corporate |
| Sales B2B (×4) | FTE | **120** + **30**/firma | Comisión a rep que cierra |
| Customer Support + Community Manager | FTE | **350** (+50 KPI → 400) | Soporte + comunidad |
| Marketing Lead | FTE | **400** (+100 KPI) | Meta + offline |
| Coordinador de Partners Logísticos | FTE | **300** (+100 KPI → 400) | SLA última milla partner |
| Contador externo | Freelance | **130** | SENIAT / honorarios |
| Abogado externo | Freelance | **200** | SAFE, contratos, T&C |
| Asesor regulatorio farmacéutico | Externo | **120** | Solo **Base 118k** / **Growth 135k** |

> Matriz completa rol → skills → JARVIS: [ROLES_SKILLS_ZONIX.md](ROLES_SKILLS_ZONIX.md). Detalle burn: [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.

## Mercado y oportunidad (validados)

- **TAM Venezuela:** USD 1.638M/año (389M unidades × USD 4,21 promedio, fuente **Cifar VE**, datos **IMS/IQVIA** 2025). Crecimiento +17,49% YoY en unidades. CAGR 6,1% proyectado 2026-2032.
- **TAM regional Carabobo:** ~350-450 farmacias (226 solo en Valencia metro, [Farmacias Saas](https://www.saasvenezuela.com/sucursales) y directorios públicos).
- **SAM zona piloto (Valencia metro):** 30-50 farmacias primer trimestre operativo; foco HQ **San Diego / Av. Bolívar Norte** (ver [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md)).
- **SOM / cierre año 1 (M12 post-Day-D):** **~159 farmacias activas** en el caso central §1.1 ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)). Con **4 Sales**, **cuota 25/40/55** y **ARPF ~50**, el **equilibrio mensual** (revenue ≥ burn) se alcanza en **mes 11** (**~151 activas**).

## Modelo financiero (escenario Lean — mínimo viable USD 101k)

| Concepto | Lean (101k) | Base (118k — recomendado) | Growth (135k) |
|---|---|---|---|
| Capital pedido | **USD 101.000** | **USD 118.000** | **USD 135.000** |
| SAFE cap | **600.000** | **650.000** | **720.000** |
| Burn prom. mensual | **~7.559** | **~8.059** | **~8.691** |

| Concepto | Valor (Lean — tabla M1–M12 en PROYECCION §1) |
|---|---|
| Capital pedido | **USD 101.000** |
| Runway | **Fase 0 (~90 días)** + **12 meses** post-Day-D ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0) |
| Burn promedio mensual | **~USD 7.559** (tramos **7.462 / 7.798 / 7.431**) |
| One-shots (Fase 0 / pre-Day-D; CapEx + depósito HQ, etc.) | **~USD 9.808** |
| Fase 0 (T+0→Day-D T+90) + caja inicio M1 | **~USD 28.057** outflow Fase 0; **~USD 72.943** caja al Day-D ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0) |
| Buffer ya incluido (inflación VE) | 20% |
| ARPF (revenue por farmacia) | USD **~50**/mes *(placeholder hasta GMV piloto; cobro = híbrido cuota 25/40/55 — [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md))* |
| CAC | USD **139** |
| Churn mensual (mediana SMB SaaS LatAm) | 5% |
| LTV | USD 1.000 |
| **LTV/CAC** | **~7,2x** |
| Payback CAC | **~2,8 meses** |
| **Equilibrio mensual (revenue ≥ burn)** | **Mes 11** post-Day-D con curva §1.1 (**~151 activas**; revenue **7.550** vs burn **7.431** — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 y §1.4) |
| **Cash cierre año 1** (M12 post-Day-D) | **~USD 42.209** sin waiver; **~USD 41.756** con waiver proxy ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3) |
| Año 2 proyección revenue conservadora | USD 96k–108k anuales |
| Año 3 revenue ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §3.3) | **Conservador:** ~USD 180k–204k/año (sin Serie A). **Éxito / cobertura nacional:** hasta ~USD 480k/año. |

Detalle completo y construcción mes a mes en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). Detalle por línea de gasto en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md).

### Sensibilidad del modelo (ALTA #3 forense)

| Escenario | Tasa firma/mes | Churn | ARPF* | Equilibrio mensual (ref.) | Cash cierre año 1 |
|---|---|---|---|---|---|
| Pesimista (probabilidad 20%) | 4-7 | 7% | USD 40 | Post-M11 + bridge | **~USD 25–32k** cash cierre A1 (orden magnitud vs. central **~42.209**; [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §7.1) |
| **Base (probabilidad 50%)** | **~15**/mes post-Day-D | **5%** | **USD ~50** | **M11** (§1.1–§1.4 PROYECCION) | **~USD 42.209** |
| Optimista (probabilidad 30%) | 12-20 | 4% | USD 55 | Antes si mix/GMV mejora | **~USD 48–55k** (orden magnitud; alineado §7.3 [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md); refinar FP&A) |

\*Misma convención que la tabla anterior: ARPF es **referencia provisional** hasta recalibrar con GMV real y modelo híbrido ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5).

Detalle de las 3 sensibilidades en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 7.

## Instrumento de inversión propuesto

- **SAFE post-money** con cap según tier: **600k (Lean 101k)** · **650k (Base 118k — recomendado)** · **720k (Growth 135k)**.
- **Ticket sugerido:** USD 25.000 / 50.000 / **101.000** (lead mínimo) / **118.000** (recomendado) / **135.000** (acelerado).
- **Equity implícito Lean:** **~16,83%** (101k / 600k). Base **~18,15%**; Growth **~18,75%**.
- **Cap table:** [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).

## Equipo

- **Founder / CEO / CTO:** **Abrahan Pulido** — Ingeniero en Informática (IUTVAL), full stack Laravel + Flutter + MySQL, 8+ años en producto; fundador de **Zonix Pharma** (evolución del mismo stack desde delivery B2C), **Corral X**, **Zonix Imports** y **Aiblockweb**. Contacto: `ing.pulido.abrahan@gmail.com`, +58 412 4352014, [LinkedIn](https://www.linkedin.com/in/abrahan-pulido-909a35b7/), [aiblockweb.com](https://aiblockweb.com).
- **Sales B2B (4 ejecutivos):** USD **120** fijo c/u + USD **30** comisión por farmacia firmada.
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
| 4-6 | **M1–M3 post-Day-D:** rampa a **~62 activas**; revenue > **USD 3.100**/mes hacia M3 ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1). |
| 7-9 | **~108–130 activas**; validación Rx en producción con > 200 recetas validadas; revenue > **USD 5.400–6.500**/mes. |
| 10-12 | **~141–159 activas**; **equilibrio en M11**; cierre M12 con **~USD 42.209** cash y revenue mensual **~USD 7.950**. |

## Riesgos principales y mitigaciones

| Riesgo | Mitigación |
|---|---|
| Inflación VE 2026 | **BCV mayo 2026:** proyección de **desaceleración** (inflación mensual de **un dígito desde mayo**). Escenarios externos pesimistas citan **387-618%** anual — el pack usa buffer **20%** (ponderado: 30% costos en bolívares, 10% en USD) + plan contingencia si devaluación > 100% trimestral. |
| Regulación farmacéutica venezolana | Cada farmacia afiliada aporta su propio farmacéutico colegiado. Dictamen **abogado + farmacéutico asesor** antes de Day-D. Asesor on-demand incluido en **Base/Growth** (118k/135k). |
| Publicidad y claims en salud | Checklist **Do/Don't** y aprobación creativos: [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §1.1; avisos al paciente en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) §2.1. |
| Competencia de Farmatodo / Locatel | No competimos en su segmento (cadenas premium); competimos en farmacias medianas e independientes que **no** tienen **app / marketplace** propio integrado. |
| Adopción inicial lenta del paciente | Marketing primero a farmacias (B2B); el paciente entra orgánico una vez la farmacia ya tiene catálogo cargado. |
| Pagos manuales VE complejos | Ya implementados y probados en la **plataforma Zonix Pharma**. OTP paciente vía **Firebase Phone Auth** (SMS). Factura digital SENIAT cuando la empresa esté constituida y el trámite esté habilitado. |

## Pregunta al inversor

> Buscamos **USD 101.000** (Lean — mínimo) vía SAFE cap **600.000**, con opción **118k recomendado** / **135k acelerado**, para Fase 0 + 12 meses post-Day-D — **~USD 42.209** cash M12 y equilibrio **M11**.

## Llamada a la acción

- Reunión de 30 minutos: [agenda en CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).
- Mensaje para enviar al inversor: [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md).
- Detalle financiero completo: [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).
- Análisis multi-perspectiva del pack: [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md).
- Identidad de marca para diseño de assets externos: [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md).
- Marco regulatorio VE para due diligence: [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md), [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md).
