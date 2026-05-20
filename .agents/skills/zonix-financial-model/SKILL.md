---
name: zonix-financial-model
description: Modelo financiero Zonix Pharma (marketplace farmacia VE). Coherencia PROYECCION, UNIT_ECONOMICS, PRESUPUESTO; escenarios Lean/Base/Growth; Fase 0 T+90. No sustituye contador SENIAT.
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

| Sub-fase | Outflow ref. Lean |
|----------|-------------------|
| 0a T+0–30 | ~13.133 (one-shots ~9.808 + burn parcial) |
| 0b T+30–60 | 7.462 |
| 0c T+60–90 | 7.462 |
| **Total Fase 0** | **~28.057** |
| **Caja Day-D** | **101.000 − 28.057 ≈ 72.943** |

M1 = primer mes operación comercial en app (no repetir one-shots en M1–M12).

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

- [ ] Tiers nombrados: Lean **101k**, Base **118k**, Growth **135k**
- [ ] SAFE caps: 600k / 650k / 720k alineados con ESTRUCTURA_LEGAL
- [ ] Suma burn mensual §1.1 = total año 1 declarado (**90.702** Lean vigente)
- [ ] Fase 0 + caja Day-D + cierre M12 consistentes con README pack
- [ ] ARPF y farmacias activas M11 equilibrio (~151) coherentes con burn tramo C (**7.431**)
- [ ] CAC/LTV/payback cruzados con UNIT_ECONOMICS
- [ ] Waiver promocional B2B §11 documentado aparte (fila «con waiver» en PROYECCION)

## Métricas inversor (marketplace farmacia)

| Métrica | Fórmula / target piloto |
|---------|-------------------------|
| Burn mensual | Revenue − expenses (negativo hasta M11 Lean) |
| Runway | Caja / burn neto |
| LTV/CAC | **~7,2x** (UNIT_ECONOMICS) |
| Payback CAC | **~2,8 meses** |
| Farmacias activas break-even | **~151** (Lean M11) |

**No priorizar** en piloto: NDR, Rule of 40 SaaS, burn multiple ARR (sin ARR).

## Fundraising en el modelo

```
Dilución_ref ≈ Inversión / Cap_post_money
```

Ej. Lean: 101k / 600k ≈ 16,8% — ver ESTRUCTURA_LEGAL para redondeo y pro-rata.

**Use of funds:** desglosar según PRESUPUESTO §2 (Fase 0, nómina, marketing, reserva); no inventar % sin ancla.

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
