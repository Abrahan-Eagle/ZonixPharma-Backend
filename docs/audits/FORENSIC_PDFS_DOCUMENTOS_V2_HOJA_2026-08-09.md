# Forense V2 hoja-detallado — Documentos + fase 2 (9 ago 2026)

> **Método:** chunks 3p → extractores Grok (`cursor-grok-4.5-high`) → **Juez_Grok A + B** adversariales → orquestador.  
> **Hermano v1 (síntesis corta):** [FORENSIC_PDFS_DOCUMENTOS_FOUNDERS_2026-08-09.md](FORENSIC_PDFS_DOCUMENTOS_FOUNDERS_2026-08-09.md)  
> **Canon durable:** [EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md](EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md)  
> **Descargas (ya cerrado):** [EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md](EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md) — Onda C: **no** re-extraer.  
> Matrices crudas (sesión local, **efímeras** — ya no en `/tmp`): judges Documentos + fase2. **Canon = EXTRACT.**

**Reglas duras:** no inventar SAFE/burn; CH/US = ref no ley VE; no Legal Alternativo / Rx MPPS como claim pack.

| Score orquestador | **3.5 / 5** (media jueces A=3/5, B≈2.9/5) |
|-------------------|-------------------------------------------|
| NEW_SKILL_GAP | **NINGUNO** |
| FULLTEXT01 fan-out | **No** |
| Onda C Descargas | **No** re-extracción |

---

## Veredicto Juez_Grok (síntesis)

| Juez | Path | Hallazgo clave |
|------|------|----------------|
| A | Juez_Grok A (sesión) | DROP sólido; KEEP hinchado 2–3× en FP/NE/DV/LM |
| B | Juez_Grok B (sesión) | v1 onda A suficiente; fase2 = **4 overlays** (BR, LM, DV, UD) |

**Acción orquestador:** podar a ≤15–20 bullets nuevos/actualizados en EXTRACT; parchear skills existentes; **no** skill nueva.

---

## Onda A — cobertura página (5 KEEP)

| ID | PDF | Págs | Matriz | Filas reportadas | KEEP podado (target) |
|----|-----|------|--------|------------------|----------------------|
| FP | Founder's Playbook AI-Native | 36 | A-FP-1-18 + A-FP-19-36 | ~112 | ~12 |
| EQ | Patel/Dakin Equity | 7 | A-EQ-1-7 | 40 | ~5 |
| GV | Governance CH | 9 | A-GV-1-9 | 50 | ~6 |
| NE | Nesta Winning Together | 49 | A-NE-1-24 + A-NE-25-49 | ~130 | ~6 |
| AZ | Azoulay Age High-Growth | 44 | A-AZ-1-22 + A-AZ-23-44 | ~64 | ~4 |

Chunks 3p: sesión local efímera (**48** archivos; ya no en disco). Canon = EXTRACT.

### Claims núcleo (post-poda) — ver EXTRACT §1–5 + §6

Misma disciplina v1 + matices: AI scan ≠ compliance calificada; country-specific governance; payment terms en B2B.

---

## Onda B — fase 2

| ID | Fuente | Matriz | Veredicto |
|----|--------|--------|-----------|
| LM | startup-labor-markets (35p) | B-LM-1-35 | **TRIM→KEEP selectivo:** 3 fricciones hiring + generalista→especialista + imprint early joiners |
| DV | BCG + FFM + FTUF + SOZ | B-DV-cluster | **TRIM débil:** warm intros, anti-ESG theatre, anti-homofilia — **no** KPI raise |
| MG | Migrant Lens Colombia | B-MG-BR | **1 bullet** diaspora VE narrativo; DROP geo CO |
| BR | Broughman/Fried IPO | B-MG-BR | **3 claims** control founder post-capital; DROP IPO US |
| UD | Understanding startup dynamics | B-UD-1-30 + B-UD-31-86 | **2–3 bullets** people-failure + enact values; no taxonomías académicas |
| FT | FULLTEXT01 | — | **No** fan-out (ambos jueces) |

---

## Onda C — Descargas

**NO** re-extraer Deep Tech IDB / Stafeev unicorn / Ewens compensation. Canon ya en EXTRACT Descargas + skills. Motivo: bajo yield KEEP para piloto Valencia; solapa Azoulay/LM.

---

## DROP duro (sin fan-out)

Malta Residence, Volition×2, WEF list, Saudi Founders, WBG Gaza, ESM, Asklöf, Synthetic Founders arxiv, FP0464 Brasil, Eligibility Malta, tickets/CV Descargas, Arts. CO CH, preferred Delaware, Scale/IPO playbook, créditos Anthropic/YC como moat.

---

## Mapa PDF → skill (post-juicio)

| Skill | Fuentes KEEP |
|-------|--------------|
| `zonix-launch-piloto` | FP gates + LM hiring sequence |
| `zonix-startup-context` | FP anti AI-native + evidencia |
| `zonix-empresa-ve` | EQ + GV + BR control |
| `zonix-founder-ops-index` | AZ + DV selectivo + UD + EQ dilución |
| `zonix-b2b-sales` | NE (+ payment terms → cruce payments) |
| `zonix-legal-contracts-ve` | GV checklist + security gate humano |

---

## Checklist PDF descartables (usuario)

**Onda A (5):** Playbook, Equity, Governance, Nesta, Azoulay.  
**Onda B (tras EXTRACT §6):** labor-markets, BCG/FFM/FTUF/SOZ, Understanding dynamics, Migrant Colombia, finalfried Broughman — opcionales.  
**FULLTEXT01 / Malta / Volition / …:** borrar a criterio (DROP).  
JARVIS **no** borra sin orden.
