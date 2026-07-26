# Censo farmacias Carabobo — Fase 0 (independientes / medianas)

> **Última actualización:** 22 junio 2026  
> **Estado:** estimado **150–250** puntos objetivo — **validación en campo [PENDIENTE]** antes de fijar nómina comercial definitiva.  
> **Uso:** dimensionar **4× Sales** (Lean/Base/Growth) vs **6× Blitz** — ver [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) §S4.1.

---

## 1. Objetivo

Contar **farmacias independientes y medianas** en **todo el estado Carabobo** (no solo Valencia metro) que entren en el ICP Zonix: sin app propia, farmacéutico titular, Rx/OTC, disposición a contrato marco B2B.

**No incluir en el target comercial:** cadenas nacionales (Farmatodo, Locatel) salvo sede piloto acordada; droguerías mayoristas sin dispensación al público.

---

## 2. Estimación actual (pre-censo)

| Ámbito | Total ref. | Independientes / medianas target | Fuente |
|--------|------------|----------------------------------|--------|
| **Valencia metro** | **226** sucursales | **~80–100** | [RESUMEN_ALIADO_GABRIEL_BARRIOS.md](RESUMEN_ALIADO_GABRIEL_BARRIOS.md); directorio [Farmacias Saas VE](https://www.saasvenezuela.com/sucursales) |
| **Carabobo (estado)** | **~350–450** (rango pack) | **~150–250** (hipótesis) | Extrapolación + municipios (Guacara, San Diego, Naguanagua, Puerto Cabello, Los Guayos, etc.) — **[PENDIENTE censo]** |
| **BRIEF TAM regional** | ~350–450 | — | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) § Mercado |

> **Regla founder:** no usar **150–250** en pitch institucional hasta cerrar al menos **80%** del censo con fuente verificable (ver §4).

---

## 3. Fuentes a cruzar (Fase 0, T+0–T+60)

| # | Fuente | Qué validar | Responsable | Estado |
|---|--------|-------------|-------------|--------|
| 1 | [Farmacias Saas VE](https://www.saasvenezuela.com/sucursales) | Listado por municipio Carabobo | Sales + founder | [PENDIENTE] |
| 2 | Colegio / gremio farmacéutico VE (contacto local) | Farmacias activas independientes | Co-CEO | [PENDIENTE] |
| 3 | Cámara de comercio / asociación farmacias Carabobo | Directorio B2B | Co-CEO | [PENDIENTE] |
| 4 | MPPS / registro sanitario local | Permiso operación (referencia; **no** use of funds Zonix) | Asesor (Base+) | [PENDIENTE] |
| 5 | **Recorrido calle** Valencia + corredores | Nombre, dirección, teléfono, tipo (indep./cadena) | **4× Sales** (Lean) | [PENDIENTE] |
| 6 | Google Maps / OSM | Duplicados y puntos sin listado | CS | [PENDIENTE] |

---

## 4. Criterios de inclusión / exclusión

| Incluir | Excluir |
|---------|---------|
| Farmacia independiente o cadena local ≤5 sedes | Farmatodo / Locatel (salvo acuerdo piloto explícito) |
| Dispensación OTC y/o Rx al público | Solo mayorista / depósito |
| Farmacéutico titular identificable | Puesto sin farmacéutico (flag legal) |
| Municipio Carabobo | Otros estados (fase posterior) |

---

## 5. Plantilla de registro (una fila por farmacia)

| Campo | Ejemplo | Obligatorio |
|-------|---------|-------------|
| `id` | CAR-001 | Sí |
| `nombre_comercial` | Farmacia El Sol | Sí |
| `municipio` | Valencia | Sí |
| `parroquia / zona` | San Blas | Sí |
| `tipo` | independiente / cadena_local / cadena_nacional | Sí |
| `rx` | sí / no / desconocido | Sí |
| `telefono` | +58… | Sí |
| `contacto_decision` | titular / gerente | Recomendado |
| `fuente` | saas / calle / referido | Sí |
| `fecha_visita` | 2026-07-15 | Si visitada |
| `estado_pipeline` | prospecto / LOI / firmada / descartada | Sí |
| `notas` | text | Opcional |

**Archivo operativo sugerido:** hoja «Censo Carabobo» en CRM / Google Sheet (no versionar datos personales en Git).

---

## 6. Implicación comercial (headcount)

| Meta territorial | Vendedores mínimo año 1 | Tier modelo | Firmas Y1 ref. |
|------------------|-------------------------|-------------|----------------|
| **Carabobo conservador (~159 activas M12)** | **4× Sales** | **Lean ~211k (210.760 Excel)** / **Base ~157k** *(hist.)* / **Growth ~187k** *(hist.)* | ~185 firmas, ~159 activas M12 |
| **Carabobo agresivo (>80% independientes)** | **6× Sales** | **Blitz ~185k** *(stretch)* | **~279 firmas, ~238 activas M12** |
| **150+ activas con visita mensual presencial sostenida** | **6–8× Sales** | Blitz o post-Serie A | Validar post-censo §7 |

Ver análisis Pizza → Zonix (jun 2026) y [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §0.2.

---

## 7. Checklist cierre censo (antes de pitch «todo Carabobo»)

- [ ] ≥ **150 filas** válidas en plantilla §5 con `tipo = independiente | cadena_local`
- [ ] ≥ **2 fuentes** cruzadas (Saas + calle o gremio)
- [ ] Mapa por municipio (conteo reconciliado)
- [ ] Founder aprueba **N definitivo** y tier SAFE (Lean vs Base vs **Blitz** stretch)
- [ ] Actualizar [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) y [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §4 con cifra validada

---

**Disclaimer:** cifras **150–250** son hipótesis de trabajo hasta completar §7. No sustituye estudio de mercado pagado ni dictamen regulatorio.
