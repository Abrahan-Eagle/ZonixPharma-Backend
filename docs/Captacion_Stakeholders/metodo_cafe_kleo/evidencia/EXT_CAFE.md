# Evidencia — video Café (Facebook) + EXT-001…003

> **Para qué sirve:** respaldo forense del reel de cafetería / membresías.  
> **No es plan de acción.** Decisión Zonix: consumo sin retorno; cohorte por capacidad.  
> IDs: EXT-001, EXT-002, EXT-003, INT-001 + Anexo A del monolito v1.0.

## Identificación

| Campo | Valor |
|---|---|
| URL | [Facebook reel 2087986695439858](https://www.facebook.com/reel/2087986695439858) |
| Fecha del análisis | 20 agosto 2026 |
| Naturaleza | Pieza narrativa/ficción usada como caso; no prueba de una transacción real |
| ASR | Whisper `base` ES |
| SHA-256 video | `6bdd358d9c79fcdb7613dfda0ac538d8f280e0ffcd4565eb1125931079ecb3f6` |
| SHA-256 audio | `866940b74a118fe5fb1ba586d9dd625447f59ac7aa9a484fc676b6d26352c6da` |

El arco combina **opción operativa + equity/garantías + red + membresías prepagadas + revenue sharing**. Su idea válida es financiar crecimiento con clientes; su error es presentar caja condicionada como capital libre.

## Cadena narrativa

| Fase | Claim del reel | Lectura técnica |
|---|---|---|
| Negociación | Ask 1,5M; oferta 1,75M cash | Compra de activo, no LBO |
| Control temporal | Depósito 175k + 30 días; se pierde si no cierra | Opción de facto / earnest money con operación |
| Equipo | 8% a operadores + 35k de garantía reembolsable al año | Equity compensation + garantía; no demuestra compra de equity |
| Membresía | 200 contratos × 10k = 2M | Customer-funded / prepago con obligación de servicio |
| Beneficio | crédito 10k y pagos/valor 15k + 25k | La ambigüedad consumo-retorno activa riesgo financiero |
| Cierre narrativo | «Dejar de vender café» | Monetiza membresía/red; no prueba unit economics del local |

**Lo que no es:** no hay deuda senior o repago con EBITDA para llamarlo LBO; no hay seller financing ni earnout demostrados; no es Ponzi por definición; no es crowdfunding de recompensas puro si existe profit share.

## Fuentes y usos corregidos

```text
Precio acordado                         = 1.750.000
Depósito propio ya aplicado             =   175.000
Saldo a pagar                           = 1.575.000
Membresías cobradas                     = 2.000.000
Caja física tras pagar el saldo         =   425.000
Exceso de caja de clientes sobre precio =   250.000
```

Los 425k se explican por 250k de exceso aportado por clientes + 175k de capital propio ya aplicado. No se deben restar las garantías como si fueran ese depósito:

```text
Caja con garantías      = 425.000 + (35.000 × N)
Pasivo por devolverlas  =           − (35.000 × N)
Efecto neto segregado   = 0
```

Ninguna de esas cifras es automáticamente revenue, profit o caja libre.

## Stress de cumplimiento (lore del reel)

Si las 200 membresías dan 2M nominales de consumo, el colchón de 425k soporta como máximo **21,25%** de costo incremental antes de opex fijo, impuestos, eventos, profit share y devoluciones (`425.000 / 2.000.000`).

Matriz de redención — solo costo variable de créditos:

| Redención / costo incremental | 20% | 30% | 40% |
|---|---:|---:|---:|
| 60% | +185k | +65k | −55k |
| 80% | +105k | −55k | −215k |
| 100% | +25k | −175k | −375k |

Con costo incremental de 30%, la redención máxima que soporta el colchón es 70,83%; exigiría al menos **29,17% de breakage** solo para llegar a saldo cero, todavía antes de opex.

El reloj de 30 días / 6,7 cierres por día **no** se traslada al B2B Zonix.

## Equity y retorno (lore)

- Si 35k compraran 8%, la valoración post-money implícita sería 437,5k; contradice el precio de 1,75M.
- Los 35k se presentan como reembolsables: más garantía/préstamo temporal que compra de equity.
- Para flujos `[-10k, +10k, +15k, +25k]`, la TIR aproximada es **119,9% anual**, no 122%.
- Pagos nominales acumulados de 200 miembros: **10M**, no 12M, si el primer 10k es el crédito inicial.

| Operadores | Equity prometido | Garantías reembolsables |
|---:|---:|---:|
| 1 | 8% | 35k |
| 4 | 32% | 140k |
| 5 | 40% | 175k |
| 10 | 80% | 350k |

## Contabilidad y regulación (referencias, no dictamen)

- IFRS 15 §106: pago recibido antes de transferir bienes/servicios → **contract liability**.
- Howey/Edwards/Forman y [Flyfish Club — SEC](https://www.sec.gov/enforcement-litigation/administrative-proceedings/33-11305-s): riesgo cuando se vende expectativa de beneficio.
- SUNAVAL/SUNDDE + abogado VE: `CAP-P05`, `CAP-P08`.

## Comparables útiles

| Comparable | Qué valida | Qué no valida |
|---|---|---|
| Customer-Funded Business (LBS) | Pay-in-advance, suscripción | Retornos garantizados |
| Starbucks deferred revenue | Float + deferred revenue | Profit share |
| Costco | Membresía de consumo recurrente | Crédito total reembolsable |
| Smoke & Mirrors | Prepago F&B sin retorno | Financiar públicamente una adquisición |
| Flyfish Club | Riesgo de membresías con upside | Validación del modelo |

**Aplicación Zonix:** consumo, servicios reales, cohortes por capacidad y reconocimiento diferido. **Fuera:** profit share, recuperación de cuota, garantía 35k, 8% a operadores, fondos de pacientes y retorno 10/15/25k.

---

## EXT-001 — Primera respuesta Gemini (chat)

**MANTENER:** membresía ≠ profit share; 2M ≠ revenue automático; separar SAFE / B2B / pedidos.  
**CORREGIR:** “security inequívoco” → riesgo según hechos; TIR ~119,9% no ~122%; SAFE 237.412 es ask no recaudado; etc.  
**DESCARTAR:** 50×1.500; 0% GMV; profit share; etiquetas fraude/Ponzi/quiebra.

## EXT-002 — Deep Research Gemini (DOCX local, no versionado)

**MANTENER:** taxonomía híbrida; IFRS 15; no fabricar P10/P50/P90; cohorte máx. 10.  
**CORREGIR:** puente 250k vs 425k (no doble conteo de 175k); tiers Basic/Pro/Enterprise; 8% operadores no valorados sin contrato.  
**PENDIENTE HUMANO:** URLs del DOCX (`CAP-P02`); abogado; contador.

## EXT-003 — Informe forense en dos partes (local)

**MANTENER:** taxonomía; caja ≠ revenue; Howey/Flyfish como riesgo; comparables de consumo puro; checklist prepago.  
**CORREGIR:** TIR/10M; puente caja; cupo máx. 10; no “triple cuenta bancaria absoluta” (sí tres universos); no publicar P10/P50/P90.  
**DESCARTAR:** profit share/retornos; Reg CF/D/A+ para la ronda actual; 6,67 cierres/día.

## INT-001

Uso aprobado: taxonomía, modelo numérico, fuentes y límites. No usarlo como prueba de que el negocio del reel existió.

Volver: [`README.md`](../README.md) · decisión: [`../PLAN_ALFA_BETA.md`](../PLAN_ALFA_BETA.md)
