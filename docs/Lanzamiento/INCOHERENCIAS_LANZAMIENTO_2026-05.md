# Registro de incoherencias — pack Lanzamiento (doc ↔ doc)

> **Fecha:** 1 junio 2026 (I-17–I-28 corregidos; I-11–I-16 mayo 2026).  
> **Alcance:** solo archivos en `docs/Lanzamiento/` — **sin** cambios de código.  
> **Cruces:** [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) (pack vs producto), [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) (datos humanos), [ANALISIS_FORENSE.md](ANALISIS_FORENSE.md) (auditoría inversor).

---

## 1. Tabla maestra

| ID | Sev. | Archivos | Problema | Corrección | Estado |
|----|------|----------|----------|------------|--------|
| **I-01** | P0 | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §1 | Wire **USD 101.000 (Base)** | Debe ser **(Lean)**; Base = **118k** | **Corregido** |
| **I-02** | P0 | [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §1 | “lotes FIFO … **ya parcialmente implementado**” | Esquema BD + docs Rx; **UI/despacho FIFO post-Day-D o M3+** | **Corregido** |
| **I-03** | P0 | [README.md](README.md) §3, [CONTEXTO](CONTEXTO_PITCH_Y_DECISIONES.md) §2.2 | “**piloto completo desde día 1**” sin matiz | **Flujos core** (OTC, Rx, pago VE, partner delivery); excluye lotes FIFO masivos y release tiendas hasta Fase 0 | **Corregido** |
| **I-04** | P1 | [PLAN_LANZAMIENTO](PLAN_LANZAMIENTO_COMERCIAL.md) §3.2 vs README / [PROPUESTA_TERCER_LADO](PROPUESTA_VALOR_TERCER_LADO.md) | Fila “**5–8 repartidores autónomos** (`delivery`)” | **Fuera de alcance piloto MVP**; solo `delivery_company` + **5–15** `delivery_agent` bajo partner | **Corregido** |
| **I-05** | P1 | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) | “**MVP en producción interna**” sin matiz release | **Staging/VPS + tests**; Play/App Store + Firebase OTP = T+7–12 Fase 0 | **Corregido** |
| **I-06** | P1 | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) § timing | “**30–45 días**” vs **Fase 0 = 90 días** | 30–45 d = fork Pharma **ya hecho**; T+90 = legal + equipo + onboarding pre-Day-D | **Corregido** |
| **I-07** | P2 | [BRIEF](BRIEF_UNA_PAGINA.md), [MENSAJE_ENVIO](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) §7 | ARPF **~50** sin recordatorio híbrido en capa inversor corta | Línea explícita: placeholder hasta GMV piloto (cuota 25/40/55 + % GMV) | **Corregido** |
| **I-08** | P2 | [PLAN_LANZAMIENTO](PLAN_LANZAMIENTO_COMERCIAL.md) §5, [PROYECCION](PROYECCION_FINANCIERA_12M.md) §1.3 | DoD cash **≥ ~46.400** vs tabla **46.395** | Unificar a **≥ ~46.395** (fuente PROYECCION §1.3) | **Corregido** |
| **I-09** | P2 | Varios | Cabecera **20 mayo** vs pack **26 mayo** | Actualizar `Última actualización` en docs tocados | **Corregido** |
| **I-10** | — | [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) | Fechas tests / datos equipo vacíos | **No rellenar desde IA** — ver REGISTRO P0–P4 | **Abierto** (humano) |
| **I-11** | P2 | [BRIEF](BRIEF_UNA_PAGINA.md) § timing, [MENSAJE_ENVIO](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md), [CHECKLIST](CHECKLIST_PRE_INVERSOR.md) FAQ | Narrativa «**first-mover**» / categoría nueva | **Early mover** en independientes Valencia; mercado **existente** (`zonix-startup-context` Market Type) | **Corregido** |
| **I-12** | P2 | [BRIEF](BRIEF_UNA_PAGINA.md) § Modelo financiero | **Dos tablas** capital/burn redundantes (resumen + detalle) | Etiquetas «Resumen por tier» + «Detalle escenario Lean» | **Corregido** |
| **I-13** | P2 | [PROYECCION](PROYECCION_FINANCIERA_12M.md), [PERFIL_MERCADO](PERFIL_MERCADO_PILOTO.md), [PLAN_MODULO](PLAN_MODULO_OPERATIVO_CLAVE.md) cabecera | `Última actualización: 20 mayo` residual | **27 mayo 2026** (barrido I-09) | **Corregido** |
| **I-14** | P1 | [ALINEACION](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) §1.3, §4.1 | Texto obsoleto PLAN §3.2 `delivery` autónomo | Alineado a I-04: solo partner + agentes | **Corregido** |
| **I-15** | P1 | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) cabecera | «**parcialmente implementado**» sin matiz (mismo patrón I-02) | Rx backend/tests OK; FIFO lotes UI post-Day-D | **Corregido** |
| **I-16** | P1 | [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) §3.3–3.4, [ALINEACION](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) §4.1, [ANALISIS_FORENSE](ANALISIS_FORENSE.md) SF-03 | Claims Ley sin PENDIENTE; §4.1 desactualizado; SF-03 abierto | Dictamen en B2B; refresh §4.1; SF-03 mitigado en BRIEF/MENSAJE | **Corregido** |
| **I-17** | P0 | [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) §3, §8 | M9=78, M12=120 vs PROYECCION M9=130, M12=159 | Alineado a §1.1 | **Corregido** (jun 2026) |
| **I-18** | P0 | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §6.1, §9 | M9=78; T+180 vs DoD M6 | M9=130; §9 = M6 post-Day-D | **Corregido** |
| **I-19** | P0 | PROYECCION §2.2–2.3, PRESUPUESTO §3.3 | Año 2 EBITDA/cash incoherentes; tramos Base no suman | Recalculado; tramo B ~8.100 | **Corregido** |
| **I-20** | P0 | PLAN_MODULO, PLAN_METODOS §10, VOLCADO §7 | TTL 60/120; Sudeban rubro B; repartidores directos | Unificado TTL; tabla B; partner model | **Corregido** |
| **I-21** | P1 | UNIT §6, CHECKLIST §7.3, CUESTIONARIO §8 | Burn "Base"=Lean; asesor solo Growth | Etiquetas Lean/Base; Base+Growth asesor | **Corregido** |
| **I-22** | P1 | B2B §9, USUARIO §7.3, PLAN Day-D | Marketing B2C vs Day-D; garantía órdenes | Calendario unificado; sin garantía contractual | **Corregido** |
| **I-23** | P1 | PERFIL §5.6, MENSAJE, B2B, TERCER_LADO, PLAN_MODULO §14 | Claims Rx/legal sin PENDIENTE | Marcadores añadidos | **Corregido** |
| **I-24** | P1 | USUARIO §7.2, CHECKLIST §7.6, ESTRUCTURA §8 | Valla Base; FAQ 175; Day-D mes 3 | Mediana 700; ~159 M12; M1 financiero | **Corregido** |
| **I-25** | P2 | README, _auditorias/ | 29 archivos; meta-proceso en data room | 32 total; 7 archivados | **Corregido** |
| **I-26** | P1 | [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §2.10 | Sin sección liquidez chicken-and-egg | §2.10 oferta primero + tabla fases | **Corregido** (jun 2026) |
| **I-27** | P1 | [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) §2.11, [BRIEF](BRIEF_UNA_PAGINA.md) | Moat solo «early mover» | §2.11 moat + resumen BRIEF | **Corregido** |
| **I-28** | P1 | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) §4.0, [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) §2.1 | Sin mom-test pricing pre-Day-D | Fila 5 §4.0 + guía WTP | **Corregido** (jun 2026) |

> **Ronda forense 360 (1 jun 2026):** [AUDITORIA_FORENSE_360_2026-06.md](AUDITORIA_FORENSE_360_2026-06.md).

---

## 2. Coherente — no cambiar (verificado mayo 2026)

| Tema | Documentos alineados | Nota |
|------|---------------------|------|
| Tiers capital | README, PRESUPUESTO, PROYECCION, BRIEF, ESTRUCTURA_LEGAL, MENSAJE | **101k < 118k < 135k**; caps **600k / 650k / 720k** |
| Fase 0 → Day-D → M1 | PLAN_LANZAMIENTO, PROYECCION §0, README | **T+90 = Day-D = inicio M1**; Fase 0 **~28.057**; caja M1 **~72.943** |
| Equilibrio M11 | PROYECCION §1.1, BRIEF, PERFIL_MERCADO, UNIT_ECONOMICS | **~151 activas**; revenue **7.550** vs burn **7.431** |
| Cierre M12 | PROYECCION §1.3, BRIEF, README | Cash **~42.209** (sin waiver) |
| Curva M7–M9 | PROYECCION §1.1, BRIEF hitos | **108 / 119 / 130** activas; revenue **5.400–6.500** |
| DoD M6 farmacias | PLAN §5, PROYECCION §1.1 M6 | **≥ 97 activas** = fila M6 del modelo |
| Sin `delivery` autónomo (narrativa) | README §3, PROPUESTA_TERCER_LADO cabecera, CONTEXTO §2.2 | Tras I-04, PLAN §3.2 alineado |
| Pagos VE manuales | PLAN_METODOS_PAGO, PROPUESTA_*, README | Coherente en pack |
| PROYECCION solo Lean M1–M12 | README nota, CHECKLIST FAQ | Base/Growth = delta PRESUPUESTO — **por diseño** |

---

## 3. Checklist de verificación post-edición

Ejecutar desde `docs/Lanzamiento/`:

```bash
rg '101\.?000.*Base|Base.*101' .
rg 'parcialmente implementado' .
rg 'delivery autónom|5-8 repartidores autónomos' .
rg 'completo desde día 1' .
```

**Esperado:** sin coincidencias problemáticas en I-01–I-04; “completo” solo con matiz “flujos core”.

---

## 4. Mantenimiento

| Acción | Cuándo |
|--------|--------|
| Re-auditar **un** doc editado | Tras cambio en BRIEF, CONTEXTO, PLAN, PROYECCION, VOLCADO |
| Nueva fila I-xx | Si aparece contradicción doc ↔ doc |
| Cerrar I-10 | Cuando el founder actualice VOLCADO / REGISTRO |
| No duplicar | Hallazgos producto → [ALINEACION](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) §4 |

---

*Generado en implementación del plan “Auditoría de incoherencias en docs/Lanzamiento”. Última pasada de corrección: 26 mayo 2026.*
