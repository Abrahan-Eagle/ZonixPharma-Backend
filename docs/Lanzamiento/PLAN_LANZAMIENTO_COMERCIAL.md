# Plan de lanzamiento comercial

> **Última actualización:** 1 junio 2026.
> Documento que detalla el calendario operativo desde el cierre de inversión hasta el **Day-D** (lanzamiento público del piloto) y los primeros meses post-Day-D.
> **Convención de tiempo:** **T+0** = cierre de inversión (entra el capital). **Day-D = T+90** = **día 0 del piloto en app** (M1 del modelo financiero en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)). Los **meses 1–12** del presupuesto/proyección cuentan **desde Day-D**, no desde el wire. **Fase 0 (T+0 → T+90):** cierre legal, equipo, HQ, tecnología, onboarding de farmacias y catálogo **antes** del lanzamiento público — el gasto de esos ~3 meses está en la **Fase 0** de la proyección (**~USD 28.057** + one-shots en §0.1 — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)), no duplicado en M1.

## 1. T+0 — Cierre de inversión

**Eventos:**
- Firma del SAFE.
- Transferencia **USD 101.000** (**Lean** — mínimo viable; Base recomendado = **118k**) a cuenta personal del founder (transitoria) o cuenta empresa si ya está abierta.
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
| Sello digital SENIAT (empresa ya inscrita) | T+25 a T+30 |
| **Factura digital SENIAT** (habilitación en producción) | **Tras RIF** (T+22–T+30); puede quedar **operativa post-T+30** si el trámite se demora — no bloquea Day-D si aún no hay facturación B2B masiva |

### 2.2 Hitos de equipo (T+0 a T+30)

| Hito | Status |
|---|---|
| Publicación de vacantes (**Co-CEO / CEO operativo**, **4× Sales B2B**, Customer Support, Marketing Lead, **Coordinador de Partners Logísticos**) | T+0 a T+5 |
| Entrevistas y selección | T+5 a T+15 **(10 días)** |
| Contratación + onboarding | T+15 a T+17 **(2 días)** |
| Capacitación inicial (producto + procesos) | T+17 a T+29 **(12 días)** |

> **Rol Sales B2B (4):** no es solo prospección en calle: incluye **firma del contrato marco** con la farmacia y **capacitación práctica** para carga de catálogo, tiers y operación en panel (junto a CS/Co-CEO según playbook).

### 2.3 Hitos de inmueble (T+0 a T+30)

| Hito | Status |
|---|---|
| Visitas a **3–5 inmuebles tipo casa o local** candidatos en **San Diego** y **Av. Bolívar Norte** (Valencia) — **HQ casa/local** | T+0 a T+5 |
| Selección + cotización formal | T+5 a T+10 |
| Firma contrato + depósito (**Lean/Base/Growth:** HQ tipo casa **USD 500/mes** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2 / §6.1) | T+10 a T+15 |
| Adecuación (pintura, instalación) | T+15 a T+25 |
| Equipamiento (escritorios, sillas, internet) | T+25 a T+30 |

### 2.4 Hitos de tecnología (T+0 a T+30)

| Hito | Status |
|---|---|
| Despliegue producción (**VPS Nameshared** + dominio + SSL + email corporativo) | T+0 a T+7 |
| OTP registro paciente vía **Firebase Phone Auth** (SMS) + DPIA / registro de tratamiento | T+7 a T+12 |
| Habilitar Pusher + FCM en producción | T+10 a T+15 |
| **Factura digital SENIAT** en entorno listo para producción | **Post-RIF** (T+22 a T+35; puede activarse cuando empresa esté constituida — ver §2.1) |
| Tests de producción end-to-end | T+25 a T+30 |

### 2.5 Hitos comerciales (T+0 a T+30)

**Intensidad comercial (desde T+30 con 4 vendedores al 100%):** **4** ejecutivos × **10** visitas presenciales/día útil × ~**20** días hábiles/mes ≈ **800 visitas/mes** en **Valencia metro** (Valencia centro, San Diego, Naguanagua, El Socorro, La Viña, Prebo, Juan José Mora, etc.) — no limitado a una sola urbanización.

| Hito | Status |
|---|---|
| Rutas de prospección asignadas por zona; **≥20–30 farmacias** con interés confirmado (minutas / follow-up) | T+5 a T+30 |
| Lista corta **≥12–18** farmacias priorizadas para piloto | T+25 a T+30 |
| **10–15 cartas de intención** firmadas (objetivo realista hacia **T+45** — ver §2.6) | T+30 a T+45 *(inicio en T+30 cuando el equipo comercial está en plantilla)* |
| Material comercial impreso (brochures, tarjetas) | T+10 a T+20 |

**Hito de cierre T+30:**
- Empresa constituida (o en tramo final de inscripción + RIF según calendario legal).
- Equipo armado y en capacitación inicial cerrada.
- **HQ** listo (casa/local en San Diego o Av. Bolívar Norte).
- **Base comercial:** interés cualificado y pipeline; las **cartas de intención** masivas se concentran en **T+30 a T+45** cuando los 4 vendedores recorren a ritmo completo.

### 2.6 Hitos comerciales pre-Day-D (T+30 a T+90)

| Hito | Status |
|---|---|
| **4× Sales B2B** a ritmo completo: visitas, **contratos**, capacitación a farmacias piloto para carga de catálogo | T+30 a T+88 |
| Meta: **~35 farmacias firmadas** (contrato marco / adhesión) antes de Day-D; **~28 activas** en app con catálogo listo para orden (alineado [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) Fase 0 + inicio M1) | T+88 |
| Coordinación con **Coordinador de Partners Logísticos** + partner última milla para prueba operativa | T+60 a T+90 |

## 3. T+60 — Onboarding farmacias y catálogo

### 3.1 Hitos comerciales (T+30 a T+60)

| Hito | Status |
|---|---|
| Onboarding técnico de **farmacias piloto** (priorizar las **10–15** con carta de intención hacia T+45; escalar a **20–28** según capacidad CS + Sales) | T+30 a T+55 |
| Carga de catálogo de cada farmacia (Sales + farmacia; CS apoyo) | T+30 a T+55 |
| Capacitación al farmacéutico colegiado de cada farmacia | T+35 a T+55 |
| Capacitación al personal de mostrador | T+45 a T+58 |
| Test operativo interno (órdenes de prueba) | T+50 a T+60 |

### 3.2 Hitos de delivery (T+30 a T+60)

**Modelo:** última milla ejecutada por **empresa(s) especializada(s)** vía **concesión o contrato marco**; Zonix **no** opera flota propia. Los hitos siguientes cubren **partner** (`delivery_company`) y onboarding de **`delivery_agent`** en app (sin rol `delivery` autónomo).

| Hito | Status |
|---|---|
| Negociación **borrador contrato marco / concesión** con **1 empresa** candidata (SLA, zonas, tarifas, datos, seguros) | T+30 a T+45 |
| Firma **carta de intención** o contrato marco (según abogado) con empresa concesionaria | T+40 a T+50 |
| Onboarding **agentes** del partner en app (`delivery_company` / `delivery_agent`; meta **5–15** activos bajo la empresa — [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) §A) | T+45 a T+58 |
| ~~Rol `delivery` autónomo~~ | **Fuera de alcance piloto MVP** — no onboarding ni pitch; solo partner + `delivery_agent` ([README.md](README.md) §3) |
| KYC de cada repartidor / agente según rol | T+30 a T+55 |
| Test entrega real con órdenes internas | T+55 a T+60 |
| Definición de zona inicial de cobertura por **polos acotados** (Valencia centro, San Diego, corredores hacia Naguanagua / El Socorro); radios por polo según **mapa real** | T+30 |

### 3.3 Hitos de marketing (T+30 a T+60)

**Orden de prioridad (coherente con [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §2.3 y [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md)):** **Meta Ads** (Instagram/Facebook) es el **canal principal** de awareness y captación; la **valla** es **refuerzo offline** y activación coordinada hacia el Day-D.

| Hito | Status |
|---|---|
| **Meta Business**: cuenta, píxel/app events, públicos geo Carabobo/Valencia, línea creativa aprobada (marca [BRAND_ZONIX_PHARMA.md](../BRAND_ZONIX_PHARMA.md)) | T+30 a T+45 |
| **Campañas Meta Ads** en entorno de prueba + presupuesto según tramo año 1 (**USD 800/mes** equivalente en ventana operativa inicial) | T+40 a T+55 |
| Estrategia digital geo-targeted **Valencia metro** (B2C + apoyo B2B según campaña) | T+30 a T+45 |
| Material de pre-lanzamiento (post Instagram, video TikTok, assets pagados) | T+50 a T+60 |
| Diseño + producción **valla** 3m×2m (refuerzo; instalación suele activarse hacia **Day-D** / mes calendario ~3 según contrato) | T+30 a T+50 |
| Contrato con proveedor de valla + ubicación av. Bolívar Norte | T+30 a T+50 |
| Google Ads u otros canales solo si complementan remarketing / search local acordado | T+45 a T+60 |

**Hito de cierre T+60:**
- **≥20 farmacias** con catálogo cargado y operativas en staging / checklist (objetivo camino a **~28** al Day-D — ver §2.6 y [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)).
- Repartidores / agentes con KYC según modelo acordado con partner.
- **Meta Ads** operativo para pre-lanzamiento; valla en instalación o lista para activar en **Day-D**.

## 4. T+90 — DAY-D del piloto

### 4.0 Validación pre-Day-D (Customer Development + mom-test)

Checklist **antes** de tráfico masivo. Evidencia en VOLCADO / CRM — la IA **no inventa** entrevistas.

| Paso | Validación | Evidencia mínima |
|------|------------|------------------|
| 1. Discovery | Dueño farmacia y paciente confirman dolor **sin** pitch Zonix primero (mom-test: hechos pasados) | ≥5 entrevistas documentadas |
| 2. Validación B2B | Contrato marco firmado + métodos de pago farmacia en panel | Farmacia activa en staging/prod |
| 3. Creación demanda | Primer pedido real OTC o Rx | Orden ≥ `pending_payment` en BD |
| 4. Ops | CS, disputas, partner `delivery_company` | Macros CS + SLA partner acordado |
| **5. Pricing mom-test** | Dueño farmacia reacciona a **cuota 25/40/55 + % GMV** con **hechos pasados** (no «¿pagarías?») | **≥3** entrevistas documentadas (minuta o VOLCADO §3): comparación vs agregador/WhatsApp; reacción a ejemplo Pro **USD 40 + 0,80%** sobre GMV ilustrativo ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §3.1, §5) |
| **Go Day-D** | Founder firma checklist §4.0 + ALINEACION P0 cerrados | **No** tráfico masivo Meta/valla sin filas **1–5** |

Coherente con [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §8.1 (SPIN), [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §2.1 (WTP) y [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md).

**Guía mom-test pricing (fila 5):** preguntar qué **gastó o dejó de ganar** la farmacia con agregador/WhatsApp el último mes; mostrar **solo después** el ejemplo híbrido (Basic **25** / Pro **40** / Enterprise **55** + % GMV). **No** cambiar bandas ni % del pack sin decisión founder documentada. Si **≥2 de 3** entrevistas muestran rechazo claro al nivel Pro sobre GMV típico local, escalar a founder antes de firmar contratos masivos — no bloquea Day-D si hay señal mixta, pero **sí** obliga nota en VOLCADO y revisión ARPF placeholder ([UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §2.1).

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
| 08:00 | App pública en Play Store y App Store *(depende checklist release Fase 0: Firebase OTP, keystore, APNs, revisión tiendas — [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md))*. Primera orden simulada por equipo interno. |
| 09:00 | Comunicación oficial: Instagram, TikTok, Twitter, WhatsApp. |
| 11:00 | Visitas presenciales a **farmacias piloto** en operación (**~20–28** según cierre T+60 / §2.6) para confirmación operativa. |
| 12:00 | Primera orden real esperada. |
| 18:00 | Reunión equipo: balance del día. |
| 22:00 | Cierre del día. Reporte al inversor: # órdenes, # incidentes, # tickets. |

### 4.3 Días T+91 a T+100 — Estabilización

- Customer Support 24/7 los primeros 10 días (turnos del founder + Customer Support + **equipo Sales B2B (4)** en standby).
- Bug fixing prioritario.
- Iteración rápida basada en feedback de paciente y farmacia.

## 5. Definition of Done del piloto (M6 = sexto mes desde Day-D)

Criterios para considerar el piloto exitoso:

| Criterio | Meta mes 6 |
|---|---|
| Farmacias activas | ≥ **97** (alineado a curva agresiva **M6** post-Day-D — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1) |
| Pedidos completados | ≥ 1.500 |
| Tiempo promedio entrega | ≤ 90 min |
| Validación Rx promedio | ≤ 60 min |
| NPS B2C | ≥ 35 |
| NPS B2B | ≥ 50 |
| Tasa cancelación de orden | ≤ 8% |
| Tasa de comprobante falso | ≤ 0,5% |
| Revenue mensual | ≥ USD **4.800** (mismo modelo; refinar con FP&A) |
| Cash en banco | ≥ **~USD 46.395** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3: cash final **M6** del año calendario post-Day-D) |

**Si NO se alcanzan estos criterios:** activar plan de contingencia documentado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 4.

## 6. Plan de expansión post-piloto (T+180 a T+360)

### 6.1 Mes 7-9: Naguanagua + San Diego

- Onboarding 20-30 farmacias adicionales.
- Sin cambio en equipo ni inmueble.
- Marketing digital extendido.
- Meta: **130** farmacias activas en mes 9 *(PROYECCION §1.1)*.

### 6.2 Mes 10-12: Resto Valencia metro

- Onboarding 30-40 farmacias adicionales.
- **Ampliación logística:** segundo **partner** concesionario o más **agentes** bajo el contrato marco existente (orden de magnitud **5-8 agentes** adicionales si aplica).
- Meta: **~159 farmacias activas en mes 12** del calendario post-Day-D (**equilibrio mensual** revenue ≥ burn en **mes 11** con **~151 activas** — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 y §1.4).

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

## 9. Entregables al cierre del piloto (**M6 = sexto mes desde Day-D**)

> **Nota:** Day-D = **T+90** = inicio **M1** financiero. El piloto se evalúa al **M6 post-Day-D** (§5 Definition of Done), no en T+180 calendario absoluto.

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
