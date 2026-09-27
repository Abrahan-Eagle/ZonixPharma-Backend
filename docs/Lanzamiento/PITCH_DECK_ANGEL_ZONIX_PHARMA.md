# Zonix Pharma — Pitch deck para inversor ángel (fuente del PDF)

> **Uso:** deck frío de 12 slides + 1 anexo para **captar un inversor ángel** (se envía sin narrador; consigue la reunión, no cierra la ronda). PDF: [Zonix_Pharma_Pitch_Deck_Angel.pdf](Zonix_Pharma_Pitch_Deck_Angel.pdf).
> **Método:** skill global `founder-pitch-deck-builder` (formato, orden, slide de petición) + `founder-deck-review` (autochequeo). Cifras **solo** desde `zonix-startup-context` y este pack.
> **Canon:** ask **USD 237.412** · SAFE post-money cap **USD 1.582.747** · equity ref. **~15 %** · pricing farmacia **45/60/70 + 8/7/5 % GMV** · esc.1 v4. El ask **no está recaudado**.
> **Etiquetas:** `FACT` medido en repos / pack · `CALC` derivado del modelo v4 · `[BENCHMARK]` fuente externa citada · `[SUPUESTO]` estimación propia · `[PENDIENTE]` sin dictamen.
> **Gates:** no enviar sin OK founder (`CAP-P09`); no es oferta pública de valores; SAFE y C.A. `[PENDIENTE abogado]`.
> **Versión:** 1.0 — 25 septiembre 2026.

Cada bloque = una slide. El **título es la conclusión**; el cuerpo la prueba; el pie, la fuente.

---

## Slide 1 — Título

**Zonix Pharma: la farmacia independiente venezolana vende en digital, con receta validada, pagando una fracción de lo que le cobra el agregador.**

- Marketplace farmacéutico B2B2C (OTC + Rx) · Valencia, Venezuela.
- Estado: **plataforma y apps ya construidas**, en prueba; lanzamiento público en **~3 meses**.
- Ronda: **USD 237.412** pre-seed vía SAFE post-money.
- Equipo: **Gabriel Barrios**, CEO · **Abrahan Pulido**, Founder / Co-CEO y CTO · **Wistremiro Pulido**, Co-founder. Valencia, estado Carabobo.

Pie: `FACT` estado producto — BRIEF_UNA_PAGINA § Estado producto. `[PENDIENTE screenshot]` app para v2 del deck.

Logo (slides 1 y 12): `public/assets/img/logo.png` — el mismo que usa la landing (`resources/views/front/welcome.blade.php`). No usar `public/img/logo/*` ni `logox.jpg` (legacy).

---

## Slide 2 — Problema

**La farmacia independiente paga 20–30 % de su venta digital al agregador o no tiene canal; el paciente recorre 3–5 farmacias con la receta en papel.**

| Quién | Qué le duele hoy |
|---|---|
| Farmacia independiente / cadena mediana | Sin app propia frente a Farmatodo y Locatel. En PedidosYa Pharmacy entrega **20–30 %** del GMV: una farmacia que vende USD 5.000/mes en la app entrega **USD 1.000–1.500** de comisión. Órdenes, inventario, comprobantes y recetas en WhatsApp y papel. |
| Paciente | Stock incierto: 3–5 farmacias para un medicamento. Precio opaco. Receta física que se pierde. Quien paga desde el exterior no puede coordinar pedido y receta. |

Pie: `[BENCHMARK]` take-rate PedidosYa VE 20–30 % (BRIEF) · `CALC` ejemplo sobre 5.000 · BRIEF § Problema · PROPUESTA_VALOR_USUARIO_FINAL.

---

## Slide 3 — Solución

**El farmacéutico colegiado de la propia farmacia valida la receta dentro de la app antes de que el pedido se cobre; Zonix no toca el medicamento ni el dinero.**

| Antes | Con Zonix Pharma |
|---|---|
| Receta en papel, validación de palabra por WhatsApp | La receta se sube a la app y queda **pendiente de validación**; el farmacéutico de esa farmacia la aprueba o la rechaza, con tiempo límite |
| Pago por transferencia sin comprobante trazable | Pago Móvil, transferencia, Zelle o Binance Pay, con comprobante en la orden (Zonix no maneja el dinero) |
| Delivery propio o ninguno | Repartidores asociados con seguimiento en tiempo real; **sin flota de Zonix** |
| Un canal por farmacia | El pedido completo sale de una sola farmacia, con su farmacéutico y su inventario |

Pie: `FACT` flujo implementado en código (PLAN_RX_VALIDATION, PLAN_METODOS_PAGO). Regulación: `[PENDIENTE dictamen abogado + farmacéutico asesor]` antes de Day-D.

---

## Slide 4 — Por qué ahora

**El mercado pharma venezolano volvió a crecer a doble dígito, los pagos digitales ya cubren al comprador y nadie está atendiendo a la farmacia independiente: 2026 es la ventana.**

1. **Demanda en recuperación:** +17,49 % YoY en unidades 2024–2025 (Cifar, datos IMS/IQVIA); CAGR 6,1 % proyectado 2026–2032. Hace dos años el mercado se contraía.
2. **Pagos manuales maduros:** Pago Móvil C2P + Zelle + Binance Pay cubren ~95 % de la población bancarizada; hace cinco años no era posible operar sin pasarela internacional.
3. **Competencia digital débil en el segmento:** Farmatodo y Locatel no abren marketplace a terceros; PedidosYa es generalista y caro; Farmalisto y Rappi no operan en VE.
4. **El software ya existe:** ~4 años de stack + capa Pharma construida; la ronda no financia "construir", financia "vender y validar".

Pie: `[BENCHMARK]` Cifar / IMS-IQVIA 2025, Statista/Mordor (PERFIL_MERCADO §1); cobertura pagos (BRIEF § Por qué ahora). `FACT` stack.

---

## Slide 5 — Mercado (bottom-up)

**La cuña son ~226 farmacias de Valencia metro; el plan cierra el año 1 con ~159 activas y después replica ciudad por ciudad.**

| Capa | Cifra | Lectura |
|---|---|---|
| Farmacias Valencia metro | **226** | Directorios públicos (Saas, Farmatodo, Locatel, Farmahorro, Nena + independientes) |
| Target piloto (cadenas medianas 25–35 + independientes con movimiento 80–100) | **~105–135** | Segmento sin app propia; cadenas premium excluidas del piloto |
| Carabobo total | 350–450 | Puerto Cabello, Tocuyito, Mariara, Guacara |
| Activas cierre M12 (esc.1) | **~159** (~70 % metro) | Revenue M12 **~USD 29.892**/mes |
| Año 2 | Maracay + Maracaibo | Mismo playbook: 4× Sales, oferta primero |
| Contexto TAM Venezuela | **USD 1.638 M/año** · 389 M unidades · 48 % Rx genérico | Solo dimensiona el sector; no es nuestro mercado alcanzable |

La cuota no la fija el mercado sino la capacidad del canal: 4 vendedores × visitas × cierre. La curva es hipótesis hasta el dato real T+60.

Pie: `[BENCHMARK]` PERFIL_MERCADO_PILOTO §1–§3 · `CALC` PROYECCION_FINANCIERA_12M §1.1 (esc.1 v4).

---

## Slide 6 — Producto (existe)

**La plataforma ya está construida: la usan los 7 perfiles del mercado (paciente, farmacia, farmacéutico, reparto y administración), con receta digital, lotes, cadena de frío y pagos venezolanos; reconstruirla costaría 1,3–2,4 millones a precio de agencia.**

| Qué ya existe | Estado |
|---|---|
| Usuarios | 7 perfiles listos: paciente, farmacia, farmacéutico colegiado, reparto (empresa, motorizado, autónomo) y administración |
| Plataforma web | Cientos de funciones terminadas y probadas (catálogo, órdenes, cobro, recetas) |
| Cumplimiento farmacéutico | Receta validada por farmacéutico con vencimiento · lotes por fecha de caducidad · cadena de frío · sustancias controladas · registro sanitario |
| Reparto y avisos | Seguimiento del pedido en tiempo real y notificaciones al cliente |
| Apps | Android e iOS, con la identidad de la marca |
| Calidad | Cientos de pruebas automatizadas pasando antes de cada entrega |

**Costo de reposición** (es costo, no valoración): agencia venezolana, peor escenario **~USD 1,3 M** (1,6 M lanzado con impuestos); agencia US mid-market **~USD 2,4 M**.

Pie: `FACT` medido en repos 21 sep 2026 · `[BENCHMARK]` 11_/12_COSTO_DEL_SISTEMA_AGENCIA (Clutch, GoodFirms, Cubix). `[PENDIENTE screenshot]` 1–3 capturas reales para v2.

---

## Slide 7 — Estado y tracción (honesta)

**El producto está construido; la ronda compra la evidencia de mercado, no el desarrollo.**

| Hoy (`FACT`) | Todavía no | Qué compra la ronda |
|---|---|---|
| Plataforma y apps en prueba (`zonixpharma.com`) | Apps publicadas en tiendas | Lanzamiento en **~3 meses** con **≈28 farmacias** con catálogo activo |
| Pruebas en verde (se re-verifican antes de cada reunión) | Ingresos / pilotos pagos | Prueba con 10 farmacias usando la app de verdad, antes de escalar |
| Demo de producto de 3–5 min | Cartas de intención firmadas | Primeras órdenes y **cobros reales** (hechos, no encuestas) |
| Conversaciones con farmacias pioneras en Valencia (en curso) | Empresa constituida (C.A.) | Métricas para el data room de la siguiente ronda |

**Cómo vendemos:** oferta primero. 4 vendedores presenciales firman farmacias (cadenas medianas e independientes con movimiento) en dos focos de Valencia; el paciente llega por referido de mostrador + Meta Ads geolocalizado, y solo cuando ya hay catálogo activo. Prueba temprana: primeras firmas y catálogo activo entre el mes 2 y el 3.

Sin logos, sin LOIs no firmadas, sin "en conversaciones con". Lo que aparezca aquí en la reunión será medido.

Pie: `FACT` BRIEF § Estado producto · APRENDIZAJE_500_EVIDENCIA_MERCADO · 07_QUE_COMPRA_EL_ASK § dos relojes · PLAN_LANZAMIENTO_COMERCIAL §4 (canales).

---

## Slide 8 — Competencia

**Las alternativas no pueden meter al farmacéutico en el flujo ni bajar el take-rate sin romper su modelo; ahí está la diferencia estructural.**

| Alternativa | Qué es | Por qué se estanca en la farmacia independiente |
|---|---|---|
| Farmatodo / Locatel | Cadenas premium con app propia cerrada | No abren marketplace a terceros; compiten con la independiente, no la sirven |
| PedidosYa Pharmacy | Agregador generalista activo en VE | 20–30 % del GMV; sin validación de receta por farmacéutico; la farmacia es un comercio más entre miles |
| Farmalisto (LatAm) | Marketplace farmacéutico MX/CO/PE | No opera en Venezuela; comisión sobre venta. Prueba que el modelo es financiable (~USD 22–33 M levantados) |
| WhatsApp + papel (status quo) | Cero tecnología | Sin trazabilidad, sin Rx digital, sin tracking |

**Zonix Pharma:** cuota fija + % GMV moderado · Rx validada por el farmacéutico **de cada** farmacia · pagos manuales VE nativos · multi-sucursal con un onboarding. Switching cost: catálogo, historial y contrato híbrido.

Pie: `[BENCHMARK]` PERFIL_MERCADO §5 (Farmalisto: eCommerceDB, Tracxn). Rappi no opera en VE — no se cita como competidor.

---

## Slide 9 — Modelo de negocio

**La farmacia paga una cuota mensual más un porcentaje pequeño de lo que vende en la app: menos de la mitad de lo que hoy entrega al agregador, y de cada dólar que cobra le quedan ~92 centavos de margen.**

| Concepto | Valor | Etiqueta |
|---|---|---|
| Quién paga | La farmacia (el paciente no es la fuente principal) | `FACT` modelo |
| Cuota mensual según plan | **USD 45 / 60 / 70** | `FACT` esc.1 v4 |
| Porcentaje sobre lo vendido en la app, según plan | **8 % / 7 % / 5 %** | `FACT` esc.1 v4 |
| Ejemplo: farmacia que vende USD 5.000/mes en la app | El agregador se lleva 1.000–1.500 · Zonix Basic: 45 + 8 % = **445** | `CALC` |
| Margen bruto de la plataforma | **~92 %** (Zonix no compra ni transporta el medicamento) | `CALC` |
| Qué no se descuenta | Las primeras 10 farmacias del piloto pueden empezar 2 meses sin cuota fija; el porcentaje y la medición siguen. La proyección central se calcula **sin** ese beneficio | `FACT` contrato marco |
| Ingreso que deja cada farmacia | **~USD 1.040** a lo largo de su vida; recupera lo que costó conseguirla en **~3 meses** y deja **~7 veces** esa inversión | `CALC` |
| Ingresos año 1 (esc.1) | **USD 228.796** · la caja deja de caer a partir del **mes 5** | `CALC` |

Estas cifras se recalibran tras ≥30 días de ventas reales después del lanzamiento; no antes.

Pie: PROPUESTA_VALOR_CLIENTE_B2B §5, §11 · UNIT_ECONOMICS §1–§4, §7 (margen) · PROYECCION §1.1.

---

## Slide 10 — Equipo

**Los dos founders trajeron a Gabriel Barrios como CEO; Abrahan construyó el sistema. La ronda paga quien lo pone en las farmacias.**

- **Gabriel Barrios — CEO.** Cargo de CEO: declaración del founder, 25 sep 2026; sin detalle de trayectoria en el pack.
- **Abrahan Pulido — Founder / Co-CEO y CTO.** Ingeniero en Informática (IUTVAL), 8+ años en producto, full stack Laravel + Flutter. Construyó backend, apps y panel de Zonix Pharma; fundador de Corral X, Zonix Imports y Aiblockweb.
- **Wistremiro Pulido — Co-founder.** Finanzas y administración.
- **Lo que paga la ronda (burn Lean):** Dev Flutter/Laravel · **4× Sales B2B** (base + comisión por firma) · Customer Support + Community. Externos on-demand: contador, abogado, asesor regulatorio farmacéutico. CEO y Co-CEO ya están cubiertos; no son puestos por contratar.
- **Riesgo que reconocemos:** el conocimiento técnico sigue en Abrahan. La dirección ya no es una sola persona. Mitigación: segundo desarrollador con acceso y contexto desde Fase 0 + cesión de IP a la C.A. + vesting en el SAFE.

Pie: `FACT` bio de Abrahan — BRIEF § Equipo. Cargos de Gabriel y Wistremiro: declaración del founder (25 sep 2026). Burn: PRESUPUESTO_12_MESES_REFERENCIA §2.

---

## Slide 11 — La petición y el uso de fondos

**Pedimos USD 237.412 en SAFE post-money con cap de USD 1.582.747 (~15 % si convierte al cap) para constituir, publicar, poner ~28 farmacias el día de lanzamiento y operar 12 meses hasta caja positiva.**

| Elemento | Valor |
|---|---|
| Monto | **USD 237.412** (ticket principal) · tickets parciales de 25.000 / 50.000 |
| Instrumento | **SAFE post-money** · cap **USD 1.582.747** · sin descuento · cláusula de igualdad de condiciones (MFN) · sin interés ni vencimiento |
| Equivalente si convierte al cap | **~15 %** (237.412 / 1.582.747). El cap es un techo de precio, no la valoración de la empresa |
| Runway | Puesta en marcha (~3 meses) + **12 meses** de operación |

| Uso de fondos | USD | % | Hito que compra | Cuándo |
|---|---:|---:|---|---|
| Puesta en marcha: constituir la empresa, equipo, sede, apps en tiendas y altas de las farmacias piloto | **50.260** | 21 % | **Lanzamiento** con ≈28 farmacias con catálogo activo | ~3 meses |
| Operación de 12 meses: 4 vendedores, desarrollo, soporte y marketing (~14.346/mes) | **172.152** | 73 % | **85 activas y caja en cero en el mes 5**; **~159 activas en el mes 12** | M5 / M12 |
| Reserva | **15.000** | 6 % | Imprevistos y frenos si algo no escala | — |
| **Total** | **237.412** | 100 % | Caja al mes 12 **USD 246.231** (esc.1) → data room de la siguiente ronda | M12–M18 |

El monto cubre la puesta en marcha (~3 meses) y 12 meses de operación; si el piloto necesita más tiempo, la siguiente ronda se levanta entre los meses 12 y 18.

Pie: `CALC` 50.260 + 172.152 + 15.000 = 237.412 (Excel Detallado v4) · 07_QUE_COMPRA_EL_ASK · ESTRUCTURA_LEGAL §2. `[PENDIENTE abogado]` SAFE y C.A.

---

## Slide 12 — Cierre

**Siguiente paso: 30 minutos, una demo de 5 minutos y acceso al data room.**

1. Reunión de 30 min con guion (CHECKLIST_PRE_INVERSOR).
2. Demo del producto en staging: pedido con receta, validación del farmacéutico, comprobante de pago.
3. Acceso al data room: brief, proyección mes a mes, unit economics, presupuesto, estructura legal.
4. Referencias verificables y acceso al repositorio bajo NDA si lo pides.

- **Gabriel Barrios** — CEO — gabriel.barrios@zonixpharma.com · +58 424 4229405
- **Abrahan Pulido** — Founder / Co-CEO y CTO — pulido.abrahan@zonixpharma.com · ing.pulido.abrahan@gmail.com · +58 412 4352014 · linkedin.com/in/abrahan-pulido-909a35b7
- **Wistremiro Pulido** — Co-founder — wistremiro.pulido@zonixpharma.com · +58 412 3025728

zonixpharma.com · Valencia, estado Carabobo, Venezuela.

Pie: Documento informativo para conversación con inversor; no constituye oferta pública de valores. Cifras: pack Lanzamiento v4 (sep 2026).

---

## Anexo A — Cómo funciona tu SAFE

**El cap fija el precio máximo que pagas; si la siguiente ronda vale más, tu porcentaje no baja de lo que compraste al cap.**

| Si inviertes | Equivalente si convierte al cap (1.582.747 post) |
|---:|---:|
| USD 25.000 | ~1,6 % |
| USD 50.000 | ~3,2 % |
| USD 237.412 (ronda completa) | ~15,0 % |

- **Qué es:** el SAFE se convierte en acciones en la próxima ronda con precio. Convierte al **menor** entre el cap y la valoración de esa ronda: el cap te protege si la empresa vale más; si valiera menos, convertirías al precio de la ronda (más porcentaje).
- **Post-money:** el porcentaje al cap ya incluye tu propio dinero; sabes hoy qué compras. Pre-money implícito: 1.582.747 − 237.412 = **1.345.335**.
- **Sin descuento, sin interés, sin vencimiento, sin board ni veto** antes de convertir. **MFN:** si un SAFE posterior obtiene mejores términos, puedes adoptarlos.
- **Dilución futura** `[SUPUESTO]`: la ronda Seed diluye a todos los accionistas en proporción; tu porcentaje baja y el valor de tu participación sube si la valoración sube. No proyectamos múltiplos ni fecha de salida: eso lo decide el mercado, no este documento.
- **Vehículo:** ZONIX PHARMA C.A. (Carabobo) en constitución durante Fase 0; cesión de código, marca y dominios a la C.A. como condición del wire. `[PENDIENTE abogado]`.

Pie: ESTRUCTURA_LEGAL_Y_EQUITY §2 · `founder-cap-table-checklist`. Nada de este anexo sustituye la revisión de tu abogado.

---

## Control de coherencia (interno, no va al PDF)

| Cifra | Slide | Fuente |
|---|---|---|
| 237.412 / 1.582.747 / ~15 % | 1, 11, A | zonix-startup-context, README Lanzamiento |
| 50.260 / 172.152 / 15.000 | 11 | 07_QUE_COMPRA_EL_ASK, BRIEF |
| 45/60/70 + 8/7/5 % | 9 | PROPUESTA_VALOR_CLIENTE_B2B §5 |
| ARPF 52 · CAC 139 · LTV 1.040 · 7,5x | 9 | UNIT_ECONOMICS |
| 226 farmacias · 159 activas M12 · 29.892 | 5 | PERFIL_MERCADO §2–§3, PROYECCION §1.1 |
| 1.638 M · +17,49 % · 6,1 % | 4, 5 | PERFIL_MERCADO §1 (Cifar / IMS-IQVIA) |
| 7 roles · 363 endpoints · 92 pantallas · 322 tests | 6 | 11_COSTO §1 (medido 21 sep 2026) |
| 1,3 M VE · 2,4 M US | 6 | 12_ / 11_COSTO_DEL_SISTEMA |
| FCF ≥ 0 M5 · caja M12 246.231 · ingresos Y1 228.796 | 9, 11 | PROYECCION §1.1 esc.1 |
| Take-rate agregador 20–30 % · ejemplo 1.000–1.500 sobre 5.000 | 2, 8, 9 | BRIEF (20–30 %, cifra de pitch única). PERFIL §5.4 conserva 25–35 % con nota de reconciliación |
| Margen bruto ~92 % · waiver 10 farmacias / 2 meses | 9 | UNIT_ECONOMICS §7; PROPUESTA B2B §11 |

**TODO cruzado:** `zonix-fundraising-narrative` conserva cifras obsoletas (cap 600k, ask 101k) — actualizar la skill al canon v4 en un cambio aparte. BRIEF y MENSAJE_ENVIO ya alineados al equipo nuevo (Gabriel CEO · Abrahan Founder/Co-CEO y CTO · Wistremiro Co-founder).
