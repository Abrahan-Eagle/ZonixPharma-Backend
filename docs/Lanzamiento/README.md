# Pack Lanzamiento Inversor — Zonix Pharma

> **Última actualización:** 5 mayo 2026 (revisión profesional multi-rol: regulación, farmacia, AppSec, COO, marketing salud, legal, CFO).
> **Estado del pack:** completo para pre-seed; textos legales y plazos de retención sujetos a **dictamen abogado + farmacéutico asesor** antes de Day-D público.
> **Producto:** Zonix Pharma — marketplace farmacéutico digital, vertical Pharma del ecosistema Zonix.
> **Zona piloto:** Bella Florida + El Socorro, Valencia, Carabobo, Venezuela.
> **Capital pedido (Base):** USD 75.000 para 12 meses — SAFE post-money cap USD 550.000.

Este directorio contiene un **data room ligero** estructurado en 20 documentos para presentar Zonix Pharma a un inversionista. Está diseñado para leerse de forma navegable: el `BRIEF` resume todo en una página, y los demás archivos profundizan cada decisión, número y supuesto. Cada cifra está cruzada entre documentos y trazada a fuentes web reales (mayo 2026) cuando aplica.

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

8. [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) — fases T+30 / T+60 / T+90 + Day-D + Definition of Done del piloto.
9. [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) — pitch a la farmacia.
10. [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) — pitch al paciente.
11. [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) — pitch a delivery, delivery company y farmacéutico colegiado.
12. [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) — escenarios Lean / Base / Growth.
13. [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md) — fuentes y precios públicos.
14. [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) — vallas, radio, flyers.
15. [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) — pago móvil, transferencia, Zelle, Binance Pay.
16. [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) — validación Rx, seguridad §13, playbook incidencias §15, amenazas §16, QA piloto §17.
17. [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md) — preguntas para el equipo.
18. [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) — plantilla de captura.
19. [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) — texto de WhatsApp/email + bullets pitch.
20. [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md) — auditoría multi-perspectiva del pack desde 6 roles.

---

## Cifras clave del pack (ancla numérica común a todos los documentos)

| Concepto | Lean | **Base (recomendado)** | Growth |
|---|---|---|---|
| Capital pedido | USD 60.000 | **USD 75.000** | USD 90.000 |
| Runway | 12 meses | 12 meses | 12 meses |
| SAFE post-money cap | USD 450.000 | USD 550.000 | USD 650.000 |
| Burn promedio mensual | USD 3.756 | USD 4.521 | USD 5.566 |
| One-shots mes 1 | USD 5.054 | USD 6.704 | USD 7.604 |
| Buffer (inflación VE) | 20% | 20% | 20% |
| Mes break-even | Mes 9-10 | Mes 11 | Mes 10 |
| Farmacias activas para break-even | 87 | 107 | 125 |

| Métrica unitaria | Valor |
|---|---|
| Tier membresía | Basic USD 25 / Pro USD 60 / Enterprise USD 120 (dinámico por GMV, multi-sucursal) |
| ARPF (Average Revenue Per Farmacia) | USD 45/mes (mix 60% Basic / 30% Pro / 10% Enterprise) |
| CAC | USD 94/farmacia |
| Churn mensual | 5% (mediana SMB SaaS LatAm) |
| Lifetime promedio | 20 meses |
| LTV | USD 900 |
| LTV/CAC | 9,6x |
| Payback CAC | 2,1 meses |

| Mercado | Valor |
|---|---|
| TAM Venezuela (mercado farmacéutico 2025) | **USD 1.638M/año** (389M unidades × USD 4,21 promedio) |
| Crecimiento mercado VE 2025 | +17,49% en unidades |
| CAGR proyectado 2026-2032 | 6,1% anual |
| Genéricos Rx | 48,3% del mercado total |
| TAM Valencia metro | 226 farmacias |
| TAM Carabobo (toda la región) | ~350-450 farmacias |
| SAM zona piloto inicial (Bella Florida + El Socorro) | 30-50 farmacias |
| SAM zona piloto extendida (Valencia metro mes 4-9) | 150-180 farmacias |

---

## Decisiones del usuario aplicadas en todo el pack

1. **Modelo de ingresos:** tier dinámico Basic USD 25 / Pro USD 60 / Enterprise USD 120, escalable según ingresos de la farmacia, con soporte multi-sucursal para cadenas. Confirmado por el usuario.
2. **Alcance del piloto:** completo desde día 1 (Buyer + Pharmacy + Pharmacist + Delivery autónomo + Delivery Company). Confirmado por el usuario.
3. **Equipo:**
   - Founder (CEO + CTO en una sola persona, el usuario).
   - Sin Pharmacist liaison interno: cada farmacia afiliada aporta su propio farmacéutico colegiado (Ley del Ejercicio de la Farmacia VE).
   - Sin Diseñador UI/UX: el founder cubre tech.
   - Sales B2B con USD 120 fijo + USD 30 por farmacia firmada (motivacional).
   - Customer Support USD 300/mes.
   - Marketing Lead + CEO interino delegado USD 500/mes.
   - Delivery Ops Coordinator USD 400/mes desde mes 2.
   - Contador externo USD 130/mes + Abogado externo USD 200/mes.
   - Asesor regulatorio farmacéutico USD 120/mes solo en escenario Growth.
4. **Inmueble:** Bella Florida o San Diego. Coworking USD 100/mes en Lean; oficina propia 34-38m² USD 280/mes en Base/Growth.
5. **Valla publicitaria:** NO en Lean. Pequeña 3m×2m USD 350/mes en Base. Mediana 6m×4m USD 700/mes en Growth.
6. **Día D del piloto:** T+90 desde cierre de inversión (calendario relativo, no absoluto, porque la fecha de cierre aún no está confirmada).
7. **Instrumento de inversión:** SAFE post-money con cap variable por escenario (USD 450k / 550k / 650k).
8. **Benchmark de competencia para el pitch:** Farmatodo / Locatel + Farmalisto + Rappi/PedidosYa Pharmacy.

## Documentos pre-existentes del repositorio que el pack referencia (no duplica)

- [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md) — marco regulatorio VE.
- [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md) — regulación específica del vertical farmacéutico.
- [`../PLAN_RX_VALIDATION.md`](../PLAN_RX_VALIDATION.md) — flujo de validación de receta médica.
- [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md) — paleta, tipografía, do/don't.
- [`../logica-pagos-por-rol.md`](../logica-pagos-por-rol.md) — lógica de pagos manuales VE.
- [`../FLUJO_PAGO_ORDEN.md`](../FLUJO_PAGO_ORDEN.md) — flujo de pago de orden.
- [`../MIGRACION_EATS_PHARMA.md`](../MIGRACION_EATS_PHARMA.md) — qué cambió en la migración Eats → Pharma.

---

## Pendientes humanos para completar el pack

Estos no se inventan. El pack los marca explícitamente con `[PENDIENTE]`. El [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) es la plantilla para llenarlos.

0. **Founder (mayo 2026 — parcial):** datos de **Abrahan Pulido** volcados en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1 (CV + LinkedIn). Siguen abiertos: GitHub o acceso repo bajo NDA, 2–3 referencias, declaración % dedicación Zonix Pharma vs. CETIAC/otros, métricas de tracción por producto (opcional).

1. Nombres reales del Sales B2B, Customer Support, Marketing Lead, Delivery Ops.
2. Cotización formal del coworking u oficina elegida en Bella Florida o San Diego (la guía da el rango USD 100-280; el contrato real puede variar 10-15%).
3. Cotización formal de la valla con un proveedor específico (rango USD 350-700; contrato real puede variar 20%).
4. Lista real de 5-8 farmacias prospecto identificadas (visitas hechas, contactos confirmados).
5. Datos del primer inversor candidato (nombre, ticket esperado, ángel o fondo).
6. Fecha real de cierre de inversión (para activar T+30 / T+60 / T+90 absolutos).
7. Nombre y cotización formal del abogado y contador venezolanos contratados.

---

## Notas de uso

- Todos los precios VE en USD pueden subir mensualmente por la inflación venezolana proyectada **387-618%** en 2026. El pack documenta cada cifra con fecha de captura **mayo 2026** y advierte que requieren **reconfirmación trimestral** antes de tomar decisiones de inversión o gasto.
- El buffer de 20% absorbe variaciones de hasta ±25% en precios denominados en bolívares.
- Si la devaluación supera 100% en un trimestre, hay un plan de contingencia documentado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).
- Los documentos tocados en la **revisión profesional 5 mayo 2026** llevan esa fecha en cabecera; el resto puede seguir en 4 mayo hasta el próximo cierre editorial.

**Pack generado por:** Jarvis (asistente IA) bajo dirección del usuario, en sesión interactiva.
**Pack revisado por:** [PENDIENTE — el usuario debe leer y aprobar antes de presentar al inversor].
