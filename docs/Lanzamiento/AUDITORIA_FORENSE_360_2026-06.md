# Auditoría forense 360° — Pack Lanzamiento Zonix Pharma

> **Fecha:** 1 junio 2026.  
> **Alcance:** 31 archivos `.md` en `docs/Lanzamiento/`.  
> **Método:** Panel Jarvis (`zonix-startup-context`, `zonix-financial-model`, `zonix-fundraising-narrative`, `zonix-investor-materials`, `zonix-b2b-sales`, `zonix-regulatory-ve`, `zonix-launch-piloto`) + **lente de prudencia** (integridad, exactitud, riesgos explícitos — sin versículos en docs inversor).  
> **Baseline:** [INCOHERENCIAS_LANZAMIENTO_2026-05.md](INCOHERENCIAS_LANZAMIENTO_2026-05.md) I-01–I-16 (no contradecir).  
> **Estado post-ejecución:** filas **I-17–I-28** registradas en INCOHERENCIAS; correcciones aplicadas en esta sesión.

---

## 1. Resumen ejecutivo

| Área | Semáforo | Acción |
|------|----------|--------|
| **Núcleo Lean (101k, Fase 0, M11, M12)** | Verde | Sin cambio — PROYECCION §1.1 fuente de verdad |
| **Curva farmacias / SOM** | Rojo → **Corregido** | PERFIL §3/§8 y PLAN §6 alineados a §1.1 |
| **Año 2 PROYECCION** | Rojo → **Corregido** | EBITDA y cash trimestral recalculados |
| **PRESUPUESTO Base tramos** | Rojo → **Corregido** | Suma tramos = 96.702 |
| **Operativo Rx / pagos** | Amarillo → **Corregido** | TTL unificado; Sudeban rubro B; VOLCADO §7 partner |
| **Claims legales/Rx** | Amarillo → **Mitigado** | Marcadores `[PENDIENTE abogado/asesor]` añadidos |
| **Ruido meta-proceso** | Amarillo → **Recortado** | 7 auditorías movidas a `_auditorias/`; README data room |

**Bloqueante humano (sin IA):** P0 founder en [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) — GitHub, % dedicación, referencias, demo.

---

## 2. Tabla maestra de hallazgos (priorizada)

### P0 — Rompen coherencia / due diligence

| ID | Archivo(s) | Problema | Corrección | Estado |
|----|------------|----------|------------|--------|
| **F-01** | PERFIL §3, §8 | M9=78, M12=120 vs PROYECCION M9=130, M11=151, M12=159 | Tabla SOM y §8 alineados a §1.1 | **Corregido** |
| **F-02** | PLAN §6.1, §9 | M9=78; cierre piloto T+180 vs DoD M6 | M9=130; §9 = M6 post-Day-D | **Corregido** |
| **F-03** | USUARIO_FINAL §9, PLAN Day-D, B2B §9 | Marketing B2C M1-3 vs Day-D Meta+valla; garantía órdenes | Calendario unificado; promesa comercial suavizada | **Corregido** |
| **F-04** | PROYECCION §2.2–2.3 | EBITDA +20-30k y cash Q1 positivo no derivan de revenue−burn | Tabla y EBITDA recalculados | **Corregido** |
| **F-05** | PRESUPUESTO §3.3 | Tramos Base suman 98.818 ≠ 96.702 | Tramo B **~8.100**/mes | **Corregido** |
| **F-06** | PLAN_MODULO §5–6 | TTL 60 vs 120; reembolso pre-pago en diagrama | TTL configurable; flujo Rx sin pago previo | **Corregido** |
| **F-07** | PLAN_METODOS §10 | Tabla Sudeban omitía rubro B → delivery_company | Fila (B) explícita | **Corregido** |
| **F-08** | VOLCADO §7 | Repartidores directos vs partner | Modelo `delivery_company` + agentes | **Corregido** |

### P1 — Riesgo narrativo / legal / etiqueta

| ID | Archivo(s) | Problema | Corrección | Estado |
|----|------------|----------|------------|--------|
| **F-09** | UNIT §6 | Burn "Base" = 7.559 (es Lean) | Etiqueta Lean; Base 8.059 | **Corregido** |
| **F-10** | UNIT §3, PROYECCION §1.2 | CAC 8 firmas/mes vs ~175/año (~15/mes) | Nota FP&A: CAC sobre ritmo piloto; §1.1 fuente activas | **Corregido** |
| **F-11** | PERFIL §9, CHECKLIST §7.3, CUESTIONARIO §8 | Asesor "solo Growth" | Base 118k + Growth 135k | **Corregido** |
| **F-12** | PERFIL §5.6, MENSAJE, B2B, TERCER_LADO, PLAN_MODULO §14 | Claims Rx/legal sin PENDIENTE | Marcadores añadidos | **Corregido** |
| **F-13** | USUARIO_FINAL §9 | Valla Base 350 (pequeña) vs SUPUESTO 700 mediana | Base = mediana 700 | **Corregido** |
| **F-14** | ESTRUCTURA §8 cronograma | "Day-D mes 3" vs M1 financiero | Day-D = T+90 = inicio M1 | **Corregido** |
| **F-15** | CHECKLIST §7.6 | "175 del plan" | ~159 M12 (PROYECCION §1.1) | **Corregido** |
| **F-16** | BRIEF, README equity | 18,15/18,75 vs ~18,2/18,8 redondeo | Nota de redondeo en README | **Corregido** |

### P2 — Exceso / meta-proceso (recorte)

| ID | Acción | Estado |
|----|--------|--------|
| **F-17** | Mover 7 meta-docs a `_auditorias/` | **Hecho** |
| **F-18** | README: conteo 31, sección data room vs interno | **Hecho** |
| **F-19** | ANALISIS_FORENSE: condensar §13 + puntero a este doc | **Hecho** |
| **F-20** | ONE_PAGER en PLAN_MODULO y PLAN_METODOS (cabecera) | **Hecho** |
| **F-21** | CUESTIONARIO marcado "solo equipo interno" | **Hecho** |

---

## 3. Lente de prudencia (integridad — no religioso en pack)

| Principio | Aplicación en esta auditoría |
|-----------|------------------------------|
| Pesas justas | Corregir aritmética año 2 y tramos Base; no inflar EBITDA |
| Calcula el costo | Fase 0 ~28.057 y caja M12 ~42.209 intactos |
| Multitud de consejeros | Claims MPPS/Rx/Sudeban con `[PENDIENTE abogado/asesor]` |
| El prudente ve el peligro | Año 2 con cash trimestral honesto (Q1–Q2 puede ser negativo) |
| Buen nombre | Curva farmacias única en todo el pack |

---

## 4. Plan de recorte — data room inversor

### Mantener (~20 archivos)

BRIEF, CONTEXTO, PERFIL, UNIT, PROYECCION, PRESUPUESTO, ESTRUCTURA_LEGAL, MENSAJE, CHECKLIST, PROPUESTA ×3, PLAN_LANZAMIENTO, PLAN_MODULO, PLAN_METODOS, MONTOS, SUPUESTO, README (slim), VOLCADO §1 (founder), ALINEACION §7 (opcional DD).

### Archivar en `_auditorias/` (no enviar al inversor)

`AUDITORIA_PROMPT_B/D/E/F`, `MEJORAS_PROMPT_C`, `PROMPT_PACK_LANZAMIENTO`, `AUDITORIA_MODELO_NEGOCIO_VS_BIBLIA`.

### Solo equipo interno

`CUESTIONARIO_EQUIPO_PILOTO.md`, `REGISTRO_PENDIENTES_PACK.md`, `INCOHERENCIAS_*`, este doc (opcional para DD profundo).

---

## 5. Verificación post-corrección

```bash
cd docs/Lanzamiento
rg '78 farmacias|M12 \| 120 \|' PERFIL_MERCADO_PILOTO.md
rg 'T\+180' PLAN_LANZAMIENTO_COMERCIAL.md
rg 'Burn promedio mensual \(Base.*7\.559' UNIT_ECONOMICS.md
rg 'Growth solamente' CUESTIONARIO_EQUIPO_PILOTO.md PERFIL_MERCADO_PILOTO.md
```

**Esperado:** sin coincidencias problemáticas.

---

## 6. Próximos pasos (founder)

1. Cerrar P0 humanos en VOLCADO §1 (GitHub, % dedicación, referencias).  
2. Dictamen abogado + farmacéutico (P3 en REGISTRO).  
3. mom-test pricing (≥3 entrevistas cuota 25/40/55) — PLAN §4.0.  
4. Secciones marketplace G1–G7 (liquidez, moat, canvas) — Prompt C cuando haya OK.

---

*Consolida y reemplaza funcionalmente las rondas B/D/E/F + MODELO_NEGOCIO para nuevas sesiones. Historial: [_auditorias/](_auditorias/).*
