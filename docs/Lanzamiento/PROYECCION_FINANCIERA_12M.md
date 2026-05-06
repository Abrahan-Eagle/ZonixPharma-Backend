# Proyección financiera 12 meses (+ año 2 y 3 + plan contingencia)

> **Última actualización:** 5 mayo 2026.
> Documento que traduce los unit economics y el presupuesto a un flujo mes a mes para los 3 escenarios.
> Cifras en USD constantes con buffer 20% ya aplicado al burn.

## 1. Modelo del escenario Base (USD 75k)

### 1.1 Tabla mes a mes

| Mes | Farmacias firmadas | Farmacias activas | Revenue (USD/mes) | Burn (USD/mes) | Cash flow mensual | Cash flow acumulado |
|---|---|---|---|---|---|---|
| 1 | 5 | 5 | 35 | 4.171 | -4.136 | -4.136 |
| 2 | 6 | 10 | 165 | 4.171 | -4.006 | -8.142 |
| 3 | 6 | 15 | 360 | 4.521 | -4.161 | -12.303 |
| 4 | 8 | 22 | 765 | 4.521 | -3.756 | -16.059 |
| 5 | 10 | 31 | 1.215 | 4.521 | -3.306 | -19.365 |
| 6 | 11 | 41 | 1.665 | 4.521 | -2.856 | -22.221 |
| 7 | 12 | 51 | 2.115 | 4.521 | -2.406 | -24.627 |
| 8 | 14 | 64 | 2.700 | 4.521 | -1.821 | -26.448 |
| 9 | 15 | 78 | 3.330 | 4.521 | -1.191 | -27.639 |
| 10 | 14 | 92 | 3.870 | 4.521 | -651 | -28.290 |
| **11** | **14** | **107** | **4.815** | **4.521** | **+294** | **-27.996** |
| 12 | 13 | 120 | 5.400 | 4.521 | +879 | -27.117 |
| **Total año 1 (sin waiver)** | **128** | **120** | **26.435** | **53.552** | **-27.117** | |
| **Total año 1 (con waiver primeras 10)** | **128** | **120** | **26.235** | **53.552** | **-27.317** | |

> **Lectura (versión sin waiver, planning principal):** se queman USD 27.117 acumulados al cierre del año 1. Restando los USD 6.704 de one-shots del mes 1, el burn operativo neto es USD 20.413 en 12 meses. El capital pedido USD 75.000 cubre ese gasto + buffer + reserva.
>
> **Lectura (versión con waiver de 2 meses gratis a las primeras 10 farmacias):** se condonan USD 200 de revenue mes 1-2 (5×USD 7 + 10×USD 14 promedio). Cash al cierre año 1 baja de USD 41.179 a USD 40.979. Break-even mes 11 NO se mueve. Trade-off aceptable: el waiver es lever de captación que da 5-10% de upside en tasa de firma.

### 1.2 Hipótesis aplicadas al modelo

- **Tasa de churn mensual:** 5% aplicado a farmacias activas del mes anterior.
- **Tasa de firma:** crece de 5 (mes 1) a 15 (mes 9), luego se estabiliza en 13-14/mes.
- **Mix tier:** 60% Basic / 30% Pro / 10% Enterprise → ARPF efectivo USD 45/mes.
- **One-shots:** USD 6.704 incluidos en el mes 1 (no en el burn recurrente).
- **Buffer 20%:** ya aplicado al burn recurrente.

### 1.3 Capital deployment

| Mes | Cash inicial | Inflow | Outflow | Cash final |
|---|---|---|---|---|
| 1 | 75.000 | 35 | 10.875 (4.171 burn + 6.704 one-shots) | 64.160 |
| 2 | 64.160 | 165 | 4.171 | 60.154 |
| 3 | 60.154 | 360 | 4.521 | 55.993 |
| 4 | 55.993 | 765 | 4.521 | 52.237 |
| 5 | 52.237 | 1.215 | 4.521 | 48.931 |
| 6 | 48.931 | 1.665 | 4.521 | 46.075 |
| 7 | 46.075 | 2.115 | 4.521 | 43.669 |
| 8 | 43.669 | 2.700 | 4.521 | 41.848 |
| 9 | 41.848 | 3.330 | 4.521 | 40.657 |
| 10 | 40.657 | 3.870 | 4.521 | 40.006 |
| 11 | 40.006 | 4.815 | 4.521 | 40.300 |
| 12 | 40.300 | 5.400 | 4.521 | 41.179 |

> **Lectura:** al cierre del año 1, Zonix Pharma tiene **USD 41.179 de cash** (más de la mitad del capital recibido) gracias al revenue creciente. Esto da **5-6 meses adicionales de runway** para iniciar año 2 sin depender de ronda nueva.

## 2. Año 2 — proyección conservadora

### 2.1 Hipótesis año 2

- Expansión a Maracay (mes 13-14) y Maracaibo (mes 18).
- Sin nueva ronda de capital.
- Marketing digital + Sales B2B se replica con costos similares en ambas ciudades.
- Churn estabiliza en 5%.

### 2.2 Tabla agregada año 2

| Trimestre año 2 | Farmacias activas | Revenue mensual | Burn mensual | Cash flow trimestral |
|---|---|---|---|---|
| Q1 (mes 13-15) | 130-160 | 5.850-7.200 | 5.500 (sube por Maracay) | +650 a +5.100 |
| Q2 (mes 16-18) | 165-185 | 7.425-8.325 | 6.000 (sube por Maracaibo) | +4.275 a +6.975 |
| Q3 (mes 19-21) | 190-205 | 8.550-9.225 | 6.500 | +6.150 a +8.175 |
| Q4 (mes 22-24) | 210-225 | 9.450-10.125 | 6.500 | +8.850 a +10.875 |
| **Total año 2** | **220 (cierre)** | **8.000-9.000 promedio** | **6.000-6.500** | **~USD 30.000-40.000 cash positivo** |

### 2.3 Revenue anual proyectado año 2

```
Revenue total año 2 = ~USD 96.000-108.000
Burn total año 2 = ~USD 75.000
EBITDA año 2 = ~USD 20.000-30.000 positivo
```

## 3. Año 3 — proyección con primera serie A potencial

### 3.1 Hipótesis año 3

- Cobertura nacional: Caracas + Barquisimeto (además de Valencia, Maracay, Maracaibo).
- **Posible Serie A en mes 28-30** con ticket USD 500k-1M.
- Si se levanta Serie A: el SAFE actual convierte. El cap USD 550k determina equity del inversor del piloto.
- Sin Serie A: revenue año 3 sostiene operación + crecimiento moderado.

### 3.2 Tabla agregada año 3 (sin Serie A — caso conservador)

| Trimestre año 3 | Farmacias activas | Revenue mensual | Burn mensual |
|---|---|---|---|
| Q1 | 240-280 | 10.800-12.600 | 7.500 |
| Q2 | 290-330 | 13.050-14.850 | 8.500 |
| Q3 | 340-380 | 15.300-17.100 | 9.500 |
| Q4 | 400-440 | 18.000-19.800 | 10.500 |
| **Total año 3** | **440 (cierre)** | **15.000-17.000 promedio** | **8.500-9.500** |

### 3.3 Revenue anual proyectado año 3

```
Revenue total año 3 = ~USD 180.000-204.000
Si éxito: ~USD 480.000 (cobertura completa nacional con Serie A)
```

## 4. Plan de contingencia ante shocks macroeconómicos

### 4.1 Trigger 1: Devaluación bolívar > 100% en un trimestre

**Acciones inmediatas (en orden de prioridad):**

1. Cortar valla publicitaria (USD 350-700/mes ahorrados).
2. Reducir delivery fee subsidiado a USD 0.
3. Reducir marketing digital a 50% (USD 250/mes ahorrados).
4. Renegociar coworking u oficina (cambio a coworking más barato si ya estaba en oficina propia).
5. Evaluar reducción 1 hire (ej. Delivery Ops Coordinator si hay < 30 órdenes/día).

**Efecto:** burn mensual baja a USD 3.000-3.300. Runway extendido 4-6 meses adicionales.

### 4.2 Trigger 2: Adopción real < 50% del plan en mes 6

**Trigger:** farmacias activas < 21 en mes 6 (vs. plan de 41).

**Acciones:**

1. Revisar pricing: ofrecer 6 meses Basic gratis a farmacias del piloto inicial.
2. Cambiar comisión Sales B2B: de USD 30/firma a USD 60/firma (mantener motivación).
3. Marketing digital exclusivamente B2B (no B2C todavía).
4. Encuesta cualitativa a farmacias rechazadas.
5. Considerar pivote: si rechazan modelo membresía, evaluar híbrido (membresía baja + comisión 5%).

### 4.3 Trigger 3: Churn > 8% mensual durante 3 meses consecutivos

**Acciones:**

1. Programa de retención: Customer Support contacta directamente a farmacias en riesgo.
2. Reducción de tier sin penalty (Pro → Basic sin sobrecosto).
3. Análisis de causa: encuesta a las que cancelaron.
4. Mejoras de producto basadas en feedback.

### 4.4 Trigger 4: Regulación nueva sobre marketplaces farmacéuticos

**Acciones:**

1. Asesor regulatorio externo activado (USD 200-500/mes ad hoc).
2. Pause de onboarding nuevo mientras se evalúa cumplimiento.
3. Modificación operativa según requisitos.
4. Comunicación transparente al inversor.

## 5. Variables que afectan la proyección y rango aceptable

| Variable | Valor base | Rango aceptable | Acción si fuera del rango |
|---|---|---|---|
| Tasa de firma mensual | 8-15 | 5-20 | Pivot ofertas si < 5; añadir Sales si > 20 |
| Churn mensual | 5% | 3-7% | Activar retención si > 7% |
| ARPF | USD 45 | USD 35-55 | Revisar mix tier si < 35 |
| CAC | USD 94 | USD 70-130 | Revisar canales si > 130 |
| Inflación VE | 387-618% | 200-1.000% | Activar plan contingencia si > 800% |

## 6. Métricas que se reportan al inversor

### 6.1 Mensuales (los primeros 6 meses)

- Cash en banco al cierre del mes.
- Burn rate del mes.
- Revenue del mes.
- Farmacias firmadas / activas / canceladas.
- Pedidos totales y GMV agregado.
- Tickets de soporte.
- Issues técnicos abiertos.

### 6.2 Trimestrales (después de mes 6)

- Lo anterior agregado.
- LTV / CAC actualizado.
- Mix de tiers actual.
- NPS B2B y B2C.
- Métricas operativas (tiempo entrega, validación Rx, % dispute).
- Plan próximos 90 días.
- Solicitud de aprobación si se sale del plan en > 15%.

### 6.3 Plantilla de investor update (email mensual, meses 1-6)

**Asunto:** Zonix Pharma — Investor update [Mes / Año]

**Cuerpo (bullets obligatorios):**

1. **Cash** al cierre del mes (USD) y **burn** del mes.
2. **Revenue** del mes (membresías farmacias) vs. plan.
3. **Farmacias:** activas / nuevas altas / bajas (churn).
4. **Operación:** pedidos completados; GMV agregado si se acuerda compartirlo con el inversor.
5. **Hitos** del plan [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) cumplidos o desviados (con causa).
6. **Riesgos** top 1-3 y mitigación en curso.
7. **Ask** opcional al inversor (intros, mentores, follow-on).

**Adjuntos opcionales:** export CSV métricas; captura dashboard anonimizado.

**FX / bolívares:** reportar cifras operativas en **USD** con nota de tipo de cambio de referencia usado para gastos locales; contador consolida libros según norma VE.

## 7. Escenarios pesimista y optimista

### 7.1 Escenario pesimista (probabilidad 20%)

- Adopción 50% del plan: 60 farmacias en mes 12 vs. plan 120.
- Churn 7% mensual.
- ARPF USD 40.
- Revenue mes 12: USD 2.400.
- **Cash al cierre año 1:** USD 8.000-10.000. Runway extra ~2 meses solamente.
- **Acción:** acelerar Serie A o bridge round mes 12-14.

### 7.2 Escenario base (probabilidad 50%)

- Lo descrito en sección 1.

### 7.3 Escenario optimista (probabilidad 30%)

- Adopción 130% del plan: 156 farmacias en mes 12.
- Churn 4% mensual.
- ARPF USD 50 (más Pro y Enterprise).
- Revenue mes 12: USD 7.800.
- **Cash al cierre año 1:** USD 50.000+. Runway extra > 8 meses.
- **Acción:** evaluar expansión más agresiva año 2 o levantar Serie A en mes 18 con métricas más fuertes.

## 8. Coherencia con el resto del pack

- Capital pedido USD 75k coincide con [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md), [README.md](README.md), [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).
- Burn mensual USD 4.521 coincide con [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md).
- ARPF USD 45, CAC USD 94, churn 5%, LTV USD 900 coinciden con [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).
- Break-even mes 11 con 107 farmacias coincide con todos los documentos.
- TAM USD 1.638M y SAM Valencia 226 farmacias coinciden con [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md).

## 9. Documentos hermanos

- [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md): resumen.
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md): construcción de ARPF, CAC, LTV.
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md): detalle del burn.
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md): fuentes de cifras macro.
- [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md): cap table y SAFE post-money cap.
