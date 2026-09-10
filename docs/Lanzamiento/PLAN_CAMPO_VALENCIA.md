# Plan de evidencia primaria — farmacias de Valencia

> **Uso interno** (founder + Co-CEO + equipo de campo). **No incluir** en data room.  
> **No es tracción Zonix.** Este archivo diseña la recolección; no contiene respuestas reales.  
> **Precedencia:** si contradice un gate de [`PLAN_LANZAMIENTO_COMERCIAL.md`](PLAN_LANZAMIENTO_COMERCIAL.md) §0/§4.0, rige ese plan.  
> **Canon pricing:** cuota **45/60/70 + 8/7/5% GMV**; no se modifica aquí.  
> **Contacto:** no iniciar visitas ni solicitudes sin `CAP-P09` + aprobación expresa del founder.  
> **Guía operativa:** [`GUIA_DISCOVERY_CALLE_FASE0.md`](GUIA_DISCOVERY_CALLE_FASE0.md). Este plan la complementa; no la sustituye.

## Camino corto

1. Founder resuelve `CAMPO-T01` (polo inicial) y autoriza `CAP-P09`.
2. Depurar el marco de sucursales y RIF.
3. Ejecutar mom-test en **18–24 sucursales** (mínimo 12 RIF únicos) y observar 4–6 operaciones.
4. Consolidar top 3 de dolores; si se estabiliza, aplicar encuesta de **80 válidas / objetivo 120**.
5. Separar respuesta, observación, compromiso y uso real; pasar a piloto solo con acciones costosas y fechadas.

## 1. Qué debe validar

Ocho vacíos locales:

1. Canal real de pedidos a droguerías y proveedores.
2. Pedidos de pacientes por WhatsApp/teléfono y retrabajo.
3. Faltantes, vencimientos y confiabilidad del inventario.
4. Flujo de recetas Rx y rol del regente.
5. Conciliación de Pago Móvil, transferencias, USD y comprobantes.
6. Delivery/pickup, tiempos, fallas y quién absorbe el costo.
7. Quién decide software, contrato, catálogo y precio.
8. Costo actual y reacción informada al pricing Zonix.

Los estudios en [`../Encuestas_Estadisticas/`](../Encuestas_Estadisticas/) solo generan hipótesis `CLAIM-3P`.

## 2. Gate territorial `CAMPO-T01`

Hay dos lecturas en el pack:

- [`GUIA_DISCOVERY_CALLE_FASE0.md`](GUIA_DISCOVERY_CALLE_FASE0.md) y el contexto vigente: San Diego / Av. Bolívar Norte.
- Otros documentos de perfil/censo conservan Bella Florida + El Socorro y corredores adyacentes.

Antes de salir, el founder elige **un polo principal** y **una zona comparable**. No mezclar todo Valencia en una conclusión de saturación.

| Opción | Polo principal | Zona comparable |
|---|---|---|
| A | San Diego / Av. Bolívar Norte | Naguanagua o Valencia centro |
| B | Bella Florida / El Socorro | San Diego o Av. Bolívar Norte |

Hasta resolver `CAMPO-T01`, puede depurarse el marco, pero no comenzar contacto.

## 3. Marco muestral

### Inclusión

- Farmacia privada con dispensación OTC y/o Rx al público.
- Independiente o cadena local de hasta 5 sedes.
- Para grupos de 6–8 sedes, registrar estrato separado; no fusionar con independientes.
- Establecimiento activo y decisor/operador identificable.
- Municipio dentro del polo o zona comparable aprobados.

### Exclusión

- Farmatodo, Locatel y otras cadenas nacionales, salvo piloto explícito.
- Droguería/depósito sin mostrador minorista.
- Farmacia hospitalaria, institucional o pública.
- Punto sin actividad comprobable.

### Fuentes para depurar

Cruzar [`CENSO_FARMACIAS_CARABOBO_FASE0.md`](CENSO_FARMACIAS_CARABOBO_FASE0.md): Saas VE, calle, Google Maps/OSM, gremio/colegio y permisos agregados. Los rangos 226 Valencia y 150–250 target Carabobo siguen siendo hipótesis hasta cerrar el censo.

## 4. Unidad: sucursal vs RIF

| Decisión | Unidad |
|---|---|
| Dolor operativo, WhatsApp, stock, Rx, caja y delivery | Sucursal |
| Firma, pricing, facturación y adopción | RIF / razón social |
| Ranking de pivot | Cluster RIF (varias sucursales = un voto) |
| Prevalencia operativa | Sucursal, informando también RIF únicos |

Campos mínimos privados:

```text
id_sucursal, id_rif, nombre_comercial, municipio, zona, tipo,
numero_sedes, rol_entrevistado, decisor_es_entrevistado,
fecha, modo, resultado_contacto, fuente_marco
```

No versionar teléfono, nombre personal, RIF completo ni minutas identificables en Git.

## 5. Oleada 1 — mom-test y observación

### Muestra

- **18–24 sucursales ICP**.
- **≥12 RIF únicos**.
- ≥10 independientes de una sede.
- ≥4 cadenas locales, si existen en el polo.
- No más de 40% de entrevistas solo con encargado sin autoridad.
- Primeras 5–8 conducidas por founder/Co-CEO.
- Observación de 60–90 minutos en 4–6 establecimientos, con permiso.

El gate canónico de `≥5` entrevistas de [`PLAN_LANZAMIENTO_COMERCIAL.md`](PLAN_LANZAMIENTO_COMERCIAL.md) §4.0 **no cambia**. El rango 18–24 busca saturación y un ranking 3+3 estable.

### Roles a separar

- Dueño/socio/gerente general: presupuesto, contrato, prioridades y precio.
- Administrador/operaciones: pedidos, pagos, delivery y personal.
- Compras/inventario: proveedores, reposición, faltantes y vencimientos.
- Farmacéutico regente: Rx, trazabilidad y carga operativa.
- Caja/WhatsApp: trabajo manual y errores; no sustituye al decisor.

Un local puede requerir dos entrevistas breves. No sumar dos personas del mismo RIF como dos farmacias.

### Preguntas conductuales

No mencionar Zonix antes del bloque de descubrimiento:

1. ¿Cuántos pedidos por WhatsApp o teléfono recibió la semana pasada y cuántos terminaron en venta?
2. Cuénteme la última venta perdida por falta de stock. ¿Qué hicieron y cómo terminó?
3. ¿Cómo hizo el último pedido a una droguería? ¿Comparó proveedores y cuánto tardó?
4. ¿Cuánto tardó ayer en conciliar Pago Móvil/transferencias y qué discrepancia apareció?
5. ¿Qué pasó con la última receta recibida por WhatsApp y dónde quedó registrada la decisión?
6. Cuénteme la última entrega fallida. ¿Quién absorbió el costo?
7. ¿Cuál fue la última herramienta digital que pagaron, quién decidió y por qué siguieron o la cancelaron?
8. ¿Quién tendría que aprobar un piloto y qué información necesitaría?

Pedir demostración solo si la persona acepta y sin capturar PII: pantalla de sistema, flujo o total agregado; nunca receta, cédula, nombre de paciente ni chat identificable.

### Pricing

Solo en segunda visita o después de dolor confirmado. Primero preguntar gasto/factura actual; después mostrar el modelo canónico. Registrar `acepta / duda / rechaza`, objeción y siguiente acción. Una opinión favorable no es willingness to pay validada.

## 6. Cierre cualitativo

La oleada termina cuando:

- existen 18–24 sucursales y ≥12 RIF únicos;
- las últimas seis entrevistas no agregan un problema P0 nuevo;
- el top 3 permanece estable;
- cada dolor principal tiene conducta reciente e impacto (tiempo, dinero o venta) en ≥3 RIF y ≥2 zonas;
- hay ≥3 reacciones documentadas al pricing, conforme al gate vigente.

Si ≥2/3 de clusters RIF no muestran dolor en pedidos/Rx/pagos/stock, detener la encuesta y escalar revisión de segmento/propuesta. No pivotar por un paper extranjero ni por una entrevista.

## 7. Oleada 2 — encuesta cuantitativa

Iniciar solo si la oleada cualitativa estabilizó las variables.

### Metas

- Mínimo útil: **80 sucursales elegibles**; máximo dos sucursales por RIF en el análisis operativo.
- Objetivo: **120** incluyendo estratos/zona comparable.
- Duración: 8–12 minutos.
- Modalidad: presencial o telefónica desde marco depurado; no enlace público abierto.
- Reportar `n` sucursales, `n` RIF únicos, estratos, tasa de respuesta y no respuesta.

La unidad primaria de prevalencia operativa es la **sucursal**. El módulo de decisión, contrato y pricing se responde una sola vez por **RIF**; sucursales adicionales no duplican ese denominador. Si el marco del polo contiene menos de 80 ICP, hacer censo del polo; no rellenar con cadenas nacionales. Si es muestra por conveniencia/cuotas, no afirmar «X% de las farmacias de Valencia».

Solo bajo muestreo aleatorio simple, `n=80` tendría aproximadamente ±11 puntos porcentuales y `n=120` ±8,9 a 95% en máxima variabilidad. Esos márgenes **no aplican** a conveniencia, clustering ni no respuesta.

### Bloques

1. Elegibilidad, sedes, rol y autoridad.
2. Consultas/pedidos digitales en últimos 7/30 días.
3. Stock: actualización, faltantes, vencimientos y ventas perdidas.
4. Compra B2B: canal, proveedores, tiempos, pedido mínimo y crédito.
5. Rx: volumen por bandas, cobertura del regente y registro.
6. Pagos: métodos, comprobantes, minutos y discrepancias.
7. Delivery/pickup: volumen, tarifa, tiempo y fallas.
8. Economía: ticket/GMV por bandas, software/comisiones y horas de trabajo.
9. Adopción: POS/ERP, conectividad, exportación y capacitación.
10. Decisión: aprobadores, documentación y próximo paso.

Zonix y pricing se presentan al final. No preguntar únicamente «¿usaría una app?».

## 8. Niveles de evidencia

| Etiqueta | Definición | Relación con E0–E5 |
|---|---|---|
| `CLAIM-3P` | Estudio externo | Hipótesis; no entra al embudo |
| `FACT-R` | Conducta reciente reportada y documentada en minuta | Subtipo de E0; autorreporte |
| `FACT-O` | Conducta observada o registro agregado verificado | E0 reforzada |
| `ESTIMATE` | Resultado de encuesta propia con n, método y denominador | No es tracción |
| `COMMITMENT` | Acción futura costosa y fechada: segunda visita, datos, LOI | E1; contrato firmado = E2 |
| `TRACTION` | Catálogo activo, pedido real, cobro o repetición | E3–E5 según [`../Captacion_Stakeholders/_comun/02_CARRILES.md`](../Captacion_Stakeholders/_comun/02_CARRILES.md) |

Una encuesta propia, un LOI o un waiver gratuito no equivalen a tracción.

## 9. Controles de sesgo

- Selección desde el marco, no solo conocidos o farmacias con Instagram.
- Hasta tres intentos en días/horarios distintos; registrar no respuesta.
- Alternar horas de baja y alta demanda.
- Verificar rol y autoridad antes de aplicar cada módulo.
- Ventanas de recuerdo: ayer, 7 días y 30 días.
- Entrevistador mom-test distinto del closer cuando sea posible.
- Incentivo fijo, nunca condicionado a respuesta positiva.
- Misma redacción y capacitación para encuestadores.
- Auditoría del 10% de formularios y doble revisión de codificación.
- Separar independientes/cadenas y sucursales/RIF en cada reporte.
- Definir variables y umbrales antes de mirar resultados.

## 10. Privacidad

- Consentimiento oral y registro de fecha/alcance.
- Solo datos de negocio y rol; no datos de salud.
- Fotos de fachada o pantallas únicamente con permiso.
- No grabar audio del entrevistado sin consentimiento expreso.
- Minutas y contactos en CRM/Drive privado, acceso founder + Co-CEO.
- Retener minutas identificables hasta Day-D + 6 meses o 12 meses, lo que ocurra primero; después conservar solo agregados (**propuesta operativa, `[PENDIENTE privacidad/abogado]`**).
- Solicitudes institucionales: [`../Encuestas_Estadisticas/SOLICITUDES_DATOS_INSTITUCIONALES.md`](../Encuestas_Estadisticas/SOLICITUDES_DATOS_INSTITUCIONALES.md).

## 11. Salidas

- Marco depurado y tasa de contacto (privado).
- Minutas por entrevista (privado).
- Ranking 3+3 agregado en [`PROPUESTA_VALOR_CLIENTE_B2B.md`](PROPUESTA_VALOR_CLIENTE_B2B.md), solo después de campo real.
- Resultados agregados con n, RIF únicos, roles, zonas y limitaciones.
- Lista de decisiones de producto, pricing y ventas separada de los datos crudos.
- Compromisos y tracción en el embudo E0–E5; no en la carpeta de `CLAIM-3P`.

## 12. Conflictos que este plan no resuelve

| ID | Conflicto | Regla provisional |
|---|---|---|
| `CAMPO-T01` | San Diego/Bolívar Norte vs Bella Florida/El Socorro | Founder elige un polo antes de contacto |
| `CAMPO-T02` | Agregador 20–30% vs 25–35% en docs | Preguntar factura real; no anclar porcentaje |
| `CAMPO-T03` | Censo ≤5 sedes vs perfil 3–8 | 1–5 ICP; 6–8 estrato separado |
| `CAMPO-T04` | Waiver comercial vs modelo financiero | No ofrecer en primera visita; compromiso ≠ ingreso |
| `CAMPO-T05` | Bandas/ascenso de pricing en docs | Usar 45/60/70 + 8/7/5; no explicar ascenso hasta cierre founder/FP&A |

No actualizar cifras del pack a partir de este documento. Cualquier cambio requiere decisión founder versionada.
