# Auditoría forense Prompt D — coherencia numérica (ronda formal)

> **Fecha:** 20 mayo 2026.  
> **Método:** Prompt D ([PROMPT_PACK_LANZAMIENTO.md](PROMPT_PACK_LANZAMIENTO.md) §179–189) + skill `zonix-financial-model`.  
> **Fuentes canónicas:** [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0–§1.3 · [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1–§2.3 · [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §3–§6.  
> **Docs citados:** BRIEF, README, MENSAJE, ESTRUCTURA, CHECKLIST, PLAN.  
> **Baseline incoherencias:** I-01–I-16 ([INCOHERENCIAS_LANZAMIENTO_2026-05.md](INCOHERENCIAS_LANZAMIENTO_2026-05.md)).  
> **Commits pack:** `6856ce8`, `d2d1b75` (docs; sin cambio tablas M1–M12).

---

## Resumen ejecutivo

| Dimensión | Lectura |
|-----------|---------|
| **Fortalezas** | 18 anclas numéricas alineadas entre PROYECCION, PRESUPUESTO, UNIT y capa inversor (BRIEF, README, MENSAJE, ESTRUCTURA). Tiers 101/118/135, caps SAFE, Fase 0, burn por tramos y M11/M12 coherentes. |
| **Gaps** | **0 discrepancias P0–P1.** 1 observación **P2** cosmética (MENSAJE Slide 8: Growth sin % equity explícito). ARPF **~50** sigue siendo **placeholder** hasta GMV piloto (documentado en todos los docs). |
| **Riesgo inversor** | **Bajo** en cifras del pack. Riesgo residual = supuesto comercial (curva §1.1 agresiva, ARPF híbrido no medido), no contradicción doc↔doc. |

**Veredicto:** **VERDE** — 0 correcciones obligatorias. No regenerar tabla M1–M12.

---

## Tabla forense (ancla × documento)

Convención: **valor A** = fuente canónica · **valor B** = doc citado · **—** = OK.

| # | Ancla | Archivo | Línea aprox. | Valor A (canónico) | Valor B (citado) | Sev. | Corrección |
|---|-------|---------|--------------|-------------------|------------------|------|------------|
| 1 | Capital Lean | PRESUPUESTO §1 | L12 | 101.000 | 101.000 | — | — |
| 1 | Capital Lean | BRIEF § Modelo | L90 | 101.000 | 101.000 | — | — |
| 1 | Capital Lean | README § Cifras | L89 | 101.000 | 101.000 | — | — |
| 1 | Capital Lean | MENSAJE §4 Slide 6 | L104 | 101.000 | 101.000 | — | — |
| 2 | Capital Base / Growth | PRESUPUESTO §1 | L12–13 | 118.000 / 135.000 | 118.000 / 135.000 | — | — |
| 2 | Capital Base / Growth | BRIEF § tiers | L82 | 118.000 / 135.000 | 118.000 / 135.000 | — | — |
| 2 | Capital Base / Growth | ESTRUCTURA §2.3 | L92–93 | 118.000 / 135.000 | 118.000 / 135.000 | — | — |
| 3 | SAFE cap Lean/Base/Growth | PRESUPUESTO §1 | L16 | 600k / 650k / 720k | 600k / 650k / 720k | — | — |
| 3 | SAFE cap | BRIEF § Instrumento | L123 | 600k / 650k / 720k | 600k / 650k / 720k | — | — |
| 3 | SAFE cap | ESTRUCTURA §2.3 | L91–93 | 600k / 650k / 720k | 600k / 650k / 720k | — | — |
| 4 | Equity implícito | ESTRUCTURA §2.3 | L91–93 | 16,83 / 18,15 / 18,75 % | 16,83 / 18,15 / 18,75 % | — | — |
| 4 | Equity implícito | BRIEF | L125 | 16,83 / 18,15 / 18,75 % | 16,83 / 18,15 / 18,75 % | — | — |
| 4 | Equity implícito | README | L92 | 16,83 / 18,15 / 18,75 % | 16,83 / 18,15 / 18,75 % | — | — |
| 4 | Equity Growth % | MENSAJE Slide 8 | L116 | 18,75 % | 135k/720k *(sin %)* | P2 | Opcional: añadir `(~18,75%)` en Slide 8 |
| 5 | Fase 0 outflow | PROYECCION §0.1 | L18 | ~28.057 | ~28.057 | — | — |
| 5 | Fase 0 outflow | README nota | L103 | ~28.057 | ~28.057 | — | — |
| 5 | Fase 0 outflow | PRESUPUESTO §2.2 | L60 | ~9.808 one-shots | ~9.808 | — | — |
| 6 | Caja Day-D | PROYECCION §0.1 | L19 | ~72.943 | ~72.943 | — | — |
| 6 | Caja Day-D | README | L103 | ~72.943 | ~72.943 | — | — |
| 7 | Burn prom. Lean | PRESUPUESTO §2.3 | L84 | ~7.559 | ~7.559 | — | — |
| 7 | Burn prom. Lean | PROYECCION nota | L52 | 7.462/7.798/7.431 | 7.462/7.798/7.431 | — | — |
| 7 | Burn prom. Lean | BRIEF | L92 | ~7.559 | ~7.559 | — | — |
| 7 | Burn prom. Lean | UNIT §6 | L127–135 | ~7.559 | ~7.559 | — | — |
| 7 | Burn prom. Base/Growth | PRESUPUESTO §1 | L14 | ~8.059 / ~8.691 | ~8.059 / ~8.691 | — | — |
| 8 | Burn anual M1–M12 | PROYECCION §1.1 | L49 | 90.702 | 90.702 | — | — |
| 8 | Burn anual M1–M12 | PRESUPUESTO §2.4 | L91 | 90.702 | 90.702 | — | — |
| 9 | ARPF placeholder | UNIT §1 | L11 | ~50 | ~50 | — | — |
| 9 | ARPF placeholder | BRIEF | L94 | ~50 | ~50 | — | — |
| 9 | ARPF placeholder | PROYECCION §1.2 | L63 | ~50 | ~50 | — | — |
| 10 | CAC | UNIT §3 | L63 | 139 | 139 | — | — |
| 10 | CAC | BRIEF | L97 | 139 | 139 | — | — |
| 10 | CAC | CHECKLIST §7.6 | L149 | 139 | 139 | — | — |
| 11 | LTV / LTV:CAC | UNIT §4–§5 | L74–100 | 1.000 / ~7,2x | 1.000 / ~7,2x | — | — |
| 11 | LTV / LTV:CAC | BRIEF | L99–100 | 1.000 / ~7,2x | 1.000 / ~7,2x | — | — |
| 11 | LTV / LTV:CAC | README | L114–115 | ~7,2x | ~7,2x | — | — |
| 12 | Payback CAC | UNIT §3 | L28 | ~2,8 meses | ~2,8 meses | — | — |
| 13 | M11 equilibrio | PROYECCION §1.1 | L47 | 151 activas; 7.550 vs 7.431 | 151; 7.550 vs 7.431 | — | — |
| 13 | M11 equilibrio | BRIEF | L102 | M11 ~151 | M11 ~151 | — | — |
| 13 | M11 equilibrio | CHECKLIST §7.6 | L151 | M11 ~151 | M11 ~151 | — | — |
| 14 | M12 cash (sin waiver) | PROYECCION §1.3 | L84 | ~42.209 | ~42.209 | — | — |
| 14 | M12 cash (sin waiver) | BRIEF | L103 | ~42.209 | ~42.209 | — | — |
| 14 | M12 cash (sin waiver) | MENSAJE §4 | L106 | ~42.209 | ~42.209 | — | — |
| 15 | M12 cash (waiver) | PROYECCION §1.1 nota | L54 | ~41.756 | ~41.756 | — | — |
| 15 | M12 cash (waiver) | BRIEF | L103 | ~41.756 | ~41.756 | — | — |
| 16 | M12 activas | PROYECCION §1.1 | L48 | 159 | 159 | — | — |
| 16 | M12 activas | BRIEF § Mercado | L74 | ~159 | ~159 | — | — |
| 17 | DoD M6 cash | PROYECCION §1.3 | L78 | 46.395 | 46.395 | — | — |
| 17 | DoD M6 cash | PLAN §5 DoD | L195 | ≥ ~46.395 | ≥ ~46.395 | — | — |
| 18 | One-shots Fase 0 Lean | PRESUPUESTO §2.2 | L60 | ~9.808 | ~9.808 | — | — |
| 18 | Total Lean 101k | PRESUPUESTO §2.4 | L93 | 101.000 | 101.000 | — | — |

**Totales:** 44 filas verificadas · **0 P0** · **0 P1** · **1 P2** (opcional).

---

## Notas FP&A (no son incoherencias)

1. **Base/Growth** no tienen tabla M1–M12 en PROYECCION — solo delta burn + reserva (PRESUPUESTO §1.1). README documenta break-even teórico ~162 / ~174.
2. **Revenue vs. activas × ARPF ~50** puede divergir en meses tempranos (billing parcial) — PROYECCION §1.2.
3. **Waiver ~453** es proxy comercial — recalibrar con FP&A post-piloto (PROYECCION §1.1 nota).

---

## Relación con rondas previas

| Ronda | Informe | Resultado |
|-------|---------|-----------|
| Prompt D pasada 1 | [MEJORAS_PROMPT_C_RONDA_2026-05.md](MEJORAS_PROMPT_C_RONDA_2026-05.md) § Prompt D | Verde (12 anclas resumen) |
| **Prompt D pasada 2** | **Este archivo** | **Verde (44 filas forenses)** |

---

*Generado en implementación plan «Prompt D auditoría formal ampliada». Sin ediciones en PROYECCION §1.1.*
