# Zonix Pharma — Resumen para aliado estratégico

> **Anexo de outreach** (no forma parte de los **23 documentos canónicos** del pack; el directorio tiene **27 archivos** `.md` en raíz incluyendo README, censo y anexo — ver [README.md](README.md)).  
> **Para:** Gabriel Barrios — Gerente de Consultoría, Grupo Morr (Valencia, Venezuela)  
> **De:** Abrahan Pulido — Founder / CEO / CTO, Zonix Pharma  
> **Fecha:** 22 junio 2026  
> **Propósito:** compartir la tesis del proyecto, la oportunidad de nicho y una invitación a sumarse como aliado estratégico y asesor.

---

## En 20 segundos (TL;DR)

- **Mercado real y grande:** pharma venezolano **USD 1.638M/año**, en recuperación (+17,49% YoY en unidades — Cifar / IMS-IQVIA).
- **Nicho desatendido:** farmacias **independientes y medianas** de Valencia que no tienen app propia y pagan **25–35%** a agregadores — o quedan fuera del digital.
- **Producto ya construido:** stack **~4 años**, **443 tests** en staging; el capital va a **lanzar y vender**, no a inventar tecnología desde cero.

---

## Por qué te escribo (gancho)

Imagina a alguien en Valencia que necesita un medicamento para un familiar. Recorre **varias farmacias** sin saber si lo tienen, cuánto cuesta ni si aceptan su receta. Al otro lado, la **farmacia de barrio** tiene farmacéutico, inventario y clientela — pero **no tiene app**, y si entra a un agregador **pierde hasta un tercio del margen** en cada venta digital.

**Zonix no es el héroe de esa historia; somos la guía:** conectamos paciente y farmacia de confianza, validamos la receta con el farmacéutico **de esa farmacia**, y coordinamos la última milla — con un costo para la farmacia **estructuralmente menor** que cualquier agregador. No es una app más: es **infraestructura digital para un canal invisible o sobreexplotado**.

---

## 1. Elevator (en 30 segundos)

**Zonix Pharma** es un marketplace farmacéutico **B2B2C** en Venezuela: el paciente pide en app; la **farmacia independiente o mediana** despacha; el **farmacéutico colegiado de esa farmacia** valida recetas cuando aplica; la **última milla** la ejecuta un partner logístico — **sin flota propia** de Zonix.

> **Frase ancla:** *No inventamos el mercado; le damos a las farmacias de barrio lo que las cadenas y los agregadores nunca les ofrecieron: digital, Rx y margen.*

---

## 2. La oportunidad de nicho (“océano azul” honesto)

> **Nota de rigor:** Zonix **no** vende “crear un mercado nuevo”. Lo que existe es un **espacio poco explotado**: farmacias **independientes y medianas** de Valencia metro sin marketplace propio ni condiciones favorables en agregadores genéricos.

| Dimensión | Realidad del mercado | Oportunidad Zonix |
|-----------|----------------------|-------------------|
| **TAM Venezuela** | **USD 1.638M/año** (389M unidades × USD 4,21; **Cifar VE**, **IMS/IQVIA** 2025) | Mercado grande, en recuperación (+17,49% YoY) |
| **Crecimiento** | +17,49% unidades 2024–2025; CAGR 6,1% 2026–2032 | Ventana de adopción digital post-crisis |
| **Competencia directa** | Farmatodo / Locatel (cadenas); **PedidosYa Pharmacy** VE (20–30% GMV) | **No atacan** el segmento independiente / mediano |
| **Comparable LatAm** | Farmalisto: ~USD 32M revenue 2024; funding ~USD 22–33M | El modelo marketplace pharma **sí es financiable** |
| **Nicho piloto** | **226 farmacias** Valencia metro; **~80–100 independientes** target | Beachhead denso, operable desde Carabobo |

**Lectura honesta:** no es un mar vacío — es un **canal desatendido dentro de un océano conocido**. Zonix entra con **costo total menor**, **Rx digital** y **pagos nativos de Venezuela**.

### Por qué ahora

1. **Mercado en recuperación** — el pharma VE crece de nuevo; en 24 meses el espacio independiente estará más cubierto.
2. **Producto listo** — el riesgo restante es **comercial** (onboarding farmacias), no técnico.
3. **Competencia débil en independientes** — agregadores priorizan cadenas; Farmatodo/Locatel no abren marketplace a terceros.
4. **Pagos VE maduros** — Pago Móvil, Zelle y Binance hacen operable el checkout local a escala.

---

## 3. Diferenciadores

**¿Por qué Zonix y no otro?** Porque ningún competidor local reúne hoy **Rx + pagos VE + costo bajo para farmacia** en un solo stack.

### Para la farmacia (B2B)

1. **Modelo híbrido** — cuota **25 / 40 / 55** + **% moderado sobre GMV**, muy por debajo del take-rate 25–35% de agregadores.
2. **Sin app propia** — marketplace, panel comercio y validación Rx; delivery y farmacéutico **por farmacia aliada** *(dictamen regulatorio pendiente pre-Day-D)*.
3. **Contrato piloto flexible** — marco anual con salida sin penalidad en los **2 primeros meses**.

### Para el paciente (B2C)

1. **Visibilidad de stock** — pedir sin recorrer farmacias a ciegas.
2. **Receta digital** — validada por farmacéutico colegiado de la farmacia despachadora (no sustituye criterio médico).
3. **Pagos VE nativos** — Pago Móvil, transferencia, Zelle, Binance Pay; Zonix **no es PSP**.

---

## 4. Tracción honesta

### Lo que **sí** está hecho

- Backend staging con **443 tests** (órdenes, pagos VE, chat, FCM, broadcast Rx).
- App Flutter **OTC + Rx**; roles commerce, pharmacist, buyer y delivery operativos.
- Landing y marca Pharma (`zonixpharma.com` / staging).
- Pack de **23 documentos canónicos** + este anexo con proyección mes a mes (Lean).

### Lo que **aún no** está hecho

- **Ventas reales** — sin GMV ni farmacias firmadas en producción.
- **Release en tiendas** — Play Store / App Store + OTP Firebase (Fase 0, T+7–12 post-wire).
- **Dictamen regulatorio formal** — abogado + farmacéutico asesor antes de Day-D.
- **Lista cerrada 5–8 farmacias prospecto** — `[PENDIENTE]` visitas calle Fase 0.

---

## 5. Números clave (viabilidad)

> Contexto de solidez del plan — **no es solicitud de inversión a Gabriel** por defecto.

| Métrica | Valor |
|---------|-------|
| Modelo cobro farmacia | Cuota **25/40/55** + **% GMV** por banda |
| **LTV/CAC** | **~7,2x** (LTV USD 1.000 / CAC USD 139) |
| Payback CAC | **~2,8 meses** |
| Capital (Lean / Base / Growth) | **~USD 112k / ~157k / ~187k** (SAFE) |
| **Equilibrio mensual** | **Casi M12** (4× Sales); **~159** activas M12 |
| Cash cierre M12 | **~USD 40.831** |
| Farmacias activas M12 | **~159** *(modelo Lean 4× Sales; SAM independientes ~80–100 es mercado addressable, no M12)* |
| ARPF referencia | **~USD 50/mes** *(placeholder hasta GMV piloto)* |

---

## 6. Defensibilidad (moat)

- **Flujo Rx integrado** — validación por farmacéutico de cada farmacia; agregadores genéricos no lo hacen en VE.
- **Switching cost operativo** — catálogo, historial y farmacéutico capacitado atados al contrato.
- **Uni-pharmacy + pagos VE** — un carrito por farmacia; checkout local sin PSP Zonix.
- **Modelo híbrido contractual** — cuota + % GMV bajo **pegado al contrato**, no promoción temporal.

Ser *early mover* en independientes Valencia es **ventaja de entrada**, no moat permanente. El defendible en M12: **relación B2B + flujo Rx + costo total** en la zona piloto.

---

## 7. Riesgos principales

| Riesgo | Mitigación |
|--------|------------|
| **Inflación / devaluación VE** | Buffer **20%** en presupuesto; contingencia si devaluación >100% trimestral |
| **Regulación farmacéutica** | Farmacéutico colegiado **por farmacia**; asesor regulatorio en tier Base/Growth |
| **Chicken-and-egg** | **Oferta primero:** **4× Sales** + ~28 activas pre-Day-D; demanda escalonada |
| **Competencia agregadores** | Su unit economics exige comisión >20%; Zonix compite en **costo total** |

---

## 8. Por qué tú, Gabriel

Gabriel, te escribo porque **alguien con tu mirada de consultoría y tu arraigo en Valencia** puede dimensionar el **impacto en el tejido comercial de Carabobo** mejor que yo desde el código. No busco un inversor anónimo; busco **alguien que entienda el mercado local** y me diga con franqueza si la tesis tiene sentido.

Sinergias que veo:

1. **Visión estratégica** — evaluar la tesis con ojo de consultoría, no solo de founder.
2. **Red local** — contactos con farmacias o partners logísticos en Carabobo (discovery Fase 0).
3. **Mentoría en posicionamiento** — contar el **nicho desatendido** sin hype ni subestimar riesgos VE.

> **[PERSONALIZAR — Abrahan:]**  
> _Aquí puedes añadir 1–2 líneas sobre cómo os conocisteis, un proyecto previo en común, o qué expectativa concreta tienes (ej.: 2 sesiones de feedback/mes, intro a 3 farmacias, participación en advisory board sin equity, etc.)._

**Lo que no pido por defecto:** compromiso de capital. Esta nota es para **alinear visión** y explorar si Grupo Morr / tú quieren sumarse como **aliado + asesor** pre-Day-D.

---

## 9. Plan de lanzamiento

| Hito | Meta |
|------|------|
| Fase 0 (T+0 → Day-D, 90 días) | Legal, equipo, **4× Sales**, ~**28 farmacias** con catálogo |
| Day-D | Go-live app; OTP Firebase |
| M1 | **~40 activas** *(modelo v3.8.2; no confundir con SAM ~80–100)* |
| M12 | **~159 activas**; cash **~USD 40.831** (casi equilibrio mensual M12) |

---

## 10. Visión y siguiente paso

Zonix no nace solo para cobrar cuotas. Nace porque **acceder a medicinas en Venezuela sigue siendo un problema logístico y de confianza**, y porque cientos de farmacias independientes en Valencia **no tienen canal digital** en igualdad con las cadenas.

Si funciona en Carabobo:

- **Pacientes** con menos fricción para encontrar y recibir medicamentos.
- **Farmacias de barrio** digitalizadas **sin regalar margen** a un agregador.
- **Ecosistema local** con herramientas hechas **para Venezuela**, no importadas.

No prometo cambiar el sistema de salud del país. Prometo **construir en Valencia la infraestructura digital que ese canal merece** — con rigor, números honestos y producto ya hecho.

---

Te propongo una **reunión de 30 minutos** (Valencia o videollamada) para demo en vivo, resolver dudas y acordar si tiene sentido una **relación de asesoría / alianza**.

Si prefieres leer antes: [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) y [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md). El pack completo está en `docs/Lanzamiento/`.

Quedo atento a tu disponibilidad.

**Abrahan Pulido**  
Founder / CEO / CTO — Zonix Pharma  
`ing.pulido.abrahan@gmail.com` · +58 412 4352014  
[LinkedIn](https://www.linkedin.com/in/abrahan-pulido-909a35b7/) · [aiblockweb.com](https://aiblockweb.com)

---

### Disclaimers

- **Pre-seed / sin revenue:** cifras con supuestos documentados; **ARPF ~50** es placeholder hasta GMV piloto real.
- **Regulatorio:** Zonix no sustituye al farmacéutico titular ni al criterio médico; dictamen legal pendiente antes de Day-D público.
- **Inflación VE:** cifras **mayo–junio 2026**; reconfirmación trimestral recomendada.
- **Este documento** es un **anexo de outreach**; no sustituye los documentos canónicos del pack.

*Pack fuente: `docs/Lanzamiento/` — Zonix Pharma, junio 2026.*
