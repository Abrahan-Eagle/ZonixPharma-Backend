# Auditoría forense — Pack `docs/Lanzamiento` (25 archivos)

> **Fecha:** 21 junio 2026  
> **Alcance:** 25 archivos `.md` en `docs/Lanzamiento/` — 25 subagentes forenses (read-only) + juez mayor + autofix seguro Fase 3.  
> **Metodología:** Rúbrica 10 puntos (P0–P3) alineada a skill `zonix-lanzamiento-docs` y ancla numérica del [README](Lanzamiento/README.md) § cifras clave.  
> **Referencia técnica:** [AUDIT_FORENSE_360_2026-06-21.md](AUDIT_FORENSE_360_2026-06-21.md) (443 tests BE, jun 2026).

---

## Resumen ejecutivo

| Métrica | Valor |
|---------|-------|
| Archivos auditados | **25** |
| Hallazgos P0 (bloquean DD / contradicción dura) | **12** (8 humanos en REGISTRO + 4 documentales) |
| Hallazgos P1 (alto — corregir pre-reunión) | **~38** |
| Hallazgos P2 (medio — calidad / claridad) | **~45** |
| Hallazgos P3 (bajo — typos / formato) | **~22** |
| **Autofix seguro aplicado (Fase 3)** | **11 archivos**, **~35 ediciones** |
| Mejoras mayores pendientes (Fase 4) | **4 lotes temáticos** — requieren OK founder |

**Veredicto:** El pack es **usable para borrador pre-seed** con anclas financieras mayormente coherentes (PROYECCION, PRESUPUESTO, UNIT, README). Los **riesgos DD** principales eran: (1) curva SOM obsoleta en PERFIL vs PROYECCION §1.1, (2) conteo tests **399→443** desactualizado en ~10 archivos, (3) README contaba **24** docs vs **25** reales, (4) **8/8 P0 humanos** abiertos en REGISTRO. **(1)–(3) autofixeados** en esta sesión; **(4)** requiere acción founder.

---

## Ancla numérica canónica (README § cifras clave)

| Concepto | Lean | Base | Growth |
|----------|------|------|--------|
| Capital | **101k** | **118k** | **135k** |
| SAFE cap | **600k** | **650k** | **720k** |
| Burn/mes | **~7.559 / 7.462 / 7.798 / 7.431** | **~8.059** | **~8.691** |
| ARPF | **~50** | — | — |
| CAC / LTV / ratio | **139 / 1.000 / ~7,2x** | — | — |
| Payback / churn | **~2,8m / 5%** | — | — |
| Fase 0 / caja Day-D / M12 | **~28.057 / ~72.943 / ~42.209** | — | — |
| Day-D | **T+90** | — | — |
| TAM VE / Valencia | **1.638M / 226 farmacias** | — | — |
| Tests backend (jun 2026) | **443 passed** (re-verificar pre-reunión) | — | — |

**Curva §1.1 PROYECCION (referencia SOM):** M3 **62** activas / **3.100** rev · M6 **97** / **4.850** · M9 **130** / **6.500** · M11 **151** / **7.550** · M12 **159** / **7.950**.

---

## Matriz por archivo

| # | Archivo | P0 | P1 | P2 | P3 | Estado post-autofix |
|---|---------|----|----|----|----|---------------------|
| 1 | README | 0 | 1 | 2 | 1 | ✅ Tests, conteo 25, links |
| 2 | BRIEF_UNA_PAGINA | 0 | 2 | 3 | 1 | ✅ Tests 443 |
| 3 | CHECKLIST_PRE_INVERSOR | 0 | 3 | 4 | 2 | ✅ Tests; caps multi-tier pendiente |
| 4 | CONTEXTO_PITCH_Y_DECISIONES | 0 | 1 | 2 | 1 | ✅ Tests |
| 5 | PROYECCION_FINANCIERA_12M | 0 | 2 | 3 | 1 | ⚠️ Suma firmas 175 vs columna |
| 6 | PRESUPUESTO_12_MESES_REFERENCIA | 0 | 0 | 2 | 1 | ✅ Anclas OK |
| 7 | UNIT_ECONOMICS | 0 | 1 | 2 | 1 | ✅ Typo 158→175 |
| 8 | PERFIL_MERCADO_PILOTO | 0 | 1 | 2 | 1 | ✅ SOM M3/M6 sync §1.1 |
| 9 | ALINEACION_LANZAMIENTO_VS_PRODUCTO | 0 | 3 | 4 | 2 | ✅ Tests; refresh jun pendiente |
| 10 | PLAN_LANZAMIENTO_COMERCIAL | 0 | 2 | 3 | 2 | — |
| 11 | PLAN_MODULO_OPERATIVO_CLAVE | 0 | 3 | 3 | 2 | — |
| 12 | PLAN_METODOS_PAGO | 0 | 1 | 2 | 1 | — |
| 13 | PROPUESTA_VALOR_CLIENTE_B2B | 0 | 2 | 3 | 1 | — |
| 14 | PROPUESTA_VALOR_TERCER_LADO | 0 | 1 | 2 | 1 | — |
| 15 | PROPUESTA_VALOR_USUARIO_FINAL | 0 | 2 | 3 | 2 | — |
| 16 | ESTRUCTURA_LEGAL_Y_EQUITY | 0 | 0 | 2 | 1 | ✅ Sólido |
| 17 | MENSAJE_ENVIO_Y_BULLETS | 0 | 2 | 2 | 1 | ✅ Tests |
| 18 | SUPUESTO_MARKETING_OFFLINE | 0 | 2 | 3 | 2 | — |
| 19 | MONTOS_REFERENCIA_INTERNET | 0 | 0 | 2 | 2 | — |
| 20 | BANCO_PROBLEMAS_NECESIDADES | 0 | 0 | 2 | 2 | — |
| 21 | GUIA_DISCOVERY_CALLE_FASE0 | 0 | 1 | 2 | 2 | — |
| 22 | CUESTIONARIO_EQUIPO_PILOTO | 0 | 0 | 1 | 1 | — |
| 23 | VOLCADO_RESPUESTAS_CUESTIONARIO | 0 | 1 | 2 | 1 | ✅ Tests |
| 24 | REGISTRO_PENDIENTES_PACK | 8* | 2 | 1 | 0 | ✅ P3 count 6; P0 humanos abiertos |
| 25 | RESUMEN_ALIADO_GABRIEL_BARRIOS | 0 | 1 | 2 | 1 | ✅ Tests |

\*P0 en REGISTRO = ítems **humanos** (GitHub, NDA, demo, etc.) — no autofix IA.

---

## Hallazgos P0 (críticos)

### P0 documentales (remediados en autofix)

| ID | Archivo | Hallazgo | Remediación |
|----|---------|----------|-------------|
| P0-D01 | PERFIL §3, §8 | SOM M3=**15**/M6=**41** vs PROYECCION §1.1 M3=**62**/M6=**97** | ✅ Sync 21 jun 2026 |
| P0-D02 | README + 9 archivos | Tests **399** vs suite **443** (jun 2026) | ✅ Actualizado a 443 + nota re-verificar |
| P0-D03 | README | "**24 documentos**" vs **25** `.md`; RESUMEN_GABRIEL no indexado | ✅ 25 archivos + anexo outreach |
| P0-D04 | REGISTRO tabla resumen | P3 cantidad **4** vs **6** ítems (P3-01…P3-06) | ✅ Corregido a 6 |

### P0 humanos (REGISTRO — acción founder)

| ID | Ítem | Responsable |
|----|------|-------------|
| P0-01 | URL GitHub o acceso repo bajo NDA | Founder |
| P0-02 | % dedicación Zonix vs otros proyectos | Founder |
| P0-03 | 2–3 referencias verificables | Founder |
| P0-04 | Demo en vivo / video ≤5 min | Founder |
| P0-05 | NDA / data room si inversor lo exige | Founder |
| P0-06 | Re-run **443 tests** + commit en VOLCADO §1.2 | Founder |
| P0-07 | Tracción pre-wire (LOI / MOU farmacia) | Founder |
| P0-08 | Aprobación final pack pre-envío inversor | Founder |

---

## Hallazgos P1 transversales (pendientes — Lotes Fase 4)

| Tema | Archivos | Descripción |
|------|----------|-------------|
| **ALINEACION obsoleta** | ALINEACION | Snapshot mayo 2026: pipeline Eats, smoke no doc, falta caps SAFE/CAC; refresh jun 2026 |
| **CHECKLIST caps** | CHECKLIST | Guion Ask solo Lean 101k/cap 600k; faltan 118k/650k y 135k/720k |
| **PROYECCION firmas** | PROYECCION §1.1 | Total fila **175** vs suma columna meses **185** — aclarar convención |
| **SUPUESTO KPIs** | SUPUESTO | Day-D mal como "Mes 3"; trigger cash M6 **48.100** no en PROYECCION |
| **Auth / bundle** | PROPUESTA_USUARIO_FINAL | Firebase OTP vs `com.zonix.eats` Android; copy "90 min" vs SLA `[PENDIENTE]` |
| **Rx / estados** | PLAN_MODULO | Farmacovigilancia §11 sin código; retención 10 años doc vs 90 días código |
| **B2B mom-test** | PROPUESTA_B2B §2.0 | Validación calle pendiente; waiver §11 proxy ~453 |
| **MENSAJE Fase 0** | MENSAJE | Bridge T+0→Day-D poco explícito en cold email |

---

## Contradicciones cross-doc (juez mayor)

| Contradicción | Fuente A | Fuente B | Resolución |
|---------------|----------|----------|------------|
| SOM M3/M6 | PERFIL §3 (15/41) | PROYECCION §1.1 (62/97) | ✅ PERFIL alineado a PROYECCION |
| Tests count | README/BRIEF (399) | AUDIT_360 (443) | ✅ Pack actualizado |
| M6 gate PERFIL | §6.5 ≥**97** activas | §3 antigua **41** | ✅ Coherente tras sync |
| Firmas año 1 | PROYECCION total **175** | Suma columnas **185** | ⚠️ Lote A — FP&A |
| Retención Rx | PLAN_MODULO 10 años | Código/config 90 días | ⚠️ Lote B + `[PENDIENTE abogado]` |
| Android bundle | PROPUESTA_USUARIO `com.zonix.pharma` | build.gradle `com.zonix.eats` | ⚠️ Lote B — doc transitorio |

---

## Gaps por tipo de documento

| Tipo | Gap principal |
|------|---------------|
| Finanzas | Recalibrar waiver B2B por cohorte; cerrar delta firmas 175/185 |
| Producto | ALINEACION jun 2026; smoke Rx E2E en SMOKE_RX_E2E.md |
| Legal | P3-01…P3-06 dictamen abogado/farmacéutico sin llenar |
| Comercial | Mom-test calle Fase 0; LOI farmacia piloto (P0-07) |
| Inversor | CHECKLIST multi-tier; demo/video (P0-04) |
| Interno | VOLCADO §1.2 commit fresco post-tests |

---

## Fase 3 — Autofix seguro aplicado (21 jun 2026)

| Archivo | Cambio |
|---------|--------|
| `README.md` | Fecha jun 2026; 25 archivos + anexo Gabriel; tests **443**; links duplicados PLAN_REGULATORIO unificados |
| `BRIEF_UNA_PAGINA.md` | **399→443** (3 ocurrencias) |
| `CHECKLIST_PRE_INVERSOR.md` | **399→443** (4 ocurrencias) |
| `CONTEXTO_PITCH_Y_DECISIONES.md` | **399→443** (2 ocurrencias) |
| `MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md` | **399→443** (4 ocurrencias) |
| `VOLCADO_RESPUESTAS_CUESTIONARIO.md` | **399→443** |
| `RESUMEN_ALIADO_GABRIEL_BARRIOS.md` | **399→443** (2 ocurrencias) |
| `REGISTRO_PENDIENTES_PACK.md` | P0-06 y tabla P3; **399→443** |
| `ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md` | **443** BE + **~228** FE |
| `PERFIL_MERCADO_PILOTO.md` | §3 y §8: M3 **62**/3.100, M6 **97**/4.850 |
| `UNIT_ECONOMICS.md` | Título §7.1: **158→175** USD/mes |

**No autofixeado (por diseño):** cifras ambiguas (175 vs 185 firmas), legal, narrativa comercial, P0 humanos, refresh completo ALINEACION.

---

## Fase 4 — Mejoras mayores por lotes (requieren OK founder)

### Lote A — DD numérica (prioridad alta)
- PROYECCION: nota FP&A sobre **175 vs 185** firmas
- SUPUESTO: corregir etiqueta Day-D; alinear trigger M6 a PROYECCION §1.3
- CHECKLIST: guion Ask con **3 tiers** capital/cap
- PERFIL §3.1: revisar narrativa post-sync M3/M6

### Lote B — Producto vs pack
- ALINEACION: refresh **jun 2026** (CI Pharma, 443 tests, smoke Rx, caps)
- PROPUESTA_USUARIO_FINAL: nota transitoria `com.zonix.eats` Android + Firebase OTP
- PLAN_MODULO: alinear estados orden + retención con `[PENDIENTE abogado]`

### Lote C — Comercial / outreach
- PROPUESTA_B2B §2.0: plantilla mom-test post-GUIA_DISCOVERY
- MENSAJE: párrafo bridge Fase 0 en cold email
- GUIA_DISCOVERY: pricing mom-test alineado a tiers B2B

### Lote D — Legal / REGISTRO
- Integrar hallazgos AUD-01…08 en REGISTRO
- P3-07 ART retención (si aplica)
- Cierre P0 humanos cuando founder complete datos

**Para aplicar un lote:** responder *"OK Lote A"* (o B/C/D) en chat.

---

## Roadmap sugerido (pre-reunión inversor)

1. **Hoy:** Founder cierra P0-06 (re-run tests + VOLCADO §1.2)
2. **Esta semana:** OK Lote A + B (DD numérica + producto)
3. **Antes envío zip:** P0-01…P0-05, P0-08; excluir anexo Gabriel del zip default
4. **Post-wire:** Lote C/D; dictámenes P3 abogado/farmacéutico

---

## Metodología y trazabilidad

- **25 subagentes** `explore` read-only, rúbrica 10 puntos idéntica
- **Juez mayor:** deduplicación + cruce PROYECCION/PRESUPUESTO/UNIT/README/ALINEACION
- **Skills:** `jarvis-core`, `zonix-lanzamiento-docs`, `zonix-startup-context`, `parallel-judge-ops`
- **Plan origen:** `.cursor/plans/auditoría_forense_pack_lanzamiento_5ca75cd6.plan.md` (no editado)

---

*Generado por JARVIS — auditoría forense pack Lanzamiento Zonix Pharma.*

**Siguiente pasada:** [AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md](AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md) (v2 — delta, Lotes A–D aplicados).
