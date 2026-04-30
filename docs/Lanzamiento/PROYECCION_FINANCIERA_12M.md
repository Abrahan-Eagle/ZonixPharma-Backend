# Proyección financiera — 12 meses (Zonix Eats)

> **Propósito:** mostrar al inversionista cuándo entra dinero, cuándo se cruzan ingresos con gastos, y qué pasa en cada escenario.  
> **Estado:** proyección basada en supuestos; actualizar mensualmente con datos reales.  
> **Documentos base:** [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) (precios, CAC, churn), [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) (costos), [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) (mercado).  
> **Última actualización:** abril 2026.

---

## 1. Supuestos del modelo

| Variable | Conservador | Base | Optimista |
|----------|------------|------|-----------|
| Membresía comercio | $25/mes | $25/mes | $25/mes |
| Membresía delivery company | $30/mes | $30/mes | $30/mes |
| Trial (gratis) | 30 días por comercio | 30 días | 30 días |
| Tarifa fundador (post-trial meses 1–3) | $15/mes | $15/mes | N/A (precio full) |
| Comercios nuevos/mes (después de setup) | 1/mes | 1,5/mes | 2,5/mes |
| Churn mensual (comercios) | 15 % | 12 % | 8 % |
| Delivery companies activas | 0 todo el año | 1 desde mes 6 | 1 desde mes 4 |
| Costos fijos mensuales | $667 (lean operativo) | $725 (estandar operativo) | $725 (estandar operativo) |
| Mes 1–2 | Setup: captación, 0 ingresos | Igual | Igual |

---

## 2. Curva de comercios activos (netos de churn)

### Escenario CONSERVADOR

| Mes | Nuevos | En trial (gratis) | Pagando (fundador $15) | Pagando (regular $25) | **Activos netos** | Churn sale |
|-----|--------|-------------------|----------------------|---------------------|--------------------|------------|
| 1 | 0 | 0 | 0 | 0 | **0** | 0 |
| 2 | 2 | 2 | 0 | 0 | **2** | 0 |
| 3 | 1 | 1 | 2 | 0 | **3** | 0 |
| 4 | 1 | 1 | 1 | 2 | **4** | 0 |
| 5 | 1 | 1 | 1 | 2 | **4** | 1 |
| 6 | 1 | 1 | 1 | 2 | **4** | 1 |
| 7 | 1 | 1 | 1 | 2 | **4** | 1 |
| 8 | 1 | 1 | 1 | 2 | **4** | 1 |
| 9 | 1 | 1 | 1 | 3 | **5** | 0 |
| 10 | 1 | 1 | 1 | 3 | **5** | 1 |
| 11 | 1 | 1 | 1 | 3 | **5** | 1 |
| 12 | 1 | 1 | 1 | 4 | **6** | 0 |

### Escenario BASE

| Mes | Nuevos | Trial | Fundador ($15) | Regular ($25) | **Activos** | Churn |
|-----|--------|-------|---------------|---------------|-------------|-------|
| 1 | 0 | 0 | 0 | 0 | **0** | 0 |
| 2 | 3 | 3 | 0 | 0 | **3** | 0 |
| 3 | 2 | 2 | 3 | 0 | **5** | 0 |
| 4 | 2 | 2 | 2 | 2 | **6** | 1 |
| 5 | 1 | 1 | 2 | 3 | **6** | 1 |
| 6 | 2 | 2 | 1 | 4 | **7** | 1 |
| 7 | 1 | 1 | 2 | 4 | **7** | 1 |
| 8 | 2 | 2 | 1 | 5 | **8** | 1 |
| 9 | 1 | 1 | 2 | 5 | **8** | 1 |
| 10 | 2 | 2 | 1 | 6 | **9** | 1 |
| 11 | 2 | 2 | 2 | 6 | **10** | 1 |
| 12 | 1 | 1 | 2 | 7 | **10** | 1 |

### Escenario OPTIMISTA

| Mes | Nuevos | Trial | Fundador | Regular ($25) | **Activos** | Churn |
|-----|--------|-------|----------|---------------|-------------|-------|
| 1 | 0 | 0 | 0 | 0 | **0** | 0 |
| 2 | 4 | 4 | 0 | 0 | **4** | 0 |
| 3 | 3 | 3 | 4 | 0 | **7** | 0 |
| 4 | 2 | 2 | 3 | 3 | **8** | 1 |
| 5 | 3 | 3 | 2 | 5 | **10** | 1 |
| 6 | 2 | 2 | 3 | 6 | **11** | 1 |
| 7 | 3 | 3 | 2 | 8 | **13** | 1 |
| 8 | 2 | 2 | 3 | 9 | **14** | 1 |
| 9 | 3 | 3 | 2 | 10 | **15** | 2 |
| 10 | 2 | 2 | 3 | 11 | **16** | 1 |
| 11 | 3 | 3 | 2 | 12 | **17** | 2 |
| 12 | 2 | 2 | 3 | 13 | **18** | 1 |

---

## 3. Flujo de caja mensual — escenario BASE

| Mes | MRR comercios | MRR delivery co. | **Ingreso total** | Gastos fijos | **Resultado mensual** | **Saldo acumulado** |
|-----|---------------|-------------------|-------------------|-------------|----------------------|---------------------|
| 1 | $0 | $0 | **$0** | $610 | −$610 | **−$610** |
| 2 | $0 | $0 | **$0** | $610 | −$610 | **−$1.220** |
| 3 | $45 | $0 | **$45** | $610 | −$565 | **−$1.785** |
| 4 | $80 | $0 | **$80** | $610 | −$530 | **−$2.315** |
| 5 | $105 | $0 | **$105** | $610 | −$505 | **−$2.820** |
| 6 | $115 | $30 | **$145** | $610 | −$465 | **−$3.285** |
| 7 | $130 | $30 | **$160** | $610 | −$450 | **−$3.735** |
| 8 | $145 | $30 | **$175** | $610 | −$435 | **−$4.170** |
| 9 | $155 | $30 | **$185** | $610 | −$425 | **−$4.595** |
| 10 | $175 | $30 | **$205** | $610 | −$405 | **−$5.000** |
| 11 | $200 | $30 | **$230** | $610 | −$380 | **−$5.380** |
| 12 | $225 | $30 | **$255** | $610 | −$355 | **−$5.735** |
| **TOTAL** | **$1.375** | **$210** | **$1.585** | **$7.320** | **−$5.735** | |

**Lectura:** en el escenario base, el año 1 termina con un déficit acumulado de ~$5.735. Este es el "gap" que cubre la inversión. Al mes 12 el negocio genera $255/mes, cubriendo ~42 % de los gastos fijos.

---

## 4. Flujo de caja — escenario CONSERVADOR

| Mes | Ingreso | Gastos | Resultado | Acumulado |
|-----|---------|--------|-----------|-----------|
| 1–2 | $0 | $562×2 | −$1.124 | −$1.124 |
| 3 | $30 | $562 | −$532 | −$1.656 |
| 4 | $55 | $562 | −$507 | −$2.163 |
| 5–8 | ~$55–70 | $562×4 | ~−$490×4 | −$4.123 |
| 9–12 | ~$75–100 | $562×4 | ~−$470×4 | **−$5.880** |
| **TOTAL** | **~$820** | **$6.744** | | **−$5.924** |

## 5. Flujo de caja — escenario OPTIMISTA

| Mes | Ingreso | Gastos | Resultado | Acumulado |
|-----|---------|--------|-----------|-----------|
| 1–2 | $0 | $610×2 | −$1.220 | −$1.220 |
| 3 | $60 | $610 | −$550 | −$1.770 |
| 6 | $180 | $610 | −$430 | −$3.050 |
| 9 | $310 | $610 | −$300 | −$3.950 |
| 12 | $385 | $610 | −$225 | **−$4.575** |
| **TOTAL** | **~$2.660** | **$7.320** | | **−$4.660** |

---

## 5.1 Escenario FRACASO (downside risk)

> **Proposito:** mostrar al inversionista que conocemos el peor caso y que hemos pensado en que se puede recuperar.

### Supuestos del escenario fracaso

| Variable | Valor |
|----------|-------|
| Comercios captados en trial (mes 2-4) | 3–4 |
| Comercios que convierten post-trial | 0–1 (el resto cancela al terminar el trial) |
| Comercios activos pagando mes 6+ | 0–2 |
| Churn post-trial | 80–100 % (no ven valor: pocos pedidos, sin demanda) |
| Delivery company | 0 (ninguna se interesa) |
| Compradores activos | < 10 (insuficientes para generar pedidos) |
| Causa raiz | El marketplace no arranca: sin compradores → sin pedidos → comercio no ve valor → cancela |

### Flujo de caja — fracaso

| Mes | Ingreso | Gastos | Resultado | Acumulado |
|-----|---------|--------|-----------|-----------|
| 1–2 | $0 | $562×2 | −$1.124 | −$1.124 |
| 3 | $0 (trial) | $562 | −$562 | −$1.686 |
| 4 | $15 (1 fundador) | $562 | −$547 | −$2.233 |
| 5 | $15 | $562 | −$547 | −$2.780 |
| 6 | $0 (ultimo cancela) | $562 | −$562 | −$3.342 |
| 7–12 | $0 | $562×6 | −$3.372 | **−$6.714** |

**Capital quemado total:** ~$6.700 USD. Praticamente toda la inversion lean.

### Que se puede recuperar en caso de fracaso

| Activo | Valor residual | Liquidez |
|--------|---------------|----------|
| Codigo fuente (Flutter + Laravel, ~590 tests) | Reutilizable para pivot o venta de tecnologia | Baja — no es liquido |
| Marca "Zonix Eats" + dominio | Minimo (~$100–200) | Media |
| Conocimiento de mercado (por que fallo) | Invaluable para siguiente intento | Cero |
| Infraestructura (VPS, cuentas) | Cancelable; no hay lock-in largo | N/A |
| Vehiculo legal (C.A.) | Se puede usar para otro proyecto | Media |

### Senales de alerta temprana (trigger para pivotar)

| Senal | Mes | Accion |
|-------|-----|--------|
| 0 comercios aceptan trial despues de 30 visitas | Mes 2–3 | Replantear propuesta de valor o zona |
| < 5 pedidos completados en la zona en 1 mes | Mes 3–4 | El problema es demanda de buyer — invertir 100 % en generacion de demanda o suspender |
| 100 % de comercios en trial cancelan al vencer | Mes 4–5 | No hay product-market fit; pivotar o cerrar |
| $0 MRR en mes 6 | Mes 6 | **Reunion de decision: pivotar o devolver capital restante** |

### Plan de salida ordenada

Si en el **mes 6** la traccion es cero o negativa:

1. **Congelar gastos:** cancelar pauta digital, dejar solo VPS minimo ($5/mes).
2. **Reunir al equipo y al inversionista:** presentar datos reales, no excusas.
3. **Decidir:**
   - **Pivotar:** cambiar zona, modelo (ej. comision en vez de membresia), o target (comercios mas grandes).
   - **Cerrar:** devolver capital restante (~$1.500–3.000 si se congelo a tiempo), transferir o abrir el codigo.
4. **Documentar:** el fracaso es datos; los datos tienen valor para el siguiente intento.

> **Mensaje al inversionista:** "El peor escenario es ~$6.700 perdidos sin ingresos. Pero tenemos alertas tempranas en mes 3–4 que nos permiten pivotar o cerrar antes de quemar todo. Si congelamos en mes 6, queda ~$1.500–3.000 devolvibles. El activo tecnologico (app + API con 590 tests) sobrevive y puede reutilizarse."

---

## 6. Punto de break-even (mensual)

¿En qué mes los ingresos mensuales cubren los gastos mensuales?

| Escenario | Costos/mes | Comercios necesarios @$25 | Se alcanza en 12 meses? | Mes estimado |
|-----------|-----------|--------------------------|--------------------------|-------------|
| Conservador (lean operativo) | $667 | 27 | **No** (llega a 6) | Mes ~24-30 |
| Base (estandar operativo) | $725 | 29 | **No** (llega a 10) | Mes ~18-22 |
| Optimista (estandar operativo) | $725 | 29 | **No** (llega a 18) | Mes ~14-16 |

> **Nota:** los costos operativos ($667 lean / $725 estandar) incluyen facturacion SENIAT, conectividad founder, incentivos buyer y captacion, ademas de las lineas basicas (VPS, ops, pauta, legal, tiendas). Ver [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) seccion 6.1 para el desglose completo. Los flujos de caja en secciones 3-5 usan los costos base de PRESUPUESTO ($562-$610) como gastos fijos contables; la diferencia con $667-$725 son los costos operativos adicionales identificados en el analisis forense.

**Conclusión:** el break-even mensual se alcanza en el **año 2** en todos los escenarios. Esto es normal para un SaaS B2B de bajo ticket en fase de lanzamiento.

---

## 7. Capital necesario (runway)

| Escenario | Déficit acumulado año 1 | + Contingencia 15 % | **Capital mínimo necesario** |
|-----------|------------------------|--------------------|-----------------------------|
| Conservador (lean) | $5.924 | $889 | **~$6.800** |
| Base (estándar) | $5.735 | $860 | **~$6.600** |
| Optimista (estándar) | $4.660 | $699 | **~$5.400** |

**Rango para el pitch:** solicitar **$6.000–8.000 USD** para 12 meses de runway (incluye contingencia y margen). Si se incluye OOH (valla publicitaria), sumar $6.900 → rango **$13.000–15.000 USD**.

---

## 8. Sensibilidad: ¿qué pasa si...?

### 8.1 Membresía diferente

| Membresía | Comercios mes 12 (base) | MRR mes 12 | Déficit año 1 | Break-even mensual |
|-----------|------------------------|-----------|---------------|-------------------|
| **$15** | 10 | $150 | ~$6.100 | Mes 30+ (38 comercios) |
| **$25** | 10 | $250 | ~$5.735 | Mes 18–22 (25 comercios) |
| **$40** | 10 | $400 | ~$5.200 | Mes 14–16 (16 comercios) |

### 8.2 Churn diferente

| Churn | Comercios mes 12 (base) | Impacto |
|-------|------------------------|---------|
| **8 %** | 13 | +3 comercios → ~$75/mes extra → break-even ~2 meses antes |
| **12 %** | 10 | Escenario base |
| **20 %** | 7 | −3 comercios → break-even se aleja ~4 meses |

### 8.3 Sin delivery company

Sin los $30/mes de la delivery company: déficit aumenta ~$210/año (< 4 %). Impacto menor.

---

## 9. Hitos financieros (para reportar al inversionista)

| Hito | Métrica | Target |
|------|---------|--------|
| **Mes 3** | Primer MRR (primeros comercios pagando) | >$0 |
| **Mes 6** | 5+ comercios activos pagando | MRR >$100 |
| **Mes 9** | Churn <15 %, MRR creciendo | MRR >$150 |
| **Mes 12** | 10+ comercios, 1 delivery co. | MRR >$250 |
| **Mes 18** | Break-even mensual a la vista | MRR >$500 |
| **Mes 24** | Break-even mensual alcanzado | MRR >$610 |

---

## 10. Dashboard financiero propuesto (trackear mensual)

| Métrica | Fórmula | Dónde medir |
|---------|---------|-------------|
| **MRR** | Σ membresías cobradas en el mes | Panel admin / manual |
| **Burn rate** | Gastos totales del mes | Contabilidad |
| **Runway restante** | Saldo en caja ÷ burn rate | Contabilidad |
| **Net revenue** | MRR − gastos operativos | Contabilidad |
| **LTV realizado** | Ingreso acumulado por comercio ÷ comercios que salieron | Panel admin |
| **CAC realizado** | Gasto captación del mes ÷ comercios cerrados | Manual |

---

## 11. Resumen para el pitch

> "Pedimos **$7.000–8.000 USD** para 12 meses de runway sin OOH (o **$14.000–15.000** con campaña de valla). En ese periodo esperamos captar **10–18 comercios** que generen **$250–385/mes** de ingreso recurrente al cierre del año 1. El break-even mensual se proyecta para el **mes 18–22** con expansión gradual a Valencia. El año 1 es inversión en validación: product-market fit, churn estable, y base de comercios para escalar."


---

## 12. Proyeccion ano 2-3 (escenario base)

> **Proposito:** mostrar al inversionista que hay un camino a auto-sostenibilidad y crecimiento, no solo un piloto de 12 meses.

### 12.1 Supuestos ano 2 (meses 13-24)

| Variable | Valor | Justificacion |
|----------|-------|---------------|
| Base de comercios al inicio ano 2 | 10 (herencia del piloto) | Escenario base mes 12 |
| Cobertura geografica | Valencia completa (9 parroquias) | Expansion post-piloto exitoso |
| Comercios nuevos/mes | 3-5 (vs 1.5 en piloto) | Captador dedicado + referidos + marca establecida |
| Churn mensual | 10 % (mejora vs 12 % piloto) | Producto maduro, mas pedidos, comercio ve valor |
| Membresia | $25/mes (algunos a $40 premium) | Membresia promedio ponderada: ~$27 |
| Delivery companies activas | 2-3 | Expansion requiere mas cobertura |
| Costos fijos mensuales | $900-1.200 | Ops full-time, mas infra, marketing escalado |
| Compensacion founder | $300/mes desde mes 15 | Minimo viable post-validacion |

### 12.2 Proyeccion trimestral ano 2

| Trimestre | Comercios activos netos | MRR comercios | MRR delivery co. | MRR total | Gastos/mes | Resultado/mes |
|-----------|------------------------|---------------|-------------------|-----------|-----------|---------------|
| Q1 (mes 13-15) | 15-18 | $375-450 | $60 | $435-510 | $900 | -$390 a -$450 |
| Q2 (mes 16-18) | 22-28 | $550-700 | $90 | $640-790 | $1.000 | **-$210 a -$360** |
| Q3 (mes 19-21) | 30-38 | $750-950 | $90 | $840-1.040 | $1.100 | **-$60 a +$60** (break-even!) |
| Q4 (mes 22-24) | 35-45 | $875-1.125 | $120 | $995-1.245 | $1.200 | **-$205 a +$45** |

**Lectura:** en el escenario base, el break-even mensual se alcanza alrededor del **mes 19-21** (Q3 ano 2). Para fin del ano 2, el negocio genera ~$1.000-1.200/mes de ingreso contra ~$1.200 de gastos — practicamente auto-sostenible.

### 12.3 Proyeccion anual ano 2-3

| Metrica | Ano 1 (piloto) | Ano 2 (expansion Valencia) | Ano 3 (Valencia + Maracay) |
|---------|---------------|---------------------------|--------------------------|
| Comercios activos (fin de ano) | 10 | 35-45 | 80-120 |
| MRR fin de ano | $250 | $1.000-1.200 | $2.200-3.300 |
| Ingreso anual | ~$1.585 | ~$8.000-12.000 | ~$20.000-35.000 |
| Gastos anuales | ~$7.320 | ~$12.600 | ~$18.000-22.000 |
| Resultado anual | -$5.735 | -$600 a -$4.600 | +$2.000 a +$13.000 |
| Delivery companies | 0-1 | 2-3 | 4-6 |

### 12.4 Necesidad de capital adicional (segunda ronda?)

| Escenario | Capital ano 1 | Deficit restante ano 2 | Necesita segunda ronda? |
|-----------|--------------|----------------------|------------------------|
| Base (sin OOH) | $7.000-8.000 | $600-4.600 | **Posiblemente** — depende de velocidad de crecimiento |
| Optimista | $7.000-8.000 | $0 (auto-sostenible antes) | **No** |
| Con OOH | $14.000-15.000 | $0 (margen del capital cubre) | **No** |

**Mensaje al inversionista:** "Con $7.000-8.000 de inversion, el negocio llega al break-even mensual en el mes 19-21. Si el crecimiento es mas lento, podria necesitar $2.000-4.000 adicionales en ano 2, que se pueden cubrir con revenue propio si el churn es <10 %. Para ano 3, con expansion a Maracay, el negocio es rentable y genera $2.000-13.000/ano de beneficio neto."

### 12.5 Escenario de retorno para el inversionista

| Instrumento | Escenario base | Escenario optimista |
|-------------|---------------|-------------------|
| **Equity (15 %)** | Valor empresa ano 3: ~$50.000-100.000 (5-8x MRR anualizado). Valor de la participacion: $7.500-15.000 | Valor empresa: $100.000-200.000. Participacion: $15.000-30.000 |
| **Prestamo convertible** | Repago desde mes 20-24 a medida que hay cash flow positivo | Repago anticipado si hay excedente |
| **Revenue-based financing (5 % MRR)** | Repago en ~36-48 meses a $50-150/mes | Repago en ~24-30 meses |

> **Nota:** estos son escenarios ilustrativos. La valoracion real depende de multiples factores (traccion, mercado, equipo). Usar como referencia, no como compromiso.

### 12.6 Plan de exit y vias de liquidez (para quien pregunta "como recupero mi dinero")

| Via | Que es | Cuando tiene sentido | Comentario |
|-----|--------|---------------------|------------|
| **Adquisicion (M&A)** | Venta de la empresa o del activo operativo a competidor, agregador regional o fondo | Ano 3-5 con traccion multi-ciudad y MRR estable | Comun en food tech; requiere data room limpio y contratos B2B |
| **Recompra de acciones (buyback)** | La empresa o los founders compran las acciones del inversionista a un precio acordado | Si hay caja y el inversionista quiere salida parcial | Debe estar previsto en el acionario o acuerdo de socios (ver [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md)) |
| **Dividendos** | Reparto de utilidades segun participacion | Cuando haya utilidad fiscal y politica de reparto clara | En C.A. es viable; en etapa de crecimiento suele reinvertirse |
| **Venta de participacion a tercero** | El inversionista transfiere su paquete a otro inversionista o socio | En una ronda futura (serie seed local) | Liquidez parcial; requiere derecho de primera oferta / tag-along en estatutos |
| **Préstamo simple** | Devolucion de principal + interes segun cronograma | Si el instrumento fue deuda, no equity | Definir grace period y que pasa si hay mes de caja negativa (reestructuracion) |

**Valoracion pre-money orientativa (solo conversacion):** con **$7.000-8.000** por **10-15 %** equity, la pre-money implicita es del orden de **$47.000-73.000** — coherente con etapa pre-revenue y riesgo pais; debe cerrarse con asesoria y comparables locales, no con esta tabla sola.

**Qué NO prometer:** salida garantizada, multiplo fijo, ni fecha de compra de acciones sin contrato.
