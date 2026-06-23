# Pack Aliado — Gabriel Barrios (Grupo Morr)

> **Para:** Gabriel Barrios — Gerente de Consultoría, Grupo Morr (Valencia, Venezuela)  
> **De:** Abrahan Pulido — Founder / CEO / CTO, Zonix Pharma  
> **Fecha:** junio 2026  
> **Propósito:** versión **legible para humano** del plan Zonix Pharma — sin jerga técnica del data room interno.

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
| 5 | [01_Resumen_Aliado](docx/01_Resumen_Aliado.docx) | Tesis, oportunidad, invitación a alianza |
| 5 | [02_Brief_Una_Pagina](docx/02_Brief_Una_Pagina.docx) | Elevator pitch + ask de referencia |
| 5 | [04_Perfil_Mercado](docx/04_Perfil_Mercado.docx) | TAM/SAM/SOM Valencia |
| 5 | [18_Guia_Modelo_Financiero](docx/18_Guia_Modelo_Financiero.docx) + Excel | Cómo leer el modelo (~112k Lean) |
| 5 | [11_Propuesta_Farmacia](docx/11_Propuesta_Farmacia.docx) | Pitch B2B farmacia |
| 5 | [09_Guia_Reunion](docx/09_Guia_Reunion.docx) | Guion reunión aliado (45–60 min) |

---

## Orden de lectura — 90 minutos (profundizar)

Lo anterior, más:

| # | Documento |
|---|-----------|
| 03 | [Contexto_Pitch](docx/03_Contexto_Pitch.docx) |
| 05 | [Unit_Economics](docx/05_Unit_Economics.docx) |
| 06 | [Proyeccion_12M](docx/06_Proyeccion_12M.docx) |
| 07 | [Presupuesto_12M](docx/07_Presupuesto_12M.docx) |
| 08 | [Estructura_Legal](docx/08_Estructura_Legal.docx) |
| 10 | [Plan_Lanzamiento](docx/10_Plan_Lanzamiento.docx) |
| 12 | [Propuesta_Paciente](docx/12_Propuesta_Paciente.docx) |
| 13 | [Propuesta_Partners](docx/13_Propuesta_Partners.docx) |
| 14 | [Censo_Farmacias](docx/14_Censo_Farmacias.docx) |
| 15 | [Plan_Pagos](docx/15_Plan_Pagos.docx) |
| 16 | [Plan_Operativo](docx/16_Plan_Operativo.docx) |
| 17 | [Marketing_Offline](docx/17_Marketing_Offline.docx) |

---

## Cifras clave (ancla común)

| Concepto | Valor |
|----------|-------|
| Capital Lean (SAFE) | ~USD 112.000 |
| Fase 0 (90 días) | ~USD 33.800 |
| Caja al Day-D | ~USD 78.150 |
| Farmacias activas M12 | ~159 |
| Caja cierre M12 | ~USD 40.800 |
| LTV / CAC | ~7,2× |
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

- Cifras con supuestos documentados; **ARPF ~50 USD/mes** es placeholder hasta GMV piloto.
- Textos legales y regulatorios requieren **dictamen abogado + farmacéutico** antes de Day-D público.
- Montos en USD; reconfirmación trimestral por inflación VE recomendada.

---

**Abrahan Pulido** — ing.pulido.abrahan@gmail.com · +58 412 4352014

*Canon técnico del proyecto: `docs/Lanzamiento/` — no mezclar con este pack al versionar.*
