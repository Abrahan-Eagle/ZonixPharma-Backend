# Propuesta de valor — Cliente B2B (Farmacia)

> **Última actualización:** 10 mayo 2026.
> Documento que captura el pitch comercial al dueño de la farmacia (decisor B2B).
> Si la farmacia es cadena, el decisor es el gerente comercial / director de operaciones.

## 1. Quién es el cliente B2B

| Tipo | Decisor | Cómo se aborda |
|---|---|---|
| Farmacia independiente, 1 sucursal | Dueño / regente | Visita en sucursal, pitch de 15 min. |
| Cadena pequeña (3-8 sucursales) | Gerente comercial o dueño-fundador | Reunión agendada, pitch de 30 min. |
| Cadena mediana (9-25 sucursales) | Director de operaciones / CEO | Reunión formal, propuesta escrita + demo en vivo. |
| Cadena premium (Farmatodo / Locatel) | Comité de innovación digital | NO en piloto. Eventualmente Enterprise tier. |

## 2. Dolor que tiene hoy

1. **Pérdida de venta por desabastecimiento del competidor:** "el cliente entró, no encontró el producto, fue al competidor y no volvió".
2. **Sin canal digital propio:** "no podemos vender por WhatsApp porque sin sistema todo es manual y se cometen errores".
3. **Comisión alta de Rappi / PedidosYa:** "nos cobran 25-35% del GMV; con eso no nos queda margen". Para una farmacia que vende USD 5.000/mes en estos canales, son **USD 1.250-1.750 mensuales perdidos**.
4. **Receta médica física:** "el paciente trae receta, hay que validarla a ojo, sin trazabilidad, y si después hay un problema no hay registro".
5. **Sin acceso a pacientes nuevos fuera de su radio caminable:** "vendemos solo a quien pasa por la cuadra".
6. **Pagos manuales sin trazabilidad:** "el Pago Móvil llega, pero conciliarlo manualmente toma horas".
7. **Sin herramienta administrativa central:** órdenes, inventario, comprobantes y facturación ligada a Rx repartidos entre WhatsApp, papel y Excel; poco control y mucho retrabajo.
8. **Compras a droguerías sin comparador sistemático:** catálogos y listas en PDF o mensajes; no hay forma ágil de comparar precios y condiciones entre proveedores para optimizar cada pedido.

## 3. Lo que Zonix Pharma le ofrece

### 3.1 Costo predecible y bajo

- **Modelo híbrido:** cuota fija mensual en USD + porcentaje moderado sobre GMV generado en la app (ver §5). Los porcentajes están en el orden de **fracciones de punto a ~1%**, no en el rango 25-35% de los agregadores.
- **Comparación vs. Rappi/PedidosYa:** una farmacia con ~USD 5.000/mes de GMV en Zonix suele pagar **órden de magnitud menos** que una comisión típica del 25-35% sobre el mismo volumen.
- **Tier dinámico:** el nivel (Basic / Pro / Enterprise) sigue el GMV mensual según bandas; ascenso y descenso con reglas explícitas en §5.4.

### 3.2 Canal digital propio sin construirlo

- App Flutter operativa en Android e iOS. Web responsive lista.
- Catálogo cargado en 30 minutos con CSV o entrada manual.
- Onboarding del personal en 1 hora.
- Soporte chat con Customer Support de Zonix 12h al día.

### 3.3 Validación Rx con farmacéutico colegiado de la propia farmacia

- El farmacéutico de la farmacia recibe credenciales en la app.
- Valida recetas digitalmente, marca como aprobada / rechazada / pendiente.
- Genera trazabilidad completa: quién validó, cuándo, qué medicamento, qué receta.
- Cumple con la **Ley del Ejercicio de la Farmacia VE** porque el responsable sigue siendo el farmacéutico colegiado de la farmacia.
- La farmacia tiene auditoría digital ante MPPS si la pide.

### 3.4 Delivery integrado

- Repartidores autónomos o de empresa de delivery se asignan automáticamente.
- La farmacia no contrata repartidores propios.
- Trazabilidad de la entrega: salida, en ruta, entregado, geolocalización.

### 3.5 Pagos manuales VE soportados nativos

- Pago Móvil C2P, transferencia, Zelle, Binance Pay USDT.
- Comprobante adjunto por el paciente, validación por la farmacia en la app.
- SENIAT factura digital integrada (mes 2 del piloto).
- Sin pasarelas internacionales, sin Stripe, sin tarjetas.

### 3.6 Multi-sucursal con un solo onboarding

- **Un nivel y una factura por razón social (RIF):** el GMV para asignar tier y calcular el componente variable es la **suma de todas las sucursales** de esa persona jurídica en Zonix (piloto y cadenas pequeñas). El dashboard muestra **desglose por sucursal** para operación y confianza.
- Cada sucursal tiene su propio inventario, su propio farmacéutico colegiado, su propio dashboard.
- Modelo futuro (franquicias / JV / enterprise explícito): contrato o nivel por establecimiento puede acordarse aparte.

### 3.7 Eventos en tiempo real

- Pusher + Firebase Cloud Messaging.
- Cuando llega una orden la farmacia la ve al instante.
- Cuando se valida una receta el paciente recibe push.

### 3.8 Panel administrativo integrado

- **Un solo lugar** para ver órdenes en curso, historial, validación Rx, comprobantes de pago y estados de entrega.
- **Inventario y catálogo** enlazados al flujo de venta (carga por CSV o manual); menos desajuste entre “lo que vendemos” y “lo que publicamos”.
- **Dashboard de GMV (facturación Zonix):**
  - Vista **mensual** del GMV reconocido (misma base que factura variable — §5.5).
  - **Agregado por RIF:** un solo número para nivelación de tier y cuota; **desglose por sucursal** cuando hay multi-sucursal (operación y reconciliación interna).
  - **Banda actual** del mes y **proyección** “si cerramos el mes hoy” (para anticipar ascensos §5.4).
  - Export CSV/PDF que **cuadra** con el cierre publicado (§5.8).
- **Reportes de GMV** y trazabilidad de pagos alineados con la definición operativa de facturación (ver §5.5 y dashboard oficial).

### 3.9 Marketing digital y presencia física coordinada

- La farmacia entra al **canal de adquisición** de Zonix Pharma: pauta digital (Meta Ads, Google Ads según plan del pack) y material físico en zona piloto (flyers, vallas donde aplique el escenario Base/Growth).
- El catálogo de la farmacia queda **visible** para pacientes que buscan por zona y producto, sin que la sucursal tenga que montar su propia campaña desde cero.
- El costo de esa capa comercial está en el **presupuesto operativo de Zonix** (ver [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md)); la farmacia se beneficia del tráfico agregado del marketplace.

### 3.10 Gestión de droguerías proveedoras *(roadmap Año 1 — no disponible en piloto)*

- Carga o registro de **ofertas y catálogos** de droguerías seleccionadas (documentos estructurados o datos normalizados).
- **Comparación por producto:** precio, condición de pago, mínimos de pedido y plazos; filtros para decidir a quién comprar.
- **Borrador de pedido** hacia la droguería elegida (cantidades, SKU) desde la misma plataforma, reduciendo errores de transcripción desde PDF o WhatsApp.

## 4. Lo que NO le ofrece Zonix Pharma (para no inflar)

- **No reemplaza tu ERP de farmacia (Saint, Profit, Galac).** El panel administrativo de §3.8 cubre el flujo de ventas en Zonix (órdenes, comprobantes, validación Rx, reportes de GMV en la app); la contabilidad fiscal y el inventario maestro de la farmacia siguen viviendo en el ERP. Integración por CSV.
- **No procesa seguros médicos privados / IVSS.** Es venta directa al paciente.
- **No es teleconsulta médica.** No conecta con médicos para emitir recetas; el paciente trae la suya.
- **No es e-commerce general.** Solo farmacia (OTC + Rx + cuidado personal afín).

## 5. Pricing detallado por tier (modelo híbrido)

**Fórmula mensual:** `Cuota = Cuota_fija_nivel + (%_nivel × GMV del mes calendario)`.

**Asignación del nivel por banda de GMV mensual (USD, todas las sucursales del RIF sumadas):**

| Nivel | GMV/mes (USD) | Cuota fija | % sobre GMV |
|-------|----------------|------------|-------------|
| **Basic** | USD 0 – USD 2.500 | USD 20 | 0,60% |
| **Pro** | USD 2.501 – USD 10.000 | USD 35 | 0,80% |
| **Enterprise** | USD 10.001 en adelante | USD 50 | 1,00% |

Los porcentajes aplican al GMV del mes según la definición de §5.5. El nivel efectivo para facturación sigue ascensos/descensos de §5.4 (no se “salta” de banda por un solo mes salvo las reglas allí descritas).

### 5.1 Basic

**Para:** farmacia independiente o GMV agregado del RIF en la banda **USD 0 – USD 2.500/mes** en Zonix.

**Incluye:**
- 1 sucursal (independiente); cadenas: sucursales según contrato con límites de producto.
- 1 farmacéutico colegiado validador de recetas por sucursal operativa.
- Hasta 200 órdenes/mes (por sucursal donde aplique).
- Catálogo ilimitado de productos OTC.
- Hasta 50 productos Rx.
- Soporte chat horario diurno.
- Estadísticas básicas en dashboard.

### 5.2 Pro

**Para:** GMV agregado **USD 2.501 – USD 10.000/mes**, o cadena pequeña hasta 3 sucursales dentro de esa banda.

**Incluye todo lo de Basic, más:**
- Hasta 3 sucursales.
- Hasta 2 farmacéuticos colegiados validadores.
- Hasta 800 órdenes/mes.
- Catálogo ilimitado Rx + OTC.
- Soporte chat extendido (12h/día).
- Reportes mensuales por email.
- Promociones programables (ej. 2x1 OTC, descuento por horario).

### 5.3 Enterprise

**Para:** GMV agregado **> USD 10.000/mes** o cadena pequeña-mediana 4-25 sucursales que operen en esta banda.

**Incluye todo lo de Pro, más:**
- Hasta 25 sucursales.
- Hasta 8 farmacéuticos colegiados validadores.
- Órdenes ilimitadas.
- Soporte WhatsApp directo + email.
- Reportes en tiempo real.
- Dashboard agregado por marca.
- Marca blanca opcional (logo de la cadena en cabecera de cliente).
- Onboarding asistido en cada sucursal por Customer Support de Zonix.

### 5.4 Cambio de nivel por GMV (ascenso y descenso)

Las reglas siguientes aplican al **GMV agregado del RIF** (suma de sucursales en Zonix). Los meses son **calendario** (enero, febrero, etc.); no se ajusta por mes corto o largo.

**Ascenso (sin promedio):**

1. Se toman **dos meses calendario consecutivos** (M y M+1).
2. El ascenso al nivel superior solo procede si el GMV de **M** y el GMV de **M+1** son **cada uno** **mayor o igual (≥)** al **umbral inferior** del nivel destino (por ejemplo, para pasar a Pro: GMV ≥ USD 2.501 en M y ≥ USD 2.501 en M+1; para Enterprise: GMV ≥ USD 10.001 en ambos meses).
3. Cerrado M+1, Zonix **notifica por escrito** al dueño (email y/o WhatsApp según canal contractual) el **cambio de nivel** y la **tarifa** que regirá a partir del ciclo indicado.
4. La **nueva tarifa** (cuota fija + % del nivel nuevo) aplica en facturación desde **M+2**: los meses M y M+1 son solo la ventana de comprobación; el **primer mes de cobro** con el nivel nuevo es **M+2**.

**Descenso:** política espejo — dos meses consecutivos **cada uno** con GMV **estrictamente por debajo** del umbral inferior del nivel actual (por ejemplo, para bajar de Pro a Basic: ambos meses con GMV ≤ USD 2.500); aviso al dueño y aplicación del nivel inferior desde el mes siguiente a la confirmación, salvo pacto distinto en contrato marco.

### 5.5 Definición operativa de GMV (facturación y nivelación)

- **Base:** suma del **total cobrado al paciente por transacción** en órdenes **completadas** en ese mes calendario. Incluye el **delivery fee** cuando forma parte del total del pedido en la app.
- **Propinas** al repartidor por fuera de la app **no** entran en el GMV Zonix. **Créditos de tienda** no contemplados en el modelo base.
- **Sin ajustes retroactivos** para fines de devengo Zonix: el reconocimiento del GMV es por transacción completada en el mes; devoluciones discrecionales de la farmacia al paciente son **ajenos al cálculo de fee** salvo error demostrable de plataforma (ver §5.7).

### 5.6 Alta nueva vs cambio de nivel (primer mes parcial)

Son reglas distintas:

- **Farmacia nueva que entra a mitad de mes:** correspondiente al **primer mes calendario** desde el alta, se factura **solo la cuota fija del nivel que corresponda** al GMV de ese tramo (según bandas §5), **prorrateada** a los días activos en ese mes; **no** se aplica el **% sobre GMV** en ese primer mes parcial.
- **Desde el segundo mes calendario completo:** aplica **cuota fija + %** según el nivel vigente (tras ascensos/descensos §5.4).

El **cambio de nivel** por crecimiento estable sigue exclusivamente §5.4 (dos meses + aviso + cobro nuevo desde M+2).

### 5.7 Piloto / período promocional (cobro USD 0)

- Durante waiver (**USD 0** de cuota), **sigue midiéndose el GMV** igual que en régimen de pago: reportes mensuales idénticos.
- El período promocional **no exime** el registro de transacciones ni la medición de GMV para **asignación de nivel al activar cobro** y para reporting interno / inversor.
- Al salir del gratis, se comunica en qué **banda** caería según el GMV observado en los meses de prueba.

### 5.8 Fuente de verdad y reclamos sobre GMV

- **Fuente de verdad:** totales del **dashboard Zonix** (misma base que facturación). Export CSV/PDF debe **cuadrar** con esos totales.
- **Plazo:** **7 días hábiles** desde la publicación del **cierre mensual** oficial.
- **Alcance:** solo corrección de **errores de plataforma** (orden mal clasificada, doble conteo). No se renegocia el nivel por desacuerdo comercial sobre el mes.

Detalle de facturación SENIAT e impago en [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md).

## 6. Funnel Sales B2B (visita → activación)

| Etapa | Acción | Conversión esperada (referencia LatAm SMB / marketplace) |
|---|---|---|
| 1. Visita / awareness | Ruta física, flyer, QR a landing | Base 100% |
| 2. Demo en vivo | App paciente + dashboard farmacia (tablet) | **~60-75%** pasan a interés serio |
| 3. Carta de intención | Compromiso no vinculante + fecha onboarding | **~40-55%** de quienes vieron demo |
| 4. Firma contrato marco | Datos RIF, plan tier inicial | **~30-50%** visita → firma (segmento medio independiente) |
| 5. Onboarding técnico | Catálogo, usuarios, pharmacist | **~85-95%** completan ≤ 14 días |
| 6. Activación | Primera orden completada en app | **~70-85%** de onboarded en 30 días |

*Medir en CRM desde mes 1; tasas orientativas para dimensionar pipeline (CMO/Sales).*

## 7. Demostración (script de 15 minutos al dueño)

| Min | Acción |
|---|---|
| 0-2 | Pitch del problema: pérdida de venta por desabastecimiento, comisión Rappi alta, sin trazabilidad Rx. |
| 2-5 | Demo app paciente: cómo el paciente busca, agrega al carrito, sube receta, paga, recibe. |
| 5-8 | Demo dashboard farmacia: cómo entra la orden, cómo se valida la receta, cómo se asigna delivery. |
| 8-10 | Comparativa precio: Rappi 25-35% GMV vs. Zonix cuota fija + % moderado (§5). Cálculo en vivo con su GMV estimado. |
| 10-12 | Onboarding: 30 minutos de catálogo + 1h de capacitación. Sin contrato anual. Cancelación cualquier momento. |
| 12-13 | Sucursal piloto: arrancar con 1 sola sucursal, ver resultado en 30 días, escalar al resto. |
| 13-15 | Cierre: firma carta de intención (no contrato definitivo). Definir fecha de visita técnica. |

## 8. Material de apoyo (entregables al cierre del visit)

- **One-pager imprimible** del pitch (1 hoja A4 o tarjeta tipo brochure).
- **Demo en su tableta o teléfono:** Sales B2B muestra la app en vivo con datos de prueba.
- **Cotización formal en email:** PDF con tier sugerido + precio + condiciones + fecha de inicio.
- **Calculadora ahorro vs. Rappi:** spreadsheet con su GMV estimado.

## 9. Objeciones frecuentes y respuestas

| Objeción | Respuesta |
|---|---|
| "Ya estoy en Rappi, no necesito más." | "Rappi te cobra USD X.XXX/mes en comisión sobre GMV. Zonix usa cuota fija + un % muy bajo sobre tu GMV en la app (§5); en volumen típico sueles pagar órden de magnitud menos. Puedes mantener Rappi mientras pruebas con nosotros." |
| "Mi farmacéutico no quiere validar recetas en una app." | "El backend está construido para que él vea solo las recetas pendientes. Capacitación de 30 min. Si después no le gusta, cancelas." |
| "¿Y si la app cae?" | "Es Laravel + DigitalOcean + Pusher. SLA del proveedor 99,9%. Tenemos plan B: pickup en sucursal sin entrega digital." |
| "¿Cómo se cobra el delivery?" | "El paciente paga al pedir; nosotros recibimos el comprobante; tú recibes el dinero menos delivery fee del repartidor. Trazabilidad completa." |
| "¿Y si el paciente reclama un medicamento mal entregado?" | "Hay módulo de quejas y resolución. Mediación de Customer Support de Zonix en 24h. La farmacia decide si reembolsa." |
| "¿Cuánto tarda el onboarding?" | "30 min catálogo + 1h capacitación + 1 día de prueba interna. Total 2 días desde que firmas." |
| "¿Y si no hay órdenes los primeros meses?" | "Marketing primero a tu **zona caminable** desde tu sucursal y al **polo del piloto** (Bella Florida o vía Tocuyito / El Socorro). Sales B2B garantiza al menos 5-10 órdenes/semana en mes 1, escalando." |
| "¿Hay contrato anual?" | "No. Mensual. Cancelas cuando quieras con 30 días de aviso." |
| "¿Quién es el responsable si MPPS inspecciona?" | "La farmacia sigue siendo el establecimiento farmacéutico responsable ante MPPS; Zonix aporta **trazabilidad digital** y logs exportables. Contrato marco lo deja escrito." |
| "¿Qué datos del paciente ve Zonix?" | "Solo los necesarios para la orden y la receta; tratamiento bajo aviso de privacidad y contrato; subencargados listados para la C.A." |
| "¿Me obligan a exclusividad digital?" | "No exclusividad con Rappi/PedidosYa; puedes operar multicanal." |

## 9.1 Contrato marco farmacia–Zonix (resumen legal-operativo)

Antes de **órdenes reales** con pacientes, cada farmacia firma (o anexa) documento que cubra como mínimo:

1. **Roles:** farmacia como establecimiento dispensador; Zonix como plataforma y, tras constitución, **responsable del tratamiento** de datos de usuarios según [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) §4.4.
2. **Validación Rx:** obligación de mantener farmacéutico colegiado MPPS activo; SLA acordado; escalamiento si no hay validador.
3. **Recetas retenidas/controladas:** pickup, identificación, libros de control **en farmacia**.
4. **Pagos y comprobantes:** cómo se concilian y plazos de disputa.
5. **Salida:** exportación de datos y baja de sucursal sin perjuicio a pacientes con orden abierta.

Plantillas: abogado corporativo + revisión **farmacéutica asesora** en cláusulas de dispensación.

## 10. Métricas que Zonix Pharma promete medir y reportar

| Métrica | Reporte |
|---|---|
| Órdenes recibidas / completadas / canceladas | Mensual, por email + dashboard. |
| GMV de la farmacia en Zonix | Mensual. |
| Tickets de soporte abiertos / cerrados | Mensual. |
| Tiempo promedio validación Rx | Mensual. |
| Satisfacción del paciente (NPS) | Trimestral. |
| Tiempo promedio entrega delivery | Mensual. |

## 11. Por qué la farmacia debería decir SÍ ahora

1. **Costo de oportunidad:** cada mes sin Zonix, Rappi se lleva el 30% de su GMV digital, o no vende digital.
2. **Tier introductorio:** primeras 10 farmacias del piloto pueden acordar **USD 0 de cuota fija los primeros 2 meses** (waiver promocional; redacción y excepciones en contrato marco — abogado). El GMV se mide igual (§5.7). Después aplica el modelo híbrido §5. **Proyección de caja inversor:** la tabla central [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1–1.3 modela el caso **sin** ese waiver; la fila **«con waiver primeras 10»** al pie de §1.1 muestra el ajuste **~−USD 200** de ingresos año 1 (proxy de ingresos **meses 1–2** del caso sin waiver). Cualquier promesa comercial más amplia obliga **recalcular** runway con FP&A.
3. **Riesgo cero:** cancelación cualquier momento, sin penalidad, sin contrato anual.
4. **Equipo presencial:** Sales B2B + Customer Support en Carabobo. No es un call-center remoto.

## 12. Caso de éxito proyectado (para el inversor, no para la farmacia)

**Ejemplo ilustrativo** (modelo híbrido §5): Farmacia "La Esperanza", Bella Florida, 1 sucursal.
- **Antes Zonix:** GMV mensual digital USD 0 (no vendía digital). Rappi cobrando ~30% de las pocas ventas que entraban.
- **Mes 1 con Zonix:** GMV USD 320 → nivel Basic; ejemplo de cuota aprox.: USD 20 + 0,60% × 320 ≈ **USD 22** (si el mes es parcial desde alta, puede aplicarse solo fija prorrateada §5.6).
- **Mes 3:** GMV USD 1.200 → Basic.
- **Mes 6:** GMV USD 3.500 → Pro (35 + 0,80% × 3.500 ≈ **USD 63** ese mes).
- **Mes 12:** GMV USD 7.200 → sigue en Pro.
- **LTV agregado** depende del mix de meses por banda; actualizar modelos en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) cuando se congele el mix piloto.

Detalle del cálculo en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).

## 13. Documentos hermanos

- [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md): qué le decimos al paciente.
- [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md): qué le decimos al delivery y al farmacéutico.
- [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md): detalle de cómo se cobra y se paga.
- [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md): cómo funciona la validación Rx en producción.
