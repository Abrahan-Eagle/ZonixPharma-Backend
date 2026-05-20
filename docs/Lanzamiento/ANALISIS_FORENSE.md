# Análisis forense multi-perspectiva del pack

> **Última actualización:** 20 mayo 2026.
> Auditoría multi-rol del pack. **Estado vigente:** tiers **Lean 101k / Base 118k / Growth 135k**; PROYECCION §1.1 = **Lean**; caja M12 **~42.209**; equilibrio **M11 ~151 activas**.
> **Segunda pasada forense (20 mayo 2026):** alineados Fase 0 **~28.057**, conteo pack **22** archivos, waiver B2B **~453** (vs. proxy obsoleto **222**), copy Rappi **25–35%** en B2B §11.
> **Tercera pasada forense (20 mayo 2026):** tests backend **399** (verificado `vendor/bin/phpunit`); equity README **16,83 / 18,15 / 18,75**; fechas cabecera unificadas; M12 waiver **~41.756** en MENSAJE; nota equilibrio teórico Base/Growth en README.
> **Cuarta pasada forense (20 mayo 2026):** CHECKLIST (PROYECCION solo Lean, FAQ ~100 firmas, borrador legal, demo 5 pasos); nota FP&A waiver **~453** en PROYECCION §1.1; VOLCADO §1.2 verificación tests; tabla equipo Lean en BRIEF; delta tiers en PRESUPUESTO §1.1.
> **Quinta pasada forense (20 mayo 2026):** [README](README.md) — aclaración producto Zonix vs portfolio founder; índice [PROMPT_MEJORAR_PACK_LANZAMIENTO.md](../plantillas/PROMPT_MEJORAR_PACK_LANZAMIENTO.md); [PERFIL_MERCADO_PILOTO](PERFIL_MERCADO_PILOTO.md) — puntero a cifras inversor; VOLCADO §1.2 — commit y `phpunit` **399** re-verificados. Sin cambios en anclas 101/118/135 ni PROYECCION §1.1.

---

## Perspectiva 1 — CEO / Founder técnico

### 1.1 Fortalezas

- **Stack ya construido:** ~4 años de desarrollo del **stack Zonix Pharma** + 399 tests pasando reduce riesgo de ejecución técnica drásticamente.
- **Equipo lean defendible:** sin pharmacist liaison (legalmente correcto), sin diseñador UI/UX (founder tech), **9** FTE operativos en Base (Founder + Co-CEO + **4×** Sales + CS+CM + Marketing + **Coordinador de Partners Logísticos**) + **2** freelance (contador + abogado) = **11** personas en payroll extendido; Growth suma **asesor regulatorio** externo — dimensionado para el piloto **Meta + 4× Sales**.
- **Decisión coherente sobre capital:** **Lean 101k** (mínimo) + **Base 118k** (recomendado) + **Growth 135k** (acelerado); PROYECCION §1.1 modela **Lean**; caja M12 **~42.209** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0–§1.3).
- **Founder USD 1.000/mes** en los tres tiers — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3.

### 1.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **CRÍTICA #1** | Inconsistencia numérica en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) tabla 1.1: total burn año 1 vs. filas. **Estado:** corregido — modelo vigente **Meta + 4× Sales** + **Lean 101k** + **Co-CEO** + cuota **25/40/55**; burn año 1 **90.702** (§1.1; **sin** bono piloto ni subsidio delivery en burn). | ✓ Cerrado |
| **ALTA #1** | Headcount operativo documentado: **9** FTE + **2** freelance (Founder + Co-CEO + **4×** Sales + CS+CM + Marketing + **Coordinador de Partners Logísticos** — BRIEF, MENSAJE, README §3). **Growth:** misma base + **asesor regulatorio** ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §4.1). | ✓ Alineado |
| **ALTA #2** | El plan no documenta políticas de seguridad de la información (donde se almacena la receta médica, copias de cédula del KYC, audit log de pago). Para inversor con due diligence formal es un gap. | Aplicado: añadida sección de seguridad y privacidad en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) y referencia explícita en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md). |
| MEDIA | El plan no menciona qué pasa si el founder se enferma o se ausenta inesperadamente. | Documentado plan de contingencia en sección 2 más abajo. |

### 1.3 Inconsistencias detectadas

- **Sueldo founder:** **USD 1.000/mes** en Lean, Base y Growth ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3).
- **Calendario T+90:** consistente entre [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md), [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md). OK.

### 1.4 Sugerencias del CEO

- (Aplicada como **ALTA #2**) Añadir sección de seguridad y privacidad explícita al plan operativo.
- Mantener actualizado [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) en cada hito.

---

## Perspectiva 2 — Economista / Analista financiero

### 2.1 Fortalezas

- **LTV/CAC ~7,2x con benchmark sólido:** churn 5% (mediana SaaS B2B SMB LatAm), ARPF USD **~50** **placeholder** y CAC USD **139** (construcción bottom-up con **4×** Sales) están justificados en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).
- **Payback CAC ~2,8 meses:** retorno temprano frente a SaaS B2B típicos con billing anual (cuota + fee GMV mensual al nivel del placeholder).
- **Buffer de inflación 20% (ponderado 30/10):** manejo realista de la macro VE. Mejor que asumir USD constantes como muchos otros pitchs.
- **Tres escenarios distintos:** Lean / Base / Growth dan flexibilidad al inversor para elegir nivel de exposición.
- **Plan de contingencia ante shocks:** documentado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 4.

### 2.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **ALTA #3** | El modelo asume curva de firmas **agresiva** post-Day-D (**~175**/año en §1.1). Si **4× Sales** firman menos de lo previsto, el **equilibrio mensual** se retrasa respecto a **M11**. | Aplicado: tabla de sensibilidad en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 7; mitigaciones §1.4; BRIEF y CHECKLIST. |
| **ALTA #4** | Cap SAFE **600k** sobre ticket **101k** (Lean) = **~16,83%**. Generoso vs. pre-seed LatAm típico (~10–12%); coherente con MVP + **Co-CEO**. | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) §2.3.1 |
| MEDIA | El año 2 proyecta revenue USD 96-108k anuales pero no detalla burn año 2 (más allá de "estabilizado en USD 6.000-6.500"). Inversor sofisticado puede pedir detalle. | Documentado en sección abajo. |
| MEDIA | No hay análisis explícito de "cómo se compone el revenue año 1 vs. cohorts" — solo se da el agregado. Inversor con experiencia SaaS puede pedirlo. | Aplicado: tabla de cohort simulado ya existe en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) sección 7. Confirmar referencia desde brief. |

### 2.3 Inconsistencias numéricas detectadas

- (CRÍTICA #1 ya tratada en perspectiva CEO).
- Cadena vigente (modelo **Meta + 4× Sales** + replante + **Co-CEO** + cuota **25/40/55**): ARPF **~50** → **151×50 ≈ 7.550** (revenue mes 11) ✓; burn mes 11 **7.431** ✓ (cash flow mes **11** **+119** acumulado **−31.253**); **equilibrio mensual M11** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.4). **Fase 0** **~28.057** → caja inicio M1 **~72.943** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0).
- Cap table: **Lean 101k / 600k = 16,83%** · **Base 118k / 650k = 18,15%** · **Growth 135k / 720k = 18,75%** ✓

### 2.4 Sugerencias del economista

- (Aplicada como **ALTA #3**) Tabla de sensibilidad central en BRIEF.
- (Aplicada como **ALTA #4**) Nota sobre cap generoso justificado.
- Detalle año 2 burn: viene en plan año 2 post-piloto.

---

## Perspectiva 3 — Especialista en publicidad / Marketing Lead

### 3.1 Fortalezas

- **Filosofía clara:** digital primero, offline complementario. Bien justificada (CPL VE bajo).
- **CPL Meta Ads VE USD 0,15-0,60 está validado** con benchmarks Hootsuite LatAm 2025.
- **Valla por tier:** Lean valla **pequeña 350** (M3+); Base/Growth valla **mediana 700** (M2+). Coherente con [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2–§4.
- **Diferenciación entre target B2B y B2C:** estrategia de no lanzar al paciente sin catálogo cargado.
- **Marketing offline justificado pese a CPL alto:** branding y legitimidad B2B.

### 3.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **ALTA #5** | Meta en Lean **800/500**; Base/Growth **800** plano. Revisar CPL real en piloto. | [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §7 |
| **ALTA #6** | No hay plan claro para TikTok Ads, que en VE 2025-2026 está creciendo rápido y tiene CPL USD 0,20-0,80 (similar a Meta). | Aplicado: ampliada sección 7 de [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) y referencia en presupuesto. |
| MEDIA | Falta una "tarjeta de marca digital" estándar (logo + colores + tipografía) que cualquier diseñador externo pueda usar. Aunque [`../BRAND_ZONIX_PHARMA.md`](../BRAND_ZONIX_PHARMA.md) tiene los tokens, vincular más explícito en el pack. | Aplicado: link añadido al [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) sección de documentos pre-existentes. |

### 3.3 Inconsistencias detectadas

- **Presupuesto offline:** [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) menciona USD 150-200/mes pero promedio anual es USD 350-450. El documento aclara la diferencia (sólo valla en algunos meses) pero merece nota más clara en el resumen.
- **CPL referenciado:** USD 0,15-0,60 es coherente entre [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md), [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md), [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md). OK.

### 3.4 Sugerencias del especialista

- (Aplicada como **ALTA #5**) Trigger claro de revisión de presupuesto si CPL real se desvía.
- (Aplicada como **ALTA #6**) TikTok Ads incluido como canal del plan.
- Plantilla de copy aprobada para los 3 anuncios principales (storytelling crónico, joven profesional, hijos en exterior). Ya está en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) sección 9.

---

## Perspectiva 4 — Cliente final / paciente

### 4.1 Fortalezas

- **3 personas claramente diferenciadas:** crónico (Carmen), joven profesional (Diego), adulto mayor con hijo remoto (Doña Luisa). Cubre ~75% del mercado adressable.
- **Storytelling de anuncios concreto:** los 3 textos de [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) sección 9 son auténticos y locales.
- **Métodos de pago realistas:** PMC2P + Zelle + Binance Pay USDT cubre el 95% de los venezolanos con conectividad bancaria activa.
- **Precio claro:** descarga gratis + sin markup + delivery USD 1,50-3,50. Sin costos ocultos.

### 4.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **ALTA #7** | El plan no aborda explícitamente la **fricción del onboarding del paciente** (registro + KYC mínimo + OTP SMS). Si pide demasiado primer click, churn de descarga es alto. | Aplicado: añadida sección 6 en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) con onboarding paso a paso minimizado a 11 pasos, registrar ahora con solo teléfono + **Firebase Phone Auth (SMS)**, ampliar perfil después solo cuando es necesario para Rx. |
| MEDIA | No hay plan de remarketing para usuarios que descargan pero no piden en primer mes. | Documentado en sección 10 de [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) (riesgo de baja conversión + plan B). |
| MEDIA | El plan no cubre cómo se manejará el **idioma** del paciente con baja alfabetización digital (Doña Luisa, 71 años). | Documentado: el flujo del hijo remoto cubre ese caso (hijo hace pedido y paga, mamá recibe). El paciente con baja alfabetización digital solo recibe, no opera. |

### 4.3 Sugerencias del paciente (heurísticas UX)

- (Aplicada como **ALTA #7**) Onboarding minimizado.
- "Volver a pedir" en un click — ya documentado en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) sección 3.8.
- Recordatorios mensuales para crónicos (opt-in) — ya documentado.

---

## Perspectiva 5 — Operador tercero (farmacia, pharmacist, delivery)

### 5.1 Fortalezas

- **Pricing transparente para farmacia:** modelo **híbrido** (fija **25/40/55** + % GMV por banda, políticas §5 B2B) es claro y defensible vs. take-rate pleno de Rappi.
- **Ahorro vs. Rappi:** el ticket **Zonix Pharma** suele ser **órden de magnitud menor** que ~25-35% GMV en agregador; cuantificar en vivo con la calculadora del tier ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5).
- **Onboarding farmacéutico colegiado bien justificado:** la Ley del Ejercicio de la Farmacia VE obliga a que el pharmacist sea de la farmacia. El plan respeta esa ley sin contratar pharmacist interno.
- **Repartidor `delivery_agent` bajo empresa partner:** app de ruta + tracking; liquidación con la empresa (no modelo autónomo `delivery` en piloto).
- **SLA validación Rx 60 min:** específico, medible.

### 5.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **CRÍTICA #2** | El pack promete waiver comercial (cuota **USD 0** meses iniciales) en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §11 y FAQ en [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md); debía quedar **explícito** frente a la tabla §1.1 (caso **sin** waiver para no sobrestimar caja) y la variante **«con waiver»** (**~−USD 453** ingreso año 1 — proxy fila §1.1). | **Aplicado:** convención documentada en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 (párrafo previo a la tabla), notas §1.1–1.3 y [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §11; §8 de este informe. |
| **ALTA #8** | Ningún documento detalla cómo se manejan los **picos operativos** (fines de semana, días festivos) ni el plan de capacidad del Customer Support fuera de horario. | Aplicado: añadida sección operativa de horarios y guardias en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) y en SLA. |
| MEDIA | El pack asume que el farmacéutico colegiado de la farmacia validará Rx digitalmente sin resistencia. En la práctica algunos farmacéuticos mayores rechazan apps. | Documentado: en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) sección 8 hay objeción + respuesta sobre eso. La capacitación de 30 min y soporte WhatsApp directo son la mitigación. |

### 5.3 Inconsistencias detectadas

- **Comisión Zonix sobre delivery fee:** **8 %** a **`delivery_company`** ([PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) §A.4). Sin rol `delivery` autónomo en app piloto — coherente con concesión.

### 5.4 Sugerencias del operador

- (Aplicada como **CRÍTICA #2**) Modelo financiero ajustado por waiver.
- (Aplicada como **ALTA #8**) Plan de capacidad fuera de horario.
- Manual operativo + video tutorial para el farmacéutico — ya planificado en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) sección 7.2.

---

## Perspectiva 6 — Inversionista

### 6.1 Fortalezas

- **Comparable internacional sólido:** Farmalisto ~USD 32M revenue / funding ~USD 22M–33M según fuente. Demuestra que el modelo es financiable.
- **Diferencial cuantificado:** ahorro 90% vs. Rappi para farmacia. No es vague, es número concreto.
- **Stack ya construido:** mitigador de riesgo de ejecución técnica.
- **Founder técnico:** capaz de iterar producto sin contratar CTO.
- **Plan honesto:** declara explícitamente qué NO se ofrece (no teleconsulta, no seguros médicos, no veterinarios).
- **Plan de contingencia documentado:** ante shocks macro (devaluación) y operativos (adopción baja, churn alto).
- **Tres escenarios:** Lean / Base / Growth dan flexibilidad de ticket.
- **Información detallada sobre regulación VE:** [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md), [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md). Profundo.

### 6.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **CRÍTICA #3** | El pack no incluía **información explícita del founder** (track record, por qué él). Para un inversor, el equipo es ~50% de la decisión. | **Mayo 2026:** volcado CV + LinkedIn en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1–1.1, [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §3, [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) §7. **Pendiente antes de reunión institucional:** GitHub/NDA repo, referencias, % dedicación Zonix Pharma vs. otros, métricas tracción por producto (opcional). |
| **ALTA #9** | El plan no menciona **otros founders potenciales** o advisors confirmados. Single-founder pre-seed es vendible pero merece nota explícita de "founder solo + plan de hire CTO post-Serie A o early advisor en farmacéutico". | Aplicado: añadida sección 5 en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) sobre stock options + advisors + plan post-Serie A. |
| **ALTA #10** | No hay sección explícita de "Por qué ahora" (timing). El inversor sofisticado pregunta "¿por qué ahora y no hace 2 años o en 2 años?". | Aplicado: añadida nota en [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) sobre timing post-recuperación pharma VE 17,49% YoY + competencia digital débil + stack ya construido. |
| MEDIA | No hay due diligence checklist desde la perspectiva del inversor (lo que él pediría). | Documentado: ver sección 9 de este documento. |

### 6.3 Inconsistencias detectadas

- **Equity implícito SAFE Lean (101k / cap 600k):** consistente entre [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md), [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md): **~16,83%**. OK.
- **Cap table proyectado:** consistente. Founder mantiene > 50% post Serie A. OK.

### 6.4 Sugerencias del inversionista

- (Aplicada como **CRÍTICA #3**) Información del founder volcada (Abrahan Pulido); subsisten ítems de due diligence (GitHub/referencias/% tiempo) antes de reunión con fondo o ticket alto.
- (Aplicada como **ALTA #9**) Plan post-Serie A con advisors / CTO + pool de empleados explícito.
- (Aplicada como **ALTA #10**) "Por qué ahora" articulado.
- Due diligence checklist en sección 9 abajo.

---

## 7. Resumen de hallazgos por severidad

### 7.1 CRÍTICAS (3 detectadas — todas aplicadas)

| # | Hallazgo | Documento | Estado |
|---|---|---|---|
| **C1** | Inconsistencia numérica en tabla 1.1 (año 1): total declarado vs. suma de filas. **Estado vigente:** burn año 1 **90.702** (Meta + **4×** Sales + **Lean 101k** + **Co-CEO** + cuota **25/40/55** — PROYECCION §1.1). | ✓ Cerrado |
| **C2** | Waiver de 2 meses gratis NO reflejado en proyección | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) tabla 1.1 + dependientes | ✓ Aplicado (ver sección 8) |
| **C3** | Información del founder ausente en pack (50% decisión inversor) | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) + [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) | ✓ **Parcialmente cerrado (mayo 2026):** nombre, contacto, LinkedIn, portfolio, proyectos y párrafo «por qué yo» volcados desde CV/LinkedIn. **Siguen pendientes:** GitHub público o acceso repo bajo NDA, 2–3 referencias, declaración % tiempo Zonix Pharma vs. CETIAC/otros, métricas de tracción por producto si aplica. |

### 7.2 ALTAS (10 detectadas — todas aplicadas)

| # | Hallazgo | Documento | Estado |
|---|---|---|---|
| **A1** | Headcount operativo: **9** FTE + **2** freelance en Base; Growth + asesor regulatorio. | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) + pack | ✓ Alineado |
| **A2** | Falta sección de seguridad / privacidad de datos médicos | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) + [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) | ✓ Aplicado |
| **A3** | Tabla de sensibilidad central referenciada explícitamente | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) + [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) | ✓ Aplicado |
| **A4** | Cap SAFE generoso requiere comentario explícito | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) | ✓ Aplicado |
| **A5** | Trigger de revisión de presupuesto digital si CPL real se desvía | [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) | ✓ Aplicado |
| **A6** | TikTok Ads como canal explícito | [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) | ✓ Aplicado |
| **A7** | Onboarding paciente minimizado | [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) | ✓ Aplicado |
| **A8** | Plan de capacidad operativa fuera de horario | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) | ✓ Aplicado |
| **A9** | Plan post-Serie A con advisors + pool de empleados | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) | ✓ Aplicado |
| **A10** | "Por qué ahora" articulado en brief | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) | ✓ Aplicado |

### 7.3 MEDIAS (6 detectadas — pendientes opcionales)

| # | Hallazgo | Documento | Estado |
|---|---|---|---|
| M1 | Plan ante ausencia inesperada del founder | [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) | Documentado en sección 9 abajo |
| M2 | Detalle burn año 2 más allá de "estabilizado USD 6.000" | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) | Pendiente para cierre del piloto |
| M3 | Análisis explícito cohort año 1 | [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) sección 7 | Ya existe, OK |
| M4 | Plan de remarketing usuarios que descargan sin pedir | [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) | Ya documentado en sección 10, OK |
| M5 | Idioma / accesibilidad para baja alfabetización digital | [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) persona Doña Luisa | Cubierto vía hijo remoto, OK |
| M6 | Due diligence checklist desde inversor | Este documento sección 9 | Documentado abajo |

---

## 8. Ajuste financiero por aplicación de CRÍTICA #2 (waiver 2 meses gratis)

### 8.1 Fuente de verdad (modelo Lean USD 101k, mayo 2026)

La tabla mes a mes **oficial** (sin waiver y con waiver, burn **7.462 / 7.798 / 7.431**, **Fase 0** + one-shots **~9.808**) está en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §**0**, §**1.1** y el despliegue de capital en §**1.3**.

**Totales año 1 post-Day-D M1–M12 (extraído del documento vigente):**

| Versión | Revenue año 1 | Burn año 1 | Cash flow acumulado (operativo M1–M12) |
|---|---|---|---|
| Sin waiver | **59.968** | **90.702** | **−30.734** |
| Con waiver primeras 10 | **~59.515** | **90.702** | **~−31.187** |

**Lectura:** el waiver «primeras 10» en la tabla §1.1 condona **~USD 453** de revenue acumulado año 1 vs. sin waiver (**proxy** — **recalibrar** con FP&A). **Cash en caja** cierre **M12** (tras **Fase 0**): **~USD 42.209** sin waiver ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3); **~USD 41.756** con esa variante. **Equilibrio mensual** con ARPF **~50**: **mes 11** (**~151 activas**).

**Control cruzado:** burn M11 **7.431**; revenue **7.550**; tramos **7.462 / 7.798 / 7.431** — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.3.

---

## 9. Due diligence checklist desde la perspectiva del inversor (M6)

Lo que un inversor sofisticado pediría adicionalmente al pack:

1. **Founder background:** CV + LinkedIn + GitHub + portfolio (CRÍTICA #3 ya marcada).
2. **NDA si requiere:** template estándar + firma 24h.
3. **Demo en vivo:** confirmar que la app funciona end-to-end.
4. **Acceso al código (opcional):** repositorio GitHub privado con permisos de lectura. Si lo pide, otorgar.
5. **Métricas técnicas:** uptime servidor (probablemente N/A en piloto), tests pasando (**399** ✓ — última corrida documentada en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1.2: fecha + commit short), CI funcionando.
6. **Referencias del founder:** 2-3 personas que lo conocen profesionalmente.
7. **Validación legal del SAFE:** abogado del inversor revisa el documento.
8. **Validación legal de la C.A. (post-constitución):** registro mercantil + RIF + actas.
9. **Términos de uso + política de privacidad versión actual:** importantes para inversor con foco en compliance.
10. **Acuerdos con farmacias prospecto:** cartas de intención (5-8) firmadas.
11. **Confirmación de zona piloto:** visita presencial al inmueble + a 2-3 farmacias prospecto.
12. **Prueba de costo del equipo:** ofertas de empleo respondidas + cotizaciones formales.

---

## 10. Plan de contingencia ante ausencia inesperada del founder (M1)

**Escenario:** founder se enferma, accidente, viaje no planificado > 1 semana.

**Plan:**
1. **Co-CEO** cubre dirección general; **Marketing Lead** ownership de campañas ([PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.1).
2. Decisiones operativas urgentes: Customer Support + **Coordinador de Partners Logísticos**.
3. Decisiones técnicas: founder es único responsable del código. Si la ausencia supera 1 semana, contratar consultor técnico external on-demand (USD 50-100/h).
4. Decisiones financieras / equity: pausan hasta retorno.
5. Comunicación al inversor: notificación dentro de 48h con plan de continuidad.

---

## 11. Conclusión del análisis forense

### 11.1 Lentes ejecutivos — chequeo de coherencia del pack (lectura rápida)

| Rol | Qué validar en este directorio | Estado (mayo 2026) |
|-----|----------------------------------|----------------------|
| **CEO** | Narrativa única, hitos T+90, riesgos declarados, contingencia founder | OK — [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) |
| **CFO** | Cierre **101k** = one-shots + burn + reserva; tiers **101/118/135**; PROYECCION §1.1/§1.3 | OK |
| **COO** | SLAs, picos demanda, horarios — [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) | OK — ola 3: §8.3 export prudente + enlace [PLAN_REGULATORIO_PHARMA_VE.md](../PLAN_REGULATORIO_PHARMA_VE.md) |
| **CTO / CISO** | Stack, tests, datos, AppSec — README, [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §14 | OK; CI/repo bajo NDA |
| **CPO** | Propuestas valor B2B/B2C/tercero, roadmap T+X — PROPUESTA_* + PROYECCION §10 | OK |
| **CMO (clínico) / RA / QA-PV** | Claims, controlados, farmacovigilancia — PLAN_MODULO §8–11; marketing salud | Sujeto a dictamen asesor |
| **Compliance / DPO / Legal** | SAFE, tratamiento datos, marco farmacia — [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) §4.4 | Sujeto a abogado |
| **CRO ventas / CMO marketing / CHRO** | Equipo **9** FTE + 2 FL; CAC/LTV; Meta — PRESUPUESTO §2–§4, UNIT_ECONOMICS | OK |
| **Supply / logística (si aplica físico)** | Cadena de frío, SLA entrega, reparto — [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md), [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) | OK |
| **CRO riesgos / Auditoría / IR** | Sensibilidades §7 PROYECCION, cap SAFE, updates §6.3 | OK |

#### 11.1 bis — Lentes adicionales (mapa breve due diligence)

Desglose de lecturas que en §11.1 iban agrupadas; **no** sustituye al dictamen externo.

| Rol | Qué validar en el pack | Estado (mayo 2026) |
|-----|-------------------------|---------------------|
| **DPO** (protección de datos) | Bases, encargados, derechos, transferencias, DPIA OTP — [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) §4.4; retención y minimización — [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §14 | Sujeto a **abogado** + designación formal del responsable ante operación con datos de salud |
| **CISO** (seguridad de la información) | Amenazas, controles, least privilege, 2FA roadmap — [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §14–17; acceso repo/CI bajo NDA | **OK** para narrativa piloto; hardening continuo post Day-D |
| **Auditoría interna** | KPIs financieros/operativos y discrepancias GMV — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §6.4; revisión periódica de supuestos del pack | **OK** como disciplina COO/CFO año 1; función de auditoría **formal** típica post-seed / con junta |
| **IR / Corp Dev** | SAFE, cap, equity implícita, mensaje único al inversor — [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md), [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md), [README.md](README.md) | **OK**; ampliar con proceso de **NDA** y data room cerrado según §9 |

### 11.2 Auditoría aplicada (mayo 2026)

Auditoría forense multi-rol cerrada: hallazgos CRÍTICOS y ALTOS aplicados en el pack; tiers **Lean 101k / Base 118k / Growth 135k**; PROYECCION §1.1 = **Lean**. Detalle por documento: [README.md](README.md); matriz rol → skills → agentes: [ROLES_SKILLS_ZONIX.md](ROLES_SKILLS_ZONIX.md).

### 11.3 Veredicto, riesgos residuales y próximos pasos

El pack es **invertible** después de aplicadas las CRÍTICAS y ALTAS. Las MEDIAS son polish.

**Recomendación final:** el pack está listo para presentarse a un inversor pre-seed venezolano con experiencia en LatAm. Para inversor institucional internacional (fondo VC formal) requiere:
- Pre-NDA antes de compartir.
- Founder background: **parcialmente completado** (ver [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) §1); siguen GitHub/referencias/% tiempo dedicación.
- Demo en vivo programada.
- **Dictamen abogado + farmacéutico asesor** sobre textos legales, retenciones y publicidad en salud antes de escalar tráfico pagado.

**Riesgo residual:**
- Adopción real puede diferir del plan (ya documentado en sensibilidades y plan contingencia).
- Inflación VE puede romper buffer 20% (ya documentado plan contingencia).
- **Cambios normativos** MPPS/INHRR o interpretación de marketplace digital: mitigado con asesoría y revisión periódica (ver [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §8.2.1).

**Próximos pasos:**
1. Founder cierra `[PENDIENTE]` restantes en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) (GitHub, referencias, % dedicación, métricas tracción).
2. Founder visita 5-8 farmacias prospecto y consigue datos reales.
3. Founder cotiza formalmente **HQ casa**, valla, abogado, contador.
4. **Abogado** revisa T&C, privacidad, contrato marco farmacia, SAFE; **farmacéutico asesor** valida tabla controlados y copy salud.
5. Lectura final del pack por el founder antes de enviar al primer inversor.

### 11.4 Síntesis vigente (20 mayo 2026)

**Tiers:** **Lean 101k** (mínimo) · **Base 118k** (recomendado) · **Growth 135k** (acelerado). SAFE **600k / 650k / 720k**. Fuente numérica: [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1; flujo mes a mes **solo Lean**: [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0–§1.3. **Roles y agentes JARVIS:** [ROLES_SKILLS_ZONIX.md](ROLES_SKILLS_ZONIX.md).

**Anclas Lean:** Fase 0 **~28.057**; caja Day-D **~72.943**; burn **7.462/7.798/7.431**; M12 cash **~42.209**; equilibrio **M11 ~151 activas**; revenue año 1 **59.968**; burn año 1 **90.702**.

**Evidencia técnica:** backend **399 tests** (`./vendor/bin/phpunit`, verificado mayo 2026 — OK 399 passed).

| Rol | Foco en el pack | Veredicto breve |
|-----|-----------------|-----------------|
| **CEO** | Narrativa **Zonix Pharma**, **Fase 0 + Day-D**, equilibrio **M11** | **OK** — [CONTEXTO](CONTEXTO_PITCH_Y_DECISIONES.md), [BRIEF](BRIEF_UNA_PAGINA.md), [MENSAJE](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) |
| **CFO** | Fuente §0 / §1.1 / §1.3 [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) (**Lean 101k**); tiers **101/118/135** [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §1; caja **M12 ~42.209** | **OK** |
| **COO** | SLAs, Rx, cold chain, soporte — [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) | **OK** sujeto a operación real piloto |
| **CTO / CISO** | Stack Laravel+Flutter, tests, CI/NDA | **OK** — cifra tests verificada en repo |
| **CPO** | PROPUESTA_* + roadmap T+X [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) | **OK** |
| **CMO clínico / RA / QA-PV** | Claims, controlados, FV — PLAN_MODULO + marketing salud | **Sujeto a dictamen** MPPS/copy salud |
| **Compliance / DPO / Legal** | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) §4.4; SAFE; contrato marco B2B | **Sujeto a abogado**; FAQ M&A SAFE corregida a redacción no engañosa |
| **CRO ventas / CMO marketing / CHRO** | CAC/LTV, equipo **9** FTE + 2 FL (**4×** Sales) | **OK** — [UNIT_ECONOMICS](UNIT_ECONOMICS.md), [CUESTIONARIO](CUESTIONARIO_EQUIPO_PILOTO.md) |
| **Delivery / agentes IA** | Matriz rol → competencias → skills | **OK** — [ROLES_SKILLS_ZONIX](ROLES_SKILLS_ZONIX.md) |
| **Supply / logística** | Cadena frío, delivery — PROPUESTA_TERCER_LADO + PLAN_MODULO | **OK** |
| **CRO riesgos / Auditoría / IR** | Sensibilidades §7 PROYECCION; cap SAFE; VOLCADO founder | **OK** con pendientes GitHub/referencias/% tiempo |

---

## 12. Documentos hermanos

- [README.md](README.md): índice general del pack (**22** archivos).
- [ROLES_SKILLS_ZONIX.md](ROLES_SKILLS_ZONIX.md): matriz roles, skills y agentes JARVIS.
- [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md): brief con CRÍTICA / ALTA aplicadas.
- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): proyección con CRÍTICA #1 y #2 aplicadas.
- [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md): pre-flight con CRÍTICA #3 marcada.
- [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md): plantilla para llenar info founder.
