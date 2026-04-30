# AGENTS.md - Zonix Pharma Backend (Laravel API)

> Instrucciones para AI coding agents trabajando en el backend de Zonix Pharma.
> Para documentación detallada de lógica de negocio, ver `README.md`.
> Para reglas de mantenimiento y coherencia de skills, ver `MAINTENANCE_SKILLS.md`.

## Contexto de sesión

**Al iniciar o retomar trabajo:** leer [docs/active_context.md](docs/active_context.md) si existe.

---

## Project Overview

| Métrica | Valor |
| ------------------------ | -------------------------------------------------- |
| **Producto** | Zonix Pharma — marketplace farmacéutico Venezuela (OTC + Rx) |
| **Framework** | Laravel 10.x / PHP 8.1+ |
| **Base de Datos** | MySQL |
| **Versión** | 1.0.0 |
| **Estado** | Migración Eats → Pharma (fork destructivo) en progreso |
| **Roles** | 7 (users, commerce, pharmacist, delivery, delivery_agent, delivery_company, admin) |
| **Última actualización** | 30 abril 2026 |

### Cambios recientes

- **30 abr 2026 — Transformación Zonix Eats → Zonix Pharma (fork destructivo, MVP completo Rx).**
  - Branding: `Zonix Pharma`, `com.zonix.pharma`, `zonix://pharmacy/{id}`, canal FCM `zonix_pharma_fcm`, dominio `zonixpharma.com`.
  - Paleta Pharma fría (#1E2A5A, #0F4C5C, #56C7B8, #A8DCCB, #F5F7FA, #C7CFD9, #142033, #F2A65A) en `app_colors.dart` + tema light/dark Pharma con Plus Jakarta Sans.
  - Modelo de datos: `products` ampliado (principio activo, presentación, INHRR, ATC, requires_prescription, prescription_type, controlled_substance, cold_chain). `commerces` ampliado (pharmacist_in_charge, health_permit). `orders` ampliado (estado `pending_prescription_validation`, `prescription_id`, `cold_chain_required`).
  - Tablas nuevas: `medicine_lots`, `prescriptions`, `pharmacist_profiles`. Eliminadas: `product_extras`, `product_preferences`.
  - Rol nuevo: `pharmacist`. Eventos nuevos: `PrescriptionUploaded`, `PrescriptionValidated`, `PrescriptionRejected`. Servicio `PrescriptionService`. Controllers `Pharmacist/PrescriptionController`, `Pharmacist/DashboardController`, `Buyer/PrescriptionController`, `Buyer/PharmacyController` (shim `RestaurantController` deprecado).
  - Documentación: [docs/BRAND_ZONIX_PHARMA.md](docs/BRAND_ZONIX_PHARMA.md), [docs/PLAN_RX_VALIDATION.md](docs/PLAN_RX_VALIDATION.md), [docs/PLAN_REGULATORIO_PHARMA_VE.md](docs/PLAN_REGULATORIO_PHARMA_VE.md), [docs/MIGRACION_EATS_PHARMA.md](docs/MIGRACION_EATS_PHARMA.md).
  - Validación pendiente: `php artisan test`, `flutter test`, build APK debug, smoke OTC y Rx (bloque 7 y 8 del plan).

---

## Modelo de datos: Profile como entidad principal

- `Profile` es la entidad principal para datos de persona (comprador, comercio, delivery, **pharmacist**): teléfonos, documentos y direcciones pertenecen al perfil (`profile_id` en `phones`, `documents`, `addresses`).
- `Users` tiene relación 1:1 con `Profile`.
- El farmacéutico colegiado tiene además un `pharmacist_profiles` con sus datos colegiados (MPPS, licencia).

---

## Setup Commands

```bash
# Instalar
composer install

# Configurar entorno
cp .env.example .env
php artisan key:generate

# Base de datos (consolidada en migraciones create_* Pharma)
php artisan migrate:fresh --seed

# Servidor
php artisan serve

# Scheduler (TTL recetas, expiración pending_payment, etc.)
php artisan schedule:work

# Tests
php artisan test
```

---

## Roles y rutas (Pharma)

| Rol | Prefijo principal | Notas |
| --- | ----------------- | ----- |
| `users` | `/api/buyer/*` | Carrito, pedidos, recetas (`/api/buyer/prescriptions`), farmacias (`/api/buyer/pharmacies`, alias `/restaurants`). |
| `commerce` | `/api/commerce/*` | Inventario, lotes, órdenes, comprobantes. |
| `pharmacist` | `/api/pharmacist/*` | Validación de recetas, dashboard. |
| `delivery_agent` / `delivery` | `/api/delivery/*` | Asignaciones, tracking, ganancias. |
| `delivery_company` | `/api/delivery-company/*` | Agentes, asignación, métricas. |
| `admin` | `/api/admin/*` | Dashboard, usuarios, métricas, audit log. |

---

## Reglas farmacéuticas (Pharma)

Configurables en `config/zonix.php` (sección `pharma`):

- `block_rx_without_prescription` (default true): el checkout falla si el carrito tiene productos `requires_prescription` y no hay receta aprobada.
- `prescription_validation_ttl_minutes` (default 60): TTL de receta pendiente; al vencer cancela el pedido.
- `disallow_promotions_on_rx` (default true): no aplicar descuentos a líneas Rx.
- `require_cold_chain_handling` (default true): `cold_chain = true` restringe modos de delivery.

---

## Available Skills

| Skill | Ruta |
| ----- | ---- |
| `laravel-specialist` | [.agents/skills/laravel-specialist/SKILL.md](.agents/skills/laravel-specialist/SKILL.md) |
| `api-design-principles` | [.agents/skills/api-design-principles/SKILL.md](.agents/skills/api-design-principles/SKILL.md) |
| `architecture-patterns` | [.agents/skills/architecture-patterns/SKILL.md](.agents/skills/architecture-patterns/SKILL.md) |
| `clean-code-principles` | [.agents/skills/clean-code-principles/SKILL.md](.agents/skills/clean-code-principles/SKILL.md) |
| `code-review-excellence` | [.agents/skills/code-review-excellence/SKILL.md](.agents/skills/code-review-excellence/SKILL.md) |
| `error-handling-patterns` | [.agents/skills/error-handling-patterns/SKILL.md](.agents/skills/error-handling-patterns/SKILL.md) |
| `security` | [.agents/skills/security/SKILL.md](.agents/skills/security/SKILL.md) |
| `mysql-best-practices` | [.agents/skills/mysql-best-practices/SKILL.md](.agents/skills/mysql-best-practices/SKILL.md) |
| `systematic-debugging` | [.agents/skills/systematic-debugging/SKILL.md](.agents/skills/systematic-debugging/SKILL.md) |
| `test-driven-development` | [.agents/skills/test-driven-development/SKILL.md](.agents/skills/test-driven-development/SKILL.md) |
| `git-commit` | [.agents/skills/git-commit/SKILL.md](.agents/skills/git-commit/SKILL.md) |

### Custom (Zonix)

| Skill | Descripción | Ruta |
| ----- | ----------- | ---- |
| `zonix-api-patterns` | Response, paginación, roles, middleware Pharma | [.agents/skills/zonix-api-patterns/SKILL.md](.agents/skills/zonix-api-patterns/SKILL.md) |
| `zonix-order-lifecycle` | Estados de orden incluyendo `pending_prescription_validation` | [.agents/skills/zonix-order-lifecycle/SKILL.md](.agents/skills/zonix-order-lifecycle/SKILL.md) |
| `zonix-delivery-system` | Haversine, OSRM, zonas, tracking, cadena de frío | [.agents/skills/zonix-delivery-system/SKILL.md](.agents/skills/zonix-delivery-system/SKILL.md) |
| `zonix-realtime-events` | Pusher, FCM, broadcasting, canales | [.agents/skills/zonix-realtime-events/SKILL.md](.agents/skills/zonix-realtime-events/SKILL.md) |
| `zonix-payments` | Pagos manuales VE (pago móvil, transferencia, Zelle, Binance Pay) | [.agents/skills/zonix-payments.md](.agents/skills/zonix-payments.md) |
| `context-updater` | Resumir sesión en `docs/active_context.md` | [.agents/skills/context-updater/SKILL.md](.agents/skills/context-updater/SKILL.md) |
| `documentar-avances` | Proponer "Cambios recientes" en AGENTS.md/README | [.agents/skills/documentar-avances/SKILL.md](.agents/skills/documentar-avances/SKILL.md) |

---

## Auto-invoke Skills

| Acción | Skill |
| ------ | ----- |
| Crear/modificar controladores o rutas | `laravel-specialist` + `zonix-api-patterns` |
| Diseñar nuevos endpoints API | `api-design-principles` |
| Crear migraciones de BD | `mysql-best-practices` + **norma Migraciones** (editar create, no crear add/change) |
| Agregar autenticación / autorización | `security` |
| Crear/modificar tests | `test-driven-development` |
| Debuggear un error | `systematic-debugging` |
| Trabajar con estados / flujo de órdenes | `zonix-order-lifecycle` |
| Implementar eventos broadcast | `zonix-realtime-events` |
| Lógica de pagos | `zonix-payments` |
| Calcular distancias/zonas | `zonix-delivery-system` |
| Hacer git commit | `git-commit` |
| Cerrar sesión con cambios relevantes | `context-updater` |
| Finalizar tarea y documentar avances | `documentar-avances` |

---

## Documentos clave (Pharma)

- **[docs/BRAND_ZONIX_PHARMA.md](docs/BRAND_ZONIX_PHARMA.md)** — paleta, tipografía, do/don't, tokens.
- **[docs/PLAN_RX_VALIDATION.md](docs/PLAN_RX_VALIDATION.md)** — flujo de validación de receta y endpoints.
- **[docs/PLAN_REGULATORIO_PHARMA_VE.md](docs/PLAN_REGULATORIO_PHARMA_VE.md)** — regulación VE, MPPS, INHRR, datos de salud.
- **[docs/MIGRACION_EATS_PHARMA.md](docs/MIGRACION_EATS_PHARMA.md)** — qué cambió en la transformación Eats → Pharma.

---

**Documentación completa de lógica de negocio:** Ver `README.md`
**Última actualización:** 30 abril 2026
