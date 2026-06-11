---
name: zonix-investor-materials
description: Materiales inversor Zonix Pharma — data room ligero, checklist due diligence, gaps pack Lanzamiento. Alineado a docs/Lanzamiento y CHECKLIST_PRE_INVERSOR. No sustituye abogado ni contador.
---

# zonix-investor-materials

Adaptación de [data-room](https://github.com/shawnpang/startup-founder-skills/tree/main/skills/data-room) y business-case patterns (antigravity-awesome-skills). Invocar `zonix-startup-context` primero.

## Cuándo aplicar

- Preparar o auditar envío a inversionista (pre-seed).
- Organizar data room ligero (22 archivos `.md` en `docs/Lanzamiento/`).
- Gap analysis antes de reunión — cruzar con [CHECKLIST_PRE_INVERSOR.md](../../docs/Lanzamiento/CHECKLIST_PRE_INVERSOR.md).

## Skill principal por documento pack

Evita usar solo `zonix-lanzamiento-roles` para todo el pack.

| Documento pack | Skill principal |
|----------------|-----------------|
| ESTRUCTURA_LEGAL_Y_EQUITY | `zonix-empresa-ve` |
| PLAN_LANZAMIENTO_COMERCIAL | `zonix-launch-piloto` |
| PROYECCION_FINANCIERA_12M / PRESUPUESTO / UNIT_ECONOMICS | `zonix-financial-model` |
| MENSAJE_ENVIO / pitch / CHECKLIST_PRE_INVERSOR | `zonix-fundraising-narrative` + `zonix-investor-materials` |
| PLAN_MODULO_OPERATIVO / PLAN_RX (regulatorio) | `zonix-regulatory-ve` + `zonix-prescriptions` (código) |
| PROPUESTA_VALOR_CLIENTE_B2B | `zonix-b2b-sales` |
| PROPUESTA_VALOR_USUARIO_FINAL / SUPUESTO_MARKETING | **`zonix-lanzamiento-docs`** (StoryBrand / Bullseye) |
| PROPUESTA_VALOR_TERCER_LADO | `zonix-lanzamiento-roles` + doc específico |
| Cualquier mejora pack (router) | **`zonix-lanzamiento-docs`** + skill de la fila |
| PLAN_METODOS_PAGO | `zonix-payments` (modo piloto) + doc |
| Matriz roles (roles_matrix.json — fuera del pack) | `zonix-lanzamiento-roles` |
| README / BRIEF | `zonix-startup-context` + `zonix-investor-materials` |

## Índice data room (canónico)

| # | Documento | Categoría |
|---|-----------|-----------|
| 0 | README.md | Índice + cifras ancla |
| 1 | BRIEF_UNA_PAGINA.md | Ejecutivo |
| 2 | CONTEXTO_PITCH_Y_DECISIONES.md | Estrategia |
| 3 | PERFIL_MERCADO_PILOTO.md | Mercado TAM/SAM/SOM |
| 4 | UNIT_ECONOMICS.md | Unit economics |
| 5 | PROYECCION_FINANCIERA_12M.md | Finanzas 12m |
| 6 | ESTRUCTURA_LEGAL_Y_EQUITY.md | Legal / SAFE |
| 7 | CHECKLIST_PRE_INVERSOR.md | Reunión / FAQ |
| 8 | PLAN_LANZAMIENTO_COMERCIAL.md | GTM / Fase 0 |
| 9 | PROPUESTA_VALOR_CLIENTE_B2B.md | B2B farmacia |
| 10 | PROPUESTA_VALOR_USUARIO_FINAL.md | B2C paciente |
| 11 | PROPUESTA_VALOR_TERCER_LADO.md | Delivery + pharmacist |
| 12 | PRESUPUESTO_12_MESES_REFERENCIA.md | Presupuesto tiers |
| 13 | MONTOS_REFERENCIA_INTERNET.md | Fuentes precios |
| 14 | SUPUESTO_MARKETING_OFFLINE.md | Offline |
| 15 | PLAN_METODOS_PAGO.md | Pagos VE |
| 16 | PLAN_MODULO_OPERATIVO_CLAVE.md | Ops / Rx / seguridad |
| 17 | CUESTIONARIO_EQUIPO_PILOTO.md | Equipo |
| 18 | VOLCADO_RESPUESTAS_CUESTIONARIO.md | Captura respuestas |
| 19 | MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md | Outreach |
| 20 | ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md | Cruce pack ↔ producto |
| 21 | REGISTRO_PENDIENTES_PACK.md | Pendientes P0–P4 |

> Históricos **no versionados** (eliminados del repo): `ANALISIS_FORENSE.md` (pack) y `ROLES_SKILLS_ZONIX.md` — la matriz de roles canónica vive en [roles_matrix.json](../../docs/zonix/roles_matrix.json) + skill `zonix-lanzamiento-roles`.

Referencias técnicas fuera de Lanzamiento (due diligence profunda):

- [docs/PLAN_REGULATORIO_PHARMA_VE.md](../../docs/PLAN_REGULATORIO_PHARMA_VE.md)
- [docs/PLAN_RX_VALIDATION.md](../../docs/PLAN_RX_VALIDATION.md)
- [docs/BRAND_ZONIX_PHARMA.md](../../docs/BRAND_ZONIX_PHARMA.md)

## Checklist due diligence (agente)

### Finanzas

- [ ] Cifras README = BRIEF = MENSAJE (capital, cap, burn, M11)
- [ ] PROYECCION §1.1 suma burn coherente
- [ ] UNIT_ECONOMICS alineado ARPF/CAC/LTV
- [ ] Tres tiers documentados (101 / 118 / 135)

### Legal / empresa VE

- [ ] SAFE y cap table en ESTRUCTURA_LEGAL
- [ ] Vehículo C.A. y pasos constitución descritos
- [ ] Privacidad / datos salud referenciados (no inventar plazos retención)

### Producto / técnico

- [ ] Stack construido (tests backend citados en ANALISIS_FORENSE)
- [ ] Flujo Rx y roles app documentados
- [ ] Seguridad recetas: PLAN_MODULO §14

### Regulatorio

- [ ] MPPS/INHRR mencionados con [PENDIENTE] donde falte dictamen
- [ ] Farmacéutico colegiado por farmacia (no liaison interno piloto)

### Equipo

- [ ] Headcount piloto en BRIEF = PRESUPUESTO
- [ ] Externos contador/abogado/asesor antes Day-D público

## Formato de informe de gaps

Patrón checklist (lente [awesome-econ-ai-stuff](https://github.com/meleantonio/awesome-econ-ai-stuff) — revisión pack, no modelos econométricos):

```markdown
## Gap [ID]
- Severidad: CRÍTICA | ALTA | MEDIA
- Documento: ...
- Hallazgo: ...
- Acción sugerida: ...
- Responsable humano: Contador | Abogado | Asesor RA | Founder
- Evidencia pack: enlace § o archivo Lanzamiento
- Estado: ABIERTO | CERRADO | [PENDIENTE humano]
```

Cruzar hallazgos con [REGISTRO_PENDIENTES_PACK.md](../../docs/Lanzamiento/REGISTRO_PENDIENTES_PACK.md) — no duplicar ítems ya cerrados (ver § «Ya completado en pack»).

## Inversor corporativo / estratégico (UniMOOC M7 L7.13)

Si una empresa grande (cadena, distribuidor, agregador) propone **invertir o aliarse con exclusividad**, antes de incorporarlo al data room o al pitch:

- **Red flags a detectar en el term sheet:** cláusula de *nación más favorecida* (mejor trato garantizado vs terceros), **exclusividad** (bloquea otras farmacias/cadenas en piloto), acceso a tecnología/datos como objetivo real.
- Pregunta de Blank: «¿qué hacen ellos por la creación de **mi** empresa?» — si la respuesta es solo capital + condiciones restrictivas, escalar.
- Acción agente: marcar `[PENDIENTE abogado]` y derivar a `zonix-legal-contracts-ve` + `zonix-empresa-ve`; **no** redactar cláusulas ni aceptar términos en nombre del founder.

## Lo que el agente NO debe generar

- Contratos legales vinculantes
- Dictamen fiscal SENIAT
- PDF pitch deck final (solo outline → `zonix-fundraising-narrative`)
- Números nuevos sin fuente pack

## Skills relacionadas

- `zonix-startup-context`
- `zonix-financial-model` — auditoría numérica
- `zonix-fundraising-narrative` — mensaje y bullets
- `zonix-empresa-ve` — legal / SAFE / constitución
- `zonix-launch-piloto` — GTM y calendario piloto
- `zonix-lanzamiento-roles`
- `zonix-legal-contracts-ve` — gaps en contratos B2B/SAFE
- `zonix-regulatory-ve` — copy salud / Rx
