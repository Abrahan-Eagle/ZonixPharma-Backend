# Prompt meta — Mejorar pack Lanzamiento Inversor (Zonix Pharma)

> **Versión:** 1.2 — agosto 2026 (anclas Excel **v4** / forense metodología **v5**)  
> **Repo:** `ZonixPharma-Backend`  
> **Destino:** `docs/Lanzamiento/` (+ Pack Aliado / CRM si citan ask)  
> **Uso:** copiar la sección **«Pega en Cursor»** al final en un chat nuevo. Adjuntar con `@` los archivos listados en §K.

**Relacionado:** creación desde cero → [PROMPT_PACK_LANZAMIENTO_INVERSOR.md](PROMPT_PACK_LANZAMIENTO_INVERSOR.md). **Auditoría forense (1 archivo × Composer+Grok → juez → writer, hasta 3 loops)** → [PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md](PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md) **v5.0**. Pack vigente → [../Lanzamiento/README.md](../Lanzamiento/README.md).

---

## §A — Rol y mandato

Actúas como **equipo de data room pre-seed** (panel JARVIS) para **Zonix Pharma** — marketplace farmacéutico digital, piloto **Valencia metro (VE)**.

**Mandato:** **mejorar** el pack existente (claridad, coherencia numérica, due diligence, polish editorial). **No** reescribir desde cero salvo secciones rotas.

**Idioma:** español. **Tono:** inversor (auditable, sin hype). Cada afirmación fuerte = **supuesto** o **fuente** (enlace o doc interno).

**Declara al inicio** (una línea): `> Roles: <rol1> + <rol2>` — ej. `CFO lens + Legal + technical writer`.

---

## §B — Alcance de producto (no confundir repos)

| Concepto | Regla |
|----------|--------|
| **Producto del pitch** | Solo **Zonix Pharma** — narrativa, métricas, infra, demo, SAFE, proyección |
| **Infra / deploy** | `zonixpharma.com`, repos `ZonixPharma-Backend` / `ZonixPharma-Front` — **nunca** `corralx.com` ni repos CorralX |
| **Portfolio del founder** | **Permitido** citar **Corral X**, Zonix Imports, Aiblockweb en BRIEF/VOLCADO/CHECKLIST como track record — **no** es el producto financiado |
| **Fuera de alcance** | Código Laravel/Flutter, skills nuevas, `.cursor/plans/`, commit/push sin orden explícita |
| **No adjuntar con @** | Docs Eats históricos (eliminados ago 2026) — solo Pharma en `docs/Lanzamiento/` |

---

## §C — Cifras ancla INMUTABLES (no recalcular sin OK del usuario)

> **Fuente canónica (7 ago 2026):** Excel Detallado **v4** → [`MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](../Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) + [README.md](../Lanzamiento/README.md) + [BRIEF_UNA_PAGINA.md](../Lanzamiento/BRIEF_UNA_PAGINA.md). Skills: `zonix-startup-context`. Asks **210.760 / ~112k / ~174k / 111.988** = `[OBSOLETO]`.

**Anclas v4:** SAFE **237.412** · Day-D **187.152** · equity **~39,57%** · Esc.1 FCF **+59.079** · cash M12 **246.231** · BE **M5** · ARPF **~52** · LTV **1.040**. Modelo vigente **Lean Excel**. Si detectas divergencia, **propón** corrección con diff; **no** inventes cash P10/P90 sin OK FP&A.

| Concepto | Lean (Excel) | Base | Growth |
|----------|--------------|------|--------|
| Capital pedido (TOTAL SAFE) | **237.412** *(≈211k)* | **~157.268** *(≈157k hist.)* | **~187.478** *(≈187k hist.)* |
| SAFE cap post-money | **600.000** | **~912.814** | **~1.205.345** |
| Equity implícita (ref.) | **~39,57%** | **~17,23%** | **~15,55%** |
| Burn promedio mensual | **~14.346** | **~10.898** *(hist.)* | **~12.698** *(hist.)* |
| Burn M1–M12 | **172.152** | — | — |
| Reserva | **15.000** | — | — |
| Fase 0 total outflow | **50.260** | (ver PRESUPUESTO) | (ver PRESUPUESTO) |
| Caja al Day-D (T+90) | **187.152** | — | — |
| Caja M12 P50 | **`[PENDIENTE FP&A]`** | — | — |
| Farmacias activas M12 ref. | **~159** *(curva legado)* | idem | idem |
| ARPF placeholder | **~50** | **~50** | **~50** |
| Tests backend (evidencia) | **443+** passed (jun 2026) | verificar con `php artisan test` | actualizar VOLCADO §1.2 |

**Regla PROYECCION:** §0 = anclas Excel. Tabla **M1–M12** §1.1 = **legado** burn ~8.1k + `[PENDIENTE FP&A]`. Base/Growth = hist. en [PRESUPUESTO_12_MESES_REFERENCIA.md](../Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md).

**Cascada obligatoria** si cambia **una** ancla (solo con OK usuario): `README.md` → `BRIEF_UNA_PAGINA.md` → `MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md` → `CHECKLIST_PRE_INVERSOR.md` → `UNIT_ECONOMICS.md` → `PROYECCION_FINANCIERA_12M.md` → `PRESUPUESTO_12_MESES_REFERENCIA.md` → `MODELO_FINANCIERO_ZONIX_PHARMA.md` (+ plantilla §C).

**Anti-regresión:** no reintroducir como vigente tiers **101/118/135k**, ask **111.988 / 174.102**, equity **39,57% / 29,02%**, Fase 0 **28.057 / 33.835**, Day-D **72.943 / 78.153**, burn **8.108 / 90.702**, M12 **42.209 / 40.831** sin etiqueta *histórico* / `[OBSOLETO]`.

---

## §D — Inventario del pack (27 archivos `.md` en raíz)

> Para auditoría forense paralela (27 workers + verify Excel + research web), usar [PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md](PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md) **v2.0** §D (tabla completa con olas).

| # | Archivo | Prioridad mejora |
|---|---------|------------------|
| 0 | `README.md` | Índice, anclas, pendientes humanos |
| 1 | `BRIEF_UNA_PAGINA.md` | Primera impresión inversor |
| 2 | `CONTEXTO_PITCH_Y_DECISIONES.md` | Decisiones y diferenciación |
| 3 | `PERFIL_MERCADO_PILOTO.md` | TAM/SAM/SOM, competencia |
| 4 | `UNIT_ECONOMICS.md` | CAC, LTV, sensibilidad |
| 5 | `PROYECCION_FINANCIERA_12M.md` | **Solo Lean** M1–M12; no romper §1.1 |
| 6 | `MODELO_FINANCIERO_ZONIX_PHARMA.md` | Espejo `.xlsx` v3.8.2; coherencia FP&A |
| 7 | `ESTRUCTURA_LEGAL_Y_EQUITY.md` | SAFE, cap, datos |
| 8 | `CHECKLIST_PRE_INVERSOR.md` | Pre-flight reunión + FAQ |
| 9 | `PLAN_LANZAMIENTO_COMERCIAL.md` | Fase 0, T+30/60/90 |
| 10 | `CENSO_FARMACIAS_CARABOBO_FASE0.md` | Beachhead, densidad farmacias |
| 11 | `PROPUESTA_VALOR_CLIENTE_B2B.md` | §2 flaquezas / §3 oferta |
| 12 | `PROPUESTA_VALOR_USUARIO_FINAL.md` | B2C, onboarding, ads |
| 13 | `PROPUESTA_VALOR_TERCER_LADO.md` | delivery_company + agent |
| 14 | `PRESUPUESTO_12_MESES_REFERENCIA.md` | Tiers y líneas de gasto |
| 15 | `MONTOS_REFERENCIA_INTERNET.md` | Fuentes precios |
| 16 | `SUPUESTO_MARKETING_OFFLINE.md` | Vallas, CPL triggers |
| 17 | `PLAN_METODOS_PAGO.md` | PMC, Zelle, USDT |
| 18 | `PLAN_MODULO_OPERATIVO_CLAVE.md` | Rx, seguridad §14, FV |
| 19 | `CUESTIONARIO_EQUIPO_PILOTO.md` | Preguntas equipo |
| 20 | `VOLCADO_RESPUESTAS_CUESTIONARIO.md` | **No inventar** `[PENDIENTE]` del founder |
| 21 | `MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md` | Email/WhatsApp + bullets |
| 22 | `REGISTRO_PENDIENTES_PACK.md` | P0–P4 humanos |
| 23 | `ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md` | Pack ↔ código |
| 24 | `GUIA_DISCOVERY_CALLE_FASE0.md` | Mom-test calle |
| 25 | `BANCO_PROBLEMAS_NECESIDADES_FARMACIA.md` | Discovery B2B |
| 26 | `RESUMEN_ALIADO_GABRIEL_BARRIOS.md` | Anexo outreach (no zip default) |

**Docs hermanos** (referenciar, no duplicar): `docs/BRAND_ZONIX_PHARMA.md`, `docs/PLAN_REGULATORIO_PHARMA_VE.md`, `docs/PLAN_RX_VALIDATION.md`, `docs/product/logica-pagos-por-rol.md`, `docs/product/FLUJO_PAGO_ORDEN.md`.

---

## §E — Punto de partida (leer antes de editar)

1. [../Lanzamiento/README.md](../Lanzamiento/README.md) — orden de lectura y pendientes humanos § final  
2. [../audits/FORENSIC_DOCS_360_SKILLS_JUDGE_2026-08-09.md](../audits/FORENSIC_DOCS_360_SKILLS_JUDGE_2026-08-09.md) — hallazgos CRÍTICA/ALTA/MEDIA y §11.3 próximos pasos  
3. [../Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md](../Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md) §1 — fuente tiers  
4. [../Lanzamiento/PROYECCION_FINANCIERA_12M.md](../Lanzamiento/PROYECCION_FINANCIERA_12M.md) §0–§1.3 — fuente flujo Lean  

**Estado forense (mayo 2026):** pack **invertible** pre-seed VE; CRÍTICAS/ALTAS aplicadas; pendientes = datos humanos (VOLCADO, farmacias, cotizaciones, dictamen abogado/farmacéutico).

---

## §F — Flujo de trabajo (obligatorio)

```mermaid
flowchart TD
  read [Leer README + ANALISIS + anclas §C]
  audit [Auditoria multi-rol: coherencia y gaps]
  plan [Lista cambios priorizada P0-P2]
  ok [Esperar OK usuario]
  edit [Editar archivos acordados]
  forense [Actualizar ANALISIS pasada N]
  verify [Verificar rg + cascada cifras]
  read --> audit --> plan --> ok --> edit --> forense --> verify
```

### Fase 1 — Auditoría (solo lectura)

Por cada lente, marcar **OK / GAP / Sujeto a dictamen**:

| Lente | Qué revisar |
|-------|-------------|
| **CEO** | Narrativa única, T+90, contingencia founder |
| **CFO** | Cascada 101k, PROYECCION §1.1, waiver ~453, M12 cash |
| **COO** | SLAs, Rx, cold chain — PLAN_MODULO |
| **CTO/CISO** | Tests 399, §14 seguridad, NDA repo |
| **CPO** | PROPUESTA_* §2 vs §3 |
| **Legal/DPO** | SAFE, §4.4 datos, `[PENDIENTE dictamen abogado]` |
| **RA / farmacéutico** | Controlados, copy salud, MPPS |
| **CMO** | Meta CPL, offline, TikTok |
| **CRO ventas** | 4× Sales, cuota **45/60/70 + %GMV 8/7/5**, take-rate agregadores VE **20–30%** |
| **IR** | MENSAJE + CHECKLIST FAQ coherente con BRIEF |

Entregable: tabla **archivo → hallazgo → severidad → acción propuesta**.

### Fase 2 — Propuesta (antes de tocar archivos)

Prioridad:

- **P0:** inconsistencia numérica entre docs (rompe due diligence)  
- **P1:** gaps ALTA forense aún abiertos o copy confuso inversor  
- **P2:** polish MEDIA (claridad, enlaces, fechas, typos)  
- **P3:** completar `[PENDIENTE]` **solo** si el usuario pegó datos nuevos en el chat  

**Esperar OK explícito** del usuario antes de Fase 3.

### Fase 3 — Ejecución editorial

- Editar **mínimo** número de archivos para cerrar cada hallazgo.  
- Actualizar `> **Última actualización:**` en **cada** archivo tocado (fecha del día).  
- Añadir al pie de `ANALISIS_FORENSE.md` bloque **«Pasada N (fecha)»** con bullets de cambios.  
- **No** eliminar `[PENDIENTE]` del founder sin datos reales.  
- **No** afirmar dictamen legal/farmacéutico cerrado — usar *sujeto a dictamen*.

### Fase 4 — Verificación

```bash
cd /ruta/ZonixPharma-Backend
# Infra CorralX en pack (debe ser 0)
grep -riE 'corralx\.com|test\.corral' docs/Lanzamiento/ || true
# Coherencia anclas vigentes: 237.412, 50.260, 187.152, 172.152, 15.000, 39,57%
# Residuales (solo OK si [OBSOLETO]/hist./auditoría):
rg -n '174\.?102|111\.?988|29,?02%|18,?66%|~112k|Lean ~112' docs/Lanzamiento/ docs/plantillas/PROMPT_MEJORAR_PACK_LANZAMIENTO.md
grep -rE '101\.000|118\.000|135\.000|28\.057|72\.943|42\.209' docs/Lanzamiento/*.md || true
# Tests si actualizas VOLCADO §1.2
./vendor/bin/phpunit
```

Checklist mental:

- [ ] BRIEF y MENSAJE dicen lo mismo en capital, cap, M11, M12  
- [ ] CHECKLIST FAQ alineado con PROPUESTA B2B §11 (waiver, cuotas)  
- [ ] PROYECCION §1.1 nota waiver ~453 si se menciona M12 con waiver  
- [ ] Equipo **9 FTE + 2 freelance** coherente en BRIEF, PRESUPUESTO, ROLES_SKILLS  
- [ ] `ROLES_SKILLS_ZONIX.md` marcado **interno** en MENSAJE si aplica  

### Fase 5 — Cierre

Resumen al usuario en español:

1. Archivos tocados  
2. Hallazgos cerrados vs. residuales  
3. Pendientes humanos (lista desde README § pendientes)  
4. ¿Commit? — **solo si el usuario lo pide**

---

## §G — Reglas de edición (no negociables)

1. **No** `git commit` / `git push` / merge sin orden explícita.  
2. **No** crear archivos nuevos en `docs/Lanzamiento/` salvo que el usuario lo pida (preferir editar existentes).  
3. **No** inventar GMV, firmas reales, tasas MPPS, CPL de piloto ni métricas de tracción.  
4. **No** recalcular PROYECCION §1.1 ni cambiar tiers 101/118/135 sin OK.  
5. **No** sustituir placeholders del founder en VOLCADO por texto genérico convincente.  
6. **Sí** marcar `[PENDIENTE dictamen abogado]` / `[PENDIENTE asesor sector]` donde falte cita legal/sanitaria.  
7. **Sí** separar en PROPUESTA_*: **§2 debilidades** del actor vs. **§3 solución/oferta**.  
8. **Sí** enlazar `docs/BRAND_ZONIX_PHARMA.md` cuando se hable de identidad visual.  
9. Convención temporal: **T+0** = wire; **Day-D** = T+90; **Fase 0** = T+0→Day-D; **M1–M12** = post-Day-D.  
10. Tras cambiar tests en repo: actualizar VOLCADO §1.2 (comando, fecha, passed/skipped, commit hash).

---

## §H — Catálogo de mejoras típicas (elegir según auditoría)

| Categoría | Ejemplos de mejora |
|-----------|-------------------|
| **Coherencia numérica** | Misma cifra en README, BRIEF, MENSAJE, CHECKLIST; nota Base/Growth sin tabla M1–M12 |
| **Due diligence** | Guion demo 5 pasos; FAQ ~100 farmacias; borrador legal checklist; NDA proceso |
| **FP&A** | Nota waiver ~453 en PROYECCION; sensibilidad firmas en §7 |
| **Operación** | SLAs peak; playbook incidencias; export prudente regulatorio |
| **Producto/UX** | Onboarding 11 pasos; remarketing mes 1; hijo remoto Doña Luisa |
| **Legal/privacidad** | Retención recetas; DPIA SMS; contrato marco B2B mes 3+ |
| **Marketing** | Trigger CPL desviación; TikTok como canal; copy §9 B2C |
| **Equipo** | Tabla 9 FTE + 2 FL en BRIEF; roles en CUESTIONARIO |
| **Forense** | Nueva pasada documentada en ANALISIS; actualizar §11.4 |
| **Human-in-the-loop** | Guiar al founder a cerrar VOLCADO §1 (GitHub, % dedicación, referencias) sin inventar |

---

## §I — Skills agente (invocar según tarea)

| Tarea | Skills (orden sugerido) |
|-------|-------------------------|
| Contexto y anclas | `zonix-startup-context` |
| Números / tiers | `zonix-financial-model` |
| Redacción inversor | `zonix-investor-materials`, `zonix-fundraising-narrative` |
| Orquestación roles | `zonix-lanzamiento-roles` |
| Regulatorio VE | `zonix-regulatory-ve` |
| Legal empresa VE | `zonix-empresa-ve` (lente; no sustituye abogado) |
| Calendario piloto | `zonix-launch-piloto` |
| B2B farmacias | `zonix-b2b-sales` |

Ruta skill roles: `.agents/skills/zonix-lanzamiento-roles/SKILL.md`  
Índice skills: `docs/zonix/README.md`

---

## §J — Preguntas al usuario (rellenar al pegar el prompt)

Copia y completa lo que aplique a **esta sesión de mejora**:

```markdown
### Sesión de mejora — Zonix Pharma

| Campo | Respuesta |
|-------|-----------|
| **Objetivo** | ej. coherencia números / polish MEDIAS / preparar reunión X / cerrar FAQ |
| **Inversor objetivo** | ángel VE / family office / fondo LatAm / N/A |
| **¿Puedo recalcular PROYECCION §1.1?** | sí / no (default: **no**) |
| **¿Puedo cambiar tiers 101/118/135?** | sí / no (default: **no**) |
| **Datos nuevos del founder** | pegar aquí GitHub, % dedicación, referencias, farmacias, cotizaciones |
| **Commit al terminar** | sí / no |
| **Prioridad máxima** | P0 / P1 / P2 / solo auditoría sin editar |
```

---

## §K — Referencias @ para Cursor (adjuntar al chat)

```
@ZonixPharma-Backend/docs/Lanzamiento/README.md
@ZonixPharma-Backend/docs/Lanzamiento/ANALISIS_FORENSE.md
@ZonixPharma-Backend/docs/Lanzamiento/BRIEF_UNA_PAGINA.md
@ZonixPharma-Backend/docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md
@ZonixPharma-Backend/docs/Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md
@ZonixPharma-Backend/docs/Lanzamiento/CHECKLIST_PRE_INVERSOR.md
@ZonixPharma-Backend/docs/Lanzamiento/MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md
@ZonixPharma-Backend/docs/Lanzamiento/VOLCADO_RESPUESTAS_CUESTIONARIO.md
@ZonixPharma-Backend/docs/Lanzamiento/ROLES_SKILLS_ZONIX.md
@ZonixPharma-Backend/AGENTS.md
@ZonixPharma-Backend/docs/BRAND_ZONIX_PHARMA.md
```

Añade con `@` cualquier otro `.md` del pack que vayas a tocar en la sesión.

---

## Pega en Cursor

Copia desde aquí hasta el final del bloque:

---

**Contexto:** Mejora del pack inversor **Zonix Pharma** en `ZonixPharma-Backend/docs/Lanzamiento/` (**27 archivos** `.md` en raíz). Sigue el prompt meta [docs/plantillas/PROMPT_MEJORAR_PACK_LANZAMIENTO.md](PROMPT_MEJORAR_PACK_LANZAMIENTO.md) — §A a §K. Para auditoría forense masiva → [PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md](PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md) **v2.0**.

**Reglas rápidas:**
- Producto del pitch = **solo Zonix Pharma** (`zonixpharma.com`). Portfolio con **Corral X** = OK en CV/VOLCADO.
- **No** recalcular PROYECCION §1.1 ni cambiar tiers Lean/Base/Growth sin mi OK.
- **No** commit/push sin mi orden.
- **No** inventar `[PENDIENTE]` del founder ni métricas de piloto.
- Flujo: auditoría → lista P0–P2 → **esperar mi OK** → editar → actualizar ANALISIS_FORENSE (pasada N) → verificar cascada de anclas.
- **Anti-regresión:** no reintroducir como vigente **101/118/135k**, **111.988 / 174.102**, **39,57% / 29%**, Fase 0 **28.057 / 33.835**, Day-D **72.943 / 78.153**, M12 **42.209 / 40.831** sin etiqueta *histórico*.

**Anclas (no cambiar sin OK):** Lean **237.412** / cap **600k** / equity **~39,57%**; Fase 0 **50.260**; Day-D **187.152**; burn Y1 **172.152** (~**14.346**/mes); reserva **15.000**; Base/Growth **~157k / ~187k** *(hist.)*; M12 cash **`[PENDIENTE FP&A]`**; curva ~159 / ARPF ~52 legado; waiver ingreso **~−453** (cash waiver `[PENDIENTE FP&A]`); tests verificar CI.

**Skills:** `zonix-startup-context`, `zonix-financial-model`, `zonix-investor-materials`, `zonix-lanzamiento-roles`.

**Sesión:**

```markdown
[Pega aquí §J — tabla Sesión de mejora]
```

**Archivos @:** README, ANALISIS_FORENSE, BRIEF, PROYECCION, PRESUPUESTO, CHECKLIST, MENSAJE, VOLCADO (+ los que indiques).

**Primera acción:** Fase 1 auditoría multi-rol (tabla archivo → hallazgo → severidad → acción). **No edites** hasta mi OK.

---
