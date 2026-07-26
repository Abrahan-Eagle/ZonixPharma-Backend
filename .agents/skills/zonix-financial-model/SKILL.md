---
name: zonix-financial-model
description: Modelo financiero Zonix Pharma (marketplace farmacia VE). Coherencia PROYECCION, UNIT_ECONOMICS, PRESUPUESTO; escenarios Lean/Base/Growth; Fase 0 T+90. No sustituye contador SENIAT.
metadata:
  auto_invoke: "Auditar finanzas del pack (PROYECCION, UNIT, PRESUPUESTO)"
---
# zonix-financial-model

Adaptación de [startup-financial-modeling](https://github.com/sickn33/antigravity-awesome-skills/blob/main/skills/startup-financial-modeling/SKILL.md) (community) al marketplace farmacéutico Zonix. **Siempre** invocar `zonix-startup-context` primero.

## Cuándo aplicar

- Auditar o actualizar [PROYECCION_FINANCIERA_12M.md](../../docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md), [UNIT_ECONOMICS.md](../../docs/Lanzamiento/UNIT_ECONOMICS.md), [PRESUPUESTO_12_MESES_REFERENCIA.md](../../docs/Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md).
- Responder preguntas de inversor sobre runway, burn, break-even, dilución SAFE.
- Comparar escenarios Lean / Base / Growth.

## Modelo de negocio (no SaaS)

**Tipo:** marketplace B2B2C farmacias + pacientes.

### Revenue (lado farmacia — planning actual)

```
Revenue_mes ≈ Farmacias_activas × ARPF_mes
```

- **ARPF referencia:** USD **~50/mes** (placeholder; recalibrar con GMV piloto).
- **Cobro vigente:** cuota fija **USD 25 / 40 / 55** + **% GMV** por banda — ver PROPUESTA_VALOR_CLIENTE_B2B §5.
- **Futuro:** `Net_revenue = GMV × take_rate` cuando haya GMV real; hasta entonces usar ARPF documentado.

### Revenue (GMV — año 2+)

Documentar en proyección larga; no inventar take rate sin dato en pack:

```
GMV = pedidos × ticket_promedio
Net_revenue_marketplace = GMV × take_rate  // % en B2B §5
```

### Costos

| Categoría | Componentes Zonix piloto |
|-----------|-------------------------|
| COGS / variable | Hosting, Firebase, fees mínimos por transacción manual |
| S&M | Meta Ads, vallas, **4× Sales**, CAC farmacia **139** |
| R&D / producto | Founder tech, stack IA ~425/mes, sin equipo eng grande |
| G&A | HQ casa, Co-CEO, contador/abogado honorarios, buffer inflación VE **20–25%** |

## Fase 0 (obligatorio en todo modelo Lean)

**Antes de M1 (post-Day-D):**

| Sub-fase | Outflow ref. Lean (Excel v3.9.3) |
|----------|-------------------|
| 0a T+0–30 | **33.010** (one-shots + MO parcial) |
| 0b/0c T+30–90 | **8.625** |
| **Total Fase 0** | **50.260** |
| **Wire SAFE** | **210.760** |
| **Caja Day-D** | **210.760 − 50.260 = 160.500** |

M1 = primer mes operación comercial en app (no repetir one-shots en M1–M12). Cifras **101k / 28.057 / 72.943** = `[OBSOLETO]`.

## Escenarios (P10 / P50 / P90)

| Escenario | Uso Zonix | Supuestos típicos |
|-----------|-----------|-------------------|
| **P10 conservador** | Gestión de caja | +2–4 semanas a hitos farmacias; churn +20% vs base |
| **P50 base** | Planning + board | Tabla PROYECCION §1.1 (Lean) |
| **P90 optimista** | Upside deck | Growth tier + marketing buffer 25% |

**Base/Growth:** misma curva revenue Lean; delta = burn mayor + reserva — [PRESUPUESTO §3–4](../../docs/Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md).

## Sensibilidad (lente awesome-quant)

Referencia proceso: [wilsonfreitas/awesome-quant](https://github.com/wilsonfreitas/awesome-quant) — **no** integrar zipline/backtrader ni libs quant en el repo.

Post-piloto (cuando exista GMV real), el agente puede proponer tablas what-if **solo** re-leyendo el pack:

| Variable | Rango sugerido (lente) | Fuente |
|----------|------------------------|--------|
| Farmacias activas M12 | ±10–20% vs ~151 Lean | PROYECCION §1.1 / §7 |
| ARPF | ±15% vs ~50 USD placeholder | UNIT_ECONOMICS + GMV piloto |
| CAC farmacia | ±20% vs 139 | SUPUESTO marketing |
| Churn mensual farmacia | 4%–6% (base 5%) | UNIT_ECONOMICS |

Macro externo (FRED/World Bank): [awesome-economics](https://github.com/awesomelistsio/awesome-economics) — contexto narrativo inversor; **no** sustituye cifras de PROYECCION.

Salida: tabla «si X entonces runway / M11 break-even» con cita a línea del pack; marcar `[Requiere FP&A/contador]` en ajustes fiscales.

## Checklist de coherencia (ejecutar en cada edición)

- [ ] Tiers: Lean **210.760** (Excel); Base **~157k** / Growth **~187k** = hist. hasta recalibrar
- [ ] SAFE caps: Lean **600k**; Base/Growth según ESTRUCTURA_LEGAL
- [ ] Burn Y1 Lean = **145.500** (~**12.125**/mes); no citar **90.702** / **97.290** / **8.108** como vigente
- [ ] Fase 0 **50.260** + Day-D **160.500** + reserva **15.000** = README / BRIEF
- [ ] Cash M12 y tabla §1.1 mes a mes = **`[PENDIENTE FP&A]`** (no inventar 40.831 como oficial)
- [ ] Equity Lean **~35,13%**; no **18,66%** / **29,02%** / **16,8%** como ask vigente
- [ ] CAC/LTV/payback cruzados con UNIT_ECONOMICS (UE B2B sin cambio)
- [ ] Waiver promocional B2B §11 documentado aparte (fila «con waiver» en PROYECCION)

## Métricas inversor (marketplace farmacia)

| Métrica | Fórmula / target piloto |
|---------|-------------------------|
| Burn mensual | ~**12.125** Lean Excel (revenue − opex neto en P&L) |
| Runway | Caja Day-D **160.500** / burn neto |
| LTV/CAC | **~7,2x** (UNIT_ECONOMICS) |
| Payback CAC | **~2,8 meses** |
| Farmacias activas break-even | **~243** @ ARPF 50 / burn 12.125 (`[PENDIENTE]` vs curva ~159) |

**No priorizar** en piloto: NDR, Rule of 40 SaaS, burn multiple ARR (sin ARR).

## Fundraising en el modelo

```
Dilución_ref ≈ Inversión / Cap_post_money
```

Ej. Lean: **210.760 / 600.000 ≈ 35,13%** — ver ESTRUCTURA_LEGAL para redondeo y pro-rata.

**Use of funds:** desglosar según PRESUPUESTO §2 (Fase 0, nómina, marketing, reserva); no inventar % sin ancla.

## WTP y pricing (monetizing-innovation — UNIT_ECONOMICS)

Al editar UNIT_ECONOMICS o PROPUESTA B2B §5; **no** cambiar bandas 25/40/55 ni % GMV sin decisión founder.

| Concepto | Aplicación Zonix | Regla pack |
|----------|------------------|------------|
| **Economic value** | Visibilidad digital + pedidos + menos fricción Rx | Cualitativo hasta GMV real |
| **WTP** | Techo que farmacia acepta vs cuota+GMV | Comparar con ARPF ~50 placeholder |
| **Price fence** | Bandas por tamaño farmacia / GMV | Ya en PROPUESTA B2B §5 |
| **Pilot waiver** | Descuento Fase 0 | Solo si documentado en PROPUESTA; marcar temporal |

Nota estándar para UNIT_ECONOMICS: «ARPF ~50 es **placeholder** hasta recalibrar con GMV piloto post-Day-D».

## Packaging waiver — primeras 10 farmacias (100m-offers)

Lente [founder-playbook `100m-offers`](https://github.com/getagentseal/founder-playbook) — oferta irresistible **acotada**; no ampliar sin recalcular PROYECCION.

| Elemento | Regla Zonix | Fuente pack |
|----------|-------------|-------------|
| **Oferta** | USD **0 cuota fija** meses 1–2 para **máx. 10** farmacias piloto | PROPUESTA B2B §11 |
| **Escasez** | Techo 10 firmas; no extender a cadena premium (Farmatodo/Locatel) | PROPUESTA B2B §1 |
| **Urgencia** | Ventana Fase 0 / pre-Day-D; fecha cierre en contrato | PLAN_LANZAMIENTO §3 |
| **Valor** | Panel + demanda digital vs costo app propia / comisión Rappi 25–35% | PROPUESTA B2B §2–§3 |
| **Riesgo revertido** | Salida sin penalidad meses 1–2 según contrato marco | PROPUESTA B2B §11 |

**Impacto caja (no regenerar):** PROYECCION §1.1 fila «con waiver» — ingreso acumulado año 1 **~−USD 453** vs sin waiver; caja M12 **~USD 41.756** (planning principal sigue **sin** waiver).

Al redactar copy comercial: prometer waiver **solo** si contrato marco lo refleja; tras mes 3 aplica modelo híbrido §5 B2B.

## Pricing por tipo de mercado (Steve Blank UniMOOC M6)

Zonix compite en **mercado existente** — precio/features vs agregadores; **no** educar mercado desde cero.

| Tipo mercado | Implicación pricing Zonix | Acción agente |
|--------------|---------------------------|---------------|
| Existente | Comparables Farmatodo, Rappi, cuota+GMV debe ser defendible vs take-rate agregador | Citar PROPUESTA B2B §2–§5; no inventar descuento |
| Resegmentado (nicho) | Farmacias independientes Valencia — bandas 25/40/55 | UNIT + waiver §11 |
| Nuevo | **No aplica** | No usar en pitch |

**Errores frecuentes startups (M6 — evitar en pack):**

1. Fijar precio antes de validar segmento beachhead.
2. Confundir **forma de cobro** (cuota+%) con **willingness to pay** — WTP cualitativo hasta GMV real.
3. Optimizar ingresos en spreadsheet sin farmacias activas en app.

**Get → Keep → Grow (M5 — lente CAC):**

- **Get:** CAC farmacia **139** (UNIT) — Sales físico Fase 0.
- **Keep:** churn ref. 5%; retención panel + pedidos recurrentes.
- **Grow:** ARPF ~50 placeholder; upsell banda GMV post-piloto — `[PENDIENTE GMV]`.

## Cuota de mercado realista por capacidad de canal (M6 L6.14 + M4)

Blank: la cuota alcanzable **no** sale del TAM top-down sino de **cuánto puede vender tu canal**. Al auditar PROYECCION §1.1 / PERFIL_MERCADO, verificar bottom-up:

```
Farmacias_firmadas_mes ≈ Sales_headcount × visitas_semana × tasa_cierre × 4
```

| Variable | Fuente / regla |
|----------|----------------|
| Sales headcount | **4×** (PRESUPUESTO nómina) — no asumir más sin línea de gasto |
| Visitas/semana y tasa de cierre | `[PENDIENTE Sales Lead]` hasta dato real T+60; no inventar |
| Coherencia | Curva farmacias activas (→ ~151 M11 Lean) debe ser alcanzable con la fórmula; si no, marcar incoherencia |
| LTV vs CAC antes de proyectar | LTV/CAC **~7,2x**, payback **~2,8 meses** (UNIT) — si un escenario lo rompe, señalar antes de aceptar la cuota |

### Economía del canal (M4 — directo vs indirecto)

El precio de lista no es el ingreso: descuentos + coste del canal comen margen. Aplicación Zonix (sin copiar cifras US del curso):

| Canal | Coste real a incluir | Dónde vive en pack |
|-------|----------------------|--------------------|
| **Directo B2B** (Sales propio) | Nómina 4× Sales + comisiones si las hay + CAC 139 | PRESUPUESTO S&M |
| **App / web** (paciente) | Ads + soporte CS + fees pago manual | PRESUPUESTO marketing + COGS |
| **Indirecto** (partner delivery) | Fee del partner por entrega — no es ingreso Zonix, es coste del pedido | `zonix-delivery-system`; UNIT si afecta ticket |

Regla: al proponer ingresos por canal, restar **descuento (waiver §11) + coste de canal** antes de comparar con burn; «vender más» por canal indirecto puede dar margen neto menor que directo.

## Pitfalls (evitar)

- Proyectar MRR de suscripción SaaS para farmacias.
- Omitir Fase 0 al calcular runway desde wire.
- Usar churn US enterprise en lugar de 5% documentado.
- Inventar tasas IVA/ISLR — remitir a **contador externo**.

## Salida esperada

1. Tabla de inconsistencias (archivo, línea, severidad).
2. Propuesta de corrección con cita a fuente pack.
3. Nota explícita: «Requiere validación contador» en temas fiscales VE.

## Skills relacionadas

- `zonix-startup-context` (obligatoria antes)
- `zonix-lanzamiento-roles` (lente CFO + FP&A)
- `zonix-investor-materials` (data room)
