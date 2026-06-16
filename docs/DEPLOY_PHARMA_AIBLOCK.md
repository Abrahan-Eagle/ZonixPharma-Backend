# Deploy Zonix Pharma Backend → pharma.aiblockweb.com

**Producto:** Zonix Pharma (Laravel API)  
**Hosting:** cPanel / FTP compartido (`ftp.aiblockweb.com`)  
**Subdominio:** `https://pharma.aiblockweb.com`  
**Workflow:** [`.github/workflows/main.yml`](../.github/workflows/main.yml) — push a rama **`main`**

---

## 1. GitHub Actions secrets (obligatorio)

En el repo **Abrahan-Eagle/ZonixPharma-Backend**:

**Settings → Secrets and variables → Actions → New repository secret**

| Secret | Valor |
|--------|--------|
| `FTP_SERVER` | `ftp.aiblockweb.com` |
| `FTP_USERNAME` | `pharma@pharma.aiblockweb.com` |
| `FTP_PASSWORD` | Contraseña FTP de cPanel (**solo en GitHub**, nunca en el repo) |
| `ENV_CONTENT` | Contenido **multilínea completo** del `.env` del servidor (ver §2) |

El workflow **no** lee otros nombres de secretos. Sin los cuatro, el deploy falla.

**Los tests pre-deploy usan `.env.example` + SQLite** (igual que `ci.yml`), no el `ENV_CONTENT` de producción — así el gate no depende de flags como `ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION` en el secret.

Checklist:

- [ ] `FTP_SERVER` creado
- [ ] `FTP_USERNAME` creado
- [ ] `FTP_PASSWORD` creado
- [ ] `ENV_CONTENT` creado (con `APP_KEY` y credenciales MySQL reales)

---

## 2. Plantilla `ENV_CONTENT`

Generar `APP_KEY` local una vez:

```bash
php artisan key:generate --show
```

Copiar [`.env.example`](../.env.example) y ajustar (MySQL desde cPanel → **MySQL® Databases**):

```dotenv
APP_NAME="Zonix Pharma"
APP_ENV=production
APP_KEY=base64:XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX=
APP_DEBUG=false
APP_URL=https://pharma.aiblockweb.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=cpaneluser_zonixpharma
DB_USERNAME=cpaneluser_zonixuser
DB_PASSWORD=********

CORS_ALLOWED_ORIGINS=https://pharma.aiblockweb.com

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file

# Pusher / Firebase / mail — incluir solo si los usas en staging remoto
# PUSHER_APP_ID=
# PUSHER_APP_KEY=
# PUSHER_APP_SECRET=
# PUSHER_APP_CLUSTER=mt1

ZONIX_PHARMA_BLOCK_RX_WITHOUT_PRESCRIPTION=false
```

Pegar **todo** el bloque en el secret `ENV_CONTENT`. El workflow fuerza además `APP_DEBUG=false` y `APP_URL=https://pharma.aiblockweb.com`.

---

## 3. Flujo CI/CD

```text
push main  →  main.yml
  → npm run production
  → composer install --no-dev
  → php artisan test --parallel
  → FTP upload (incluye .env)
  → curl https://pharma.aiblockweb.com/api/ping
```

**CI separado:** [`.github/workflows/ci.yml`](../.github/workflows/ci.yml) corre Pint + tests en PRs y en `dev`/`main`; no despliega.

**Deploy manual:** Actions → *Deploy Zonix Pharma* → **Run workflow** (requiere secrets).

---

## 4. Primer arranque en cPanel (una vez)

FTP **no** ejecuta migraciones. Tras el **primer** deploy exitoso:

### 4.1 MySQL

1. Crear base de datos y usuario en cPanel.
2. Asignar usuario a la BD con todos los privilegios.
3. Mismos valores en `ENV_CONTENT`.

### 4.2 Document root

En **Domains → Subdomains** (`pharma.aiblockweb.com`):

- El **document root** debe ser la carpeta `public/` de Laravel (o el equivalente en tu cuenta FTP).
- Si el FTP deposita en la raíz del subdominio, suele ser `~/pharma.aiblockweb.com/public` o similar — confirmar en cPanel.

### 4.3 Artisan (SSH o Terminal cPanel)

```bash
cd /ruta/al/proyecto   # raíz Laravel (donde está artisan)
php artisan migrate --force
php artisan db:seed --class=ZonixDemoSeeder   # opcional demo
php artisan config:clear
php artisan route:clear
php artisan storage:link
```

### 4.4 Cron (scheduler)

```cron
* * * * * php /ruta/al/artisan schedule:run >> /dev/null 2>&1
```

Necesario para TTL recetas Rx y expiración `pending_payment`.

### 4.5 Permisos

- `storage/` y `bootstrap/cache/` escribibles (755 o 775 según hosting).

---

## 5. Verificación

```bash
curl -sS https://pharma.aiblockweb.com/api/ping
curl -sS https://pharma.aiblockweb.com/api/pharma-policy
```

Esperado:

- `/api/ping` → `{"message":"API funcionando"}` (o equivalente)
- `/api/pharma-policy` → `success: true`

### App Flutter

En `ZonixPharma-Front/.env`:

```dotenv
API_URL=https://pharma.aiblockweb.com
```

Rebuild / hot restart de la app.

---

## 6. Post-deploy y OPcache

Si el API responde código viejo tras FTP:

```bash
php artisan config:clear
php artisan route:clear
php artisan cache:clear
```

En hosting compartido puede hacer falta **Restart PHP** desde cPanel o esperar TTL de OPcache.

**Nota:** cada deploy sobrescribe `.env` en el servidor con `ENV_CONTENT`. No editar `.env` solo en cPanel sin actualizar el secret.

---

## 7. Legacy retirado

El workflow anterior desplegaba **Zonix Eats** a `eats.aiblockweb.com`. Este repo Pharma ya **no** usa ese destino.

---

## 8. Checklist primer deploy (orden)

1. [ ] Crear los 4 secrets en GitHub (§1).
2. [ ] Merge `dev` → `main` (o push directo a `main` con este workflow).
3. [ ] Actions → workflow verde.
4. [ ] cPanel: `migrate --force` + `storage:link` (§4).
5. [ ] `curl https://pharma.aiblockweb.com/api/ping`
6. [ ] Flutter: `API_URL=https://pharma.aiblockweb.com`

---

**Última actualización:** junio 2026
