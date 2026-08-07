---
name: zonix-b2b-sales
description: Playbook Sales B2B Zonix Pharma (×4). Prospección farmacias Valencia, contrato marco, onboarding panel. Invocar zonix-launch-piloto para hitos T+60–Day-D.
metadata:
  auto_invoke: "Prospección / cierre farmacias B2B"
---
# zonix-b2b-sales

Skill para **ejecutar venta B2B** a farmacias en el piloto — no para redactar el pack inversor completo.

## Cuándo aplicar

- Prospección y cierre de farmacias piloto (Valencia metro).
- Preparar visita, objeciones, follow-up post-reunión.
- Alinear pipeline con calendario `zonix-launch-piloto` (T+60 pre-Day-D, Day-D catálogo vivo).

## Obligatorio antes

1. [PROPUESTA_VALOR_CLIENTE_B2B.md](../../docs/Lanzamiento/PROPUESTA_VALOR_CLIENTE_B2B.md)
2. `zonix-launch-piloto` — hitos y KPIs firmas/activas
3. `zonix-startup-context` — compensación Sales (USD 120 + USD 30/firma al rep)

## Playbook por fase

| Fase | Objetivo Sales | Entregables |
|------|----------------|-------------|
| T+30–T+60 | Lista prospectos + primeras visitas | 5–8 farmacias contactadas / rep |
| T+60–T+90 | Contrato marco firmado + datos pago farmacia | Farmacia con `payment_methods` activos en panel |
| Day-D | Farmacias **activas** con catálogo y farmacéutico | ≥ meta plan §1.1 acumulada |

## Guion de visita (estructura)

1. Problema: stock visible, Rx, delivery sin flota propia Zonix.
2. Propuesta: marketplace + panel commerce; farmacia aporta **farmacéutico colegiado**.
3. Economía: cuota + fee GMV (ver PROPUESTA_VALOR_CLIENTE_B2B — no inventar % nuevos).
4. Cierre: siguiente paso con fecha (firma, capacitación panel, carga catálogo).

## Objeciones frecuentes (lente)

| Objeción | Respuesta (borrador — validar con Co-CEO) |
|----------|------------------------------------------|
| «Ya tengo delivery propio» | Zonix agrega demanda digital; delivery puede ser partner o pickup |
| «Regulación recetas» | Validación por farmacéutico de la farmacia; plataforma documentada en PLAN_MODULO |
| «Comisión alta» | Comparar CAC paciente vs beneficio visibilidad (UNIT_ECONOMICS) |

## Marco SPIN (adaptado de founder-playbook — editar PROPUESTA_VALOR_CLIENTE_B2B)

Usar en **discovery call** y al ampliar el pack; no sustituye PROPUESTA_VALOR_CLIENTE_B2B §5 (cuota + % GMV).

| Fase SPIN | Preguntas ejemplo (farmacia Valencia) | Objetivo |
|-----------|--------------------------------------|----------|
| **S**ituación | ¿Cuántos pedidos digitales reciben hoy? ¿Tienen farmacéutico colegiado en turno? | Baseline sin juzgar |
| **P**roblema | ¿Pierden ventas por no aparecer en apps de delivery genéricas? ¿Rx sin flujo claro? | Dolor explícito |
| **I**mplicación | ¿Qué pasa si un competidor digital captura pacientes de su zona en 6 meses? | Urgencia moderada |
| **N**ecesidad-payoff | Si tuvieran panel + demanda Zonix sin flota propia suya, ¿qué KPI mejoraría primero (pedidos, ticket, Rx)? | Cierre hacia piloto |

**Matriz objeciones → evidencia pack** (añadir al doc B2B como subsección):

| Objeción | Evidencia / ancla | Siguiente paso |
|----------|-------------------|----------------|
| Comisión | UNIT_ECONOMICS, bandas **45/60/70 + %GMV 8/7/5** | Demo panel + waiver piloto si aplica |
| Rx / MPPS | PLAN_MODULO, PLAN_REGULATORIO | Intro farmacéutico responsable de la farmacia |
| «No tengo tiempo» | Onboarding documentado PLAN §2.3 | Fecha capacitación + carga catálogo |

## Reglas

1. **No prometer** dictamen MPPS ni plazos legales.
2. Compensación reps solo desde pack — no negociar bonos extra sin Co-CEO/CFO lens.
3. Registrar avances en CRM interno / `documentar-avances` tras visitas materializadas.

## Skills relacionadas

- `zonix-launch-piloto`
- `zonix-lanzamiento-roles`
- `zonix-regulatory-ve` (copy en material impreso)
- `zonix-lean-canvas` (segmento + problema farmacia)

## Día en la vida — dueño farmacia (UniMOOC M3)

Plantilla discovery **antes** SPIN; rellenar en notas de visita (no inventar respuestas).

| Momento del día | Preguntas mom-test (hechos pasados) |
|-----------------|-------------------------------------|
| Apertura | ¿Cuántos pedidos por WhatsApp ayer? ¿Cuántos Rx rechazados por falta de info? |
| Mediodía | ¿Cómo confirman stock hoy? ¿Quién valida receta si el titular no está? |
| Cierre | ¿Qué hacen cuando Rappi/agregador no trae pedido completo? |
| Fin de semana | ¿Pierden ventas por no aparecer en búsqueda digital local? |

**Ranking problemas** (post-visita, founder/CS): ordenar 3 dolores citados textualmente → alimentar PROPUESTA B2B §2.

## Arquetipo farmacia piloto (adaptado Jersey Square)

| Atributo | Perfil beachhead Zonix |
|----------|------------------------|
| Tamaño | Independiente 1–2 sedes Valencia metro |
| Rx | Farmacéutico colegiado en plantilla |
| Digital | WhatsApp activo; sin app propia |
| Delivery | Propio o tercero; abierto a partner Zonix |
| Anti-target | Cadena nacional año 1; farmacia sin titular Rx |
