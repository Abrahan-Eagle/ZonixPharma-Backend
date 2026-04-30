# Montos de referencia (fuentes web públicas)

> **Propósito:** orden de magnitud para **uso de fondos**, pitch y tablas del [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md). **No** sustituyen cotización ni contrato.  
> **Moneda:** salvo indicación, USD. **Consulta:** abril 2026.

---

## 1. Infraestructura — VPS / nube

| Concepto | Referencia pública | Notas |
|----------|-------------------|--------|
| **DigitalOcean — Droplet Basic** | Desde **~4 USD/mes** (p. ej. 512 MiB / 1 vCPU); **~12 USD/mes** (2 GiB / 1 vCPU); **~24 USD/mes** (4 GiB / 2 vCPU) | Lista oficial: [Droplet Pricing](https://www.digitalocean.com/pricing/droplets). Facturación por segundo desde ene. 2026 (mín. 60 s o 0,01 USD). Elegir RAM/vCPU según stack (Laravel + DB + colas). |
| **Hetzner Cloud — plan CX22 (shared vCPU)** | **3,79 €/mes** (2 vCPU, 4 GiB RAM, 40 GiB disco); tarifa horaria alternativa | Comunicado oficial: [New CX plans](https://www.hetzner.com/pressroom/new-cx-plans/). Precios **sin IVA**; conversión a USD según tipo de cambio. Incluye tráfico generoso según ese texto. |
| **Backups / snapshots / egress** | Variable por proveedor | En DigitalOcean, revisar líneas de backups y precio de transferencia extra en la misma página de precios. |

**Implicación para el pitch:** un piloto puede anclarse en **~12–25 USD/mes** (un Droplet pequeño–medio) o **~4–8 USD/mes** en euros (Hetzner CX22) más IVA si aplica; **staging** o **segundo entorno** duplica o suma fracción.

---

## 2. Dominio .com

| Concepto | Referencia pública | Notas |
|----------|-------------------|--------|
| **Registro al costo (registro + ICANN)** | Orden de magnitud **~10–11 USD/año** para `.com` en modelos “wholesale + ICANN” | [Cloudflare Registrar](https://www.cloudflare.com/products/registrar/) indica registro **at-cost** (sin margen del registrador). El precio exacto lo fija el registro (.com Verisign) + tarifa ICANN; conviene mirar [dominios en Cloudflare](https://domains.cloudflare.com/) o la tabla vigente del registrador elegido. |
| **Otros registradores** | Namecheap, Google Domains sucesores, etc. | Suelen tener **promo año 1** y renovación distinta; para presupuesto conservador usar **precio de renovación** o at-cost. |

**Implicación:** partida anual pequeña; el coste relevante suele ser **tiempo y DNS/SSL**, no el dominio en sí.

---

## 3. Marketing digital — Meta (Facebook / Instagram)

No existe un precio fijo público por país comparable a una lista de hosting: depende de subasta, creatividad y objetivo.

| Fuente | Qué dice (orientativo) |
|--------|-------------------------|
| Artículos de benchmarks (p. ej. rangos por región / tier) | En LATAM suelen citarse **CPM** más bajos que EE. UU.; **CPC** variable por sector. | Usar como **rango inicial** y validar con **presupuesto de prueba** (p. ej. 5–10 USD/día) en Ads Manager. |
| Documentación Meta | Segmentación por ubicación | [Ayuda Meta — segmentación por lugar](https://es-la.facebook.com/business/help/202297959811696) |

**Implicación:** en el uso de fondos, línea “pauta digital” = **mes a mes** (no un único gasto) y ligar a KPI (alcance, clics, conversaciones iniciadas).

---

## 4. Publicidad exterior (OOH) — Venezuela / Valencia

Resumen alineado con la guía pública de [Vallas Venezuela — precio vallas](https://vallasvenezuela.com/precio-vallas-publicitarias/) (2026 en su titular):

| Concepto | Rango indicado en esa guía |
|----------|----------------------------|
| Arriendo mensual (Caracas) | Desde **~2.000 USD/mes** |
| Arriendo mensual (Valencia, Maracaibo) | Desde **~1.500 USD/mes** |
| Producción (lona) | **~25 USD/m²** |
| Instalación + desinstalación | **~25 USD/m²** (incluye desinstalación según el texto) |
| Impuestos municipales / INTT | Variables; el texto indica cuándo aplica INTT en ciertas autopistas |
| Publicidad en autobuses | Arriendo **desde ~300 USD/unidad**; producción + instalación **~300 USD/unidad**; **mínimo 5 unidades** para zona centro (incluye Carabobo) |

**Implicación:** coherente con [SUPUESTO_MARKETING_OOH.md](SUPUESTO_MARKETING_OOH.md); el pitch debe citar **cotización propia** para la ubicación real.

---

## 5. Legal y contable (Venezuela)

| Concepto | Referencia web |
|----------|----------------|
| Honorarios abogado / contador / constitución | **No** hay tarifas oficiales únicas publicadas de forma que sustituyan un presupuesto local. | Incluir **partida** con monto **estimado** tras 1–2 consultas o referencias del ecosistema (incubadoras, gremios). |

---

## 6. Cómo usar esta página en el deck

1. Etiquetar cada línea como **Referencia web** vs **Cotización Creesca**.  
2. Para infra, preferir **captura o enlace** a la tabla de precios del proveedor elegido el día de la reunión.  
3. Para OOH, un PDF o correo de agencia vale más que un rango de blog.  
4. Revisar esta lista **antes de cada reunión** con inversionista (precios cambian).

---

## 7. Captacion comercial (costos de campo)

| Concepto | Costo estimado/mes | Fuente |
|----------|-------------------|--------|
| Transporte captador (moto/bus para visitas en zona) | ~$40/mes | Estimacion local (gasolina, pasajes) |
| Material impreso (volantes A5, tarjetas, stickers QR) | ~$30/mes | Impresion a granel local |
| Datos moviles captador | ~$10/mes | Prorrateo plan basico Digitel/Movistar |
| **Total** | **~$80/mes (~$960/ano)** | |

Este costo no aparecia en las versiones anteriores. Es critico para el piloto porque sin captacion no hay comercios.

---

## 8. Presupuesto anual consolidado (escenarios)

Totales **~12,7–15,2 kUSD/ano** (mas variante de pauta) con supuestos explicitos: ver **[PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md)**. Incluye ademas **sin OOH** (~6,7–7,3 kUSD/ano) y **horizonte 6 meses** (~3,9–4,2 kUSD sin valla). Ingresos proyectados: ver [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).

---

**Ultima revision de enlaces:** abril 2026.
