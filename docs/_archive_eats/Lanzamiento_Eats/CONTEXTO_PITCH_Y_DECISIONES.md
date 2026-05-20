> **ARCHIVO HISTÓRICO — Zonix Eats (pre-fork abr 2026).** No indexar para **Zonix Pharma**. Canon migración: [MIGRACION_EATS_PHARMA.md](../../MIGRACION_EATS_PHARMA.md) · Pack inversor vivo: [docs/Lanzamiento/README.md](../../Lanzamiento/README.md).
>

# Zonix Eats — Contexto de planificación y decisiones (Creesca)

> **Origen:** conversación de planificación con el equipo (abril 2026). Complementa [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) y el [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md).
> **Reunión con inversionista:** guion y checklist en [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).
> **Revisar** cuando haya cifras firmes (cotizaciones, legal, inversor).

---

## Zona y expansión

- **Piloto:** Valencia, Carabobo — **Urb. Popular El Socorro** y barrios colindantes (Bella Florida, Los Chorritos, Las Parcelas, San Martín, Llano Verde, etc.).
- **Población estimada del corredor piloto:** ~15.000–25.000 hab. (ver [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md)).
- **Estrategia:** empezar en El Socorro **probando**; incluir **áreas alrededor**; luego **expandir a Valencia y Carabobo**.
- **Fechas:** sin fecha de inicio fija; intención **pronta**. Reunión con inversionista en **unas semanas, máximo ~1 mes**.

---

## Mercado

- **264 restaurantes** de comida rápida registrados en Valencia (GuiaPana); 48 % con delivery.
- **Comercios estimados en zona piloto:** 30–60 (incluye informal).
- **Competidor real en barrio popular:** WhatsApp, no Yummy/PedidosYa (servicio irregular en periferia).
- **Penetración pago móvil:** 38 % de transacciones nacionales (>470 M operaciones/mes, 2025). Dominante en estrato C-D.
- **Penetración smartphone:** ~60,5 %, 92 % en 4G. Suficiente para app en zona urbana.
- Detalle completo en [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md).

---

## Modelo de ingresos y decisiones de precio

| Decisión | Valor acordado | Justificación |
|----------|---------------|---------------|
| **Membresía comercio** | **$25 USD/mes** (recomendado) | Menor que 1 día de comisiones en Yummy para comercio que vende $600/mes. Rango: $15–40. |
| **Tarifa fundador** | **$15/mes** (3 meses post-trial) | Reducir fricción de adopción temprana |
| **Membresía delivery company** | **$30 USD/mes** | Acceso a flujo de pedidos y gestión de agentes |
| **Trial** | 30 días o 20 pedidos (lo que ocurra primero) | Demostrar valor antes de cobrar |
| **Comisión sobre GMV** | **$0** | Diferenciador regulatorio y comercial |

Detalle de unit economics en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).

---

## Diferenciación y defensibilidad

| Ventaja | Descripción | Copiable? |
|---------|-------------|-----------|
| **Regulatoriamente limpio** | No intermediación de pagos. Caso Yummy/Sudeban documentado como antecedente. | Copiable pero requiere diseño desde cero |
| **Producto construido y testeado** | 377 tests backend, 213 frontend. Multi-rol funcional. | Reproducible en 6–12 meses por equipo competente |
| **Conocimiento de zona** | Equipo conoce El Socorro y los barrios. Relaciones locales. | Difícil de copiar desde fuera |
| **Costo fijo vs comisión %** | Psicológicamente distinto para el comercio; alinea incentivos | Fácil de copiar en precio, difícil en ejecución |
| **Datos del comercio (no de la plataforma)** | El comercio conserva su base de clientes | Diferenciador de filosofía, no de tech |

**Honestidad:** la barrera técnica es baja. La defensibilidad real está en **ejecución local, relaciones con comercios, y calidad operativa** — no en el código.

---

## Equipo, inversión y orden de trabajo

- **Equipo:** hay personas en mente para Zonix Eats; **no se avisa** hasta tener **plan armado + inversión** para comenzar.
- **Inversionista:** existe contacto; falta **reunión para presentar** el proyecto.
- **Técnico / producción:** se requiere **capital** para servidores, dominio, puesta en producción.
- **Programación:** el interlocutor actual es **programador** (desarrollo); hace falta definir **quién asume el rol operativo** "día a día" (no solo dev).
- **Hueco crítico:** contraparte de negocio/ops. Sin esta persona, no hay captación ni soporte.

---

## Comercios, delivery y marketing

- **Comercios:** **0 contactados** al momento de la sesión; pendiente **anexarlos** tras inversión y plan. Script de venta listo en [PROPUESTA_VALOR_COMERCIO.md](PROPUESTA_VALOR_COMERCIO.md).
- **Empresa de delivery:** **sí** hay posibilidad; **aún no** conversado con ninguna.
- **Publicidad:** prevista inversión en material impreso, franelas, folletos, **pauta** Instagram/Facebook.
- **Vallas (OOH):** intención de contratar **agencia formal**. Supuesto en [SUPUESTO_MARKETING_OOH.md](SUPUESTO_MARKETING_OOH.md).
- **Marketing / zona:** quien haga marketing debe **conocer la zona**; perfil **híbrido** (marketing + activación local).

---

## Legal y sociedad

- Existe **registro de asociación sin fines de lucro** con objeto amplio; **no es adecuado** para membresía SaaS B2B ni para recibir inversión.
- **Recomendación:** constituir **C.A. (Compañía Anónima)** — permite acciones, facturación B2B, inversión.
- **Costo estimado constitución:** $800–2.000 USD. **Timeline:** 6–10 semanas.
- Detalle completo en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).

---

## Parámetros acordados para el pitch

| Tema | Decisión / supuesto |
|------|---------------------|
| **Runway** | Priorizar pedir **12 meses** con **hitos mensuales**. Plan B: **6 meses** si el inversor pide menos capital. |
| **Capital solicitado** | $7.000–8.000 sin OOH; $14.500–15.500 con OOH (alineado a [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md)). Mínimo viable: $4.000–4.500 (6 meses). |
| **Trial comercios** | **30 días** o **20 pedidos**, lo que ocurra primero; luego tarifa fundador $15/mes (3 meses). |
| **Sueldo fundador** | **Mínimo o cero** meses 1–3; a partir de mes 4–6 valorar **$100–200/mes** si hay MRR y caja (ver [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §6.1.1) para evitar burnout. |
| **Meta ~3 meses** | ~5 comercios activos; flujo pedido→pago→entrega/retiro estable; conversación avanzada con empresa de delivery. |
| **Break-even mensual** | ~27 comercios @$25/mes (costos lean operativos ~$667/mes). Proyectado para mes 18–22. |
| **Instrumento inversión** | A definir con inversionista: equity (C.A.), préstamo convertible, o préstamo simple. |

---

## Próximos pasos operativos

1. **Constituir vehículo legal** (C.A.) y habilitar facturación SENIAT — [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).
2. Cerrar **cotizaciones** reales (hosting, legal, OOH si aplica).
3. **Reunión con inversionista** — [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).
4. **Contratar/definir rol ops/captación** con primer tramo del capital.
5. Iniciar **captación de comercios** con script y material — [PROPUESTA_VALOR_COMERCIO.md](PROPUESTA_VALOR_COMERCIO.md).
6. **Generar demanda** (compradores) en paralelo a captación de comercios.
7. Completar **VOLCADO** o pegar respuestas del equipo en las tablas de §11 y brief.
8. Actualizar **brief** y plan maestro con cifras y fechas confirmadas.

**Última actualización:** abril 2026.
