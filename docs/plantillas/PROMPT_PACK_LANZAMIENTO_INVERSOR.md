# Prompt meta — Pack Lanzamiento Inversor (pre-seed)

> **Copia en repo Zonix Pharma** (canónica aquí). Si existe copia en jarvis-skills-library / otro repo, sincronizar hacia este path — no usar rutas absolutas de máquina.
>
> **Canon Zonix Pharma (ago 2026):** ask único SAFE Lean **USD 237.412** @ cap **600k**. Las tablas Lean/Base/Growth abajo son **plantilla genérica / histórico pre-v4** — al generar pack Zonix, **no** reintroducir Base/Growth como ask vigente.

> **Versión:** 1.0 — mayo 2026  
> **Uso:** copiar este archivo (o la sección «Pega en Cursor» al final) en un chat de Cursor/Claude al arrancar un **proyecto nuevo**.  
> **Gold standard de referencia (este repo):** [`../Lanzamiento/README.md`](../Lanzamiento/README.md) — pack Zonix Pharma completo (~21 archivos `.md` enlazados). Archivos modelo recomendados: `BRIEF_UNA_PAGINA.md`, `PROYECCION_FINANCIERA_12M.md`, `PROPUESTA_VALOR_CLIENTE_B2B.md` (§2 flaquezas vs bondades).

---

## Cómo usar este prompt

1. Rellena el **cuestionario obligatorio** (§B) y el **contexto libre** (§C).
2. Pega en Cursor: **§A (rol)** + **§D (fases)** + tu cuestionario/contexto + **§F (referencias @)**.
3. El agente debe **proponer cifras ancla y árbol de archivos** y **esperar tu OK** antes de escribir todos los `.md`.
4. Salida destino: `{{REPO}}/docs/Lanzamiento/` (crear carpeta si no existe).

Variables a sustituir antes de enviar:

| Variable | Ejemplo |
|----------|---------|
| `{{PROJECT_NAME}}` | Zonix Pharma |
| `{{PROJECT_SLUG}}` | zonix-pharma |
| `{{REPO}}` | ruta del backend o monorepo donde vive `docs/` |
| `{{COUNTRY_PILOT}}` | Venezuela |
| `{{CITY_PILOT}}` | Valencia |

---

## §A — Rol y reglas fijas

**Rol:** actúas como **arquitecto de data room pre-seed**. Redactas en **español**, tono **inversor** (claro, auditable, sin hype vacío). Cada afirmación fuerte debe tener **supuesto explícito** o **fuente**.

**Reglas obligatorias:**

1. **No** hacer `git commit`, `git push` ni merge sin orden explícita del usuario.
2. **No** generar código de producto (Laravel, Flutter, skills JARVIS, CI) salvo que el usuario lo pida aparte.
3. **Preguntar** antes de crear archivos fuera de `docs/Lanzamiento/` del repo indicado.
4. **No inventar** tasas de quiebra, GMV de competidores ni regulación: usar **placeholder**, **rango** o **fuente con enlace** + **disclaimer** (proxy LatAm ≠ proyección directa al país piloto).
5. Marcar **`[PENDIENTE dictamen abogado]`**, **`[PENDIENTE asesor sector]`** en legal, salud, datos personales o contratos B2B cuando aplique.
6. **Separar narrativa** en propuestas de valor: **§2 = flaquezas/debilidades** del cliente; **bondades** en bloque explícito o en **§3** (oferta detallada). No mezclar dolor y solución en la misma viñeta sin subtítulo.
7. **Convención temporal** (usar en todo el pack salvo que el usuario defina otra):
   - **T+0** = cierre de inversión (entra el capital).
   - **Day-D** = lanzamiento público del piloto (día 0 operativo).
   - **Fase 0** = período **T+0 → Day-D** (setup legal, equipo, pre-firmas); su **outflow** reduce la caja al inicio de **M1**.
   - **M1–M12** = meses **post-Day-D** (modelo financiero y burn operativo).
8. **Cifras ancla:** definir una **tabla maestra** al inicio de la generación y **replicarla** (cascada) en: `README.md`, `BRIEF_UNA_PAGINA.md`, `MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md`, `CHECKLIST_PRE_INVERSOR.md`, `UNIT_ECONOMICS.md`, `PROYECCION_FINANCIERA_12M.md`; y en `docs/active_context.md` **solo si** el repo del proyecto ya usa ese archivo.
9. Cerrar con **`ANALISIS_FORENSE.md`**: auditoría multi-rol (CEO, CFO, legal, operaciones, etc.) y hallazgos **ALTA / MEDIA / BAJA**.
10. Actualizar **`Última actualización`** en cada archivo tocado (fecha del día de generación).

**Fuera de alcance de este prompt:** planes en `.cursor/plans/`, código fuente, deploy, contratos firmables finales.

---

## §B — Cuestionario obligatorio

Copia, rellena y adjunta al mensaje inicial:

```markdown
### Cuestionario — {{PROJECT_NAME}}

| Campo | Respuesta |
|-------|-----------|
| **Marca / producto** | |
| **País piloto** | |
| **Ciudad / zona piloto** | |
| **Problema (1 frase)** | |
| **Actor 1 (usuario final)** | nombre + dolor principal |
| **Actor 2 (cliente B2B)** | nombre + dolor principal |
| **Actor 3 (tercero / partner)** | nombre + rol (ej. logística, validador) |
| **Modelo de ingreso** | SaaS / take-rate / híbrido (cuota + %) / otro |
| **Competidor de referencia** | (para comparar comisión o UX) |
| **Capital pedido (ask único Lean — Zonix)** | USD (ej. 237.412); Base/Growth = hist. |
| **SAFE cap post-money** (si aplica) | USD o N/A |
| **Runway** | Fase 0 (días) + meses post-Day-D |
| **Day-D en días desde T+0** | ej. 90 |
| **Equipo FTE planificado** | roles + sueldos USD/mes placeholder |
| **ARPU / ARPF / ticket** | valor o "placeholder hasta piloto" |
| **CAC estimado** | USD o método |
| **Churn mensual supuesto** | % o "mediana SMB LatAm 5%" |
| **Stack técnico (credibilidad)** | ej. "Laravel N tests, Flutter analyze OK" o N/A |
| **Regulación / restricciones sector** | |
| **Qué NO prometer en piloto** | |
```

---

## §C — Contexto libre (founder)

```markdown
### Contexto libre

(pega aquí: visión, ventaja unfair, por qué ahora, relación con otro producto del ecosistema, miedos del inversor a despejar, etc.)
```

---

## §D — Fases de trabajo (ejecutar en orden)

### Fase 1 — Validar inputs

- Leer cuestionario + contexto libre.
- Si faltan datos **críticos** (capital, actores, modelo de ingreso, Day-D), hacer **hasta 5 preguntas** concretas. No generar el pack completo hasta tener respuesta o supuestos **explícitos** acordados con el usuario.

### Fase 2 — Propuesta de estructura (esperar OK)

Entregar en el chat:

1. **Árbol de archivos** bajo `docs/Lanzamiento/` (lista §E; omitir o renombrar según sector).
2. **Tabla de cifras ancla (Base)** con al menos:

| Concepto | Valor propuesto |
|----------|-----------------|
| Capital pedido | |
| Fase 0 outflow | |
| Caja inicio M1 (post Fase 0) | |
| Burn tramos (M1–M12) | |
| Revenue año 1 (M1–M12) | |
| Mes de equilibrio mensual (revenue ≥ burn) | |
| Cash cierre M12 | |
| Clientes/activos M11 / M12 (si marketplace) | |

3. **Convención T+0 / Day-D / Fase 0** en una línea.

**Detenerse y pedir confirmación del usuario** antes de Fase 3.

### Fase 3 — Generación de documentos (orden recomendado)

1. `BRIEF_UNA_PAGINA.md`
2. `CONTEXTO_PITCH_Y_DECISIONES.md`
3. `PERFIL_MERCADO_PILOTO.md`
4. `UNIT_ECONOMICS.md`
5. `PROYECCION_FINANCIERA_12M.md` (incluir **§0 Fase 0** + tabla **§1.1** mes a mes + escenarios)
6. `PRESUPUESTO_12_MESES_REFERENCIA.md` (Lean / Base / Growth)
7. `MONTOS_REFERENCIA_INTERNET.md` (fuentes y benchmarks)
8. `ESTRUCTURA_LEGAL_Y_EQUITY.md`
9. `PLAN_LANZAMIENTO_COMERCIAL.md` (T+30, T+60, Day-D, equipo, HQ, tech)
10. `PROPUESTA_VALOR_CLIENTE_B2B.md` — **§2 Flaquezas** + bondades separadas donde aplique
11. `PROPUESTA_VALOR_USUARIO_FINAL.md`
12. `PROPUESTA_VALOR_TERCER_LADO.md`
13. Documentos operativos de sector (ver §E; omitir si no aplican)
14. `CUESTIONARIO_EQUIPO_PILOTO.md` + `VOLCADO_RESPUESTAS_CUESTIONARIO.md`
15. `MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md`
16. `CHECKLIST_PRE_INVERSOR.md`
17. `ANALISIS_FORENSE.md`
18. `README.md` (índice + tabla comparativa escenarios + cifras ancla)

### Fase 4 — Cascada numérica

- Buscar en el pack referencias obsoletas a cifras (grep mental: capital, burn, cash M12, equilibrio).
- Alinear `README`, `BRIEF`, `MENSAJE`, `CHECKLIST`, `UNIT_ECONOMICS`, `PROYECCION` §1.3–1.4.

### Fase 5 — Cierre

- Entregar al usuario **tabla resumen de cifras ancla** en el chat.
- Listar **pendientes** `[PENDIENTE …]` y **supuestos** que requieren validación en piloto real.

---

## §E — Árbol de salida (plantilla)

Ruta base: `{{REPO}}/docs/Lanzamiento/`

| Archivo | Función |
|---------|---------|
| `README.md` | Índice; orden lectura inversor (30 min) y equipo (90 min); tabla Lean/Base/Growth |
| `BRIEF_UNA_PAGINA.md` | Resumen ejecutivo ancla |
| `CONTEXTO_PITCH_Y_DECISIONES.md` | Decisiones, diferenciación, glosario inversor |
| `PERFIL_MERCADO_PILOTO.md` | TAM/SAM/SOM, competencia, geografía piloto |
| `UNIT_ECONOMICS.md` | CAC, LTV, payback, break-even por activo o usuario |
| `PROYECCION_FINANCIERA_12M.md` | Fase 0, flujo M1–M12, capital deployment, sensibilidad |
| `PRESUPUESTO_12_MESES_REFERENCIA.md` | Desglose líneas; 3 escenarios |
| `MONTOS_REFERENCIA_INTERNET.md` | Fuentes web y rangos de mercado |
| `PLAN_LANZAMIENTO_COMERCIAL.md` | Calendario T+X, hiring, HQ, tech, metas comerciales |
| `PROPUESTA_VALOR_CLIENTE_B2B.md` | Cliente pagador / supply side |
| `PROPUESTA_VALOR_USUARIO_FINAL.md` | Demand side |
| `PROPUESTA_VALOR_TERCER_LADO.md` | Partners (logística, validadores, etc.) |
| `ESTRUCTURA_LEGAL_Y_EQUITY.md` | SAFE, cap table, vehículo legal |
| `CHECKLIST_PRE_INVERSOR.md` | FAQ, guion reunión, Q&A equilibrio |
| `MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md` | Email/WhatsApp + bullets pitch |
| `ANALISIS_FORENSE.md` | Auditoría multi-rol del pack |
| `PLAN_METODOS_PAGO.md` | *Si aplica* (pagos locales, conciliación) |
| `PLAN_MODULO_OPERATIVO_CLAVE.md` | *Si aplica* (módulo regulado: Rx, KYC, cadena frío, etc.) |
| `SUPUESTO_MARKETING_OFFLINE.md` | *Si aplica* (OOH, radio, flyers) |
| `CUESTIONARIO_EQUIPO_PILOTO.md` | Entrevistas por rol |
| `VOLCADO_RESPUESTAS_CUESTIONARIO.md` | Plantilla captura respuestas founder |

**Adaptación por sector:**

- **Sin receta / salud regulada:** omitir módulo Rx; sustituir por compliance del sector (ej. KYC, licencias).
- **Sin delivery:** ajustar `PROPUESTA_VALOR_TERCER_LADO` a partners que sí existan (pagos, proveedores).
- **B2B puro (sin marketplace):** renombrar “activas” por “clientes pagadores” o “MRR” en proyección.

**Patrón §2 B2B (obligatorio si hay cliente B2B):**

```markdown
## 2. Flaquezas que tiene hoy
(párrafo marco: debilidades aquí; bondades detalladas en §3 salvo bloque explícito)

1. ...
2. ...
#### Bondades de ... (vía {{PROJECT_NAME}})   ← solo donde el usuario pida anticipo en §2
3. ...
#### Misma unidad económica en {{PROJECT_NAME}} (ilustrativo)   ← comparativa vs competidor si aplica
```

Incluir **benchmarks con fuente** solo como proxy (ej. transformación digital LatAm ~70% proyectos no cumplen objetivos — EY vía prensa; gestión manual en retail sectorial — artículo país vecino). **Disclaimer:** no son tasas de quiebra.

---

## §F — Pega esto en Cursor (mensaje inicial tipo)

```text
Sigue el prompt maestro en @jarvis-startup/docs/PROMPT_PACK_LANZAMIENTO_INVERSOR.md (o la copia en @ZonixPharma-Backend/docs/plantillas/PROMPT_PACK_LANZAMIENTO_INVERSOR.md).

Referencias de calidad (gold standard):
- @ZonixPharma-Backend/docs/Lanzamiento/README.md
- @ZonixPharma-Backend/docs/Lanzamiento/BRIEF_UNA_PAGINA.md
- @ZonixPharma-Backend/docs/Lanzamiento/PROYECCION_FINANCIERA_12M.md
- @ZonixPharma-Backend/docs/Lanzamiento/PROPUESTA_VALOR_CLIENTE_B2B.md (§2 flaquezas vs bondades)

Destino: {{REPO}}/docs/Lanzamiento/
Proyecto: {{PROJECT_NAME}}

[Cuestionario rellenado §B]
[Contexto libre §C]

Ejecuta §D Fase 1 y Fase 2; espera mi OK antes de generar todos los archivos.
```

---

## Checklist de calidad (agente, antes de dar por cerrado)

- [ ] 19–21 `.md` en `docs/Lanzamiento/` con enlaces relativos válidos
- [ ] `README.md` con dos órdenes de lectura (inversor / equipo)
- [ ] Cifras ancla idénticas en BRIEF, README, MENSAJE, CHECKLIST, PROYECCION §1.3–1.4
- [ ] Fase 0 documentada si Day-D > T+0
- [ ] `ANALISIS_FORENSE.md` con tabla multi-rol
- [ ] Sin % de bancarrota inventados; benchmarks con disclaimer
- [ ] §2 B2B: flaquezas separadas de bondades
- [ ] Fecha «Última actualización» coherente en cabeceras

---

*Plantilla derivada del pack Zonix Pharma (mayo 2026). Mantener sincronizada con mejoras del gold standard en `docs/Lanzamiento/`.*
