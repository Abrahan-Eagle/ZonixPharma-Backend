> **ARCHIVO HISTÓRICO — Zonix Eats (pre-fork abr 2026).** No indexar para **Zonix Pharma**. Canon migración: [MIGRACION_EATS_PHARMA.md](../../MIGRACION_EATS_PHARMA.md) · Pack inversor vivo: [docs/Lanzamiento/README.md](../../Lanzamiento/README.md).
>

# Perfil de mercado — zona piloto (El Socorro, Valencia, Carabobo)

> **Propósito:** fundamentar ante inversionistas y equipo que la zona piloto fue elegida con criterio, no por conveniencia.  
> **Fuentes:** INE (censo 2011 + proyecciones), Wikipedia Municipio Valencia, GuiaPana, DataReportal, BCV, Banca y Negocios, Guayoyo Marketing. Donde no hay dato oficial se declara *estimación razonada* con supuesto explícito.  
> **Última actualización:** abril 2026.

---

## 1. Demografía de la zona

### 1.1 Valencia y Carabobo (contexto macro)

| Indicador | Valor | Fuente |
|-----------|-------|--------|
| Población municipio Valencia (est. 2025) | ~830.000 hab. (municipio administrativo) | INE proyección base censo 2011 |
| Área metropolitana Valencia (5 municipios) | ~2.000.000 hab. | Wikipedia / proyecciones locales |
| Estado Carabobo (total) | ~2.800.000 hab. | INE |
| Urbanización | >90 % | DataReportal 2025 (media nacional 88,6 %) |
| Mediana de edad (nacional) | 29,4 años | DataReportal 2025 |

### 1.2 Parroquia El Socorro y barrios colindantes

| Indicador | Valor | Nota |
|-----------|-------|------|
| Población parroquia El Socorro (censo 2011) | ~5.400 hab. | Wikipedia — dato más reciente disponible |
| Barrios colindantes incluidos (Bella Florida, Los Chorritos, Las Parcelas, San Martín, Llano Verde) | Estimación conjunta: **15.000–25.000 hab.** | *Estimación razonada*: El Socorro es parroquia pequeña pero los barrios colindantes suman población significativa; Valencia tiene 9 parroquias urbanas que promedian ~90.000 hab. cada una |
| Nivel socioeconómico predominante | C-D (clase media-baja y baja) | Observación directa; urbanizaciones populares |
| Densidad comercial comida rápida | Alta (barrios populares venezolanos concentran empanaderías, luncherías, pollerías, areperas) | Patrón nacional + observación local |

**Nota metodológica:** El XV Censo Nacional (en curso, modalidad web) no ha publicado resultados parroquiales. Cuando se publiquen, actualizar esta tabla.

---

## 2. Mercado de comida rápida en Valencia

### 2.1 Oferta (datos GuiaPana, abril 2026)

| Métrica | Valor |
|---------|-------|
| Restaurantes de comida rápida registrados en Valencia | **264** |
| Con servicio de delivery | **127** (48 %) |
| Precio promedio por comida | **~6 USD** (rango 3–9 USD) |
| Calificación promedio usuarios | 4,1 / 5 |

**Importante:** estos son comercios registrados en plataformas digitales. El comercio informal (luncherías de barrio, carritos, ventanas) NO aparece en directorios. En barrios populares como El Socorro, la proporción informal/formal puede ser **2:1 o mayor**.

### 2.2 Estimación para zona piloto

| Métrica | Estimación | Supuesto |
|---------|-----------|----------|
| Comercios de comida rápida / preparada en el corredor piloto | **30–60** | Parroquia El Socorro + 5 barrios colindantes; densidad comercial alta típica de barrio popular venezolano (1 local cada ~500 hab.) |
| Con smartphone y cuenta bancaria (pueden operar en app) | **70–85 %** de los anteriores | Penetración móvil nacional 60 %; en zona urbana comercial la tasa es mayor |
| Con disposición a pagar membresía (hipótesis) | **20–40 %** de los contactados | Tasa de conversión conservadora para producto nuevo sin tracción previa |
| Tasa de contacto en 12 meses (captador part-time, ~15 visitas/semana) | **~50 % del universo** (~25–30 comercios contactados de 60) | 15 visitas/semana x 4 sem x 10 meses efectivos = ~600 visitas; ~3-5 visitas/comercio = ~120-200 comercios unicos contactados; en zona acotada de 60 comercios se cubren todos pero no todos a profundidad |
| **Comercios potenciales captables en 12 meses** | **8–20** | 30–60 x 85 % x 30 % = 8–15; con esfuerzo de activacion puede llegar a 20 |

---

## 3. Hábitos de pago en la zona

### 3.1 Panorama nacional (fuentes BCV / Banca y Negocios, 2025)

| Canal | Cuota de mercado | Tendencia |
|-------|-----------------|-----------|
| **Pago móvil interbancario (P2P)** | **38 %** del total de transacciones (oct. 2025); superó a POS en jul. 2025 con 470,9 M operaciones/mes | Crecimiento acelerado; +20 M usuarios registrados |
| POS (tarjetas débito/crédito) | 39 % | Estable, en declive relativo |
| Transferencias bancarias | ~15 % | Estable |
| Efectivo (USD, EUR, VES) | ~8 % concentrado en estrato A | Reducción continua |
| Zelle / cripto | Creciente en USD | Relevante en comercio medio-alto |

### 3.2 Implicación para El Socorro (barrio popular)

| Método | Relevancia en la zona | Prioridad Zonix |
|--------|----------------------|-----------------|
| **Pago móvil P2P** | **Dominante** — acceso masivo, 0 % comisión para Zonix | **P0** — ya implementado |
| **Efectivo (USD/VES)** | **Alta** — muy usado en barrio | **P0** — ya implementado |
| **Transferencia bancaria** | Media — entre bancos | **P0** — ya implementado |
| Zelle | Media-baja en estrato C-D; más en estrato B+ | P1 — agregar al enum |
| Binance/USDT | Baja-media; creciente en jóvenes | P2 — manual primero |
| TDC/TDD | Baja en barrio popular | P2 |

**Conclusión de pagos:** con pago móvil + efectivo + transferencia, Zonix ya cubre **~90 % de las transacciones** del perfil socioeconómico de la zona piloto.

---

## 4. Competencia en la zona

### 4.1 Mapeo competitivo

| Competidor | Presencia en El Socorro y barrios colindantes | Modelo | Comisión al comercio | Fortaleza | Debilidad |
|-----------|----------------------------------------------|--------|---------------------|-----------|-----------|
| **Yummy** | Sí (cobertura Valencia), pero **tiempos de entrega largos** en barrios populares alejados del centro | Comisión % sobre venta + tarifa servicio al buyer | ~25 % sobre pedido + $1 envío al buyer | Base de usuarios grande, marca conocida | Comisión alta; servicio irregular en barrios periféricos |
| **PedidosYa** | Sí (cobertura Valencia), similar patrón | Comisión % negociada (15–30 %) | 24–27 % (efectivo/tarjeta) | Marca internacional, posicionamiento SEO | Tarifa servicio ($0,50+); cobertura desigual en barrios |
| **WhatsApp / Instagram** | **Dominante** en barrio — pedido directo al comercio | Informal; 0 comisión | 0 % | Cero costo, familiar | Sin tracking, sin historial, sin gestión de reclamos, difícil escalar |
| **Delivery propio** | Algunos comercios tienen motorizado propio | N/A | N/A | Control total | Costo fijo alto para el comercio |

### 4.2 Oportunidad Zonix

En barrios populares como El Socorro, las super-apps (Yummy, PedidosYa) tienen **cobertura nominal pero servicio deficiente**: tiempos largos, pocos riders en la zona, y los comercios de barrio a menudo no están registrados por el ticket promedio bajo.

**El competidor real es WhatsApp.** La propuesta de Zonix debe superar a WhatsApp, no a Yummy:

| Dimensión | WhatsApp | Zonix Eats |
|-----------|----------|------------|
| Costo para el comercio | $0 | Membresía $15–40/mes |
| Tracking del pedido | No | Sí (estados en tiempo real) |
| Historial de pedidos | No (o manual) | Sí (automático) |
| Menú digital | No | Sí (con fotos, precios, stock) |
| Gestión de pagos/comprobantes | Manual | Estructurado en app |
| Gestión de reclamos | Caótico | Chat + disputas |
| Datos del cliente | Ninguno | Base de datos del comercio |
| Escalabilidad | Limitada (1 persona atiende chat) | Multi-pedido simultáneo |

---

## 5. TAM / SAM / SOM

### 5.1 Definiciones para Zonix Eats

| Nivel | Definición | Estimación | Cálculo |
|-------|-----------|-----------|---------|
| **TAM** (Total Addressable Market) | Todos los comercios de comida rápida/preparada en Valencia que podrían pagar membresía | **~264 registrados + ~200 informales ≈ 460** comercios × $25/mes × 12 = **~138.000 USD/año** | GuiaPana (264) + estimación informal |
| **SAM** (Serviceable Available) | Comercios en El Socorro + barrios colindantes con smartphone y cuenta bancaria | **30–60 comercios** × $25/mes × 12 = **9.000–18.000 USD/año** | Estimación §2.2 |
| **SOM** (Serviceable Obtainable) | Comercios que Zonix puede captar realistamente en 12 meses de piloto | **8–20 comercios** × $25/mes × 12 = **2.400–6.000 USD/año** | Hipótesis de conversión §2.2 |

### 5.2 Revenue potencial (solo membresía comercios — sin delivery company)

| Escenario | Comercios activos mes 12 | Ingreso mensual recurrente | Ingreso acumulado año 1 |
|-----------|--------------------------|---------------------------|------------------------|
| Conservador | 8 | $200 | ~$1.200 |
| Base | 12 | $300 | ~$2.000 |
| Optimista | 20 | $500 | ~$3.600 |

*Nota: estos montos son solo comercios x membresia. La membresia de Delivery Company es un segundo flujo. Ver [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) para el modelo completo.*

### 5.3 TAM expandido — escalabilidad a Venezuela (post-piloto)

El TAM de $138.000/ano (solo Valencia) es un micro-mercado. Para un inversionista, el piloto solo tiene sentido si demuestra un camino a escala. Aqui se proyecta el TAM si Zonix se expande a las principales ciudades:

| Ciudad / area | Poblacion (est.) | Comercios comida rapida (est. registrados + informales) | TAM @$25/mes (anual) |
|---------------|-----------------|--------------------------------------------------------|---------------------|
| **Valencia (piloto)** | ~830.000 | ~460 | **$138.000** |
| **Maracay** (Aragua) | ~540.000 | ~300 | **$90.000** |
| **Barquisimeto** (Lara) | ~1.100.000 | ~550 | **$165.000** |
| **Caracas** (Gran Caracas) | ~3.300.000 | ~2.500 | **$750.000** |
| **Maracaibo** (Zulia) | ~1.700.000 | ~900 | **$270.000** |
| **Total 5 ciudades** | ~7.500.000 | ~4.710 | **~$1.413.000/ano** |

> **Supuestos:** proporcion comercios/poblacion similar a Valencia (~0,55 por cada 1.000 hab. para registrados, x2 incluyendo informales). Precio fijo $25/mes sin ajuste por ciudad.

**Tasa de captura realista (SOM expandido):**

| Horizonte | Cobertura | Comercios activos (5-10 % captura) | MRR | Ingreso anual |
|-----------|-----------|-------------------------------------|-----|---------------|
| Ano 1 (piloto) | Solo El Socorro | 8-20 | $200-500 | $2.400-6.000 |
| Ano 2 | Valencia completa | 40-80 | $1.000-2.000 | $12.000-24.000 |
| Ano 3 | Valencia + Maracay | 80-150 | $2.000-3.750 | $24.000-45.000 |
| Ano 4-5 | 3-5 ciudades | 200-400 | $5.000-10.000 | $60.000-120.000 |

**Lectura para el inversionista:** el piloto de El Socorro ($6.000/ano) es la prueba de concepto. El mercado real es el top 5 de ciudades de Venezuela ($1,4M/ano TAM). Zonix necesita probar el modelo en una parroquia antes de replicarlo en 4.710 comercios potenciales.

> **Nota:** estas proyecciones de expansion no incluyen posible cambio de modelo (ej. comision sobre GMV para comercios de alto volumen, SaaS premium con analitica). Si se diversifica el revenue, el TAM crece significativamente.

### 5.4 Benchmarks internacionales (contexto para inversionista)

No son comparables 1:1 (mercados, regulación, año de fundación distintos), pero dan **orden de magnitud** de lo que hizo el sector food delivery en LatAm en etapa temprana:

| Referencia | Dato util (orden de magnitud) | Uso en conversacion |
|------------|------------------------------|---------------------|
| **iFood (Brasil)** | Escala regional; modelo marketplace + logistica; crecimiento fuerte 2015-2020 | Ilustra que el ganador invierte en densidad urbana antes que en pais completo |
| **Rappi** | Multiples rondas; expansion agresiva; quemar capital en subsidios en algunas etapas | Contraste: Zonix no subsidia GMV ni retiene pagos |
| **PedidosYa / Delivery Hero** | Adquisiciones y consolidacion | Muestra salida posible del sector (M&A) a medio plazo |
| **Yummy (Venezuela)** | Ronda reportada **~USD 4M** (2021, prensa sector; verificar cifra en fuente actualizada) | "Ellos levantaron millones para modelo con riesgo regulatorio distinto; nosotros pedimos **single-digit kUSD** para validar membresía B2B sin intermediar pagos" |

**Capital efficiency (año 1):** en el modelo Zonix, ingresos año 1 / gastos año 1 es bajo (~22 % en escenario base) porque es **deliberadamente** un año de validación; en SaaS B2B temprano es frecuente que el ratio mejore fuerte en año 2-3 si hay retención. Documentado en [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).

---

## 6. Penetracion digital

| Indicador | Venezuela (nacional) | Implicación para Zonix |
|-----------|---------------------|----------------------|
| Penetración internet | 61,6 % (17,6 M usuarios) | Más de la mitad de la población accede |
| Conexiones móviles | 79,1 % de la población | Acceso predominantemente móvil |
| Penetración smartphone | ~60,5 % | Suficiente para app en zona urbana |
| 4G | 92 % de líneas | Velocidad suficiente para app ligera |
| Redes sociales | 53,1 % de la población | Canal de marketing viable |
| Marcas dominantes | Xiaomi (24,5 %), Tecno, Samsung | Optimizar para Android gama media-baja |

**Implicación técnica:** la app Flutter debe funcionar bien en **Android gama media-baja** (2–3 GB RAM, pantallas 720p). iOS es secundario en la zona piloto.

---

## 7. Riesgos de mercado identificados

| Riesgo | Probabilidad | Impacto | Mitigación |
|--------|-------------|---------|------------|
| Comercios no ven valor suficiente para pagar | Alta | Crítico | Trial 30 días/20 pedidos + propuesta de valor cuantificada ([PROPUESTA_VALOR_COMERCIO.md](PROPUESTA_VALOR_COMERCIO.md)) |
| Baja demanda de compradores (sin pedidos, comercio no ve valor) | Alta | Crítico | Estrategia de generación de demanda en §7 del plan maestro |
| Yummy/PedidosYa bajan comisión en respuesta | Baja (no les interesa barrio) | Medio | Foco en nicho desatendido; costo fijo vs % |
| Brecha digital en segmento objetivo | Media | Medio | Onboarding asistido; soporte WhatsApp |
| Comercio informal no puede facturar (sin RIF) | Media | Medio | No bloquea uso de la app; membresía facturable cuando el comercio se formalice |

---

**Documentos relacionados:**
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) — modelo financiero por comercio
- [PROPUESTA_VALOR_COMERCIO.md](PROPUESTA_VALOR_COMERCIO.md) — pitch para el dueño del local
- [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) — plan maestro
- [PLAN_METODOS_PAGO_VENEZUELA.md](PLAN_METODOS_PAGO_VENEZUELA.md) — métodos de pago
