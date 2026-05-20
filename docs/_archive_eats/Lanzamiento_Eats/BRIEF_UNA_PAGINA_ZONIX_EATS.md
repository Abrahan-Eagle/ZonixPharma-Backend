> **ARCHIVO HISTÓRICO — Zonix Eats (pre-fork abr 2026).** No indexar para **Zonix Pharma**. Canon migración: [MIGRACION_EATS_PHARMA.md](../../MIGRACION_EATS_PHARMA.md) · Pack inversor vivo: [docs/Lanzamiento/README.md](../../Lanzamiento/README.md).
>

# Zonix Eats — Brief de una página (Creesca)

**Actualización:** abril 2026 · **Detalle completo:** [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) · **Pitch / inversor:** [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md)
**Mercado y números:** [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) · [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) · [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)
**Comercio y legal:** [PROPUESTA_VALOR_COMERCIO.md](PROPUESTA_VALOR_COMERCIO.md) · [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md)
**Comprador:** [PROPUESTA_VALOR_COMPRADOR.md](PROPUESTA_VALOR_COMPRADOR.md)

**Mercado piloto:** Valencia, Carabobo — **Urb. Popular El Socorro** y barrios colindantes (~15.000–25.000 hab.).

---

## Por qué existe

Los comercios de comida rápida pierden margen por comisiones altas de super-apps (~25 % en Yummy). **Zonix Eats** conecta compradores, comercios y logística **sin retener el pago del pedido**: el comprador paga directo al comercio, el comercio valida el comprobante en la app, y Zonix cobra solo **membresía fija B2B** ($25 USD/mes recomendado) a comercios y empresas de delivery.

---

## Promesa (una frase)

Pedir en tu zona con seguimiento en app y envío organizado, **pagando directo al restaurante**, sin que la plataforma se quede con el dinero de la venta.

---

## Diferenciación competitiva

| Dimensión | Yummy / PedidosYa | WhatsApp (informal) | **Zonix Eats** |
|-----------|-------------------|--------------------|--------------:|
| Costo al comercio | 25 % sobre ventas | $0 | **$25/mes fijo** |
| Ahorro anual (comercio que vende $600/mes) | — | — | **~$1.500** vs Yummy |
| Pago del pedido | Retenido por la app | Directo | **Directo** |
| Tracking en tiempo real | Sí | No | **Sí** |
| Datos del cliente | De la app (no del comercio) | Ninguno | **Del comercio** |
| Riesgo regulatorio | Alto (Sudeban, caso Yummy) | Ninguno | **Ninguno** |

---

## Modelo de ingresos

| Fuente | Precio | Trial |
|--------|--------|-------|
| Membresía comercio | **$25 USD/mes** (rango $15–40 según tier) | 30 días o 20 pedidos, lo que ocurra primero |
| Membresía delivery company | **$30 USD/mes** | Negociable |

Break-even mensual con **27 comercios activos** @$25/mes (costos lean operativos ~$667/mes, incluyendo captación, facturación SENIAT, conectividad e incentivos buyer). Detalle en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).

---

## No-objetivos (90 días)

- No wallet ni pasarela que retenga fondos del comprador.
- No expansión masiva sin piloto estable.
- No prometer envío calculado por backend hasta implementar el módulo o acordar tarifas manuales.

---

## KPIs mínimos (piloto)

| KPI | Qué mide | Target piloto |
|-----|----------|--------------|
| Tasa de validación de pago | Órdenes validadas / que pidieron comprobante | >70 % |
| Tiempo p90 a validar | Minutos desde comprobante hasta validación comercio | <30 min |
| Órdenes completadas | % sobre creadas | >60 % |
| MTTR soporte | Horas hasta resolución o siguiente paso | <4 h |
| Comercios activos (con ≥1 pedido/mes) | Conteo | Creciente |
| MRR | Ingresos recurrentes mensuales | Creciente |

---

## Equipo

| Rol | Persona | Dedicación |
|-----|---------|------------|
| Desarrollo / CTO | Founder actual (programador) | Full-time |
| Operaciones / captación | [Por definir — crítico] | Part-time → full-time |
| Soporte / comunidad | Compartido con ops | Part-time |

**Hueco explícito:** se necesita contraparte de negocio/operaciones. Este rol se cubre con parte del capital.

---

## Traccion (estado real)

| Indicador | Estado |
|-----------|--------|
| App multi-rol construida (Flutter) | Listo — 213 tests |
| Backend API (Laravel) | Listo — 377 tests |
| **Producto end-to-end funcional** | **Si** — flujo completo buyer-commerce-delivery probado internamente (pedido, pago off-platform, validacion, tracking, chat, disputas) |
| Alpha testers internos | **[PENDIENTE — completar con dato real: ej. "3 personas probaron el flujo completo"]** |
| Conversaciones informales con comercios | **[PENDIENTE — completar: ej. "2 duenos de luncheria en El Socorro mostraron interes verbal"]** |
| Comercios con compromiso formal | **0** — captacion comienza post-inversion |
| Empresa de delivery | **0** — en identificacion |
| Reunion inversor | **Programada / proxima** |
| Vehiculo legal para inversion | **Pendiente** — plan en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) |
| TAM expandido (5 ciudades VE) | **$1,4M/ano** — detalle en [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) seccion 5.3 |

> **Nota para el equipo:** antes de la reunion con el inversionista, es CRITICO completar los campos marcados **[PENDIENTE]** arriba. Incluso "2 duenos de luncheria dijeron que les interesa" o "5 personas probaron la app" es mejor que "0 contactados". Un inversionista quiere ver senales de vida, no perfeccion.

---

## Piloto (rellenar)

| Campo | Valor |
|-------|-------|
| Ciudad / zona | **Valencia, Carabobo** — **El Socorro** + barrios colindantes |
| Ventana de fecha | [PENDIENTE] |
| Comercios comprometidos | [PENDIENTE — meta: 5–10 en 3 meses] |
| Empresa de delivery | [PENDIENTE — plan B: solo retiro en tienda] |

---

## Financiación requerida

| Escenario | Capital solicitado | Runway |
|-----------|-------------------|--------|
| Sin OOH (lean) | **$7.000-8.000 USD** | 12 meses |
| Con campana valla | **$14.500-15.500 USD** | 12 meses |
| Minimo viable (sin OOH) | **$4.000-4.500 USD** | 6 meses |

Detalle en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) y [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md).

---

## Riesgos principales y mitigación

| Riesgo | Mitigación |
|--------|------------|
| Comercios no ven valor / no pagan membresía | Trial gratuito + propuesta de valor cuantificada + generación de demanda durante trial |
| Baja demanda de compradores (sin pedidos) | Marketing hiperlocal (volantes, WhatsApp, QR); pauta digital zona; referidos |
| SENIAT / facturación B2B | Constituir C.A. + facturación digital en primeras 6–8 semanas |
| Sin empresa de delivery | Plan B: solo retiro en tienda en fase 1 |
| Equipo solo técnico (sin ops) | Primer uso de capital: contratar/cubrir rol ops part-time |

---

## Prioridad #1 (2–4 semanas)

Resultado del **cuestionario de diagnóstico** en el plan maestro: [PENDIENTE]
