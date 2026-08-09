---
name: zonix-empresa-ve
description: Constitución y gobierno corporativo Zonix Pharma en Venezuela (C.A., RIF, banco, SAFE, laboral). Checklist T+0–T+30. Invocar zonix-startup-context primero. No sustituye abogado ni contador.
metadata:
  auto_invoke: "Constituir empresa / SAFE / laboral VE"
---
# zonix-empresa-ve

Skill para **crear y operar la empresa** Zonix Pharma en Venezuela: vehículo legal, equity, SAFE y trámites post-wire. Complementa el pack [docs/Lanzamiento/](../../docs/Lanzamiento/) — no reemplaza dictamen profesional.

## Cuándo aplicar

- Constituir **ZONIX PHARMA, C.A.** (o denominación disponible en Registro Mercantil).
- Preparar checklist para abogado + contador tras cierre SAFE (T+0).
- Alinear cap table y SAFE con tier elegido (Lean/Base/Growth).
- Contratos laborales piloto (Co-CEO, Sales, CS, etc.) — borrador de lista, no contrato final.

## Obligatorio antes

1. **`zonix-startup-context`** — tiers capital, SAFE caps, Fase 0.
2. Leer [ESTRUCTURA_LEGAL_Y_EQUITY.md](../../docs/Lanzamiento/ESTRUCTURA_LEGAL_Y_EQUITY.md).
3. Leer [PLAN_LANZAMIENTO_COMERCIAL.md](../../docs/Lanzamiento/PLAN_LANZAMIENTO_COMERCIAL.md) §2.1 (hitos legales T+0–T+30).

Referencia Pharma: [PLAN_REGULATORIO_PHARMA_VE.md](../../docs/PLAN_REGULATORIO_PHARMA_VE.md) y [PLAN_METODOS_PAGO.md](../../docs/Lanzamiento/PLAN_METODOS_PAGO.md) §10 (docs Eats eliminados).

## Checklist constitución (orden sugerido)

| Paso | Entregable | Responsable humano | Notas agente |
|------|------------|-------------------|--------------|
| 1 | Reserva denominación RM Carabobo | Abogado | `[PENDIENTE]` plazo según abogado |
| 2 | Acta constitutiva + estatutos | Abogado | Capital ref. USD 1.000 — ver ESTRUCTURA §1.3 |
| 3 | Inscripción Registro Mercantil | Abogado | |
| 4 | RIF empresa SENIAT | Contador | Tras RM |
| 5 | Cuenta bancaria empresa | Founder + banco | Tras RIF |
| 6 | Sello digital / factura electrónica SENIAT | Contador | Puede extenderse post-T+30 |
| 7 | Marca SAPI (Zonix Pharma) | Abogado | Inicio T+5 según plan lanzamiento |

**No inventar** fechas ni costos de trámite sin fuente en pack o cotización abogado.

## SAFE y equity (revisión con abogado)

Desde `zonix-startup-context` (no regenerar):

| Tier | Inversión | Cap post-money | Equity ref. |
|------|-----------|----------------|-------------|
| Lean | USD 101.000 | USD 600.000 | ~16,8% |
| Base | USD 118.000 | USD 650.000 | ~18,2% |
| Growth | USD 135.000 | USD 720.000 | ~18,8% |

- Documento canónico: ESTRUCTURA_LEGAL §2 (SAFE YC adaptado VE).
- Agente: listar cláusulas a validar (conversión, pro-rata, M&A) — marcar `[PENDIENTE abogado]`.

## Checklist laboral piloto (post-constitución)

Roles con payroll u honorarios según [BRIEF_UNA_PAGINA.md](../../docs/Lanzamiento/BRIEF_UNA_PAGINA.md):

- Founder / CEO / CTO
- Co-CEO / CEO operativo
- Sales B2B (×4)
- Customer Support + Community Manager
- Marketing Lead
- Coordinador Partners Logísticos
- Contador externo · Abogado externo · Asesor regulatorio (Base/Growth)

Salida agente: lista de contratos/políticas a redactar — **sin** texto legal vinculante.

## Patrones equity + gobernanza (extract Documentos — no ley VE)

Canon: [EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md](../../docs/audits/EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md) §2–3 · Forense: [FORENSIC_PDFS_DOCUMENTOS…](../../docs/audits/FORENSIC_PDFS_DOCUMENTOS_FOUNDERS_2026-08-09.md).

**Equity (Patel/Dakin — patrones):**

- No split 50/50 por defecto; documentar contribución; acordar ownership en T+0–T+30.
- Cap table simple (pocos SAFE/stakeholders); planificar option pool para piloto — **% = `[PENDIENTE abogado]`**.
- Narrativa dilución: menor % de empresa más valiosa puede ser mejor outcome (alineado a caps pack).

**Gobernanza (`[CH-ref]` → checklist VE):**

- Separar socio / gestión / oversight; declarar conflictos (p. ej. socio↔farmacia).
- Cadencia informe a inversor (KPIs, burn, riesgos) en piloto.
- **Meta-regla:** gobernanza *country-specific* — no copy-paste CH/US.
- **DROP:** artículos Código Obligaciones suizo; no citar como obligación VE.

**Control founder post-capital (Broughman/Fried — 3 claims):**

Canon: [EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md](../../docs/audits/EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md) §6.2.

1. Control tras capital **no** garantizado.
2. No narrativa “IPO restaura control”.
3. Blindar pacto/roles/salida pre-seed VE — `[PENDIENTE abogado]`.

## Privacidad y datos (lente complementaria)

- Invocar `security-requirement-extraction` para DPIA, bases de tratamiento, recetas — ver ESTRUCTURA §4.4 y [PLAN_MODULO_OPERATIVO_CLAVE.md](../../docs/Lanzamiento/PLAN_MODULO_OPERATIVO_CLAVE.md) §14.

## Reglas

1. **No sustituye** abogado, contador ni asesor laboral VE.
2. **No inventar** artículos de ley, plazos MPPS ni tasas SENIAT.
3. Cifras SAFE/cap solo desde `zonix-startup-context` o ESTRUCTURA_LEGAL.
4. Co-CEO es **rótulo operativo**; representación legal según acta — ver nota ESTRUCTURA intro.

## Skills relacionadas

- `zonix-startup-context` (obligatoria antes)
- `zonix-launch-piloto` — calendario T+30 legal en contexto operativo
- `zonix-financial-model` — coherencia caja Fase 0 vs wire
- `zonix-lanzamiento-roles` — lente Legal + Compliance
- `zonix-investor-materials` — data room incluye ESTRUCTURA_LEGAL
