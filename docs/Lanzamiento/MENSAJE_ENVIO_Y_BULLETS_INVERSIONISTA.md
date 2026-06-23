# Mensaje de envío al inversor + bullets pitch

> **Última actualización:** 22 junio 2026 (anclas financieras **v3.0**).
> Documento operacional. Texto listo para WhatsApp / email + bullets para presentación de 5 minutos.

## 1. Mensaje WhatsApp inicial (mensaje frío)

> Hola [Nombre del inversor],
>
> Soy **Abrahan Pulido**. Soy fundador de Zonix Pharma, un marketplace farmacéutico digital que estamos preparando para lanzar en Carabobo. **T+0** = wire del capital; **~90 días Fase 0** (legal, equipo, onboarding farmacias, Firebase/tiendas); **Day-D (T+90)** = piloto público en app = **M1** del modelo financiero ([MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S2). Stack en **staging/VPS** con **443 tests** backend (re-verificar pre-reunión); go-live tiendas + Firebase **T+7–12** Fase 0. Busco **~USD 112k** (Lean — **4× Sales** bootstrap Carabobo) vía SAFE, con opción **~157k recomendado** / **~187k Growth**, para **Fase 0 + 12 meses** post-Day-D — **~USD 40.831** cash M12 y **~159 activas** (casi equilibrio mensual M12).
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

> Hola [Nombre], soy Abrahan Pulido, fundador de **Zonix Pharma** (marketplace farmacéutico Valencia, OTC + Rx). Tras wire (**T+0**), **~90 días Fase 0** y **Day-D** piloto público. Buscamos **~USD 112k** pre-seed vía SAFE (cap **600k** Lean; opciones **~157k/~913k** · **~187k/~1.205M**). Stack en **staging** (**443 tests** backend). ¿30 min esta semana? Pack: [LINK Drive / README Lanzamiento].

**Ganchos (usar 1–2, sin exagerar):**
- **Autoridad:** stack ~4 años; regulación Rx con farmacéutico de cada farmacia.
- **Prueba social:** mercado pharma VE **+17%** unidades (Cifar); comparables LatAm (Farmalisto).
- **Escasez suave:** ventana piloto Valencia 2026 — no urgencia falsa de «último día».

Mismas cifras que §1; no mezclar tiers en una frase sin etiquetar.

## 2. Email seguimiento si responde positivamente

> Hola [Nombre],
>
> Gracias por tu interés. Te comparto el **data room** (`docs/Lanzamiento/`). **Empieza por** [README.md](README.md) y [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md). **Ruta ~30 min** (índice inversor en README):
>
> 1. **[BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md)** — tesis y cifras clave.
> 2. **[CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md)** — decisiones y posicionamiento.
> 3. **[PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md)** — TAM/SAM/SOM y competencia.
> 4. **[UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)** — CAC, LTV, payback.
> 5. **[PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md)** §1.1 — tabla M1–M12 Lean.
> 6. **[ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md)** — SAFE y cap table.
> 7. **[CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md)** — guion reunión + FAQ.
>
> Opcional DD técnico: [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) (pack ↔ producto).
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

> **Nota de uso (tipos de propuesta de valor — Steve Blank M2):** al adaptar estos bullets a un inversor concreto, elegir **un** tipo dominante y no mezclar los tres en el mismo párrafo:
>
> | Perfil inversor | Tipo dominante | Bullets a enfatizar |
> |-----------------|----------------|---------------------|
> | Tech / producto | Eficiencia / menos fricción (Rx integrado, multi-sucursal) | Slides 2-3 |
> | GTM / comercial | Nuevo canal de demanda para farmacias sin app propia | Slides 1, 4 |
> | Financiero | Costo total menor vs take-rate agregador 25-35% | Slides 1, 5 |
>
> Plantillas por tipo en skill `zonix-fundraising-narrative` (§ tipos de propuesta de valor).

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
> - **443 tests** backend (re-verificar pre-reunión; ver VOLCADO §1.2).
> - ~4 años de desarrollo del **stack Zonix Pharma**, reciclado al vertical farma.
> - Backend en **staging/VPS**; go-live Play/App Store **T+7–12** Fase 0.

> **Slide 4: Mercado**
> - TAM Venezuela USD 1.638M.
> - SAM Valencia metro 226 farmacias.
> - SOM M12: **~80** farmacias activas (caso central v3 — [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.1).
> - Comparable Farmalisto: ~USD 32M revenue 2024; funding ~USD 22M reportado (hasta ~USD 33M PitchBook); países MX+CO+PE.

> **Slide 5: Modelo**
> - ARPF USD **~50**/mes **referencia provisional** (hasta GMV piloto; cobro híbrido cuota **25/40/55** + % GMV — UNIT_ECONOMICS).
> - CAC USD **139** (**4×** Sales B2B Lean + marketing digital — UNIT_ECONOMICS §3).
> - Churn 5%/mes (mediana SaaS SMB LatAm — ChartMogul 2025).
> - LTV USD 1.000.
> - **LTV/CAC ~7,2x.** Payback **~2,8** meses.

> **Slide 6: Plan**
> - **~USD 111.988** Lean *(≈112k)* · **~157.268** Base *(≈157k)* · **~187.478** Growth *(≈187k)*.
> - Burn Lean **~USD 8.108**/mes; **casi equilibrio M12** (~**159** activas).
> - **~USD 40.831** cash M12; revenue año 1 **~59.968**; FCF **−37.322** (MODELO S3).

> **Slide 7: Equipo**
> - Founder = CEO + CTO. **Co-CEO** USD **1.000**/mes.
> - **4× Sales B2B (Lean):** USD **350** base + **40**/firma.
> - **Dev junior** USD **600**; CS+CM **400**; contador + abogado **330**/mes.

> **Slide 8: Ask**
> - **~USD 112k** SAFE cap **600.000** (~**18,66%**).
> - Recomendado: **~157k / ~913k** (~**17,23%**). Carabobo: **~187k / ~1.205M** (~**15,55%**).
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
> - Probable año 2-3. Para entonces buscamos **PMF operativo local** + barrera operativa (hipótesis post-piloto Day-D).

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
| Capital pedido | **~USD 111.988** (Lean) · **~157.268** (Base rec.) · **~187.478** (Growth Carabobo) |
| SAFE post-money cap | **600k / ~908k / ~1.270M** |
| Equity implícito | **~18,66%** (Lean) · **~17,23%** (Base) · **~15,55%** (Growth) |
| Equilibrio mensual (revenue ≥ burn) | **Casi M12** (Lean 4× Sales); ~160 activas teórico |
| Farmacias activas ref. | **~80** mes 12 modelo Lean v3 |
| ARPF | **~USD 50/mes** *(placeholder; cobro real = híbrido cuota 25/40/55 + % GMV hasta piloto)* |
| CAC | USD **139** |
| LTV/CAC | **~7,2x** |
| Payback CAC | **~2,8 meses** |
| Burn mensual | **~USD 8.108** promedio (tramos **8.011 / 8.347 / 7.980**) |
| Runway | 12 meses |
| Cash al cierre año 1 (proyección) | **~USD 40.831** ([MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) S3.3) |
| TAM Venezuela | USD 1.638M |
| Comparable internacional | Farmalisto ~USD 32M revenue 2024 (MX); funding ~USD 22M–33M según fuente |
| Stack | Laravel + Flutter + Pusher + FCM; **443 tests** backend (staging/VPS; release tiendas T+7–12 Fase 0) |
| Equipo | **Lean:** 4× Sales + Dev junior + CS (Carabobo). Asesor regulatorio en **Base/Growth** (~157k/~187k). |
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
