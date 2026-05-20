# Análisis forense v3 — Skills de agente Zonix Pharma

> **Última actualización:** 20 mayo 2026 (v3).
> Auditoría multi-rol del ecosistema **30 skills `zonix-*`** (21 Backend + 9 Front) vs [ROLES_SKILLS_ZONIX.md](../Lanzamiento/ROLES_SKILLS_ZONIX.md), [AGENTS.md](../../AGENTS.md), [roles_matrix.json](roles_matrix.json) y [research_links.md](research_links.md).
> Complementa (no sustituye) [ANALISIS_FORENSE.md](../Lanzamiento/ANALISIS_FORENSE.md) del pack inversor.
> **v2 → v3:** auditoría **22 enlaces GitHub** (subagents, fintech, quant, legal, startup); skills `zonix-jarvis-subagents-map`, `zonix-legal-contracts-ve`, `zonix-founder-ops-index`.

---

## 0 bis — Matriz por meta del founder

Tabla principal para pedir tareas a JARVIS en lenguaje natural.

| Meta | Orden skills JARVIS | Docs pack obligatorios | Roles humanos piloto |
|------|---------------------|------------------------|----------------------|
| **Empresa VE** | `zonix-startup-context` → `zonix-empresa-ve` → `zonix-lanzamiento-roles` | ESTRUCTURA_LEGAL, PLAN_LANZAMIENTO §2.1, REQUISITOS_OPERAR_VENEZUELA | Abogado, Contador, Co-CEO |
| **Documentos** | `zonix-startup-context` → skill por doc (§0 ter) → `zonix-investor-materials` | README Lanzamiento (22 archivos) | CFO lens, RA, Legal, Marketing, FP&A |
| **Inversores** | `zonix-startup-context` → `zonix-fundraising-narrative` → `zonix-investor-materials` | MENSAJE_ENVIO, CHECKLIST_PRE_INVERSOR | Founder, IR |
| **Ejecutar lanzamiento** | `zonix-launch-piloto` → `zonix-lanzamiento-roles` | PLAN_LANZAMIENTO, PLAN_MODULO §16, BRIEF | Co-CEO, Sales, CS, Marketing |
| **Desarrollo producto** | Skills módulo (Rx, orders, delivery, UI…) | PLAN_RX, BRAND, código | Founder/CTO, QA |

### Frases → skills (criterio de éxito v2)

| Pedido natural | Skill(s) activada(s) |
|----------------|----------------------|
| «Constituir Zonix Pharma C.A.» | `zonix-empresa-ve` |
| «Plan T+0 a Day-D» | `zonix-launch-piloto` |
| «Envío al inversor» | `zonix-fundraising-narrative` + `zonix-investor-materials` |
| «Auditar coherencia del pack» | `zonix-investor-materials` + `zonix-financial-model` |
| «Implementar validación Rx» | `zonix-prescriptions` (sin mezclar empresa) |
| «¿Qué subagent para seguridad Rx?» | `zonix-jarvis-subagents-map` → lente + `zonix-prescriptions` |
| «Revisa contrato marco farmacia» | `zonix-legal-contracts-ve` |
| «Qué leer del awesome-cto (due diligence)?» | `zonix-founder-ops-index` |

---

## 0 ter — Skill principal por documento pack

| Documento pack | Skill principal |
|----------------|-----------------|
| ESTRUCTURA_LEGAL_Y_EQUITY | `zonix-empresa-ve` |
| PLAN_LANZAMIENTO_COMERCIAL | `zonix-launch-piloto` |
| PROYECCION / PRESUPUESTO / UNIT | `zonix-financial-model` |
| MENSAJE_ENVIO / pitch | `zonix-fundraising-narrative` |
| PLAN_MODULO / Rx / seguridad | `zonix-regulatory-ve` + `zonix-prescriptions` |
| PROPUESTA_VALOR_* | `zonix-lanzamiento-roles` + doc específico |
| PLAN_METODOS_PAGO | `zonix-payments` (modo piloto) |
| ROLES_SKILLS_ZONIX | `zonix-lanzamiento-roles` |

Duplicado en `zonix-investor-materials` para agentes que solo abran esa skill.

---

## 0. Inventario maestro (30 skills)

| Skill | Repo | Ruta | Dominio | Prerequisito | Roles humanos (ref.) |
|-------|------|------|---------|--------------|----------------------|
| `zonix-startup-context` | Backend | `.agents/skills/zonix-startup-context/` | Inversor | — | Founder, CFO, FP&A, IR |
| `zonix-financial-model` | Backend | `.agents/skills/zonix-financial-model/` | Inversor | startup-context | CFO, Contador, FP&A |
| `zonix-investor-materials` | Backend | `.agents/skills/zonix-investor-materials/` | Inversor | startup-context | IR, Founder |
| `zonix-fundraising-narrative` | Backend | `.agents/skills/zonix-fundraising-narrative/` | Inversor | startup-context | IR, Founder |
| `zonix-regulatory-ve` | Backend | `.agents/skills/zonix-regulatory-ve/` | Legal/RA docs | — | Asesor RA, DPO |
| **`zonix-empresa-ve`** | Backend | `.agents/skills/zonix-empresa-ve/` | **Empresa VE** | startup-context | Legal, Contador, Co-CEO |
| **`zonix-launch-piloto`** | Backend | `.agents/skills/zonix-launch-piloto/` | **GTM / ops** | startup-context | Co-CEO, Sales, CS |
| `zonix-lanzamiento-roles` | Backend | `.agents/skills/zonix-lanzamiento-roles/` | Orquestación | startup-context | Todos (lente) |
| `zonix-prescriptions` | Backend | `.agents/skills/zonix-prescriptions/` | Producto Rx | — | Pharmacist, CTO, RA |
| `zonix-medicine-catalog` | Backend | `.agents/skills/zonix-medicine-catalog/` | Producto catálogo | — | Commerce, CPO |
| `zonix-order-lifecycle` | Backend | `.agents/skills/zonix-order-lifecycle/` | Producto órdenes | — | CS, COO, CPO |
| `zonix-disputes-and-refunds` | Backend | `.agents/skills/zonix-disputes-and-refunds/` | Producto ops | order-lifecycle | CS |
| `zonix-delivery-system` | Backend | `.agents/skills/zonix-delivery-system/` | Producto delivery | — | COO, Supply |
| `zonix-realtime-events` | Backend | `.agents/skills/zonix-realtime-events/` | Producto realtime | — | CTO |
| `zonix-api-patterns` | Backend | `.agents/skills/zonix-api-patterns/` | Producto API | — | CTO, Admin |
| `zonix-analytics` | Backend | `.agents/skills/zonix-analytics/` | Producto datos | order-lifecycle | CFO lens, Admin |
| `zonix-payments` | Backend | `.agents/skills/zonix-payments/` | Producto pagos | order-lifecycle | Especialista pagos |
| **`zonix-b2b-sales`** | Backend | `.agents/skills/zonix-b2b-sales/` | **GTM Sales** | launch-piloto | Sales B2B ×4 |
| **`zonix-jarvis-subagents-map`** | Backend | `.agents/skills/zonix-jarvis-subagents-map/` | **Orquestación** | lanzamiento-roles | Founder, CTO |
| **`zonix-legal-contracts-ve`** | Backend | `.agents/skills/zonix-legal-contracts-ve/` | **Legal VE** | empresa-ve | Abogado, Legal |
| **`zonix-founder-ops-index`** | Backend | `.agents/skills/zonix-founder-ops-index/` | **Founder lens** | startup-context | Founder, Co-CEO |
| `zonix-ui-design` | Front | `.agents/skills/zonix-ui-design/` | UI | — | UX Writer, CPO |
| `zonix-onboarding` | Front | `.agents/skills/zonix-onboarding/` | UI flujos | ui-design | CS, Paciente |
| `zonix-order-tracking-ui` | Front | `.agents/skills/zonix-order-tracking-ui/` | UI órdenes | order-lifecycle | Paciente, CS |
| `zonix-admin-analytics-ui` | Front | `.agents/skills/zonix-admin-analytics-ui/` | UI métricas | analytics | Admin |
| `zonix-order-lifecycle` | Front | dup → Backend | UI | Backend homónima | CS |
| `zonix-realtime-events` | Front | dup → Backend | UI | Backend homónima | CTO |
| `zonix-startup-context` | Front | stub → Backend | Inversor | — | Founder |
| `zonix-investor-materials` | Front | stub → Backend | Inversor | — | IR |
| `zonix-lanzamiento-roles` | Front | stub → Backend | Orquestación | — | Todos |
| `zonix-launch-piloto` | Front | stub → Backend | GTM | — | Co-CEO |

**Conteo:** 9 negocio/lanzamiento · 9 producto Backend · 6 UI Front · 4 stubs Front.

---

## 11. Síntesis por rol piloto → skill recomendada

| Rol piloto | Skill agente principal | Secundarias |
|------------|------------------------|-------------|
| **Founder / CEO / CTO** | `zonix-startup-context` | `zonix-lanzamiento-roles`, skills producto según sprint |
| **Co-CEO operativo** | `zonix-launch-piloto` | `zonix-empresa-ve`, `zonix-delivery-system`, `documentar-avances` |
| **Sales B2B (×4)** | `zonix-b2b-sales` | `zonix-launch-piloto`, PROPUESTA_VALOR_CLIENTE_B2B |
| **Contador** | `zonix-financial-model` | `zonix-startup-context`, `zonix-empresa-ve` |
| **Abogado** | `zonix-empresa-ve` | `zonix-lanzamiento-roles`, `security-requirement-extraction` |
| **Asesor regulatorio** | `zonix-regulatory-ve` | `zonix-prescriptions` |
| **Marketing Lead** | `zonix-lanzamiento-roles` | BRAND, SUPUESTO_MARKETING_OFFLINE |
| **CS + Community** | `zonix-disputes-and-refunds` | `zonix-onboarding`, `zonix-order-lifecycle` |

---

## Hallazgos v2 (cerrados en esta auditoría)

| ID | Sev. | Hallazgo v1 | Acción v2 | Estado |
|----|------|-------------|-----------|--------|
| V2-01 | ALTA | Sin skill empresa VE | Creada `zonix-empresa-ve` | ✓ Cerrado |
| V2-02 | ALTA | Sin skill plan T+90 | Creada `zonix-launch-piloto` | ✓ Cerrado |
| V2-03 | ALTA | ROLES JARVIS constitución sin empresa/finanzas | ROLES + `roles_matrix` + `zonix-lanzamiento-roles` | ✓ Cerrado |
| V2-04 | ALTA | `jarvis_tasks` solo 4 entradas | +3 tareas (empresa, lanzamiento, dev sprint) | ✓ Cerrado |
| SK-12 | MEDIA | payments legacy Stripe/webhook | Bloque «Modo piloto» + marcas legacy | ✓ Cerrado |
| SK-13 | BAJA | launch-piloto fase 2 | Skill creada | ✓ Cerrado |

### Hallazgos abiertos (fuera de alcance v2)

| ID | Sev. | Hallazgo | Notas |
|----|------|----------|-------|
| SK-04 | MEDIA | `zonix-payments.md` flat | Migrado a `zonix-payments/SKILL.md` + `PharmaPilotPaymentCatalog` | ✓ Cerrado |
| SK-05 | MEDIA | Dup Front/Backend order-lifecycle / realtime | Diff manual trimestral | Abierto |
| SK-06 | BAJA | Sin `sync.sh` AGENTS | Manual | Abierto |
| SK-08 | MEDIA | `zonix-analytics` sin KPI ARPF | §1.1 KPI piloto PROYECCION | ✓ Cerrado |
| SK-14 | BAJA | `zonix-b2b-sales` | Skill creada + routing Sales | ✓ Cerrado |
| IMP-01 | ALTA | Código Stripe en catálogo legacy | `PharmaPilotPaymentCatalog` + tests | ✓ Cerrado (may 2026) |

---

## Perspectivas v1 (resumen — sin regresión)

### CTO / Arquitecto

**Listo:** MVP Pharma cubierto; cadena inversor + **empresa + lanzamiento** en v2. Reserva: sync skills duplicadas Front/Backend.

### CFO / FP&A

**Listo:** `startup-context` + `financial-model` + tabla doc→skill. Empresa: SAFE vía `zonix-empresa-ve` + financial-model.

### RA / Legal

**Listo con reservas:** skills no son dictamen; `zonix-empresa-ve` checklist sin plazos inventados.

### COO / CS

**Listo:** `zonix-launch-piloto` enlaza PLAN_LANZAMIENTO y playbooks Sales/CS.

### CPO / Marketing

**Listo:** narrativa inversor + UI; GTM en `zonix-launch-piloto`.

---

## 8. Veredicto global v2

| Dimensión | Veredicto |
|-----------|-----------|
| **5 metas founder** | **OK** — routing explícito §0 bis |
| Pack inversor (docs) | **OK** — ver ANALISIS_FORENSE pack |
| Skills inversor (6) | **OK** |
| Skills empresa + lanzamiento (2 nuevas) | **OK** |
| Skills producto Backend (9) | **Listo** — payments alineado piloto |
| Skills UI Front + stubs (10) | **OK** |
| ROLES ↔ archivos en disco | **OK** (30/30) |
| GitHub forense 22 URLs | **OK** — §12 + research_links G–L |
| Código pagos piloto vs pack | **OK** — catálogo VE; flujo canónico payment-proof |
| 0× «Zonix Eats» en skills | Verificar grep en CI |

**Veredicto objetivo v3:** ecosistema **listo para las 5 metas** + catálogo GitHub forense si se respeta:

1. `zonix-startup-context` antes de números o fechas de caja.
2. `zonix-empresa-ve` / `zonix-launch-piloto` para empresa y ejecución (no mezclar con Rx en el mismo hilo sin declarar rol).
3. `zonix-regulatory-ve` + humano en copy salud.
4. Backend canon para finanzas, empresa, GTM.

---

## 9. Próximos pasos (priorizados)

1. Usar §0 bis al iniciar sesión JARVIS en ZonixPharma.
2. Diff trimestral skills duplicadas Front/Backend.
3. `sync.sh` AGENTS (opcional).
4. Founder: completar VOLCADO §12 (GitHub, referencias, % dedicación).

---

## 12. Apéndice — Auditoría enlaces GitHub (mayo 2026)

Resumen forense de los **22 URLs** solicitados (detalle en [research_links.md](research_links.md) §G–L).

| # | Recurso | Veredicto | Skill / acción Zonix |
|---|---------|-----------|----------------------|
| 1 | VoltAgent/awesome-claude-code-subagents | Lente + mapa | `zonix-jarvis-subagents-map` |
| 2 | kuchin/awesome-cto | Lente alto | `zonix-founder-ops-index` |
| 3 | kuchin/awesome-ceo | Lente alto | `zonix-founder-ops-index`, `zonix-fundraising-narrative` |
| 4 | kuchin/awesome-tpm | Lente | `zonix-launch-piloto` |
| 5 | founders-kit | Lente | research_links §H |
| 6 | Ibexoft/awesome-startup-tools-list | Lente | research_links §H |
| 7 | KrishMunot/awesome-startup | Evitar | 1 línea §H |
| 8 | brandonhimpfen/awesome-fintech | Lente | `zonix-payments` |
| 9 | moov-io/awesome-fintech | Lente selectivo | UI moneda; evitar ACH US |
| 10 | 7kfpun/awesome-fintech | Evitar | Trading US |
| 11 | wilsonfreitas/awesome-quant | Lente | `zonix-financial-model` § Sensibilidad |
| 12 | foolcage/awesome-quant-1 | Evitar | Duplicado |
| 13 | leoncuhk/awesome-quant-ai | Lente | Fase 2 marketing |
| 14 | mathworks/Awesome-MATLAB-Quant-Finance- | Evitar | Stack |
| 15 | meleantonio/awesome-econ-ai-stuff | Adaptar selectivo | `zonix-investor-materials` gaps |
| 16 | awesomelistsio/awesome-economics | Lente | Macro externo |
| 17 | topics/econometrics | Evitar | — |
| 18 | topics/economics-models | Evitar | — |
| 19 | lawvable/awesome-legal-skills | Adaptar alto | **`zonix-legal-contracts-ve`** |
| 20 | chen-friedman/awesome-legaltech | Lente | `zonix-regulatory-ve` |
| 21 | Vaquill-AI/awesome-legaltech | Lente | research_links §K |
| 22 | tanko-r/awesome-legal-tech | Lente | `zonix-empresa-ve` |

**Veredicto global GitHub:** útiles como **lente y catálogo**; solo **lawvable** y **kuchin CEO/CTO** justificaron **3 skills nuevas**; el resto integrado en `research_links` + 27 skills previas.

---

## 10. Documentos hermanos

- [README.md](README.md) — índice docs/zonix
- [research_links.md](research_links.md) — fuentes GitHub A–L + canon §F
- [roles_matrix.json](roles_matrix.json) — routing + `skills_inventory` (30)
- [ROLES_SKILLS_ZONIX.md](../Lanzamiento/ROLES_SKILLS_ZONIX.md) — matriz rol humano + § Cinco metas
- [README.md](../Lanzamiento/README.md) — pack inversor
