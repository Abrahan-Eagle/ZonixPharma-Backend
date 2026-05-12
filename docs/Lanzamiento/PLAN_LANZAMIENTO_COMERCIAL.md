# Plan de lanzamiento comercial

> **Última actualización:** 11 mayo 2026.
> Documento que detalla el calendario operativo desde el cierre de inversión hasta el Day-D del piloto y los primeros 90 días post-lanzamiento.
> El calendario es **relativo a T+0 = cierre de inversión**, ya que la fecha absoluta depende de cuándo entre el dinero.

## 1. T+0 — Cierre de inversión

**Eventos:**
- Firma del SAFE.
- Transferencia **USD 101.000** (Base) a cuenta personal del founder (transitoria) o cuenta empresa si ya está abierta.
- Reunión kick-off **founder + Co-CEO** con abogado y contador.
- Comunicación al inversor: confirmación de recepción + plan de los próximos 30 días.

**Entregables día T+0:**
- Comunicado interno con plan T+0 a T+90.
- Lista de tareas legales priorizada.

## 2. T+30 — Constitución y equipo armado

### 2.1 Hitos legales (T+0 a T+30)

| Hito | Status |
|---|---|
| Solicitud denominación Registro Mercantil | T+0 a T+5 |
| Acta constitutiva + estatutos | T+5 a T+12 |
| Inscripción Registro Mercantil | T+12 a T+22 |
| RIF empresa SENIAT | T+22 a T+24 |
| Apertura cuenta bancaria empresa | T+24 a T+29 |
| Inicio trámite SAPI (marca Zonix Pharma) | T+5 |
| Sello digital + factura digital SENIAT | T+25 a T+30 |

### 2.2 Hitos de equipo (T+0 a T+30)

| Hito | Status |
|---|---|
| Publicación de vacantes (**Co-CEO / CEO operativo**, **4× Sales B2B**, Customer Support, Marketing Lead, Delivery Ops) | T+0 a T+5 |
| Entrevistas y selección | T+5 a T+20 |
| Contratación + onboarding | T+20 a T+28 |
| Capacitación inicial (producto + procesos) | T+28 a T+30 |

### 2.3 Hitos de inmueble (T+0 a T+30)

| Hito | Status |
|---|---|
| Visitas a 3-5 oficinas / coworkings en Bella Florida y San Diego | T+0 a T+5 |
| Selección + cotización formal | T+5 a T+10 |
| Firma contrato + depósito (**Base:** alquiler **HQ tipo casa USD 500/mes** — sustituye coworking/oficina del escenario Lean; [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3 / §6.1) | T+10 a T+15 |
| Adecuación (pintura, instalación) | T+15 a T+25 |
| Equipamiento (escritorios, sillas, internet) | T+25 a T+30 |

### 2.4 Hitos de tecnología (T+0 a T+30)

| Hito | Status |
|---|---|
| Despliegue producción (DigitalOcean + dominio + SSL + email corp) | T+0 a T+7 |
| OTP registro paciente vía **WhatsApp** (proveedor tipo **YCloud** u homologado) + DPIA/contrato subencargado | T+7 a T+10 |
| Habilitar Pusher + FCM en producción | T+10 a T+15 |
| Setup factura digital SENIAT en producción | T+25 a T+30 |
| Tests de producción end-to-end | T+25 a T+30 |

### 2.5 Hitos comerciales (T+0 a T+30)

| Hito | Status |
|---|---|
| Visita a 15-25 farmacias prospecto en Bella Florida + El Socorro | T+5 a T+25 |
| Lista corta de 8-12 farmacias para piloto | T+20 |
| 5-8 cartas de intención firmadas (no contrato definitivo) | T+25 a T+30 |
| Material comercial impreso (brochures, tarjetas) | T+10 a T+20 |

**Hito de cierre T+30:**
- Empresa constituida.
- Equipo armado.
- Oficina lista.
- 5-8 farmacias firmaron carta de intención.

## 3. T+60 — Onboarding farmacias y catálogo

### 3.1 Hitos comerciales (T+30 a T+60)

| Hito | Status |
|---|---|
| Onboarding técnico de las 5-8 farmacias firmadas | T+30 a T+45 |
| Carga de catálogo de cada farmacia | T+30 a T+50 |
| Capacitación al farmacéutico colegiado de cada farmacia | T+35 a T+50 |
| Capacitación al personal de mostrador | T+45 a T+55 |
| Test operativo interno (órdenes de prueba) | T+50 a T+58 |

### 3.2 Hitos de delivery (T+30 a T+60)

**Modelo:** última milla ejecutada por **empresa(s) especializada(s)** vía **concesión o contrato marco**; Zonix **no** opera flota propia. Los hitos siguientes cubren **partner** +, si aplica, **complemento** `delivery` autónomo en app.

| Hito | Status |
|---|---|
| Negociación **borrador contrato marco / concesión** con **1 empresa** candidata (SLA, zonas, tarifas, datos, seguros) | T+30 a T+45 |
| Firma **carta de intención** o contrato marco (según abogado) con empresa concesionaria | T+40 a T+50 |
| Onboarding **agentes** del partner en app (`delivery_company` / `delivery_agent`) | T+45 a T+58 |
| Onboarding **5-8 repartidores autónomos** (`delivery`) **solo si** se acuerda complemento operativo al partner | T+45 a T+58 |
| KYC de cada repartidor / agente según rol | T+30 a T+55 |
| Test entrega real con órdenes internas | T+55 a T+60 |
| Definición de zona inicial de cobertura por **polos acotados** (Bella Florida + corredor vía Tocuyito hacia El Socorro); radios operativos por polo según **mapa real**, no un único círculo fijo | T+30 |

### 3.3 Hitos de marketing (T+30 a T+60)

**Orden de prioridad (coherente con [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §2.3 y [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md)):** **Meta Ads** (Instagram/Facebook) es el **canal principal** de awareness y captación; la **valla** es **refuerzo offline** y activación coordinada hacia el Day-D.

| Hito | Status |
|---|---|
| **Meta Business**: cuenta, píxel/app events, públicos geo Carabobo/Valencia, línea creativa aprobada (marca [BRAND_ZONIX_PHARMA.md](../BRAND_ZONIX_PHARMA.md)) | T+30 a T+45 |
| **Campañas Meta Ads** en entorno de prueba + presupuesto según tramo año 1 (**USD 800/mes** equivalente en ventana operativa inicial) | T+40 a T+55 |
| Estrategia digital geo-targeted Bella Florida + El Socorro (B2C + apoyo B2B según campaña) | T+30 a T+45 |
| Material de pre-lanzamiento (post Instagram, video TikTok, assets pagados) | T+50 a T+60 |
| Diseño + producción **valla** 3m×2m (refuerzo; instalación suele activarse hacia **Day-D** / mes calendario ~3 según contrato) | T+30 a T+50 |
| Contrato con proveedor de valla + ubicación av. Bolívar Norte | T+30 a T+50 |
| Google Ads u otros canales solo si complementan remarketing / search local acordado | T+45 a T+60 |

**Hito de cierre T+60:**
- 5-8 farmacias con catálogo cargado y operativas.
- 5-8 repartidores con KYC aprobado.
- **Meta Ads** operativo para pre-lanzamiento; valla en instalación o lista para activar en **Day-D**.

## 4. T+90 — DAY-D del piloto

### 4.1 Pre-lanzamiento (T+60 a T+85)

| Hito | Status |
|---|---|
| Soft launch interno con familiares y amigos del equipo | T+60 a T+70 |
| Bug fixing rápido | T+60 a T+85 |
| Primer batch de marketing digital (50% del presupuesto del mes) | T+70 a T+85 |
| Campaña WhatsApp invitación a familiares + comunidades locales | T+75 a T+85 |
| Notificación al inversor: countdown de 1 semana al Day-D | T+83 |

### 4.2 Day-D (T+90)

| Hora | Acción |
|---|---|
| 06:00 | Equipo en oficina. Verificación final de servicios. |
| 07:00 | **Boost Meta Ads** (canal principal) + **activación valla** (refuerzo offline, si contrato lo calendariza en Day-D) |
| 08:00 | App pública en Play Store y App Store. Primera orden simulada por equipo interno. |
| 09:00 | Comunicación oficial: Instagram, TikTok, Twitter, WhatsApp. |
| 11:00 | Visita presencial a las 5-8 farmacias para confirmación operativa. |
| 12:00 | Primera orden real esperada. |
| 18:00 | Reunión equipo: balance del día. |
| 22:00 | Cierre del día. Reporte al inversor: # órdenes, # incidentes, # tickets. |

### 4.3 Días T+91 a T+100 — Estabilización

- Customer Support 24/7 los primeros 10 días (turnos del founder + Customer Support + **equipo Sales B2B (4)** en standby).
- Bug fixing prioritario.
- Iteración rápida basada en feedback de paciente y farmacia.

## 5. Definition of Done del piloto (T+180 = mes 6)

Criterios para considerar el piloto exitoso:

| Criterio | Meta mes 6 |
|---|---|
| Farmacias activas | ≥ 38 |
| Pedidos completados | ≥ 1.500 |
| Tiempo promedio entrega | ≤ 90 min |
| Validación Rx promedio | ≤ 60 min |
| NPS B2C | ≥ 35 |
| NPS B2B | ≥ 50 |
| Tasa cancelación de orden | ≤ 8% |
| Tasa de comprobante falso | ≤ 0,5% |
| Revenue mensual | ≥ USD 1.500 |
| Cash en banco | ≥ **~USD 49.700** (alineado a proyección Base **USD 101k** + **Co-CEO** + **4×** Sales — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3: cash final mes **6 ~USD 49.748**) |

**Si NO se alcanzan estos criterios:** activar plan de contingencia documentado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 4.

## 6. Plan de expansión post-piloto (T+180 a T+360)

### 6.1 Mes 7-9: Naguanagua + San Diego

- Onboarding 20-30 farmacias adicionales.
- Sin cambio en equipo ni inmueble.
- Marketing digital extendido.
- Meta: 78 farmacias activas en mes 9.

### 6.2 Mes 10-12: Resto Valencia metro

- Onboarding 30-40 farmacias adicionales.
- **Ampliación logística:** segundo **partner** concesionario o más **agentes** bajo el contrato marco existente (orden de magnitud **5-8 agentes** adicionales si aplica).
- Meta: 120 farmacias activas en mes 12.

### 6.3 Año 2: Maracay (mes 13-14) + Maracaibo (mes 18)

- Sales B2B viaja a las ciudades para onboarding inicial.
- Customer Support sigue centralizado en Valencia.
- Marketing digital geo-targeted independiente para cada ciudad.
- Meta: 220 farmacias activas en mes 24.

## 7. Indicadores de seguimiento semanal

Reporte interno (no al inversor):

- Farmacias firmadas / canceladas / activas.
- Pedidos / GMV / Revenue.
- Tickets soporte abiertos / cerrados / SLA.
- Bugs reportados / resueltos.
- Cash en banco.
- Burn de la semana.

## 8. Indicadores de reporte al inversor

### 8.1 Semanal (mes 1-3)

- 1 párrafo + 5-7 bullets en email.
- Cash + revenue + farmacias + pedidos.

### 8.2 Mensual (mes 4-6)

- Reporte 1 página con narrativa + tabla.
- Plan próximos 30 días.
- Solicitud aprobación si desvío > 15%.

### 8.3 Trimestral (mes 7+)

- Reporte 2-3 páginas con narrativa + tablas + KPIs unitarios.
- Reunión de 30-45 min con inversor.
- Plan próximos 90 días.

## 9. Entregables al final del piloto (T+180)

Documento al inversor:

1. **Reporte de cierre piloto:** narrativa + KPIs vs. plan + lessons learned.
2. **Métricas unitarias actualizadas:** ARPF real, CAC real, churn real, LTV real, payback real.
3. **Plan año 2:** expansión geográfica + objetivos.
4. **Solicitud (si aplica):** Serie A / bridge round / extensión de runway.

## 10. Documentos hermanos

- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): proyección mes a mes.
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md): cómo se gasta el burn.
- [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md): cómo opera el flujo Rx.
- [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md): qué se le pitchea a la farmacia.
- [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md): valla y radio.
- [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md): qué se reporta al inversor.
