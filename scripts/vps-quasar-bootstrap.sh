#!/usr/bin/env bash
# Bootstrap LEMP + Redis + Supervisor para Namecheap Quasar (CorralX / Zonix Pharma).
# Uso (como root en Ubuntu 22.04/24.04):
#   bash vps-quasar-bootstrap.sh corralx
#   bash vps-quasar-bootstrap.sh zonix
set -euo pipefail

PRODUCT="${1:-}"
if [[ "$PRODUCT" != "corralx" && "$PRODUCT" != "zonix" ]]; then
  echo "Uso: $0 corralx|zonix" >&2
  exit 1
fi

if [[ "$(id -u)" -ne 0 ]]; then
  echo "Ejecutar como root." >&2
  exit 1
fi

export DEBIAN_FRONTEND=noninteractive

if [[ "$PRODUCT" == "corralx" ]]; then
  APP_USER="corralx"
  WWW_ROOT="/var/www/corralx"
  PHP_VERSION="8.1"
  SITES=(test prod)
else
  APP_USER="zonix"
  WWW_ROOT="/var/www/zonix"
  PHP_VERSION="8.3"
  SITES=(staging prod)
fi

echo "==> Producto: $PRODUCT | PHP: $PHP_VERSION | user: $APP_USER"

apt-get update -y
apt-get install -y software-properties-common curl gnupg2 ca-certificates lsb-release apt-transport-https
add-apt-repository -y ppa:ondrej/php
apt-get update -y

apt-get install -y \
  nginx \
  mysql-server \
  redis-server \
  "php${PHP_VERSION}-fpm" \
  "php${PHP_VERSION}-cli" \
  "php${PHP_VERSION}-mysql" \
  "php${PHP_VERSION}-xml" \
  "php${PHP_VERSION}-mbstring" \
  "php${PHP_VERSION}-curl" \
  "php${PHP_VERSION}-zip" \
  "php${PHP_VERSION}-gd" \
  "php${PHP_VERSION}-bcmath" \
  "php${PHP_VERSION}-intl" \
  "php${PHP_VERSION}-redis" \
  unzip git ufw fail2ban supervisor certbot python3-certbot-nginx

# Composer
if ! command -v composer >/dev/null 2>&1; then
  curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
fi

id -u "$APP_USER" >/dev/null 2>&1 || useradd -m -s /bin/bash "$APP_USER"
usermod -aG www-data "$APP_USER"

mkdir -p "$WWW_ROOT" /var/backups/"$PRODUCT" /var/log
for site in "${SITES[@]}"; do
  mkdir -p "$WWW_ROOT/$site"
done
chown -R "$APP_USER":www-data "$WWW_ROOT"
chmod -R 775 "$WWW_ROOT"

# Redis: bind localhost
sed -i 's/^supervised no/supervised systemd/' /etc/redis/redis.conf || true
systemctl enable --now redis-server

# PHP-FPM pool tweak (memory for Quasar 6GB)
POOL="/etc/php/${PHP_VERSION}/fpm/pool.d/www.conf"
if [[ -f "$POOL" ]]; then
  sed -i 's/^pm.max_children = .*/pm.max_children = 20/' "$POOL" || true
  sed -i 's/^;*\s*php_admin_value\[memory_limit\].*/php_admin_value[memory_limit] = 256M/' "$POOL" || true
fi
systemctl enable --now "php${PHP_VERSION}-fpm"
systemctl enable --now nginx mysql supervisor fail2ban

# UFW
ufw allow OpenSSH
ufw allow 'Nginx Full'
ufw --force enable || true

# nginx site skeleton (first site only as default placeholder)
FIRST_SITE="${SITES[0]}"
SITE_CONF="/etc/nginx/sites-available/${PRODUCT}-${FIRST_SITE}"
cat > "$SITE_CONF" <<EOF
server {
    listen 80;
    server_name _;
    root ${WWW_ROOT}/${FIRST_SITE}/public;
    index index.php;
    client_max_body_size 20M;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location ~ \.php\$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php${PHP_VERSION}-fpm.sock;
    }

    location ~ /\.(?!well-known).* {
        deny all;
    }
}
EOF
ln -sfn "$SITE_CONF" "/etc/nginx/sites-enabled/${PRODUCT}-${FIRST_SITE}"
rm -f /etc/nginx/sites-enabled/default
nginx -t && systemctl reload nginx

# Supervisor worker template
WORKER_CONF="/etc/supervisor/conf.d/${PRODUCT}-worker.conf"
cat > "$WORKER_CONF" <<EOF
[program:${PRODUCT}-${FIRST_SITE}-worker]
process_name=%(program_name)s_%(process_num)02d
command=php ${WWW_ROOT}/${FIRST_SITE}/artisan queue:work redis --sleep=3 --tries=3 --max-time=3600
autostart=false
autorestart=true
user=${APP_USER}
numprocs=1
redirect_stderr=true
stdout_logfile=/var/log/${PRODUCT}-${FIRST_SITE}-worker.log
stopwaitsecs=3600
EOF
supervisorctl reread || true
supervisorctl update || true

# Backup stub
BACKUP_SH="/usr/local/bin/${PRODUCT}-backup-db.sh"
cat > "$BACKUP_SH" <<EOF
#!/usr/bin/env bash
set -euo pipefail
STAMP=\$(date +%Y%m%d)
DEST=/var/backups/${PRODUCT}
mkdir -p "\$DEST"
# Ajustar nombres de BD tras crearlas:
# mysqldump -u${PRODUCT} -p'***' ${PRODUCT}_${FIRST_SITE} | gzip > "\$DEST/${PRODUCT}_${FIRST_SITE}_\$STAMP.sql.gz"
find "\$DEST" -type f -mtime +7 -delete
EOF
chmod +x "$BACKUP_SH"

echo ""
echo "==> Bootstrap OK ($PRODUCT)"
echo "    WWW: $WWW_ROOT"
echo "    User: $APP_USER"
echo "    PHP: $PHP_VERSION"
echo "    Siguiente: crear DBs MySQL, clonar Laravel, .env (QUEUE_CONNECTION=redis),"
echo "    certbot --nginx -d <dominio>, habilitar worker (autostart=true) y cron schedule:run."
echo "    Ver runbook docs/ops/VPS_NAMECHEAP_QUASAR_RUNBOOK.md"
