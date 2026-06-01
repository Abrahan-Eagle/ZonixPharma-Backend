# Auditoría forense — modelo de negocio vs "la biblia"

> **Fecha:** 1 junio 2026.  
> **Método:** Router [`zonix-lanzamiento-docs`](../../.agents/skills/zonix-lanzamiento-docs/SKILL.md) + buenas prácticas marketplace (Canvas, efecto de red, liquidez, moat, flywheel, chasm).  
> **Docs auditados:** 9 documentos de negocio en `docs/Lanzamiento/`.  
> **Finanzas:** coherencia numérica **verde** ([AUDITORIA_PROMPT_D_RONDA_2026-05.md](AUDITORIA_PROMPT_D_RONDA_2026-05.md)) — fuera de alcance salvo ARPF/WTP.

---

## Resumen ejecutivo

| Dimensión | Lectura |
|-----------|---------|
| **Fortalezas** | Modelo de cobro híbrido (cuota + % GMV) bien articulado vs agregadores; marcos **obviously-awesome**, **StoryBrand**, **SPIN**, **Bullseye**, **four-steps/mom-test** ya integrados en Prompt C; Market Type **existente** explícito; competitor-matrix y beachhead geográfico (Bella Florida + El Socorro). |
| **Gaps** | Faltan artefactos **marketplace estándar**: efecto de red/liquidez (chicken-and-egg), **moat** más allá de early mover, **Business Model Canvas** consolidado, **flywheel** explícito, **crossing-the-chasm** post-M6. WTP documentado pero **validación en campo** pendiente (ARPF ~50 placeholder). |
| **Oportunidad** | Una sesión Prompt C en **CONTEXTO §2** o **BRIEF** (efecto de red + moat) + nota flywheel en **PLAN §4** elevaría el pack a nivel inversor marketplace sin tocar cifras. |

**Veredicto:** **AMARILLO** — narrativa y unit economics sólidos; faltan capas de dinámica de marketplace para DD institucional.

---

## §1 Definición de "la biblia"

| Capa | Fuente | Contenido |
|------|--------|-----------|
| **Router Jarvis** | `.agents/skills/zonix-lanzamiento-docs/SKILL.md` | Obviously Awesome, SPIN, StoryBrand, Bullseye, four-steps, mom-test, WTP, Market Type, anti-patrones |
| **Skills dominio** | `zonix-startup-context`, `zonix-b2b-sales`, `zonix-launch-piloto`, `zonix-financial-model` | Cifras ancla, beachhead, Customer Development |
| **Marketplace estándar** | Literatura marketplace (Andreessen, Parker/Van Alstyne, Ries) | Canvas 9 bloques, multi-lado, efecto de red, liquidez, flywheel, moat, chasm |

**Anti-patrones explícitos en biblia Jarvis:** blue-ocean, 100m-leads agresivo, lean dogma — el pack **cumple** (CONTEXTO §2.9: mercado **existente**).

---

## §2 Matriz documento → marco → cumplimiento

| # | Documento | Marco biblia asignado | Estado | Evidencia (línea aprox.) |
|---|-----------|----------------------|--------|--------------------------|
| 1 | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) | Obviously Awesome + resumen modelo | **Cumple** | L8 B2B2C; L47 híbrido 25/40/55; L42 early mover + mercado existente |
| 2 | [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) | Obviously Awesome + Market Type | **Cumple** | §2.9 L121–130 tabla posicionamiento; L130 mercado **existente** |
| 3 | [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) | TAM/SAM/SOM + competitor-matrix + beachhead | **Cumple** | §1 TAM; §3 SOM bottom-up; §5 matriz L77–84; §6 beachhead |
| 4 | [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) | SPIN + pricing tiers | **Cumple** | §8.1 SPIN; §5 bandas GMV Basic/Pro/Enterprise |
| 5 | [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) | StoryBrand | **Cumple** | §2.2 BrandScript L51–65 (9 elementos) |
| 6 | [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) | Multi-lado (3er y 4º lado) | **Parcial** | Logística + pharmacist; **no** articula efecto de red entre lados |
| 7 | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) | four-steps + mom-test + go-to-market | **Cumple** | §4.0 L137–147 Customer Development; §2.6 pre-Day-D farmacias |
| 8 | [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) | monetizing-innovation / WTP | **Parcial** | §2.1 WTP L39–49; recalibración **post-Day-D** — sin plan mom-test pricing |
| 9 | [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) | Traction Bullseye | **Cumple** | §1.2 L33–43 anillos interior/medio/exterior |

**Cobertura marcos Jarvis:** **8/9 cumple o parcial** (88%). **Marketplace estándar:** ver §3 gaps.

---

## §3 Tabla de gaps — conceptos marketplace y desarrollo

| # | Concepto biblia | Qué exige | Estado pack | Sev. | Mejora propuesta |
|---|----------------|-----------|-------------|------|------------------|
| G1 | **Efecto de red / liquidez** | Cómo se resuelve chicken-and-egg oferta (farmacias) vs demanda (pacientes) al arranque | **Ausente** como sección explícita. Implícito en PLAN §2.6 (~28 farmacias pre-Day-D) y Bullseye interior (referidos) | **P1** | Añadir § en CONTEXTO §2 o BRIEF: secuencia **oferta primero** (4× Sales → catálogo) → demanda (Meta + referidos farmacia) |
| G2 | **Moat / defensibilidad** | Barreras sostenibles más allá de timing | **Parcial** — solo "early mover" (BRIEF L42). PERFIL L193 menciona DNA Farmatodo | **P1** | Añadir bullets: integración Rx + datos pedido, switching cost catálogo/histórico, uni-pharmacy, relación farmacéutico local |
| G3 | **Business Model Canvas** | Vista única 9 bloques | **Disperso** entre BRIEF, B2B §5, TERCER_LADO, UNIT | **P2** | Tabla resumen 1 página en CONTEXTO §2.10 o README inversor (opcional) |
| G4 | **Flywheel** | Ciclo virtuo: más farmacias → más pacientes → más GMV → más ARPF | **Ausente** explícito | **P2** | Párrafo flywheel en PLAN §4 post-Day-D o PERFIL §3 |
| G5 | **WTP validado** | Precio anclado a disposición a pagar medida, no solo placeholder | **Parcial** — UNIT §2.1 define marco; ARPF ~50 placeholder | **P1** | PLAN §4.0 fila extra: entrevistas pricing (mom-test) con 3 farmacias antes de fijar tier |
| G6 | **Crossing the chasm** | Expansión post-M6 solo con retención probada | **Parcial** — PERFIL §6.2 menciona expansión Tocuyito; sin criterio chasm | **P2** | PERFIL §6 cierre: criterios M6 (DoD PLAN §5) antes de SAM extendido |
| G7 | **Multi-lado articulado** | Valor cruzado farmacia ↔ paciente ↔ delivery ↔ pharmacist | **Parcial** — TERCER_LADO cubre logística/Rx; falta diagrama de interdependencia | **P2** | Diagrama o tabla en TERCER_LADO intro o CONTEXTO |
| G8 | **Take-rate / modelo híbrido** | Claridad vs agregadores | **Cumple** | — | — |
| G9 | **mom-test / four-steps** | Validación antes de escalar | **Cumple** | PLAN §4.0 | — |
| G10 | **Beachhead** | Foco geográfico acotado | **Cumple** | PERFIL §6 Bella Florida + El Socorro | — |

**Totales:** 0 P0 · **3 P1** · **4 P2** · 3 verde.

---

## §4 Mejoras concretas (accionables)

| ID | Prioridad | Doc destino | Sección | Acción |
|----|-----------|-------------|---------|--------|
| M1 | P1 | CONTEXTO_PITCH_Y_DECISIONES.md | §2.10 nuevo | **Liquidez marketplace:** secuencia T+0→Day-D oferta (farmacias + catálogo) antes de demanda masiva; métrica mínima ~28 activas |
| M2 | P1 | CONTEXTO_PITCH_Y_DECISIONES.md o BRIEF | §2 o Diferenciadores | **Moat:** Rx digital + uni-pharmacy + switching cost + datos históricos + pagos VE nativos |
| M3 | P1 | PLAN_LANZAMIENTO_COMERCIAL.md | §4.0 tabla | Fila **5. Pricing mom-test:** ≥3 entrevistas dueño farmacia sobre cuota 25/40/55 antes Day-D |
| M4 | P2 | CONTEXTO_PITCH_Y_DECISIONES.md | §2.10 | **Business Model Canvas** resumido (9 filas, sin cifras nuevas) |
| M5 | P2 | PLAN_LANZAMIENTO_COMERCIAL.md | §4.1 o §5 | **Flywheel** post-Day-D en 4 pasos |
| M6 | P2 | PERFIL_MERCADO_PILOTO.md | §6 cierre | **Chasm:** expandir SAM solo si DoD M6 (PLAN §5) cumplido |
| M7 | P2 | PROPUESTA_VALOR_TERCER_LADO.md | Intro | Tabla **4 lados** y quién paga a quién (sin duplicar PLAN_METODOS_PAGO) |

**Regla:** implementar M1–M3 requiere **OK founder** (sesión Prompt C); no editar PROYECCION §1.1 ni inventar GMV.

---

## §5 Qué NO tocar

| Área | Motivo |
|------|--------|
| PROYECCION §1.1 / PRESUPUESTO | Prompt D **verde** |
| Cifras ARPF/CAC/LTV | Solo recalibrar post-piloto según UNIT §2.1 |
| Legal/regulatorio MPPS/INHRR | P3 abogado/asesor |
| VOLCADO §1–§2 | P0 humano |
| Anti-patrones (blue-ocean, 100m-leads) | Pack ya alineado — no reintroducir |

---

## §6 Relación con auditorías previas

| Auditoría | Relación |
|-----------|----------|
| [AUDITORIA_PROMPT_B_RONDA_2026-05.md](AUDITORIA_PROMPT_B_RONDA_2026-05.md) | Prompt C ya aplicó SPIN, StoryBrand, Bullseye, mom-test — **esta auditoría** evalúa **cobertura marketplace** no cubierta en B |
| [AUDITORIA_PROMPT_D_RONDA_2026-05.md](AUDITORIA_PROMPT_D_RONDA_2026-05.md) | ARPF ~50 coherente; WTP gap es **proceso**, no número |
| [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) | Gaps G1–G7 registrados como mejoras modelo negocio |

---

*Generado en implementación plan «Auditoría modelo de negocio vs biblia». 0 ediciones en fuentes canónicas de finanzas.*
