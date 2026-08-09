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

### Deep tech ≠ Zonix (IDB Lab — extract durable)

Canon: [EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md](../../docs/audits/EXTRACT_PDFS_FOUNDERS_KEEP_2026-08.md) §1. Forense: [FORENSIC_PDFS…](../../docs/audits/FORENSIC_PDFS_FOUNDERS_DEEPTECH_2026-08-09.md). **No** abrir PDF externo.

**Definición (KEEP):** Deep Tech = startups sobre descubrimientos científicos o ingeniería profunda (biotech, hardware, science-hard). Digital/marketplace = innovación de **producto/modelo** (reto = PMF); Deep Tech = innovación **tecnológica** (reto = hacer funcionar la tech; R&D upfront, labs, capital y plazos largos). En LAC ~90% de startups están en capas superiores del stack (apps). Tres caminos: adoptar / construir sobre stack existente / crear tech nueva — Zonix = **construir software+ops sobre stack existente**.

| Pregunta LP / copy | Respuesta canónica |
|--------------------|--------------------|
| «¿Son deep tech / science-hard / biotech?» | **No.** Marketplace farmacéutico digital (software + ops VE) en **existing market**. |
| Comparables | Farmalisto, Farmatodo/Locatel, Rappi Pharmacy — **no** Bioceres, satélites, mRNA, hardware R&D. |
| BID Lab / deep tech LAC | Ecosistema **existe** (informe informativo, no base de inversión). Ciclos de capital distintos al raise Lean. **No** citar $ ecosystem / returns / % GDP del informe en pitch. |

**Prohibido:** narrativa «transform industries with IP/R&D cycles»; verticales robotics/cleantech/spacetech; country/startup profiles del appendix IDB como tracción Zonix; odds/retornos extremos de VC Deep Tech como métricas del piloto.

### Anti-patrón AI-native (Founder's Playbook 2026)

Canon: [EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md](../../docs/audits/EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md) §1.

- **KEEP:** disciplina Idea→MVP→Launch (evidencia antes de construir; PMF = retención/repeat; no expandir beachhead prematuro).
- **DROP:** moat “AI-native / agentic coding / founder orquestador de agentes”; Scale IPO / créditos Anthropic como narrativa raise.
- **Respuesta:** usamos la disciplina del playbook; **no** somos startup AI-native — marketplace pharma VE; moat = farmacias + pedidos.
- **Compliance:** AI scan ≠ review calificada; security/Rx gate humano antes de usuarios reales (ver `zonix-legal-contracts-ve`).

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
| **Lean** (mínimo / Excel v4) | **USD 237.412** *(≈237k)* | **600.000** | **~39,57%** | **~14.346**/mes |
| **Base** (recomendado) | ~USD **157.268** *(≈157k)* *[hist. — recalibrar]* | ~**912.814** | ~17,23% | ~**10.898**/mes |
| **Growth** (acelerado) | ~USD **187.478** *(≈187k)* *[hist. — recalibrar]* | ~**1.205.345** | ~15,55% | ~**12.698**/mes |

**Prohibido:** llamar Lean «210.760» / «112k» / «174k» / equity **35,13%** / **18,66%** como vigente; tiers **101/118/135k** (mayo 2026); mezclar columnas sin etiquetar. Fuente: [BRIEF_UNA_PAGINA.md](../../docs/Lanzamiento/BRIEF_UNA_PAGINA.md), [README pack](../../docs/Lanzamiento/README.md), xlsx Detallado v4.

## Anclas numéricas Lean (planning central)

Canon = Excel Detallado **v4** (`MODELO_FINANCIERO_040826_v4` → `docs/Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`). Tabla M1–M12 = PROYECCION §1.1 = Año 1 esc.1. Citar [docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md](../../docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md).

| Concepto | Valor |
|----------|-------|
| TOTAL SAFE | **USD 237.412** |
| Fase 0 outflow | **USD 50.260** |
| Caja al Day-D | **USD 187.152** |
| Burn M1–M12 (Detallado) | **USD 172.152** (~**14.346**/mes) |
| Reserva | **USD 15.000** |
| Cierre M12 caja (esc.1) | **USD 246.231** (187.152 + FCF Y1 **+59.079**) |
| Equity ref. | **~39,57%** (237.412 / 600.000) |
| Esc.1 Y1 | Revenue **228.796** · costos **169.717** · BE FCF mensual **M5** |

## Unit economics (placeholder hasta GMV piloto)

| Métrica | Valor | Fuente |
|---------|-------|--------|
| Modelo B2B | Cuota **45 / 60 / 70** USD + **%GMV 8/7/5** por banda | PROPUESTA_VALOR_CLIENTE_B2B §5 (esc.1) |
| ARPF referencia | **~USD 52/mes** | UNIT_ECONOMICS, Excel Año 1 |
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
