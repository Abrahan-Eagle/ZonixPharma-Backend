---
name: zonix-inversionistas-crm
description: CRM interno de candidatos a capital Zonix Pharma — forense URL, ficha/notas/resumen CEO+PDF, rúbrica T/S/E/V/C/R, ranking. No es data room ni pitch. No contactar ni commit sin OK.
metadata:
  auto_invoke: "Nueva candidata inversionista / forense fondo VE / scoring CRM Inversionistas"
---
# zonix-inversionistas-crm

CRM de **candidatos a capital** (análisis interno). Canon: [`docs/Inversionistas/`](../../docs/Inversionistas/README.md).

**No sustituye:** `zonix-investor-materials` (data room), `zonix-fundraising-narrative` (mensaje/pitch), `zonix-startup-context` (cifras pack).

**Ask ref. (canon pitch):** Lean **USD 210.760** · SAFE cap **600.000** · equity **~35,13%** — [`BRIEF_UNA_PAGINA.md`](../../docs/Lanzamiento/BRIEF_UNA_PAGINA.md). Mercado: [`BRIEFING_INVERSORES_VE_2026.md`](../../docs/Lanzamiento/BRIEFING_INVERSORES_VE_2026.md). Fichas jul 2026 aún citan ~174k; rescore = tarea aparte.

## Cuándo invocar

- Nueva candidata (fondo, aceleradora, hub, waitlist, ángel tipificado).
- Forense profundo de un sitio / convocatoria.
- Rescore o update de ranking / `RESUMENES-CEO/`.
- Pregunta “¿falta alguien del briefing?” / gap CRM vs briefing.

## Cuándo NO invocar

- Armar zip / data room → `zonix-investor-materials`.
- Redactar email/deck al LP → `zonix-fundraising-narrative`.
- Cambiar cifras Lean/Base → `zonix-startup-context` + pack Lanzamiento.
- Código producto (Rx, órdenes) → skills `zonix-*` de dominio.

## Gates (no negociable)

1. **Preguntar** antes de forense amplio o alta CRM si el usuario no lo pidió explícito.
2. **No** enviar forms, waitlist, emails ni DMs sin OK.
3. **No** commit/push/merge sin orden explícita.
4. **No** guardar secretos / teléfonos personales en markdown (solo “tel founder” si aplica).
5. Disclaimer en cada ficha: análisis interno; no asesoría legal/financiera.

## Pipeline (una candidata)

```text
Forense → slug/ → FICHA + NOTAS + RESUMEN_CEO (+ PDF)
       → RESUMEN_COMPARATIVO (score desc)
       → README tabla
       → copiar a RESUMENES-CEO/ (nn-Label-RESUMEN_CEO.*)
```

1. **Slug** `kebab-case` — carpeta `docs/Inversionistas/<slug>/`.
2. Copiar plantillas: [`_plantilla/FICHA_INVERSIONISTA.md`](../../docs/Inversionistas/_plantilla/FICHA_INVERSIONISTA.md), [`NOTAS.md`](../../docs/Inversionistas/_plantilla/NOTAS.md), [`RESUMEN_CEO.md`](../../docs/Inversionistas/_plantilla/RESUMEN_CEO.md).
3. **Forense** (mínimo):
   - Home + rutas típicas (`/about`, `/team`, `/portfolio`, `/apply`, `/robots.txt`, …); detectar catch-all SPA.
   - Ticket, instrumento, deadlines, equity/fee, contacto real.
   - DNS/WHOIS si el actor es opaco (waitlist, dominio nuevo).
   - Backend de forms (GAS, Typeform, HubSpot, vform…).
   - **Anti-homónimos** (ej. Plus58 ads ≠ +58 Ventures; Plus VC MENA ≠ +58).
   - Cruzar briefing § relevante; no inventar tickets.
4. **Score** 0–peso en T/S/E/V/C/R (suma 100). Veredicto: `priorizar` ≥75 · `nurture` 50–74 · `descartar` &lt;50 (ajustar con juicio).
5. **RESUMEN_CEO**: one-pager founder (30s → números → vs pack → bueno/malo → veredicto → decisión → checklist). PDF Chrome headless como el resto del CRM.
6. Actualizar [`RESUMEN_COMPARATIVO.md`](../../docs/Inversionistas/RESUMEN_COMPARATIVO.md) + [`README.md`](../../docs/Inversionistas/README.md).
7. Refrescar pack [`RESUMENES-CEO/`](../../docs/Inversionistas/RESUMENES-CEO/README.md) (copias numeradas por ranking).

## Rúbrica (resumen)

| Código | Peso | Pregunta |
|--------|------|----------|
| T | 20 | ¿Cheque vs ask Lean (~174k)? |
| S | 20 | ¿Términos/dilución/SAFE claros y sanos? |
| E | 15 | ¿Red/estrategia más allá del dinero? |
| V | 15 | ¿Velocidad de cierre? |
| C | 15 | ¿Control founder / fricción? |
| R | 15 | ¿Riesgo reputacional/regulatorio? |

## Prioridad vs briefing (no dispersar)

| Prioridad | Acción típica |
|-----------|----------------|
| P0 caja | Epakon, Casa212 (si Caracas) |
| P1 proceso | ALGEN (equity-free); FI solo si falta PMF |
| P2 | Impulsa (estructura), +58 (waitlist), Arqos (vía Casa212), BID Lab (red) |
| Skip/monitor hoy | VMV (movilidad), FONACIT (sin ventanilla) |
| Más adelante | YC, Platanus (ruta C / marca) |

## Intel de ecosistema (sin score)

Tips / forwards / mapas de red **sin** cheque → `docs/Inversionistas/_intel/YYYY-MM-DD-….md` (no ficha CRM). Actualizar sección *Intel* del README. Ejemplo: [`2026-07-22-sandy-gomez-arca-ecosistema.md`](../../docs/Inversionistas/_intel/2026-07-22-sandy-gomez-arca-ecosistema.md).

## Entregables mínimos

- `FICHA.md` + `NOTAS.md` + `RESUMEN_CEO.md` (+ `.pdf` si el resto del CRM lo tiene).
- Ranking coherente por **Score %** descendente.
- Bitácora en NOTAS con fecha y fuentes.

## Relación con Front

Espejo Front: stubs → esta skill en Backend. No duplicar CRM en Front.
