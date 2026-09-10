# Escenarios S0 / S1 / S2 — cobro a farmacias

> **Para qué sirve:** cómo se cobra (o no) a farmacias cliente.  
> **No es:** menú Alfa/Beta ni pitch SAFE.  
> Fuente histórica: monolito v1.0 §9.

## Resumen

| Escenario | Estado | Qué es |
|---|---|---|
| **S0** | Vigente (pitch) | Cobro mensual 45/60/70 + 8/7/5% GMV |
| **S1** | Cohorte piloto | Waiver cuota fija 0 × 2 meses, máx. 10; `%GMV` = `CAP-P01` |
| **S2** | **No aprobado** | Prepago anual por servicio (Delta futuro) |

**CrowdPharma** ([`PLAN_CROWDPHARMA.md`](../metodo_crowdpharma/PLAN_CROWDPHARMA.md)) empaqueta S0/S1/(futuro S2) como “adopción de cupo”: Semilla ≈ entrada al menú; Fundadora ≈ S1; Anual ≈ S2. No sustituye esta tabla ni el SAFE.

---

## S0 — Base vigente

Cobro mensual 45/60/70 + 8/7/5% GMV. Es el único escenario del pitch central.

## S1 — Cohorte fundadora con waiver

- máximo 10 farmacias;
- cuota fija USD 0 en meses 1–2;
- GMV medido;
- salida y conversión a contrato conforme al documento B2B;
- componente `%GMV` durante waiver: `CAP-P01 [PENDIENTE]`.

No se presenta como capital levantado. Es promoción/acquisición de cliente. Relación con Beta: [`PLAN_ALFA_BETA.md`](../metodo_cafe_kleo/PLAN_ALFA_BETA.md).

## S2 — Prepago anual por servicio

Estado: **`[PROPUESTA — NO APROBADA]`**.

No sustituye el pricing ni entra al modelo hasta superar gates.

Si algún día se aprueba, el precio anual se **asigna** a prestaciones distintas (onboarding, panel, soporte), no a un blob único. No entra descuento 10–15% ni reserva fija 30% hasta `CAP-P03` / `CAP-P04`. El prepago no diluye el cap SAFE de USD 1.582.747.

Variables:

```text
N                  = farmacias elegibles (canon: máximo 10, no 15)
P                  = precio anual validado
cash_collected     = N × P
contract_liability = importe asignado a servicios no satisfechos
monthly_revenue    = importe reconocido conforme se presta el servicio
fulfillment_cost   = soporte + onboarding + infraestructura + beneficios
reserve_required   = refunds esperados + fulfillment pendiente + contingencia
cash_usable        = cash_collected − reserve_required − impuestos aplicables
```

### Gates antes de modelar precio

- ≥5 entrevistas mom-test documentadas;
- ≥3 reacciones de pricing documentadas;
- contrato mensual usado en operación real;
- al menos 30 días de utilización/GMV/soporte para la cohorte candidata;
- al menos un ciclo **post-waiver** facturado y cobrado; uso gratuito por sí solo no prueba WTP;
- margen de contribución observado y capacidad de cumplimiento;
- definición exacta de prestaciones y capacidad;
- política de cancelación/refund;
- análisis contador de reconocimiento e impuestos;
- revisión legal de contrato/publicidad;
- reproyección P&L/caja aprobada por founder.

### Stress mínimo

Modelar sin llamar P10/P50/P90 hasta tener datos: adopción; renovación; cancelación/refund; costo de soporte; costo de onboarding; descuentos/precio; utilización; churn; GMV; retraso de prestación; concentración de caja.

Salida obligatoria por escenario:

- caja cobrada;
- pasivo/obligación pendiente;
- reserva;
- revenue reconocido;
- margen de contribución;
- cash usable;
- impacto en runway;
- riesgo contractual;
- decisión `GO / NO-GO / MÁS DATOS`.

### Prohibiciones

- profit share;
- retorno fijo o variable para cliente;
- “recuperas la cuota”;
- vender el prepago como inversión;
- usar dinero de pacientes;
- reconocer todo el prepago como revenue del mes;
- lanzar sin reserva/refund/capacidad.

## Ver también

- Canon: [`01_REGLAS_Y_CANON.md`](01_REGLAS_Y_CANON.md)  
- Delta = S2 futuro: [`PLAN_ALFA_BETA.md`](../metodo_cafe_kleo/PLAN_ALFA_BETA.md)  
- Índice: [`../README.md`](../README.md)
