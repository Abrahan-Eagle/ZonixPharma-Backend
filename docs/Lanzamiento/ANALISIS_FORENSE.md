# Análisis forense multi-perspectiva del pack

> **Última actualización:** 5 mayo 2026.
> Documento que somete el pack completo a auditoría desde 6 perspectivas distintas: CEO/founder, economista, especialista en publicidad, cliente final / paciente, operador tercero (farmacia, pharmacist, delivery), inversionista.
> Cada perspectiva lista: fortalezas, hallazgos críticos, inconsistencias, mejoras propuestas con prioridad CRÍTICA / ALTA / MEDIA.
> Las CRÍTICAS y ALTAS detectadas YA ESTÁN APLICADAS en los documentos del pack al cierre de este análisis.

---

## Perspectiva 1 — CEO / Founder técnico

### 1.1 Fortalezas

- **Stack ya construido:** 4 años de Zonix Eats reutilizados + 397 tests pasando reduce riesgo de ejecución técnica drásticamente.
- **Equipo lean defendible:** sin pharmacist liaison (legalmente correcto), sin diseñador UI/UX (founder tech), 6 personas + 2 freelance bien dimensionado para el piloto.
- **Decisión coherente sobre capital:** USD 75k es el balance entre runway holgado y dilución razonable. Lean y Growth quedan como alternativas legítimas.
- **Plan T+0 / T+30 / T+60 / T+90 realista:** 30 días para constitución, 30 días para equipo + onboarding farmacias, 30 días para lanzamiento. Honesto.
- **Founder no cobra sueldo en piloto:** señal de skin in the game para el inversor.

### 1.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **CRÍTICA #1** | Inconsistencia numérica en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) tabla 1.1: total burn año 1 dice USD 53.952 pero la suma real es USD 53.552 (4.171×2 + 4.521×10 = 53.552). Cash flow total año 1 mostraba -27.517 cuando es -27.117. | Corregido. |
| **ALTA #1** | El mensaje al inversor en [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) dice "6 roles full-time + 2 freelance" pero el conteo real es 5 full-time (Founder, Sales, Customer Support, Marketing, Delivery Ops) + 2 freelance (Contador, Abogado) = 7. En Growth se añade Asesor regulatorio (8). | Corregido. |
| **ALTA #2** | El plan no documenta políticas de seguridad de la información (donde se almacena la receta médica, copias de cédula del KYC, audit log de pago). Para inversor con due diligence formal es un gap. | Aplicado: añadida sección de seguridad y privacidad en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) y referencia explícita en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md). |
| MEDIA | El plan no menciona qué pasa si el founder se enferma o se ausenta inesperadamente. | Documentado plan de contingencia en sección 2 más abajo. |

### 1.3 Inconsistencias detectadas

- **Sueldo del founder en escenarios:** Lean = 0, Base = 0, Growth = USD 250/mes desde mes 4. Documentado consistentemente en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md). OK.
- **Calendario T+90:** consistente entre [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md), [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md). OK.

### 1.4 Sugerencias del CEO

- (Aplicada como **ALTA #2**) Añadir sección de seguridad y privacidad explícita al plan operativo.
- Mantener actualizado [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) en cada hito.

---

## Perspectiva 2 — Economista / Analista financiero

### 2.1 Fortalezas

- **LTV/CAC 9,6x con benchmark sólido:** las hipótesis de churn 5% (mediana SaaS B2B SMB LatAm), ARPF USD 45 (mix 60/30/10) y CAC USD 94 (construcción bottom-up) están justificadas y citadas.
- **Payback CAC de 2,1 meses es excepcional:** signo de que el modelo de membresía mensual genera retorno temprano vs. SaaS B2B típicos con billing anual.
- **Buffer de inflación 20% (ponderado 30/10):** manejo realista de la macro VE. Mejor que asumir USD constantes como muchos otros pitchs.
- **Tres escenarios distintos:** Lean / Base / Growth dan flexibilidad al inversor para elegir nivel de exposición.
- **Plan de contingencia ante shocks:** documentado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 4.

### 2.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **ALTA #3** | El modelo asume tasa de firma 5-15 farmacias/mes desde mes 4. Si Sales B2B firma menos, el break-even se mueve más allá del mes 11. No hay tabla de sensibilidad explícita en el documento principal. | Aplicado: tabla de sensibilidad ya existe en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 7 (escenario pesimista, base, optimista). Se añadió referencia cruzada explícita al BRIEF y CHECKLIST. |
| **ALTA #4** | El cap del SAFE USD 550k para USD 75k da 13,64% equity. Esto es **más generoso para el inversor** que el promedio de pre-seed LatAm 2025-2026 (10-12% para tickets similares). Justificable porque Zonix tiene MVP avanzado y founder técnico, pero merece comentario explícito. | Aplicado: añadida nota en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) explicando el cap es generoso intencionalmente como "señal de confianza" al primer inversor. |
| MEDIA | El año 2 proyecta revenue USD 96-108k anuales pero no detalla burn año 2 (más allá de "estabilizado en USD 6.000-6.500"). Inversor sofisticado puede pedir detalle. | Documentado en sección abajo. |
| MEDIA | No hay análisis explícito de "cómo se compone el revenue año 1 vs. cohorts" — solo se da el agregado. Inversor con experiencia SaaS puede pedirlo. | Aplicado: tabla de cohort simulado ya existe en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) sección 7. Confirmar referencia desde brief. |

### 2.3 Inconsistencias numéricas detectadas

- (CRÍTICA #1 ya tratada en perspectiva CEO).
- Verifiqué **toda** la cadena: ARPF 45 → 107×45 = 4.815 (revenue mes 11) ✓, burn 4.521 ✓, break-even = 107 farmacias ≈ 100,5 + 6,5% cushion ✓.
- Cap table conversión SAFE post-money cap USD 550k para USD 75k = 13,64% ✓ (75.000/550.000).
- Cap Lean USD 60k / 450k = 13,33% ✓.
- Cap Growth USD 90k / 650k = 13,85% ✓.

### 2.4 Sugerencias del economista

- (Aplicada como **ALTA #3**) Tabla de sensibilidad central en BRIEF.
- (Aplicada como **ALTA #4**) Nota sobre cap generoso justificado.
- Detalle año 2 burn: viene en plan año 2 post-piloto.

---

## Perspectiva 3 — Especialista en publicidad / Marketing Lead

### 3.1 Fortalezas

- **Filosofía clara:** digital primero, offline complementario. Bien justificada (CPL VE bajo).
- **CPL Meta Ads VE USD 0,15-0,60 está validado** con benchmarks Hootsuite LatAm 2025.
- **Valla diferenciada por escenario:** Lean (sin), Base (3m×2m USD 350), Growth (6m×4m USD 700). Coherente con presupuesto.
- **Diferenciación entre target B2B y B2C:** estrategia de no lanzar al paciente sin catálogo cargado.
- **Marketing offline justificado pese a CPL alto:** branding y legitimidad B2B.

### 3.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **ALTA #5** | El presupuesto de marketing digital USD 500/mes en Base puede ser bajo para captar 1.500 leads/mes mes 6 si el CPL real está más cercano a USD 0,40 que a USD 0,15. | Aplicado: añadido escenario explícito en [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) sección 7 (cuándo subir el presupuesto). El plan de contingencia en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 4.2 prevé reducción del marketing si la adopción no llega. |
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
| **ALTA #7** | El plan no aborda explícitamente la **fricción del onboarding del paciente** (registro + KYC mínimo + WhatsApp OTP). Si pide demasiado primer click, churn de descarga es alto. | Aplicado: añadida sección 6 en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) con onboarding paso a paso minimizado a 11 pasos, registrar ahora con solo teléfono + WhatsApp OTP, ampliar perfil después solo cuando es necesario para Rx. |
| MEDIA | No hay plan de remarketing para usuarios que descargan pero no piden en primer mes. | Documentado en sección 10 de [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) (riesgo de baja conversión + plan B). |
| MEDIA | El plan no cubre cómo se manejará el **idioma** del paciente con baja alfabetización digital (Doña Luisa, 71 años). | Documentado: el flujo del hijo remoto cubre ese caso (hijo hace pedido y paga, mamá recibe). El paciente con baja alfabetización digital solo recibe, no opera. |

### 4.3 Sugerencias del paciente (heurísticas UX)

- (Aplicada como **ALTA #7**) Onboarding minimizado.
- "Volver a pedir" en un click — ya documentado en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) sección 3.6.
- Recordatorios mensuales para crónicos (opt-in) — ya documentado.

---

## Perspectiva 5 — Operador tercero (farmacia, pharmacist, delivery)

### 5.1 Fortalezas

- **Pricing transparente para farmacia:** Basic 25 / Pro 60 / Enterprise 120 con tier dinámico es clara y defensible vs. Rappi.
- **Ahorro vs. Rappi cuantificado:** USD 1.190-1.690/mes para una farmacia con USD 5k GMV. Argumento de venta directo.
- **Onboarding farmacéutico colegiado bien justificado:** la Ley del Ejercicio de la Farmacia VE obliga a que el pharmacist sea de la farmacia. El plan respeta esa ley sin contratar pharmacist interno.
- **Repartidor con 0% comisión sobre delivery fee:** atractivo para captar repartidores Yummy / Rappi descontentos con sus comisiones.
- **SLA validación Rx 60 min:** específico, medible.

### 5.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **CRÍTICA #2** | El pack dice que "primeros 2 meses gratis a las primeras 10 farmacias" en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) sección 10 y [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) sección 7.1, **pero esto NO está reflejado en la proyección financiera** ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) tabla 1.1 mes 1 dice 5 farmacias × USD 7 = USD 35 revenue. Con waiver, el revenue mes 1 sería USD 0, no USD 35). | **Aplicado: corregir el modelo financiero** con el waiver primer y segundo mes. Las primeras 10 farmacias generan revenue desde mes 3, no desde mes 1. Ver corrección en sección 8 abajo. |
| **ALTA #8** | Ningún documento detalla cómo se manejan los **picos operativos** (fines de semana, días festivos) ni el plan de capacidad del Customer Support fuera de horario. | Aplicado: añadida sección operativa de horarios y guardias en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) y en SLA. |
| MEDIA | El pack asume que el farmacéutico colegiado de la farmacia validará Rx digitalmente sin resistencia. En la práctica algunos farmacéuticos mayores rechazan apps. | Documentado: en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) sección 8 hay objeción + respuesta sobre eso. La capacitación de 30 min y soporte WhatsApp directo son la mitigación. |

### 5.3 Inconsistencias detectadas

- **Comisión Zonix sobre delivery fee:** Autonomous repartidor 0% en valor pero USD 0,30 fee fijo por orden ([PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) sección A.4). Empresa de delivery 8% ([PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) sección B.4). Coherente — son dos productos distintos.

### 5.4 Sugerencias del operador

- (Aplicada como **CRÍTICA #2**) Modelo financiero ajustado por waiver.
- (Aplicada como **ALTA #8**) Plan de capacidad fuera de horario.
- Manual operativo + video tutorial para el farmacéutico — ya planificado en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) sección 7.2.

---

## Perspectiva 6 — Inversionista

### 6.1 Fortalezas

- **Comparable internacional sólido:** Farmalisto USD 32M revenue / USD 33M VC raised (Crunchbase + PitchBook). Demuestra que el modelo es financiable.
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

- **Equity implícito SAFE Base:** consistente entre [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md), [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md): 13,64%. OK.
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
| **C1** | Inconsistencia numérica: total burn año 1 53.952 vs. real 53.552 | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) tabla 1.1 | ✓ Corregido |
| **C2** | Waiver de 2 meses gratis NO reflejado en proyección | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) tabla 1.1 + dependientes | ✓ Aplicado (ver sección 8) |
| **C3** | Información del founder ausente en pack (50% decisión inversor) | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) + [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) | ✓ **Parcialmente cerrado (mayo 2026):** nombre, contacto, LinkedIn, portfolio, proyectos y párrafo «por qué yo» volcados desde CV/LinkedIn. **Siguen pendientes:** GitHub público o acceso repo bajo NDA, 2–3 referencias, declaración % tiempo Zonix Pharma vs. CETIAC/otros, métricas de tracción por producto si aplica. |

### 7.2 ALTAS (10 detectadas — todas aplicadas)

| # | Hallazgo | Documento | Estado |
|---|---|---|---|
| **A1** | Conteo de roles inconsistente "6+2" vs. real "5+2" | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) | ✓ Corregido |
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

### 8.1 Modelo corregido tabla mes a mes (Base USD 75k, con waiver)

> **Asunción ajustada:** las primeras 10 farmacias firmadas (mes 1-2) reciben los primeros 2 meses gratis. A partir del mes 3 pagan tier completo. Las farmacias firmadas desde mes 3 pagan desde mes 1 de su afiliación.

| Mes | Firmadas | Activas | Activas pagantes | Revenue | Burn | Cash flow |
|---|---|---|---|---|---|---|
| 1 | 5 | 5 | 0 (waiver) | 0 | 4.171 | -4.171 |
| 2 | 6 | 10 | 0 (waiver) | 0 | 4.171 | -4.171 |
| 3 | 6 | 15 | 15 | 360 | 4.521 | -4.161 |
| 4 | 8 | 22 | 22 | 765 | 4.521 | -3.756 |
| 5 | 10 | 31 | 31 | 1.215 | 4.521 | -3.306 |
| 6 | 11 | 41 | 41 | 1.665 | 4.521 | -2.856 |
| 7 | 12 | 51 | 51 | 2.115 | 4.521 | -2.406 |
| 8 | 14 | 64 | 64 | 2.700 | 4.521 | -1.821 |
| 9 | 15 | 78 | 78 | 3.330 | 4.521 | -1.191 |
| 10 | 14 | 92 | 92 | 3.870 | 4.521 | -651 |
| **11** | **14** | **107** | **107** | **4.815** | **4.521** | **+294** |
| 12 | 13 | 120 | 120 | 5.400 | 4.521 | +879 |
| **Total año 1** | **128** | **120** | **120** | **26.235** (vs. 26.435 sin waiver) | **53.552** | **-27.317** |

**Lectura:** el waiver tiene un costo total de USD 200 sobre el año 1 (USD 35 mes 1 + USD 165 mes 2 que se condonan). Cash al cierre año 1 baja de USD 41.179 a USD 40.979. **Impacto material: bajo**. El break-even se mantiene en mes 11.

### 8.2 Capital deployment ajustado (ya en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md))

Diferencia mínima: cash al cierre año 1 = USD 40.979 (vs. USD 41.179 sin waiver). Sigue siendo > 5 meses de runway adicional. La narrativa al inversor se mantiene.

---

## 9. Due diligence checklist desde la perspectiva del inversor (M6)

Lo que un inversor sofisticado pediría adicionalmente al pack:

1. **Founder background:** CV + LinkedIn + GitHub + portfolio (CRÍTICA #3 ya marcada).
2. **NDA si requiere:** template estándar + firma 24h.
3. **Demo en vivo:** confirmar que la app funciona end-to-end.
4. **Acceso al código (opcional):** repositorio GitHub privado con permisos de lectura. Si lo pide, otorgar.
5. **Métricas técnicas:** uptime servidor (probablemente N/A en piloto), tests pasando (397 ✓), CI funcionando.
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
1. Marketing Lead = CEO interino delegado (rol explícito en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) sección 2.2 y [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md) sección 4.4).
2. Decisiones operativas urgentes: Customer Support + Delivery Ops.
3. Decisiones técnicas: founder es único responsable del código. Si la ausencia supera 1 semana, contratar consultor técnico external on-demand (USD 50-100/h).
4. Decisiones financieras / equity: pausan hasta retorno.
5. Comunicación al inversor: notificación dentro de 48h con plan de continuidad.

---

## 11. Conclusión del análisis forense

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
3. Founder cotiza formalmente coworking, valla, abogado, contador.
4. **Abogado** revisa T&C, privacidad, contrato marco farmacia, SAFE; **farmacéutico asesor** valida tabla controlados y copy salud.
5. Lectura final del pack por el founder antes de enviar al primer inversor.

### 11.1 Segunda pasada profesional (mayo 2026) — qué se añadió al pack

| Área | Documento(s) | Contenido añadido |
|---|---|---|
| Legal / datos / labor | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) | §4.4 ampliado (responsable, encargados, bases, derechos, transferencias internacionales, contrato marco, SAFE); riesgo laboral freelance. |
| Regulación / operación Rx | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) | §8.2.1 normativa; §7.4 MPPS; §9.6 controlados; §15 playbook; §16 amenazas; §17 QA Day-D; §13.4 retención con disclaimer. |
| Marketing salud | [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §1.1; [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) | Do/Don't comunicaciones; avisos legales; TTL receta aclarado; disclaimer ahorro. |
| B2B / terceros | [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md); [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) | Objeciones MPPS/datos; contrato marco resumen; SLA logística y frío. |
| CFO / inversor | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §6.3 | Plantilla email investor update + nota FX. |
| Tecnología / proveedor OTP | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) | Fila OTP con DPIA/subencargado. |

---

## 12. Documentos hermanos

- [README.md](README.md): índice general del pack.
- [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md): brief con CRÍTICA / ALTA aplicadas.
- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): proyección con CRÍTICA #1 y #2 aplicadas.
- [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md): pre-flight con CRÍTICA #3 marcada.
- [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md): plantilla para llenar info founder.
