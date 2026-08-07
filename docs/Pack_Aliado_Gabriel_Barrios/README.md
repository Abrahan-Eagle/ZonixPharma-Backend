# Pack Aliado — Gabriel Barrios (Grupo Morr)

> **Para:** Gabriel Barrios — Gerente de Consultoría, Grupo Morr (Valencia, Venezuela)  
> **De:** Abrahan Pulido — Founder / CEO / CTO, Zonix Pharma  
> **Fecha:** junio 2026 (ampliado v1.1 — informe detallado para consultoría)  
> **Propósito:** versión **legible y profunda para humano** del plan Zonix Pharma — sin jerga técnica del data room interno.
>
> **Canon financiero (7 ago 2026):** ask Lean **USD 237.412** (Excel v4). Cifras en `md/` sincronizadas desde Lanzamiento; **fuente de verdad** = [`../Lanzamiento/`](../Lanzamiento/) + [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](../Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx). No usar asks **112k / 210.760** como vigentes.

**Documento maestro:** [`md/01_Resumen_Aliado.md`](md/01_Resumen_Aliado.md) / [`docx/01_Resumen_Aliado.docx`](docx/01_Resumen_Aliado.docx) es el **informe completo** que resume los 18 entregables (~1.050 líneas). Empieza por ahí si quieres una sola lectura; los docs 02–18 son el detalle ampliado por tema. Canon en Lanzamiento: [`RESUMEN_ALIADO_GABRIEL_BARRIOS.md`](../Lanzamiento/RESUMEN_ALIADO_GABRIEL_BARRIOS.md).

---

## Qué es este pack

Esta carpeta es **independiente** de [`../Lanzamiento/`](../Lanzamiento/). El data room canónico (inversor, FP&A, equipo) sigue en Lanzamiento; aquí solo está lo que conviene leer **Gabriel** como aliado estratégico y consultor local.

**No es solicitud de inversión** por defecto. Es material para alinear visión, revisar números y explorar una posible relación de asesoría pre-Day-D.

---

## Cómo usar el pack

| Formato | Carpeta | Uso |
|---------|---------|-----|
| **Word** | [`docx/`](docx/) | Enviar, imprimir o revisar en reunión |
| **Markdown** | [`md/`](md/) | Fuente editable (regenerar Word con `_tools/batch_export.py`) |
| **Excel** | [`anexos/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](anexos/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) | Modelo financiero completo |

---

## Orden de lectura — 30 minutos (primera reunión)

| Min | Documento | Qué obtienes |
|-----|-----------|--------------|
| 5 | [01_Resumen_Aliado](docx/01_Resumen_Aliado.docx) | **Informe completo de los 18 docs** (~60 min lectura) |
| 5 | [02_Brief_Una_Pagina](docx/02_Brief_Una_Pagina.docx) | Elevator pitch + ask de referencia |
| 5 | [04_Perfil_Mercado](docx/04_Perfil_Mercado.docx) | TAM/SAM/SOM Valencia |
| 5 | [18_Guia_Modelo_Financiero](docx/18_Guia_Modelo_Financiero.docx) + Excel | Cómo leer el modelo (237.412 Lean) |
| 5 | [11_Propuesta_Farmacia](docx/11_Propuesta_Farmacia.docx) | Pitch B2B farmacia |
| 5 | [09_Guia_Reunion](docx/09_Guia_Reunion.docx) | Guion reunión aliado (45–60 min) |

---

## Orden de lectura — 90 minutos (profundizar)

Lo anterior, más (documentos ampliados con escenarios, sensibilidades y guías de campo):

| # | Documento | Destacado en v1.1 |
|---|-----------|-------------------|
| 03 | [Contexto_Pitch](docx/03_Contexto_Pitch.docx) | Decisiones de capital y comparables |
| 05 | [Unit_Economics](docx/05_Unit_Economics.docx) | Cohortes, WTP, puente de caja |
| 06 | [Proyeccion_12M](docx/06_Proyeccion_12M.docx) | Mes a mes + sensibilidad P10/P50/P90 |
| 07 | [Presupuesto_12M](docx/07_Presupuesto_12M.docx) | Desglose Fase 0 y nómina comercial |
| 08 | [Estructura_Legal](docx/08_Estructura_Legal.docx) | SAFE, equity, datos de salud |
| 10 | [Plan_Lanzamiento](docx/10_Plan_Lanzamiento.docx) | Calendario semana a semana T+0–M12 |
| 12 | [Propuesta_Paciente](docx/12_Propuesta_Paciente.docx) | Funnel demanda y escenarios de uso |
| 13 | [Propuesta_Partners](docx/13_Propuesta_Partners.docx) | Delivery y terceros logísticos |
| 14 | [Censo_Farmacias](docx/14_Censo_Farmacias.docx) | **Discovery calle + 18 dolores farmacia** |
| 15 | [Plan_Pagos](docx/15_Plan_Pagos.docx) | Métodos VE, mora, conciliación |
| 16 | [Plan_Operativo](docx/16_Plan_Operativo.docx) | Checklist pre-Day-D, disputas, Rx |
| 17 | [Marketing_Offline](docx/17_Marketing_Offline.docx) | Calendario M1–M12 Meta/valla/flyers |

---

## Cifras clave (ancla común)

| Concepto | Valor |
|----------|-------|
| Capital Lean (SAFE) | **USD 237.412** |
| Fase 0 (90 días) | **USD 50.260** |
| Caja al Day-D | **USD 187.152** |
| Farmacias activas M12 | **~159** |
| Revenue M12 (esc.1) | **~USD 29.892**/mes |
| Caja cierre M12 | **USD 246.231** |
| BE FCF mensual | **M5** |
| LTV / CAC | **~7,5×** (LTV 1.040 / CAC 139) |
| Pricing B2B | **45/60/70** + %GMV **8/7/5** |
| TAM pharma VE | USD 1.638M/año |

---

## Regenerar Word tras editar Markdown

```bash
cd docs/Pack_Aliado_Gabriel_Barrios
../Lanzamiento/_tools/.venv/bin/python3 _tools/batch_export.py
../Lanzamiento/_tools/.venv/bin/python3 _tools/verify_pack.py
```

---

## Disclaimers

- Cifras con supuestos documentados; **ARPF ~52 USD/mes** es placeholder hasta GMV piloto.
- Textos legales y regulatorios requieren **dictamen abogado + farmacéutico** antes de Day-D público.
- Montos en USD; reconfirmación trimestral por inflación VE recomendada.

---

**Abrahan Pulido** — ing.pulido.abrahan@gmail.com · +58 412 4352014

*Canon técnico del proyecto: `docs/Lanzamiento/` — no mezclar con este pack al versionar.*
