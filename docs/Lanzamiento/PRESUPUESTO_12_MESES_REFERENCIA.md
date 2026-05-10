# Presupuesto 12 meses — referencia

> **Última actualización:** 10 mayo 2026.
> Documento que detalla **línea por línea** los gastos durante 12 meses para los 3 escenarios.
> Las cifras están justificadas en [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md).
> Cifras en **USD constantes**, con buffer 20% ya aplicado al total para cubrir devaluación bolívar.

## 1. Resumen ejecutivo de los 3 escenarios

| Concepto | Lean (USD 60k) | **Base (USD 101k)** | Growth (USD 90k) |
|---|---|---|---|
| Capital pedido | 60.000 | **101.000** | 90.000 |
| Runway | 12 meses | 12 meses | 12 meses |
| Burn promedio mensual | 3.756 | **~7.499** | ~5.861 *(Growth: revisar al alinear con mismo replante HQ)* |
| One-shots mes 1 | 5.058 | **~10.408** | 7.604 |
| Diferencias clave | Sin valla, sin Delivery Ops mes 1, coworking | **Meta Ads priorizado** + valla + **2 Sales** + **HQ casa** + **Co-CEO + founder + IA + 4 PCs** (ver §3.1 / §6.1) | Valla mediana + asesor regulatorio + más digital |

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
| Bono de bienvenida primer mes para 5 farmacias piloto (delivery gratis 30 órdenes/farmacia) | 600 |
| Onboarding técnico (servidor producción + dominio + email corp + SSL) | 304 |
| Material de demo (2 tablets para Sales B2B presencial) | 800 |
| Visitas iniciales mes 0 (transporte + inventario farmacias prospecto) | 200 |
| Reservas Customer Support / Sales primer mes | 800 |
| **One-shots total** | **5.058** |

### 2.2 Burn mensual recurrente Lean

| Concepto | USD/mes | Notas |
|---|---|---|
| Sales B2B (USD 120 fijo + 5 farmacias×USD 30 promedio) | 270 | |
| Customer Support | 300 | |
| Marketing Lead (Lean; sin Co-CEO en escenario) | 500 | |
| Delivery Ops Coordinator | 0 mes 1, 400 desde mes 2 | Promedio sobre 12 meses: 367 |
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
| Delivery fee subsidiado primeras órdenes | 100 | Decreciente: USD 200 mes 1, USD 50 mes 6 |
| Limpieza + aseo coworking | 0 | Incluido en coworking |
| Caja chica oficina (agua, café, papel, etc.) | 50 | |
| Transporte local equipo (visitas farmacias) | 80 | Combustible + estacionamiento |
| Contingencia operativa | 50 | |
| **Burn mensual base** | **2.954** | |
| **Buffer 20%** | **591** | |
| **Burn mensual con buffer** | **3.545** | |
| **Burn promedio sobre 12 meses (incluyendo Delivery Ops desde mes 2)** | **3.756** | |

> **Metodología 3.545 vs 3.756 (Lean):** **3.545** = **2.954** burn mensual base + **591** buffer **20%** (sin Delivery Ops a precio pleno). **3.756** es el **promedio anual** sobre 12 meses: incorpora **Delivery Ops** escalonado (**0** mes 1 → **400** meses 2–12, **promedio 367**/mes en esa línea) y el **buffer 20%** ya prorrateado en cada mes — por eso el promedio con buffer sube respecto a la fila instantánea **3.545**.

### 2.3 Total Lean 12 meses

| Concepto | USD |
|---|---|
| One-shots | 5.058 |
| Burn 12 meses (3.756 × 12) | 45.072 |
| Buffer adicional (5% sobre el total) | 2.506 |
| **Reservado para imprevistos** | **7.368** |
| **Total Lean** | **60.000** |

## 3. Escenario Base — USD 101.000 (recomendado; incluye Co-CEO)

### 3.1 Cambios respecto a Lean

- **Coworking → HQ tipo casa en alquiler (Bella Florida / San Diego):** USD 100 → **USD 500/mes** (detalle §6.1).
- **Valla publicitaria pequeña 3m×2m en av. Bolívar Norte:** **USD 350/mes desde mes 3** (refuerzo offline; **no** sustituye a Meta).
- **Delivery Ops Coordinator desde mes 1:** **USD 300/mes** (+**100** si KPI → 400).
- **Marketing digital (Meta Ads — canal principal awareness):** **USD 800/mes en meses 1–6** y **USD 500/mes en meses 7–12** (promedio **~USD 650/mes** sobre el año; ver §3.3).
- **Sales B2B:** **2 ejecutivos** — USD **120** fijo c/u + **USD 30**/firma; comisiones modeladas con ~**10,7** firmas/mes **en total** entre los 2 reps (≈**5,3**/rep de media anual — paquete [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1) → línea Sales **~USD 560/mes** de media (vs. 270 con 1 rep). El **CAC oficial** en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §3 usa supuesto **conservador** de **~8** firmas/mes en cruise (prorrateo fijo mayor); el presupuesto refleja el ritmo medio que la proyección mes a mes implica (**subutilización relativa del fijo** en cruise vs. ese supuesto).
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
| Igual a Lean | 5.058 |
| Depósito + comisión + amueblado HQ (3 meses adelantados, 1 depósito) | 1.250 |
| Adecuación HQ (pintura, instalación equipos, conectividad) | 400 |
| **CapEx 4 PCs** (recepción, admin/llamadas, dev, puesto flexible — §6.1) | **~3.700** *(punto medio rango 2.950–4.450; cotizar)* |
| **One-shots Base total** | **~10.408** |

### 3.3 Burn mensual recurrente Base

**Desglose “sin buffer”** (USD/mes; la línea Marketing digital es **por tramo**, no constante):

| Concepto | USD/mes |
|---|---|
| Salarios equipo (**2×Sales ~560** + CS+CM **350** + Marketing **400** + Delivery Ops **300**) | **1.610** |
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
| Delivery fee subsidiado primeras órdenes | 150 |
| Limpieza oficina + caja chica | 80 |
| Transporte local equipo | 100 |
| Contingencia operativa | 100 |

**Tramos de burn “todo incluido” (base + buffer):** misma metodología §6; incluye **Co-CEO USD 1.000/mes** (+**1.000** vs. tramos del modelo **95k** sin segundo al mando).

| Tramo | Meses | Burn mensual con buffer (USD) | Comentario |
|---|---|---|---|
| A — sin valla, Meta **800** | 1–2 | **7.402** | Sin contrato valla aún; incluye Co-CEO |
| B — con valla, Meta **800** | 3–6 | **7.738** | Valla + digital fase alta |
| C — con valla, Meta **500** | 7–12 | **7.371** | Digital fase sostenimiento |

**Referencias de burn mensual base (sin buffer), alineadas a los tramos:**

| Tramo | Base (USD/mes) |
|---|---|
| A | 6.429 |
| B | 6.779 |
| C | 6.479 |

**Promedios Base:** burn mensual base ponderado **~6.571**; buffer ponderado **~928**; **burn con buffer promedio anual ~7.499** (total año **~89.982**).

**Nota comercial:** añadir un **3.er–4.o** Sales no está presupuestado aquí; hacerlo solo con evidencia operativa y recalcular comisiones/runway.

### 3.4 Total Base 12 meses

| Concepto | USD |
|---|---|
| One-shots | **~10.408** |
| Burn 12 meses (tramos A/B/C — ver §3.3) | **89.982** |
| Reserva imprevistos / runway extra | **~610** |
| **Total Base** | **101.000** |

## 4. Escenario Growth — USD 90.000

### 4.1 Cambios respecto a Base

- **One-shots mes 1:** heredan el bloque **Base §3.2 (~10.408)** (sustituye el antiguo **6.704**). El **total USD 90k** Growth y la reserva §4.4 se ajustaron aritméticamente; **burn §4.3** sigue en el modelo Growth **previo** al replante salarial/IA — **FP&A** puede unificar Growth con las mismas líneas Base §3.3.
- **Valla publicitaria mediana 6m×4m:** USD 350 → **USD 700/mes desde mes 2**.
- **Asesor regulatorio farmacéutico externo (consultor):** **USD 120/mes** desde mes 1.
- **Marketing digital subido:** respecto al **promedio Base (~650/mes)**, Growth mantiene **USD 800/mes** plano (mayor agresividad vs. fase sostenimiento Base).
- **Salarios equipo (Growth §4.3):** partida modelada **~1.760/mes** + **founder** **USD 250/mes** desde mes 4 (promedio **167**). **Reconciliación:** el core operativo Base sin founder es **~1.610** (§3.3); la diferencia **~150** en Growth refleja supuestos del modelo **previo** a unificación FP&A. Growth **no** incluye aún **Co-CEO** ni stack **IA** del Base (ver §4.1 y fila comparativa §5).
- **Buffer ampliado a 25%** por mayor exposición.

### 4.2 One-shots Growth (mes 1)

| Concepto | USD |
|---|---|
| Igual a Base (§3.2) | **~10.408** |
| Depósito valla mediana 6m×4m (1 mes adelantado) | 700 |
| Bono firma asesor regulatorio | 200 |
| **One-shots Growth total** | **~11.308** |

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
| Delivery fee subsidiado | 200 |
| Limpieza + caja chica | 100 |
| Transporte local | 130 |
| Contingencia operativa | 130 |
| **Burn mensual base** | **5.101** |
| **Buffer 25%** | **1.275** |
| **Burn mensual con buffer (referencia mes “completo”; sin valla mes 1)** | **6.376** |
| **Burn promedio sobre 12 meses** | **~5.861** |

*El promedio anual incorpora el mismo tipo de variación mes a mes que Base (valla, fases). Orden de magnitud revisado al alinear 2 Sales; FP&A puede refinar tramos.*

### 4.4 Total Growth 12 meses

| Concepto | USD |
|---|---|
| One-shots | **~11.308** |
| Burn 12 meses (~5.861 × 12) | **~70.332** |
| Reserva imprevistos / runway extra | **~8.360** |
| **Total Growth** | **90.000** |

## 5. Comparativa lado a lado

| Línea | Lean | Base | Growth |
|---|---|---|---|
| **Equipo + founder + Co-CEO + IA** | 1.067 | **~4.035** *(1.610+1.000+1.000+425)* | **~1.927** *(1.760 equipo Growth + 167 founder prom.; **sin** Co-CEO ni IA — ver §4.1)* |
| **Externos (cont+abog+asesor)** | 330 | 330 | 450 |
| **Inmueble** | 100 | **500** | 280 |
| **Servicios oficina** | 100 | 100 | 100 |
| **Hosting + SaaS** | 134 | 134 | 134 |
| **Marketing digital** | 350 | **~650 prom.** (800 M1–6 / 500 M7–12) | 800 |
| **Valla** | 0 | 350 (desde mes 3) | 700 (desde mes 2) |
| **Material + delivery subsidio** | 150 | 250 | 350 |
| **Transporte + caja chica** | 180 | 280 | 360 |
| **Contingencia** | 50 | 100 | 130 |
| **Buffer (20-25%)** | 591 | **~928 prom.** | **~1.275** |
| **Burn mensual final (prom. año)** | **3.756** | **~7.499** | **~5.861** |

## 6. Notas y supuestos críticos

- **Buffer 20%** está calculado de forma ponderada: 30% sobre costos en bolívares (oficina, servicios, transporte, limpieza) y 10% sobre costos en USD (hosting, SaaS, marketing digital, salarios). Esto refleja que la inflación bolívar duele más que la USD.
- **Inflación VE 2026:** el **BCV (mayo 2026)** anticipa **desaceleración** con inflación mensual **de un dígito desde mayo 2026** (tras ene-abr con tasas mensuales aún altas). El rango **387-618%** (Anova / Cendas / Ecoanalítica) se usa como **escenario adverso / stress**, no como única proyección. El buffer 20% absorbe variaciones de hasta ±25% en precios bolívar.
- **Herramientas IA (suscriptores):** ver **§6.1** (Cursor Ultra + Claude Max + Seedance 2.0; sin Gemini/Runway/Midjourney en stack acordado). El coste **API en producto** (chat en app) sigue siendo partida distinta si se activa roadmap — **provisionar** aparte.
- **Si devaluación supera 100% trimestral:** plan de contingencia activado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md). Cortes prioritarios: valla publicitaria → **reducir spend Meta** (mantener remarketing mínimo) → delivery subsidio → 1 hire.
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

**Política de dotación:** **4 estaciones fijas** desde el despliegue del HQ evita colisión entre recepción, admin y visitas internas. **2× Sales** siguen priorizando **tablet/laptop en campo** (one-shots §2.1); la **PC 4** cubre **presencia en sede** y picos de uso sin compartir la estación de desarrollo.

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
| Delivery Ops | **300** + **100** si KPI (→400) | |
| Customer Support + Community Manager | **350** + **50** si KPI (→400) | |

## 7. Documentos hermanos

- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): traducción mes a mes en flujo de caja.
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md): cómo el revenue compensa este burn.
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md): URLs y precios públicos que sostienen cada cifra.
- [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md): justificación de la valla publicitaria y radio.
