---
name: zonix-startup-context
description: Contexto canónico Zonix Pharma (pre-seed VE). Leer ANTES de finanzas, pitch o auditoría pack. Ancla cifras Lean/Base/Growth y rutas docs/Lanzamiento. No regenerar números sin citar fuente.
---

# zonix-startup-context

Fuente única de verdad para agentes que trabajan en **fundraising, finanzas o pack Lanzamiento**. Inspirado en [startup-context](https://github.com/shawnpang/startup-founder-skills/tree/main/skills/startup-context) (MIT), adaptado a Zonix Pharma Venezuela.

## Cuándo aplicar (obligatorio primero)

- Invocar **antes** de `zonix-financial-model`, `zonix-investor-materials`, `zonix-fundraising-narrative`.
- Cualquier tarea que mencione capital, SAFE, burn, ARPF, farmacias activas, TAM.
- Al iniciar sesión en `docs/Lanzamiento/` o `docs/zonix/`.

## Producto y etapa

| Campo | Valor canónico |
|-------|----------------|
| Producto | **Zonix Pharma** — marketplace farmacéutico digital (OTC + Rx), Venezuela |
| Etapa | Pre-seed / piloto; Fase 0 **T+0→Day-D (T+90)** + 12 meses post-Day-D |
| Zona piloto | Valencia metro (Carabobo); foco San Diego / Av. Bolívar Norte |
| Stack | Laravel API + Flutter; pagos **manuales VE** (Zonix no es PSP) |
| Última milla | Partners `delivery_company` / `delivery_agent` — **sin flota propia** |

## Tiers de capital (nunca invertir nombres)

| Tier | Capital pedido | SAFE cap post-money | Equity ref. | Burn prom. |
|------|----------------|---------------------|-------------|------------|
| **Lean** (mínimo) | USD **101.000** | **600.000** | ~16,8% | ~7.559/mes |
| **Base** (recomendado) | USD **118.000** | **650.000** | ~18,2% | ~8.059/mes |
| **Growth** (acelerado) | USD **135.000** | **720.000** | ~18,8% | ~8.691/mes |

**Prohibido:** llamar «Base 101k» o mezclar tiers en una misma tabla sin etiquetar columna.

## Anclas numéricas Lean (planning central)

Solo **Lean** tiene tabla M1–M12 en PROYECCION §1.1; citar [docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md](../../docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md).

| Concepto | Valor |
|----------|-------|
| Fase 0 outflow | ~USD **28.057** |
| Caja al Day-D | ~USD **72.943** |
| Cierre M12 caja | ~USD **42.209** (sin waiver) |
| Equilibrio mensual | **M11** (~**151** farmacias activas; ARPF ~50) |
| Burn año 1 (tabla §1.1) | **90.702** |

## Unit economics (placeholder hasta GMV piloto)

| Métrica | Valor | Fuente |
|---------|-------|--------|
| Modelo B2B | Cuota **25 / 40 / 55** USD + % GMV por banda | PROPUESTA_VALOR_CLIENTE_B2B §5 |
| ARPF referencia | **~USD 50/mes** | UNIT_ECONOMICS, README pack |
| CAC farmacia | USD **139** | UNIT_ECONOMICS |
| LTV / LTV:CAC | USD **1.000** / **~7,2x** | UNIT_ECONOMICS |
| Churn mensual ref. | 5% | UNIT_ECONOMICS |

## Equipo piloto (payroll / honorarios)

- Founder / CEO / CTO
- Co-CEO / CEO operativo
- Sales B2B **×4**
- Customer Support + Community Manager
- Marketing Lead
- Coordinador Partners Logísticos
- Externos: **Contador**, **Abogado**, **Asesor regulatorio** (Base/Growth)

## Roles app (no payroll Zonix)

`users` · `commerce` · `pharmacist` · `delivery_company` · `delivery_agent` · `admin`

## Índice documentos pack

Leer en este orden para inversor (30 min): [docs/Lanzamiento/README.md](../../docs/Lanzamiento/README.md).

| Documento | Uso |
|-----------|-----|
| BRIEF_UNA_PAGINA | Resumen ejecutivo |
| PROYECCION_FINANCIERA_12M | Flujo mes a mes Lean |
| UNIT_ECONOMICS | CAC, LTV, payback |
| PRESUPUESTO_12_MESES_REFERENCIA | Burn por tier |
| ESTRUCTURA_LEGAL_Y_EQUITY | SAFE, cap table, C.A. VE |
| CHECKLIST_PRE_INVERSOR | Reunión + FAQ |
| MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA | Email/WhatsApp |
| ANALISIS_FORENSE | Auditoría multi-rol |
| ROLES_SKILLS_ZONIX | Matriz competencias |

## Reglas para agentes

1. **No inventar** cifras: citar archivo del pack o marcar `[PENDIENTE]`.
2. **No usar** plantillas SaaS genéricas (MRR/NDR/ARR) como métrica principal; revenue piloto = **ARPF farmacias** + GMV futuro.
3. **No sustituir** contador (SENIAT/IVA/ISLR) ni asesor MPPS/INHRR.
4. Regulatorio VE: [docs/PLAN_REGULATORIO_PHARMA_VE.md](../../docs/PLAN_REGULATORIO_PHARMA_VE.md) + skill `zonix-regulatory-ve`.

## Skills relacionadas

- `zonix-financial-model` — coherencia tablas y escenarios
- `zonix-investor-materials` — data room y gaps
- `zonix-fundraising-narrative` — pitch y outreach
- `zonix-lanzamiento-roles` — qué rol humano aplica
