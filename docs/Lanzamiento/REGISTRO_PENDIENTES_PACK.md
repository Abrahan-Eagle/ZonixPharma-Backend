# Registro consolidado de pendientes — Pack Lanzamiento

> **Última actualización:** 7 agosto 2026 (post forense v5 / Excel v4).  
> **Uso:** Completar celdas antes de reunión con inversor institucional o envío del data room cerrado.  
> **Fuente:** barrido `[PENDIENTE]` en `docs/Lanzamiento/` (no inventar datos).  
> **Plantilla detallada:** [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md).  
> **Pre-reunión:** [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §0.

### Pendientes FP&A / artefactos (v5)

| ID | Ítem | Estado |
|----|------|--------|
| FP&A-P10P90 | Cash P10/P90 en PROYECCION §6 / MODELO S4.2 | **`[PENDIENTE FP&A]`** — no usar ~25k/~52k legado |
| DOC-BRIEFING-DOCX | `BRIEFING_INVERSORES_VE_2026.docx` vs md | Regenerar antes de envío formal |
| DOC-PACK-DOCX | Pack Aliado `docx/` vs `md/` espejo | Regenerar Word si se envía zip aliado |
| EXCEL-CACHE | Valores Esc.1 cacheados en xlsx repo | Abrir en Excel/LibreOffice y guardar si hace falta data_only |

---

## Resumen por prioridad

| Prioridad | Cant. ítems únicos (aprox.) | Significado |
|-----------|---------------------------|-------------|
| **P0 — Bloqueante reunión institucional** | 8 | Due diligence formal o credibilidad founder |
| **P1 — Recomendado pre-Day-D** | 15 | Operación piloto, cotizaciones y narrativa marketplace |
| **P2 — Pre-envío inversor ángel / pre-seed** | 12 | Inversor, NDA, aprobación pack y artefactos modelo negocio |
| **P3 — Dictamen externo (no llenar en tabla)** | 7 | Abogado + farmacéutico asesor |
| **P4 — Plantillas operativas (muchas celdas)** | ~70+ | Equipo, farmacias, calendario T+X — ver VOLCADO §3–9 |

---

## P0 — Bloqueante reunión institucional

| ID | Ítem | Dueño | Doc fuente | Celda VOLCADO |
|----|------|-------|------------|---------------|
| P0-01 | URL **GitHub** (perfil u org Zonix Pharma) o acceso repo bajo NDA | Founder | VOLCADO §1, §1.2; CHECKLIST §2 | §1 fila GitHub; §1.2 tabla |
| P0-02 | **% dedicación** Zonix Pharma vs CETIAC/otros (declaración explícita) | Founder | CHECKLIST §2; README § pendientes | §1; CHECKLIST |
| P0-03 | **2–3 referencias** profesionales con permiso y contacto | Founder | CHECKLIST §2 | §1.2 tabla |
| P0-04 | **Aprobación founder** del pack antes de enviar | Founder | README final | README |
| P0-05 | **Demo en vivo** programada (fecha) | Founder | CHECKLIST §5–§6; VOLCADO §1.2 | §1.2 |
| P0-06 | Re-verificar **443 tests** + commit short pre-reunión | Founder | VOLCADO §1.2; BRIEF | §1.2 — snapshot **d7b7df4** (23 jun 2026, 443/1822 OK); re-ejecutar antes de cada reunión |
| P0-07 | Proceso **NDA** + data room cerrado (si fondo formal) | Founder + Legal | CHECKLIST §0.1 | — |
| P0-08 | **Métricas tracción** por producto (GMV/usuarios) si se citan en pitch | Founder | CHECKLIST §2; VOLCADO §1.2 | CHECKLIST; §1.2 |

---

## P1 — Recomendado pre-Day-D (operación)

| ID | Ítem | Dueño | Doc fuente | Celda VOLCADO |
|----|------|-------|------------|---------------|
| P1-01 | Cotización formal **HQ casa** (~USD 500/mes, San Diego / Av. Bolívar Norte) | Founder | README §8; CHECKLIST §4 | §3 |
| P1-02 | Cotización formal **valla** Lean (**USD 350**/mes, 3m×2m) | Founder | README §8; CHECKLIST §4 | §3 valla |
| P1-03 | Lista **5–8 farmacias prospecto** con contacto verificable | Sales / Founder | CHECKLIST §4; PLAN_COMERCIAL | §6 |
| P1-04 | **3+ cartas de intención** preliminares farmacias | Sales | CHECKLIST §4 | CHECKLIST |
| P1-05 | **2–3 abogados** VE con cotización (SAFE, T&C, marco farmacia) | Founder | README §8; CHECKLIST §4 | §8 |
| P1-06 | **2–3 contadores** VE con cotización (RIF, SENIAT) | Founder | README §8; CHECKLIST §4 | §8 |
| P1-07 | Candidatos **4× Sales B2B** (2–3 por rol mínimo) | Founder / Co-CEO | README §3; CHECKLIST §4 | §4 Sales |
| P1-08 | Candidatos **CS+CM, Marketing, Coordinador Partners** | Founder | CUESTIONARIO; VOLCADO §4–6 | §4–6 |
| P1-09 | Datos **Co-CEO** (nombre legal, % dedicación, fecha T+X) si ya definido | Founder | VOLCADO §1.5 | §1.5 |
| P1-10 | **Partners logísticos** (empresa delivery) en pipeline | Coordinador Partners | PROPUESTA_TERCER_LADO | §9 repartidores |
| P1-11 | **Fecha cierre inversión** (T+0 absoluto) para calendario T+30/60/90 | Founder | README §8 | §10 calendario |
| P1-12 | **Smoke E2E** OTC + Rx documentado | Founder + CTO | PLAN_MODULO §18 | — |
| P1-13 | Sección **liquidez / chicken-and-egg** en CONTEXTO §2.10 + BRIEF | Founder | **Cerrado** jun 2026 — ver CONTEXTO §2.10 |
| P1-14 | Sección **moat / defensibilidad** en CONTEXTO §2.11 + BRIEF | Founder | **Cerrado** jun 2026 — ver CONTEXTO §2.11 |
| P1-15 | **mom-test pricing** (≥3 entrevistas cuota 45/60/70) antes Day-D | Founder | PLAN §4.0 fila 5 | §5.1 notas Sales — **PENDIENTE** evidencia en VOLCADO (no marcar cerrado hasta minutas) |

---

## P2 — Pre-envío inversor (ángel / pre-seed)

| ID | Ítem | Dueño | Doc fuente |
|----|------|-------|------------|
| P2-01 | Nombre y datos del **primer inversor** candidato | Founder | CHECKLIST §1; VOLCADO §2 |
| P2-02 | Tipo inversor (ángel / fondo / family office) | Founder | VOLCADO §2 |
| P2-03 | **Ticket esperado** (25k / 50k / **237.412** Lean) | Founder | VOLCADO §2 |
| P2-04 | Experiencia inversor LatAm y en salud/farma | Founder | CHECKLIST §1 |
| P2-05 | Disponibilidad reunión + próximo paso | Founder | VOLCADO §2 |
| P2-06 | **NDA listo** si el inversor lo pide | Legal | CHECKLIST §1 |
| P2-07 | **Business Model Canvas** resumido (9 bloques) en CONTEXTO | Founder | **Cerrado** jun 2026 — CONTEXTO §2.12 |
| P2-08 | Párrafo **flywheel** post-Day-D en PLAN | Founder | **Cerrado** jun 2026 — PLAN §4.4 |
| P2-09 | Criterios **crossing-the-chasm** (expansión SAM post-M6) en PERFIL | Founder | **Cerrado** jun 2026 — PERFIL §6.5 |
| P2-10 | Tabla **4 lados** marketplace en PROPUESTA_TERCER_LADO | Founder | **Cerrado** jun 2026 — TERCER_LADO intro |
| P2-11 | **Modelo financiero consolidado** (.md + .xlsx) — recalibrar VAN/TIR e impuestos con FP&A/contador | Founder | [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) — **creado** jun 2026; validación externa **PENDIENTE** |
| P2-12 | Recalibrar **ARPF + GMV** en modelo tras ≥30 días post-Day-D | Founder + FP&A | MODELO §S7.3; UNIT §2.1 |

---

## P3 — Dictamen externo (marcadores en pack; no sustituir con texto generado)

| ID | Ítem | Responsable | Doc fuente |
|----|------|-------------|------------|
| P3-01 | Número y fecha **resolución MPPS** (tipos receta común/retenida/especial) | Farmacéutico + Abogado | PLAN_MODULO §4, §8 |
| P3-02 | Cita **MPPS/COFV** TTL receta en comunicación al paciente | Farmacéutico | PLAN_MODULO §Rx TTL |
| P3-03 | Tabla equivalencias **controlados** + UX obligatoria | Farmacéutico + Abogado | PLAN_MODULO §8 |
| P3-04 | Plantillas y plazos **INHRR** / farmacovigilancia | Farmacéutico + Abogado | PLAN_MODULO §11 |
| P3-05 | Revisión **T&C, privacidad, SAFE, contrato marco** farmacia | Abogado | ESTRUCTURA_LEGAL; CHECKLIST |
| P3-06 | Designación formal **DPO** / responsable datos salud | Abogado | ESTRUCTURA §4.4; PLAN_MODULO §14 |
| P3-07 | Plazo **retención digital receta** (doc 10 años vs purge código **90 días** `config/zonix.php`) | Abogado + Farmacéutico | PLAN_MODULO §14.4; ESTRUCTURA §4.4.1 |

---

## P4 — Celdas operativas en VOLCADO (llenar por sección)

Completar en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md):

| Sección VOLCADO | Contenido | Prioridad sugerida |
|-----------------|-----------|-------------------|
| §1 Founder | Cédula/edad opcional; GitHub; % tiempo | P0 |
| §2 Inversor | Todo el bloque | P2 (cuando haya lead) |
| §3 Inmueble + valla | 3 opciones HQ + proveedor valla | P1 |
| §4 Valla publicitaria | Proveedor + cotización | P1 |
| §5.1 Sales (×4) | Entrevistas y decisión | P1 |
| §5.2 CS+CM | Candidatos | P1 |
| §5.3 Marketing | Candidatos | P1 |
| §5.4 Coordinador Partners | Candidatos | P1 |
| §5.5–5.6 Abogado / Contador | Cotizaciones | P1 |
| §6 Farmacias (tabla 1–8) | Pipeline real | P1 |
| §7 Repartidores (tabla) | Partners logística | P1 |
| §8 Cronograma T+X | Fechas absolutas post-cierre | P1 |
| §9–§10 Decisiones / notas | — | P1 / — |

---

## Ya completado en pack (no duplicar como pendiente)

| Dato | Valor / estado |
|------|----------------|
| Founder nombre, contacto, LinkedIn | Abrahan Pulido — VOLCADO §1 |
| Párrafo «por qué soy el founder» | VOLCADO §1.1 |
| Ask capital **237.412 Lean Excel** @ SAFE cap **600k** (equity ~39,57%) | README §C, PRESUPUESTO §1, MODELO S1.3 |
| PROYECCION Lean M1–M12, Fase 0, caja M12 | PROYECCION §0–§1.3 |
| Coherencia numérica pack (cifras ancla) | README, BRIEF, PROYECCION |
| Tests backend **443** (verificar fecha pre-reunión) | README, BRIEF, VOLCADO §1.2 |

---

## Orden sugerido de cierre (founder)

1. P0-02, P0-01, P0-03, P0-06 (due diligence founder).  
2. P1-03, P1-04, P1-01, P1-02 (credibilidad operativa Valencia).  
3. P1-05, P1-06, P3-05 (marco legal).  
4. P2-* cuando exista inversor concreto.  
5. P1-12 smoke + P3 regulatorio antes de tráfico pagado masivo.

**Cerrados jun 2026:** P1-13 liquidez · P1-14 moat — CONTEXTO §2.10–§2.11. **P1-15 mom-test pricing:** reabierto (sin evidencia VOLCADO §5.1).

**Mejoras UniMOOC (11 jun 2026 — Steve Blank, ver `docs/zonix/ANALISIS_FORENSE_CURSO_UNIMOOC_2026-06.md`):**

| Mejora | Documento / sección |
|--------|---------------------|
| Canal referido / ciclo viral (QR mostrador, sin K-factor) | SUPUESTO_MARKETING §3.6 |
| Sanity check cuota por capacidad Sales (visitas/cierre `[PENDIENTE Sales Lead T+60]`) | PERFIL_MERCADO §3.1 |
| Red flags inversor corporativo (exclusividad, nación más favorecida) | CHECKLIST §7.8 |
| Nota tipo de propuesta dominante por perfil inversor | MENSAJE §4 |
| Columna «Hipótesis a validar (Fase 0)» en Canvas | CONTEXTO §2.12 |

**Auditoría completa con skills startup (11 jun 2026 — 3 lentes: FP&A, GTM, ops/legal; 40 hallazgos):**

*Remediado (críticos + altos):*

| Hallazgo | Documento / sección |
|----------|---------------------|
| Hipótesis por fase + pivot (Customer Development) | PLAN_LANZAMIENTO §0 |
| Gate Meta Ads pre-Day-D (solo test interno hasta §4.0 verde) | PLAN_LANZAMIENTO §3.3 |
| Discovery B2B obligatorio vs B2C informativo | PLAN_LANZAMIENTO §4.0 |
| Día en la vida del dueño + ranking 3+3 + tipo dominante | PROPUESTA_B2B §2.0 + §8.1 |
| Metas paciente etiquetadas como hipótesis post-Day-D | USUARIO_FINAL §6.2, §8 |
| SLA 60-90 min con `[PENDIENTE partner]` | USUARIO_FINAL §3.4 |
| Alianza asimétrica con partner (M7) | TERCER_LADO §A.11 |
| Equipo Fase 0 = customer development team | CUESTIONARIO §0 + caso práctico 2.3 |
| Nota dual denominador CAC (8 vs 15 firmas/mes; headline 139 intacto) | UNIT §3 |
| Puente use-of-funds ↔ burn Fase 0 | PRESUPUESTO §2.4 |
| Tasa de cierre `[PENDIENTE T+60]` + etiquetas `[LARGO PLAZO]` año 2-3 | PROYECCION §1.2, §2, §3 |
| § Inversor corporativo + nota MFN SAFE ≠ MFN comercial | ESTRUCTURA §2.6, §2.4 |
| Contingencia partner delivery (pickup-first) | PLAN_MODULO §15.5 |
| §6 PLAN_METODOS alineado al código real (`order_payments`, `payment_proof`) | PLAN_METODOS §6 |
| P0-06 snapshot `d7b7df4` (23 jun 2026, 443/1822 OK) | REGISTRO + CHECKLIST + VOLCADO |

*Backlog (medios/bajos — no implementados aún):*

| ID | Pendiente | Dueño |
|----|-----------|-------|
| GAP-01 | ALINEACION: re-run tests FE + BE pre-reunión | Founder |
| GAP-02 | BRIEF sensibilidad optimista: activas/revenue M12 (~207 / ~11.385 según PROYECCION §7.3) | Founder + FP&A |
| GAP-03 | Registro ART (§4.4.1 ESTRUCTURA) → formalizado como **P3-07** | Abogado + Farmacéutico |
| GAP-04 | PROYECCION §3.3: puente 480k éxito (farmacias × ARPF) o etiqueta `[PENDIENTE FP&A]` adicional | FP&A |
| GAP-05 | UNIT §8: margen bruto ~92% sin restar waiver/S&M — nota «margen post-waiver» | FP&A |
| GAP-06 | PLAN_METODOS §5: fila riesgo «pharmacist ausente» (hoy solo en PLAN_MODULO §16) | Founder |
| GAP-07 | PLAN_MODULO §14.4: nota 90 días código + `[PENDIENTE]` 10 años | **Parcial** — P3-07 |

---

## Próximas 3 sesiones (preparar inversor)

| Sesión | Archivo | Qué hacer |
|--------|---------|-----------|
| **1** | [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1 + §1.2 | GitHub o NDA repo; **% dedicación** Zonix; 2–3 referencias; `phpunit` + commit → P0-01/02/03/06 |
| **2** | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) §1–§2 | Lead concreto; Drive link; email data room; marcar P0-04 |
| **3** | [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §5–§6 | Demo **staging**; guion 30 min; fecha reunión → P0-05 |

---

*Actualizar este registro al cerrar cada ítem.*
