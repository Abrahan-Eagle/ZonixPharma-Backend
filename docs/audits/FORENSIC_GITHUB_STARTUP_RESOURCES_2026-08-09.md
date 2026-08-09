# Forense multi-LLM — Recursos GitHub para Startups (9 ago 2026)

> Fuente: Word local del founder en Descargas — `Recursos GitHub para Startups.docx` (**no versionado**).  
> Lente: **Zonix Pharma**, pre-seed VE, pack Lanzamiento (SAFE **237.412**, Excel v4).  
> Método: fan-out lotes A–F → juez Grok. **No inventar** elegibilidad ni P10/P90.

## Resumen ejecutivo

El Word es un tutorial genérico **US/YC** (skills → awesome lists → créditos GitHub → SAFE/NVCA → KPIs SaaS → pitch). **No** es briefing accionable para Zonix: el pack Lanzamiento ya cubre ask, C.A. VE y deck 8 slides con más rigor.

**Score Word: 2/5** (ruido con glosario + mapa de repos).  
**Confianza juez: 4/5.**

Hallazgos P0 del documento: (1) bloque LTV/CAC/NRR/CMGR con fórmulas **HUECO** (texto roto); (2) Delaware/NVCA como “indispensable” sin disclaimer VE.

Upside operativo único post-partner/funding: **GitHub for Startups USD 10.000** (verificado; bootstrapped puro no elegible).

---

## LLMs

| Rol | Modelo | Lote |
|-----|--------|------|
| Map | `cursor-grok-4.5-high` | A (narrativa), C (awesome), E (NVCA) |
| Map | `composer-2.5-fast` | B (skills), D (GitHub Startups), F (pitch) |
| Juez | `cursor-grok-4.5-high` | Consolidación |

Subagentes: [A](d25ed69d-c795-4c82-9359-6e785eac552a) · [B](149fd429-2bb0-4b93-900b-35ea9d19e838) · [C](2822e8bc-5c00-4d68-8f13-f91053bf6262) · [D](ea4507d3-4b59-4617-ba54-fe6157d1c83e) · [E](c680c7ad-76e3-4a18-b7a3-c8d5cf42bc7a) · [F](2333cf38-ade8-4cd1-b92c-f85d7e295a1c) · [Juez](e72fe156-e92a-4f05-8558-39d923ff3908).

---

## Tabla por URL (12; locale ES de GitHub Startups = mismo programa)

| url | Veredicto | Pri | Nota |
|-----|-----------|-----|------|
| https://github.com/shawnpang/startup-founder-skills | **TRIM** | P2 | Ya destilado en `zonix-*`; no `npx skills add` |
| https://github.com/topics/startup-toolkit | **SKIP** | P2 | Tag sin curar; claim Word sobredimensionado |
| https://github.com/kuchin/awesome-ceo | **KEEP** | P1 | Ya en `zonix-founder-ops-index` |
| https://github.com/eferrares/awesome-startup-resources | **ADOPT/TRIM** | P1 | Activo 2026; solo learning/fundraising |
| https://github.com/ahmadnassri/awesome-startup-resources | **SKIP** | P2 | Congelado 2017; links rotos |
| https://github.com/enterprise/startups (+ `?locale=es-419`) | **ADOPT** condicional | P1 | USD 10k verificado; partner o funding ≤ Series B |
| https://www.venturecapitalarchive.com/archives/nvca-model-legal-documents | **SKIP** op. / **TRIM** literacia | P2 | US/Delaware; no cierre VE |
| https://www.eleken.co/blog-posts/pitch-deck-examples | **TRIM** | P2 | Inspiración visual |
| https://gist.github.com/sejaldeshpande/a750e87498a3f4b950c54f5f1f0be78b | **SKIP** | P2 | Gist 2018 genérico |
| https://github.com/joelparkerhenderson/pitch-deck | **KEEP** | P1 | Router YC/Kawasaki/Sequoia tras MENSAJE_ENVIO |
| https://github.com/rafaecheve/Awesome-Decks | **TRIM** puntual | P2 | Contenido 2015–16 |
| https://www.slideshare.net/…/carta-x-kauffman-fellows/… | **SKIP** | P2 | Deck fondo→LP, no startup→VC |

---

## Matriz Word ↔ realidad (top claims)

| Claim Word | Veredicto | Base |
|------------|-----------|------|
| GitHub Startups hasta USD 10.000 | **PARCIAL→OK cifra** | Monto OK; elegibilidad omitida en Word |
| shawnpang = skills Cursor/Claude fundraising/hiring/MVP | **PARCIAL** | Real; GTM no bloque explícito; TRIM local |
| Topic startup-toolkit = Sequoia/JTBD/Lean vía IA | **FALSO** | Tag con 4 repos sueltos |
| NVCA open-source = estándar indispensable VE | **PARCIAL** US / **FALSO** VE | No sustituye C.A./SAFE/abogado |
| SAFE YC no es deuda; modalidades cap/discount/MFN | **OK** | Descripción US; enforceability VE = abogado |
| LTV/CAC/NRR/CMGR con umbrales accionables | **HUECO** | Fórmulas vacías / texto roto en conclusiones |
| Deck 10–15 slides Sequoia/YC/Kawasaki | **OK** | Best practice; Zonix ya tiene 8 slides en pack |
| Awesome/pitch = plantillas listas para raise | **PARCIAL** | Filtrar; ahmadnassri + Carta×Kauffman no |

---

## Acciones P0–P2 (Zonix)

| Pri | Acción |
|-----|--------|
| **P0** | No usar el Word para KPIs ni legal de cierre; cifras solo UNIT/PROYECCION/BRIEF (SAFE **237.412**) |
| **P0** | Canon legal: C.A. VE + SAFE adaptado + abogado (`ESTRUCTURA_LEGAL_*`); Delaware/NVCA fuera de cierre |
| **P1** | Evaluar GitHub Startups post partner (p. ej. 500 Global) o funding documentado; asumir tarjeta + cliff billing |
| **P1** | Deck: MENSAJE_ENVIO 8 slides; router joelparkerhenderson; ignorar Carta×Kauffman |
| **P1** | eferrares: TRIM learning/fundraising a índice opcional; no Tools |
| **P2** | kuchin KEEP vía `zonix-founder-ops-index` |
| **P2** | shawnpang TRIM referencia only |
| **P2** | Archivar Word como glosario; no briefing inversor |

---

## Relación con skills Zonix ya existentes

| Upstream | Estado en Zonix |
|----------|-----------------|
| shawnpang/startup-founder-skills | Destilado en `zonix-startup-context`, `zonix-fundraising-narrative`, `zonix-lanzamiento-docs`, etc. Política: `docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md` |
| kuchin/awesome-ceo | Indexado en `zonix-founder-ops-index` |
| NVCA / Delaware | Descartado como vehículo piloto; ver `ESTRUCTURA_LEGAL_Y_EQUITY.md` |
| Pitch templates | Canon: `MENSAJE_ENVIO` §4 + `BRIEF_UNA_PAGINA` |

---

## Apéndice — notas del juez

- Descarta ruido: stars finos, probes auxiliares, locale ES-419 como producto distinto.
- **[PENDIENTE verificación]:** si SAFE/angel VE cuenta como “outside funding” para GitHub Startups; drift “20 seats gratis” vs solo créditos 10k.
- No se copiaron plantillas NVCA al repo.
- Sin commit/push de este informe hasta OK founder (si aplica).
