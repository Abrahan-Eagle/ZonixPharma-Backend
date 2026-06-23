# Guía del modelo financiero — Zonix Pharma

**Para:** Gabriel Barrios — Gerente de Consultoría, Grupo Morr (Valencia, Venezuela)  
**De:** Abrahan Pulido — Founder / CEO / CTO, Zonix Pharma  
**Fecha:** junio 2026  
**Archivo Excel adjunto:** `MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`

---

## Qué es este documento

Esta guía explica **cómo leer el modelo financiero** de Zonix Pharma: cuánto capital se plantea, en qué se gasta y qué resultado espera el piloto en Valencia durante el primer año.

**No es una solicitud de inversión** salvo que acordemos otra cosa en reunión. Es material para alinear visión y revisar números con alguien que conoce el mercado local.

Para la **tesis de negocio** (mercado, diferenciadores, riesgos), ver el documento hermano `RESUMEN_ALIADO_GABRIEL_BARRIOS.md`.

---

## En 60 segundos — las cifras que importan

Escenario **Lean** (el ask principal del piloto):

| Concepto | USD (aprox.) |
|----------|--------------|
| **Capital total (SAFE Lean)** | **~112.000** |
| Gastos únicos al inicio (legal, intro mercado, PCs, oficina) | ~14.200 |
| **Fase 0** — 90 días antes del go-live | ~33.800 |
| **Caja al Day-D** (inicio del año 1 operativo) | ~78.150 |
| Burn operativo año 1 (12 meses) | ~97.300 |
| Reserva imprevistos | ~490 |
| **Ingresos año 1** | ~60.000 |
| **Resultado operativo año 1 (FCF)** | **−37.300** |
| **Caja al cierre mes 12** | **~40.800** |
| **Farmacias activas al mes 12** | **~159** |

**En una frase:** Zonix plantea levantar **~112k USD**, gastar **~34k** en los primeros 90 días (legal, equipo, captación inicial), operar 12 meses con un burn promedio de **~8,1k/mes**, cerrar el año con **~159 farmacias activas** y **~41k en caja** — casi equilibrio mensual en el mes 12 (ingresos ~7.950 vs costos ~7.980).

> Todas las cifras están en **USD constantes**. El presupuesto incluye un **buffer de inflación Venezuela (~20%)** dentro de la línea de material, transporte y contingencia — no es una fila aparte.

---

## Cómo leer el Excel (orden sugerido — 30 minutos)

El archivo tiene **12 pestañas**. Para una primera reunión, este orden funciona bien:

| Paso | Pestaña | Para qué sirve |
|------|---------|----------------|
| 1 | **Hoja3** | Resumen del capital — **sección A** = use of funds oficial |
| 2 | **Detallado de la inversión.** | Desglose línea por línea de gastos |
| 3 | **Hoja1** | Vista resumida por bloques (equipos, legal, marketing, etc.) |
| 4 | **ESTA SI VALE** | Unit economics, simulador y burn mensual de referencia |
| 5 | **Año 1** | Flujo mes a mes (M1–M12) |
| 6 | **Flujo Total** | VAN, TIR y lectura a 3–5 años (opcional en primera pasada) |

Las pestañas **Año 2** a **Año 5**, **Hoja2** y **Tasa Crecimiento** son proyección a largo plazo — útiles para due diligence, no obligatorias en la primera lectura.

---

## Regla de oro (importante)

> **No sumes Hoja1 + ESTA + Hoja3 sección B como si fueran tres inversiones distintas.**

- **Hoja3 — sección A** = el **total oficial** del capital (~112k). Ahí están one-shots, burn año 1 y reserva. **Suma 100%.**
- **Hoja3 — sección B** = desglose **informativo** (legal, intro, mano de obra Fase 0, etc.). **No sumar esos bloques al total SAFE.**
- **Hoja1** y **ESTA** repiten la misma información con otro layout (formato familiar tipo plantilla Pizza QLQ). Son vistas de lectura, no capital adicional.

**Trampa frecuente:** si sumas Fase 0 + Burn + Reserva como porcentajes de la sección B, parece ~118% del SAFE. Eso es un artefacto del desglose informativo. El único total válido es la **sección A de Hoja3**.

**Nota visual:** el Excel usa colores verde/púrpura similares a una plantilla de inversor conocida (Pizza QLQ). Es solo **formato familiar** para leer rubros. El negocio es **marketplace farmacéutico + SAFE**, no reparto 70/30 de una pizzería.

---

## Use of funds — en qué se va el capital

### Gastos únicos (one-shots) — ~14.200 USD

| Rubro | USD |
|-------|-----|
| Constitución empresa (C.A., SENIAT, trámites HQ, banco, etc.) | 5.050 |
| Intro mercado (web, brochures, tablets, visitas, video pitch B2B) | 3.808 |
| HQ + equipos (depósito, adecuación, 4 PCs operativos) | 5.350 |
| **Total one-shots** | **~14.208** |

> No incluye permisos sanitarios de operación farmacéutica (BPF/CPE) — eso corre por cuenta de cada farmacia aliada.

### Fase 0 — T+0 a Day-D (90 días) — ~33.800 USD

Antes del go-live público: legal, nómina del equipo (founder, co-CEO, dev, **4 vendedores B2B**, CS, asesores), marketing pre-lanzamiento y visitas a farmacias.

| Sub-fase | Período | Gasto USD |
|----------|---------|-----------|
| 0a | T+0–30 | ~17.813 |
| 0b | T+30–60 | ~8.011 |
| 0c | T+60–90 | ~8.011 |
| **Total Fase 0** | | **~33.835** |

**Caja al Day-D** (inicio mes 1): ~112.000 − ~33.800 ≈ **~78.150 USD**

### Año 1 operativo — resumen

| Concepto | USD |
|----------|-----|
| Burn meses 1–12 | 97.290 |
| Reserva imprevistos | 490 |
| **Total capital Lean (Hoja3 §A)** | **~111.988** |

### Si se sube de tier (referencia rápida)

| Tier | Capital | Diferencia principal vs Lean |
|------|---------|------------------------------|
| **Lean** (ask principal) | ~112k | 4 vendedores, sueldos bootstrap, reserva mínima |
| **Base** | ~157k | Sueldos closer to mercado, Google Ads, más reserva (~10,6k) |
| **Growth** | ~187k | Dev senior, marketing pleno, reserva ~20k |

El escenario **Blitz** (~185k, 6 vendedores, curva comercial más agresiva) es un **stretch goal** para capturar más independientes en Carabobo — no sustituye el ask Lean hasta validar censo calle.

---

## Año 1 — mes a mes (escenario Lean)

**Cómo leer la tabla:**

- **Firmadas** = farmacias nuevas que firman ese mes.
- **Activas** = farmacias que facturan al cierre del mes (neto de bajas).
- **Ingresos** = ARPF placeholder **~50 USD/farmacia/mes** × activas. Se recalibrará cuando haya GMV real post-piloto.
- **Egresos (burn)** = costos operativos del mes (nómina, marketing, hosting, contingencia).
- **FCF** = ingresos − egresos.

| Mes | Firmadas | Activas | Ingresos | Egresos | FCF mes | FCF acum. |
|-----|----------|---------|----------|---------|---------|-----------|
| 1 | 13 | 40 | 1.500 | 8.011 | −6.511 | −6.511 |
| 2 | 13 | 51 | 2.168 | 8.011 | −5.843 | −12.354 |
| 3 | 14 | 62 | 3.100 | 8.347 | −5.247 | −17.601 |
| 4 | 15 | 74 | 3.700 | 8.347 | −4.647 | −22.248 |
| 5 | 15 | 85 | 4.250 | 8.347 | −4.097 | −26.345 |
| 6 | 16 | 97 | 4.850 | 8.347 | −3.497 | −29.842 |
| 7 | 16 | 108 | 5.400 | 7.980 | −2.580 | −32.422 |
| 8 | 16 | 119 | 5.950 | 7.980 | −2.030 | −34.452 |
| 9 | 17 | 130 | 6.500 | 7.980 | −1.480 | −35.932 |
| 10 | 17 | 141 | 7.050 | 7.980 | −930 | −36.862 |
| 11 | 17 | 151 | 7.550 | 7.980 | −430 | −37.292 |
| 12 | 16 | 159 | 7.950 | 7.980 | −30 | **−37.322** |
| **Total** | **185** | **159** *(M12)* | **59.968** | **97.290** | **−37.322** | — |

**Lectura del año:**

- De **40 activas** (M1) a **159** (M12).
- El FCF acumulado empeora hasta ~M11 y **casi se equilibra en M12** (solo −30 USD ese mes).
- La **caja** baja de ~78k (Day-D) a **~41k** al cierre M12 — queda **~36%** del capital inicial.

### Principales líneas de costo mensual (referencia)

| Concepto | USD/mes (aprox.) |
|----------|------------------|
| Founder + Co-CEO | 2.000 |
| 4× vendedores B2B | 1.400 |
| Dev (Flutter/Laravel) | 600 |
| Marketing (Meta Ads + valla + contingencia) | variable por tramo |
| CS + herramientas + contador/abogado + HQ + hosting | ~1.989 fijo |

Burn promedio: **~8.108 USD/mes**.

---

## Unit economics y escenarios

### Por farmacia (ancla del pack)

| Métrica | Valor |
|---------|-------|
| Modelo de cobro | Cuota fija **25 / 40 / 55 USD** + % sobre GMV por banda |
| ARPF placeholder | **~50 USD/mes** por farmacia activa |
| CAC (costo de captar una farmacia) | **139 USD** |
| LTV (valor de vida del cliente) | **1.000 USD** |
| **LTV / CAC** | **~7,2×** |
| Payback del CAC | **~2,8 meses** |
| Churn mensual objetivo | 5% |
| Farmacias para equilibrio mensual (ARPF ~50) | **~160** |

### Tres escenarios de sensibilidad (año 1)

| Escenario | Probabilidad | Activas M12 | ARPF | Caja M12 |
|-----------|--------------|-------------|------|----------|
| **P10 — pesimista** | 20% | ~120 | 40 | ~25.000 |
| **P50 — plan base** | 50% | ~159 | ~50 | **~40.831** |
| **P90 — optimista** | 30% | ~200 | ~55 | ~52.000 |

**Pregunta clave para Valencia:** ¿es creíble llegar a **~159 activas** en 12 meses con **4 vendedores** y el SAM de independientes (~80–100 en metro Valencia)?

---

## Valoración e instrumento (SAFE)

| Concepto | Valor | Nota |
|----------|-------|------|
| Instrumento | SAFE post-money | Cap **600.000 USD** (Lean) |
| Equity de referencia al convertir | **~18,7%** | Ilustrativo — depende del cap y monto invertido |
| Tasa de descuento (VAN interno) | 25% | Referencia pre-seed LatAm — no auditada |
| VAN a 5 años (Lean) | Negativo (~−790) | Normal en pre-seed con FCF año 1 negativo |
| TIR a 5 años | ~25% | Herramienta de sensibilidad, no promesa de retorno |

**Disclaimers importantes:**

1. El **SAFE no reparte caja operativa** hasta conversión — las tablas de “reparto ilustrativo” en el Excel son **solo didácticas**.
2. **VAN/TIR** deben validarse con contador/FP&A antes de un pitch institucional.
3. **ARPF ~50** es placeholder hasta tener **≥30 días de GMV real** post-Day-D.

---

## Qué nos gustaría que revises, Gabriel

Tu mirada de consultoría y tu arraigo en Valencia nos ayudan a validar lo que el modelo asume:

1. **Densidad comercial:** ¿**159 farmacias activas** al mes 12 es realista en el metro Valencia (independientes/medianas)?
2. **Costos locales:** ¿Los sueldos **Lean** (founder 1k, sales 350, dev 600) son defendibles en Carabobo o subestiman el mercado?
3. **Red:** ¿Podrías orientarnos sobre **2–3 farmacias** para discovery en Fase 0 (sin compromiso comercial)?
4. **Riesgos VE:** ¿El buffer 20% de inflación te parece prudente para 12 meses de operación?

Para contexto de negocio (TAM, moat, riesgos, propuesta de alianza): ver `RESUMEN_ALIADO_GABRIEL_BARRIOS.md`.

---

## Anexo — mapa de las 12 pestañas del Excel

| Pestaña | Contenido en lenguaje simple |
|---------|------------------------------|
| **Flujo Total** | Vista consolidada 5 años + VAN/TIR |
| **Detallado de la inversión.** | Todas las líneas de gasto, Fase 0 y resumen lateral |
| **Hoja3** | Resumen capital — **§A = total oficial** |
| **Hoja1** | Vista por bloques (equipos, legal, MO, marketing…) |
| **Hoja2** | Complemento de lectura (sensibilidad) |
| **ESTA SI VALE** | Unit economics + simulador mes a mes |
| **Año 1** … **Año 5** | Proyección anual / mensual por año |
| **Tasa Crecimiento** | Drivers de crecimiento año 2–5 |

---

## Disclaimers finales

- **Pre-seed / sin revenue real:** cifras con supuestos documentados; sujetas a recalibración con GMV piloto.
- **Regulatorio:** Zonix no sustituye al farmacéutico titular ni al criterio médico; dictamen legal pendiente antes de Day-D público.
- **Inflación VE:** cifras **mayo–junio 2026**; reconfirmación trimestral recomendada.
- **Este documento** es guía de lectura del modelo; no sustituye asesoría contable, legal ni farmacéutica.

---

**Abrahan Pulido**  
Founder / CEO / CTO — Zonix Pharma  
ing.pulido.abrahan@gmail.com · +58 412 4352014

*Zonix Pharma — junio 2026*
