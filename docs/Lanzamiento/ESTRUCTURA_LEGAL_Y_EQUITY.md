# Estructura legal y equity (SAFE + cap table)

> **Última actualización:** 5 mayo 2026.
> Documento que captura el vehículo legal, instrumento de inversión y cap table de Zonix Pharma.
> Para detalle del marco regulatorio venezolano más amplio, ver [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md).

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

> **Nota:** los USD 1.450 son el rango medio. El presupuesto Lean usa USD 1.150 (sin asesor adicional para acta constitutiva).

## 2. Instrumento de inversión: SAFE post-money cap

### 2.1 Qué es un SAFE post-money cap

**SAFE** = Simple Agreement for Future Equity. Es un contrato de Y Combinator (template público y gratuito en [`https://www.ycombinator.com/documents`](https://www.ycombinator.com/documents)) que dice:

> "Yo, inversor, te doy USD 75.000 hoy. Tú, founder, prometes que cuando levantes la próxima ronda con valuación de mercado, mi inversión convierte automáticamente en acciones, con un cap (techo de valuación) o un descuento — lo que me dé más equity."

**Por qué post-money cap (no pre-money):**
- Versión moderna del SAFE (YC 2018 onwards). Más clara para founder e inversor.
- El cap es la valuación post-money (después de la inversión nueva). El inversor sabe **exactamente** qué % de equity está comprando hoy.

### 2.2 Términos propuestos

| Término | Valor (escenario Base) |
|---|---|
| Monto SAFE | **USD 75.000** |
| Post-money valuation cap | **USD 550.000** |
| Equity implícito si cap aplica | **13,64%** |
| Discount | 0% (sin descuento adicional al cap) |
| Most Favored Nation (MFN) | Sí (cláusula estándar) |
| Pro-rata rights | Opcional, según preferencia del inversor |

**Lectura para el inversor:**
- Si la próxima ronda valora Zonix Pharma en USD 1.000.000, el SAFE convierte como si la valuación fuera **USD 550.000** → el inversor recibe ~**13,64%** del equity post-conversión.
- Si la próxima ronda valora < USD 550.000, el SAFE convierte a la valuación de mercado y el inversor recibe MENOS del 13,64% (caso poco probable, pero posible).

### 2.3 Términos por escenario

| Escenario | Monto SAFE | Cap post-money | Equity implícito |
|---|---|---|---|
| Lean | USD 60.000 | USD 450.000 | 13,33% |
| **Base** | **USD 75.000** | **USD 550.000** | **13,64%** |
| Growth | USD 90.000 | USD 650.000 | 13,85% |

**Lectura:** los tres escenarios tienen un equity implícito muy similar (~13-14%), preservando dilución consistente independiente del ticket. El cap se ajusta proporcionalmente.

### 2.3.1 Nota sobre el cap (ALTA #4 forense)

El benchmark típico de pre-seed LatAm 2025-2026 para tickets USD 50-100k está en torno a **10-12% equity** ([fuente: LatAm VC Report 2024-2025](https://www.endeavor.org.mx/) y reportes Crunchbase). El cap de Zonix Pharma da **13,64%** (Base), ligeramente más generoso para el inversor.

**Decisión consciente del founder:** este cap es **intencional como señal de confianza al primer inversor** (lead investor del SAFE). El piloto tiene mucho más riesgo que un negocio post-PMF; el inversor que entra ahora merece compensación por el riesgo asumido.

**Implicación práctica:** si Zonix Pharma supera el plan (escenario optimista), el primer inversor obtiene retorno desproporcionadamente alto. Eso está bien — es exactamente el deal pre-seed.

### 2.4 Cláusulas adicionales recomendadas

1. **Vesting del founder:** cláusula de re-vesting si Zonix levanta Serie A (founder vesteando 4 años con cliff 1 año desde la Serie A). Protege al inversor.
2. **Información mensual:** primer 6 meses + trimestral después.
3. **Right of First Refusal (ROFR):** el inversor del SAFE tiene derecho a participar en la siguiente ronda hasta mantener su % proporcional.
4. **MFN (Most Favored Nation):** si Zonix emite un SAFE futuro con mejores términos, el inversor actual recibe los mismos términos. Estándar.
5. **Restricciones de transferencia:** el SAFE no se puede vender a terceros sin consentimiento del founder.

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

### 3.2 Post-SAFE (escenario Base, USD 75k cap USD 550k)

> **Nota:** el SAFE NO crea acciones hoy. Sólo al momento de conversión (próxima ronda con valuación de mercado).

| Stakeholder | Acciones | % equity hoy | % equity post-conversión SAFE |
|---|---|---|---|
| Founder | 1.000.000 | 100,00% | ~86,36% (si cap aplica) |
| Inversor SAFE | 0 (todavía) | 0,00% | ~13,64% (al momento de conversión) |

### 3.3 Cap table en próxima ronda Serie A (escenario hipotético, mes 24)

**Hipótesis Serie A:** USD 500.000 a valuación pre-money USD 2.000.000 → post-money USD 2.500.000.

| Stakeholder | Acciones nuevas | % equity post Serie A |
|---|---|---|
| Founder (1.000.000 originales + dilución) | 1.000.000 | 64,00% |
| Inversor SAFE Base (convierte al cap USD 550k) | 213.235 | 13,64% |
| Inversor Serie A (USD 500k) | 312.500 | 20,00% |
| Pool de empleados / advisors (10% reservado) | 156.250 | 10,00% |
| **Diluciones aplicadas** | | |
| **Founder post Serie A** | | **52,36%** |

**Lectura:** el founder mantiene > 50% post Serie A, lo que es saludable y permite seguir liderando el negocio. El inversor del SAFE mantiene su 13,64% (no se diluye más por el cap).

### 3.4 Cap table en escenario optimista (Serie B + IPO o exit en año 5)

| Stakeholder | % final aproximado en exit |
|---|---|
| Founder | ~30-40% |
| Inversor SAFE Base | ~7-10% (con dilución de 2 rondas posteriores) |
| Inversor Serie A | ~12-15% |
| Inversor Serie B | ~15-20% |
| Pool empleados (acumulado) | ~15-20% |

**Lectura:** un inversor de SAFE Base USD 75k en exit a USD 50M tendría ~USD 3,5-5M (40-65x retorno). En exit a USD 100M: USD 7-10M (90-130x).

## 4. Marco legal venezolano (resumen)

### 4.1 Obligaciones SENIAT

- IVA mensual (16%).
- ISLR anual.
- Factura digital habilitada desde mes 2 del piloto.
- Detalle: [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md) sección SENIAT.

### 4.2 Obligaciones laborales

- Si se contrata bajo régimen laboral formal: INCES, Seguro Social, Política Habitacional, vacaciones, utilidades.
- Si se contrata bajo régimen freelance / honorarios profesionales: solo el contrato individual con cada profesional.

**Decisión del piloto:** todo el equipo bajo régimen freelance / honorarios profesionales en USD. Sin nómina formal en piloto. Migración a régimen formal post-Serie A.

**Mitigación riesgo:** contrato escrito con cada freelance, factura mensual, registro contable. Asesor laboral revisa anualmente.

**Riesgo laboral (revisión profesional):** en VE, si una persona **subordinada, con horario fijo y remuneración recurrente** opera como “freelance”, SUNASS / inspectoría laboral puede **reclasificar** la relación como laboral (prestaciones retroactivas). Mitigación: (1) contratos de **honorarios profesionales** con alcance por entregables / mes facturado, sin exclusividad abusiva; (2) **asesor laboral** revisa plantillas antes de T+30; (3) al escalar a nómina formal, migración planificada con contador.

### 4.3 Regulación específica farmacéutica

- **Ley del Ejercicio de la Farmacia (Gaceta Oficial 1971, vigente):** cada farmacia debe tener farmacéutico colegiado. Zonix Pharma NO contrata farmacéutico interno; cada farmacia afiliada aporta el suyo.
- **MPPS (Ministerio del Poder Popular para la Salud):** registro de profesionales colegiados. Zonix verifica número MPPS de cada pharmacist en el onboarding.
- **INHRR (Instituto Nacional de Higiene Rafael Rangel):** registro de medicamentos. Solo se venden productos con INHRR vigente.
- **Detalle:** [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md).

### 4.4 Datos personales y datos de salud (ALTA #2 forense + revisión profesional)

- **Ley de Protección de Datos Personales VE 2025:** vigente. Define consentimiento, finalidades y derechos de los titulares. **Textos legales** (aviso de privacidad, T&C app, contrato marco farmacia) deben ser **revisados y firmados** por abogado antes de Day-D público.
- Datos de salud (recetas, historial de medicamentos, inferencias): **categoría sensible**; consentimiento explícito, minimización, retención acotada, medidas técnicas y **registro de tratamiento**.
- Implementación técnica y operativa: [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) secciones **13** (seguridad), **15** (playbook incidencias), **16** (modelo de amenazas) y **17** (QA / listo para piloto).

#### 4.4.1 Roles en el tratamiento (due diligence)

| Rol | Quién | Función |
|---|---|---|
| **Responsable del tratamiento** | **ZONIX PHARMA, C.A.** (una vez constituida) | Decide fines y medios del tratamiento de datos de usuarios de la plataforma. |
| **Responsables independientes** | **Cada farmacia afiliada** | Tratamiento de datos en **sucursal física** (receta retenida, libro de control, dispensación). |
| **Encargados del tratamiento (subencargados)** | Proveedores con contrato tipo **DPA** (Data Processing Agreement): hosting (p. ej. nube), push/notificaciones, OTP WhatsApp si aplica, email transaccional, soporte con acceso acotado | Tratan datos **por cuenta y orden** de Zonix Pharma; lista cerrada y revisión anual. |

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

## 5. Equity de futuros empleados / advisors (ALTA #9 forense)

### 5.0 Single-founder y plan de mitigación

Zonix Pharma arranca con **un solo founder técnico** (CEO + CTO en la misma persona). Esto es válido para pre-seed pero merece transparencia:

- **Riesgo:** dependencia técnica + decisional en un único individuo.
- **Mitigación pre-PMF:** rol de CEO interino delegado en el Marketing Lead, ya documentado en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) y [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md).
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
| 0 (cierre inversión) | Firma SAFE. Transferencia USD 75k a cuenta personal del founder (transitoria). |
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
- [`../REQUISITOS_OPERAR_VENEZUELA.md`](../REQUISITOS_OPERAR_VENEZUELA.md): marco regulatorio completo.
- [`../PLAN_REGULATORIO_PHARMA_VE.md`](../PLAN_REGULATORIO_PHARMA_VE.md): regulación farmacéutica VE.
