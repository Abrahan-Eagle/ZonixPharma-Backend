# Contexto del pitch y decisiones tomadas

> **Última actualización:** 10 mayo 2026.
> Documento que captura las decisiones del founder (usuario) sobre cómo se posiciona Zonix Pharma frente a un inversor, qué se dice, qué no, y por qué se eligió cada parámetro del modelo.

## 1. Tecnología base reutilizada (Zonix Pharma)

**Zonix Pharma** es la **verticalización del stack propio** (Laravel + Flutter + MySQL) con **~4 años** de iteración —incluida etapa previa de **delivery B2C** sobre el mismo núcleo— ahora orientada a **farmacia**. Esto importa porque significa:

- **Tecnología validada:** los 397 tests del backend ya cubren onboarding, órdenes, métodos de pago manuales VE, KYC, chat real-time, FCM, eventos broadcast. **No estamos empezando desde cero.**
- **Equipo técnico ya entrenado:** el founder conoce el stack al detalle.
- **Riesgo de ejecución reducido:** lo único que se construye desde cero es la capa farmacéutica (Rx, lotes FIFO, cadena de frío, pharmacist colegiado), y eso ya está parcialmente implementado y documentado en [`../PLAN_RX_VALIDATION.md`](../PLAN_RX_VALIDATION.md) y [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md).

**Mensaje para el inversor:** "compramos cuatro años de desarrollo con **USD 101.000**" (runway Base 12 meses + colchón cierre año 1 — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3; incluye **Co-CEO**).

## 2. Decisiones tomadas y por qué

### 2.1 Modelo de ingresos: híbrido cuota fija + fee sobre GMV (USD)

**Decisión:** Cobro **B2B en dos partes:** (1) **cuota fija mensual** por nivel (Basic **USD 20** / Pro **USD 35** / Enterprise **USD 50**); (2) **porcentaje moderado sobre GMV** generado en la app por mes calendario (**0,60% / 0,80% / 1,00%** según banda). Bandas de GMV, ascenso/descenso, RIF agregado, primer mes parcial, piloto y reclamos: [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5 y [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §2.3–§4.2.

**Por qué:**
- **Predecible vs. agregadores:** los % de **Zonix Pharma** están en fracciones de punto a ~1%, no en el rango 25-35% de Rappi/PedidosYa; la cuota fija da piso de ingreso.
- **Alineación:** el fee variable crece con el volumen que la farmacia mueve en **Zonix Pharma**; la política de **dos meses consecutivos** para cambiar de nivel reduce saltos por un mes atípico.
- **Cadena:** **un nivel y una factura por RIF** en piloto; GMV **sumado** de todas las sucursales en la app; dashboard desglosado por sucursal.

**Riesgo:** sensibilidad al churn si el ticket total se percibe alto. Mitigaciones: % bajo vs competencia, comunicación clara de nivel (§5.4), waiver en prueba, tope/cap comercial opcional en roadmap si el mercado lo exige.

**Nota:** el modelo de lanzamiento es el **híbrido** (§2.1). Las proyecciones usan **ARPF placeholder** hasta datos de piloto.

### 2.2 Alcance del piloto: completo desde día 1

**Decisión:** los **cinco roles** del marketplace (Buyer + Pharmacy + Pharmacist + Delivery autónomo + Delivery Company) operativos desde Day-D — **ecosistema completo** desde Day-D.

**Por qué:**
- La tecnología ya está construida. Reducir el alcance no acelera el lanzamiento, solo limita el aprendizaje.
- Si solo abrimos Buyer + Pharmacy, no validamos el flujo Rx (que es el diferenciador clave).
- Si no abrimos Delivery Company, no validamos el caso multi-repartidor que Farmatodo no tiene resuelto digitalmente.

**Trade-off:** la complejidad operativa de día 1 es alta. Mitigación: con sólo 5-10 farmacias en mes 1 y 50-100 órdenes diarias, el founder + Customer Support pueden monitorear todos los flujos en vivo.

### 2.3 Capital pedido: USD 101.000 (escenario Base)

**Decisión:** **USD 101.000** para 12 meses con buffer 20%, **one-shots mes 1 ~USD 10.408** (CapEx 4 PCs + depósito/amueblado HQ — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.2) + **Co-CEO USD 1.000/mes** modelado en burn ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3).

**Awareness y adquisición (orden de prioridad):**
- **Canal principal:** **publicidad paga en Meta** (Instagram + Facebook) desde **mes 1** operativo (post-cierre), geo Carabobo/Valencia, creativos alineados a marca y **segmentación B2C + apoyo B2B** según campaña. Intensidad acordada para año 1: **USD 800/mes en meses 1–6** y **USD 500/mes en meses 7–12** (promedio **~USD 650/mes** en digital — ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md)).
- **Segunda línea / combinación:** **valla publicitaria** como **refuerzo offline** de notoriedad (Base: valla pequeña desde mes 3; Growth: valla mayor + más presupuesto). El paciente y la farmacia **conocen primero el mensaje en feed/stories y remarketing**; la valla **no sustituye** al digital.

**Equipo comercial:** **2 ejecutivos Sales B2B** desde el inicio (USD **120** fijo c/u + USD **30** por farmacia firmada). Sumar **1 o 2 vendedores más** (hasta 4) solo si hay **evidencia** (territorio partido, cola de demos, meta de firmas mayor); **no** se presupuestan en el modelo base hasta esa decisión.

**Por qué se eligió Base sobre Lean (USD 60k) y Growth (USD 90k):**
- **Lean (USD 60k):** sin valla, sin Delivery Ops mes 1, coworking; digital más bajo. Funcional pero menor holgura comercial.
- **Base (USD 101k):** **digital Meta priorizado** + valla pequeña desde mes 3 + Delivery Ops desde mes 1 + **2 Sales B2B** + **HQ casa** + **sueldo founder** + **Co-CEO** + **stack IA**. Trade-off: burn recurrente mayor que el modelo **USD 95k** previo al replante Co-CEO (ticket actual **101k** absorbe ~12k/año del segundo al mando); **equilibrio mensual** (revenue ≥ burn) con ARPF 45 queda **post-M12** salvo mitigaciones (ver [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.4).
- **Growth (USD 90k):** valla mediana + asesor regulatorio + más margen digital / founder pay.

Base es el balance entre agresividad en **Meta + ventas dobles** + **Co-CEO** y capital **USD 101k** (reserva de imprevistos en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.4).

### 2.4 Instrumento: SAFE post-money con cap

**Decisión:** SAFE post-money cap **USD 600.000** (escenario Base).

**Por qué:**
- **Simple:** un documento de 5 páginas. No requiere abogado en NY ni fondo institucional.
- **Sin valuación:** Zonix Pharma no tiene revenue todavía; valorarla hoy sería arbitrario y se haría daño al founder o al inversor según hacia dónde se equivoque.
- **Sin deuda:** el founder no se endeuda con el inversor.
- **Convierte en la próxima ronda:** cuando llegue una serie A/B con valuación de mercado, el SAFE convierte automáticamente.
- **Estándar internacional:** Y Combinator publica el template gratis ([fuente](https://www.ycombinator.com/documents)).

Detalle de mecánica del SAFE en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).

### 2.5 Zona piloto: Bella Florida + El Socorro (Valencia, Carabobo)

**Decisión:** los primeros 90 días el foco operativo está en estos dos sectores.

**Por qué:**
- **Densidad farmacéutica:** Valencia metro tiene 226 farmacias ([Saas](https://www.saasvenezuela.com/)). El piloto usa **dos focos** en el área metropolitana — **Bella Florida** (sur-oeste Valencia) y **El Socorro** (corredor **vía Tocuyito**, referencia de campo: frente a **Ferretería Valcro**, antes de **Distribuidor San Luis** y **mercado mayorista**) — con **~30-50** puntos de farmacia en conjunto según estimación del [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) §2 y §6 (validar con listado real; **no** asumir un solo “radio 4 km” si los polos quedan separados).
- **Logística manejable:** un Delivery Ops Coordinator puede coordinar entregas en **polos acotados** con 10-15 repartidores (radio operativo por polo según mapa real).
- **Cliente final accesible:** clase media + media-alta con smartphone y data, dispuesta a pagar delivery.
- **Founder vive en Carabobo:** decisiones operativas en horas, no en días.

Después del mes 3 se abre a Naguanagua, San Diego y resto de Valencia metro (SAM extendido 150-180 farmacias).

### 2.6 Día D del piloto: T+90 desde cierre de inversión

**Decisión:** calendario relativo. Cuando entre el dinero, contamos 90 días al Day-D.

**Por qué:**
- El founder no quiere comprometerse a una fecha absoluta antes de tener inversor confirmado.
- 90 días es realista para: constitución legal C.A. (~30 días con SENIAT, RIF, registro mercantil), contratación del equipo, onboarding de 5-10 farmacias, capacitación operativa.
- Es honesto: muchos founders inflan timelines y luego se queman.

Detalle de fases T+30 / T+60 / T+90 en [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md).

### 2.7 Equipo: lean, sin pharmacist liaison interno

**Decisión:** el founder cubre CEO + CTO. No se contrata pharmacist liaison interno. No se contrata diseñador UI/UX.

**Por qué pharmacist liaison no:**
- La **Ley del Ejercicio de la Farmacia VE** obliga a que cada farmacia tenga su propio farmacéutico colegiado registrado en MPPS. Si **Zonix Pharma** contrata uno, ese farmacéutico no puede validar recetas de farmacias afiliadas (no es responsable de su inventario).
- El backend ya tiene módulo de Pharmacist con KYC, dashboard y validación. Cada farmacia afiliada accede al rol Pharmacist de su propio farmacéutico colegiado. Detalle en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md).
- Mitigación de riesgo regulatorio: KYC del pharmacist + verificación de inscripción MPPS + capacitación sobre **Zonix Pharma** + manual operativo. Asesor regulatorio externo USD 120/mes solo en escenario Growth.

**Por qué diseñador UI/UX no:**
- El founder es el responsable técnico y conoce el stack Flutter completo.
- Hay docs de marca canónicos: [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md). Tokens, paleta, tipografía ya definidos.
- Si el negocio crece, el primer hire post-PMF es un Product Designer.

### 2.8 Benchmark de competencia: Farmatodo + Farmalisto + Rappi

**Decisión:** mencionar los tres en el pitch.

**Por qué cada uno:**
- **Farmatodo / Locatel** (cadenas premium VE): no son competencia directa, son referencia para que el inversor entienda que el sector farmacéutico VE existe y es grande. Ellas NO atacan el segmento de farmacias medianas e independientes.
- **Farmalisto** (MX + CO + PE): comparable directo internacional. **~USD 32M revenue 2024 (MX)**; funding total **~USD 22M** reportado en agregadores (**hasta ~USD 33M** en PitchBook). Demuestra que el modelo marketplace farmacéutico LatAm es financiable.
- **Rappi / PedidosYa Pharmacy:** ataque al segmento alto. Cobran 25-35% comisión. Zonix Pharma se diferencia en **estructura de costo** (cuota fija + % muy bajo sobre GMV en app vs comisión plena de agregador) y en **validación Rx** (que ellos no hacen).

Detalle competitivo en [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md).

## 3. Lo que NO se dice en el pitch (porque puede confundir)

- No se promete monetización por publicidad de laboratorios. Es un upside futuro, no parte del modelo base.
- No se promete expansión a Colombia o México en año 1. Es upside, no commitment.
- No se promete integración con seguros médicos / IVSS. Es un módulo que requiere convenios de 12-18 meses.
- No se promete teleconsulta médica. Es un vertical adyacente, no MVP.

## 4. Glosario rápido (para el founder, no para el inversor)

| Término | Significado simple | Aplicado a Zonix Pharma |
|---|---|---|
| **GMV** | Gross Merchandise Value: total por transacción completada en la app en el mes (definición operativa §5.5 B2B). | Si las farmacias venden USD 200k/mes a través de la app, GMV = USD 200k. **Zonix Pharma** cobra **cuota fija + fee %** sobre ese GMV según nivel; la farmacia se queda con el neto de venta según su operación. |
| **CAC** | Costo de adquirir un cliente. | Cuánto gasta **Zonix Pharma** en marketing + **2×** Sales para firmar UNA farmacia. **USD 109** (ver [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §3). |
| **LTV** | Lifetime Value: cuánto paga ese cliente en toda su vida con nosotros. | Una farmacia en promedio paga USD 45/mes durante 20 meses = USD 900 *(ARPF placeholder; recalibrar con híbrido + GMV en piloto).* |
| **LTV/CAC** | Eficiencia del negocio. | **~8,3x** (con CAC **109** y ARPF placeholder **45**). > 3x ya es bueno; > 5x es excelente. |
| **Churn** | Porcentaje de clientes que se van cada mes. | 5%. Si tengo 100 farmacias, mes que viene tendré 95 (sin contar nuevas). |
| **Burn rate** | Cuánto pierdo cada mes mientras no soy rentable. | **~USD 7.499**/mes promedio (tramos **7.402 / 7.738 / 7.371** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.3). |
| **Runway** | Cuántos meses puedo aguantar con el dinero que tengo. | 12 meses con **USD 101k** + buffer + one-shots mes 1 modelados. |
| **Break-even** | Mes en que empiezo a no perder dinero. | **Post-M12** con ARPF 45 y burn replanteado; **~167** farmacias activas orden de magnitud (§1.4 [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)). |
| **SAFE** | Contrato simple de inversión. El inversor da dinero hoy, recibe equity en la próxima ronda. | **USD 101k** con cap **USD 600k**. |
| **Cap** | Valuación máxima a la que el SAFE convierte. | Si la próxima ronda valora **Zonix Pharma** en USD 800k, el inversor convierte como si fuera **USD 600k** (Base) — recibe más equity que a valuación plena. |
| **TAM / SAM / SOM** | Mercado total / accesible / capturable. | TAM Venezuela USD 1.638M. SOM realista **año 1: ~USD 26k revenue** (sin waiver) / **año 2 conservador: USD 96-108k** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 y §2.3). |
| **ARPF** | Average Revenue Per Farmacia. | USD 45/mes **placeholder** hasta GMV piloto; cobro vigente = híbrido (§2.1). |
| **Payback** | Meses para recuperar el CAC. | **~2,4 meses** (CAC/ARPF al placeholder). Recalibrar con ARPF híbrido real. |

## 5. Decisiones que el founder se reserva (no están en el pack)

- Distribución de equity entre founders si el founder decide entrar uno técnico secundario en el año 2.
- Política de bonus por revenue para Sales B2B después del mes 6.
- Política de comisión adicional a Customer Support si responde > 95% de tickets en 24h.
- Política de stock options post-Serie A.

Estas se documentarán en un anexo cuando lleguen al frente. Hoy no son bloqueantes.

## 6. Tono del pitch

- **Honesto sobre lo que no se ha hecho:** "no tenemos ventas todavía, tenemos producto operativo y plan validado".
- **Confiado sobre lo que sí está hecho:** "397 tests pasando, ~4 años de desarrollo del **stack Zonix Pharma**".
- **Específico con números:** nunca decir "esperamos crecer mucho"; decir **~107 farmacias activas hacia el mes 11**, **~120** hacia M12, **~USD 27k** cash cierre año 1 (Base **101k** + **Co-CEO**), y que el **equilibrio mensual** con ARPF placeholder queda **post-M12** salvo mitigaciones ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3–1.4).
- **Realista sobre Venezuela:** mencionar la inflación de entrada, no esconder la complejidad regulatoria.
- **Modular:** si el inversor pide ticket más chico (USD 25k), tenemos respuesta para Lean. Si pide ticket más grande (USD 90k), tenemos Growth.

## 7. Próximos pasos antes de la primera reunión con un inversor

1. Completar los `[PENDIENTE]` restantes de [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) (§1 founder mayormente listo en mayo 2026; §2 inversor, §3–9 operativos siguen).
2. Visitar 5-8 farmacias de Bella Florida y El Socorro y volver con sus nombres y datos de contacto.
3. Tener cotización formal del coworking u oficina elegida.
4. Tener cotización formal de la valla.
5. Cotizar abogado venezolano para preparar el SAFE local.
6. Repasar el [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).
