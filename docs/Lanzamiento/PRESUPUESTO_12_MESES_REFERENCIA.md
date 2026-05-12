# Presupuesto 12 meses — referencia

> **Última actualización:** 11 mayo 2026.
> Documento que detalla **línea por línea** los gastos durante 12 meses para los 3 escenarios.
> Las cifras están justificadas en [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md).
> Cifras en **USD constantes**, con buffer 20% ya aplicado al total para cubrir devaluación bolívar.

## 1. Resumen ejecutivo de los 3 escenarios

| Concepto | Lean (USD 60k) | **Base (USD 101k)** | Growth (USD 90k) |
|---|---|---|---|
| Capital pedido | 60.000 | **101.000** | 90.000 |
| Runway | 12 meses | 12 meses | 12 meses |
| Burn promedio mensual | 3.636 | **~7.559** | ~5.611 *(Growth: revisar al alinear con mismo replante HQ)* |
| One-shots mes 1 | 4.458 | **~9.808** | **~10.708** |
| Diferencias clave | Sin valla, sin Delivery Ops mes 1, coworking | **Meta Ads priorizado** + valla + **4 Sales** + **HQ casa** + **Co-CEO + founder + IA + 4 PCs** (ver §3.1 / §6.1) | Valla mediana + asesor regulatorio + más digital |

> **Lectura Growth §1 vs §4:** el **~10.708** one-shots mes 1 es el total de **§4.2** (bloque Base §3.2 **~9.808** + depósito valla mediana + bono asesor). La fila anterior **7.604** era residual del modelo antiguo y **no** coincide con el cierre **USD 90.000** del escenario Growth.

> **Buffer inflación VE:** el **20%** (Lean/Base) o **25%** (Growth) ya está **incorporado en el burn mensual** de cada escenario (líneas “Buffer” dentro de §2.2, §3.3 y §4.3), no como fila adicional en esta tabla resumen. Ver §6 para la metodología ponderada (30% costos en Bs / 10% en USD en Base).

## 2. Escenario Lean — USD 60.000

### 2.1 One-shots (mes 1)

| Concepto | USD |
|---|---|
| Constitución legal C.A. (registro mercantil + RIF + actas) | 800 |
| SAPI (registro de marca Zonix Pharma) | 350 |
| Diseño + impresión brochures + tarjetas | 200 |
| Equipo de oficina inicial (3 escritorios + 3 sillas + 1 archivador, IKEA local o equivalente) | 600 |
| Materiales operativos iniciales (uniformes 6 personas, papelería, caja chica inicial) | 400 |
| Onboarding técnico (servidor producción + dominio + email corp + SSL) | 304 |
| Material de demo (2 tablets para Sales B2B presencial) | 800 |
| Visitas iniciales mes 0 (transporte + inventario farmacias prospecto) | 200 |
| Reservas Customer Support / Sales primer mes | 800 |
| **One-shots total** | **4.458** |

### 2.2 Burn mensual recurrente Lean

| Concepto | USD/mes | Notas |
|---|---|---|
| Sales B2B (USD 120 fijo + 5 farmacias×USD 30 promedio) | 270 | |
| Customer Support | 300 | |
| Marketing Lead (Lean; sin Co-CEO en escenario) | 500 | |
| Delivery Ops Coordinator (enlace con partner última milla; ver §3.1 Base) | 0 mes 1, 400 desde mes 2 | Promedio sobre 12 meses: 367 |
| Contador externo freelance | 130 | |
| Abogado externo freelance | 200 | |
| Founder (sin sueldo en Lean) | 0 | El founder no cobra salario en Lean. |
| Coworking básico Bella Florida o San Diego | 100 | [Coworking VE 2025](https://www.creandocoworking.com.ve/) USD 80-150/mes |
| Internet fibra óptica (Inter, NetUno o Movistar) | 35 | [Inter VE 2025](https://www.inter.com.ve/) plan empresa |
| Electricidad oficina | 25 | Estimado 200 kWh/mes a tarifa industrial pequeña VE 2026 |
| Servicio de agua + aseo | 10 | |
| Telefonía móvil corp (3 líneas) | 30 | Plan corporativo Movistar / Digitel |
| Hosting DigitalOcean (App Platform Basic + DB) | 25 | [DigitalOcean Pricing](https://www.digitalocean.com/pricing) Basic |
| Pusher Channels | 49 | [Pusher Channels Pricing](https://pusher.com/pricing) Startup tier |
| Firebase FCM | 0 | Spark plan (gratis) suficiente para 10k MAU |
| Google Maps API | 0-15 | Free tier USD 200 al mes; uso real al inicio cubierto por free tier |
| YCloud WhatsApp OTP | 30 | Free tier para volúmenes bajos; estimado 1.000 OTP/mes a USD 0,03 |
| Email transaccional (SendGrid Free) | 0 | Free tier 100/día suficiente para piloto |
| SaaS herramientas (Notion, Slack Free, GitHub Pro) | 30 | |
| Marketing digital (Meta + Google Ads geo-targeted) | 350 | CPL VE USD 0,15-0,60. 600-2.300 leads/mes |
| Material promocional impreso (flyers, banners punto de venta) | 50 | |
| Limpieza + aseo coworking | 0 | Incluido en coworking |
| Caja chica oficina (agua, café, papel, etc.) | 50 | |
| Transporte local equipo (visitas farmacias) | 80 | Combustible + estacionamiento |
| Contingencia operativa | 50 | |
| **Burn mensual base** | **2.854** | |
| **Buffer 20%** | **571** | |
| **Burn mensual con buffer** | **3.425** | |
| **Burn promedio sobre 12 meses (incluyendo Delivery Ops desde mes 2)** | **3.636** | |

> **Metodología 3.425 vs 3.636 (Lean):** **3.425** = **2.854** burn mensual base + **571** buffer **20%** (instantáneo sobre el desglose §2.2 con **Delivery Ops = 0** en el mes de referencia de esa fila). **3.636** es el **promedio anual** sobre 12 meses: incorpora **Delivery Ops** escalonado (**0** mes 1 → **400** meses 2–12; **promedio 367**/mes en esa línea sobre el año) y el **buffer 20%** aplicado **mes a mes** al subtotal de líneas de ese mes — por eso el promedio con buffer sube respecto a la fila instantánea **3.425**.
>
> **Fórmula explícita (auditable):** sea **B_t** la suma de las líneas USD/mes de §2.2 en el mes **t** (con **Delivery Ops = 0** si **t = 1** y **= 400** si **t ≥ 2**). Entonces **burn con buffer del mes t** = **1,20 × B_t** (buffer **20%** sobre el subtotal de ese mes). **Burn promedio anual Lean** = **(1/12) × Σ_{t=1..12} (1,20 × B_t) ≈ 3.636** (redondeo al entero del pack). La fila **«Burn mensual base 2.854»** es la **instantánea** del desglose **con Delivery Ops en 0**; **no** sustituye por sí sola el promedio **3.636** cuando Delivery sube a **400** desde el mes 2.

### 2.3 Total Lean 12 meses

| Concepto | USD |
|---|---|
| One-shots | 4.458 |
| Burn 12 meses (3.636 × 12) | 43.632 |
| Buffer adicional (5% sobre el total) | 2.405 |
| **Reservado para imprevistos** | **9.505** |
| **Total Lean** | **60.000** |

## 3. Escenario Base — USD 101.000 (recomendado; incluye Co-CEO)

### 3.1 Cambios respecto a Lean

- **Coworking → HQ tipo casa en alquiler (Bella Florida / San Diego):** USD 100 → **USD 500/mes** (detalle §6.1).
- **Valla publicitaria pequeña 3m×2m en av. Bolívar Norte:** **USD 350/mes desde mes 3** (refuerzo offline; **no** sustituye a Meta).
- **Delivery Ops Coordinator desde mes 1:** **USD 300/mes** (+**100** si KPI → 400) — **enlace operativo** con **empresa(s) concesionaria(s)** de última milla (SLA, zonas, incidencias); **Zonix Pharma no opera flota propia** ni emplea repartidores de campo como columna vertebral del modelo.
- **Marketing digital (Meta Ads — canal principal awareness):** **USD 800/mes en meses 1–6** y **USD 500/mes en meses 7–12** (promedio **~USD 650/mes** sobre el año; ver §3.3).
- **Sales B2B:** **4 ejecutivos** — USD **120** fijo c/u + **USD 30**/firma; comisiones modeladas con ~**10,7** firmas/mes **en total** entre los 4 reps (misma curva de firmas que [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1) → línea Sales **~USD 801/mes** de media (**USD 480** fijos + **~USD 321** comisiones a **~10,7** firmas/mes). El **CAC oficial** en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §3 usa supuesto **conservador** de **~8** firmas/mes en cruise (prorrateo fijo **4×** **USD 480**/mes). Modelo previo **2×** Sales: línea **~USD 560**/mes — retirado del Base vigente.
- **Customer Support + Community Manager:** **USD 350/mes** (+**50** si KPI → 400).
- **Marketing Lead + apoyo a dirección** (sin rótulo “CEO interino”; dirección general la cubre el **Co-CEO**): **USD 400/mes** (+**100** bonus si KPI).
- **Founder CEO+CTO:** **USD 1.000/mes** (sueldo desde modelo integrado).
- **Co-CEO / CEO operativo (segundo al mando; comercial / operación / corporate):** **USD 1.000/mes** fijo — suma **~12.000 USD/año** al burn recurrente vs. modelo **USD 95k** previo; el ticket **Base** pasa a **USD 101.000** para mantener colchón de caja coherente con [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3.
- **Herramientas IA:** **Claude Max + Cursor Ultra + Seedance 2.0** → **~USD 425/mes** (ver §6.1 y [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md) §11A).
- **Equipamiento HQ:** **4 PCs** (CapEx one-shot referencia **~3.700 USD** punto medio del rango §6.1) incorporado en §3.2.
- **Material promocional subido:** USD 50 → **USD 100/mes**.

### 3.2 One-shots Base (mes 1)

| Concepto | USD |
|---|---|
| Igual a Lean | 4.458 |
| Depósito + comisión + amueblado HQ (3 meses adelantados, 1 depósito) | 1.250 |
| Adecuación HQ (pintura, instalación equipos, conectividad) | 400 |
| **CapEx 4 PCs** (recepción, admin/llamadas, dev, puesto flexible — §6.1) | **~3.700** *(punto medio rango 2.950–4.450; cotizar)* |
| **One-shots Base total** | **~9.808** |

### 3.3 Burn mensual recurrente Base

**Desglose “sin buffer”** (USD/mes; la línea Marketing digital es **por tramo**, no constante):

| Concepto | USD/mes |
|---|---|
| Salarios equipo (**4×Sales ~801** + CS+CM **350** + Marketing **400** + Delivery Ops **300**) | **1.851** |
| Founder CEO+CTO | **1.000** |
| Co-CEO / CEO operativo (segundo al mando) | **1.000** |
| Herramientas IA (Claude Max + Cursor Ultra + Seedance ~25) | **425** |
| Contador + Abogado externos | 330 |
| HQ casa (alquiler; condominio si aplica) | **500** |
| Internet + electricidad + agua + telefonía | 100 |
| Hosting DigitalOcean + Pusher + APIs + SaaS | 134 |
| Marketing digital (**Meta**; meses 1–6: **800** · meses 7–12: **500**) | ver tramos ↓ |
| Valla publicitaria 3m×2m (desde mes 3) | 350 · **0** en mes 1–2 |
| Material promocional impreso | 100 |
| Limpieza oficina + caja chica | 80 |
| Transporte local equipo | 100 |
| Contingencia operativa | 100 |

**Tramos de burn “todo incluido” (base + buffer):** misma metodología §6; incluye **Co-CEO USD 1.000/mes** (+**1.000** vs. tramos del modelo **95k** sin segundo al mando).

| Tramo | Meses | Burn mensual con buffer (USD) | Comentario |
|---|---|---|---|
| A — sin valla, Meta **800** | 1–2 | **7.462** | Sin contrato valla aún; incluye Co-CEO + **4×** Sales |
| B — con valla, Meta **800** | 3–6 | **7.798** | Valla + digital fase alta |
| C — con valla, Meta **500** | 7–12 | **7.431** | Digital fase sostenimiento |

**Referencias de burn mensual base (sin buffer), alineadas a los tramos:**

| Tramo | Base (USD/mes) |
|---|---|
| A | 6.519 |
| B | 6.869 |
| C | 6.569 |

**Promedios Base:** burn mensual base ponderado **~6.661**; buffer ponderado **~898**; **burn con buffer promedio anual ~7.559** (total año **~90.702**).

**Nota comercial:** el Base vigente **ya** incluye **4×** Sales. Reducir a **2×** baja burn **~USD 240**/mes pero exige recalcular **curva de firmas**, **CAC** y **PROYECCION §1.1**.

### 3.4 Total Base 12 meses

| Concepto | USD |
|---|---|
| One-shots | **~9.808** |
| Burn 12 meses (tramos A/B/C — ver §3.3) | **90.702** |
| Reserva imprevistos / runway extra | **+484** |
| **Total Base** | **101.000** |

> **Nota §3.4 (sin bono piloto ni subsidio delivery en burn):** se retiraron el **bono de bienvenida** one-shot (Lean **−USD 600**) y la partida recurrente **delivery fee subsidiado** (Lean **−USD 100**/mes con buffer; Base **−USD 150**/mes con buffer; Growth **−USD 200**/mes con buffer). El **burn** por tramo y la **caja** año 1 se recalculan en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1–§1.3. La fila **Reserva** pasa a **positiva** (**+USD 484**) para cuadrar el cheque **USD 101.000** con el nuevo desglose; FP&A puede reasignar ese colchón a marketing u otra línea si se desea mantener **reserva negativa** explícita en narrativa.

## 4. Escenario Growth — USD 90.000

### 4.1 Cambios respecto a Base

- **One-shots mes 1:** heredan el bloque **Base §3.2 (~9.808)** (sustituye el antiguo **6.704**). El **total USD 90k** Growth y la reserva §4.4 se ajustaron aritméticamente; **burn §4.3** sigue en el modelo Growth **previo** al replante salarial/IA — **FP&A** puede unificar Growth con las mismas líneas Base §3.3.
- **Valla publicitaria mediana 6m×4m:** USD 350 → **USD 700/mes desde mes 2**.
- **Asesor regulatorio farmacéutico externo (consultor):** **USD 120/mes** desde mes 1.
- **Marketing digital subido:** respecto al **promedio Base (~650/mes)**, Growth mantiene **USD 800/mes** plano (mayor agresividad vs. fase sostenimiento Base).
- **Salarios equipo (Growth §4.3):** partida modelada **~1.760/mes** + **founder** **USD 250/mes** desde mes 4 (promedio **167**). **Reconciliación:** el core operativo Base sin founder es **~1.851** (§3.3); la diferencia **~91** en Growth refleja supuestos del modelo **previo** a unificación FP&A. Growth **no** incluye aún **Co-CEO** ni stack **IA** del Base (ver §4.1 y fila comparativa §5).
- **Buffer ampliado a 25%** por mayor exposición.

### 4.2 One-shots Growth (mes 1)

| Concepto | USD |
|---|---|
| Igual a Base (§3.2) | **~9.808** |
| Depósito valla mediana 6m×4m (1 mes adelantado) | 700 |
| Bono firma asesor regulatorio | 200 |
| **One-shots Growth total** | **~10.708** |

### 4.3 Burn mensual recurrente Growth

| Concepto | USD/mes |
|---|---|
| Salarios equipo (modelo Growth; **no** incluye Co-CEO ni IA Base) | **1.760** |
| Founder USD 250/mes desde mes 4 | promedio 167 |
| Contador + Abogado | 330 |
| Asesor regulatorio farmacéutico | 120 |
| Oficina propia | 280 |
| Servicios (internet, luz, agua, telef) | 100 |
| Hosting + SaaS | 134 |
| Marketing digital | 800 |
| Valla publicitaria 6m×4m | 700 |
| Material promocional impreso | 150 |
| Limpieza + caja chica | 100 |
| Transporte local | 130 |
| Contingencia operativa | 130 |
| **Burn mensual base** | **4.901** |
| **Buffer 25%** | **1.225** |
| **Burn mensual con buffer (referencia mes “completo”; sin valla mes 1)** | **6.126** |
| **Burn promedio sobre 12 meses** | **~5.611** |

*El promedio anual incorpora el mismo tipo de variación mes a mes que Base (valla, fases). El **Base vigente** usa **4×** Sales §3.3; el burn Growth §4.3 puede diverger hasta FP&A unifique headcount — refinar tramos.*

### 4.4 Total Growth 12 meses

| Concepto | USD |
|---|---|
| One-shots | **~10.708** |
| Burn 12 meses (~5.611 × 12) | **~67.332** |
| Reserva imprevistos / runway extra | **~11.960** |
| **Total Growth** | **90.000** |

## 5. Comparativa lado a lado

| Línea | Lean | Base | Growth |
|---|---|---|---|
| **Equipo + founder + Co-CEO + IA** | 1.067 | **~4.276** *(1.851+1.000+1.000+425)* | **~1.927 \*** *(1.760 equipo Growth + 167 founder prom.; **sin** Co-CEO ni IA — ver §4.1)* |
| **Externos (cont+abog+asesor)** | 330 | 330 | 450 |
| **Inmueble** | 100 | **500** | 280 |
| **Servicios oficina** | 100 | 100 | 100 |
| **Hosting + SaaS** | 134 | 134 | 134 |
| **Marketing digital** | 350 | **~650 prom.** (800 M1–6 / 500 M7–12) | 800 |
| **Valla** | 0 | 350 (desde mes 3) | 700 (desde mes 2) |
| **Material promocional** | 50 | 100 | 150 |
| **Transporte + caja chica** | 180 | 280 | 360 |
| **Contingencia** | 50 | 100 | 130 |
| **Buffer (20-25%)** | 571 | **~898 prom.** | **~1.225** |
| **Burn mensual final (prom. año)** | **3.636** | **~7.559** | **~5.611** |

\* **Columna Growth (bloque equipo):** modelo **pre-replante** FP&A respecto al Base §3.3; **no** incluye **Co-CEO USD 1.000/mes** ni **stack IA ~USD 425/mes** — ver §4.1 y nota capital Growth vs Base en [README.md](README.md).

## 6. Notas y supuestos críticos

- **Buffer 20%** está calculado de forma ponderada: 30% sobre costos en bolívares (oficina, servicios, transporte, limpieza) y 10% sobre costos en USD (hosting, SaaS, marketing digital, salarios). Esto refleja que la inflación bolívar duele más que la USD.
- **Inflación VE 2026:** el **BCV (mayo 2026)** anticipa **desaceleración** con inflación mensual **de un dígito desde mayo 2026** (tras ene-abr con tasas mensuales aún altas). El rango **387-618%** (Anova / Cendas / Ecoanalítica) se usa como **escenario adverso / stress**, no como única proyección. El buffer 20% absorbe variaciones de hasta ±25% en precios bolívar.
- **Herramientas IA (suscriptores):** ver **§6.1** (Cursor Ultra + Claude Max + Seedance 2.0; sin Gemini/Runway/Midjourney en stack acordado). El coste **API en producto** (chat en app) sigue siendo partida distinta si se activa roadmap — **provisionar** aparte.
- **Si devaluación supera 100% trimestral:** plan de contingencia activado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). Cortes prioritarios: valla publicitaria → **reducir spend Meta** (mantener remarketing mínimo) → 1 hire.
- **Salarios en USD:** todos los pagos al equipo se hacen en USD (Pago Móvil C2P en bolívares al cambio del día, Zelle, Binance Pay USDT). Esto protege al equipo y simplifica conciliación.
- **Founder:**
  - Lean: USD 0 (financiamiento personal).
  - Base: **USD 1.000/mes** (modelo **USD 101k** integrado §3.3).
  - Growth: USD 250/mes desde mes 4 (después del piloto) — *revisar si se alinea a Base 1.000 o se mantiene escalonado*.
  - Política: cualquier sueldo founder debe documentarse y aprobarse contra cap table.
- **Co-CEO / CEO operativo (segundo al mando):** **USD 1.000/mes** fijo en Base (mismo orden de magnitud que founder; **rótulo operativo** — representante legal / junta y SAFE siguen dictamen abogado).

### 6.1 Supuesto operativo HQ, equipos fijos y stack IA (decisiones founder — mayo 2026)

Este bloque **detalla** HQ, PCs y stack IA ya **integrados** en el escenario **Base USD 101k** (§3) y en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1. **Escenario Growth** puede requerir el mismo replante en salarios/IA si se desea coherencia estricta (pendiente editorial).

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
| **Cursor** | IDE + agente / respaldo programación | **Ultra** | **200** |
| **Seedance 2.0** | Generación de **video** | Suscripción según plan contratado | **~25** *(ancla conservadora hasta fijar tier en checkout)* |
| **Gemini** | — | No usado por ahora | **0** |

**Total referencia IA (Cursor + Claude + Seedance ancla):** **~425 USD/mes**. Imagen / creativos estáticos vía **Claude** (sin Midjourney en este stack). **Runway** no forma parte del stack acordado.

Fuentes de precio público: [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md) §11A.

#### Personnel e inmueble (decisiones asociadas al mismo replante)

| Concepto | Valor objetivo | Notas |
|----------|----------------|--------|
| Sueldo **CEO+CTO** (founder) | **USD 1.000/mes** | Sustituye narrativa “0 en Base” cuando se recalibra el modelo. |
| Sueldo **Co-CEO / CEO operativo** (segundo al mando) | **USD 1.000/mes** | Comercial / operación / corporate; ticket Base **101k** incorpora **~12k/año** adicionales vs. modelo **95k** sin esta línea. |
| **HQ** | **Casa en alquiler USD 500/mes** | Sustituye línea oficina **280** del modelo tabular vigente. |
| Marketing Lead + apoyo a dirección | **400** + **100** bonus si KPI | Dirección general cubierta por **Co-CEO**; Marketing no usa rótulo “CEO interino”. |
| Delivery Ops | **300** + **100** si KPI (→400) | Enlace con **empresa(s) concesionaria(s)** de última milla; Zonix **no** opera flota propia |
| Customer Support + Community Manager | **350** + **50** si KPI (→400) | |

## 7. Documentos hermanos

- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): traducción mes a mes en flujo de caja.
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md): cómo el revenue compensa este burn.
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md): URLs y precios públicos que sostienen cada cifra.
- [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md): justificación de la valla publicitaria y radio.
