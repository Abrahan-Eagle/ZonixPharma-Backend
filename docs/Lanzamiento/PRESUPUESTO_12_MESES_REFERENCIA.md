# Presupuesto 12 meses — referencia

> **Última actualización:** 11 junio 2026.
> Documento que detalla **línea por línea** los gastos durante 12 meses para los 3 escenarios.
> Las cifras están justificadas en [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md).
> Cifras en **USD constantes**, con buffer 20% ya aplicado al total para cubrir devaluación bolívar.

## 1. Resumen ejecutivo de los 3 escenarios

| Concepto | **Lean — mínimo viable (USD 101k)** | **Base — recomendado (USD 118k)** | **Growth — acelerado (USD 135k)** |
|---|---|---|---|
| Capital pedido | **101.000** | **118.000** | **135.000** |
| Runway | 12 meses post-Day-D | 12 meses post-Day-D | 12 meses post-Day-D |
| Burn promedio mensual | **~7.559** | **~8.059** | **~8.691** |
| One-shots (Fase 0) | **~9.808** | **~10.708** | **~10.708** |
| SAFE post-money cap (ref.) | **USD 600.000** | **USD 650.000** | **USD 720.000** |
| Diferencias clave | **Piso ejecutable:** HQ casa + **4 Sales** + **Co-CEO + founder + IA + 4 PCs** + Meta + valla pequeña (ver §2) | Lean + **valla mediana** + **asesor regulatorio** + Meta **800/mes todo el año** + **mayor reserva caja** | Base + **colchón runway** + material/contingencia ampliados + buffer **25%** en marketing |

> **Lectura tiers (mayo 2026):** **Lean** = mínimo viable **USD 101k**. **Base** = recomendado **USD 118k**. **Growth** = acelerado **USD 135k** (estrictamente mayor que Base). Escalera **101 < 118 < 135**.

> **Buffer inflación VE:** el **20%** (Lean/Base) o **25%** (Growth, líneas marketing) ya está **incorporado en el burn mensual** de cada escenario, no como fila adicional en esta tabla. Ver §6 para la metodología ponderada (30% costos en Bs / 10% en USD).

### 1.1 Delta vs Lean (sin tabla M1–M12 adicional)

Solo [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 tiene flujo **mes a mes** (**Lean**). Base y Growth usan la **misma curva de revenue** del caso central y suben **burn + reserva**:

| Delta vs **Lean 101k** | **Base +17k → 118k** | **Growth +34k → 135k** |
|---|---|---|
| Capital adicional | **+17.000** | **+34.000** |
| Valla | Pequeña **350** → mediana **700** (desde M2) | Igual Base |
| Meta Ads | **800/500** M1–6/M7–12 → **800** todo el año | Igual Base |
| Asesor regulatorio | **+120/mes** (no en Lean) | Igual Base |
| Reserva caja / runway | **~490** → **~10.590** | **~10.590** → **~20.000** |
| Burn prom. mensual | **~7.559** → **~8.059** | **~8.059** → **~8.691** |
| One-shots Fase 0 | **~9.808** → **~10.708** (+valla mediana) | **~10.708** (igual Base) |

> Equilibrio teórico con ARPF **~50**: Lean **~151** activas · Base **~162** · Growth **~174** ([README.md](README.md) — sin proyección mensual Base/Growth).

## 2. Escenario Lean — USD 101.000 (mínimo viable)

> **Rol del tier:** piso **honesto** para **Fase 0 (T+90)** + **12 meses** post-Day-D con **Co-CEO**, **4× Sales**, HQ casa, stack IA y valla pequeña. Tabla mes a mes en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.

### 2.1 Replante operativo (mayo 2026)

- **HQ tipo casa** USD **500/mes** (Bella Florida / San Diego — §6.1).
- **Valla pequeña 3m×2m:** **USD 350/mes desde mes 3**.
- **Coordinador de Partners Logísticos desde mes 1:** **USD 300/mes** (+100 si KPI).
- **Meta Ads:** **USD 800** meses 1–6 · **USD 500** meses 7–12 (prom. **~650**/mes).
- **4× Sales B2B** → línea **~USD 801/mes** de media.
- **Founder + Co-CEO:** **USD 1.000/mes** c/u; **IA ~USD 425/mes**; **CapEx 4 PCs ~3.700** en one-shots.

### 2.2 One-shots Lean (Fase 0)

| Concepto | USD |
|---|---|
| Bloque legal + demo + visitas + reservas primer mes (constitución, SAPI, brochures, tablets, etc.) | 4.458 |
| Depósito + amueblado HQ | 1.250 |
| Adecuación HQ | 400 |
| **CapEx 4 PCs** | **~3.700** |
| **One-shots Lean total** | **~9.808** |

### 2.3 Burn mensual recurrente Lean

| Concepto | USD/mes |
|---|---|
| Salarios (**4×Sales ~801** + CS+CM **350** + Marketing **400** + Coordinador **300**) | **1.851** |
| Founder + Co-CEO | **2.000** |
| Herramientas IA | **425** |
| Contador + Abogado | 330 |
| HQ casa | **500** |
| Servicios oficina + hosting/SaaS/Firebase Phone | 234 |
| Meta (800 M1–6 / 500 M7–12) | tramos |
| Valla pequeña (desde M3) | 350 · 0 M1–2 |
| Material + transporte + contingencia | 280 |

**Tramos con buffer 20%:**

| Tramo | Meses | Burn/mes (USD) |
|---|---|---|
| A — sin valla, Meta 800 | 1–2 | **7.462** |
| B — valla pequeña, Meta 800 | 3–6 | **7.798** |
| C — valla pequeña, Meta 500 | 7–12 | **7.431** |

**Promedio Lean:** **~7.559**/mes → **90.702** anual.

### 2.4 Total Lean 12 meses

| Concepto | USD |
|---|---|
| One-shots | **~9.808** |
| Burn 12 meses | **90.702** |
| Reserva imprevistos | **490** |
| **Total Lean** | **101.000** |

> **Puente con Fase 0 (use of funds):** esta tabla asigna el capital por **tipo de gasto** (one-shots + 12 meses de burn + reserva = 101.000). El **burn operativo de Fase 0** (~**18.249** = 28.057 − 9.808 one-shots, los ~3 meses pre-Day-D) es **gasto adicional en el tiempo** que se cubre con el flujo del año: la caja cierra en **~42.209** M12 porque el **revenue M1–M12** compensa ese tramo — ver cadena completa en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0.1 y §1.3 (101.000 − Fase 0 ~28.057 = Day-D ~72.943 → M12 ~42.209). No leer esta tabla como flujo de caja temporal.

## 3. Escenario Base — USD 118.000 (recomendado)

### 3.1 Cambios respecto a Lean

- **Valla mediana 6m×4m:** **USD 700/mes desde mes 2** (sustituye valla pequeña).
- **Asesor regulatorio farmacéutico:** **USD 120/mes** desde mes 1.
- **Meta Ads:** **USD 800/mes** todo el año (sin fase 500 en M7–12).
- **Reserva caja ampliada:** **~USD 10.590** vs **490** en Lean.
- **One-shots:** + depósito valla mediana **700** + bono asesor **200** → **~10.708**.

### 3.2 One-shots Base (Fase 0)

| Concepto | USD |
|---|---|
| Igual a Lean (§2.2) | **~9.808** |
| Depósito valla mediana 6m×4m | 700 |
| Bono firma asesor regulatorio | 200 |
| **One-shots Base total** | **~10.708** |

### 3.3 Burn mensual recurrente Base

Mismo núcleo **Lean §2.3**, más:

| Concepto | USD/mes |
|---|---|
| Asesor regulatorio | **120** |
| Valla mediana (desde M2) | **700** · **0** M1 |
| Meta | **800** (todo el año) |
| Material promocional | **120** |
| Contingencia | **120** |

**Tramos con buffer 20% (referencia):**

| Tramo | Meses | Burn/mes (USD) |
|---|---|---|
| A — sin valla mediana | 1 | **~7.606** |
| B — valla mediana + asesor | 2–12 | **~8.100** |

**Promedio Base:** **~8.059**/mes → **96.702** anual *(7.606 + 11 × 8.100 = 96.706 ≈ 96.702)*.

### 3.4 Total Base 12 meses

| Concepto | USD |
|---|---|
| One-shots | **~10.708** |
| Burn 12 meses | **96.702** |
| Reserva imprevistos / runway extra | **~10.590** |
| **Total Base** | **118.000** |

## 4. Escenario Growth — USD 135.000 (acelerado)

### 4.1 Cambios respecto a Base

- **Mismo núcleo operativo Base §3.2** (Co-CEO, IA, 4× Sales, HQ, asesor, valla mediana).
- **Material promocional:** **USD 150/mes**; **contingencia:** **USD 150/mes**.
- **Buffer 25%** sobre subset marketing (Meta + valla + material).
- **Reserva runway:** **~USD 20.000** (bridge, inflación, prep opcional 2ª ciudad).
- **Opcional (desde reserva):** CS part-time o radio local 1 mes piloto.

### 4.2 One-shots Growth (Fase 0)

| Concepto | USD |
|---|---|
| Igual a Base (§3.2) | **~10.708** |

### 4.3 Burn mensual recurrente Growth

| Concepto | Incremento vs Base |
|---|---|
| Material + contingencia ampliados | **+60/mes** prom. |
| Buffer marketing 25% | **~+50/mes** prom. |
| **Burn promedio anual** | **~8.691**/mes → **~104.292** anual |

### 4.4 Total Growth 12 meses

| Concepto | USD |
|---|---|
| One-shots | **~10.708** |
| Burn 12 meses | **~104.292** |
| Reserva imprevistos / runway extra | **~20.000** |
| **Total Growth** | **135.000** |

## 5. Comparativa lado a lado

| Línea | Lean (101k) | Base (118k) | Growth (135k) |
|---|---|---|---|
| **Capital pedido** | **101.000** | **118.000** | **135.000** |
| **Equipo + founder + Co-CEO + IA** | **~4.276** | **~4.276** | **~4.276** |
| **Externos (cont+abog+asesor)** | 330 | **450** | **450** |
| **Inmueble (HQ casa)** | **500** | **500** | **500** |
| **Marketing digital (Meta)** | **~650 prom.** | **800** | **800** |
| **Valla** | pequeña 350 (M3+) | mediana 700 (M2+) | mediana 700 (M2+) |
| **Material promocional** | 100 | 120 | **150** |
| **Contingencia** | 100 | 120 | **150** |
| **Reserva caja** | **490** | **~10.590** | **~20.000** |
| **Burn mensual (prom. año)** | **~7.559** | **~8.059** | **~8.691** |

## 6. Notas y supuestos críticos

- **Buffer 20%** está calculado de forma ponderada: 30% sobre costos en bolívares (oficina, servicios, transporte, limpieza) y 10% sobre costos en USD (hosting, SaaS, marketing digital, salarios). Esto refleja que la inflación bolívar duele más que la USD.
- **Inflación VE 2026:** el **BCV (mayo 2026)** anticipa **desaceleración** con inflación mensual **de un dígito desde mayo 2026** (tras ene-abr con tasas mensuales aún altas). El rango **387-618%** (Anova / Cendas / Ecoanalítica) se usa como **escenario adverso / stress**, no como única proyección. El buffer 20% absorbe variaciones de hasta ±25% en precios bolívar.
- **Herramientas IA (suscriptores):** ver **§6.1** (Cursor Ultra + Claude Max + Seedance 2.0; sin Gemini/Runway/Midjourney en stack acordado). El coste **API en producto** (chat en app) sigue siendo partida distinta si se activa roadmap — **provisionar** aparte.
- **Si devaluación supera 100% trimestral:** plan de contingencia activado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). Cortes prioritarios: valla publicitaria → **reducir spend Meta** (mantener remarketing mínimo) → 1 hire.
- **Salarios en USD:** todos los pagos al equipo se hacen en USD (Pago Móvil C2P en bolívares al cambio del día, Zelle, Binance Pay USDT). Esto protege al equipo y simplifica conciliación.
- **Founder:** **USD 1.000/mes** en Lean, Base y Growth (desde T+0 en modelo integrado).
- **Co-CEO / CEO operativo:** **USD 1.000/mes** fijo en los tres tiers (rótulo operativo — SAFE según abogado).
- **Asesor regulatorio:** solo **Base** y **Growth** (**USD 120/mes**); Lean sin esta línea.

### 6.1 Supuesto operativo HQ, equipos fijos y stack IA (decisiones founder — mayo 2026)

Este bloque **detalla** HQ, PCs y stack IA **integrados en Lean (101k)** §2 y en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1. Base y Growth **heredan** el mismo núcleo operativo.

#### Equipo de cómputo en sede (**4 PCs** — dotación acordada año 1)

| Estación | Rol | Perfil |
|----------|-----|--------|
| **PC 1** | Recepción / cobros (POS, comprobantes, impresión) | PC **oficina estándar** (SSD, 16 GB RAM, Windows). |
| **PC 2** | Administración del sistema + **llamadas** + CRM / tickets | PC **oficina estándar** (mismo orden que PC 1 o ligeramente superior si multitarea). |
| **PC 3** | **Programador** (CEO+CTO) — la más potente | **Estación de trabajo**: CPU fuerte, **≥32 GB RAM**, SSD NVMe amplio; GPU según compilación local Flutter/Android. |
| **PC 4** | **Puesto flexible** en HQ (p. ej. Sales cuando pasa por oficina, Marketing en día de creativos, o backup si recepción y admin coinciden a la vez) | PC **oficina estándar** o **mini PC** / laptop económica (mismo rango que PC 1–2). |

**Política de dotación:** **4 estaciones fijas** desde el despliegue del HQ evita colisión entre recepción, admin y visitas internas. **4× Sales** priorizan **tablet/laptop en campo** (one-shots §2.1); la **PC 4** cubre **presencia en sede** y picos de uso sin compartir la estación de desarrollo.

**CapEx one-shot (orden de magnitud, cotizar en proveedor local):**

| Partida | USD (referencia) |
|---------|------------------|
| PC recepción (oficina) | **500–750** |
| PC admin / llamadas (oficina) | **500–750** |
| PC desarrollo (potente) | **1.400–2.200** |
| PC 4 (oficina / mini PC / laptop económica) | **550–750** |
| **Total 4 PCs** | **~2.950–4.450** |

**Vehículo:** **sin compra** de pick-up/SUV en este presupuesto; movilidad B2B con transporte/terceros y líneas de transporte ya modeladas.

#### Stack IA suscrito (mensual)

| Herramienta | Uso | Plan / decisión | USD/mes |
|---------------|-----|-------------------|---------|
| **Claude** | Redacción, diseño en texto, razonamiento, apoyo a código fuera del IDE | **Max (~200)** | **200** |
| **Cursor** | IDE + asistente de programación | **Ultra** | **200** |
| **Seedance 2.0** | Generación de **video** | Suscripción según plan contratado | **~25** *(ancla conservadora hasta fijar tier en checkout)* |
| **Gemini** | — | No usado por ahora | **0** |

**Total referencia IA (Cursor + Claude + Seedance ancla):** **~425 USD/mes**. Imagen / creativos estáticos vía **Claude** (sin Midjourney en este stack). **Runway** no forma parte del stack acordado.

Fuentes de precio público: [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md) §11A.

#### Personnel e inmueble (decisiones asociadas al mismo replante)

| Concepto | Valor objetivo | Notas |
|----------|----------------|--------|
| Sueldo **CEO+CTO** (founder) | **USD 1.000/mes** | Lean, Base y Growth. |
| Sueldo **Co-CEO / CEO operativo** | **USD 1.000/mes** | Incluido en **Lean 101k** y tiers superiores. |
| **HQ** | **Casa en alquiler USD 500/mes** | San Diego / Av. Bolívar Norte — todos los tiers. |
| Marketing Lead + apoyo a dirección | **400** + **100** bonus si KPI | Dirección general cubierta por **Co-CEO**. |
| Coordinador de Partners Logísticos | **300** + **100** si KPI (→400) | Enlace con **empresa(s) concesionaria(s)** de última milla; Zonix **no** opera flota propia |
| Customer Support + Community Manager | **350** + **50** si KPI (→400) | |

## 7. Documentos hermanos

- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): traducción mes a mes en flujo de caja.
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md): cómo el revenue compensa este burn.
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md): URLs y precios públicos que sostienen cada cifra.
- [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md): justificación de la valla publicitaria y radio.
