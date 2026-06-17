# Zonix Pharma — Overlay ui-ux-pro-max

> Leer **antes** de aplicar colores, tipografía o fuentes sugeridas por el design system generator.

## Precedencia (obligatoria)

```
1. docs/BRAND_ZONIX_PHARMA.md
2. zonix-web-design (Blade + zonix.css) | zonix-ui-design (Flutter)
3. zonix-brand-ops | zonix-design-enforcer
4. ui-ux-pro-max (esta skill — ideas UX/patterns; NO override tokens)
5. frontend-design (secundaria)
```

**Regla:** Nunca sustituir tokens `brand*` / variables `--brand-*` en `zonix.css` ni `AppColors.brand*` en Flutter por paletas genéricas del CSV.

## Stack por superficie

| Superficie | Flag `--stack` | Implementación real |
|------------|----------------|---------------------|
| Landing Blade | `html-tailwind` | Patrones UX/layout; código en `public/css/zonix.css` — **sin** Tailwind CDN |
| App Flutter | `flutter` | Widgets con `AppColors` + `Theme.of(context)` |

## Comando design system (Pharma)

Desde la raíz del repo:

```bash
python3 .agents/skills/ui-ux-pro-max/scripts/search.py \
  "pharmacy healthcare marketplace trust venezuela" \
  --design-system -p "Zonix Pharma"
```

Usar la salida para: estructura de landing, patrones hero, checklist a11y, anti-patterns de industria. **Mapear colores** a tokens BRAND (`--brand-navy`, `--brand-teal`, `--brand-teal-deep`, `--brand-mint`).

## Anti-patterns Zonix

- Purple/pink AI-slop gradients
- Emojis como iconos (usar SVG / Material Icons)
- Paletas/fuentes fuera de Plus Jakarta Sans (web) y BRAND
- Copy gig-economy / restaurante / Eats legacy
- Ratings fake o claims de salud sin respaldo regulatorio

## Canon

- Marca: [docs/BRAND_ZONIX_PHARMA.md](../../../docs/BRAND_ZONIX_PHARMA.md)
- Web: skill `zonix-web-design`
- Flutter: Front `zonix-ui-design`
