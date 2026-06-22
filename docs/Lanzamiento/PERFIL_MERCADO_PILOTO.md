# Perfil de mercado y zona piloto

> **Última actualización:** 11 junio 2026.
> Documento de mercado: TAM / SAM / SOM, demografía Carabobo, benchmarks competitivos.
> Todas las cifras citadas tienen fuente web pública. Las fuentes están en [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md).
> **Finanzas del pitch (capital, SAFE, runway, PROYECCION Lean):** no en este doc — ver [README.md](README.md) § *Cifras clave del pack* y [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).

## 1. Mercado farmacéutico venezolano (TAM)

| Métrica | Valor 2025 | Fuente |
|---|---|---|
| Tamaño del mercado | **USD 1.638 millones / año** | **Cifar VE** (datos **IMS/IQVIA**) |
| Unidades vendidas | 389 millones de unidades | Cifar VE / IMS-IQVIA 2025 |
| Precio promedio por unidad | USD 4,21 | Derivado de las dos cifras anteriores |
| Crecimiento anual en unidades | +17,49% YoY | Cifar VE (IMS/IQVIA) 2025 |
| CAGR proyectado 2026-2032 | 6,1% anual | Statista / Mordor Intelligence |
| Genéricos Rx | 48,3% del total | Cifar |
| OTC | 35,2% del total | Cifar |
| Marcas Rx originales | 16,5% del total | Cifar |

**Nota Cifar (2025):** +**20,66%** YoY ene-ago; proyección anual **+17,7%**; **H1 2025** ~**+23,4%** según prensa especializada — validar con comunicados oficiales de la cámara.

**Lectura para el inversor:** Venezuela tiene un mercado farmacéutico de USD 1.638M. Está creciendo en unidades a doble dígito (recuperación post-pandemia y post-crisis). Casi la mitad es Rx genérico — exactamente el segmento donde la validación digital de receta tiene más fricción.

## 2. Mercado addressable (SAM Carabobo)

| Métrica | Valor | Notas |
|---|---|---|
| Población Carabobo | ~2,1 millones | INE 2024 |
| Población Valencia metro | ~1,4 millones | Valencia + Naguanagua + San Diego + Los Guayos |
| Farmacias en Valencia metro | **226** | Suma de directorios públicos: Saas, Farmatodo, Locatel, Farmahorro, Drogueria Nena + farmacias independientes |
| Farmacias en zona piloto inicial (Bella Florida + El Socorro) | 30-50 | Estimación por densidad en **dos focos** del área metropolitana (no un solo radio); requiere visita y listado real |
| Farmacias en Carabobo total | 350-450 | Incluye Puerto Cabello, Tocuyito, Mariara, Guacara |

**Segmentación de farmacias:**

| Segmento | Cantidad estimada en Valencia metro | Target Zonix Pharma? |
|---|---|---|
| Cadenas premium (Farmatodo, Locatel, Farmahorro) | ~70-90 sucursales | NO en piloto. Eventualmente Enterprise. |
| Cadenas medianas (3-8 sucursales) | ~25-35 | **SÍ — target óptimo (Pro / Enterprise)** |
| Farmacias independientes con ≥ 1 sucursal con buen movimiento | ~80-100 | **SÍ — target principal (Basic / Pro)** |
| Farmacias independientes pequeñas (1 sucursal, < USD 3k/mes GMV) | ~20-30 | SÍ pero bajo prioridad (Basic) |

## 3. SOM (Serviceable Obtainable Market) realista

Construido bottom-up, no top-down.

| Mes | Farmacias activas | % SAM Valencia metro | Revenue mensual proyectado |
|---|---|---|---|
| 3 | **62** | **~27%** Valencia metro *(alineado [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1)* | **USD 3.100** |
| 6 | **97** | **~43%** Valencia metro / **~54%** SAM extendido *(150–180; §1.1)* | **USD 4.850** |
| 9 | **130** | **~57%** Valencia metro / **~72%** SAM extendido *(§1.1)* | **USD 6.500** |
| **11** | **151** | **~67%** Valencia metro / **~84%** SAM extendido | **USD 7.550** *(revenue; burn mes 11 **7.431** — **equilibrio mensual** §1.1)* |
| 12 | **159** | **~70%** Valencia metro / **~88%** SAM extendido *(§1.1)* | **USD 7.950** |

### 3.1 Sanity check — cuota limitada por capacidad del canal (Steve Blank, L6.14)

La cuota alcanzable no la fija el SAM sino **cuántas farmacias puede firmar el equipo Sales**:

```
Farmacias firmadas/mes ≈ 4 Sales × visitas efectivas/semana × tasa de cierre × 4 semanas
```

- **Headcount:** 4× Sales B2B (única fuente: [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) nómina) — no asumir más vendedores sin línea de gasto.
- **Visitas efectivas/semana y tasa de cierre:** `[PENDIENTE Sales Lead — dato real T+60]`; hasta entonces la curva §3 es hipótesis, no compromiso.
- **Cruce M3/M6 con PROYECCION §1.1:** al cierre **M3** el modelo central tiene **62 activas** / **USD 3.100** rev; al cierre **M6**, **97 activas** / **USD 4.850** — coherente con gate DoD ≥97 activas ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §5).
- **Lectura de coherencia:** llegar a **151 activas en M11** requiere firmar ~13-14 farmacias/mes netas de churn (~3,5/mes por vendedor). Si el dato real T+60 queda por debajo, ajustar curva o headcount **antes** de prometer M11 al inversor — no estirar la tasa de cierre en el spreadsheet.
- Cruce con CAC **139** y LTV/CAC **~7,2x** ([UNIT_ECONOMICS.md](UNIT_ECONOMICS.md)): si para sostener la curva hay que subir gasto S&M, recalcular payback antes de aceptar la nueva cuota.

**Año 2:** expansión a Maracay y Maracaibo. SOM proyectado 200-220 farmacias activas, revenue mensual USD 8.000-9.000 (anual USD 96k-108k).

**Año 3:** Caracas + Maracaibo + Valencia + Maracay + Barquisimeto. **Revenue anual** en dos lecturas explícitas (fuente única [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §3.2–§3.3): **caso conservador sin Serie A** ~**USD 180.000–204.000**/año (promedios mensuales del §3.2); **escenario éxito** (cobertura nacional acelerada / posible Serie A) **hasta ~USD 480.000**/año. **SOM 400–440 farmacias** y **revenue mensual USD 35k–40k** (anual **USD 420k–480k**) describen el **tramo alto / éxito**; no deben leerse como cifra única sin el conservador paralelo.

Detalle del modelo en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).

## 4. Demografía del paciente final

| Atributo | Valencia metro |
|---|---|
| Edad mediana | 33 años |
| % población con smartphone | ~85% (encuestas Datanalisis 2024-2025) |
| % con plan de datos móviles | ~70% |
| Tasa de uso de WhatsApp | > 92% |
| Hogares clase media + media-alta | ~40% |
| Hogares con un miembro mayor de 60 años o con condición crónica | ~28% |

**Insight:** el segmento que más necesita Zonix Pharma son los hogares con adulto mayor o paciente crónico. Compran medicinas todos los meses, valoran no tener que ir físicamente a varias farmacias.

## 5. Benchmark competitivo

**Matriz rápida (competitor-matrix — lente inversor):**

| Actor | Segmento | Modelo | ¿Target Zonix piloto? | Ventaja Zonix |
|-------|----------|--------|----------------------|---------------|
| Farmatodo / Locatel | Cadena premium | App propia cerrada | No (eventual Enterprise) | Independientes sin app |
| PedidosYa Pharmacy | Agregador activo VE | 25–35% GMV *(estimado)* | Parcial (cadenas + independientes) | Cuota + % GMV bajo; Rx digital |
| Farmalisto (LatAm) | Marketplace pharma | % venta | Referencia internacional | Híbrido + VE + piloto local |
| WhatsApp informal | Farmacia | Cero tech | Sí (migración) | Trazabilidad + Rx + tracking |

### 5.1 Farmatodo

- Cadena venezolana premium, ~40-60 sucursales en todo el país.
- App propia con catálogo, sin marketplace de terceros.
- Foco: clase media-alta, presencial.
- Diferencial **Zonix Pharma:** nosotros NO competimos con su segmento. Nuestro target es la farmacia mediana e independiente que **no** tiene **app** propia integrada al paciente.

### 5.2 Locatel

- Cadena venezolana premium con foco en wellness + farmacia, ~30-40 sucursales.
- App propia, sin marketplace.
- Mismo diferencial que Farmatodo: target distinto.

### 5.3 Farmalisto (México + Colombia + Perú)

- Marketplace farmacéutico LatAm más comparable. **Comparable directo internacional.**
- Revenue 2024 (e-commerce MX): **~USD 32,3 millones** ([eCommerceDB](https://ecommercedb.com/store/farmalisto.com.mx) / Crunchbase orden similar).
- VC raised total: **~USD 22M** reportado en agregadores (Tracxn, LeadIQ); **hasta ~USD 33M** en algunas bases (PitchBook, varias rondas).
- Modelo: comisión sobre ventas + delivery. NO membresía fija.
- Lectura para el inversor: el modelo marketplace farmacéutico LatAm ES financiable a esa escala. Zonix Pharma se posiciona con **modelo híbrido** (cuota fija baja + % moderado sobre GMV en la app) frente al take-rate típico por venta de modelos tipo Farmalisto o agregadores de delivery.

### 5.4 PedidosYa Pharmacy *(agregador activo en VE)*

- Vertical farmacéutico de **PedidosYa** (Delivery Hero), operativo en VE desde 2023; **Valencia en cobertura** (oct-2025: 700K+ MAU, 2.500+ comercios en plataforma).
- Modelo: comisión sobre GMV (orden de magnitud **25–35%** según categoría/contrato — validar con farmacias aliadas).
- Cobertura: cadenas (p. ej. SAAS, FarmaGo) e independientes en marketplace generalista.
- Lectura para el inversor: una farmacia que vende USD 5.000/mes en PedidosYa puede pagar **USD 1.250–1.750** en comisión típica. Con Zonix Pharma paga **cuota fija + % moderado sobre GMV en la app** ([PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §5); el costo total suele ser **menor** que el take-rate del agregador.

> **Nota factual (jun 2026):** **Rappi no opera en Venezuela** (sin presencia comercial en país; excluido por riesgo legal según prensa sector). No usar Rappi como competidor directo VE en materiales inversor.

### 5.5 Otros agregadores / referencia LatAm

- **Rappi Pharmacy:** referencia LatAm (CO, MX, etc.) — **no competidor VE**.
- **Farmalisto:** marketplace farmacéutico LatAm — **no opera VE** (ver §5.3).

### 5.6 Tabla comparativa

| Aspecto | Farmatodo / Locatel | **PedidosYa** *(VE)* | Farmalisto | **Zonix Pharma** |
|---|---|---|---|---|
| Tipo | Cadena propia | Marketplace generalista | Marketplace farmacéutico | **Marketplace farmacéutico VE** |
| Target VE | Clase media-alta | Cadenas premium | No opera VE | **Farmacias independientes y cadenas pequeñas-medianas** |
| Modelo cobro | Margen de venta | 25-35% comisión GMV | Comisión + delivery | **Cuota fija + % GMV moderado (Zonix Pharma)** |
| Validación Rx digital | No | No | Parcial | **Sí — farmacéutico colegiado de la propia farmacia** *[PENDIENTE dictamen abogado + farmacéutico asesor]* |
| Cadena de frío | No | No | Parcial | **Sí — flag operativo restringe modos delivery** *[PENDIENTE dictamen abogado + farmacéutico asesor]* |
| Multi-sucursal con un solo onboarding | N/A | No | No | **Sí — Enterprise tier** |
| Métodos pago manuales VE (Pago Móvil, Zelle, Binance Pay) | Solo presencial | Pago Móvil parcial | No opera VE | **Sí — los 4 nativos** |

## 6. Por qué Bella Florida + El Socorro como zona piloto

El piloto combina **dos focos geográficos** dentro de Valencia metro: **Urb. Bella Florida** (sur-oeste de la ciudad) y el barrio **El Socorro** en el **corredor vía Tocuyito** (referencias de campo indicadas por el founder). La logística y el marketing se calibran como **polos acotados**, no como un único círculo de 4 km obligatorio.

### 6.1 Bella Florida

- Urbanización / sector residencial clase media-alta en el **sur-oeste de Valencia**.
- Orden de **~12-15 farmacias** en un radio acotado alrededor del núcleo residencial (validar con mapa y visita).
- Mercado con buen poder adquisitivo y adopción de smartphone / pagos digitales.
- **Corrección editorial (mayo 2026):** versiones anteriores del pack citaban centros comerciales con nombres que **no corresponden** a la realidad local; **no** se usan aquí. Las anclas comerciales exactas (cruces, plazas, CC) deben **confirmarse en campo** antes de materiales impresos o OOH.

### 6.2 El Socorro

- **No** corresponde a “norte-centro de Valencia” en el sentido del casco urbano densificado al norte; según conocimiento de **terreno del founder**, el **El Socorro** del piloto es un **barrio en el corredor de la vía hacia Tocuyito**, **frente a Ferretería Valcro**, **antes** de llegar a **Distribuidor San Luis** y al **mercado mayorista** en esa misma traza.
- Tráfico mixto (particular + comercial ligado al corredor): alta necesidad de **OTC**, abasto frecuente y **medicación crónica** en familias que transitan o residen en la zona.
- Orden de **~15-20 farmacias** en el corredor útil para captación (cifra orientativa hasta conteo en visita).
- Conexión vial: enlaza con **resto de Valencia metro**, **Tocuyito** y rutas de abasto; encaja con expansión posterior documentada (Naguanagua, San Diego, SAM extendido).

### 6.3 San Diego (zona alterna del founder)

- Si el inmueble del founder queda en San Diego, San Diego puede sustituir Bella Florida.
- Densidad farmacéutica equivalente.

### 6.4 Razones operativas

- **Founder vive en Carabobo:** decisiones operativas en horas, no días.
- **Logística manejable:** **Coordinador de Partners Logísticos** como enlace con **empresa concesionaria** de última milla + capacidad de campo del **partner** en el orden de **10-15 agentes** en zona piloto (mapa y contrato marco).
- **Marketing local barato:** una valla 3m×2m USD 350/mes en av. Bolívar Norte capta ~20.000 impactos/día (fuente: [PubliExterior VE](https://www.publiexterior.com/), tarifario 2025).

### 6.5 Crossing the chasm — cuándo ampliar SAM (post-M6)

**Regla del pack:** no escalar geografía ni narrativa “Valencia metro completo” hasta cumplir el **Definition of Done M6** del piloto ([PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §5). Esto evita el error clásico de saltar del **beachhead** (Bella Florida + El Socorro) al **mainstream** sin retención.

| Criterio chasm (todos requeridos) | Meta M6 | Si falla |
|-----------------------------------|---------|----------|
| Farmacias activas | ≥ **97** | No abrir Naguanagua/San Diego masivo; reforzar Sales + waiver |
| Pedidos completados | ≥ **1.500** | Recortar Meta exterior; Bullseye interior |
| NPS B2C | ≥ **35** | CS + fixes producto antes de expansión |
| NPS B2B | ≥ **50** | Revisar pricing mom-test (PLAN §4.0 fila 5) |
| Cash en banco | ≥ **~46.395** | Activar contingencia PROYECCION §4 |

**Solo tras M6 verde:** ejecutar §6 PLAN (Naguanagua + San Diego, meta **130** activas M9) y SAM extendido **150–180** farmacias documentado en §3. **Año 2** (Maracay, Maracaibo) permanece upside — no commitment en pitch año 1 ([CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §3).

## 7. Mercado expansión año 2

| Ciudad | Farmacias estimadas | Población | Notas |
|---|---|---|---|
| Maracay | ~250 | 1,2M | Cercanía geográfica con Valencia, expansión natural. |
| Maracaibo | ~400 | 1,4M | Mercado grande pero requiere base operativa local. |
| Caracas | ~700 | 2,9M | Mercado más grande pero competencia directa **PedidosYa** más fuerte. |
| Barquisimeto | ~200 | 1,0M | Ciudad mediana, sin competencia digital fuerte. |

**Plan año 2:** Maracay (mes 13) + Maracaibo (mes 18). Caracas y Barquisimeto en año 3.

## 8. Tasa de adopción digital esperada

Basado en benchmarks LatAm (mercados B2B SaaS para SMB):

- **Mes 1-3:** A cierre mes **3:** **62** farmacias activas (**~27%** Valencia metro — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1).
- **Mes 4-6:** A cierre mes **6:** **97** farmacias activas (**~43%** Valencia metro / **~54%** SAM extendido 150–180).
- **Mes 7-9:** A cierre mes **9:** **130** farmacias activas (**~57%** Valencia metro / **~72%** SAM extendido — [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1).
- **Mes 10-12:** A cierre mes **11:** **151** activas (**equilibrio mensual**); mes **12:** **159** activas (**~70%** Valencia metro).

Estos números asumen:
- Sales B2B (**4 reps**, firmas/mes en total): ~**5-6** mes 1, **8-12** meses 4-6, **~14** meses 7-11 (ritmo medio anual **~10,7**/mes — coherente con [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) §1.1). Productividad individual orientativa: **~2,7 firmas/rep/mes** en cruise (10,7 ÷ 4).
- Marketing digital + valla + referencias generan 3-5 leads orgánicos/mes desde mes 6.
- Churn 5% mensual (la farmacia que no vende suficientemente cierra cuenta).

## 9. Riesgos de mercado

| Riesgo | Probabilidad | Mitigación |
|---|---|---|
| Devaluación bolívar > 100% trimestral | Media | Buffer 20%. Plan contingencia documentado. |
| Regulación nueva sobre marketplaces | Baja-media | Asesor regulatorio externo USD 120/mes en **Base (118k) y Growth (135k)** — no en Lean 101k. Founder revisa Gaceta semanalmente. |
| PedidosYa agresivo en descuento / comisión | Media | Modelo Zonix (fija + % bajo sobre GMV app) estructuralmente más barato que comisión plena agregador; benchmark real = PedidosYa VE, no Rappi. |
| Farmatodo lanza marketplace propio | Baja | Su DNA es retail propio, no marketplace. Tomarían 18-24 meses construirlo y entonces nosotros ya tenemos PMF. |
| Adopción inicial < 50% del plan | Media | Pivote táctico: bajamos Sales B2B fijo, subimos comisión por farmacia firmada. |
| Inflación supera el buffer 20% | Media-alta | Plan: cortar valla publicitaria primero, bajar 1 hire, renegociar alquiler HQ. Mantiene runway 9-10 meses en lugar de 12. |

## 10. Resumen para el inversor

> Mercado farmacéutico VE: USD 1.638M/año (derivado Cifar/Faro: 389M u × ~USD 4,21). 226 farmacias en Valencia metro *(reconciliar vs ~187 ciudad / ~290 Carabobo — SmartScraper abr-2026)*. Comparable internacional (Farmalisto): ~USD 32M revenue; funding ~USD 22–33M. Diferencial: **cuota plataforma + % GMV moderado** vs. comisión **PedidosYa** (~25–35% GMV). Unit economics: [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) (CAC **139**, LTV/CAC **~7,2x**, ARPF **~50**). Validación Rx digital + cadena de frío + multi-sucursal — *[PENDIENTE dictamen abogado + farmacéutico asesor]*.

Documentos hermanos relevantes:
- [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md): qué decir a la farmacia.
- [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md): qué decir al paciente.
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md): cómo se traducen estos números a CAC, LTV y break-even.
- [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md): fuentes web completas.
