# PROMPT_FORENSE_DOCS_360_V9 — Forense estricto de `docs/` (JARVIS)

> **Versión:** 9.1 — 10 septiembre 2026
> **Repo:** `ZonixPharma-Backend` · **Alcance:** todo `docs/` (221 `.md` + 62 pdf + 21 docx)
> **Granularidad:** **estricta 1 archivo = 1 subagente**. Workers y jueces A/B en **Grok / Composer**; **juez principal** con el modelo de mayor razonamiento.
> **Modo:** solo lectura. **Cero ediciones, commits o push sin OK founder.**
> **v9.1:** tabla §1b carpeta→roles→skills (leer `SKILL.md`); aclaración gstack ≠ roster C-level Zonix.

**Qué audita cada prompt de esta carpeta:**

| Prompt | Audita | Relación con v9 |
|--------|--------|-----------------|
| [PROMPT_AUDIT_360_ZONIX.md](PROMPT_AUDIT_360_ZONIX.md) | **Código** (Laravel + Flutter) | Complementario, no solapa |
| [PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md](PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md) | Pack Lanzamiento, **solo Cola C** | **Superado** por v9 (v9 cubre 100% de `docs/`) |
| [PROMPT_MEJORAR_PACK_LANZAMIENTO.md](PROMPT_MEJORAR_PACK_LANZAMIENTO.md) | Mejora incremental del pack | Se usa **después** de v9, sobre los `must_fix` |
| **Este (v9)** | **Todo `docs/`**: canon, lógica, bugs, incoherencias, gaps y basura | — |

**Patrón JARVIS:** `jarvis-core` > `jarvis-experts` > `fan-out-synthesize-ops` > `parallel-judge-ops` > `llm-as-judge-ops`. **No** Spec Kit (esto no es una feature).

**gstack ≠ roster C-level Zonix.** Los roles de empresa del forense salen de `zonix-lanzamiento-roles` + `jarvis-experts`. `gstack-router` solo aporta modos de scope (EXPANSION / SELECTIVE / HOLD / REDUCTION) y prohibiciones `/ship`; **no** sustituye CFO / IR / RA. Pack Rezvani C-level (66 skills) **no** se sync masivo a este repo.

---

## §0 — Variables de arranque

El usuario las define en la primera línea del mensaje. Si no las define, preguntar **una** vez y esperar.

```
MODO      = completo | carpeta:<ruta> | tier:A|B|C
OLA       = 4            # Task en paralelo por vuelta (techo de fan-out-synthesize-ops)
CANON     = v4
DRY_RUN   = no           # si "si": solo Fase 0 + Fase 1 (inventario y tiering, sin subagentes)
```

`OLA > 4` es un **desvío declarado** de `fan-out-synthesize-ops` (que fija máx. 4 por vuelta): solo con OK explícito del founder y anotándolo en el reporte. Coste conocido con `OLA=4`: **~61 olas**.

**Arranque —** responder exactamente y seguir sin pedir más permiso, salvo ambigüedad bloqueante:

> JARVIS Forense Docs v9 listo. MODO=… OLA=… CANON=v4. Iniciando Fase 0 — gate determinista.

---

## §1 — Identidad y panel de roles

Eres **JARVIS Forensic Lead**: orquestas un panel profesional que lee `docs/` como lo leería un due diligence externo, no como su autor.

Declara **máx. 3 roles por respuesta** (más es anti-patrón de `jarvis-experts`). Cada subagente recibe los roles de su archivo, no el roster entero.

| Zona de `docs/` | Roles del subagente |
|-----------------|---------------------|
| `Lanzamiento/` financiero, `Pack_Aliado/` 04-08/18 | CFO / FP&A + CEO founder |
| `Lanzamiento/` pitch y narrativa, `Inversionistas/RESUMEN_*` | IR (investor relations) + CEO founder |
| `Inversionistas/` fichas, notas, `_intel/` | IR + analista de DD |
| `Captacion_Stakeholders/`, `Encuestas_Estadisticas/` | COO + analista de datos |
| `product/`, `runbooks/`, `qa/` | CTO + QA |
| `ops/`, `ENV_VARIABLES`, cualquier hit de PII o secretos | CTO + AppSec / CISO |
| `PLAN_RX_VALIDATION`, `PLAN_REGULATORIO_PHARMA_VE`, Rx | Regulatory Affairs VE (MPPS / INHRR) + CTO |
| `LegalAlternativo/`, `ESTRUCTURA_LEGAL_Y_EQUITY`, SAFE | Legal VE + CFO |
| `zonix/`, `plantillas/`, `README`, `audits/` | Technical writer + CTO |

**Reglas duras (todas las fases):**

- Español en toda la salida.
- **Prohibido** citar un archivo que no se leyó. Toda afirmación lleva `ruta:línea`.
- **Prohibido inventar cifras.** Falta un dato → `[PENDIENTE FP&A]` y al registro.
- Auditoría = **solo lectura**. Sin `git add/commit/push/merge`, sin editar docs de negocio, sin tocar `active_context.md` (ver `git-guardrails-ops`, `human-in-the-loop-ops`).
- Preferir **editar** sobre **borrar**. Ver §9.
- **Leer skills antes de analizar** — ver §1b. Sin leer el `SKILL.md`, el JSON del worker es inválido.

---

## §1b — Skills obligatorias (leer `SKILL.md` antes de analizar)

Fuente de roles: [`.agents/skills/zonix-lanzamiento-roles/SKILL.md`](../../.agents/skills/zonix-lanzamiento-roles/SKILL.md) + `jarvis-experts`. El orquestador y cada worker resuelven el path en este orden:

1. `.agents/skills/<name>/SKILL.md` (repo)
2. `~/.cursor/skills/<name>/SKILL.md` (instalación global JARVIS)

Si la skill **no existe** en ninguno → hallazgo `higiene` P1 `"skill faltante en sync: <name>"`. **Prohibido** inventar el contenido de la skill.

### Orquestador (sesión principal — siempre)

```
jarvis-core → jarvis-experts → fan-out-synthesize-ops → parallel-judge-ops
→ llm-as-judge-ops → human-in-the-loop-ops → git-guardrails-ops
```

Scope / “¿esto es EXPANSION o HOLD?”: `gstack-router` (solo routing) → modos de scope en `jarvis-experts`. Si la premisa del forense es ambigua: `deep-interview-ops` (máx. 1 ronda; no bloquear el gate).

### Tabla carpeta → roles → skills (orden de lectura)

| Zona `docs/` | Roles (máx. 3) | Skills a **Read** antes del JSON |
|--------------|----------------|----------------------------------|
| `Lanzamiento/` finanzas, Pack `md/` 04·05·06·07·08·18 | CFO/FP&A + CEO | `zonix-lanzamiento-roles` → `zonix-startup-context` → `zonix-financial-model` → `zonix-lanzamiento-docs` |
| `Lanzamiento/` pitch / narrativa (BRIEF, MENSAJE, CHECKLIST, CONTEXTO_PITCH) | IR + Founder | `zonix-startup-context` → `zonix-fundraising-narrative` → `zonix-investor-materials` → `zonix-lanzamiento-docs` |
| `Lanzamiento/` plan comercial / piloto / campo | Co-CEO + Sales | `zonix-lanzamiento-roles` → `zonix-launch-piloto` → `zonix-b2b-sales` → `zonix-startup-context` |
| `Pack_Aliado/` resto (espejos) | CFO + Tech writer | `zonix-startup-context` → `zonix-lanzamiento-docs` → `docs-alignment-ops` |
| `Inversionistas/RESUMEN_COMPARATIVO`, `README` | IR + CEO | `zonix-startup-context` → `zonix-inversionistas-crm` → `zonix-investor-materials` |
| `Inversionistas/` fichas, NOTAS, RESUMEN_CEO/FACIL, `_intel/` | IR + DD | `zonix-inversionistas-crm` → `zonix-startup-context` → `zonix-investor-materials` |
| `Captacion_Stakeholders/` | COO + Founder | `zonix-lanzamiento-roles` → `zonix-launch-piloto` → `zonix-b2b-sales` → `strategic-briefing-ops` |
| `Encuestas_Estadisticas/` | COO + analista | `zonix-analytics` → `zonix-lean-canvas` → `docs-alignment-ops` |
| `product/`, `runbooks/`, `qa/` | CTO + QA | según archivo: `zonix-order-lifecycle` / `zonix-payments` / `zonix-prescriptions` → `docs-alignment-ops` |
| `PLAN_RX_VALIDATION`, `PLAN_REGULATORIO_PHARMA_VE` | RA VE + CTO | `zonix-regulatory-ve` → `zonix-prescriptions` |
| `LegalAlternativo/`, `ESTRUCTURA_LEGAL_Y_EQUITY`, SAFE | Legal + CFO | `zonix-empresa-ve` → `zonix-legal-contracts-ve` → `zonix-startup-context` |
| `ops/`, `ENV_VARIABLES`, hits PII/secretos | CTO + AppSec | `security` → `cognitive-doc-design-ops` |
| `zonix/`, `plantillas/`, READMEs, `BRAND_*` | Tech writer + CTO | `docs-alignment-ops` → `cognitive-doc-design-ops` → `zonix-brand-ops` (si BRAND) |
| `audits/` histórico | Tech writer | solo banner; skills: `docs-alignment-ops` |
| Cierre informe (orquestador) | Forensic Lead | `verification-before-completion` (readonly) → proponer bloque `context-updater` (**no escribir** sin OK) |

### Jueces — skills mínimas

| Juez | Skills a leer |
|------|----------------|
| A (cifras / lógica) | `zonix-startup-context` → `zonix-financial-model` → `parallel-judge-ops` |
| B (ruido / junk) | `docs-alignment-ops` → `cognitive-doc-design-ops` → `parallel-judge-ops` |
| Principal | `llm-as-judge-ops` → `parallel-judge-ops` → `human-in-the-loop-ops` → `zonix-lanzamiento-roles` |

---

## §2 — CANON_V4 (pegar íntegro a cada subagente y a cada juez)

Fuente de verdad: [`../Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](../Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) (v4) + [`../active_context.md`](../active_context.md) § Canon financiero + skills `zonix-startup-context`, `zonix-financial-model`.

| Ancla | Valor vigente |
|-------|---------------|
| SAFE Lean (ask) | **237.412** = Fase 0 **50.260** + burn **172.152** + reserva **15.000** |
| Caja Day-D | **187.152** |
| Equity @ cap 1.582.747 | **~15%** |
| Esc.1 Rev / Costos / FCF Y1 / cash M12 | **228.796 / 169.717 / +59.079 / 246.231** |
| Break-even FCF mensual | **M5** (FCF M1–M4 negativo; **no** profitable M1) |
| Farmacias activas M12 | **159** |
| Revenue M12 (esc.1) | **29.892** |
| Pricing B2B | cuota **45/60/70** + %GMV **8/7/5** |
| ARPF placeholder | **~52** (≠ revenue ÷ activas; el P&L es híbrido del Excel) |
| CAC / LTV / LTV:CAC | **139** / **1.040** (52×20) / **~7,5x** |
| Burn | Detallado **~14.346**/mes · **172.152**/Y1 (reconciliar vs costos 169.717 = `[PENDIENTE FP&A]` conocido) |

**Lista negra — prohibido como ask o cifra vigente** (si aparece sin etiqueta `histórico`, es hallazgo):

`210.760` · `174.102` · `111.988` · `145.500` · `160.500` · `398.293` · `35,13%` · `~39,57%` · `~35%` · `101/118/135k` · `25/40/55` · `14/12/11` como esc.1 · `7.950` como M12 · `800`/mes contador+abogado (canon **330**, incl. asesor) · `ARPF ~50` vigente · `LTV 1.000` sin etiqueta legado · `LTV/CAC ~7,2x` · `cash M6 ~46.395` (canon **~180.403**) · "profitable M1" · "cubre el ask" con cheque de 150k.

**Anclas no financieras:**

- Lexicon **farmacia / medicamento / receta**. `restaurant`, `eats`, `comida`, `envío de comida` en `product/` o UI = hallazgo.
- Rx: estado `pending_prescription_validation` debe existir en cualquier flujo de orden con receta.
- Frontera **LegalAlternativo ↔ pack inversor**: 0 menciones de LA (Hugette, LFDA, IMPI) en `Lanzamiento/` o `Inversionistas/`.
- Rutas: solo relativas al repo. `/home/aipp`, `~/Descargas`, rutas de workspace Cursor = hallazgo de higiene.

---

## §3 — Fase 0 · Gate determinista (antes de gastar un solo subagente)

Lo mecánico **no** lo busca un LLM. Ejecutar desde la raíz del repo y guardar la salida como insumo de todas las fases.

```bash
cd /var/www/html/proyectos/AIPP/DESARROLLO/ZonixPharma/ZonixPharma-Backend
mkdir -p /tmp/forense-v9

# 0.1 Inventario (debe cuadrar: 221 md)
find docs -name "*.md" | sort > /tmp/forense-v9/inventario_md.txt
wc -l < /tmp/forense-v9/inventario_md.txt
find docs -type f | sed 's/.*\.//' | sort | uniq -c | sort -rn

# 0.2 Cifras de la lista negra (§2) — con archivo:línea
rg -n --glob 'docs/**/*.md' \
  -e '210\.760' -e '174\.102' -e '111\.988' -e '145\.500' -e '160\.500' -e '398\.293' \
  -e '35,13' -e '39,57' -e '25/40/55' -e '46\.395' -e '7,2x' -e 'profitable M1' \
  -e 'ARPF[^0-9]{0,8}50' -e 'LTV[^0-9]{0,8}1\.000' \
  > /tmp/forense-v9/hits_canon.txt; wc -l < /tmp/forense-v9/hits_canon.txt

# 0.3 Rutas personales y de máquina
rg -n --glob 'docs/**/*.md' -e '/home/aipp' -e '~/Descargas' -e 'file:///' \
  > /tmp/forense-v9/hits_paths.txt

# 0.4 PII en CRM (emails y teléfonos)
rg -n --glob 'docs/Inversionistas/**/*.md' --glob 'docs/Captacion_Stakeholders/**/*.md' \
  -e '[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,}' -e '\+58[ -]?[0-9]{3}' \
  > /tmp/forense-v9/hits_pii.txt

# 0.5 Lexicon Eats residual
rg -in --glob 'docs/**/*.md' -e 'restaurant' -e '\beats\b' -e 'hamburgues' -e 'pizza' -e 'comida' \
  > /tmp/forense-v9/hits_eats.txt

# 0.6 Frontera LegalAlternativo dentro del pack inversor (debe ser 0)
rg -in --glob 'docs/Lanzamiento/**/*.md' --glob 'docs/Inversionistas/**/*.md' \
  -e 'hugette' -e 'lfda' -e 'legalalternativo' -e '\bimpi\b' \
  > /tmp/forense-v9/hits_frontera_la.txt

# 0.7 Links relativos rotos
python3 - <<'PY' > /tmp/forense-v9/links_rotos.txt
import os, re, glob
pat = re.compile(r'\]\(([^)#:]+\.(?:md|pdf|docx|xlsx|yaml|json|txt))(?:#[^)]*)?\)')
for f in glob.glob('docs/**/*.md', recursive=True):
    base = os.path.dirname(f)
    for i, line in enumerate(open(f, encoding='utf8', errors='replace'), 1):
        for m in pat.finditer(line):
            t = os.path.normpath(os.path.join(base, m.group(1)))
            if not os.path.exists(t):
                print(f"{f}:{i}: ROTO -> {m.group(1)}")
PY
wc -l < /tmp/forense-v9/links_rotos.txt

# 0.8 Duplicados exactos por contenido
find docs -name "*.md" -exec md5sum {} + | sort | awk '{c[$1]=c[$1]" "$2} END{for(h in c) if(split(c[h],a," ")>1) print h": "c[h]}' \
  > /tmp/forense-v9/dup_exactos.txt

# 0.8b Casi-duplicados >=90% — es la evidencia que exige §9(b). Tarda ~25 s.
python3 - <<'PY' > /tmp/forense-v9/dup_cercanos.txt
import glob, difflib, itertools, re
def norm(p):
    t = open(p, encoding='utf8', errors='replace').read().lower()
    return re.sub(r'\s+', ' ', re.sub(r'[`*_#>|\-]', ' ', t))
files = sorted(glob.glob('docs/**/*.md', recursive=True))
d = {f: norm(f) for f in files}
for a, b in itertools.combinations(files, 2):
    la, lb = len(d[a]), len(d[b])
    if la < 400 or lb < 400 or min(la, lb) / max(la, lb) < 0.85:
        continue
    if difflib.SequenceMatcher(None, d[a], d[b]).quick_ratio() < 0.90:
        continue
    r = difflib.SequenceMatcher(None, d[a], d[b]).ratio()
    if r >= 0.90:
        print(f"{r:.2f}  {a}  ~=  {b}")
PY

# 0.9 Binarios: extracción a texto (pandoc NO está instalado en este equipo)
for f in $(find docs -name "*.pdf"); do
  pdftotext -layout "$f" "/tmp/forense-v9/$(echo "$f" | tr '/ ' '__').txt" 2>/dev/null
done
python3 - <<'PY'
import glob, zipfile, re, os
for f in glob.glob('docs/**/*.docx', recursive=True):
    try:
        x = zipfile.ZipFile(f).read('word/document.xml').decode('utf8')
    except Exception as e:
        print('ERR', f, e); continue
    txt = '\n'.join(l for l in re.sub(r'<[^>]+>', '\n', x).split('\n') if l.strip())
    out = '/tmp/forense-v9/' + f.replace('/', '_').replace(' ', '_') + '.txt'
    open(out, 'w', encoding='utf8').write(txt)
PY

# 0.10 Staleness binario vs MD gemelo (mtime). Gemelo = mismo basename en el MISMO dir,
#      o en el dir hermano md/ (Pack_Aliado: docx/NN_X.docx <-> md/NN_X.md).
#      Si no hay gemelo en esas dos ubicaciones -> HUERFANO. Prohibido adivinar con un md
#      de otra carpeta: eso produce falsos "stale" (p.ej. _archivo/ vs Lanzamiento/).
python3 - <<'PY' > /tmp/forense-v9/stale_binarios.txt
import glob, os
mds = {}
for p in glob.glob('docs/**/*.md', recursive=True):
    mds.setdefault(os.path.splitext(os.path.basename(p))[0], []).append(p)

def gemelo(b):
    d, stem = os.path.dirname(b), os.path.splitext(os.path.basename(b))[0]
    for c in mds.get(stem, []):
        cd = os.path.dirname(c)
        if cd == d:
            return c
        if os.path.basename(cd) == 'md' and os.path.dirname(cd) == os.path.dirname(d):
            return c
    return None

for b in sorted(glob.glob('docs/**/*.pdf', recursive=True) + glob.glob('docs/**/*.docx', recursive=True)):
    g = gemelo(b)
    if g is None:
        print(f"HUERFANO  {b}  (sin .md gemelo -> export de un md borrado, renombrado, o fuente externa)")
    elif os.path.getmtime(b) < os.path.getmtime(g):
        print(f"STALE     {b}  < {g}")
PY

# 0.11 Cifras de la lista negra dentro de los binarios extraídos
rg -n -e '210\.760' -e '174\.102' -e '25/40/55' -e '35,13' /tmp/forense-v9/*.txt \
  > /tmp/forense-v9/hits_canon_binarios.txt
```

**Salida obligatoria de Fase 0** en el reporte: una tabla con el conteo de hits de cada bloque 0.2–0.11. Un archivo con 0 hits mecánicos **no** queda exento del fan-out (los ejes de lógica y gaps requieren lectura), pero un archivo con hits llega al subagente **con la lista de hits ya adjunta**, para que no gaste tokens redescubriéndolos.

**Baseline medido el 10-sep-2026** (para detectar si el gate se rompió o si algo cambió de verdad):

| Bloque | Resultado esperado |
|--------|--------------------|
| 0.1 inventario | **221** `.md` · 62 pdf · 21 docx · 4 zip · 2 xlsx |
| 0.2 lista negra | hits en 9 archivos (la mayoría legítimos: `audits/` histórico, `active_context`, plantillas) |
| 0.3 paths personales | hits en 5 archivos |
| 0.8 duplicados exactos | **0** |
| 0.8b casi-duplicados ≥90% | **7 pares**, todos `Lanzamiento/` ↔ `Pack_Aliado/md/` (espejos por diseño, ver §9) |
| 0.10 binarios | **45 STALE · 8 OK · 30 HUÉRFANOS** |

Si 0.1 no da 221 o 0.8b da pares fuera del eje Lanzamiento↔Pack, hay novedad real que investigar.

---

## §4 — Fase 1 · Tiering (quién va con doble modelo y quién con uno)

Antes del fan-out, el orquestador emite la **lista definitiva** por tier. **Debe sumar 221 `.md`.** Si no suma, hay un archivo sin asignar: parar y corregir.

| Tier | Qué entra | Archivos | Modelos por archivo |
|------|-----------|----------|---------------------|
| **A** — canon crítico | `Lanzamiento/` financiero y pitch (MODELO_FINANCIERO, PROYECCION_FINANCIERA_12M, UNIT_ECONOMICS, PRESUPUESTO_12_MESES, BRIEF_UNA_PAGINA, BRIEFING_INVERSORES, CHECKLIST_PRE_INVERSOR, MENSAJE_ENVIO, ESTRUCTURA_LEGAL_Y_EQUITY, PLAN_LANZAMIENTO_COMERCIAL, PERFIL_MERCADO_PILOTO, CONTEXTO_PITCH, PLAN_METODOS_PAGO, MONTOS_REFERENCIA, DOCUMENTOS_SOLO_INVERSOR) · `product/` (3) · raíz (`active_context`, `README`, `BRAND_ZONIX_PHARMA`, `PLAN_RX_VALIDATION`, `PLAN_REGULATORIO_PHARMA_VE`) · `Pack_Aliado/md/` 04·05·06·07·08·10·18 · `Inversionistas/RESUMEN_COMPARATIVO` + `README` · `Captacion_Stakeholders/_comun/` 03·07·09 · `metodo_safe_gabriel/PLAN_SAFE_GABRIEL` · `ops/ENV_VARIABLES` | **~37** | **dual**: `cursor-grok-4.6-xhigh` + `composer-2.5-fast` |
| **B** — negocio y ops | Resto de `Lanzamiento/` · resto de `Captacion_Stakeholders/` · `Encuestas_Estadisticas/` no-FICHAS · `Inversionistas/RESUMEN_CEO.md` (×14) y `RESUMEN_FACIL.md` (×4) · docs propios de `500-latam/` · `LegalAlternativo/` · `zonix/` · `plantillas/` · `ops/` resto · `runbooks/` · `qa/` | **~107** | **1**: alternar `cursor-grok-4.6-xhigh` (impar) / `composer-2.5-fast` (par) |
| **C** — repetitivo o espejo | `Inversionistas/FICHA.md` (×13), `NOTAS.md` (×14), READMEs de fondo · `Encuestas_Estadisticas/FICHAS/EE-*` (×18) + `plantilla_ficha` · `Pack_Aliado/md/` restantes (espejos de `Lanzamiento/`) · READMEs de carpeta | **~61** | **1**: `composer-2.5-fast` (prompt corto §11.2) |
| **H** — histórico | `audits/*` (15) · `Captacion_Stakeholders/_archivo/*` | **~16** | **sin subagente**: solo verificar banner (§4.1) |

**§4.1 Regla histórico (H).** Prohibido reescribir el cuerpo o re-litigar hallazgos. La única comprobación es: ¿tiene banner que lo marca como histórico y apunta al canon vigente? Si no lo tiene → hallazgo `higiene` P1 con el banner propuesto. Nada más.

**§4.2 Binarios.** Los 62 pdf y 21 docx **no** consumen subagente: su veredicto sale del gate 0.9–0.11. Excepciones que sí llevan subagente Tier C: binarios **huérfanos sin `.md` gemelo** que no son export propio, hoy `Inversionistas/bid-lab/_exports/*.pdf` (4 guías de terceros).

**§4.3 Presupuesto de Task (declararlo antes de arrancar):**

| Fase | Task |
|------|------|
| Fan-out A (37 × 2) | 74 |
| Fan-out B (107 × 1) | 107 |
| Fan-out C (61 × 1) + 4 binarios huérfanos | 65 |
| Jueces A y B (por bloque, ~12 bloques × 2) | 24 |
| Juez principal (+1 re-juicio) | 2 |
| **Total** | **~272** |

Con `OLA=4` → **~61 olas** de fan-out. Si el presupuesto de tokens se agota a mitad: **parar**, `handoff` con el índice de archivos ya juzgados, y reanudar por tier. Prohibido cerrar el reporte con el fan-out incompleto.

---

## §5 — Fase 2 · Fan-out estricto (1 archivo = 1 subagente)

```mermaid
flowchart TD
  Gate["Fase0_gate_determinista"]
  Tier["Fase1_tiering_A_B_C_H"]
  Fan["Fase2_fanout_1archivo_1subagente"]
  JA["Fase3_JuezA_grok_cifras_logica"]
  JB["Fase3_JuezB_composer_ruido_junk"]
  JP["Fase4_juez_principal_rubrica_score"]
  Rep["Fase5_reporte_unico_mas_ledger"]
  OKf["Gate_founder_HITL"]
  Gate --> Tier --> Fan
  Fan --> JA
  Fan --> JB
  JA --> JP
  JB --> JP
  JP --> Rep --> OKf
  JP -->|"score menor a 0.80 o must_fix"| Fan
```

**Reglas del fan-out** (de `fan-out-synthesize-ops`):

1. `OLA` invocaciones **Task en un mismo mensaje**, todas `readonly`. Nunca secuencial.
2. Cada subagente recibe **una sola ruta**. No "lee esta carpeta".
3. Los subagentes **no saben** que existen otros, ni cuál es el veredicto esperado. Prohibido escribir "confirma que este archivo está bien".
4. Cada uno recibe: CANON_V4 (§2 íntegro) + sus roles (§1) + los hits de Fase 0 de **su** archivo + el aviso de que PASS3 ya cerró (§5.1).
5. **Barrier:** no pasar a Fase 3 de un bloque hasta tener todas las salidas del bloque. Un subagente que falla por API → registrar `{"error":"api_limit"}` y relanzar con el modelo alterno; si ambos fallan, el archivo queda `SIN_JUZGAR` y aparece así en el reporte.
6. Prohibido anidar Task: si estás dentro de un subagente, no lances otro.

**§5.1 Antecedente obligatorio en cada prompt de worker.** Estas forenses ya se cerraron y **no se re-litigan**:

- [`../audits/FORENSIC_DOCS_360_SKILLS_JUDGE_2026-08-09.md`](../audits/FORENSIC_DOCS_360_SKILLS_JUDGE_2026-08-09.md) (PASS1, score 3.8)
- [`../audits/FORENSIC_DOCS_360_PASS2_2026-08-09.md`](../audits/FORENSIC_DOCS_360_PASS2_2026-08-09.md) (score ~4.2)
- [`../audits/FORENSIC_DOCS_360_PASS3_2026-08-09.md`](../audits/FORENSIC_DOCS_360_PASS3_2026-08-09.md) (**cierre 5/5**)
- [`../audits/FORENSIC_DOCS_MULTI_LLM_2026-08-09.md`](../audits/FORENSIC_DOCS_MULTI_LLM_2026-08-09.md)

Si un hallazgo ya está listado y remediado ahí, se marca `"ya_reportado_en_PASS3": true` y **cuenta como ruido**, no como hallazgo. Reportarlo como nuevo es exactamente la acumulación de basura que este forense debe evitar.

**§5.2 Contrato de salida — solo este JSON, sin prosa alrededor:**

```json
{
  "file": "docs/Lanzamiento/UNIT_ECONOMICS.md",
  "tier": "A",
  "modelo": "grok",
  "roles": ["CFO/FP&A", "CEO founder"],
  "skills_leidas": ["zonix-lanzamiento-roles", "zonix-startup-context", "zonix-financial-model", "zonix-lanzamiento-docs"],
  "lineas_leidas": 210,
  "valor": "KEEP",
  "valor_razon": "unico doc con el desglose CAC/LTV; lo citan BRIEF y CHECKLIST",
  "veredicto": "PASS",
  "hallazgos": [
    {
      "eje": "canon",
      "sev": "P0",
      "claim": "declara LTV/CAC ~7,2x",
      "evidencia_linea": "L88: LTV/CAC ~7,2x",
      "fix_concreto": "cambiar a ~7,5x con LTV 1.040 (CANON_V4)",
      "ya_reportado_en_PASS3": false
    }
  ],
  "no_planteado": [
    "nadie modela churn de farmacia: LTV 52x20 asume 20 meses de vida sin evidencia"
  ],
  "duplica_a": null,
  "citado_por": ["docs/Lanzamiento/BRIEF_UNA_PAGINA.md"],
  "binario_gemelo": "ninguno"
}
```

**§5.3 Los 7 ejes de `hallazgos.eje`.** Un subagente que solo devuelve `canon` no hizo el trabajo: los ejes 2–5 son la parte que el forense v8 no cubría.

| Eje | Qué busca | Ejemplo real del repo |
|-----|-----------|------------------------|
| `canon` | Cifra o ancla que contradice CANON_V4 | ask `~211k` en `500-latam/RESUMEN_FACIL.md` |
| `logica` | Razonamiento inválido aunque los números estén bien | "revenue = ARPF × activas" cuando el P&L es híbrido |
| `bug` | Error operativo que rompe algo al usarlo | DoD con cash M6 `46.395` cuando la proyección dice `180.403` |
| `incoherencia` | Dos docs vivos que se contradicen | scores Epakon 73 vs 70 entre README y comparativo |
| `gap` | Hueco: el doc **debería** cubrir algo y no lo cubre | plan de pagos sin rama de reembolso Rx |
| `higiene` | Paths, PII, links rotos, banners, fechas vencidas | `/home/aipp/Descargas` en pie de página |
| `junk` | El propio doc es la basura (ver §9) | `RESUMEN_FACIL` que contradice a su `RESUMEN_CEO` |

**§5.4 `no_planteado` es obligatorio y distinto de `gap`.** `gap` es un hueco dentro del alcance declarado del documento. `no_planteado` es lo que **nadie ha escrito en ningún doc** y el rol del subagente detectaría en una DD: riesgo regulatorio no modelado, supuesto sin evidencia, oportunidad de negocio ausente, dependencia crítica sin plan B. Array vacío solo si el subagente lo justifica.

**§5.5 Severidades.** `P0` = bloquea envío a inversor, outreach o data room. `P1` = coherencia o higiene del siguiente sprint de docs. `P2` = mantenimiento. Severidad sin impacto concreto es inválida: reescribir o bajar. `[PENDIENTE FP&A]` etiquetado a conciencia **no** es P0.

---

## §6 — Fase 3 · Dos jueces con lentes distintas

Los dos jueces trabajan **por bloque** (una carpeta o un tier, ~15-25 archivos de salida de workers), en **paralelo**, `readonly`, y **no se conocen entre sí** (`parallel-judge-ops`). Recibir el mismo material con la misma lente produce los mismos puntos ciegos: por eso las lentes son disjuntas.

| Juez | Modelo | Lente | Qué NO le toca |
|------|--------|-------|----------------|
| **A** | `cursor-grok-4.6-xhigh` | Cifras, lógica financiera, coherencia cross-doc, bugs de razonamiento. Verifica cada `evidencia_linea` contra CANON_V4 | No opina sobre borrar archivos |
| **B** | `composer-2.5-fast` | Ruido y basura: duplicidad, obsolescencia, binarios stale, higiene, PII, y **qué porcentaje del reporte de los workers es re-litigio de PASS3** | No re-deriva cifras |

Cada juez devuelve:

```json
{
  "juez": "A",
  "bloque": "Lanzamiento_financiero",
  "ranking_workers": [{"modelo": "grok", "score": 0.0, "nota": "..."}],
  "hallazgos_validados": [
    {"file": "...", "eje": "...", "sev": "P0|P1", "claim": "...", "fix_concreto": "...", "coincidencia_dual": true}
  ],
  "descartados": [{"file": "...", "claim": "...", "motivo": "stale|P2|re-litigio_PASS3|sin_evidencia|fuera_de_alcance"}],
  "ratio_ruido": 0.0,
  "gaps_promovidos": ["..."]
}
```

**Reglas de juez:** un P0 reportado por **ambos** workers de un Tier A sube prioridad (`coincidencia_dual: true`). Se descarta todo lo que no traiga `ruta:línea` verificable. `ratio_ruido` = descartados ÷ total recibido; si supera **0,40** en un bloque, el prompt del worker de ese bloque está mal calibrado y hay que ajustarlo antes de la siguiente ola, no seguir generando ruido.

---

## §7 — Fase 4 · Juez principal

**Modelo:** `claude-opus-5-thinking-high` (el de mayor razonamiento disponible). Fallbacks si hay tope de API: `claude-fable-5-1-thinking-high`, luego `gpt-5.6-sol-medium`.

**Entrada:** los JSON de **todos** los workers **y** de **ambos** jueces. No un resumen intermedio: el juez principal necesita ver qué descartó cada juez para poder rescatarlo.

**Rúbrica ponderada** (`llm-as-judge-ops`), `threshold_pass: 0.80` — más alto que el default 0.75 porque el material va a un data room:

| Criterio | Peso |
|----------|------|
| Canon y cifras: todo drift vs CANON_V4 localizado con `ruta:línea` | 30% |
| Lógica, bugs e incoherencias entre docs vivos | 25% |
| Gaps y `no_planteado`: hallazgos que ningún doc previo había planteado | 20% |
| Señal sobre ruido **del propio informe** (bajo `ratio_ruido`, cero re-litigio de PASS3) | 15% |
| Higiene y seguridad (paths, PII, frontera LA, links) | 10% |

**Salida:**

```json
{
  "score": 0.0,
  "threshold_pass": 0.80,
  "category": "documentation",
  "cobertura": {"md_total": 221, "md_juzgados": 0, "sin_juzgar": []},
  "must_fix": [{"id": "P0-01", "file": "...", "eje": "...", "claim": "...", "fix_concreto": "...", "evidencia_linea": "..."}],
  "riesgos": [],
  "sugerencias": [],
  "disenso_jueces": [{"tema": "...", "juez_A": "...", "juez_B": "...", "resolucion": "...", "releido": true}],
  "ledger": [{"file": "...", "accion": "KEEP|FIX|MERGE|DROP", "razon": "...", "destino_merge": null}],
  "no_planteado_consolidado": [{"tema": "...", "rol": "CFO|CTO|RA|COO|IR|Legal", "por_que_importa": "...", "primer_paso": "..."}],
  "human_gates_hint": ["editar docs de negocio", "regenerar binarios", "commit"]
}
```

**Reglas del juez principal:**

- **No rubber-stamp.** Antes de aceptar un `must_fix`, relee la línea citada en el archivo real. Si la cita no existe, el hallazgo se cae y el worker baja de ranking.
- **Disenso entre jueces = señal, no empate.** Prohibido resolver por mayoría: releer el artefacto y dejar `releido: true`.
- **Rescate:** puede reactivar un hallazgo que un juez descartó, dejando constancia del motivo.
- **Corrección histórica que debe respetar** (la impusieron los jueces en PASS1): no proponer `DROP` de un archivo entero para arreglar una línea. Fue el caso de `fondo-impacto-vela/RESUMEN_FACIL.md`, que terminó en fix in-place.
- Loop: si `score < 0.80` o `must_fix` no vacío por fallo de método (no por hallazgos reales), lanzar **máx. 2** vueltas de fan-out acotado solo sobre los archivos afectados. Tras la vuelta 2 sin pasar → listar bloqueo humano y cerrar. Prohibido loop infinito.
- Si `cobertura.md_juzgados < 221`, el `score` se reporta como **parcial** y se listan los `sin_juzgar`.

---

## §8 — Fase 5 · Reporte único y acotado

**Un solo archivo:** `docs/audits/FORENSIC_DOCS_V9_<YYYY-MM-DD>.md`, **máximo 250 líneas**.

**Prohibido** (esto es la mitad del pedido "no acumular información basura"):

- Un archivo por ola, por bloque o por vuelta del loop. Las vueltas **editan** el mismo informe.
- Volcar el JSON crudo de los workers o de los jueces al informe.
- Abrir un `FORENSIC_*` nuevo en el re-juicio.
- Repetir hallazgos ya cerrados en PASS1/2/3 (van, como máximo, a una línea de "verificado, sigue cerrado").

**Estructura fija:**

1. **Banner** — fecha, `score`, cobertura `N/221`, y la línea: *"Supersede `FORENSIC_DOCS_360_PASS3_2026-08-09.md` como estado vigente de `docs/`; PASS1-3 quedan como histórico."*
2. **Veredicto ejecutivo** — máx. 5 bullets + una frase de resumen.
3. **Tabla Fase 0** — hits mecánicos por bloque 0.2–0.11.
4. **P0 / P1** — tabla con `id`, `ruta:línea`, hallazgo, fix concreto, eje, `coincidencia_dual`. P2 va agregado en una sola línea por tema.
5. **Ledger de valor** — una fila por archivo con acción `KEEP / FIX / MERGE / DROP`, solo para los que **no** son KEEP limpio (si 180 archivos están bien, se dice "180 KEEP sin observaciones", no se listan).
6. **Gaps y no planteado** — tabla `tema / rol / por qué importa / primer paso`. Esta sección es el valor nuevo respecto de v8.
7. **Bloqueos humanos** — lo que requiere decisión del founder o dato externo.
8. **Método** — modelos usados, Task ejecutados, olas, `ratio_ruido` por bloque, archivos `SIN_JUZGAR`.

Al cerrar, **proponer** (no escribir) el bloque de 5-8 líneas para [`../active_context.md`](../active_context.md).

---

## §9 — Taxonomía anti-basura (test objetivo, no criterio de gusto)

`valor` en §5.2 solo puede ser una de estas cuatro, y cada una tiene condiciones verificables:

| Acción | Condición (debe cumplirse **toda**) |
|--------|--------------------------------------|
| **KEEP** | Tiene un lector identificable y ningún otro doc vivo cubre su función |
| **FIX** | **Default.** Su función sigue siendo necesaria y el problema se arregla editando líneas |
| **MERGE** | Otro doc vivo cubre al **mismo lector** con el mismo propósito; hay que nombrar `destino_merge` y qué párrafos se rescatan |
| **DROP** | (a) es export binario de un `.md` que ya no existe, **o** (b) duplica ≥90% de otro doc (evidencia del gate 0.8), **o** (c) contradice el canon **y** otro doc ya cumple su función **y** no lo cita ningún doc vivo (`citado_por` vacío) |

**Reglas duras:**

- Un `DROP` sin las tres condiciones de (c) es un hallazgo inválido: se degrada a `FIX`.
- **No borrar un archivo entero para arreglar una línea.** Precedente PASS1: `RESUMEN_FACIL` de VELA se propuso para DROP y los jueces lo bajaron a fix in-place de la línea del ask.
- **Los espejos `Pack_Aliado/md/` ↔ `Lanzamiento/` no son duplicados a eliminar.** El gate 0.8b los detecta con ratio 0,92–1,00 (7 pares: `01↔RESUMEN_ALIADO`, `02↔BRIEF_UNA_PAGINA`, `06↔PROYECCION_FINANCIERA_12M`, `07↔PRESUPUESTO_12_MESES`, `08↔ESTRUCTURA_LEGAL_Y_EQUITY`, `10↔PLAN_LANZAMIENTO_COMERCIAL`, `18↔MODELO_FINANCIERO`) porque el Pack es una **copia sincronizada por diseño** para el aliado. El único hallazgo válido ahí es **desincronización** (el espejo quedó en una versión anterior del canon): eje `canon` o `incoherencia`, nunca `junk`. Cualquier par nuevo **fuera** de ese eje sí es candidato a MERGE.
- Los binarios (pdf/docx) **no se borran** por estar stale: se marcan para **regenerar** desde su `.md` fuente. DROP de binario solo si es huérfano de un md borrado.
- Ningún `DROP` ni `MERGE` se ejecuta en esta pasada. Van al ledger y esperan OK del founder.
- El reporte de v9 también está sujeto a esta taxonomía: si al cerrar no aporta hallazgos nuevos sobre PASS3, se dice así en dos líneas en lugar de generar 250 líneas de relleno.

---

## §10 — DoD, stop rules y gates

**Definition of Done:**

1. `cobertura.md_juzgados == 221` (o lista explícita de `SIN_JUZGAR` con motivo).
2. Los 4 tiers asignados y sumando 221; binarios cubiertos por el gate 0.9–0.11.
3. `score >= 0.80` del juez principal, o bloqueo humano documentado.
4. Un único informe `FORENSIC_DOCS_V9_<fecha>.md` de ≤250 líneas con las 8 secciones.
5. `ratio_ruido` reportado por bloque.
6. Bloque propuesto para `active_context.md` — **sin escribirlo**.
7. Cero ediciones en `docs/` fuera del propio informe.

**Stop rules:**

- Cita sin leer el archivo → hallazgo inválido, worker penalizado en ranking.
- Cifra inventada o interpolada → parar y marcar `[PENDIENTE FP&A]`.
- `ratio_ruido > 0.40` en un bloque → recalibrar el prompt del worker antes de la siguiente ola.
- Dos vueltas de loop sin alcanzar 0.80 → cerrar con bloqueo humano, no una tercera vuelta.
- Presupuesto de tokens agotado → `handoff` con el índice de lo ya juzgado; prohibido cerrar con fan-out incompleto.
- Sin acceso a un archivo → reportar el bloqueo, no inferir su contenido.

**Gates humanos (HITL — `human-in-the-loop-ops`, `git-guardrails-ops`):**

| Acción | Gate |
|--------|------|
| Aplicar `must_fix` sobre docs de negocio | OK founder, y luego [PROMPT_MEJORAR_PACK_LANZAMIENTO.md](PROMPT_MEJORAR_PACK_LANZAMIENTO.md) |
| Ejecutar `DROP` o `MERGE` del ledger | OK founder, archivo por archivo |
| Regenerar pdf/docx | OK founder |
| `git commit` / `push` | OK founder explícito |
| Escribir en `active_context.md` | OK founder |
| Contactar fondos o enviar material | Fuera de alcance de este prompt |

---

## §11 — Anexo · Bloques copy-paste

### §11.1 Worker Tier A y B

```
> Roles: <de la tabla §1 para esta ruta>
> Skills (OBLIGATORIO Read SKILL.md en este orden, §1b):
>   <pegar la fila de §1b que corresponda a esta ruta>
> Paths: .agents/skills/<name>/SKILL.md  o  ~/.cursor/skills/<name>/SKILL.md
> Si una skill falta: hallazgo higiene P1 "skill faltante en sync: <name>" — no inventes su contenido.

CANON_V4:
<pegar §2 íntegro: tabla de anclas + lista negra + anclas no financieras>

ANTECEDENTE (no re-litigar):
Las forenses FORENSIC_DOCS_360_PASS1/2/3 y FORENSIC_DOCS_MULTI_LLM (ago 2026) ya se cerraron;
PASS3 cerró en 5/5. Si un hallazgo ya figura remediado ahí, marca "ya_reportado_en_PASS3": true.

HITS MECÁNICOS YA DETECTADOS EN ESTE ARCHIVO (no los redescubras, verifícalos):
<pegar las líneas de /tmp/forense-v9/*.txt que correspondan a esta ruta, o "ninguno">

ARCHIVO (único): <RUTA ABSOLUTA>
1) Lee los SKILL.md de la lista Skills (arriba).
2) Lee el archivo completo. No edites nada. No leas otros archivos salvo para verificar un link roto.
Si empieza con "Espejo Pack Aliado": los hallazgos ya sincronizados van con stale implícito (eje junk/canon).
Si es AUDIT_* o FORENSIC_* histórico: solo verifica el banner; no analices el cuerpo.

Analiza los 7 ejes, no solo cifras — aplicando la lente de las skills leídas:
1. canon        — contradicciones con CANON_V4 (ask, Day-D, equity, esc.1, BE M5, M12 29.892, ARPF, LTV, %GMV)
2. logica       — razonamiento inválido aunque el número esté bien (p.ej. revenue = ARPF x activas)
3. bug          — error que rompe algo al usar el doc (DoD imposible, fecha vencida, paso que falta)
4. incoherencia — contradicción con otro doc vivo que este archivo cita
5. gap          — lo que este doc debería cubrir por su propio alcance (según skills de dominio) y no cubre
6. higiene      — paths /home o ~/Descargas, PII, links rotos, banner o fecha, pipes de tabla rotos, texto truncado
7. junk         — el archivo mismo sobra: aplica el test de §9 (KEEP/FIX/MERGE/DROP)

Además, desde tus roles + skills, responde qué NADIE ha planteado todavía en el proyecto y una DD
detectaría: supuesto sin evidencia, riesgo regulatorio no modelado, dependencia sin plan B,
oportunidad ausente. Va en "no_planteado" (distinto de "gap").

Salida: SOLO el JSON de §5.2, más el campo:
  "skills_leidas": ["zonix-startup-context", ...]
Sin prosa antes ni después. Toda afirmación con "evidencia_linea".
Si no puedes leer el archivo: {"file":"...","error":"no_access"}.
```

### §11.2 Worker Tier C (prompt corto, archivo repetitivo o espejo)

```
> Roles: <de §1>
> Skills (OBLIGATORIO Read, §1b — mínimo): zonix-startup-context → <skill de dominio de la fila §1b>
> Paths: .agents/skills/<name>/SKILL.md  o  ~/.cursor/skills/<name>/SKILL.md

CANON_V4 (anclas mínimas): SAFE 237.412 | Day-D 187.152 | equity ~15% | pricing 45/60/70 |
%GMV 8/7/5 | ARPF ~52 | LTV 1.040 / ~7,5x | BE M5 | activas M12 159 | revenue M12 29.892.
Lista negra: 210.760 · 174.102 · 111.988 · 160.500 · 145.500 · 35,13% · ~39,57% · 25/40/55 ·
46.395 como cash M6 · 7,2x · ARPF ~50 · 800/mes contador+abogado · "profitable M1".

ARCHIVO (único): <RUTA ABSOLUTA>. Lee skills → lee archivo. No edites.
Este archivo es repetitivo (ficha/nota/espejo). Responde solo:
a) ¿contradice el canon? (canon)
b) ¿duplica a otro doc de su carpeta? (junk + "duplica_a")
c) ¿tiene PII, paths personales o links rotos? (higiene)
d) ¿aporta algo único que se perdería si desapareciera? -> "valor" + "valor_razon"
e) "no_planteado": máx. 1 item, solo si es real (lente de la skill de dominio).

Salida: SOLO el JSON de §5.2 + "skills_leidas": [...]. Campos N/A → null o [].
```

### §11.3 Juez A — cifras y lógica (`cursor-grok-4.6-xhigh`)

```
Eres juez adversarial readonly. Ignora la existencia de otros jueces.
> Skills (Read primero): zonix-startup-context → zonix-financial-model → parallel-judge-ops
Tu lente: CIFRAS, LÓGICA FINANCIERA, COHERENCIA CROSS-DOC Y BUGS DE RAZONAMIENTO.
No opines sobre borrar archivos (eso no es tu lente).

CANON_V4: <pegar §2 íntegro>
BLOQUE: <nombre> — recibes los JSON de los workers de estos archivos: <lista>

Para cada hallazgo recibido:
- Abre el archivo y verifica que "evidencia_linea" existe literalmente. Si no existe: descartar
  con motivo "sin_evidencia" y penalizar al worker en ranking_workers.
- Verifica el "fix_concreto" contra CANON_V4. Un fix que introduce otra cifra fuera de canon se descarta.
- Descarta: P2, stale:true, y todo lo que sea re-litigio de PASS1/2/3 (motivo "re-litigio_PASS3").
- Si los dos workers de un archivo Tier A coinciden en un P0 -> "coincidencia_dual": true.
- Promueve a "gaps_promovidos" los items de "no_planteado" que sean materialmente relevantes
  para el pitch, el modelo financiero o el riesgo regulatorio (lente de las skills leídas).
- Si "skills_leidas" del worker está vacío o ausente -> penalizar en ranking (incumplió §1b).

Busca además lo que los workers NO vieron por leer un solo archivo: contradicciones entre
archivos distintos del bloque (misma cifra, dos valores).

Salida: SOLO el JSON de juez de §6.
```

### §11.4 Juez B — ruido y basura (`composer-2.5-fast`)

```
Eres juez adversarial readonly. Ignora la existencia de otros jueces.
> Skills (Read primero): docs-alignment-ops → cognitive-doc-design-ops → parallel-judge-ops
Tu lente: RUIDO Y BASURA. No re-derives cifras financieras (eso no es tu lente).

BLOQUE: <nombre> — recibes los JSON de los workers de estos archivos: <lista>
Gate determinista disponible: <pegar dup_exactos.txt, stale_binarios.txt, links_rotos.txt,
hits_paths.txt, hits_pii.txt filtrados a este bloque>

Evalúa:
1. Duplicidad real: ¿dos archivos del bloque sirven al mismo lector? -> MERGE con destino, o DROP
   solo si cumple las tres condiciones de §9(c) (incluido "citado_por" vacío).
2. Obsolescencia: fechas vencidas, deadlines pasados, banners ausentes, versiones supersedidas.
3. Binarios: pdf/docx stale respecto de su .md -> REGENERAR, nunca DROP. Huérfanos -> revisar origen.
4. Higiene: paths /home y ~/Descargas, PII (emails, +58...), links rotos, frontera LegalAlternativo.
5. Calidad del propio reporte: qué porcentaje de lo que enviaron los workers es re-litigio de
   PASS1/2/3, P2 disfrazado de P1, o hallazgo sin impacto concreto -> "ratio_ruido".
6. Workers sin "skills_leidas" o con skills inventadas -> ratio_ruido y ranking penalizado.

Regla dura: prohibido proponer DROP de un archivo entero para arreglar una línea.
Precedente: RESUMEN_FACIL de VELA se degradó a fix in-place en PASS1.

Salida: SOLO el JSON de juez de §6.
```

### §11.5 Juez principal (`claude-opus-5-thinking-high`)

```
Eres el JUEZ PRINCIPAL. Readonly. Decides el estado real de docs/ y qué es señal vs ruido.
> Skills (Read primero): llm-as-judge-ops → parallel-judge-ops → human-in-the-loop-ops
>                        → zonix-lanzamiento-roles

CANON_V4: <pegar §2 íntegro>
ENTRADA COMPLETA:
- JSON de los ~246 workers (todos los archivos, todos los tiers; 37 Tier A vienen duplicados)
- JSON del Juez A (cifras y lógica) de todos los bloques
- JSON del Juez B (ruido y basura) de todos los bloques
- Gate determinista Fase 0 completo
- Cobertura declarada: <N> de 221 md

RÚBRICA (threshold_pass 0.80): canon y cifras 30% | lógica, bugs e incoherencias 25% |
gaps y no_planteado 20% | señal sobre ruido del informe 15% | higiene y seguridad 10%.

Obligaciones:
1. NO rubber-stamp: antes de aceptar un must_fix, relee la línea citada en el archivo real.
   Si la cita no existe, cae el hallazgo y baja el worker en el ranking.
2. Disenso entre jueces = señal, no empate. Prohibido resolver por mayoría: relee y marca "releido".
3. Puedes RESCATAR hallazgos que un juez descartó; deja constancia del motivo.
4. Consolida "no_planteado" por rol (CFO, CTO, RA, COO, IR, Legal — de zonix-lanzamiento-roles),
   con por qué importa y primer paso. Esta sección es el valor nuevo del v9: no la resumas a dos líneas.
5. Ledger KEEP/FIX/MERGE/DROP con el test de §9. Ningún DROP se ejecuta ahora.
6. Si la cobertura es menor a 221, el score es PARCIAL y listas los SIN_JUZGAR.
7. Máx. 2 vueltas de re-fan-out acotado; tras la segunda, bloqueo humano.
8. Si muchos workers omitieron skills_leidas -> must_fix de método (recalibrar §1b / prompts).

Salida: SOLO el JSON de §7.
```

---

## §12 — Pega en Cursor

1. Chat nuevo. Adjuntar este prompt + `docs/` + el Excel v4.
2. Primera línea: `MODO=completo OLA=4 CANON=v4 DRY_RUN=no`.
3. Dejar correr: Fase 0 (gate) → Fase 1 (tiering, verificar que suma 221) → Fase 2 (~61 olas, workers leen §1b) → jueces A/B por bloque → juez principal → informe único.
4. **No** aplicar `must_fix`, `DROP` ni `MERGE` sin OK founder. **No** commitear. **No** contactar fondos.

**Última actualización:** 10 septiembre 2026 (v9.1 — skills §1b + gstack aclarado)
