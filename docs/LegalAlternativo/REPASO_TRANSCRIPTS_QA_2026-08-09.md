# Repaso QA transcripciones TikTok — Legal Alternativo (9 ago 2026)

> **Objetivo:** estar seguros de calidad ASR + alineación skill tras cierre Whisper-dual 328/328.  
> **Corpus (histórico):** transcripts + analyses — **fuera del árbol** (slim 2026-08-09); evidencia viva = `CHECKLIST_TT.md` + este REPASO.  
> **Skill:** `legal-alternativo-content` (pre-repaso **v1.3.2** → overlay → canon vivo **v1.3.3**).  
> **No mezclar** con forense PDFs founders / Documentos V2.

## Integridad pipeline (reconfirmada)

| Check | Resultado |
|-------|-----------|
| Transcripts | **328** |
| Jueces dual | **328** |
| Checklist Whisper-dual | **328/328** |
| &lt;200 bytes | **0** |
| Pads `[CAPTION]` | **16** (HITL calidad) |
| Instagram | HITL (fuera de ola) |

## Muestra estratificada (n=24)

| Estrato | n | Criterio |
|---------|---|----------|
| KEEP recientes (K1/K2/K8/K9/K11) | 8 | score alto + temas núcleo |
| Era IMPI (K3–K5) | 8 | marca / negativa / uso |
| CAPTION / score bajo | 8 | pads + ruido ASR |

### Rúbrica agregada

| disposition | n | % |
|-------------|--:|--:|
| KEEP | 9 | 37.5% |
| TRIM (ASR jerga / flags) | 8 | 33.3% |
| DROP (pad CAPTION / Amara / audio vacío) | 7 | 29.2% |

| ASR | n |
|-----|--:|
| OK | 9 |
| TRIM-ASR | 8 |
| DROP-pad/CAPTION | 7 |

**Score muestra (orquestador): 4 / 5** — pipeline cerrado y usable; ~30% de la cola CAPTION/pad **no** es texto de guion (esperado y ya documentado en `PROGRESS.md`).

### Tabla muestra (resumen)

| id | sc | asr | disp | layer | notas |
|----|----|-----|------|-------|-------|
| 7141452913397779717 | 5 | OK | KEEP | A–C/D | marca + código |
| 7166038496866569477 | 5 | OK | KEEP | A–C | 5 activos a registrar |
| 7403040919189982469 | 5 | OK | KEEP | D | naming IA → IMPI |
| 7611007830832778503 | 5 | TRIM-ASR | TRIM | A–C | **B2B2C / sublicencia 3 niveles** — gap skill |
| 7655870891410214164 | 5 | OK | KEEP | A–C | secreto industrial 5 medidas (OK skill K6/K8) |
| 7171542217159396613 | 4 | TRIM-ASR | TRIM | D | limpi→IMPI |
| 7424243738328714502 | 4 | TRIM-ASR | TRIM | D | mba→NDA; caso Disney |
| 7616209125550148882 | 4 | TRIM-ASR | TRIM | A–C | sesión→cesión |
| 7153280240964357381 | 5 | OK | KEEP | D | ranking marcas (selectivo) |
| 7221587119876148485 | 5 | OK | KEEP | D | campaña / unicidad |
| 7436434312297336119 | 5 | OK | KEEP | D | naming |
| 7151094809782963462 | 4 | OK | KEEP | D | CAPTION pero usable |
| 7435323384872848695 | 4 | TRIM-ASR | TRIM | D | renovación 10y |
| 7559707286206205192 | 4 | TRIM-ASR | TRIM | D | solo logotipo = uso rígido |
| 7618776417018367240 | 4 | TRIM-ASR | TRIM | D | SCJN 2026 uso de marca — **HITL claim** |
| 7171487398537334021 | 3 | DROP-pad | DROP | — | “Música” |
| 7159997043354717446 | 3 | DROP-pad | DROP | — | “Usa este audio…” |
| 7339760484565912837 | 4 | OK | KEEP | D | CTA web |
| 7345924802307214597 | 3 | DROP-pad | DROP | — | ASR basura |
| 7355295521960922373 | 3 | DROP-pad | DROP | — | filler |
| 7402317419907206406 | 5 | DROP-pad | DROP | — | ¡Suscríbete |
| 7421989052192132358 | 3 | DROP-pad | DROP | — | Amara community |
| 7462760696539925765 | 4 | DROP-pad | DROP | — | Amara ES; theme `general` |
| 7534161049331813640 | 4 | TRIM-ASR | TRIM | A–C | CAPTION + lina→INAI? |

## Claims sensibles

| id | Tema | Acción |
|----|------|--------|
| 7618776417018367240 | Tesis SCJN 2026 uso de marca | **HITL** antes de ads; no inventar citas; capa D solo |
| (ninguno en muestra) | “fuera de la ley” / SABG | Cubierto en skill DON’T + `AUDIT_GEMINI_CLAIMS_MX` |

## Alineación skill (capas A–D)

| Hallazgo | ¿En skill pre-repaso v1.3.2? | Decisión (canon **v1.3.3**) |
|----------|-------------------|----------|
| Titularidad / pack docs / NDA / secreto / IMPI taxonomía | Sí | Sin cambio |
| ASR `[CAPTION]` / jerga → HITL | Sí | Ampliar: pads **Amara / “Música” / “Usa este audio”** = DROP |
| **B2B2C / marca blanca / sublicencia 3 niveles + responsabilidad usuarios finales** | **No** | **OVERLAY** capa A + K11 capa D |
| SCJN 2026 uso marca | No como ancla fija | Solo HITL en D; no dictamen |

**NEW_SKILL_GAP completo:** ninguno (no skill nueva). Overlay suficiente.

## HITL prioritario (calidad, no reabre 328)

1. Los **16** IDs con `[CAPTION]` — subtítulos humanos o marcar DROP editorial.
2. IDs con `asr_flags` tipo sesión→cesión / mba→NDA / limpi→IMPI / lina→INAI (lista histórica en jueces ASR — **fuera del árbol** post-slim; ver tablas de este REPASO + skill).
3. Claim SCJN 2026 (`7618776417018367240`) antes de paid.
4. Instagram: sigue bloqueado (`CHECKLIST_IG.md`).

## Conclusión

- Pipeline Whisper-dual **sigue íntegro** (328/328, 0 archivos vacíos).  
- ~29% de la muestra CAPTION/pad es **ruido esperado** — no invalidar cierre.  
- Contenido KEEP fuerte sigue alineado a taxonomía K1–K11.  
- **Un** hueco accionable inyectado en skill: sublicencia B2B2C / marca blanca.  
- Frontera Zonix: capas A–C higiene; **no** copiar guiones D a pack Lanzamiento.

## Referencias

- [PROGRESS.md](PROGRESS.md) · [FORENSIC_VIDEOS_MULTI_LLM.md](FORENSIC_VIDEOS_MULTI_LLM.md) · [CHECKLIST_TT.md](CHECKLIST_TT.md)  
- Muestra IDs / rúbrica n=24: artefactos de sesión local (`/tmp/la_sample24.*`) — **no versionados**; resumen en este documento.
