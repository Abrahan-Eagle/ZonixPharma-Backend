# Forense multi-LLM — Legal Alternativo (TikTok @legal_alternativo)

> **Snapshot histórico (pre-cierre Whisper-dual):** cobertura ASR ~16 y scores ola1 son **muestra pre-cierre**. Estado vivo: `PROGRESS.md` + `CHECKLIST_TT.md` (**Whisper-dual 328/328**). Destino editorial: **C**. Skill canon vivo: **v1.3.3** (`SKILL.md`); menciones a v1.1 / v1.3.2 abajo = versión al redactar el informe.
>
> **Slim 2026-08-09:** `themes_*`, `deep_*.md`, `transcripts/`, `analyses/`, `meta/` **no** están en el árbol (gitignore). Este informe es snapshot; no reabrir rutas eliminadas.

**Juez:** GROK · **Fecha informe:** 2026-08-09 · **Destino:** C (Legal Alternativo + notas Zonix) · **Checklist TT (cierre):** 328/328  
**Inputs fusionados (ola 1, eliminados del árbol):** `themes_composer_slices_00_01.md` + `themes_grok_slices_02_03.md` + `deep_composer.md` + `deep_grok.md` + `PROGRESS.md`  
**Frontera de marca:** este informe es solo Legal Alternativo. No mezclar claims ni roadmap con Zonix Pharma (salvo esta línea de exclusión).

---

## Veredicto ejecutivo (≤10 líneas)

1. El canal tiene **dos eras**: reciente = SaaS/contratos/datos (slices 00–01 + Whisper); antigua = marca IMPI + entretenimiento PI (slices 02–03; muchos títulos pobres en packs históricos).
2. El diferencial KEEP es **legal operativo para software en México** (titularidad de código, pack 5+5 docs, T&C MX, encargo LFPDPPP, NDA/certeza, socios).
3. La era antigua KEEP selectivo: **IMPI proceso/negativa/renovación/naming**; DROP curiosidades y lifestyle.
4. Formato ganador canónico: **pregunta/mito → lista 3–5 + riesgo → CTA comentarios**; conversión a consulta aún escasa en la muestra ola1.
5. Claims sensibles: reforma datos 2025 / autoridad post-INAI→**SABG**, “fuera de la ley”, valuación SaaS por IA, jurisdicción Argentina — disclaimer + HITL en ads.
6. **Post-cierre:** Whisper-dual TT **328/328** (`PROGRESS.md`); IG sigue HITL; ~16 transcripts con pad `[CAPTION]`; 3 IDs sin título en inventario.
7. Scores Whisper **ola1 (muestra histórica ~7 IDs):** 5 canónicos = docs externos, T&C triggers; 4 = encargo, socios, contratos-marca, internos (ASR); 4 = NDA (contenido 5, transcript 3).
8. Prioridad P0: subtítulos humanos en jerga (NDA/IMPI/INDAUTOR/cesión/IA); unificar serie 5+5; bridge “marca → contratos software”.
9. Backlog editorial: privacidad operativa, fiscal tech (con contador), MSA internacional, política IA, data room — no más PI 101.
10. Skill `legal-alternativo-content` (al redactar: **v1.1**; **canon vivo v1.3.3**) + `ROADMAP_CONTENIDO.md`; HITL residual en `PROGRESS.md` (destino **C**).

---

## Universo y cobertura

| Dimensión | Valor (histórico vs cierre) | Evidencia |
|-----------|-----------------------------|-----------|
| **TikTok IDs** | **328** | `ids_tt.txt`, `PROGRESS.md` |
| **Instagram** | **⛔ bloqueado** | yt-dlp sin cookies → `hugette.alternativo` HITL |
| **Whisper-dual (cierre)** | **328/328** | `PROGRESS.md`, `CHECKLIST_TT.md` (transcripts/jueces fuera del árbol post-slim) |
| **Whisper N (snapshot informe)** | **~16** en la ola forense inicial (histórico) | No usar como estado actual |
| **Desc / meta M** | Variable; no bloquea 328 | `meta/tt/` (histórico; fuera del árbol) |
| **Title-only (packs históricos)** | Era antigua ≈ IMPI en slices 02–03 | Composer/Grok themes |
| **`[CAPTION]`** | ~16 transcripts pad (HITL calidad) | `PROGRESS.md` |
| **Límite metodológico** | No inventar audio; ASR `base` distorsiona jerga MX; corpus legacy eliminado (slim) | Ambos workers + juez |

**IDs sin título (inventario):** `7387100035592277254`, `7309692234851454214`, `7286165820743355653`.

**Whisper deep ola1 (7):**  
`7671422834215767317`, `7671083158976171285`, `7670718223968472340`, `7669982190083525908`, `7668490444413603092`, `7668042876626013461`, `7666183627155328276`.

**Whisper wave2 + residual (histórico):** jueces `*.judge.json` estaban en `analyses/tt/` — **fuera del árbol** post-slim; cola Whisper vaciada al cierre.

---

## Taxonomía canónica KEEP (fusionada, con conteos)

Conteos **aproximados** sobre 328 TT (deduplicados: un video → un cluster primario). Era reciente ≈ Composer; era antigua ≈ Grok title-only.

| ID | Theme KEEP | ≈ count | Era dominante | Anclas |
|----|------------|---------|---------------|--------|
| K1 | **Titularidad del código / cesión / work-for-hire** | ~28 | Reciente | freelancers, empleados, “pagar ≠ dueño” |
| K2 | **Pack documental SaaS (5 externos + 5 internos)** | ~22 | Reciente | licencia, T&C, aviso, encargo, laboral, NDA, IA policy |
| K3 | **Marcas IMPI — proceso / FAQ / costo / clases** | ~30–35 | Antigua | registro, `#impi` |
| K4 | **Negativa / impedimentos / anulación / renovación / uso** | ~12–14 | Antigua | “me niegan”, perder marca |
| K5 | **Naming / tipos de marca / marca vs nombre comercial** | ~10–12 | Antigua | arbitrarias, ChatGPT naming |
| K6 | **Patente vs derecho de autor vs secreto (MX software)** | ~15 (consolidar) | Ambas | idea ≠ patente; INDAUTOR/secreto |
| K7 | **Socios, vesting, separación, entrada de capital** | ~7–10 | Reciente | convenio, valuación previa |
| K8 | **NDA / confidencialidad / certeza (no “registro”)** | ~8–11 | Ambas | myth-bust + secreto industrial |
| K9 | **Privacidad / LFPDPPP / responsable–encargado** | ~4–8 (subrepresentado) | Reciente | encargo, aviso; gap operativo |
| K10 | **IA generativa + PI (empleados, prompts, Copilot)** | ~9–14 | Reciente + algo antigua | política interna, autoría IA |
| K11 | **Relación comercial cliente (scope, enterprise, impago, demos)** | ~12 | Reciente | change order, cortar SaaS |
| K12 | **Fundraising / due diligence / valuación SaaS** | ~9 | Reciente | data room, DD |
| K13 | **Casos PI con takeaway accionable** | ~15–20 (filtrar) | Antigua | Adidas/Puma, “marcas no se patentan” |
| K14 | **Franquicia (selectivo, ticket alto)** | ~5–6 | Antigua | P1/P2 franquiciar |
| K15 | **Open source / licencias en producción** | ~4 | Reciente | auditoría OSS |
| K16 | **Enforcement “me copian” (con costos/tiempos)** | ~4–6 | Antigua | actualizar con realismo |

**Núcleo de posicionamiento (KEEP duro):** K1+K2+K8+K9+K10+K11 + puente K3→K2 (“de marca a contratos de software”).

---

## DROP / degradar

| Theme | Acción | Motivo |
|-------|--------|--------|
| PI 101 genérico repetido (marca≠patente 4.ª+) | DROP / 1 mega-guía única | Saturación, bajo diferencial |
| Curiosidades sin puente legal (Ouija, Santa, papel baño, vikingos) | DROP o etiqueta “PI story” | Diluye expertise SaaS/IMPI |
| Lifestyle / autoliderazgo / dúos sin PI | DROP | Fuera de destino C |
| Artista / influencer / disquera (legacy) | Degradar | Audiencia distinta al core actual |
| Pleitos solo-chisme sin takeaway | Degradar | Watchbait no evergreen |
| Hashtag-only / títulos vacíos | No reutilizar hasta metadata | Inútil para SEO y forense |
| Metaverso / “marcas en el espacio” sin update | HOLD/DROP | Riesgo dated |
| “En 2026” sin novedad normativa | Degradar plantilla | Fatiga |
| Estadísticas Gartner/McKinsey sin fuente | DROP claim o citar | Credibilidad |
| Fraude genérico en redes | DROP | Off-brand |
| Videos `(sin titulo)` 145–164 / 3 vacíos | No citar como evidencia | Hueco forense |

---

## Guion playbook (hook → cuerpo → CTA) canónico

```
HOOK (0–3 s)
  • Pregunta dolorosa del founder  OR  mito buscado (“¿registrar NDA?”)
  • Analogía cotidiana (seguro auto, menú restaurante)  OR  “Respuesta a @…”
  • Emoji de alerta solo si aporta contraste (no decorar)

CUERPO (15–45 s)
  • 3–5 puntos numerados ON-SCREEN
  • Por cada ítem: para qué sirve + qué pasa si falta
  • Marco MX explícito en 1 frase (LFPDPPP / IMPI / INDAUTOR / Código de Comercio) cuando aplique
  • Excepción / “cuándo NO aplica” (triage) — firma de autoridad

CTA (últimos 3–5 s)
  • Default engagement: “¿Cuántos de estos X tienes?” / “Cuéntame en los comentarios, te leo. Adiós.”
  • High-intent (T&C, encargo, socios, negativa IMPI): + “Agenda tu consulta” (modelo video 5)
  • Serie: teaser “siguiente video: …” o pin al díptico 5+5
```

**Variantes KEEP:** Parte I/II; mito vs realidad; checklist; caso anónimo de founder.  
**Evitar:** storytime largo sin gancho legal; absolutismos sin jurisdicción; hard-sell en cada video.

---

## Claims do/don’t (México; LFPDPPP; IMPI; INDAUTOR; NDA; T&C)

### DO (mantener con matiz)

| Claim | Condición |
|-------|-----------|
| Sin contrato escrito, titularidad del código es ambigua | No prometer “siempre recuperable” |
| Software MX: suele DA / secreto, no “patente de idea” | Matizar patentes de invención implementada |
| T&C / plantillas US pueden ser ineficaces en MX | Listar cláusulas con fundamento; no “número mágico” |
| NDA ≠ cesión de derechos ≠ política de IA | Mensaje core |
| Encargo de tratamiento ≠ contrato de desarrollo/licencia | Cuando hay datos de no-clientes |
| NDA no se “registra”; certeza vía notario / FEA / evidencia | Distinguir activo (INDAUTOR/secreto) vs documento |
| Beta testers ≠ T&C generales | Diferenciador de producto |
| Cortar servicio por impago: riesgo contractual | Procedimiento + cláusula, no “nunca cortes” |
| Marca ≠ patente ≠ derecho de autor | Educativo evergreen |
| Regulaciones por ubicación del usuario / mercado | No solo “dónde está el servidor” |

### DON’T

| Riesgo | Mitigación |
|--------|------------|
| “Operas fuera de la ley” sin matiz de autoridad/sanción | Urgencia + disclaimer |
| Reforma 2025 / INAI → **SABG** (DOF 20-mar-2025): skill (v1.1→**v1.3.2+** pack MX) nombra; HITL antes de paid/ads (plazos/sanciones) | HITL legal antes de paid/ads |
| Cifras Gartner/McKinsey sin año/fuente | Citar o eliminar |
| “Tu SaaS no vale” por uso de IA | Opinión ≠ regla legal |
| INDAUTOR “tajante” sobre prompts | Criterio actual, área en evolución |
| Argentina / US como si fueran MX | Etiquetar jurisdicción |
| Asesoría personalizada disfrazada de tip | Cierre: orientación general |
| SAT × marca / software pirata absolutos | Disclaimer; no consejo fiscal personalizado |
| Salud / datos sensibles sin skill regulatoria | Solo LFPDPPP; no NOMs médicas inventadas |
| WhatsApp como evidencia sin matiz de integridad | Matizar |

**Disclaimer de canal (canónico):**  
> Contenido educativo sobre derecho mexicano aplicado a negocios tech. No constituye asesoría legal personalizada.

---

## Scores por video Whisper (tabla id | composer | grok | juez | notas ASR)

| id | composer | grok | **juez** | notas ASR |
|----|----------|------|----------|-----------|
| `7671422834215767317` | 4 | 4 | **4** | contrato→“con rato”; avisas→“visas”; Cuéntame→“Péntame” |
| `7671083158976171285` | 5 | 5 | **5** | ley→“lege”; cesión→“sesión”; leve |
| `7670718223968472340` | 4 | 5 | **5** | NDA→“MBA”; IA→“día”; es tuyo→“estoy”; **contenido 5, ASR aparte** |
| `7669982190083525908` | 4 | 4 | **4** | **peor ASR del lote**; cartera→“cárteres”; reescuchar antes de copy |
| `7668490444413603092` | 5 | 5 | **5** | INAI→“lina”; Uber→“huberte”; autoridad “encicorrupción” → HITL nombre oficial |
| `7668042876626013461` | 3 | 5 | **4** | MBA/impinio/indowtor; inicio degradado; **contenido mito=5, reusabilidad ASR=3 → juez 4** |
| `7666183627155328276` | 4 | 4 | **4** | deal→“hielsen/hiel”; sección media confusa |

**Criterio juez:** pedagogía + reutilización de guion + riesgo reputacional. Errores ASR no bajan score si el guion oral es claro **salvo** cuando el transcript es casi inutilizable para republicar (entonces techo 4).

---

## Contradicciones Composer vs Grok (y resolución)

| # | Tema | Composer | Grok | **Resolución juez** |
|---|------|----------|------|---------------------|
| 1 | Score video 3 (internos) | 4/5 (ASR) | 5/5 (serie+IA) | **5** contenido; flags ASR en JSON; no mezclar calidad editorial con calidad Whisper |
| 2 | Score video 6 (NDA) | 3/5 | 5/5 | **4**: mito-busting KEEP; score 3 castigaba pipeline, no tesis; 5 ignora reusabilidad copy |
| 3 | Densidad “SaaS legal” del corpus total | ~55–60% útil en 00–01 | 02–03 ≈ 50%+ marca/entretenimiento | **Ambos correctos por era**; cartera global = dual-audiencia; estrategia = KEEP SaaS + KEEP IMPI selectivo + bridge |
| 4 | Audiencia primaria | Founders SaaS MX | PyME marca + curiosos PI (02–03) | **Primaria actual = SaaS/founders**; secundaria funnel = PyME marca; no abandonar IMPI |
| 5 | Cluster “PI general / legacy” | ~34 videos (21%) mezclados | B+C curiosidades ~50 de 164 antiguos | **Separar** KEEP casos-con-enseñanza vs DROP curiosidad pura |
| 6 | Privacidad | Gap grave (3–4 videos) | Casi nulo en 02–03 | **Consenso**: K9 subrepresentado → P0 backlog |
| 7 | CTA comercial | 1/7 Whisper | Idem | **Consenso**: subir agenda en high-intent |
| 8 | Claim INAI→SABG (video 5) | REVISAR humano | REVISAR + confirmar denominación | **HOLD claim en paid** hasta verificación; KEEP tema “actualiza TyC post-reforma” |
| 9 | Packs 02–03 evidencia | N/A (Composer no los cubrió) | Solo title_trunc | **Juez adopta Grok**: no inventar guiones antiguos; remediar metadata antes de re-análisis |
| 10 | Video 7 “Roman” | Nombre posible | Confirmar antes de roadmap | **HITL**: no citar como collab hasta confirmar |

**Sin contradicción material** en tesis de los 7 Whisper (encargo, 5+5, socios, TyC triggers, NDA no registrable, contratos no matan): alineados.

---

## Backlog priorizado (P0/P1/P2) top 20

### P0 (pipeline + riesgo + pilares)
1. Subtítulos humanos / re-ASR `small|medium` en videos 4 y 6 (y jerga NDA/IMPI/INDAUTOR en 3, 5).
2. Verificar claim autoridad de datos post-2025 antes de ads/pin.
3. Unificar **díptico 5 internos + 5 externos** (carrusel pin + lead magnet checklist 10 docs).
4. Video bridge: **“De marca IMPI a contratos de software”** (audiencia antigua → core nuevo).
5. Remediar packs 02–03: inyectar títulos desde `inventory_tt.tsv` + fetch desc.
6. Aviso de privacidad SaaS B2B: web vs contrato (gap K9).
7. Contrato de encargo: cláusulas que pide enterprise (serie Encargo 101).

### P1 (crecimiento editorial)
8. Política interna de IA (5 reglas) + Copilot/cesión para DD.
9. Data room 48 h: 12 docs que pide angel MX.
10. Negativa IMPI → playlist evergreen (P1/P2 + notificación).
11. Checklist post-registro marca (uso, renovación, no perder).
12. Change order / scope creep con cláusula modelo.
13. Cortar SaaS por impago: procedimiento 7 días + copy email.
14. Separación de cofundador: timeline día 1–30.
15. NDA 60 s: qué es + qué debe contener + certeza (no registro).
16. Naming seguro + riesgos ChatGPT (disclaimer fuerte).

### P2 (expansión / colabs)
17. Freelancer LATAM (CO/AR) → ¿quién es dueño del código? (etiqueta jurisdicción).
18. MSA cliente US / DPA / SCCs (nearshoring).
19. Auditoría open source en 1 tarde (5 licencias).
20. Facturar software MX (RESICO/IVA/retención) **con contador** + disclaimer fiscal.

---

## Gaps de inventario / HITL (histórico + vivo)

> Filas ASR “11/328” eran **pre-cierre**. Estado vivo ASR/jueces: **328/328** (`PROGRESS.md`).

| Gap | Estado | Acción founder / pipeline |
|-----|--------|---------------------------|
| **Instagram** `hugette.alternativo` | Bloqueado sin cookies | Exportar cookies IG o subir MP4s a `raw/ig/` |
| **ASR / Whisper-dual** | ✅ **328/328** (cierre); fila “11/328” = histórica | Ver `PROGRESS.md` / `CHECKLIST_TT.md` |
| **Deep dual faltante** | ✅ cola Whisper con juez al cierre | Nuevos ASR → juez residual |
| **Captions TT** | Variable / meta | Completar fetch si hace falta editorial |
| **Packs 02–03 texto** | titles vía inventory en corpus | OK para taxonomía histórica |
| **3 títulos vacíos** | IDs en informe | Fetch manual / aceptar hueco |
| **Claims regulatorios 2025** | HITL legal | Abogada valida copy antes de paid |
| **ROADMAP + skill file** | ✅ | `ROADMAP_CONTENIDO.md` + skill **v1.3.2+** |

---

## Input para skill legal-alternativo-content (bullet list de reglas operativas)

- Posicionar canal como **Legal Alternativo / Hugette** — legal práctico para **software, SaaS y marcas en México**. Corp Zonix usa capas A–C de la skill (no guiones D en pack/UI).
- Audiencia primaria: **founders / devs que emprenden / PyME tech MX**; secundaria: emprendedores de marca (IMPI) a convertir con bridge.
- KEEP duro: titularidad de código, pack 5+5, T&C hechos para MX, encargo LFPDPPP, NDA/certeza, socios/vesting, IA+PI, enterprise lento, IMPI proceso/negativa/renovación.
- DROP: curiosidades sin puente, lifestyle, PI 101 spam, hashtag-only, influencer/disquera legacy, stats sin fuente.
- Guion: hook pregunta/mito/analogía → lista 3–5 + riesgo → excepción “cuándo no” → CTA “te leo”; en high-intent añadir **agenda consulta**.
- Jurisdicción: default **México**; si mencionas otro país, **etiquétalo en la primera frase**.
- Vocabulario on-screen obligatorio (no confiar en ASR): **NDA, IMPI, INDAUTOR, cesión, LFPDPPP, aviso de privacidad, encargado, responsable, IA**.
- Claims fuertes (“fuera de la ley”, reforma 2025, valuación, patentes US): **matiz + disclaimer** o HOLD hasta verificación.
- Disclaimer fijo al final de piezas normativas: orientación general, no asesoría personalizada.
- Serie > one-off: enlazar internos↔externos, encargo↔aviso↔T&C, Parte I/II.
- Lead magnets preferidos: checklist 10 docs, matriz “¿qué documento según modelo?”, guía certeza NDA, checklist negativa IMPI.
- CTA medible: sustituir solo “Contácteme” por magnet + tracking cuando haya landing.
- No absolutizar WhatsApp/correo como prueba sin matiz; no consejo fiscal/SAT personalizado sin colab contador.
- Datos de salud/biometría: solo ángulo **protección de datos**; no claims médicos/NOM.
- Antes de republicar desde Whisper: pase humano si aparecen MBA/lina/sesión/impinio/cárteres.
- Contenido antiguo title-only: no inventar guion; re-fetch o ASR antes de “remezclar”.
- Priorizar backlog P0/P1 de este forense; medir saves en listas y comentarios en “¿cuántos de 5?”.
- Formato “Respuesta a @…” KEEP para algoritmo; documentar pregunta original en caption.
- Un video = un job; no mezclar marca+fiscal+IA en el mismo corte sin serie explícita.

---

*Informe canónico JUEZ GROK — forense multi-LLM Legal Alternativo. JSON por video Whisper deep: `analyses/tt/<id>.judge.json`.*
