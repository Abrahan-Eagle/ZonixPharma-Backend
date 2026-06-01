# Pack Lanzamiento Inversor — Zonix Pharma

> **Última actualización:** 27 mayo 2026.
> **Propósito de esta carpeta:** (1) **Plan de lanzamiento operativo** de Zonix Pharma — calendario **T+0 → Fase 0 → Day-D (T+90) → M12**, equipo, farmacias, tech y KPIs ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) es la fuente canónica). (2) **Materiales de inversor y finanzas** en mejora continua (WIP). Cruce pack ↔ código: [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) + [../ANALISIS_TECNICO_COMPLETO_2026-05.md](../ANALISIS_TECNICO_COMPLETO_2026-05.md).
> **Estado del pack:** borrador avanzado pre-seed; textos legales y plazos de retención sujetos a **dictamen abogado + farmacéutico asesor** antes de Day-D público.
> **Producto:** Zonix Pharma — marketplace farmacéutico digital; el pack usa **solo** esa marca para producto y plataforma (no mezclar con otros productos en narrativa, métricas ni infra — p. ej. dominio `zonixpharma.com`, repo `ZonixPharma-*`).
> **Portfolio del founder:** puede citar otros proyectos del mismo founder (p. ej. **Corral X**) como track record en BRIEF/VOLCADO; eso **no** es el producto que se financia ni la plataforma de este data room.
> **Zona piloto:** Valencia metro (Carabobo), con foco inicial operativo **San Diego / Av. Bolívar Norte** y expansión a Naguanagua, El Socorro, La Viña, Prebo, etc.
> **Capital pedido (Lean — mínimo viable):** **USD 101.000** para **Fase 0 (~90 días)** + **12 meses** post-**Day-D** — SAFE post-money cap **USD 600.000**. **Recomendado (Base):** **USD 118.000** / cap **650.000**. **Acelerado (Growth):** **USD 135.000** / cap **720.000** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1.

Este directorio contiene **25 archivos** `.md` en raíz (+ **7** en [_auditorias/](_auditorias/) = **32** total): índice y auditorías de producto ([README.md](README.md), [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md), [AUDITORIA_FORENSE_360_2026-06.md](AUDITORIA_FORENSE_360_2026-06.md), [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md), [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md), [INCOHERENCIAS_LANZAMIENTO_2026-05.md](INCOHERENCIAS_LANZAMIENTO_2026-05.md)) más **19 documentos** de contenido (brief, finanzas, legal, operación comercial, propuestas de valor). Logs Prompt B–F y plantillas IA: [_auditorias/](_auditorias/) — **no data room**. Para **ejecutar el lanzamiento**, empezar por [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) y [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md). Para **inversor**, el `BRIEF` resume en una página; el resto profundiza cifras y supuestos (junio 2026).

---

## Orden de lectura recomendado (inversor — ~30 minutos)

| Min | Documento | Qué obtienes |
|-----|-----------|--------------|
| 5 | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) | Tesis, problema, timing, ask SAFE |
| 5 | [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) | Decisiones clave y posicionamiento |
| 5 | [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) | TAM/SAM/SOM, competencia, beachhead |
| 5 | [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) | CAC, LTV, payback, break-even |
| 5 | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 | Tabla **M1–M12 Lean** mes a mes |
| 3 | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) | SAFE, cap table, vehículo VE |
| 2 | [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) | Guion reunión + FAQ |

**Opcional antes de reunión:** [AUDITORIA_FORENSE_360_2026-06.md](AUDITORIA_FORENSE_360_2026-06.md) (auditoría consolidada) · [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) (pack ↔ código). **Mensaje listo para enviar:** [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) §2 (misma ruta).

> **No incluir en zip inversor:** [_auditorias/](_auditorias/) · [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md) · [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) (interno).

Tiers Base/Growth y detalle burn: [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1.

## Orden de lectura para el equipo interno (90 minutos)

Lo anterior + los siguientes (material **Jarvis / proceso** en [_auditorias/](_auditorias/) — no inversor):

0. [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) — qué dice el plan vs qué hace el software hoy.
0b. [INCOHERENCIAS_LANZAMIENTO_2026-05.md](INCOHERENCIAS_LANZAMIENTO_2026-05.md) — registro doc ↔ doc (I-01–I-28).
0c. [AUDITORIA_FORENSE_360_2026-06.md](AUDITORIA_FORENSE_360_2026-06.md) — auditoría consolidada junio 2026.
0d. [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) — P0–P4 humanos.
0e. [_auditorias/PROMPT_PACK_LANZAMIENTO.md](_auditorias/PROMPT_PACK_LANZAMIENTO.md) — prompts A–F (solo IA).

## Usar Jarvis (IA) para mejorar este pack

Los marcos del informe §9–11 están **adaptados en skills locales** (no hace falta `npx skills add` de repos externos):

| Skill agente | Para qué |
|--------------|----------|
| **`zonix-lanzamiento-docs`** | Router, StoryBrand, Bullseye, **anti-patrones** (blue-ocean, 100m-leads, lean dogma) |
| `zonix-startup-context` | Cifras ancla + **Market Type** (mercado existente) |
| `zonix-b2b-sales` | PROPUESTA_VALOR_CLIENTE_B2B (SPIN) |
| `zonix-fundraising-narrative` | MENSAJE_ENVIO, CONTEXTO_PITCH, **Cialdini** (cierre inversor) |
| `zonix-launch-piloto` | PLAN (four-steps, mom-test, **beachhead** post-piloto) |
| `zonix-financial-model` | PROYECCION, UNIT, **waiver 10 farmacias** |
| `zonix-investor-materials` | CHECKLIST, data room, PERFIL competencia |

**Prompts listos (equipo interno):** [_auditorias/PROMPT_PACK_LANZAMIENTO.md](_auditorias/PROMPT_PACK_LANZAMIENTO.md).

**Rondas recomendadas:** auditoría consolidada [AUDITORIA_FORENSE_360_2026-06.md](AUDITORIA_FORENSE_360_2026-06.md) → correcciones doc a doc → P0 humano REGISTRO.

**Prompt ejemplo:** «Mejora `PROPUESTA_VALOR_CLIENTE_B2B` §X usando `zonix-lanzamiento-docs`; cifras solo del pack; una sección.»

Ruta skill: [.agents/skills/zonix-lanzamiento-docs/SKILL.md](../../.agents/skills/zonix-lanzamiento-docs/SKILL.md).

**Pack (26–27 mayo 2026):** secciones SPIN, BrandScript, Bullseye, validación Day-D, WTP, email corto, FAQ técnica, posicionamiento. **Skills (27 mayo):** Market Type, waiver 100m-offers, beachhead/chasm, Cialdini, anti-patrones. Guía: [../zonix/SKILLS_STARTUP_USAR_NO_USAR.md](../zonix/SKILLS_STARTUP_USAR_NO_USAR.md).

1. [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) — **Fase 0 (T+0→Day-D T+90)** + hitos T+30 / T+60 / Day-D + Definition of Done del piloto.
2. [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) — pitch a la farmacia.
3. [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) — pitch al paciente.
4. [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) — pitch a **`delivery_company`** + **`delivery_agent`** (concesión última milla) y farmacéutico colegiado; **sin** rol `delivery` autónomo en app.
5. [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) — escenarios Lean / Base / Growth.
6. [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md) — fuentes y precios públicos.
7. [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) — vallas, radio, flyers.
8. [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) — pago móvil, transferencia, Zelle, Binance Pay.
9. [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) — validación Rx, farmacovigilancia §11, seguridad §14, playbook incidencias §16, amenazas §17, QA piloto §18.
10. [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md) — preguntas para el equipo.
11. [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) — plantilla de captura.
12. [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) — texto de WhatsApp/email + bullets pitch.
13. [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md) — auditoría multi-perspectiva del pack: **6 perspectivas narrativas**, mapa ejecutivo §11.1 / §11.1 bis, **síntesis §11.4** y **sexta pasada 360° §13** (cruce técnico).
14. [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) — **registro único** de todos los `[PENDIENTE]` (P0–P4) para cerrar antes de reunión inversor.

---

## Cifras clave del pack (ancla numérica común a todos los documentos)


| Concepto                          | **Lean (mínimo viable)** | **Base (recomendado)** | **Growth (acelerado)** |
| --------------------------------- | ------------------------ | ---------------------- | ---------------------- |
| Capital pedido                    | **USD 101.000**          | **USD 118.000**        | **USD 135.000**        |
| Runway                            | 12 meses post-Day-D      | 12 meses post-Day-D    | 12 meses post-Day-D    |
| SAFE post-money cap               | **USD 600.000**          | **USD 650.000**        | **USD 720.000**        |
| Equity implícito (ref.)           | **~16,83%**              | **~18,15%** *(≈18,2% redondeado)* | **~18,75%** *(≈18,8% redondeado)* |
| Burn promedio mensual             | **~USD 7.559**           | **~USD 8.059**         | **~USD 8.691**         |
| One-shots (Fase 0)                | **~USD 9.808**           | **~USD 10.708**        | **~USD 10.708**        |
| Buffer (inflación VE)             | 20%                      | 20%                    | **25%** (marketing Growth) |
| Equilibrio mensual (revenue ≥ burn) | **M11** (PROYECCION §1.1 — solo Lean tiene tabla M1–M12) | Más colchón caja; misma curva revenue | Mayor reserva runway |
| Farmacias activas ref. equilibrio | **~151** (ARPF ~50; burn **7.431** tramo C) | **~162** (burn **~8.059**) | **~174** (burn **~8.691**) |

> **Equilibrio Base/Growth:** las cifras **~162** / **~174** son **break-even teórico** (mismo ARPF **~50** y burn promedio del tier: **8.059 ÷ 50 ≈ 162**, **8.691 ÷ 50 ≈ 174**). **No** hay tabla M1–M12 mes a mes para Base/Growth en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) — solo **Lean** §1.1.

> **Lectura tiers:** **Lean = mínimo ejecutable** (Co-CEO, 4× Sales, HQ casa, IA, valla pequeña). **Base = recomendado** (+ valla mediana, asesor, Meta sostenido, reserva). **Growth = acelerado** (+ colchón runway). Escalera **101k < 118k < 135k**.

> **Fase 0 + Day-D (Lean 101k):** **T+0** = wire **USD 101k**; **Day-D = T+90**; **Fase 0** consume **~USD 28.057** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0.1). **Caja al Day-D:** **~USD 72.943**. **Cierre M12:** **~USD 42.209** (sin waiver). Solo **Lean** tiene PROYECCION §1.1 mes a mes; Base/Growth = delta burn + reserva en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md).



| Métrica unitaria                    | Valor                                                                                                                                                                       |
| ----------------------------------- | --------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| Modelo farmacia                     | Cuota fija **USD 25 / 40 / 55** + **% GMV** por banda ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5); **un RIF** / GMV agregado sucursales en piloto |
| ARPF (Average Revenue Per Farmacia) | **USD ~50/mes referencia provisional** (placeholder hasta GMV piloto; modelo cobro = híbrido §5 B2B — [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md))                               |
| CAC                                 | USD **139**/farmacia                                                                                                                                                        |
| Churn mensual                       | 5% (mediana SMB SaaS LatAm)                                                                                                                                                 |
| Lifetime promedio                   | 20 meses                                                                                                                                                                    |
| LTV                                 | USD 1.000                                                                                                                                                                   |
| LTV/CAC                             | **~7,2x**                                                                                                                                                                   |
| Payback CAC                         | **~2,8 meses**                                                                                                                                                              |
| Tests backend (verificado mayo 2026) | **399** (`vendor/bin/phpunit` en ZonixPharma-Backend)                                                                                                                       |



| Mercado                                              | Valor                                                  |
| ---------------------------------------------------- | ------------------------------------------------------ |
| TAM Venezuela (mercado farmacéutico 2025)            | **USD 1.638M/año** (389M unidades × USD 4,21 promedio) |
| Crecimiento mercado VE 2025                          | +17,49% en unidades                                    |
| CAGR proyectado 2026-2032                            | 6,1% anual                                             |
| Genéricos Rx                                         | 48,3% del mercado total                                |
| TAM Valencia metro                                   | 226 farmacias                                          |
| TAM Carabobo (toda la región)                        | ~350-450 farmacias                                     |
| SAM zona piloto inicial (Bella Florida + El Socorro) | 30-50 farmacias                                        |
| SAM zona piloto extendida (Valencia metro mes 4-9)   | 150-180 farmacias                                      |


---

## Decisiones del usuario aplicadas en todo el pack

1. **Modelo de ingresos:** **híbrido** — cuota fija **USD 25 / 40 / 55** + **% sobre GMV** por bandas ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5); **un nivel y una factura por RIF**, GMV agregado de sucursales en piloto; dashboard por sucursal.
2. **Alcance del piloto:** **flujos core completos desde Day-D** (Buyer + Pharmacy + Pharmacist + **`delivery_company`** + **`delivery_agent`**): OTC, Rx, pago manual VE, partner delivery. **No** rol `delivery` (autónomo). **No** incluye en pitch: lotes FIFO operativos ni app en tiendas hasta hitos Fase 0 — [INCOHERENCIAS_LANZAMIENTO_2026-05.md](INCOHERENCIAS_LANZAMIENTO_2026-05.md). **Última milla:** Zonix **no opera flota propia**; concesión/contrato marco — [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) cabecera y §A.
3. **Equipo:**
  - Founder (CEO + CTO en una sola persona, el usuario) + **Co-CEO / CEO operativo** (segundo al mando; comercial / operación / corporate) **USD 1.000/mes** — **rótulo operativo**; representante legal / junta y SAFE según [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).
  - Sin Pharmacist liaison interno: cada farmacia afiliada aporta su propio farmacéutico colegiado (marco VE — Ley del Ejercicio de la Farmacia; operación comercial sujeta a dictamen **abogado + farmacéutico asesor** antes de Day-D).
  - Sin Diseñador UI/UX: el founder cubre tech.
  - **4× Sales B2B** con USD **120** fijo c/u + USD **30** por farmacia firmada (**al rep que la firmó**; no duplicado entre reps); si la curva de firmas lo permite, valorar **2×** Sales como escenario de ahorro (recalcular CAC y PROYECCION).
  - **Replante operativo** (integrado en **Lean 101k** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2): sueldo founder **USD 1.000/mes**; **Co-CEO** **USD 1.000/mes**; Customer Support + Community Manager **350** (+50 si KPI → 400); Marketing Lead + apoyo a dirección **400** (+100 bonus si KPI); **Coordinador de Partners Logísticos** **300** (+100 si KPI → 400).
  - Asesor regulatorio farmacéutico **USD 120/mes** en escenarios **Base (118k)** y **Growth (135k)** — no en Lean.
  - **HQ — 4 PCs fijos:** recepción/cobros; admin+llamadas; dev potente; **PC 4** puesto flexible (Sales/Marketing en sede o backup de picos). **4× Sales** en campo con tablet/laptop. CapEx referencia **~2.950–4.450 USD** (cotización local — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §6.1). **Sin compra de vehículo** en presupuesto.
  - **Stack IA:** Cursor **Ultra (200)** + Claude **Max (200)** + **Seedance 2.0** (~**25**/mes ancla hasta cotizar plan); sin Gemini, Runway ni Midjourney en stack acordado.
4. **Inmueble:** Bella Florida o San Diego. **Lean/Base/Growth:** HQ tipo **casa USD 500/mes** ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2). Valla pequeña (Lean), mediana (Base/Growth).
5. **Awareness:** **Meta Ads** canal principal. **Lean:** **USD 800/mes** M1–6 · **500** M7–12. **Base/Growth:** **800/mes** todo el año. Valla: pequeña 3m×2m (Lean, M3+); mediana 6m×4m (Base/Growth, M2+).
6. **Día D del piloto:** T+90 desde cierre de inversión (calendario relativo, no absoluto, porque la fecha de cierre aún no está confirmada).
7. **Instrumento de inversión:** SAFE post-money con cap por escenario (**USD 600k / 650k / 720k** — Lean / Base / Growth).
8. **Benchmark de competencia para el pitch:** Farmatodo / Locatel + Farmalisto + Rappi/PedidosYa Pharmacy.
9. **Comercial farmacia B2B (mayo 2026):** tier **solo por GMV** (sin topes por órdenes/SKU); **contrato marco anual** + cuota mensual; ascenso de tarifa desde **M+2** (en **M** y **M+1** sigue tarifa del nivel anterior); reclamos GMV **3 días hábiles**; salida sin penalidad en los **2 primeros meses**; prod en **VPS Nameshared** — [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5 y §9.
10. **OTP paciente:** **Firebase Phone Auth (SMS)** — proxy **USD 30/mes** en burn Lean §2.3.
11. **Logística en app:** solo **`delivery_company`** + **`delivery_agent`** — [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) cabecera.
12. **Tiers capital (mayo 2026):** **Lean 101k** (mínimo) · **Base 118k** (recomendado) · **Growth 135k** (acelerado) — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1.

## Documentos pre-existentes del repositorio que el pack referencia (no duplica)

- [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md) — marco farmacéutico VE; [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §10 — Sudeban/pagos piloto.
- `[../PLAN_REGULATORIO_PHARMA_VE.md](../PLAN_REGULATORIO_PHARMA_VE.md)` — regulación específica del vertical farmacéutico.
- `[../PLAN_RX_VALIDATION.md](../PLAN_RX_VALIDATION.md)` — flujo de validación de receta médica.
- `[../BRAND_ZONIX_PHARMA.md](../BRAND_ZONIX_PHARMA.md)` — paleta, tipografía, do/don't.
- `[../logica-pagos-por-rol.md](../logica-pagos-por-rol.md)` — lógica de pagos manuales VE.
- `[../FLUJO_PAGO_ORDEN.md](../FLUJO_PAGO_ORDEN.md)` — flujo de pago de orden.
- `[../MIGRACION_EATS_PHARMA.md](../MIGRACION_EATS_PHARMA.md)` — qué cambió en la migración Eats → Pharma.

---

## Pendientes humanos para completar el pack

Estos no se inventan. El pack los marca explícitamente con `[PENDIENTE]`. **Índice maestro de cierre:** [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md). **Plantilla detallada:** [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md).

1. **Founder (mayo 2026 — parcial):** datos de **Abrahan Pulido** volcados en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1 (CV + LinkedIn). Siguen abiertos y son **bloqueantes para reunión institucional** (fondos / family office): **URL GitHub** o acceso repo bajo NDA, **declaración explícita de % dedicación** Zonix Pharma vs. CETIAC/otros, 2–3 referencias, métricas de tracción por producto (opcional).
2. Nombres reales del Sales B2B, Customer Support, Marketing Lead, **Coordinador de Partners Logísticos**.
3. Cotización formal de **HQ casa** (San Diego / Av. Bolívar Norte, Valencia): alquiler objetivo **USD 500/mes** — validar contrato real (±10–15% vs. guía).
4. Cotización formal de la valla con un proveedor específico (rango USD 350-700; contrato real puede variar 20%).
5. Lista real de 5-8 farmacias prospecto identificadas (visitas hechas, contactos confirmados).
6. Datos del primer inversor candidato (nombre, ticket esperado, ángel o fondo).
7. Fecha real de cierre de inversión (para activar T+30 / T+60 / T+90 absolutos).
8. Nombre y cotización formal del abogado y contador venezolanos contratados.

---


## Notas de uso

- Todos los precios VE en USD pueden subir mensualmente por inflación. **Macro 2026:** el **BCV (mayo 2026)** proyecta **desaceleración** (inflación mensual de **un dígito desde mayo 2026**). Los escenarios externos **387-618%** (Anova/Cendas/Ecoanalítica) se conservan como **estrés/adversos**. El pack documenta cada cifra con fecha de captura **mayo 2026** y advierte **reconfirmación trimestral** antes de decisiones de inversión o gasto.
- El buffer de 20% absorbe variaciones de hasta ±25% en precios denominados en bolívares.
- Si la devaluación supera 100% en un trimestre, hay un plan de contingencia documentado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).
- **Cierre editorial pack:** **25 mayo 2026** (limpieza pack para uso humano; puntero finanzas en PERFIL, VOLCADO/phpunit **399**). Priorizar siempre la cabecera `Última actualización` del propio archivo.

**Pack revisado por:** [PENDIENTE — el founder debe leer y aprobar antes de presentar al inversor].
