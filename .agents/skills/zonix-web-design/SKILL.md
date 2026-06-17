---
name: zonix-web-design
description: Sistema de diseño web Zonix Pharma (Blade + zonix.css). Landing welcome, navbar, tokens CSS, WCAG, anti-AI-slop alineado a BRAND. Precede frontend-design genérico.
trigger: Editar welcome.blade.php, zonix.css, vistas front/, navbar shared, landing, marketing web Laravel.
scope: resources/views/front/, resources/views/dashboard/shared/, public/css/zonix.css
related-skills: zonix-brand-ops, frontend-design, ui-ux-pro-max
author: Zonix Team
version: 1.0
---

# Zonix Pharma — Web Design (Blade + CSS)

> **Leer primero:** [docs/BRAND_ZONIX_PHARMA.md](../../../docs/BRAND_ZONIX_PHARMA.md) y `zonix-brand-ops`.
> Tokens CSS: [public/css/zonix.css](../../../public/css/zonix.css).
> Flutter espejo: Front `zonix-ui-design`.

## Precedencia JARVIS

1. `BRAND_ZONIX_PHARMA.md`
2. **Esta skill** + `zonix.css` existente
3. `zonix-brand-ops` (copy/naming)
4. `ui-ux-pro-max` — ideas UX, layout, a11y, design system reasoning; ver [ZONIX.md](../ui-ux-pro-max/ZONIX.md); **no** nuevas paletas ni fuentes fuera de BRAND
5. `frontend-design` — solo ideas de composición; **no** nuevas paletas ni fuentes fuera de BRAND

## Cuándo invocar ui-ux-pro-max

Antes de rediseñar secciones o auditar UX/a11y de la landing:

```bash
python3 .agents/skills/ui-ux-pro-max/scripts/search.py \
  "pharmacy healthcare marketplace trust" \
  --design-system -p "Zonix Pharma"
```

Implementar patrones en `zonix.css`; mapear colores sugeridos a tokens `--brand-*`.

## Stack web Zonix

| Capa | Ubicación |
| ---- | --------- |
| Vistas landing | `resources/views/front/welcome.blade.php` |
| Nav compartido | `resources/views/dashboard/shared/navbar.blade.php` |
| Estilos | `public/css/zonix.css` |
| Fuente | Plus Jakarta Sans (Google Fonts, ya en proyecto) |

**No** introducir Tailwind/shadcn/React en landing Pharma salvo decisión explícita de producto.

## Tokens CSS (usar clases existentes)

Preferir utilidades y variables ya en `zonix.css`:

- `--brand-navy`, `--brand-teal`, `--brand-teal-deep`, `--brand-mint`
- Clases: `btn-zonix-primary`, `text-teal-deep`, `text-brand-mint`, `bg-mint-soft`, `bg-badge-navy`

**Prohibido:** HEX inline nuevos en Blade salvo excepción documentada en BRAND.

## Dosificación visual (60-30-10)

- **60%** navy + superficies (`brandNavy`, fondos light/dark)
- **30%** tealDeep + mint (kickers, badges, iconos, bordes)
- **10%** `brandTeal` — reservado a CTAs (`btn-zonix-primary`, wordmark PHARMA)

Banners hero: gradiente **navy**, no teal/mint a pantalla completa.

## Jerarquía y secciones

Adaptado de DesignSystem / Jaywalker:

1. **Un CTA primario** por sección above-the-fold
2. **Aislar secciones** con una sola técnica: cambio de superficie, whitespace, divider, borde, o fill suave — no apilar bloques idénticos sin separación
3. Texto en tres niveles: título (navy) → cuerpo (muted) → meta (faint/tealDeep)
4. Grid **8px**: márgenes/padding 8, 16, 24, 32, 48

## Botones y contraste

- CTA primario: fondo `--brand-teal`, texto **navy** (`#1E2A5A`) — WCAG AA
- Secundario: outline navy o ghost sobre superficie clara
- No usar teal como color de párrafo largo

## Anti-patterns web

- Purple gradients, Inter/Roboto como «default AI»
- Estrellas fake, «100%» sin respaldo
- Copy gig-economy / restaurante
- Inline `#ff3d40` / rojos Eats legacy
- Múltiples CTAs teal compitiendo en el mismo viewport

## Flujo antes de editar

1. Leer `BRAND_ZONIX_PHARMA.md` + sección afectada de `welcome.blade.php`
2. Buscar token en `zonix.css` (`rg brand-teal welcome zonix.css`)
3. Aplicar cambio mínimo; reutilizar utilidades
4. Verificar contraste botones y links
5. `rg -i "eats|restaurant|#ff3d40" resources/views/front public/css/zonix.css`

## Archivos frecuentes

```
resources/views/front/welcome.blade.php
resources/views/dashboard/shared/navbar.blade.php
public/css/zonix.css
```

## Skills relacionadas

- `zonix-brand-ops` — naming y tono
- `ui-ux-pro-max` — design system reasoning (`--design-system`); ver [ZONIX.md](../ui-ux-pro-max/ZONIX.md)
- `zonix-design-enforcer` (Front) — mismas heurísticas 8pt/WCAG en Flutter
- `frontend-design` — referencia secundaria; no contradice tokens
