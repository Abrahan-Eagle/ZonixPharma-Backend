---
name: zonix-medicine-catalog
description: Catálogo de medicamentos Zonix Pharma. Atributos farmacéuticos del Product, lotes (medicine_lots) FIFO, registro INHRR, ATC, regulación, cadena de frío.
---

# zonix-medicine-catalog

Skill de dominio para el catálogo farmacéutico de Zonix Pharma.

## Cuándo aplicar

- Crear / actualizar productos en `Commerce/ProductController`.
- Validar atributos farmacéuticos en seeders y factories.
- Lógica de despacho FIFO sobre `medicine_lots`.
- Búsqueda buyer por principio activo, ATC, código de barras.
- Reglas de visibilidad según `requires_prescription` y catálogo público.

## Atributos del producto (medicamento)

`Product` (`products` table):

- Identificación farmacéutica:
  - `active_ingredient` (principio activo, ej. paracetamol).
  - `dosage_form` (`tablet`, `capsule`, `syrup`, `suspension`, `injection`, `cream`, `ointment`, `gel`, `drops`, `patch`, `suppository`, `inhaler`, `powder`, `solution`, `spray`, `device`, `other`).
  - `concentration` (string, ej. `500mg`, `200mg/5ml`).
  - `presentation` (string, ej. `Caja x 20 tabletas`).
  - `manufacturer` (laboratorio).
- Regulación / trazabilidad:
  - `health_registry` (Registro INHRR, ej. `E.F. 12345`).
  - `barcode` (EAN-13 / código nacional).
  - `atc_code` (Anatomical Therapeutic Chemical de OMS, opcional).
- Reglas Rx / cadena de frío:
  - `requires_prescription` (bool, default false).
  - `prescription_type` (enum: `common`, `retained`, `special`).
  - `controlled_substance` (bool, default false).
  - `cold_chain` (bool, default false).
- Stock:
  - `stock_quantity` (agregado, opcional).
  - El stock real para despacho vive en `medicine_lots` (FIFO por `expiry_date`).

## Lotes (`medicine_lots`)

- `lot_number`, `expiry_date`, `manufactured_at`.
- `quantity_received`, `quantity_available`.
- `received_at`, `supplier`, `notes`.
- Despacho FIFO: ordenar por `expiry_date` asc entre los lotes con `quantity_available > 0` y `expiry_date >= today`.
- `Product::activeLots()` ya filtra esto.

## Visibilidad y reglas

- En catálogo público buyer: mostrar producto siempre, pero los productos `requires_prescription` deben:
  1. Llevar badge "Requiere receta".
  2. No participar en filtros de promoción / descuento.
  3. Si `controlled_substance` → indicar "Sustancia controlada".
  4. Si `cold_chain` → indicar "Cadena de frío".
- Búsqueda permitida por: nombre, principio activo, ATC, código de barras.
- Mostrar registro sanitario si está disponible (legal: ayuda al paciente a verificar).

## Form Requests

- `StoreProductRequest` y `UpdateProductRequest` deben validar:
  - `active_ingredient` requerido si `requires_prescription = true`.
  - `prescription_type` requerido si `requires_prescription = true`.
  - `health_registry` recomendado en todos.
  - `dosage_form` en el enum permitido.

## Frontend (Flutter)

- Modelo `lib/models/product.dart` con `pharmaSummary` getter (combina principio activo + concentración + presentación).
- Modelo `lib/models/medicine_lot.dart` para vista de inventario en farmacia.

## Reglas de promoción

- En `CartService` y `OrderService`: si `requires_prescription = true`, NO aplicar descuento de cupón / promoción a esa línea (controlado por `ZONIX_PHARMA_DISALLOW_PROMOTIONS_ON_RX`).

**Última actualización:** 30 abril 2026
