# Zonix Eats — Plan de lanzamiento comercial (documento maestro)

> **Empresa:** Creesca · **Producto:** Zonix Eats  
> **Última actualización:** abril 2026  
> **Metodología vs datos operativos:** la **estructura** de este plan (fases, checklist, KPIs, enlaces a docs técnicos) está **cerrada**. Los **`[PENDIENTE]`** y tablas vacías son **datos del piloto** que debe completar el equipo; no implican que el trabajo de planificación en herramientas de desarrollo esté “sin hacer”.  
> **Relación con otros artefactos:** Este documento sintetiza la operación y el go-to-market. La plantilla para IAs sigue en [`PROMPT_OPERATIVO_LANZAMIENTO.md`](../../../PROMPT_OPERATIVO_LANZAMIENTO.md). El briefing de una página: [`BRIEF_UNA_PAGINA_ZONIX_EATS.md`](BRIEF_UNA_PAGINA_ZONIX_EATS.md). **Cuestionario para el equipo (copiar/enviar):** [`CUESTIONARIO_EQUIPO_PILOTO.md`](CUESTIONARIO_EQUIPO_PILOTO.md). **Plantilla para volcar respuestas (una pasada):** [`VOLCADO_RESPUESTAS_CUESTIONARIO.md`](VOLCADO_RESPUESTAS_CUESTIONARIO.md). Índice de la carpeta: [`README.md`](README.md).

**Mercado piloto definido:** Valencia, Estado Carabobo, Venezuela — **núcleo Urbanización Popular El Socorro** y **barrios colindantes** del mismo corredor (p. ej. Bella Florida, Los Chorritos, Las Parcelas, San Martín, Llano Verde, etc.). Ajustar el listado si se suman o excluyen zonas al validar cobertura de delivery.

---

## Financiación y narrativa para socio inversionista

Avanzar a escala suele requerir capital y/o un socio que aporte red operativa (comercios, delivery) además de dinero. Este plan ya sirve como **base de diligence operativa**: modelo de ingresos (membresía B2B, sin comisión sobre GMV), riesgo regulatorio acotado (no intermediación de pagos), y KPIs de piloto medibles.

Para un **one-pager o data room ligero**, conviene preparar en paralelo (sin sustituir a abogados ni contadores):

| Elemento | Para qué sirve al inversionista |
|----------|----------------------------------|
| Piloto geográfico claro | El Socorro + barrios colindantes acota dispersión y hace el experimento creíble frente a inversionistas. |
| Línea base y metas 30/60/90 | Demuestra que el negocio se piensa en números, no solo en “la app está lista”. |
| Uso de fondos por bloques | Ej.: producto/cumplimiento (SENIAT, observabilidad), GTM piloto, capital de trabajo. |
| Riesgos declarados | SENIAT, operación con pagos manuales, dependencia de partners delivery. |

Los montos de ronda, valuación y estructura legal (SAFE, equity, etc.) **no** van en este documento hasta que Creesca y asesoría los definan.

**Preparación de la reunión con inversionista** (estructura, uso de fondos, preguntas frecuentes, cierre y post-reunión): [`CHECKLIST_PRE_INVERSOR.md`](CHECKLIST_PRE_INVERSOR.md). **Montos de referencia desde fuentes web** (VPS, dominio, notas pauta, OOH): [`MONTOS_REFERENCIA_INTERNET.md`](MONTOS_REFERENCIA_INTERNET.md). **Presupuesto 12 meses (escenarios y totales):** [`PRESUPUESTO_12_MESES_REFERENCIA.md`](PRESUPUESTO_12_MESES_REFERENCIA.md).

**Nuevos documentos de negocio (abril 2026):**
- [`PERFIL_MERCADO_PILOTO.md`](PERFIL_MERCADO_PILOTO.md) — datos demográficos, TAM/SAM/SOM, competencia, hábitos de pago.
- [`UNIT_ECONOMICS.md`](UNIT_ECONOMICS.md) — membresía $25/mes, CAC, LTV, break-even, sensibilidad.
- [`PROPUESTA_VALOR_COMERCIO.md`](PROPUESTA_VALOR_COMERCIO.md) — pitch al comercio, comparación cuantificada, script de venta.
- [`PROYECCION_FINANCIERA_12M.md`](PROYECCION_FINANCIERA_12M.md) — ingresos mes a mes, 3 escenarios, flujo de caja.
- [`ESTRUCTURA_LEGAL_Y_EQUITY.md`](ESTRUCTURA_LEGAL_Y_EQUITY.md) — C.A. vs SRL, cap table, instrumentos de inversión, SENIAT.
- [`PROPUESTA_VALOR_COMPRADOR.md`](PROPUESTA_VALOR_COMPRADOR.md) — por que el buyer descarga la app, incentivos, funnel, soporte, metricas.

---

## Cómo usar este documento

1. Enviar al equipo el [`CUESTIONARIO_EQUIPO_PILOTO.md`](CUESTIONARIO_EQUIPO_PILOTO.md) (15–20 min); registrar respuestas en [`VOLCADO_RESPUESTAS_CUESTIONARIO.md`](VOLCADO_RESPUESTAS_CUESTIONARIO.md) y luego volcar a §2 y §11 (o pegar en bruto en la sección 1 del volcado y ordenar después).
2. Completar la sección **Datos pendientes de negocio** (§11) siguiendo el **orden de la tabla guía** siguiente (cuando 1–5 estén cerrados, el brief deja de ser “plantilla”).
3. Ejecutar el **cuestionario de diagnóstico** §2 (90 min o async) y registrar **una sola prioridad** para las próximas 2–4 semanas.
4. Revisar semanalmente la tabla de **checklist operativo** y los **KPIs** (ajustar números con datos reales cuando existan).
5. Tras recibir respuestas, seguir **Después de recibir respuestas del equipo** (misma página).

**Mapeo CUESTIONARIO_EQUIPO_PILOTO → este documento:** no es un segundo criterio paralelo a la matriz **A–E** de §2. El **ítem 3** del cuestionario (métricas) alimenta las preguntas **A–E**; el **ítem 4** (una sola prioridad) coincide con la **regla de salida** (una bandera: funnel / operación / producto). Los **ítems 1–2, 5–7** completan **§11** y el **brief** (ventana, comercios, delivery, SENIAT, membresía, presupuesto, canales, URLs). **Registro en una sola pasada** cuando lleguen respuestas: tabla **Registro** de §2 (fecha, prioridad #1, línea base, dueño); filas críticas de **§11** (sobre todo orden **1–5** de la tabla guía); tablas **Piloto** y **Prioridad #1** del brief.

**Rutas en presentaciones externas:** usar rutas relativas al repo (esta carpeta: `zonix-eats-back/docs/Lanzamiento/`) o la copia que Creesca defina como canónica; evitar enlaces absolutos de máquina local.

---

## Tabla guía — orden de rellenado (prioridades)

| Orden | Campo / bloque | Dónde vive | Para qué sirve |
|-------|----------------|------------|----------------|
| 1 | Fecha del diagnóstico + Prioridad #1 (2–4 semanas) + dueño | §2 + brief | Desbloquea el resto |
| 2 | Línea base “antes” (A–E o métricas mínimas) | §2 | Sin número, poca mejora creíble |
| 3 | Ventana piloto (fechas) | Brief + §11 | Agenda comercial y tech |
| 4 | Comercios comprometidos (nombres o N + fecha) | Brief piloto + §11 | GTM realista |
| 5 | Empresa(s) delivery o decisión solo retiro | Brief + §7 Plan B | Evita prometer envío incumplible |
| 6 | URLs (web, Android, iOS) | §11 | Materiales y soporte |
| 7 | Métodos de pago MVP por comercio/zona | §11 + [PLAN_METODOS_PAGO_VENEZUELA.md](PLAN_METODOS_PAGO_VENEZUELA.md) | UX y capacitación |
| 8 | Tarifas membresía o acta de reglas manuales de envío | §11 + [PLAN_MODULO_TARIFA_DELIVERY.md](PLAN_MODULO_TARIFA_DELIVERY.md) | Corta disputas |
| 9 | Facturación B2B / SENIAT (estado y plan) | §11 + checklist | Riesgo fiscal explícito |
| 10 | Presupuesto lanzamiento + marketing mensual | §11 | Freno a promesas |
| 11 | Equipo (ops, captación, tech) y costos | §9 | SLA soporte |
| 12 | Hosting / equipo tech | §11 | Continuidad operativa |

---

## Después de recibir respuestas del equipo

1. Registrar **prioridad #1** y **línea base** en §2 y en el brief.
2. Si la prioridad es **ops o funnel** (validación de comprobantes, soporte, abandono en `pending_payment`): cruzar con el **checklist** §5 (timeouts, canal único, entrenamiento a comercios).
3. Si la prioridad es **producto / UX**: enlazar con el **backlog** §8 (observabilidad, pagos VE, tarifa delivery o reglas manuales acordadas).
4. En paralelo, si la monetización B2B (membresía facturada) está en mesa: **revisión legal/contable SENIAT** sin esperar al cierre del piloto.

Respuestas en bruto se pueden pegar en un mensaje o issue y volcar luego a las tablas de §11 y del brief.

---

## 1. Diagnóstico inicial (estado del producto)

**Lectura honesta (basada en el repo y [`PROMPT_OPERATIVO_LANZAMIENTO.md`](../../../PROMPT_OPERATIVO_LANZAMIENTO.md)):**

- **Listo para pilotos acotados:** la app multi-rol (Flutter), el backend (Laravel) y el flujo de orden con pagos **off-platform** y validación de comprobantes por el comercio están construidos y probados a nivel de código (tests backend).
- **No es “lanzamiento masivo sin fricción”:** los pagos son manuales fuera de la app; el cuello operativo suele estar en **validación de comprobantes**, **comunicación buyer–commerce** y **logística tercerizada**.
- **Riesgos mayores de lanzamiento (3):**
  1. **Cumplimiento fiscal B2B (SENIAT):** facturación digital obligatoria; Zonix debe poder facturar membresías a comercios/empresas de delivery.
  2. **Inconsistencia de tarifas de envío:** el backend aún no calcula tarifa; el front envía monto — riesgo de disputas y mala experiencia si no hay reglas claras en el piloto.
  3. **Observabilidad y soporte:** sin alertas y canal de incidencias acotado, los fallos se convierten en abandono y reputación negativa en WhatsApp antes que en tickets.

**Regulatorio vs operación:** el modelo de pagos en código y en [`PLAN_METODOS_PAGO_VENEZUELA.md`](PLAN_METODOS_PAGO_VENEZUELA.md) puede estar alineado y aun así fallar el piloto si los comercios **no validan comprobantes a tiempo**; eso es **ops**, no contradicción entre documentos.

---

## 2. Cuestionario de diagnóstico (90 min o async)

**Objetivo:** salir con **una única prioridad** para las próximas 2–4 semanas (funnel, operación o producto/UX).

**Un solo marco de diagnóstico:** las preguntas **A–E** (tabla siguiente) son la **matriz oficial** de datos. La **regla de salida** con tres banderas (funnel / operación / producto) es el **resumen ejecutivo** a partir de esas respuestas. No hay un segundo cuestionario “oficial” en paralelo; otras listas de preguntas deben mapearse a A–E. Para recoger datos de negocio antes de una reunión, usar también [`CUESTIONARIO_EQUIPO_PILOTO.md`](CUESTIONARIO_EQUIPO_PILOTO.md) (sus respuestas de métricas vuelcan aquí en **A–E**; su prioridad en **ítem 4** vuelca en la bandera de salida).

Responder con número o nota corta; luego votar o consensuar.

| # | Pregunta | Qué mide |
|---|----------|----------|
| A | De las órdenes que llegan a `pending_payment`, ¿qué % termina en `all_payments_validated` en &lt; 30 min? (si no hay dato, estimar) | Fricción de pago/comprobante |
| B | ¿Cuántas órdenes se cancelan o expiran en `pending_payment` vs total creadas? (semana reciente) | Abandono temprano |
| C | Tiempo medio desde “pedido listo para reparto” hasta “asignado a repartidor” (si aplica) | Logística / asignación |
| D | Top 3 motivos de disputa o mensajes al chat (si hay registro) | Operación vs producto |
| E | ¿Qué limita más hoy el crecimiento: falta de comercios en zona, falta de compradores, o fallos de app/UX? | Dónde invertir |

**Regla de salida:** elegir **solo una** de estas banderas como prioridad #1:

- **Funnel / conversión** — si A o B son malos.
- **Operación / logística** — si C o D dominan.
- **Producto / UX** — si E apunta a app o si los rechazos son por bugs/flujo.

**Registro (rellenar tras la sesión):**

| Campo | Valor |
|-------|-------|
| Fecha del diagnóstico | |
| Prioridad #1 (2–4 semanas) | |
| Métrica númerica “antes” (línea base) | |
| Dueño | |

---

## 3. Las siete fases del plan (metodología fusionada)

### Fase 1 — Congelar el “por qué” (≈1 página)

| Elemento | Contenido Zonix Eats |
|----------|----------------------|
| **Problema** | Comercios de comida rápida pierden margen por comisiones altas de marketplaces; compradores quieren alternativa local con precio transparente; repartidores y empresas de delivery necesitan trabajo sin que la plataforma retenga el dinero de la venta. |
| **Promesa (resultado, no feature)** | “Pedir comida rápida en tu zona pagando directo al comercio, con seguimiento en la app y envío organizado, sin que Zonix se quede con el pago del pedido.” |
| **No-objetivos (primeros 90 días)** | No pasarela que retenga fondos del comprador; no wallet; no expansión nacional sin piloto estable; no “gran campaña de marca” sin SLA operativo mínimo; no prometer cálculo automático de envío en backend hasta estar implementado o acordar reglas manuales claras. |

### Fase 2 — “Operacional al 100%” con números (KPIs mínimos)

*Sin pasarela integrada, los KPIs no son “checkout conversion” clásico; son **validación, tiempo y completitud**.*

| KPI | Definición sugerida | **Target piloto** | Nota |
|-----|---------------------|-------------------|------|
| **Tasa validación de pago** | Órdenes validadas / que pidieron comprobante | **>70 %** | Sustituto de conversión de pasarela |
| **Tiempo a validar pago (p90)** | Minutos desde comprobante hasta validación | **< 30 min** | En horario comercial |
| **Abandono `pending_payment`** | Expiradas o canceladas / creadas | **< 30 %** | Acotar TTL y comunicación al buyer |
| **Órdenes completadas** | Llegan a entregado (o retiro) / creadas | **> 60 %** | North star operativo |
| **MTTR incidencias** | Horas desde reporte hasta resolución | **< 4 horas** | Requiere dueño de soporte |
| **Disponibilidad API** | % uptime o errores 5xx / hora | **> 99 %** | Tras observabilidad mínima |
| **MRR** | Ingresos recurrentes mensuales de membresías | **Creciente** | Ver [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) |
| **Comercios activos** | Con ≥1 pedido en 30 días | **Creciente** | Mide product-market fit |
| **Churn mensual** | Comercios que cancelan / activos inicio de mes | **< 15 %** | Mejorar a < 10 % en fase madura |

*Targets son supuestos iniciales. Ajustar tras primer mes de datos reales.*

### Fase 3 — Pre-lanzamiento (calidad + riesgo)

| Área | Qué cubrir |
|------|------------|
| **Observabilidad** | Logs estructurados, alertas básicas (5xx, colas, latencia), trazabilidad del flujo pedido → pago validado → delivery |
| **Pagos** | Pruebas reales controladas: cada método que el comercio muestre; reintentos de comprobante; comunicación si el comercio rechaza |
| **Soporte** | Canal único (ej. WhatsApp Business + horario), plantillas, escalamiento a Commerce vs Zonix |
| **Legal** | T&C, privacidad, modelo de plataforma (LOTTT), datos personales 2025; facturación digital SENIAT para ingresos B2B de Zonix |
| **Incidentes** | Dueño on-call, comunicación de degradación, rollback de deploy |

### Fase 4 — Lanzamiento blando (beta controlada)

- Cohortes pequeñas (por zona / lista cerrada / comercios aliados).
- Feedback semanal estructurado (5 preguntas fijas).
- **Criterio de salida a más escala (ejemplo a fijar):** “Durante **Z** días consecutivos: validación de pago p90 &lt; **X** min; órdenes completadas &gt; **Y**% del total creadas; MTTR &lt; **W** horas.”

### Fase 5 — Go-to-market (motivo + hábito + confianza)

- Onboarding comprador: primer pedido en &lt; 3 min si la zona y el comercio están cargados.
- Incentivo coherente con el modelo (membresía baja vs comisión %; rapidez de validación; comercios locales).
- Prueba social real (reseñas, capturas, casos en la misma ciudad).
- Pocos partners bien medidos: N comercios + 1 empresa de delivery antes de escalar marketing pago.

### Fase 6 — Crecimiento sostenible (90 días)

- **Máximo 3 prioridades** por trimestre (ej. SENIAT + observabilidad + tarifas; o captación comercios + soporte + fixes UX).
- Ritmo: revisión semanal de KPIs; ajuste táctico quincenal.

### Fase 7 — Gobernanza

- Reunión semanal corta: métricas, incidentes, próxima apuesta, bloqueos.
- **Fuente de verdad:** estado de la orden en backend; comunicación al cliente alineada a ese estado (Pusher/FCM + mensajes claros).
- **Reglas de autonomía:** qué puede decidir el equipo local sin founders (tope de descuento, excepciones de soporte) y qué siempre escala (legal, pricing de membresía, incidentes de datos).

---

## 4. Tres alternativas de enfoque (trade-offs)

| Enfoque | Cuándo usar | Coste / riesgo |
|---------|-------------|----------------|
| **Velocidad de aprendizaje** | Ya hay app en producción y quieren iterar | Menos “show”; más métricas y fixes semanales |
| **Impacto de marca** | Necesitan visibilidad fuerte | Más gasto; si falla la operación, el daño reputacional es mayor |
| **Eficiencia operativa primero** | El cuello es logística/soporte/validación de pagos | Marketing pago espera; reduce churn temprano |

**Recomendación alineada al modelo Zonix:** combinar **aprendizaje** + **operación fuerte** hasta que los KPIs de validación y entrega sean estables.

---

## 5. Checklist operativo pre-lanzamiento

| Item | Categoría | Estado | Acción requerida | Prioridad |
|------|-----------|--------|------------------|-----------|
| App buyer/commerce/delivery usable en piloto | Tech | Listo | Mantener tests verdes | P1 |
| Backend + auth + órdenes | Tech | Listo | Monitoreo P0 | P0 |
| Pagos off-platform + comprobantes | Tech / Ops | Listo | Entrenar comercios en validación rápida | P0 |
| T&C y privacidad publicados | Legal | Listo | Revisión anual | P1 |
| Facturación digital SENIAT (Zonix → clientes B2B) | Legal / Tech | Pendiente | Implementar conforme normativa | **P0** |
| Módulo tarifa delivery (backend calcula) | Tech | Pendiente | Ver [PLAN_MODULO_TARIFA_DELIVERY.md](PLAN_MODULO_TARIFA_DELIVERY.md) | P0–P1 |
| Cobro/gestión membresía comercios | Tech | Parcial | Tabla existe; flujo completo | P0–P1 |
| Onboarding comercios (docs, RIF, etc.) | Ops / Tech | Parcial | Checklist por comercio | P1 |
| Panel admin operativo | Tech | Parcial | Definir MVP admin para piloto | P1 |
| Observabilidad y alertas | Tech | Pendiente | Logs + alertas mínimas | **P0** |
| Métodos de pago VE completos (enum, UX) | Tech | Parcial | Ver [PLAN_METODOS_PAGO_VENEZUELA.md](PLAN_METODOS_PAGO_VENEZUELA.md) | P1 |
| Canal de soporte + plantillas | Ops | Pendiente | Un canal, horarios | P0 |
| Plan de incidentes | Ops | Pendiente | Runbook breve | P1 |

*Estados son orientativos; confirmar en el repo al momento del lanzamiento.*

---

## 6. Gaps técnicos (bloqueantes vs deseables)

| Gap | Bloqueante para piloto controlado | Referencia |
|-----|-----------------------------------|------------|
| SENIAT B2B | Sí a mediano plazo; operación informal de comercios sin factura Zonix es riesgo fiscal | docs legales en repo |
| Tarifa delivery (cálculo backend) | No si se acuerdan montos/zonas manualmente para el piloto | [PLAN_MODULO_TARIFA_DELIVERY.md](PLAN_MODULO_TARIFA_DELIVERY.md) |
| Membresía cobrada en app | Depende del modelo comercial del piloto (gratis inicial vs pago) | — |
| Observabilidad | Altamente recomendable antes de abrir tráfico no trivial | — |
| Ampliación métodos de pago VE | Deseable; leer plan antes de tocar `payment_methods` | [PLAN_METODOS_PAGO_VENEZUELA.md](PLAN_METODOS_PAGO_VENEZUELA.md) |

---

## 7. Go-to-market — primeras 4 semanas (esqueleto)

| Semana | Comercios | Delivery | Compradores | KPIs a mirar |
|--------|-----------|----------|-------------|--------------|
| 1 | Lista de 10 prospects; pitch membresía fija vs %; 2–3 activos | Contactar 1 empresa; acuerdo de prueba | Lista cerrada o barrio; instalar app | # comercios activos, # órdenes |
| 2 | Onboarding (horarios, métodos de pago, tiempos de preparación) | Primeras asignaciones reales; feedback | Primeras 20–50 órdenes si es posible | Tasa validación pago, tiempo p90 |
| 3 | Resolver fricciones de validación y chat | Ajustar timeouts / comunicación | Pedir reseñas / referidos | Órdenes completadas, disputas |
| 4 | Decisión: escalar zona o profundizar | Formalizar acuerdo o segundo partner | Micro-influencers o ads localizados | Criterio de salida fase 4 |

**Plan B:** si no hay empresa de delivery, ofrecer **solo retiro en tienda** en el piloto para no romper promesa de tiempos.

### 7.0 Dia D — cronograma tentativo con fechas calendario

> **Importante:** estas fechas son tentativos basadas en "inversion cerrada en junio 2026". Ajustar si la inversion se cierra antes o despues. El "Mes 1" del piloto comienza cuando se cierra la inversion, no antes.

| Semana | Fecha tentativa | Hito | Responsable | Dependencia |
|--------|----------------|------|-------------|-------------|
| **Pre-inversion** | Mayo 2026 | Reunion con inversionista; cerrar deal | Founders | Pack de lanzamiento listo |
| **Semana 0** | Jun 1-7, 2026 | Inversion recibida; constituir C.A. (iniciar tramite) | Founders + abogado | Capital disponible |
| **Semana 1-2** | Jun 8-21 | Contratar/activar ops part-time; primer recorrido de zona; identificar 10 prospects comercios | Founder + ops | Presupuesto ops |
| **Semana 3-4** | Jun 22 - Jul 5 | Primeros 3-5 comercios en trial; contactar empresa de delivery; material impreso listo | Ops/captador | App lista en Play Store |
| **Semana 5-6** (Mes 2) | Jul 6-19 | Onboarding comercios (menu, fotos, capacitacion); primeros pedidos de prueba; pauta Meta activa | Ops + CTO | Comercios registrados |
| **Dia D (lanzamiento blando)** | **Jul 21, 2026** | Apertura a buyers de la zona; QR en locales; WhatsApp community activo | Todo el equipo | 3+ comercios activos |
| **Semana 7-8** | Jul 21 - Ago 3 | Primeras 20-50 ordenes reales; feedback semanal; ajustar tiempos de validacion | Ops + CTO | Buyers descargando app |
| **Mes 3** | Ago 2026 | Evaluar KPIs fase 4; decidir escalar zona o profundizar; formalizar delivery company | Founders | Datos de mes 1-2 |
| **Mes 6** | Nov 2026 | **Checkpoint piloto:** evaluar Definition of Done (seccion 12); reportar al inversionista | Founders | 6 meses de datos |
| **Mes 12** | May 2027 | Cierre ano 1; decision expansion a Valencia completa o pivot | Founders + inversionista | Break-even mensual a la vista |

> **Nota:** la C.A. tarda 6-10 semanas (ESTRUCTURA_LEGAL). El tramite se inicia en semana 0 pero la facturacion SENIAT puede no estar lista hasta mes 2-3. Mientras tanto, los trials son gratis y no requieren factura.

### 7.1 Estrategia de generacion de demanda (compradores)

Sin compradores que hagan pedidos, los comercios no ven valor en la app y el trial no sirve. La captacion de comercios y la generacion de demanda **deben ir en paralelo**.

**Incentivo de primer pedido:** "delivery gratis en tu primer pedido" (Zonix paga al rider ~$1.50-2.50). Costo controlado: 50 buyers x $2 = $100. Es la barrera mas relevante en barrio popular. Detalle y opciones en [PROPUESTA_VALOR_COMPRADOR.md](PROPUESTA_VALOR_COMPRADOR.md) seccion 5.

| Canal | Accion | Costo | Semana |
|-------|--------|-------|--------|
| **WhatsApp community** | Crear grupo/canal de barrio; invitar vecinos via volante con QR | ~$0 (tiempo) | 1-2 |
| **Volantes en zona** | Volante A5 con QR de descarga en la puerta de cada comercio registrado | ~$30-50 (impresion) | 2-3 |
| **Referidos** | Comprador que refiere a 3 amigos obtiene beneficio del comercio | $0 para Zonix | 3+ |
| **Pauta hiperlocal (Meta)** | Campana $5/dia segmentada a 2 km de El Socorro, 18-45 anos | ~$150/mes | 2+ |
| **QR en el local** | Sticker/poster en la puerta del comercio | ~$2/comercio | Desde onboarding |
| **Instagram/TikTok del comercio** | Ayudar al comercio a publicar que ya esta en Zonix Eats | $0 | Desde onboarding |

**Meta de demanda semana 2-4:** al menos **3-5 pedidos/semana por comercio** para demostrar valor durante el trial.

### 7.1.1 Calendario editorial y estrategia de contenido

**Responsable:** founder / ops (o freelancer por $50-100/mes si hay presupuesto).

#### Tipos de contenido

| Tipo | Formato | Frecuencia | Canal | Ejemplo |
|------|---------|-----------|-------|---------|
| **Video del comercio** | Reel 15-30s (preparando comida) | 2/semana | IG, TikTok, WhatsApp Status | "Mira como preparan las empanadas en [Luncheria X] — pidelas por Zonix Eats" |
| **Testimonio comercio** | Foto + quote del dueno | 1/semana | IG Feed, WhatsApp | "Desde que estoy en Zonix, recibo pedidos sin estar pegado al telefono" |
| **Promo del dia** | Story con menu del dia + QR | 3-5/semana | IG Stories, WhatsApp Status | "Hoy en [Arepera Y]: combo arepa + jugo $4 — pide por Zonix" |
| **Detras de escenas** | Video corto o carrusel | 1/semana | IG, TikTok | Rider recogiendo pedido, equipo en accion |
| **Tutorial "como pedir"** | Carrusel o video paso a paso | 1/mes (o al onboardear comercio nuevo) | IG, WhatsApp, Play Store | 4 pasos: busca > elige > paga > recibe |
| **User-generated** | Repost de stories de clientes | Cuando surja | IG Stories | Buyer mostrando su pedido |

#### Calendario semanal tipo (pauta + organico)

| Dia | Organico | Pauta ($5/dia) |
|-----|---------|---------------|
| Lunes | Video comercio (reel) | Campana awareness zona |
| Martes | — | Campana awareness zona |
| Miercoles | Promo del dia (story) | — |
| Jueves | Testimonio comercio (feed) | Campana conversiones (descarga app) |
| Viernes | Promo del dia (story) | Campana conversiones |
| Sabado | Video detras de escenas | — |
| Domingo | — | — |

**Costo:** $0 organico + $150/mes pauta = lo que ya esta presupuestado. El contenido lo genera el captador/ops con el celular al visitar comercios.

#### Banco de contenido (crear antes de lanzar)

- [ ] 5 videos cortos de comercios registrados (reel 15-30s)
- [ ] 10 fotos de platos con buena luz (el captador las toma en la visita)
- [ ] 1 video tutorial "como pedir en Zonix Eats" (pantalla grabada)
- [ ] 3 templates de stories (Canva) con marca Zonix
- [ ] QR imprimible con enlace de descarga

### 7.1.2 Google Maps y visibilidad local (gancho de captacion)

En barrio, muchas busquedas empiezan en **Google Maps** ("comida cerca", "arepera"). Zonix no reemplaza Maps, pero puede **ayudar al comercio** como servicio de onboarding:

| Accion | Responsable | Costo | Nota |
|--------|-------------|-------|------|
| Crear/optimizar **Google Business Profile** por comercio (nombre, horario, telefono, fotos) | Ops / captador | $0 | Guia oficial Google; 15-20 min por local |
| Verificar que la direccion del comercio coincida con la de la app | Ops | $0 | Evita reviews negativos por "no encontraron el local" |
| En descripcion del perfil: "Tambien pedidos por Zonix Eats" + link o texto corto | Comercio (con plantilla Zonix) | $0 | No es obligatorio; es valor anadido en captacion |

**Pitch al comercio:** "Le ayudamos a que lo encuentren en Google y que sepan que puede pedir por la app."

### 7.1.3 Plan de PR y prensa local (prioridad media)

Objetivo: **una mencion gratuita o de bajo costo** vale mas que dias de pauta en barrio.

| Medio / canal | Accion | Plazo | Costo estimado |
|----------------|--------|-------|----------------|
| **El Carabobeno** (u otro regional) | Nota de "emprendimiento local" / app de barrio | Mes 2-3 post Dia D | $0 si es nota; fee si es pauta editorial (cotizar) |
| **Radio FM Valencia** | Spot 30 s o entrevista telefonica 5 min | Mes 2-4 | Variable ($50-300 segun emisora); negociar paquete local |
| **Instagram / Facebook de medios** | Comunicado + 2 fotos (comercio + QR) | Misma ventana | $0 |
| **Directorios barriales** (grupos FB, WhatsApp de urbanizaciones) | Post con permiso de admin | Semanal primer mes | $0 |

**Checklist PR (antes de escribir al periodista):**

- [ ] 1 parrafo: que es Zonix, zona (El Socorro), sin prometer cobertura nacional.
- [ ] 2 comercios con nombre que acepten ser citados.
- [ ] Foto horizontal (comercio + QR o founder + captador).
- [ ] Contacto WhatsApp de prensa (ops o founder).

### 7.1.4 Evento de lanzamiento en barrio (activacion fisica)

La pauta Meta complementa; **el dia de impacto** en calle genera boca a boca.

| Formato | Descripcion | Cuando | Costo orientativo |
|---------|-------------|--------|-------------------|
| **Dia "primer delivery gratis"** | Zonix absorbe hasta N entregas ($2 c/u); comercio aporta producto a precio acordado | Semana del Dia D o la siguiente | $100-200 (50 entregas x $2) |
| **Mesa en punto caliente** | Stand 2-3 h con QR, volantes, demo en celular | Sabado manana (mercado / plaza) | $30-50 impresion |
| **Alianza con iglesia / club** | Anuncio al final del acto + volante (con permiso) | Si aplica en la zona | $0 |

Coordinar con la tabla de incentivos buyer en [PROPUESTA_VALOR_COMPRADOR.md](PROPUESTA_VALOR_COMPRADOR.md) seccion 5.

### 7.2 Reglas manuales de tarifa de delivery (piloto)

Hasta que el backend calcule la tarifa automaticamente (ver [PLAN_MODULO_TARIFA_DELIVERY.md](PLAN_MODULO_TARIFA_DELIVERY.md)), usar tarifas fijas acordadas con la empresa de delivery o riders.

| Zona | Tarifa fija sugerida (USD) | Quien la cobra | Nota |
|------|---------------------------|---------------|------|
| Dentro de El Socorro | $1,00-1,50 | El delivery al buyer (via comercio) | Distancia corta |
| Socorro - barrios colindantes | $2,00-2,50 | El delivery al buyer (via comercio) | Distancia media |
| Fuera del corredor piloto | No se ofrece | -- | Limitar zona |

**Regla de discrepancia:** si el rider pide mas de la tarifa mostrada al buyer, el comercio asume la diferencia **o** el pedido se ofrece como retiro en tienda. Documentar estas reglas en un acuerdo escrito con la empresa de delivery antes de empezar.

**El front envia `delivery_fee`** segun esta tabla; el backend lo valida y guarda. Cuando el modulo backend este listo, se reemplaza por calculo automatico.

#### 7.2.1 Asignacion de pedidos a riders (piloto manual)

Hasta que exista asignacion automatica estable en backend, el piloto usa **reglas escritas** para evitar peleas entre riders y reclamos al comercio.

| Regla | Detalle |
|-------|---------|
| **Canal unico** | Grupo de WhatsApp **solo** empresa de delivery + ops Zonix + comercios (o subgrupo por zona). Mensaje tipo: "Pedido #123 — [Comercio] — [Direccion] — tarifa acordada $X" |
| **Quien asigna** | **Coordinador de la delivery company** (o ops Zonix si aun no hay empresa). Un solo "dispatcher" por turno evita duplicados |
| **Orden de prioridad** | (1) Rider ya en zona El Socorro, (2) quien lleva menos pedidos activos en el dia, (3) rotacion equitativa entre agentes |
| **SLA aceptacion** | El rider confirma en **< 5 min** o el dispatcher reasigna |
| **Sin rider disponible** | Comercio ofrece **retiro en tienda** o reprograma con el buyer (mensaje en app + WhatsApp) |
| **Registro** | Captura de pantalla o fila en hoja compartida (fecha, #pedido, rider, hora salida) — util para disputas |

**No prometer** al buyer tiempo de asignacion fijo hasta medir datos reales 2-4 semanas.

#### 7.2.2 Combustible, rechazo de pedidos y riesgos (delivery)

Zonix **no emplea** a los riders: el contrato es entre comercio/buyer y empresa de delivery o independiente. Aun asi, documentar expectativas reduce friccion legal y operativa.

| Tema | Linea recomendada |
|------|-------------------|
| **Combustible** | Lo asume el rider / empresa de delivery; el **delivery_fee** del buyer debe cubrir en promedio el trayecto segun tabla de zonas |
| **Rechazo de pedido** | Rider puede rechazar si: clima extremo, zona insegura declarada, pedido fuera del corredor acordado, o sobrecarga (definir en acuerdo con empresa) |
| **Pedido muy lejos** | Si la direccion excede el corredor piloto, no se ofrece delivery (ya en §7.2 tabla) |
| **Accidente / danos** | **No** hay poliza colectiva Zonix en piloto. En acuerdo con delivery company: cada agente es responsable de su vehiculo; el comercio empaqueta bien. Para escala futura: evaluar seguro de RC o acuerdo con empresa de delivery (asesoria legal) |
| **Asociacion de hecho** | Evitar instrucciones que parezcan relacion laboral con Zonix; las reglas van al **convenio con la empresa de delivery**, no a "empleados Zonix" |

### 7.3 Plan de soporte al comprador (buyer)

> Si el primer pedido sale mal y no hay respuesta, el boca a boca negativo en barrio mata el producto. Ver [PROPUESTA_VALOR_COMPRADOR.md](PROPUESTA_VALOR_COMPRADOR.md) seccion 6.

#### Canales de soporte

| Canal | Disponibilidad | Tiempo de respuesta target | Quien atiende |
|-------|---------------|---------------------------|---------------|
| **Chat en app** (dentro del pedido) | 24/7 (el comercio responde en su horario) | < 15 min en horario comercial | Comercio (temas del pedido) |
| **WhatsApp soporte Zonix** | Lun-Sab 8:00-20:00 | < 30 min | Ops / founder |
| **FAQ en app** (autoservicio) | 24/7 | Instantaneo | Automatico |

#### Matriz de escalacion

| Problema | Nivel 1 (comercio) | Nivel 2 (Zonix ops) | Nivel 3 (CTO) |
|----------|-------------------|---------------------|---------------|
| Pedido no llega | Contactar rider | Si no responde en 15 min: ops interviene | — |
| Pedido incorrecto | Comercio corrige/compensa | Mediacion si no hay acuerdo | — |
| Pago no validado en >30 min | Recordatorio automatico al comercio | Validacion manual por ops | — |
| Bug en la app | — | Documenta y escala | Fix prioritario |
| Fraude / acoso | — | Sistema de disputas | — |

#### Garantia de primer pedido

> "Si tu primer pedido tiene un problema grave (no llega, llega incorrecto), te devolvemos el costo del delivery."

Costo estimado: ~$0.20/buyer nuevo (tasa de problemas ~10 % x $2 delivery). Presupuesto incluido en incentivos buyer.

#### Horario operativo del piloto

| Dia | Soporte Zonix | Comercios (tipico) |
|-----|--------------|-------------------|
| Lunes-Viernes | 8:00-20:00 | 7:00-21:00 |
| Sabado | 8:00-20:00 | 7:00-21:00 |
| Domingo | **Cerrado** (o emergencias WhatsApp) | Variable |

---

## 8. Backlog de desarrollo (próximos 2 sprints — orientativo)

Orden sujeto al **diagnóstico**; cruza con implementación real en Cursor.

| Item | Esfuerzo (días, orden magnitud) | Impacto operación | Bloqueante | Justificación negocio |
|------|--------------------------------|-------------------|------------|------------------------|
| Observabilidad + alertas mínimas | 3–7 | Alto | Casi | Sin visibilidad no hay mejora ni confianza |
| Facturación SENIAT / emisión B2B | 5–15+ | Alto | Legal | Cumplimiento 2026 |
| Módulo tarifa delivery (MVP backend) | 5–10 | Alto | Operativo si no hay acuerdo manual | Reduce disputas de envío |
| Flujo membresía + factura | 3–10 | Medio–alto | Monetización B2B | Ingresos recurrentes documentados |
| Panel admin MVP (órdenes, usuarios críticos) | 5–10 | Medio | No si el piloto es minúsculo | Desbloquea soporte sin SQL |
| Onboarding comercios (checklist + estados) | 3–7 | Medio | No | Escala captación |
| Pagos VE según plan (fases) | variable | Medio | No | Mejor cobertura local |

**Referencias técnicas obligatorias antes de codificar:**

- [PLAN_MODULO_TARIFA_DELIVERY.md](PLAN_MODULO_TARIFA_DELIVERY.md)
- [PLAN_METODOS_PAGO_VENEZUELA.md](PLAN_METODOS_PAGO_VENEZUELA.md)

---

## 9. Equipo mínimo (humanos, primera etapa)

| Rol | Personas (mín.) | Responsabilidades | Costo mensual |
|-----|-----------------|-------------------|---------------|
| **Ops / soporte** | 1 part-time o compartido | Canal único, disputas primer nivel, coordinación comercios | [PENDIENTE] |
| **Captación comercios** | 1 (puede ser founder) | Pipeline, onboarding, acuerdos | [PENDIENTE] |
| **Coordinación delivery** | 0–1 según volumen | Punto de contacto con empresa de delivery | [PENDIENTE] |
| **Tech** | 1 | Deploys, bugs P0, datos | [PENDIENTE] |
| **Captador comercial** | 1 (puede ser ops o founder) | 15–20 visitas/semana, pitch, onboarding, seguimiento post-trial. KPIs: registros/semana, conversión trial→pago | Incluido en ops o ~$80/mes extra (transporte+material). Script en [PROPUESTA_VALOR_COMERCIO.md](PROPUESTA_VALOR_COMERCIO.md) |

### 9.1 Contingencia si el founder tech no esta disponible (1-2 semanas)

| Medida | Accion |
|--------|--------|
| **Acceso** | Segundo admin (ops o co-founder) con acceso a hosting (Forge/VPS), Sentry, repositorio como colaborador, y contacto de dominio/DNS |
| **Deploys** | Congelar features; solo hotfixes acordados por escrito; usar rama `production` protegida |
| **Secretos** | Archivo `.env` y claves en gestor compartido cifrado (Bitwarden, 1Password familia, o sobre cerrado fisico) — **no** solo en la laptop del founder |
| **Proveedor externo** | Tener 1 contacto freelance Laravel/Flutter por si hace falta hora consultoria ($25-50/h) |
| **Comunicacion** | Mensaje automatico en WhatsApp soporte: "Soporte tecnico con demora X dias" si aplica |

---

## 10. Supuestos explícitos (validar)

1. El piloto será **geográficamente acotado** hasta cumplir criterios de salida.
2. Los comercios **validan comprobantes** en horario declarado; si no, el KPI “tiempo a validar” falla por ops, no por app.
3. La **membresía** y montos se confirman con finance antes de comunicar a comercios.
4. **OFAC / métodos internacionales** se usan solo de forma compatible con políticas de Creesca y del comercio.
5. Los números de “éxito 30/60/90” en la tabla siguiente se reemplazan por acuerdo del equipo cuando existan métricas reales.

---

## 11. Datos pendientes de negocio (brief Creesca + 12 campos)

**Instrucción:** reemplazar `[PENDIENTE]` y filas vacías; esto desbloquea targets de marketing y presupuesto.

### Contexto general

| Campo | Valor |
|-------|-------|
| Empresa | Creesca |
| Producto / marca | Zonix Eats |
| Rol de quien completa | [PENDIENTE] |
| País / ciudad principal operación | **Venezuela — Valencia, Estado Carabobo** |
| App en producción (sí/no) | Sí (verificar tiendas) |
| URL web / tiendas Android / iOS | [PENDIENTE] |

### Los 12 campos del prompt operativo

| # | Campo | Valor |
|---|-------|-------|
| 1 | Zona de lanzamiento piloto | **Valencia, Carabobo** — **Urb. Popular El Socorro** + corredor inmediato: Bella Florida, Los Chorritos, Las Parcelas, San Martín, Llano Verde, etc. |
| 2 | Tamaño estimado de la zona | Polígono por barrios nombrados (refinar con mapa y acuerdos de reparto); [opcional: radio aprox. km una vez medido] |
| 3 | Empresa(s) de delivery confirmadas | [PENDIENTE] |
| 4 | Restaurantes confirmados para piloto | [PENDIENTE] |
| 5 | Competencia directa en esa zona | **Referencia:** Yummy, PedidosYa y delivery informal (WhatsApp/Instagram); **validar cobertura y tiempos reales en El Socorro y barrios colindantes** (no asumir misma experiencia que en el centro de Valencia). |
| 6 | Tarifa plana commerce | **$25 USD/mes** recomendado (rango $15–40). Trial: 30 días o 20 pedidos gratis. Tarifa fundador: $15/mes (3 meses post-trial). Ver [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md). |
| 7 | Tarifa plana empresa delivery | **$30 USD/mes** (base). Ver [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md). |
| 8 | Facturación B2B (Zonix → clientes) | [PENDIENTE — crítico SENIAT] |
| 9 | Métodos de pago activos MVP | [PENDIENTE] |
| 10 | Presupuesto de lanzamiento | [PENDIENTE] |
| 11 | Equipo tech actual | [PENDIENTE] |
| 12 | Hosting | [PENDIENTE] |

### Modelo y mercado (brief largo)

| Campo | Valor |
|-------|-------|
| Qué vende Zonix (marketplace, etc.) | Marketplace comida rápida; SaaS por membresía a comercio y empresa delivery |
| Quién paga comisión | Ninguno sobre ventas; ingreso = membresía fija B2B |
| Ticket promedio objetivo / margen | [PENDIENTE — lado comercio, no Zonix sobre GMV] |
| Persona comprador | [PENDIENTE — perfilar para residentes de El Socorro y barrios colindantes: hábitos, medios de pago, objeciones] |
| Competidores locales y diferenciador | Ver tabla en PROMPT_OPERATIVO_LANZAMIENTO; completar nombres y presencia **en la zona piloto (Socorro y alrededores)** |
| Flujo crítico end-to-end | Ya documentado: pending_payment → comprobante → validación → delivery → QR → entregado |
| Soporte in-app | Chat buyer–commerce, disputas (según producto) |
| Qué está terminado vs MVP | Ver checklist sección 5 |

### Lanzamiento y riesgos

| Campo | Valor |
|-------|-------|
| Fecha objetivo o ventana | [PENDIENTE] |
| Presupuesto mensual marketing/ads | [PENDIENTE] |
| Canales preferidos | [PENDIENTE] |
| Éxito a 30 / 60 / 90 días (números) | [PENDIENTE] |
| Top 3 miedos | [PENDIENTE] |
| Incidentes ya ocurridos | [PENDIENTE] |

### Entregables opcionales del equipo

| Entregable | Notas |
|------------|-------|
| Métricas actuales (pedidos/día, etc.) | [PENDIENTE] |
| Capturas / pantallas clave | [PENDIENTE] |

---

## 12. Definition of Done del piloto — criterios medibles

> **Proposito:** responder "que tiene que pasar para decir que el piloto fue exitoso" con numeros concretos.

### 12.1 Exito del piloto (6 meses)

El piloto se considera **exitoso** si al mes 6 se cumplen **al menos 4 de 6** criterios:

| # | Criterio | Metrica | Target minimo |
|---|---------|---------|---------------|
| 1 | Comercios pagando membresia | Comercios activos con pago al dia | >= 5 |
| 2 | Retencion de comercios | Churn mensual promedio (mes 4-6) | < 20 % |
| 3 | Volumen de pedidos | Pedidos completados por semana (promedio mes 5-6) | >= 15 |
| 4 | Tasa de completacion | Pedidos entregados/retirados / creados | > 50 % |
| 5 | Validacion de pago funcional | Comprobantes validados en < 30 min (p90) | > 60 % |
| 6 | Demanda comprador | Buyers con 2+ pedidos en 30 dias | >= 10 |

### 12.2 Fracaso del piloto (triggers de decision)

El piloto se considera **fallido o en riesgo critico** si:

| Senal | Plazo | Accion inmediata |
|-------|-------|-----------------|
| 0 comercios aceptan trial tras 30+ visitas | Mes 2-3 | Replantear zona o propuesta de valor |
| < 5 pedidos completados en toda la zona en 1 mes | Mes 3-4 | Pivotar 100 % a demanda buyer o suspender |
| 100 % de comercios en trial cancelan al vencer | Mes 4-5 | No hay product-market fit; reunion de decision |
| $0 MRR en mes 6 | Mes 6 | **Decision formal: pivotar, cambiar zona, o cerrar** |

Ver escenario completo de fracaso y plan de salida en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) seccion 5.1.

### 12.3 Exito parcial (para pivotar, no cerrar)

Si al mes 6 se cumplen **2-3 de 6** criterios:
- **Diagnosticar:** cual es el cuello de botella (demanda buyer, operacion comercio, delivery, producto).
- **Pivotar:** ajustar 1 variable (zona, precio, modelo, target) y repetir 3 meses.
- **Comunicar al inversionista:** datos reales + plan ajustado + capital restante + pedido (mas tiempo o mas capital).

---

## 13. Criterio de "documento listo"

Este plan esta **listo para ejecutar** cuando: (1) el diagnostico tiene **prioridad #1** escrita; (2) no quedan mas de **~15 campos [PENDIENTE]** criticos sin dueno; (3) comercios piloto y delivery tienen nombres o fechas de compromiso.
