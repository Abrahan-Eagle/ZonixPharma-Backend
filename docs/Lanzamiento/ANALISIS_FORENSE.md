# Análisis forense multi-perspectiva del pack

> **Última actualización:** 10 mayo 2026.
> Documento que somete el pack completo a auditoría desde 6 perspectivas narrativas: CEO/founder, economista, especialista en publicidad, cliente final / paciente, operador tercero (farmacia, pharmacist, delivery), inversionista. La **§11.1** y **§11.1 bis** añaden un **mapa rápido por rol ejecutivo** (CFO, COO, Legal, etc.) y lentes **DPO / CISO / auditoría interna / IR** para due diligence. La **§11.4** consolida **síntesis multi-rol** tras lectura cruzada de los 21 documentos del directorio.
> Cada perspectiva lista: fortalezas, hallazgos críticos, inconsistencias, mejoras propuestas con prioridad CRÍTICA / ALTA / MEDIA.
> Las CRÍTICAS y ALTAS detectadas YA ESTÁN APLICADAS en los documentos del pack al cierre de este análisis.

---

## Perspectiva 1 — CEO / Founder técnico

### 1.1 Fortalezas

- **Stack ya construido:** ~4 años de desarrollo del **stack Zonix Pharma** + 397 tests pasando reduce riesgo de ejecución técnica drásticamente.
- **Equipo lean defendible:** sin pharmacist liaison (legalmente correcto), sin diseñador UI/UX (founder tech), **7** FTE operativos en Base (Founder + Co-CEO + 2× Sales + CS+CM + Marketing + Delivery Ops) + **2** freelance (contador + abogado) = **9** puestos costeados; Growth suma **asesor regulatorio** externo — dimensionado para el piloto **Meta + 2 Sales**.
- **Decisión coherente sobre capital:** **USD 101k** (Base) incorpora replante operativo (founder, **Co-CEO**, HQ, IA, CapEx PCs, salarios) con runway 12 meses y **~USD 27.045** cash cierre año 1 ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3). Lean y Growth quedan como alternativas legítimas.
- **Plan T+0 / T+30 / T+60 / T+90 realista:** 30 días para constitución, 30 días para equipo + onboarding farmacias, 30 días para lanzamiento. Honesto.
- **Founder con sueldo simbólico/profesional en Base (USD 1k/mes):** reduce “skin” puro en cash pero evita narrativa inconsistente con burn; el inversor debe verlo en presupuesto §3.3.

### 1.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **CRÍTICA #1** *(histórico mayo 2026)* | Inconsistencia numérica en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) tabla 1.1 (modelo previo): total burn año 1 mal sumado vs. filas. **Estado:** corregido; modelo vigente **Meta + 2 Sales** + replante **101k** + **Co-CEO** — burn año 1 **89.982** (§1.1). |
| **ALTA #1** *(histórico — modelo previo **un solo comercial**)* | El mensaje decía «6+2» pero el conteo correcto **entonces** era **5 FT + 2 FL = 7** (faltaba 1 headcount FT en el texto). **Vigente (Base, Meta + 2 Sales):** **7** FTE operativos + **2** freelance = **9** puestos costeados (Founder + Co-CEO + 2× Sales + CS+CM + Marketing + Delivery Ops — BRIEF, MENSAJE, README §3). **Growth:** misma base operativa + **asesor regulatorio** (costeo [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §4.1). | Alineado. |
| **ALTA #2** | El plan no documenta políticas de seguridad de la información (donde se almacena la receta médica, copias de cédula del KYC, audit log de pago). Para inversor con due diligence formal es un gap. | Aplicado: añadida sección de seguridad y privacidad en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) y referencia explícita en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md). |
| MEDIA | El plan no menciona qué pasa si el founder se enferma o se ausenta inesperadamente. | Documentado plan de contingencia en sección 2 más abajo. |

### 1.3 Inconsistencias detectadas

- **Sueldo del founder en escenarios:** Lean = 0; **Base = USD 1.000/mes**; Growth (tabla histórica) USD 250 desde mes 4 — revisar alineación Growth vs Base en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §4.
- **Calendario T+90:** consistente entre [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md), [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md). OK.

### 1.4 Sugerencias del CEO

- (Aplicada como **ALTA #2**) Añadir sección de seguridad y privacidad explícita al plan operativo.
- Mantener actualizado [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) en cada hito.

---

## Perspectiva 2 — Economista / Analista financiero

### 2.1 Fortalezas

- **LTV/CAC ~8,3x con benchmark sólido:** churn 5% (mediana SaaS B2B SMB LatAm), ARPF USD 45 **placeholder** y CAC USD **109** (construcción bottom-up con **2×** Sales) están justificados en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).
- **Payback CAC ~2,4 meses:** retorno temprano frente a SaaS B2B típicos con billing anual (cuota + fee GMV mensual al nivel del placeholder).
- **Buffer de inflación 20% (ponderado 30/10):** manejo realista de la macro VE. Mejor que asumir USD constantes como muchos otros pitchs.
- **Tres escenarios distintos:** Lean / Base / Growth dan flexibilidad al inversor para elegir nivel de exposición.
- **Plan de contingencia ante shocks:** documentado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 4.

### 2.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **ALTA #3** | El modelo asume tasa de firma 5-15 farmacias/mes desde mes 4. Si **2× Sales** firman menos, el **equilibrio mensual** se retrasa aún más (ya **post-M12** con el burn replanteado). | Aplicado: tabla de sensibilidad en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) sección 7; mitigaciones §1.4; BRIEF y CHECKLIST. |
| **ALTA #4** | El cap del SAFE **USD 600k** para **USD 101k** da **~16,83%** equity. Sigue siendo **generoso para el inversor** vs. muchos pre-seed LatAm citados en 10-12% para tickets similares (referencia histórica **otra generación** de instrumento: ~**13,64%** sobre ticket **~USD 75k** — **no** confundir con la evolución **95k → 101k** del capital Base actual). Justificable por MVP avanzado, founder técnico y **Co-CEO** modelado. | Aplicado: nota en [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) sobre cap como señal al primer inversor. |
| MEDIA | El año 2 proyecta revenue USD 96-108k anuales pero no detalla burn año 2 (más allá de "estabilizado en USD 6.000-6.500"). Inversor sofisticado puede pedir detalle. | Documentado en sección abajo. |
| MEDIA | No hay análisis explícito de "cómo se compone el revenue año 1 vs. cohorts" — solo se da el agregado. Inversor con experiencia SaaS puede pedirlo. | Aplicado: tabla de cohort simulado ya existe en [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) sección 7. Confirmar referencia desde brief. |

### 2.3 Inconsistencias numéricas detectadas

- (CRÍTICA #1 ya tratada en perspectiva CEO).
- Cadena vigente (modelo **Meta + 2 Sales** + replante + **Co-CEO**): ARPF 45 → 107×45 = **4.815** (revenue mes 11) ✓; burn mes 11 **7.371** ✓ (cash flow mes **11** **−2.556** acumulado **−61.576**); **equilibrio mensual post-M12** salvo mitigaciones ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.4). Burn promedio **~7.499** → **~167** farmacias a ARPF 45 y burn tramo bajo ([UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §6).
- Cap table conversión SAFE post-money cap **USD 600k** para **USD 101k** = **~16,83%** ✓ (101.000/600.000).
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
- "Volver a pedir" en un click — ya documentado en [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) sección 3.8.
- Recordatorios mensuales para crónicos (opt-in) — ya documentado.

---

## Perspectiva 5 — Operador tercero (farmacia, pharmacist, delivery)

### 5.1 Fortalezas

- **Pricing transparente para farmacia:** modelo **híbrido** (fija 20/35/50 + % GMV por banda, políticas §5 B2B) es claro y defensible vs. take-rate pleno de Rappi.
- **Ahorro vs. Rappi:** el ticket **Zonix Pharma** suele ser **órden de magnitud menor** que ~25-35% GMV en agregador; cuantificar en vivo con la calculadora del tier ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5).
- **Onboarding farmacéutico colegiado bien justificado:** la Ley del Ejercicio de la Farmacia VE obliga a que el pharmacist sea de la farmacia. El plan respeta esa ley sin contratar pharmacist interno.
- **Repartidor con 0% comisión sobre delivery fee:** atractivo para captar repartidores Yummy / Rappi descontentos con sus comisiones.
- **SLA validación Rx 60 min:** específico, medible.

### 5.2 Hallazgos críticos

| Severidad | Hallazgo | Acción |
|---|---|---|
| **CRÍTICA #2** | El pack promete waiver comercial (cuota **USD 0** meses iniciales) en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §11 y FAQ en [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md); debía quedar **explícito** frente a la tabla §1.1 (caso **sin** waiver para no sobrestimar caja) y la variante **«con waiver»** (**~−USD 200** ingreso año 1 vs. proxy meses 1–2). | **Aplicado:** convención documentada en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 (párrafo previo a la tabla), notas §1.1–1.3 y §11.2 B2B; §8.1 de este informe. |
| **ALTA #8** | Ningún documento detalla cómo se manejan los **picos operativos** (fines de semana, días festivos) ni el plan de capacidad del Customer Support fuera de horario. | Aplicado: añadida sección operativa de horarios y guardias en [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) y en SLA. |
| MEDIA | El pack asume que el farmacéutico colegiado de la farmacia validará Rx digitalmente sin resistencia. En la práctica algunos farmacéuticos mayores rechazan apps. | Documentado: en [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) sección 8 hay objeción + respuesta sobre eso. La capacitación de 30 min y soporte WhatsApp directo son la mitigación. |

### 5.3 Inconsistencias detectadas

- **Comisión Zonix Pharma sobre delivery fee:** Autonomous repartidor 0% en valor pero USD 0,30 fee fijo por orden ([PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) sección A.4). Empresa de delivery 8% ([PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) sección B.4). Coherente — son dos productos distintos.

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

- **Equity implícito SAFE Base:** consistente entre [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md), [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md): **~16,83%**. OK.
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
| **C1** *(histórico — modelo previo)* | Inconsistencia numérica en tabla 1.1 (año 1): total declarado vs. suma de filas **no coincidían** (orden **~54k USD** en el modelo antiguo). **No aplicar al modelo vigente:** burn año 1 Base actual = **89.982** (Meta + 2 Sales + replante + **Co-CEO** — ver PROYECCION §1.1). | ✓ Cerrado en documentos vigentes |
| **C2** | Waiver de 2 meses gratis NO reflejado en proyección | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) tabla 1.1 + dependientes | ✓ Aplicado (ver sección 8) |
| **C3** | Información del founder ausente en pack (50% decisión inversor) | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) + [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) | ✓ **Parcialmente cerrado (mayo 2026):** nombre, contacto, LinkedIn, portfolio, proyectos y párrafo «por qué yo» volcados desde CV/LinkedIn. **Siguen pendientes:** GitHub público o acceso repo bajo NDA, 2–3 referencias, declaración % tiempo Zonix Pharma vs. CETIAC/otros, métricas de tracción por producto si aplica. |

### 7.2 ALTAS (10 detectadas — todas aplicadas)

| # | Hallazgo | Documento | Estado |
|---|---|---|---|
| **A1** | Histórico (un solo comercial): "6+2" vs. conteo real 5+2. **Vigente:** Base **7** FTE + **2** freelance = **9**; Growth + asesor regulatorio. | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) + pack | ✓ Alineado |
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

### 8.1 Fuente de verdad (modelo Base USD 101k, mayo 2026)

La tabla mes a mes **oficial** (sin waiver y con waiver, burn **7.402 / 7.738 / 7.371**, one-shots **~10.408**) está en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §**1.1** y el despliegue de capital en §**1.3**.

**Totales año 1 (extraído del documento vigente):**

| Versión | Revenue año 1 | Burn año 1 | Cash flow acumulado (operativo) |
|---|---|---|---|
| Sin waiver | **26.435** | **89.982** | **−63.547** |
| Con waiver primeras 10 | **26.235** | **89.982** | **−63.747** |

**Lectura:** el waiver «primeras 10» en la tabla §1.1 condona **USD 200** de revenue acumulado año 1 vs. sin waiver (**proxy** de no cobrar los ingresos modelados en **meses 1 y 2**: **35 + 165**). **Impacto bajo** en caja vs. burn total. **Cash en caja** cierre año 1: **~USD 27.045** sin waiver ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3); **~USD 26.845** con esa variante (**−200** sobre inflows). **Equilibrio mensual** con ARPF 45: **posterior a mes 12** (§1.4). Si el comercial otorga waivers **más amplios**, recalcular.

**Control cruzado (10 mayo 2026):** en mes **11** el burn del modelo Base es **7.371** USD/mes (tramo C — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1). Se corrigió el typo **6.371** en [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) y [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) (resto del burn **7.402 / 7.738 / 7.371** ya estaba alineado).

### 8.2 Tabla histórica (modelo 75k / burn 4.9k — solo archivo)

La tabla detallada por mes con burn **4.907 / 5.243 / 4.876** y cash **~34.7k** correspondía al **pack previo al replante**; **no** usarla en materiales al inversor. Conservar solo como trazabilidad de metodología del waiver.

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
1. **Co-CEO** cubre dirección general; **Marketing Lead** aporta apoyo a dirección y ownership de campañas (ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §3.1 y [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md) §4.4).
2. Decisiones operativas urgentes: Customer Support + Delivery Ops.
3. Decisiones técnicas: founder es único responsable del código. Si la ausencia supera 1 semana, contratar consultor técnico external on-demand (USD 50-100/h).
4. Decisiones financieras / equity: pausan hasta retorno.
5. Comunicación al inversor: notificación dentro de 48h con plan de continuidad.

---

## 11. Conclusión del análisis forense

### 11.1 Lentes ejecutivos — chequeo de coherencia del pack (lectura rápida)

| Rol | Qué validar en este directorio | Estado (mayo 2026) |
|-----|----------------------------------|----------------------|
| **CEO** | Narrativa única, hitos T+90, riesgos declarados, contingencia founder | OK — [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md), [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) |
| **CFO** | Cierre **101k** = one-shots + burn + reserva; **§1.1/1.3** PROYECCION; waiver vs. B2B | Ajustado — notas waiver §1.1 PROYECCION + §11.2 [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) |
| **COO** | SLAs, picos demanda, horarios — [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) | OK — ola 3: §8.3 export prudente + enlace [PLAN_REGULATORIO_PHARMA_VE.md](../PLAN_REGULATORIO_PHARMA_VE.md) |
| **CTO / CISO** | Stack, tests, datos, AppSec — README, [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) §14 | OK; CI/repo bajo NDA |
| **CPO** | Propuestas valor B2B/B2C/tercero, roadmap T+X — PROPUESTA_* + PROYECCION §10 | OK |
| **CMO (clínico) / RA / QA-PV** | Claims, controlados, farmacovigilancia — PLAN_MODULO §8–11; marketing salud | Sujeto a dictamen asesor |
| **Compliance / DPO / Legal** | SAFE, tratamiento datos, marco farmacia — [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) §4.4 | Sujeto a abogado |
| **CRO ventas / CMO marketing / CHRO** | Equipo Base **7 FTE + 2 freelance**; CAC/LTV; presupuesto Meta — PRESUPUESTO §3, UNIT_ECONOMICS | OK |
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

### 11.2 Segunda pasada profesional (mayo 2026) — qué se añadió al pack

| Área | Documento(s) | Contenido añadido |
|---|---|---|
| Legal / datos / labor | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) | §4.4 ampliado (responsable, encargados, bases, derechos, transferencias internacionales, contrato marco, SAFE); riesgo laboral freelance. |
| Regulación / operación Rx | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) | §8.2.1 normativa; §7.4 MPPS; §9.6 controlados; §11 farmacovigilancia; §16 playbook; §17 amenazas; §18 QA Day-D; §14.4 retención con disclaimer. |
| Marketing salud | [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) §1.1; [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) | Do/Don't comunicaciones; avisos legales; TTL receta aclarado; disclaimer ahorro. |
| B2B / terceros | [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md); [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) | Objeciones MPPS/datos; contrato marco resumen; SLA logística y frío. |
| CFO / inversor | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §6.3 | Plantilla email investor update + nota FX. |
| Tecnología / proveedor OTP | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) | Fila OTP con DPIA/subencargado. |

### 11.2 ter — Olas de cierre de coherencia (pack inversor, mayo 2026)

| Ola | Objetivo | Documentos tocados (principal) |
|-----|-----------|--------------------------------|
| **1** | Headcount Base **7 FTE + 2** freelance; ALTA#1/A1/CHRO; guion demo delivery; cuestionario § vs README | [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md), [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md), [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md), [README.md](README.md) |
| **2** | Marca producto **Zonix Pharma**; claim MPPS prudente; BRIEF sin `[PENDIENTE]` en montos ya cerrados | [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md), [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md), [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md), [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) |
| **3** | Export/trazabilidad MPPS sin prometer formato oficial; enlace [PLAN_REGULATORIO_PHARMA_VE.md](../PLAN_REGULATORIO_PHARMA_VE.md); Customer Support unificado **Zonix Pharma** en módulo Rx | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) |
| **4** (cierre) | Pagos B2B + métodos de pago + FAQ checklist + PERFIL comparativa; mermaid `AppZonixPharma` / `ZonixPharma` | [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md), [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md), [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md), [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) |
| **5** | Naming **único Zonix Pharma** en todo el pack Lanzamiento: sin «Zonix» / «Zonix Eats» / «ecosistema Zonix»; CV y narrativa técnica bajo la misma marca | [README.md](README.md), [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md), [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md), [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md), [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md), [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md), [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md) |

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
3. Founder cotiza formalmente coworking, valla, abogado, contador.
4. **Abogado** revisa T&C, privacidad, contrato marco farmacia, SAFE; **farmacéutico asesor** valida tabla controlados y copy salud.
5. Lectura final del pack por el founder antes de enviar al primer inversor.

### 11.4 Síntesis auditoría multi-rol (pack completo, mayo 2026)

Lectura cruzada de los **21** `.md` del directorio con lentes ejecutivos y de control. **Evidencia técnica:** el backend del repo pasó **397 tests** / **1636 assertions** (`./vendor/bin/phpunit`, verificación 10 may 2026).

| Rol | Foco en el pack | Veredicto breve |
|-----|-----------------|-----------------|
| **CEO** | Narrativa única **Zonix Pharma**, runway 12m, honestidad post-M12 | **OK** — [CONTEXTO](CONTEXTO_PITCH_Y_DECISIONES.md), [BRIEF](BRIEF_UNA_PAGINA.md), [MENSAJE](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) |
| **CFO** | Fuente §1.1 / §1.3 [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md); caja cierre año 1 **~27.045**; one-shots **~10.408** | **OK** — redondeos “27k” unificados a **27.045** donde el pitch cita cifra ancla |
| **COO** | SLAs, Rx, cold chain, soporte — [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) | **OK** sujeto a operación real piloto |
| **CTO / CISO** | Stack Laravel+Flutter, tests, CI/NDA | **OK** — cifra tests verificada en repo |
| **CPO** | PROPUESTA_* + roadmap T+X [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) | **OK** |
| **CMO clínico / RA / QA-PV** | Claims, controlados, FV — PLAN_MODULO + marketing salud | **Sujeto a dictamen** MPPS/copy salud |
| **Compliance / DPO / Legal** | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) §4.4; SAFE; contrato marco B2B | **Sujeto a abogado**; FAQ M&A SAFE corregida a redacción no engañosa |
| **CRO ventas / CMO marketing / CHRO** | CAC/LTV, equipo 7 FTE + 2 FL | **OK** — [UNIT_ECONOMICS](UNIT_ECONOMICS.md), [CUESTIONARIO](CUESTIONARIO_EQUIPO_PILOTO.md) |
| **Supply / logística** | Cadena frío, delivery — PROPUESTA_TERCER_LADO + PLAN_MODULO | **OK** |
| **CRO riesgos / Auditoría / IR** | Sensibilidades §7 PROYECCION; cap SAFE; VOLCADO founder | **OK** con pendientes GitHub/referencias/% tiempo |

---

## 12. Documentos hermanos

- [README.md](README.md): índice general del pack.
- [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md): brief con CRÍTICA / ALTA aplicadas.
- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): proyección con CRÍTICA #1 y #2 aplicadas.
- [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md): pre-flight con CRÍTICA #3 marcada.
- [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md): plantilla para llenar info founder.
