# Propuesta de valor — Tercer lado (`delivery_company`, `delivery_agent`, Pharmacist)

> **Última actualización:** 11 junio 2026.
> Documento que captura el pitch a los actores que sostienen la operación logística y clínica: **empresa de delivery** (`delivery_company`), **repartidor de campo** (`delivery_agent`, vinculado a esa empresa) y **farmacéutico colegiado** (`pharmacist`).

**Alcance producto (app actual):** en piloto y MVP solo existen **dos roles de logística** en la plataforma: **`delivery_company`** (panel empresa: agentes, asignación, métricas) y **`delivery_agent`** (app de reparto en calle: órdenes, QR, tracking). **No** hay flujo de registro ni onboarding para rol **`delivery`** (repartidor autónomo). El repartidor en ruta es siempre un **`delivery_agent`** cuya cuenta crea la empresa (`POST /api/delivery-company/agents`). Referencias residuales a `delivery` en backend o seeders demo son **legacy** — no usarlas en pitch, checklist inversor ni materiales comerciales hasta una decisión explícita de producto.

**Última milla (decisión operativa):** **Zonix Pharma no opera flota propia.** La ejecución física se delega por **concesión o contrato marco** a **empresa(s) de delivery especializada(s)**. La plataforma orquesta asignación y tracking; el **Coordinador de Partners Logísticos** enlaza SLA e incidencias con el partner.

## Marketplace de cuatro lados (quién paga a quién)

Resumen para inversor y onboarding partner; detalle de flujos en [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md).

| Lado | Rol en app | Paga a | Recibe de | Ingreso Zonix |
|------|------------|--------|-----------|---------------|
| **Farmacia** | `commerce` | **Zonix** (cuota **45/60/70 + %GMV 8/7/5**) | Paciente (producto OTC/Rx) | Principal — [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5 |
| **Paciente** | `users` | Farmacia + **fee delivery** (a `delivery_company`) | Medicamento + tracking | Indirecto vía GMV farmacia |
| **Empresa delivery** | `delivery_company` | **Zonix** (**8% × Σ fee + USD 0,30 × envío**/mes) | Paciente (fee por orden) | Secundario — PLAN_METODOS §2.5 |
| **Farmacéutico** | `pharmacist` | — (empleado/colegiado de la farmacia) | Salario farmacia | Habilita Rx; sin fee directo a Zonix |

**Efecto de red:** más farmacias → más catálogo → más pacientes → más GMV → más ARPF farmacia y fee delivery ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §4.4 flywheel). **Liquidez arranque:** oferta B2B primero ([CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §2.10).

---

## A. Logística — empresa (`delivery_company`) y repartidor (`delivery_agent`)

### A.1 Quién es

- Empresa local **especializada en última milla**, con flota y repartidores bajo su propia operación — **candidata natural a concesión o contrato marco** con Zonix Pharma para ejecutar el reparto en zona piloto.
- Hoy suele trabajar para Farmatodo, Locatel, supermercados, restaurantes u otros B2B logísticos.
- Quiere agregar Zonix Pharma a su portafolio de clientes B2B.

### A.2 Flaquezas que tiene hoy

1. **Diversificación de clientes:** depende de 1-2 clientes grandes; si pierden uno, pierden 30-50% de revenue.
2. **Volumen estacional:** picos en feriados, valles en semana.
3. **Coordinación manual:** llamadas, WhatsApp, sin trazabilidad.

### A.3 Lo que Zonix Pharma le ofrece

- **Cliente B2B nuevo:** canal de órdenes recurrentes en zona piloto una vez firmado el **contrato marco / concesión** y completado el onboarding del partner (calendario en [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §3.2).
- **Coordinación automática:** la app asigna a sus repartidores via API.
- **Pagos consolidados** por la empresa: el paciente paga el fee **por orden** a DC; la empresa liquida a sus agentes **quincenal o mensual**; Zonix factura **mensual** `8% × Σ fee + USD 0,30 × N envíos` (§2.5 PLAN_METODOS_PAGO).
- **Métricas de desempeño:** dashboard con **NPS**, tiempo promedio, órdenes completadas.
- **Sin exclusividad:** la empresa sigue trabajando para otros.

> **¿Qué es NPS?** Siglas de *Net Promoter Score* («índice de recomendación»). Resume qué tan dispuestos están los clientes a **recomendar** el servicio. En Zonix Pharma se alimenta de la **calificación post-entrega** del paciente (p. ej. estrellas 1–5 en la app) y se agrega en el dashboard del partner. Metas de piloto: [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §6 (p. ej. NPS B2C ≥ 35). **No** es una métrica clínica ni de MPPS.

### A.4 Pricing a la empresa

- **Membresía empresa:** USD 0 (gratis durante el piloto; después USD 50/mes para empresas con > 10 agentes activos) **— post-piloto, no incluido en proyecciones financieras año 1** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)).
- **Delivery fee:** USD 1,50 - USD 3,50 por orden (cobrado al paciente **directo a la empresa** — rubro B, [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §2.1 / §2.4).
- **Liquidación interna:** la empresa paga a sus **`delivery_agent`** en ciclo **quincenal o mensual** (default piloto: **mensual**).
- **Cobro Zonix Pharma (mensual):** **`8% × Σ delivery_fee del mes + USD 0,30 × N envíos completados`** — factura a la **`delivery_company`** (§2.5 [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md)). Zonix **no** liquida sueldos de repartidores.

### A.5 Quién es el repartidor de campo (`delivery_agent`)

- Persona con moto o carro que **trabaja para la empresa partner** (no se registra sola en la app).
- Usa el mismo bundle **Zonix Pharma** (`com.zonix.pharma`) con rol **`delivery_agent`** y pantallas de reparto (`lib/features/screens/delivery/*`).
- Recibe órdenes **asignadas por su empresa** (o auto-asignación según reglas del partner en dashboard `delivery_company`).
- Su sueldo o fee por entrega lo define y paga **la empresa** en cierre **quincenal o mensual**, no Zonix Pharma ni el paciente directo al agente ([PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §2.4).

### A.6 Flaquezas que tiene hoy (repartidor de campo)

1. **Coordinación por WhatsApp / llamadas:** sin estado único del pedido ni prueba de entrega centralizada.
2. **No sabe cuánto ganará** en la ruta antes de aceptar.
3. **Rutas ineficientes:** pedidos lejos sin criterio geográfico claro.
4. **Disputas sin evidencia:** foto, QR y chat quedan fuera del sistema.

### A.7 Lo que Zonix Pharma le ofrece (repartidor `delivery_agent`)

**Idea en una frase:** la app le da al repartidor del partner las mismas herramientas que esperaría de una plataforma moderna, mientras **Zonix cobra a la farmacia** (cuota + % GMV) y **a la empresa de delivery** (`8%` del fee acumulado **+ USD 0,30 por envío** al mes — §A.4), no un modelo “app se queda con el 20 % de tu envío” tipo Rappi sobre el repartidor individual.

| Beneficio | Qué significa en la práctica |
|---|---|
| **Órdenes en la app** | Lista de pendientes, detalle, chat con farmacia/paciente, QR recogida/entrega. |
| **Ganancia estimada antes de aceptar** | Ve el **delivery fee** de esa orden (USD 1,50–3,50 según distancia) antes de decir sí. |
| **Asignación por zona** | La empresa (o reglas de la app) prioriza pedidos **cerca** de su ubicación. |
| **Tracking visible al paciente** | Menos llamadas “¿dónde está?” — el estado lo ve el paciente en su app. |
| **Evidencia en disputas** | Fotos y escaneos QR reducen “dijo / dijo” con Customer Support. |

**Quién paga qué (no mezclar con el repartidor):**

| Concepto | Quién paga | Quién cobra |
|---|---|---|
| Medicamentos (GMV) | Paciente | Farmacia → Zonix factura cuota plataforma ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5) |
| Delivery fee | Paciente | **Empresa** `delivery_company` (Zonix cobra **`8% × Σ fee + USD 0,30/envío`** al cierre mensual — §A.4 / PLAN §2.5) |
| Sueldo / fee al repartidor | **Empresa** partner | **`delivery_agent`** (política interna del partner; fuera del contrato Zonix–agente) |

### A.8 Targets año 1

- **Mes 1-3:** **1 empresa concesionaria** (contrato marco) en activación; **5–15** `delivery_agent` activos bajo esa empresa ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §3.2).
- **Mes 4-6:** consolidar SLAs + eventual **segunda** empresa o más agentes bajo el mismo marco.
- **Mes 7-12:** **2-3 empresas** o **15-25 agentes** totales bajo partners (orden de magnitud; FP&A según contratos reales).

### A.9 Onboarding

| Paso | Acción |
|---|---|
| 1 | Reunión comercial con dueño de la empresa. |
| 2 | Demo dashboard de empresa. |
| 3 | Firma carta de intención. |
| 4 | KYC empresa: RIF, registro mercantil, lista de agentes. |
| 5 | La empresa crea cada **`delivery_agent`** en app (`/api/delivery-company/agents`) + KYC personal del agente. |
| 6 | Test operativo durante 1 semana (empresa + al menos 1 agente en ruta). |
| 7 | Activación: agentes reciben asignaciones; empresa monitorea en dashboard. |

**Onboarding del agente (resumen):**

| Paso | Acción |
|---|---|
| 1 | La **empresa** le crea la cuenta con rol **`delivery_agent`** (no hay registro público autónomo). |
| 2 | El agente instala **Zonix Pharma**, inicia sesión y completa KYC si aplica. |
| 3 | Primera orden de prueba con Customer Support + empresa. |
| 4 | Operación en vivo: aceptar, QR pickup/entrega, tracking. |

### A.10 SLA con terceros y cadena de frío (logística)

- **SLA de entrega** negociado por escrito en anexo B2B: tiempo objetivo alineado con lo que promete la app al paciente (p. ej. 60-90 min en zona piloto), con **exclusiones** (lluvia, cortes de luz, seguridad).
- **Responsabilidad en cadena de frío:** la **farmacia** empaqueta y documenta salida; el **repartidor / empresa** mantiene cadena según checklist (fotos termómetro en app); **Zonix Pharma** **media** disputas según [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §16.
- **Seguro y daños:** cada empresa de delivery declara cobertura civil básica o asume riesgo contractual; **Zonix Pharma** no es asegurador.

### A.11 Alianza asimétrica con el partner (lente Steve Blank M7)

El partner #1 es **socio clave del día 0, no de la escala** — gestionar la asimetría explícitamente:

| Riesgo de alianza | Señal | Mitigación contractual / operativa |
|-------------------|-------|-------------------------------------|
| **Dependencia de 1 partner** año 1 | Partner concentra >90% entregas | Pipeline **partner #2** activo desde T+60 (REGISTRO P1-10); pickup como fallback |
| **Prioridad de capacidad** (partner atiende primero a clientes grandes, p. ej. cadenas) | SLA degradado en picos | Mínimos de agentes/cobertura por franja en contrato marco `[PENDIENTE abogado]` |
| **Poder de negociación creciente** (tarifa post-piloto) | Renegociación de fee al crecer GMV | Tarifario con bandas + cláusula de revisión anual, no mensual |
| **Salida del partner** | Preaviso corto / abandono | Preaviso mínimo + plan de transición (pickup + partner #2) en contrato |

**Qué cede Zonix vs qué exige:** cede no-exclusividad (el partner sigue con otros clientes — A.3); exige **mínimos de cobertura/SLA en zona piloto** y datos de tracking en app. Documentar ambos lados en el contrato marco — la asimetría sin mínimos escritos favorece siempre al partner.

---

## C. Farmacéutico colegiado (`pharmacist`)

### C.1 Quién es

- Profesional colegiado en MPPS (Ministerio del Poder Popular para la Salud).
- Trabaja en una farmacia afiliada a **Zonix Pharma**.
- Es el responsable legal de validar recetas en su farmacia.
- Pueden ser dueño-fundador de la farmacia o empleado contratado por la farmacia.

### C.2 Flaquezas que tiene hoy

1. **Validación de receta es manual y sin trazabilidad:** si después hay problema, no hay registro digital.
2. **Sin diferenciación profesional:** su rol está oculto detrás del mostrador.
3. **Carga operativa alta:** valida + dispensa + atiende + concilia inventario.

### C.3 Lo que Zonix Pharma le ofrece

- **Validación digital con trazabilidad completa:** cada receta queda registrada con metadatos de validación (farmacéutico, fecha, hora). *[PENDIENTE dictamen abogado + farmacéutico asesor]*
- **Trazabilidad para auditoría:** exportación del historial de validaciones para apoyar requerimientos de autoridad o due diligence; **contenido y formato** frente a MPPS u otros organismos quedan sujetos a dictamen **farmacéutico asesor + abogado** (no se promete un formato oficial «pre-aprobado» hasta cerrarlo).
- **Reconocimiento profesional:** su nombre puede aparecer en el ticket del paciente como "validado por Lic. X, MPPS XXXXX" *[PENDIENTE copy legal]*.
- **Carga operativa baja:** solo valida o rechaza, no procesa el resto del flujo.
- **Sin costo extra:** el rol pharmacist viene incluido en el **servicio de plataforma** contratado por la farmacia (mismo tier B2B).
- **Onboarding sin compromiso individual:** el contrato lo tiene la farmacia, no el farmacéutico personal.

### C.4 Pricing al farmacéutico

- **Costo:** USD 0 (incluido en el contrato de plataforma Basic / Pro / Enterprise de la farmacia).
- **No es empleado de Zonix Pharma.** Sigue siendo empleado o dueño de la farmacia.

### C.5 Onboarding del pharmacist

| Paso | Acción |
|---|---|
| 1 | La farmacia añade al farmacéutico colegiado a su cuenta vía dashboard. |
| 2 | KYC del pharmacist: cédula, foto, número MPPS, registro INHRR. |
| 3 | Customer Support de **Zonix Pharma** verifica el número MPPS (proceso en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §7.4). |
| 4 | Capacitación: manual operativo + video tutorial 20 min. |
| 5 | Activación: empieza a recibir notificaciones de recetas pendientes. |

### C.6 Compromiso operativo

- **SLA validación Rx:** < 60 minutos en horario operativo (8:00-20:00).
- **Si excede 60 min:** la receta queda en pending y el paciente recibe push de "validación demorada".
- **Si excede 120 min:** la orden se cancela automáticamente (orden en `pending_prescription_validation`; pago **después** de validación). *[PENDIENTE política reembolso si hubiera pago anticipado — PLAN_METODOS §4]*
- **Sustancias controladas:** validación obligatoria + retención de receta física en sucursal (pickup).

Detalle del flujo completo en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md).

---

## D. Riesgos del tercer lado y mitigaciones

| Riesgo | Probabilidad | Mitigación |
|---|---|---|
| Partner no asigna suficientes órdenes a sus `delivery_agent` | Media-alta | Contrato marco con mínimos de cobertura; Coordinador de Partners Logísticos; métricas en dashboard empresa. |
| Empresa de delivery no quiere bajar exclusividad con Farmatodo | Baja | Buscar empresa #2 o #3 del mercado, no la #1. |
| Farmacéutico colegiado se rehúsa a validar digital | Baja-media | Capacitación + manual + apoyo de Customer Support. La farmacia decide si lo capacita o cambia. |
| MPPS hace observación sobre validación digital | Baja | Asesor regulatorio externo USD 120/mes (Growth). Trazabilidad + firma digital sujetas a dictamen `[PENDIENTE farmacéutico asesor + abogado]`. |
| Repartidor entrega medicamento equivocado | Media | Foto al recibir + foto al entregar. Mediación Customer Support. Reembolso a paciente, descuento al repartidor. |

---

## E. Documentos hermanos

- [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md): pitch a la farmacia.
- [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md): pitch al paciente.
- [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md): cómo opera la validación Rx en producción.
- [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md): cobro rubro B a `delivery_company`; fórmula Zonix `8% + USD 0,30/envío` §2.5.
