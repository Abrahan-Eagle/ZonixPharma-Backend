# Enlaces de investigación — Skills financieras y roles (GitHub)

> **Última actualización:** 26 mayo 2026 (v4 — informe [ANALISIS_FORENSE_BUSQUEDA_GITHUB_LANZAMIENTO_2026-05.md](ANALISIS_FORENSE_BUSQUEDA_GITHUB_LANZAMIENTO_2026-05.md)).
> Catálogo forense para adaptar skills de agente a Zonix Pharma (pack Lanzamiento + empresa VE).
> **No instalar** hubs completos; usar skills `zonix-*` locales en `.agents/skills/`.

---

## Veredicto rápido

| Veredicto | Significado |
|-----------|-------------|
| **Adaptar** | Fork/adaptar en skill `zonix-*` (ya hecho o en `.agents/skills/`) |
| **Lente** | Consultar ideas; no copiar texto legal/US tal cual |
| **Evitar** | Irrelevante o riesgo de alucinar cifras US/SaaS |

---

## A. Skills financieras y startup analyst

| Recurso | URL | Veredicto | Notas Zonix |
|---------|-----|-----------|---------------|
| startup-financial-modeling | https://github.com/sickn33/antigravity-awesome-skills/blob/main/skills/startup-financial-modeling/SKILL.md | **Adaptar** | Base de `zonix-financial-model`; plantilla marketplace GMV/take rate |
| startup-analyst | https://github.com/agent-skills-hub/agent-skills-hub/blob/main/skills/startup-analyst/SKILL.md | **Lente** | TAM/SAM/SOM; no duplicar [PERFIL_MERCADO_PILOTO.md](../Lanzamiento/PERFIL_MERCADO_PILOTO.md) |
| startup-business-analyst-financial-projections | https://github.com/sickn33/antigravity-awesome-skills/blob/main/skills/startup-business-analyst-financial-projections/SKILL.md | **Lente** | Tablas Base/Growth (Lean ya en PROYECCION §1.1) |
| startup-business-analyst-business-case | https://github.com/sickn33/antigravity-awesome-skills/blob/main/skills/startup-business-analyst-business-case/SKILL.md | **Lente** | Estructura business case → `zonix-investor-materials` |
| agent-skills-hub (catálogo) | https://github.com/agent-skills-hub/agent-skills-hub | **Evitar** instalar completo | Solo descubrimiento |
| quant-analyst | https://github.com/agent-skills-hub/agent-skills-hub/blob/main/skills/quant-analyst/SKILL.md | **Evitar** | Trading/backtest |
| edgartools / usfiscaldata | https://github.com/agent-skills-hub/agent-skills-hub | **Evitar** | SEC/US Treasury |

---

## B. Fundraising, data room, founder stack

| Recurso | URL | Veredicto | Skill Zonix |
|---------|-----|-----------|-------------|
| shawnpang/startup-founder-skills (repo) | https://github.com/shawnpang/startup-founder-skills | **Adaptado** en Jarvis | → `zonix-lanzamiento-docs`, `zonix-fundraising-narrative`, `zonix-investor-materials`; `npx skills add` opcional local |
| startup-context | https://github.com/shawnpang/startup-founder-skills/tree/main/skills/startup-context | **Adaptar** | → `zonix-startup-context` |
| data-room | https://github.com/shawnpang/startup-founder-skills/tree/main/skills/data-room | **Adaptar** | → `zonix-investor-materials` |
| pitch-deck | https://github.com/shawnpang/startup-founder-skills/tree/main/skills/pitch-deck | **Lente** | → `zonix-fundraising-narrative` |
| investor-research | https://github.com/shawnpang/startup-founder-skills/tree/main/skills/investor-research | **Lente** | Fuera del pack técnico |
| fundraising-email | https://github.com/shawnpang/startup-founder-skills/tree/main/skills/fundraising-email | **Adaptar** | → `zonix-fundraising-narrative` |
| board-update | https://github.com/shawnpang/startup-founder-skills/tree/main/skills/board-update | **Lente** | Post-wire reporting |
| afrexai-startup-fundraising | https://github.com/openclaw/skills/blob/main/skills/1kalin/afrexai-startup-fundraising/SKILL.md | **Lente** | SAFE/dilución + [ESTRUCTURA_LEGAL_Y_EQUITY.md](../Lanzamiento/ESTRUCTURA_LEGAL_Y_EQUITY.md) |
| coreyhaines31/marketingskills | https://github.com/coreyhaines31/marketingskills | **Lente** | Marketing Lead; BRAND local |
| phuryn/pm-skills | https://github.com/phuryn/pm-skills | **Lente** | CPO / market-sizing |

---

## C. C-Suite y frameworks de roles (GitHub)

| Recurso | URL | Veredicto | Rol Zonix |
|---------|-----|-----------|-----------|
| pollow/c-suite-skills | https://github.com/pollow/c-suite-skills | **Lente** | CEO, COO, CFO, CMO, CPO, CTO, VP Sales, CHRO |
| alirezarezvani/claude-skills (c-level-advisor) | https://github.com/alirezarezvani/claude-skills/tree/main/c-level-advisor | **Lente** | Routing consejo + CFO/CISO |
| cs-cfo-advisor.md | https://github.com/alirezarezvani/claude-skills/blob/main/c-level-advisor/c-level-agents/agents/cs-cfo-advisor.md | **Lente** | CFO / fundraising |
| board-deck-builder | https://github.com/alirezarezvani/claude-skills/tree/main/c-level-advisor/board-deck-builder | **Lente** | Board updates |
| cs-quality-regulatory.md | https://github.com/alirezarezvani/claude-skills/blob/main/agents/ra-qm-team/cs-quality-regulatory.md | **Lente** | Director RA, QA |
| ciso-advisor | https://github.com/alirezarezvani/claude-skills/tree/main/c-level-advisor/ciso-advisor | **Lente** | CISO / SOC2 ideas |
| tony-42069/org-agents | https://github.com/tony-42069/org-agents | **Lente** | UX consejo multi-agente |
| JOINCLASS/ai-ceo-framework | https://github.com/JOINCLASS/ai-ceo-framework | **Evitar** piloto | Demasiado amplio |
| CC90210/CEO-Agent | https://github.com/CC90210/CEO-Agent | **Evitar** fork | Revisar licencia antes de usar |
| jnMetaCode/agency-orchestrator | https://github.com/jnMetaCode/agency-orchestrator | **Lente** | 211 roles — filtrar |
| dvelton/Agent-Management-System | https://github.com/dvelton/Agent-Management-System | **Lente** | Patrón `roles_matrix.json` |
| aviskaar/open-org | https://github.com/aviskaar/open-org | **Lente** | GTM/ops |
| rsmdt/the-startup AGENTS.md | https://github.com/rsmdt/the-startup/blob/main/AGENTS.md | **Lente** | Patrón AGENTS.md |

---

## D. Salud / compliance (no sustituto MPPS/INHRR)

| Recurso | URL | Veredicto | Uso |
|---------|-----|-----------|-----|
| afrexai-hipaa-compliance | https://github.com/openclaw/skills/blob/main/skills/1kalin/afrexai-hipaa-compliance/SKILL.md | **Lente** | PHI/audit log; no HIPAA VE |
| healthcare-hipaa-expert | https://github.com/supatest-ai/awesome-claude-code-sub-agents/blob/main/industries/healthcare-hipaa-expert.md | **Lente** | DPO lens |
| hipaa-guardian | https://github.com/1Mangesh1/hipaa-guardian | **Lente** | Detección PHI en logs |
| meddev-agent-skills | https://github.com/AminAlam/meddev-agent-skills | **Lente** | Serie A+ QA/RA dispositivos |

---

## E. Referencia industria (humano)

| Recurso | URL | Uso |
|---------|-----|-----|
| Pharmacy marketplace executives | https://www.cbinsights.com/company/pharmacy-marketplace/people | Benchmark org chart |
| Capital Rx / Judi Health org | https://theorg.com/org/capital-rx/org-chart/anthony-j-loiacono | Medical Affairs, Clinical |

---

## F. Skills Zonix locales (canon)

| Skill | Ruta |
|-------|------|
| zonix-startup-context | [.agents/skills/zonix-startup-context/SKILL.md](../../.agents/skills/zonix-startup-context/SKILL.md) |
| zonix-financial-model | [.agents/skills/zonix-financial-model/SKILL.md](../../.agents/skills/zonix-financial-model/SKILL.md) |
| zonix-investor-materials | [.agents/skills/zonix-investor-materials/SKILL.md](../../.agents/skills/zonix-investor-materials/SKILL.md) |
| zonix-fundraising-narrative | [.agents/skills/zonix-fundraising-narrative/SKILL.md](../../.agents/skills/zonix-fundraising-narrative/SKILL.md) |
| zonix-regulatory-ve | [.agents/skills/zonix-regulatory-ve/SKILL.md](../../.agents/skills/zonix-regulatory-ve/SKILL.md) |
| zonix-lanzamiento-roles | [.agents/skills/zonix-lanzamiento-roles/SKILL.md](../../.agents/skills/zonix-lanzamiento-roles/SKILL.md) |
| zonix-empresa-ve | [.agents/skills/zonix-empresa-ve/SKILL.md](../../.agents/skills/zonix-empresa-ve/SKILL.md) |
| zonix-launch-piloto | [.agents/skills/zonix-launch-piloto/SKILL.md](../../.agents/skills/zonix-launch-piloto/SKILL.md) |
| zonix-b2b-sales | [.agents/skills/zonix-b2b-sales/SKILL.md](../../.agents/skills/zonix-b2b-sales/SKILL.md) |
| zonix-payments | [.agents/skills/zonix-payments/SKILL.md](../../.agents/skills/zonix-payments/SKILL.md) |
| PharmaPilotPaymentCatalog | [app/Support/PharmaPilotPaymentCatalog.php](../../app/Support/PharmaPilotPaymentCatalog.php) |
| launch-strategy (lente) | https://github.com/shawnpang/startup-founder-skills | → `zonix-launch-piloto` |
| pollow/c-suite-skills `/coo` (lente) | https://github.com/pollow/c-suite-skills | → `zonix-launch-piloto` ops |
| roles_matrix.json | [roles_matrix.json](roles_matrix.json) |
| zonix-jarvis-subagents-map | [.agents/skills/zonix-jarvis-subagents-map/SKILL.md](../../.agents/skills/zonix-jarvis-subagents-map/SKILL.md) |
| zonix-legal-contracts-ve | [.agents/skills/zonix-legal-contracts-ve/SKILL.md](../../.agents/skills/zonix-legal-contracts-ve/SKILL.md) |
| zonix-founder-ops-index | [.agents/skills/zonix-founder-ops-index/SKILL.md](../../.agents/skills/zonix-founder-ops-index/SKILL.md) |

---

## G. Subagents JARVIS (VoltAgent)

> **No instalar** subagents de terceros en el repo. Usar solo como lente; canon = skills `zonix-*` vía [`zonix-jarvis-subagents-map`](../../.agents/skills/zonix-jarvis-subagents-map/SKILL.md).

| Recurso | URL | Veredicto | Skill Zonix / nota |
|---------|-----|-----------|-------------------|
| awesome-claude-code-subagents | https://github.com/VoltAgent/awesome-claude-code-subagents | **Lente + mapa** | `laravel-specialist`, `flutter-expert`, `security-auditor`, `payment-integration` (solo manual VE), `healthcare-admin` (ops, no HIPAA) → tabla en `zonix-jarvis-subagents-map` |
| healthcare-hipaa-expert (subagent) | https://github.com/VoltAgent/awesome-claude-code-subagents (industries) | **Lente** | Complementa `zonix-regulatory-ve`; no dictamen MPPS |

---

## H. Startup toolkits (CEO / herramientas)

| Recurso | URL | Veredicto | Skill Zonix / nota |
|---------|-----|-----------|-------------------|
| kuchin/awesome-ceo | https://github.com/kuchin/awesome-ceo | **Lente alto** | → `zonix-founder-ops-index`, `zonix-fundraising-narrative`, `zonix-launch-piloto` |
| kuchin/awesome-cto | https://github.com/kuchin/awesome-cto | **Lente alto** | Due diligence, 90 días CTO, SaaS security → `zonix-founder-ops-index`, `PLAN_MODULO` §14 |
| kuchin/awesome-tpm | https://github.com/kuchin/awesome-tpm | **Lente** | Coordinación lanzamiento → `zonix-launch-piloto` |
| founders-kit | https://github.com/avinash201199/founders-kit/blob/main/README.md | **Lente** | Directorio SaaS; no skills |
| Ibexoft/awesome-startup-tools-list | https://github.com/Ibexoft/awesome-startup-tools-list | **Lente** | Duplicado parcial founders-kit |
| KrishMunot/awesome-startup | https://github.com/KrishMunot/awesome-startup | **Evitar** | 1 línea; no duplicar listas |

---

## I. Fintech (catálogos y OSS)

| Recurso | URL | Veredicto | Skill Zonix / nota |
|---------|-----|-----------|-------------------|
| brandonhimpfen/awesome-fintech | https://github.com/brandonhimpfen/awesome-fintech | **Lente** | Stripe/PayPal refuerzan: Zonix **no** es PSP → `zonix-payments`, [PLAN_METODOS_PAGO](../Lanzamiento/PLAN_METODOS_PAGO.md) |
| moov-io/awesome-fintech | https://github.com/moov-io/awesome-fintech | **Lente selectivo** | `accounting.js` / `Dinero.js` → Front `zonix-ui-design` (formato moneda); **evitar** ISO8583/ACH US |
| 7kfpun/awesome-fintech | https://github.com/7kfpun/awesome-fintech | **Evitar** | Trading/libs US; lente mínima |

---

## J. Quant, finanzas y econometría (lente)

| Recurso | URL | Veredicto | Skill Zonix / nota |
|---------|-----|-----------|-------------------|
| wilsonfreitas/awesome-quant | https://github.com/wilsonfreitas/awesome-quant | **Lente** | No zipline/backtrader; sensibilidad post-piloto → `zonix-financial-model` § Sensibilidad |
| foolcage/awesome-quant-1 | https://github.com/foolcage/awesome-quant-1 | **Evitar** | Duplicar awesome-quant |
| leoncuhk/awesome-quant-ai | https://github.com/leoncuhk/awesome-quant-ai | **Lente** | MMM/Robyn — fase 2 marketing; no piloto VE |
| mathworks/Awesome-MATLAB-Quant-Finance- | https://github.com/mathworks/Awesome-MATLAB-Quant-Finance- | **Evitar** | Stack Flutter/Laravel |
| meleantonio/awesome-econ-ai-stuff | https://github.com/meleantonio/awesome-econ-ai-stuff | **Adaptar selectivo** | Patrón checklist pack → `zonix-investor-materials` |
| awesomelistsio/awesome-economics | https://github.com/awesomelistsio/awesome-economics | **Lente** | FRED/World Bank contexto macro; no reemplazar PROYECCION |
| topics/econometrics | https://github.com/topics/econometrics | **Evitar** | Libs académicas en repo |
| topics/economics-models | https://github.com/topics/economics-models | **Evitar** | Modelos académicos |

---

## K. Legal skills y legaltech (VE)

| Recurso | URL | Veredicto | Skill Zonix / nota |
|---------|-----|-----------|-------------------|
| lawvable/awesome-legal-skills | https://github.com/lawvable/awesome-legal-skills | **Adaptar alto** | Patrones checklist → **`zonix-legal-contracts-ve`** |
| chen-friedman/awesome-legaltech | https://github.com/chen-friedman/awesome-legaltech | **Lente** | US legal AI; no citar MPPS |
| Vaquill-AI/awesome-legaltech | https://github.com/Vaquill-AI/awesome-legaltech | **Lente** | Similar; datasets US |
| tanko-r/awesome-legal-tech | https://github.com/tanko-r/awesome-legal-tech | **Lente** | Workflow legal ops → `zonix-empresa-ve` |

---

## M. Doc Busqueda GitHub (auditoría completa mayo 2026)

| Recurso | URL | Veredicto | Nota |
|---------|-----|-----------|------|
| Búsqueda de Habilidades… (eliminado ago 2026) | — | **Superseded** | Ver `ANALISIS_FORENSE_BUSQUEDA_GITHUB_LANZAMIENTO_2026-05.md` |
| Informe forense Busqueda → Lanzamiento | [ANALISIS_FORENSE_BUSQUEDA_GITHUB_LANZAMIENTO_2026-05.md](ANALISIS_FORENSE_BUSQUEDA_GITHUB_LANZAMIENTO_2026-05.md) | **Canon** | Matriz A/B/C/D, anexos shawnpang + founder-playbook, Top 10 |

> Las filas de §A–§L arriba siguen vigentes; el informe §M consolida **solo** lo citado en el doc Busqueda (sin sustituir este catálogo).

---

## L2. Guía rápida usar / no usar

| Recurso | Nota |
|---------|------|
| [SKILLS_STARTUP_USAR_NO_USAR.md](SKILLS_STARTUP_USAR_NO_USAR.md) | **Canon** — qué skills startup usar y evitar con Jarvis |

---

## L. Workspace y auditoría

| Recurso | URL | Veredicto | Nota |
|---------|-----|-----------|------|
| Workspace canon | [ZONIX_WORKSPACE.md](../ZONIX_WORKSPACE.md) | **Canon** | No duplicar `docs/zonix` ni skills `zonix-*` en CorralX |
| [ANALISIS_FORENSE_SKILLS.md](ANALISIS_FORENSE_SKILLS.md) §12 | — | **Canon** | Tabla resumen 22 URLs (mayo 2026) |

---

## Atribución

Skills `zonix-*` de finanzas/fundraising adaptan ideas de proyectos MIT/community listados arriba; **cifras y legal VE** salen solo del pack [docs/Lanzamiento/](../Lanzamiento/).
