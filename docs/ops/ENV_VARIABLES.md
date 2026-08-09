# Variables .env — Zonix Pharma Backend

> Producto actual: **Zonix Pharma** (`zonixpharma.com`). Documentación histórica Eats: [MIGRACION_EATS_PHARMA.md](MIGRACION_EATS_PHARMA.md).

**En producción solo deben tenerse en cuenta las variables listadas en "Variables para producción". Las de "Pruebas / demo" no deben usarse ni configurarse en producción.**

---

## Variables para producción

Son las únicas que importan en producción. El resto del .env puede omitirse o dejarse con valores por defecto.

### Obligatorias

| Variable | Uso |
|----------|-----|
| `APP_KEY` | Cifrado Laravel |
| `APP_ENV` | `production` en prod |
| `APP_DEBUG` | `false` en prod |
| `APP_URL` | URL pública de la API |
| `DB_CONNECTION`, `DB_HOST`, `DB_PORT`, `DB_DATABASE`, `DB_USERNAME`, `DB_PASSWORD` | Conexión MySQL |
| `PUSHER_APP_ID`, `PUSHER_APP_KEY`, `PUSHER_APP_SECRET`, `PUSHER_APP_CLUSTER` | Broadcasting (si usas Pusher) |
| `SANCTUM_STATEFUL_DOMAINS` | Dominios del front (ej. tu dominio) |
| `CORS_ALLOWED_ORIGINS` | Orígenes permitidos (URL del front) |

### Opcionales (configuración real de negocio)

Solo si necesitas cambiar el valor por defecto; en código ya tienen default.

| Variable | Uso |
|----------|-----|
| `APP_URL_PRODUCTION`, `APP_URL_LOCAL` | URLs por entorno |
| `FIREBASE_CREDENTIALS`, `FIREBASE_DATABASE_URL`, `FIREBASE_STORAGE_BUCKET` | Firebase (FCM, Realtime DB, Storage) |
| `ZONIX_OSRM_BASE_URL`, `ZONIX_NOMINATIM_REVERSE_URL`, `ZONIX_NOMINATIM_SEARCH_URL` | Rutas y geocoding |
| `ZONIX_DEFAULT_DELIVERY_FEE`, `ZONIX_DEFAULT_PREPARATION_TIME_MINUTES` | Tarifa y tiempos por defecto |

---

## Variables de prueba / demo — NO TENER EN CUENTA EN PRODUCCIÓN

Solo sirven para datos de prueba, seeders y demos. **No configurar en producción.** Documentadas para que el equipo no las use en prod.

| Variable | Uso (solo desarrollo/demo) |
|----------|----------------------------|
| `PAYMENT_DEMO_USER_ID` | user_id para seeders que crean métodos de pago demo (ej. 1 = Abrahan). |
| `ZONIX_SEEDER_DEMO_ORDER_ID` | ID de orden demo en seeders. |
| `ZONIX_SEEDER_DEMO_ORDER_IDS` | Lista de IDs de órdenes demo (ej. 4,5) para seeders de tracking. |
| `ZONIX_SEEDER_DEFAULT_DELIVERY_FEE` | Tarifa delivery usada en seeders demo. |
| `ZONIX_ANALYTICS_DELIVERY_TIME_P1`, `ZONIX_ANALYTICS_DELIVERY_TIME_P2` | Períodos de comparación de analytics (valores demo). |
| `ZONIX_ANALYTICS_AVG_PREP_FALLBACK`, `ZONIX_ANALYTICS_SATISFACTION_FALLBACK` | Fallbacks de métricas para pantallas de analytics (demo). |
| `ZONIX_TRACKING_WAYPOINT_LAT`, `ZONIX_TRACKING_WAYPOINT_LNG` | Waypoint fijo para demo de ruta repartidor→cliente (ej. Iglesia). |

En producción: no definir estas variables o dejarlas vacías; el código usa defaults o no ejecuta seeders/datos demo.

---

## Otras (no usadas o solo servicios concretos)

- `VITE_*`: build front Blade/Vite; en API pura no se usan.
- `GOOGLE_GEN_AI_*`: no referenciadas en el backend; ignorar salvo que se implemente Gemini.
- `MEMCACHED_*`, `REDIS_*`, `MAIL_*`, `AWS_*`: solo si usas esos servicios.
