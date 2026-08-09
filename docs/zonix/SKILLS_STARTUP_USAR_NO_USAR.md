# Skills startup — qué usar y qué evitar (Zonix Pharma)

> **Última actualización:** 9 agosto 2026 (forense Word GitHub + PDFs Descargas + **Documentos lote 2 + V2 hoja/Juez_Grok** → KEEP/TRIM/DROP).  
> Fuente: destilado en skills `zonix-*` locales. Upstream de referencia: [getagentseal/founder-playbook](https://github.com/getagentseal/founder-playbook), [shawnpang/startup-founder-skills](https://github.com/shawnpang/startup-founder-skills).  
> Forenses: [../audits/FORENSIC_GITHUB_STARTUP_RESOURCES_2026-08-09.md](../audits/FORENSIC_GITHUB_STARTUP_RESOURCES_2026-08-09.md) · [../audits/FORENSIC_PDFS_FOUNDERS_DEEPTECH_2026-08-09.md](../audits/FORENSIC_PDFS_FOUNDERS_DEEPTECH_2026-08-09.md) · [../audits/FORENSIC_PDFS_DOCUMENTOS_FOUNDERS_2026-08-09.md](../audits/FORENSIC_PDFS_DOCUMENTOS_FOUNDERS_2026-08-09.md) · [../audits/FORENSIC_PDFS_DOCUMENTOS_V2_HOJA_2026-08-09.md](../audits/FORENSIC_PDFS_DOCUMENTOS_V2_HOJA_2026-08-09.md) · Roadmap founder: [../Lanzamiento/ROADMAP_MEJORA_FUNDADOR_DESDE_FORENSE_GITHUB_2026-08.md](../Lanzamiento/ROADMAP_MEJORA_FUNDADOR_DESDE_FORENSE_GITHUB_2026-08.md).

## Usar siempre (Jarvis local)

| Skill | Uso |
|-------|-----|
| `zonix-startup-context` | Cifras, tiers, **Market Type** — **primero** |
| `zonix-lanzamiento-docs` | Router pack + anti-patrones + tensiones entre marcos |
| `zonix-empresa-ve` | C.A., RIF, SAFE, laboral |
| `zonix-fundraising-narrative` | Pitch, MENSAJE_ENVIO, **Cialdini** |
| `zonix-investor-materials` | Data room, CHECKLIST |
| `zonix-financial-model` | PROYECCION, UNIT, **waiver 100m-offers** |
| `zonix-launch-piloto` | PLAN, Day-D, **beachhead / chasm** |
| `zonix-lean-canvas` | Canvas 9 bloques, hipótesis, pivot, bilateral |
| `zonix-b2b-sales` | Farmacias B2B, SPIN |
| `zonix-regulatory-ve` | Copy salud VE |
| `zonix-legal-contracts-ve` | Contratos (checklist) |

## Marcos founder-playbook → skill Zonix (destilados mayo 2026)

| Marco externo | Skill Zonix | No instalar repo |
|---------------|-------------|------------------|
| startup-context / Market Type | `zonix-startup-context` | ✓ |
| four-steps, mom-test | `zonix-launch-piloto` | ✓ |
| Lean Canvas (Steve Blank UniMOOC) | `zonix-lean-canvas` | ✓ |
| spin-selling | `zonix-b2b-sales` | ✓ |
| monetizing-innovation, 100m-offers (waiver) | `zonix-financial-model` | ✓ |
| obviously-awesome, storybrand, made-to-stick | `zonix-fundraising-narrative`, `zonix-lanzamiento-docs` | ✓ |
| traction (Bullseye) | `zonix-lanzamiento-docs` | ✓ |
| crossing-the-chasm | `zonix-launch-piloto` | ✓ |
| influence (Cialdini) | `zonix-fundraising-narrative` | ✓ |
| data-room, fundraising-email | `zonix-investor-materials`, `zonix-fundraising-narrative` | ✓ |

## Anti-patrones (no aplicar al pack)

| Marco / recurso | Motivo |
|-----------------|--------|
| `blue-ocean-strategy` | Mercado **existente**; ver Market Type en `zonix-startup-context` |
| `100m-leads` | Paid agresivo; piloto Valencia acotado |
| `lean-startup` como dogma | Usar four-steps + mom-test |
| `founder-os`, VoltAgent hubs | Divergen del pack; riesgo cifras US |
| HIPAA / quant trading US | No VE pharma pre-seed |
| `emotixco/claude-skills-founder` | **Referencia** competitor-matrix / metrics — no `npx skills add` |
| Word / ensayo genérico «Recursos GitHub para Startups» (US/YC) | Glosario útil; **no** fuente de KPIs ni legal de cierre VE (fórmulas huecas; NVCA ≠ C.A.) |
| `github.com/topics/startup-toolkit` | Tag sin curar — no toolkit Sequoia/JTBD unificado |
| `ahmadnassri/awesome-startup-resources` | Congelado 2017; links rotos; legal CA/US |
| Carta × Kauffman Fellows (SlideShare “VC Fundraising Deck”) | Deck **fondo→LP**, no startup→VC |
| NVCA Model Legal Docs como cierre Zonix | SKIP operativo; solo literacia US — `zonix-empresa-ve` + abogado |
| IDB *Deep Tech: The New Wave* (155 p.) como narrativa pitch | Zonix **no** es deep tech; ver `zonix-startup-context` § Deep tech ≠ Zonix |
| Paper unicorn founders (Stafeev 2024) como checklist hiring/pitch | Descriptivo global ≥$1B; no majors/% género → Valencia pharma |
| Tablas salary / VentureSource (Ewens et al. 2023) en pack | Solo insight time-to-product vía `zonix-launch-piloto`; no cifras US |

## PDFs founders / deep tech (9 ago 2026)

**Canon durable (PDFs Descargas descartables):** [EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md](../audits/EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md).  
Forense: [FORENSIC_PDFS_FOUNDERS_DEEPTECH_2026-08-09.md](../audits/FORENSIC_PDFS_FOUNDERS_DEEPTECH_2026-08-09.md). **No** versionar binarios PDF.

| Recurso | Veredicto | Uso en Zonix |
|---------|-----------|--------------|
| *Deep Tech: The New Wave* (IDB Lab) | **TRIM** → EXTRACT §1 | `zonix-startup-context` autocontenido; DROP cifras/appendix |
| Stafeev unicorn founders backgrounds | **TRIM** → EXTRACT §2 | `zonix-founder-ops-index`; DROP majors/universidades/% como regla |
| Ewens/Nanda/Stanton founder-CEO compensation | **TRIM** → EXTRACT §3 | `zonix-launch-piloto` + puente 500; DROP salary tables |
| `INFORME_FACIL_500_COMO_STARTUP` (pack) | **KEEP** | Ya en Lanzamiento + `APRENDIZAJE_500_EVIDENCIA_MERCADO.md` |
| Word «Recursos GitHub para Startups» | **TRIM/SKIP** KPIs | Forense GitHub del mismo día — no reabrir |
| Auditoría Legal MX (docx) | **Otro lote** | `legal-alternativo-content` — no este router startup |

## PDFs Documentos lote 2 (9 ago 2026) + V2 hoja / fase 2

**Canon durable:** [EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md](../audits/EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md) (§1–5 onda A + §6 overlays fase 2).  
Forense v1: [FORENSIC_PDFS_DOCUMENTOS_FOUNDERS_2026-08-09.md](../audits/FORENSIC_PDFS_DOCUMENTOS_FOUNDERS_2026-08-09.md).  
Forense V2 (Grok extractores + **Juez_Grok A+B**): [FORENSIC_PDFS_DOCUMENTOS_V2_HOJA_2026-08-09.md](../audits/FORENSIC_PDFS_DOCUMENTOS_V2_HOJA_2026-08-09.md).  
**NEW_SKILL_GAP: ninguno.** Onda C Descargas: **no** re-extraer.

| Recurso | Veredicto | Uso en Zonix |
|---------|-----------|--------------|
| Founder's Playbook AI-Native (2026) | **TRIM** | `zonix-launch-piloto` + `zonix-startup-context`; DROP AI-hype / Scale IPO |
| Patel/Dakin Equity Allocation | **KEEP** patrones | `zonix-empresa-ve` + `zonix-founder-ops-index`; no dictamen VE |
| Startup Governance (CH) | **TRIM** `[CH-ref]` | `zonix-empresa-ve` + `zonix-legal-contracts-ve`; DROP arts. CO |
| Nesta Winning Together | **TRIM** | `zonix-b2b-sales` (+ payment terms); DROP logos EU corp |
| Azoulay Age High-Growth | **TRIM** caveats | `zonix-founder-ops-index`; DROP Census KPIs |
| startup-labor-markets | **TRIM→KEEP selectivo** | EXTRACT §6.1 → launch-piloto / founder-ops |
| BCG / FFM / FTUF / SOZ diversidad | **TRIM débil** | EXTRACT §6.3 → founder-ops; no KPI raise |
| Broughman/Fried IPO | **TRIM** 3 claims | EXTRACT §6.2 → empresa-ve (control pre-seed) |
| Understanding startup dynamics | **TRIM** ligero | EXTRACT §6.4 → founder-ops |
| Migrant Lens Colombia | **TRIM** narrativo | EXTRACT §6.5; DROP geo CO |
| FULLTEXT01 / Malta / Volition / WEF / Saudi / WBG / ESM / Asklöf / … | **DROP** | Ver forense V2 |

## Excepción: Spec Kit (ingeniería SDD)

| Recurso | Veredicto | Notas |
|---------|-----------|-------|
| [github/spec-kit](https://github.com/github/spec-kit) | **Usar** (producto) | `specify-cli` v0.8.15; skills `~/.cursor/skills/speckit-*` (`install.sh --all`); hub `specs/` en Backend |
| Spec Kit en `docs/Lanzamiento/` | **No usar** | Seguir `zonix-lanzamiento-docs` + `PROMPT_PACK_LANZAMIENTO.md` |

No confundir con `npx skills add` de repos founder: Spec Kit es CLI oficial MIT, no fuente de cifras del pack.

Guía: [SPEC_KIT_ZONIX.md](SPEC_KIT_ZONIX.md).

## No instalar / no usar como fuente de cifras

- `VoltAgent/awesome-agent-skills`, `agent-skills-hub` completo, `founder-os`, `JOINCLASS/ai-ceo-framework`
- Partners irrelevantes: Auth0, Segment, Algolia
- Fintech trading US: `7kfpun/awesome-fintech`, `quant-analyst`
- Roadmaps genéricos: `nilbuild/developer-roadmap`, `github/roadmap`, `nishant` tech agency

## Lente humana (opcional, sin `npx skills add`)

Veredictos forense 9 ago 2026 — detalle en [FORENSIC_GITHUB_STARTUP_RESOURCES_2026-08-09.md](../audits/FORENSIC_GITHUB_STARTUP_RESOURCES_2026-08-09.md).

| Recurso | Veredicto | Uso en Zonix |
|---------|-----------|--------------|
| `kuchin/awesome-ceo` (+ cto/tpm) | **KEEP** | `zonix-founder-ops-index` |
| [joelparkerhenderson/pitch-deck](https://github.com/joelparkerhenderson/pitch-deck) | **KEEP** | Router forma (YC/Kawasaki/Sequoia) **después** de MENSAJE_ENVIO / `zonix-fundraising-narrative` |
| [eferrares/awesome-startup-resources](https://github.com/eferrares/awesome-startup-resources) | **TRIM** | Solo learning / fundraising; no Tools enteros → `zonix-founder-ops-index` |
| [shawnpang/startup-founder-skills](https://github.com/shawnpang/startup-founder-skills) | **TRIM** | Ya destilado en `zonix-*`; no `npx skills add` |
| [GitHub for Startups](https://github.com/enterprise/startups) | **ADOPT** condicional | **USD 10.000** créditos (Enterprise/Copilot/Security) **verificado**. Elegibilidad: **partner aprobado** **o** funding externo ≤ Series B. Bootstrapped puro **no**. Tarjeta + facturación al vencer créditos. Post-partner/funding (p. ej. 500 Global); no bloquear país VE. Locale `es-419` = misma página. |
| Eleken pitch examples / Awesome-Decks | **TRIM** | Inspiración visual / 2–3 piezas históricas máx. |
| topic `startup-toolkit`, ahmadnassri, gist pitch 2018, Carta×Kauffman, NVCA cierre | **SKIP** | Ver anti-patrones arriba |

Repos Tier A (founder-playbook / shawnpang) → contenido ya en `.agents/skills/zonix-*`.

## Legal Alternativo (forense C) — qué sí / no aplicar a Zonix

Fuente: skill `legal-alternativo-content` **v1.3.3** (capas A–D; MX + intl + VE; overlay B2B2C) + `docs/LegalAlternativo/` (fuera del zip inversor). Repaso ASR: [`REPASO_TRANSCRIPTS_QA_2026-08-09.md`](../LegalAlternativo/REPASO_TRANSCRIPTS_QA_2026-08-09.md).

| Modo | Qué hacer |
|------|-----------|
| **Empresa Zonix / otra startup** (contratos, PI, T&C, privacidad, data room) | Capas **A → B → C**. Ops default **`[VE]`** (+ cross-border). Usar **`[MX]` como referencia** que ilustra patrones `[INTL-patrón]` (contraste/educación/claim MX) — **no omitir MX**. Preguntar país si falta. **No** capa D. |
| **Canal Hugette / LA** (TikTok/IG) | Solo capa **D** + pack **`[MX]`**. |
| **Salud / Rx / MPPS** | **`zonix-regulatory-ve`** + **`zonix-brand-ops`**. No esta skill. |

| Sí (proceso / higiene A–C) | No |
|----------------------------|-----|
| Checklist titularidad código, NDA ≠ cesión ≠ secreto ≠ política IA | Copiar guiones LA/Hugette o CTA “agenda consulta” al pack o app Pharma |
| Patrones intl + pack **`[MX]`** de referencia + pack **`[VE]`** ops | Presentar LFDA/IMPI/SABG como derecho venezolano |
| Evitar claims absolutos sin fuente; disclaimer | Claims terapéuticos / “cura” / “fuera de la ley” en salud |
| Ritmo: un job por mensaje (anti-patrón de copy) | Mezclar marca Legal Alternativo con raise 500/inversor |

Copy salud VE: **`zonix-regulatory-ve`** + **`zonix-brand-ops`**. No invocar capa D para redactar Lanzamiento. Capas A–C sí para higiene contractual/PI (VE ops + MX como referencia intl cuando aplique).

## Prompt corto

```
Usa zonix-startup-context + zonix-lanzamiento-docs. Cifras solo del pack. No instalar skills externas. Respeta anti-patrones en zonix-lanzamiento-docs.
```
