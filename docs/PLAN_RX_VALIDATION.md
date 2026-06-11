# Plan · Validación de recetas médicas (Rx) en Zonix Pharma

## Objetivo

Permitir la venta de medicamentos Rx a través de la plataforma cumpliendo
los requisitos básicos de despacho farmacéutico en Venezuela: receta médica
vigente, validación por farmacéutico colegiado responsable de la farmacia
despachadora, trazabilidad y reglas diferenciadas para sustancias
controladas y cadena de frío.

## Actores

- **Comprador / paciente** (rol `users`): sube la foto/PDF de la receta, recibe
  notificaciones del estado.
- **Farmacéutico colegiado** (rol `pharmacist`): aprueba o rechaza la receta.
- **Farmacia** (rol `commerce`): despacha el pedido una vez aprobada la receta y validado el pago.
- **Admin**: supervisa, audita y verifica licencias del farmacéutico.

## Políticas configurables (checkout y cupones)

### `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION` (default **false**)

- **Permisivo (default):** el comprador puede crear el pedido con ítems Rx sin enviar `prescription_id`. La orden inicia en `pending_prescription_validation` y la receta se sube después con `POST /api/buyer/prescriptions` (MVP).
- **Estricto (`true`):** si hay productos Rx, el `POST /api/buyer/orders` debe incluir `prescription_id` de una receta en estado `approved`, del mismo `commerce_id`, `patient_profile_id` del comprador y sin `order_id` previo. La orden inicia en `pending_payment` y queda vinculada a esa receta.
- **Cliente Flutter:** consulta `GET /api/pharma-policy` (`block_rx_without_prescription`) para banners en carrito/checkout y selector de receta aprobada.

### `ZONIX_PHARMA_PRESCRIPTION_VALIDATION_TTL_MINUTES`

- Valor **> 0:** al subir receta se asigna `expires_at`; el comando `zonix:expire-pending-prescriptions` caduca pendientes y cancela el pedido si sigue en validación.
- Valor **≤ 0:** no se asigna `expires_at` (sin caducidad por TTL). Se registra **warning** en log al subir receta y el comando de expiración no procesa por tiempo (ver comentario en `config/zonix.php`).

### `ZONIX_PHARMA_DISALLOW_PROMOTIONS_ON_RX` (default **true**)

El descuento del cupón se calcula solo sobre el subtotal de líneas **no** Rx. Si el carrito es 100 % Rx, el cupón devuelve error `ORDER_COUPON_RX_ONLY_CART`.

### `ZONIX_PHARMA_REQUIRE_COLD_CHAIN_HANDLING` (default **true**)

Si hay productos `cold_chain = true`, no se permite `delivery_type = delivery` en checkout: error `ORDER_COLD_CHAIN_DELIVERY_NOT_ALLOWED` (retiro en farmacia).

### Subida de receta (idempotencia)

Mientras la receta vinculada al pedido esté en `pending_validation` o `approved`, un segundo `POST /api/buyer/prescriptions` para el mismo pedido responde **409**. Solo se permite nueva subida si la anterior está `rejected` o `expired`. El pedido debe estar en `pending_prescription_validation` (no en `pending_payment`).

## Reglas de negocio

1. Si el carrito tiene al menos un producto con `requires_prescription = true`,
   el pedido se crea en estado `pending_prescription_validation` (no
   `pending_payment`).
2. La receta se sube vía `POST /api/buyer/prescriptions` con el `order_id`,
   datos del médico (nombre, MPPS opcional, especialidad opcional, fecha de
   emisión opcional), tipo de receta (`common`/`retained`/`special`) y la
   imagen/PDF.
3. La receta queda en estado `pending_validation` con TTL configurable
   (`ZONIX_PHARMA_PRESCRIPTION_VALIDATION_TTL_MINUTES`, default 60 min).
4. Solo el farmacéutico colegiado de la farmacia despachadora puede aprobar
   o rechazar (validado por `pharmacist_in_charge_profile_id` del `Commerce`).
5. La aprobación dispara `PrescriptionValidated` y mueve el pedido a
   `pending_payment`.
6. El rechazo dispara `PrescriptionRejected` y cancela el pedido (`cancelled`).
7. Si vence el TTL sin validación → `PrescriptionService::expirePending()`
   marca la receta como `expired` y cancela el pedido.
8. Sustancias controladas (`controlled_substance = true`) requieren receta
   retenida (`prescription_type = retained`); UI debe sugerir y backend debe
   validar al recibir.
9. Promociones y cupones NO se aplican a líneas con `requires_prescription`
   (ver `ZONIX_PHARMA_DISALLOW_PROMOTIONS_ON_RX`).
10. Productos `cold_chain = true`: el backend **bloquea** delivery si
    `require_cold_chain_handling` está activo; el pedido se marca con
    `cold_chain_required = true`. El frontend deshabilita “Domicilio” y
    sugiere retiro en farmacia.

## Diagrama de estados de orden con Rx

```
[creación carrito Rx]
        │
        ▼
pending_prescription_validation
        │ (sube receta, farmacéutico aprueba)
        ▼
pending_payment   ◀───── (sin Rx: estado inicial directo)
        │
        ▼
paid → processing → shipped → delivered
        │
        ▼
cancelled (en cualquier punto bajo reglas)
```

## Endpoints

### Buyer

| Método | Path | Descripción |
| ------ | ---- | ----------- |
| `GET`    | `/api/buyer/prescriptions`              | Lista propias |
| `POST`   | `/api/buyer/prescriptions`              | Subir receta (multipart `image`) |
| `GET`    | `/api/buyer/prescriptions/{id}`         | Detalle |
| `DELETE` | `/api/buyer/prescriptions/{id}`         | Eliminar (solo si pending_validation) |

### Pharmacist

| Método | Path | Descripción |
| ------ | ---- | ----------- |
| `GET`  | `/api/pharmacist/dashboard`                          | KPIs por farmacia asignada |
| `GET`  | `/api/pharmacist/prescriptions/pending`              | Lista pendiente |
| `GET`  | `/api/pharmacist/prescriptions/{id}`                 | Detalle |
| `POST` | `/api/pharmacist/prescriptions/{id}/approve`         | Aprobar |
| `POST` | `/api/pharmacist/prescriptions/{id}/reject`          | Rechazar (`reason` requerido) |

## Modelo de datos

- Tabla `prescriptions` (FKs: `patient_profile_id` → profiles, `order_id` →
  orders, `commerce_id` → commerces, `validated_by_profile_id` → profiles).
- Tabla `pharmacist_profiles` (1:1 con profile, MPPS único, license_expires_at).
- Tabla `medicine_lots` (lotes con `expiry_date` para FIFO).
- Tabla `orders` añade columnas `requires_prescription`, `prescription_id`,
  `prescription_validated_at`, `cold_chain_required` y enum estado nuevo.

## Eventos broadcast

| Evento | Canal | Payload clave |
| ------ | ----- | ------------- |
| `PrescriptionUploaded`  | `commerce.{id}`, `user.{id}`, `orders.{id}` | `prescription_id`, `order_id`, `prescription_type`, `expires_at` |
| `PrescriptionValidated` | `orders.{id}`, `user.{id}`, `commerce.{id}` | `prescription_id`, `validated_at`, `status` |
| `PrescriptionRejected`  | `orders.{id}`, `user.{id}`, `commerce.{id}` | `prescription_id`, `rejection_reason`, `status` |

## Privacidad y cumplimiento

- La imagen/PDF se guarda cifrado en disco y bajo el disco `local`/S3 con ACL
  privado.
- Acceso: solo el farmacéutico de la farmacia despachadora, el paciente
  dueño y el administrador.
- Retención: configurable (default: hasta el cierre del pedido +
  90 días). Después se purga la imagen y se conserva metadata.
- Audit log en `admin_audit_logs` para cada decisión del farmacéutico.

## Métricas

- Tiempo medio de validación por farmacia.
- % de recetas aprobadas vs rechazadas.
- Recetas vencidas por TTL.
- Recetas por tipo (`common`/`retained`/`special`).
