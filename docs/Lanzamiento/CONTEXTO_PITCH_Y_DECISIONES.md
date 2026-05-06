# Contexto del pitch y decisiones tomadas

> **Última actualización:** 4 mayo 2026.
> Documento que captura las decisiones del founder (usuario) sobre cómo se posiciona Zonix Pharma frente a un inversor, qué se dice, qué no, y por qué se eligió cada parámetro del modelo.

## 1. Diferenciación frente a Zonix Eats

Zonix Pharma es un **fork destructivo** de Zonix Eats. Esto importa porque significa:

- **Tecnología validada:** los 397 tests del backend ya cubren onboarding, órdenes, métodos de pago manuales VE, KYC, chat real-time, FCM, eventos broadcast. **No estamos empezando desde cero.**
- **Equipo técnico ya entrenado:** el founder conoce el stack al detalle.
- **Riesgo de ejecución reducido:** lo único que se construye desde cero es la capa farmacéutica (Rx, lotes FIFO, cadena de frío, pharmacist colegiado), y eso ya está parcialmente implementado y documentado en [`../PLAN_RX_VALIDATION.md`](../PLAN_RX_VALIDATION.md) y [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md).

**Mensaje para el inversor:** "compramos cuatro años de desarrollo con USD 75.000".

## 2. Decisiones tomadas y por qué

### 2.1 Modelo de ingresos: membresía B2B fija en USD

**Decisión:** Basic USD 25 / Pro USD 60 / Enterprise USD 120, dinámico según GMV de la farmacia, con multi-sucursal para cadenas pequeñas y medianas.

**Por qué:**
- Predecible: la farmacia sabe cuánto pagará el mes que viene. No depende de cuánto venda.
- Justo: si vende poco está en Basic, si vende mucho sube de tier sin sentir un salto.
- Defensible: Rappi cobra **25-35% sobre GMV** ([fuente](https://about.rappi.com/es)), PedidosYa Pharmacy lo mismo ([fuente](https://www.pedidosya.com/)). Una farmacia que vende USD 5.000/mes pagaría USD 1.250-1.750 a Rappi. Con Zonix Pharma paga USD 60-120.
- Multi-sucursal: las cadenas pequeñas (3-8 sucursales) son nuestro target óptimo. Pagan Enterprise una sola vez, conectan todas sus sucursales.

**Riesgo:** si una farmacia gigante usa Zonix sin pagar comisión, "perdemos" el upside. Mitigación: el tier Enterprise está pensado para que esa farmacia pague USD 120 cómodos; ese costo es ridículo para una facturación de USD 50.000+/mes.

### 2.2 Alcance del piloto: completo desde día 1

**Decisión:** los 4 lados del marketplace (Buyer + Pharmacy + Pharmacist + Delivery autónomo + Delivery Company) operativos desde Day-D.

**Por qué:**
- La tecnología ya está construida. Reducir el alcance no acelera el lanzamiento, solo limita el aprendizaje.
- Si solo abrimos Buyer + Pharmacy, no validamos el flujo Rx (que es el diferenciador clave).
- Si no abrimos Delivery Company, no validamos el caso multi-repartidor que Farmatodo no tiene resuelto digitalmente.

**Trade-off:** la complejidad operativa de día 1 es alta. Mitigación: con sólo 5-10 farmacias en mes 1 y 50-100 órdenes diarias, el founder + Customer Support pueden monitorear todos los flujos en vivo.

### 2.3 Capital pedido: USD 75.000 (escenario Base)

**Decisión:** USD 75.000 para 12 meses con buffer 20%.

**Por qué se eligió Base sobre Lean (USD 60k) y Growth (USD 90k):**
- **Lean (USD 60k):** sin valla publicitaria, sin Delivery Ops Coordinator desde día 1. Funcional pero pierde 30-40% de adopción inicial.
- **Base (USD 75k):** valla pequeña 3m×2m USD 350/mes + Delivery Ops desde mes 2. Llega al break-even en mes 11.
- **Growth (USD 90k):** valla mediana 6m×4m USD 700/mes + Asesor regulatorio externo + más presupuesto digital. Llega al break-even en mes 10 pero hay que diluir 20% más equity.

Base es el balance correcto entre runway holgado y dilución razonable.

### 2.4 Instrumento: SAFE post-money con cap

**Decisión:** SAFE post-money cap USD 550.000 (escenario Base).

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
- **Densidad farmacéutica:** Valencia metro tiene 226 farmacias ([Saas](https://www.saasvenezuela.com/)). Bella Florida y El Socorro concentran ~30-50 farmacias en un radio de 4 km.
- **Logística manejable:** un Delivery Ops Coordinator puede coordinar entregas en zona pequeña con 10-15 repartidores.
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
- La **Ley del Ejercicio de la Farmacia VE** obliga a que cada farmacia tenga su propio farmacéutico colegiado registrado en MPPS. Si Zonix contrata uno, ese farmacéutico no puede validar recetas de farmacias afiliadas (no es responsable de su inventario).
- El backend ya tiene módulo de Pharmacist con KYC, dashboard y validación. Cada farmacia afiliada accede al rol Pharmacist de su propio farmacéutico colegiado. Detalle en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md).
- Mitigación de riesgo regulatorio: KYC del pharmacist + verificación de inscripción MPPS + capacitación sobre Zonix + manual operativo. Asesor regulatorio externo USD 120/mes solo en escenario Growth.

**Por qué diseñador UI/UX no:**
- El founder es el responsable técnico y conoce el stack Flutter completo.
- Hay docs de marca canónicos: [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md). Tokens, paleta, tipografía ya definidos.
- Si el negocio crece, el primer hire post-PMF es un Product Designer.

### 2.8 Benchmark de competencia: Farmatodo + Farmalisto + Rappi

**Decisión:** mencionar los tres en el pitch.

**Por qué cada uno:**
- **Farmatodo / Locatel** (cadenas premium VE): no son competencia directa, son referencia para que el inversor entienda que el sector farmacéutico VE existe y es grande. Ellas NO atacan el segmento de farmacias medianas e independientes.
- **Farmalisto** (México + Colombia): comparable directo internacional. **USD 32M revenue 2024 ([fuente](https://www.crunchbase.com/organization/farmalisto)) con USD 33M VC raised ([fuente](https://pitchbook.com/profiles/company/210015-91))**. Demuestra que el modelo marketplace farmacéutico LatAm es financiable.
- **Rappi / PedidosYa Pharmacy:** ataque al segmento alto. Cobran 25-35% comisión. Zonix Pharma se diferencia en precio (membresía fija) y en validación Rx (que ellos no hacen).

Detalle competitivo en [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md).

## 3. Lo que NO se dice en el pitch (porque puede confundir)

- No se promete monetización por publicidad de laboratorios. Es un upside futuro, no parte del modelo base.
- No se promete expansión a Colombia o México en año 1. Es upside, no commitment.
- No se promete integración con seguros médicos / IVSS. Es un módulo que requiere convenios de 12-18 meses.
- No se promete teleconsulta médica. Es un vertical adyacente, no MVP.

## 4. Glosario rápido (para el founder, no para el inversor)

| Término | Significado simple | Aplicado a Zonix Pharma |
|---|---|---|
| **GMV** | Gross Merchandise Value: total de dinero que pasa por el marketplace. | Si las farmacias venden USD 200k/mes a través de la app, GMV = USD 200k. Zonix NO se queda con todo eso, solo con la membresía. |
| **CAC** | Costo de adquirir un cliente. | Cuánto gasta Zonix en marketing + comisión Sales para firmar UNA farmacia. USD 94. |
| **LTV** | Lifetime Value: cuánto paga ese cliente en toda su vida con nosotros. | Una farmacia en promedio paga USD 45/mes durante 20 meses = USD 900. |
| **LTV/CAC** | Eficiencia del negocio. | 9,6x. Por cada USD 1 que gasto en captar farmacia, recibo USD 9,60 de vuelta. > 3x ya es bueno; > 5x es excelente. |
| **Churn** | Porcentaje de clientes que se van cada mes. | 5%. Si tengo 100 farmacias, mes que viene tendré 95 (sin contar nuevas). |
| **Burn rate** | Cuánto pierdo cada mes mientras no soy rentable. | USD 4.521/mes promedio. |
| **Runway** | Cuántos meses puedo aguantar con el dinero que tengo. | 12 meses con USD 75k + buffer. |
| **Break-even** | Mes en que empiezo a no perder dinero. | Mes 11 con 107 farmacias activas. |
| **SAFE** | Contrato simple de inversión. El inversor da dinero hoy, recibe equity en la próxima ronda. | USD 75k con cap USD 550k. |
| **Cap** | Valuación máxima a la que el SAFE convierte. | Si la próxima ronda valora Zonix en USD 800k, el inversor convierte como si fuera USD 550k (recibe más equity). |
| **TAM / SAM / SOM** | Mercado total / accesible / capturable. | TAM Venezuela USD 1.638M. SOM realista año 1: USD 60k revenue. |
| **ARPF** | Average Revenue Per Farmacia. | USD 45/mes. |
| **Payback** | Meses para recuperar el CAC. | 2,1 meses. La farmacia paga su propio costo de adquisición en 2 meses y luego es ganancia. |

## 5. Decisiones que el founder se reserva (no están en el pack)

- Distribución de equity entre founders si el founder decide entrar uno técnico secundario en el año 2.
- Política de bonus por revenue para Sales B2B después del mes 6.
- Política de comisión adicional a Customer Support si responde > 95% de tickets en 24h.
- Política de stock options post-Serie A.

Estas se documentarán en un anexo cuando lleguen al frente. Hoy no son bloqueantes.

## 6. Tono del pitch

- **Honesto sobre lo que no se ha hecho:** "no tenemos ventas todavía, tenemos producto operativo y plan validado".
- **Confiado sobre lo que sí está hecho:** "397 tests pasando, 4 años de desarrollo de Zonix Eats reciclados".
- **Específico con números:** nunca decir "esperamos crecer mucho", siempre decir "esperamos 107 farmacias activas en mes 11".
- **Realista sobre Venezuela:** mencionar la inflación de entrada, no esconder la complejidad regulatoria.
- **Modular:** si el inversor pide ticket más chico (USD 25k), tenemos respuesta para Lean. Si pide ticket más grande (USD 90k), tenemos Growth.

## 7. Próximos pasos antes de la primera reunión con un inversor

1. Completar los `[PENDIENTE]` restantes de [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) (§1 founder mayormente listo en mayo 2026; §2 inversor, §3–9 operativos siguen).
2. Visitar 5-8 farmacias de Bella Florida y El Socorro y volver con sus nombres y datos de contacto.
3. Tener cotización formal del coworking u oficina elegida.
4. Tener cotización formal de la valla.
5. Cotizar abogado venezolano para preparar el SAFE local.
6. Repasar el [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).
