# Coste anual 2× Quasar + Namecheap vs AWS

> **Canon de presupuesto VPS (2026-07-24).** Aplica a CorralX + Zonix Pharma juntos. Cifras USD, catálogo Namecheap jul 2026. No sustituye factura real del panel.

## 1. Coste anual del plan actual (2× Quasar)

| Concepto | 1× Quasar | **2× Quasar (CorralX + Zonix)** |
|----------|-----------|--------------------------------|
| Promo típica ($12.88/mo × 12) | ~$154.56 | **~$309** |
| **Presupuesto / renew** ($15.88/mo × 12 ≈ tarifa 1 Year ~$190.56) | ~$190.56 | **~$381** |
| Mes a mes ($18.88/mo × 12) | ~$226.56 | **~$453** |

**Usar en proyecciones y pack: ~USD 380–390/año** (~$32/mo renew). No usar ~$309 salvo que el promo $12.88 esté garantizado los 12 meses.

### Fuera del VPS (no incluido)

- Dominios, email, Pusher, Firebase/FCM, backups offsite
- Add-ons Namecheap (cPanel/Webuzo, managed) — **no** al inicio
- Techo pack Zonix hosting ~$80/mes (~$960/año): sobran ~$580/año tras 2× Quasar

| Línea | USD/año aprox. |
|-------|----------------|
| Techo pack hosting | ~960 |
| 2× Quasar renew | **~381** |
| Margen SaaS/backups | ~580 |

## 2. Namecheap VPS vs AWS

| Dimensión | Namecheap Quasar | AWS (EC2 + extras) |
|-----------|------------------|--------------------|
| Modelo | Máquina fija, precio predecible | Piezas (EC2, EBS, IP, tráfico, RDS…) — factura variable |
| Precio piloto 2 apps | ~$26–32/mo | Fácil $40–100+/mo si no optimizas |
| Complejidad | SSH + LEMP (runbooks existentes) | IAM, VPC, security groups, AMI |
| Escalado | Subir plan o 2º VPS | Auto Scaling, multi-AZ, managed DB |
| Red / regiones | Limitado | Global, maduro |
| Cumplimiento | Básico | Enterprise / compliance cuando haga falta |
| Encaje hoy | Ideal salir de cPanel FTP | Overkill hasta tráfico/compliance/DevOps |

### Por qué Namecheap te beneficia ahora

- Coste predecible bajo el techo $80/mes
- Suficiente para Laravel + MySQL + Redis + workers en piloto
- Runbooks/bootstrap ya listos
- 2 VPS = aislamiento CorralX (KYC) / Zonix (Rx) barato

### Desventajas Namecheap

- Sin multi-AZ nativo; tú eres sysadmin
- Menos ecosistema managed (RDS, ElastiCache, ALB)
- Proveedor commodity vs AWS a largo plazo

### Cuándo mirar AWS

- GMV/tráfico estable, HA multi-AZ, o compliance/inversor exige cloud enterprise
- **No** para el primer corte desde aiblock/cPanel

## 3. Decisión

**Permanecer en Namecheap 2× Quasar** (~**$381/año** renew). Revisar AWS más adelante, no ahora.

## Referencias

- [VPS_NAMECHEAP_QUASAR_RUNBOOK.md](VPS_NAMECHEAP_QUASAR_RUNBOOK.md) (Zonix)
- CorralX: `CorralX-Backend/docs/VPS_NAMECHEAP_QUASAR_RUNBOOK.md`
- Pack: [Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md](Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md)
