# Notas — Epakon Capital

> Bitácora interna. No enviar pitch / no contactar sin OK founder.

## Bitácora

| Fecha | Canal | Qué pasó | Siguiente |
|-------|-------|----------|-----------|
| 2026-07-21 | Forense epakon.com (SPA+JS+tRPC) + AngelList + Ecosistema + SuperScout + insights.epakon.com | Score **73**. Ficha + resumen CEO. | Deck + decidir cold vs warm; pedir términos |
| 2026-08-07 | Post-500: barra credibilidad Plan A | Outreach **solo** si [`BARRA_CREDIBILIDAD_PLAN_A`](../../Lanzamiento/BARRA_CREDIBILIDAD_PLAN_A.md) **mínima** verde (fuerte si DD); lección [INFORME_FACIL_500…](../../Lanzamiento/INFORME_FACIL_500_COMO_STARTUP.md) | Cerrar demo + piloto; OK founder antes de mail |
| | | | |

## Gate outreach (post-500)

> **No pitch / no mail** sin: (1) barra **mínima** verde · (2) OK founder.  
> Barra **fuerte** si piden tracción o DD.  
> Canon: [`../../Lanzamiento/BARRA_CREDIBILIDAD_PLAN_A.md`](../../Lanzamiento/BARRA_CREDIBILIDAD_PLAN_A.md).  
> Esto **no** es el gate de recontacto 500 (`team-mx`).

## Forense — arquitectura

| Capa | Hallazgo |
|------|----------|
| Stack | SPA React/Vite; i18n **EN/ES**; bundle `/assets/index-*.js` |
| Sitemap | Solo homepage ([sitemap.xml](https://www.epakon.com/sitemap.xml)); `lastmod` 2026-05-03 |
| robots | Allow `/`; **Disallow** `/api/`, `/api/trpc/` |
| API | tRPC `/api/trpc` (credentials include); `/api/health` 200 |

### Rutas reales (router)

| Path | Uso |
|------|-----|
| `/` | Homepage (todas las secciones) |
| `/investor-login` | Login LPs |
| `/perspectives/:slug` | Artículos CMS |
| `/polsinelli` | Beneficio legal portfolio (Calendly) |
| `/admin/articles` (+ `/new`, `/:id`) | CMS admin (PIN) |
| `/404` | Fallback |

### Anclas homepage (nav)

`#home` · `#portfolio` · `#team` · `#pitch` · `#investors` · `#articles`

### Falsos paths (mismo shell 200, no son vistas)

`/pitch`, `/portfolio`, `/team`, `/benefits`, `/apply`, `/contact`, `/blog`, `/founders`, `/investors`, `/thesis`, `/for-founders`, `/es`, `/privacy`, `/terms` — resuelven por hash/modal, no por URL propia.

### Subdominio LP

[insights.epakon.com](https://insights.epakon.com/) — dashboard LPs (Fund I / SPV / iSPV / Angel / Fund+). Rutas bundle: `/portfolio`, `/fund1`, `/spv-portfolio`, `/vzla`, `/data-room`, `/fundraising`, `/investor-updates`, `/sourcing`, `/percentile-analysis`, `/admin`, `/construction`, `/access-denied`, `/logged-out`, `/login-success`. **No es canal founder.**

## Forense por vista / link (homepage)

| Sección | Hallazgo |
|---------|----------|
| Hero | “For Founders, by Founders”; CTAs → `#portfolio` / PitchModal |
| Portfolio | Claim **40+**; bundle lista **27** con `name`+`url`; filtros AI / Consumer / Fintech / Other |
| Philosophy | 40+ companies · **2 exits** · **250K jobs** (claims marketing; no auditados) |
| Team | Diego Salas (MP) · Vicente Zavarce (Yummy) · Greg Guggenheim (family office) |
| `#pitch` | Pre-seed & Seed · U.S., LatAm · check web **$50K–$1M** · CTA → PitchModal |
| News | Ecosistema, Mesh, Slash, Yummy, Stack AI, Titan, Railbird→DraftKings, Cashea, Reforged |
| Testimonials | HeroUI, Stack AI, Cashea, Triumph |
| `#investors` | Modal `investor.submit` → `investors@epakon.com` |
| Benefits | AWS $25K · Lazo 50% · Vouch 10% · Polsinelli (SAFE early; umbrales ~$500K) |
| Perspectives | 6 artículos (Diego Salas, ene–jun 2026) vía `articles.list` EN/ES |
| Footer | `mailto:info@epakon.com` · LinkedIn company · toggle idioma |

## PitchModal → `pitch.submit`

| Campo | Valores / notas |
|-------|-----------------|
| founderName, email, companyName | Requeridos |
| region | USA / LatAm / Europe / Asia / Africa / Other |
| stage | Pre-seed / Seed / Series A / Series B+ |
| field | Incluye **HealthTech**, Fintech, Logistics, Enterprise Software, Biotech, E-commerce, Education, … |
| b2bOrB2c | B2B \| B2C |
| elevatorPitch | 2–3 frases |
| Deck | **Obligatorio:** link **o** PDF/PPTX máx. **10 MB** (base64) |

Emails: `info@epakon.com` · `Diego@epakon.com` (CMS review) · `investors@epakon.com` · `ptanwar@polsinelli.com`

## Ticket — contradicción (usar banda AngelList)

| Fuente | Rango | Uso en scoring |
|--------|-------|----------------|
| epakon.com | $50K–$1M | Marketing / techo — **no** anclar ask |
| AngelList syndicate | **$100K–$300K**; typical **$147k** | **Primaria** |
| SuperScout | $50–250K; sweet ~**$150k** | Secundaria |

Ask Lean **237.412**: tip. ~150–300k = **parcial / syndicate** (no asumir cobertura total con un cheque).

## Portfolio público (27 URLs en bundle)

Cashea, HeroUI, HeyNouri, Housewarming, Krece, La Capilla, Lazo, Lime Therapeutics, Meru, Mesh, MotoGo, Nexor, Obsidiam, Otis, PetsTable, Railbird, Reforged Labs, Slash, Stack AI, Titan Dynamics, Toko, TopShip, Triumph Gaming, Venflow, Vikua, Yummy, iTruckr.

Press Ecosistema añade **Quarto / Kuentro** no listados en las 27 → gap inventario vs claim 40+.

## Perspectives (CMS `articles.list`, 2026)

1. Venezuela's Opening… (9 jun)  
2. AI Funding Supercycle… (12 may)  
3. Epakon Investment Thesis 2026… (7 abr) — AI verticales incl. **healthcare**  
4. LatAm Fintech 2026… (9 mar)  
5. Diaspora Founder Advantage… (11 feb)  
6. Venezuela's Capital Imperative… (14 ene)  

## Fuentes externas

| Fuente | Qué aporta |
|--------|------------|
| [AngelList](https://venture.angellist.com/epakon/syndicate) | Allocations $100–300k; first check Yummy/Cashea/Stack AI/…; dealflow Harvard/YC |
| [Ecosistema](https://ecosistemag.com/en/the-silent-architects-of-venezuelan-tech-meet-vicente-zavarce-and-diego-salas/) | Narrativa “silent architects” VE; portfolio Cashea/Meru/HeroUI/… |
| SuperScout | Sweet ~$150k; geo tip. 50% US / 40% LatAm / 10% other |
| Altss / directorios | SEC RIA citado; sedes LA/Boston inconsistentes — minor |

## Relación Casa212

Mismo núcleo **Diego + Vicente / Yummy**. Casa212 = cheque 150k + residencia Caracas. Epakon = cheque VC sin mudanza. **Complementarios**, no excluyentes hasta aceptar Casa212.

## Fit Zonix (una línea)

Ticket creíble ~150k cubre Lean; red VE de primer nivel + HealthTech en form; términos opacos → pitch + pedir SAFE/cap por escrito; sin gate de residencia.

## Pendientes

- [ ] Feeling founder (1–10)
- [ ] Cold PitchModal vs warm intro (Casa212/Yummy)
- [ ] Ask por escrito: **monto**, **instrumento**, **cap/%**, timeline
- [ ] Confirmar encaje HealthTech marketplace + Rx VE en tesis interna
- [ ] Deck listo (PDF/PPTX o link)

## Archivos / links

- Ficha: [FICHA.md](FICHA.md)
- Resumen CEO: [RESUMEN_CEO.md](RESUMEN_CEO.md)
- Pitch: https://epakon.com (Pitch Us / `#pitch`)
- AngelList: https://venture.angellist.com/epakon/syndicate
- Ranking: [`../RESUMEN_COMPARATIVO.md`](../RESUMEN_COMPARATIVO.md)
