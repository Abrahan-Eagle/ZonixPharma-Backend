---
name: zonix-brand-ops
description: Branding operativo Zonix Pharma — naming, tono pharma VE, regla 60-30-10, anti-patterns Eats/AI-slop. Usar en copy landing, ASO, emails, dashboards y revisión visual pre-PR.
trigger: Copy de marca, naming, tono de voz, revisión «¿sigue siendo Eats?», ASO, claims salud, paleta en docs o marketing.
scope: docs/BRAND_ZONIX_PHARMA.md, resources/views/front/, public/css/zonix.css, docs/Lanzamiento/, copy app Flutter
related-skills: zonix-web-design, zonix-ui-design, zonix-regulatory-ve, frontend-design
author: Zonix Team
version: 1.0
---

# Zonix Pharma — Brand Ops

> Canon visual completo: [docs/BRAND_ZONIX_PHARMA.md](../../../docs/BRAND_ZONIX_PHARMA.md).
> Web: `zonix-web-design`. Flutter: `zonix-ui-design` (Front).

## Precedencia JARVIS

1. `BRAND_ZONIX_PHARMA.md`
2. `zonix-web-design` (Blade/CSS) | `zonix-ui-design` (Flutter)
3. **Esta skill** (`zonix-brand-ops`)
4. `ui-ux-pro-max` / `frontend-design` — **no overridean tokens ni naming**

## Checklist naming (obligatorio)

| Contexto | Correcto | Prohibido |
| -------- | -------- | --------- |
| UI / copy | **Zonix Pharma** | ZonixEats, Zonix-Eats, Zonix Salud |
| Lockup | `Zonix` + **PHARMA** (caps teal, tracking) | PHARMA en minúsculas sueltas |
| Dominio | zonixpharma.com | zonixpharma.app, eats.* |
| Deep link | `zonix://pharmacy/{id}` | restaurant, eats |
| FCM | `zonix_pharma_fcm` | canal Eats |

Antes de merge: `rg -i "zonix.?eats|restaurant|repartidor gig|5 estrellas" resources/views docs lib/` — cero matches no intencionales.

## Regla 60-30-10 (dosificación color)

| Capa | ~% | Tokens | Uso |
| ---- | -- | ------ | --- |
| Base | 60 | `brandNavy`, `brandSurfaceLight/Dark`, `brandMutedGray` | Fondos, nav, headers, canvas |
| Acento estructural | 30 | `brandTealDeep`, `brandMint` | Kickers, badges OK, iconos secundarios, bordes suaves |
| CTA / acción | 10 | `brandTeal` | **Solo** botones primarios, FAB, enlace de acción principal |

`brandCtaAccent` (#F2A65A): micro-CTAs o chips puntuales — nunca hero full-bleed.

## Tono de voz (pharma VE)

**Sí:** paciente, farmacia aliada, receta, retiro en farmacia, cadena de frío, OTC, farmacéutico colegiado, entrega confiable.

**No:** gig-economy, «gana dinero repartiendo», ratings fake, urgencia agresiva tipo delivery comida, jerga restaurante.

Ejemplos landing:
- Bien: «Pedí tus medicamentos con receta validada por tu farmacia.»
- Mal: «Los mejores restaurantes cerca de ti» / «★★★★★ 100% confiable».

## Anti-patterns (rechazar en review)

- Estrellas o ratings inventados en marketing
- Gradientes purple/violet «AI slop» no presentes en BRAND
- Hero o banner **100% teal/mint** (agotar acento)
- Texto blanco sobre teal sin verificar contraste (preferir **navy sobre teal** en CTAs)
- Iconografía comida (burger, moto gig) en pantallas Pharma
- Claims regulatorios sin `zonix-regulatory-ve` + asesor humano

## Checklist pre-PR visual/copy

- [ ] Nombre **Zonix Pharma** en títulos visibles
- [ ] HEX solo de BRAND / `zonix.css` / `app_colors.dart`
- [ ] Un CTA primario claro por vista/sección hero
- [ ] Contraste WCAG AA en botones y body text (ver BRAND §5)
- [ ] Sin restos Eats en assets, alt text, meta SEO
- [ ] Rx/cold chain mencionados con tono informativo, no alarmista

## Skills relacionadas

- Web Blade/CSS: `zonix-web-design`
- Flutter: `../ZonixPharma-Front/.agents/skills/zonix-ui-design/SKILL.md`
- Regulatorio: `zonix-regulatory-ve`
