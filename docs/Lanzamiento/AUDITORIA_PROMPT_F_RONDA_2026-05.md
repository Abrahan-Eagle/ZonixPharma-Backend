# Diagnose Prompt F — router «no sé por dónde empezar» (pasada 2 formal)

> **Fecha:** 20 mayo 2026.  
> **Re-verificado pasada 3:** 20 mayo 2026 — `php artisan test` **399 passed** @ HEAD **29ae76c** (post-commit auditorías D/E/F).  
> **Método:** Prompt F ([PROMPT_PACK_LANZAMIENTO.md](PROMPT_PACK_LANZAMIENTO.md) §213–224) + skill `zonix-lanzamiento-docs`.  
> **Contexto post-auditorías:** [AUDITORIA_PROMPT_D_RONDA_2026-05.md](AUDITORIA_PROMPT_D_RONDA_2026-05.md) (**verde**) · [AUDITORIA_PROMPT_E_RONDA_2026-05.md](AUDITORIA_PROMPT_E_RONDA_2026-05.md) (**amarillo**, P0 humano).  
> **P0:** [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) — no rellenar con IA.

---

## Resumen

| Dimensión | Lectura |
|-----------|---------|
| **Clasificación** | Pack documental **maduro** (B→C→D→E cerrados en IA). Bloqueante = **P0 founder**, no coherencia numérica ni narrativa. |
| **Próxima sesión (default)** | [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) **§1 + §1.2** — dueño **Founder**. |
| **Veredicto** | **Acción founder** — cerrar P0 antes de más Prompt C o envío institucional. |

---

## §1 Clasificación del problema

| Dimensión | Estado | Fuente |
|-----------|--------|--------|
| Coherencia numérica pack | **OK** (0 P0–P1 doc) | AUDITORIA_PROMPT_D — verde |
| Pre-reunión inversor 30 min | **Amarillo** — pack listo, P0 abiertos | AUDITORIA_PROMPT_E |
| P0 humanos (8 ítems) | **7 abiertos** + P0-06 snapshot | REGISTRO § P0; CHECKLIST §0.1 |
| Narrativa / redacción pack | **Suficiente** — no más Prompt C | MEJORAS Prompt C (×2) |
| Tracción / piloto operativo | **Pre-Day-D** — P1 farmacias, smoke E2E | REGISTRO § P1 |
| Tipo de gap actual | **Datos founder + credibilidad DD** | Prompt E §1 |

**Diagnóstico en una línea:** el cuello de botella ya **no** es la IA editando docs; es el **founder** completando VOLCADO §1–§1.2 y outreach.

---

## §2 Próxima sesión (objetivo default: preparar inversor)

| Campo | Valor |
|-------|--------|
| **Archivo** | [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) |
| **Sección** | **§1** (founder) + **§1.2** (tests / repo) |
| **Acción** | GitHub o acceso repo bajo NDA; **% dedicación** Zonix explícita; 2–3 referencias con permiso; re-run `php artisan test` + commit en §1.2 |
| **Dueño** | **Founder** |
| **P0 que cierra** | P0-01, P0-02, P0-03, P0-06 (snapshot **29ae76c** — re-ejecutar pre-reunión) |

---

## §3 Orden de 3 sesiones siguientes (ruta inversor)

Un archivo por sesión. Alineado con [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) § Próximas 3 sesiones y [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §0.5.

| Sesión | Archivo | Sección | Acción | P0 / hito |
|--------|---------|---------|--------|-----------|
| **1 (ahora)** | [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) | §1 + §1.2 | Completar filas founder + tabla tests | P0-01, P0-02, P0-03, P0-06 |
| **2** | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) | §1 + §2 | Personalizar lead; link Google Drive; email data room | P0-04 (OK pack) |
| **3** | [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) | §5–§6 | Demo **staging**; guion reunión 30 min; agendar fecha | P0-05 |

**Después de reunión inversor:** pipeline farmacias [VOLCADO](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §6 (P1-03/04) + abogado SAFE/T&C (P1-05 / P3-05).

**Pre-flight antes sesión 3:** [AUDITORIA_PROMPT_E_RONDA_2026-05.md](AUDITORIA_PROMPT_E_RONDA_2026-05.md) §2 Top 5 Q&A.

---

## §4 Rutas alternativas (otros objetivos del prompt)

Si el founder **no** prioriza inversor esta semana, usar una de estas rutas (misma regla: **un archivo por sesión**).

### 4.1 Pitch farmacia (B2B)

| Sesión | Archivo | Sección | Acción |
|--------|---------|---------|--------|
| **1** | [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) | **§8.1** SPIN | Preparar discovery call; preguntas S/P/I/N |
| **2** | [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) | **§9** | Objeciones frecuentes (comisión, Rx, competencia) |
| **3** | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) | **§2.6** + **§4** | Hitos pre-Day-D; calendario visitas T+30–T+90 |

**Cierra:** P1-03 (lista farmacias prospecto) vía [VOLCADO](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §6 — **humano**.

### 4.2 Plan Day-D (operación / producto)

| Sesión | Archivo | Sección | Acción |
|--------|---------|---------|--------|
| **1** | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) | **§4.0** | Checklist validación pre-Day-D; fila **Go Day-D** |
| **2** | [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) | §2–§3 | Cruzar plan vs código; cerrar gaps P0 producto |
| **3** | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) | **§18** | QA «listo para piloto»; smoke OTC + Rx |

**Cierra:** P1-12 smoke E2E documentado; no sustituye wire inversor (T+0).

---

## §5 Qué NO hacer ahora

| Acción | Motivo |
|--------|--------|
| **Prompt C** (más redacción pack) | Narrativa suficiente; riesgo churn sin valor |
| Editar **PROYECCION §1.1** M1–M12 | Prompt D verde — sin hallazgo P0 |
| Rellenar **VOLCADO §1–§2** con IA | P0 founder — datos humanos |
| Inventar **P0-07/08**, referencias, % tiempo | Credibilidad DD |
| Enviar data room **institucional** sin 8/8 P0 | AUDITORIA_PROMPT_E §5 |

**IA permitida:** Prompt F (routing), Prompt B/D/E re-audit si cambian fuentes canónicas, fixes I-xx puntuales.

---

## Relación con rondas previas

| Ronda | Informe | Resultado |
|-------|---------|-----------|
| Prompt F pasada 1 | [MEJORAS_PROMPT_C_RONDA_2026-05.md](MEJORAS_PROMPT_C_RONDA_2026-05.md) § Prompt F + REGISTRO § Próximas 3 sesiones | Ruta inversor (27 mayo) |
| Prompt F pasada 2 | **Este archivo** (router §1–§5) | Rutas inversor / farmacia / Day-D |
| **Prompt F pasada 3** | **Refresh P0-06** en este archivo + VOLCADO/REGISTRO/CHECKLIST | Tests **399** @ **29ae76c** (20 may 2026) |

---

*Pasada 2: plan «Prompt F diagnose pasada 2 formal». Pasada 3: refresh tests/commit. Sin ediciones founder en VOLCADO §1 (solo §1.2 snapshot).*
