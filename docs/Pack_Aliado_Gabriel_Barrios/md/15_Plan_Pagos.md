# Plan de pagos — cómo se mueve el dinero en Zonix Pharma

**Para:** Gabriel Barrios — Gerente de Consultoría, Grupo Morr (Valencia, Venezuela)  
**De:** Abrahan Pulido — Founder / CEO / CTO, Zonix Pharma  
**Fecha:** junio 2026

**No es una solicitud de inversión.** Es una explicación clara de **quién paga a quién** en el piloto Valencia, sin pasarelas internacionales.

---

## En 60 segundos

| Actor | Qué paga | A quién | Cómo (piloto VE) |
|-------|---------|---------|------------------|
| **Paciente** | Medicamentos | **Farmacia** | Pago móvil, transferencia, Zelle, Binance Pay, efectivo |
| **Paciente** | Envío (si hay delivery) | **Empresa de delivery** | Mismos canales, cuenta separada |
| **Farmacia** | Cuota + % sobre ventas en app | **Zonix Pharma** | Pago mensual B2B (móvil, transferencia, Zelle, Binance) |
| **Zonix Pharma** | — | — | **No recibe el dinero del paciente** en el piloto |

**En una frase:** Zonix **conecta** paciente, farmacia y reparto; **no es banco ni procesador de pagos**. La farmacia **valida el comprobante** del paciente antes de despachar.

---

## Qué es este documento

En Venezuela el checkout “tipo Amazon con tarjeta” no es viable para un piloto farmacéutico local. Este plan describe el **modelo manual** que usaremos: métodos que ya conocen pacientes y farmacias, con reglas simples de validación y cobro B2B a la farmacia.

---

## Métodos que sí usamos

| Método | Uso típico | Tiempo de confirmación |
|--------|------------|------------------------|
| **Pago móvil (C2P)** | Paciente → farmacia | 1–5 minutos |
| **Transferencia bancaria** | Paciente → farmacia o delivery | 1–30 minutos |
| **Zelle** (USD desde EE.UU.) | Paciente con cuenta US o familiar | 5–30 minutos |
| **Binance Pay (USDT)** | Paciente → farmacia o delivery | 1–3 minutos |
| **Efectivo** | Retiro en farmacia (pickup) | Inmediato |
| **Punto de venta físico** | Pago en mostrador | Inmediato |

**No usamos en piloto:** tarjetas internacionales, PayPal, Stripe, criptos exóticas con poca liquidez local.

> La comisión que a veces cobra el **banco receptor** en pago móvil (~1,5% referencia 2026) la absorbe la **farmacia**, no Zonix.

---

## Flujo paciente → farmacia (medicamento sin receta)

1. El paciente arma el pedido en la app y elige cómo pagar.
2. La app muestra los datos de pago de la **farmacia** (y, si hay envío, los de la **empresa de delivery** por separado).
3. El paciente paga y **sube el comprobante**.
4. La **farmacia revisa** el comprobante y confirma en su panel.
5. Solo entonces se prepara y despacha el pedido.

**Retiro en farmacia (pickup):** un solo pago a la farmacia — sin línea de envío.

**Con delivery:** dos pagos separados — **(A) medicamentos → farmacia** y **(B) envío → empresa de delivery**. No mezclamos el envío en un solo pago a la farmacia en el piloto.

Tiempo habitual hasta confirmar ambos pagos: **5–15 minutos**.

---

## Flujo con receta médica (Rx)

Igual que el flujo anterior, **pero el pago va después de la validación**:

1. Paciente sube foto o PDF de la receta.
2. El pedido queda **en espera de validación** por el farmacéutico colegiado de esa farmacia (plazo objetivo: **60 minutos** en horario operativo).
3. Si aprueba → el paciente **paga** como en el flujo OTC.
4. Si rechaza → puede corregir la receta o cancelar.
5. Si se vence el plazo → cancelación automática **antes** de cobrar.

Detalle operativo del módulo Rx: ver documento hermano `16_Plan_Operativo.md`.

---

## Flujo farmacia → Zonix (cuota de plataforma)

Cada mes Zonix factura a la farmacia aliada:

- **Parte fija** (suscripción / uso de la plataforma).
- **Parte variable** (% sobre ventas completadas en la app del mes anterior).

La farmacia paga por pago móvil, transferencia, Zelle o Binance y envía comprobante. Zonix confirma y mantiene activo el servicio.

**Si hay mora (resumen):**

| Días desde la factura | Qué pasa |
|----------------------|----------|
| Día 3 | Recordatorio |
| Día 4 | No acepta **pedidos nuevos** (catálogo aún visible) |
| Día 10 | Catálogo **oculto** |
| Día 15 | Cuenta cancelada |

La suspensión **no borra** lo que ya se debía; se regulariza por escrito para reactivar.

---

## Flujo delivery (envío)

- El **paciente paga el envío** directo a la **empresa de delivery** (no pasa por caja de la farmacia en el piloto).
- La empresa valida el comprobante y asigna al repartidor.
- La empresa paga a sus repartidores en su calendario interno (quincenal o mensual).
- Zonix cobra a la empresa de delivery un fee mensual B2B sobre envíos completados (porcentaje + monto fijo por envío).

Zonix **no paga sueldos de repartidores** ni opera flota propia.

---

## Regla Sudeban (por qué no necesitamos licencia de pagos en piloto)

En el piloto el dinero de la orden **no pasa por cuentas de Zonix**:

- Medicamento: **paciente → farmacia**.
- Envío: **paciente → empresa de delivery**.
- Zonix cobra **después**, a la farmacia y al partner logístico, por **servicio de plataforma**.

Si en el futuro Zonix **recibiera** pagos del paciente y los repartiera, habría que revisar con abogado especializado en pagos VE (horizonte típico **12–18 meses**, post-crecimiento).

---

## Riesgos y mitigaciones (lenguaje simple)

| Riesgo | Qué hacemos |
|--------|-------------|
| Comprobante falso | La farmacia valida visualmente; soporte Zonix puede mediar; cuenta suspendida si hay fraude |
| Farmacia no paga cuota Zonix | Bloqueo escalonado (tabla arriba) |
| Devaluación entre cotización y pago | Precio congelado ~30 minutos; si expira, re-cotizar |
| Zelle bloqueado | Nunca depender solo de Zelle; pago móvil y Binance como respaldo |

---

## Metas de desempeño (referencia año 1)

| Indicador | Meta mes 6 | Meta mes 12 |
|-----------|------------|-------------|
| Pedidos pagados con **pago móvil** | ~65% | ~60% |
| Con **Zelle** | ~8% | ~12% |
| Con **Binance Pay** | ~3% | ~8% |
| Tiempo promedio validación comprobante (farmacia) | ~8 min | ~5 min |
| Morosidad cuota plataforma | < 8% | < 5% |

---

## Qué nos gustaría que revises, Gabriel

1. **Realismo local:** ¿Es creíble que farmacias y pacientes en Valencia usen **pago móvil + Zelle + Binance** en la mezcla del table?
2. **Separación envío:** ¿Las farmacias independientes aceptarían que el **envío se pague aparte** a la empresa de delivery?
3. **Validación manual:** ¿Cuánto tarda hoy una farmacia típica en confirmar un pago móvil en horario pico?
4. **Mora B2B:** ¿El calendario de bloqueo (día 4 / 10 / 15) es razonable para el mercado local o muy agresivo?
5. **Tipo de cambio:** ¿Recomiendas anclar operaciones a **BCV oficial** para libros y conversión USD↔Bs?

---

## Disclaimers

- Zonix **no es PSP** ni sustituye al farmacéutico titular ni al criterio médico.
- Facturación SENIAT, IVA y retenciones: **cerrar redacción con contador VE** antes del go-live.
- Política FX y reactivación tras mora: detalle contractual en contrato marco farmacia — no sustituye asesoría legal.
- Este documento describe **intención operativa** del piloto; puede ajustarse con datos reales post-Day-D.

---

**Abrahan Pulido**  
Founder / CEO / CTO — Zonix Pharma  
ing.pulido.abrahan@gmail.com · +58 412 4352014

*Zonix Pharma — junio 2026*
