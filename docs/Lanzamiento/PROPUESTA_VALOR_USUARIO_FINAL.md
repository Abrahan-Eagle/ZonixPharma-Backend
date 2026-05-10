# Propuesta de valor — Usuario final (Paciente / Buyer)

> **Última actualización:** 10 mayo 2026.
> Documento que captura el pitch al usuario final que descarga la app o entra a la web.
> El paciente es el rol `users` (Buyer) en el backend.

## 1. Quién es el usuario final

### 1.1 Persona primaria — "Carmen, 58 años"

- Vive en Bella Florida con su esposo y madre de 82 años.
- Su madre toma 5 medicamentos crónicos (hipertensión, diabetes, artritis).
- Cada mes recorre 3-4 farmacias buscando los medicamentos que están en stock.
- Tiene WhatsApp, smartphone Android, datos limitados.
- Paga en efectivo, Pago Móvil C2P, transferencia, Zelle.
- Confía en su farmacéutico de cabecera.

### 1.2 Persona secundaria — "Diego, 34 años"

- Profesional joven, vive en **El Socorro** del piloto (barrio en **corredor vía Tocuyito**, referencia de campo frente a **Ferretería Valcro**; alineado con [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) §6.2).
- Compra OTC ocasional (analgésicos, vitaminas, cuidado personal).
- A veces compra Rx para alergias o antibióticos.
- Móvil-first, paga con Zelle o Binance Pay USDT.
- Valora rapidez (delivery en menos de 90 min).
- No quiere ir a la farmacia físicamente.

### 1.3 Persona terciaria — "Doña Luisa, 71 años"

- Pensionada, vive sola.
- Recibe llamadas del hijo que vive en Caracas o EE.UU.
- Necesita ayuda para usar la app (alfabetización digital baja).
- El hijo le hace el pedido remoto con su tarjeta / Zelle y se entrega en casa de la mamá.

## 2. Dolor que tiene hoy

1. **Desabastecimiento aleatorio:** "salgo a la farmacia y no sé si tendrán el medicamento; pierdo 1-2 horas".
2. **Diferencia de precios entre farmacias:** "puedo gastar 30% más si voy a la farmacia equivocada".
3. **Receta médica física:** "se me arruga, se me pierde, no la puedo enviar al hijo en Caracas".
4. **Pago presencial obligatorio:** "no puedo pagar a distancia para que mi mamá reciba".
5. **Sin trazabilidad:** "compré en un sitio nuevo y nunca llegó; no tengo a quién reclamar".
6. **Adultos mayores con poca movilidad:** "mi mamá no puede salir y la cadena no entrega medicamentos Rx".
7. **Sin seguimiento del repartidor:** "dijeron que ya salió pero no sé dónde está ni cuándo llega".
8. **Dudas farmacológicas sin canal rápido:** "¿puedo tomar esto con lo que ya tomo?", "¿hay genérico más barato equivalente?" — antes de pedir no tiene a quién preguntar de forma inmediata y trazable.

## 2.1 Avisos legales y de comunicación (marketing + salud)

- Zonix Pharma es un **marketplace y canal tecnológico**; **no** sustituye el criterio médico ni la consulta presencial.
- Los textos de la app, anuncios y redes deben cumplir **buenas prácticas de publicidad** en salud: sin promesas de cura, sin antes/después, sin garantizar resultados terapéuticos. Ver checklist operativo en [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) sección **«Do / Don’t — comunicaciones en salud (VE)»**.
- Cifras de **ahorro** o comparaciones de precio son **estimaciones internas** o basadas en escenarios; pueden variar según stock y farmacia. No constituyen oferta vinculante ni asesoría sanitaria.

## 3. Lo que Zonix Pharma le ofrece

### 3.1 Buscar y comparar precios entre farmacias

- Una sola búsqueda muestra el medicamento en todas las farmacias afiliadas con precio actual.
- Filtro por distancia, precio, calificación, disponibilidad.
- **Ahorro potencial (estimación):** comparar precios entre farmacias afiliadas puede reducir el gasto respecto a acudir a la primera opción sin comparar; el rango **15-25%** es una **hipótesis de trabajo** del piloto (no garantizada). Depende de disponibilidad, marca/genérico y promociones locales.

### 3.2 Receta médica digital (Rx)

- Sube foto de la receta o PDF.
- Farmacéutico colegiado de la farmacia despachadora la valida.
- Estado en tiempo real: pendiente, aprobada, rechazada (con motivo).
- **Importante (TTL):** el tiempo **≤ 60 min** que ves en la app se refiere al **ciclo de validación de la orden con receta** (orden en `pending_prescription_validation` y reglas de negocio del backend), no a la **vigencia legal** de la receta médica en papel (típicamente limitada en el tiempo según tipo de receta y normativa). La **vigencia** la aplica el farmacéutico al validar (p. ej. receta vencida → rechazo). Detalle técnico: [`../PLAN_RX_VALIDATION.md`](../PLAN_RX_VALIDATION.md).

### 3.3 Pago a distancia

- Pago Móvil C2P, transferencia, Zelle, Binance Pay USDT.
- Comprobante adjunto en la app.
- El hijo en Caracas o EE.UU. paga; la mamá recibe en Valencia.
- Trazabilidad: el comprobante queda en la orden, la farmacia lo valida, el paciente recibe push de confirmación.

### 3.4 Delivery a domicilio o pickup

- Delivery autónomo o de empresa de delivery.
- Tiempo promedio prometido: 60-90 minutos en Bella Florida y El Socorro.
- Pickup en sucursal opcional para Rx retenida o sustancias controladas.

### 3.5 Tracking del repartidor en tiempo real

- Mapa en vivo con la ubicación del repartidor mientras el pedido está **en ruta** (módulo ya construido en backend).
- Notificaciones push en cada cambio de estado (salida, en camino, entregado).
- Conexión directa con el flujo de delivery: el paciente ve el mismo estado que la farmacia y el repartidor, sin llamadas intermedias.

### 3.6 Cadena de frío respetada

- Si el medicamento requiere cadena de frío (insulina, vacunas), la app marca el producto.
- Solo se asigna a delivery con equipo de cadena de frío o pickup.
- El paciente sabe explícitamente si su pedido requiere refrigeración.

### 3.7 Asistente de consulta farmacológica con IA *(roadmap Año 1 — no disponible en piloto)*

- Orientación **informativa** sobre indicaciones habituales, equivalentes genéricos, advertencias generales e interacciones frecuentes **antes** de armar el carrito.
- **No sustituye** la consulta médica ni la validación del farmacéutico colegiado; la receta Rx sigue siendo obligatoria cuando corresponde.
- Microcopy y límites del asistente alineados con **§2.1** (avisos legales y comunicación en salud): sin promesas de cura ni diagnóstico.

### 3.8 Histórico de compras y recetas

- "Volver a pedir" en un click.
- Recordatorios mensuales para crónicos (opt-in).
- Historial de recetas validadas para mostrar al médico.

## 4. Lo que NO le ofrece Zonix Pharma (para no inflar)

- **No es teleconsulta médica.** Si necesita receta, debe ir al médico antes.
- **No vende productos veterinarios** (al menos en piloto).
- **No vende productos sin registro INHRR** (por regulación, no podemos).
- **No es seguro médico.** No procesa reembolso de IVSS ni privados.

## 5. Pricing al usuario final

- **Descarga de app:** GRATIS.
- **Uso de la app:** GRATIS.
- **Costo de medicamento:** el que tiene la farmacia. Zonix no añade markup.
- **Delivery fee:** USD 1,50-3,50 según distancia. Detalle en [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md).
- **Validación Rx:** GRATIS (el farmacéutico de la farmacia lo hace como parte del pedido).

## 6. Onboarding del paciente (mínima fricción, ALTA #7 forense)

**Filosofía:** el paciente debe poder llegar a "primera búsqueda de medicamento" en menos de 90 segundos desde abrir la app. Datos adicionales se piden **solo cuando el flujo lo necesita** (Rx, delivery a dirección, pago).

| Paso | Tiempo | Qué hace |
|---|---|---|
| 1 | 30s | Descarga app desde Play Store o App Store (`com.zonix.pharma`). O entra a `web.zonixpharma.com`. |
| 2 | 30s | Registro con **solo teléfono + WhatsApp OTP** (el código llega por WhatsApp gracias a YCloud, no SMS). Sin email, sin nombre, sin dirección todavía. |
| 3 | Inmediato | Browse de catálogo: el paciente ya puede explorar productos. |
| 4 | 60s al primer pedido | Cuando agrega al carrito, app pide: nombre + dirección de entrega (si elige delivery). |
| 5 | 60s si Rx | Si el carrito tiene producto Rx, pide subir foto/PDF receta. |
| 6 | 30s | Selecciona método de pago. Pago Móvil C2P / transferencia / Zelle / Binance Pay USDT. |
| 7 | 30s | Confirma orden. Push de "orden recibida" + "validación pendiente" si Rx. |
| 8 | < 60 min para Rx | Push de "validada" / "rechazada". |
| 9 | Inmediato | Sale el repartidor. Push de "en camino". |
| 10 | Variable | Push de "entregada". Calificación opcional 1-5 estrellas. |

### 6.1 Datos que NO se piden hasta que son necesarios

- **Cédula:** solo si compra Rx retenida o sustancia controlada.
- **Email:** solo si elige "recibir reportes mensuales" en perfil. Opcional.
- **Foto de perfil:** opcional, no requerida.
- **Datos médicos del paciente** (alergias, condiciones): opcional. Útil para alertas de interacción medicamentosa pero no bloquea el flujo.

### 6.2 Métricas del funnel

| Funnel | Meta mes 6 | Meta mes 12 |
|---|---|---|
| Descarga → registro WhatsApp OTP | 75% | 80% |
| Registro → primera búsqueda | 90% | 92% |
| Primera búsqueda → primer carrito | 35% | 40% |
| Primer carrito → primera orden | 65% | 75% |
| Primera orden → orden #2 (en 30 días) | 45% | 55% |

## 7. Adquisición del paciente

### 7.1 Canales digitales

| Canal | CPL estimado VE 2026 | Audiencia óptima | Notas |
|---|---|---|---|
| Meta Ads (Facebook + Instagram) | USD 0,15-0,60 por lead | 30+ años, mujeres con cargas familiares, hijos en exterior | [Fuente: Meta Business VE benchmarks 2025](https://www.facebook.com/business/) |
| Google Ads (search + display) | USD 0,30-0,90 por lead | Búsqueda intención (alguien escribe "farmacia delivery Valencia") | [Fuente: Google Ads VE 2025](https://ads.google.com/) |
| **TikTok Ads** | **USD 0,20-0,80 por lead** | **18-35 años, joven profesional, contenido viral. Crecimiento alto en VE 2025-2026.** | Activar como segundo canal si Meta satura (ALTA #6 forense). Detalle en [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) sección 7.2. |
| WhatsApp Business + difusión | Casi 0 | Leads cálidos / referidos / B2B | Para leads orgánicos vía Sales B2B. |

### 7.2 Canales offline

- Valla publicitaria 3m×2m USD 350/mes (Base) o 6m×4m USD 700/mes (Growth) en av. Bolívar Norte / av. Cedeño.
- Flyers en farmacias afiliadas: USD 80/mes en imprenta, USD 50/mes en distribución.
- Radio FM local: USD 200-400/mes por mención corta de 30s en horario AM, NO incluido en Lean ni Base. Solo Growth.

Detalle completo en [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) y [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md).

### 7.3 Estrategia: B2B primero, B2C después

- Mes 1-3: foco en cargar 10 farmacias con catálogo. Sin marketing al paciente todavía.
- Mes 4-6: marketing local geo-targeteado en Bella Florida + El Socorro. CPL bajo.
- Mes 7-12: expansión Valencia metro. CPL sube ligeramente porque el área es mayor.

Razón: si lanzamos al paciente sin catálogo cargado, el paciente abre la app y se va. Pésima primera impresión, churn altísimo.

## 8. KPIs del usuario final

| KPI | Meta mes 6 | Meta mes 12 |
|---|---|---|
| Usuarios registrados | 1.500 | 8.000 |
| Usuarios activos mensuales | 600 | 3.500 |
| Ratio de conversión (descarga → primer pedido) | 25% | 30% |
| Pedidos por usuario activo / mes | 1,2 | 1,8 |
| GMV mensual (todos los pedidos) | USD 8.500 | USD 75.000 |
| NPS | 35 | 50 |
| Tiempo promedio entrega | 75 min | 60 min |

Estos KPIs se reportan trimestralmente al inversor.

## 9. Storytelling para anuncios

### 9.1 Anuncio Meta Ads para crónico (clase media-alta)

> "Tu mamá necesita 5 medicamentos cada mes. ¿Y si los pides desde tu teléfono y le llegan en 90 minutos? Zonix Pharma. Solo Carabobo, por ahora."

### 9.2 Anuncio Meta Ads para joven profesional

> "¿Sin tiempo para ir a la farmacia? Pide tu medicamento desde la app, paga con Zelle o Binance Pay, recíbelo en 90 minutos. Zonix Pharma. Carabobo."

### 9.3 Anuncio Meta Ads para hijos en el exterior

> "Tu mamá vive en Valencia, tú en Madrid. Compra su medicamento desde tu teléfono, paga con Zelle, ella lo recibe en casa. Zonix Pharma."

### 9.4 Valla publicitaria

> "Zonix Pharma. La farmacia en tu teléfono."
> Logo + URL `zonixpharma.com` + ícono Play Store + ícono App Store.

## 10. Riesgo de baja adopción y plan de contingencia

| Riesgo | Probabilidad | Plan B |
|---|---|---|
| Descargas < 1.500 en mes 6 | Media | Tolerar CPL Meta Ads hasta **USD 0,80** / aumentar presupuesto Meta hasta saturar curva; activar **TikTok Ads**; promociones de **delivery gratis** primer pedido. |
| Conversión registro → primer pedido < 15% | Media | Llamada de Customer Support a usuarios registrados sin pedido. Encuesta para entender fricción. |
| NPS < 25 | Media-baja | Encuesta cualitativa. Probable causa: tiempo de entrega o validación Rx. Plan: subir tarifa delivery o ampliar farmacias en zona. |

## 11. Documentos hermanos

- [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md): pitch a la farmacia.
- [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md): pitch al delivery y al farmacéutico.
- [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md): cómo se paga en la app.
- [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md): vallas, radio, flyers + **§1.1 Do/Don't comunicaciones en salud (VE)**.
