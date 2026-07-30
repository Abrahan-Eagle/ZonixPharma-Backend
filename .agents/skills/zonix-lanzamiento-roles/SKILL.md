---
name: zonix-lanzamiento-roles
description: Panel de roles y competencias del pack Lanzamiento Zonix Pharma. Mapea rol humano → skills → Docs/Empresa/Sistema → skills agente. Usar al redactar pack inversor, constitución VE o priorizar lentes JARVIS.
metadata:
  auto_invoke:
    - "Trabajar con pack Lanzamiento / roles / pitch inversor"
    - "Ejecutar plan comercial post-wire"
---
# zonix-lanzamiento-roles

Skill de **gobernanza de roles** para Zonix Pharma (piloto + madurez). Fuente canónica: [docs/Lanzamiento/ROLES_SKILLS_ZONIX.md](../../docs/Lanzamiento/ROLES_SKILLS_ZONIX.md).

## Cuándo aplicar

- Redactar, auditar o ampliar documentos en `docs/Lanzamiento/`.
- Decidir qué lente (legal, financiero, regulatorio, producto, ops) aplicar antes de codificar.
- Constitución empresa VE, SAFE, contratos B2B, T&C, privacidad (siempre con abogado/contador humanos).
- Onboarding de agentes IA: declarar roles activos en una línea al inicio de tareas no triviales.

## Cinco metas founder (routing JARVIS)

| Meta | Orden skills agente | Docs pack clave | Roles humanos piloto |
|------|---------------------|-----------------|----------------------|
| **Empresa VE** | `zonix-startup-context` → `zonix-empresa-ve` → esta skill | ESTRUCTURA_LEGAL, PLAN_LANZAMIENTO §2.1 | Abogado, Contador, Co-CEO |
| **Documentos** | `zonix-startup-context` → **`zonix-lanzamiento-docs`** (router) → skill por doc → `zonix-investor-materials` | README Lanzamiento (22 archivos) | CFO lens, RA, Legal, Marketing |
| **Inversores** | `zonix-startup-context` → `zonix-fundraising-narrative` → `zonix-investor-materials` | MENSAJE_ENVIO, CHECKLIST_PRE_INVERSOR | Founder, IR |
| **Ejecutar lanzamiento** | `zonix-launch-piloto` → esta skill | PLAN_LANZAMIENTO, BRIEF | Co-CEO, Sales, CS, Marketing |
| **Desarrollo producto** | Skills módulo (`zonix-prescriptions`, `zonix-order-lifecycle`, …) | PLAN_RX, PLAN_MODULO, BRAND | Founder/CTO, QA |

## Invocación por tipo de tarea

| Si la tarea es… | Declarar roles (ejemplo) | Skills agente además de esta |
|-----------------|---------------------------|------------------------------|
| Pack / pitch / finanzas | CFO lens + Legal + FP&A | `zonix-startup-context`, `zonix-financial-model`, `zonix-investor-materials`, `documentar-avances` |
| Envío inversor / bullets / Q&A | IR + Founder + Legal | `zonix-fundraising-narrative`, `zonix-investor-materials` |
| **Crear empresa VE** (C.A., RIF, banco, SAFE) | Legal + Contador + Co-CEO | `zonix-startup-context`, **`zonix-empresa-ve`**, `security-requirement-extraction` (lente) |
| **Planificar / ejecutar lanzamiento T+90** | Co-CEO + Sales + Marketing + CS | **`zonix-launch-piloto`**, `zonix-startup-context` (si fechas/caja) |
| Legal VE / SAFE / laboral (solo docs) | Legal + Compliance | `zonix-empresa-ve`, `security-requirement-extraction` (lente) |
| Regulatorio / Rx / copy salud | RA + Medical Affairs | `zonix-regulatory-ve`, `zonix-prescriptions`, `docs/PLAN_REGULATORIO_PHARMA_VE.md` |
| **Prospección / cierre farmacias B2B** | Sales (×4) + Co-CEO | **`zonix-b2b-sales`**, `zonix-launch-piloto` |
| **Desarrollo producto (sprint)** | CTO + QA | `zonix-prescriptions`, `zonix-order-lifecycle`, `laravel-specialist`, `flutter-expert` |
| Código backend Rx/orders | CTO | `zonix-prescriptions`, `zonix-order-lifecycle`, `laravel-specialist` |
| Código delivery / SLA | COO + Supply | `zonix-delivery-system` |
| UI Flutter paciente/farmacia | CPO + UX Writer | `zonix-ui-design`, `flutter-expert`, `zonix-onboarding` |
| Seguridad / datos salud | CISO + DPO + Legal | `security` |
| Pagos VE (piloto) | Especialista pagos + Legal | `zonix-payments` (modo piloto primero), `docs/Lanzamiento/PLAN_METODOS_PAGO.md` |
| Tests E2E | QA | `qa-testing-playwright`, `test-driven-development` |

## Piloto — roles con payroll o honorarios

- Founder / CEO / CTO
- Co-CEO / CEO operativo
- Sales B2B (×4)
- Customer Support + Community Manager
- Marketing Lead
- Coordinador de Partners Logísticos
- Contador externo · Abogado externo · Asesor regulatorio (Base/Growth)

## Plataforma (no empleados Zonix)

- `users` (paciente) · `commerce` (farmacia) · `pharmacist` · `delivery_company` · `delivery_agent` · `admin`

## Reglas

1. **No inventar** citas MPPS/INHRR ni plazos legales; marcar `[PENDIENTE]` y remitir a asesor/abogado.
2. Skills de código **no** sustituyen dictamen legal ni farmacéutico.
3. Zonix **no** opera flota propia; última milla = partners (`delivery_company` / `delivery_agent`).
4. Cada farmacia afiliada aporta su **farmacéutico colegiado**; no hay pharmacist liaison interno en piloto.
5. Tiers vigentes: **Lean 101k** · **Base 118k** · **Growth 135k** — no mezclar con nomenclatura legacy «Base 101k».

## Roles complementarios (añadir al panel si aplica)

UX Writer salud · Technical Writer · FP&A · DevOps/SRE · QA/SDET · Product Designer · Especialista pagos VE · Traductor jurídico ES-EN.

## Documentos

- Matriz completa + **árboles Ahora vs +10 años**: [ROLES_SKILLS_ZONIX.md](../../docs/Lanzamiento/ROLES_SKILLS_ZONIX.md) (§ Árbol A / Árbol B)
- Índice pack: [README.md](../../docs/Lanzamiento/README.md)
- Research GitHub: [research_links.md](../../docs/zonix/research_links.md)
- Routing JSON: [roles_matrix.json](../../docs/zonix/roles_matrix.json)

## Skills inversor (orden típico)

1. `zonix-startup-context` — cifras ancla
2. `zonix-financial-model` o `zonix-investor-materials` o `zonix-fundraising-narrative` según tarea
3. Esta skill — lente de rol humano
