# Plan de lanzamiento comercial — Piloto Valencia

**Para:** Gabriel Barrios — Gerente de Consultoría, Grupo Morr (Valencia, Venezuela)  
**De:** Abrahan Pulido — Founder / CEO / CTO, Zonix Pharma  
**Fecha:** junio 2026

**No es una solicitud de inversión.** Es el calendario operativo que Zonix ejecutaría tras disponer de capital de piloto: desde el cierre (**T+0**) hasta el **Day-D (T+90)** y los **12 meses** posteriores.

---

## En 60 segundos

| Hito | Cuándo | Qué significa |
|------|--------|---------------|
| **T+0** | Día 0 | Entra capital (~112k Lean); arranca legal, equipo y HQ |
| **T+30** | Mes 1 | Empresa constituida (o en tramo final); **4 vendedores B2B** contratados |
| **T+60** | Mes 2 | **~20+ farmacias** con catálogo; partner delivery en prueba |
| **Day-D** | **T+90** | Lanzamiento público — empieza **M1** del modelo financiero |
| **M1** | Post Day-D | **~40 farmacias activas**; primera ola de marketing paciente |
| **M6** | 6 meses operando | **~97 activas**; evaluación de éxito del piloto; caja ~**48k** |
| **M12** | Año 1 operativo | **~159 activas**; casi equilibrio mensual; caja ~**41k** |

Motor comercial: **4× Sales** (cuatro ejecutivos B2B en calle). Meta pre-Day-D: **~28 farmacias activas** con catálogo listo para recibir pedidos reales.

**Ancla financiera:** Fase 0 **~33.835 USD**; caja Day-D **~78.153**; objetivo M12 **~159 activas** con **LTV/CAC ~7,2×** si el ARPF placeholder se confirma.

---

## Convención de tiempo (importante)

- **T+0** = día en que entra el capital (wire del SAFE o equivalente).
- **Day-D = T+90** = primer día del piloto **público** en app (inicio del **mes 1** financiero).
- **Fase 0 (T+0 → T+90):** legal, equipo, oficina, tecnología en producción, captación B2B y carga de catálogo — **antes** de marketing masivo al paciente.
- **Meses M1–M12:** cuentan **desde Day-D**, no desde T+0.

Gasto Fase 0 de referencia: **~33.835 USD** (más gastos únicos de arranque **~14.208 USD**) — detalle en guía del modelo financiero del pack.

---

## Mapa de fases (vista Gabriel)

```text
T+0 ─────── T+30 ─────── T+60 ─────── Day-D (T+90) ─────── M6 ─────── M12
 │            │            │              │                │          │
 Legal       Equipo       Catálogo      Go-live         DoD        ~159
 HQ          4× Sales     ~20+ activas  Meta+valla      piloto     activas
             pipeline     delivery test ~40 M1         ~97        ~BE mensual
```

---

## Hipótesis por fase — qué validamos y cuándo pivotar

| Fase | Hipótesis (falsable) | Señal de alerta | Pivot |
|------|----------------------|-----------------|-------|
| **T+0–30** | Legal + equipo + HQ en presupuesto Fase 0a | Cotizaciones > ~17,8k en 0a | Recortar alcance HQ, no inflar tier |
| **T+30–60** | Dueño confirma dolor y firma carta (≥10–15) | ≥2/3 entrevistas sin dolor | Cambiar segmento beachhead |
| **T+60–90** | Farmacia firmada **activa catálogo** + delivery OK | Firma pero no carga productos | Pivot onboarding, no más firmas |
| **M1–2** | Paciente **repite compra en M2** | Sin repeat → revisar precio/percepción | Pausar Meta; QR mostrador |
| **M3–6** | Curva hacia **~97 activas** y revenue ~4.850 | <70 activas M6 | Contingencia financiera (ver proyección) |

Regla: pivot documentado por founder; **no** pivotar por una sola entrevista ni por entusiasmo en redes.

---

## Fase 0 — T+0 a T+30: cimientos

### Semana a semana (referencia)

| Semana | Legal | Equipo | Comercial | Tech |
|--------|-------|--------|-----------|------|
| **S1** (T+0–7) | Denominación mercantil; kick-off abogado/contador | Publicar vacantes 4× Sales + CS + Marketing | Rutas por zona asignadas | Deploy producción VPS + SSL |
| **S2** (T+8–14) | Acta constitutiva | Entrevistas Sales | ≥5 visitas/vendedor; material impreso | OTP SMS paciente en prod |
| **S3** (T+15–21) | Inscripción mercantil | Contratación + onboarding 2 días | Lista corta 12–18 farmacias piloto | Pusher + notificaciones push prod |
| **S4** (T+22–30) | RIF + cuenta banco | Capacitación producto 12 días | ≥20–30 con interés confirmado | Tests E2E Rx/OTC |

### Legal y empresa

| Actividad | Ventana |
|-----------|---------|
| Denominación y acta constitutiva | T+0 a T+12 |
| Registro mercantil y RIF SENIAT | T+12 a T+24 |
| Cuenta bancaria empresa | T+24 a T+29 |
| Marca Zonix Pharma (SAPI) en trámite | Desde T+5 |
| Factura digital SENIAT | Post-RIF; puede quedar operativa post-T+30 |

### Equipo (**4× Sales** + soporte)

| Rol | Acción |
|-----|--------|
| Co-CEO / CEO operativo | Contratación T+15 |
| **4 ejecutivos Sales B2B** | Vacantes T+0; selección T+5–15; capacitación T+17–29 |
| Customer Support | Misma ventana |
| Coordinador Partners Logísticos | Misma ventana |
| Marketing Lead | Misma ventana |

Los vendedores no solo prospectan: **firman contrato marco**, capacitan a la farmacia en panel y apoyan carga de catálogo.

### Oficina (HQ Valencia)

- Visitas a 3–5 inmuebles tipo casa/local (San Diego, Av. Bolívar Norte).
- Contrato y adecuación T+10–25; internet y mobiliario T+25–30.
- Referencia presupuesto: **~500 USD/mes** alquiler HQ casa (escenario Lean).

### Tecnología (sin jerga)

- App y panel en servidor de producción con dominio y certificado seguro.
- Registro de pacientes con verificación por SMS.
- Notificaciones en tiempo real para farmacias y pacientes.
- Pruebas de punta a punta antes de T+30.

### Comercial temprano

- Rutas por zona asignadas a los 4 vendedores.
- Objetivo T+30: **≥20–30 farmacias** con interés confirmado; lista corta **12–18** para piloto.
- Material impreso (brochure, tarjetas) T+10–20.
- Cartas de intención: objetivo **10–15** hacia **T+45** (cuando el equipo ya recorre a ritmo completo).

**Cierre T+30:** empresa en marcha, equipo en plantilla, HQ operativo, pipeline B2B cualificado.

### Escenario: legal se retrasa 15 días

| Impacto | Mitigación |
|---------|------------|
| Day-D posible T+105 | Comprimir onboarding T+60–90; soft launch restringido |
| +~4k burn | Posponer valla; founder bridge si necesario |
| Riesgo tiendas app | Checklist release en paralelo desde T+0 |

---

## Fase 0 — T+30 a T+60: onboarding y catálogo

### Farmacias

| Actividad | Ventana | Responsable |
|-----------|---------|-------------|
| Onboarding técnico (priorizar carta firmada) | T+30–55 | Sales + CS |
| Carga de catálogo (CSV o manual) | T+30–55 | Sales + farmacia |
| Capacitación farmacéutico colegiado | T+35–55 | CS + Co-CEO |
| Capacitación mostrador | T+45–58 | Sales |
| Órdenes de prueba internas | T+50–60 | Founder + CS |

### Delivery (partner, sin flota Zonix)

| Actividad | Ventana |
|-----------|---------|
| Negociación contrato marco con **1 empresa** de última milla | T+30–45 |
| Firma carta de intención o marco | T+40–50 |
| Onboarding **5–15 repartidores** bajo esa empresa | T+45–58 |
| Prueba de entrega real | T+55–60 |
| Zonas iniciales | Valencia centro, San Diego, corredores Naguanagua / El Socorro |

Zonix **no** opera flota propia. El repartidor es agente de la empresa partner (`delivery_agent` en app).

### Marketing (preparación, no masivo aún)

| Actividad | Ventana |
|-----------|---------|
| Cuenta Meta Business + creativos aprobados | T+30–45 |
| Pruebas internas de pauta (gasto mínimo) | T+40–55 |
| Valla 3×2 m Av. Bolívar Norte (producción) | T+30–50 |
| **Regla:** no tráfico masivo pacientes hasta checklist pre-Day-D | — |

**Cierre T+60:** **≥20 farmacias** operativas con catálogo; camino a **~28** al Day-D; Meta listo; valla instalada o lista.

---

## Fase 0 — T+60 a T+90: validación y Day-D

### Checklist antes del go-live

| # | Validación | Evidencia mínima |
|---|------------|------------------|
| 1 | Dueño confirma dolor real (mom-test calle) | ≥5 entrevistas documentadas |
| 2 | Contrato marco + farmacia activa con catálogo | Farmacia lista en producción |
| 3 | Primer pedido real OTC o Rx | Orden completada en sistema |
| 4 | Soporte y partner delivery operativos | Macros CS + SLA acordado |
| 5 | Reacción a **cuota 25/40/55 + % GMV** (hechos, no «¿pagarías?») | ≥3 entrevistas pricing |
| **Go** | Founder firma checklist | Sin Meta/valla masiva si falta fila 1–5 |

**Guía mom-test pricing (fila 5):** preguntar qué **gastó o dejó de ganar** la farmacia con agregador/WhatsApp el último mes; mostrar **después** el ejemplo híbrido (Basic **25** / Pro **40** / Enterprise **55** + % GMV). Si **≥2 de 3** rechazan Pro sobre GMV típico local → nota en VOLCADO y revisión ARPF (sigue **LTV/CAC ~7,2×** solo si ARPF ~50 se sostiene).

Meta comercial al **T+88:** **~35 firmadas**, **~28 activas** en app con catálogo listo para orden pública.

### Semana del Day-D (T+90)

| Hora | Acción |
|------|--------|
| 06:00 | Verificación final de servicios |
| 07:00 | Activación pauta Meta + valla (si contrato lo calendariza) |
| 08:00 | App pública en tiendas (según checklist release); orden simulada interna |
| 09:00 | Comunicación redes y WhatsApp |
| 11:00 | Visitas a farmacias piloto (~20–28 en operación) |
| 12:00 | Primera orden real esperada |
| 18:00 | Balance del día con equipo |
| 22:00 | Reporte interno: órdenes, incidentes, tickets |

**T+91 a T+100:** soporte reforzado 24/7; corrección rápida de fallos; feedback paciente y farmacia.

---

## Año 1 post-Day-D — calendario mes a mes

### Curva de farmacias activas (4× Sales, escenario Lean)

| Mes | Activas (plan) | Firmadas mes | Revenue ref. | Foco operativo |
|-----|----------------|--------------|--------------|----------------|
| Pre-Day-D | **~28** | — | 0 | Catálogo cargado |
| **M1** | **~40** | 13 | ~1.500 | Primera ola Meta B2C |
| M2 | ~51 | 13 | ~2.168 | Geo Bella Florida, El Socorro |
| M3 | ~62 | 14 | ~3.100 | Valla activa (350/mes); expansión corredores |
| M4 | ~74 | 15 | ~3.700 | Refinar script Sales |
| M5 | ~85 | 15 | ~4.250 | CS + tickets Rx |
| **M6** | **~97** | 16 | **~4.850** | **Definition of Done piloto** |
| M7 | ~108 | 16 | ~5.400 | Naguanagua + San Diego |
| M8 | ~119 | 16 | ~5.950 | Partner delivery ampliado |
| M9 | ~130 | 17 | ~6.500 | Resto Valencia metro |
| M10 | ~141 | 17 | ~7.050 | Casi equilibrio operativo |
| M11 | ~151 | 17 | ~7.550 | Optimizar churn |
| **M12** | **~159** | 16 | **~7.950** | Cierre año 1; caja ~**40.831** |

Intensidad comercial sostenida: **4 vendedores × ~10 visitas/día × ~20 días hábiles ≈ 800 visitas/mes** en Valencia metro.

### Actividades comerciales por trimestre

| Trimestre | B2B (Sales) | B2C (Marketing) | Ops |
|-----------|-------------|-----------------|-----|
| **M1–M3** | Captación agresiva; onboarding <72h | Meta **800/mes**; soft→full Day-D | CS 24/7 primeros 10 días post-Day-D |
| **M4–M6** | Zonas secundarias; referidos Morr/farmacia | Creativos A/B; TikTok test si CPL>0,60 | DoD M6; contingencia si <70 activas |
| **M7–M9** | Naguanagua, San Diego (+20–30) | Meta 800; valla 350 | Segundo partner delivery evaluación |
| **M10–M12** | Consolidar ~159; reducir churn | Meta **500/mes** (eficiencia) | Preparar plan año 2 Maracay |

### Flywheel (ciclo virtuoso)

```text
Más farmacias con catálogo → más pacientes en zona piloto
→ más GMV → más ingreso Zonix (cuota 25/40/55 + % GMV)
→ más capacidad Sales / CS / marketing → mejor onboarding → (ciclo)
```

**Freno típico:** churn farmacia ~5%/mes; demanda B2C lenta → priorizar QR en mostrador antes de escalar pauta.

---

## Definition of Done — Mes 6 (éxito del piloto)

| Criterio | Meta M6 | Por qué importa |
|----------|---------|-----------------|
| Farmacias activas | ≥ **97** | Alineado proyección; base para revenue ~4.850 |
| Pedidos completados | ≥ 1.500 | Señal demanda B2C post-Day-D |
| Validación Rx promedio | ≤ 60 min | Diferenciador vs WhatsApp |
| NPS paciente | ≥ 35 | Calidad experiencia |
| NPS farmacia | ≥ 50 | Retención B2B |
| Revenue mensual Zonix | ≥ **4.800 USD** | Puente hacia BE M12 |
| Caja en banco | ≥ **~48.311 USD** | Colchón antes de M7–M12 |
| Tasa cancelación orden | ≤ 8% | Ops saludable |
| Churn farmacia | ≤ 6% promedio M4–M6 | Protege LTV/CAC **~7,2×** |

Si **no** se cumple: activar plan de contingencia (recorte marketing 50%, revisión ARPF, pausar valla, bridge trimestral).

### Escenarios M6

| Resultado | Activas M6 | Acción |
|-----------|------------|--------|
| **Verde** | ≥97 + DoD completo | Continuar plan M7–12; evaluar Lean+ |
| **Amarillo** | 80–96 | Intensificar B2B; pausar Meta 2 semanas; revisar pricing |
| **Rojo** | <80 | Contingencia full; founder + Morr revisión segmento |

---

## Mes 7–12 — Expansión dentro de Carabobo

- **M7–9:** Naguanagua + San Diego (+20–30 farmacias).
- **M10–12:** resto Valencia metro (+30–40 farmacias); posible segundo partner delivery o más agentes bajo el mismo marco.
- **M12:** **~159 activas**; ingresos mensuales ~7.950 USD vs costos ~7.980 USD (casi equilibrio); caja ~**40.831**.

### Sensibilidad calendario comercial

| Variable | Plan base | Si +15% (Lean+) | Si −20% (retraso) |
|----------|-----------|-----------------|-------------------|
| Activas M12 | ~159 | ~183 | ~127 |
| BE mensual | Casi M12 | M10 | Post M12 |
| Caja M12 | ~40.831 | ~49.825 | ~30–32k |

---

## Seguimiento interno (semanal)

| KPI | Frecuencia | Owner |
|-----|------------|-------|
| Firmadas / bajas / activas | Semanal | Co-CEO |
| Pedidos, GMV, revenue | Semanal | Founder |
| Tickets CS + SLA | Diario M1–M3 | CS |
| Caja y burn | Semanal | Founder + contador |
| Entrevistas mom-test | Continuo | Sales |

---

## Año 2 (referencia, fuera del piloto inmediato)

- Maracay mes 13–14; Maracaibo mes 18.
- Meta ilustrativa: ~220 activas en mes 24.
- **No ancla** conversación pre-seed con Gabriel.

---

## Qué nos gustaría que revises, Gabriel

1. **¿T+90 es un Day-D realista** para constitución, **4× Sales** y **~28 activas** con catálogo — o conviene planificar buffer T+105?
2. **Intensidad 800 visitas/mes:** ¿saturación de mercado independiente en Valencia metro o pipeline suficiente para ~185 firmas/año?
3. **Orden B2B primero, B2C en Day-D:** ¿compartes la lógica de no quemar pauta Meta sin catálogo vivo en ~28 farmacias?
4. **Criterios M6 y contingencia:** ¿Añadirías métricas Morr (NPS por corredor, rotación inventario aliado) al Definition of Done?

---

## Disclaimers

- **Calendario condicionado a capital:** sin Fase 0 financiada (~**33.835**), las fechas son planificación, no compromiso público.
- **Metas de farmacias:** proyección con **4× Sales**; sensibilidad si captación es más lenta (−20% → ~127 activas M12).
- **Tiendas y regulación:** release App Store / Play Store y dictamen Rx sujetos a checklist Fase 0.
- **SLA entrega:** tiempos 60–90 min dependen de contrato partner — pendiente firma.
- **No es solicitud de inversión** ni oferta de valores.

---

**Abrahan Pulido**  
Founder / CEO / CTO — Zonix Pharma  
ing.pulido.abrahan@gmail.com · +58 412 4352014

*Zonix Pharma — junio 2026*
