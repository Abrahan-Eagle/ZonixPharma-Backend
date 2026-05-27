# Mejoras Prompt C — ronda `docs/Lanzamiento/` (27 mayo 2026)

> **Método:** [PROMPT_PACK_LANZAMIENTO.md](PROMPT_PACK_LANZAMIENTO.md) § C + router `zonix-lanzamiento-docs`.  
> **Pre-requisito:** ronda B [AUDITORIA_PROMPT_B_RONDA_2026-05.md](AUDITORIA_PROMPT_B_RONDA_2026-05.md); correcciones I-01–I-16 en [INCOHERENCIAS](INCOHERENCIAS_LANZAMIENTO_2026-05.md).

---

## Resumen

| Ronda | Sesiones | Ediciones |
|-------|----------|-----------|
| **1** (27 mayo) | 19 router § C | 17 ediciones; 4 «sin cambio» |
| **2** (27 mayo) | 5 secciones prioritarias | 5 archivos tocados |

| Sin Prompt C (solo D) | PROYECCION, PRESUPUESTO |
| Solo instrucciones (humano) | VOLCADO celdas P0 |
| Sin cambio ronda 1 | PROPUESTA B2B §8 SPIN, CHECKLIST §7, PROPUESTA TERCER_LADO cabecera, SUPUESTO §1.2 Bullseye |

---

## Log por sesión

| # | Archivo | Sección | Marco | Cambio aplicado |
|---|---------|---------|-------|-----------------|
| 1 | BRIEF_UNA_PAGINA.md | `## Qué es` | obviously-awesome | B2B2C + línea inversor + estado producto matizado |
| 2 | CONTEXTO_PITCH_Y_DECISIONES.md | `§2.9` | obviously-awesome | Fila Market Type **existente** |
| 3 | PERFIL_MERCADO_PILOTO.md | `§5` | competitor-matrix | Tabla matriz rápida competencia |
| 4 | UNIT_ECONOMICS.md | `§2.1` | WTP | Fila recalibración ARPF post-piloto |
| 5 | PROYECCION_FINANCIERA_12M.md | — | — | **Prompt D** — sin edición redacción |
| 6 | PRESUPUESTO_12_MESES_REFERENCIA.md | — | — | **Prompt D** — sin edición redacción |
| 7 | ESTRUCTURA_LEGAL_Y_EQUITY.md | intro | — | Ruta lectura inversor 30 min |
| 8 | MENSAJE_ENVIO…md | `§1.1` | Cialdini | Ganchos autoridad / prueba social / escasez suave |
| 9 | CHECKLIST_PRE_INVERSOR.md | `§7` | data-room | Ya completo (FAQ + §7.7 técnica) |
| 10 | PROPUESTA_VALOR_CLIENTE_B2B.md | `§8` SPIN | SPIN | Ya completo — sin cambio |
| 11 | PROPUESTA_VALOR_USUARIO_FINAL.md | `§2.2` | StoryBrand | Ya completo — sin cambio |
| 12 | PROPUESTA_VALOR_TERCER_LADO.md | cabecera | — | Ya alineado I-04 — sin cambio |
| 13 | PLAN_LANZAMIENTO_COMERCIAL.md | `§4.0` | four-steps | Fila **Go Day-D** |
| 14 | PLAN_MODULO_OPERATIVO_CLAVE.md | `§1` | — | Ya matizado I-15 — sin cambio adicional |
| 15 | PLAN_METODOS_PAGO.md | intro | — | Resumen ejecutivo flujo pagos |
| 16 | SUPUESTO_MARKETING_OFFLINE.md | `§1.2` | Bullseye | Ya completo — sin cambio |
| 17 | MONTOS_REFERENCIA_INTERNET.md | intro | — | «Cómo usar este documento» |
| 18 | CUESTIONARIO_EQUIPO_PILOTO.md | intro | mom-test | Enlace REGISTRO P0 |
| 19 | VOLCADO…md | instrucciones | — | Bloque «solo humano» + enlaces |

---

## Log ronda 2 (post I-16)

| # | Archivo | Sección | Marco | Cambio aplicado |
|---|---------|---------|-------|-----------------|
| R2-1 | CONTEXTO_PITCH_Y_DECISIONES.md | §1 Tecnología base | obviously-awesome | Staging/VPS + re-verificar tests (P0-06) |
| R2-2 | BRIEF_UNA_PAGINA.md | `## Problema que resuelve` | StoryBrand | External problem paciente/farmacia; hipótesis 15–25% |
| R2-3 | BRIEF_UNA_PAGINA.md | Pregunta + CTA | Cialdini | Ask explícito; CTA 3 pasos; sin urgencia falsa |
| R2-4 | MENSAJE_ENVIO…md | §2 email | data-room | Ruta 30 min numerada = README |
| R2-5 | README.md | § inversor 30 min | obviously-awesome | Tabla minutos + enlaces ANALISIS/ALINEACION |

---

## Próximo paso founder

1. ~~**Prompt D**~~ — hecho (§ Prompt D).
2. ~~**Prompt E**~~ — hecho (§ Prompt E + CHECKLIST §0).
3. ~~**Prompt F**~~ — hecho (§ Prompt F + REGISTRO § Próximas sesiones).
4. **Founder:** cerrar P0 en VOLCADO §1–§1.2 (sesión 1 del diagnose).
5. Revisar BRIEF en vivo antes de primera reunión.

---

## Prompt D — coherencia numérica (27 mayo 2026)

Cruce PROYECCION §0–§1.3 ↔ PRESUPUESTO §1–§2.3 ↔ UNIT §3–§6 ↔ BRIEF § Modelo financiero.

| Ancla | PROYECCION | PRESUPUESTO | UNIT / BRIEF | Estado |
|-------|------------|-------------|--------------|--------|
| Capital Lean | 101.000 | 101.000 | BRIEF, README, MENSAJE | OK |
| SAFE cap Lean | 600.000 | 600.000 | ESTRUCTURA §2 | OK |
| Fase 0 outflow | ~28.057 | §2.1 | README | OK |
| Caja Day-D | ~72.943 | — | README | OK |
| Burn prom. | ~7.559 | ~7.559 | BRIEF, CONTEXTO | OK |
| Tramos burn | 7.462 / 7.798 / 7.431 | §2.3 | BRIEF, MENSAJE | OK |
| M11 equilibrio | 151 activas; 7.550 vs 7.431 | — | UNIT §6, BRIEF | OK |
| M12 cash | ~42.209 | — | BRIEF, MENSAJE | OK |
| Waiver M12 | ~41.756 | — | PROYECCION §1.1 | OK |
| ARPF / CAC / LTV | ~50 / 139 / 1.000 | — | BRIEF, UNIT | OK |
| LTV/CAC | ~7,2x | — | BRIEF, CHECKLIST | OK |
| DoD M6 cash | 46.395 | — | PLAN §5 (I-08) | OK |

**Resultado:** **verde** — sin ediciones en tablas M1–M12.

---

## Prompt E — pre-reunión inversor (27 mayo 2026)

Gap analysis 30 min ([PROMPT_PACK_LANZAMIENTO.md](PROMPT_PACK_LANZAMIENTO.md) § E). Copia operativa en [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §0.

### 1. P0 abiertos (REGISTRO)

**P0-01** GitHub/NDA · **P0-02** % dedicación · **P0-03** referencias · **P0-04** OK founder pack · **P0-05** fecha demo · **P0-06** tests+commit · **P0-07** NDA data room · **P0-08** métricas tracción.

### 2. Top 5 Q&A

| Pregunta | Fuente respuesta |
|----------|------------------|
| Founder / tiempo completo | VOLCADO §1.1; P0-02 |
| Tracción hoy | BRIEF — pre-revenue, Day-D T+90 |
| Ask 101k / cap 600k | PROYECCION §1.3; ESTRUCTURA §2 |
| Regulación Rx | PLAN_MODULO §1; dictamen P3 |
| ¿Producción? | ALINEACION — staging; T+7–12 tiendas |

### 3. Orden data room

README § inversor (7 docs, ~30 min) = MENSAJE §2.

### 4. Riesgos envío hoy sin P0

- **Alto:** DD sin repo/tests frescos; % dedicación no declarada.
- **Medio:** sin referencias; SAFE/T&C sin sello abogado; expectativa Play Store día 1.

**Recomendación:** ángel con **P0-02 + P0-06** mínimo; institucional = **8/8 P0**.

---

## Prompt F — diagnose (27 mayo 2026)

**Objetivo:** preparar inversor (post-rondas B–E).

| Campo | Valor |
|-------|--------|
| **Clasificación** | Pack **doc maduro**; cuello de botella = **P0 humano** (no más Prompt C hasta cerrar DD founder) |
| **Tipo gap** | Datos founder + credibilidad operativa (P1), no coherencia numérica |

### Próxima sesión (1)

| Archivo | Sección | Acción | Dueño |
|---------|---------|--------|-------|
| [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) | §1 + §1.2 | GitHub, **% dedicación**, referencias, re-run `phpunit` + commit | **Founder** |

Cierra REGISTRO **P0-01, P0-02, P0-03, P0-06**.

### Sesiones 2–3 (orden)

| # | Archivo | Sección | Acción |
|---|---------|---------|--------|
| 2 | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) | §1 + §2 | Personalizar lead; link Drive; marcar P0-04 OK pack |
| 3 | [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) | §5–§6 | Demo staging + guion 30 min; programar P0-05 |

**Después de reunión:** P1 pipeline farmacias (VOLCADO §6) + abogado SAFE (P1-05 / P3-05).

---

*Rondas pack IA: B → C (×2) → D → E → F (27 mayo 2026).*
