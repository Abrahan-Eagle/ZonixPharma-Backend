# Inversionistas — análisis de candidatos (interno)

> **Última actualización:** 7 agosto 2026 (alta **SVS** score **49**; **500** = aprendizaje interno + nurture post-rechazo)  
> **Propósito:** CRM / scoring de **candidatos a capital** (y canales de red) para Zonix Pharma. **No** es el data room que se envía al inversionista.  
> **Skill agente:** [`zonix-inversionistas-crm`](../.agents/skills/zonix-inversionistas-crm/SKILL.md) — forense, ficha, score, ranking.  
> **Ask de referencia (pitch actual):** Lean **USD 237.412** · SAFE cap ref. **USD 600.000** · equity **~39,57%** — ver [`../Lanzamiento/BRIEF_UNA_PAGINA.md`](../Lanzamiento/BRIEF_UNA_PAGINA.md).  
> **Nota:** fichas alineadas a ask Lean **USD 237.412** (pasada forense ago-2026). **MD = fuente**; PDFs CRM one-pager regenerados en **PASS3** (2026-08-09) desde el MD hermano. Scores Plan A: fuente única [`RESUMEN_COMPARATIVO.md`](RESUMEN_COMPARATIVO.md) (Epakon **70**, Casa212 **68**).  
> **Roles:** **500 LatAm** = informe/playbook **interno** (no Plan A de caja ahora). **SVS** = candidata CRM tipo evento (otra opción de red). Plan A caja = **Epakon / Casa212 / ALGEN**.  
> **Disclaimer:** análisis founder; no es asesoría legal ni financiera.

## Cómo usar

1. Copiar [`_plantilla/FICHA_INVERSIONISTA.md`](_plantilla/FICHA_INVERSIONISTA.md) a una carpeta nueva `<slug>/FICHA.md`.
2. Copiar [`_plantilla/NOTAS.md`](_plantilla/NOTAS.md) a `<slug>/NOTAS.md`.
3. Completar datos + puntuar cada criterio (0–peso máx.).
4. **One-pager por candidata:** copiar [`_plantilla/RESUMEN_CEO.md`](_plantilla/RESUMEN_CEO.md) → `<slug>/RESUMEN_CEO.md`. Escribir solo lo que **encaja** con Zonix; rechazos en una línea. Estructura espejo 500 (30s → números → vs pack → bueno/malo → veredicto → decisión → checklist). PDF opcional (`RESUMEN_CEO.pdf` en la misma carpeta).
5. Actualizar [`RESUMEN_COMPARATIVO.md`](RESUMEN_COMPARATIVO.md) (ranking mayor → menor %). Ese archivo **no** sustituye el one-pager.
6. Bitácora de llamadas / emails en `<slug>/NOTAS.md`.

**Slug:** `kebab-case` del nombre (ej. `angel-maria-lopez`, `fondo-epakon`).

**Convención:** cada inversionista / convocatoria = **su propio** `RESUMEN_CEO.md`. No hay un resumen CEO global único.

## Rúbrica (100 puntos = % de conveniencia)

| Código | Criterio | Peso | Qué mide |
|--------|----------|------|----------|
| T | Ajuste ticket vs ask Lean (**237.412**) / Base | 20 | ¿Puede escribir el cheque del escenario que buscamos? |
| S | Términos / dilución / SAFE | 20 | Cap, % implícito, MFN, exclusividad, cláusulas tóxicas |
| E | Valor estratégico | 15 | Farmacias, red, intros, distribución — más que dinero |
| V | Velocidad de cierre | 15 | Semanas vs meses |
| C | Alineación founder / control | 15 | Interferencia operativa, veto, dedicación exigida |
| R | Riesgo reputacional / regulatorio / exclusividad | 15 | Red flags inversor corporativo; OFAC; exclusividad de canal |

**Score final** = suma de puntos (máx. 100) → **% de conveniencia**.  
**Veredicto:** `priorizar` (≥75) · `nurture` (50–74) · `descartar` (<50) — ajustar con juicio founder.

## Documentos

| Archivo | Uso |
|---------|-----|
| [RESUMENES-CEO/](RESUMENES-CEO/README.md) | **Pack de lectura:** todos los one-pagers + ranking (PDF/MD numerados) |
| [RESUMEN_COMPARATIVO.md](RESUMEN_COMPARATIVO.md) | Ranking de **todas** las candidatas |
| [`_plantilla/RESUMEN_CEO.md`](_plantilla/RESUMEN_CEO.md) | Plantilla one-pager (copiar a cada `<slug>/`) |
| [epakon/RESUMEN_CEO.md](epakon/RESUMEN_CEO.md) | Epakon Capital |
| [algen-aceleralatam/RESUMEN_CEO.md](algen-aceleralatam/RESUMEN_CEO.md) | ALGEN × AceleraLatam |
| [casa212/RESUMEN_CEO.md](casa212/RESUMEN_CEO.md) | Casa212 |
| [500-latam/RESUMEN_CEO.md](500-latam/RESUMEN_CEO.md) | 500 LatAm (aprendizaje interno + recontacto futuro) |
| [startup-venezuela-summit/RESUMEN_CEO.md](startup-venezuela-summit/RESUMEN_CEO.md) | Startup Venezuela Summit (evento / canal) |
| [fi-venezuela/RESUMEN_CEO.md](fi-venezuela/RESUMEN_CEO.md) | Founder Institute VE |
| [bid-lab/RESUMEN_CEO.md](bid-lab/RESUMEN_CEO.md) | BID Lab |
| [impulsa-vc/RESUMEN_CEO.md](impulsa-vc/RESUMEN_CEO.md) | Impulsa VC |
| [arqos-capital/RESUMEN_CEO.md](arqos-capital/RESUMEN_CEO.md) | Arqos Capital |
| [plus58-ventures/RESUMEN_CEO.md](plus58-ventures/RESUMEN_CEO.md) | +58 Ventures |
| [silicon-valley-ve/RESUMEN_CEO.md](silicon-valley-ve/RESUMEN_CEO.md) | Silicon Valley Venezuela |
| [fondo-impacto-vela/RESUMEN_CEO.md](fondo-impacto-vela/RESUMEN_CEO.md) | Fondo de Impacto VELA (CAF) |
| [build-with-gemini-xprize/RESUMEN_CEO.md](build-with-gemini-xprize/RESUMEN_CEO.md) | Build with Gemini XPRIZE (concurso) |
| [`_plantilla/FICHA_INVERSIONISTA.md`](_plantilla/FICHA_INVERSIONISTA.md) | Plantilla ficha + score |
| [`_plantilla/NOTAS.md`](_plantilla/NOTAS.md) | Plantilla bitácora |
| [`../Lanzamiento/BRIEFING_INVERSORES_VE_2026.md`](../Lanzamiento/BRIEFING_INVERSORES_VE_2026.md) | Contexto mercado inversores VE 2026 |
| [`../Lanzamiento/DOCUMENTOS_SOLO_INVERSOR.md`](../Lanzamiento/DOCUMENTOS_SOLO_INVERSOR.md) | Qué enviar en el zip (no esta carpeta) |

## Candidatas (carpetas)

> Tras recibir datos del founder → una carpeta por candidata. No inventar nombres fuera de lo que el founder aporte.

| Slug | Nombre | Score % | Veredicto |
|------|--------|---------|-----------|
| [epakon](epakon/FICHA.md) | Epakon Capital | **70** | nurture* — [Resumen CEO](epakon/RESUMEN_CEO.md) |
| [algen-aceleralatam](algen-aceleralatam/FICHA.md) | ALGEN × AceleraLatam | **72** | nurture* — [Resumen CEO](algen-aceleralatam/RESUMEN_CEO.md) |
| [casa212](casa212/FICHA.md) | Casa212 | **68** | nurture* — [Resumen CEO](casa212/RESUMEN_CEO.md) |
| [500-latam](500-latam/FICHA.md) | 500 LatAm (500 Global) | **67** | nurture* (**aprendizaje interno**; rechazado 6 ago; **no Plan A**; recontacto post-mercado) — [Resumen CEO](500-latam/RESUMEN_CEO.md) · [Fácil](500-latam/RESUMEN_FACIL.md) |
| [fi-venezuela](fi-venezuela/FICHA.md) | Founder Institute VE | **55** | nurture (metodología) — [Resumen CEO](fi-venezuela/RESUMEN_CEO.md) |
| [bid-lab](bid-lab/FICHA.md) | BID Lab (Grupo BID) | **54** | nurture (red) — [Resumen CEO](bid-lab/RESUMEN_CEO.md) |
| [impulsa-vc](impulsa-vc/FICHA.md) | Impulsa VC | **52** | nurture (estructura) — [Resumen CEO](impulsa-vc/RESUMEN_CEO.md) |
| [arqos-capital](arqos-capital/FICHA.md) | Arqos Capital | **50** | nurture (vía Casa212)* — [Resumen CEO](arqos-capital/RESUMEN_CEO.md) |
| [startup-venezuela-summit](startup-venezuela-summit/FICHA.md) | Startup Venezuela Summit | **49** | nurture (evento/red)* — [Resumen CEO](startup-venezuela-summit/RESUMEN_CEO.md) · [Fácil](startup-venezuela-summit/RESUMEN_FACIL.md) |
| [plus58-ventures](plus58-ventures/FICHA.md) | +58 Ventures | **43** | nurture (pipeline)* — [Resumen CEO](plus58-ventures/RESUMEN_CEO.md) |
| [build-with-gemini-xprize](build-with-gemini-xprize/FICHA.md) | Build with Gemini XPRIZE | **43** | descartar* (raise Lean) / monitor solo AI nuevo — [Resumen CEO](build-with-gemini-xprize/RESUMEN_CEO.md) |
| [silicon-valley-ve](silicon-valley-ve/FICHA.md) | Silicon Valley Venezuela | **42** | descartar* — [Resumen CEO](silicon-valley-ve/RESUMEN_CEO.md) |
| [fondo-impacto-vela](fondo-impacto-vela/FICHA.md) | Fondo de Impacto VELA (CAF) | **40** | descartar* (raise Lean) / monitor Serie A — [Resumen CEO](fondo-impacto-vela/RESUMEN_CEO.md) |

\*Epakon: pitch cuando deck listo; confirmar monto + términos (no anclar a $1M web).  
\*ALGEN: apply **15 oct**; equity-free; 12–16 h/sem; no sustituye cheque.  
\*Casa212: apply si hay 12 semanas Caracas (deadline 15 ago 2026).  
\*FI Venezuela: apply early ≤28 jul solo si falta PMF/disciplina; si no → preferir ALGEN; fee post-early **$169** (no ~249).  
\*Impulsa: solo si hace falta estructura/banca VE; DD del vehículo (BVC agro vs tech).  
\*Arqos: no cold pitch; satélite Casa212 / Epakon.  
\*+58: waitlist ≠ cheque; monitorear hasta ticket/equipo; no pitch Lean.  
\*Gemini XPRIZE: **concurso/premio**, no LP; Zonix existente no califica (New Projects Only); deadline **17 ago 2026**; intel PDF Gemini volcado (score **43** intacto; +bonus Circle 50k).  
\*SVVE: warm Beresith Rigal; **no raise**; 3V 2026 cerrado; solo cowork Caracas pago si hace falta.  
\*VELA: tickets tip. **1–3 M**, Serie A+; **no** form ahora; reabrir post-tracción.  
\*500: rechazo **6 ago 2026** (MVP/demo); score **67**; carpeta = **informe/playbook interno** (demo/piloto/gate sirven a todo el raise); **no** Plan A de caja; **no** mail a team-mx hasta gate verde.  
\*SVS: evento Caracas **21–23 oct**; score **49**; VIP50 **$50** ≤10 ago solo con OK founder; **no** cheque; no pausa Plan A. Ficha [`startup-venezuela-summit/`](startup-venezuela-summit/FICHA.md).

## Intel / bitácora externa

> Tips de ecosistema, forwards y mapas de red. Si hay ficha CRM, el intel **apunta** a ella (no duplica score).

| Archivo | Origen | Notas |
|---------|--------|-------|
| [`_intel/2026-07-22-sandy-gomez-arca-ecosistema.md`](_intel/2026-07-22-sandy-gomez-arca-ecosistema.md) | Sandy Gómez (Arca) → Gabriel → Abrahan | Eventos/programas VE + regional; mapa vs CRM (ALGEN, FI/Arca, gaps Pygma/etc.) |
| [`_intel/2026-08-05-convocatoriasymas-vela.md`](_intel/2026-08-05-convocatoriasymas-vela.md) | IG @convocatoriasymas + fondovela.com | Señal vs ruido del post VELA; filtro canal; Bayer LEGADO skip |
| [`_intel/2026-08-07-startup-venezuela-summit-2026.md`](_intel/2026-08-07-startup-venezuela-summit-2026.md) | Email waitlist + sitio + IG | → CRM [`startup-venezuela-summit/`](startup-venezuela-summit/FICHA.md) score **49** |

## Fuera de alcance

- Enviar emails / contactar.
- Redactar SAFE vinculante.
- Incluir esta carpeta en el zip de presentación.
