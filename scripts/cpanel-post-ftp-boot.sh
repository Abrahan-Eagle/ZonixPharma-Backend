#!/usr/bin/env bash
# Post-FTP bootstrap — Zonix Pharma en Namecheap/cPanel shared.
# Ejecutar desde la raíz Laravel (donde está artisan):
#   cd ~/pharma.aiblockweb.com && bash scripts/cpanel-post-ftp-boot.sh
set -euo pipefail

ROOT="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
cd "$ROOT"

echo "==> Zonix Pharma post-FTP bootstrap"
echo "    Directorio: $ROOT"

if [[ ! -f artisan ]]; then
  echo "ERROR: No se encontró artisan. Ejecuta este script desde la raíz del proyecto Laravel."
  exit 1
fi

echo ""
echo "==> 1) PHP (requiere >= 8.1)"
PHP_BIN="${PHP_BIN:-php}"
$PHP_BIN -v
PHP_MAJOR=$($PHP_BIN -r 'echo PHP_MAJOR_VERSION;')
PHP_MINOR=$($PHP_BIN -r 'echo PHP_MINOR_VERSION;')
if (( PHP_MAJOR < 8 || (PHP_MAJOR == 8 && PHP_MINOR < 1) )); then
  echo "ERROR: PHP $PHP_MAJOR.$PHP_MINOR detectado. Asigna PHP 8.2+ en cPanel → MultiPHP Manager → pharma.aiblockweb.com"
  exit 1
fi

echo ""
echo "==> 2) Composer (composer.phar local — Namecheap no tiene composer global)"
COMPOSER_PHAR="$ROOT/composer.phar"
if [[ ! -f "$COMPOSER_PHAR" ]]; then
  echo "    Descargando composer.phar..."
  curl -sS https://getcomposer.org/installer | $PHP_BIN
  if [[ ! -f "$COMPOSER_PHAR" ]]; then
    echo "ERROR: No se pudo crear composer.phar. Sube composer.phar manualmente a: $ROOT"
    exit 1
  fi
fi
$PHP_BIN "$COMPOSER_PHAR" --version

echo ""
echo "==> 3) vendor/ (obligatorio — FTP no sube vendor/)"
if [[ ! -f vendor/autoload.php ]]; then
  $PHP_BIN -d memory_limit=512M "$COMPOSER_PHAR" install \
    --no-dev --optimize-autoloader --no-interaction
else
  echo "    vendor/autoload.php ya existe; omitiendo composer install"
fi
test -f vendor/autoload.php || { echo "ERROR: vendor/autoload.php sigue ausente"; exit 1; }

echo ""
echo "==> 4) Permisos storage"
mkdir -p storage/logs storage/framework/{cache,sessions,views} bootstrap/cache
chmod -R 775 storage bootstrap/cache 2>/dev/null || chmod -R 755 storage bootstrap/cache

echo ""
echo "==> 5) .env mínimo"
if [[ ! -f .env ]]; then
  echo "ERROR: Falta .env en el servidor. Revisa secret ENV_CONTENT en GitHub o crea .env manualmente."
  exit 1
fi
if ! grep -qE '^APP_KEY=base64:.+' .env; then
  echo "ERROR: APP_KEY vacío o inválido en .env"
  exit 1
fi
if grep -qE 'TU_.*_CPANEL|placeholder|XXXXXXXX' .env; then
  echo "ADVERTENCIA: .env parece tener placeholders. Revisa DB_DATABASE, DB_USERNAME, DB_PASSWORD."
fi

echo ""
echo "==> 6) Laravel (migrate --force; NUNCA migrate:refresh en producción)"
$PHP_BIN artisan storage:link 2>/dev/null || true
$PHP_BIN artisan migrate --force
$PHP_BIN artisan config:clear
$PHP_BIN artisan route:clear
$PHP_BIN artisan optimize:clear

echo ""
echo "==> 7) Verificación local"
$PHP_BIN artisan --version

echo ""
echo "OK Bootstrap completado."
echo "Confirma en cPanel que Document Root = $(pwd)/public"
echo "Prueba: curl -sS https://pharma.aiblockweb.com/api/ping"
