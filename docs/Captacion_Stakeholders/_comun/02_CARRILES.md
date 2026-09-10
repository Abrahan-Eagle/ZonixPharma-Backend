# Carriles A–D — a quién captas y con qué contrato

> **Para qué sirve:** embudos, intercambios y métricas por tipo de contraparte.  
> **No es:** menú Alfa/Beta ni forense Café/Kleo.  
> Fuente histórica: monolito v1.0 §4–§7.  
> Enlaces al pack: rutas relativas a [`../../Lanzamiento/`](../../Lanzamiento/).

## Vista rápida

| Carril | Quién | Qué firma | Caja |
|---|---|---|---|
| A | Inversor | SAFE | Capital tras wire |
| B | Farmacia | LOI → contrato marco | Cuota + %GMV |
| C | Delivery | LOI → contrato + SLA | Fees contractuales |
| D | Equipo / advisor | Contrato / advisor agreement | Compensación del presupuesto |

Si una contraparte ocupa dos carriles, firma **instrumentos separados** y no recibe datos, exclusividad o condiciones privilegiadas por aportar capital.

---

## Carril A — inversionistas financieros

### Resultado buscado

Cerrar el ask pre-seed para financiar Fase 0 y 12 meses post-Day-D sin disfrazar clientes o partners como inversionistas.

### Intercambio

| Parte | Aporta | Recibe |
|---|---|---|
| Inversor | Capital y, si se acuerda, experiencia/referencias | Derechos del SAFE y reporting; no retorno garantizado |
| Zonix | Instrumento, información verificable y ejecución | Capital sujeto a cierre |

**Instrumento:** SAFE separado de todo contrato comercial. Adaptación, enforceability, escrow/tranches y derechos adicionales: `[PENDIENTE abogado]`. La **PIIA firmada + inventario de activos** es condición suspensiva del desembolso según [`ESTRUCTURA_LEGAL_Y_EQUITY.md`](../../Lanzamiento/ESTRUCTURA_LEGAL_Y_EQUITY.md) §1.5; no se rebaja a una recomendación opcional.

### Gate antes de outreach intensivo

- demo de producto 3–5 minutos;
- 1–2 early adopters con nivel de evidencia explícito (tabla abajo);
- P0 de due diligence founder;
- data room mínimo coherente;
- cifras v4 sin claims de tracción inventados;
- lista de candidato y tesis de encaje.

#### Escalera de evidencia de mercado

| Nivel | Evidencia | Cómo se declara |
|---|---|---|
| E0 | Entrevista mom-test documentada | Discovery; no early adopter |
| E1 | LOI o compromiso claro con próxima fecha | Early adopter comprometido, todavía no activo |
| E2 | Contrato firmado | Cliente contratado, no necesariamente activado |
| E3 | Catálogo/usuarios/farmacéutico activos | Farmacia activada |
| E4 | Primera orden real completada/pagada | Uso real |
| E5 | Repetición o primera factura Zonix cobrada | Tracción comercial inicial |

Para outreach exploratorio a ángeles puede mostrarse E1 con disclosure. Para declarar “producto en mercado” o recontactar fondos que exigen tracción, el gate es **E3 + señal E4/E5**, no entrevista ni demo.

### Embudo y definiciones

| Etapa | Evidencia mínima |
|---|---|
| Candidato | Nombre, tipo, tesis, geografía, ticket y fuente |
| Cualificado | Encaje con etapa/sector/jurisdicción confirmado |
| Introducción | Warm intro o contacto autorizado registrado |
| Respuesta | Respuesta humana explícita |
| Reunión | Fecha y asistentes confirmados |
| Data room | Acceso otorgado y documentos enviados registrados |
| Due diligence | Preguntas/material solicitado |
| Términos | Propuesta escrita; no compromiso verbal |
| SAFE firmado | Documento firmado por partes |
| Condiciones de cierre | PIIA/inventario IP y demás condiciones suspensivas satisfechas |
| Escrow/tranche | Fondos depositados, pero todavía no necesariamente utilizables |
| Wire liberado | Caja utilizable conciliada según cierre/tranche aprobado; recién aquí existe T+0 |

### Métricas

- candidatos nuevos y cualificados;
- tasa de respuesta por canal;
- reuniones realizadas;
- avance a data room/DD/términos;
- monto indicado como interés, compromiso firmado y wire — **tres campos separados**;
- días por etapa;
- razón de rechazo.

No fijar tasas de conversión objetivo hasta medir el primer ciclo.

### Riesgos

- decir “recaudado” ante interés verbal;
- ofrecer retornos o payback como garantía;
- aceptar exclusividad/MFN comercial, datos o veto a cambio de capital;
- dar acceso a datos de pacientes;
- iniciar Fase 0 antes del wire;
- presentar una farmacia/inversor corporativo como validación de mercado sin uso real.

---

## Carril B — farmacias cliente

### Resultado buscado

Validar problema, willingness to pay, activación y retención con farmacias independientes/medianas del beachhead.

### Intercambio

| Farmacia aporta | Zonix aporta |
|---|---|
| Catálogo, farmacéutico colegiado, operación, feedback y pago contractual | Plataforma, onboarding, visibilidad, flujo Rx, soporte y coordinación logística |

**Instrumento:** carta de intención para discovery/planificación; después contrato marco anual con cobro mensual conforme al canon.

### Programa “Farmacias Fundadoras”

Es un **nombre de cohorte piloto**, no una inversión.

Beneficios inicialmente permitidos:

- prioridad de agenda para onboarding;
- capacitación directa;
- canal de feedback con founder/equipo;
- participación en sesiones de co-diseño;
- medición y reporte de resultados del piloto;
- caso de estudio solo con consentimiento.

No prometer como disponible:

- posicionamiento preferente en búsqueda;
- analytics que no existan en producto;
- exclusividad territorial;
- lock indefinido de precio;
- retorno, dividendos, equity o participación en ganancias;
- analogías de inversión (Flyfish, TIR, “recuperas lo que pagaste”).

Analogía interna permitida: membresía de **consumo** (Costco / Smoke & Mirrors). El límite de 10 fundadoras es capacidad de onboarding y soporte, no escasez de marketing.

### Embudo

Usar el funnel y sus referencias en [`PROPUESTA_VALOR_CLIENTE_B2B.md`](../../Lanzamiento/PROPUESTA_VALOR_CLIENTE_B2B.md) §6, pero separar **benchmark orientativo** de dato real:

1. prospecto identificado;
2. entrevista mom-test;
3. demo;
4. reacción documentada a pricing;
5. carta de intención;
6. contrato;
7. onboarding iniciado;
8. catálogo activo;
9. primera orden completada;
10. primera factura pagada;
11. retención/renovación.

### Métricas

- farmacias por etapa;
- días visita→LOI→contrato→activación;
- objeciones y razón de pérdida;
- activación de catálogo;
- primera orden;
- GMV completado;
- ingreso Zonix;
- soporte por farmacia;
- churn/retención;
- adopción de waiver y conversión a pago.

Tráfico, firmas y catálogo cargado no sustituyen “farmacia activa + pedido + pago”.

---

## Carril C — socios estratégicos

### Prioridad piloto

El partner estratégico operativo prioritario es `delivery_company`. Una farmacia ancla sigue siendo **cliente del carril B**, aunque aporte referencias o co-diseño. Droguerías/distribuidores permanecen en roadmap hasta validar el piloto.

### Intercambio delivery

| Partner aporta | Zonix aporta |
|---|---|
| Cobertura, agentes, SLA, seguros/evidencia y ejecución de última milla | Flujo de órdenes, asignación/tracking, dashboard y facturación contractual |

**Instrumentos provisionales:** LOI → contrato comercial no exclusivo + SLA/KYC/seguros según aplique. “Concesión” y DPA no se presuponen: dependen del mapa de responsabilidades, datos tratados y revisión jurídica VE `[PENDIENTE abogado]`.

### Embudo

1. candidato; 2. reunión; 3. validación de cobertura/capacidad; 4. LOI; 5. KYC y documentación; 6. prueba operativa; 7. contrato; 8. agentes activos; 9. operación medida.

### Métricas

- empresas y agentes por etapa; cobertura; entregas completadas; tiempo e incidentes; cumplimiento SLA; concentración por partner; costo/fee real; NPS post-entrega.

### Guardrails

- no exclusividad en piloto;
- partner #2 en pipeline y pickup como fallback;
- no acceso libre a datos de salud;
- inversión del partner, si existe, va por carril A con instrumento separado;
- no otorgar equity por una LOI o promesa de volumen.

---

## Carril D — socios operativos, cofundadores y advisors

### Resultado buscado

Reducir dependencia del founder mediante capacidad ejecutora real, sin regalar equity por títulos o contactos prometidos.

### Clasificación

| Perfil | Relación inicial |
|---|---|
| Co-CEO / CEO operativo | Rol operativo bajo contrato; no cofundador automático |
| Equipo Sales/CS/Dev | Contrato y compensación del presupuesto |
| Advisor | Entregables/introducciones verificables; sin equity en piloto por defecto |
| Cofundador futuro | Acuerdo founder, dedicación, PI, vesting y cap table `[PENDIENTE abogado]` |

Cada relación usa su propio instrumento:

- personal/contractor: contrato laboral o de servicios según realidad de subordinación;
- advisor: advisor agreement con entregables, confidencialidad, PI y acceso acotado;
- cofundador: founder agreement, dedicación, gobierno, PI, vesting y salida.

Una “prueba” no autoriza trabajo gratuito ni acceso informal a datos; debe definir alcance, remuneración, PI y confidencialidad.

### Embudo

1. necesidad/scorecard; 2. candidato; 3. entrevista; 4. referencias; 5. prueba acotada o entregable; 6. contrato; 7. hitos 30/60/90; 8. revisión de continuidad.

Para advisors, medir introducciones aceptadas, reuniones obtenidas y resultado; “tener contactos” no es un entregable.

### Equity

El canon de [`ESTRUCTURA_LEGAL_Y_EQUITY.md`](../../Lanzamiento/ESTRUCTURA_LEGAL_Y_EQUITY.md) indica **sin options en piloto** para freelances. Cualquier excepción debe:

- demostrar necesidad que no puede cubrirse con contrato;
- definir dedicación y propiedad intelectual;
- usar vesting/cliff;
- recalcular cap table fully diluted;
- evitar grants por anticipado;
- obtener revisión legal y aprobación founder.

## Ver también

- Calendario / dashboard: [`05_CALENDARIO_Y_DASHBOARD.md`](05_CALENDARIO_Y_DASHBOARD.md)  
- Decisión Alfa/Beta: [`PLAN_ALFA_BETA.md`](../metodo_cafe_kleo/PLAN_ALFA_BETA.md)  
- Índice: [`../README.md`](../README.md)
