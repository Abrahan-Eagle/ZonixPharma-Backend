# Runbook VPS Namecheap Quasar — Zonix Pharma

> **Decisión (2026-07-24):** CorralX y Zonix Pharma van en **VPS separados**. Zonix Pharma = **1× Namecheap Quasar** (4 vCPU · 6 GB RAM · 120 GB SSD · 3 TB). Self-managed. Aislamiento por datos de salud (Rx) vs KYC CorralX.
>
> Sustituye a medio plazo el hosting cPanel FTP documentado en [`DEPLOY_PHARMA_AIBLOCK.md`](DEPLOY_PHARMA_AIBLOCK.md) (`pharma.aiblockweb.com`).

| Campo                          | Valor                                                                                                                     |
| ------------------------------ | ------------------------------------------------------------------------------------------------------------------------- |
| Plan                           | Quasar                                                                                                                    |
| Precio ref.                    | ~$12.88/mo promo · ~$15.88/mo renew                                                                                       |
| **Coste anual (presupuestar)** | **1× ~$190.56/año** · **2× (con CorralX) ~$381/año** — no usar ~$309                                                      |
| Techo pack                     | ~USD 80/mes hosting ([PRESUPUESTO](Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md)); 2× Quasar ~$32/mo renew deja holgura |
| Coste + vs AWS                 | [`VPS_COSTE_ANUAL_Y_AWS_VS_NAMECHEAP.md`](VPS_COSTE_ANUAL_Y_AWS_VS_NAMECHEAP.md)                                          |
| Stack                          | Ubuntu LTS + nginx + **PHP 8.3**-FPM + MySQL 8 + Redis                                                                    |
| Dominio objetivo               | `zonixpharma.com` / staging `pharma.` o `staging.` (definir en corte)                                                     |
| Script bootstrap               | [`scripts/vps-quasar-bootstrap.sh`](../scripts/vps-quasar-bootstrap.sh)                                                   |

---

## 0. Compra (checklist humano)

- [ ] Contratar **Quasar** — facturación **anual**.
- [ ] OS: **Ubuntu 22.04/24.04 LTS**.
- [ ] Management: **Self-managed**.
- [ ] Anotar IP, SSH, panel Namecheap.
- [ ] Presupuestar renew (~$15.88/mo · **~$191/año**; **~$381/año** con CorralX), no solo $12.88 promo.

---

## 1. Bootstrap

```bash
scp ZonixPharma-Backend/scripts/vps-quasar-bootstrap.sh root@IP:/root/
ssh root@IP 'bash /root/vps-quasar-bootstrap.sh zonix'
```

Instala LEMP + Redis + Certbot + Supervisor + fail2ban + usuario `zonix` + `/var/www/zonix/{staging,prod}`.

**PHP:** el script usa 8.3 para alinear con CI/deploy Pharma.

---

## 2. DNS

| Host                                                          | Tipo | Valor     |
| ------------------------------------------------------------- | ---- | --------- |
| Staging (ej. `pharma.zonixpharma.com` o host actual de corte) | A    | IP Quasar |
| `zonixpharma.com` / API prod                                  | A    | IP Quasar |

Durante migración temporal se puede apuntar el mismo host que hoy (`pharma.aiblockweb.com`) solo si el DNS lo controlas; si no, cortar a dominio canónico Pharma.

---

## 3. App Laravel — staging primero

```bash
sudo -u zonix -H bash
cd /var/www/zonix/staging
git clone <repo-ZonixPharma-Backend> .
cp .env.example .env
# APP_URL, DB_*, REDIS_*, QUEUE_CONNECTION=redis, CACHE_DRIVER=redis
# ZONIX_PHARMA_* según pack
php artisan key:generate
composer install --no-dev --optimize-autoloader
php artisan migrate --force
php artisan config:cache && php artisan route:cache && php artisan view:cache
```

MySQL:

```sql
CREATE DATABASE zonix_staging CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE DATABASE zonix_prod CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'zonix'@'localhost' IDENTIFIED BY '<secret>';
GRANT ALL ON zonix_staging.* TO 'zonix'@'localhost';
GRANT ALL ON zonix_prod.* TO 'zonix'@'localhost';
FLUSH PRIVILEGES;
```

Docroot nginx → `.../public`. Certbot para el host staging.

---

## 4. Queue + scheduler (dejar de usar `sync`)

En cPanel/aiblock el `.env` de ejemplo usa `QUEUE_CONNECTION=sync`. En Quasar **obligatorio**:

```dotenv
QUEUE_CONNECTION=redis
CACHE_DRIVER=redis
REDIS_HOST=127.0.0.1
BROADCAST_DRIVER=pusher
```

Supervisor + cron `schedule:run` (TTL recetas, expiración `pending_payment`, etc. — ver scheduler Pharma).

Plantilla worker: `/etc/supervisor/conf.d/zonix-worker.conf` (generada por bootstrap).

---

## 5. Migración desde `pharma.aiblockweb.com`

1. Dump MySQL cPanel + `rsync` de `storage/app` (recetas en disco `local`).
2. Importar en Quasar staging; smoke OTC + Rx (`pending_prescription_validation` → upload → `pending_payment`).
3. Checklist: [`SMOKE_RX_E2E.md`](SMOKE_RX_E2E.md).
4. Actualizar Flutter `API_URL` / AppConfig al nuevo host.
5. Sustituir workflow FTP ([`DEPLOY_PHARMA_AIBLOCK.md`](DEPLOY_PHARMA_AIBLOCK.md)) por deploy SSH/git o rsync (nuevo workflow — fuera de este runbook hasta tener IP).
6. Solo entonces decommission FTP aiblock.

**Privacidad Rx:** volumen con cifrado de disco del proveedor si está disponible; backups de `prescriptions/` con acceso restringido.

---

## 6. Backups

- Diario: dumps `zonix_staging` / `zonix_prod`.
- Semanal: `storage` (incluye `prescriptions/`).
- Offsite obligatorio (datos de salud).

---

## 7. Verificación

```bash
curl -fsS https://<host>/api/ping
supervisorctl status
php artisan schedule:list
```

Smoke: buyer OTC, buyer Rx, pharmacist approve/reject, commerce order, delivery assign (si aplica).

---

## 8. Relación con presupuesto Lanzamiento

| Concepto                           | USD/mo   | USD/año   |
| ---------------------------------- | -------- | --------- |
| Quasar Zonix renew                 | ~16      | ~191      |
| Quasar CorralX (otro producto)     | ~16      | ~191      |
| **Total 2× Quasar (presupuestar)** | **~$32** | **~$381** |
| Techo fila hosting pack            | ~80      | ~960      |

Detalle + AWS vs Namecheap: [`VPS_COSTE_ANUAL_Y_AWS_VS_NAMECHEAP.md`](VPS_COSTE_ANUAL_Y_AWS_VS_NAMECHEAP.md).

No mezclar coste CorralX en narrativa inversor Zonix; el pack Zonix cubre **su** Quasar (~$191/año).

---

## 9. Qué no hacer

- Compartir VPS con CorralX.
- Seguir en `QUEUE_CONNECTION=sync` tras el corte.
- Subir `.env` por FTP al VPS (preferir secrets en servidor + deploy sin secretos en artefacto).

---

**Estado:** decisión y runbook listos. **Provision live** = pendiente de compra Quasar + IP SSH (`________________`).
