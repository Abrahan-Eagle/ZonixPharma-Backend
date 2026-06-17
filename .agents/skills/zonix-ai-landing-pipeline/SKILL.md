---
name: zonix-ai-landing-pipeline
description: >-
  Orquesta el pipeline NEONFALL adaptado a Zonix Pharma: Claude (research + prompts),
  Nano Banana 2 (imágenes), Veo 3 o Kling (video loop hero), Claude Design (borrador hero),
  Claude Code (resto del sitio). Integración final en Blade + zonix.css. Usar cuando el
  usuario pida landing con IA, hero con video loop, Claude Design, generación de assets
  para welcome.blade.php o marketing web pharma.
trigger: Landing con IA, hero video loop, Claude Design, Nano Banana, Veo 3, Kling, handoff a Claude Code, pipeline generativo para welcome/marketing Zonix Pharma.
scope: resources/views/front/, public/css/zonix.css, public/img/, docs/BRAND_ZONIX_PHARMA.md
related-skills: zonix-web-design, zonix-brand-ops, zonix-regulatory-ve, zonix-design-enforcer, ui-ux-pro-max
author: Zonix Team
version: 1.0
---

# Zonix Pharma — Pipeline de landing con IA (NEONFALL adaptado)

> **Fuente metodológica:** proceso NEONFALL (Juan Pablo Rosso · Nexum AI). Prompts verbatim y plantillas en [reference.md](reference.md).
> **Integración Zonix:** el output final vive en `resources/views/front/welcome.blade.php` + `public/css/zonix.css`, no en HTML Tailwind suelto.

## Precedencia JARVIS

1. [docs/BRAND_ZONIX_PHARMA.md](../../../docs/BRAND_ZONIX_PHARMA.md)
2. **Esta skill** + `zonix-web-design` (Blade / `zonix.css`)
3. `zonix-brand-ops` (copy, naming, 60-30-10)
4. `zonix-regulatory-ve` — cualquier claim de salud, Rx, MPPS/INHRR → revisión humana; marcar `[PENDIENTE asesor]` si falta respaldo

## Idea central (análisis forense)

El valor **no** está en las herramientas: está en el **orden**, la **disciplina del prompting** y la **validación humana en checkpoints**. Un mega-prompt único produce landings mediocres; el pipeline por fases produce resultados profesionales.

**Regla de oro:** calidad sobre velocidad. Si hay un solo intento por recurso (plan free), declararlo en el brief para que Claude responda con prompts quirúrgicos.

**Lo que NO se traslada de NEONFALL a Zonix:** paleta magenta/cyberpunk, copy gaming, Tailwind CDN, ratings fake, Saira Condensed. **Lo que sí se traslada:** negative space, loop de video, crossfade dual-video, handoff Design → Code, imágenes internas con contraste narrativo.

---

## Cadena de herramientas

| Herramienta | Rol |
|-------------|-----|
| **Claude (claude.ai)** | Brief, research, prompt engineering, validación de assets |
| **Nano Banana 2** (Google AI Studio) | Imágenes 16:9 4K: hero + escenas internas |
| **Kling 3.0** (Artlist) o **Veo 3** (Google AI Studio) | Video loop del hero (8–15 s) |
| **Claude Design** | Primer borrador visual del hero |
| **Claude Code** | Resto del sitio; luego **integrar en Blade** con tokens Zonix |
| **Kapwing** (opcional) | Plan B: crossfade 0.3–0.5 s si el loop no cierra pixel-perfect |

**Destino Zonix:** assets en `public/img/` (o `public/assets/`); estilos vía `zonix.css`; layout en `resources/views/front/layouts/zonix.blade.php` + `welcome.blade.php`.

---

## Flujo de 8 pasos

Copiar checklist y marcar progreso:

```
Pipeline Zonix (NEONFALL adaptado):
- [ ] 1. Brief inicial (objetivo pharma, 1 intento si aplica, referencias BRAND)
- [ ] 2. Research + plan estratégico (Claude elige modelos y composición)
- [ ] 3. Imagen hero (Nano Banana 2) — sujeto pharma, negative space izquierda
- [ ] 4. Validar imagen (tercio derecho, espacio texto, pose estable para loop)
- [ ] 5. Video loop (Kling Start=End o Veo 3 + timestamps + crossfade)
- [ ] 6. Hero section (Claude Design + video; luego mapear a Blade/zonix.css)
- [ ] 7. Imágenes secciones internas (2 prompts: épica red + íntima farmacia)
- [ ] 8. Resto del sitio (Claude Code → integrar secciones en welcome.blade.php)
```

### Paso 1 — Brief inicial

Incluir siempre:

- Producto: **Zonix Pharma** — marketplace farmacéutico VE (OTC + Rx), no gaming ni delivery comida.
- Output: landing con hero video loop + secciones de confianza (cómo funciona, farmacias, app).
- Pipeline: imagen → video → Claude Design → Claude Code → **Blade + zonix.css**.
- **Un solo intento** por recurso si aplica.
- Referencias: screenshot de `welcome.blade.php` actual, `BRAND_ZONIX_PHARMA.md`, layout objetivo (visual derecha, copy izquierda).
- Pedir: investigar best practices y devolver **todos** los prompts listos para copiar.

Plantilla: [reference.md § Brief inicial](reference.md#paso-1---brief-inicial-zonix).

### Paso 2 — Research y plan

Claude debe decidir:

- **Imagen:** Nano Banana 2 (16:9, 4K, negative space nativo).
- **Video:** Kling 3.0 si hay Start+End frame (loop matemático); Veo 3 si solo image-to-video (timestamps + crossfade HTML).
- **Loop Kling:** misma imagen como Start Frame **y** End Frame.

No avanzar al paso 3 sin plan escrito. Validar paleta contra BRAND (navy `#1E2A5A`, teal `#56C7B8`, mint `#A8DCCB`).

**Opcional (ui-ux-pro-max v2):** antes de generar assets, ejecutar design system reasoning para patrones landing pharma:

```bash
python3 .agents/skills/ui-ux-pro-max/scripts/search.py \
  "pharmacy healthcare marketplace trust" \
  --design-system -p "Zonix Pharma"
```

Usar salida para estructura de secciones y checklist a11y; **mapear colores** a tokens BRAND (ver [ZONIX.md](../ui-ux-pro-max/ZONIX.md)).

### Paso 3 — Imagen del hero

Config: Nano Banana 2, **16:9**, **4K**, thinking alto si existe.

Prompt base + adaptación Zonix: [reference.md § Nano Banana hero](reference.md#prompt-nano-banana-2---hero-zonix).

Claves técnicas (igual que NEONFALL): `right third` / `left two-thirds empty`, repetir `no center` en Constraints.

Claves Zonix: farmacia moderna / paciente / packaging / tech-pharma sobrio; **sin** estetoscopios cliché, cruces rojas, estrellas fake.

### Paso 4 — Validar imagen

Antes de gastar el intento de video, enviar screenshot a Claude. Criterios:

- Sujeto visual en tercio derecho.
- Izquierda respirable para headline + CTA (`btn-zonix-primary`).
- Pose/escena estable para loop (elementos rígidos identificados).

Si falla: ajustar prompt Nano Banana; **no** forzar en video.

### Paso 5 — Video loop

**Opción A — Kling 3.0 (preferida si disponible):**

- Start Frame = End Frame = misma imagen Nano Banana.
- Duración 15 s, prompt corto, movimiento ambiental mínimo.
- Proteger objetos rígidos (manos, dispositivos, logos de empaque).

**Opción B — Veo 3 (8 s, image-to-video):**

- Timestamp prompting + cámara estática.
- Evitar movimientos grandes de personaje de espaldas.
- Plan B: crossfade Kapwing o dual-video en HTML/Blade.

Prompts: [reference.md § Kling](reference.md#prompt-kling-30---loop) y [reference.md § Veo 3](reference.md#prompt-veo-3---loop).

### Paso 6 — Hero en Claude Design

Tipo: **Prototype**, High Fidelity. Design System: **usar tokens Zonix** si ya existen en BRAND; si no, describir paleta navy/teal/mint en el prompt.

Adjuntar: video generado + prompt quirúrgico (layout, crossfade dual-video, copy placeholder pharma).

Prompt: [reference.md § Claude Design hero](reference.md#prompt-claude-design---hero-zonix).

Handoff: **Share → Handoff to Claude**. Luego **mapear** HTML generado a Blade: `@extends('front.layouts.zonix')`, clases `zonix.css`, `asset('img/hero-loop.mp4')`.

### Paso 7 — Imágenes internas

Dos imágenes con contraste narrativo (mismo anchor visual navy/teal/mint):

1. **RED / COBERTURA** — épica, aérea o mapa de cobertura Valencia; negative space arriba para tipografía.
2. **FARMACIA / CONFIANZA** — íntima, mostrador o consulta discreta; one-point perspective o escena cálida.

Prompts: [reference.md § Imágenes internas](reference.md#prompts-nano-banana---secciones-internas-zonix).

### Paso 8 — Claude Code + integración Blade

1. Importar proyecto desde Claude Design (handoff).
2. Screenshot del hero + 2 imágenes descargadas.
3. Prompt largo para Claude Code: secciones pharma + reglas globales.
4. **Post-proceso Zonix:** volcar secciones a `welcome.blade.php`; reemplazar tokens genéricos por `--brand-*` de `zonix.css`; verificar `zonix-brand-ops` y `zonix-regulatory-ve`.

Secciones típicas Zonix (adaptar según producto):

| NEONFALL | Zonix Pharma |
|----------|--------------|
| WORLD | Cobertura / farmacias aliadas |
| GAMEPLAY | Cómo funciona (OTC, Rx, validación) |
| STORY | Confianza / farmacéutico colegiado |
| FACTIONS | Roles (paciente, farmacia, delivery) |
| EDITIONS | Descarga app / piloto Valencia |
| NEWSLETTER | Lista de espera / contacto B2B |
| FOOTER | Legal, MPPS disclaimer, links |

Prompt Claude Code: [reference.md § Claude Code](reference.md#prompt-claude-code---resto-del-sitio-zonix).

---

## Principios de prompting

1. **Un intento = cero margen de error** — prompts largos, constraints repetidos.
2. **Negative space explícito** — "left 65% clean", "upper third for typography".
3. **No centrar** — el modelo centra por defecto; repetir en Composition y Constraints.
4. **Loop:** Kling Start=End; Veo timestamps + return to start; HTML dual-video crossfade si no cierra.
5. **Movimiento mínimo en video** — warpeo en cara, manos o empaque rompe el loop.
6. **Checkpoints humanos** — validar imagen antes de video; hero antes de secciones.
7. **Claude genera prompts para otras herramientas** — no generar assets finales solo en chat.

---

## Adaptación Pharma (obligatorio)

### Visual

- Paleta: `brandNavy`, `brandTeal`, `brandTealDeep`, `brandMint` — ver BRAND y `zonix.css`.
- Tipografía: **Plus Jakarta Sans** (ya en proyecto); no Saira/Inter genéricos AI-slop.
- Hero: gradiente **navy**, no teal/mint a pantalla completa (regla 60-30-10).
- Imágenes: tech-pharma limpio, farmacias reales estilizadas, packaging; evitar clichés médicos ruidosos.

### Stack

- **Blade** + `public/css/zonix.css` + Bootstrap/vendor existente en `public/vendor/`.
- Clases: `btn-zonix-primary`, `text-teal-deep`, `bg-mint-soft`, vars `--brand-*`.
- **Prohibido:** HEX inline nuevo en Blade, Tailwind/React salvo decisión explícita de producto.

### Copy y regulatorio

- Tono: paciente, farmacia aliada, receta validada, entrega confiable — ver `zonix-brand-ops`.
- **No:** gig-economy, restaurante, estrellas inventadas, "100% cura", claims sin respaldo.
- Rx / salud: invocar `zonix-regulatory-ve`; disclaimer MPPS donde corresponda.

### Anti-Eats (gate antes de cerrar)

```bash
rg -i "eats|restaurant|#ff3d40|repartidor gig|5 estrellas" resources/views/front public/css/zonix.css
```

Cero matches no intencionales.

---

## Reglas de output del sitio (Blade + zonix.css)

- Layout: `resources/views/front/layouts/zonix.blade.php`; contenido en `welcome.blade.php`.
- Reutilizar tokens y utilidades de `zonix.css`; no duplicar variables.
- **Mobile-first**; grid 8pt; un CTA primario por sección above-the-fold.
- Video hero: `autoplay muted playsinline`, crossfade dual-video — [reference.md § Crossfade JS](reference.md#snippet-dual-video-crossfade).
- Imágenes: `loading="lazy"`, dimensiones explícitas, `asset('img/...')`.
- Nav sticky con backdrop-blur; smooth scroll a anclas (`#como-funciona`, `#farmacias`, etc.).
- Forms reales de newsletter/contacto: usar rutas Laravel existentes o marcar TODO; no `<form>` fake sin backend.

---

## Tabla de adaptación de variables

| Variable NEONFALL | Zonix Pharma |
|-------------------|--------------|
| `[GAME NAME]` | Zonix Pharma |
| Género visual | Marketplace farmacéutico VE, tech-pharma |
| Paleta | navy + teal + mint (BRAND) |
| Copy hero | Ej. «Tus medicamentos, con farmacias de confianza.» |
| Secciones | Cobertura · Cómo funciona · Rx · App · Farmacias · Footer legal |
| Tipografías | Plus Jakarta Sans |
| Stack final | Blade + zonix.css (no Tailwind CDN) |

---

## Cuándo NO usar esta skill

- Landing estática sin video hero → solo `zonix-web-design` + `zonix-brand-ops`.
- Solo copy o SEO → no invocar cadena de generación de assets.
- Feature de producto API/Flutter → Spec Kit + skills `zonix-*` de dominio.
- Esta skill **no** reemplaza `welcome.blade.php` automáticamente: requiere integración manual post-Claude Code.

---

## Prompt maestro JARVIS

Para **auditar la landing actual** (código + navegador) y obtener un **plan pipeline + prompts externos** sin implementar hasta OK del usuario, usar:

**[docs/plantillas/PROMPT_LANDING_IA_ZONIX.md](../../../docs/plantillas/PROMPT_LANDING_IA_ZONIX.md)**

Copiar el bloque *Super Prompt* en un chat nuevo; definir `URL`, `HERO_VIDEO` y `PROFUNDIDAD` en la primera línea.

---

## Recursos

- Prompts verbatim + adaptación Zonix: [reference.md](reference.md)
- Marca: [docs/BRAND_ZONIX_PHARMA.md](../../../docs/BRAND_ZONIX_PHARMA.md)
- Web existente: `zonix-web-design`
- Fuente metodológica: PDF *NEONFALL — El proceso completo* (Juan Pablo Rosso · Nexum AI · nexumai.online)
