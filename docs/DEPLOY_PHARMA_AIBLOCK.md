# Deploy Zonix Pharma Backend → zonixpharma.com

**Producto:** Zonix Pharma (Laravel API)  
**Hosting:** cPanel / FTP compartido (`ftp.aiblockweb.com`)  
**Dominio canónico:** `https://zonixpharma.com`  
**Legacy (aún en el mismo server):** `https://pharma.aiblockweb.com`  
**Workflow:** [`.github/workflows/main.yml`](../.github/workflows/main.yml) — push a rama **`main`**

> **Migración VPS (decisión 2026-07-24):** objetivo de producción/piloto = **Namecheap Quasar** dedicado (no compartir con CorralX). Runbook + bootstrap: [`VPS_NAMECHEAP_QUASAR_RUNBOOK.md`](VPS_NAMECHEAP_QUASAR_RUNBOOK.md).

---

## 1. GitHub Actions secrets (obligatorio)

En el repo **Abrahan-Eagle/ZonixPharma-Backend**:

**Settings → Secrets and variables → Actions → New repository secret**

| Secret | Valor |
|--------|--------|
| `FTP_SERVER` | `ftp.aiblockweb.com` |
| `FTP_USERNAME` | `pharma@zonixpharma.com` (directory `/home/unibicuo/zonixpharma.com`) |
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
APP_URL=https://zonixpharma.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=cpaneluser_zonixpharma
DB_USERNAME=cpaneluser_zonixuser
DB_PASSWORD=********

CORS_ALLOWED_ORIGINS=https://zonixpharma.com

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

Pegar **todo** el bloque en el secret `ENV_CONTENT`. El workflow fuerza además `APP_DEBUG=false` y `APP_URL=https://zonixpharma.com`.

---

## 3. Flujo CI/CD

```text
push main  →  main.yml
  → npm run production
  → composer install --no-dev
  → php artisan test --parallel
  → FTP upload (código + **vendor/**; sin .env ni icons/svg)
  → curl https://zonixpharma.com/api/ping
```

**Nota (patrón Namecheap):** `vendor/` **no** se sube archivo a archivo (FIN packet). El workflow empaqueta `vendor-bundle.tar.gz` tras `composer install --no-dev` y, post-FTP, `GET /_vendor_extract.php?t=<sha>` lo extrae en el servidor. Alternativa manual: Terminal cPanel `composer.phar install --no-dev` (§4.3).

**`.env` en servidor (patrón CorralX):** el workflow **ya no sube** `.env` por FTP. Coloca/edita `.env` una vez en File Manager (`~/zonixpharma.com/.env`) o Terminal. `ENV_CONTENT` en GitHub solo alimenta el runner (tests/caches); no sobrescribe el hosting.

**Deploy incremental:** `SamKirkland/FTP-Deploy-Action@v4.4.0` (mismo que CorralX), `state-name: zonixpharma-ftp-deploy-state`. Si falla con `Server sent FIN packet unexpectedly`, el job **reintenta FTP una vez**; si hace falta, **Re-run job** en Actions.

**Document Root (cPanel):** `/home/unibicuo/zonixpharma.com/public` (no la raíz del addon).

**CI separado:** [`.github/workflows/ci.yml`](../.github/workflows/ci.yml) corre Pint + tests en PRs y en `dev`/`main`; no despliega.

**Deploy manual:** Actions → *Deploy Zonix Pharma* → **Run workflow** (requiere secrets).

### 3.1 APK Android (piloto — no va en git ni en el FTP de código)

Descarga pública: `https://pharma.aiblockweb.com/downloads/zonix-pharma.apk` (local: `{APP_URL}/downloads/zonix-pharma.apk`). Config: `ANDROID_APK_URL` (default `/downloads/zonix-pharma.apk`). El binario (~96 MB) está en `public/downloads/` y está en `.gitignore`; el workflow de deploy **no** lo sube. Tras cada `flutter build apk --release`:

```bash
cp ZonixPharma-Front/build/app/outputs/apk/release/app-release.apk \
  ZonixPharma-Backend/public/downloads/zonix-pharma.apk
# Luego subir solo ese archivo por FTP a public/downloads/ en el hosting.
```

---

## 4. Primer arranque en cPanel (una vez)

FTP **no** ejecuta migraciones. Tras el **primer** deploy exitoso:

### 4.1 MySQL

1. Crear base de datos y usuario en cPanel.
2. Asignar usuario a la BD con todos los privilegios.
3. Mismos valores en `ENV_CONTENT`.

### 4.2 Document root

En **Domains → Subdomains** (`pharma.aiblockweb.com`):

- El **document root** debe ser la carpeta **`public/`** de Laravel (no la raíz donde está `artisan`).
- Ejemplo Namecheap: `/home/unibicuo/pharma.aiblockweb.com/public`
- Si el docroot apunta a la raíz del proyecto, usa un `.htaccess` raíz que reenvíe a `public/` (ver §4.6).

**Comprobar:** si `/api/ping` da 404, casi siempre el docroot está mal. Si da **500** sin `vendor/`, ver §4.3.

### 4.3 Post-FTP: Artisan (y vendor solo si falta)

Por defecto el pipeline **sube `vendor/`** (como CorralX). En cPanel Terminal solo hace falta Artisan la primera vez (`migrate`, caches) o si un deploy parcial dejó sin `vendor/autoload.php` (entonces **500**).

Namecheap **no incluye** `composer` en PATH; si hay que regenerar vendor, usar `php composer.phar` (§ abajo).

#### Opción A — Script automático (fallback / primer migrate)

Tras deploy FTP verde, en **Terminal web** cPanel:

```bash
cd ~/zonixpharma.com
bash scripts/cpanel-post-ftp-boot.sh
```

El script: valida PHP ≥ 8.1, instala `composer.phar` si hace falta, `composer install --no-dev`, permisos, `migrate --force`, caches.

#### Opción B — Comandos manuales

```bash
cd ~/zonixpharma.com

# 1) PHP (MultiPHP Manager → 8.2 o 8.3 para el dominio)
php -v

# 2–3) Solo si falta vendor/ (el FTP normalmente ya lo trae)
curl -sS https://getcomposer.org/installer | php
php -d memory_limit=512M composer.phar install --no-dev --optimize-autoloader --no-interaction
ls -la vendor/autoload.php

# 4) Permisos
chmod -R 775 storage bootstrap/cache
mkdir -p storage/logs storage/framework/{cache,sessions,views}

# 5) Laravel (primera vez / tras cambios de esquema)
php artisan storage:link
php artisan migrate --force
php artisan config:clear
php artisan route:clear
php artisan optimize:clear
```

#### Base de datos: migrate, seed y refresh

| Comando | Qué hace | Cuándo usarlo |
| -------- | -------- | ------------- |
| `php artisan migrate --force` | Aplica solo migraciones **nuevas** (esquema) | Cada deploy con cambios de BD |
| `php artisan db:seed --class=ZonixDemoSeeder --force` | Inserta datos demo | Primera carga o reset manual de demo |
| `php artisan migrate:refresh --seed --force` | **Borra todo** (rollback + migrate) y vuelve a sembrar | Solo entorno **demo** sin datos reales |
| `php artisan migrate:fresh --seed --force` | Equivalente a wipe + migrate + seed (no usa `down()`) | Alternativa a refresh en demo |

**Producción con datos reales:** usar **solo** `migrate --force`. No ejecutar `refresh`, `fresh` ni seeders masivos.

**Entorno demo** (`pharma.aiblockweb.com` sin farmacias/pedidos reales): tras deploy del fix en la migración de `prescriptions`, puedes resetear demo con:

```bash
cd ~/pharma.aiblockweb.com
php artisan migrate:refresh --seed --force
php artisan optimize:clear
```

Eso ejecuta `DatabaseSeeder` (referencia + `ZonixDemoSeeder`). **Borra todos los datos** en cada ejecución.

**Deploy habitual** (sin reset):

```bash
php artisan migrate --force
php artisan optimize:clear
```

**Nota:** `npm` no existe en cPanel shared; los assets JS/CSS se compilan en GitHub Actions (`npm run production`) y llegan por FTP.

#### Troubleshooting

| Error | Acción |
|-------|--------|
| `composer: command not found` | Usar `php composer.phar` (§4.3), no `composer` global |
| `vendor/autoload.php` ausente | Ejecutar paso 3 antes de cualquier `artisan` |
| `Allowed memory size exhausted` | `php -d memory_limit=512M composer.phar install ...` |
| PHP 7.x / 8.0 | cPanel → **MultiPHP Manager** → **8.2+** |
| Sigue 500 con vendor OK | `tail -50 storage/logs/laravel.log` (MySQL, APP_KEY, permisos) |
| composer install imposible en hosting | Generar `vendor/` en local con `--no-dev`, comprimir, subir y extraer en cPanel (último recurso) |

**Sin `vendor/` o con docroot mal** `/api/ping` responderá **500** o **404**. Con FTP CorralX-style, el paso habitual post-deploy es solo Document Root + `migrate` si aplica.

### 4.4 Cron (scheduler)

```cron
* * * * * php /ruta/al/artisan schedule:run >> /dev/null 2>&1
```

Necesario para TTL recetas Rx y expiración `pending_payment`.

### 4.5 Permisos

- `storage/` y `bootstrap/cache/` escribibles (755 o 775 según hosting).

### 4.6 `.htaccess`

El repo incluye [`.htaccess`](../.htaccess) en la raíz (rewrite a `public/`, **sin** `Options +FollowSymLinks` — en Namecheap esa directiva provoca 500) y [`public/.htaccess`](../public/.htaccess) (front controller Laravel, sin `Options`).

- **Document Root = `…/public` (recomendado):** Apache usa solo `public/.htaccess`; el de raíz no afecta.
- **Document Root = raíz Laravel:** el `.htaccess` raíz reenvía a `public/`.

No uses un `.htaccess` copiado de otro proyecto con `Options +FollowSymLinks` ni rutas `sub/public`.

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
4. [ ] cPanel: Document Root = `/home/unibicuo/zonixpharma.com/public` (§4.2)
5. [ ] cPanel (si hace falta migrate): `php artisan migrate --force` o `bash scripts/cpanel-post-ftp-boot.sh` (§4.3)
6. [ ] `curl https://zonixpharma.com/api/ping`
7. [ ] Flutter: `API_URL=https://zonixpharma.com`

---

**Última actualización:** julio 2026
