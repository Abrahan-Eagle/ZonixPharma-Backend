# Pack Lanzamiento Inversor — Zonix Pharma

> **Última actualización:** 11 mayo 2026.
> **Estado del pack:** completo para pre-seed; textos legales y plazos de retención sujetos a **dictamen abogado + farmacéutico asesor** antes de Day-D público.
> **Producto:** Zonix Pharma — marketplace farmacéutico digital; el pack usa **solo** esa marca para producto y plataforma.
> **Zona piloto:** Bella Florida + El Socorro, Valencia, Carabobo, Venezuela.
> **Capital pedido (Base):** **USD 101.000** para 12 meses — SAFE post-money cap **USD 600.000** (ticket **+6k** vs. **95k** histórico: incorpora **Co-CEO USD 1.000/mes** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3).

Este directorio contiene un **data room ligero** con **21 archivos** `.md` en total: **[README.md](README.md)** (índice), **[ANALISIS_FORENSE.md](ANALISIS_FORENSE.md)** (auditoría multi-rol del pack) y **19 documentos** de contenido (brief, finanzas, legal, operación, propuestas de valor, etc.) para presentar Zonix Pharma a un inversionista. Está diseñado para leerse de forma navegable: el `BRIEF` resume todo en una página, y los demás archivos profundizan cada decisión, número y supuesto. Cada cifra está cruzada entre documentos y trazada a fuentes web reales (mayo 2026) cuando aplica.

---

## Orden de lectura recomendado (para un inversionista con 30 minutos)

1. [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) — el resumen ejecutivo. Léase primero.
2. [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) — diferenciación, decisiones clave, parámetros del pitch.
3. [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) — TAM/SAM/SOM, demografía, benchmarks Farmatodo / Locatel / Farmalisto / Rappi.
4. [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) — CAC, LTV, payback, break-even.
5. [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) — 3 escenarios mes a mes + año 2-3 + plan de exit.
6. [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) — SAFE, cap table, vehículo legal VE.
7. [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) — guion de reunión + FAQ.

## Orden de lectura para el equipo interno (90 minutos)

Lo anterior + los siguientes:

1. [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) — fases T+30 / T+60 / T+90 + Day-D + Definition of Done del piloto.
2. [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) — pitch a la farmacia.
3. [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) — pitch al paciente.
4. [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) — pitch a delivery (complemento), delivery company / **concesión última milla** y farmacéutico colegiado.
5. [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) — escenarios Lean / Base / Growth.
6. [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md) — fuentes y precios públicos.
7. [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) — vallas, radio, flyers.
8. [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) — pago móvil, transferencia, Zelle, Binance Pay.
9. [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) — validación Rx, farmacovigilancia §11, seguridad §14, playbook incidencias §16, amenazas §17, QA piloto §18.
10. [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md) — preguntas para el equipo.
11. [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) — plantilla de captura.
12. [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) — texto de WhatsApp/email + bullets pitch.
13. [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md) — auditoría multi-perspectiva del pack: **6 perspectivas narrativas**, mapa ejecutivo §11.1 / §11.1 bis y **síntesis multi-rol §11.4** (tabla por rol ejecutivo + verificación técnica).

---

## Cifras clave del pack (ancla numérica común a todos los documentos)


| Concepto                          | Lean        | **Base (recomendado)** | Growth      |
| --------------------------------- | ----------- | ---------------------- | ----------- |
| Capital pedido                    | USD 60.000  | **USD 101.000**        | USD 90.000  |
| Runway                            | 12 meses    | 12 meses               | 12 meses    |
| SAFE post-money cap               | USD 450.000 | **USD 600.000**        | USD 650.000 |
| Burn promedio mensual             | USD 3.636   | **~USD 7.559**         | **~USD 5.611** |
| One-shots mes 1                   | USD 5.058   | **~USD 9.808**         | **~USD 10.708** |
| Buffer (inflación VE)             | 20%         | 20%                    | **25%** (Growth) |
| Equilibrio mensual (revenue ≥ burn) | Mes 9-10 (orden magnitud Lean) | **Post-M12** salvo mitigaciones ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.4) | Ver nota Growth §4.1 [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) |
| Farmacias activas ref. equilibrio | **~81**     | **~151** (ARPF ~50: **~149** tramo C burn **7.431**; **~151** burn promedio **~7.559**) | **~125** sin Co-CEO+IA en burn §4.3; **~162** si se alinean líneas Base §3.3 — refinar con FP&A antes de due diligence |

> **Nota Growth &lt; Base (capital pedido):** el escenario **Growth (USD 90k)** predató el replante operativo **Co-CEO + stack IA** del **Base (USD 101k)**. Growth **no** incluye en su burn §4.3 las líneas **Co-CEO USD 1.000/mes** ni **IA ~USD 425/mes** del Base §3.3 — por eso el burn promedio **~5.611** es menor. Para comparación estricta entre los tres escenarios, unificar Growth con las líneas Base §3.3 en FP&A antes de due diligence profundo (ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §4.1).

> **Nota orden de magnitud (farmacias para cubrir burn):** **Lean ~81** (**3.636** burn promedio ÷ **ARPF 45** ancla Lean), **Base ~151** (**~149** con burn tramo C **7.431**; **~151** con **~7.559** ÷ **~50**), **Growth ~125** con burn §4.3 tal cual (**~5.611** ÷ 45) o **~162** si se suman **Co-CEO + IA** como en Base §3.3. Ajustar cuando haya GMV real por tier.

> **Nota Lean / Growth:** solo **Base** tiene tabla §1.1 mes a mes en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). **Growth:** one-shots alineados a Base §3.2; burn §4.3 del presupuesto puede **no** reflejar aún todo el replante salarial/IA de Base — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §4.1.



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

1. **Modelo de ingresos:** **híbrido** — cuota fija **USD 25 / 40 / 55** (+**USD 5**/tier vs. ancla histórica 20/35/50) + **% sobre GMV** por bandas ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5); **un nivel y una factura por RIF**, GMV agregado de sucursales en piloto; dashboard por sucursal.
2. **Alcance del piloto:** completo desde día 1 (Buyer + Pharmacy + Pharmacist + Delivery autónomo + Delivery Company). Confirmado por el usuario. **Última milla:** Zonix Pharma **no opera flota propia**; la ejecución física del reparto se delega por **concesión o contrato marco** a **empresa(s) de delivery especializada(s)**; roles `delivery` / `delivery_company` en la app reflejan ese ecosistema (autónomo puede ser complemento en piloto — ver [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) cabecera y §B).
3. **Equipo:**
  - Founder (CEO + CTO en una sola persona, el usuario) + **Co-CEO / CEO operativo** (segundo al mando; comercial / operación / corporate) **USD 1.000/mes** — **rótulo operativo**; representante legal / junta y SAFE según [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).
  - Sin Pharmacist liaison interno: cada farmacia afiliada aporta su propio farmacéutico colegiado (Ley del Ejercicio de la Farmacia VE).
  - Sin Diseñador UI/UX: el founder cubre tech.
  - **4× Sales B2B** con USD **120** fijo c/u + USD **30** por farmacia firmada (**al rep que la firmó**; no duplicado entre reps); si la curva de firmas lo permite, valorar **2×** Sales como escenario de ahorro (recalcular CAC y PROYECCION).
  - **Replante operativo** (integrado en Base **101k** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3 y §6.1): sueldo founder **USD 1.000/mes**; **Co-CEO** **USD 1.000/mes**; Customer Support + Community Manager **350** (+50 si KPI → 400); Marketing Lead + apoyo a dirección **400** (+100 bonus si KPI); **Delivery Ops** **300** (+100 si KPI → 400) — **coordinación con empresa(s) concesionaria(s) de última milla**, no operación de flota propia.
  - Contador externo USD 130/mes + Abogado externo USD 200/mes.
  - Asesor regulatorio farmacéutico USD 120/mes solo en escenario Growth.
  - **HQ — 4 PCs fijos:** recepción/cobros; admin+llamadas; dev potente; **PC 4** puesto flexible (Sales/Marketing en sede o backup de picos). **4× Sales** en campo con tablet/laptop. CapEx referencia **~2.950–4.450 USD** (cotización local — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §6.1). **Sin compra de vehículo** en presupuesto.
  - **Stack IA:** Cursor **Ultra (200)** + Claude **Max (200)** + **Seedance 2.0** (~**25**/mes ancla hasta cotizar plan); sin Gemini, Runway ni Midjourney en stack acordado.
4. **Inmueble:** Bella Florida o San Diego. Coworking USD 100/mes en Lean. **Base:** HQ tipo **casa USD 500/mes** en burn ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3). Growth mantiene línea oficina **USD 280** en su escenario hasta unificar FP&A.
5. **Awareness:** **Meta Ads (Instagram/Facebook)** como canal principal desde mes 1 operativo — **USD 800/mes** meses 1–6 y **USD 500/mes** meses 7–12 en Base (promedio ~USD 650/mes). **Valla publicitaria:** NO en Lean; pequeña 3m×2m USD 350/mes en Base (**refuerzo offline**, desde mes 3). Mediana 6m×4m USD 700/mes en Growth.
6. **Día D del piloto:** T+90 desde cierre de inversión (calendario relativo, no absoluto, porque la fecha de cierre aún no está confirmada).
7. **Instrumento de inversión:** SAFE post-money con cap variable por escenario (**USD 450k / 600k / 650k** — Lean / Base / Growth).
8. **Benchmark de competencia para el pitch:** Farmatodo / Locatel + Farmalisto + Rappi/PedidosYa Pharmacy.

## Documentos pre-existentes del repositorio que el pack referencia (no duplica)

- `[../REQUISITOS_OPERAR_VENEZUELA.md](../REQUISITOS_OPERAR_VENEZUELA.md)` — marco regulatorio VE.
- `[../PLAN_REGULATORIO_PHARMA_VE.md](../PLAN_REGULATORIO_PHARMA_VE.md)` — regulación específica del vertical farmacéutico.
- `[../PLAN_RX_VALIDATION.md](../PLAN_RX_VALIDATION.md)` — flujo de validación de receta médica.
- `[../BRAND_ZONIX_PHARMA.md](../BRAND_ZONIX_PHARMA.md)` — paleta, tipografía, do/don't.
- `[../logica-pagos-por-rol.md](../logica-pagos-por-rol.md)` — lógica de pagos manuales VE.
- `[../FLUJO_PAGO_ORDEN.md](../FLUJO_PAGO_ORDEN.md)` — flujo de pago de orden.
- `[../MIGRACION_EATS_PHARMA.md](../MIGRACION_EATS_PHARMA.md)` — qué cambió en la migración Eats → Pharma.

---

## Pendientes humanos para completar el pack

Estos no se inventan. El pack los marca explícitamente con `[PENDIENTE]`. El [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) es la plantilla para llenarlos.

1. **Founder (mayo 2026 — parcial):** datos de **Abrahan Pulido** volcados en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1 (CV + LinkedIn). Siguen abiertos y son **bloqueantes para reunión institucional** (fondos / family office): **URL GitHub** o acceso repo bajo NDA, **declaración explícita de % dedicación** Zonix Pharma vs. CETIAC/otros, 2–3 referencias, métricas de tracción por producto (opcional).
2. Nombres reales del Sales B2B, Customer Support, Marketing Lead, Delivery Ops.
3. Cotización formal del coworking u oficina elegida en Bella Florida o San Diego (la guía da el rango USD 100-280; el contrato real puede variar 10-15%).
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
- **Cierre editorial pack:** **10 mayo 2026** en cabeceras de los documentos del directorio `docs/Lanzamiento/` alineados a esta revisión; si algún archivo heredara otra fecha en un párrafo puntual, priorizar la cabecera `Última actualización` del propio archivo.

**Pack generado por:** Jarvis (asistente IA) bajo dirección del usuario, en sesión interactiva.
**Pack revisado por:** [PENDIENTE — el usuario debe leer y aprobar antes de presentar al inversor].