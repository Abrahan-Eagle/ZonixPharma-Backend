# Bitácora — +58 Ventures

> Slug: `plus58-ventures`  
> Ask ref.: Lean USD **237.412** · SAFE cap 600k.

## Registro (cronológico)

| Fecha | Qué pasó | Resultado / dato | Siguiente |
|-------|----------|------------------|-----------|
| 2026-07-21 | Forense plus58ventures.com (todas rutas) + WHOIS + form GAS + web search | Score **43** nurture (pipeline). Catch-all SPA; sin cheque. | Waitlist solo con OK; no pitch Lean |
| | | | |

## Hechos verificados (forense 21 jul 2026)

### Identidad web

| Campo | Valor |
|-------|-------|
| URL | https://plus58ventures.com/ |
| Título | +58 Ventures \| Venture Capital en Venezuela |
| Producto visible | Landing **Get Early Access** (waitlist) |
| Copyright footer | `© 2025 +58 Ventures` (desactualizado vs jul 2026) |
| Logo | SVG inline (`aria-label="+58 Ventures"`) |
| Favicon | Cloudflare Images `imagedelivery.net/yE0zBfZjwDPgKjQmjr9rJQ/...` |
| Analytics | Cloudflare Web Analytics beacon |
| Email / tel públicos | **Ninguno** |
| MX DNS | **Vacío** (sin correo en el dominio) |

### Dominio / infra

| Campo | Valor |
|-------|-------|
| WHOIS created | **2025-10-22** |
| WHOIS expiry | **2026-10-22** |
| Registrar | Cloudflare, Inc. |
| NS | betty / viddy `.ns.cloudflare.com` |
| A/AAAA | IPs Cloudflare (proxy) |
| TLS | Google Trust Services WE1; SAN apex + `*.plus58ventures.com` |
| crt.sh | Certs desde oct 2025 (rotación típica CF) |
| HEAD `/` | **404** |
| GET `/` | **200** (~19–20 KB) |

### Mapa de rutas (“cada link / view”)

Todas las siguientes devolvieron el **mismo** HTML (~19780 B) — **no** hay páginas distintas:

`/` · `/index.html` · `/about` · `/about/` · `/team` · `/portfolio` · `/contact` · `/blog` · `/apply` · `/investors` · `/founders` · `/faq` · `/privacy` · `/terms` · `/waitlist` · `/early-access` · `/es` · `/en` · `/www` · `/robots.txt` · `/sitemap.xml` · `/sitemap_index.xml` · `/llms.txt`

- **0** enlaces `<a href>` internos en el HTML.
- No hay `robots.txt` / sitemap reales (también catch-all HTML).

### Formulario waitlist

| Campo | Detalle |
|-------|---------|
| Campos | `name`, `email`, `profile` |
| Opciones profile | Fundador/a · Inversionista · Emprendedor/a · Mentor/a · Estudiante · Otro |
| Endpoint | `https://script.google.com/macros/s/AKfycbxvq2mP3nhOSWNTfbyNXHMebllrEKixqtVsCg07vLYlOqAjzOzw725M0XQgO58Zvy9E/exec` |
| Método | `fetch` POST, `mode: 'no-cors'`, body JSON |
| UX | Asume éxito y muestra “¡Gracias! Te contactaremos pronto.” |
| Acción CRM | **No** enviar sin OK founder |

### Claims del copy (no auditables)

- Apoyo a emprendedores que construyen **desde Venezuela**.
- Red de fundadores/inversionistas VE en Silicon Valley, CDMX, Miami, Madrid.
- “Capital temprano, mentoría estratégica y acceso a redes globales”.
- “Esto es más que un fondo. Es un movimiento.”
- **Ausente:** ticket, AUM, LP, equipo, portfolio, jurisdicción, RIF, deadlines, deck.

### Anti-confusiones (homónimos)

| Entidad | Relación |
|---------|----------|
| [linkedin.com/company/plus58](https://linkedin.com/company/plus58) | Agencia **Advertising Services** (otro negocio) — **no** es este VC |
| [plus.vc](https://plus.vc/about) / Plus Venture Capital MENA | Fondo MENA distinto |
| [venezuelamobilityventures.com](https://venezuelamobilityventures.com/) | VMV (movilidad / Ridery) — distinto |
| 58Ventures LLC (Michigan) | Consultora US — distinto |

### Contexto pack Zonix

- Briefing §4.5: Early access / waitlist; ticket no publicado; fit medio; **no es cheque hoy**; acción = registrarse en waitlist (opcional).
- Calendario P2: +58 waitlist rolling.

## Fuentes

- https://plus58ventures.com/
- WHOIS / dig / crt.sh (21 jul 2026)
- HTML fuente (form + GAS URL)
- [`../../Lanzamiento/BRIEFING_INVERSORES_VE_2026.md`](../../Lanzamiento/BRIEFING_INVERSORES_VE_2026.md) §4.5

## Pendientes

- [ ] ¿Founder quiere waitlist? (sí/no)
- [ ] Re-scrape cuando aparezcan equipo / ticket / apply
- [ ] Confirmar LinkedIn company oficial del fondo (si existe)
