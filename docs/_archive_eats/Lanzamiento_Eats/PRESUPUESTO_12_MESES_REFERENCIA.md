# Presupuesto referencial — 12 meses (piloto Zonix Eats)

> **Qué es esto:** modelo numérico para **discusión interna y pitch**, armado con **precios públicos en internet** (abr. 2026) más **supuestos** explícitos donde no hay tarifa única (ops, legal, intensidad de pauta).  
> **No** reemplaza contabilidad ni cotizaciones de proveedores venezolanos.  
> **Documentos relacionados:** [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md), [SUPUESTO_MARKETING_OOH.md](SUPUESTO_MARKETING_OOH.md), [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).

---

## 1. Supuestos generales

| Supuesto | Valor usado | Nota |
|----------|-------------|------|
| Horizonte | **12 meses** | Alinear con runway pedido al inversionista. |
| Tipo de cambio EUR→USD | **~1,10** (orden de magnitud) | Solo para convertir precio Hetzner en €; revisar el día del pago. |
| Pauta Meta | **150 USD/mes** (escenario “prueba”) | ~**5 USD/día** × 30; los mínimos reales dependen del objetivo de campaña — ver §5. |
| OOH | **3 meses** de arriendo valla Valencia + **48 m²** de lona (ejemplo) | Arriendo [Vallas Venezuela](https://vallasvenezuela.com/precio-vallas-publicitarias/): desde **~1.500 USD/mes** en Valencia; producción/instalación **~25 USD/m²** c/u. |
| Ops local | **250 USD/mes** × 12 | **Estimación de planificación** (coordinación, no salario mínimo oficial). No hay tabla pública única. |
| Legal / constitución | **800 USD** una vez | **Placeholder** hasta presupuesto de abogado en Venezuela. |

### 1.1 Inflación, devaluación (VES) y colchón

El modelo se expresa en **USD** para estabilidad de planificación; en Venezuela muchos gastos locales (transporte captación, impresión, parte de ops) se pagan en **bolívares** al tipo del día.

| Riesgo | Supuesto de planificación | Mitigación |
|--------|---------------------------|------------|
| Devaluación del bolívar vs USD | **+20-35 % anual** de presión sobre partidas en VES (orden de magnitud; no es predicción) | Revisar mensualmente el equivalente en VES de $80/mes captación y $250/mes ops |
| Costos fijos en USD (VPS, Meta, Apple) | Relativamente estables en USD | Pagar con tarjeta/usd cuando sea posible |
| Colchón recomendado | **+10-15 %** sobre el total anual ya previsto (contingencia en §5) | Si la devaluación supera el supuesto, recortar OOH o pauta antes que ops |

**Regla práctica:** si el tipo se mueve fuerte en un trimestre, **priorizar** gastos que generan ingresos (captación, demanda buyer) sobre marketing de imagen (valla).

---

## 2. Infraestructura y producto (datos con fuente)

| Concepto | Referencia web | Cálculo 12 meses (USD) |
|----------|----------------|-------------------------|
| **VPS “lean” — Hetzner CX22** | [Comunicado Hetzner](https://www.hetzner.com/pressroom/new-cx-plans/): **3,79 €/mes** (2 vCPU, 4 GiB, 40 GiB); precios sin IVA. | 3,79 × 1,10 ≈ **4,17 USD/mes** → **~50 USD/año** |
| **VPS “estándar” — DigitalOcean Basic 2 GiB** | [Precios Droplets](https://www.digitalocean.com/pricing/droplets): **12 USD/mes** (2 GiB / 1 vCPU). | **144 USD/año** |
| **Laravel Forge — plan Hobby** | [forge.laravel.com/pricing](https://forge.laravel.com/pricing): **12 USD/mes** (o **120 USD/año** si se paga anual). | **144 USD/año** si mensual |
| **Sentry — plan Team** | [sentry.io/pricing](https://sentry.io/pricing): **26 USD/mes** (plan Team; hay plan **Developer gratis**). | **312 USD/año** si Team; **0** si solo Developer |
| **Dominio .com (at-cost)** | [Cloudflare Registrar](https://www.cloudflare.com/products/registrar/) — precio = registro + ICANN; orden de magnitud **~10–11 USD/año** (ver [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md)). | **11 USD/año** |
| **Google Play Console** | Tarifa única de registro **25 USD** (referencia habitual en documentación de desarrolladores; ver p. ej. resúmenes en [SplitMetrics](https://splitmetrics.com/blog/google-play-apple-app-store-fees/)). | **25 USD** (año 1, único) |
| **Apple Developer Program** | [Apple Developer](https://developer.apple.com/support/compare-memberships/): **99 USD/año** por programa estándar. | **99 USD/año** |

---

## 3. Marketing digital (Meta)

| Concepto | Referencia | Cálculo 12 meses |
|----------|------------|------------------|
| Pauta “prueba continua” | Artículos de agencias citan mínimos prácticos de unos **5 USD/día** para ciertos objetivos (p. ej. [Stackmatix](https://www.stackmatix.com/blog/facebook-ads-minimum-budget-requirements)); la ayuda de Meta define presupuesto diario como promedio — [Ayuda Meta](https://es-la.facebook.com/business/help/214319341922580). | **150 USD/mes** × 12 = **1.800 USD/año** |
| Pauta “intensidad media” (opcional) | Supuesto interno | **400 USD/mes** × 12 = **4.800 USD/año** |

---

## 4. OOH (Valencia / Carabobo)

Basado en [Vallas Venezuela — guía de precios](https://vallasvenezuela.com/precio-vallas-publicitarias/):

| Concepto | Cálculo ejemplo | Subtotal (USD) |
|----------|-----------------|----------------|
| Arriendo 3 meses (Valencia desde ~1.500/mes) | 1.500 × 3 | **4.500** |
| Producción lona (~25 USD/m²) | 48 m² × 25 | **1.200** |
| Instalación + desmontaje (~25 USD/m²) | 48 m² × 25 | **1.200** |
| **Subtotal campaña OOH ejemplo** | | **6.900** |

Ajustar m² y meses según cotización real. Mínimo autobuses (misma guía): **5 unidades** en zona centro; arriendo desde **~300 USD/unidad** + producción **~300 USD/unidad**.

---

## 5. Escenarios anuales (totales orientativos)

### Escenario A — **Lean (coste fijo producto bajo)**

- VPS Hetzner CX22 (~50 USD/año) + dominio (11) + Sentry **Developer (0)** + sin Forge (deploy manual) + tiendas (25 + 99)  
- Pauta **150 USD/mes** (1.800)  
- OOH ejemplo (6.900)  
- Ops **250 USD/mes** (3.000)  
- Legal placeholder (800)

| Bloque | USD/año |
|--------|---------|
| Infra + dominio + errores (free) + tiendas | ~185 |
| Pauta (150/mes) | 1.800 |
| OOH (ejemplo §4) | 6.900 |
| Ops (250/mes) | 3.000 |
| Legal (una vez) | 800 |
| **Subtotal** | **~12.685** |
| Contingencia **15 %** | ~1.903 |
| **Total orientativo A** | **~14.588** |

### Escenario B — **Estándar (DO + Forge + Sentry Team)**

- DigitalOcean 12 USD/mes (144) + Forge 12 USD/mes (144) + Sentry Team 26 USD/mes (312) + dominio (11) + tiendas (124)  
- Misma pauta 150/mes, mismo OOH ejemplo, ops y legal.

| Bloque | USD/año |
|--------|---------|
| DO + Forge + Sentry Team + dominio + tiendas | **735** |
| Pauta | 1.800 |
| OOH ejemplo | 6.900 |
| Ops | 3.000 |
| Legal | 800 |
| **Subtotal** | **13.235** |
| Contingencia 15 % | ~1.985 |
| **Total orientativo B** | **~15.220** |

### Variante — pauta media (4.800 USD/año en lugar de 1.800)

Sumar **+3.000 USD** al subtotal de cualquier escenario (antes de contingencia).

---

## 6. Variantes: sin valla (OOH) y horizonte 6 meses

### 6.1 Doce meses — **sin OOH** (misma pauta 150/mes y ops 250/mes)

Se elimina el bloque §4 (6.900 USD). Legal y tiendas se mantienen.

| Escenario | Subtotal (USD) | Contingencia 15 % | **Total orientativo** |
|-----------|----------------|-------------------|------------------------|
| **A (lean)** | 12.685 − 6.900 = **5.785** | ~868 | **~6.653** |
| **B (estándar)** | 13.235 − 6.900 = **6.335** | ~950 | **~7.285** |

Priorizar **volantes, WhatsApp, pauta hiperlocal** en barrio piloto; revisar [SUPUESTO_MARKETING_OOH.md](SUPUESTO_MARKETING_OOH.md) para alternativas de bajo ticket.

### 6.2 Seis meses — **sin OOH** (runway recortado; recurrente × 6)

**Supuestos:** pauta **150 USD/mes × 6 = 900**; ops **250 USD/mes × 6 = 1.500**; legal **800** una vez; **dominio 11 USD** como coste anual prorrateable (se cuenta entero si se paga el año); tiendas **25 + 99** en el periodo (registro Google + membresía Apple anual); **sin** campaña valla.

**Infra 6 meses:** Hetzner ~**25 USD** (mitad de ~50 USD/año); **A (lean)** sin Forge/Sentry de pago. **B (estándar):** (12+12+26) USD/mes × 6 = **300 USD** (DO + Forge + Sentry Team).

| Escenario | Cálculo subtotal | Subtotal | Contingencia 15 % | **Total** |
|-----------|------------------|----------|-------------------|-----------|
| **A (lean)** | 25 + 11 + 124 + 900 + 1.500 + 800 | **3.360** | ~504 | **~3.864** |
| **B (estándar)** | 300 + 11 + 124 + 900 + 1.500 + 800 | **3.635** | ~545 | **~4.180** |

**Nota:** la membresía **Apple (99 USD/año)** suele cobrarse como año completo aunque el plan sea 6 meses; si se excluye iOS del piloto inicial, ajustar esa línea a **0** y recalcular.

### 6.3 (Opcional) Seis meses **con** OOH parcial

Si en el semestre solo cabe **parte** de la campaña §4 (p. ej. 1 mes de arriendo + menos m²), sustituir **6.900** por la suma cotizada; el resto de la lógica es igual a §6.2.

---

## 7. Captación comercial (línea de gasto nueva)

Los escenarios anteriores no incluyen el costo de captación de comercios. Se agrega como línea explícita:

| Componente | Costo unitario | Mensual | 12 meses |
|-----------|---------------|---------|----------|
| Transporte captador (moto/bus) | ~$40/mes | $40 | $480 |
| Material impreso (volantes, tarjetas, stickers QR) | ~$30/mes | $30 | $360 |
| Datos móviles captador | ~$10/mes | $10 | $120 |
| **Total captación** | | **$80/mes** | **$960/año** |

**Impacto en totales:** sumar ~$960 a los subtotales anuales y ~$480 a los de 6 meses. No cambia el orden de magnitud pero es necesario para transparencia con el inversionista.

---

## 7.1 Costos operativos adicionales (identificados en analisis forense)

Estas lineas no estaban en el presupuesto original pero son necesarias para operar:

| Componente | Mensual (USD) | 12 meses (USD) | Nota |
|-----------|--------------|----------------|------|
| Software facturacion SENIAT | $50 | $600 | Obligatorio para facturar membresias B2B |
| Internet / electricidad founder | $30 | $360 | Prorrateo uso dedicado al proyecto |
| Telefono / WhatsApp Business soporte | $10 | $120 | Linea de soporte al buyer |
| Incentivos buyer (delivery gratis 1er pedido) | $15-25 | $180-300 | Ver [PROPUESTA_VALOR_COMPRADOR.md](PROPUESTA_VALOR_COMPRADOR.md) seccion 5 |
| **Total adicional** | **$105-115** | **$1.260-1.380** | |

**Impacto en totales:** los costos fijos mensuales operativos reales son:
- **Lean:** $562 (base) + $105 (adicionales) = **$667/mes** ($8.004/ano)
- **Estandar:** $610 (base) + $115 (adicionales) = **$725/mes** ($8.700/ano)

Ver [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) seccion 6.1 para el desglose completo y el break-even actualizado (27 comercios @$25/mes lean).

---

## 8. Ingresos proyectados (resumen)

Detalle completo en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). Aquí el cruce gastos vs ingresos por escenario.

### 8.1 Escenario base ($25/mes, 10 comercios mes 12, 1 delivery co. desde mes 6)

| Concepto | 12 meses |
|----------|---------|
| **Gastos totales** (estándar + captación) | ~$8.280 |
| **Ingresos acumulados** | ~$1.585 |
| **Déficit año 1** | ~$6.695 |
| **MRR mes 12** | ~$255 |
| **% de costos cubierto mes 12** | ~42 % |

### 8.2 Tabla cruce por escenario

| Escenario | Gastos/año | Ingresos/año | Déficit | Break-even mensual |
|-----------|-----------|-------------|---------|-------------------|
| Conservador (lean, 6 comercios) | ~$7.700 | ~$820 | ~$6.880 | Mes 24–30 |
| **Base (estándar, 10 comercios)** | ~$8.280 | ~$1.585 | ~$6.695 | **Mes 18–22** |
| Optimista (estándar, 18 comercios) | ~$8.280 | ~$2.660 | ~$5.620 | Mes 14–16 |

**Conclusión:** el año 1 no es rentable en ningún escenario. Esto es esperado y el capital del inversionista cubre el gap. El valor del año 1 es **validación** (product-market fit, churn estable, base para escalar).

---

## 9. Cómo presentarlo al inversionista

1. Declarar que **OOH y ops** dominan el orden de magnitud cuando hay valla; **sin OOH**, el total 12 meses baja a **~6,7–7,3 kUSD** (A/B). **6 meses sin OOH** queda en **~3,9–4,2 kUSD** con los mismos supuestos de pauta/ops.
2. Separar **gasto recurrente** (VPS, pauta, ops, captación) de **one-shot** (legal, producción lona, registro Google).
3. Mostrar **ingresos proyectados** junto a gastos (§8) para que el inversionista vea el camino a break-even.
4. Sustituir **placeholders** (ops, legal) por cotización o acuerdo escrito en cuanto existan.
5. Actualizar precios desde las URLs de §2 antes de la reunión.

---

**Última actualización:** abril 2026 (revisar tipos de cambio y listas de precios de proveedores).
