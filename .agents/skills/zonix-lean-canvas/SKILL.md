---
name: zonix-lean-canvas
description: Lean Canvas operativo Zonix Pharma (Steve Blank UniMOOC). Rellena y valida los 9 bloques para piloto Valencia B2B2C. Use when canvas, modelo de negocio, hipótesis por bloque, socios clave o mercado bilateral. Invocar zonix-startup-context primero; cifras solo del pack.
metadata:
  auto_invoke: "Lean Canvas / modelo negocio piloto"
---
# zonix-lean-canvas

Destilado del curso **UniMOOC «Cómo crear tu Startup»** (Steve Blank) — bloques Canvas M1/M6/M7. **No** sustituye PROYECCION ni PROPUESTA B2B; es plantilla **cualitativa** pre-Day-D.

## Cuándo aplicar

- Workshop Fase 0: alinear equipo en modelo antes de escalar Sales/Marketing.
- Auditar coherencia entre pack Lanzamiento y realidad operativa.
- Preparar pivot documentado (qué bloque del canvas cambia).
- Onboarding Co-CEO / Sales: una página del negocio.

## Obligatorio antes

1. **`zonix-startup-context`** — Market Type existing + bilateral; tiers capital.
2. [BRIEF_UNA_PAGINA.md](../../docs/Lanzamiento/BRIEF_UNA_PAGINA.md) — DoD piloto.
3. Router startup: [SKILLS_STARTUP_USAR_NO_USAR.md](../../docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md).

## Plantilla — 9 bloques (adaptado Zonix)

Rellenar en español; **sin inventar cifras** — usar `[PENDIENTE]` o enlace a pack.

| # | Bloque Canvas | Pregunta guía Zonix | Fuente pack / skill |
|---|---------------|---------------------|---------------------|
| 1 | **Problema** | ¿Qué duele a farmacia independiente y paciente Valencia (Rx, stock, delivery)? | PROPUESTA_USUARIO_FINAL, PROPUESTA B2B |
| 2 | **Segmentos** | Beachhead: farmacias San Diego / Av. Bolívar; paciente urbano metro | PERFIL_MERCADO, `zonix-launch-piloto` |
| 3 | **Propuesta única de valor** | Marketplace + farmacéutico local; pagos manuales VE; sin flota Zonix | CONTEXTO_PITCH |
| 4 | **Solución** | App Flutter + panel commerce + Rx validation + partners delivery | ALINEACION producto |
| 5 | **Canales** | Sales B2B físico; app paciente; Meta Ads post-Day-D — costear el canal (directo vs partner): § economía del canal en `zonix-financial-model` | PLAN_LANZAMIENTO, Bullseye en `zonix-lanzamiento-docs` |
| 6 | **Relación cliente** | Self-service panel farmacia; CS paciente; farmacéutico valida Rx | — |
| 7 | **Fuentes de ingreso** | Cuota **45/60/70 + %GMV 8/7/5**; ARPF ~52 placeholder | PROPUESTA B2B §5, UNIT_ECONOMICS |
| 8 | **Estructura de costes** | Fase 0 ~28k; burn Lean; nómina piloto | PROYECCION, PRESUPUESTO |
| 9 | **Métricas clave** | Farmacias activas, pedidos, Rx SLA — **no** MRR SaaS | PROYECCION §1.1 |
| + | **Ventaja injusta** | Stack en producción; earned secret VE pagos/Rx | CONTEXTO_PITCH §1 |
| + | **Socios clave** | `delivery_company`, contador, abogado, farmacéuticos por farmacia | PLAN, `zonix-delivery-system` |

## Mercado bilateral (M3 UniMOOC)

Zonix conecta **dos segmentos** con valor distinto:

| Lado | Job-to-be-done | Hipótesis a testear primero |
|------|----------------|----------------------------|
| **Farmacia (B2B)** | Más pedidos digitales sin app propia | ¿Firma contrato + carga catálogo? |
| **Paciente (B2C)** | OTC/Rx con confianza y tracking | ¿Repite compra M2 post-Day-D? |

**Chicken-and-egg Fase 0:** priorizar **≥N farmacias** con catálogo antes de paid masivo paciente (`zonix-launch-piloto` beachhead).

## Workflow — validar canvas (checklist)

- [ ] Cada bloque tiene **hipótesis explícita** (no adjetivos vagos).
- [ ] Market Type = **existente** + nicho resegmentado (no «nuevo océano»).
- [ ] Ingresos alineados a bandas pack — si difieren, marcar `[Revisión founder]`.
- [ ] Socios clave ≠ cadenas nacionales año 1 (asimetría M7: socios iniciales ≠ año 2).
- [ ] Cruzar con four-steps en `zonix-launch-piloto` (discovery → validation).
- [ ] Tras 5+ entrevistas mom-test, actualizar bloques 1–3 antes de pivot.

## Pivot — qué bloque tocar (Steve Blank L1C.06)

| Señal | Pivot típico | Bloque canvas |
|-------|--------------|---------------|
| Segmento no paga / no firma | Customer segment pivot | 2 |
| Valor no resonó en entrevistas | Value proposition pivot | 3 |
| Canal no escala | Channel pivot | 5 |
| Modelo ingreso no cierra unit economics | Revenue pivot | 7 |
| Coste estructural inviable | Cost pivot | 8 |

Documentar pivot en `documentar-avances` + actualizar pack solo con OK founder.

## Anti-patrones

| Evitar | Usar en su lugar |
|--------|------------------|
| Canvas US genérico (Jersey Square pricing) | Analogía Valencia; cifras pack |
| Rellenar todo antes de salir a entrevistas | Bloques 1–3 + hipótesis; resto iterativo |
| Blue ocean «creamos categoría» | `zonix-startup-context` Market Type |
| GMV/take rate inventados | ARPF placeholder hasta piloto |

## Referencias

- Extractos curso: [references/unimooc-modulos.md](references/unimooc-modulos.md)
- Router: [SKILLS_STARTUP_USAR_NO_USAR.md](../../docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md)

## Skills relacionadas

- `zonix-startup-context` (obligatoria)
- `zonix-launch-piloto` (four-steps, pivot)
- `zonix-b2b-sales` (segmento farmacia)
- `zonix-financial-model` (bloques 7–8 numéricos)
- `zonix-fundraising-narrative` (bloque 3 en pitch)
