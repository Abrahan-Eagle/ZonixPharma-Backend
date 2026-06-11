---
name: zonix-lanzamiento-docs
description: Mejorar y auditar documentos en docs/Lanzamiento con marcos founder-playbook/shawnpang adaptados a Zonix Pharma VE. Router por archivo; cifras solo desde pack. Invocar zonix-startup-context primero.
---

# zonix-lanzamiento-docs

Skill **orquestadora** para editar el pack `docs/Lanzamiento/` con IA. Integra el informe [ANALISIS_FORENSE_BUSQUEDA_GITHUB_LANZAMIENTO_2026-05.md](../../docs/zonix/ANALISIS_FORENSE_BUSQUEDA_GITHUB_LANZAMIENTO_2026-05.md) **sin** instalar repos externos (`shawnpang`, `founder-playbook`, VoltAgent). Los marcos Tier A viven en skills `zonix-*` locales.

## Cuándo aplicar

- El usuario pide **mejorar**, **auditar**, **ampliar una sección** o **alinear** un `.md` del pack Lanzamiento.
- Sesión de mejora continua post-[INCOHERENCIAS_LANZAMIENTO_2026-05.md](../../docs/Lanzamiento/INCOHERENCIAS_LANZAMIENTO_2026-05.md).
- Dudas de qué skill `zonix-*` usar para un documento concreto.

## Obligatorio antes (siempre)

1. **`zonix-startup-context`** — cifras 101k / 118k / 135k, Day-D T+90, ARPF ~50.
2. Leer el **documento objetivo** completo (o la sección indicada).
3. Si hay cruce con producto: [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](../../docs/Lanzamiento/ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md).

## Router — documento → skill + marco adaptado

| Documento Lanzamiento | Skill principal | Marco adaptado (origen externo) | Sección típica a enriquecer |
|----------------------|-----------------|----------------------------------|----------------------------|
| PROPUESTA_VALOR_CLIENTE_B2B | `zonix-b2b-sales` | SPIN selling | Discovery call, matriz objeciones |
| PROPUESTA_VALOR_USUARIO_FINAL | `zonix-lanzamiento-docs` + `zonix-regulatory-ve` | StoryBrand (BrandScript) | Hero, problema, guía, plan, CTA |
| SUPUESTO_MARKETING_OFFLINE | `zonix-lanzamiento-docs` | Traction Bullseye | Canal → métrica → costo |
| CHECKLIST_PRE_INVERSOR | `zonix-investor-materials` | data-room + due diligence | FAQ técnica |
| MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA | `zonix-fundraising-narrative` | fundraising-email | Variantes corto/largo |
| PLAN_LANZAMIENTO_COMERCIAL | `zonix-launch-piloto` | four-steps (Customer Development) | Checklist pre-Day-D |
| UNIT_ECONOMICS | `zonix-financial-model` | monetizing-innovation (WTP) | Nota WTP vs ARPF placeholder |
| CONTEXTO_PITCH_Y_DECISIONES | `zonix-fundraising-narrative` | obviously-awesome | Posicionamiento vs competencia |
| BRIEF_UNA_PAGINA | `zonix-fundraising-narrative` + `zonix-startup-context` | obviously-awesome (1 pág) | Resumen ejecutivo sin duplicar cifras |
| PERFIL_MERCADO_PILOTO | `zonix-startup-context` + `zonix-investor-materials` | competitor-matrix (lente) | Farmatodo / Locatel / Farmalisto / Rappi |
| PROYECCION / PRESUPUESTO | `zonix-financial-model` | — (no marco externo de pricing) | Solo coherencia numérica |
| VOLCADO_RESPUESTAS_CUESTIONARIO | — | mom-test | **Solo humano** rellena datos reales |
| REGISTRO_PENDIENTES_PACK | `zonix-investor-materials` | — | Cerrar `[PENDIENTE]` |

## Diagnóstico rápido (estilo founder-playbook `diagnose`)

Si el usuario no especifica archivo, clasificar la tarea:

| Síntoma | Enfocar en |
|---------|------------|
| «El pitch no convence» | MENSAJE, BRIEF, CONTEXTO → `zonix-fundraising-narrative` |
| «Las farmacias no cierran» | PROPUESTA B2B → `zonix-b2b-sales` |
| «Los números no cuadran» | PROYECCION, UNIT, PRESUPUESTO → `zonix-financial-model` |
| «¿Qué falta para reunión inversor?» | CHECKLIST, README → `zonix-investor-materials` |
| «Calendario / Day-D» | PLAN_LANZAMIENTO → `zonix-launch-piloto` |
| «Copy paciente / ads» | PROPUESTA_USUARIO_FINAL + BRAND + SUPUESTO_MARKETING (Get/Keep/Grow §CAC) |
| «Varios problemas a la vez» | Una sesión = **un documento**; ordenar por P0 en REGISTRO_PENDIENTES |

## StoryBrand — plantilla paciente (PROPUESTA_USUARIO_FINAL)

Adaptación VE pharma; **no** claims terapéuticos.

1. **Héroe:** paciente en Valencia que necesita medicamentos OTC/Rx con entrega o pickup.
2. **Problema externo:** colas, stock opaco, receta rechazada sin guía.
3. **Problema interno:** estrés, tiempo perdido.
4. **Villano (metafórico):** fragmentación — no atacar farmacias físicas.
5. **Guía:** Zonix Pharma (claro, empático, con farmacéutico de la farmacia despachadora).
6. **Plan:** buscar farmacia → carrito → receta si Rx → pago manual → seguimiento.
7. **Éxito:** pedido entregado o retiro; receta validada.
8. **Fracaso a evitar:** pedido bloqueado sin explicación (alinear con estados app).
9. **CTA:** descargar app / pedir en farmacia aliada piloto.

## Traction Bullseye — plantilla marketing (SUPUESTO_MARKETING_OFFLINE)

Un **anillo** a la vez; métricas desde pack, no inventar presupuesto nuevo.

| Anillo | Canal piloto Zonix | Métrica leading | Fuente costo |
|--------|-------------------|-----------------|--------------|
| Interior | WhatsApp / referidos farmacia | Pedidos con `commerce_id` piloto | CAC en UNIT_ECONOMICS |
| Medio | Meta Ads (paciente) | CPI / primer pedido pagado | PRESUPUESTO marketing |
| Exterior | Valla Av. Bolívar / radio local | Código o UTM offline | SUPUESTO_MARKETING_OFFLINE |

Regla: **no** escalar anillo exterior hasta catálogo Day-D en ≥ N farmacias (meta PLAN §1.1).

## Get → Keep → Grow y CAC (UniMOOC M5 — Steve Blank)

Destilado curso [ANALISIS_FORENSE_CURSO_UNIMOOC_2026-06.md](../../docs/zonix/ANALISIS_FORENSE_CURSO_UNIMOOC_2026-06.md). **Cifras solo del pack** — esta sección es **metodología** para editar SUPUESTO_MARKETING_OFFLINE y cruzar con UNIT_ECONOMICS.

| Fase | Objetivo | Canal Zonix piloto | Métrica | Fuente cifra |
|------|----------|-------------------|---------|--------------|
| **Get (captar)** | Nuevas farmacias / nuevos pacientes | Sales **físico** (B2B) · Meta Ads **web** (B2C post-Day-D) | Firmas farmacia · CPI / 1er pedido pagado | CAC farmacia **139** (UNIT); PRESUPUESTO marketing |
| **Keep (fidelizar)** | Retención panel + repeat purchase | Onboarding commerce · CS Rx · push FCM | Churn farmacia · repeat M2 paciente | Churn **5%** ref. (UNIT) |
| **Grow (aumentar)** | Más ticket / más productos mismo cliente | Cross-sell OTC post-Rx · upsell banda GMV | ARPF · items/pedido | ARPF **~50** placeholder |

### CAC web vs físico (no confundir)

| Canal | Lado | Cómo modelar en pack | Regla agente |
|-------|------|----------------------|--------------|
| **Físico** | Farmacia B2B | CAC **139** en UNIT_ECONOMICS | Visita Sales T+60–T+90; no mezclar con CPI Meta |
| **Web** | Paciente B2C | Presupuesto Meta en PRESUPUESTO + SUPUESTO_MARKETING | **No** escalar paid hasta N farmacias activas (`zonix-startup-context` bilateral) |
| **Viral / referido** | Ambos | WhatsApp farmacia → paciente (anillo interior Bullseye) | Medir pedidos con `commerce_id` piloto; no inventar K-factor |

**Errores a evitar al editar marketing pack (M5):**

1. Optimizar CPI paciente **antes** de oferta farmacia (catálogo vacío).
2. Usar ejemplo US del curso (AdWords 0,50€/click) como cifra Zonix — solo lógica «coste visita → coste conversión».
3. Confundir **tráfico web** con **adquisición pagada completada** (pedido ≥ `pending_payment`).

Al proponer texto en SUPUESTO_MARKETING_OFFLINE: una fila por canal con métrica leading + enlace a línea PRESUPUESTO; marcar `[Requiere Marketing Lead]` si falta dato real post-piloto.

## Anti-patrones (marcos a NO aplicar)

| Marco externo | Por qué evitar en Zonix | Usar en su lugar |
|---------------|-------------------------|------------------|
| `blue-ocean-strategy` | Zonix compite en categoría **existente** (marketplace farmacia) | `zonix-startup-context` Market Type + obviously-awesome |
| `100m-leads` | Paid agresivo multi-canal no aplica a piloto Valencia acotado | Traction Bullseye + PRESUPUESTO marketing |
| `lean-startup` como dogma | Solapa con four-steps; riesgo de pivot narrativo sin dato | four-steps + mom-test en `zonix-launch-piloto` |
| `founder-os` / VoltAgent hubs | PRDs US y miles de skills; divergen del pack | Skills `zonix-*` locales |
| HIPAA / fintech US | No dictamen VE pharma | `zonix-regulatory-ve`, `zonix-payments` |

## Tensiones entre marcos (resolver explícitamente)

1. **mom-test vs four-steps:** entrevistas sin sesgar (mom-test) **antes** de escalar Customer Validation (four-steps §4.0 PLAN). No saltar a «validación» con solo entusiasmo social.
2. **obviously-awesome vs blue-ocean:** posicionar en mercado existente con atributos únicos — **no** «océano azul» sin competencia.
3. **100m-offers vs monetizing-innovation:** waiver y urgencia comercial (offers) deben respetar bandas de precio y fila waiver en PROYECCION (pricing).
4. **crossing-the-chasm vs four-steps:** four-steps = pre-Day-D; chasm = expansión **post** M6 solo con retención probada.

## Reglas de edición (no negociables)

1. **Cifras:** solo PROYECCION, PRESUPUESTO, UNIT_ECONOMICS, README pack — nunca regenerar tier/cap/ARPF sin fuente.
2. **Legal/regulatorio:** MPPS, INHRR, Rx → `zonix-regulatory-ve`; marcar `[PENDIENTE abogado/asesor]`.
3. **Producto:** features citadas deben existir en ALINEACION o código; si no, «[roadmap]».
4. **Una sesión = una sección** por documento (misma disciplina que INCOHERENCIAS).
5. **VOLCADO / REGISTRO:** la IA propone texto; el founder valida datos personales y pendientes.
6. Tras cambio material: proponer entrada en INCOHERENCIAS o REGISTRO_PENDIENTES; `documentar-avances` si cierra hito.

## Prompt sugerido al usuario (copiar)

**Pack completo A–F:** [docs/Lanzamiento/PROMPT_PACK_LANZAMIENTO.md](../../docs/Lanzamiento/PROMPT_PACK_LANZAMIENTO.md).

```
Mejora [ARCHIVO.md] en docs/Lanzamiento usando zonix-lanzamiento-docs.
Sección: [nombre]. Cifras solo del pack. Una sección por respuesta.
```

## Skills relacionadas

- `zonix-startup-context` (obligatoria)
- `zonix-lanzamiento-roles` (qué rol humano declara)
- `zonix-investor-materials` (índice data room)
- Skills por fila de la tabla router arriba
- `documentar-avances` al cerrar sesión relevante

## Referencia externa (solo lectura humana o fetch puntual)

- [research_links.md](../../docs/zonix/research_links.md) — URLs GitHub; **no** `npx skills add` masivo en CI del repo.
- Repos Tier A: `getagentseal/founder-playbook`, `shawnpang/startup-founder-skills` — lente ya destilada aquí y en skills hijas.
