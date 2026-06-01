# Mensaje de envío al inversor + bullets pitch

> **Última actualización:** 27 mayo 2026.
> Documento operacional. Texto listo para WhatsApp / email + bullets para presentación de 5 minutos.

## 1. Mensaje WhatsApp inicial (mensaje frío)

> Hola [Nombre del inversor],
>
> Soy **Abrahan Pulido**. Soy fundador de Zonix Pharma, un marketplace farmacéutico digital que estamos preparando para lanzar en Carabobo. Stack en **staging/VPS** con **399 tests** backend (re-verificar pre-reunión); go-live tiendas + Firebase **T+7–12** Fase 0. Busco **USD 101k** (Lean — mínimo viable) vía SAFE, con opción **118k recomendado** / **135k acelerado**, para **Fase 0 + 12 meses** post-Day-D — **~USD 42.209** cash M12 y equilibrio **M11** (PROYECCION §1).
>
> Modelo: la farmacia paga **cuota fija + un % moderado sobre GMV** en la app (tier dinámico por bandas — ver pack §5 B2B). El take-rate total sigue siendo **órden de magnitud menor** que Rappi/PedidosYa (25-35% GMV).
>
> Te interesa una reunión de 30 min para revisar el modelo y los números? Tengo un pack de documentos listo si prefieres revisarlo antes.
>
> Gracias,
> Abrahan Pulido

**Personalizar:**
- Si conoces algo del inversor (otra inversión farmacéutica, LinkedIn shared connection): mencionarlo.
- Si te lo presentó alguien: mencionar quién.

### 1.1 Variante ultra-corta (~80 palabras) — Cialdini

> Hola [Nombre], soy Abrahan Pulido, fundador de **Zonix Pharma** (marketplace farmacéutico Valencia, OTC + Rx). Buscamos **USD 101k** pre-seed vía SAFE (cap **600k** Lean; opciones 118k/135k). Stack en **staging** (**399 tests** backend); piloto **Day-D** T+90. ¿30 min esta semana? Pack: [LINK Drive / README Lanzamiento].

**Ganchos (usar 1–2, sin exagerar):**
- **Autoridad:** stack ~4 años; regulación Rx con farmacéutico de cada farmacia.
- **Prueba social:** mercado pharma VE **+17%** unidades (Cifar); comparables LatAm (Farmalisto).
- **Escasez suave:** ventana piloto Valencia 2026 — no urgencia falsa de «último día».

Mismas cifras que §1; no mezclar tiers en una frase sin etiquetar.

## 2. Email seguimiento si responde positivamente

> Hola [Nombre],
>
> Gracias por tu interés. Te comparto el **data room** (`docs/Lanzamiento/`). **Ruta ~30 min** (misma que [README.md](README.md) § inversor):
>
> 1. **[BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md)** — tesis y cifras clave.
> 2. **[CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md)** — decisiones y posicionamiento.
> 3. **[PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md)** — TAM/SAM/SOM y competencia.
> 4. **[UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)** — CAC, LTV, payback.
> 5. **[PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)** §1.1 — tabla M1–M12 Lean.
> 6. **[ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md)** — SAFE y cap table.
> 7. **[CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md)** — guion reunión + FAQ.
>
> Opcional DD profundo: [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md) · [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) (pack ↔ producto).
>
> Acceso al pack completo en Google Drive: [LINK]
>
> Reunión de **30 min** cuando puedas — incluye demo en vivo (Buyer + Pharmacy + Pharmacist + `delivery_company` + `delivery_agent`). **Última milla:** partner concesionario; Zonix **no** opera flota propia.
>
> Quedo atento.
> Abrahan Pulido

## 3. Email seguimiento si pide tiempo o NDA

> Hola [Nombre],
>
> Sin problema. El pack está listo cuando quieras revisar. Si prefieres, podemos firmar un NDA simple antes de compartir números detallados; te lo paso en formato standard.
>
> Mientras tanto, dos puntos que quizás te interesen:
>
> 1. **Comparable internacional:** Farmalisto (MX + CO + PE) ~USD 32M revenue 2024 (MX); funding total reportado ~USD 22M en agregadores (hasta ~USD 33M PitchBook). El modelo marketplace farmacéutico LatAm ES financiable.
> 2. **Diferenciador clave:** cuota fija + % bajo sobre GMV en app vs. comisión plena 25-35% de Rappi/PedidosYa Pharmacy. Para una farmacia que vende USD 5.000/mes en agregador, el costo típico allí es ~USD 1.250-1.750/mes; con **Zonix Pharma** el ticket suele ser **mucho menor** (detalle en PROPUESTA_VALOR_CLIENTE_B2B §5).
>
> Cuando estés listo, vemos.
> Abrahan Pulido

## 4. Bullets pitch — 5 minutos

> **Slide 1: Problema**
> - Mercado farmacéutico VE: USD 1.638M/año, 389M unidades, +17,49% YoY (**Cifar VE**, datos IMS/IQVIA).
> - Pacientes pierden 1-2h/mes recorriendo 3-4 farmacias buscando medicinas.
> - Farmacias medianas pierden 25-35% de su GMV digital en comisiones de Rappi y PedidosYa.

> **Slide 2: Solución**
> - Marketplace farmacéutico digital con **modelo B2B híbrido** (cuota fija **25/40/55** USD + % GMV según banda — ver pack).
> - Validación Rx digital por farmacéutico colegiado de la propia farmacia *[PENDIENTE dictamen abogado + farmacéutico asesor]*.
> - Pagos manuales VE soportados nativos (Pago Móvil, Zelle, Binance Pay).
> - Multi-sucursal con un solo onboarding.

> **Slide 3: Tracción**
> - Stack ya construido (Laravel + Flutter + Pusher + FCM).
> - **399 tests** backend (re-verificar pre-reunión; ver VOLCADO §1.2).
> - ~4 años de desarrollo del **stack Zonix Pharma**, reciclado al vertical farma.
> - Backend en **staging/VPS**; go-live Play/App Store **T+7–12** Fase 0.

> **Slide 4: Mercado**
> - TAM Venezuela USD 1.638M.
> - SAM Valencia metro 226 farmacias.
> - SOM M11: **~151** farmacias activas (equilibrio mensual caso central §1.1 — [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) §3).
> - Comparable Farmalisto: ~USD 32M revenue 2024; funding ~USD 22M reportado (hasta ~USD 33M PitchBook); países MX+CO+PE.

> **Slide 5: Modelo**
> - ARPF USD **~50**/mes **referencia provisional** (hasta GMV piloto; cobro híbrido cuota **25/40/55** + % GMV — UNIT_ECONOMICS).
> - CAC USD **139** (**4×** Sales B2B + marketing digital — UNIT_ECONOMICS §3).
> - Churn 5%/mes (mediana SaaS SMB LatAm — ChartMogul 2025).
> - LTV USD 1.000.
> - **LTV/CAC ~7,2x.** Payback **~2,8** meses.

> **Slide 6: Plan**
> - **USD 101.000** Lean (mínimo) · **118.000** Base (recomendado) · **135.000** Growth (acelerado).
> - Burn Lean **~USD 7.559**/mes; equilibrio **M11** (~**151** activas).
> - **~USD 42.209** cash M12 sin waiver; **~41.756** con waiver B2B proxy (PROYECCION §1.3).

> **Slide 7: Equipo**
> - Founder = CEO + CTO. **Co-CEO** USD **1.000**/mes.
> - **4× Sales B2B:** USD **120** + **30**/firma.
> - CS+CM **350**; Marketing **400**; Coordinador Partners **300**.
> - Contador + Abogado **330**/mes.

> **Slide 8: Ask**
> - **USD 101.000** SAFE cap **600.000** (~**16,83%**).
> - Recomendado: **118k / 650k** (~**18,15%**). Acelerado: **135k / 720k**.
> - Sin valuación arbitraria. Plazo cierre: 21-30 días.

## 5. Bullets para Q&A (cobertura defensiva)

> "¿Por qué Venezuela?"
> - Founder venezolano. Stack VE-nativo (PMC2P, Zelle, factura SENIAT).
> - Mercado USD 1.638M creciendo 17%/año. Competencia digital débil. **Early mover** en independientes Valencia (mercado existente; Rx + fee bajo vs agregador).

> "¿Por qué híbrido fija + % GMV?"
> - Take-rate total muy inferior al de agregadores; la fija da previsibilidad y el % alinea **Zonix Pharma** al volumen en app.
> - Benchmark: agregador ~30% sobre GMV vs **Zonix Pharma** en fracciones de punto a ~1% + cuota (PROPUESTA B2B §5).

> "¿Y si las farmacias no firman?"
> - Plan B: **hasta** 2 meses en **cuota USD 0** a las primeras 10 farmacias (waiver comercial; ver [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §11 y [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1 nota waiver). Plan C: ajuste comercial de bandas o % (política comercial, no técnica).

> "¿Y si la inflación VE explota?"
> - Buffer 20% incluido; guía BCV 2026 es desaceleración (1 dígito mensual desde mayo). Plan contingencia si estrés macro: cortar valla (USD 350), bajar **Meta Ads** ~50%. Burn objetivo **~USD 5.500–6.300**/mes según mix de cortes.

> "¿Y si Rappi baja precio?"
> - Estructuralmente no pueden. Su unit economics requiere comisión > 20%.

> "¿Y si Farmalisto entra a VE?"
> - Probable año 2-3. Para entonces tenemos PMF + barrera operativa local.

## 6. Glosario express (si el inversor no es del rubro)

| Término | Definición simple |
|---|---|
| GMV | Total por transacción completada en la app en el mes (definición operativa [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5.5). |
| ARPF | Revenue mensual promedio por farmacia. |
| CAC | Costo de adquirir una farmacia. |
| LTV | Total que paga la farmacia mientras está con nosotros. |
| Churn | % de farmacias que se van cada mes. |
| Burn | Pérdida mensual mientras no hay rentabilidad. |
| Runway | Meses que sobreviven con el cash actual. |
| Break-even | Mes en que dejas de perder dinero. |
| SAFE | Contrato simple de inversión que convierte a equity en la próxima ronda. |
| Cap | Valuación máxima a la que el SAFE convierte. |

## 7. Indicadores que el inversor probablemente pregunte

| Indicador | Valor |
|---|---|
| Capital pedido | **USD 101.000** (Lean) · **118.000** (Base rec.) · **135.000** (Growth) |
| SAFE post-money cap | **600k / 650k / 720k** |
| Equity implícito | **~16,83%** |
| Equilibrio mensual (revenue ≥ burn) | **M11** (§1.4 PROYECCION) |
| Farmacias activas ref. | **~159** mes 12 modelo; **~151** en **M11** (equilibrio) |
| ARPF | **~USD 50/mes** *(placeholder; cobro real = híbrido cuota 25/40/55 + % GMV hasta piloto)* |
| CAC | USD **139** |
| LTV/CAC | **~7,2x** |
| Payback CAC | **~2,8 meses** |
| Burn mensual | **~USD 7.559** promedio (tramos **7.462 / 7.798 / 7.431**) |
| Runway | 12 meses |
| Cash al cierre año 1 (proyección) | **~USD 42.209** sin waiver; **~USD 41.756** con waiver B2B proxy ([PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.3) |
| TAM Venezuela | USD 1.638M |
| Comparable internacional | Farmalisto ~USD 32M revenue 2024 (MX); funding ~USD 22M–33M según fuente |
| Stack | Laravel + Flutter + Pusher + FCM; **399 tests** backend (staging/VPS; release tiendas T+7–12 Fase 0) |
| Equipo | **9** roles FT + 2 freelance. Asesor regulatorio en **Base/Growth** (118k/135k). |
| Founder track record | **Abrahan Pulido** — Ingeniero en Informática (IUTVAL); 8+ años full stack; fundador **Zonix Pharma** (mismo stack desde delivery B2C), **Corral X**, **Zonix Imports**, **Aiblockweb**; docente CETIAC; [LinkedIn](https://www.linkedin.com/in/abrahan-pulido-909a35b7/), [aiblockweb.com](https://aiblockweb.com), `ing.pulido.abrahan@gmail.com`, +58 412 4352014. **Pendiente:** URL GitHub pública + 2 referencias verificables para due diligence. |

## 8. Cuándo enviar este mensaje

- **Mejor momento:** martes/miércoles, 09:00-11:00 o 14:00-16:00.
- **Evitar:** lunes (saturación email), viernes tarde, fin de semana.
- **Plazo:** dar 3-5 días hábiles para respuesta.
- **Seguimiento:** 1 follow-up suave en 5-7 días si no responde.

## 9. Documentos hermanos

- [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md): qué tener listo antes de la reunión.
- [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md): el documento que se adjunta primero.
- [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md): los números que sostienen el ask.
- [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md): el SAFE y cap table.
