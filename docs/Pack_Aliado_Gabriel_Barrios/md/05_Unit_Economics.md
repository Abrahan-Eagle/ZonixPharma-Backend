# Unit economics — Zonix Pharma

**Para:** Gabriel Barrios — Gerente de Consultoría, Grupo Morr (Valencia, Venezuela)  
**De:** Abrahan Pulido — Founder / CEO / CTO, Zonix Pharma  
**Fecha:** junio 2026

**No es una solicitud de inversión** salvo que acordemos otra cosa en reunión. Es material para alinear visión y revisar números con alguien que conoce el mercado local.

---

## En 60 segundos

Zonix cobra a cada farmacia una **cuota fija + un porcentaje bajo sobre ventas en app** (modelo híbrido, no comisión tipo agregador). Con los supuestos actuales del piloto:

| Métrica | Valor |
|---------|-------|
| **Ingreso medio por farmacia (ARPF)** | **~USD 50/mes** *(placeholder hasta medir GMV real)* |
| **Costo de adquirir una farmacia (CAC)** | **USD 139** |
| **Valor de vida del cliente (LTV)** | **USD 1.000** |
| **LTV / CAC** | **~7,2×** |
| **Recuperación del CAC (payback)** | **~2,8 meses** |
| **Churn mensual objetivo** | **5%** (~20 meses de vida promedio) |
| **Margen bruto plataforma** | **~92%** *(sin operar logística del medicamento)* |

**En una frase:** cada farmacia que entra debería pagar de media **~50 USD/mes**; cuesta **~139 USD** traerla; el negocio recupera esa inversión en **menos de 3 meses** y el ratio LTV/CAC (**7,2×**) está por encima del umbral típico de SaaS B2B (3–5×).

---

## Cómo gana dinero Zonix (modelo simple)

Zonix Pharma es **software + intermediación**: conecta pacientes con farmacias independientes en Carabobo. **No** compra ni reparte medicamentos; la farmacia despacha y cumple la normativa.

**Cobro a la farmacia (híbrido):**

| Nivel | Cuota fija mensual | Fee sobre GMV en app |
|-------|-------------------|----------------------|
| Basic | USD 25 | ~0,6%–1% según banda de ventas |
| Pro | USD 40 | idem |
| Enterprise | USD 55 | idem |

El **ARPF ~50 USD/mes** es un **promedio de trabajo** (mix 60/30/10 Basic/Pro/Enterprise) hasta tener datos reales del piloto. Cuando midamos GMV y tiers, se recalibra.

**Fórmula mental:**

```
Ingreso por farmacia (LTV) = ARPF × meses de vida
                           = 50 × 20
                           = USD 1.000

LTV / CAC = 1.000 / 139 ≈ 7,2×

Payback = CAC / ARPF = 139 / 50 ≈ 2,8 meses
```

---

## ARPF — ingreso medio por farmacia

| Concepto | Detalle |
|----------|---------|
| Modelo vigente | Cuota **25 / 40 / 55** + % sobre GMV en app |
| Placeholder pack | **~USD 50/mes** hasta post-Day-D con ≥30 días de GMV medido |
| Sensibilidad baja | Si ARPF efectivo fuera **41 USD/mes** → LTV **820** → LTV/CAC **~5,9×** (sigue saludable) |
| Sensibilidad alta | Si ARPF subiera a **~53 USD/mes** → equilibrio mensual podría adelantarse a **~M11** |

**Waiver piloto (opcional comercial):** primeras 10 farmacias, 2 meses sin cuota fija — solo si queda en contrato; no está modelado en la tabla central del año 1.

---

## CAC — costo de adquisición (construcción)

El **USD 139** es el headline **conservador** del pack. Desglose bottom-up:

| Componente | USD por farmacia firmada |
|------------|-------------------------|
| Comisión comercial B2B | 40 |
| Prorrateo equipo **4 vendedores** (base ~1.400/mes ÷ ~16 firmas/mes capacidad) | ~88 |
| Marketing digital geo (Meta + canales B2B) | 25 |
| Material impreso, demos | 5 |
| Soporte onboarding proporcional | 10 |
| Pérdida por cancelación primer mes (~10%) | 9 |
| **Suma explícita** | **~177** |
| **Headline pitch (redondeo conservador)** | **139** |

**Sensibilidad:** si la comisión sube a **50 USD/firma** → CAC **~159** → LTV/CAC **~6,3×** (aún sólido).

**Nota operativa:** el CAC usa **~8 firmas/mes** en régimen de crucero (conservador). Si el canal sostiene más ritmo, el prorrateo fijo baja; el **139** incorpora margen de seguridad.

---

## LTV y churn

| Churn mensual | Meses de vida | LTV (ARPF 50) | LTV/CAC | Lectura |
|---------------|---------------|---------------|---------|---------|
| 3% | 33 | 1.650 | ~11,9× | Muy optimista |
| **5% (base)** | **20** | **1.000** | **~7,2×** | **Caso central** |
| 7% | 14 | 700 | ~5,0× | Aceptable; activar retención |
| 10% | 10 | 500 | ~3,6× | Marginal |
| 15% | 6,7 | 333 | ~2,4× | Insostenible — pivote |

**Por qué 5%:** mediana SaaS B2B SMB LatAm **3–7%**; marketplace farmacéutico algo más sticky que SaaS genérico, pero menos que ERP. **5% = 60% anual** — conservador para el pitch.

**Trigger operativo:** si churn supera **7%** en mes 6 → plan de retención comercial.

---

## Equilibrio operativo mensual

Definición: mes en el que **ingresos ≥ burn** del mismo mes.

| Concepto | Valor Lean |
|----------|------------|
| Burn promedio año 1 | **~USD 8.108/mes** |
| Burn tramo cierre (M7–M12) | **~USD 7.980/mes** |
| Farmacias para equilibrio (ARPF 50) | **~160 activas** |
| Activas al **M12** (caso central) | **~159** |
| Ingresos **M12** vs burn **M12** | **~7.950 vs ~7.980** → **casi equilibrio** |

Con **4 vendedores** y curva comercial base, el plan **roza** el break-even mensual en el **mes 12**. Alternativas documentadas: acelerar curva (+15%, “Lean+”), subir ARPF a ~53, o tier con más capital (Base ~157k).

---

## Comparación rápida con benchmarks

| Métrica | Zonix Pharma | Referencia LatAm |
|---------|--------------|------------------|
| Modelo | Cuota + % GMV (bajo) | Agregadores: 25–35% GMV |
| LTV/CAC | **~7,2×** | SaaS B2B SMB: 3–5× |
| Payback CAC | **~2,8 meses** | SaaS típico: 12–18 meses |
| Churn objetivo | 5%/mes | 5–7% mediana |
| Margen bruto | ~92% plataforma | Marketplace con logística: ~65% |

**Lectura:** buen payback y LTV/CAC porque Zonix **no** opera la logística del medicamento — es capa digital sobre farmacias ya reguladas.

---

## Sensibilidades resumidas

| Escenario | ARPF | CAC | Churn | LTV | LTV/CAC | Break-even (~activas) |
|-----------|------|-----|-------|-----|---------|------------------------|
| **Base** | 50 | 139 | 5% | 1.000 | **7,2×** | **~160** |
| Pesimista | 35 | 130 | 8% | 437 | 3,4× | ~212 |
| Optimista | 55 | 75 | 4% | 1.375 | 18,3× | ~132 |

---

## Qué revisar juntos

1. **¿El ARPF ~50 es creíble en Valencia?** — Contrastar con cuota 25/40/55 + % GMV que aceptarían farmacias independientes que ya conoces.
2. **¿El CAC 139 refleja costo comercial local?** — Comisiones, visitas, material; si el canal Morr puede reducir fricción de prospección.
3. **Churn 5%** — ¿Qué haría sticky o frágil a una farmacia en app vs mostrador solo?
4. **Equilibrio ~160 activas** — ¿Es alcanzable en Carabobo en 12 meses con 4 vendedores? (plan central: **185 firmas**, **159 activas** M12).
5. **Waiver primeras 10 farmacias** — ¿Tiene sentido comercial en tu red o diluye señal de pricing?

---

## Disclaimers

- Cifras en **USD constantes**. ARPF, CAC, LTV y LTV/CAC son **supuestos de modelado** hasta **≥30 días post-Day-D** con GMV y mix de tiers medidos.
- El **CAC 139** y el **ARPF ~50** no deben cambiarse en materiales externos sin decisión explícita del founder.
- Margen **~92%** es bruto de plataforma **antes** de waiver comercial y antes de S&M variable completo.
- Este documento **no sustituye** asesoría contable, legal ni dictamen regulatorio farmacéutico.
- **No es oferta de valores** ni solicitud de inversión salvo acuerdo aparte.
