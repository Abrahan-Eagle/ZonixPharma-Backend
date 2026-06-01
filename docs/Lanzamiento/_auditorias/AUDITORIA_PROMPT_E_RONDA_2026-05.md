# Auditoría forense Prompt E — pre-reunión inversor (pasada 2 formal)

> **Fecha:** 20 mayo 2026.  
> **Método:** Prompt E ([PROMPT_PACK_LANZAMIENTO.md](PROMPT_PACK_LANZAMIENTO.md) §194–208) + skills `zonix-investor-materials`, `zonix-fundraising-narrative`.  
> **Entradas:** [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) · [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) · [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) · [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) · [AUDITORIA_PROMPT_D_RONDA_2026-05.md](AUDITORIA_PROMPT_D_RONDA_2026-05.md) (finanzas verde).  
> **Baseline incoherencias:** I-01–I-16 ([INCOHERENCIAS_LANZAMIENTO_2026-05.md](INCOHERENCIAS_LANZAMIENTO_2026-05.md)).

---

## Resumen ejecutivo

| Dimensión | Lectura |
|-----------|---------|
| **Fortalezas** | Pack documental maduro: ruta 30 min alineada (README = MENSAJE §2), Top 5 Q&A ancladas, finanzas verificadas en Prompt D pasada 2 (verde). Narrativa staging/VPS coherente (I-05). |
| **Gaps** | **8/8 P0 humanos abiertos** en REGISTRO; **P0-06** con snapshot `6856ce8` (20 may) pero re-run obligatorio pre-reunión. Sin GitHub bajo NDA, % dedicación, referencias ni demo programada. |
| **Riesgo inversor** | **Medio** si envío institucional hoy (DD founder + credibilidad operativa). **Bajo** para ángel informal con P0-02 + P0-06 frescos. No hay contradicción doc↔doc en cifras post-D. |

**Veredicto:** **AMARILLO** — pack auditable para reunión 30 min; **no recomendado** envío institucional completo hasta cerrar P0.

---

## §1 P0 abiertos (solo REGISTRO)

Fuente: [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) § P0. **No rellenar con IA.**

| ID | Ítem | Dueño | Doc fuente | Estado (20 may 2026) |
|----|------|-------|------------|----------------------|
| P0-01 | URL GitHub o acceso repo bajo NDA | Founder | VOLCADO §1, §1.2; CHECKLIST §3 | **Abierto** |
| P0-02 | **% dedicación** Zonix vs CETIAC/otros | Founder | CHECKLIST §3; VOLCADO §1 | **Abierto** |
| P0-03 | **2–3 referencias** con permiso | Founder | CHECKLIST §3; VOLCADO §1.2 | **Abierto** |
| P0-04 | **Aprobación founder** pack antes de envío | Founder | README | **Abierto** |
| P0-05 | **Demo en vivo** — fecha programada | Founder | VOLCADO §1.2; CHECKLIST §1.2 | **Abierto** |
| P0-06 | Re-verificar **399 tests** + commit en VOLCADO §1.2 | Founder | VOLCADO §1.2; REGISTRO | **Snapshot OK** (`6856ce8`, 20 may); **re-ejecutar** antes de cada reunión |
| P0-07 | Proceso **NDA** + data room cerrado (fondo formal) | Founder + Legal | ANALISIS_FORENSE §11.1 bis | **Abierto** |
| P0-08 | **Métricas tracción** por producto si se citan | Founder | CHECKLIST §3; VOLCADO §1.2 | **Abierto** |

**Conteo:** 7 abiertos + 1 snapshot (P0-06). **Institucional = 8/8 cerrados.**

---

## §2 Top 5 preguntas inversor (30 min)

| # | Pregunta probable | Respuesta anclada | Archivo | Línea aprox. | Notas DD |
|---|-------------------|-------------------|---------|--------------|----------|
| 1 | ¿Por qué tú y a tiempo completo? | Track record 8+ años; fundador Zonix/Corral X; declarar **% dedicación** explícita (P0-02) | [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1.1 | L32 | Bloqueante governance |
| 1 | *(mismo)* | CETIAC sábados + roles director — inversor preguntará | [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §3 | L110 | Completar antes fondo |
| 2 | ¿Hay ventas / tracción hoy? | **Pre-revenue**; piloto **Day-D T+90**; no inflar GMV | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) § Qué es | L12 | Honesto |
| 2 | *(mismo)* | Stack **staging/VPS**; go-live tiendas **T+7–12** Fase 0 | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) § Qué es | L12 | I-05 matizado |
| 2 | *(mismo)* | 399 BE + 216 FE tests; smoke E2E no documentado | [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) | L63 | Parcial |
| 3 | ¿Por qué **101k** y cap **600k**? | Piso Fase 0 + 12m; **~42.209** cash M12; equilibrio **M11** (~151 activas) | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3 | L78–L84 | Tabla M1–M12 |
| 3 | *(mismo)* | Tiers 101/118/135; equity **16,83 / 18,15 / 18,75 %** | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) § Modelo + Instrumento | L82–L125 | — |
| 3 | *(mismo)* | **44 filas forenses OK** — sin P0–P1 numéricos | [AUDITORIA_PROMPT_D_RONDA_2026-05.md](AUDITORIA_PROMPT_D_RONDA_2026-05.md) | § Tabla | Post Prompt D |
| 4 | ¿Es legal el modelo Rx en VE? | Farmacéutico **de cada farmacia** valida digitalmente | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §1 | L7–L13 | Flujo en backend |
| 4 | *(mismo)* | Dictamen **abogado + farmacéutico asesor** pre-Day-D | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §1 | L10 | P3-01–P3-05 |
| 4 | *(mismo)* | SAFE/T&C **borrador** hasta sello legal | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) | intro | CHECKLIST §1 |
| 5 | ¿El producto está en producción? | **Staging/VPS** hoy; Play/App Store **T+7–12** Fase 0 | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) § Diferenciadores | L50 | No Play Store día 1 |
| 5 | *(mismo)* | **399 tests** backend — snapshot `6856ce8`; re-verificar P0-06 | [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1.2 | L40–L42 | Commit pre-reunión |
| 5 | *(mismo)* | FAQ técnica stack / Rx / repo | [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §7.7 | L209–L218 | P0-01 repo |

---

## §3 Orden data room sugerido (~30 min)

Igual que [README.md](README.md) § inversor y [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) §2.

| Min | # | Documento | Qué obtiene el inversor |
|-----|---|-----------|-------------------------|
| 5 | 1 | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) | Tesis, problema, timing, ask SAFE |
| 5 | 2 | [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) | Decisiones y posicionamiento |
| 5 | 3 | [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) | TAM/SAM/SOM, competencia |
| 5 | 4 | [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) | CAC, LTV, payback |
| 5 | 5 | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 | Tabla M1–M12 Lean |
| 3 | 6 | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) | SAFE, cap table |
| 2 | 7 | [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) | Guion + FAQ |

**Opcional DD profundo:** [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md) · [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) · [AUDITORIA_PROMPT_D_RONDA_2026-05.md](AUDITORIA_PROMPT_D_RONDA_2026-05.md).

**Tiers Base/Growth:** [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1 (sin M1–M12 mes a mes).

---

## §4 Riesgos si enviamos hoy sin cerrar P0

| Riesgo | Severidad | P0 | Mitigación |
|--------|-----------|-----|------------|
| DD técnica sin repo / commit tests fresco | **Alta** | P0-01, P0-06 | GitHub bajo NDA + `php artisan test` + commit en VOLCADO §1.2 |
| Duda governance (% tiempo founder) | **Alta** | P0-02 | Declaración por escrito en VOLCADO §1 |
| Credibilidad operativa sin referencias | Media | P0-03 | 2–3 contactos con permiso |
| Pack enviado sin OK founder | Media | P0-04 | Revisión BRIEF en vivo |
| Reunión sin demo programada | Media | P0-05 | Fecha + guion §1.2 CHECKLIST |
| Expectativa «ya en Play Store» | Media | — | Matiz staging (BRIEF L12, MENSAJE §1) — I-05 |
| SAFE/T&C como versión final | Media | P3-05 | Marcar **borrador** (CHECKLIST §1) |
| Fondo formal sin NDA / data room | **Alta** | P0-07 | NDA + permisos Drive |
| GMV/usuarios citados sin respaldo | Media | P0-08 | No citar métricas hasta datos reales |

---

## §5 Recomendación por tipo inversor

| Perfil | Mínimo antes de envío | Recomendación |
|--------|----------------------|---------------|
| **Ángel informal** | P0-02 (% dedicación) + P0-06 (re-run tests + commit) | Reunión 30 min viable con pack actual |
| **Family office / fondo pre-seed** | **8/8 P0** + P3 abogado en curso | **No enviar** data room cerrado hoy |
| **Follow-up post-reunión** | Actualizar VOLCADO §1–§2; marcar CHECKLIST §3–§4 | Sesiones 1–3 en CHECKLIST §0.5 |

---

## Relación con rondas previas

| Ronda | Informe | Resultado |
|-------|---------|-----------|
| Prompt E pasada 1 | [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §0 + [MEJORAS_PROMPT_C_RONDA_2026-05.md](MEJORAS_PROMPT_C_RONDA_2026-05.md) § Prompt E | Operativo (27 mayo) |
| **Prompt E pasada 2** | **Este archivo** | **Amarillo** — trazabilidad DD pre-reunión |
| Prompt D pasada 2 | [AUDITORIA_PROMPT_D_RONDA_2026-05.md](AUDITORIA_PROMPT_D_RONDA_2026-05.md) | Verde — cifras OK |

**Correcciones aplicadas en pasada 2:** sincronización P0-06 en CHECKLIST §0.1 (snapshot + re-run). **0 datos founder inventados.**

---

*Generado en implementación plan «Prompt E pre-reunión inversor pasada 2 formal».*
