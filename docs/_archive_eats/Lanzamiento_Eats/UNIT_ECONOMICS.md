# Unit Economics — Zonix Eats

> **Propósito:** demostrar con números que el modelo de negocio es viable antes de gastar un dólar en marketing.  
> **Estado:** supuestos de planificación; actualizar con datos reales conforme avance el piloto.  
> **Documentos relacionados:** [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md), [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md), [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).  
> **Última actualización:** abril 2026.

---

## 1. Fuente de ingresos

Zonix Eats cobra **membresía fija mensual** (B2B) a dos tipos de cliente:

| Cliente | Qué paga | Por qué paga |
|---------|----------|--------------|
| **Comercio** (restaurante, lunchería, arepera) | Membresía mensual | Menú digital, pedidos con tracking, base de clientes, gestión de pagos/comprobantes, visibilidad en app |
| **Delivery Company** (empresa de repartidores) | Membresía mensual | Acceso a flujo de pedidos, gestión de agentes, asignación automática, tracking |

Zonix **no cobra comisión sobre ventas (GMV)** ni retiene dinero del pedido. Esto es ventaja regulatoria (caso Yummy/Sudeban) y comercial (el comercio conserva 100 % de la venta).

---

## 2. Escenarios de precio — membresía comercio

### 2.1 Análisis de valor vs alternativas

| Alternativa | Costo mensual para el comercio (estimado) | Nota |
|-------------|-------------------------------------------|------|
| Yummy | ~25 % sobre ventas. Si vende $600/mes → **$150/mes** en comisiones | Varía por acuerdo; puede bajar con exclusividad |
| PedidosYa | ~24–27 % sobre ventas. Si vende $600/mes → **$144–162/mes** | Negociable según volumen |
| WhatsApp / Instagram | $0 directo; **costo oculto** en tiempo, errores, no-escalabilidad | No hay tracking, historial ni gestión |
| Delivery propio (motorizado fijo) | $150–300/mes (salario + gasolina) | Solo para comercios con volumen alto |

### 2.2 Tres escenarios de membresía

| Escenario | Precio mensual (USD) | Justificación | Riesgo |
|-----------|---------------------|---------------|--------|
| **A — Accesible** | **$15** | Barrera de entrada mínima; competir con "gratis" de WhatsApp. Atractivo en barrio popular. | Necesita muchos comercios para cubrir costos; margen bajo |
| **B — Equilibrio** (recomendado) | **$25** | Menor que 1 día de comisiones en Yummy para un comercio que venda $600/mes. Psicológicamente justificable. | Requiere demostrar valor antes de cobrar |
| **C — Premium** | **$40** | Incluye soporte prioritario, posicionamiento destacado en app, reportes. Para comercios con mayor volumen. | Puede ser barrera en barrio popular |

**Recomendación:** lanzar con **$25/mes** como precio base después del trial. Ofrecer **$15/mes** como "tarifa fundador" los primeros 3 meses post-trial para reducir fricción. Evaluar tier premium ($40) cuando haya features diferenciadas.

### 2.3 Membresía Delivery Company

| Escenario | Precio mensual (USD) | Justificación |
|-----------|---------------------|---------------|
| **Base** | **$30** | Acceso a flujo de pedidos, gestión de agentes, tracking |
| **Premium** | **$50** | Prioridad en asignación, reportes avanzados, más agentes |

*En el piloto puede haber 0–1 delivery companies. Ingreso complementario, no principal.*

---

## 3. CAC — Costo de Adquisición de Comercio

### 3.1 Canal principal: visita en calle (captador)

| Componente | Costo unitario | Supuesto |
|-----------|---------------|----------|
| Tiempo del captador por visita | $3–5 | ~$250/mes part-time ÷ ~60 visitas/mes |
| Transporte (moto / bus) por visita | $1–2 | Gasolina + desgaste o pasaje |
| Material impreso (volante + tarjeta) | $0,30 | Impresión a granel |
| Conectividad (datos móviles) | $0,50 | Prorrateo plan mensual |
| **Costo por visita** | **$5–8** | |
| Visitas para cerrar 1 comercio (estimación) | **3–5 visitas** | 1ª visita pitch, 2ª demo en local, 3ª cierre/onboarding |
| **CAC (costo de adquisición por comercio)** | **$15–40** | $5–8 × 3–5 visitas |

### 3.2 Canal complementario: referidos

| Componente | Costo |
|-----------|-------|
| Incentivo al comercio que refiere | $0–10 (descuento en membresía o bonificación) |
| **CAC por referido** | **$0–10** |

### 3.3 CAC ponderado (escenario base)

Asumiendo 70 % captación directa ($25 CAC promedio) y 30 % referidos ($5 CAC):

**CAC ponderado = $25 × 0,7 + $5 × 0,3 = $19**

---

## 4. LTV — Lifetime Value

### 4.1 Variables

| Variable | Valor | Supuesto |
|----------|-------|----------|
| Membresía mensual (escenario B) | $25 | Precio recomendado |
| Churn mensual (fase temprana) | 15 % | Conservador; producto nuevo sin tracción previa |
| Churn mensual (fase madura, mes 6+) | 8 % | Mejora conforme se demuestra valor |
| Vida media del cliente (1 / churn) | 6,7 meses (temprano) / 12,5 meses (maduro) | Fórmula estándar |

### 4.2 LTV por escenario

| Escenario | Membresía | Churn | Vida media | **LTV** |
|-----------|-----------|-------|-----------|---------|
| Conservador (fase temprana, $15) | $15 | 15 % | 6,7 meses | **$100** |
| Base (recomendado, $25) | $25 | 12 % | 8,3 meses | **$208** |
| Optimista (maduro, $25) | $25 | 8 % | 12,5 meses | **$313** |
| Premium ($40, maduro) | $40 | 10 % | 10 meses | **$400** |

### 4.3 Ratio LTV / CAC

| Escenario | LTV | CAC | **Ratio** | Salud |
|-----------|-----|-----|-----------|-------|
| Conservador | $100 | $25 | **4,0x** | Viable |
| Base | $208 | $19 | **10,9x** | Muy sano |
| Optimista | $313 | $19 | **16,5x** | Excelente |

**Regla de oro SaaS:** ratio > 3:1 es viable. Todos los escenarios lo cumplen.

---

## 5. Break-even por comercio

Tiempo para que un comercio recupere su costo de adquisición:

| Escenario | CAC | Membresía/mes | **Meses para payback** |
|-----------|-----|--------------|----------------------|
| Conservador ($15) | $25 | $15 | 1,7 meses |
| Base ($25) | $19 | $25 | **0,8 meses** (< 1 mes) |
| Premium ($40) | $19 | $40 | 0,5 meses |

**Conclusión:** el CAC se recupera en el primer o segundo pago de membresía. Esto es una fortaleza del modelo.

---

## 6. Break-even de la empresa

### 6.1 Costos fijos mensuales (basado en PRESUPUESTO_12_MESES_REFERENCIA)

| Concepto | Lean (USD/mes) | Estándar (USD/mes) |
|----------|---------------|-------------------|
| VPS + dominio (prorrateo) | ~5 | ~15 |
| Forge + Sentry | 0 | ~38 |
| Ops/soporte (part-time) | 250 | 250 |
| Pauta digital (Meta) | 150 | 150 |
| Captación comercial (transporte, material, datos) | 80 | 80 |
| Legal/contable (prorrateo anual) | 67 | 67 |
| Tiendas apps (prorrateo) | ~10 | ~10 |
| Software facturación SENIAT | 50 | 50 |
| Internet / electricidad founder (prorrateo) | 30 | 30 |
| Teléfono / WhatsApp Business soporte | 10 | 10 |
| Incentivos buyer (delivery gratis 1er pedido, prorrateo) | 15 | 25 |
| **Total costos fijos operativos** | **~667** | **~725** |

> **Nota sobre costo de oportunidad del founder:** un programador en Venezuela podría ganar $500–1.000/mes como freelance. En fase pre-revenue el founder no cobra sueldo, pero esta tabla lo hace explícito para transparencia con el inversionista. Si se asigna compensación mínima ($200/mes desde mes 4–6), los costos suben a **~$867/mes** (lean) y el break-even a **~35 comercios**.

### 6.1.1 Plan de compensación mínima del fundador (anti-burnout)

| Mes (post cierre inversión) | Supuesto | Monto (USD/mes) | Objetivo |
|----------------------------|----------|-----------------|----------|
| 1–3 | Enfoque producto + piloto; sueldo cero o simbólico | $0–50 | Conservar runway |
| 4–6 | **Compensación mínima** si hay MRR > $0 y ops activo | **$100–200** | Sostenibilidad personal; documentar en planilla interna |
| 7–12 | Revisión según MRR y burn | $200–400 o 0 + acuerdo familiar | Alinear con [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) |

**Mensaje al inversionista:** no es lujo; es reducir riesgo de que el único recurso técnico abandone por tension economica antes del mes 12. La linea entra en el presupuesto como "founder stipend" o se prorratea desde ops si el contador lo permite.

### 6.2 Comercios necesarios para cubrir costos

| Escenario precio | Costos mensuales | **Comercios para break-even** |
|-----------------|-----------------|------------------------------|
| $15/mes (lean) | $667 | **45 comercios** |
| **$25/mes (lean)** | **$667** | **27 comercios** |
| $25/mes (estándar) | $725 | **29 comercios** |
| $40/mes (lean) | $667 | **17 comercios** |

### 6.3 Con delivery company adicional

Si 1 delivery company paga $30/mes:

| Escenario | Comercios + delivery co. | Comercios necesarios |
|-----------|-------------------------|---------------------|
| $25/mes (lean) + 1 delivery co. | $667 − $30 = $637 a cubrir | **26 comercios** |
| $25/mes (lean) + 2 delivery co. | $667 − $60 = $607 a cubrir | **25 comercios** |

**Realidad del piloto:** con 8–20 comercios en 12 meses (ver [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md)), **no se alcanza break-even en el año 1**. Esto es esperado en un startup pre-revenue. El capital del inversionista cubre este gap.

---

## 7. Tabla de sensibilidad — ingreso mensual

Ingreso mensual = comercios activos × membresía. Referencia: costos lean operativos $667/mes.

| Comercios activos | $15/mes | $25/mes | $40/mes |
|-------------------|---------|---------|---------|
| 5 | $75 | $125 | $200 |
| 10 | $150 | $250 | $400 |
| 15 | $225 | $375 | $600 |
| 17 | $255 | $425 | **$680 (break-even lean @$40)** |
| 20 | $300 | $500 | $800 |
| **27** | $405 | **$675 (break-even lean @$25)** | $1.080 |
| 29 | $435 | **$725 (break-even estándar @$25)** | $1.160 |
| 35 | $525 | **$875 (break-even c/ compensación founder)** | $1.400 |
| 50 | $750 | $1.250 | $2.000 |

---

## 8. Cómo reducir churn (retener comercios)

| Estrategia | Costo | Impacto esperado |
|-----------|-------|-----------------|
| Onboarding asistido (visita al local, configurar menú juntos) | Incluido en CAC | Alto — reduce abandono primera semana |
| Generación de demanda (traer compradores al comercio) | Pauta digital | Crítico — sin pedidos no hay valor |
| Soporte reactivo rápido (WhatsApp Business, <2h) | Incluido en ops | Medio — evita frustración |
| Reportes mensuales al comercio ("este mes recibiste X pedidos") | Desarrollo (bajo) | Medio — demuestra valor tangible |
| Descuento por pago trimestral anticipado | -10 % revenue | Medio — lock-in y flujo de caja |
| Features exclusivas para comercios activos (posicionamiento, promociones) | Desarrollo | Medio-alto a mediano plazo |

---

## 9. Métricas a trackear desde el día 1

| Métrica | Fórmula | Frecuencia | Target piloto |
|---------|---------|-----------|--------------|
| **MRR** (Monthly Recurring Revenue) | Σ membresías activas | Mensual | Creciente |
| **Churn rate** | Comercios que cancelan / comercios inicio de mes | Mensual | < 15 % |
| **CAC** | Gasto captación / comercios nuevos cerrados | Mensual | < $25 |
| **LTV/CAC** | LTV estimado / CAC real | Trimestral | > 3x |
| **Payback period** | CAC / membresía mensual | Por comercio | < 2 meses |
| **Comercios activos** (con ≥1 pedido en 30 días) | Conteo | Semanal | Creciente |
| **Revenue per commerce** | MRR / comercios activos | Mensual | $25 |

---

## 10. Resumen ejecutivo para el inversionista

> "Con una membresía de **$25/mes**, necesitamos **27 comercios activos** para cubrir costos fijos operativos (~$667/mes lean, incluyendo captación, facturación SENIAT, conectividad e incentivos buyer). El costo de adquirir cada comercio es **~$19** y se recupera en **menos de 1 mes**. El ratio LTV/CAC de **10,9x** indica un modelo sano. En el piloto de 12 meses esperamos captar **8–20 comercios**, lo que genera **$2.400–6.000/año** en ingresos. No cubrimos costos en el año 1 — el capital del inversionista financia este gap mientras validamos product-market fit y construimos la base para escalar a Valencia completa (~460 comercios potenciales = **$138.000/año TAM**). Si se asigna compensación mínima al founder ($200/mes desde mes 4–6), el break-even sube a ~35 comercios."
