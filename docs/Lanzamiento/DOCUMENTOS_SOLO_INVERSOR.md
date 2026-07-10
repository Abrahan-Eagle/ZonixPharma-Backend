# Documentos solo para el inversor — Zonix Pharma

> **Última actualización:** 8 julio 2026  
> **Propósito:** inventario canónico del **data room inversor** (pre-seed). No incluye pack aliado Gabriel ni plantillas internas de equipo.  
> **Fuente operativa:** [README.md](README.md) · **Verificación:** `python3 _tools/verify_inversor_pack.py` · **Zip:** `python3 _tools/build_zip_inversor.py`

---

## A. Zip mínimo — primera reunión (~30 min)

Envío inicial al inversor (orden de lectura recomendado):

| # | Documento | Archivo |
|---|-----------|---------|
| 1 | Brief de una página | [BRIEF_UNA_PAGINA.md](BRIEF_UNA_PAGINA.md) |
| 2 | Contexto pitch y decisiones | [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md) |
| 3 | Perfil mercado piloto (TAM/SAM/SOM) | [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md) |
| 4 | Unit economics | [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md) |
| 5 | Proyección 12M (**solo §1.1** Lean M1–M12) | [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md) |
| 6 | Modelo financiero Excel | [MODELO_FINANCIERO_ZONIX_PHARMA.xlsx](MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) |
| 7 | Estructura legal y equity (SAFE) | [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md) |
| 8 | Checklist pre-inversor (guion + FAQ) | [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) |

**Opcional en el mismo envío:**

| Documento | Archivo |
|-----------|---------|
| Email / bullets listos (§2) | [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) |
| Guía del modelo (si no abren Excel) | [MODELO_FINANCIERO_ZONIX_PHARMA.md](MODELO_FINANCIERO_ZONIX_PHARMA.md) |
| Índice con cifras ancla | [README.md](README.md) |

---

## B. Data room extendido — due diligence

Documentos inversor adicionales en `docs/Lanzamiento/` (no van en el zip de 30 min; sí en data room completo):

| # | Documento | Archivo |
|---|-----------|---------|
| 9 | Plan lanzamiento comercial (Fase 0 → Day-D) | [PLAN_LANZAMIENTO_COMERCIAL.md](PLAN_LANZAMIENTO_COMERCIAL.md) |
| 10 | Propuesta valor farmacia B2B | [PROPUESTA_VALOR_CLIENTE_B2B.md](PROPUESTA_VALOR_CLIENTE_B2B.md) |
| 11 | Propuesta valor paciente B2C | [PROPUESTA_VALOR_USUARIO_FINAL.md](PROPUESTA_VALOR_USUARIO_FINAL.md) |
| 12 | Propuesta valor delivery + farmacéutico | [PROPUESTA_VALOR_TERCER_LADO.md](PROPUESTA_VALOR_TERCER_LADO.md) |
| 13 | Presupuesto 12M (tiers Lean / Base / Growth) | [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) |
| 14 | Supuestos marketing offline | [SUPUESTO_MARKETING_OFFLINE.md](SUPUESTO_MARKETING_OFFLINE.md) |
| 15 | Plan métodos de pago VE | [PLAN_METODOS_PAGO.md](PLAN_METODOS_PAGO.md) |
| 16 | Plan módulo operativo (Rx, seguridad, QA) | [PLAN_MODULO_OPERATIVO_CLAVE.md](PLAN_MODULO_OPERATIVO_CLAVE.md) |
| 17 | Censo farmacias Carabobo Fase 0 | [CENSO_FARMACIAS_CARABOBO_FASE0.md](CENSO_FARMACIAS_CARABOBO_FASE0.md) |
| 18 | Montos referencia internet (fuentes precios) | [MONTOS_REFERENCIA_INTERNET.md](MONTOS_REFERENCIA_INTERNET.md) |

### Due diligence técnica (opcional)

| Documento | Archivo |
|-----------|---------|
| Alineación pack ↔ producto en código | [ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md](ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md) |
| Smoke manual Rx/OTC | [../SMOKE_RX_E2E.md](../SMOKE_RX_E2E.md) |
| Análisis técnico completo | [../ANALISIS_TECNICO_COMPLETO_2026-05.md](../ANALISIS_TECNICO_COMPLETO_2026-05.md) |

### Referencias regulatorias / producto (fuera de Lanzamiento)

Citadas en [README.md](README.md) § documentos pre-existentes:

- [../PLAN_REGULATORIO_PHARMA_VE.md](../PLAN_REGULATORIO_PHARMA_VE.md)
- [../PLAN_RX_VALIDATION.md](../PLAN_RX_VALIDATION.md)
- [../BRAND_ZONIX_PHARMA.md](../BRAND_ZONIX_PHARMA.md)

---

## C. NO incluir en pack inversor (por defecto)

| Qué excluir | Motivo |
|-------------|--------|
| [RESUMEN_ALIADO_GABRIEL_BARRIOS.md](RESUMEN_ALIADO_GABRIEL_BARRIOS.md) | Informe aliado Gabriel / Grupo Morr — no solicitud de inversión |
| Carpeta [../Pack_Aliado_Gabriel_Barrios/](../Pack_Aliado_Gabriel_Barrios/) | Pack humanizado para aliado comercial (18 Word), no data room inversor |
| [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md) | Plantilla interna equipo |
| [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) | Tracker P0–P4 interno |
| [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) | Captura founder (usar datos volcados en BRIEF/CHECKLIST) |
| [GUIA_DISCOVERY_CALLE_FASE0.md](GUIA_DISCOVERY_CALLE_FASE0.md) | Guía mom-test calle |
| [BANCO_PROBLEMAS_NECESIDADES_FARMACIA.md](BANCO_PROBLEMAS_NECESIDADES_FARMACIA.md) | Hipótesis discovery interno |
| [MODELO_FINANCIERO_LAYOUT_PIZZA_QLQ_ESPECIFICACION.md](MODELO_FINANCIERO_LAYOUT_PIZZA_QLQ_ESPECIFICACION.md) | Spec técnica generador Excel (FP&A interno) |
| `docs/agents/*`, auditorías Jarvis, `docs/plantillas/PROMPT_*` | Documentación de proceso IA |

---

## Resumen de conteo

| Capa | Archivos |
|------|----------|
| Zip mínimo (core) | 8 `.md` + 1 `.xlsx` |
| Opcionales primer envío | hasta 3 `.md` |
| Data room extendido (Lanzamiento) | +10 `.md` |
| DD técnica + regulatorio | hasta 6 `.md` (fuera de Lanzamiento) |

---

## Exportar zip (founder)

Desde la raíz del repo Backend:

```bash
cd docs/Lanzamiento
python3 _tools/verify_inversor_pack.py          # verificar que existen los archivos
python3 _tools/build_zip_inversor.py              # zip_minimo (~30 min)
python3 _tools/build_zip_inversor.py --tier full  # data room extendido
```

Antes de enviar: cerrar P0 en [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) (aprobación founder P0-04) y marcar en [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md).
