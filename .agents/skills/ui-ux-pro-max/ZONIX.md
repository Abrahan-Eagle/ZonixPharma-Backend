# Zonix Pharma — Overlay ui-ux-pro-max (Backend + canon compartido)

> Leer **antes** de aplicar colores, tipografía o fuentes sugeridas por el design system generator.
> Espejo Flutter: `../ZonixPharma-Front/.agents/skills/ui-ux-pro-max/OVERLAY.md`

## Producto

- **Nombre:** Zonix Pharma
- **Vertical:** Marketplace farmacéutico (Venezuela, OTC + Rx)

## Fuente canónica de tokens

| Recurso | Ruta |
|---------|------|
| Marca (canon) | [docs/BRAND_ZONIX_PHARMA.md](../../../docs/BRAND_ZONIX_PHARMA.md) |
| Web Blade/CSS | skill `zonix-web-design` · `public/css/zonix.css` |
| Flutter | Front `zonix-ui-design` · `lib/features/utils/app_colors.dart` |
| Enforcer | `.agents/skills/zonix-design-enforcer/SKILL.md` (stub → Front) |

## Precedencia (obligatoria)

```
1. docs/BRAND_ZONIX_PHARMA.md
2. zonix-web-design (Blade + zonix.css) | zonix-ui-design (Flutter)
3. zonix-brand-ops | zonix-design-enforcer
4. ui-ux-pro-max (patrones UX; NO override tokens brand*)
5. frontend-design (secundaria)
```

**Regla:** Nunca sustituir tokens `brand*` / variables `--brand-*` en `zonix.css` ni `AppColors.brand*` en Flutter por paletas genéricas del CSV.

## Stack por superficie

| Superficie | Flag `--stack` | Implementación real |
|------------|----------------|---------------------|
| Landing Blade | `html-tailwind` | Patrones UX/layout; código en `public/css/zonix.css` — **sin** Tailwind CDN |
| App Flutter | `flutter` | Widgets con `AppColors` + `Theme.of(context)` |

## Comando design system (Pharma)

```bash
export UI_UX_SKILL_ROOT="${UI_UX_SKILL_ROOT:-$HOME/.cursor/skills/ui-ux-pro-max}"

python3 "$UI_UX_SKILL_ROOT/scripts/search.py" \
  "pharmacy healthcare marketplace trust venezuela" \
  --design-system -p "Zonix Pharma" -f markdown

python3 "$UI_UX_SKILL_ROOT/scripts/search.py" "navigation forms cards listing" \
  --stack html-tailwind   # Blade · o --stack flutter en Front
```

Mapear colores sugeridos a: `--brand-navy`, `--brand-teal`, `--brand-teal-deep`, `--brand-mint` (web) · `brandNavy`, `brandTeal`, `brandTealDeep`, `brandMint` (Flutter).

## Anti-patterns Zonix

- Purple/pink AI-slop gradients
- Emojis como iconos (usar SVG / Material Icons)
- Paletas/fuentes fuera de Plus Jakarta Sans (web) y BRAND
- Copy gig-economy / restaurante / Eats legacy
- Ratings fake o claims de salud sin respaldo regulatorio
- Ignorar badges Rx / cold chain en checkout

## Skills financieras/regulatorias completas

Solo en Backend: `zonix-financial-model`, `zonix-fundraising-narrative`, `zonix-regulatory-ve`.
