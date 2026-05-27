# Estructura legal y equity (SAFE + cap table)

> **Última actualización:** 27 mayo 2026.
> Documento que captura el vehículo legal, instrumento de inversión y cap table de Zonix Pharma.
> Marco regulatorio **Pharma:** [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md). Pagos/Sudeban: [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §10. Archivo Eats (solo referencia): [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md).

**Roles operativos vs gobernanza:** el pack usa **Co-CEO / CEO operativo** junto al **CEO+CTO (founder)** como **rótulos de trabajo** (comercial / operación vs producto-tech). El **representante legal**, **junta**, **relación laboral** y el **SAFE** siguen lo que acuerden **abogado + partes**; no se asume que “dos CEO” dupliquen obligaciones legales sin documentarlo.

**Lectura inversor (30 min):** §2 SAFE (cap según tier) → §3 cap table post-conversión → §4 datos personales / subencargados → anexo template YC cuando abogado lo adjunte `[PENDIENTE]`.

## 1. Vehículo legal

### 1.1 Forma societaria

**Compañía Anónima (C.A.)** registrada en el Registro Mercantil del Estado Carabobo.

**Por qué C.A.:**
- Forma societaria estándar en Venezuela.
- Permite varios accionistas con responsabilidad limitada.
- Aceptada por SENIAT, bancos, contrapartes B2B.
- Compatible con SAFE: el inversor recibe shares al momento de conversión.

**Alternativas descartadas:**
- **Firma personal del founder:** sin separación patrimonial. Inseguro para el inversor.
- **C.A. en Panamá / Delaware:** complejidad regulatoria + costo > USD 5.000 + reporte cross-border. No justificado en piloto.
- **S.A. (Sociedad Anónima):** equivalente a C.A. en VE pero con más formalidades. C.A. es más liviana para PYMES.

### 1.2 Razón social propuesta

**ZONIX PHARMA, C.A.** o **ZONIXPHARMA, C.A.** (según disponibilidad en Registro Mercantil al momento del trámite).

### 1.3 Capital social propuesto

- Capital social de constitución: **USD 1.000 equivalente en bolívares al cambio del día**.
- Acciones: **1.000.000 acciones** a USD 0,001 cada una.
- 100% propiedad inicial del founder (1.000.000 acciones).

**Por qué USD 1.000:**
- Capital mínimo simbólico para constitución.
- Aprovecha valuación implícita de USD 0,001 por acción para dilución limpia post-SAFE.
- Costo de constitución se mantiene bajo.

### 1.4 Trámites de constitución (~30 días, USD 1.150)

| Paso | Tiempo | Costo USD |
|---|---|---|
| Solicitud de denominación en Registro Mercantil | 5 días | 50 |
| Acta constitutiva + estatutos (con abogado) | 7 días | 400 |
| Registro Mercantil del Estado Carabobo | 10 días | 350 |
| RIF empresa (SENIAT) | 2 días | 0 |
| Apertura cuenta bancaria empresa | 5 días | 100 |
| Sello digital + factura digital SENIAT | 3 días | 200 |
| Registro de marca SAPI (paralelo) | 60-90 días | 350 |
| **Total** | **~30 días + 60-90 marca SAPI** | **~1.450** |

> **Nota:** esta tabla detalla cada trámite (total **~USD 1.450** con SAPI y sello digital en la misma lista). El [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2.1 agrupa los trámites operativos prioritarios en el **one-shot Lean de USD 1.150** (constitución + RIF + apertura cuenta + sello; SAPI puede correr en paralelo como gasto diferido). El delta (**~USD 300**) corresponde principalmente a **SAPI** y partidas opcionales según avance del trámite.
>
> **Lectura CFO (1.150 vs 1.450):** **constitución operativa prioritaria** (C.A. + RIF + cuenta + sello, **sin** contabilizar SAPI como caja obligatoria el mes cero) **USD ~1.100–1.150**. **Con SAPI** en la misma ventana de planificación: **~USD 1.450**. El presupuesto §2.1 usa **USD 1.150** como **one-shot prioritario** al arranque; **SAPI** puede tratarse como **gasto diferido / paralelo** según caja y dictamen contable.

## 2. Instrumento de inversión: SAFE post-money cap

### 2.1 Qué es un SAFE post-money cap

**SAFE** = Simple Agreement for Future Equity. Es un contrato de Y Combinator (template público y gratuito en [`https://www.ycombinator.com/documents`](https://www.ycombinator.com/documents)) que dice:

> "Yo, inversor, te doy USD 101.000 hoy (escenario **Lean — mínimo viable**). Tú, founder, prometes que cuando levantes la próxima ronda con valuación de mercado, mi inversión convierte automáticamente en acciones, con un cap (techo de valuación) o un descuento — lo que me dé más equity."

**Por qué post-money cap (no pre-money):**
- Versión moderna del SAFE (YC 2018 onwards). Más clara para founder e inversor.
- El cap es la valuación post-money (después de la inversión nueva). El inversor sabe **exactamente** qué % de equity está comprando hoy.

### 2.2 Términos propuestos

| Término | Valor (escenario Lean — mínimo viable) |
|---|---|
| Monto SAFE | **USD 101.000** |
| Post-money valuation cap | **USD 600.000** |
| Equity implícito si cap aplica | **16,83%** *(101k / 600k)* |
| Discount | 0% (sin descuento adicional al cap) |
| Most Favored Nation (MFN) | Sí (cláusula estándar) |
| Pro-rata rights | Opcional, según preferencia del inversor |

**Lectura para el inversor:**
- Si la próxima ronda valora Zonix Pharma en USD 1.000.000, el SAFE convierte como si la valuación fuera **USD 600.000** → el inversor recibe ~**16,83%** del equity post-conversión.
- Si la próxima ronda valora < USD 600.000, el SAFE convierte a la valuación de mercado y el inversor recibe MENOS del 16,83% (caso poco probable, pero posible).

### 2.3 Términos por escenario

| Escenario | Monto SAFE | Cap post-money | Equity implícito |
|---|---|---|---|
| **Lean (mínimo viable)** | **USD 101.000** | **USD 600.000** | **16,83%** |
| **Base (recomendado)** | **USD 118.000** | **USD 650.000** | **18,15%** |
| **Growth (acelerado)** | **USD 135.000** | **USD 720.000** | **18,75%** |

**Lectura:** los tres tiers comparten el **mismo núcleo operativo** (Co-CEO, IA, 4× Sales). La escalera **101k < 118k < 135k** refleja **colchón comercial/regulatorio** y **reserva runway**, no un producto distinto.

### 2.3.1 Nota sobre el cap (ALTA #4 forense)

El benchmark típico de pre-seed LatAm 2025-2026 para tickets USD 50-100k está en torno a **10-12% equity** ([fuente: LatAm VC Report 2024-2025](https://www.endeavor.org.mx/) y reportes Crunchbase). El cap de Zonix Pharma (**Lean USD 101k** / cap **USD 600k**) da **~16,83%**, algo más alto que el benchmark medio — coherente con ticket, **Co-CEO** y costo fijo del replante operativo (ver [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2).

**Decisión consciente del founder:** este cap es **intencional como señal de confianza al primer inversor** (lead investor del SAFE). El piloto tiene mucho más riesgo que un negocio post-PMF; el inversor que entra ahora merece compensación por el riesgo asumido.

**Implicación práctica:** si Zonix Pharma supera el plan (escenario optimista), el primer inversor obtiene retorno desproporcionadamente alto. Eso está bien — es exactamente el deal pre-seed.

### 2.4 Cláusulas adicionales recomendadas

1. **Vesting del founder:** cláusula de re-vesting si **Zonix Pharma** levanta Serie A (founder vesteando 4 años con cliff 1 año desde la Serie A). Protege al inversor.
2. **Información al inversor (information rights):** reportes **mensuales** los **primeros 6 meses** pos-cierre; **trimestrales** después. Formato: email + adjuntos acordados (métricas §6 [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)).
3. **Derechos de observación (opcional):** **board observer** sin voto en junta — solo si el ticket ≥ umbral acordado (ej. lead USD 50k+); no administración operativa diaria.
4. **Asuntos reservados** (requieren notificación previa al inversor por escrito si impactan valor/dilución): cambio de control; nueva emisión que diluya **> 10%** pre-money en una sola ronda; remuneración anual del founder por encima de umbral definido; pivot que abandone vertical farmacéutico.
5. **Right of First Refusal (ROFR):** el inversor del SAFE tiene derecho a participar en la siguiente ronda hasta mantener su % proporcional.
6. **MFN (Most Favored Nation):** si **Zonix Pharma** emite un SAFE futuro con mejores términos, el inversor actual recibe los mismos términos. Estándar.
7. **Restricciones de transferencia:** el SAFE no se puede vender a terceros sin consentimiento del founder.

### 2.5 Documento físico

- **Template:** Y Combinator post-money cap SAFE (template público).
- **Adaptación:** abogado venezolano adapta a marco legal local (gobernabilidad, jurisdicción, idioma — bilingüe español/inglés recomendado).
- **Costo de adaptación legal:** USD 200-400 one-shot.
- **Firma:** electrónica con DocuSign o equivalente. Notariado VE opcional pero recomendado.

## 3. Cap table proyectado

### 3.1 Pre-SAFE (hoy)

| Stakeholder | Acciones | % equity |
|---|---|---|
| Founder | 1.000.000 | 100,00% |

### 3.2 Post-SAFE (escenario Lean, USD 101k cap USD 600k)

> **Nota:** el SAFE NO crea acciones hoy. Sólo al momento de conversión (próxima ronda con valuación de mercado).

| Stakeholder | Acciones | % equity hoy | % equity post-conversión SAFE |
|---|---|---|---|
| Founder | 1.000.000 | 100,00% | ~83,17% (si cap aplica) |
| Inversor SAFE | 0 (todavía) | 0,00% | ~16,83% (al momento de conversión) |

### 3.3 Cap table en próxima ronda Serie A (escenario hipotético, mes 24)

**Hipótesis Serie A:** USD 500.000 a valuación pre-money USD 2.000.000 → post-money USD 2.500.000.

**Interpretación SAFE post-money cap (YC estándar):** el inversor del SAFE convierte a un **% fijo** del cap table (aquí **16,83%** = USD 101k / USD 600k cap) y **no se diluye** con la Serie A por el cap; la dilución del pool y de la nueva ronda la absorbe principalmente el founder. Los **números exactos de acciones** y el orden de emisión (pool pre/post money) los cierra el **abogado** al redactar el SAFE y la Serie A.

| Stakeholder | % equity post Serie A (ilustrativo) |
|---|---|
| Founder | **53,17%** |
| Inversor SAFE Lean (cap USD 600k) | **16,83%** |
| Inversor Serie A (USD 500k / post-money USD 2,5M) | **20,00%** |
| Pool de empleados / advisors (10% reservado) | **10,00%** |
| **Total** | **100,00%** |

**Lectura:** el founder mantiene **> 50%** post Serie A (**53,17%** en este ejemplo), lo que es saludable y permite seguir liderando el negocio. El inversor del SAFE mantiene su **16,83%** (no se diluye más por el cap).

### 3.4 Cap table en escenario optimista (Serie B + IPO o exit en año 5)

| Stakeholder | % final aproximado en exit |
|---|---|
| Founder | ~30-40% |
| Inversor SAFE Lean | ~7-10% (con dilución de 2 rondas posteriores) |
| Inversor Serie A | ~12-15% |
| Inversor Serie B | ~15-20% |
| Pool empleados (acumulado) | ~15-20% |

**Lectura:** un inversor de SAFE **Lean** USD 101k en exit a USD 50M tendría ~USD 4,7-6,7M (ilustrativo).

## 4. Marco legal venezolano (resumen)

### 4.1 Obligaciones SENIAT

- IVA mensual (16%).
- ISLR anual.
- Factura digital habilitada desde mes 2 del piloto.
- Detalle facturación: [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §4; marco VE: [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md) §6.

### 4.2 Obligaciones laborales

- Si se contrata bajo régimen laboral formal: INCES, Seguro Social, Política Habitacional, vacaciones, utilidades.
- Si se contrata bajo régimen freelance / honorarios profesionales: solo el contrato individual con cada profesional.

**Decisión del piloto:** todo el equipo bajo régimen freelance / honorarios profesionales en USD. Sin nómina formal en piloto. Migración a régimen formal post-Serie A.

**Mitigación riesgo:** contrato escrito con cada freelance, factura mensual, registro contable. Asesor laboral revisa anualmente.

**Riesgo laboral (revisión profesional):** en VE, si una persona **subordinada, con horario fijo y remuneración recurrente** opera como “freelance”, SUNASS / inspectoría laboral puede **reclasificar** la relación como laboral (prestaciones retroactivas). Mitigación: (1) contratos de **honorarios profesionales** con alcance por entregables / mes facturado, sin exclusividad abusiva; (2) **asesor laboral** revisa plantillas antes de T+30; (3) al escalar a nómina formal, migración planificada con contador.

### 4.3 Regulación específica farmacéutica

- **Ley del Ejercicio de la Farmacia (Gaceta Oficial 1971, vigente):** cada farmacia debe tener farmacéutico colegiado. Zonix Pharma NO contrata farmacéutico interno; cada farmacia afiliada aporta el suyo. *Copy comercial y T&C: [PENDIENTE dictamen abogado + farmacéutico asesor antes de Day-D].*
- **MPPS (Ministerio del Poder Popular para la Salud):** registro de profesionales colegiados. **Zonix Pharma** verifica número MPPS de cada pharmacist en el onboarding.
- **INHRR (Instituto Nacional de Higiene Rafael Rangel):** registro de medicamentos. Solo se venden productos con INHRR vigente.
- **Detalle:** [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md).

### 4.4 Datos personales y datos de salud (ALTA #2 forense + revisión profesional)

- **Ley de Protección de Datos Personales (Venezuela):** existe **proyecto de ley** en discusión / tramitación en **2025-2026**; **confirmar estado de promulgación** con abogado antes de citar “vigencia”. **Mientras tanto:** aplicar **buenas prácticas** alineadas a estándares internacionales (consentimiento, minimización, seguridad, derechos titular, encargados/DPA) como ya describe el pack operativo.
- **Textos legales** (aviso de privacidad, T&C app, contrato marco farmacia) deben ser **revisados y firmados** por abogado antes de Day-D público.
- Datos de salud (recetas, historial de medicamentos, inferencias): **categoría sensible**; consentimiento explícito, minimización, retención acotada, medidas técnicas y **registro de tratamiento**.
- Implementación técnica y operativa: [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) secciones **13** (seguridad), **15** (playbook incidencias), **16** (modelo de amenazas) y **17** (QA / listo para piloto).

#### 4.4.1 Roles en el tratamiento (due diligence)

| Rol | Quién | Función |
|---|---|---|
| **Responsable del tratamiento** | **ZONIX PHARMA, C.A.** (una vez constituida) | Decide fines y medios del tratamiento de datos de usuarios de la plataforma. |
| **Responsables independientes** | **Cada farmacia afiliada** | Tratamiento de datos en **sucursal física** (receta retenida, libro de control, dispensación). |
| **Encargados del tratamiento (subencargados)** | Proveedores con contrato tipo **DPA** (Data Processing Agreement): hosting (p. ej. VPS), push/notificaciones (**Firebase** FCM), verificación teléfono (**Firebase Phone Auth** / SMS), email transaccional, soporte con acceso acotado | Tratan datos **por cuenta y orden** de Zonix Pharma; lista cerrada y revisión anual. |

> **Pendiente legal:** mantener **registro de actividades de tratamiento** (ART) simple: finalidad, categorías de datos, categorías de interesados, subencargados, plazos de conservación, medidas de seguridad. Elaborar en **mes 1** con abogado (hoja única o documento interno).

#### 4.4.2 Bases jurídicas (resumen para pack)

- **Ejecución de contrato / prestación del servicio:** cuenta, pedidos, pagos, entregas.
- **Consentimiento explícito:** subida de receta, datos de salud opcionales, marketing no esencial.
- **Obligación legal:** facturación, retenciones contables, respuesta a autoridad competente con orden fundada.

#### 4.4.3 Derechos del titular (paciente / usuario)

- Acceso, rectificación, supresión (salvo excepciones legales de conservación), oposición a tratamientos opcionales, portabilidad razonable.
- **Canal:** formulario en app + email a contacto oficial de la C.A. (definir en constitución). SLA interno de respuesta: **15 días hábiles** (ajustar a norma cuando el reglamento lo precise).

#### 4.4.4 Transferencias internacionales

- Si un proveedor aloja datos o procesa notificaciones **fuera de VE** (p. ej. EE.UU./UE), el aviso de privacidad debe indicarlo y basarse en **cláusulas contractuales tipo**, consentimiento específico o decisión de adecuación — **validar redacción con abogado**.

#### 4.4.5 Contrato marco farmacia–Zonix (B2B)

- Debe existir **contrato o anexo** que distribuya: (1) quién valida Rx; (2) custodia de receta física; (3) uso de marca; (4) límites de responsabilidad por desabastecimiento; (5) tratamiento de datos del paciente compartidos con la farmacia; (6) salida de datos al cierre de la relación.
- Plantilla base: abogado corporativo + visado **farmacéutico asesor** en cláusulas de dispensación.

#### 4.4.6 SAFE e instrumentos foráneos

- El **SAFE (YC)** es estándar internacional; su **vigencia y interpretación** en litigios VE puede requerir **cláusula de ley y jurisdicción** y traducción al español para registros locales. **Recomendación:** abogado con experiencia **cross-border** o al menos revisión de enforceability antes de firma.

### 4.5 SAPI (registro de marca)

- **Marca:** "Zonix Pharma" + logotipo Z geométrico.
- **Costo:** USD 250-400 one-shot.
- **Tiempo:** 60-90 días desde solicitud.
- **Vigencia:** 10 años renovables.

### 4.6 KYC / AML y rol eventual como agregador de pagos (Sudeban)

**Piloto (mes 0-6):** **Zonix Pharma** **no** recauda del paciente en nombre de terceros de forma centralizada — flujo documentado en [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md); riesgo PSP limitado.

**Triggers para plan formal mes 6+** (activar con abogado + especialista Sudeban):

| Trigger | Umbral orientativo | Acción |
|---|---|---|
| Volumen mensual agregado de fondos que transitan por cuentas corporativas de **Zonix Pharma** | > orden **USD X** / mes (definir con contador y banco) | Evaluación licencia / figura adaptada |
| % de transacciones **cross-border** (Zelle/USDT) sobre total | > **30-40%** sostenido 3 meses | Refuerzo KYC contrapartes + política AML escrita |
| **Zonix Pharma** pasa a liquidar **directamente** a farmacias/repartidores como intermediario | Cualquier volumen | Due diligence Sudeban antes de encender |

**Componentes del programa:** KYC de farmacias (ya previsto onboarding), lista restrictiva interna, monitoreo de tickets fraud, conservación de evidencias, designación de **responsable compliance** (part-time CFO/legal hasta hire dedicado).

## 5. Equity de futuros empleados / advisors (ALTA #9 forense)

### 5.0 Single-founder y plan de mitigación

Zonix Pharma arranca con **un solo founder técnico** (CEO + CTO en la misma persona). Esto es válido para pre-seed pero merece transparencia:

- **Riesgo:** dependencia técnica + decisional en un único individuo.
- **Mitigación pre-PMF:** **Co-CEO** para dirección general + **Marketing Lead** para creatividad/campañas, documentado en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) y [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md).
- **Mitigación post-PMF (post-Serie A):** primer hire es un **CTO o Head of Engineering** que asume el stack mientras el founder se mueve a CEO 100%.
- **Advisors potenciales en mes 6-12:** un advisor regulatorio farmacéutico VE (0,5%-1% equity vesting 2 años) y un advisor comercial con experiencia retail VE (0,25%-0,5% equity).

### 5.1 Pool reservado

- **Pre Serie A:** se reserva **10% del cap table** post-conversión SAFE para empleados clave + advisors.
- **Post Serie A:** se amplía a **15-20%** según necesidades.

### 5.2 Política de stock options

- **Vesting:** 4 años con cliff 1 año.
- **Strike price:** valor justo de mercado al momento de otorgamiento.
- **Acelerador:** 50% acelerado en cambio de control (acquisition) — estándar.
- **No options en piloto:** los freelances tienen contrato directo, sin equity. Solo se otorgan stock options a empleados formales post-Serie A.

### 5.3 Advisors

- 0,25% - 1% por advisor según valor aportado.
- Vesting 2 años con cliff 6 meses.
- Posible en mes 6-12 si aparece advisor regulatorio o de marketing relevante.

## 6. Riesgos legales y mitigaciones

| Riesgo | Probabilidad | Mitigación |
|---|---|---|
| Cambio en regulación marketplace | Media | Asesor regulatorio externo + revisión Gaceta semanal |
| MPPS bloquea validación digital de receta | Baja-media | Trazabilidad + firma digital + auditoría on-demand |
| SENIAT exige factura digital antes de mes 2 | Media | Habilitar desde mes 1 con proveedor autorizado |
| Devaluación bolívar afecta capital social | Alta | Capital social simbólico USD 1.000; dilución limpia |
| Inversor del SAFE quiere exit antes de Serie A | Baja | Cláusula explícita: SAFE solo convierte en próxima ronda |
| Disputas contractuales con farmacias | Media | T&C bilaterales firmados al onboarding + mediación Customer Support |

## 7. Documentos legales que se entregan al inversor

Al cierre de la inversión, el inversor recibe:

1. **SAFE firmado** (PDF + original notariado opcional).
2. **Acta constitutiva y estatutos** de Zonix Pharma C.A. (cuando se constituya, ~30 días post-cierre).
3. **Registro Mercantil** estampado.
4. **RIF de la empresa.**
5. **Cap table actualizado.**
6. **Carta de declaración del founder:** confirma que el SAFE es la única deuda de la empresa al momento de firma.
7. **Plan operativo de 12 meses:** este pack completo.

## 8. Cronograma legal post-inversión

| Mes | Hito |
|---|---|
| 0 (cierre inversión) | Firma SAFE. Transferencia **USD 101k** (**Lean — mínimo viable**) a cuenta personal del founder (transitoria) o cuenta empresa. |
| 1 | Constitución legal C.A. completa. Apertura cuenta bancaria empresa. Transferencia interna founder → C.A. |
| 1-2 | RIF + factura digital SENIAT habilitados. |
| 2-3 | Marca SAPI registrada (paralelo). |
| 3 | Day-D del piloto. Operación oficial de la C.A. |
| 4-6 | Reporte mensual al inversor. |
| 7-12 | Reporte trimestral al inversor. |
| 18-24 | Posible Serie A. Conversión del SAFE. |

## 9. Documentos hermanos

- [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md): resumen de instrumento.
- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): cómo se gasta el SAFE.
- [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md): T+30 / T+60 / T+90.
- [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md): marco farmacéutico VE.
- [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) §10: Sudeban y no intermediación en piloto.
- [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md): regulación farmacéutica VE.
