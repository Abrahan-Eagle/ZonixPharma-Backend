# Auditoría módulo Pharmacist — Zonix Pharma

**Fecha:** 10 junio 2026  
**Prompt:** [PROMPT_AUDIT_360_ZONIX.md](PROMPT_AUDIT_360_ZONIX.md)  
**Parámetros:** `MODO=modulo` · `MODULO=pharmacist` · `PROFUNDIDAD=completa`  
**Alcance:** Backend `app/Http/Controllers/Pharmacist/*`, `routes/api/pharmacist.php` · Front `lib/features/screens/pharmacist/*`, `prescription_service.dart`, `pharmacist_api_errors.dart` · contrato Rx buyer↔pharmacist

---

## Veredicto ejecutivo (CTO)

- **Semáforo global: VERDE-ÁMBAR.** Tras lotes 1–2 (historial, throttle approve/reject, `pharmacist_api_errors`, refresh detalle) el panel farmacéutico está operativo; quedan **gaps de envelope `success`** en flujos buyer/onboarding y **duplicación de fetch** dashboard.
- **Quick win P1 (lote 3):** exigir `success == true` en upload/delete/list buyer recetas + onboarding multipart; throttle `POST /onboarding`.
- **P2 backlog:** tab **Config** en shell (perfil MPPS); evitar reset `verified=false` al re-enviar onboarding si ya verificado; centralizar fetch comercios en service.

---

## Fase 0 — Baseline

| Gate | Resultado |
| ---- | --------- |
| `php artisan test --parallel` | **OK** — 431 passed |
| `flutter analyze --no-fatal-infos` | **OK** (sesión previa) |
| `flutter test` | **OK** — 228 passed (sesión previa) |

---

## Fase 1 — Scope Map

| Capa | Elementos | Archivos clave | Tests Backend |
| ---- | --------- | -------------- | ------------- |
| Rutas pharmacist | 9 rutas bajo `/api/pharmacist` | `routes/api/pharmacist.php` | `PharmacistDashboardTest`, `PharmacistPrescriptionHistoryTest` |
| Controllers | 3 clases | `Dashboard`, `Onboarding`, `Prescription` | Parcial Rx approve/reject |
| Front UI | 5 pantallas + shell tab 5 | `pharmacist_*`, `prescriptions_history_page` | `pharmacist_api_errors_test` |
| Front service | `PrescriptionService` (buyer + pharmacist) | `prescription_service.dart` | `prescription_model_test` |

### Rutas Backend (inventario)

| Método | Ruta | Throttle |
| ------ | ---- | -------- |
| GET | `/dashboard` | default |
| GET/POST | `/onboarding` | POST sin throttle → **PHARM-004** |
| GET | `/prescriptions/pending` | default |
| GET | `/prescriptions/history` | default |
| GET | `/prescriptions/{id}` | default |
| GET | `/prescriptions/{id}/file` | `prescription-download` |
| POST | `/prescriptions/{id}/approve` | `30,1` ✓ |
| POST | `/prescriptions/{id}/reject` | `30,1` ✓ |

---

## Fase 2 — Hallazgos

### [PHARM-001] Onboarding Front no valida envelope `success`
- **Rol:** Front
- **Hallazgo:** `pharmacist_onboarding_page.dart` considera éxito solo por HTTP 2xx; no parsea `success` ni `message` del JSON.
- **Evidencia:** `pharmacist_onboarding_page.dart:136-149`
- **Riesgo:** UX — 200 con `success: false` mostraría éxito falso.
- **Severidad:** P1
- **Estado lote 3:** Remediado

### [PHARM-002] Buyer upload/delete receta sin `success == true`
- **Rol:** Front / Contrato
- **Hallazgo:** `uploadPrescription` y `deletePrescription` no exigen `success === true` (patrón commerce corregido en lote commerce).
- **Evidencia:** `prescription_service.dart:131-161`
- **Riesgo:** Estado UI inconsistente si backend devuelve 200 anómalo.
- **Severidad:** P1
- **Estado lote 3:** Remediado

### [PHARM-003] `loadMyPrescriptions` ignora `success` en 200
- **Rol:** Front
- **Hallazgo:** Lista vacía silenciosa si `success: false` con HTTP 200.
- **Evidencia:** `prescription_service.dart:68-73`
- **Severidad:** P1
- **Estado lote 3:** Remediado (helper + success)

### [PHARM-004] Sin throttle en POST onboarding
- **Rol:** Backend / AppSec
- **Hallazgo:** Multipart MPPS/título sin rate limit.
- **Evidencia:** `routes/api/pharmacist.php:16`
- **Severidad:** P1
- **Estado lote 3:** Remediado `throttle:10,1`

### [PHARM-005] Fetch duplicado `/dashboard` en Pendientes
- **Rol:** Front
- **Hallazgo:** `pending_validations_page` y `pharmacist_dashboard_page` llaman dashboard solo para `commerces` / licencia.
- **Evidencia:** `pending_validations_page.dart:51`, `pharmacist_dashboard_page.dart:41`
- **Severidad:** P2
- **Recomendación:** `PharmacistContextService` o cache en Provider.

### [PHARM-006] Sin tests Feature onboarding pharmacist
- **Rol:** Backend / QA
- **Hallazgo:** No existía `PharmacistOnboardingTest`.
- **Severidad:** P1
- **Estado lote 3:** Remediado

### [PHARM-007] `updateOrCreate` onboarding forzaba `verified => false`
- **Estado lote 4 (P2):** Remediado — solo resetea si cambia MPPS o colegiación; test `verified_preserved_when_updating_notes_only`.

### [PHARM-008] Shell sin tab Config
- **Estado:** Cubierto — tab **Configuración** global en `main_router` → `SettingsPage2` (todos los roles).

### [PHARM-009] Contrato pharmacist — cubierto ✓
- **Hallazgo positivo:** pending/history/show/approve/reject usan `success` + `pharmacistHttpErrorMessage`; historial antes de `{id}`; `PHARMACIST_LICENSE_INVALID` testeado.

---

## Fase 3 — Remediación aplicada (lote 3)

| ID | Cambio |
| -- | ------ |
| PHARM-001 | Onboarding parse JSON + mensajes API |
| PHARM-002/003 | Buyer paths en `PrescriptionService` |
| PHARM-004 | Throttle onboarding POST |
| PHARM-006 | `PharmacistOnboardingTest.php` |

---

## Fase 4 — Verificación

```bash
cd ZonixPharma-Backend && php artisan test --parallel
cd ZonixPharma-Front && flutter analyze && flutter test
```

---

## Próximos pasos sugeridos

1. Smoke E2E manual: pedido Rx → subir receta → pharmacist aprueba → `pending_payment`.
2. Auditoría 360° módulo **orders** (complemento buyer tracking).
3. P2: tab Config pharmacist + no resetear `verified` en onboarding update menor.
