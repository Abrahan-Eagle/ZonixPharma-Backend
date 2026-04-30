# Estructura legal y equity — Zonix Eats (Creesca)

> **Propósito:** definir el vehículo legal para operar, facturar membresías B2B, y recibir inversión. Este documento **no sustituye asesoría legal** — es una guía de decisión para que el equipo llegue al abogado con las preguntas correctas.  
> **Estado:** borrador de planificación; requiere dictamen de abogado mercantil en Venezuela.  
> **Fuentes:** Código de Comercio VE, Ley de Emprendimiento 2023, SENIAT providencias 2024, consultas web 2026.  
> **Última actualización:** abril 2026.

---

## 1. Estado actual

| Aspecto | Situación |
|---------|-----------|
| Entidad existente | **Asociación civil sin fines de lucro** con objeto amplio |
| RIF | Existe (de la asociación) |
| Facturación SENIAT | No implementada para membresías B2B |
| Cuenta bancaria jurídica | Pendiente verificar si la asociación tiene cuenta activa |
| Contratos con comercios | No existen |
| Propiedad intelectual (marca, código) | No registrada formalmente |

### 1.1 Problema con la asociación actual

Una **asociación civil sin fines de lucro** tiene limitaciones serias para este modelo de negocio:

| Limitación | Impacto |
|-----------|---------|
| No puede distribuir utilidades a socios/founders | Si entra inversión, no hay mecanismo legal para retorno |
| Objeto social puede no cubrir actividad comercial SaaS | SENIAT podría objetar facturación de membresías |
| Percepción ante inversionista | Genera desconfianza; no es vehículo estándar para inversión |
| No emite acciones ni cuotas de participación | No hay cap table posible |
| Auditoría y regulación | Diferente régimen fiscal; puede generar contingencias |

**Recomendación:** constituir un **vehículo mercantil** (SRL o C.A.) para la operación comercial. La asociación puede mantenerse para otros fines si aplica.

---

## 2. Opciones de vehículo legal

| Tipo | Descripción | Socios mínimos | Capital mínimo | Acciones/cuotas | Facturación B2B | Recibir inversión | Costo constitución estimado |
|------|-------------|---------------|---------------|-----------------|-----------------|-------------------|---------------------------|
| **SRL (Sociedad de Responsabilidad Limitada)** | Socios responden hasta el capital aportado. Cuotas de participación. | 2 | ~$3.000–6.000 USD equiv. en Bs (criterio SAREN) | Cuotas (no acciones) | Sí | Sí (cesión de cuotas) | $800–1.500 |
| **C.A. (Compañía Anónima)** | Accionistas con acciones nominativas. Más flexible para inversión. | 2 | ~$3.000–10.000 USD equiv. (criterio SAREN) | **Acciones** | Sí | **Sí (emisión de acciones, más flexible)** | $1.000–2.000 |
| **Firma personal** | Un solo titular. | 1 | Bajo | No | Sí (limitado) | No (no hay participación) | $300–500 |
| **Asociación civil** (actual) | Sin fines de lucro | 5+ | Variable | No | Restringido | **No recomendado** | Ya existe |

### 2.1 Recomendación preliminar

**Compañía Anónima (C.A.)** es la opción más adecuada para Zonix Eats:

- Permite **emitir acciones** → cap table claro para founders e inversionista.
- Facilita **entrada y salida de socios** mediante compraventa de acciones.
- Es el vehículo estándar para startups en Venezuela.
- Permite **facturar membresías B2B** sin restricciones.
- Compatible con **Ley de Emprendimiento 2023** (beneficios fiscales si ventas < 10.000× tipo de cambio oficial).

**Alternativa aceptable:** SRL si se prefiere menor formalidad. La diferencia práctica principal es que las cuotas de participación de una SRL requieren reforma de estatutos para transferirse (más lento), mientras que las acciones de una C.A. se transfieren por endoso.

---

## 3. Cap table — escenarios borrador

### 3.1 Pre-inversión (founders)

| Socio | Rol | Participación |
|-------|-----|--------------|
| Founder 1 (programador/CTO) | Desarrollo, producto, tecnología | 50–60 % |
| Founder 2 / Co-founder (ops/negocio) | Operaciones, captación, marketing | 30–40 % |
| **Pool para equipo futuro** | Reservado para primeros empleados clave | 5–10 % |
| **Total** | | **100 %** |

*Si hay un solo founder activo, considerar reservar el segundo bloque para co-founder operativo que se incorpore pronto. Esto es fuerte ante inversionista: demuestra que sabes que necesitas contraparte de negocio.*

### 3.2 Post-inversión — escenarios

| Escenario | Founders | Inversionista | Pool equipo | Nota |
|-----------|---------|--------------|-------------|------|
| **A — Inversión pequeña ($5.000–8.000)** | 80 % | 10–15 % | 5–10 % | Ángel/amigo; más equity por riesgo temprano |
| **B — Inversión media ($10.000–15.000)** | 70 % | 20–25 % | 5–10 % | Ángel serio; runway 12 meses con OOH |
| **C — Inversión + red ($15.000+)** | 65 % | 25–30 % | 5–10 % | Smart money; inversionista aporta red de comercios o delivery |

**Regla general:** en fase pre-revenue, el inversionista asume alto riesgo y pide más equity. Pero los founders deben conservar **>50 %** para mantener control y motivación.

---

## 4. Instrumentos de inversión

| Instrumento | Descripción | Pros | Contras | Aplica en VE |
|------------|-------------|------|---------|-------------|
| **Equity directo** | Inversionista compra acciones a un precio acordado (valoración pre-money) | Simple, claro, estándar | Requiere valoración (difícil pre-revenue); dilución inmediata | **Sí** |
| **Préstamo convertible** | Préstamo que se convierte en acciones en una ronda futura o al cumplir condiciones | No requiere valoración hoy; inversionista tiene protección de deuda | Complejidad legal; riesgo de conversión si no hay ronda futura | **Sí** (redactar en estatutos) |
| **Préstamo simple** | Deuda con interés y plazo fijo | Sin dilución; relación clara | Obligación de pago aunque el negocio no genere; presión de flujo de caja | **Sí** |
| **SAFE (Simple Agreement for Future Equity)** | Acuerdo estándar de Y Combinator: inversión hoy, acciones en evento futuro (ronda, venta, etc.) | Sin valoración, sin interés, simple | Poco conocido en ecosistema VE; puede requerir adaptación legal | **Posible** (adaptar con abogado) |
| **Revenue-based financing** | Inversionista recibe % de ingresos mensuales hasta recuperar X múltiplo | Alineado con crecimiento; sin dilución permanente | Solo funciona cuando hay ingresos; complejo de administrar | **Posible** (mes 6+) |

### 4.1 Recomendación por escenario

| Si el inversionista es... | Instrumento sugerido |
|--------------------------|---------------------|
| Amigo/familiar que confía en el proyecto | **Préstamo convertible** (protege al inversionista, no requiere valoración) |
| Ángel con experiencia en startups | **Equity directo** o **SAFE adaptado** (entiende el riesgo, quiere participación) |
| Persona que quiere retorno fijo | **Préstamo simple** con tasa y plazo (evita complicaciones de equity) |

---

## 5. Pasos legales concretos

| Paso | Qué hacer | Responsable | Costo estimado | Tiempo estimado |
|------|----------|-------------|---------------|-----------------|
| 1 | **Consulta abogado mercantil** — validar C.A. vs SRL, revisar asociación actual, definir instrumento de inversión | Founder | $100–200 (consulta) | 1 semana |
| 2 | **Reserva de nombre** en SAREN (si se constituye nueva entidad) | Abogado | ~$60 | 3–5 días |
| 3 | **Redacción de acta constitutiva y estatutos** de la C.A. / SRL | Abogado | $200–400 | 1–2 semanas |
| 4 | **Protocolización** ante Registro Mercantil (SAREN) | Abogado | ~3 % del capital declarado | 2–4 semanas |
| 5 | **RIF** de la nueva entidad ante SENIAT | Contador | Incluido en honorarios | 1–2 semanas |
| 6 | **Habilitación de facturación digital** (Providencias SNAT/2024/000102 y 000121) | Contador + proveedor software homologado | Variable ($50–200/mes software) | 2–4 semanas |
| 7 | **Apertura cuenta bancaria jurídica** | Founder + contador | Según banco | 2–6 semanas |
| 8 | **Inscripciones obligatorias** (IVSS, INCES, BANAVIH si hay empleados) | Contador | Incluido en honorarios | 1–2 semanas |
| 9 | **Contrato de inversión** (según instrumento elegido) | Abogado | $200–500 | 1–2 semanas |
| 10 | **Registro de marca** "Zonix Eats" ante SAPI | Abogado PI | $100–300 | 3–6 meses |

### 5.1 Timeline consolidado

| Semana | Actividad |
|--------|-----------|
| 1 | Consulta abogado; decidir vehículo e instrumento |
| 2–3 | Redacción estatutos; reserva de nombre |
| 4–6 | Registro mercantil; obtención RIF |
| 6–8 | Cuenta bancaria; facturación digital |
| 8–10 | Contrato de inversión firmado; primera factura de membresía (si hay comercio activo) |

**Costo total estimado (constitución + primer año):** $800–2.000 USD (honorarios abogado + contador + aranceles). Esto ya está contemplado como "legal placeholder $800" en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md); ajustar si la cotización real es mayor.

---

## 6. Facturación digital SENIAT — requisitos clave

Desde marzo 2025, la facturación digital es obligatoria para contribuyentes que operan por medios electrónicos (Providencia SNAT/2024/000102).

| Requisito | Detalle |
|-----------|---------|
| Software homologado | Debe estar certificado por SENIAT bajo Providencia 000121 |
| Imprenta digital autorizada | Para asignación de números de control fiscal |
| Autorización previa | Solicitud formal ante Gerencia Regional de Tributos Internos |
| Conservación | 10 años mínimo |
| Alcance | Aplica a Zonix si vende membresías por medios electrónicos |

**Zonix como contribuyente 100 % digital:** al cobrar membresías en línea, está obligada a emitir factura digital. No hay exención por tamaño ni por ser emprendimiento.

**Beneficio Ley de Emprendimiento 2023:** si las ventas anuales no superan 10.000× tipo de cambio oficial (orden de magnitud: ~$360.000 USD a tasa abr. 2026), la empresa puede acceder a reducciones fiscales. Zonix califica ampliamente en fase piloto.

---

## 7. Qué decirle al inversionista sobre lo legal

### En la reunión

> "Hoy operamos bajo una asociación civil. Para recibir inversión y facturar membresías necesitamos constituir una C.A. Ya tenemos el plan de pasos y el abogado identificado. Con el capital, lo primero es: (1) constituir la empresa en 4–6 semanas, (2) habilitar facturación digital SENIAT, y (3) firmar el contrato de inversión. El costo legal es ~$1.000–1.500 y está dentro del presupuesto."

### Si pregunta por valuación

> "Somos pre-revenue. No tenemos métricas de tracción para una valuación formal. Proponemos [instrumento elegido: préstamo convertible / equity con valoración acordada / SAFE]. Estamos abiertos a discutir los términos que te den confianza."

### Si pregunta por protección de su inversión

> "El contrato incluirá: (1) reporte mensual de métricas y gasto, (2) derecho a información, (3) anti-dilución [si aplica], (4) cláusula de drag-along / tag-along [si es equity]. Todo redactado por abogado antes de transferir fondos."

---

## 8. Checklist legal pre-inversión

- [ ] Consulta con abogado mercantil completada
- [ ] Decisión: C.A. o SRL
- [ ] Instrumento de inversión definido con el inversionista (equity / préstamo / convertible)
- [ ] Cap table acordado (al menos founders + inversionista)
- [ ] Estatutos redactados con cláusulas de protección al inversionista
- [ ] Nombre registrado o en proceso
- [ ] Cuenta bancaria jurídica abierta o en trámite
- [ ] Facturación digital habilitada o plan de habilitación con fecha
- [ ] Registro de marca "Zonix Eats" iniciado ante SAPI

---

**Documentos relacionados:**
- [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) — guía para la reunión
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) — partida legal en el presupuesto
- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) — cuándo se necesita facturar
- [PLAN_METODOS_PAGO_VENEZUELA.md](PLAN_METODOS_PAGO_VENEZUELA.md) — regulación Sudeban/Sunacrip
