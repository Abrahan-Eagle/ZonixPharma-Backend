# Guía — Data room zip para especialistas / inversor

> **Última actualización:** 1 junio 2026.  
> Complementa [README.md](README.md) § inversor y [CARTA_CONTEXTO_ESPECIALISTAS.md](CARTA_CONTEXTO_ESPECIALISTAS.md).

---

## 1. Archivos a incluir (raíz `docs/Lanzamiento/`)

**Incluir siempre al inicio del zip:**

1. [CARTA_CONTEXTO_ESPECIALISTAS.md](CARTA_CONTEXTO_ESPECIALISTAS.md) — **leer primero**
2. [README.md](README.md) — índice y cifras ancla

**Incluir — contenido inversor / especialistas (~20 archivos):**

| Archivo |
|---------|
| BRIEF_UNA_PAGINA.md |
| CONTEXTO_PITCH_Y_DECISIONES.md |
| PERFIL_MERCADO_PILOTO.md |
| UNIT_ECONOMICS.md |
| PROYECCION_FINANCIERA_12M.md |
| PRESUPUESTO_12_MESES_REFERENCIA.md |
| ESTRUCTURA_LEGAL_Y_EQUITY.md |
| MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md |
| CHECKLIST_PRE_INVERSOR.md |
| PROPUESTA_VALOR_CLIENTE_B2B.md |
| PROPUESTA_VALOR_USUARIO_FINAL.md |
| PROPUESTA_VALOR_TERCER_LADO.md |
| PLAN_LANZAMIENTO_COMERCIAL.md |
| PLAN_MODULO_OPERATIVO_CLAVE.md |
| PLAN_METODOS_PAGO.md |
| MONTOS_REFERENCIA_INTERNET.md |
| SUPUESTO_MARKETING_OFFLINE.md |
| ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md |
| VOLCADO_RESPUESTAS_CUESTIONARIO.md *(solo §1 founder público; opcional recortar §2–11)* |

**Opcional DD profundo (no primera impresión):**

- AUDITORIA_FORENSE_360_2026-06.md  
- ANALISIS_FORENSE.md  
- INCOHERENCIAS_LANZAMIENTO_2026-05.md  

---

## 2. Excluir del zip externo

| Excluir | Motivo |
|---------|--------|
| `_auditorias/` (carpeta completa) | Logs Prompt B–F; proceso IA interno |
| CUESTIONARIO_EQUIPO_PILOTO.md | Solo equipo interno |
| REGISTRO_PENDIENTES_PACK.md | Checklist P0–P4 interno |
| P0_FOUNDER_PRE_ENVIO.md | Solo founder (o incluir solo si envías a asesor de confianza) |
| DATA_ROOM_ZIP_GUIA.md | Esta guía (no hace falta en el zip) |
| BRIEF_DICTAMEN_P3_ABOGADO_ASESOR.md | Enviar **aparte** solo a abogado/asesor |

---

## 3. Generar zip (comando)

Desde la raíz del repo Backend:

```bash
cd /var/www/html/proyectos/AIPP/DESARROLLO/ZonixPharma/ZonixPharma-Backend

OUT="/tmp/ZonixPharma-DataRoom-$(date +%Y%m%d).zip"
SRC="docs/Lanzamiento"

zip -r "$OUT" \
  "$SRC/CARTA_CONTEXTO_ESPECIALISTAS.md" \
  "$SRC/README.md" \
  "$SRC/BRIEF_UNA_PAGINA.md" \
  "$SRC/CONTEXTO_PITCH_Y_DECISIONES.md" \
  "$SRC/PERFIL_MERCADO_PILOTO.md" \
  "$SRC/UNIT_ECONOMICS.md" \
  "$SRC/PROYECCION_FINANCIERA_12M.md" \
  "$SRC/PRESUPUESTO_12_MESES_REFERENCIA.md" \
  "$SRC/ESTRUCTURA_LEGAL_Y_EQUITY.md" \
  "$SRC/MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md" \
  "$SRC/CHECKLIST_PRE_INVERSOR.md" \
  "$SRC/PROPUESTA_VALOR_CLIENTE_B2B.md" \
  "$SRC/PROPUESTA_VALOR_USUARIO_FINAL.md" \
  "$SRC/PROPUESTA_VALOR_TERCER_LADO.md" \
  "$SRC/PLAN_LANZAMIENTO_COMERCIAL.md" \
  "$SRC/PLAN_MODULO_OPERATIVO_CLAVE.md" \
  "$SRC/PLAN_METODOS_PAGO.md" \
  "$SRC/MONTOS_REFERENCIA_INTERNET.md" \
  "$SRC/SUPUESTO_MARKETING_OFFLINE.md" \
  "$SRC/ALINEACION_LANZAMIENTO_VS_PRODUCTO_2026-05.md" \
  "$SRC/VOLCADO_RESPUESTAS_CUESTIONARIO.md"

echo "Creado: $OUT"
unzip -l "$OUT" | tail -5
```

**Nota:** el zip **no** incluye `docs/` fuera de Lanzamiento (p. ej. BRAND, PLAN_REGULATORIO). Si el especialista técnico lo pide, añadir bajo NDA:

- `docs/BRAND_ZONIX_PHARMA.md`  
- `docs/PLAN_REGULATORIO_PHARMA_VE.md`  
- `docs/PLAN_RX_VALIDATION.md`  

---

## 4. Checklist antes de subir a Drive

- [ ] [P0_FOUNDER_PRE_ENVIO.md](P0_FOUNDER_PRE_ENVIO.md) — mínimo P0-06 tests + P0-04 aprobación  
- [ ] Carta de contexto es la **primera** página del Drive  
- [ ] Sin carpeta `_auditorias/`  
- [ ] SAFE/T&C marcados **borrador** en reunión ([CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §0.4)
