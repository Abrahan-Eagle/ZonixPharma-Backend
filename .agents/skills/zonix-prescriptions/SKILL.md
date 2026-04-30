---
name: zonix-prescriptions
description: Sistema de receta médica (Rx) en Zonix Pharma. Modelo Prescription, validación por farmacéutico colegiado, TTL, controlados, eventos broadcast.
---

# zonix-prescriptions

Skill de dominio para todo lo relacionado con receta médica (Rx) en Zonix Pharma.

## Cuándo aplicar

- Cualquier flujo donde el comprador suba o vea recetas (`/api/buyer/prescriptions/*`).
- Cualquier flujo donde un farmacéutico valide o rechace recetas (`/api/pharmacist/prescriptions/*`).
- Reglas de negocio de checkout que dependen de receta aprobada.
- Lógica del estado `pending_prescription_validation` en la orden.
- Manejo de TTL y expiración de receta (`PrescriptionService::expirePending`).

## Modelo

- Tabla `prescriptions`:
  - `patient_profile_id`, `order_id`, `commerce_id`.
  - `prescribing_doctor_name`, `prescribing_doctor_license` (MPPS), `prescribing_doctor_specialty`, `issued_at`.
  - `image_url` (cifrado en disco), `prescription_type` (`common`/`retained`/`special`).
  - `status` (`pending_validation`/`approved`/`rejected`/`expired`).
  - `validated_by_profile_id`, `validated_at`, `rejection_reason`, `expires_at`.
- Modelo `App\Models\Prescription` con scopes `pending`, `forCommerce`.
- Servicio `App\Services\PrescriptionService`:
  - `upload()` (crea receta, vincula a orden, dispara `PrescriptionUploaded`).
  - `approve()` (mueve orden de `pending_prescription_validation` a `pending_payment`, dispara `PrescriptionValidated`).
  - `reject()` (cancela orden, dispara `PrescriptionRejected`).
  - `expirePending()` (job programado, expira recetas con TTL vencido).

## Endpoints

### Buyer (`auth:sanctum`, `role:users`)

```
GET    /api/buyer/prescriptions
POST   /api/buyer/prescriptions
GET    /api/buyer/prescriptions/{prescription}
DELETE /api/buyer/prescriptions/{prescription}
```

### Pharmacist (`auth:sanctum`, `role:pharmacist`)

```
GET   /api/pharmacist/dashboard
GET   /api/pharmacist/prescriptions/pending
GET   /api/pharmacist/prescriptions/{prescription}
POST  /api/pharmacist/prescriptions/{prescription}/approve
POST  /api/pharmacist/prescriptions/{prescription}/reject
```

## Reglas

- Solo el farmacéutico cuya `profile.id` coincide con `commerces.pharmacist_in_charge_profile_id` puede validar.
- La licencia del farmacéutico (`pharmacist_profiles.license_expires_at`) debe estar vigente y `verified = true`.
- Si TTL (`ZONIX_PHARMA_PRESCRIPTION_VALIDATION_TTL_MINUTES`, default 60) vence sin validación → receta `expired` + orden `cancelled`.
- Sustancias controladas (`controlled_substance = true`) requieren `prescription_type = retained`.
- Promociones y cupones NO se aplican a líneas Rx (`ZONIX_PHARMA_DISALLOW_PROMOTIONS_ON_RX`).
- El estado de la orden con Rx es `pending_prescription_validation` hasta aprobación; luego pasa a `pending_payment`.

## Eventos broadcast

- `PrescriptionUploaded` → canales `commerce.{id}`, `user.{id}`, `orders.{id}`.
- `PrescriptionValidated` → canales `orders.{id}`, `user.{id}`, `commerce.{id}`.
- `PrescriptionRejected` → canales `orders.{id}`, `user.{id}`, `commerce.{id}`.

## Privacidad

- La imagen/PDF se considera dato sensible de salud. Cifrado en disco, acceso limitado al farmacéutico de la farmacia despachadora, paciente y administrador. Retención limitada con purga automática tras cierre de pedido + 90 días.
- Audit log en `admin_audit_logs` para cada decisión.

## Frontend (Flutter)

- Modelo `lib/models/prescription.dart`.
- Servicio `lib/features/services/prescription_service.dart`.
- Pantallas:
  - `lib/features/screens/prescriptions/prescription_upload_page.dart`
  - `lib/features/screens/prescriptions/my_prescriptions_page.dart`
  - `lib/features/screens/pharmacist/pharmacist_dashboard_page.dart`
  - `lib/features/screens/pharmacist/pending_validations_page.dart`
  - `lib/features/screens/pharmacist/validation_detail_page.dart`

## Documentos relacionados

- [docs/PLAN_RX_VALIDATION.md](../../../docs/PLAN_RX_VALIDATION.md)
- [docs/PLAN_REGULATORIO_PHARMA_VE.md](../../../docs/PLAN_REGULATORIO_PHARMA_VE.md)

**Última actualización:** 30 abril 2026
