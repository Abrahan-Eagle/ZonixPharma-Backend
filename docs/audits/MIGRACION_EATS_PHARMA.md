# Migración Zonix Eats → Zonix Pharma

> **Estrategia:** fork destructivo. Este repo deja de ser Eats. Eats sigue
> vivo solo en su repositorio original. MVP completo Rx desde día 1.

Fecha de migración: **30 abril 2026**.

## Qué se conservó

- Auth + Sanctum + RBAC (6 → 7 roles, se añade `pharmacist`).
- `Profile` 1:1 con `User` y dueño de teléfonos / documentos / direcciones (`profile_id`).
- Order lifecycle, idempotency, expiración `pending_payment`, comprobantes, validación de pago manual.
- Realtime: Pusher + FCM, eventos `OrderCreated`, `OrderStatusChanged`, `PaymentValidated`, `NewMessage`, `NotificationCreated`, `DeliveryLocationUpdated`, `OrderPendingAssignment`.
- Delivery: `DeliveryCompany`, `DeliveryAgent`, `DeliveryFeeService`, OSRM/ORS/Nominatim, `OrderDelivery`.
- Disputas, cupones, reviews (limitadas en Pharma — ver abajo), chat por orden, soporte.
- Modelo de membresía y comisión por farmacia (antes por restaurante).

## Qué se renombró

| Antes (Eats) | Ahora (Pharma) |
| ------------ | -------------- |
| Marca `Zonix Eats` | `Zonix Pharma` |
| Android `applicationId / namespace = com.zonix.eats` | `com.zonix.pharma` |
| iOS `PRODUCT_BUNDLE_IDENTIFIER = com.zonix.eats` | `com.zonix.pharma` |
| iOS `CFBundleName = ZonixEats` / Android `label = ZonixEats` | `ZonixPharma` / `Zonix Pharma` |
| Canal FCM `zonix_eats_fcm` | `zonix_pharma_fcm` |
| Deep link `zonix://restaurant/{id}` | `zonix://pharmacy/{id}` (legacy soportado en `StorefrontQrParser`) |
| Dominio `zonixeats.com` | `zonixpharma.com` |
| Splash `#fcb621 / #ff6100` (cálidos) | `#F5F7FA / #142033` (paleta Pharma fría) |
| Tabla `commerces` (sigue, mismo nombre) | Sigue `commerces` (genérica) — ahora representa farmacia, droguería, etc. |
| `RestaurantController` y `RestaurantService` | `PharmacyController` y `PharmacyService` (con shim `RestaurantController`/`RestaurantService` deprecado para tests). |
| Rutas `/api/buyer/restaurants` | `/api/buyer/pharmacies` (alias `/restaurants` se mantiene). |

## Matriz API: canónico (Pharma) vs legacy (Eats)

Uso recomendado para clientes nuevos, OpenAPI y SDK: **siempre la columna “Canónico”**. Los alias existen para apps Eats antiguas y tests de compatibilidad; no añadir nuevos alias sin revisión.

| Ámbito | Canónico (Zonix Pharma) | Legacy / alias (Eats) | Mismo handler / notas |
| ------ | ------------------------ | ---------------------- | --------------------- |
| Listado / detalle farmacia (buyer) | `GET /api/buyer/pharmacies`, `GET /api/buyer/pharmacies/{id}` | `GET /api/buyer/restaurants`, `GET /api/buyer/restaurants/{id}` | `PharmacyController` |
| Búsqueda de establecimientos | `GET /api/buyer/search/pharmacies` | `GET /api/buyer/search/restaurants` | `SearchController::searchRestaurants` (método compartido) |
| Reviews de comercio | `POST /api/buyer/reviews`, `GET /api/buyer/reviews/{reviewableId}/{reviewableType}`, etc. | `POST /api/buyer/reviews/restaurant`, `GET /api/buyer/reviews/restaurant/{commerceId}` | Genérico vs grupo legacy `buyer/reviews/*` con segmento `restaurant` |
| Pagos de pedido (subtotal comercio) | En payloads nuevos, interpretar `food_methods` como **“métodos de pago del comercio (farmacia)”** | Claves JSON `food_methods`, `foodPayment`, `type: food` en `order_payments` / validaciones | Legacy Eats: “food” = línea de pago del comercio, no comida. Ver `Buyer/OrderController` (`syncLegacy`, `Order::foodPayment`). |
| Chat / emisor comercio | — | `sender_type` / valores `restaurant` en seeders o histórico | Semántica histórica; en UI Pharma mostrar “farmacia”. |
| Deep link storefront | `zonix://pharmacy/{id}` | `zonix://restaurant/{id}` | Parser Flutter documentado (`storefront_qr_parser`) |

**Deprecación futura (opcional):** cuando no queden clientes Eats, exponer `Sunset` / `Deprecation` HTTP en rutas `*restaurant*` y retirar alias en versión mayor de API.

## Qué se eliminó

- Modelos `ProductExtra` y `ProductPreference` (extras tipo "Extra Queso" no aplican a fármacos).
- Migraciones `create_product_extras_table.php` y `create_product_preferences_table.php`.
- Seeders `ProductExtraSeeder`, `ProductPreferenceSeeder`. Factories asociadas.
- Assets `onboarding_eats*.png` (renombrados a `onboarding_pharma*.png`).
- Documentación de lanzamiento Eats — reemplazada por [`docs/Lanzamiento/`](../Lanzamiento/README.md) (Pharma). Carpeta `docs/_archive_eats/` **eliminada del repo** jun 2026 (recuperable en historial git).

## Qué es nuevo

### Modelo de datos farmacéutico

- `products` ampliado con campos: `active_ingredient`, `dosage_form`, `concentration`, `presentation`, `manufacturer`, `health_registry` (INHRR), `barcode`, `atc_code`, `requires_prescription`, `prescription_type`, `controlled_substance`, `cold_chain`.
- `commerces` ampliado con: `pharmacist_in_charge_profile_id`, `health_permit_number`, `health_permit_expires_at`, `night_shift_open`.
- `orders` ampliado con: `requires_prescription`, `prescription_id`, `prescription_validated_at`, `cold_chain_required`. Estado nuevo en enum: `pending_prescription_validation`.
- Tablas nuevas:
  - `medicine_lots` (lote, vencimiento, FIFO de despacho).
  - `prescriptions` (receta médica adjunta a pedido Rx).
  - `pharmacist_profiles` (datos colegiados MPPS, licencia).

### Rol nuevo

- `pharmacist`: farmacéutico colegiado responsable. Tiene su propio onboarding y sus rutas `/api/pharmacist/*`.

### Eventos broadcast

- `PrescriptionUploaded`, `PrescriptionValidated`, `PrescriptionRejected`.

### Servicios

- `PrescriptionService` (subir, aprobar, rechazar, expirar TTL).
- `PharmacyService` (catálogo de farmacias para buyer).

### Controladores

- `Buyer/PrescriptionController` (subir, listar, eliminar receta).
- `Pharmacist/PrescriptionController` (pendientes, aprobar, rechazar).
- `Pharmacist/DashboardController` (KPIs por farmacia asignada).
- `Buyer/PharmacyController` (catálogo de farmacias; `RestaurantController` es shim deprecado).

### Frontend

- Modelos `Prescription`, `MedicineLot` y `Product` extendido con campos farmacéuticos.
- Servicio `PrescriptionService` (registrado en `MultiProvider` de `main.dart`).
- Pantallas:
  - `PrescriptionUploadPage` (buyer adjunta receta).
  - `MyPrescriptionsPage` (lista de recetas del buyer).
  - `PharmacistDashboardPage`.
  - `PendingValidationsPage`.
  - `ValidationDetailPage`.
- Paleta `AppColors.brand*` Pharma con alias legacy de Eats para compatibilidad temporal.
- Tema `buildStitchLightTheme` / `buildStitchDarkTheme` migrado a paleta Pharma (Plus Jakarta Sans).

## Pasos manuales pendientes (operación)

1. **Firebase**: crear proyecto Firebase nuevo `zonix-pharma` y reemplazar `android/app/google-services.json` y archivos iOS (`GoogleService-Info.plist`).
2. **Pusher**: crear app Pusher dedicada Pharma (canales privados new). Actualizar `.env`.
3. **Google Cloud (OAuth Google + Maps)**: crear credenciales para `com.zonix.pharma` y SHA-1 de la nueva firma. Actualizar `AndroidManifest.xml` `meta-data`.
4. **Dominio**: comprar `zonixpharma.com`, configurar DNS y certificados SSL.
5. **Migrate fresh** del backend: `php artisan migrate:fresh --seed` (la regla del proyecto exige editar `create_*`; ya quedó así). El usuario debe correrlo cuando la BD destino esté lista.
6. **Logos**: extraer las variantes (horizontal, apilado, app icon @1x/2x/3x) de la lámina de marca y reemplazar `assets/images/logo_login.png`, `splash_logo.png`, `splash_logo_dark.png`. Regenerar app icon con `flutter pub run flutter_launcher_icons:main`.
7. **AGENTS.md / docs/active_context.md**: ejecutar la skill `documentar-avances` y `context-updater` al cierre de la sesión.

## Tests

- Backend: `RestaurantControllerTest` se mantiene como cobertura del shim. Añadir
  `PrescriptionUploadTest`, `PharmacistValidationFlowTest`, `RxBlockedCheckoutTest`,
  `MedicineLotFifoTest`, `MedicineCatalogTest`.
- Frontend: añadir `prescription_service_test`, `cart_rx_blocked_test`,
  `medicine_model_test`, `storefront_qr_pharmacy_test`.

## Riesgos identificados

- **Migraciones no se rehicieron desde cero**: se editaron las `create_*` existentes y se añadieron nuevas. Si hay base de datos productiva Eats, hay que `migrate:fresh` (destructivo).
- **Datos de salud (recetas, alergias)**: aplican a la Ley de Protección de Datos VE 2025. Cumplir cifrado en disco y retención limitada (TTL configurable en `config/zonix.php` `pharma`).
- **Compliance Rx**: el motor está; el go-live requiere farmacéutico colegiado real y permisos sanitarios verificados.
- **Branding visual real**: la paleta y wordmark están definidos; los logos finales hay que extraerlos de la lámina y exportarlos a PNG/SVG.
