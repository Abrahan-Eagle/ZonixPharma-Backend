# Forense PDFs founders / deep tech → skills (9 ago 2026)

> Lente: **Zonix Pharma**, pre-seed VE, pack Lanzamiento (SAFE **237.412**, Excel v4).  
> Método: triage inicial + **fan-out hoja por hoja** (lotes DT/UN/ENS) → extract durable.  
> **Canon post-borrado:** [EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md](EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md) — skills ya no dependen de PDFs locales en Descargas.  
> **No** copiar binarios PDF al repo. **No** mezclar con `legal-alternativo-content` (capa D) ni claims salud Rx.

Router operativo: [../zonix/SKILLS_STARTUP_USAR_NO_USAR.md](../zonix/SKILLS_STARTUP_USAR_NO_USAR.md).  
Forense hermano (Word GitHub, mismo día): [FORENSIC_GITHUB_STARTUP_RESOURCES_2026-08-09.md](FORENSIC_GITHUB_STARTUP_RESOURCES_2026-08-09.md).

## Resumen ejecutivo

Los PDF (archivados localmente tras extract) son **contexto founder/VC/ecosistema**, no briefing de cifras ni legal VE. KEEP vive en EXTRACT + skills; DROP = profiles, salary US, KPIs IDB.

| Score lote | 3/5 utilidad (ruido alto; extract durable listo) |
|------------|--------------------------------------------------|
| Confianza | 4/5 (7 lotes subagente + síntesis) |
| Estado PDF | **Descartable** en Descargas tras checklist del EXTRACT |

---

## Corpus (histórico — rutas Descargas ya no son fuente)

| Archivo (histórico local) | Páginas | Qué es | Veredicto |
|---------------------------|---------|--------|-----------|
| `Deep-Tech-The-New-Wave.pdf` | 155 | IDB Lab deep tech LAC (2023) | **TRIM** → EXTRACT §1 + `zonix-startup-context` |
| `Dialnet-…Unicorn…9503260.pdf` | 20 | Stafeev (2024) unicorn founders | **TRIM** → EXTRACT §2 + `zonix-founder-ops-index` |
| `ens_011623.pdf` | 75 | Ewens/Nanda/Stanton (2023) founder-CEO pay | **TRIM** → EXTRACT §3 + `zonix-launch-piloto` |
| Word «Recursos GitHub para Startups» | — | US/YC | **Ya forenseado** |
| Pack `INFORME_FACIL_500_COMO_STARTUP` | 4 | Evidencia mercado | **KEEP** pack |
| Auditoría Legal MX | — | PI/datos MX | **Otro lote** → `legal-alternativo-content` |

---

## A. Deep Tech: The New Wave (IDB Lab)

**Identidad:** Peña & Jenik; IDB Monograph 1107; CC-IGO BY-NC-ND; *for information only — not investment advice*.

**Señal del documento:** ecosistema LAC de deep tech (biotech, hardware, science-hard, ciclos R&D largos); métricas de valor/fondos/STEM en resumen ejecutivo (p. ej. startups con funding institucional, fondos enfocados).

| Destino | Contenido |
|---------|-----------|
| **KEEP (skill)** | Respuesta canónica si un LP pregunta «¿son deep tech?»: **No.** Zonix = marketplace pharma **existing market** (software + ops VE). Comparables: Farmalisto / agregadores — no Bioceres / satélites / mRNA. |
| **KEEP (contexto)** | BID Lab y deep tech LAC **existen**; capital y timelines distintos al raise Lean de marketplace. |
| **TRIM** | Tesis «Deep Tech expands development frontiers»; listas de verticales (robotics, cleantech, spacetech). |
| **DROP** | Country profiles, startup profiles del appendix, cifras del resumen ($8B ecosystem, 22–30% returns, +% GDP, etc.) como KPIs del pitch Zonix. |
| **RAG** | NotebookLM opcional del PDF completo; **nunca** fuente de SAFE/burn/ARPF. |

**Inyectado en:** `zonix-startup-context` + [EXTRACT §1](EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md) + `SKILLS_STARTUP_USAR_NO_USAR`.

---

## B. What Makes a Successful Unicorn Startup Founder (Stafeev 2024)

**DOI:** https://doi.org/10.26668/businessreview/2024.v9i5.4638  
**Hallazgos citados (descriptivos):** ~1163/3925 founders con experiencia emprendedora previa; ~93% hombres; majors diversos (STEM + no-STEM); universidades globales.

| Destino | Contenido |
|---------|-----------|
| **KEEP débil** | Experiencia previa emprendedora aparece a menudo en unicornios — *dato descriptivo*, no requisito de hiring Zonix. |
| **DROP** | Lista de universidades/majors «que producen unicornios»; % género como criterio; correlación → causalidad para Valencia pharma. |
| **Framing** | Sesgo a unicornios US-global (valoración ≥ $1B). Zonix es pre-seed VE — **no** checklist founder. |

**Inyectado en:** `zonix-founder-ops-index` + [EXTRACT §2](EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md) + `SKILLS_STARTUP_USAR_NO_USAR`.

---

## C. Founder-CEO Compensation and Selection into VC-Backed Entrepreneurship (ens_011623)

**Autores:** Ewens (Columbia), Nanda (Imperial), Stanton (HBS); Sep 2023.  
**Tesis (abstract):** el atractivo de emprender con VC para founders de alto earning potencial depende del **tiempo esperado hasta desarrollar el producto inicial**; tras hito de product development sube la compensación en cash y baja el riesgo no diversificable.

| Destino | Contenido |
|---------|-----------|
| **KEEP (1 frase)** | Riesgo founder ↓ cuando hay **producto en mercado** (no solo staging) — alinea con aprendizaje 500: evidencia de mercado > MVP técnico. |
| **DROP** | Tablas salary US, umbrales ACS ($150k/$225k/$300k), calibraciones VentureSource, equity joiners, DiD cloud industries. |

**Inyectado en:** `zonix-launch-piloto` + [EXTRACT §3](EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md) (puente a `APRENDIZAJE_500_EVIDENCIA_MERCADO.md`).

---

## D. Cruces ya resueltos

| Fuente | Estado |
|--------|--------|
| Word GitHub Startups | [FORENSIC_GITHUB…](FORENSIC_GITHUB_STARTUP_RESOURCES_2026-08-09.md) — glosario US/YC; no KPIs ni NVCA cierre VE |
| Informe fácil 500 | Canon en [../Lanzamiento/INFORME_FACIL_500_COMO_STARTUP.md](../Lanzamiento/INFORME_FACIL_500_COMO_STARTUP.md) + [../Lanzamiento/APRENDIZAJE_500_EVIDENCIA_MERCADO.md](../Lanzamiento/APRENDIZAJE_500_EVIDENCIA_MERCADO.md) |

---

## Acciones P0–P2

| Pri | Acción | Estado |
|-----|--------|--------|
| **P0** | Anti-patrón deep tech en `zonix-startup-context` | Este forense + skill |
| **P0** | No usar cifras IDB / unicorn paper / ens salary en pack | Documentado |
| **P1** | Puente ens + 500 en `zonix-launch-piloto` | Skill |
| **P1** | Caveats unicorn en `zonix-founder-ops-index` | Skill |
| **P2** | NotebookLM Deep Tech si hace falta RAG puntual | Opcional humano |
| **P2** | No reabrir Word salvo gap vs deep tech | Sin gap |

---

## Qué no hacer

- Pegar PDFs (21 MB) en el repo o en `SKILL.md`.
- Entrenar `legal-alternativo-content` / Hugette con este lote.
- `npx skills add` desde awesome lists mencionadas en el Word.
- Inventar que Zonix es deep tech healthtech / mRNA / science-hard.
