---
name: zonix-startup-context
description: Contexto canónico Zonix Pharma (pre-seed VE). Leer ANTES de finanzas, pitch o auditoría pack. Ancla cifras Lean/Base/Growth y rutas docs/Lanzamiento. No regenerar números sin citar fuente.
metadata:
  auto_invoke:
    - "Trabajar con pack Lanzamiento / roles / pitch inversor"
    - "Mejorar o auditar un .md en docs/Lanzamiento/"
    - "Auditar finanzas del pack (PROYECCION, UNIT, PRESUPUESTO)"
    - "Preparar data room / gaps inversor"
    - "Redactar pitch / email inversor"
    - "Constituir empresa / SAFE / laboral VE"
    - "Calendario piloto / hitos T+30/60/90 / Day-D"
    - "Lean Canvas / modelo negocio piloto"
    - "Lectura founder CEO/CTO/TPM (due diligence, 90 días)"
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

## Market Type (Steve Blank — four-steps)

Zonix Pharma opera en **mercado existente con diferenciación por features** (no categoría nueva ni resegmentación pura).

| Tipo | ¿Aplica Zonix? | Implicación para pitch/docs |
|------|----------------|----------------------------|
| New market | No | No usar narrativa «creamos el mercado de farmacia digital VE» |
| **Existing market** | **Sí** | Competir en marketplace farmacéutico; ganar con Rx + costo vs agregador |
| Resegmented (low-cost / niche) | Parcial | Nicho: farmacias independientes Valencia + paciente urbano |
| Clone | No | No copiar modelo US sin adaptar VE |

**Comparables válidos (PERFIL_MERCADO):** Farmalisto (LatAm), Farmatodo/Locatel (cadenas VE), Rappi Pharmacy (agregador alto take-rate).

**Anti-patrón:** no aplicar `blue-ocean-strategy` al pitch — Zonix **no** inventa categoría; compite con atributos únicos (farmacéutico por farmacia, cuota+% GMV bajo, pagos manuales VE).

## Mercado bilateral (UniMOOC M3 — Steve Blank)

Zonix es **two-sided**: farmacia (supply) + paciente (demand). Implicaciones:

| Lado | Métrica leading Fase 0 | Riesgo chicken-and-egg |
|------|------------------------|-------------------------|
| Farmacia | Firmas + catálogo activo | Sin oferta, paciente no convierte |
| Paciente | Pedidos completados post-Day-D | Sin demanda, farmacia churn |

**Regla agente:** no escalar paid paciente (Meta) hasta **N farmacias activas** en beachhead — ver `zonix-launch-piloto` y `zonix-lean-canvas`.

## Tiers de capital (nunca invertir nombres)

| Tier | Capital pedido | SAFE cap post-money | Equity ref. | Burn prom. |
|------|----------------|---------------------|-------------|------------|
| **Lean** (mínimo / Excel v3.9.3) | **USD 210.760** *(≈211k)* | **600.000** | **~35,13%** | **~12.125**/mes |
| **Base** (recomendado) | ~USD **157.268** *(≈157k)* *[hist. — recalibrar]* | ~**912.814** | ~17,23% | ~**10.898**/mes |
| **Growth** (acelerado) | ~USD **187.478** *(≈187k)* *[hist. — recalibrar]* | ~**1.205.345** | ~15,55% | ~**12.698**/mes |

**Prohibido:** llamar Lean «112k» / «174k» / equity **18,66%** / **29,02%** como vigente; tiers **101/118/135k** (mayo 2026); mezclar columnas sin etiquetar. Fuente: [BRIEF_UNA_PAGINA.md](../../docs/Lanzamiento/BRIEF_UNA_PAGINA.md), [README pack](../../docs/Lanzamiento/README.md), xlsx Detallado.

## Anclas numéricas Lean (planning central)

Canon = Excel Detallado v3.9.3. Tabla M1–M12 detallada en PROYECCION §1.1 = **legado** + `[PENDIENTE FP&A]`. Citar [docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md](../../docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md).

| Concepto | Valor |
|----------|-------|
| TOTAL SAFE | **USD 210.760** |
| Fase 0 outflow | **USD 50.260** |
| Caja al Day-D | **USD 160.500** |
| Burn M1–M12 | **USD 145.500** (~**12.125**/mes) |
| Reserva | **USD 15.000** |
| Cierre M12 caja | **`[PENDIENTE FP&A]`** (40.831 = legado burn ~8.1k) |
| Equity ref. | **~35,13%** (210.760 / 600.000) |
| Billing / waiver | Revenue §1.1 legado = ARPF agregada; waiver primeras 10 ≈ **−453** Y1 — cash con waiver `[PENDIENTE FP&A]` |

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
- `zonix-lean-canvas` — canvas cualitativo pre-Day-D
- `zonix-investor-materials` — data room y gaps
- `zonix-fundraising-narrative` — pitch y outreach
- `zonix-lanzamiento-roles` — qué rol humano aplica
