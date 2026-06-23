# Auditoría forense v3 — Pack `docs/Lanzamiento` (27 archivos `.md`)

> **Fecha:** 23 junio 2026  
> **Predecesor:** [AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md](AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md) (v2 — 25 archivos)  
> **Alcance:** Fases 0 → 0c → 0b → 1 → 2 (**informe only**). **Sin autofix, sin commit.**  
> **Prompt:** [plantillas/PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md](plantillas/PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md) v2.0  
> **Modelo:** Excel v3.8.2 verificado con `verify_modelo_financiero.py` (exit **0**)

---

## Resumen ejecutivo

| Métrica | v2 (22-jun) | v3 (23-jun) |
|---------|-------------|-------------|
| Archivos `.md` auditables | 25 | **27** (+MODELO_FINANCIERO.md, +CENSO_FARMACIAS…) |
| P0 documentales (numéricos / tiers) | 0 | **9+** (tiers obsoletos + MENSAJE ~80 activas + caps ~908k/~1.27M) |
| P0 humanos (REGISTRO) | 8 | **8** (sin inventar datos) |
| Excel v3.8.2 verify | N/A | **Verde** (68 checks OK) |
| Veredicto DD numérica pack | Verde-ámbar | **Ámbar → Verde-ámbar alto** post-Fase 3 |

**Conclusión (post-Fase 3 — 23 jun 2026):** Autofix aplicado en **27 `.md`** + **`.fods`** regenerado. P0 documentales numéricos **cerrados** (tiers ~112/157/187, Fase 0 **33.835**, Day-D **78.153**, activas M12 **~159**, caps **600k / ~912.814 / ~1.205.345**). **P0 humanos REGISTRO (8)** y **P3-07 dictamen** siguen abiertos.

**Conclusión original v3 (pre-fix):** Excel **v3.8.2** y docs **canon** (README § cifras, MODELO.md, CHECKLIST, BRIEF tabla central, PROYECCION §0–§1.1) están **alineados**. Dos frentes P0:

1. **Migración tiers incompleta** — 6 docs operativos + `.fods`/ODS con **101/118/135k** y **28.057 / 101.000** ([PLAN_LANZAMIENTO](Lanzamiento/PLAN_LANZAMIENTO_COMERCIAL.md), SUPUESTO, PERFIL, PROP_USUARIO, CUESTIONARIO, REGISTRO).
2. **Pitch desactualizado** — [MENSAJE](Lanzamiento/MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) §4/§7 cita **~80 activas M12** (canon **~159**) y caps **~908k / ~1.270M** (canon **~913k / ~1.205M**); mismo patrón caps en README §7 L131.

**P1 transversal:** [PROYECCION](Lanzamiento/PROYECCION_FINANCIERA_12M.md) **truncada** (faltan §2, §3.3, §4 contingencia) con cross-refs rotos desde BRIEF/CHECKLIST; [BRIEF](Lanzamiento/BRIEF_UNA_PAGINA.md) sensibilidad P10/P90 **stale** (AUD-02); [PERFIL](Lanzamiento/PERFIL_MERCADO_PILOTO.md) gate M6 **48.311** (no 46.395) + equilibrio mal ubicado en M11.

**Acción inmediata (Fase 3):** ✅ **Aplicada** — ver sección **Fase 3 aplicada** abajo. Pendiente: OK founder para commit.

---

## Fase 3 aplicada (23 jun 2026)

| Lote | Alcance | Estado |
|------|---------|--------|
| **A + A′** | Tiers, pitch ~159, caps, README 27, REGISTRO | ✅ |
| **B** | `generate_modelo_financiero_ods.py` + `.fods` v3.8.2 | ✅ |
| **C** | ALINEACION, CONTEXTO, VOLCADO, PLAN_MODULO P3-07 | ✅ |
| **D** | PROYECCION §3–§6 stubs, BRIEF sensibilidad, UNIT §6, PROP_B2B §11, PRESUPUESTO §2.3.1 | ✅ |
| **E** | MONTOS, PLAN_METODOS, GUIA, PROP_USUARIO, BANCO, ESTRUCTURA | ✅ |

**Verificación post-fix:**

| Check | Resultado |
|-------|-----------|
| Grep anti-regresión `101k/118k/135k/28.057/908k/650k/720k` | ✅ **0** en pack (salvo REGISTRO histórico AUD-v2-04 cerrado) |
| `verify_modelo_financiero.py` | ✅ exit **0** |
| Promedio score pack (estimado post-fix) | **≥21/24** (P0 doc cerrados; P0 humanos abiertos) |

**Findings cerrados (muestra):** F-P0 tiers · F-P0 pitch ~80 · F-P0 caps · F-P1 ALINEACION Fase0/Day-D · F-P1 CONTEXTO M1 ~40 · F-P1 UNIT §6 BE ~160 · F-P1 PROYECCION stubs · F-P2 BRIEF sensibilidad · AUD-v2-04 · AUD-v3-P0-01

**Siguen abiertos (founder/externo):** P0-01…P0-08 REGISTRO · P0-06 refresh tests · P3-07 dictamen retención · AUD-02/04/05 FP&A · smoke Rx E2E

---

## Anclas inmutables v3.8.2 (§C prompt)

| Concepto | Lean (canon) |
|----------|--------------|
| Capital SAFE | **~USD 111.988** *(≈112k)* |
| SAFE cap | **600.000** |
| Fase 0 | **33.835** |
| Caja Day-D | **78.153** |
| Burn prom. mensual | **~8.108** |
| Burn anual M1–M12 | **97.290** |
| Revenue Y1 | **59.968** |
| FCF Y1 | **−37.322** |
| Cash M12 P50 | **40.831** |
| ARPF | **~50** |
| Activas M12 | **~159** |
| Tests BE | **443+** |

**Tiers obsoletos (P0 si aparecen sin contexto histórico):** 101k / 118k / 135k · Fase 0 **28.057** · Day-D **72.943** · M12 **42.209** · burn **7.559** · caps **650k / 720k**.

**Jerarquía verdad:** README → MODELO.md + verify → PROYECCION → MONTOS.

---

## Fase 0c — `model_verify_json`

```json
{
  "model_version": "v3.8.2",
  "verified_at": "2026-06-23",
  "verify_exit_code": 0,
  "verify_script": "docs/Lanzamiento/_tools/verify_modelo_financiero.py",
  "checks_passed": 68,
  "anchors_lean": {
    "safe": 111988,
    "safe_cap": 600000,
    "fase0": 33835,
    "day_d_cash": 78153,
    "burn_y1": 97290,
    "burn_avg_monthly": 8108,
    "rev_y1": 59968,
    "fcf_y1": -37322,
    "cash_m12_p50": 40831,
    "equity_pct": 0.1866
  },
  "tiers_burn_avg": {
    "lean": 8108,
    "base": 10898,
    "growth": 12698,
    "blitz": 11998
  },
  "tiers_capital": {
    "lean": 111988,
    "base": 157268,
    "growth": 187478,
    "blitz": 185000
  },
  "layout": {
    "esta_compact": true,
    "burn_row": 58,
    "simulator_row": 58,
    "col_j_no_circular": true
  },
  "warnings": [
    "Abrir xlsx en Excel para recalcular caché fórmulas 4 PCs / % Hoja3",
    "Fase0+Burn+Reserva ≈ 118% SAFE — trampa reunión documentada (no sumar en pitch)"
  ]
}
```

---

## Delta vs informe v2 (22-jun)

### Mejoras v3 (nuevo)

| ID | Hallazgo | Estado v3 |
|----|----------|-----------|
| AUD-v3-01 | Modelo Excel **v3.8.2** + verify automatizado 68 checks | ✅ Exit 0 |
| AUD-v3-02 | README / BRIEF / PROYECCION / MODELO.md / CHECKLIST migrados a **112/157/187k** | ✅ Verificado grep |
| AUD-v3-03 | Inventario pack **27** `.md` + MODELO_FINANCIERO.md canon | ✅ README § mantenimiento |
| AUD-v3-04 | CENSO_FARMACIAS_CARABOBO_FASE0.md en pack | ✅ Nuevo doc ola 7 |

### Regresiones v3 (nuevo — P0)

| ID | Hallazgo | Archivos |
|----|----------|----------|
| **AUD-v3-P0-01** | Tiers **101k/118k/135k** sin migrar | PLAN_LANZAMIENTO, SUPUESTO, PERFIL, PROP_USUARIO, CUESTIONARIO, REGISTRO §backlog |
| **AUD-v3-P0-02** | Fase 0 **28.057** y wire **101.000** obsoletos | PLAN_LANZAMIENTO §convención + §wire |
| **AUD-v3-P0-03** | Artefacto **`.fods`** y `generate_modelo_financiero_ods.py` con 101k / 72943 | `_tools/` (no auditado como .md; incluir en autofix) |

### Cerrados en v2 — verificados v3 (OK)

| ID v2 | Estado v3 |
|-------|-----------|
| Tests 399 → 443 | ✅ Sin residuos `399` |
| Cash M6 SUPUESTO 48.100 → 46.395 | ⚠️ Cifra M6 OK en PROYECCION; **label tier Lean 101k** en SUPUESTO §3 sigue obsoleto |
| CHECKLIST Ask multi-tier | ✅ 112/157/187k en CHECKLIST |
| MENSAJE bridge Fase 0 | ✅ T+0 → Fase 0 → Day-D + ~112k |

### Persisten desde v2 (P1/P2 — no autofix en v3)

| ID | Descripción | Dueño |
|----|-------------|-------|
| AUD-v2-12 | P0-01…P0-08 humanos REGISTRO | Founder |
| AUD-v2-14 | AUD-02 BRIEF sensibilidad M12 optimista | FP&A |
| AUD-v2-15 | AUD-04 PROYECCION §3.3 puente 480k | FP&A |
| AUD-05 | UNIT margen post-waiver | FP&A |
| AUD-06 | PLAN_METODOS pharmacist onboarding copy | Founder |
| P3-07 | Retención receta doc vs código | Abogado + farmacéutico |

---

## Matriz findings maestros (deduplicados)

### P0 — Bloqueantes documentales

| ID | Finding | cross_docs | Evidencia | Autofix propuesto |
|----|---------|------------|-----------|-------------------|
| **F-P0-01** | **Migración tiers incompleta** — docs operativos citan **101k / 118k / 135k** mientras README/BRIEF/CHECKLIST dicen **112 / 157 / 187k** | PLAN_LANZAMIENTO, SUPUESTO, PERFIL, PROP_USUARIO, CUESTIONARIO, REGISTRO | grep pack 23-jun | Reemplazar global con anclas v3.8.2 + enlace MODELO S1.3 |
| **F-P0-02** | **Fase 0 ~28.057** y **wire USD 101.000** en PLAN_LANZAMIENTO | PLAN_LANZAMIENTO | L5, L24 | → **33.835** y **~111.988** |
| **F-P0-03** | **`.fods` / ODS generator** desalineados del xlsx v3.8.2 (equity **16,83%** vs **18,66%**) | MODELO_FINANCIERO.fods, generate_modelo_financiero_ods.py | grep 101000, 72943, EQUITY 0.1683 | Regenerar desde xlsx o script v2 |
| **F-P0-04** | **MENSAJE ~80 activas M12** vs canon **~159** (Slide 4 + §7) | MENSAJE | §4 L103, §7 L173 | → ~159 / ~185 firmas; alinear con §1 WhatsApp |
| **F-P0-05** | **Caps Base/Growth ~908k / ~1.270M** vs **~912.814 / ~1.205.345** | MENSAJE §7, README §7 L131 | model_conflicts | Unificar redondeo en todo el pack |
| **F-P0-06** | **RESUMEN_GABRIEL ~80 activas M12** (§5 L106) vs **~159** en L104 | RESUMEN_GABRIEL | §5 tabla | → ~159; SAM ~80–100 aparte |
| **F-P0-07** | **REGISTRO propaga tiers 101/118/135** en P2-03 y §Ya completado | REGISTRO | L66, L121 | Migrar con Lote A |
| **F-P0-08** | **PROP_B2B §11** cita fila waiver inexistente en PROYECCION; M12 **41.756** vs **40.831** | PROP_B2B, PROYECCION | §11 | Restaurar fila waiver o apuntar UNIT; usar 40.831 |

### P1 — Alta prioridad pre-reunión

| ID | Finding | cross_docs | Autofix |
|----|---------|------------|---------|
| **F-P1-01** | RESUMEN_GABRIEL dice **25 archivos / 23 canónicos**; pack real = **27** `.md` | RESUMEN_GABRIEL | Actualizar conteo + fecha |
| **F-P1-02** | REGISTRO backlog **AUD-v2-04** marca CHECKLIST obsoleto — **ya corregido** en CHECKLIST v3.8.2 | REGISTRO | Cerrar ítem + añadir AUD-v3-P0-01 |
| **F-P1-03** | REGISTRO §P2-03 tickets **101k/118k** | REGISTRO, VOLCADO | → 112/157/187k |
| **F-P1-04** | CUESTIONARIO header **«nómina Lean 101k»** contradice README §3 **~112k** | CUESTIONARIO, README | Alinear header + §8 asesor tiers |
| **F-P1-05** | AUD-02 sensibilidad M12 optimista sin tabla FP&A dedicada | BRIEF | Nota o tabla escenarios (FP&A) |
| **F-P1-06** | AUD-04 puente revenue **~480k** año 3 — riesgo mezcla con caso Lean | PROYECCION §3.3, BRIEF, MODELO | Disclaimer reforzado (parcialmente OK) |
| **F-P1-07** | VOLCADO §1.2 commit tests **obsoleto** (snapshot 1-jun) | VOLCADO | Re-run P0-06 founder |
| **F-P1-08** | **P3-07 retención receta:** §8.2 promete **10 años**; §14.4 + `config/zonix.php` purgan a **90 días** post-terminal | PLAN_MODULO §8–§14 | Dictamen abogado+farmacéutico; tabla retención por capa |
| **F-P1-09** | **ALINEACION §1.1** Fase 0 **31.320** + Day-D **71.468** vs canon **33.835 / 78.153** | ALINEACION | Alinear PROYECCION §1.3; §7 veredicto mayo stale |
| **F-P1-10** | **CONTEXTO** Fase 0 **~31.320** y **~20 activas M1** vs **33.835 / 40** (MODELO S3.1) | CONTEXTO | Corregir §2.12 y tabla liquidez |
| **F-P1-11** | **UNIT §6** BE **146/148/151** vs **~160/162/159** (7980÷50) | UNIT_ECONOMICS | Reescribir aritmética §6; puente CAC 177→139 |
| **F-P1-12** | **VOLCADO §5.1** Sales **120+30** vs canon **350+40** (4× Lean) | VOLCADO | Etiquetar discovery vs nómina post-wire |
| **F-P1-13** | **SUPUESTO §7** cash M6 **46.395** vs PROYECCION **48.311** | SUPUESTO | Actualizar trigger §7 L237 |
| **F-P1-14** | **MONTOS §1** TAM **1.638M** atribuido IQVIA sin fuente USD directa; falta § Pago Móvil BDV 2026 | MONTOS | Derivación explícita; tarifario BDV P2C 1,5% |
| **F-P1-15** | **PROP_B2B** usa **Rappi** como competidor VE (~10 pasajes); canon = **PedidosYa** | PROP_B2B, README §8 | Unificar benchmark VE; Rappi solo proxy LatAm |
| **F-P1-16** | **PROP_B2B §3.8** promete dashboard GMV/export sin soporte producto verificado | PROP_B2B, ALINEACION | Roadmap pre-Day-D o implementar |

### P2 — Mejora calidad pack

| ID | Finding | Autofix |
|----|---------|---------|
| **F-P2-01** | UNIT **margen post-waiver** no cuantificado en PROYECCION §1.1 | Tabla escenario waiver o nota FP&A |
| **F-P2-02** | PLAN_METODOS sin flujo **pharmacist** explícito en onboarding pagos | Añadir § pharmacist colegiado |
| **F-P2-03** | MONTOS §Meta **650/mes** promedio — validar vs presupuesto Base 800 | Nota tier Lean vs Base |
| **F-P2-04** | Android `com.zonix.eats` transitorio — PROP_USUARIO §6; smoke tiendas pendiente | Mantener P1-12 |
| **F-P2-05** | **PROP_USUARIO §8** GMV M6/M12 sin ancla PROYECCION; flyers **130/mes** vs SUPUESTO **50** | Etiquetar hipótesis B2C; unificar offline |
| **F-P2-06** | **GUIA** cita rota README §3; PROP_B2B §9 inexistente; PLAN → VOLCADO §3 erróneo | Cross-refs §5/§6 VOLCADO |
| **F-P2-07** | **REGISTRO** conteo P2 **10 vs 12** ítems | Actualizar resumen §prioridad |

### P3 — Backlog / legal / humano

| ID | Finding | Dueño |
|----|---------|-------|
| **F-P3-01** | P0-01…P0-08 REGISTRO (GitHub, NDA, referencias, tests commit) | Founder |
| **F-P3-02** | P3-07 retención datos salud 10 años vs 90 días código | Abogado |
| **F-P3-03** | Smoke Rx E2E no firmado | Founder + CTO |
| **F-P3-04** | Dictamen MPPS/INHRR marketplace digital — **R4:** récipe físico 2013; sin e-commerce farmacia explícito | Asesor VE + Abogado |
| **F-P3-05** | **R4:** datos salud marco disperso (TSJ 1318); no LOPD integral — ESTRUCTURA §4 | Abogado |
| **F-P3-06** | **PLAN_METODOS** PMC2P «0% BCV» vs tarifario BDV P2C **1,5%** (abr 2026) | Nota REGISTRO; no recalcular unit |

---

## Score por archivo (rúbrica 12 criterios × 0–2 = 0–24)

| # | Archivo | Score | P0 | P1 | P2 | Nota v3 |
|---|---------|------:|----|----|-----|---------|
| 1 | README.md | **20** | 0 | 1 | 0 | Caps §7 ~908k/~1.27M; conteo 26 vs 27 |
| 2 | BRIEF_UNA_PAGINA.md | **18** | 0 | 1 | 0 | AUD-02 P10/P90 stale vs MODELO S4.2 |
| 3 | CHECKLIST_PRE_INVERSOR.md | **20** | 0 | 0 | 0 | Tiers OK; FAQ cita «v3.3» |
| 4 | CONTEXTO_PITCH_Y_DECISIONES.md | **18** | 0 | 2 | 1 | Fase0 31.320; M1 ~20 vs 40 |
| 5 | PROYECCION_FINANCIERA_12M.md | **16** | 0 | 4 | 0 | **Truncada:** faltan §2, §3.3, §4 |
| 6 | PRESUPUESTO_12_MESES_REFERENCIA.md | **18** | 0 | 1 | 0 | Base/Growth stub; §2.3.1 ausente |
| 7 | UNIT_ECONOMICS.md | **18** | 0 | 3 | 1 | §6 BE aritmética; AUD-05 waiver |
| 8 | PERFIL_MERCADO_PILOTO.md | **17** | 1 | 1 | 0 | Tiers + M6 **48.311** + M11 burn |
| 9 | ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md | **19** | 2 | 2 | 1 | Fase0/Day-D stale; §7 mayo |
| 10 | PLAN_LANZAMIENTO_COMERCIAL.md | **12** | 3 | 1 | 0 | **Peor score operativo** |
| 11 | PLAN_MODULO_OPERATIVO_CLAVE.md | **18** | 0 | 2 | 0 | P3-07: §8.2 10y vs §14.4 90d código |
| 12 | PLAN_METODOS_PAGO.md | **20** | 0 | 1 | 0 | AUD-06 |
| 13 | PROPUESTA_VALOR_CLIENTE_B2B.md | **15** | 1 | 3 | 2 | Rappi VE; waiver §11 roto; GMV dashboard |
| 14 | PROPUESTA_VALOR_TERCER_LADO.md | **22** | 0 | 0 | 0 | OK |
| 15 | PROPUESTA_VALOR_USUARIO_FINAL.md | **15** | 1 | 2 | 2 | Tiers L183; GMV §8 |
| 16 | ESTRUCTURA_LEGAL_Y_EQUITY.md | **22** | 0 | 0 | 0 | OK |
| 17 | MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md | **15** | 2 | 1 | 0 | **P0 ~80 activas**; Rappi VE |
| 18 | SUPUESTO_MARKETING_OFFLINE.md | **15** | 2 | 1 | 0 | Tiers §2 + M6 46.395 |
| 19 | MODELO_FINANCIERO_ZONIX_PHARMA.md | **20** | 0 | 0 | 0 | Anclas OK; labels v3.1 pie |
| 20 | MONTOS_REFERENCIA_INTERNET.md | **19** | 0 | 3 | 2 | TAM derivado; falta § pagos VE |
| 21 | BANCO_PROBLEMAS_NECESIDADES_FARMACIA.md | **20** | 0 | 1 | 0 | Tabla §624–630 conteo erróneo |
| 22 | GUIA_DISCOVERY_CALLE_FASE0.md | **23** | 0 | 0 | 2 | Mejor doc operativo; refs rotas P2 |
| 23 | CUESTIONARIO_EQUIPO_PILOTO.md | **14** | 2 | 2 | 0 | Tiers + salarios Sales/CS |
| 24 | VOLCADO_RESPUESTAS_CUESTIONARIO.md | **18** | 0 | 3 | 1 | Sales 120+30; §1.2 commit |
| 25 | REGISTRO_PENDIENTES_PACK.md | **17** | 2 | 2 | 1 | Tiers stale + human P0 |
| 26 | CENSO_FARMACIAS_CARABOBO_FASE0.md | **21** | 0 | 0 | 0 | Nuevo; coherente censo |
| 27 | RESUMEN_ALIADO_GABRIEL_BARRIOS.md | **16** | 1 | 1 | 0 | **P0 ~80 M12**; header 25 docs |

**Promedio pack:** **18,7 / 24** (post [Audit PROP_B2B](e97e9a64-062b-4a41-93c3-9d0468cf1e74): 15/24)

---

## Lotes autofix propuestos (Fase 3 — pendiente OK)

| Lote | Prioridad | Archivos | Acción |
|------|-----------|----------|--------|
| **A** | P0 | PLAN_LANZAMIENTO, SUPUESTO, PERFIL, PROP_USUARIO, CUESTIONARIO | Migración tiers **112/157/187k** + Fase0 **33.835** + wire **111.988** |
| **A′** | P0 | MENSAJE, RESUMEN_GABRIEL, README §7 | ~159 activas M12; caps ~913k/~1.205M |
| **B** | P0 | `_tools/generate_modelo_financiero_ods.py`, `MODELO_FINANCIERO_ZONIX_PHARMA.fods` | Regenerar desde xlsx v3.8.2 |
| **C** | P1 | REGISTRO, RESUMEN_GABRIEL, VOLCADO, ALINEACION, CONTEXTO | Tiers backlog; Fase0/Day-D; tests commit |
| **D** | P1 | BRIEF, PROYECCION, UNIT, PROP_B2B | Sensibilidad; §2–§4; BE §6; waiver §11 + PedidosYa |
| **E** | P2 | MONTOS, PLAN_METODOS, PROP_USUARIO, GUIA | § pagos BDV; GMV disclaimer; cross-refs |

**Diff esperado Lote A:** ~40–60 líneas sustitución; sin recalcular PROYECCION (canon ya OK).

---

## Anexo A — Research web 2026 (Fase 0b)

### R1 — Macro VE

| Claim | Valor | Fuente | Fecha | pack_status |
|-------|-------|--------|-------|-------------|
| Inflación mensual INPC | **6,3%** (mayo 2026) | [BCV](https://www.bcv.org.ve/) | may-2026 | ok — MONTOS cita inflación VE |
| Tipo cambio oficial BCV | **617,64 Bs/USD** | [BCV](https://www.bcv.org.ve/) | 23-jun-2026 | ok — pack usa USD |
| PIB I trim 2026 vs 2025 | **+2,51%** | BCV estadísticas | 2026 | missing — oportunidad PERFIL |
| Reservas internacionales | **~12.815 M USD** | BCV | 19-jun-2026 | missing — no crítico pre-seed |

**new_topics_not_in_pack:** variación acumulada TC **+107%** anual (Finanzas Digital jun-2026) — stress test FX para nómina USD.

### R2 — SaaS / Infra ([Research R2](fb3ff4c0-3f26-4d7f-9985-010d2168d541))

| Claim | Valor | Fuente | pack_status |
|-------|-------|--------|-------------|
| Pusher Sandbox | **200k msg/día, 100 conn** gratis | [pusher.com/channels/pricing](https://pusher.com/channels/pricing/) | **new** — staging pre-prod |
| Pusher Startup | **$49/mes**, 1M msg/día | idem | ✅ match MONTOS §4 |
| Firebase SMS VE | **$0,16/SMS**; ~$160 @ 1k verif | [Google Identity Platform](https://cloud.google.com/identity-platform/pricing) | ✅ match; pack conservador **$34/mes** en MODELO |
| Firebase Blaze | hasta **$300** crédito GCP | Firebase pricing | **new** — oportunidad piloto |
| Google Workspace Starter | **$7–8,40/user**; promo 50% 3 meses | workspace.google.com | ✅ match |
| GitHub Team | **$4/user**; 3000 Actions min | github.com/pricing | ✅ match |
| Google Maps | caps gratis/SKU post mar 2025; Geocoding $5/1k | developers.google.com/maps | ✅ match MONTOS |
| VPS benchmark | DO $12–24; Hetzner ~50–70% menos | digitalocean.com | partial — pack Nameshared $20–35 |

**Reconciliación:** MONTOS §4 mercado **$280–310/mes** vs MODELO conservador **$154/mes** (120 SaaS + 34 SMS) — dualidad documentada; restaurar PRESUPUESTO §2.3.1.

### R3 — Mercado / Competencia

| Claim | Fuente | pack_status |
|-------|--------|-------------|
| Mercado pharma VE **USD 1.638M** | Cifar/IMS citado PERFIL | ⚠️ **derivación** 389,1M u × $4,21 — IQVIA no verificable web ([MONTOS](78f6c7b5-f704-47a7-befd-43c64939b633)) |
| Farmatodo / Locatel apps VE | competencia indirecta | ok — PERFIL §competencia |
| Censo farmacias Carabobo **~150–250** independientes | CENSO_FARMACIAS pack | ok — validación calle pendiente P0 |
| Meta Ads CPM VE | datos opacos 2026 | missing — MONTOS usa benchmarks |

### R4 — Regulatorio / Legal VE ([Research R4](63e5deb6-c837-4299-9a3d-c3f0b2090d00))

| Claim | pack_status | action |
|-------|-------------|--------|
| Rx MPPS 2013: **récipe físico duplicado** | **conflict** — PLAN_MODULO asume validación digital | add_registro P3; no pitch «receta 100% digital» |
| Sin obligatoriedad receta electrónica privada 2024–26 | ok — CHECKLIST §0.2 | note_only |
| **Sin norma explícita e-commerce farmacia** | **missing** | add_registro — marketplace conecta sedes ya habilitadas |
| Datos salud: marco **disperso** (CRBV + TSJ 1318) | **missing** | add_registro abogado — no «LOPD 2014» |
| Pago Móvil BDV abr 2026: P2C **hasta 1,5%** | **stale** — PLAN_METODOS «0% BCV» | note_only REGISTRO |
| Piloto sin intermediación fondos | ok — PLAN_METODOS §10 | note_only |
| SAFE YC | ok — borrador; adaptación C.A. VE | note_only |
| Telesalud 2014 | **missing** puente Rx→dispensación | no vender telesalud sin reglamento MPPS |

---

## Anexo B — Migración tiers 101k → 112k (jun 2026)

| Concepto | v3.3 obsoleto | **v3.8.2 canon** | Δ |
|----------|---------------|------------------|---|
| Lean capital | ~101.000 | **~111.988** | +~11k (MO Fase0, legal, marketing) |
| Base capital | ~118.000 | **~157.268** | replante nómina mercado |
| Growth capital | ~135.000 | **~187.478** | Dev senior + colchón |
| Fase 0 | ~28.057 | **~33.835** | bottom-up ESTA |
| Day-D caja | ~72.943 | **~78.153** | SAFE − Fase0 |
| M12 cash P50 | ~42.209 | **~40.831** | curva 4× Sales |
| Burn prom. | ~7.559 | **~8.108** | tramos v3.8 |

**Regla autofix:** en docs operativos, reemplazar etiquetas tier; **no** recalcular tablas PROYECCION (ya migradas).

---

## Contradicciones cross-doc (estado v3)

| Tema | Estado |
|------|--------|
| README vs MODELO vs PROYECCION anclas Lean | ✅ Alineado |
| CHECKLIST vs BRIEF tiers | ✅ 112/157/187k |
| PLAN_LANZAMIENTO vs README capital | ✅ Fase 3 |
| SUPUESTO tabla marketing vs README tiers | ✅ Fase 3 |
| Excel xlsx vs verify script | ✅ 68/68 |
| Excel xlsx vs .fods | ✅ Fase 3 |
| Tests 443 pack vs repo | ✅ P0-06 — `d7b7df4`, 23 jun 2026, 443/1822 OK |
| ALINEACION vs PROYECCION Fase0/Day-D | ✅ Fase 3 |
| CONTEXTO vs MODELO M1 activas | ✅ Fase 3 (~40) |
| UNIT §6 BE vs README | ✅ Fase 3 (~160) |

---

## Metodología v3

1. **Fase 0:** README § cifras, AUDIT v2, MONTOS; anclas §C v3.8.2  
2. **Fase 0c:** `verify_modelo_financiero.py` → exit 0 → `model_verify_json`  
3. **Fase 0b:** 4 squads research web R1–R4 (macro, SaaS, mercado, regulatorio)  
4. **Fase 1:** 27 doc-workers `explore` readonly en 7 olas + grep anti-regresión  
5. **Fase 2:** Juez mayor — deduplicación, matriz P0–P3, scores, lotes autofix  
6. **Gate Fase 2:** informe only  
7. **Fase 3:** autofix lotes A→E — **aplicado 23 jun 2026** — commit **`d7b7df4`**, push `main`

**Skills:** `jarvis-core`, `zonix-lanzamiento-docs`, `zonix-startup-context`, `parallel-judge-ops`, `fan-out-synthesize-ops`  
**Plan:** `fase_3_autofix_pack_33ca2050.plan.md` (no editado)

---

## Roadmap residual (founder)

1. ~~**OK autofix Lote A–E**~~ — ✅ aplicado Fase 3 — commit **`d7b7df4`**  
2. ~~**P0-06:** tests + VOLCADO §1.2~~ — ✅ 23 jun 2026, 443/1822 OK @ `d7b7df4`  
3. **P0-01…P0-08:** due diligence humana REGISTRO (resto P0 abierto)  
4. **P1-12 + SMOKE_RX_E2E.md:** ejecutar y firmar  
5. **AUD-02, AUD-04, AUD-05:** sesión FP&A pre-reunión institucional  

---

*Generado por JARVIS — auditoría forense v3 pack Lanzamiento Zonix Pharma. **Fase 3** commit `d7b7df4` (23 jun 2026). **P0-06** actualizado mismo día.*
