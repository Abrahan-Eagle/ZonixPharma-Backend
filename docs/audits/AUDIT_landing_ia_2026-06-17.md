# AUDIT_landing_ia_2026-06-17

> Auditoría landing Zonix Pharma + plan pipeline IA (NEONFALL adaptado).  
> **URL auditada:** `https://pharma.aiblockweb.com`  
> **Prompt maestro:** [`docs/../plantillas/PROMPT_LANDING_IA_ZONIX.md`](../plantillas/PROMPT_LANDING_IA_ZONIX.md)

**Doctrina skills-first:** la auditoría orienta; las skills (`zonix-web-design`, `zonix-ai-landing-pipeline`, `zonix-brand-ops`, `zonix-regulatory-ve`, `ui-ux-pro-max`) ejecutan mejoras sin bloquearse en “pendiente usuario”.

---

## Resumen ejecutivo

| Área | Fase 4 | Fase 5 (2026-06-17) |
|------|--------|---------------------|
| Hero visual | Ilustración Red de cuidado (Cursor) | **Gemini fotorealista** — cuidado humano (od6tjf + mp4) |
| Hero video | ffmpeg Ken Burns sobre ilustración | **Veo/Gemini mp4.mp4** — 8 s, 1080p, recorte anti-watermark |
| Watermark | N/A (Cursor) | **Recorte 3%** en imagen y video (sparkle Gemini eliminado) |
| Copy | Psicología marca (sin cambio) | Mantenido — alineado a escena emocional |
| LCP poster | webp ~38 KB | webp ~40 KB desktop / ~51 KB mobile |

---

## Fase 5 — Integración assets Gemini (hero)

### Stack seleccionado (assets hero locales / no versionados)

| Asset origen | Uso | Motivo |
|--------------|-----|--------|
| `Gemini_Generated_Image_od6tjfod6tjfod6t.png` | Poster + fallback | Mayor resolución (2752×1536), cuidado empatía, negative space izquierdo |
| `mp4.mp4` | Video loop desktop | Misma escena, movimiento sutil, 1.5 MB origen |

**Descartados:** `A_static_locked_off_cinematic.mp4` (cámara/trípode), `pxux74.png` (persona sola), `mp4 (1).mp4` (duplicado).

### Post-proceso aplicado

- Recorte **97%** centro (elimina sparkle Gemini esquina inferior derecha)
- Desktop: 1920×1080 jpg + webp
- Mobile: 1080×1440 crop gravity east + webp
- Video: crop 97% → scale 1080p → 8 s → CRF 26 → `hero-loop.mp4`

### Assets en repo

| Archivo | Ubicación | Tamaño |
|---------|-----------|--------|
| Master | `public/assets/img/hero/ai-pipeline/hero-gemini-care-master.png` | ~6.2 MB |
| Desktop | `public/assets/img/hero/desktop-pharmacy.webp` + `.jpg` | ~40 KB / ~133 KB |
| Mobile | `public/assets/img/hero/mobile-pharmacy.webp` + `.jpg` | ~51 KB / ~160 KB |
| Video loop | `public/assets/video/hero/hero-loop.mp4` | ~957 KB |

### Copy hero (sin cambio — Fase 4)

| Elemento | Texto |
|----------|-------|
| Badge | Tu salud, con tranquilidad |
| H1 | Cuida lo que importa. / **Sin preocupaciones.** |
| Subcopy | Conectamos personas con farmacias aliadas de confianza… |
| Trust card | Red verificada / Farmacias aliadas en tu zona |

### Verificación Fase 5

```bash
php artisan test --filter=SeoTest   # 2 passed
curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8000/  # 200
# preload LCP: desktop-pharmacy.webp
# video: hero-loop.mp4 activo vía file_exists en Blade
```

### Hero full-bleed (fix 2026-06-17)

**Problema:** layout split 50/50 — el MP4 solo ocupaba `hero-right` (~50vw) y se percibía “cortado a la mitad”.

**Fix** (`welcome.blade.php` + `public/css/zonix.css`):

- Nueva capa `.hero-media-layer` (absolute inset-0, desktop): video + poster a **ancho completo** del hero
- Copy en `.hero-inner` / `.hero-left` superpuesto con `.hero-overlay-full` (gradiente navy 0% → transparent 58%)
- Eliminado `rounded-4rem-bl` del contenedor de video
- `object-position: center center` (más frame visible en viewport ancho)
- Mobile sin cambios: imagen estática `mobile-pharmacy`

**Verificación:** SeoTest 2 passed · HTTP 200 · desktop 1440px — video full-bleed, copy legible, trust card visible.

---

## Fase 6 — ui-ux-pro-max (UX / a11y)

Skill: `.agents/skills/ui-ux-pro-max/` v2.5.0 + overlay [`ZONIX.md`](../.agents/skills/ui-ux-pro-max/ZONIX.md).

### Comandos ejecutados

```bash
python3 .agents/skills/ui-ux-pro-max/scripts/search.py \
  "pharmacy healthcare marketplace trust" \
  --design-system -p "Zonix Pharma" -f markdown

python3 .agents/skills/ui-ux-pro-max/scripts/search.py \
  "accessibility contrast focus reduced-motion" --domain ux -n 8
```

### Adoptado vs rechazado (filtro ZONIX)

| Recomendación design-system | Decisión |
|-----------------------------|----------|
| Patrón Hero + Social Proof + Testimonials + CTA | **Adoptado** — estructura ya cumplida |
| Pre-delivery checklist (focus, motion, hover, touch) | **Adoptado** — parches en `zonix.css` |
| Estilo Vibrant & Block-based | **Rechazado** — fuera de BRAND tech-pharma |
| Paleta verde `#15803D` / Lexend + Source Sans 3 | **Rechazado** — tokens `--brand-*` + Plus Jakarta Sans |
| Hero search-bar como CTA principal | **Rechazado** — landing app-download, no marketplace search |

### Checklist pre-delivery (antes → después)

| Item | Antes | Después |
|------|-------|---------|
| Focus visible teclado | Solo nav-search | `:focus-visible` en nav, CTAs, badges, icon buttons |
| prefers-reduced-motion | Hero video, Ken Burns, partículas | + reveal, pulse, mock bounce, hovers, btn:active |
| Hover 150–300ms | `.hover-scale` en Blade sin CSS | Clase `.hover-scale` definida (200ms) |
| cursor-pointer | Implícito en `<a>` | Explícito en `.app-badge`, `.nav-link` |
| Colores trust hero | `bg-green-100` / `text-green-600` genéricos | `bg-mint-soft` / `text-teal-deep` (BRAND) |
| Touch 44px | `.btn-icon` 2.75rem | Sin cambio (OK) |
| Emojis como iconos | Material Symbols + Bootstrap Icons | Sin cambio (OK) |
| Estructura responsive | py-5 / breakpoints existentes | Sin cambio (OK) |

### Archivos tocados (Fase 6)

- `public/css/zonix.css` — bloque a11y ui-ux-pro-max
- `resources/views/front/welcome.blade.php` — hero-trust-icon tokens brand

### Verificación Fase 6

```bash
php artisan test --filter=SeoTest   # 2 passed
curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8000/  # 200
```

---

## Fase 7 — cinematic polish (Blade/CSS, inspiración TSX)

Skill: `ui-ux-pro-max` + `zonix-web-design` + `zonix-brand-ops`. Referencia visual: componente React `cinematic-landing-hero.tsx` (Sobers) — **no portado**; adaptado a farmacia en Blade.

### Comandos ejecutados

```bash
python3 .agents/skills/ui-ux-pro-max/scripts/search.py \
  "pharmacy app landing mobile mockup trust delivery prescription" \
  --design-system -p "Zonix Pharma" -f markdown

python3 .agents/skills/ui-ux-pro-max/scripts/search.py \
  "glass card depth shadow accessibility reduced motion" \
  --domain ux -f markdown
```

### Adoptado vs rechazado (TSX + design-system)

| Origen | Recomendación | Decisión |
|--------|---------------|----------|
| TSX | `premium-depth-card`, sheen, iPhone bezel, floating badges | **Adoptado** — CSS en `zonix.css`, markup Blade |
| TSX | Mock UI widgets + progress ring | **Adoptado** — flujo OTC/Rx/tracking pharma |
| TSX | CTAs táctiles profundidad | **Adoptado** — `.app-badge-depth` sobre PNGs store |
| TSX | GSAP ScrollTrigger pin 7000px | **Rechazado** — scroll-jacking / motion sensitivity |
| TSX | React + shadcn + npm gsap | **Rechazado** — stack Blade + zonix.css |
| TSX | Copy Sobers / Days Sober / emojis | **Rechazado** — copy farmacia + Material Symbols |
| TSX | Paleta `#162C6D` / `#3B82F6` | **Rechazado** — `--zonix-navy`, `--brand-teal-deep` |
| TSX | film-grain global | **Rechazado** — estética gaming |
| ui-ux-pro-max | App Store mockup + download CTAs | **Adoptado** — refuerzo sección teléfono + badges |
| ui-ux-pro-max | Flat sin sombras / verde `#15803D` / Outfit | **Rechazado** — profundidad glass + tokens BRAND |
| ui-ux-pro-max | prefers-reduced-motion, no ScrollTrigger | **Adoptado** — guards en CSS + `zonix.js` |

### Archivos tocados (Fase 7)

- `public/css/zonix.css` — bloque cinematic polish
- `resources/views/front/welcome.blade.php` — hero trust, mockup, steps, testimonials, download
- `public/js/zonix.js` — sheen + tilt (desktop, reduced-motion safe)

### Verificación Fase 7

```bash
php artisan test --filter=SeoTest
curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8000/
```

---

## Fase 8 — Forensic polish post-Fase 7

Auditoría en navegador (desktop 1440px + mobile 375px) tras Fase 7. Objetivo: corregir layout roto del mockup en mobile, refinar UI interna del iPhone, completar polish residual (grid sutil, audience sheen) — sin React/GSAP.

### Hallazgos forenses y fixes

| ID | Severidad | Evidencia | Fix aplicado |
|----|-----------|-----------|--------------|
| **F8-1** | Alta | Mobile: mockup superpuesto con pasos, columnas sin stack | `col-12` en columnas mockup/pasos; badges `position: static` &lt; lg; `phone-mockup-col`/`phone-steps-col` width 100%; blob oculto en mobile |
| **F8-2** | Media | Desktop: badges recortados | `overflow: visible` en sección/columna; badges `left/right: -2.5rem`; fondo blanco legible |
| **F8-3** | Media | Toast tapaba widgets Rx/OTC | `.mock-order-toast` fuera de `.mock-app-inner`, dentro de `.iphone-screen`; `padding-bottom` en inner |
| **F8-4** | Baja | `.card-audience` sin sheen | `.card-audience-sheen` pseudo estático + `z-index` en `.card-content` |
| **F8-5** | Baja | Progress ring SVG frágil | Círculos envueltos en `<g transform="rotate(-90 88 88)">`; sin `transform` en `.mock-progress-ring-fill` |

**Rechazado (TSX / ui-ux-pro-max):** GSAP scroll pin, film-grain, paleta gaming, copy Sobers, emojis, ratings fake, migración React/shadcn/Tailwind/npm.

### Adoptado vs rechazado (polish residual)

| Patrón TSX | Implementación Blade |
|------------|---------------------|
| `.bg-grid-theme` | `.phone-section-grid-bg::before` — grid sutil con mask radial (tokens navy) |
| `.card-sheen` estático | `.card-audience-sheen` en audience cards |
| `.btn-modern-*` | **No** — se mantiene `.app-badge-depth` existente |

### Archivos tocados (Fase 8)

- `public/css/zonix.css` — mobile mockup fix, grid bg, audience sheen, SVG ring, badge stacked, tilt off mobile
- `resources/views/front/welcome.blade.php` — mockup markup (SVG g, toast, `col-12`, `phone-steps-col`)
- `public/js/zonix.js` — sheen excluye `.premium-depth-card--light` (hero trust card)

### Verificación Fase 8

```bash
php artisan test --filter=SeoTest   # 2 passed
curl -s -o /dev/null -w "%{http_code}" http://127.0.0.1:8000/  # 200
```

**Checklist manual (browser):**

| Viewport | Resultado |
|----------|-----------|
| Desktop 1440px | Mockup + badges flotantes visibles; pasos legibles; toast en bottom del phone; progress 75% |
| Mobile 375px | CSS stack implementado (`col-12`, badges estáticos bajo iPhone, blob off); validar en dispositivo real |
| `prefers-reduced-motion` | Sin float/tilt (CSS + JS gated) |
| Fase 6 a11y | Intacta — focus-visible sin regresión |

---

## Audience cards clip fix (2026-06-17)

Corrección de las 3 cards en `#become-partner` (Pide ahora / Repartidor / Registrar Farmacia): sombras inferiores recortadas y poco contraste sobre fondo gris.

| ID | Severidad | Causa | Fix aplicado |
|----|-----------|-------|--------------|
| **AC-1** | Alta | `.container-fluid, .row { overflow-x: hidden }` fuerza `overflow-y: auto` y recorta box-shadows | `.row` eliminado de la regla global; `overflow: visible` en `.section-audience-overlap` y su `.row` |
| **AC-2** | Media | Cards blancas sobre `#F5F7FA` con `--shadow-xl` muy suave | Borde `var(--slate-100)` + sombra navy en `.card-audience`; fondo explícito `var(--zonix-bg-light)` en sección |
| **AC-3** | Media | Overlap `-2.5rem` post hero full-bleed competía con social strip | `margin-top: -1.25rem`; padding vertical ampliado (`2.5rem` / `3.5rem`) |
| **AC-4** | Baja | `.hover-lift` duplicaba transform/sombra con `.card-audience:hover` | Clase `hover-lift` retirada de las 3 cards en Blade |

**Archivos:** `public/css/zonix.css`, `resources/views/front/welcome.blade.php`

**Verificación:** `SeoTest` 2 passed · HTTP 200 · sombras completas bajo cards · hover lift único vía `.card-audience:hover`

**Revalidación (2026-06-17):** sin regresión tras polish social-proof strip; `margin-top` audience ajustado a `0` (overlap lo aporta el strip).

---

## Social proof strip polish (2026-06-17)

Corrección de la franja Aliadas / OTC+Rx / Rápido / Humano: panel plano entre hero navy y sección audiencia gris.

| ID | Severidad | Causa | Fix aplicado |
|----|-----------|-------|--------------|
| **SP-1** | Media | Strip blanco flush sin card ni overlap hero | Panel flotante en `.container-zonix` dentro de `.social-proof-strip`; `margin-top: -2rem` / `-2.5rem` desktop; sombra navy + borde |
| **SP-2** | Media | Iconos `text-slate-300` apagados | Wrapper `.social-stat-icon` con fondo mint + color teal-deep (patrón hero trust card) |
| **SP-3** | Baja | Poco aire vertical | Padding interno `1.75rem` / `2rem` en panel; `row-gap` mobile |
| **SP-4** | Media | Doble overlap strip + audience | `.section-audience-overlap { margin-top: 0; padding-top: 2rem }` |

**Archivos:** `public/css/zonix.css`, `resources/views/front/welcome.blade.php`

**Verificación:** `SeoTest` 2 passed · HTTP 200 · panel con sombra completa · iconos teal legibles · audience cards sin regresión · carrusel categorías OK

---

## Trust card z-index fix (2026-06-17) — **REVERTIDO**

Badge «Red verificada / Farmacias aliadas en tu zona» quedaba oculto detrás del social-proof strip tras el polish SP-1.

| ID | Severidad | Causa | Fix aplicado |
|----|-----------|-------|--------------|
| **TZ-1** | Alta | `.social-proof-strip { z-index: 5 }` tapaba la trust card | ~~Wrapper `.hero-strip-stack` + `.hero-trust-card-wrap`~~ **revertido a petición del usuario** |
| **TZ-2** | Alta | `z-index` confinado al contexto del hero | Trust card de nuevo dentro de `.hero-media-layer` con `.hero-trust-card { z-index: 3; position: relative }` |

**Estado actual:** layout anterior restaurado (2026-06-17). El solapamiento strip → trust card puede volver a verse en desktop; social proof strip polish (SP-*) y audience cards (AC-*) se mantienen.

---

## Categories polish (2026-06-17)

Carrusel `#categories`: anillos inconsistentes, nav genérico, sección plana vs audience cards.

| ID | Severidad | Causa | Fix aplicado |
|----|-----------|-------|--------------|
| **CP-1** | Media | Headers sin kicker común; fondo blanco aislado | `.section-head` + kicker `Catálogo OTC`; `#categories.section-categories` fondo `--zonix-bg-light` |
| **CP-2** | Media | Anillos sin borde mint; nav `btn-outline-secondary` | `.category-ring` borde mint + sombra navy; `.cat-nav-btn` outline/filled navy; fade lateral `.categories-scroll-wrap` |
| **CP-3** | Baja | Scroll fijo 300px; flechas siempre activas | JS: `scrollBy` = 75% ancho contenedor; `disabled` en extremos |
| **CP-4** | Media | Thumbnails mix producto/lifestyle | Batch 512×512 gradiente BRAND (jpg+webp); backup en `categories/ai-pipeline/source/`; README prompt IA |

**Archivos:** `welcome.blade.php`, `zonix.css`, `zonix.js`, `public/assets/img/categories/*`

**Verificación:** `SeoTest` 2 passed · HTTP 200 · `<picture>` webp · carrusel drag intacto

**Supersedido parcialmente** por Categories v2 (iconos + panel blanco) — ver CP2-* abajo.

---

## Categories v2 (2026-06-17)

Feedback visual: fondo gris plano, fotos incoherentes, flecha derecha disabled visible en desktop.

| ID | Severidad | Causa | Fix aplicado |
|----|-----------|-------|--------------|
| **CP2-1** | Alta | Fondo `--zonix-bg-light` monótono vs audience | Sección blanca + `.categories-panel` elevado (patrón social-proof strip) |
| **CP2-2** | Alta | Fotos mixtas producto/lifestyle | Iconos Material por categoría en `.category-icon` (7 slugs con `icon` en Blade) |
| **CP2-3** | Media | Nav visible pero disabled sin overflow | JS: `categories-track--static` + `#catNavActions.is-hidden` cuando caben todas |
| **CP2-4** | Baja | Fade lateral sobre gris | Gradientes `.categories-scroll-wrap` alineados a blanco del panel |

**Archivos:** `welcome.blade.php`, `zonix.css`, `zonix.js`

**Verificación:** `SeoTest` 2 passed · HTTP 200 · desktop centrado sin flechas · mobile scroll + nav activo

**Supersedido** por Categories v3 (grid chips) — ver CP3-* abajo.

---

## Categories v3 (2026-06-17)

Feedback visual: panel blanco vacío, doble anillo centrado, fondo plano, sección estática.

| ID | Severidad | Causa | Fix aplicado |
|----|-----------|-------|--------------|
| **CP3-1** | Alta | Panel blanco con mucho padding vacío | Eliminado `.categories-panel`; grid `.categories-grid` full-width alineado al header |
| **CP3-2** | Alta | Doble círculo `.category-ring` + `.category-icon` | Chip único `.category-chip` (icono 3rem estilo social-stat + label) |
| **CP3-3** | Media | Fondo blanco plano entre audience y offers | Gradiente mint → blanco → `--zonix-bg-light`; sin `border-top` suelto |
| **CP3-4** | Baja | Sección estática; nav en desktop innecesario | CTA «Explorar catálogo en la app» → `#download`; nav solo mobile (`matchMedia` 1024px) |

**Archivos:** `welcome.blade.php`, `zonix.css`, `zonix.js`

**Verificación:** `SeoTest` 2 passed · HTTP 200 · desktop 7 chips en fila · mobile scroll + fade mint + nav si overflow

---

## App offers polish (2026-06-17)

Sección `#offers` «Descubre en la App»: cards planas, badges saturados en imagen.

| ID | Severidad | Causa | Fix aplicado |
|----|-----------|-------|--------------|
| **AP-1** | Media | `.card-promo` sombra `--shadow-sm` vs `.card-audience` | Borde slate + sombra navy; `.card-promo-sheen`; hover `translateY(-4px)` vía `.card-promo-link` |
| **AP-2** | Media | Doble badge en imagen (tag + pill verified/Rx) | Un solo `.card-promo-tag` en imagen; trust/Rx en `.card-promo-footer` |
| **AP-3** | Baja | Chip «Solo en la App» texto suelto | `.badge-app-only` mint + icono; header `.section-head--split` |
| **AP-4** | Baja | Sin CTA post-grid | Botón `Descargar la App` → `#download`; cards enlazan `#download` |

**Archivos:** `welcome.blade.php`, `zonix.css`

**Verificación:** badges tokenizados (otc/verified/fast) · footer legible · sin regresión audience/strip

---

## Mobile responsive fixes (RM-M1 — 2026-06-17)

Feedback usuario: social strip amontonado, menú offcanvas roto, footer/sticky en mobile.

| ID | Severidad | Causa | Fix aplicado |
|----|-----------|-------|--------------|
| **RM-M1** | Alta | Social proof `col-6` + `<br>` en labels | `col-12 col-md-auto`, lista vertical con fondo `--zonix-bg-light` por fila |
| **RM-M2** | Alta | Offcanvas `flex-col` (Tailwind inválido en Bootstrap) | `flex-column gap-2` — links apilados verticalmente |
| **RM-M3** | Media | Hero mobile apilaba texto + imagen | Overlay: `.hero-right` absolute + gradiente navy full-height |
| **RM-M4** | Media | Sticky bar tapaba footer | `body.has-mobile-sticky-bar` padding-bottom + cookie banner ya en `bottom: 80px` |
| **RM-M5** | Baja | Tipografía hero grande en 375px | `clamp()` en `.text-hero-zonix` |

**Archivos:** `welcome.blade.php`, `public/css/zonix.css`, `public/js/zonix.js`

**Checklist mobile 375px:** social strip 4 filas legibles · menú «En la App» horizontal OK · hero copy sobre imagen · footer no oculto por sticky

---

## Fases anteriores (referencia)

### Fase 4 — Hero emocional + copy psicología marca

- Concepto Red de cuidado (ilustración Cursor)
- Partículas CSS `.hero-particles`
- Copy: Cuida lo que importa / Sin preocupaciones

### Fase 3 — Secciones internas + promos

- `#about`: about-network.webp · Drivers: driver-bg.webp · Promos aliada A–D

### Fase 2 — Infra técnica

- 0 inline styles, preload LCP, Ken Burns fallback, tokens navy

---

## Semáforo actual

| Área | Estado | Nota |
|------|--------|------|
| Marca / tokens | Verde | Escena cuidado humano + gradiente navy/teal |
| UX / jerarquía | Verde | Mockup premium + forensic polish mobile/desktop (Fase 8) |
| UX / a11y | Verde | focus-visible, reduced-motion Fase 6+7+8, sheen/tilt gated |
| Técnico (assets, LCP) | Verde | webp ~40 KB; video ~957 KB (<2.5 MB) |
| Watermark | Verde | Recorte 3% aplicado en imagen y video |
| Código / mantenibilidad | Verde | Blade/CSS only; sin npm nuevo |
| Regulatorio / copy | Verde parcial | Sin claims curativos en hero |

---

## Pipeline — estado global

```
Pipeline Zonix (NEONFALL adaptado):
- [x] 1. Brief inicial
- [x] 2. Research + plan
- [x] 3. Imagen hero (Gemini od6tjf — cuidado humano)
- [x] 4. Validación composición (negative space izquierdo)
- [x] 5. Video loop → hero-loop.mp4 (Gemini mp4, post-procesado)
- [x] 6. Hero Blade (video + imagen + partículas CSS)
- [x] 7. Imágenes secciones internas (about/drivers)
- [x] 8. Resto sitio — CSS, copy emocional, SEO schema
- [x] 9. ui-ux-pro-max — checklist UX/a11y (Fase 6)
- [x] 10. cinematic polish — mockup premium + glass depth (Fase 7)
- [x] 11. forensic polish — mobile mockup + audience sheen (Fase 8)
```

---

## Pendiente (fuera de código)

- **Deploy prod** — push a `main` requiere OK explícito del usuario
- **Revisión visual humana** — confirmar que sparkle Gemini no es visible tras recorte en desktop/mobile
- **Testimonios reales** — `[PENDIENTE asesor]`

---

**Última actualización:** 2026-06-17 · Categories v2 (iconos + panel blanco)
