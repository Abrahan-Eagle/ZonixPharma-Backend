# Auditoría forense v2 — Pack `docs/Lanzamiento` (25 archivos)

> **Fecha:** 22 junio 2026  
> **Predecesor:** [AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-21.md](AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-21.md) (pasada 1 + autofix v1)  
> **Alcance:** Re-auditoría delta, autofix v2, Lotes A–D aplicados  
> **Referencia técnica:** [AUDIT_FORENSE_360_2026-06-21.md](AUDIT_FORENSE_360_2026-06-21.md) (BE **443**, FE **~241**)

---

## Resumen ejecutivo

| Métrica | v1 (21-jun) | v2 (22-jun) |
|---------|-------------|-------------|
| P0 documentales abiertos | 4 | **0** (remediados) |
| P0 humanos (REGISTRO) | 8 | **8** (sin inventar datos) |
| Archivos editados en sesión | 11 (autofix v1) | **+14** (autofix v2 + Lotes A–D) |
| Veredicto DD numérica pack | Ámbar | **Verde-ámbar** (anclas alineadas; pendiente founder) |

**Conclusión:** Tras v2, el pack está **materialmente más coherente** para borrador pre-seed. Los bloqueantes restantes son **operativos/humanos** (P0 REGISTRO, smoke E2E ejecutado, P3-07 dictamen retención) — no contradicciones numéricas duras entre PROYECCION / README / PERFIL / SUPUESTO.

---

## Delta vs informe v1

### Cerrados en v1 (verificados v2 — OK)

| Hallazgo v1 | Estado v2 |
|-------------|-----------|
| Tests **399 → 443** | ✅ Sin residuos grep `399` |
| README **24 → 25** docs | ✅ OK |
| PERFIL SOM M3/M6 **15/41 → 62/97** | ✅ OK |
| UNIT typo **158 → 175** | ✅ OK |
| REGISTRO P3 count **4 → 6** | ✅ Ampliado a **7** con P3-07 |

### Cerrados en v2 (nuevos)

| ID | Hallazgo | Remediación |
|----|----------|-------------|
| AUD-v2-01 | RESUMEN_GABRIEL «24 documentos» | 23 canónicos + anexo |
| AUD-v2-02 | SUPUESTO cash M6 **48.100** | **46.395** (PROYECCION §1.3) |
| AUD-v2-03 | PROYECCION **175 vs 185** firmas | Nota FP&A §1.1 |
| AUD-v2-04 | CHECKLIST Ask solo Lean | Multi-tier 118k/650k · 135k/720k |
| AUD-v2-05 | ALINEACION CI «Eats» | Refresh jun 2026; Pharma workflows |
| AUD-v2-06 | Smoke Rx sin enlace | → SMOKE_RX_E2E.md |
| AUD-v2-07 | MENSAJE sin bridge Fase 0 | T+0 → Fase 0 → Day-D |
| AUD-v2-08 | GUIA pricing mom-test | §2.1 script 25/40/55 + waiver |
| AUD-v2-09 | PROP_USUARIO «90 min» ads | `[PENDIENTE SLA partner]` |
| AUD-v2-10 | Farmacovigilancia §11 sin código | `[roadmap]` |
| AUD-v2-11 | Retención 10 años vs 90 días código | §14.4 + **P3-07** |

### Persisten (no autofix)

| ID | Descripción | Dueño |
|----|-------------|-------|
| AUD-v2-12 | P0-01…P0-08 humanos abiertos | Founder |
| AUD-v2-13 | P0-06 re-run tests + commit | Founder |
| AUD-v2-14 | AUD-02 BRIEF sensibilidad M12 optimista | FP&A |
| AUD-v2-15 | AUD-04 PROYECCION §3.3 puente 480k | FP&A |
| AUD-v2-16 | P1-12 smoke E2E firmado | Founder + CTO |
| AUD-05 | UNIT margen post-waiver | FP&A |
| AUD-06 | PLAN_METODOS pharmacist ausente | Founder |

---

## Matriz por archivo (post-v2)

| # | Archivo | P0 | P1 | Nota v2 |
|---|---------|----|----|---------|
| 1 | README | 0 | 0 | Ancla estable |
| 2 | BRIEF | 0 | 1 | AUD-02 sensibilidad pendiente |
| 3 | CHECKLIST | 0 | 1 | Ask multi-tier ✅ |
| 4 | CONTEXTO | 0 | 0 | Sólido |
| 5 | PROYECCION | 0 | 1 | Nota 175/185 ✅; §3.3 pendiente |
| 6 | PRESUPUESTO | 0 | 0 | OK |
| 7 | UNIT | 0 | 1 | AUD-05 margen waiver |
| 8 | PERFIL | 0 | 0 | SOM + §3.1 ✅ |
| 9 | ALINEACION | 0 | 1 | Refresh jun ✅; smoke link |
| 10 | PLAN_COMERCIAL | 0 | 1 | — |
| 11 | PLAN_MODULO | 0 | 1 | §11 roadmap; P3-07 retención |
| 12 | PLAN_METODOS | 0 | 1 | AUD-06 |
| 13 | PROP_B2B | 0 | 0 | §2.0 + GUIA ✅ |
| 14 | PROP_TERCERO | 0 | 0 | OK |
| 15 | PROP_USUARIO | 0 | 0 | Android + SLA ads ✅ |
| 16 | ESTRUCTURA_LEGAL | 0 | 0 | OK |
| 17 | MENSAJE | 0 | 0 | Bridge Fase 0 ✅ |
| 18 | SUPUESTO | 0 | 0 | M6 cash + §3.5 dedup ✅ |
| 19 | MONTOS_REF | 0 | 0 | OK |
| 20 | BANCO_PROBLEMAS | 0 | 0 | OK |
| 21 | GUIA_DISCOVERY | 0 | 0 | §2.1 pricing ✅ |
| 22 | CUESTIONARIO | 0 | 0 | OK |
| 23 | VOLCADO | 0 | 1 | §1.2 commit obsoleto |
| 24 | REGISTRO | 8* | 0 | AUD-v2 + P3-07 |
| 25 | RESUMEN_GABRIEL | 0 | 0 | 25 docs ✅ |

\*P0 humanos — no cerrados por IA.

---

## Contradicciones cross-doc (estado post-v2)

| Tema | Estado |
|------|--------|
| SOM M3/M6 PERFIL vs PROYECCION | ✅ Resuelto v1 |
| Cash M6 SUPUESTO vs PROYECCION | ✅ Resuelto v2 |
| Tests count pack vs AUDIT_360 | ✅ 443 / ~241 (re-verificar P0-06) |
| Firmas 175 vs 185 | ✅ Nota FP&A (no usar 185 en pitch) |
| Retención receta doc vs código | ⚠️ Documentado; **P3-07** dictamen |
| Android bundle eats vs pharma | ⚠️ Documentado transitorio en PROP_USUARIO |

---

## Archivos editados en v2 (trazabilidad)

**Autofix v2:** RESUMEN_GABRIEL, SUPUESTO  
**Lote A:** PROYECCION, SUPUESTO, CHECKLIST, PERFIL  
**Lote B:** ALINEACION, PROP_USUARIO, PLAN_MODULO  
**Lote C:** MENSAJE, PROP_B2B, GUIA_DISCOVERY  
**Lote D:** REGISTRO (P3-07, AUD-v2, backlog AUD-01/03/07/08)

---

## Roadmap residual (founder)

1. **P0-06:** `composer install` + `php artisan test --parallel` → actualizar VOLCADO §1.2  
2. **P0-01…P0-05, P0-07, P0-08:** datos reales due diligence  
3. **P1-12 + SMOKE_RX_E2E.md:** ejecutar y firmar checklist  
4. **P3-07 + P3-01…P3-06:** dictámenes abogado + farmacéutico  
5. **AUD-02, AUD-04, AUD-05:** sesión FP&A opcional pre-reunión institucional  

---

## Metodología v2

1. Verificación grep autofix v1 (`399`, `24 documento`, `48.100`, `158/mes`)  
2. Cruce AUDIT_360 + workflows `ci.yml` / `main.yml` + `config/zonix.php`  
3. Auditoría delta archivo a archivo vs matriz v1 (equivalente a 25 subagentes con rúbrica 10 puntos)  
4. Juez mayor → este informe  
5. Autofix v2 + Lotes A–D aplicados en la misma sesión  

**Skills:** `jarvis-core`, `zonix-lanzamiento-docs`, `zonix-startup-context`  
**Plan:** `.cursor/plans/auditoría_forense_v2_4f846db4.plan.md` (no editado)

---

*Generado por JARVIS — auditoría forense v2 pack Lanzamiento Zonix Pharma.*
