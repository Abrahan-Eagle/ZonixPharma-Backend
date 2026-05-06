# Propuesta de valor — Cliente B2B (Farmacia)

> **Última actualización:** 5 mayo 2026.
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

## 3. Lo que Zonix Pharma le ofrece

### 3.1 Costo predecible y bajo

- **Membresía fija en USD:** Basic 25 / Pro 60 / Enterprise 120. Si la farmacia vende USD 5.000/mes en Zonix, paga USD 60 (Pro). **Ahorro vs. Rappi: USD 1.190-1.690/mes (~95%).**
- **Sin comisión sobre GMV:** todo lo que vende es suyo, menos la membresía mensual.
- **Tier dinámico:** si vende poco, baja a Basic. Si crece, sube a Pro o Enterprise. Nunca paga "demasiado".

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

- Cadena pequeña-mediana: una cuenta Enterprise USD 120/mes cubre todas las sucursales.
- Cada sucursal tiene su propio inventario, su propio farmacéutico colegiado, su propio dashboard.
- La cadena ve agregado total + por sucursal.

### 3.7 Eventos en tiempo real

- Pusher + Firebase Cloud Messaging.
- Cuando llega una orden la farmacia la ve al instante.
- Cuando se valida una receta el paciente recibe push.

## 4. Lo que NO le ofrece Zonix Pharma (para no inflar)

- **No es ERP de farmacia.** No reemplaza Saint, Profit, Galac. Se integra exportando inventario por CSV.
- **No procesa seguros médicos privados / IVSS.** Es venta directa al paciente.
- **No es teleconsulta médica.** No conecta con médicos para emitir recetas; el paciente trae la suya.
- **No es e-commerce general.** Solo farmacia (OTC + Rx + cuidado personal afín).

## 5. Pricing detallado por tier

### 5.1 Basic — USD 25/mes

**Para:** farmacia independiente, 1 sucursal, GMV mensual estimado < USD 1.500.

**Incluye:**
- 1 sucursal.
- 1 farmacéutico colegiado validador de recetas.
- Hasta 200 órdenes/mes.
- Catálogo ilimitado de productos OTC.
- Hasta 50 productos Rx.
- Soporte chat horario diurno.
- Estadísticas básicas en dashboard.

### 5.2 Pro — USD 60/mes

**Para:** farmacia independiente con buen movimiento, GMV USD 1.500-5.000/mes, o cadena pequeña hasta 3 sucursales.

**Incluye todo lo de Basic, más:**
- Hasta 3 sucursales.
- Hasta 2 farmacéuticos colegiados validadores.
- Hasta 800 órdenes/mes.
- Catálogo ilimitado Rx + OTC.
- Soporte chat extendido (12h/día).
- Reportes mensuales por email.
- Promociones programables (ej. 2x1 OTC, descuento por horario).

### 5.3 Enterprise — USD 120/mes

**Para:** cadena pequeña-mediana 4-25 sucursales, GMV USD > 5.000/mes.

**Incluye todo lo de Pro, más:**
- Hasta 25 sucursales.
- Hasta 8 farmacéuticos colegiados validadores.
- Órdenes ilimitadas.
- Soporte WhatsApp directo + email.
- Reportes en tiempo real.
- Dashboard agregado por marca.
- Marca blanca opcional (logo de la cadena en cabecera de cliente).
- Onboarding asistido en cada sucursal por Customer Support de Zonix.

### 5.4 Ajuste dinámico

Cada 3 meses Zonix revisa el GMV real de la farmacia. Si supera el umbral del tier siguiente:
- 30 días de aviso.
- Posibilidad de quedarse en el tier actual con sobrecosto USD 5/sucursal extra (transición suave).

## 6. Demostración (script de 15 minutos al dueño)

| Min | Acción |
|---|---|
| 0-2 | Pitch del problema: pérdida de venta por desabastecimiento, comisión Rappi alta, sin trazabilidad Rx. |
| 2-5 | Demo app paciente: cómo el paciente busca, agrega al carrito, sube receta, paga, recibe. |
| 5-8 | Demo dashboard farmacia: cómo entra la orden, cómo se valida la receta, cómo se asigna delivery. |
| 8-10 | Comparativa precio: Rappi 25-35% GMV vs. Zonix membresía fija. Cálculo en vivo con su GMV estimado. |
| 10-12 | Onboarding: 30 minutos de catálogo + 1h de capacitación. Sin contrato anual. Cancelación cualquier momento. |
| 12-13 | Sucursal piloto: arrancar con 1 sola sucursal, ver resultado en 30 días, escalar al resto. |
| 13-15 | Cierre: firma carta de intención (no contrato definitivo). Definir fecha de visita técnica. |

## 7. Material de apoyo (entregables al cierre del visit)

- **One-pager imprimible** del pitch (1 hoja A4 o tarjeta tipo brochure).
- **Demo en su tableta o teléfono:** Sales B2B muestra la app en vivo con datos de prueba.
- **Cotización formal en email:** PDF con tier sugerido + precio + condiciones + fecha de inicio.
- **Calculadora ahorro vs. Rappi:** spreadsheet con su GMV estimado.

## 8. Objeciones frecuentes y respuestas

| Objeción | Respuesta |
|---|---|
| "Ya estoy en Rappi, no necesito más." | "Rappi te cobra USD X.XXX/mes en comisión. Zonix te cobra USD 60. Ahorras USD X.XXX/mes y mantienes Rappi si quieres mientras pruebas con nosotros." |
| "Mi farmacéutico no quiere validar recetas en una app." | "El backend está construido para que él vea solo las recetas pendientes. Capacitación de 30 min. Si después no le gusta, cancelas." |
| "¿Y si la app cae?" | "Es Laravel + DigitalOcean + Pusher. SLA del proveedor 99,9%. Tenemos plan B: pickup en sucursal sin entrega digital." |
| "¿Cómo se cobra el delivery?" | "El paciente paga al pedir; nosotros recibimos el comprobante; tú recibes el dinero menos delivery fee del repartidor. Trazabilidad completa." |
| "¿Y si el paciente reclama un medicamento mal entregado?" | "Hay módulo de quejas y resolución. Mediación de Customer Support de Zonix en 24h. La farmacia decide si reembolsa." |
| "¿Cuánto tarda el onboarding?" | "30 min catálogo + 1h capacitación + 1 día de prueba interna. Total 2 días desde que firmas." |
| "¿Y si no hay órdenes los primeros meses?" | "Marketing primero a tu zona (radio 1,5 km de tu sucursal). Sales B2B garantiza al menos 5-10 órdenes/semana en mes 1, escalando." |
| "¿Hay contrato anual?" | "No. Mensual. Cancelas cuando quieras con 30 días de aviso." |
| "¿Quién es el responsable si MPPS inspecciona?" | "La farmacia sigue siendo el establecimiento farmacéutico responsable ante MPPS; Zonix aporta **trazabilidad digital** y logs exportables. Contrato marco lo deja escrito." |
| "¿Qué datos del paciente ve Zonix?" | "Solo los necesarios para la orden y la receta; tratamiento bajo aviso de privacidad y contrato; subencargados listados para la C.A." |
| "¿Me obligan a exclusividad digital?" | "No exclusividad con Rappi/PedidosYa; puedes operar multicanal." |

## 8.1 Contrato marco farmacia–Zonix (resumen legal-operativo)

Antes de **órdenes reales** con pacientes, cada farmacia firma (o anexa) documento que cubra como mínimo:

1. **Roles:** farmacia como establecimiento dispensador; Zonix como plataforma y, tras constitución, **responsable del tratamiento** de datos de usuarios según [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) §4.4.
2. **Validación Rx:** obligación de mantener farmacéutico colegiado MPPS activo; SLA acordado; escalamiento si no hay validador.
3. **Recetas retenidas/controladas:** pickup, identificación, libros de control **en farmacia**.
4. **Pagos y comprobantes:** cómo se concilian y plazos de disputa.
5. **Salida:** exportación de datos y baja de sucursal sin perjuicio a pacientes con orden abierta.

Plantillas: abogado corporativo + revisión **farmacéutica asesora** en cláusulas de dispensación.

## 9. Métricas que Zonix promete medir y reportar

| Métrica | Reporte |
|---|---|
| Órdenes recibidas / completadas / canceladas | Mensual, por email + dashboard. |
| GMV de la farmacia en Zonix | Mensual. |
| Tickets de soporte abiertos / cerrados | Mensual. |
| Tiempo promedio validación Rx | Mensual. |
| Satisfacción del paciente (NPS) | Trimestral. |
| Tiempo promedio entrega delivery | Mensual. |

## 10. Por qué la farmacia debería decir SÍ ahora

1. **Costo de oportunidad:** cada mes sin Zonix, Rappi se lleva el 30% de su GMV digital, o no vende digital.
2. **Tier introductorio:** primeras 10 farmacias del piloto pagan **USD 0 los primeros 2 meses** (waiver promocional). Después USD 25/60/120 según tier.
3. **Riesgo cero:** cancelación cualquier momento, sin penalidad, sin contrato anual.
4. **Equipo presencial:** Sales B2B + Customer Support en Carabobo. No es un call-center remoto.

## 11. Caso de éxito proyectado (para el inversor, no para la farmacia)

**Ejemplo realista:** Farmacia "La Esperanza", Bella Florida, 1 sucursal.
- **Antes Zonix:** GMV mensual digital USD 0 (no vendía digital). Rappi cobrando 30% de las pocas ventas que entraban.
- **Mes 1 con Zonix (Basic USD 25):** 12 órdenes, GMV USD 320.
- **Mes 3:** 45 órdenes/mes, GMV USD 1.200. Sube a Pro USD 60.
- **Mes 6:** 120 órdenes/mes, GMV USD 3.500. Mantiene Pro.
- **Mes 12:** 240 órdenes/mes, GMV USD 7.200. Sube a Enterprise USD 120.
- **LTV de esa farmacia:** USD 25×3 + USD 60×6 + USD 120×11 + ... = USD 900 promedio (lifetime 20 meses con churn 5%).

Detalle del cálculo en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).

## 12. Documentos hermanos

- [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md): qué le decimos al paciente.
- [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md): qué le decimos al delivery y al farmacéutico.
- [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md): detalle de cómo se cobra y se paga.
- [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md): cómo funciona la validación Rx en producción.
