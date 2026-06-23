# Plan operativo clave — recetas, delivery y piloto

**Para:** Gabriel Barrios — Gerente de Consultoría, Grupo Morr (Valencia, Venezuela)  
**De:** Abrahan Pulido — Founder / CEO / CTO, Zonix Pharma  
**Fecha:** junio 2026

**No es una solicitud de inversión.** Es el **corazón operativo** de Zonix: validación de receta por farmacéutico colegiado, reglas de delivery y checklist de calidad antes del lanzamiento en Valencia.

---

## En 60 segundos

| Tema | Qué hace Zonix | Por qué importa |
|------|----------------|-----------------|
| **Receta (Rx)** | Farmacéutico colegiado de la **farmacia aliada** aprueba o rechaza la receta **en la app** antes del pago | Diferenciador legal vs apps de delivery genéricas; habilita ~48% del mercado Rx |
| **Plazo validación** | **60 minutos** en horario operativo (8:00–20:00) | Si vence → cancelación automática **sin cobro** |
| **Delivery** | Zonix **no tiene motos propias**; partner logístico ejecuta; **pickup siempre disponible** | Si falla el partner, el pedido sigue vivo en retiro en farmacia |
| **Cadena de frío** | Solo delivery con equipo adecuado o retiro en farmacia | Insulinas, vacunas, biológicos |
| **Antes del Day-D** | Prueba manual completa + contratos revisados | Ver § “Listo para piloto” |

**En una frase:** Zonix no vende medicamentos; **ordena, valida receta cuando aplica, conecta pago manual y coordina entrega** con trazabilidad de quién validó qué y cuándo.

---

## Qué es este documento

El módulo operativo más sensible no es el catálogo: es **la receta médica**. Este plan resume, en lenguaje de negocio, cómo funciona el flujo, quién responde por qué, y qué debe estar listo antes de abrir al público en Carabobo.

---

## Por qué la validación Rx es el diferenciador

1. **Apps de delivery generalistas** en VE no validan receta digitalmente en la misma cadena farmacéutica.
2. **Cadenas grandes** validan en mostrador; Zonix propone validación **digital con farmacéutico colegiado** de la farmacia despachadora.
3. **Marco legal VE** exige ejercicio profesional farmacéutico — *[dictamen formal abogado + farmacéutico asesor antes del Day-D]*.
4. **Trazabilidad:** queda registro de farmacéutico, farmacia, paciente, hora y resultado — útil ante fiscalización o disputas.
5. Sin Rx digital estable, Zonix quedaría limitado sobre todo a **OTC** (sin receta).

---

## Roles en una orden con receta

| Rol | Responsabilidad |
|-----|-----------------|
| **Paciente** | Sube foto/PDF de receta y crea el pedido |
| **Farmacéutico colegiado** | Aprueba, rechaza o pide corrección (≤ 60 min en horario operativo) |
| **Farmacia** | Despacha medicamento tras pago confirmado |
| **Repartidor (partner)** | Entrega a domicilio o apoya retiro en sucursal |
| **Soporte Zonix** | Media disputas y casos límite |

---

## Tipos de receta (resumen)

| Tipo | Qué implica en piloto |
|------|------------------------|
| **Común** | Validación digital; envío o retiro según producto |
| **Retenida** | Receta **original retenida** en farmacia; **solo retiro** en sucursal |
| **Especial / controlada** | Retención + libro de control; retiro con identificación; activación plena **mes 4–6** con asesoría regulatoria |

**Mes 0–3:** priorizar recetas **comunes** y flujo estable antes de escalar controlados.

---

## Flujo paso a paso (orden con receta)

1. Paciente elige medicamento que requiere receta y sube la imagen.
2. Pedido en **espera de validación** — notificación al farmacéutico de esa farmacia.
3. Farmacéutico revisa: medicamento, dosis, legibilidad, vigencia, sospecha de falsificación.
4. **Si aprueba** → paciente recibe aviso y puede **pagar** (pago móvil, Zelle, etc. — ver `15_Plan_Pagos.md`).
5. Farmacia prepara pedido → asigna reparto o entrega en mostrador.
6. **Si rechaza** → motivo claro; paciente puede subir otra foto o cancelar.
7. **Si no responde a tiempo** → cancelación automática; en flujo estándar **no hubo pago aún**.

Estados intermedios típicos: espera validación → aprobada → pendiente de pago → en preparación → en camino → entregada (o cancelada / devuelta).

---

## Plazos y horarios

| Situación | Plazo |
|-----------|-------|
| Horario operativo (lun–sáb 8:00–20:00) | Validación ≤ **60 minutos** |
| Fuera de horario | Queda pendiente al siguiente día hábil; paciente informado |
| Domingos / feriados (operación reducida) | Plazo ampliado; cancelación si supera **~120 min** desde la subida |

Si una farmacia **falla el plazo con frecuencia**, escala a la farmacia; si es crónico, se revisa la alianza.

---

## Onboarding del farmacéutico colegiado

| Paso | Tiempo orientativo |
|------|-------------------|
| Farmacia registra al farmacéutico en su cuenta | ~5 min |
| Verificación identidad + número **MPPS** | 1–2 días hábiles |
| Video + manual PDF | ~30 min |
| Prueba con recetas de ejemplo | ~30 min |
| Activación | Inmediata tras prueba |

Compromisos: cumplir plazos, reportar recetas sospechosas, mantener MPPS vigente.

---

## Cadena de frío (medicamentos refrigerados)

- Productos marcados como cadena de frío **no salen** en moto sin equipo validado.
- Opciones: **retiro en farmacia** con bolsa térmica, o repartidor con cadena de frío certificado por la farmacia.
- Evidencia: foto de termómetro al recoger y al entregar; si se rompe la cadena → política de reembolso según responsabilidad.

---

## Última milla — sin flota propia

- Zonix firma **contrato marco** con empresa(s) de delivery especializada(s).
- La app asigna y hace seguimiento; **quien conduce y paga seguros es el partner**.
- **Plan B:** si el partner no firma antes del lanzamiento → arrancar en modo **retiro en farmacia**; delivery se activa al firmar.
- **Regla de oro:** pickup siempre disponible; delivery es mejora, no requisito de existencia del pedido.

---

## Soporte al cliente y picos

| Fase | Cobertura |
|------|-----------|
| Mes 1–3 | 1 persona soporte lun–sáb 8h; founder fines de semana |
| Mes 4–6 | Extensión a ~12h lun–sáb |
| Mes 7–12 | Segundo soporte part-time si el volumen lo exige |

Ante caída prolongada del servicio (>1 h): aviso a pacientes y farmacias; plan B operativo con pedido manual en mostrador.

---

## Métricas operativas (objetivo)

| Métrica | Meta mes 6 | Meta mes 12 |
|---------|------------|-------------|
| Tiempo promedio validación Rx | ~35 min | ~25 min |
| Aprobación a la primera | ~85% | ~90% |
| Pedidos que vencen plazo sin validar | < 5% | < 3% |
| Farmacéuticos activos | 8–15 | 35–45 |
| Recetas validadas / mes | ~200 | ~1.500+ |

---

## Listo para piloto (checklist alto nivel)

Antes del **Day-D** en Valencia:

| Área | Exigencia |
|------|-----------|
| **Prueba manual** | Registro paciente → carrito Rx → subir receta → validación de prueba → pago con comprobante → preparación |
| **Legal** | Contrato marco farmacia + avisos de privacidad revisados por abogado |
| **Regulatorio** | Dictamen farmacéutico asesor + abogado sobre textos al paciente |
| **Seguridad datos salud** | Consentimiento explícito antes de subir receta; acceso limitado por rol |
| **Partner delivery** | Contrato o plan B pickup-first documentado |

No prometemos “cumplimiento pleno” regulatorio hasta cerrar dictámenes escritos.

---

## Qué nos gustaría que revises, Gabriel

1. **Plazo 60 min:** ¿Es realista para farmacias independientes en Valencia en horario pico?
2. **Farmacéutico de guardia:** ¿Cómo lo resuelven hoy las farmacias medianas cuando el titular no está?
3. **Retenidas / controlados:** ¿Conviene **retrasar** delivery de controlados más allá del mes 3–6?
4. **Pickup-first:** Si el partner logístico se retrasa, ¿el mercado acepta arrancar solo con **retiro en farmacia**?
5. **Confianza B2B:** ¿La trazabilidad digital de validación es un argumento de venta creíble frente al dueño de farmacia?

---

## Disclaimers

- Plazos de conservación de recetas (digital y física) son **hipótesis operativas** hasta validación legal y farmacéutica.
- Farmacovigilancia (reporte de eventos adversos a INHRR): canal formal en roadmap; mientras tanto vía soporte + farmacia.
- Este documento **no sustituye** [`PLAN_RX_VALIDATION.md`](../../PLAN_RX_VALIDATION.md) ni dictamen MPPS/INHRR — es guía legible para aliado local.
- Zonix **no diagnostica ni prescribe**; solo facilita el flujo entre paciente, farmacéutico y farmacia.

---

**Abrahan Pulido**  
Founder / CEO / CTO — Zonix Pharma  
ing.pulido.abrahan@gmail.com · +58 412 4352014

*Zonix Pharma — junio 2026*
