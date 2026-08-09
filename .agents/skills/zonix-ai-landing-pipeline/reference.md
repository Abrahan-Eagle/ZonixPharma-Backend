# Referencia NEONFALL — Prompts verbatim + adaptación Zonix Pharma

> **Crédito fuente:** Juan Pablo Rosso · Nexum AI · [nexumai.online](https://nexumai.online)  
> Documento: *NEONFALL — El proceso completo* (PDF complementario del video de YouTube).  
> **Adaptación Zonix:** cambiar sujeto visual, paleta y copy; **mantener** técnicas de composición, loop y crossfade.

---

## Paso 1 - Brief inicial (Zonix)

### Mensaje del usuario (plantilla Zonix)

```
Hola Claude. Quiero crear o mejorar la landing de Zonix Pharma (marketplace
farmacéutico Venezuela, OTC + receta) con Claude Design para el hero y Claude
Code para el resto, integrando finalmente en Laravel Blade + zonix.css.

Necesito un hero con video en loop (8–15 s) donde el visual quede a la DERECHA
y el copy/CTA a la IZQUIERDA (negative space). Paleta y tono según
BRAND_ZONIX_PHARMA: navy #1E2A5A, teal #56C7B8, mint #A8DCCB — NO cyberpunk,
NO delivery comida, NO claims de salud sin respaldo.

Pipeline: Nano Banana 2 (imagen hero) → Kling 3.0 o Veo 3 (video loop) →
Claude Design (hero) → Claude Code (secciones) → integrar en
resources/views/front/welcome.blade.php.

Investigá best practices y devolvé TODOS los prompts listos para copiar.
[Si aplica:] Solo tengo 1 intento por recurso en plan free — calidad sobre
velocidad, prompts quirúrgicos.
```

**INPUT sugerido:** (1) screenshot `welcome.blade.php` actual; (2) extracto `BRAND_ZONIX_PHARMA.md`; (3) referencia de layout (visual derecha, texto izquierda); (4) mockup de farmacia/tech-pharma deseado.

**Adaptación Zonix:** invocar `zonix-brand-ops` y `zonix-regulatory-ve` antes de fijar copy final.

---

## Prompt Nano Banana 2 - Hero (Zonix)

**Configuración:**
- Modelo: Nano Banana 2
- Aspect ratio: 16:9
- Resolución: 4K

### Plantilla base (NEONFALL — verbatim, referencia técnica)

```
Cinematic cyberpunk key visual in widescreen 16:9 composition. The character is
positioned on the RIGHT third of the frame; the LEFT two-thirds are deliberately
empty negative space reserved for typography overlay.
[... resto del prompt NEONFALL — ver fuente original para gaming/cyberpunk ...]
Constraints: No text. No logos. No watermarks. No UI elements. Do not center the
character. Keep the left side of the image completely clean and uncluttered.
```

### Prompt Zonix Pharma (usar este en producción)

```
Cinematic tech-pharma key visual in widescreen 16:9 composition. The main subject
is positioned on the RIGHT third of the frame; the LEFT two-thirds are
deliberately empty negative space reserved for typography and CTA overlay.

Subject: A modern Venezuelan pharmacy scene — a calm female pharmacist in clean
white coat with subtle teal accent trim, standing beside a well-lit counter with
organized medicine packaging (boxes and bottles, no readable brand names). She
holds a tablet showing an abstract app interface (no readable text). Warm,
trustworthy expression, three-quarter angle facing slightly right. Professional,
approachable, not stock-photo sterile.

Background: Soft gradient from deep navy (#1E2A5A) on the left to muted teal-mint
atmospheric haze on the right. Subtle bokeh suggesting a clean pharmacy interior
— shelves softly blurred, warm ambient light. No harsh medical red crosses, no
stethoscope clichés, no syringes prominent.

Composition: Cinematic wide shot, eye level. Subject occupies approximately the
right 35 percent of the frame. The left 65 percent is clean soft navy-to-mint
gradient with no objects, no text, no clutter — pure negative space.

Lighting: Soft key light from upper left, gentle teal rim light on the right
edge of the subject. High clarity, low drama — premium health-tech, not hospital
emergency.

Style: Modern editorial illustration, clean flat shading with subtle painterly
texture, restrained saturation, premium digital health marketplace aesthetic.
Crisp but human.

Mood: Trustworthy, calm, professional, accessible.

Constraints: No text. No logos. No watermarks. No UI elements. No star ratings.
Do not center the subject. Keep the left side completely clean. No additional
people in the frame. No food delivery imagery.
```

**Adaptación Zonix:** mantener reglas de composición NEONFALL (tercio derecho, anti-centrado); sustituir sujeto cyberpunk por pharma; paleta BRAND; prohibir estrellas/ratings fake.

---

## Prompt Kling 3.0 - Loop

**Configuración crítica:**
- Modelo: Kling 3.0
- Start Frame: imagen Nano Banana 2
- End Frame: **la MISMA imagen** (subir dos veces)
- Duración: 15 segundos

### Verbatim (NEONFALL)

```
Subtle ambient motion only. The character's loose hair gently sways from a soft
directional breeze. The fabric of the haori jacket and the cargo pants ripples
slightly in the same wind. Suspended particles and small debris shards drift
slowly upward and float around the figure. The character breathes softly with an
almost imperceptible chest and shoulder rise and fall. Faint atmospheric flicker
in the magenta background haze, like distant cinematic light flares pulsing. The
camera stays completely static throughout — no pan, no zoom, no dolly. The final
frame matches the first frame exactly. Seamless loop.
```

### Refinado Zonix (proteger tablet y rostro)

```
Subtle ambient motion only. The pharmacist's hair gently sways from a soft
directional breeze. The white coat fabric ripples very slightly. The character
breathes softly with an almost imperceptible chest and shoulder rise and fall.
The tablet in hand stays perfectly static — do not animate the screen, do not
move the arm holding it. The character's head and facial expression remain
completely stable, no head turn, no expression change. Soft bokeh lights in the
background gently pulse. Subtle dust particles drift slowly in the atmospheric
haze tinted navy and teal.

The camera stays completely static throughout — no pan, no zoom, no dolly, no
tilt. The final frame matches the first frame exactly. Seamless infinite loop.
```

**Adaptación Zonix:** igual técnica NEONFALL (movimiento mínimo, cámara fija); proteger objetos rígidos relevantes al sujeto pharma.

---

## Prompt Veo 3 - Loop

**Configuración Google AI Studio:**
- Modelo: Veo 3 · Image-to-Video · 8 s · 16:9 · `muted` en HTML

### Verbatim estructura (NEONFALL — timestamps)

Usar bloques `[00:00–00:01]` … `[00:07–00:08]` con return to start. Incluir `(that's where the camera is)` para adherencia en Veo 3. Negative list: camera movement, head turn, body rotation, etc.

### Adaptación Zonix (movimiento heroico suave)

```
A static locked-off wide cinematic shot, camera at eye level positioned in front
of and to the left of the subject (that's where the camera is). The camera does
not move at any point — no pan, no zoom, no tilt, no dolly, completely fixed
tripod.

Subject: a pharmacist in white coat beside a pharmacy counter, three-quarter
angle, navy-teal-mint atmospheric background, soft bokeh shelves.

[00:00–00:01] Subject stands perfectly still in the exact pose of the reference
image. Tablet held steady. Hair drifts gently. Soft particles float.

[00:01–00:03] Subject slowly raises the tablet with the right hand in a smooth
deliberate arc to chest height, as if showing the app to a patient. Body remains
facing the same direction — no torso rotation, no head turn.

[00:03–00:05] Subject holds the tablet steady for two full seconds. Subtle
ambient motion only: hair sways, coat ripples, background bokeh pulses softly.

[00:05–00:07] Subject slowly lowers the tablet along the same arc back to the
starting position exactly as in the first frame.

[00:07–00:08] Subject returns to the exact identical pose and composition of
[00:00–00:01]. Seamless infinite loop.

Style: clean tech-pharma editorial illustration, navy-teal-mint palette, premium
digital health marketplace aesthetic.

Negative: camera movement, zoom, pan, tilt, dolly, perspective shift, head turn,
body rotation, facial close-up, walking, additional characters, text, logos,
watermark, UI elements, motion blur on face, medical emergency imagery.
```

**Plan B — Kapwing:** crossfade 0.3–0.5 s entre final e inicio si el loop no cierra pixel-perfect.

---

## Prompt Claude Design - Hero (Zonix)

Adjuntar video generado. Tipo: Prototype, High Fidelity.

### Estructura (adaptada de NEONFALL)

Pedir hero section con:

- **Stack provisional:** HTML autocontenido para prototipo rápido (aceptable en Design).
- **Integración Zonix (anotar en prompt):** mapear después a Blade `@extends('front.layouts.zonix')` y `zonix.css`; **no** depender de Tailwind en producción.

```
Necesito el HERO SECTION de landing para Zonix Pharma (marketplace farmacéutico
Venezuela). Prototipo HTML autocontenido OK; producción final será Blade +
zonix.css con tokens --brand-navy, --brand-teal, --brand-mint.

VIDEO LOOP 16:9 ya generado: farmacéutica/visual pharma en tercio derecho,
negative space izquierdo para copy. VIDEO_URL = "/img/hero-loop.mp4".

# LAYOUT
100vh hero. Capas: (0) dual-video crossfade, (1) gradient overlay navy opacidad
0.85 izquierda → transparente ~60%, (2) vignette sutil, (3) nav + copy + CTA.

# VIDEO + CROSSFADE
Implementar dual-video crossfade (ver snippet en reference.md). CROSSFADE_MS=700,
TRIGGER_BEFORE_END=0.7s.

# COLOR (mapear a zonix.css en integración)
--brand-navy: #1E2A5A
--brand-teal: #56C7B8
--brand-teal-deep: #0F4C5C
--brand-mint: #A8DCCB
--brand-surface: #F5F7FA
Texto principal sobre overlay: blanco/navy según contraste WCAG.

# TIPOGRAFÍA
Plus Jakarta Sans (Google Fonts) — display 700/800, body 400/500.

# COPY PLACEHOLDER (revisar zonix-regulatory-ve antes de publicar)
- Logo: Zonix + PHARMA (teal caps)
- Nav: Cómo funciona · Farmacias · Recetas · App
- Tagline: "— MARKETPLACE FARMACÉUTICO · VALENCIA PILOTO"
- Headline (dos líneas):
TUS MEDICAMENTOS.
CON CONFIANZA.
- Subtítulo: "Pedí OTC y medicamentos con receta. Validación por farmacéutico
colegiado en farmacias aliadas."
- CTA primario: "Descargar app" (fill teal, texto navy)
- CTA secundario: "Soy farmacia" (outline)

# RESTRICCIONES
- NO estrellas fake ni ratings inventados
- NO copy de delivery comida / restaurante
- NO <form> funcional sin backend
- SOLO hero en este paso (sin secciones extra)
- Premium, tech-pharma, sobrio — referencia visual: apps health fintech, no
  cyberpunk gaming

Handoff to Claude al terminar.
```

**Adaptación Zonix:** tokens BRAND; copy pharma; prohibir ratings fake; post-Design → Blade.

---

## Snippet dual-video crossfade

Técnica NEONFALL — reutilizable en Blade (`@push('scripts')`) o HTML prototipo:

```html
<div class="hero-video-wrap">
  <video id="video-a" class="hero-video" autoplay muted playsinline></video>
  <video id="video-b" class="hero-video hero-video--standby" muted playsinline></video>
</div>
```

```javascript
const VIDEO_URL = '/img/hero-loop.mp4'; // asset() en Blade
const CROSSFADE_MS = 700;
const CROSSFADE_TRIGGER_BEFORE_END = 0.7;

const videoA = document.getElementById('video-a');
const videoB = document.getElementById('video-b');
[videoA, videoB].forEach(v => { v.src = VIDEO_URL; v.load(); });

let active = videoA;
let standby = videoB;
videoA.play();

function tick() {
  if (!active.duration) return requestAnimationFrame(tick);
  const remaining = active.duration - active.currentTime;
  if (remaining <= CROSSFADE_TRIGGER_BEFORE_END && standby.paused) {
    standby.currentTime = 0;
    standby.play();
    standby.style.opacity = '1';
    active.style.opacity = '0';
    setTimeout(() => {
      const tmp = active; active = standby; standby = tmp;
      standby.pause();
    }, CROSSFADE_MS);
  }
  requestAnimationFrame(tick);
}
requestAnimationFrame(tick);
```

CSS mínimo: `.hero-video { position:absolute; inset:0; width:100%; height:100%; object-fit:cover; transition: opacity 0.7s ease; }` · `.hero-video--standby { opacity:0; }`

---

## Prompts Nano Banana - Secciones internas (Zonix)

### Imagen 1 — RED / COBERTURA (épica)

**Config:** Nano Banana 2, 16:9, 4K.

```
Cinematic aerial wide shot of Valencia, Venezuela at golden hour, viewed from
above with a slight forward tilt. Modern urban landscape with recognizable
coastal city character — residential blocks, avenues, green areas, distant
mountains on the horizon. Clean, optimistic, not dystopian.

Subject: city grid stretching to the horizon with warm sunlight. Scattered
pharmacy-style storefronts suggested by subtle teal accent lighting on a few
building facades (abstract, no readable signage). Soft delivery route lines
suggested as faint teal paths between neighborhoods — abstract, not a map UI.

Atmosphere: clear sky gradient navy to soft mint in the upper third — clean
negative space for typography. Lower two-thirds rich with city detail but not
cluttered.

Lighting: warm golden hour with cool teal accent highlights. Professional,
hopeful, expansive.

Composition: horizon in upper third; upper third clean for headline overlay.

Style: modern editorial illustration, tech-pharma marketplace aesthetic, restrained
saturation, premium but human.

Mood: coverage, access, trust at scale.

Constraints: no text, no logos, no watermarks, no UI elements, no star ratings,
no characters with visible faces in foreground. Keep upper third clean.
```

**Contraste narrativo:** épica / red de cobertura (vs. imagen 2 íntima).

### Imagen 2 — FARMACIA / CONFIANZA (íntima)

**Config:** Nano Banana 2, 16:9, 4K.

```
Cinematic interior ground-level shot of a modern neighborhood pharmacy at
night, warm and inviting. One-point perspective down the aisle toward the
consultation counter at the back.

Subject: clean pharmacy interior — organized shelves with medicine boxes (no
readable brands), warm counter lighting, a single pharmacist silhouette from
behind at the counter (faceless, small in frame). Teal accent strip lighting
along shelf edges. Glass door with soft street bokeh outside.

Atmosphere: calm, safe, professional. Navy-teal-mint color grading. No clinical
coldness, no emergency room aesthetic.

Lighting: warm counter key light, cool teal accents on shelves, soft shadows.

Composition: vanishing point upper-center; lower third relatively clean for text
overlay on reflective floor.

Style: editorial illustration, tech-pharma, premium accessibility.

Mood: trust, care, neighborhood pharmacy.

Constraints: no readable text, no logos, no watermarks, no red medical crosses
prominent, no star ratings. Silhouette only — no facial detail.
```

**Adaptación Zonix:** reemplaza WORLD (ciudad cyberpunk) + STORY (callejón) por cobertura + farmacia confiable; misma técnica de negative space.

---

## Prompt Claude Code - Resto del sitio (Zonix)

Copiar bloque completo. Adjuntar: screenshot hero + 2 imágenes + contexto Laravel.

### Parte 1 — Contexto

```
# CONTEXTO
Landing Zonix Pharma (Laravel Blade + zonix.css). Hero con video loop ya
funcionando. Paleta navy/teal/mint, Plus Jakarta Sans. Integrar en
resources/views/front/welcome.blade.php y public/css/zonix.css — NO Tailwind CDN
en producción.

# ASSETS
- /public/img/hero-loop.mp4
- /public/img/coverage-valencia.jpg (vista aérea)
- /public/img/pharmacy-trust.jpg (interior farmacia)

# OBJETIVO — 6 secciones DESPUÉS del hero:
COMO-FUNCIONA → RECETAS → COBERTURA → FARMACIAS → APP → FOOTER
Actualizar nav con anclas + smooth scroll + sticky nav con backdrop-blur.

# REGLAS GLOBALES
1. Reutilizar tokens --brand-* de zonix.css; clases btn-zonix-primary existentes.
2. Mobile-first; breakpoints 768 / 1024 / 1440; grid 8pt.
3. NO nuevas dependencias CSS/JS pesadas.
4. NO estrellas fake, NO claims curativos sin respaldo — marcar TODO regulatorio.
5. NO copy Eats/restaurante — rg antes de cerrar.
6. Imágenes: loading="lazy", width/height, asset().
7. Scroll reveal con IntersectionObserver (opacity + translateY).
8. Un CTA primario por sección above-the-fold.

# NAVEGACIÓN
- Cómo funciona → #como-funciona
- Recetas → #recetas
- Cobertura → #cobertura
- Farmacias → #farmacias
- App → #app
```

### Parte 2 — Secciones (resumen)

**COMO-FUNCIONA:** grid 4 pasos (Buscar → Carrito → Receta si Rx → Entrega/retiro). Iconos SVG inline teal. Copy factual; Rx menciona validación farmacéutico.

**RECETAS:** split layout; badge "Requiere receta" estilo app; disclaimer `[PENDIENTE asesor MPPS]` si falta texto legal final.

**COBERTURA:** full-bleed `coverage-valencia.jpg`; headline «Valencia piloto»; lista barrios/zonas placeholder TODO.

**FARMACIAS:** cards B2B aliadas; CTA «Quiero sumar mi farmacia» → `#contacto` o mailto TODO.

**APP:** mockup + badges App Store / Play Store TODO; CTA «Descargar app».

**FOOTER:** links legales, MPPS disclaimer breve, © Zonix Pharma, sin «Built in Montevideo» salvo que aplique.

### Checklist final

- IDs `#como-funciona`, `#recetas`, `#cobertura`, `#farmacias`, `#app` existen
- Nav ancla correctamente; sticky + blur tras hero
- Tokens zonix.css reutilizados, no duplicados
- `rg -i "eats|restaurant|#ff3d40"` sin matches no intencionales
- Responsive 390 / 768 / 1024 / 1440
- Cero Lorem ipsum; claims salud revisados con zonix-regulatory-ve

---

## Tokens Zonix (referencia rápida)

Mapear desde [public/css/zonix.css](../../../public/css/zonix.css) y [docs/BRAND_ZONIX_PHARMA.md](../../../docs/BRAND_ZONIX_PHARMA.md):

| Token | HEX | Uso |
|-------|-----|-----|
| `brandNavy` | `#1E2A5A` | Fondos, nav, canvas 60% |
| `brandTealDeep` | `#0F4C5C` | Kickers, badges |
| `brandTeal` | `#56C7B8` | CTA primario (10%) |
| `brandMint` | `#A8DCCB` | Acentos suaves |
| `brandSurfaceLight` | `#F5F7FA` | Superficies claras |

Tipografía: **Plus Jakarta Sans** (ya cargada en layout Zonix).

---

## Recursos externos

| Herramienta | URL / nota |
|-------------|------------|
| Nano Banana 2 | Google AI Studio (Gemini 3.1 Flash Image) |
| Veo 3 | Google AI Studio |
| Kling 3.0 | Artlist |
| Claude Design / Code | claude.ai |
| Kapwing | Crossfade post-producción del loop |
| Marca Zonix | `docs/BRAND_ZONIX_PHARMA.md` |
| Deploy landing | `docs/ops/deploy/DEPLOY_PHARMA_AIBLOCK.md` |

---

## Créditos

Metodología y prompts originales: **Juan Pablo Rosso · Nexum AI · nexumai.online** — *NEONFALL — El proceso completo*.  
Adaptación Zonix Pharma: skill `zonix-ai-landing-pipeline` · Zonix Team · 2026.
