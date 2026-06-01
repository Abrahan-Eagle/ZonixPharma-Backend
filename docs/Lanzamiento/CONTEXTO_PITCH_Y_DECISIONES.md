# Contexto del pitch y decisiones tomadas

> **Última actualización:** 1 junio 2026.
> Documento que captura las decisiones del founder (usuario) sobre cómo se posiciona Zonix Pharma frente a un inversor, qué se dice, qué no, y por qué se eligió cada parámetro del modelo.

## 1. Tecnología base reutilizada (Zonix Pharma)

**Zonix Pharma** es la **verticalización del stack propio** (Laravel + Flutter + MySQL) con **~4 años** de iteración —incluida etapa previa de **delivery B2C** sobre el mismo núcleo— ahora orientada a **farmacia**. Esto importa porque significa:

- **Tecnología validada:** backend en **staging/VPS** con **399 tests** (onboarding, órdenes, pagos manuales VE, KYC, chat, FCM, broadcast). **Re-ejecutar y citar commit** en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1.2 pre-reunión ([REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) P0-06). **No estamos empezando desde cero.**
- **Equipo técnico ya entrenado:** el founder conoce el stack al detalle.
- **Riesgo de ejecución reducido:** la capa farmacéutica diferenciadora (Rx, cadena de frío, farmacéutico colegiado) está **operativa en flujo core** y documentada en [`../PLAN_RX_VALIDATION.md`](../PLAN_RX_VALIDATION.md) y [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md). **Inventario por lotes (`medicine_lots`) / despacho FIFO:** esquema de datos y referencias en repo; **UI y despacho FIFO en operación** quedan para **post-Day-D o M3+** — no prometer módulo de lotes en pitch hasta cerrarlo ([ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md)).

**Mensaje para el inversor:** "compramos **~4 años** de desarrollo del stack — hoy en **staging**, release tiendas **T+7–12** Fase 0 — con **USD 101.000** de runway **Lean** 12 meses post-Day-D + colchón cierre año 1" ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3; incluye **Co-CEO**).

## 2. Decisiones tomadas y por qué

### 2.1 Modelo de ingresos: híbrido cuota fija + fee sobre GMV (USD)

**Decisión:** Cobro **B2B en dos partes:** (1) **cuota fija mensual** por nivel (Basic **USD 25** / Pro **USD 40** / Enterprise **USD 55**); (2) **porcentaje moderado sobre GMV** generado en la app por mes calendario (**0,60% / 0,80% / 1,00%** según banda). Bandas de GMV, ascenso/descenso, RIF agregado, primer mes parcial, piloto y reclamos: [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5 y [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §2.3–§4.2.

**Por qué:**
- **Predecible vs. agregadores:** los % de **Zonix Pharma** están en fracciones de punto a ~1%, no en el rango 25-35% de Rappi/PedidosYa; la cuota fija da piso de ingreso.
- **Alineación:** el fee variable crece con el volumen que la farmacia mueve en **Zonix Pharma**; la política de **dos meses consecutivos** para cambiar de nivel reduce saltos por un mes atípico. **Solo el GMV** define Basic / Pro / Enterprise (sin topes por órdenes o SKU). En **M** y **M+1** de comprobación se **sigue cobrando la tarifa del nivel anterior**; la nueva tarifa aplica desde **M+2** (§5.4 B2B).
- **Cadena:** **un nivel y una factura por RIF** en piloto; GMV **sumado** de todas las sucursales en la app; dashboard desglosado por sucursal.

**Riesgo:** sensibilidad al churn si el ticket total se percibe alto. Mitigaciones: % bajo vs competencia, comunicación clara de nivel (§5.4), waiver en prueba, tope/cap comercial opcional en roadmap si el mercado lo exige.

**Nota:** el modelo de lanzamiento es el **híbrido** (§2.1). Las proyecciones usan **ARPF placeholder** hasta datos de piloto.

### 2.2 Alcance del piloto: flujos core completos desde Day-D

**Decisión:** marketplace desde **Day-D** con **flujos core** operativos: Buyer + Pharmacy + Pharmacist + logística **`delivery_company`** + **`delivery_agent`** (sin rol `delivery` autónomo en app). La **última milla** la ejecutan **empresa(s) partner** bajo **concesión o contrato marco**; Zonix **no** opera flota propia ([PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md); [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §1.1).

**Fuera de alcance explícito en piloto (no prometer en pitch):** inventario por **lotes FIFO** en panel farmacia; release público en tiendas sin cerrar checklist Fase 0 (Firebase OTP, keystore, revisión Play/App Store); escala masiva de **sustancias controladas** más allá de casos acotados con farmacéutico real.

**Por qué:**
- La tecnología de los flujos core ya está construida. Reducir el alcance (p. ej. solo OTC sin Rx) no acelera el aprendizaje del diferenciador.
- Si solo abrimos Buyer + Pharmacy, no validamos el flujo Rx (que es el diferenciador clave).
- Si no abrimos Delivery Company, no validamos el caso multi-repartidor que Farmatodo no tiene resuelto digitalmente.

**Trade-off:** la complejidad operativa de día 1 es alta. Mitigación: con sólo 5-10 farmacias en mes 1 y 50-100 órdenes diarias, el founder + Customer Support pueden monitorear todos los flujos en vivo.

### 2.3 Capital pedido: tres tiers (Lean / Base / Growth)

**Decisión:** tres tiers — **Lean 101k** (mínimo viable) · **Base 118k** (recomendado) · **Growth 135k** (acelerado). Escalera **101k < 118k < 135k**.

| Tier | Capital | Rol |
|---|---|---|
| **Lean (mínimo viable)** | **USD 101.000** | Piso honesto: Fase 0 + 12 meses post-Day-D; PROYECCION §1.1 mes a mes |
| **Base (recomendado)** | **USD 118.000** | Lean + valla mediana + asesor + Meta 800 todo el año + reserva |
| **Growth (acelerado)** | **USD 135.000** | Base + colchón runway + marketing/contingencia ampliados |

**Lean — detalle:** **USD 101.000** para **Fase 0 (~90 días)** + **12 meses** post-**Day-D**; one-shots **~9.808** en Fase 0; **Co-CEO**, **4× Sales**, HQ casa, stack IA — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.

**Awareness (Lean):** Meta **800/mes** M1–6 · **500** M7–12; valla pequeña desde M3. **Base/Growth:** Meta **800/mes** todo el año; valla mediana desde M2.

**Pitch:** cerrar en **Lean 101k** (mínimo) u orientar al ángel cómodo a **Base 118k** (recomendado).

### 2.4 Instrumento: SAFE post-money con cap

**Decisión:** SAFE post-money cap según tier — **600k (Lean 101k)** · **650k (Base 118k — recomendado)** · **720k (Growth 135k)**.

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
- **Logística manejable:** un **Coordinador de Partners Logísticos** coordina con la **empresa concesionaria** de última milla en **polos acotados** (SLA, cobertura, incidencias); capacidad de campo en el piloto en el orden de **10-15 agentes** del **partner** (no empleados de flota Zonix).
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
- La **Ley del Ejercicio de la Farmacia VE** obliga a que cada farmacia tenga su propio farmacéutico colegiado registrado en MPPS. Si **Zonix Pharma** contrata uno, ese farmacéutico no puede validar recetas de farmacias afiliadas (no es responsable de su inventario). *Validación del modelo en app: [PENDIENTE dictamen abogado + farmacéutico asesor antes de Day-D].*
- El backend ya tiene módulo de Pharmacist con KYC, dashboard y validación. Cada farmacia afiliada accede al rol Pharmacist de su propio farmacéutico colegiado. Detalle en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md).
- Mitigación de riesgo regulatorio: KYC del pharmacist + verificación MPPS + capacitación. Asesor regulatorio externo **USD 120/mes** en **Base (118k)** y **Growth (135k)** — no en Lean.

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

### 2.9 Posicionamiento en una página (obviously-awesome)

| Pregunta | Respuesta Zonix Pharma |
|----------|------------------------|
| Alternativas competitivas | Farmatodo/Locatel digital, Rappi Pharmacy, WhatsApp informal, app propia costosa |
| Atributos únicos | Rx con farmacéutico de **cada** farmacia; uni-pharmacy; pagos manuales VE; cuota + % GMV bajo vs agregador |
| Valor entregado | Pedido confiable OTC/Rx + tracking sin que Zonix opere flota |
| Cliente objetivo | Farmacias independientes Valencia metro + paciente urbano/clase media |
| Categoría de mercado | Marketplace farmacéutico digital (no «delivery de comida») |
| Tipo de mercado (Steve Blank) | **Existente** — competimos por atributos (Rx, fee, VE); **no** «creamos la categoría» (anti blue-ocean) |

### 2.10 Liquidez marketplace (chicken-and-egg)

**Problema clásico:** sin farmacias no hay catálogo; sin pacientes no hay GMV para la farmacia. **Decisión explícita del piloto: oferta primero, demanda escalonada.**

| Fase | Oferta (farmacias) | Demanda (pacientes) | Fuente |
|------|-------------------|---------------------|--------|
| **T+0 → T+60** | **4× Sales B2B** visitas; cartas de intención; carga de catálogo | Solo soft launch interno (familia/equipo) | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §2.5–2.6, §4.1 |
| **T+60 → Day-D (T+90)** | Onboarding técnico por lotes; meta **~28 activas** pre-cargadas al Day-D | Pre-launch marketing **50%** presupuesto mes; WhatsApp local | PLAN §2.6, §4.1 |
| **Day-D = M1** | **~40 activas** al cierre M1 (curva §1.1) | **Meta Ads + valla** según tier; primera ola B2C en zona piloto | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 M1; [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) §7.3 |
| **M2–M6** | Rampa a **≥97 activas** (DoD M6) | Geo-target Bella Florida + El Socorro; referidos farmacia (Bullseye interior) | PLAN §5; [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §1.2 |

**Mensaje inversor:** no gastamos tráfico masivo a pacientes **antes** de tener catálogo en farmacias piloto; el **B2B es el motor de liquidez** en Fase 0. La curva de **activas** en PROYECCION §1.1 es la fuente de verdad para revenue — no prometer GMV de paciente sin dato piloto.

**Riesgo:** demanda B2C más lenta que firmas B2B → revenue por debajo de ARPF placeholder. **Mitigación:** referidos desde mostrador (QR/código farmacia), CS proactivo, recorte Meta si CAC paciente > umbral (contingencia PROYECCION §4).

### 2.11 Moat y defensibilidad (más allá de timing)

**Early mover** en independientes Valencia es **ventaja de entrada**, no moat permanente. Barreras que el pack sí puede defender ante inversor:

| Moat | Qué es | Por qué importa |
|------|--------|-----------------|
| **Flujo Rx integrado** | Validación por farmacéutico **de la farmacia** en app; trazabilidad audit log | Agregadores genéricos **no** validan receta digital en VE ([PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) §5.6) *[PENDIENTE dictamen]* |
| **Switching cost operativo** | Catálogo cargado, historial de órdenes, farmacéutico capacitado, contrato marco anual | Cambiar a otro marketplace implica re-onboarding + pérdida de historial |
| **Uni-pharmacy + pagos VE nativos** | Un carrito por farmacia; Pago Móvil / Zelle / Binance sin PSP Zonix | Difícil de replicar para agregador genérico sin adaptar stack VE |
| **Modelo híbrido contractual** | Cuota **25/40/55** + % GMV bajo vs 25–35% agregador | Estructura de costo **pegada al contrato**; no solo descuento temporal |
| **Datos operativos (no clínico)** | Logs de validación Rx, tiempos SLA, disputas — cifrados, retención limitada | Mejora operación farmacia; **no** prometer «IA diagnóstica» en piloto |

**Lo que NO es moat hoy:** escala nacional, red de laboratorios, teleconsulta, integración IVSS — roadmap post-Day-D, no piloto.

**Honestidad (prudencia):** Farmatodo podría lanzar marketplace propio en 18–24 meses ([PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) §9); el moat defensible en M12 es **relación B2B + flujo Rx + costo total** en la zona piloto, no exclusividad legal.

### 2.12 Business Model Canvas (resumen — sin cifras nuevas)

Vista única para data room; detalle en docs hermanos. **ARPF ~50** y tiers **101k / 118k / 135k** solo desde [README.md](README.md) y [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md).

| Bloque Canvas | Zonix Pharma (piloto Valencia) | Doc fuente |
|---------------|-------------------------------|------------|
| **Segmentos** | Farmacias independientes (B2B); paciente urbano/clase media (B2C); empresa `delivery_company` + `delivery_agent`; farmacéutico colegiado por farmacia | PROPUESTA ×3, PERFIL §6 |
| **Propuesta de valor** | Marketplace OTC/Rx con validación farmacéutico local, uni-pharmacy, pagos VE, tracking sin flota Zonix | BRIEF; PROPUESTA_USUARIO_FINAL §2.2 |
| **Canales** | **4× Sales** campo; Meta Ads + valla + referidos mostrador; app Android/iOS | PLAN §2–4; SUPUESTO_MARKETING |
| **Relación** | Contrato marco anual farmacia; CS + validación Rx; partner logístico bajo SLA | B2B §9; PLAN_MODULO |
| **Fuentes de ingreso** | Cuota **25/40/55** + % GMV farmacia; **8% × Σ delivery_fee + USD 0,30 × N envíos** a `delivery_company` | B2B §5; PLAN_METODOS_PAGO §2.5 |
| **Recursos clave** | Stack Laravel+Flutter (~4 años); founder+Co-CEO; farmacéuticos de cada farmacia aliada | §1 CONTEXTO; VOLCADO §1 |
| **Actividades clave** | Onboarding B2B, catálogo, validación Rx, asignación partner, pagos manuales VE | PLAN_LANZAMIENTO; PLAN_MODULO |
| **Socios clave** | Farmacias piloto; **empresa(s) concesionaria** última milla; abogado/contador VE *[PENDIENTE]* | TERCER_LADO; REGISTRO P1-05/06 |
| **Estructura de costos** | Fase 0 + burn post-Day-D (Lean **~7.559**/mes promedio); CAC farmacia **139** | PRESUPUESTO §2; UNIT §3 |

## 3. Lo que NO se dice en el pitch (porque puede confundir)

- No se promete monetización por publicidad de laboratorios. Es un upside futuro, no parte del modelo base.
- No se promete expansión a Colombia o México en año 1. Es upside, no commitment.
- No se promete integración con seguros médicos / IVSS. Es un módulo que requiere convenios de 12-18 meses.
- No se promete teleconsulta médica. Es un vertical adyacente, no MVP.

## 4. Glosario rápido (para el founder, no para el inversor)

| Término | Significado simple | Aplicado a Zonix Pharma |
|---|---|---|
| **GMV** | Gross Merchandise Value: total por transacción completada en la app en el mes (definición operativa §5.5 B2B). | Si las farmacias venden USD 200k/mes a través de la app, GMV = USD 200k. **Zonix Pharma** cobra **cuota fija + fee %** sobre ese GMV según nivel; la farmacia se queda con el neto de venta según su operación. |
| **CAC** | Costo de adquirir un cliente. | Cuánto gasta **Zonix Pharma** en marketing + **4×** Sales para firmar UNA farmacia. **USD 139** (ver [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §3). |
| **LTV** | Lifetime Value: cuánto paga ese cliente en toda su vida con nosotros. | Una farmacia en promedio paga USD 50/mes durante 20 meses = USD 1.000 *(ARPF placeholder; recalibrar con híbrido + GMV en piloto).* |
| **LTV/CAC** | Eficiencia del negocio. | **~7,2x** (con CAC **139** y ARPF placeholder **50**). > 3x ya es bueno; > 5x es excelente. |
| **Churn** | Porcentaje de clientes que se van cada mes. | 5%. Si tengo 100 farmacias, mes que viene tendré 95 (sin contar nuevas). |
| **Burn rate** | Cuánto pierdo cada mes mientras no soy rentable. | **~USD 7.559**/mes promedio (tramos **7.462 / 7.798 / 7.431** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3). |
| **Runway** | Cuántos meses puedo aguantar con el dinero que tengo. | **Fase 0 + 12m** post-Day-D con **USD 101k** + buffer + one-shots en Fase 0 ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0). |
| **Break-even** | Mes en que empiezo a no perder dinero. | **M11** post-Day-D con curva §1.1 (**~151 activas**; revenue **7.550** vs burn **7.431** — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1, [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §6). |
| **SAFE** | Contrato simple de inversión. El inversor da dinero hoy, recibe equity en la próxima ronda. | **USD 101k** con cap **USD 600k**. |
| **Cap** | Valuación máxima a la que el SAFE convierte. | Si la próxima ronda valora **Zonix Pharma** en USD 800k, el inversor convierte como si fuera **USD 600k** (**Lean**) — recibe más equity que a valuación plena. |
| **TAM / SAM / SOM** | Mercado total / accesible / capturable. | TAM Venezuela USD 1.638M. **SOM** (farmacias / penetración): [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) §3 y [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md). **Ingreso B2B acumulado año 1** (tabla central, sin waiver): **~USD 60k** (**~59.968** — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1); **año 2 conservador: USD 96-108k** (mismo doc. §2.3). |
| **ARPF** | Average Revenue Per Farmacia. | USD **50**/mes **placeholder** hasta GMV piloto (cuota fija **25 / 40 / 55** + % GMV); cobro vigente = híbrido (§2.1). |
| **Payback** | Meses para recuperar el CAC. | **~2,8 meses** (CAC/ARPF al placeholder). Recalibrar con ARPF híbrido real. |

## 5. Decisiones que el founder se reserva (no están en el pack)

- Distribución de equity entre founders si el founder decide entrar uno técnico secundario en el año 2.
- Política de bonus por revenue para Sales B2B después del mes 6.
- Política de comisión adicional a Customer Support si responde > 95% de tickets en 24h.
- Política de stock options post-Serie A.

Estas se documentarán en un anexo cuando lleguen al frente. Hoy no son bloqueantes.

## 6. Tono del pitch

- **Honesto sobre lo que no se ha hecho:** "no tenemos ventas todavía, tenemos producto operativo y plan validado".
- **Confiado sobre lo que sí está hecho:** "399 tests backend (re-verificar pre-reunión), ~4 años de desarrollo del **stack Zonix Pharma**; staging/VPS hoy, tiendas T+7–12".
- **Específico con números:** nunca decir "esperamos crecer mucho"; decir **~151 farmacias activas en M11**, **~159** hacia M12, **~USD 42.209** cash cierre **M12** post-Day-D (**Lean 101k** + **Fase 0** + **Co-CEO** + **4×** Sales + cuota **25/40/55**), y **equilibrio mensual en M11** con ARPF placeholder **~50** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0–§1.4).
- **Realista sobre Venezuela:** mencionar la inflación de entrada, no esconder la complejidad regulatoria.
- **Modular:** ticket parcial (USD 25k–50k) sobre SAFE Lean; stretch **118k Base** o **135k Growth** según apetito del ángel.

## 7. Próximos pasos antes de la primera reunión con un inversor

1. Completar los `[PENDIENTE]` restantes de [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) (§1 founder mayormente listo en mayo 2026; §2 inversor, §3–9 operativos siguen).
2. Visitar 5-8 farmacias de Bella Florida y El Socorro y volver con sus nombres y datos de contacto.
3. Tener cotización formal de **HQ casa** (San Diego / Av. Bolívar Norte).
4. Tener cotización formal de la valla.
5. Cotizar abogado venezolano para preparar el SAFE local.
6. Repasar el [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).
