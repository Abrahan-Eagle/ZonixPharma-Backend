---
name: zonix-launch-piloto
description: Plan de acción y ejecución del piloto Zonix Pharma. Calendario T+0 (wire) → Day-D (T+90) → M12 post-Day-D. KPIs farmacias, roles Co-CEO/Sales/CS. Invocar zonix-startup-context si hay fechas o caja.
---

# zonix-launch-piloto

Skill para **planificar y ejecutar** el lanzamiento comercial y operativo de Zonix Pharma — no para redactar el pack inversor ni para código aislado.

## Cuándo aplicar

- Armar cronograma operativo tras cierre de inversión (T+0).
- Seguimiento hitos T+30 / T+60 / Day-D.
- Coordinar Co-CEO, Sales, Marketing, CS, logística.
- Cruzar avance real vs [PROYECCION_FINANCIERA_12M.md](../../docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md) §1.1 (solo Lean tiene M1–M12 detallado).

## Obligatorio antes

1. **`zonix-startup-context`** — T+0 = wire tier; Day-D = T+90; caja Fase 0 ~28k desde 101k Lean.
2. [PLAN_LANZAMIENTO_COMERCIAL.md](../../docs/Lanzamiento/PLAN_LANZAMIENTO_COMERCIAL.md) — fuente canónica de fases.
3. [BRIEF_UNA_PAGINA.md](../../docs/Lanzamiento/BRIEF_UNA_PAGINA.md) — Definition of Done piloto.

## Convención de tiempo (no mezclar)

| Hito | Significado |
|------|-------------|
| **T+0** | Wire del capital (ej. USD 101k Lean) |
| **T+90 = Day-D** | Inicio piloto público en app = **M1** del modelo financiero |
| **Fase 0** | T+0 → T+90 (legal, equipo, tech, pre-farmacias) — **no** repetir one-shots en M1 |
| **M1–M12** | Meses **después** de Day-D |

## Fases y skills por fase

| Fase | Objetivo | Docs pack | Skills agente |
|------|----------|-----------|---------------|
| **T+0** | Wire, kick-off abogado/contador, plan interno 90 días | PLAN_LANZAMIENTO §1, MENSAJE (comunicado inversor) | `zonix-empresa-ve`, `zonix-lanzamiento-roles` |
| **T+0–T+30** | Constitución C.A., RIF, banco, contratación equipo | PLAN §2.1–2.2, ESTRUCTURA_LEGAL | `zonix-empresa-ve` |
| **T+30–T+60** | HQ, stack productivo, onboarding farmacias piloto | PLAN §2.3+, PROPUESTA_VALOR_CLIENTE_B2B | `zonix-delivery-system`, `documentar-avances` |
| **T+60–T+90** | Catálogo, pre-Day-D, QA piloto | PLAN_MODULO §18, PLAN_RX | `zonix-prescriptions`, `qa-testing-playwright` |
| **Day-D** | Lanzamiento público app Valencia metro | BRIEF, README pack | `zonix-regulatory-ve` (copy), Marketing humano |
| **M1–M12** | Escala farmacias, Meta, soporte, equilibrio ~M11 Lean | PROYECCION §1.1, UNIT_ECONOMICS | `zonix-financial-model`, `zonix-analytics` |

## KPIs piloto (planning — Lean)

Referencia [PROYECCION_FINANCIERA_12M.md](../../docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md) §1.1 (no inventar otras cifras):

- **M11:** equilibrio mensual ~**151** farmacias activas (ARPF ~50).
- **M12:** ~**159** activas; caja cierre ~**42.209** (sin waiver).
- Firmas acumuladas año 1 ref. **175** en tabla §1.1.

Si el equipo real va detrás del plan, documentar desviación y sensibilidad (ver PROYECCION §7).

## Playbook por rol (ejecución)

| Rol | Prioridad Fase 0 / Day-D | Skills de apoyo |
|-----|--------------------------|----------------|
| **Co-CEO** | Procesos, cash, reporting inversor, SLA partners | `zonix-launch-piloto`, `zonix-delivery-system` |
| **Sales B2B ×4** | Prospección, contrato marco, onboarding panel farmacia | PROPUESTA_VALOR_CLIENTE_B2B, `zonix-lanzamiento-roles` |
| **Marketing Lead** | Meta + offline valla; no paciente sin catálogo | SUPUESTO_MARKETING_OFFLINE, BRAND |
| **CS + Community** | Macros Rx, disputas, onboarding paciente | `zonix-disputes-and-refunds`, `zonix-onboarding` (Front) |
| **Coordinador Partners** | Contratos delivery, cadena frío | `zonix-delivery-system`, PROPUESTA_VALOR_TERCER_LADO |
| **Founder/CTO** | Stack, Rx, seguridad | skills producto `zonix-*` |

**Organización Fase 0 (UniMOOC M1 L1A.08):** el equipo piloto es un **customer development team**, no divisiones funcionales de empresa grande (VP ventas / VP marketing día 1 = anti-patrón Blank). Co-CEO y Sales hacen discovery directo con farmacias; los roles de la tabla son sombreros, no departamentos — no proponer organigramas corporativos en el pack hasta post-Day-D con retención probada.

## Desarrollo producto (no confundir con esta skill)

Para sprints Laravel/Flutter usar skills de código (`zonix-prescriptions`, `zonix-order-lifecycle`, `laravel-specialist`, `flutter-expert`) — ver tabla en `zonix-lanzamiento-roles`.

## Validación pre-Day-D (four-steps + mom-test)

Añadir o auditar en PLAN_LANZAMIENTO_COMERCIAL como checklist; **no** sustituye Definition of Done del BRIEF.

### Customer Development (four-steps)

| Paso | Pregunta de validación | Evidencia mínima piloto Zonix |
|------|------------------------|-------------------------------|
| 1. Customer discovery | ¿Dueño farmacia y paciente confirman dolor sin mencionar Zonix? | ≥5 entrevistas mom-test documentadas |
| 2. Customer validation | ¿Firma contrato marco + pago configurado? | Farmacia en panel con `payment_methods` |
| 3. Customer creation | ¿Primer pedido real OTC o Rx? | Orden en BD estado ≥ `pending_payment` |
| 4. Company building | ¿Procesos CS/disputas y SLA delivery? | Macros CS + partner `delivery_company` activo |

### Mom-test (entrevistas farmacia — antes de escalar Sales)

Reglas al redactar guiones en pack o VOLCADO:

- Preguntar **hechos pasados** («¿Cuántos pedidos por WhatsApp la semana pasada?»), no hipótesis («¿Usarías una app?»).
- No mencionar Zonix hasta entender flujo actual Rx y delivery.
- Registrar citas textuales en VOLCADO; la IA **no inventa** respuestas de entrevistas.

### Hipótesis explícitas y pivot (UniMOOC Steve Blank — M1)

Destilado curso [ANALISIS_FORENSE_CURSO_UNIMOOC_2026-06.md](../../docs/zonix/ANALISIS_FORENSE_CURSO_UNIMOOC_2026-06.md); usar con `zonix-lean-canvas`.

| Regla | Aplicación Zonix Fase 0 |
|-------|-------------------------|
| Hipótesis implícita → **escrita** | Cada bloque canvas con frase falsable («Las farmacias de San Diego firmarán en 30 días si…») |
| Test fuera de oficina | Entrevistas mom-test + visita Sales; no encuestas online genéricas |
| Pivot documentado | Si ≥3 entrevistas contradicen segmento o valor → pivot antes de escalar Meta Ads |

**Tipos de pivot (cuál bloque revisar):**

| Señal | Acción |
|-------|--------|
| Dueño farmacia no ve dolor Rx/digital | Revisar segmento beachhead o propuesta (canvas 2–3) |
| Firma pero no activa catálogo | Pivot canal/onboarding (canvas 5–6) |
| Paciente no repite M2 | Pivot relación o precio percepción (canvas 6–7) — **no** bajar cuota sin OK pack |

## Beachhead y post-piloto (crossing-the-chasm)

Lente [founder-playbook `crossing-the-chasm`](https://github.com/getagentseal/founder-playbook) — **después** de validar piloto, no antes de Day-D.

| Fase | Segmento | Acción | Doc pack |
|------|----------|--------|----------|
| **Beachhead (Day-D → M6)** | San Diego + Av. Bolívar Norte; farmacias independientes | Dominar NPS, Rx SLA, repeat purchase | BRIEF DoD; PLAN §4–§5 |
| **Early majority (M6+)** | Naguanagua, El Socorro, La Viña, Prebo | Expandir catálogo + Meta solo si M3 retención OK | PLAN §6 T+180→T+360 |
| **Mainstream** | Cadenas medianas / nacional | **No** en año 1; evento Enterprise tier | PROPUESTA B2B §1 |

**Reglas agente:**

1. **No** escalar marketing masivo a paciente «mainstream» sin retención y repetición probadas **M3+** post-Day-D.
2. **No** prometer expansión geográfica fuera Valencia metro en pitch pre-seed sin actualizar PERFIL_MERCADO.
3. Pragmatists (farmacias) compran cuando ven **referencias** de otras farmacias del beachhead — priorizar casos de éxito locales antes de cold national.

## Reglas

1. No mover fechas Day-D sin actualizar PROYECCION y comunicación inversor.
2. Zonix **no** opera flota propia; partners `delivery_company` / `delivery_agent`.
3. Cada farmacia aporta **farmacéutico colegiado** propio.
4. Marcar bloqueos legales `[PENDIENTE abogado/asesor]` antes de tráfico pagado masivo.

## Skills relacionadas

- `zonix-startup-context`
- `zonix-lean-canvas`
- `zonix-empresa-ve`
- `zonix-lanzamiento-roles`
- `zonix-financial-model` (seguimiento caja vs plan)
