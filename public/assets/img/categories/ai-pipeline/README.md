# Category thumbnails — AI pipeline (Zonix Pharma)

Thumbnails 1:1 para el carrusel `#categories` en `welcome.blade.php`.

## Estado actual (2026-06-17)

- **Landing en producción:** iconos Material Symbols en `.category-icon` (ver `$landingCategories` en `welcome.blade.php`). **No** usa fotos en el carrusel.
- **Assets foto (opcional futuro):** `../{slug}.jpg` + `../{slug}.webp` y `source/{slug}.jpg` — conservados por si se retoma pipeline IA.
- **Regeneración IA (opcional):** prompt maestro abajo; reemplazaría iconos solo si producto lo aprueba.

## Slugs activos

| Slug | Label landing | Icono Material (activo) |
|------|---------------|-------------------------|
| `analgesicos` | Analgésicos | `medication` |
| `antigripales` | Antigripales | `coronavirus` |
| `vitaminas` | Vitaminas | `nutrition` |
| `dermatologicos` | Dermatológicos | `dermatology` |
| `cuidado-infantil` | Cuidado infantil | `child_care` |
| `dispositivos-medicos` | Dispositivos médicos | `monitor_heart` |
| `primeros-auxilios` | Primeros auxilios | `health_and_safety` |

## Prompt maestro (1:1, 512px)

```
Square product still life for a Venezuelan pharmacy marketplace app category icon.
Subject: [CATEGORY_SUBJECT] centered on soft studio background.
Background: smooth gradient from off-white #F5F7FA to mint #A8DCCB, no harsh edges.
Lighting: soft diffused, subtle shadow under product, professional e-commerce.
Style: clean tech-pharma, NOT lifestyle people, NOT hospital cliché, NO text, NO logos, NO brand names.
Composition: single focal object or small grouped OTC items, 70% frame fill, circle-crop safe margins.
Color mood: cool navy-teal family, high clarity, WCAG-friendly contrast on edges.
```

### CATEGORY_SUBJECT por slug

- `analgesicos` — blister pack and white round pills, analgesic OTC
- `antigripales` — cold/flu OTC box with thermometer accessory
- `vitaminas` — amber vitamin capsules in small glass bottle
- `dermatologicos` — derm cream tube and small lotion bottle
- `cuidado-infantil` — baby care OTC bottle and dropper (no children in frame)
- `dispositivos-medicos` — digital thermometer and blood pressure cuff compact
- `primeros-auxilios` — compact first-aid kit box with cross symbol (generic)

## Post-proceso local (sin IA)

```bash
CAT_DIR="public/assets/img/categories"
slug="analgesicos"
convert -size 512x512 gradient:'#F5F7FA-#A8DCCB' \
  \( "$CAT_DIR/ai-pipeline/source/${slug}.jpg" -resize 360x360^ -gravity center -extent 360x360 \) \
  -gravity center -compose over -composite \
  -modulate 102,95,100 -quality 88 "$CAT_DIR/${slug}.jpg"
convert "$CAT_DIR/${slug}.jpg" -quality 85 -define webp:method=6 "$CAT_DIR/${slug}.webp"
```

## Checklist deploy

- [ ] 7 pares jpg + webp en `public/assets/img/categories/`
- [ ] `<picture>` en Blade referencia webp con fallback jpg
- [ ] Sin claims curativos ni marcas reales en imagen
- [ ] Verificar crop circular en desktop y mobile (`.category-ring` 6rem)
