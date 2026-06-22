# Prompt meta — Auditoría forense pack Lanzamiento (25×1 + research web + juez mayor)

> **Versión:** 1.0 — junio 2026  
> **Repo:** `ZonixPharma-Backend`  
> **Destino:** `docs/Lanzamiento/` (+ `MONTOS_REFERENCIA_INTERNET.md`, informe `docs/AUDIT_FORENSE_PACK_LANZAMIENTO_*.md`)  
> **Uso:** copiar la sección **«Pega en Cursor»** (§J) en un chat nuevo. Adjuntar con `@` los archivos de §I.

**Relacionado:**

- Mejora incremental (sin fan-out masivo) → [PROMPT_MEJORAR_PACK_LANZAMIENTO.md](PROMPT_MEJORAR_PACK_LANZAMIENTO.md)
- Creación desde cero → [PROMPT_PACK_LANZAMIENTO_INVERSOR.md](PROMPT_PACK_LANZAMIENTO_INVERSOR.md)
- Pack vigente → [../Lanzamiento/README.md](../Lanzamiento/README.md)
- Baseline auditoría → [../AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md](../AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md)
- Citas web canónicas → [../Lanzamiento/MONTOS_REFERENCIA_INTERNET.md](../Lanzamiento/MONTOS_REFERENCIA_INTERNET.md)

**Patrón JARVIS:** `fan-out-synthesize-ops` (olas + barrera + writer único) + `parallel-judge-ops` (juez mayor) + research web 2026.

---

## §A — Misión

**Misión:** Auditoría forense **v3** del pack inversor Zonix Pharma en `docs/Lanzamiento/`.

| Fase | Qué hace | Quién |
|------|----------|--------|
| **0** | Leer README, AUDIT v2, MONTOS; bloquear anclas PROYECCION | Orquestador |
| **0b** | 4 squads research web (datos **2025–2026**) → `research_json` | 4× `generalPurpose` (sin editar repo) |
| **1** | 25 doc workers (1 archivo cada uno) cruzando `research_json` | 25× `explore` readonly, **7 olas × máx. 4** |
| **2** | Juez mayor: fusionar, deduplicar, P0–P3, informe v3 | Orquestador |
| **3** | Autofix **full** (pack + MONTOS + REGISTRO), diff por archivo | **Un solo writer** (orquestador) |

**No** commit/push sin orden explícita del usuario.

---

## §B — Skills obligatorias (orquestador)

Declarar al inicio:

```
> Roles: delivery + PM inversor + technical writer
> Skills: jarvis-core → fan-out-synthesize-ops → zonix-lanzamiento-docs → zonix-startup-context → zonix-regulatory-ve + zonix-financial-model + zonix-empresa-ve → parallel-judge-ops (local)
```

Leer cada `SKILL.md` antes de lanzar workers.

**No usar Spec Kit** (`speckit-*`) para este pack — usar `zonix-lanzamiento-docs`.

---

## §C — Anclas inmutables (no negociables)

Tomar de [README.md](../Lanzamiento/README.md) § cifras y skill `zonix-startup-context`:

| Concepto | Valor / regla |
|----------|----------------|
| Tiers SAFE | **101k / 118k / 135k USD** — no recalcular PROYECCION §1.1 |
| Caps post-money | **600k / 650k / 720k** |
| ARPF piloto | **~50 USD** placeholder |
| Fase 0 Lean outflow | **~28.057**; caja Day-D **~72.943**; M12 **~42.209** |
| Equilibrio Lean | **M11**, **~151** farmacias activas |
| Tests backend | **443+** (jun 2026) — verificar con `php artisan test`, no inventar |
| Producto pitch | **solo Zonix Pharma**; Corral X solo en CV/VOLCADO |
| Marcadores | `[PENDIENTE]`, `[VERIFICAR]`, `[PENDIENTE abogado]` = válidos; no borrar sin evidencia |

**Research web:** puede actualizar **MONTOS** y notas en **PRESUPUESTO**; **no** altera PROYECCION §1.1 ni tiers sin OK usuario (ver §M).

---

## §D — Inventario 25 archivos + skill + squad research + olas

| # | Archivo | Skill worker | Squad | Ola |
|---|---------|--------------|-------|-----|
| 1 | README.md | zonix-lanzamiento-docs | R3 | 1 |
| 2 | BRIEF_UNA_PAGINA.md | zonix-fundraising-narrative | R3 | 1 |
| 3 | PROYECCION_FINANCIERA_12M.md | zonix-financial-model | R1+R2 | 1 |
| 4 | UNIT_ECONOMICS.md | zonix-financial-model | R1+R3 | 1 |
| 5 | PRESUPUESTO_12_MESES_REFERENCIA.md | zonix-financial-model | R1+R2 | 2 |
| 6 | MONTOS_REFERENCIA_INTERNET.md | zonix-financial-model | R1+R2+R3+R4 | 2 |
| 7 | CHECKLIST_PRE_INVERSOR.md | zonix-investor-materials | R4 | 2 |
| 8 | MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md | zonix-fundraising-narrative | R3 | 2 |
| 9 | VOLCADO_RESPUESTAS_CUESTIONARIO.md | zonix-lanzamiento-docs | — | 3 |
| 10 | REGISTRO_PENDIENTES_PACK.md | zonix-investor-materials | todos | 3 |
| 11 | PERFIL_MERCADO_PILOTO.md | zonix-launch-piloto | R3 | 3 |
| 12 | PLAN_LANZAMIENTO_COMERCIAL.md | zonix-launch-piloto | R1+R3 | 3 |
| 13 | GUIA_DISCOVERY_CALLE_FASE0.md | zonix-b2b-sales | R1 | 4 |
| 14 | SUPUESTO_MARKETING_OFFLINE.md | zonix-lanzamiento-docs | R1+R3 | 4 |
| 15 | PLAN_METODOS_PAGO.md | zonix-payments | R1+R4 | 4 |
| 16 | PLAN_MODULO_OPERATIVO_CLAVE.md | zonix-lanzamiento-docs | R2+R4 | 4 |
| 17 | ESTRUCTURA_LEGAL_Y_EQUITY.md | zonix-empresa-ve | R4 | 5 |
| 18 | ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md | zonix-lanzamiento-docs | R2 | 5 |
| 19 | CONTEXTO_PITCH_Y_DECISIONES.md | zonix-startup-context | R3 | 5 |
| 20 | PROPUESTA_VALOR_USUARIO_FINAL.md | zonix-lanzamiento-docs + zonix-regulatory-ve | R3 | 5 |
| 21 | PROPUESTA_VALOR_CLIENTE_B2B.md | zonix-b2b-sales | R3 | 6 |
| 22 | PROPUESTA_VALOR_TERCER_LADO.md | zonix-lanzamiento-docs | R3 | 6 |
| 23 | BANCO_PROBLEMAS_NECESIDADES_FARMACIA.md | zonix-b2b-sales | R3 | 6 |
| 24 | CUESTIONARIO_EQUIPO_PILOTO.md | zonix-lanzamiento-docs | R1 | 6 |
| 25 | RESUMEN_ALIADO_GABRIEL_BARRIOS.md | zonix-lanzamiento-docs | — | 7 |

**Reglas de olas:**

- Máximo **4** workers `Task` por mensaje (barrera entre olas).
- Ola 7 = archivo 25 + **re-run** de workers que fallaron o devolvieron JSON inválido.
- Subagentes `explore` = **readonly**, **sin internet**.

---

## §E — Plantilla prompt por doc worker

Sustituir `{FILE}`, `{SKILL}`, `{SQUAD}`, `{RESEARCH_JSON_SNIPPET}`.

```markdown
Eres el auditor forense **exclusivo** de `docs/Lanzamiento/{FILE}`.

**Alcance:** Solo audita `{FILE}`. Puedes leer README.md y REGISTRO_PENDIENTES_PACK.md para contexto. NO audites otros docs.

**Skills:** {SKILL} + zonix-startup-context (anclas §C).

**Input research (squad {SQUAD}):**
{RESEARCH_JSON_SNIPPET}

**Rúbrica (11 criterios, 0–2 cada uno → score_total 0–22):**
1. Exactitud numérica vs anclas README
2. Coherencia interna (fechas, nombres, roles)
3. Coherencia cross-ref (links, "ver doc X")
4. Completitud vs CHECKLIST / REGISTRO
5. Tono inversor (sin hype, sin claims médicos ilegales)
6. Regulatorio VE (MPPS/INHRR/Rx) — lens zonix-regulatory-ve
7. Anti-patrones Eats / CorralX mezclados en pitch de producto
8. Placeholders y [PENDIENTE] bien usados
9. Accionabilidad (¿founder sabe qué hacer?)
10. Delta vs AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22 (regresión o nuevo)
11. Actualidad web 2026 — ¿fuentes/costos vigentes vs research_json? ¿falta fila en MONTOS?

**Salida OBLIGATORIA (JSON válido, sin markdown fence extra):**
{
  "file": "{FILE}",
  "score_total": 0,
  "findings": [
    {
      "id": "F1",
      "severity": "P0|P1|P2|P3",
      "type": "error|incoherence|gap|style|regression|web_stale|web_missing",
      "line_ref": "§ o línea aprox",
      "claim": "...",
      "evidence": "...",
      "fix_proposal": "texto sugerido o acción",
      "cross_docs": ["otro.md"]
    }
  ],
  "missing_sections": [],
  "web_gaps": [
    {
      "topic": "...",
      "suggested_source_query": "...",
      "pack_gap": "doc/sección que falta"
    }
  ],
  "strengths": []
}

**Prohibido:** inventar cifras, marcar OK sin cita, editar archivos, sustituir PROYECCION §1.1 con datos web.
```

**Parámetros Task:** `subagent_type=explore`, `readonly=true`, `run_in_background=false`.

---

## §F — Juez mayor (orquestador, post-barrera olas 1–7)

1. Recibir **4× `research_json`** + **25× JSON** doc workers.
2. **Fusionar** hallazgos web + doc; deduplicar (mismo costo en MONTOS + PRESUPUESTO = 1 finding maestro con `cross_docs`).
3. **Resolver conflictos** (worker A OK vs worker B P0) → re-lectura puntual del orquestador.
4. **Matriz P0–P3:**
   - **P0:** cifra contradictoria, claim falso, link roto crítico, dato legal inventado, fuente web obsoleta >12 meses sin `[VERIFICAR]`
   - **P1:** incoherencia cross-doc material, gap due diligence, costo operativo desactualizado vs mercado 2026
   - **P2:** copy, formato, claridad, fila MONTOS sin fecha consulta
   - **P3:** nice-to-have
5. Comparar con [AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md](../AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md): marcar **regresiones v3**.
6. Emitir `docs/AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-{fecha}.md`:
   - Resumen ejecutivo (5 bullets)
   - Tabla findings maestros (id, severity, files, fix)
   - Score por archivo
   - Lotes autofix (A=P0 … D=P3)
   - **Anexo Research 2026:** URL, fecha consulta, dato, acción
7. Descartar datos web sin URL, sin fecha o de foros anónimos (`parallel-judge-ops`: real vs ruido).

---

## §G — Autofix full (writer único)

Tras informe juez y **antes de commit**:

1. Solo el **orquestador** edita archivos — no workers.
2. Aplicar fixes **P0 → P1 → P2 → P3**; respetar anclas §C.
3. Actualizar `REGISTRO_PENDIENTES_PACK.md` para fixes documentales; **no** cerrar pendientes humanos (RIF, abogado) sin evidencia.
4. Actualizar `MONTOS_REFERENCIA_INTERNET.md`: nuevas filas, `Última actualización` jun 2026, marcar filas stale. Si implica partida presupuestaria → nota en PRESUPUESTO **sin** alterar totales PROYECCION.
5. Gaps sin evidencia → fila REGISTRO `[VERIFICAR web 2026-Q2]`.
6. Mostrar **diff por archivo** al usuario.
7. **No** commit/push hasta OK explícito.
8. Si >10 edits o >5 filas MONTOS nuevas → segunda pasada juez (delta post-fix).

---

## §H — Verificación post-autofix

- Grep anti-regresión: `399`, `24 documento`, tiers distintos a 101/118/135
- `php artisan test` — contar passed vs claim en pack
- `flutter test` si el pack cita Front
- Spot-check: 3 URLs de MONTOS con fetch (no rotas)
- Informe final: sección **Metodología v3** (squads, olas, autofix lotes)

---

## §L — Fase Research Web 2026 (4 squads, **antes** olas doc)

**Objetivo:** datos externos actuales (preferir **2025–2026**) para validar, completar o marcar obsoleto lo del pack.

| Squad | ID | Skills | Queries obligatorias (mínimo) | Docs impactados |
|-------|-----|--------|------------------------------|-----------------|
| Macro VE | R1 | zonix-financial-model, zonix-empresa-ve | BCV inflación mensual 2026; salarios VE USD; alquiler San Diego/Carabobo; tipo cambio; costo constitución C.A. Valencia | PRESUPUESTO, MONTOS §2–3–5–6, CUESTIONARIO |
| SaaS / Infra | R2 | zonix-financial-model | Pusher, Firebase Blaze/SMS VE, VPS, Workspace, GitHub Team, Maps — **pricing oficial** | MONTOS §4, PLAN_MODULO, ALINEACION |
| Mercado / Competencia | R3 | zonix-launch-piloto, zonix-regulatory-ve | TAM pharma VE Cifar/IQVIA 2025–2026; apps Farmatodo/Locatel/delivery Rx; Meta Ads CPM VE si hay dato público | PERFIL_MERCADO, BRIEF, propuestas valor, BANCO_PROBLEMAS |
| Regulatorio / Legal | R4 | zonix-regulatory-ve, zonix-legal-contracts-ve, zonix-empresa-ve | MPPS/INHRR receta digital; datos salud VE; e-commerce farmacia; SAFE LatAm 2026 (lente, no dictamen) | CHECKLIST, ESTRUCTURA_LEGAL, PLAN_METODOS_PAGO, PLAN_MODULO |

**Lanzamiento:** 4× `Task` en **un solo mensaje**, `subagent_type=generalPurpose`, instrucción **no editar repo**, usar `WebSearch` + `WebFetch`.

**Plantilla squad:**

```markdown
Investiga en web **solo** el dominio {SQUAD_ID} para Zonix Pharma (marketplace farmacéutico VE, piloto Valencia).

1. Lee `docs/Lanzamiento/MONTOS_REFERENCIA_INTERNET.md` (secciones relevantes) + docs impactados — solo lectura.
2. WebSearch/WebFetch: mínimo **5 fuentes** con URL (oficial > prensa sector > estimado etiquetado).
3. Contrasta pack vs web: ok | stale | missing | conflict.
4. **No** recalcular PROYECCION. Propón filas MONTOS o [VERIFICAR].

Salida research_json:
{
  "squad": "{SQUAD_ID}",
  "consulted_at": "2026-06-XX",
  "findings": [
    {
      "claim": "...",
      "value": "...",
      "unit": "USD|%|count",
      "source_url": "https://...",
      "source_date": "YYYY-MM",
      "confidence": "high|medium|low",
      "pack_status": "ok|stale|missing|conflict",
      "pack_files": ["MONTOS_REFERENCIA_INTERNET.md"],
      "action": "update_montos|add_registro|note_only"
    }
  ],
  "new_topics_not_in_pack": [
    {
      "topic": "...",
      "why_it_matters": "...",
      "suggested_doc": "MONTOS|REGISTRO|CHECKLIST|new_section"
    }
  ]
}
```

**Prioridad fuentes:** BCV, MPPS, INHRR, Cifar, pricing oficial SaaS, Computrabajo/Indeed VE, Banca y Negocios / El Nacional (economía).

**Gaps típicos a buscar si no están en pack:**

- SMS Firebase / Phone Auth costo VE 2026
- Comisiones Pago Móvil / transferencia BDV
- Competidores digitales pharma VE (Farmatodo app, Locatel online, terceros delivery Rx)
- Habilitación comercio electrónico farmacéutico VE → `[PENDIENTE abogado]`
- Seguro responsabilidad / errores dispensación marketplace
- Tarifas notaría / registro mercantil Carabobo 2026

---

## §I — Referencias @ (adjuntar al chat)

```
@ZonixPharma-Backend/docs/Lanzamiento/
@ZonixPharma-Backend/docs/Lanzamiento/MONTOS_REFERENCIA_INTERNET.md
@ZonixPharma-Backend/docs/Lanzamiento/README.md
@ZonixPharma-Backend/docs/Lanzamiento/REGISTRO_PENDIENTES_PACK.md
@ZonixPharma-Backend/docs/AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md
@ZonixPharma-Backend/docs/PLAN_REGULATORIO_PHARMA_VE.md
@ZonixPharma-Backend/docs/plantillas/PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md
@ZonixPharma-Backend/.agents/skills/zonix-lanzamiento-docs/SKILL.md
@ZonixPharma-Backend/.agents/skills/zonix-startup-context/SKILL.md
@ZonixPharma-Backend/AGENTS.md
```

---

## §J — Pega en Cursor (one-liner + procedimiento)

Copia desde aquí:

---

**Auditoría forense v3 pack Lanzamiento Zonix Pharma**

Ejecuta [docs/plantillas/PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md](PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md) completo (§A–§M).

**Secuencia obligatoria:**

1. Fase 0 — Leer README, AUDIT 2026-06-22, MONTOS; declarar Roles + Skills §B.
2. Fase 0b — 4 squads research web (R1–R4) en paralelo → 4× `research_json` §L.
3. Fase 1 — 25 doc workers §E en **7 olas** §D (máx. 4 Task/mensaje); pasar snippet research a cada worker.
4. Fase 2 — Juez mayor §F → informe `AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-{hoy}.md`.
5. Fase 3 — Autofix full §G (pack + MONTOS + REGISTRO) → diff por archivo.
6. Verificación §H.

**Reglas:**

- Anclas PROYECCION §C — no recalcular tiers 101k/118k/135k.
- Autofix full con diff; **sin commit/push**.
- Delta vs AUDIT 2026-06-22.
- Producto pitch = solo Zonix Pharma.

**Primera acción:** Fase 0b — lanzar los 4 squads research en un mensaje. Luego ola 1 doc workers.

---

## §K — Anti-patrones

- Un solo agente leyendo los 25 archivos (viola fan-out)
- 25 workers editando en paralelo (viola writer único)
- Recalcular PROYECCION §1.1 o tiers SAFE desde web
- Usar Spec Kit para Lanzamiento
- Cerrar `[PENDIENTE abogado]` con paráfrasis web
- Dato web sin URL / sin fecha / blog anónimo
- Duplicar research en 25 doc workers (solo 4 squads centralizados)
- Subagente `explore` para research web (no tiene internet — usar `generalPurpose`)

---

## §M — Reglas research vs modelo financiero

| Permitido | Prohibido sin OK usuario |
|-----------|---------------------------|
| Actualizar fila MONTOS + URL + fecha consulta | Cambiar PROYECCION §1.1 Lean/Base/Growth |
| Nota "benchmark web 2026" en PRESUPUESTO | Cambiar tiers 101k / 118k / 135k |
| `[VERIFICAR web 2026-Q2]` en REGISTRO | Cerrar pendiente legal con texto web |
| Nueva sección en MONTOS o CHECKLIST | Dictamen MPPS/INHRR como verdad legal |
| `new_topics_not_in_pack` en informe juez | Inventar K-factor o tracción piloto |

---

*Generado por JARVIS — plantilla auditoría forense v3 pack Lanzamiento Zonix Pharma.*
