# Mapa data room (Captación → Lanzamiento)

> **Para qué sirve:** saber **qué carpeta conceptual** del data room corresponde a **qué documento real** del pack.  
> **No recrea** carpetas `00_…09_` dentro de Captación: el inventorio canónico es [`DOCUMENTOS_SOLO_INVERSOR.md`](../../Lanzamiento/DOCUMENTOS_SOLO_INVERSOR.md).  
> **No autoriza** enviar pack ni outreach (`CAP-P09`).  
> **Origen:** destilado Plan Integral Fundraising 2026 §12 + §20.

## Regla de oro

Captación = **playbook interno**. Lanzamiento = **artefactos** del data room / zip. Esta página solo **enlaza**.

## Mapa 00–09 → docs reales

| Carpeta conceptual | Contenido mínimo | Dónde está hoy |
|---|---|---|
| **00_Executive** | One-pager, pitch, memo | [`BRIEF_UNA_PAGINA.md`](../../Lanzamiento/BRIEF_UNA_PAGINA.md) · [`CONTEXTO_PITCH_Y_DECISIONES.md`](../../Lanzamiento/CONTEXTO_PITCH_Y_DECISIONES.md) · [`CHECKLIST_PRE_INVERSOR.md`](../../Lanzamiento/CHECKLIST_PRE_INVERSOR.md) · [`MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md`](../../Lanzamiento/MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md) |
| **01_Corporate** | Entidad, estatutos, cap table | [`ESTRUCTURA_LEGAL_Y_EQUITY.md`](../../Lanzamiento/ESTRUCTURA_LEGAL_Y_EQUITY.md) · `[PENDIENTE abogado]` docs societarios |
| **02_Legal** | IP/PIIA, contratos, SAFE | ESTRUCTURA + plantillas `CAP-P05` · SAFE interno: [`PLAN_SAFE_GABRIEL.md`](../metodo_safe_gabriel/PLAN_SAFE_GABRIEL.md) (**no** zip 30 min por defecto) |
| **03_Product** | Demo, roadmap, releases | Guion demo [`../Inversionistas/500-latam/DEMO_PRODUCTO_RX.md`](../../Inversionistas/500-latam/DEMO_PRODUCTO_RX.md) · producto vivo en repos |
| **04_Traction** | Farmacias, GMV, MRR, retención | Vacío hasta FACT de campo; no inventar; CRM / dashboard [`05_CALENDARIO_Y_DASHBOARD.md`](05_CALENDARIO_Y_DASHBOARD.md) |
| **05_GTM** | ICP, funnel, scripts, CAC | [`PLAN_LANZAMIENTO_COMERCIAL.md`](../../Lanzamiento/PLAN_LANZAMIENTO_COMERCIAL.md) · [`PROPUESTA_VALOR_CLIENTE_B2B.md`](../../Lanzamiento/PROPUESTA_VALOR_CLIENTE_B2B.md) · Captación métodos B |
| **06_Financial** | P&L, burn, runway, supuestos | Excel + [`PROYECCION_FINANCIERA_12M.md`](../../Lanzamiento/PROYECCION_FINANCIERA_12M.md) · [`UNIT_ECONOMICS.md`](../../Lanzamiento/UNIT_ECONOMICS.md) · [`PRESUPUESTO_12_MESES_REFERENCIA.md`](../../Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md) · [`07_QUE_COMPRA_EL_ASK.md`](07_QUE_COMPRA_EL_ASK.md) |
| **07_Commercial** | LOIs, contratos, partners, pilotos | Cuando existan; plantillas post-`CAP-P09` · delivery en propuestas valor 3er lado |
| **08_Risk** | Regulatorio, ciber, operación | [`PLAN_REGULATORIO_PHARMA_VE.md`](../../PLAN_REGULATORIO_PHARMA_VE.md) · [`BRIEFING_INVERSORES_VE_2026.md`](../../Lanzamiento/BRIEFING_INVERSORES_VE_2026.md) · EXT legal SAFE (LEGAL-REVIEW) |
| **09_Fundraising** | SAFE, pro forma, use of funds, milestones | [`07_QUE_COMPRA_EL_ASK.md`](07_QUE_COMPRA_EL_ASK.md) · [`PLAN_SAFE_GABRIEL.md`](../metodo_safe_gabriel/PLAN_SAFE_GABRIEL.md) · ESTRUCTURA |

Zip mínimo (~30 min): sección A de [`DOCUMENTOS_SOLO_INVERSOR.md`](../../Lanzamiento/DOCUMENTOS_SOLO_INVERSOR.md).

## Checklist de cierre del Investor Package (interno)

Marcar solo cuando sea verdad. Abogado/contador donde diga.

- [ ] Entidad exacta que recibirá el capital definida  
- [ ] SAFE revisado por abogado de la jurisdicción aplicable (`CAP-P05`)  
- [ ] Cap table / pro forma interno actualizado  
- [ ] Modelo financiero mensual coherente con Lean (Excel v4)  
- [ ] Milestones 90 / 180 / 365 alineados a Day-D y M1+ (ver [`07`](07_QUE_COMPRA_EL_ASK.md) + [`05`](05_CALENDARIO_Y_DASHBOARD.md))  
- [ ] Alfa ≤10 con registro de uso (cuando ejecutes; requiere `CAP-P09`)  
- [ ] Señales WTP (pagos) cuando existan — no encuestas como tracción  
- [ ] One-pager + pitch + checklist pre-inversor listos  
- [ ] Data room mapeado (esta página) sin claims de terceros como tracción Zonix  
- [ ] Lista CRM por tesis/etapa ([`../Inversionistas/`](../../Inversionistas/))  
- [ ] Términos no negociables vs negociables (canon **15%** @ 1.582.747; ver PLAN_SAFE §4)  
- [ ] Límite interno de dilución documentado  
- [ ] Respuesta a riesgos VE / compliance preparada (`LEGAL-REVIEW`)  
- [ ] **No** presentar ask como recaudado  
- [ ] **No** outreach sin `CAP-P09`

## Ver también

- Hub: [`00_QUE_HACER_AHORA.md`](00_QUE_HACER_AHORA.md)  
- Investor Case: [`09_INVESTOR_CASE.md`](09_INVESTOR_CASE.md)  
- Riesgos: [`10_RIESGOS_Y_CONTROLES.md`](10_RIESGOS_Y_CONTROLES.md)  
- Inventorio: [`../../Lanzamiento/DOCUMENTOS_SOLO_INVERSOR.md`](../../Lanzamiento/DOCUMENTOS_SOLO_INVERSOR.md)  
- Verify: `python3 docs/Lanzamiento/_tools/verify_inversor_pack.py`
