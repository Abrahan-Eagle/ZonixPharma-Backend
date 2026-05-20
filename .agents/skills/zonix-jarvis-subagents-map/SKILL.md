---
name: zonix-jarvis-subagents-map
description: Mapeo tareas Zonix Pharma → subagents externos (lente VoltAgent) → skills zonix-* obligatorias. No instalar subagents de terceros en el repo.
---

# zonix-jarvis-subagents-map

Orquestación JARVIS: los subagents de [VoltAgent/awesome-claude-code-subagents](https://github.com/VoltAgent/awesome-claude-code-subagents) son **lente opcional**; el canon operativo y de negocio está en skills `zonix-*` locales.

## Reglas

1. **Siempre** invocar la skill `zonix-*` de la columna «Canon obligatorio».
2. El subagent externo solo aporta estructura de revisión o checklist genérica — no cifras ni legal VE.
3. **No copiar** definiciones de subagents al repo sin revisar licencia y relevancia.

## Mapeo por tarea

| Tarea Zonix | Rol humano | Subagent lente (VoltAgent) | Canon obligatorio (`zonix-*`) |
|-------------|------------|----------------------------|------------------------------|
| Auditar pack inversor / gaps | CFO, IR, Legal | — | `zonix-startup-context`, `zonix-investor-materials`, `zonix-financial-model` |
| Pitch / email inversor | IR, Founder | — | `zonix-fundraising-narrative`, `zonix-investor-materials` |
| Constitución / SAFE / laboral VE | Legal, Contador | — | `zonix-empresa-ve`, `zonix-legal-contracts-ve` |
| Contrato marco farmacia B2B | Legal, Sales | — | `zonix-legal-contracts-ve`, `zonix-b2b-sales` |
| Plan T+0 → Day-D | Co-CEO, Sales | project-manager (lente) | `zonix-launch-piloto`, `zonix-lanzamiento-roles` |
| Implementar Rx / validación farmacéutico | CTO, RA | healthcare-admin (lente ops) | `zonix-prescriptions`, `zonix-regulatory-ve` |
| API Laravel marketplace | CTO | laravel-specialist, api-designer | `zonix-api-patterns`, `laravel-specialist` |
| UI Flutter paciente/farmacia | CPO, UX | flutter-expert, mobile-developer | `zonix-ui-design`, `zonix-onboarding` (Front) |
| Pagos manuales VE | AppSec, Legal | payment-integration (solo lente; **no** PSP) | `zonix-payments`, `PLAN_METODOS_PAGO.md` |
| Seguridad auth / datos salud | CISO, DPO | security-auditor, security-engineer | `security`, `security-requirement-extraction`, `zonix-regulatory-ve` |
| Delivery / SLA partners | COO | devops-engineer (lente) | `zonix-delivery-system` |
| Disputas / reembolsos | CS | customer-support (lente) | `zonix-disputes-and-refunds` |
| KPIs farmacia / admin | CFO lens | data-analyst (lente) | `zonix-analytics`, `zonix-financial-model` |
| Revisión arquitectura pre-Day-D | CTO | architect-reviewer, code-reviewer | `zonix-api-patterns`, skills producto según módulo |

## Modelo sugerido (Opus vs Sonnet)

Referencia VoltAgent: tareas profundas (arquitectura, seguridad, lógica financiera) → modelo con más razonamiento; implementación rutinaria → modelo rápido. En Cursor, elegir según complejidad de la tarea, no por defecto.

## Skills relacionadas

- `zonix-lanzamiento-roles`
- [research_links.md](../../docs/zonix/research_links.md) §G
