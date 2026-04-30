# BRAND · Zonix Pharma

> **Vertical farmacéutica del ecosistema Zonix.** Marketplace de farmacias y droguerías con
> entrega o retiro, OTC y bajo prescripción (Rx) para Venezuela.

## 1. Naming canónico

| Contexto | Cómo escribirlo |
| -------- | --------------- |
| UI / copy | **Zonix Pharma** |
| Tipográfico (lockup logo) | `Zonix` + small caps `PHARMA` con tracking amplio |
| package id Android / bundle id iOS | `com.zonix.pharma` |
| nombre Flutter (`pubspec.yaml`) | `zonix` |
| dominio web | `zonixpharma.com` |
| canal FCM | `zonix_pharma_fcm` |
| deep link | `zonix://pharmacy/{commerceId}` |

NO usar: ~~`ZonixEats`~~, ~~`Zonix-Eats`~~, ~~`zonixpharma.app`~~, ~~`Zonix Salud`~~.

## 2. Paleta HEX

| Token | HEX | Uso |
| ----- | --- | --- |
| `brandNavy` | `#1E2A5A` | Color primario, navegación, headers, AppBar light |
| `brandTealDeep` | `#0F4C5C` | Texto secundario sobre superficies claras / acento profundo |
| `brandTeal` | `#56C7B8` | CTA principal, FAB, bottom-nav active |
| `brandMint` | `#A8DCCB` | Highlights, badges OK, fondo decorativo |
| `brandSurfaceLight` | `#F5F7FA` | Canvas claro |
| `brandMutedGray` | `#C7CFD9` | Bordes, dividers, iconos secundarios |
| `brandSurfaceDark` | `#142033` | Canvas oscuro / fondo dark mode |
| `brandCtaAccent` | `#F2A65A` | CTA muy puntual / microaccesos positivos |

Variables Dart en `[lib/features/utils/app_colors.dart](../../ZonixPharma-Front/lib/features/utils/app_colors.dart)`.
Variables CSS en `[public/css/zonix.css](../public/css/zonix.css)`.

### Estados semánticos (no son del logo, sí del sistema)

| Token | HEX |
| ----- | --- |
| `statusInfo` | `#3B82F6` |
| `statusSuccess` | `#22C55E` |
| `statusWarning` | `#F59E0B` |
| `statusError` | `#EF4444` |

## 3. Tipografía

- **Plus Jakarta Sans** (vía `google_fonts`) en toda la app y dashboards web.
- Para "PHARMA" en lockup → small caps + tracking +6%.
- Cuerpo: 14–16 px, line-height 1.4–1.5.
- Encabezados: weights 700–900.

## 4. Iconografía

- 24 px grid.
- Esquinas alineadas con la rounded square del app icon.
- Estilo de línea limpio (Material Symbols Outlined).
- Para iconos de productos farmacéuticos preferir Material Symbols:
  `local_pharmacy`, `medication`, `medication_liquid`, `vaccines`, `health_and_safety`,
  `child_care`, `visibility`, `medical_services`, `monitor_heart`.

## 5. Modo oscuro

- Base `#142033`, texto claro, acentos `#56C7B8` / `#A8DCCB`.
- Verificar contraste 4.5:1 en texto y 3:1 en iconos.
- AppBar dark: usa el mismo color que el canvas para fundir, sin elevación.

## 6. Do / Don't

**Do**

- Respetar proporción icono–texto (horizontal y apilado).
- Usar solo combinaciones declaradas para el símbolo Z (marino/teal/blanco según fondo).
- Reservar `#F2A65A` a CTAs primarios muy puntuales o microaccesos positivos.

**Don't**

- No recolorear mitades arbitrarias del Z sin guía nueva.
- No sustituir "PHARMA" por script cursivo o "health script" decorativo.
- No mezclar identidad visual con Zonix Eats en mismas vistas sin separación contextual.

## 7. Bloque para `.cursor/rules` o `AGENTS.md`

```
Brand: Zonix Pharma (vertical farmacia/digital del ecosistema Zonix).
Visual: símbolo Z geométrico (parte superior marina + diagonal + base teal con nodo),
wordmark bold + PHARMA en caps teal con tracking amplio.
Colores HEX: Primary #1E2A5A, Deep teal #0F4C5C, Teal accent #56C7B8,
Light mint #A8DCCB, Canvas #F5F7FA, Muted gray #C7CFD9, Dark surface #142033,
Optional CTA #F2A65A.
Principios UX: modo tech-pharma ordenado — claridad regulatoria-amigable sin clichés
médicos ruidosos; alta legibilidad móvil; no mezclar con Zonix Eats assets/claims en
pantallas pharma.
```

## 8. Entregables

- Logo horizontal SVG/PNG · variante oscura/clara · lockup apilado · icono app (@1x/@2x/@3x) ·
  guideline de zona de respeto · paleta HEX tokenizada (`AppColors.brand*` Dart, CSS vars web).
