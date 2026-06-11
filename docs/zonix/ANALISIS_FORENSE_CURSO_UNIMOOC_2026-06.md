# Análisis forense — Curso UniMOOC Steve Blank → skills JARVIS Zonix

> **Fecha:** 11 junio 2026  
> **Fuente curso:** `/home/aipp/Downloads/STARTUP CREAR SKILLS/` — [UniMOOC «Cómo crear tu Startup»](http://unimooc.com/) (Steve Blank, Customer Development + Lean Canvas). Licencia reutilización: `http://aemprende.unimooc.com/reutiliza`.  
> **Modo:** `auditar` + matriz de implementación P0 (sin volcar transcripciones).  
> **Canon skills:** [ANALISIS_FORENSE_SKILLS.md](ANALISIS_FORENSE_SKILLS.md), [SKILLS_STARTUP_USAR_NO_USAR.md](SKILLS_STARTUP_USAR_NO_USAR.md).

---

## 1. Resumen ejecutivo

- **248 archivos** en disco: **115 `.srt`** (contenido útil) + **133 `.txt`** (mayoría boilerplate UniMOOC repetido).
- **0 videos** locales; la auditoría se basó en **transcripciones ASR en español**.
- El curso es **Steve Blank / four-steps / Lean Canvas** — ya parcialmente destilado en `zonix-launch-piloto`, `zonix-startup-context`, `zonix-b2b-sales`, `zonix-financial-model`.
- **Veredicto:** no crear 8 skills nuevas; **1 skill nueva** (`zonix-lean-canvas`) + **ampliar 4 existentes** (P0).
- **Anti-patrones respetados:** no blue-ocean dogma; no lean-startup como religión; casos Jersey Square / e-commerce US → solo analogía, no cifras.
- **Cifras Zonix:** ninguna del curso; solo `zonix-startup-context` + pack `docs/Lanzamiento/`.
- **Duplicados en carpeta:** varios `.srt` aparecen repetidos en el filesystem (mismo nombre); conteo operativo único ≈ **115 lecciones**.
- **Prioridad P0:** Lean Canvas operativo, test de hipótesis/pivot, día-en-la-vida farmacia, pricing por tipo de mercado, alianzas delivery/partners.
- **P1 (hecho):** tipos de propuesta de valor en pitch; CAC web vs físico en marketing pack.
- **P2 (hecho — repaso 11 jun):** alianzas startup–corporativo (M7) en `references/` + red flags inversor corporativo en `zonix-investor-materials`.
- **Repaso completo 11 jun (mejoras):** ciclo viral M5 (`zonix-lanzamiento-docs`), cuota realista + economía del canal M4/M6 (`zonix-financial-model`), organización Fase 0 M1 (`zonix-launch-piloto`).
- **Entregable implementación:** `.agents/skills/zonix-lean-canvas/` + patches en 4 skills + router actualizado.
- **Próximo paso humano:** validar plantillas Lean Canvas con founder antes de usar en reunión inversor.

---

## 2. Inventario del curso

| Métrica | Valor |
|---------|-------|
| `COURSE_ROOT` | `/home/aipp/Downloads/STARTUP CREAR SKILLS/` |
| Carpetas módulo | 8 (M1–M6 Lean Startup + M7 Lean Canvas + 2 sueltos) |
| `.srt` | 115 |
| `.txt` | 133 |
| `.mp4` | 0 |

### Buckets auditados

| Bucket | Carpeta | Lecciones `.srt` | Chars texto agregado |
|--------|---------|------------------|----------------------|
| B1 | Módulo 1 | 33 | ~64k |
| B2 | Módulo 2 | 16 | ~22k |
| B3 | Módulo 3 | 16 | ~26k |
| B4 | Módulo 4 | 8 | ~13k |
| B5 | Módulo 5 | 16 | ~27k |
| B6 | Módulo 6 | 11 | ~16k |
| B7 | Lean Canvas M7 | 14 | ~20k |
| B8 | Sueltos L5.01 / L8.01 | 1 | ~2k |

---

## 3. Hallazgos por bucket (`CUR-NNN`)

### B1 — Fundamentos startup + bloques Lean Canvas (Módulo 1)

#### [CUR-B1-01] Customer Development vs empresa tradicional
- Ruta: `UniMOOC - Curso Lean Startup - UniMOOC - Módulo 1/Steve Blank. UniMOOC (L1B.01) 'Qué es una compañía'. Crea tu Startup. (español_ASR).srt`
- Marcos: four-steps, startup ≠ big company
- Aplicabilidad Zonix: **Alta**
- Skill destino: `zonix-launch-piloto` (ya § four-steps)
- Evidencia: startups buscan modelo repetible; no plan de negocio estático de 5 años.
- Anti-patrones: no copiar organigrama corporativo en Fase 0.

#### [CUR-B1-02] Test de hipótesis explícitas
- Ruta: `.../L1C.04) 'Testando hipótesis'. (español_ASR).srt`
- Marcos: hypothesis testing, customer discovery
- Aplicabilidad: **Alta**
- Skill destino: `zonix-launch-piloto` — ampliar checklist
- Evidencia: líneas 21–35 — «implícitamente teníais una hipótesis… quiero que deje de ser implícita».
- Anti-patrones: no confundir con A/B paid masivo (100m-leads).

#### [CUR-B1-03] Pivot
- Ruta: `.../L1C.06) 'Pivotando'. (español_ASR).srt`
- Marcos: pivot (Eric Ries), validación vs realidad
- Aplicabilidad: **Alta**
- Skill destino: `zonix-launch-piloto`
- Evidencia: líneas 35–43 — «qué tienes que hacer cuando tus hipótesis no coinciden con la realidad».
- Anti-patrones: pivot narrativo en pitch sin evidencia de entrevistas.

#### [CUR-B1-04] Bloques Canvas (9 celdas)
- Ruta: múltiples L1B.* (segmento, canales, ingresos, costes, socios…)
- Marcos: Lean Canvas / business model canvas
- Aplicabilidad: **Alta**
- Skill destino: **`zonix-lean-canvas`** (nueva)
- Evidencia: recorrido sistemático propuesta → segmento → canales → relación → ingresos → recursos → socios → actividades → costes.
- Anti-patrones: no rellenar canvas con supuestos US; anclar beachhead Valencia.

#### [CUR-B1-05] Fuentes de ingresos (intro)
- Ruta: `.../L1B.07) 'Las fuentes de ingresos'. (español_ASR).srt`
- Skill destino: `zonix-financial-model` (cross-ref)
- Aplicabilidad: **Media**

### B2 — Propuesta de valor y PMV (Módulo 2)

#### [CUR-B2-01] Tipos de propuesta de valor
- Ruta: `.../L2.19) 'Tipos de propuesta de valor'. (español_ASR).srt`
- Marcos: value proposition types, problema/beneficio ranking
- Aplicabilidad: **Alta**
- Skill destino: `zonix-fundraising-narrative` (P1), `zonix-b2b-sales` (P0 guion)
- Evidencia: combinar conocimiento técnico + mercado → propuesta óptima.

#### [CUR-B2-02] PMV y errores típicos
- Ruta: lecciones L2.* PMV
- Marcos: MVP (Blank), entrevistas cliente
- Aplicabilidad: **Media** — Zonix ya tiene MVP stack; PMV = piloto Day-D, no feature factory.
- Skill destino: `zonix-launch-piloto`
- Anti-patrones: PMV como producto perfecto antes de farmacias firmadas.

### B3 — Segmentos y tipos de mercado (Módulo 3)

#### [CUR-B3-01] Día en la vida del cliente
- Ruta: `.../L3A.04) 'Un día en la vida de tu cliente'. (español_ASR).srt`
- Marcos: jobs-to-be-done lite, customer context
- Aplicabilidad: **Alta**
- Skill destino: `zonix-b2b-sales` — plantilla discovery farmacia
- Evidencia: mapear tareas diarias del dueño farmacia / paciente antes de vender Zonix.

#### [CUR-B3-02] Mercado bilateral
- Ruta: `.../L3A.11) 'El mercado bilateral'. (español_ASR).srt`
- Marcos: two-sided market (farmacia + paciente)
- Aplicabilidad: **Alta**
- Skill destino: `zonix-startup-context` + `zonix-lean-canvas`
- Evidencia: Zonix es marketplace B2B2C — chicken-and-egg pre-Day-D.

#### [CUR-B3-03] Tipos de mercado (existente / nuevo / resegmentado / clon)
- Ruta: `.../L3B.02) 'Mercados existentes'. (español_ASR).srt` y L3B.06
- Marcos: Market Type (Steve Blank)
- Aplicabilidad: **Alta** — alinea con canon Zonix «existing market»
- Skill destino: `zonix-startup-context` (refuerzo, no contradecir)
- Anti-patrones: narrativa «nuevo mercado farmacia digital VE» (blue ocean).

#### [CUR-B3-04] Jersey Square (caso US)
- Ruta: `.../L3B.11) 'Un ejemplo aplicado al equipo JerseySquare'. (español_ASR).srt`
- Aplicabilidad: **Baja** como caso; **Media** como método
- Skill destino: solo `references/unimooc-modulo-3.md`
- Anti-patrones: copiar pricing Jersey Square; usar analogía Zonix.

### B4 — Canales (Módulo 4)

#### [CUR-B4-01] Canales directos vs indirectos; web vs físico
- Ruta: L4.04–L4.08
- Marcos: channel strategy, OEM/indirect (adaptar a partners delivery)
- Aplicabilidad: **Alta**
- Skill destino: `zonix-lanzamiento-docs` (Bullseye) + `zonix-launch-piloto`
- Evidencia: distribución física vs web — Zonix: app + visita Sales B2B + partners última milla.

#### [CUR-B4-02] Economía del canal (repaso 11 jun)
- Ruta: `.../L4.05) 'Canales de distribución directos'` y L4.06 (español_ASR).srt
- Marcos: channel economics — ingreso real = precio lista − descuento − coste canal
- Aplicabilidad: **Alta**
- Skill destino: `zonix-financial-model` (§ economía del canal) + cross-ref bloque 5 `zonix-lean-canvas`
- Evidencia: canal indirecto vende más volumen pero deja menos margen neto; comparar antes de elegir.
- Anti-patrones: copiar cifras US del ejemplo ($100 catálogo) — solo la lógica.

### B5 — Relaciones con clientes y CAC (Módulo 5)

#### [CUR-B5-01] Captar / fidelizar / aumentar clientes
- Ruta: L5.10–L5.16
- Marcos: get-keep-grow, CAC físico vs web
- Aplicabilidad: **Alta**
- Skill destino: `zonix-b2b-sales` (físico farmacia), `zonix-lanzamiento-docs` (web paciente P1)
- Evidencia: L5.10 — vender más a clientes existentes implica coste menor.

#### [CUR-B5-02] CAC web
- Ruta: `.../L5.12) 'Coste de adquisición de clientes web'. (español_ASR).srt`
- Aplicabilidad: **Media** — cruzar con UNIT_ECONOMICS CAC farmacia 139, no inventar CPI
- Skill destino: `zonix-financial-model` (nota metodológica P1)

#### [CUR-B5-03] Demanda pagada/gratuita + ciclo viral (repaso 11 jun)
- Ruta: L5.03, L5.04 y `.../L5.07) 'El ciclo viral'. (español_ASR).srt`
- Marcos: demand creation (paid/earned/viral), referral loop con incentivo
- Aplicabilidad: **Alta** — loop natural Zonix = farmacia → paciente (QR mostrador)
- Skill destino: `zonix-lanzamiento-docs` (§ Demanda pagada vs gratuita + ciclo viral)
- Evidencia: «convertir a nuestros clientes en vendedores»; «no os sintáis mal si vuestra empresa no puede generar un ciclo viral».
- Anti-patrones: inventar K-factor en PROYECCION; forzar viralidad en Rx (privado/sensible).

### B6 — Ingresos y pricing (Módulo 6)

#### [CUR-B6-01] Fijación de precios por tipo de mercado
- Ruta: `.../L6.05) 'Fijación de precios'. (español_ASR).srt`
- Marcos: pricing strategy, revenue model
- Aplicabilidad: **Alta**
- Skill destino: `zonix-financial-model` — ampliar § pricing
- Evidencia: «cómo fijamos los precios» distinto de «formas de cobrar» — bandas 25/40/55 ya en pack.

#### [CUR-B6-02] Errores frecuentes startups en ingresos
- Ruta: `.../L6.06) 'Errores frecuentes de las Startups'. (español_ASR).srt`
- Aplicabilidad: **Alta**
- Skill destino: `zonix-financial-model` anti-patrones

#### [CUR-B6-03] Mercados uni vs multilaterales
- Ruta: `.../L6.08) 'Mercados unilaterales y multilaterales'. (español_ASR).srt`
- Skill destino: `zonix-lean-canvas` (bloque ingresos lado farmacia + GMV)

#### [CUR-B6-04] Tamaño y cuota de mercado realista (repaso 11 jun)
- Ruta: `.../L6.14) 'Tamaño y cuota de mercado'. (español_ASR).srt`
- Marcos: market sizing bottom-up por capacidad de canal; LTV vs CAC antes de proyectar
- Aplicabilidad: **Alta**
- Skill destino: `zonix-financial-model` (§ cuota de mercado realista por capacidad de canal)
- Evidencia: «a cuánta gente podéis vender con vuestro canal de distribución… datos reales y no ficticios».
- Anti-patrones: cuota top-down desde TAM en PERFIL_MERCADO sin fórmula Sales.

### B7 — Socios y alianzas (Lean Canvas M7)

#### [CUR-B7-01] Alianzas startup ↔ grandes empresas
- Ruta: `.../L7.14) 'Estrategia de asociaciones con Startups'. (español_ASR).srt`
- Marcos: asymmetric partnerships, key partners
- Aplicabilidad: **Media** — delivery partners, no Farmatodo año 1
- Skill destino: `zonix-lean-canvas` (socios clave) + `zonix-delivery-system` (cross-ref)
- Evidencia: líneas 7–27 — relaciones asimétricas; socios iniciales ≠ socios año 2.

#### [CUR-B7-02] Riesgo gestión alianzas
- Ruta: `.../L7.12) 'Riesgo de la gestión de alianzas'. (español_ASR).srt`
- Aplicabilidad: **Media**
- Skill destino: `zonix-lean-canvas/references/unimooc-modulos.md` § M7 (P2 — hecho)

#### [CUR-B7-03] Inversión corporativa — red flags (repaso 11 jun)
- Ruta: `.../L7.13) 'Inversiones'. (español_ASR).srt`
- Marcos: corporate VC / strategic investor due diligence
- Aplicabilidad: **Media-Alta** — relevante si cadena/distribuidor propone invertir
- Skill destino: `zonix-investor-materials` (§ inversor corporativo) + `references/unimooc-modulos.md`
- Evidencia: cláusula «nación más favorecida», exclusividad 1 año, acceso tecnología — «¿qué hacen por la creación de mi empresa?».
- Anti-patrones: aceptar exclusividad piloto; redactar cláusulas sin abogado.

### B8 — Sueltos (dedupe)

#### [CUR-B8-01] Recursos, actividades y costes (L8.01)
- Dedupe con B1 canvas costes + `zonix-financial-model` Fase 0 — **no acción**.

---

## 4. Matriz marco → skill (consolidada)

| Marco / workflow UniMOOC | Skill Zonix | Acción | Prioridad | Conflicto canon |
|--------------------------|-------------|--------|-----------|-----------------|
| Lean Canvas 9 bloques | `zonix-lean-canvas` | **crear** | **P0** | ninguno |
| Hypothesis test + pivot | `zonix-launch-piloto` | ampliar § | **P0** | vs lean dogma → four-steps gana |
| Mom-test / entrevistas | `zonix-launch-piloto` | ya existe; refuerzo | P0 | ninguno |
| Market Type | `zonix-startup-context` | ampliar bilateral | **P0** | vs blue ocean → existing market |
| Día en la vida / arquetipo | `zonix-b2b-sales` | ampliar § | **P0** | ninguno |
| SPIN (ya en skill) | `zonix-b2b-sales` | mantener | — | — |
| Canales web/físico | `zonix-lanzamiento-docs` | cross-ref Bullseye | P1 | — |
| CAC get-keep-grow | `zonix-financial-model` | nota P1 | P1 | cifras solo pack |
| Pricing por mercado | `zonix-financial-model` | ampliar § | **P0** | bandas B2B §5 fijas |
| Tipos propuesta valor | `zonix-fundraising-narrative` | P1 | P1 | — |
| Alianzas startup–corp | `zonix-lean-canvas` + refs | P2 | P2 | no prometer Farmatodo |
| Jersey Square casos | — | **descartar** verbatim | — | e-commerce US |
| Lean Startup religión | — | **descartar** | — | usar four-steps |

---

## 5. Plan de implementación

### P0 (esta sesión — autorizado por plan)

1. Crear `.agents/skills/zonix-lean-canvas/SKILL.md` + `references/unimooc-modulos.md`
2. Ampliar `zonix-launch-piloto` — hipótesis explícitas + tipos de pivot
3. Ampliar `zonix-b2b-sales` — día en la vida farmacia + ranking problemas
4. Ampliar `zonix-financial-model` — pricing Steve Blank + errores ingresos
5. Ampliar `zonix-startup-context` — nota mercado bilateral
6. Actualizar `SKILLS_STARTUP_USAR_NO_USAR.md`, `roles_matrix.json`, `AGENTS.md`

### P1 (implementado 11 jun 2026)

- `zonix-fundraising-narrative`: tipos propuesta de valor M2 (técnico vs mercado, ranking problema/beneficio).
- `zonix-lanzamiento-docs`: Get/Keep/Grow + CAC web vs físico M5 (metodología; cifras pack).

### P2 (implementado 11 jun 2026 — repaso completo)

- Extractos M7 (tipos de socios, riesgos, inversión corporativa) en `zonix-lean-canvas/references/unimooc-modulos.md`.
- Red flags inversor corporativo/estratégico (L7.13) en `zonix-investor-materials`.

### Repaso completo 11 jun 2026 (huecos cerrados)

| Hallazgo | Lección | Skill |
|----------|---------|-------|
| CUR-B5-03 demanda pagada/gratuita + ciclo viral | L5.03/L5.04/L5.07 | `zonix-lanzamiento-docs` |
| CUR-B6-04 cuota de mercado por capacidad de canal | L6.14 | `zonix-financial-model` |
| CUR-B4-02 economía del canal | L4.05/L4.06 | `zonix-financial-model` + cross-ref canvas bloque 5 |
| CUR-B7-03 inversión corporativa red flags | L7.13 | `zonix-investor-materials` + references M7 |
| Organización Fase 0 (customer dev team) | L1A.08 | `zonix-launch-piloto` |

---

## 6. Skills tocadas / creadas

| Skill | Cambio |
|-------|--------|
| `zonix-lean-canvas` | **Nueva** (+ references M4–M7 ampliadas en repaso) |
| `zonix-launch-piloto` | Ampliada (hipótesis/pivot + organización Fase 0) |
| `zonix-b2b-sales` | Ampliada |
| `zonix-financial-model` | Ampliada (pricing + cuota canal + economía canal) |
| `zonix-startup-context` | Ampliada |
| `zonix-fundraising-narrative` | Ampliada (P1 — tipos propuesta valor) |
| `zonix-lanzamiento-docs` | Ampliada (P1 CAC + ciclo viral) |
| `zonix-investor-materials` | Ampliada (P2 — inversor corporativo) |

---

## 7. Riesgos y pendientes

| ID | Riesgo | Mitigación |
|----|--------|------------|
| R1 | ASR con errores OCR («cac», «pivote» ok) | Citar bloques SRT, no depender de una palabra |
| R2 | Duplicados filesystem curso | Auditar por título único de lección |
| R3 | Canvas con cifras inventadas | Canvas cualitativo; cifras → pack |
| R4 | Licencia UniMOOC | Destilar procedimiento; no republicar transcripciones |

`[PENDIENTE founder]`: validar plantilla Lean Canvas en workshop interno pre-Day-D.

---

## 8. Verificación dry-run (skills post-implementación)

| Prompt prueba | Skill esperada |
|---------------|----------------|
| «Rellena Lean Canvas Zonix pre-Day-D» | `zonix-lean-canvas` + `zonix-startup-context` |
| «¿Cuándo pivotar el beachhead?» | `zonix-launch-piloto` (hipótesis/pivot) |
| «Guion discovery dueño farmacia» | `zonix-b2b-sales` (día en la vida) |
| «¿Subimos cuota a 80 USD?» | `zonix-financial-model` — remitir PROPUESTA B2B §5 |

---

## 9. Próximo paso recomendado

Ejecutar workshop Fase 0: rellenar **un** Lean Canvas Zonix con founder + Co-CEO usando `zonix-lean-canvas`, archivar en `docs/zonix/` (opcional, con OK humano).
