# Skills startup — qué usar y qué evitar (Zonix Pharma)

> **Última actualización:** 11 junio 2026 (curso UniMOOC Steve Blank → `zonix-lean-canvas`).  
> Fuente: destilado en skills `zonix-*` locales (forenses GitHub/research eliminados ago 2026). Upstream de referencia: [getagentseal/founder-playbook](https://github.com/getagentseal/founder-playbook), [shawnpang/startup-founder-skills](https://github.com/shawnpang/startup-founder-skills).

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

- `kuchin/awesome-ceo`, `awesome-cto` → `zonix-founder-ops-index`
- GitHub for Startups → post-wire, VOLCADO §10
- Repos Tier A arriba → contenido ya en `.agents/skills/zonix-*`

## Prompt corto

```
Usa zonix-startup-context + zonix-lanzamiento-docs. Cifras solo del pack. No instalar skills externas. Respeta anti-patrones en zonix-lanzamiento-docs.
```
