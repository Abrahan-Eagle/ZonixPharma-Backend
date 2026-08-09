# Análisis forense — URLs del doc Busqueda GitHub → pack Lanzamiento

> **HISTÓRICO (may 2026) — no SoT financiero.** Mentiones de pricing **25/40/55** = obsoletas; vigente = **45/60/70 + %GMV 8/7/5**; ask **237.412**.  
> **Fecha:** 26 mayo 2026.  
> **Fuente auditada:** documento crudo GitHub **eliminado** ago 2026; este análisis forense es la fuente vigente.  
> **Objetivo:** qué enlaces/skills **sirven para mejorar** [docs/Lanzamiento/](../Lanzamiento/) — sin instalar hubs en el repo ni sustituir cifras del pack.  
> **Cruces:** [research_links.md](research_links.md), [ANALISIS_FORENSE_SKILLS.md](ANALISIS_FORENSE_SKILLS.md), skills `zonix-*` en `.agents/skills/`.

---

## 1. Resumen ejecutivo

| Métrica | Valor |
|---------|-------|
| Menciones de URL en el doc Busqueda | ~103 |
| Destinos únicos (deduplicados) | **~58** |
| Entradas con veredicto **A** (mejorar Lanzamiento) | **18** (+ **22** sub-skills A en anexos) |
| **B** lente | **24** |
| **C** operación (poco markdown pack) | **12** |
| **D** evitar / irrelevante VE-pharma | **4** (+ sub-skills D en anexos) |

**Conclusión:** el doc Busqueda mezcla programa GitHub, partners SaaS y playbooks de agente. Para **crear/mejorar el pack Lanzamiento**, el valor está en **Tabla 4** + expansión de **`getagentseal/founder-playbook`** y **`shawnpang/startup-founder-skills`** (sub-skills selectivas). **No** instalar `VoltAgent/awesome-agent-skills` ni `founder-os` en Jarvis: riesgo de divergir del pack canónico.

**Regla:** cifras (101k, ARPF, burn, SAFE) y legal VE **solo** desde `PROYECCION`, `PRESUPUESTO`, `ESTRUCTURA_LEGAL` — skills externas aportan **estructura, checklists y frameworks**, no números.

---

## 2. Leyenda de veredictos

| Código | Significado | Uso en Zonix |
|--------|-------------|--------------|
| **A** | Inspiración directa para redactar o ampliar un doc Lanzamiento | Priorizar en mejoras del pack |
| **B** | Lente: leer ideas; no copiar texto US/SaaS | Consulta puntual |
| **C** | Operación founder/CTO (post-wire, CI, partners) | VOLCADO, checklist ops; no BRIEF |
| **D** | Evitar: duplicado Jarvis, US-only, riesgo alucinar datos | No instalar ni citar como fuente de cifras |

---

## 3. Tabla 1 — GitHub for Startups (programa corporativo)

| ID | Recurso | URL | Veredicto | Doc Lanzamiento / acción |
|----|---------|-----|-----------|--------------------------|
| T1-01 | Portal aplicación | https://github.com/enterprise/startups#get-started | **C** | Postular tras wire; anotar en VOLCADO §10 |
| T1-02 | Directorio socios | https://github.com/enterprise/startups/partners | **C** | Ver si aceleradora/inversor califica |
| T1-03 | GitHub-for-Startups-HQ | https://github.com/github/GitHub-for-Startups-HQ | **C** | Onboarding Enterprise + GHAS |
| T1-04 | Program Guide | https://github.com/github/GitHub-for-Startups-HQ/blob/main/Program%20Guide.md | **C** | Migración org/repos |
| T1-05 | Resources Page | https://github.com/github/GitHub-for-Startups-HQ/blob/main/Resources%20Page.md | **B** | Índice recursos; no narrativa inversor |
| T1-06 | Global-Repo Program Guide | https://github.com/GitHub-for-Startups/Global-Repo/blob/main/Program%20Guide.md | **C** | Alternativa onboarding |
| T1-07 | YouTube playlist | https://www.youtube.com/playlist?list=PL0lo9MOBetEG3s9zocf4H1UiaS44ZL-W0 | **B** | Formación equipo |
| T1-08 | Luma eventos | https://lu.ma/githubforstartups | **B** | Networking |
| T1-09 | Formulario casos estudio | Google Forms | **C** | Marketing GitHub |
| T1-10 | Soporte GFS | https://support.github.com/contact?tags=hh-github-for-startups | **C** | Tickets técnicos |

---

## 4. Tabla 2 — Partners SaaS (ofertas programa)

| ID | Partner | Veredicto | Nota Zonix Pharma |
|----|---------|-----------|-------------------|
| T2-01 | Notion | **B** | Wiki interno; pack ya en repo — no data room Notion |
| T2-02 | Auth0 | **D** | App usa **Sanctum** + Firebase OTP |
| T2-03 | Retool | **C** | Panel interno ops; post-M6 si hace falta |
| T2-04 | Segment | **D** | Analytics; MVP sin stack Segment |
| T2-05 | Deel | **B** | HR internacional; equipo piloto VE |
| T2-06 | Zendesk | **B** | CS playbook → `PLAN_MODULO` §16 |
| T2-07 | Brex | **B** | Banking US; pack VE = banco local |
| T2-08 | AngelList | **B** | Cap table US; comparar estructura con SAFE VE pack |
| T2-09 | Algolia | **D** | Búsqueda en app propia |
| T2-10 | Datadog | **C** | Monitoreo VPS post-Day-D |

---

## 5. Tabla 3 — GitHub Skills (cursos interactivos)

| ID | Curso / recurso | URL | Veredicto | Encaje |
|----|-----------------|-----|-----------|--------|
| T3-01 | Portal skills.github.com | https://skills.github.com/ | **B** | Índice cursos |
| T3-02 | introduction-to-github | https://github.com/skills/introduction-to-github | **C** | Onboarding equipo |
| T3-03 | communicate-using-markdown | https://github.com/skills/communicate-using-markdown | **B** | Mejorar README pack |
| T3-04 | code-with-codespaces | https://github.com/skills/code-with-codespaces | **C** | Dev remoto |
| T3-05 | introduction-to-repository-management | https://github.com/skills/introduction-to-repository-management | **C** | Branch protection |
| T3-06 | customize-your-github-copilot-experience | https://github.com/skills/customize-your-github-copilot-experience | **B** | `copilot-instructions` / Jarvis |
| T3-07 | create-applications-with-the-copilot-cli | https://github.com/skills/create-applications-with-the-copilot-cli | **C** | CLI agente |
| T3-08 | copilot-code-review | https://github.com/skills/copilot-code-review | **B** | Calidad PRs |
| T3-09 | write-javascript-actions | https://github.com/skills/write-javascript-actions | **C** | CI `.github/workflows` |
| T3-10 | ai-in-actions | https://github.com/skills/ai-in-actions | **C** | CI + LLM |
| T3-11 | expand-your-team-with-copilot | https://github.com/skills/expand-your-team-with-copilot | **C** | Agentes cloud |
| T3-12 | workflow-artifacts | https://github.com/skills/workflow-artifacts | **C** | Artefactos CI |
| T3-13 | agent-orchestration-build-your-ai-dream-team | https://github.com/skills/agent-orchestration-build-your-ai-dream-team | **B** | Patrón multi-agente; ver `zonix-jarvis-subagents-map` |
| T3-14 | Coursera GitHub | https://www.coursera.org/specializations/github | **B** | Formación larga |
| T3-15 | Microsoft Learn | https://learn.microsoft.com/en-us/training/github/ | **B** | Referencia |
| T3-16 | DEV blog IA | https://dev.to/pwd9000/github-skills-your-complete-learning-path-to-ai-powered-development-ieo | **B** | Lectura |
| T3-17 | orgs/skills/repositories | https://github.com/orgs/skills/repositories | **B** | Catálogo completo cursos |

*Cursos solo citados vía skills.github.com (Git Pages, Git CLI, PR review, merge conflicts): veredicto **B/C** según rol — no impactan redacción inversor.*

---

## 6. Tabla 4 — Playbooks y listas (núcleo forense)

| ID | Recurso | URL | Veredicto | Doc Lanzamiento | Skill Zonix |
|----|---------|-----|-----------|-----------------|-------------|
| T4-01 | startup-founder-skills | https://github.com/shawnpang/startup-founder-skills | **A** | MENSAJE, CHECKLIST, PROPUESTA_B2B | Ver anexo §7; `zonix-fundraising-narrative`, `zonix-b2b-sales` |
| T4-02 | founder-playbook | https://github.com/getagentseal/founder-playbook | **A** | CONTEXTO, PROPUESTA_*, UNIT, MARKETING | Ver anexo §8; lente multi-skill |
| T4-03 | four-steps/SKILL.md | https://github.com/getagentseal/founder-playbook/blob/main/four-steps/SKILL.md | **A** | PLAN_LANZAMIENTO, CONTEXTO | `zonix-launch-piloto` |
| T4-04 | founder-os | https://github.com/Sunder-Kumar/founder-os | **D** | — | PRDs fuera del pack; Notion+MCP |
| T4-05 | nishant roadmap Tech agency | https://github.com/nishant-Tiwari24/roadmap/blob/main/Tech%20agency.md | **D** | — | Agencia dev; no marketplace pharma |
| T4-06 | founders-kit | https://github.com/avinash201199/founders-kit | **B** | — | Directorio libros/SaaS |
| T4-07 | startup-metrics-playbook | https://github.com/shubham1502-hue/startup-metrics-playbook | **B** | PROYECCION §7 sensibilidad | `zonix-financial-model` |
| T4-08 | SurferGarage Startup-playbook | https://github.com/SurferGarage/Startup-playbook/custom-properties | **D** | — | Repo settings cloud |
| T4-09 | awesome-agent-skills | https://github.com/VoltAgent/awesome-agent-skills | **B** | — | Solo descubrimiento; **no** auditar 1000+ |
| T4-10 | mattpocock/skills | https://github.com/mattpocock/skills | **B** | — | PRDs técnicos; producto ya en ANALISIS_TECNICO |
| T4-11 | topics/skills-collection | https://github.com/topics/skills-collection | **B** | — | Meta-búsqueda |
| T4-12 | awesome-copilot.github.com/skills | https://awesome-copilot.github.com/skills/ | **B** | — | Extensiones Copilot |
| T4-13 | awesome-startup-tools-list | https://github.com/Ibexoft/awesome-startup-tools-list | **B** | — | SaaS; filtrar Meta/Notion |
| T4-14 | niladridutt/awesome-startup | https://github.com/niladridutt/awesome-startup | **B** | BRAND | Paleta ya en BRAND_ZONIX |
| T4-15 | ahmadnassri/awesome-startup-resources | https://github.com/ahmadnassri/awesome-startup-resources | **B** | ESTRUCTURA_LEGAL | Plantillas **US**; comparar con SAFE VE |
| T4-16 | pxue/awesome-startup-communities | https://github.com/pxue/awesome-startup-communities | **B** | — | Comunidades founder |
| T4-17 | eferrares/awesome-startup-resources | https://github.com/eferrares/awesome-startup-resources | **B** | PLAN_METODOS_PAGO | Pagos/HR ref. |
| T4-18 | soerenmartius/awesome-cto | https://github.com/soerenmartius/awesome-cto | **B** | PLAN_MODULO §14 | `zonix-founder-ops-index` |
| T4-19 | mateusz awesome-cto-resources | https://github.com/mateusz-brainhub/awesome-cto-resources | **B** | PLAN_LANZAMIENTO hiring | Contratación 4× Sales |
| T4-20 | kuchin/awesome-cto | https://github.com/kuchin/awesome-cto | **A** | CHECKLIST_PRE_INVERSOR | `zonix-founder-ops-index` (due diligence) |
| T4-21 | kuchin/awesome-ceo | *(citado en conclusiones; no Tabla 4)* | **A** | BRIEF narrativa | `zonix-founder-ops-index` |
| T4-22 | nilbuild/developer-roadmap | https://github.com/nilbuild/developer-roadmap | **D** | — | Roadmap dev genérico |
| T4-23 | github/roadmap | https://github.com/github/roadmap | **D** | — | Producto GitHub |

*Nota: `kuchin/awesome-ceo` y `awesome-tpm` aparecen en conclusiones del doc Busqueda y en `zonix-founder-ops-index`; veredicto **A/B** igual que awesome-cto.*

---

## 7. Anexo — Sub-skills `shawnpang/startup-founder-skills`

Repo: https://github.com/shawnpang/startup-founder-skills — **~45 skills**. Instalación opcional: `npx skills add shawnpang/startup-founder-skills --skill <nombre>`. **Canon Jarvis:** skills `zonix-*` locales; no copiar SKILL.md al repo sin adaptar VE/pharma.

### 7.1 Prioridad **A** (mejorar pack Lanzamiento)

| Sub-skill | Para qué doc | Skill Zonix |
|-----------|--------------|-------------|
| startup-context | Análogo VOLCADO contexto empresa | `zonix-startup-context` (**ya existe**) |
| data-room | CHECKLIST_PRE_INVERSOR, índice pack | `zonix-investor-materials` |
| fundraising-email | MENSAJE_ENVIO | `zonix-fundraising-narrative` |
| pitch-deck | Bullets pitch (no reemplazar BRIEF) | `zonix-fundraising-narrative` |
| cold-outreach | PROPUESTA_VALOR_CLIENTE_B2B, prospección farmacias | `zonix-b2b-sales` |
| sales-script | Objeciones B2B, discovery farmacia | `zonix-b2b-sales` |
| proposal-generation | Contrato marco / propuesta partner | `zonix-legal-contracts-ve` + B2B |
| partnership-outreach | PROPUESTA_VALOR_TERCER_LADO, delivery partner | `zonix-b2b-sales` |
| lead-scoring | Pipeline ~35 firmas / ICP farmacia | `zonix-launch-piloto` |
| competitive-analysis | PERFIL_MERCADO, CONTEXTO | `zonix-startup-context` |
| market-research | PERFIL_MERCADO (estructura TAM/SAM) | No regenerar cifras |
| launch-strategy | PLAN_LANZAMIENTO Day-D, SUPUESTO_MARKETING | `zonix-launch-piloto` |
| board-update | Reportes post-wire inversor | `zonix-fundraising-narrative` |
| process-docs | PLAN_MODULO §16 incidencias | `zonix-launch-piloto` |
| contract-review | Contrato marco farmacia (checklist) | `zonix-legal-contracts-ve` |
| job-description | CUESTIONARIO / contratación Sales | `zonix-lanzamiento-roles` |
| churn-analysis | UNIT_ECONOMICS churn 5% | `zonix-financial-model` |

### 7.2 Prioridad **B** (lente)

investor-research, accelerator-application, prd-writing, roadmap-planning, mvp-scoping, user-research-synthesis, review-mining, competitor-monitoring, interview-kit, architecture-design, cicd-setup, security-review, privacy-policy, terms-of-service, soc2-prep, landing-page, content-strategy, email-marketing, social-content, onboarding-flow, support-docs, feedback-synthesis, seo-technical, founder-thought-leadership, community-discovery.

### 7.3 Prioridad **C** / **D**

| Sub-skill | Veredicto | Motivo |
|-----------|-----------|--------|
| code-review, tech-stack-eval | **C** | CTO; código ya auditado |
| daily-product-digest, event-hosting | **B** | Marketing secundario |
| earned-media-outreach | **B** | Post-M6 |
| sentiment-monitoring | **B** | Post-lanzamiento |

---

## 8. Anexo — Sub-skills `getagentseal/founder-playbook` (14 + diagnose)

Repo: https://github.com/getagentseal/founder-playbook — `npx skills add getagentseal/founder-playbook`

| Sub-skill | Veredicto | Doc Lanzamiento | Uso |
|-----------|-----------|-----------------|-----|
| **diagnose** | **A** | README pack, sesiones founder | Router cuando hay varios problemas |
| **four-steps** | **A** | CONTEXTO, PLAN_LANZAMIENTO | Validación antes de escalar |
| **mom-test** | **A** | PROPUESTA_USUARIO_FINAL, entrevistas farmacia | Entrevistas sin sesgar |
| **lean-startup** | **B** | CONTEXTO | Build-measure-learn; producto ya construido |
| **spin-selling** | **A** | PROPUESTA_VALOR_CLIENTE_B2B | Venta B2B farmacias |
| **monetizing-innovation** | **A** | UNIT_ECONOMICS, PROPUESTA_B2B §5 | Pricing híbrido 25/40/55 + % GMV |
| **traction** | **A** | SUPUESTO_MARKETING_OFFLINE | Bullseye canales (Meta + valla) |
| **storybrand** | **A** | PROPUESTA_USUARIO_FINAL, copy Meta | Mensaje paciente |
| **made-to-stick** | **B** | MENSAJE_ENVIO | Pitch memorable |
| **obviously-awesome** | **A** | CONTEXTO_PITCH | Posicionamiento vs Rappi/Farmatodo |
| **100m-offers** | **B** | PROPUESTA_B2B waiver piloto | Packaging oferta |
| **100m-leads** | **B** | SUPUESTO_MARKETING | Post-tracción Meta |
| **crossing-the-chasm** | **B** | PERFIL_MERCADO | Post-piloto Valencia |
| **blue-ocean-strategy** | **B** | CONTEXTO | Diferenciación; no reescribir TAM |
| **influence** | **B** | CHECKLIST inversor | Negociación SAFE |

---

## 9. Top 10 — Lectura priorizada para mejorar Lanzamiento

Orden sugerido para el founder (estructura y copy; **sin** regenerar PROYECCION):

1. **four-steps** (founder-playbook) — validación Customer Development vs Fase 0.
2. **spin-selling** — guion Sales 4× reps → `PROPUESTA_VALOR_CLIENTE_B2B`.
3. **monetizing-innovation** — coherencia híbrido cuota + % GMV → `UNIT_ECONOMICS`.
4. **traction** — priorización Meta vs offline → `SUPUESTO_MARKETING_OFFLINE`.
5. **storybrand** — copy paciente y ads → `PROPUESTA_VALOR_USUARIO_FINAL`.
6. **data-room** + **fundraising-email** (shawnpang) → `MENSAJE_ENVIO`, `CHECKLIST_PRE_INVERSOR`.
7. **cold-outreach** + **partnership-outreach** (shawnpang) → farmacias + partner logístico.
8. **obviously-awesome** — una página posicionamiento → `CONTEXTO_PITCH`.
9. **kuchin/awesome-cto** (lectura humana) — due diligence técnica → FAQ inversor.
10. **mom-test** — guion entrevistas farmacias piloto antes de Day-D.

---

## 10. Gaps: qué **no** duplicar (ya en Jarvis)

| Externo | Ya cubierto por |
|---------|-----------------|
| startup-context (shawnpang) | `zonix-startup-context` + pack README cifras |
| startup-financial-modeling (otros docs) | `zonix-financial-model` |
| data-room / pitch narrative | `zonix-investor-materials`, `zonix-fundraising-narrative` |
| Regulatorio salud US (HIPAA skills en research_links) | `zonix-regulatory-ve`, `PLAN_MODULO`, `PLAN_REGULATORIO` |
| Lanzamiento T+90 | `zonix-launch-piloto`, `PLAN_LANZAMIENTO_COMERCIAL` |

---

## 11. Plan de mejora docs (skills Jarvis — mayo 2026)

**Estado:** marcos Tier A **adaptados** en `.agents/skills/zonix-lanzamiento-docs` + skills hijas (`zonix-b2b-sales`, `zonix-fundraising-narrative`, `zonix-launch-piloto`, `zonix-financial-model`). Aplicar **una sección por sesión** al editar cada `.md` del pack.

| Doc Lanzamiento | Inspiración externa | Sección a enriquecer |
|-----------------|---------------------|----------------------|
| PROPUESTA_VALOR_CLIENTE_B2B | spin-selling | Matriz objeciones + discovery call |
| PROPUESTA_VALOR_USUARIO_FINAL | storybrand | BrandScript 1 página |
| SUPUESTO_MARKETING_OFFLINE | traction Bullseye | Tabla canal → métrica → costo |
| CHECKLIST_PRE_INVERSOR | data-room + kuchin due diligence | FAQ técnica ampliada |
| MENSAJE_ENVIO | fundraising-email | Variantes email corto/largo |
| PLAN_LANZAMIENTO | four-steps | Checklist validación pre-Day-D |
| UNIT_ECONOMICS | monetizing-innovation | Nota WTP vs ARPF placeholder |

**Implementado en pack (26 mayo 2026):** filas anteriores con secciones en los `.md` indicados; skills en `zonix-lanzamiento-docs` + hijas.

*Una sección por sesión para ampliaciones futuras; misma disciplina que [INCOHERENCIAS_LANZAMIENTO_2026-05.md](../Lanzamiento/INCOHERENCIAS_LANZAMIENTO_2026-05.md).*

---

## 12. Verificación de cobertura

- [x] Tablas 1–4 del doc Busqueda: todas las filas con ID T1–T4.
- [x] Obras citadas §146–186: cubiertas por T3-17 y duplicados de Tabla 3–4.
- [x] Expansión shawnpang: anexo §7 (skills agrupadas A/B/C).
- [x] Expansión founder-playbook: anexo §8 (15 skills).
- [x] Ninguna recomendación **A** sustituye cifras PROYECCION/PRESUPUESTO.
- [x] Duplicados con [research_links.md](research_links.md) marcados en §10.

---

## 13. Enlaces relacionados

- [../Lanzamiento/README.md](../Lanzamiento/README.md) — pack operativo + inversor
- [../Lanzamiento/ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](../Lanzamiento/ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) — pack vs código
- [research_links.md](research_links.md) — catálogo ampliado (fuera del doc Busqueda)
- [.agents/skills/zonix-founder-ops-index/SKILL.md](../.agents/skills/zonix-founder-ops-index/SKILL.md) — kuchin awesome-ceo/cto/tpm

---

*Generado en ejecución del plan «Forense skills GitHub Lanzamiento». Revisar si el doc Busqueda se actualiza.*
