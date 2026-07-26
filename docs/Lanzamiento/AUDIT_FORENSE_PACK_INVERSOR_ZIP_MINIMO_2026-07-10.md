# AUDIT FORENSE — Pack inversor ZIP MÍNIMO · Zonix Pharma

> **`[OBSOLETO]` anclas 10 jul 2026:** Lean **~112k / 18,66%**. Canon vigente 26 jul = Excel **210.760 / ~35,13%**.


> **Fecha:** 10 julio 2026  
> **Corpus:** 8 docs + Excel + 3 opcionales (`DOCUMENTOS_SOLO_INVERSOR.md` § A)  
> **Método Excel:** anclas vía zip/xml (openpyxl no disponible en PATH); contrastado con `MODELO_FINANCIERO_ZONIX_PHARMA.md`  
> **Roles:** legal/finanzas consultivo + BA · Skills: `zonix-investor-materials` + `zonix-startup-context`

---

## Resumen ejecutivo

1. **Núcleo Lean v3.x alineado** (README, BRIEF, PROYECCION, MODELO.md, Excel): capital **~111.988**, cap **600.000**, equity **~18,66%**, Fase 0 **~33.835**, caja Day-D **~78.153**, cash M12 **~40.831**, burn prom. **~8.108**, **~159** activas, ARPF/CAC/LTV **50 / 139 / 1.000**.
2. **CRÍTICA — PERFIL_MERCADO §3:** burn M11 **7.431** y “equilibrio” en M11 vs canónico burn M11 **7.980** (casi BE en **M12**).
3. **ALTA — UNIT_ECONOMICS §11:** burn Base **~9.898** (stale) vs **~10.898**.
4. **ALTA — README:** one-shots **~13.408** vs canónico **~14.208**.
5. **ALTA — CONTEXTO glosario:** “~USD 30k” residual junto a **~59.968**.
6. **ALTA — ARPF ~50 placeholder** sostiene revenue Y1, LTV/CAC y “casi BE M12”.
7. **MEDIA — take-rate** 20–30% vs 25–35%; MENSAJE aún nombra **Rappi** como amenaza VE.
8. **ALTA (reunión) — P0** legales/founder abiertos (Rx, SAFE, GitHub, % dedicación).

**Veredicto:** ZIP MÍNIMO **financieramente usable** en Lean tras corregir 3–4 residuos; **no listo institucional** mientras P0 legales/founder sigan abiertos.

---

## Matriz de anclas (cruzada)

| Ancla | README | BRIEF | PROYECCION | MODELO.md | Excel | UNIT | ESTRUCTURA | MENSAJE | PERFIL | CHECKLIST |
|------|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|:---:|
| Capital Lean ~111.988 | ✓ | ✓ | ✓ | ✓ | ✓ | — | ✓ | ✓ | — | ✓ |
| Base ~157k / Growth ~187k | ✓ | ✓ | ✓ | ✓ | ✓ | — | ✓ | ✓ | — | ✓ |
| Cap 600k / ~912k / ~1.205M | ✓ | ✓ | ✓ | ✓ | ✓ | — | ✓ | ✓ | — | ✓ |
| Equity 18,66 / 17,23 / 15,55% | ✓ | ✓ | — | ✓ | ✓ | — | ✓ | ✓ | — | ✓ |
| Burn Lean ~8.108 | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | — | ✓ | **✗ M11 7.431** | ✓ |
| Fase 0 / Day-D / M12 cash | ✓ | ✓ | ✓ | ✓ | ✓ | — | — | ✓ | — | ✓ |
| ARPF50 / CAC139 / LTV1000 | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | — | ✓ | ✓ | ✓ |
| Activas M12 ~159 | ✓ | ✓ | ✓ | ✓ | ✓ | ✓ | — | ✓ | ✓ | ✓ |
| TAM 1.638M | ✓ | ✓ | — | — | — | — | — | ✓ | ✓ | ✓ |
| Burn Base ~10.898 | ✓ | ✓ | ✓ | ✓ | ✓ | **✗ ~9.898** | — | — | — | — |

**Aritmética verificada:** `111.988/600.000 = 18,66%` · `111.988−33.835 = 78.153` · `78.153−37.322 = 40.831` · `159×50 = 7.950` · `1.000/139 ≈ 7,19x`.

---

## Hallazgos

### H-01 — Burn M11 y “equilibrio” en PERFIL
- **Severidad:** CRÍTICA  
- **Docs:** `PERFIL_MERCADO_PILOTO.md` §3 vs `PROYECCION` §1.1  
- **Hallazgo:** PERFIL: M11 burn **7.431** + BE. Canónico: burn M11 **7.980**, casi BE en **M12**.  
- **Acción:** Reescribir PERFIL §3 desde PROYECCION §1.1.  
- **Responsable:** Founder  

### H-02 — Burn Base stale en UNIT
- **Severidad:** ALTA · **Docs:** `UNIT_ECONOMICS.md` §11  
- **Hallazgo:** **~9.898** vs canónico **~10.898**.  
- **Acción:** Sustituir 9.898 → 10.898. · **Responsable:** Founder  

### H-03 — One-shots 13.408 vs 14.208
- **Severidad:** ALTA · **Docs:** `README.md`  
- **Acción:** Unificar a **14.208**. · **Responsable:** Founder  

### H-04 — Glosario CONTEXTO “~30k” vs 59.968
- **Severidad:** ALTA · **Docs:** `CONTEXTO_PITCH_Y_DECISIONES.md` §4  
- **Acción:** Dejar solo **~59.968**. · **Responsable:** Founder  

### H-05 — ARPF ~50 placeholder
- **Severidad:** ALTA · **Docs:** BRIEF, UNIT, PROYECCION, MODELO, MENSAJE, README  
- **Acción:** En viva voz: “ARPF planning ~50 hasta GMV piloto”; no “unit economics probados”. · **Responsable:** Founder  

### H-06 — CAC headline 139 vs bottom-up ~177
- **Severidad:** MEDIA · **Docs:** `UNIT_ECONOMICS.md` §3  
- **Acción:** Frase fija: headline 139 = crucero; bottom-up ~177. · **Responsable:** Founder  

### H-07 — Take-rate / Rappi VE
- **Severidad:** MEDIA · **Docs:** BRIEF, CHECKLIST, PERFIL, MENSAJE  
- **Acción:** Canonizar PedidosYa VE 20–30%; Rappi solo LatAm. · **Responsable:** Founder  

### H-08 — MENSAJE residuales Rappi / typo
- **Severidad:** MEDIA · **Docs:** `MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md`  
- **Acción:** Q&A a PedidosYa; corregir “órden”. · **Responsable:** Founder  

### H-09 — Claims terapéuticos
- **Severidad:** INFO (controlado) · BRIEF sin promesas terapéuticas; ahorro 15–25% como hipótesis.  

### H-10 — SOM ~159 vs SAM independientes
- **Severidad:** MEDIA · Pitch: “curva modelo / hipótesis”; no “comprometemos 159”.  

### H-11 — Constitución 1.150 / 1.450 / 5.050
- **Severidad:** ALTA (DD legal) · **Docs:** `ESTRUCTURA_LEGAL_Y_EQUITY.md` vs MODELO  
- **Acción:** Tabla única pack vs Excel + abogado. · **Responsable:** Abogado + Contador + Founder  

### H-12 — P0 bloqueantes reunión institucional
- **Severidad:** ALTA · GitHub, % dedicación, refs, dictamen Rx, SAFE/T&C borrador.  
- **Responsable:** Founder + Abogado + Asesor RA  

### H-13 — Excel vs MD
- **Severidad:** INFO · Anclas Lean/SAFE/Fase0/cash coinciden. Verificar con `verify_modelo_financiero.py` pre-reunión si existe.  

### H-14 — Skill `zonix-startup-context` stale (fuera ZIP)
- **Severidad:** MEDIA (operativa IA) · Skill aún puede citar 101/118/135k. Actualizar a 112/157/187.  

---

## Checklist pre-envío (prioridad)

| # | Acción | Sev. | Quién |
|---|--------|------|-------|
| 1 | Corregir PERFIL §3 burn M11 / BE | CRÍTICA | Founder |
| 2 | UNIT Base 9.898 → 10.898 | ALTA | Founder |
| 3 | README one-shots → 14.208 | ALTA | Founder |
| 4 | CONTEXTO quitar “~30k” | ALTA | Founder |
| 5 | Disciplinar pitch ARPF + PedidosYa/Rappi | ALTA | Founder |
| 6 | Cerrar P0-01/02/03/06 + borrador legal | ALTA | Founder + Abogado |
| 7 | Reconciliar 1.150/1.450/5.050 | ALTA | Abogado + Contador |
| 8 | Actualizar `zonix-startup-context` a 112/157/187 | MEDIA | Founder |

---

## Conclusión

El **ZIP MÍNIMO** tiene núcleo financiero Lean coherente (MD + Excel). Riesgo principal: **residuos de versiones anteriores** + **overclaim** por ARPF placeholder + **P0 legales/founder**. Con correcciones CRÍTICA/ALTA, defendible para ángel; institucional requiere dictamen Rx/SAFE y cierre P0.

**HITL:** no se editaron docs del pack en este pase — esperar OK founder para aplicar fixes.

---

## NotebookLM (Studio — pitch inversor)

- **Notebook URL:** https://notebooklm.google.com/notebook/fdf0a0f4-7a79-439f-a594-bbac53317658
- **Notebook ID:** `fdf0a0f4-7a79-439f-a594-bbac53317658`
- **Estado Studio (2026-07-10):** 3/3 completed (`slide_deck`, `audio`, `mind_map`)

| Artifact | ID | Título | Export local |
|----------|-----|--------|--------------|
| `slide_deck` | `efd2ef31-3ab4-489c-9fc3-3e3eb5f9fd6c` | Zonix Pharma Investment Roadmap | `_exports_notebooklm/Zonix_Pharma_Investment_Roadmap.pdf` |
| `audio` | `f3553604-a900-4f34-9939-8bfe3494defd` | Invierta en la digitalización de farmacias venezolanas | `_exports_notebooklm/Zonix_Pharma_Audio_Overview.mp4` |
| `mind_map` | `57d1c3e4-a4f0-4561-9304-372b54990829` | Guion Studio — voz al inversor | (no descargado en este pase) |

Carpeta: `docs/Lanzamiento/_exports_notebooklm/` (ver `README.md` allí).
