# Auditoría forense v3 — Pack `docs/Lanzamiento` (25 archivos + research web)

> **Fecha:** 21 junio 2026  
> **Predecesor:** [AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md](AUDIT_FORENSE_PACK_LANZAMIENTO_2026-06-22.md) (v2)  
> **Metodología:** [PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md](plantillas/PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md) — olas 1–7 (25/25 desk + autofix) + research web R2–R4 + juez mayor + **autofix v3**  
> **Anclas inmutables:** tiers SAFE **101k / 118k / 135k**; PROYECCION §1.1 sin recalcular

---

## Resumen ejecutivo

| Métrica | v2 (22-jun) | v3 (21-jun) |
|---------|-------------|-------------|
| P0 documentales | 0 | **0** (post-autofix) |
| P0 humanos (REGISTRO) | 8 | **8** (sin inventar) |
| P1 nuevos (web / coherencia) | — | **Remediados** (autofix + olas 4–7) |
| Archivos editados (autofix v3) | — | **~20** |
| Grep anti-regresión `399` / `48.100` / `158/mes` | OK | **OK** (solo histórico REGISTRO) |
| Veredicto DD | Verde-ámbar | **Verde-ámbar** (P0 humanos abiertos) |

**Conclusión:** Pack **listo para revisión founder** pre-reunión. Autofix v3 + olas 4–7 cierran coherencia PedidosYa vs Rappi, SaaS jun 2026, regulatorio y PRESUPUESTO §2.3.1. **No** se tocó PROYECCION §1.1 ni tiers SAFE. Pendiente **solo humano**: P0 REGISTRO, smoke E2E, mom-test, dictamen abogado.

---

## Research web (squads R1–R4) — hallazgos aplicados

| Squad | Tema | Hallazgo 2026 | Acción v3 |
|-------|------|---------------|-----------|
| R1 | Macro VE | BCV **may +6,3%** mensual | MONTOS §2 fila actualizada |
| R2 | SaaS | **SendGrid Free** discontinuado dic 2025 | MONTOS §4 + nota Essentials ~USD 20 |
| R2 | SaaS | **Firebase SMS VE ~USD 0,16/SMS** | MONTOS §4 ~USD 160/mes @ 1k verif. |
| R2 | SaaS | Total SaaS piloto >> **134/mes** placeholder | Nota reconciliación vs PRESUPUESTO |
| R3 | Mercado | Cifar / Statista sin cambio material vs v2 | Sin editar PROYECCION TAM |
| R4 | Regulatorio | Sin dictamen nuevo MPPS/INHRR | Sin cambio PLAN_MODULO §11 |

---

## Research web — síntesis squads R2–R4 (21 jun 2026)

| Squad | Conclusión transversal | Autofix aplicado |
|-------|------------------------|------------------|
| [R2 SaaS](0ec9bd3b-135a-4db2-9fb7-2cf929cdee7c) | Firebase SMS VE **USD 0,16/SMS**; total SaaS core **~223–286/mes** vs placeholder 134; Maps sin crédito USD 200; Workspace **USD 7–8,40/u** | MONTOS §4–§7 |
| [R3 Mercado](32964e97-e2bd-42d8-b362-10ed2421934b) | TAM **1,638M derivado** coherente; **Rappi no opera VE**; **PedidosYa** es agregador real; SAM 226 farmacias reconciliar | PERFIL §5.4–§5.6, §9–§10 |
| [R4 Regulatorio](eee86343-cdc3-47ff-8af3-1bf197b7e7ac) | Modelo marketplace + farmacia licenciada **OK**; **no** ley datos 2025 vigente; receta digital sin norma obligatoria; SENIAT factura digital mar-2026 **OK** | PLAN_REGULATORIO §1 |

**Pendiente sin autofix:** dictamen abogado brecha e-commerce (AUD-v3-R4b); Telesalud GO 6207 reglamento; SAM 226 vs 290 Carabobo (nota PERFIL).

---

## Autofix v3 + olas 4–7 (~20 archivos)

| Archivo | Cambio |
|---------|--------|
| [README.md](Lanzamiento/README.md) | Enlace [SMOKE_RX_E2E.md](../SMOKE_RX_E2E.md); fila tests FE **~241** |
| [CHECKLIST_PRE_INVERSOR.md](Lanzamiento/CHECKLIST_PRE_INVERSOR.md) | Encabezado `## 1.`; SMOKE en §5 y §7.7; tests FE en FAQ técnica |
| [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](Lanzamiento/MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) | Equity **16,83% / 18,15% / 18,75%**; Growth Slide 8; PMF → hipótesis post-piloto |
| [BRIEF_UNA_PAGINA.md](Lanzamiento/BRIEF_UNA_PAGINA.md) | **8 FTE** Lean; tabla sensibilidad con activas/revenue M12 |
| [MONTOS_REFERENCIA_INTERNET.md](Lanzamiento/MONTOS_REFERENCIA_INTERNET.md) | Refresh jun 2026; SMS, SendGrid, total SaaS ~280–310 |
| [REGISTRO_PENDIENTES_PACK.md](Lanzamiento/REGISTRO_PENDIENTES_PACK.md) | **P1-15 reabierto**; tabla P4 alineada a VOLCADO §4–§10 |
| [PLAN_LANZAMIENTO_COMERCIAL.md](Lanzamiento/PLAN_LANZAMIENTO_COMERCIAL.md) | SLA 90 min `[PENDIENTE SLA partner]`; SMOKE en §4.0 |
| [PERFIL_MERCADO_PILOTO.md](Lanzamiento/PERFIL_MERCADO_PILOTO.md) | Rappi retirado VE; PedidosYa agregador; Faro TAM; riesgos §9 |
| [PLAN_REGULATORIO_PHARMA_VE.md](../PLAN_REGULATORIO_PHARMA_VE.md) | Ley Datos 2025 → marco disperso VE |
| [PRESUPUESTO_12_MESES_REFERENCIA.md](Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md) | §2.3.1 reconciliación SaaS/SMS (AUD-v3-01) |
| Olas 4–7 | Rappi→PedidosYa: CONTEXTO, BRIEF, CHECKLIST, GUIA, BANCO, PROP_B2B, CUESTIONARIO, RESUMEN_GABRIEL, MONTOS §10 |
| [PLAN_MODULO_OPERATIVO_CLAVE.md](Lanzamiento/PLAN_MODULO_OPERATIVO_CLAVE.md) | §14.6 breach 72h = política interna |

---

## Hallazgos abiertos (no autofix)

| ID | Prioridad | Descripción | Dueño |
|----|-----------|-------------|-------|
| AUD-v3-02 | P1 | P1-15 mom-test: ≥3 entrevistas documentadas VOLCADO §5.1 | Founder |
| AUD-v3-03 | P1 | P1-12 smoke [SMOKE_RX_E2E.md](../SMOKE_RX_E2E.md) ejecutado y firmado | Founder + CTO |
| AUD-v3-12 | P0 | P0-01…P0-08 humanos REGISTRO | Founder |
| AUD-v3-15 | P2 | PRESUPUESTO Growth burn opaco (+632/mes vs narrativa) | FP&A |
| AUD-v3-16 | P2 | PROYECCION §3.3 puente 480k (heredado v2) | FP&A |
| AUD-v3-17 | — | Olas 4–7 completadas (desk + autofix Rappi/PedidosYa) | Jarvis ✅ |

---

## Matriz por archivo (olas 1–3 auditadas + desk olas 4–7)

| # | Archivo | P0 | P1 post-v3 | Nota |
|---|---------|----|------------|------|
| 1 | README | 0 | 0 | SMOKE + FE tests ✅ |
| 2 | BRIEF | 0 | 0 | Sensibilidad + 8 FTE ✅ |
| 3 | PROYECCION | 0 | 0 | Ancla intacta |
| 4 | UNIT | 0 | 0 | OK v2 |
| 5 | PRESUPUESTO | 0 | 0 | §2.3.1 SaaS ✅ |
| 6 | MONTOS | 0 | 0 | Refresh web ✅ |
| 7 | CHECKLIST | 0 | 0 | §1 + SMOKE ✅ |
| 8 | MENSAJE | 0 | 0 | Equity 3 tiers ✅ |
| 9 | VOLCADO | 0 | 0 | Plantillas PENDIENTE (humano) |
| 10 | REGISTRO | 0 | 1 | P1-15 abierto |
| 11 | PERFIL | 0 | 0 | OK v2 |
| 12 | PLAN_COMERCIAL | 0 | 0 | SLA + SMOKE ✅ |
| 13 | GUIA_DISCOVERY | 0 | 0 | PedidosYa mom-test ✅ |
| 14 | SUPUESTO_MARKETING | 0 | 0 | OK |
| 15 | PLAN_METODOS | 0 | 0 | Rx flow OK |
| 16 | PLAN_MODULO | 0 | 0 | §14.6 breach ✅ |
| 17 | ESTRUCTURA_LEGAL | 0 | 0 | Ley datos en trámite OK |
| 18 | ALINEACION | 0 | 0 | Refresh jun v2 |
| 19 | CONTEXTO_PITCH | 0 | 0 | PedidosYa benchmark ✅ |
| 20 | PROP_USUARIO | 0 | 0 | SLA partner OK |
| 21 | PROP_B2B | 0 | 0 | Objeciones PedidosYa ✅ |
| 22 | PROP_TERCER_LADO | 0 | 0 | OK |
| 23 | BANCO_PROBLEMAS | 0 | 0 | P10 PedidosYa ✅ |
| 24 | CUESTIONARIO | 0 | 0 | Sales script ✅ |
| 25 | RESUMEN_GABRIEL | 0 | 0 | 23+anexo OK |

---

## Verificación §H

| Check | Resultado |
|-------|-----------|
| Grep `399` / `48.100` / `158/mes` en Lanzamiento | **PASS** (solo histórico REGISTRO) |
| Tiers 101/118/135 intactos | **PASS** (no editados) |
| `php artisan test` | **SKIP** — `vendor/` ausente en entorno agente; re-verificar local (P0-06) |

---

## Próximos pasos sugeridos (founder)

1. Revisar **diff** (`git diff docs/Lanzamiento/ docs/PLAN_REGULATORIO_PHARMA_VE.md`).
2. Ejecutar smoke [SMOKE_RX_E2E.md](../SMOKE_RX_E2E.md) y marcar P1-12.
3. Completar mom-test pricing (P1-15) antes Day-D.
4. Dictamen abogado: brecha e-commerce + aviso MPPS (AUD-v3-R4b).
5. **Commit local** solo con OK explícito del founder.

---

*Generado por JARVIS — auditoría forense v3. Sin commit/push automático.*
