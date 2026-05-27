# Skills startup — qué usar y qué evitar (Zonix Pharma)

> **Última actualización:** 27 mayo 2026.  
> Fuente: [ANALISIS_FORENSE_BUSQUEDA_GITHUB_LANZAMIENTO_2026-05.md](ANALISIS_FORENSE_BUSQUEDA_GITHUB_LANZAMIENTO_2026-05.md), [research_links.md](research_links.md), [getagentseal/founder-playbook](https://github.com/getagentseal/founder-playbook), [shawnpang/startup-founder-skills](https://github.com/shawnpang/startup-founder-skills).

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
| `zonix-b2b-sales` | Farmacias B2B, SPIN |
| `zonix-regulatory-ve` | Copy salud VE |
| `zonix-legal-contracts-ve` | Contratos (checklist) |

## Marcos founder-playbook → skill Zonix (destilados mayo 2026)

| Marco externo | Skill Zonix | No instalar repo |
|---------------|-------------|------------------|
| startup-context / Market Type | `zonix-startup-context` | ✓ |
| four-steps, mom-test | `zonix-launch-piloto` | ✓ |
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

## No instalar / no usar como fuente de cifras

- `VoltAgent/awesome-agent-skills`, `agent-skills-hub` completo, `founder-os`, `JOINCLASS/ai-ceo-framework`
- Partners irrelevantes: Auth0, Segment, Algolia
- Fintech trading US: `7kfpun/awesome-fintech`, `quant-analyst`
- Roadmaps genéricos: `nilbuild/developer-roadmap`, `github/roadmap`, `nishant` tech agency

## Lente humana (opcional, sin `npx skills add`)

- `kuchin/awesome-ceo`, `awesome-cto` → `zonix-founder-ops-index`
- GitHub for Startups → post-wire, VOLCADO §10
- Repos Tier A arriba → contenido ya en `.agents/skills/zonix-*`

## Prompt corto

```
Usa zonix-startup-context + zonix-lanzamiento-docs. Cifras solo del pack. No instalar skills externas. Respeta anti-patrones en zonix-lanzamiento-docs.
```
