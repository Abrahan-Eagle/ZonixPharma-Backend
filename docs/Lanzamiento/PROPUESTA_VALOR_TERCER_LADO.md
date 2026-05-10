# Propuesta de valor — Tercer lado (Delivery, Delivery Company, Pharmacist colegiado)

> **Última actualización:** 10 mayo 2026.
> Documento que captura el pitch a los tres roles que sostienen la operación: repartidor autónomo (`delivery`), empresa de delivery (`delivery_company` + sus `delivery_agent`), y farmacéutico colegiado (`pharmacist`).
> Cada uno tiene flujo distinto. Esta propuesta los cubre por separado.

---

## A. Repartidor autónomo (`delivery`)

### A.1 Quién es

- Persona con moto o carro propio.
- Trabaja por turnos cuando quiere.
- Hoy probablemente trabaja en Yummy, Pedidosya, Rappi o repartidor independiente.
- Quiere ingresos extra.

### A.2 Dolor que tiene hoy

1. **Comisión alta de plataformas:** Pedidosya / Rappi cobran 15-25% del fee de entrega.
2. **Competencia alta entre repartidores:** muchos repartidores en zona, picos de espera.
3. **Sin visibilidad de la ganancia esperada:** no sabe cuánto va a hacer en el día.
4. **Pagos demorados:** semanal o mensual, no diario.

### A.3 Lo que Zonix le ofrece

- **Comisión Zonix: 0% sobre fee de entrega** (política repartidor autónomo en piloto). El repartidor cobra el delivery fee completo. **Monetización Zonix vs farmacia:** cuota plataforma **fija + % sobre GMV** del pedido ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5), no sobre el delivery fee del repartidor.
- **Pago diario** vía Pago Móvil C2P o Binance Pay USDT.
- **Estimación de ganancia visible** antes de aceptar la orden.
- **Asignación geo-inteligente:** la app le asigna órdenes cerca de su ubicación actual.
- **Bono por entrega excelente:** USD 0,50 extra si NPS > 4 estrellas.
- **Sin contrato exclusivo:** puede seguir trabajando en otras plataformas.

### A.4 Pricing al repartidor autónomo

- **Delivery fee:** USD 1,50 - USD 3,50 según distancia (lo paga el paciente, lo recibe el repartidor).
- **Sin cuota de inscripción.**
- **KYC obligatorio:** cédula + foto + selfie + RIF (si lo tiene). Validado en 24-48h.
- **Comisión Zonix:** 0% sobre delivery fee. Solo cobra fee fijo de USD 0,30 por orden completada (cubrir costo de procesamiento + push notifications + storage).

### A.5 Cuántos hay y cuántos necesitamos

- **Piloto T+30 / T+50:** **5–8** repartidores autónomos onboarded ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §3.2).
- **Cierre año 1 zona piloto:** **10–15** repartidores autónomos **activos** (stock estable post Day-D).
- **Año 1 Valencia metro:** 25-35.
- **Año 2 Carabobo + Aragua:** 60-80.

### A.6 Onboarding

| Paso | Acción |
|---|---|
| 1 | Descarga app `Zonix Pharma Delivery` (versión específica) o usa la app principal con rol `delivery`. |
| 2 | Registra cuenta + KYC. |
| 3 | Validación KYC en 24-48h. |
| 4 | Test operativo: primera orden de prueba con Customer Support. |
| 5 | Activación cuenta. Empieza a recibir asignaciones. |

---

## B. Empresa de delivery (`delivery_company` + sus `delivery_agent`)

### B.1 Quién es

- Empresa local que tiene flota propia de repartidores con contrato.
- Hoy trabaja para Farmatodo, Locatel, supermercados, restaurantes.
- Quiere agregar Zonix Pharma a su portafolio de clientes B2B.

### B.2 Dolor que tiene hoy

1. **Diversificación de clientes:** depende de 1-2 clientes grandes; si pierden uno, pierden 30-50% de revenue.
2. **Volumen estacional:** picos en feriados, valles en semana.
3. **Coordinación manual:** llamadas, WhatsApp, sin trazabilidad.

### B.3 Lo que Zonix le ofrece

- **Cliente B2B nuevo:** órdenes constantes desde mes 4 del piloto.
- **Coordinación automática:** la app asigna a sus repartidores via API.
- **Pagos consolidados semanales** a la empresa (no a cada repartidor individualmente).
- **Métricas de desempeño:** dashboard con NPS, tiempo promedio, órdenes completadas.
- **Sin exclusividad:** la empresa sigue trabajando para otros.

### B.4 Pricing a la empresa

- **Membresía empresa:** USD 0 (gratis durante el piloto; después USD 50/mes para empresas con > 10 agentes activos) **— post-piloto, no incluido en proyecciones financieras año 1** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)).
- **Delivery fee:** USD 1,50 - USD 3,50 por orden (cobrada al paciente, transferida a la empresa).
- **Comisión Zonix:** 8% del delivery fee (cubrir asignación, tracking, dispute resolution).
- **Pago semanal** a la empresa vía transferencia bancaria.

### B.5 Targets año 1

- **Mes 1-3:** 0 empresas (solo repartidores autónomos).
- **Mes 4-6:** 1 empresa con 5-8 agentes.
- **Mes 7-12:** 2-3 empresas con 15-25 agentes totales.

### B.6 Onboarding

| Paso | Acción |
|---|---|
| 1 | Reunión comercial con dueño de la empresa. |
| 2 | Demo dashboard de empresa. |
| 3 | Firma carta de intención. |
| 4 | KYC empresa: RIF, registro mercantil, lista de agentes. |
| 5 | Onboarding de cada agente individualmente (KYC personal). |
| 6 | Test operativo durante 1 semana. |
| 7 | Activación. |

### B.7 SLA con terceros y cadena de frío (logística)

- **SLA de entrega** negociado por escrito en anexo B2B: tiempo objetivo alineado con lo que promete la app al paciente (p. ej. 60-90 min en zona piloto), con **exclusiones** (lluvia, cortes de luz, seguridad).
- **Responsabilidad en cadena de frío:** la **farmacia** empaqueta y documenta salida; el **repartidor / empresa** mantiene cadena según checklist (fotos termómetro en app); Zonix **media** disputas según [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §16.
- **Seguro y daños:** cada empresa de delivery declara cobertura civil básica o asume riesgo contractual; Zonix no es asegurador.

---

## C. Farmacéutico colegiado (`pharmacist`)

### C.1 Quién es

- Profesional colegiado en MPPS (Ministerio del Poder Popular para la Salud).
- Trabaja en una farmacia afiliada a Zonix.
- Es el responsable legal de validar recetas en su farmacia.
- Pueden ser dueño-fundador de la farmacia o empleado contratado por la farmacia.

### C.2 Dolor que tiene hoy

1. **Validación de receta es manual y sin trazabilidad:** si después hay problema, no hay registro digital.
2. **Sin diferenciación profesional:** su rol está oculto detrás del mostrador.
3. **Carga operativa alta:** valida + dispensa + atiende + concilia inventario.

### C.3 Lo que Zonix le ofrece

- **Validación digital con trazabilidad completa:** cada receta queda registrada con su firma digital, fecha, hora.
- **Auditoría ante MPPS lista en 1 click:** exporta historial de validaciones cuando se lo pidan.
- **Reconocimiento profesional:** su nombre aparece en el ticket del paciente como "validado por Lic. X, MPPS XXXXX".
- **Carga operativa baja:** solo valida o rechaza, no procesa el resto del flujo.
- **Sin costo extra:** el rol pharmacist viene incluido en el **servicio de plataforma** contratado por la farmacia (mismo tier B2B).
- **Onboarding sin compromiso individual:** el contrato lo tiene la farmacia, no el farmacéutico personal.

### C.4 Pricing al farmacéutico

- **Costo:** USD 0 (incluido en el contrato de plataforma Basic / Pro / Enterprise de la farmacia).
- **No es empleado de Zonix.** Sigue siendo empleado o dueño de la farmacia.

### C.5 Onboarding del pharmacist

| Paso | Acción |
|---|---|
| 1 | La farmacia añade al farmacéutico colegiado a su cuenta vía dashboard. |
| 2 | KYC del pharmacist: cédula, foto, número MPPS, registro INHRR. |
| 3 | Customer Support de Zonix verifica el número MPPS (proceso en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §7.4). |
| 4 | Capacitación: manual operativo + video tutorial 20 min. |
| 5 | Activación: empieza a recibir notificaciones de recetas pendientes. |

### C.6 Compromiso operativo

- **SLA validación Rx:** < 60 minutos en horario operativo (8:00-20:00).
- **Si excede 60 min:** la receta queda en pending y el paciente recibe push de "validación demorada".
- **Si excede 120 min:** la orden se cancela automáticamente y el paciente recibe reembolso.
- **Sustancias controladas:** validación obligatoria + retención de receta física en sucursal (pickup).

Detalle del flujo completo en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md).

---

## D. Riesgos del tercer lado y mitigaciones

| Riesgo | Probabilidad | Mitigación |
|---|---|---|
| Repartidores autónomos prefieren Yummy / Rappi por volumen | Media-alta | Bono USD 0,50 por NPS > 4. Pago diario. Cero comisión Zonix sobre delivery fee. |
| Empresa de delivery no quiere bajar exclusividad con Farmatodo | Baja | Buscar empresa #2 o #3 del mercado, no la #1. |
| Farmacéutico colegiado se rehúsa a validar digital | Baja-media | Capacitación + manual + apoyo de Customer Support. La farmacia decide si lo capacita o cambia. |
| MPPS hace observación sobre validación digital | Baja | Asesor regulatorio externo USD 120/mes (Growth). Trazabilidad + firma digital deberían cumplir. |
| Repartidor entrega medicamento equivocado | Media | Foto al recibir + foto al entregar. Mediación Customer Support. Reembolso a paciente, descuento al repartidor. |

---

## E. Documentos hermanos

- [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md): pitch a la farmacia.
- [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md): pitch al paciente.
- [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md): cómo opera la validación Rx en producción.
- [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md): cómo se paga al repartidor y a la empresa de delivery.
