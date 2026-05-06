# Plan de métodos de pago

> **Última actualización:** 4 mayo 2026.
> Documento que detalla cómo se cobra y se paga en Zonix Pharma. Reusa lógica ya implementada en Zonix Eats y documentada en [`../logica-pagos-por-rol.md`](../logica-pagos-por-rol.md) y [`../FLUJO_PAGO_ORDEN.md`](../FLUJO_PAGO_ORDEN.md).
> Para marco regulatorio (Sudeban) ver [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md) sección "Sudeban / pagos".

## 1. Métodos de pago soportados

Zonix Pharma opera con **pagos manuales VE nativos**, sin pasarelas internacionales (Stripe / PayPal) ni tarjetas de crédito.

| Método | Aplicable | Tiempo confirmación | Comisión bancaria |
|---|---|---|---|
| **Pago Móvil C2P** | Pago paciente → farmacia | 1-5 minutos | 0% (BCV) |
| **Transferencia bancaria** | Pago paciente → farmacia, paciente → repartidor | 1-30 minutos | 0% |
| **Zelle** (USD desde EE.UU.) | Pago paciente → farmacia (paciente con cuenta US o familiar US) | 5-30 minutos | 0% (Zelle) |
| **Binance Pay USDT** | Pago paciente → farmacia, repartidor en USDT | 1-3 minutos | 0% (Binance Pay) |
| **Efectivo** | Pago contra entrega | Inmediato | 0% |
| **Punto de venta físico** | Pago en farmacia (pickup) | Inmediato | 1-3% |

**No soportados:**
- Tarjeta de crédito internacional → falta MerchantID empresarial VE costoso.
- PayPal → no operativo en VE para empresas locales.
- Stripe → no opera en VE.
- Petro / criptos exóticas → liquidez baja en VE 2026.

## 2. Flujos de pago detallados

### 2.1 Flujo paciente → farmacia (orden OTC)

```mermaid
sequenceDiagram
    participant P as Paciente
    participant Z as Zonix App
    participant F as Farmacia
    P->>Z: Crea orden (medicamento + dirección)
    Z->>P: Muestra opciones de pago
    P->>Z: Selecciona Pago Movil C2P
    Z->>P: Muestra C2P de la farmacia
    P->>F: Realiza Pago Movil C2P (banco a banco)
    P->>Z: Sube comprobante (capture o referencia)
    Z->>F: Notifica orden con comprobante
    F->>Z: Valida comprobante (manual)
    Z->>P: Push: pago confirmado
    F->>Z: Marca orden lista para delivery
```

**Tiempo total:** 5-15 minutos desde orden hasta pago confirmado.

### 2.2 Flujo paciente → farmacia (orden Rx)

Igual al flujo OTC, **pero con paso adicional**: validación Rx por farmacéutico colegiado **antes** del pago. Es decir:

1. Paciente crea orden con receta cargada.
2. Estado orden: `pending_prescription_validation`.
3. Farmacéutico colegiado valida (≤ 60 min).
4. Estado orden: `pending_payment`.
5. Paciente paga (igual flujo 2.1).
6. Estado orden: `pending_dispatch`.
7. Despacha y entrega.

Detalle del flujo Rx en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md).

### 2.3 Flujo Zonix → farmacia (membresía mensual)

```mermaid
sequenceDiagram
    participant Z as Zonix
    participant F as Farmacia
    Z->>F: Genera factura digital SENIAT al inicio del mes
    Z->>F: Envia link de pago por email + WhatsApp
    F->>Z: Selecciona metodo (PMC2P / Transferencia / Zelle / Binance Pay)
    F->>Z: Realiza pago (en USD constantes)
    F->>Z: Sube comprobante o referencia
    Z->>F: Confirma + envia recibo
    Z->>F: Activa servicios para el mes en curso
```

**Frecuencia:** mensual. Día 1 de cada mes para clientes recurrentes; día de firma para nuevos.

**Política de impago:**
- Día 1: factura emitida.
- Día 5: recordatorio automático.
- Día 8: bloqueo soft (no acepta nuevas órdenes pero mantiene catálogo visible).
- Día 12: bloqueo hard (catálogo oculto).
- Día 15: cancelación cuenta + lista negra interna.

### 2.4 Flujo Zonix → repartidor (delivery fee)

```mermaid
sequenceDiagram
    participant P as Paciente
    participant F as Farmacia
    participant Z as Zonix
    participant R as Repartidor
    P->>F: Paga orden completa (incluye delivery fee)
    F->>Z: Confirma recepcion total
    Z->>F: Calcula split: farmacia + delivery fee
    F->>R: Transferencia diaria delivery fee acumulado (PMC2P o Binance Pay)
    F->>Z: Sube comprobante de pago a repartidor
    Z->>R: Registra pago + retiene 8% comision Zonix sobre delivery fee
```

**Variante alternativa:** Zonix actúa como agregador y paga directo al repartidor (mes 6+ con asesoría Sudeban). En piloto NO; la farmacia paga al repartidor para evitar caer bajo regulación de "intermediario de pagos" Sudeban.

### 2.5 Flujo Zonix → empresa de delivery

Similar a 2.4, pero pago semanal a la empresa (no al agente individual) y consolidado.

## 3. Conciliación contable

### 3.1 Para Zonix (revenue de membresía)

- Cada mes Zonix recibe entre USD 4.500 (mes 12 con 100 farmacias) y USD 5.400+ (post-mes 12).
- 60-70% por Pago Móvil C2P.
- 20-25% por transferencia.
- 10-15% por Zelle / Binance Pay USDT (cadenas con flujo USD).
- Conciliación manual los días 5 y 15 de cada mes con contador externo.

### 3.2 Para la farmacia (orden de venta)

- Cada orden tiene: monto medicamento + delivery fee.
- Farmacia recibe el monto del medicamento al instante (validación comprobante).
- Farmacia recibe el delivery fee y lo paga al repartidor (manual diario).

### 3.3 Para el repartidor

- Recibe pago diario o semanal (según preferencia).
- Foundamentación: WhatsApp con foto del comprobante.

## 4. Factura digital SENIAT

### 4.1 Habilitación

- Mes 1-2 del piloto: contratar proveedor autorizado SENIAT.
- Costo: USD 100-200 anuales.
- Proveedores recomendados: TheFactoryHKA, Edsa, Wisetax (autorizados SENIAT).

### 4.2 Emisión

- Cada membresía mensual genera 1 factura digital.
- Cada compra de paciente: la farmacia emite factura (no Zonix).
- Zonix solo factura a la farmacia, no al paciente.

### 4.3 Archivado

- Sello digital + firma digital + reporte mensual a SENIAT.
- Backup en S3 o equivalente con retención 10 años (legal).

## 5. Mitigación de riesgos de pago

| Riesgo | Mitigación |
|---|---|
| Paciente sube comprobante falso | Validación visual por la farmacia + Customer Support de Zonix puede mediar. Penalización: cuenta suspendida en 24h. |
| Farmacia no paga membresía | Política de bloqueo escalonado (sección 2.3). |
| Repartidor no recibe pago de farmacia | Customer Support media. Penalización a la farmacia: bloqueo de delivery fee adicional hasta resolver. |
| Devaluación bolívar entre orden y pago | Política: precio congelado por 30 minutos desde generación de orden. Si paciente excede, debe re-cotizar. |
| Sudeban regula a Zonix como intermediario de pagos | Piloto opera sin Zonix recibir dinero del paciente directamente. Si requiere, Zonix obtiene licencia Sudeban (12-18 meses, post-Serie A). |
| Bloqueo cuentas Zelle por origen VE | Política: no usar Zelle como único método; tener PMC2P + Binance Pay como respaldo. |

## 6. Implementación técnica (referencia)

El backend Laravel ya tiene módulos implementados:

- `app/Models/Order` con campos `payment_method`, `payment_proof_url`, `payment_status`, `payment_validated_at`.
- `app/Http/Controllers/PaymentController` para upload de comprobante + validación.
- `database/migrations` con tabla `payments` y `payment_methods`.
- Eventos broadcast (`PaymentValidated`, `PaymentRejected`) con Pusher.
- FCM push notifications a paciente y farmacia.

Detalle: [`../FLUJO_PAGO_ORDEN.md`](../FLUJO_PAGO_ORDEN.md) y [`../logica-pagos-por-rol.md`](../logica-pagos-por-rol.md).

## 7. Política de reembolsos

### 7.1 Quién reembolsa

- **Si el problema es de la farmacia** (medicamento equivocado, vencido, mal estado): la farmacia reembolsa al paciente directamente. Zonix media.
- **Si el problema es del repartidor** (pérdida, robo durante la entrega): el repartidor pierde el delivery fee. La farmacia reembolsa al paciente y no paga al repartidor.
- **Si el problema es de Zonix** (bug en la app, validación errónea): Zonix reembolsa al paciente (cargo a cuenta operativa, raro).

### 7.2 Tiempo de reembolso

- 24-48h después de mediación de Customer Support.
- Mismo método del pago original (PMC2P → PMC2P, etc.).

### 7.3 Disputa final

- Si paciente y farmacia no acuerdan: Customer Support de Zonix decide en base a evidencia (foto entrega, estado producto, comprobante).
- Decisión inapelable en piloto. Post-Serie A se evalúa órgano externo.

## 8. KPIs de pagos

| KPI | Meta mes 6 | Meta mes 12 |
|---|---|---|
| % órdenes pagadas con PMC2P | 65% | 60% |
| % órdenes pagadas con Zelle | 8% | 12% |
| % órdenes pagadas con Binance Pay | 3% | 8% |
| % órdenes pagadas en efectivo (pickup) | 18% | 15% |
| Tiempo promedio validación pago (farmacia) | 8 min | 5 min |
| Tasa de impago membresía | < 8% | < 5% |
| Tasa de comprobante falso detectado | < 0,5% | < 0,3% |

## 9. Documentos hermanos

- [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md): cómo el paciente paga.
- [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md): cómo la farmacia recibe.
- [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md): cómo el repartidor cobra.
- [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md): validación Rx antes del pago.
- [`../FLUJO_PAGO_ORDEN.md`](../FLUJO_PAGO_ORDEN.md): implementación técnica detallada.
- [`../logica-pagos-por-rol.md`](../logica-pagos-por-rol.md): roles en el flujo de pagos.
- [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md): marco regulatorio Sudeban.
