---
name: legal-alternativo-content
description: >
  Playbook dual: (A–C) higiene legal corporativa multi-empresa / multi-jurisdicción
  (Zonix Pharma y otras startups tech) con patrones internacionales + packs MX/VE;
  (D) contenido Legal Alternativo / Hugette (TikTok/IG, claims MX).
  Capas A–C para docs/contratos/PI de empresa (sí Zonix higiene); capa D solo guiones del canal
  (no copiar CTA/guiones Hugette a pack inversor ni UI Pharma). Salud/Rx VE → zonix-regulatory-ve.
license: UNLICENSED
metadata:
  author: JARVIS / Legal Alternativo forense 2026-08
  version: "1.3.3"
  sources-checked: "2020-2026 + Gemini + multi-empresa + remediación drift AGENTS"
  scope: [local]
  product: [LegalAlternativo, ZonixPharma, MultiEmpresa]
  auto_invoke:
    - Contratos / PI / T&C / privacidad corporativo (Zonix u otra empresa)
    - Guiones Legal Alternativo / Hugette (TikTok/IG)
  related-docs:
    - docs/LegalAlternativo/ROADMAP_CONTENIDO.md
    - docs/LegalAlternativo/FORENSIC_VIDEOS_MULTI_LLM.md
    - docs/LegalAlternativo/PROGRESS.md
    - docs/LegalAlternativo/REPASO_TRANSCRIPTS_QA_2026-08-09.md
    - docs/LegalAlternativo/AUDIT_GEMINI_CLAIMS_MX_2026-08.md
    - docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md
---

# Legal ops — Corporativo + canal Legal Alternativo

**Hecho fijo:** PI y datos tienen **mínimos internacionales** (Berna, ADPIC/TRIPS; roles responsable/encargado como patrón) pero **no** son una ley única mundial. Titularidad de software, patentabilidad, NDA y autoridades de datos son **nacionales**. Todo claim normativo debe llevar etiqueta de jurisdicción (`[MX]`, `[VE]`, `[INTL-patrón]`).

### Cómo se combinan las capas (MX + intl + VE)

| Etiqueta | Rol | Cuándo usarla |
|----------|-----|----------------|
| `[INTL-patrón]` (capa B) | Marco común (Berna/ADPIC, DA+secreto, NDA≠cesión, plantillas US con cuidado) | Siempre como base de briefing multi-país / multi-empresa |
| `[MX]` (capa C + D) | **Pack de referencia rico** que **ilustra** los patrones intl con anclas citables (LFDA, LFPPI, LFPDPPP…) | Contrastes educativos, canal Hugette, claims/contratos MX, y como **ejemplo trabajado** de la capa B (MX **sí sirve con** lo internacional; no es “solo canal”) |
| `[VE]` (capa C) | Pack operativo default **Zonix Pharma** / founder VE (HITL; no inventar plazos/multas) | Ops corporativas Zonix en Venezuela + cross-border; **no** sustituye pack MX ni lo borra |

Flujo típico corporativo Zonix: **A → B (`[INTL-patrón]`) → C (`[VE]` ops + `[MX]` como referencia/contraste cuando ayude)**. Nunca presentar arts. MX como derecho VE.

Skill = playbook operativo/editorial, **no** dictamen. Disclaimer genérico:

> Contenido educativo. No constituye asesoría legal personalizada. Verifica la ley local antes de publicar o firmar.

## Cuándo invocar (routing)

| Contexto | Capas |
|----------|--------|
| Zonix Pharma u **otra empresa** (contratos, PI, T&C, privacidad, data room) | **A → B → C**: ops default **`[VE]`** + cross-border; usar **`[MX]` como referencia** que ilustra patrones intl cuando contraste o el claim sea MX; preguntar país si falta |
| Salud / Rx / MPPS / claims terapéuticos | **No esta skill** → `zonix-regulatory-ve` + `zonix-brand-ops` |
| Videos/reels **Legal Alternativo / Hugette** | **D** (+ pack **MX** de C para claims) |

## Procedimiento agente

1. Detectar modo: **corporativo** (Zonix/empresa) vs **canal LA**.
2. Si corporativo y no hay país: **preguntar**. Default ops Zonix Pharma = **`[VE]`**; mantener **`[MX]`** disponible como ejemplo trabajado de **B** / contraste (no omitir MX).
3. Aplicar **A** → **B** → **C** (packs etiquetados). Arts. MX solo bajo etiqueta `[MX]`, nunca como universales ni como VE.
4. Si canal LA: leer `PROGRESS.md` → `ROADMAP_CONTENIDO.md` → capa **D**; claims con pack **MX**.
5. HITL: ads/paid, fiscal, claims VE sin fuente primaria, ASR/`[CAPTION]` en canal.

---

## Capa A — Corporativa (Zonix + otras empresas)

Checklist de higiene (independiente del canal TikTok):

1. **Titularidad del código:** distinguir empleado vs freelance/proveedor; **pago ≠ cesión** sin papel escrito (matiz local en pack C).
2. **Pack docs:** internos (NDA equipo, cesiones, política IA, confidencialidad) + externos (T&C, aviso privacidad, MSA/SOW, encargo de datos si aplica).
3. **Instrumentos separados:** NDA ≠ cesión de PI ≠ secreto industrial ≠ política de uso de IA ≠ contrato de desarrollo ≠ encargo de tratamiento de datos.
4. **T&C / plantillas:** no importar ciegas de EE.UU. (*work for hire*); adaptar a jurisdicción del producto y del usuario.
5. **Privacidad:** mapear roles responsable / encargado (o equivalentes locales); no citar autoridades extinguidas.
6. **Prueba digital:** chats/WhatsApp como evidencia posible, **no** prueba absoluta.
7. **Fiscal / ads:** sin consejos personalizados; HITL humano en paid sobre sanciones/plazos/autoridad.
8. **B2B2C / marca blanca / sublicencia:** si el cliente revende o renta el software a usuarios finales, el contrato debe definir **sublicencia autorizada** y **quién responde** ante esos usuarios (tú vs cliente). Pago del cliente ≠ licencia clara a terceros.

### Aplicación Zonix Pharma

| Usar de esta skill | Prohibido |
|--------------------|-----------|
| Capas A–C: checklists, separación de instrumentos, flags de jurisdicción | Guiones, CTAs “agenda consulta” o voz Hugette en pack inversor / app |
| Ritmo educativo (un job por mensaje) como anti-patrón de copy | Claims terapéuticos / “cura” / “fuera de la ley” en salud |
| Disclaimer cuando el tip toque norma contractual/PI | Sustituir `zonix-regulatory-ve` o inventar MPPS/INHRR |
| | Presentar LFDA/IMPI/SABG como si fueran derecho venezolano |

**Router:** `docs/zonix/SKILLS_STARTUP_USAR_NO_USAR.md` · salud VE → `zonix-regulatory-ve` + `zonix-brand-ops`.

---

## Capa B — Patrones internacionales (`[INTL-patrón]`)

No sustituyen ley local. Útiles para briefing multi-país:

- Software suele protegerse como **copyright / derecho de autor** + **secreto comercial**; “patentar la idea de la app” es overclaim en la mayoría de regímenes (ADPIC/práctica WIPO).
- **Cesión / assignment** de derechos patrimoniales suele exigir **forma escrita**; pagar factura no basta.
- Relación laboral vs encargo externo: reglas **distintas** por país (no asumir *work for hire* USA).
- **NDA** = contrato de confidencialidad; no es registro de PI ni crea solo un secreto sin medidas de reserva.
- Plantillas US / Common Law pueden chocar con orden público local; la invalidez suele ser de **cláusulas**, no “nulidad automática de todo”.
- Mensajería (WhatsApp, etc.): prueba electrónica posible según proceso local; **no** irrefutable por captura.
- Privacidad: patrón responsable / encargado (u operador); aviso y bases legales son locales.
- Marco: Convenio de **Berna**, **ADPIC/TRIPS**, materiales **WIPO** — siempre + pack nacional.

---

## Capa C — Packs de jurisdicción (obligatorio etiquetar)

### Pack `[MX]` (completo — contrastado Gemini; ver `AUDIT_GEMINI_CLAIMS_MX_2026-08.md`)

**Complementa capa B:** no es “solo canal”. Es el pack de referencia rico que ilustra los patrones internacionales con anclas citables; usable en corporativo (contraste/educación/contratos MX) y en capa D (Hugette).

> Se rechazaron citas erróneas: empleado-software ≠ LFDA **84** (prevalece **103**); programas ≠ LFPPI **47 Fracc. IV** (correcto **fr. V**).

**DO `[MX]`:**

- **Empleado / programas:** LFDA **art. 103** — patrimoniales al empleador salvo pacto (funciones/instrucciones). Art. **84** = régimen general de obras laborales; **para software prevalece 103**.
- **Freelance / encargo:** factura ≠ cesión; **art. 30** + **83** (escrito).
- **Software:** DA obra literaria (**13-XI**, **101–106**, esp. **102**) + INDAUTOR opcional + secreto **LFPPI art. 163**. Programas = **47 fr. V** (“como tal / en sí mismos”); no fr. IV (métodos de negocio).
- **NDA:** no registro IMPI/INDAUTOR; certeza FEA/notario/evidencia; NOM-151 opcional.
- **T&C US:** matiz **LFPC 85/90** (cláusulas).
- **Datos:** roles responsable/encargado. Timeline: extinción INAI **DOF 20-dic-2024**; LFPDPPP **20-mar-2025**; ancla editorial **SABG** + HITL ads.
- **WhatsApp:** **CFPC 210-A**, no prueba absoluta.

**DON’T `[MX]`:** fuera de la ley sin matiz; ads sin HITL sobre sanciones/autoridad; patentar la app sin 47-V; negar derechos al empleador bajo 103; factura freelance = dueño; registrar NDA; nulidad total por plantilla US; WhatsApp irrefutable; fiscal sin contador; mezclar AR/US como MX.

**Fuentes `[MX]`:** [LFDA PDF](https://www.diputados.gob.mx/LeyesBiblio/pdf/LFDA.pdf) · [LFPPI PDF](https://www.diputados.gob.mx/LeyesBiblio/pdf/LFPPI.pdf) · [LFPDPPP DOF 20-mar-2025](https://www.diputados.gob.mx/LeyesBiblio/ref/lfpdppp/LFPDPPP_orig_20mar25.pdf) · [CFPC](https://www.diputados.gob.mx/LeyesBiblio/pdf/CFPC.pdf) · [LFPC](https://www.diputados.gob.mx/LeyesBiblio/pdf/LFPC.pdf) · DOF 20-dic-2024 · WIPO Lex LFDA/LFPPI · IAPP/GT secundarias.

### Pack `[VE]` (HITL — checklist accionable; no inventar arts./multas)

Default corporativo **Zonix Pharma**. Stub enriquecido: anclas oficiales a **verificar** antes de ads o contratos finales. Salud/Rx → `zonix-regulatory-ve`.

**DO `[VE]` (operativo):**

1. Etiquetar todo claim `[VE]`; contrastar con `[MX]` solo como ejemplo de patrones intl, nunca como ley VE.
2. Exigir **cesión / encargo por escrito** para software de freelancers; no asumir LFDA 103/83.
3. Separar NDA ≠ cesión ≠ secreto ≠ política IA (capa A/B).
4. Antes de publicar: completar checklist HITL abajo con captura de fuente (URL + fecha).

**Checklist HITL `[VE]` (marcar al verificar):**

| # | Tema | Ancla oficial a abrir | Estado |
|---|------|----------------------|--------|
| 1 | PI / marcas / patentes / secretos | [SAPI — Servicio Autónomo de Propiedad Intelectual](https://www.sapi.gob.ve/) | [ ] HITL |
| 2 | Derecho de autor / obras (incl. software como categoría local) | Portal SAPI / sección DA — confirmar trámite vigente en sapi.gob.ve | [ ] HITL |
| 3 | Gaceta / textos legales VE | [Gaceta Oficial de la República Bolivariana de Venezuela](http://www.gacetaoficial.gob.ve/) (buscar DA / datos / PI) | [ ] HITL |
| 4 | Datos personales / privacidad sector | Norma VE vigente aplicable al marketplace (no copiar INAI/SABG); cruzar pack Lanzamiento + abogado | [ ] HITL |
| 5 | Empresa / contratos mercantiles | Registro mercantil / Código de Comercio VE — vía `zonix-empresa-ve` + abogado | [ ] HITL |
| 6 | Salud / farmacia | **Fuera** → `zonix-regulatory-ve` (MPPS, INHRR, Rx) | n/a |

**Fuentes portal (verificar vigencia; secundarias ≠ dictamen):** SAPI · Gaceta Oficial · docs Zonix `PLAN_REGULATORIO_PHARMA_VE.md` solo para salud.

**DON’T `[VE]`:** pegar claims MX (IMPI, INDAUTOR, LFDA 103, SABG) como VE; inventar sanciones/plazos; ads con autoridad sin fila HITL marcada; usar pack VE como sustituto de abogado.

| Patrón intl (B) | Qué buscar en VE |
|-----------------|------------------|
| DA / software | Checklist #2 + contrato escrito |
| Marca / PI industrial | Checklist #1 SAPI |
| Cesión / encargo | Papel escrito; no MX 103/83 |
| Datos personales | Checklist #4 |
| Consumidores / adhesión | Normas locales + abogado |
| Salud | `zonix-regulatory-ve` |

---

## Capa D — Canal contenido Legal Alternativo / Hugette (`[MX]` content)

Solo cuando la tarea sea idear/guionar/auditar el canal TikTok `@legal_alternativo` / IG `hugette.alternativo`. **No** usar esta capa para copy Zonix.

### Frontera de marca (canal)

- Guiones y CTAs de consulta son de **Hugette / LA**.
- Prohibido reutilizarlos como narrativa de raise o UI Pharma.

### Audiencia (canal)

| Prioridad | Quién |
|-----------|--------|
| Primaria | Founders / devs / PyME **tech y SaaS en México** |
| Secundaria | Emprendedores de **marca (IMPI)** → bridge a contratos software |

### Taxonomía KEEP

| ID | Theme |
|----|--------|
| K1 | Titularidad del código / cesión / obra por encargo |
| K2 | Pack 5 docs internos + 5 externos |
| K3 | IMPI — proceso / FAQ / costo / clases (selectivo) |
| K4 | IMPI — negativa / impedimentos / renovación / uso |
| K5 | Naming / tipos de marca / marca vs nombre comercial |
| K6 | Patente vs DA vs secreto (software MX) |
| K7 | Socios, vesting, entrada de capital |
| K8 | NDA / certeza (no “registro” del NDA) |
| K9 | Privacidad / LFPDPPP / responsable–encargado |
| K10 | IA generativa + PI |
| K11 | Scope, enterprise, impago, demos; **B2B2C / marca blanca / sublicencia** (responsabilidad ante usuarios finales) |
| K12 | Fundraising / data room (ángulos legales) |
| K13 | Casos PI con takeaway accionable (selectivo / P2) |
| K14 | Franquicia (selectivo / ticket alto / P2) |
| K15 | Open source / licencias en producción (P2) |
| K16 | Enforcement “me copian” con costos/tiempos realistas (P2) |

**Núcleo:** K1+K2+K8+K9+K10+K11 + bridge K3→K2. Conteos taxonomía → `FORENSIC_VIDEOS_MULTI_LLM.md` (snapshot histórico). **Estado pipeline** → `PROGRESS.md` (Whisper-dual 328/328).

### DROP

Curiosidades PI sin takeaway; lifestyle; PI 101 spam; stats sin fuente; influencer/metaverso dated; fiscal absoluto sin contador; hashtag-only; “En 2026” vacío; fraude genérico sin marco MX.

### Guion canónico

```
HOOK 0–3s   pregunta dolorosa | mito | analogía | “Respuesta a @…”
CUERPO      3–5 puntos ON-SCREEN; sirve + si falta; 1 frase marco MX; “cuándo NO”
CTA         “¿Cuántos de estos X tienes? Cuéntame… te leo.”
            High-intent: + “Agenda tu consulta”
```

Un video = **un job**. Serie > one-off.

### Vocabulario on-screen / ASR

Subtítulo humano: **NDA, IMPI, INDAUTOR, cesión, LFPDPPP, LFPPI, SABG, aviso de privacidad, encargado, responsable, obra por encargo, vesting, scope creep, IA**.  
ASR MBA/lina/sesión/besting → **[REVISAR humano]**. Pad **`[CAPTION]`** → HITL; no KEEP listo.  
También **DROP** como transcript de guion: pads Amara (“Subtítulos realizados por…”), “Música”, “Usa este audio…”, “¡Suscríbete” sin cuerpo legal.

### CTAs / cadencia

| Tipo | Copy |
|------|------|
| Default | Comentarios / “te leo” / “¿cuántos de X?” |
| High-intent | Agenda consulta |
| Serie | Teaser + pin |

Cadencia: 2 SaaS/contratos/datos · 1 IMPI o bridge · 0–1 caso PI / semana; **≥1 de cada 3 high-intent** con agenda. Detalle: `ROADMAP_CONTENIDO.md`.

### Inventario forense (canal)

- Whisper-dual **328/328** (`PROGRESS.md` + `CHECKLIST_TT.md`)
- Evidencia ASR/jueces: **fuera del árbol** (slim 2026-08-09); canon = skill + `REPASO_TRANSCRIPTS_QA_2026-08-09.md` + checklists
- IG: `CHECKLIST_IG.md` (HITL; sin media en repo)
