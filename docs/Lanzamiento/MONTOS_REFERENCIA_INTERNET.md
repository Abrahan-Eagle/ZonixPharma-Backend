# Montos de referencia validados con fuentes de internet

> **Última actualización:** 20 mayo 2026.
> Documento que lista las fuentes web públicas de cada cifra utilizada en el pack.
> Cada precio o métrica venezolana puede variar mensualmente por inflación (macro 2026: **desaceleración oficial BCV** vs. escenarios externos pesimistas 387-618%). **Reconfirmar trimestralmente.**

## 1. Mercado farmacéutico venezolano (TAM)

| Dato | Valor | Fuente |
|---|---|---|
| Tamaño mercado farmacéutico VE 2025 | **USD 1.638 millones / año** | **Cifar VE** (datos **IMS/IQVIA**) — [Cámara Industria Farmacéutica VE](https://cifar.com.ve/) |
| Unidades vendidas anual VE | **389 millones** | Cifar VE / IMS-IQVIA 2025 |
| Crecimiento en unidades 2024-2025 | **+17,49%** YoY | Cifar VE (IMS-IQVIA) 2025 |
| CAGR 2026-2032 | **6,1%** anual | [Statista Venezuela Pharmaceutical Market](https://www.statista.com/study/47924/pharmaceutical-market-in-latin-america/) |
| Genéricos Rx % del total | **48,3%** | Cifar 2025 |
| OTC % del total | **35,2%** | Cifar 2025 |

**Nota:** **Cifar** publica las series del mercado VE citando datos **IMS/IQVIA**. En agosto 2025 reportó **+20,66% YoY** ene-ago y proyección anual **+17,7%**; el **H1 2025** superó la proyección con **+23,4%** (prensa especializada). Para el data room del inversor se recomienda anexar comunicados Cifar originales al cierre.

## 2. Inflación y devaluación VE 2026

| Dato | Valor | Fuente |
|---|---|---|
| Inflación oficial 2025 (cierre) | ~190% | [BCV Venezuela](https://www.bcv.org.ve/) |
| **Inflación mensual observada 2026 (BCV, hasta abril)** | **ene +32,6% / feb +14,7% / mar +13,1% / abr +10,6%** | Comunicados BCV / prensa económica VE mayo 2026 |
| **Proyección oficial BCV mayo 2026** | **Inflación mensual de un dígito desde mayo 2026** | [Banca y Negocios — presidente BCV](https://www.bancaynegocios.com/presidente-e-bcv-podemos-esperar-que-a-partir-de-mayo-empecemos-a-tener-inflacion-de-un-digito-en-el-pais/), [El Nacional](https://www.elnacional.com/2026/05/bcv-proyecta-inflacion-de-un-digito-en-venezuela-a-partir-de-mayo/) |
| Lectura macro base (orden de magnitud) | Si la trayectoria oficial se mantiene, **acumulado anual 2026** puede ubicarse en **orden ~134-220%** (vs. escenarios externos pesimistas 387-618%). | Consolidación pack — contrastar trimestralmente con BCV |
| Inflación proyectada 2026 — escenario **pesimista** (Anova) | **387% - 618%** | [Anova Policy Research](https://anova-policy.org/) |
| Inflación proyectada 2026 — escenario **pesimista** (Cendas-FVM) | ~450% | [Cendas-FVM](https://www.cendasfvm.com/) |
| Inflación proyectada 2026 — escenario **pesimista** (Ecoanalítica) | 400-550% | Ecoanalítica reportes mensuales 2025-2026 |
| Devaluación bolívar 2025 (cierre) | ~73% | BCV vs. paralelo |

**Lectura:** el escenario **base conservador del pack** sigue siendo el buffer **20%** sobre costos en bolívares. Las cifras **387-618%** y similares se mantienen como **escenario pesimista / stress** (Anova, Cendas, Ecoanalítica), no como proyección única. La lectura oficial BCV mayo 2026 (**desaceleración a inflación mensual de un dígito**) **refuerza** el runway si se materializa; el buffer absorbe aún desviaciones y el escenario pesimista sigue cubierto en sensibilidades.

## 3. Salarios profesionales VE 2026 (sector privado, USD)

| Rol | Salario USD/mes referencia VE 2026 | Fuente |
|---|---|---|
| Sales B2B junior (con comisión) | USD 100-200 fijo + comisión | [Computrabajo VE](https://ve.computrabajo.com/) búsquedas 2025-2026 |
| Customer Support / community manager | USD 250-400 | [Indeed Venezuela](https://ve.indeed.com/) y [LinkedIn Salary Insights](https://www.linkedin.com/salary/) |
| Marketing Lead junior-mid | USD 400-700 | LinkedIn Salary VE 2025 |
| Coordinador de Partners Logísticos | USD 300-500 | Computrabajo VE 2025; en Zonix Pharma el rol es **enlace con partner** de última milla (**sin** flota propia) |
| Contador externo freelance (PYME) | USD 100-200/mes | [Tabla mínima Federación de Contadores VE](https://www.fccpv.org/) y promedio Computrabajo |
| Abogado externo freelance (PYME) | USD 150-300/mes | Federación VE de Abogados, tarifas referenciales 2025 |
| Asesor regulatorio farmacéutico | USD 100-200/mes | Estimado en base a consultorías especializadas LatAm |

**Cifras del pack están dentro del rango bajo-medio**, justificadas por: foco en talento joven con motivación de crecer con la empresa, modelo lean del piloto, salarios cobrados en USD (más atractivos que bolívares).

## 4. Hosting y SaaS

| Servicio | Plan recomendado | USD/mes | Fuente |
|---|---|---|---|
| **VPS Nameshared** (Laravel + MySQL; prod piloto) | Plan VPS según RAM/vCPU | USD 20-35 *(cotizar)* | Alineado [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §2.4 — sustituye DigitalOcean en pack vigente |
| Pusher Channels Startup | 200 conn / 100k msg/día | USD 49 | [Pusher Pricing](https://pusher.com/pricing) |
| Firebase Cloud Messaging | Spark (gratis) | USD 0 | [Firebase Pricing](https://firebase.google.com/pricing) |
| Firebase Phone Auth (SMS OTP registro paciente) | Blaze (pay-as-you-go); tarifa SMS por país | USD 15-40 *(~1.000 verif./mes piloto)* | [Firebase Auth pricing](https://firebase.google.com/pricing) — sustituye YCloud en pack vigente |
| Google Maps Platform | $200 free monthly credit | USD 0-15 | [Google Maps Pricing](https://mapsplatform.google.com/pricing/) |
| SendGrid Email Free | 100/día | USD 0 | [SendGrid Pricing](https://sendgrid.com/pricing/) |
| Notion Plus | 5 usuarios | USD 40-50 | [Notion Pricing](https://www.notion.so/pricing) |
| Slack Free | unlimited usuarios, retención 90 días | USD 0 | [Slack Pricing](https://slack.com/pricing) |
| GitHub Team | 5 usuarios | USD 20 | [GitHub Pricing](https://github.com/pricing) |
| Domain + email corp Google Workspace Business Starter | 6 USD/usuario | USD 12-30 | [Google Workspace Pricing](https://workspace.google.com/pricing) |

**Total hosting + SaaS Base:** ~USD 134/mes.

## 5. Inmueble en Carabobo (San Diego / Av. Bolívar Norte)

| Tipo | Tamaño | USD/mes | Fuente |
|---|---|---|---|
| Casa / local operativo (HQ) | 2-4 ambientes | **500** (cerrado en pack) | [Tu Inmueble](https://www.tuinmueble.com.ve/) y [InmovaliaVE](https://www.inmovalia.com/) listings 2025-2026 |
| Oficina comercial 25-50m² (referencia mercado) | 1-2 ambientes | USD 200-550 | Mismo — solo benchmark de cotización |

**Cierre numérico vigente (mayo 2026):** [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2–§4: **Lean / Base / Growth** usan **HQ casa USD 500/mes**.

## 6. Servicios públicos VE 2026

| Servicio | Plan / consumo | USD/mes |
|---|---|---|
| Internet fibra óptica oficina (Inter, NetUno o Movistar) | 50-100 Mbps simétrico empresa | USD 30-45 |
| Internet hogar (referencia) | 30 Mbps | USD 15-20 |
| Electricidad oficina pequeña | 200-300 kWh/mes a tarifa industrial pequeña | USD 20-35 |
| Agua + aseo | Tarifa básica + 4 funcionarios | USD 8-12 |
| Telefonía móvil corp (3 líneas con datos) | Plan empresarial Movistar / Digitel | USD 25-40 |
| Limpieza HQ (1 vez/semana) | Profesional independiente | USD 30-50 |
| Caja chica (agua, café, papel, etc.) | 4 personas | USD 40-60 |

**Fuentes:** [Inter VE Empresas](https://www.inter.com.ve/), [Movistar Empresas VE](https://www.movistar.com.ve/empresas), [NetUno Empresas](https://www.netuno.com.ve/empresas), [Corpoelec](https://www.corpoelec.gob.ve/) tarifario 2025, [Hidrocentro](https://www.hidrocentro.gob.ve/) tarifario 2025.

## 7. Marketing digital (Meta + Google)

| Métrica | Valor VE 2025-2026 | Fuente |
|---|---|---|
| CPM Meta Ads VE | USD 0,80-2,50 | [Meta Business Insights LatAm 2025](https://www.facebook.com/business/) |
| CPC Meta Ads VE | USD 0,03-0,12 | Meta Business VE benchmarks |
| **CPL Meta Ads VE (B2C farmacéutico)** | **USD 0,15-0,60** | Estimación basada en [Hootsuite LatAm Digital Report 2025](https://www.hootsuite.com/research) y casos prácticos LatAm |
| CPL Google Ads VE (search) | USD 0,30-0,90 | [Google Ads VE benchmarks 2025](https://ads.google.com/) |
| CPL TikTok Ads VE | USD 0,20-0,80 | [TikTok For Business](https://www.tiktok.com/business/) regional 2025-2026 |
| Firebase Phone Auth SMS (verificación teléfono) | Variable por país / MNO | [Firebase Auth pricing](https://firebase.google.com/pricing) |

**Presupuesto Marketing digital (Meta Ads — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §2–§4):**
- **Lean:** **800/mes** M1–6 · **500/mes** M7–12 (prom. **~650/mes**) → ~1.100-4.300 leads/mes.
- **Base / Growth:** **800/mes** todo el año → ~1.330-5.300 leads/mes.

## 8. Marketing offline VE 2026

| Tipo | Tamaño / duración | USD/mes |
|---|---|---|
| Valla pequeña 3m×2m, av. secundaria | Pieza estática estándar | USD 250-450 |
| Valla pequeña 3m×2m, av. principal (Bolívar Norte / Cedeño) | Pieza estática estándar | USD 350-500 |
| Valla mediana 6m×4m, av. principal | Pieza estática estándar | USD 600-900 |
| Valla LED grande 6m×4m, av. principal | Loop 8s cada 60s | USD 1.200-2.500 |
| Radio FM mención 30s, horario AM | Mes con 4 menciones/día | USD 200-400 |
| Flyers 10.000 unidades A6 | Diseño + impresión + distribución | USD 80-150 |
| Brochures 1.000 unidades, papel couché 2 caras | Diseño + impresión | USD 70-120 |

**Fuentes:** [PubliExterior VE](https://www.publiexterior.com/), [Imagen Publicidad Exterior](https://www.imagenpublicidad.com/), [DAR Publicidad](https://www.darpublicidad.com.ve/) tarifarios 2025, búsquedas locales en Tu Inmueble por "valla publicitaria Carabobo".

**Decisión del pack:**
- **Lean:** **USD 350/mes** valla pequeña 3m×2m desde M3+.
- **Base / Growth:** **USD 700/mes** valla mediana 6m×4m desde M2+.

Detalle en [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md).

## 9. Costos legales y constitución VE

| Concepto | Costo USD | Fuente |
|---|---|---|
| Constitución C.A. (Compañía Anónima) | USD 600-1.000 | [Registro Mercantil Carabobo](https://www.registromercantilve.gob.ve/) tarifas 2025 + asesoría profesional |
| RIF empresa | USD 0 (gratis) - USD 50 con asesoría | SENIAT directo |
| Registro de marca SAPI (Zonix Pharma) | USD 250-400 | [SAPI](https://www.sapi.gob.ve/) tarifas 2025 |
| Apertura cuenta bancaria empresa | USD 50-150 | Variable según banco |
| Sello digital + factura digital SENIAT habilitada | USD 100-200 anuales | Proveedor autorizado SENIAT |
| Permiso sanitario MPPS (eventual, si Zonix opera bodega) | USD 200-500 | MPPS tarifario |

**Total one-shot legal:** USD 950-1.300. **Pack usa USD 1.150 promedio.**

## 10. Benchmarks competitivos (Farmalisto, Rappi)

### 10.1 Farmalisto

| Dato | Valor | Fuente |
|---|---|---|
| Revenue 2024 (México, e-commerce) | **~USD 32,3 millones** | [eCommerceDB / informes sector](https://ecommercedb.com/store/farmalisto.com.mx), alineado con Crunchbase ~USD 32M |
| VC raised total (estimado) | **~USD 22M** reportado en agregadores (Tracxn, LeadIQ, EquityZen 2025-2026); **hasta ~USD 33M** en algunas bases (ej. PitchBook, 5 rondas) | [Tracxn](https://tracxn.com/d/companies/farmalisto/), [PitchBook](https://pitchbook.com/profiles/company/210015-91) |
| País origen | México (**operación MX + CO + PE**) | Crunchbase / sitio corporativo |
| Año fundación | 2012 | Crunchbase |
| Modelo | Marketplace farmacéutico con **logística propia del actor** (benchmark Farmalisto, no Zonix) | Web Farmalisto |
| Comisión sobre ventas (estimada) | 12-18% | Industry estimates |

### 10.2 Rappi (vertical Pharmacy)

| Dato | Valor | Fuente |
|---|---|---|
| Comisión Pharmacy LatAm | **25-35% del GMV** | [Rappi for Restaurants & Brands](https://about.rappi.com/es) |
| Países opera | 10+ (incluye Venezuela) | About Rappi |
| Total VC raised | USD 2.7B+ | Crunchbase Rappi |
| Foco VE | Cadenas premium (Farmatodo, Locatel) | Public listing |

### 10.3 PedidosYa (Delivery Hero)

| Dato | Valor | Fuente |
|---|---|---|
| Comisión Pharmacy | **20-30% del GMV** | Public reports Delivery Hero |
| Operación VE | Activa desde 2023 | Web pedidosya.com |

## 11. Churn benchmarks SaaS B2B SMB LatAm

| Métrica | Valor | Fuente |
|---|---|---|
| Churn mensual mediana SaaS B2B SMB LatAm | **5%** (rango 3-7%) | [ChartMogul SaaS Benchmarks 2025](https://chartmogul.com/blog/saas-benchmarks/) |
| Churn anual equivalente | 45-60% | Mismo |
| Lifetime promedio | 14-33 meses | Derivado de churn |
| Top quartile churn (mejor 25%) | < 3% mensual | ChartMogul |
| Bottom quartile churn (peor 25%) | > 8% mensual | ChartMogul |

**Decisión del pack:** churn 5% mensual = lifetime 20 meses. Conservador y dentro del rango mediano.

## 11A. Herramientas IA — Cursor, Claude, Seedance 2.0 (precios públicos USD)

Referencias para el stack acordado en [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) §6.1. **No** se modelan Gemini, Runway ni Midjourney en ese stack.

| Herramienta | Plan / referencia | USD/mes | Fuente |
|-------------|-------------------|---------|--------|
| **Cursor** | Ultra | **200** | [Cursor Pricing](https://cursor.com/pricing) |
| **Claude** (Anthropic) | Max 20× (uso alto) | **200** | [Anthropic Claude pricing](https://www.anthropic.com/pricing) — verificar tier exacto en checkout |
| **Seedance 2.0** | Suscripción (tier variable) | **~15–50** *(confirmar en el sitio donde se contrate)* | Buscar pricing oficial del proveedor elegido; hay varios dominios comerciales — **cotizar antes de fijar en proyección** |

**Total suscripciones IA (ancla conservadora Seedance ~25):** **~425 USD/mes** (200 + 200 + 25).

## 12. Directorio de farmacias en Valencia

| Fuente | Farmacias contadas |
|---|---|
| [Saas Venezuela](https://www.saasvenezuela.com/sucursales) | ~40 sucursales en Carabobo |
| [Farmatodo VE](https://www.farmatodo.com.ve/sucursales) | ~30 sucursales en Carabobo |
| [Locatel VE](https://www.locatel.com.ve/) | ~15 sucursales en Carabobo |
| [Farmahorro VE](https://www.farmahorro.com.ve/) | ~10 sucursales en Carabobo |
| [Drogueria Nena](https://drogueria-nena.business.site/) | ~5 sucursales en Carabobo |
| Farmacias independientes (estimado por Google Maps + visitas presenciales) | 130-150 |
| **Total Valencia metro** | **~226 farmacias** |
| **Total Carabobo (incluye Puerto Cabello, Tocuyito, Mariara, Guacara)** | **~350-450 farmacias** |

## 13. Notas finales para el inversor

1. **Reconfirmación trimestral:** todas las cifras VE (salarios, servicios, inmuebles, marketing offline) deben reconfirmarse cada 3 meses por la inflación.
2. **Cotizaciones formales:** las pendientes (oficina, valla, abogado, contador) están en la lista de [pendientes en README](README.md).
3. **Información sensible:** este documento NO contiene información confidencial; las URLs son públicas. Para data room formal con inversor institucional se requiere NDA + información adicional propietaria (cap table, contratos, métricas internas).
4. **Validación del modelo:** las cifras de TAM, churn y benchmark Farmalisto pueden cruzarse con los reportes oficiales en cualquier momento.

## 14. Documentos hermanos

- [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md): cómo se usan estas cifras para sizing.
- [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md): cómo se aplican a costos del piloto.
- [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md): cómo se aplican a CAC, LTV.
- [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md): justificación valla y radio.
