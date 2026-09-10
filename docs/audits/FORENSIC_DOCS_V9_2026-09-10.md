# Forense Docs 360 v9 — 2026-09-10

> **Score:** 0.69 / **threshold 0.80** — **NO PASS** (bloqueo humano; hallazgos reales, no fallo de método).  
> **Cobertura:** 222/222 `.md` juzgados · 0 `SIN_JUZGAR`.  
> **Canon:** Excel v4 + `active_context.md` (SAFE **237.412** · Day-D **187.152** · equity **~15%** · BE **M5** · LTV/CAC **~7,5x**).  
> Supersede `FORENSIC_DOCS_360_PASS3_2026-08-09.md` como estado vigente de `docs/`; PASS1–3 quedan como histórico.

---

## 1. Veredicto ejecutivo

- Corpus operativo **no listo para data room / envío** hasta cerrar **4 P0** verificados en archivo.
- Anclas canónicas del ask Lean (237.412, Day-D, esc.1, BE M5, 159, 29.892) **sí** están en BRIEF/PROYECCION/PRESUPUESTO; el daño está en **aritmética publicada** (VAN), **rutas rotas** (§7 inexistente), **paths locales** y **wire/escrow contradictorio**.
- Inventario **222** `.md` (baseline prompt 221; +`plantillas/PROMPT_FORENSE_DOCS_360_V9.md`). Frontera LegalAlternativo = **0**. Espejos Pack = **KEEP** (7 pares by-design).
- **0 DROP · 0 MERGE** propuestos. 45 binarios STALE → regenerar tras fix MD.
- Siguiente paso: OK founder → fixes P0 in-place → regenerar PDF/docx → sync skills dominio (cap 600k residual).

**Una línea:** el pack cuenta la historia Lean correcta, pero un DD rompe VAN, CTA y escrow en minutos.

---

## 2. Tabla Fase 0 (gate determinista)

| Bloque | Resultado | vs baseline 10-sep |
|--------|-----------|--------------------|
| 0.1 inventario | **222** md · 62 pdf · 21 docx · 2 xlsx | +1 md (prompt v9) |
| 0.2 lista negra | 42 hits / ~13 archivos (audits, plantillas, active_context, Pack/MODELO etiquetados o meta) | coherente |
| 0.3 paths personales | 20 hits / 6 archivos | activo |
| 0.4 PII CRM | 45 hits | CRM interno; riesgo = export |
| 0.5 lexicon eats | 180 hits (mayormente Pizza QLQ template / histórico) | filtrar en pitch |
| 0.6 frontera LA | **0** | OK |
| 0.7 links rotos | 189 (concentración Pack espejos) | P1 |
| 0.8 dup exactos | **0** | OK |
| 0.8b ≥90% | **7** pares Lanzamiento↔Pack | espejos §9 |
| 0.10 binarios | **45 STALE · 8 OK · 30 HUÉRFANOS** | = baseline |
| 0.11 canon binarios | 1 hit | menor |

---

## 3. P0 / P1 (must_fix)

| id | ruta:línea | Hallazgo | Fix | eje | dual |
|----|------------|----------|-----|-----|------|
| P0-01 | `MODELO…md:426–434` | VAN(5) ~120.530 ≠ 331.290−237.412=93.878; VAN(3) “+” es −358; TIR/~55% y “atractivo pre-seed” | Quitar VAN/TIR/% recuperado o celdas vivas; `[PENDIENTE FP&A]` sin cifra | bug | sí |
| P0-02 | `BRIEF:133` (+ CHECKLIST:234) | CTA a PROYECCION «sección 7» / §7.3; archivo termina en **§6** | Cambiar a §6; contingencia CHECKLIST → §3 | bug | sí |
| P0-03 | `BRIEF:91` + Pack `02:91` | `= Descargas MODELO_…040826_v4.xlsx` | Solo ruta relativa `MODELO_FINANCIERO_ZONIX_PHARMA.xlsx` | higiene | sí |
| P0-04 | `ESTRUCTURA:345–346` | Mes0 escrow / “no cuenta personal” vs mes1 “transferencia founder→C.A.” | Unificar ruta wire (escrow→liberación C.A.); dictamen abogado | incoherencia | sí |

**P1 prioritarios (selección; lista completa 30 en `/tmp/forense-v9/judges/juez_principal.json`):**

| id | Archivo | Claim corto |
|----|---------|-------------|
| P1-01 | MODELO / UNIT | Payback **2,8** vs **2,7** (139/52) |
| P1-03 | MODELO / PROYECCION | Cliff Y2 ~102k vs Y1 228.796 / “+70%” |
| P1-04 | MODELO | %GMV **8/7/5** no escrito (solo “% GMV”) |
| P1-05 | PRESUPUESTO | Dev **1.000** vs nota “x2 @ 1.000” |
| P1-07 | PRESUPUESTO + 5 docs | Citas a **§6.1** inexistente |
| P1-08 | PRESUPUESTO / MODELO | Link 404 `_tools/generate_modelo_financiero_v2.py` |
| P1-09–12 | UNIT | CAC 139 vs bottom-up ~177; residual ARPF 50; BE optimista mal; “5%=60% anual” |
| P1-14–17 | ESTRUCTURA | Pool 10% vs 85/15; **SUNASS**; Dev equity vs freelance; advisors vs “no options” |
| P1-18 | PROYECCION | Revenue = 188×activas (blend), no simulación bandas |
| P1-19–21 | BRIEF | Burns 172.152 vs 169.717; TAM 1,638M vs 1.638M; 40 vs 28 activas |
| P1-26–29 | repo | 45 STALE; Pack links; paths EXT/active_context; 7 audits sin banner |
| P1-30 | skills dominio | `zonix-startup-context` / `zonix-financial-model` aún ~39,57% @ 600k |

**P2 (agregado):** plantillas que documentan lista negra; PDF bid-lab externos KEEP; Pizza QLQ como template visual con disclaimer; `[PENDIENTE FP&A]` P10/P90 legítimos.

---

## 4. Ledger de valor (no-KEEP limpio)

**180+ KEEP** sin observaciones materiales (Tier C FICHAS/NOTAS limpios de canon, LegalAlternativo frontera OK, product/ops sin drift Eats P0, CRM KEEP).

| Acción | Archivos | Razón |
|--------|----------|-------|
| FIX | BRIEF, MODELO, PROYECCION, PRESUPUESTO, UNIT, ESTRUCTURA, CHECKLIST, README Lanzamiento, MENSAJE, CUESTIONARIO, MONTOS, PLAN_LANZAMIENTO, Pack 02/03, audits×7 banner, active_context, EXT_* paths | P0/P1 in-place |
| KEEP | 7 espejos Pack md | By-design §9 |
| KEEP→REGENERAR | 45 binarios STALE | Tras fix MD |
| KEEP | 30 huérfanos + 4 PDF IADB | Inventariar / externos |
| MERGE | *(ninguno)* | — |
| DROP | *(ninguno)* | Ningún archivo cumple §9(c) |

---

## 5. Gaps y `no_planteado` (valor nuevo v9)

| Tema | Rol | Por qué importa | Primer paso |
|------|-----|-----------------|-------------|
| Canal bancario wire → C.A. nueva | CFO | Bloquea cierre SAFE | Contador + banco: escrow/tranche |
| ISLR/IVA en P&L M1–M12 | CFO | DD VE pide reserva fiscal | % efectivo agregado |
| Puente cap 600k → 1.582.747 | CFO/IR | Skills+Excel residual | Media página método |
| Cierre parcial SAFE | IR | Plan B si ticket &lt; ask | Mínimo cierre + recortes |
| Economía lado paciente | IR | Marketplace bilateral | UNIT: CAC paciente stub |
| SAFE mes0 sin sociedad | Legal | Instrumento vs entidad | Fórmula abogado |
| PSA / gobernanza VE | Legal | 3 “CEO” sin RACI societario | Equivalente local |
| Key-person | Legal | Founder multi-proyecto | Vesting / dedicación |
| GMV/farmacia no escrito | CTO | Sostiene %GMV | Tabla GMV por banda |
| Skills revierten canon | CTO | Agente reintroduce 39,57% | Sync skills + P0 mismo commit |
| Delivery sin SLA | COO | 4º lado marketplace | Operador candidato |
| Canal Sales bottom-up | COO | 4×Sales → 159 | Visitas×cierre |
| Churn 5% sin evidencia | COO | Define LTV 1.040 | Sensibilidad 8–10% |
| Hito RA bloqueante Day-D | RA | T+90 condicionado | Pregunta asesor |

---

## 6. Bloqueos humanos (HITL)

1. **No enviar pack / data room** hasta P0-01…04.  
2. OK founder para editar docs de negocio.  
3. P0-01 → FP&A/contador antes de republicar VAN/TIR.  
4. P0-04 + P1 legales → **abogado VE**, no solo agente.  
5. Regenerar 45 binarios **después** de MD.  
6. Actualizar skills dominio en el **mismo** commit que P0.  
7. Commit/push solo con OK explícito (`git-guardrails-ops`).  
8. Política enmascarado PII CRM antes de export.

---

## 7. Método

| Ítem | Valor |
|------|-------|
| Modelos workers | Tier A core: dual `cursor-grok-4.6-xhigh` + `composer-2.5-fast` (MODELO, PROYECCION, UNIT, PRESUPUESTO, BRIEF, ESTRUCTURA). Pack A restante + B/C: `structured_orchestrator` (lectura completa + gate) — **desvío declarado** por presupuesto Task; jueces LLM validaron. H: banner orquestador. |
| OLA | 4 (fan-out LLM); structured en batch posterior |
| Task LLM ≈ | 12 dual + 2 jueces + 1 principal (+ olas A tempranas) |
| Juez A ratio_ruido | 0.44 (recalibrar prompt: higiene ≠ cifras) |
| Juez B ratio_ruido | 0.45 global / structured 0.01 |
| Juez principal | `claude-opus-5-thinking-high` · score **0.69** · 8 disensos `releido:true` |
| Artefactos | `/tmp/forense-v9/` (gate, workers, judges) |

PASS1–3: verificado cerrado; no re-litigar. Plantillas lista negra ≠ drift pitch.

---

## 8. Propuesta `active_context.md` (NO escrito — requiere OK)

```
### Forense Docs v9 — 10 sep 2026
- Informe: audits/FORENSIC_DOCS_V9_2026-09-10.md (score 0.69 / 0.80; 222/222 md).
- P0 abiertos: VAN MODELO S6.2; BRIEF→PROYECCION §7; Descargas L91; escrow ESTRUCTURA §8.
- HITL: no envío data room; no commit hasta OK; regenerar 45 STALE post-fix MD.
- Skills: sync zonix-startup-context + zonix-financial-model a CANON_V4 (quitar ~39,57%@600k).
```

---

*JARVIS Forensic Lead · v9.1 · MODO=completo OLA=4 CANON=v4 DRY_RUN=no · 2026-09-10*
