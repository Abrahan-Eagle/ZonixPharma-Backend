# Contexto activo de sesión — Zonix Pharma Backend

> **Uso:** La IA debe leer este archivo al iniciar o retomar trabajo en el proyecto para recuperar el estado reciente sin depender de que el usuario lo pida.
> La skill **context-updater** indica cómo actualizar este archivo al cerrar una sesión relevante.


## Canon financiero (Excel v4 — vigente)

SAFE **237.412** · Day-D **187.152** · equity **~39,57%** · %GMV **8/7/5** · pricing **45/60/70** · ARPF **~52** · LTV/CAC **~7,5x** · Esc.1 cash M12 **246.231** · BE **M5**. Asks **111.988 / 174.102 / 210.760** = obsoletos.

## Forense multi-LLM docs (9 ago 2026) + TRIM P1

- Informe: [`audits/FORENSIC_DOCS_MULTI_LLM_2026-08-09.md`](audits/FORENSIC_DOCS_MULTI_LLM_2026-08-09.md) (Grok + Composer; juez Grok 4/5).
- **DELETE ola 4:** ninguno. **MOVE 500-latam:** candidato, no aplicado.
- **TRIM P1 hecho:** Pack `manifest.yaml` anclas → 237.412; `manifest_inversor.yaml` paths; este archivo; lexicon Eats en `product/`.

## Limpieza docs olas 1–3 (9 ago 2026)

1. **archive/** eliminado + basura local. 2. **agents/** + snapshots audits + forenses zonix. 3. Raíz canon; JARVIS/WORKSPACE→`zonix/`; MIGRACION→`audits/`; sin `_tools/.venv`. Índice: [`README.md`](README.md).

---

## Última actualización de contexto

### Listo envío — sync docx/PDF (DoD comercial) — 7 agosto 2026

- **DoD:** paquete enviable alineado Excel v4 (SAFE **237.412**, Day-D **187.152**, %GMV **8/7/5**, equity **~39,57%**). **No** = cero `[PENDIENTE]` en todo el repo.
- **Pack Word:** regenerados **18/18** `docx/` desde `md/` vía `docs/Lanzamiento/_tools/.venv` + `_tools/batch_export.py` + `verify_pack.py` → **VERIFY OK**. Fechas **2026-08-07 14:25**.
- **PDFs envío (Chrome headless):** `BRIEF_UNA_PAGINA.pdf` (nuevo); refresh `BARRA_*`, `INFORME_CEO_*`, `INFORME_FACIL_*`; CRM Plan A `RESUMEN_CEO.pdf` Epakon/Casa212/ALGEN (+ espejos Epakon/Casa212); `RESUMEN_COMPARATIVO.pdf` + pack `RESUMENES-CEO/00–03`. Spot-check: **237.412** presente; **210.760 / 174.102 / 25/40/55 / ARPF-50** ausentes.
- **Gate envío:** PASS (md Lanzamiento + Pack md + CRM Plan A; PDFs listados).
- **Fuera de DoD (etiquetado, no inventar):** `[PENDIENTE FP&A]` P10/P90 cash / escenarios esc.1; Año2; reconciliar burn 169.717 vs 172.152; dictámenes abogado/farmacéutico; censo campo.
- **DX:** creado `docs/Lanzamiento/_tools/.venv` (python-docx) + `.gitignore` `.venv/`.
- **HITL:** **sin commit/push** hasta OK founder.

### HISTÓRICO — forenses pack v5–v8 / Colas B–C (7 ago 2026)

Loops Grok+Composer (+GLM/API limit); prompt [`plantillas/PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md`](plantillas/PROMPT_AUDIT_FORENSE_PACK_LANZAMIENTO.md) hasta **v8**. Canon y DoD comercial: ver **Canon financiero** + **Listo envío** arriba. Detalle de olas docs: [`audits/FORENSIC_DOCS_MULTI_LLM_2026-08-09.md`](audits/FORENSIC_DOCS_MULTI_LLM_2026-08-09.md).

### Sync canon Lean Excel v4 (237.412) — 7 agosto 2026

- **Fuente:** `/home/aipp/Descargas/MODELO_FINANCIERO_040826_v4.xlsx` → [`Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`](Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx) (backup `.bak-v3.9.3-20260807`).
- **Anclas:** SAFE **237.412** = Fase 0 **50.260** + burn **172.152** + reserva **15.000**; Day-D **187.152**; equity **~39,57%** @ **600k**; ARPF **~52**.
- **Esc.1:** revenue Y1 **228.796**; costos **169.717**; FCF Y1 **+59.079**; cash M12 **246.231**; BE FCF **M5** (no profitable M1).
- **Hecho:** sweep `docs/Lanzamiento` + CRM + Pack Aliado md; skills `zonix-startup-context` / `zonix-financial-model` / `zonix-inversionistas-crm`; bugs Excel Flujo/CCF/banner; borrados AUDIT forense pack jun-2026.
- **Obsoleto como ask vigente:** **210.760** / Day-D **160.500** / burn **145.500** / equity **35,13%** / cash **398.293**.

### Barra credibilidad Plan A (post-500) — 7 agosto 2026

- **Doc:** [`Lanzamiento/BARRA_CREDIBILIDAD_PLAN_A.md`](Lanzamiento/BARRA_CREDIBILIDAD_PLAN_A.md) + PDF — mínima vs fuerte antes de outreach Epakon/Casa212/ALGEN.
- **CRM:** gate en NOTAS de epakon, casa212, algen-aceleralatam (no confundir con gate `team-mx` 500).
- **Humano pendiente:** cerrar P0-05 demo + P0-08 piloto para barra verde.

### Informe fácil 500 → Zonix como startup — 7 agosto 2026

- **Entregable:** [`Lanzamiento/INFORME_FACIL_500_COMO_STARTUP.md`](Lanzamiento/INFORME_FACIL_500_COMO_STARTUP.md) + PDF — qué dijo 500, qué hacer, objetivos corto/largo, mejorar startup (sin código) para inversores.
- **Sin** SVS ni código; Plan A caja intacto; ask **237.412**.
- Enlace desde [`Inversionistas/500-latam/RESUMEN_FACIL.md`](Inversionistas/500-latam/RESUMEN_FACIL.md).

### Alta CRM SVS + 500 interno — 7 agosto 2026

- **SVS:** carpeta [`Inversionistas/startup-venezuela-summit/`](Inversionistas/startup-venezuela-summit/FICHA.md) score **49** nurture (evento/red); VIP50 $50 ≤10 ago solo OK founder; **otra opción** de canal, no cheque.
- **500:** etiquetado como **aprendizaje interno** (no Plan A de caja); playbooks demo/piloto siguen sirviendo al raise.
- **Informe:** [`Lanzamiento/INFORME_CEO_500_Y_SVS_2026.md`](Lanzamiento/INFORME_CEO_500_Y_SVS_2026.md) Parte A = 500 · Parte B = SVS.
- **Ranking:** 13 candidatas en [`RESUMEN_COMPARATIVO.md`](Inversionistas/RESUMEN_COMPARATIVO.md).

### Informe CEO 500 + SVS Caracas 2026 — 7 agosto 2026

- **Entregable:** [`Lanzamiento/INFORME_CEO_500_Y_SVS_2026.md`](Lanzamiento/INFORME_CEO_500_Y_SVS_2026.md) + PDF; intel [`Inversionistas/_intel/2026-08-07-startup-venezuela-summit-2026.md`](Inversionistas/_intel/2026-08-07-startup-venezuela-summit-2026.md).
- **Veredicto SVS:** **sí condicionado** — VIP50 **$50** solo con OK founder **antes del 10 ago**; red/pitch, no caja; no sustituye Plan A ni gate 500.
- **Método:** fan-out Grok+Composer ×4 clusters; jueces factual+decisión (fallback Grok; tope API en `gpt-5.6-sol-max`).
- **Pendiente humano:** OK ticket SVS; demo + piloto Valencia; outreach Epakon/Casa212/ALGEN.

### Aprendizaje 500 LatAm → pack docs inversores — 7 agosto 2026

- **Hecho:** rechazo email 6 ago (`aplica@500.co`): “carece de MVP/demo funcional”. CRM [`Inversionistas/500-latam/`](Inversionistas/500-latam/) score **67**; playbooks demo/piloto/MVT/gate.
- **Lección pack:** MVP **técnico** (staging + tests) ≠ evidencia de **mercado** (demo 3–5 min + farmacias/pedidos). Canon: [`Lanzamiento/APRENDIZAJE_500_EVIDENCIA_MERCADO.md`](Lanzamiento/APRENDIZAJE_500_EVIDENCIA_MERCADO.md).
- **Plan A caja:** Epakon / Casa212 / ALGEN. 500 = radar; recontacto `team-mx@500startups.com` **solo** con [`GATE_RECONTACTO_500.md`](Inversionistas/500-latam/GATE_RECONTACTO_500.md) verde.
- **Pendiente humano:** grabar demo ([`DEMO_PRODUCTO_RX.md`](Inversionistas/500-latam/DEMO_PRODUCTO_RX.md)); cerrar 1–2 farmacias Valencia ([`PILOTO_FARMACIAS_VALENCIA.md`](Inversionistas/500-latam/PILOTO_FARMACIAS_VALENCIA.md)).
- **Actualizado 7-ago:** Excel/PROYECCION/UNIT → canon v4 **237.412** (ver bloque sync arriba).

### Sync pack Lean → Excel 237.412 — 26 julio 2026

- **Sweep residual:** CENSO / CUESTIONARIO / PERFIL / PROPUESTA_USUARIO / SUPUESTO_MKT / REGISTRO / VOLCADO + plantillas `PROMPT_MEJORAR_PACK` / `PROMPT_AUDIT_FORENSE` → **237.412**.
- **Canon:** SAFE **237.412** = Fase 0 **50.260** + burn **172.152** + reserva **15.000**; Day-D **187.152**; equity **~39,57%** @ **600k**. Asks **174k / 112k** = obsoletos/históricos.
- **Hecho:** BRIEF/README/CONTEXTO/CHECKLIST/MENSAJE + ESTRUCTURA/PROYECCION/PRESUPUESTO/MODELO.md/UNIT + skills `zonix-startup-context` / `zonix-financial-model`; xlsx Descargas → `docs/Lanzamiento/MODELO_FINANCIERO_ZONIX_PHARMA.xlsx`.
- **Pendiente:** cash M12 + tabla M1–M12 **`[PENDIENTE FP&A]`**; drift interno Excel (Flujo/ESTA 112k).

### VPS Namecheap Quasar (CorralX + Zonix) — 24 julio 2026

- **Decisión:** **2× Quasar** separados (no Magnetar compartido): Zonix Pharma = 1 Quasar; CorralX = 1 Quasar. Self-managed.
- **Coste a presupuestar:** **~$381/año** renew (2× ~$190.56); no usar promo ~$309. Mes a mes ~$453/año. Ver [`ops/VPS_COSTE_ANUAL_Y_AWS_VS_NAMECHEAP.md`](ops/VPS_COSTE_ANUAL_Y_AWS_VS_NAMECHEAP.md).
- **vs AWS:** Namecheap ahora (precio fijo, LEMP simple); AWS más adelante (HA/compliance/escalado) — no para el primer corte cPanel.
- **Artefactos:** [`ops/VPS_NAMECHEAP_QUASAR_RUNBOOK.md`](ops/VPS_NAMECHEAP_QUASAR_RUNBOOK.md) + [`scripts/vps-quasar-bootstrap.sh`](../scripts/vps-quasar-bootstrap.sh). Puntero en [`ops/deploy/DEPLOY_PHARMA_AIBLOCK.md`](ops/deploy/DEPLOY_PHARMA_AIBLOCK.md).
- **Pendiente humano:** comprar Quasar, pegar IP en el runbook, ejecutar bootstrap + migrar desde `pharma.aiblockweb.com`. Sin IP SSH no hay provision live.

### Conciliación Lean v4 (xlsx Descargas + pitch) — 17 julio 2026

- **Hecho:** reconciliación de `/home/aipp/Descargas/MODELO_FINANCIERO_170726 v3.xlsx` (backup `.bak`): one-shots **~22.365** + operativa **~27.895** = Fase 0 **~50.260** = 0a+0b+0c; validación **0**; burn M1–M12 **~123.352**; TOTAL SAFE **~174.102**; caja Day-D **~123.842**; equity ref. **~29,02%** con cap 600k `[PENDIENTE decisión cap]`.
- **Decisiones:** amueblado HQ **1×2.250** (one-shot); alquiler Fase 0 **3×750** dentro de HQ+CapEx (750/mes en cronograma 0a/0b/0c) + 12×750 en burn; **sin ops recurrentes Fase 0** (cubiertas por dominio+hosting intro); CEO rol real; sin duplicar sales/tablets.
- **Pitch actualizado:** BRIEF, README cifras, MENSAJE_ENVIO, CONTEXTO_PITCH, RESUMEN_ALIADO (tabla clave), PLAN_LANZAMIENTO (wire + Fase 0).
- **No tocado:** `MODELO_FINANCIERO_ZONIX_PHARMA.md` / `.xlsx` del repo (canon anterior); PROYECCION §1.1 runway/cash M12 = **`[PENDIENTE FP&A]`**.

### Ajuste billing pack ↔ PROYECCION §1.1 — 14 julio 2026

- **Significado:** alinear cobro B2B del pack (cuota + % GMV + ajustes/waiver) con la ancla Lean M1–M12 en [PROYECCION_FINANCIERA_12M.md](Lanzamiento/PROYECCION_FINANCIERA_12M.md) §1.1 — no es un módulo de software ni un archivo `billing`.
- **Canon §1.1 (sin waiver) — histórico hasta sync FP&A:** capital Lean **~111.988**; Fase 0 **~33.835**; caja Day-D **~78.153**; cash M12 **~40.831**. **Pitch vigente:** ver bloque v4 arriba.
- **Billing documentado al pie de §1.1:** nota ARPF agregado + fila proxy **waiver primeras 10** (~−453 revenue Y1); cash M12 con waiver = `[PENDIENTE FP&A]` (el ~41.756 de B2B §11 es proxy heredado).
- **Fuera de alcance esta sesión:** desglose Excel mes a mes cuota/GMV (vive en Excel Detallado / política B2B §5; no hay spec layout Pizza en el pack).
- **Docs alineados:** este `active_context`, skill `zonix-startup-context`, plantilla `PROMPT_MEJORAR_PACK_LANZAMIENTO` (anclas). Auditorías forenses históricas que citan **42.209** / **72.943** quedan como registro, no como canon.

### Limpieza archivo Eats — junio 2026

- **`docs/_archive_eats/` eliminada** del repo (pack Lanzamiento Eats duplicado). Historial recuperable vía git (commit anterior a eliminación).
- Referencias actualizadas en `MIGRACION_EATS_PHARMA.md`, `.cursorignore`, plantillas y docs operativos.
- Docs Eats históricos **eliminados** (limpieza dura ago 2026); usar PLAN_REGULATORIO + PLAN_METODOS_PAGO §10.

### Deploy FTP pharma.aiblockweb.com — junio 2026

- **Workflow:** [`.github/workflows/main.yml`](../.github/workflows/main.yml) reemplaza legacy Zonix-EatsX → **Zonix Pharma**, PHP 8.3, tests pre-FTP, destino `https://pharma.aiblockweb.com`.
- **Guía:** [`docs/ops/deploy/DEPLOY_PHARMA_AIBLOCK.md`](ops/deploy/DEPLOY_PHARMA_AIBLOCK.md) — secrets GitHub, `ENV_CONTENT`, primer arranque cPanel.
- **Secrets requeridos (GitHub):** `FTP_SERVER`, `FTP_USERNAME`, `FTP_PASSWORD`, `ENV_CONTENT`.
- **Pendiente operativo:** crear secrets en GitHub → merge/push a **`main`** → `migrate` en cPanel → `API_URL=https://pharma.aiblockweb.com` en Flutter.

### Cierre cadena auditorías 360° + lote 10 — 10 junio 2026

- **Módulos auditados y remediados (lotes 1–10):** commerce, pharmacist, orders, buyer Rx, smoke/strict checkout, buyer catalog, delivery, admin.
- **Lote 10:** `delivery_company_api_errors.dart` + `DeliveryCompanyService.lastActionError`; `GET /admin/statistics` envelope `{ success, data }`.
- **Docs:** remediación en código + [`audits/README.md`](audits/README.md); smoke `qa/SMOKE_RX_E2E.md`.
- **Helpers Front API:** `commerce_api_errors`, `pharmacist_api_errors`, `order_api_errors`, `product_api_errors`, `delivery_api_errors`, `admin_api_errors`, `delivery_company_api_errors`.
- **Smoke Rx estricto API:** verificado 11 jun; widget `checkout_strict_rx_test` en Front.
- **Local dispositivo (11 jun):** `.env` **strict ON**; receta libre **id=2**; runbook `qa/SMOKE_RX_E2E.md`.
- **Pendiente:** smoke UI Flutter en dispositivo; luego restaurar `.env` a permisivo.

### Buyer catalog lote 7 — 10 junio 2026

- **Auditoría:** [`audits/README.md`](audits/README.md).
- **Smoke strict:** `RxStrictSmokeSeeder` + test; checklist `qa/SMOKE_RX_E2E.md`.

### Lote 6 — smoke Rx + rating pharma + strict checkout — 10 junio 2026

- **Smoke:** 22 tests backend PASS (jun 2026); checklist vivo [`qa/SMOKE_RX_E2E.md`](qa/SMOKE_RX_E2E.md); manual dispositivo pendiente.
- **Strict Rx (spec 001):** `GET /api/pharma-policy`; Front `PharmaPolicyService` + checkout/cart modo estricto.
- **Rating:** alias `ratePharmacy` / `pharmacyRated` (API `/reviews/restaurant` intacta).

### Buyer prescriptions lote 5 — 10 junio 2026

- **Auditoría:** [`audits/README.md`](audits/README.md) — semáforo VERDE.
- **Backend:** eager `with(['order','commerce'])` en GET index; tests `BuyerPrescriptionIndexTest` (list + destroy 422).
- **Front:** `MyPrescriptionsPage` → tap abre `OrderDetailPage`; eliminar receta pending; `prescriptionHttpErrorMessage` (+ códigos buyer Rx).
- **Verificación:** Backend BuyerPrescription **2** OK; Front **238** tests (~1 skip), analyze OK.

### P2 backlog Rx/Orders lote 4 — 10 junio 2026

- **Pharmacist:** cache `loadPharmacistDashboard()` en `PrescriptionService`; eager `with(['order','commerce'])` en pending/history Rx.
- **Orders UI:** chat badge Farmacia; `rx_countdown.dart` + 4 tests; `orderHttpErrorMessage` en comprobante/mensajes.
- **Verificación:** Backend **436**; Front **237** tests (~1 skip).

### Cierre auditorías Rx/Orders + remediación final — 10 junio 2026

- **Pharmacist lote 3–4:** audit doc, throttle onboarding, envelope buyer Rx, `verified` preservado en re-envío MPPS.
- **Orders lote 3:** [`audits/README.md`](audits/README.md); Front `order_api_errors.dart` + `OrderService` success/helper.
- **Smoke:** [`qa/SMOKE_RX_E2E.md`](qa/SMOKE_RX_E2E.md) checklist manual E2E Rx.
- **Verificación:** Backend **436** tests; Front **233** tests (~1 skip).

### Auditoría 360° pharmacist + remediación lote 3 — 10 junio 2026

- **Hecho:** [`audits/README.md`](audits/README.md). Throttle `10,1` en `POST /api/pharmacist/onboarding`. Tests `PharmacistOnboardingTest` (4 escenarios).
- **Front (espejo):** `PrescriptionService` buyer exige `success == true` (upload/delete/list); onboarding parsea envelope + `pharmacistHttpErrorMessage`.
- **Verificación:** Backend **435** tests; Front **230** tests (~1 skip), analyze OK.
- **Pendiente P2:** tab Config pharmacist; smoke E2E Rx; auditoría orders 360°.

### Remediación módulo pharmacist (lote 2 — historial) — 10 junio 2026

- **Hecho:** `GET /api/pharmacist/prescriptions/history` (filtro `status`, paginado); tests `PharmacistPrescriptionHistoryTest`.
- **Verificación:** `php artisan test --parallel` → **431 passed**.

### Remediación módulo pharmacist (lote 1) — 10 junio 2026

- **Hecho:** throttle `30,1` en approve/reject Rx; tests `PharmacistDashboardTest` (KPIs + licencia no verificada → 403 `PHARMACIST_LICENSE_INVALID`).
- **Verificación:** `php artisan test --parallel` → **429 passed**.

### Remediación buyer orders (lote 2) — 10 junio 2026

- **Hecho:** `OrderTrackingController` legacy alineado a Pharma + timeline Rx (6 pasos); clave `pharmacy` + alias `restaurant`. Tests `ExpirePendingPrescriptionsCommandTest` (orphan Rx vía `zonix:expire-pending-prescriptions`) y `OrderTest::test_legacy_order_tracking_includes_rx_state_and_pharmacy`.
- **Verificación:** `php artisan test --parallel` → **427 passed**.
- **Pendiente:** auditoría 360° módulo orders completa.

### Remediación módulo Commerce + multi-sede — 10 junio 2026

- **Hecho:** Auditoría 360° (8 fases) documentada en [`audits/AUDIT_commerce_8fases_2026-06-10.md`](AUDIT_commerce_8fases_2026-06-10.md) y [`plantillas/PROMPT_AUDIT_360_ZONIX.md`](PROMPT_AUDIT_360_ZONIX.md). Remediación P1/P2: throttle `60,1` en rutas commerce, Pusher `commerces()` multi-sede, envelope promos, tests `EnsureCommerceApproved`, `CommerceOrderValidatePayment`, `CommerceProductRx`.
- **Multi-sede:** trait `ResolvesCommerce` (`commerce_id` / header `X-Commerce-Id` / principal); tests `CommerceMultiSedeTest` (4 escenarios). Push `dev` → `140c486`.
- **Verificación:** `php artisan test --parallel` → **421 passed**.
- **Smoke manual sugerido:** perfil con 2 farmacias → `set-primary` → productos/órdenes/dashboard scoped; header ajeno → 403.
- **Pendiente:** sprint brand residual mínimo en Front (solo `Colors.transparent` en chat/QR); otros módulos fuera de commerce.

### Pack Lanzamiento listo para especialistas (sin meta IA) — 1 junio 2026

- **Hecho:** `docs/Lanzamiento/` — **22** `.md` en raíz; eliminados 11 archivos de proceso (`_auditorias/`, `ANALISIS_FORENSE`, `AUDITORIA_FORENSE_360`, `INCOHERENCIAS`).
- **README:** índice externo; sin Jarvis/prompts/skills; nota lectura externa.
- **Sanitizados:** REGISTRO, VOLCADO, CHECKLIST, BRIEF, MENSAJE, PLAN, PLAN_MODULO, ESTRUCTURA, PROPUESTA_USUARIO, ALINEACION, SUPUESTO, CUESTIONARIO.
- **Verificación:** `rg` en `docs/Lanzamiento/*.md` → 0 coincidencias meta IA; sin enlaces a archivos borrados.
- **Mantiene (negocio):** stack IA en PRESUPUESTO §6.1; asistente paciente roadmap; claims regulatorios en CONTEXTO.
- **Bloqueante inversor:** P0 humano en [REGISTRO_PENDIENTES_PACK.md](Lanzamiento/REGISTRO_PENDIENTES_PACK.md) — founder debe revisar zip antes de enviar.

### Spec Kit (SDD) integrado — 27 mayo 2026

- **Backend hub:** `.specify/`, `specs/`, constitution en `.specify/memory/constitution.md`, overrides dual-repo.
- **Front espejo:** `cursor-agent` en ZonixPharma-Front; specs activas en Backend `specs/`.
- **Skills:** `~/.cursor/skills/speckit-*` (proceso) + `.agents/skills/zonix-*` (dominio).
- **Piloto:** `specs/001-block-rx-strict-checkout/` — spec/plan/tasks/analyze listos; **implement pendiente OK usuario**.
- **Guía:** [docs/zonix/SPEC_KIT_ZONIX.md](zonix/SPEC_KIT_ZONIX.md).
- **Tests post-install:** `php artisan test --filter=OrderTest` OK; `flutter test` 216 passed.

### Pack Lanzamiento — tiers Lean 101k / Base 118k / Growth 135k (18 mayo 2026) _(histórico — superseded)_

- **Histórico mayo 2026:** Lean **101k** / Base **118k** / Growth **135k**; M12 **~42.209**; equilibrio **M11**. **Canon vigente jun/jul 2026:** Lean **~112k** / Base **~157k** / Growth **~187k**; M12 **~40.831**; casi BE **M12** — ver bloque «Ajuste billing pack» arriba y [PROYECCION §1.1](Lanzamiento/PROYECCION_FINANCIERA_12M.md).
- **PRESUPUESTO:** [PRESUPUESTO_12_MESES_REFERENCIA.md](Lanzamiento/PRESUPUESTO_12_MESES_REFERENCIA.md) §1–§5.
- **Pack externo:** sin auditorías Jarvis en carpeta Lanzamiento (contenido absorbido en docs de negocio).

### Pack Lanzamiento — modelo operativo Lean (referencia vigente)

- **Canon v4/v5:** Day-D = **T+90**; Fase 0 **50.260**; caja Day-D **187.152**; burn Esc.1 M1 **11.411** / M2 **14.346** / M3–12 **14.346**; FCF Y1 **+59.079**; cash M12 **246.231**; BE FCF **M5**; **~159 activas**; ARPF placeholder **~52**.
- **Equipo Lean:** Founder + Co-CEO + Dev + **4× Sales** + CS+CM (ver PRESUPUESTO §1.1).
- **Pendientes humanos:** GitHub/NDA, referencias, HQ casa, valla, abogado/farmacéutico — [VOLCADO](Lanzamiento/VOLCADO_RESPUESTAS_CUESTIONARIO.md), [CHECKLIST](Lanzamiento/CHECKLIST_PRE_INVERSOR.md).
- **Histórico (no vigente):** Fase 0 ~33.835 / Day-D ~78.153 / burn 8.011–7.980 / M12 ~40.831 / BE M12.

---

### Saneamiento Jarvis + P0 API (9 junio 2026)

- **Docs:** AGENTS/README/active_context alineados (métricas reales, Android `com.zonix.eats` parche, copy Pharma en README backend carrito).
- **Backend P0-15:** `ProfileController` — `DB::transaction()` en `createDeliveryAgent`, `createCommerce`, `createDeliveryCompany`.
- **Backend P0 sweep:** mensajes genéricos en respuestas JSON (sin `$e->getMessage()` al cliente) en Privacy, Activity, AccountDeletion, Export, Commerce Order/Product/Analytics/Dashboard, Analytics global, Notification, Payment, PaymentMethod.
- **Verificación:** `php artisan test --parallel` → **399 passed**; Front sin cambios de código → **216 passed** (baseline).
- **Higiene Intelephense / tipado reciente:** un solo `use App\Events\PaymentProofUploaded` en `tests/Feature/OrderTest.php`; `Buyer/PharmacyController::show(string|int $id)`; modelo `Order` (`withPivot(['quantity', 'unit_price'])`, scopes `scopeWithoutAwaitingProofValidation` / `scopeWherePendingPaymentTtlExceeded` con `Builder $query`); `Buyer/TrackingController::getOrderTracking(string|int $orderId)`.
- **Nota:** sin commit/push automático desde la IA en esta verificación.

### Auditoría API + quick wins (1 mayo 2026)

- **Fecha:** 1 mayo 2026 (auditoría API patterns + quick wins en código)
- **Resumen breve:** Auditoría de **63 controladores** contra la skill `zonix-api-patterns` documentada en [`docs/audits/AUDIT_API_PATTERNS_2026-05-01.md`](AUDIT_API_PATTERNS_2026-05-01.md) (15 P0 detectados, deuda sistémica en envelope JSON, paginación, Form Requests y exposición de `$e->getMessage()`). **Remediación aplicada:** `Handler::handleApiException` ahora registra `\Log::error` en excepciones no manejadas, endurece mensaje de `ValidationException` y evita filtrar detalles internos en producción salvo `HttpException` con mensaje explícito; `CommerceDataController` devuelve **403** si `commerce_id`/`X-Commerce-Id` no pertenece al perfil (sin fallback silencioso al comercio principal); `Buyer/ReviewController::reportReview` exige que la reseña esté ligada a una **orden del comprador** (`orders.profile_id`); `Authenticator/AuthController::googleUser` y `Admin/ReportController::sendSystemNotification` dejan de exponer `getMessage()` al cliente y loguean el fallo; eliminados controladores muertos/legado no enrutados: `Delivery/OrderController`, `ChatController` (raíz), `HomeController` (raíz), `WebSocket/WebSocketController`. Prompt reutilizable de auditoría forense: [`docs/plantillas/PROMPT_AUDIT_360_ZONIX.md`](plantillas/PROMPT_AUDIT_360_ZONIX.md). **Pendiente:** backlog P0 restante en doc (Payment idempotencia, ProfileController transacciones, sweep masivo de controllers).

---

## Última actualización de contexto (continuación 30 abr)

- **Fecha:** 30 abril 2026 (auditoría segunda pasada — implementación en código)
- **Resumen breve:** Gobernanza Jarvis: marca canónica en `AGENTS.md` + `.cursorrules` remiten a `BRAND_ZONIX_PHARMA.md`; matriz API canónico/legacy en `MIGRACION_EATS_PHARMA.md`; BRAND ampliado (grid 24px, esquinas, checklist WCAG dark); auditoría datos sensibles §5.1 en `PLAN_REGULATORIO_PHARMA_VE.md`; CI documentado en `AGENTS.md` y workflow Flutter en `ZonixPharma-Front/.github/workflows/ci.yml`. Políticas Pharma en `Buyer/OrderController@store` (`block_rx_without_prescription` default false, cupón solo OTC cuando `disallow_promotions_on_rx`, bloqueo delivery + cold chain), idempotencia de subida de receta (409 si hay receta activa), `Buyer/PrescriptionController` solo en `pending_prescription_validation`, TTL≤0 documentado + warning en log/comando, evento `PaymentProofUploaded` al subir comprobante, fingerprint idempotencia órdenes con `prescription_id`, tests Order/Prescription/Search ampliados. Flutter: `OrderConfirmationPage` (rama Rx), checkout cadena de frío + chips Rx, `cart_service` legacy → `fromJson`, modelos `Restaurant` pharma, `Order` getters `commerce*`, `MedicineLot` fecha opcional, `Product.pharmaSummary` con `dosageForm`, copy onboarding/ratings/QR, mounted/Pusher en farmacéutico. Docs: `PLAN_RX_VALIDATION.md`, `ops/TECH_DEBT.md` (Firebase/keystore).

---

## Última actualización de contexto (histórico)

- **Fecha:** 30 abril 2026 (segunda sesión, remediación post-migración)
- **Resumen:** **Remediación completa post-migración Eats → Pharma** sobre la base ya migrada. Forense detectó errores reales (compilación Flutter rota por campos de Product eliminados, enum `users.role` sin `pharmacist`, checkout buyer ignorando flujo Rx, autorización Pusher excluyendo farmacéutico, TTL recetas sin schedule, migración legacy que recortaba el enum de orders, formularios de producto sin campos farmacéuticos, MainRouter sin shell pharmacist) y se corrigió todo. Detalle por bloques:
    - **A1**: `product_detail_page.dart` reescrito con sección Pharma (badges Rx / cadena de frío / controlado, bloque "Información farmacéutica" con principio activo, presentación, INHRR, etc.). `products_page.dart` ya no usa `preparationTime`. Test legacy `client_products_page_test.dart` reescrito con productos OTC + Rx demo.
    - **A2**: Editado `create_users_table` añadiendo `pharmacist` al enum `role`.
    - **A3**: `Buyer/OrderController::store` ahora detecta productos `requires_prescription` y `cold_chain` en el carrito; crea la orden con estado inicial `pending_prescription_validation` (vs `pending_payment`) y persiste `requires_prescription`/`cold_chain_required`. Documentado `OrderPayment.type='food'` como alias legacy del subtotal a la farmacia.
    - **A4**: `routes/channels.php` canal `commerce.{id}` ahora autoriza también al rol `pharmacist` cuyo `profile.id` coincide con `commerces.pharmacist_in_charge_profile_id`.
    - **A5**: Eliminada migración `2026_01_16_092546_update_orders_status_enum_to_new_states.php` (recortaba el enum). Norma del proyecto cumple: solo `create_*`.
    - **A6**: Comando nuevo `App\Console\Commands\ExpirePendingPrescriptionsCommand` (`zonix:expire-pending-prescriptions`). Agendado en `Kernel::schedule()` cada minuto en `local/testing` y cada 5 minutos en producción.
    - **B1**: `bottom_nav_persistence.dart` añade `pharmacist` (level 5) y `MainRouter` añade ramas/items para el shell pharmacist (PharmacistDashboardPage / PendingValidationsPage / Historial).
    - **B2**: `CartItem.copyWith` añadido. `CartService.addToCart/incrementQuantity/decrementQuantity/updateQuantity` ahora preservan flags Pharma; `addToCart` mergea flags si el ítem entrante trae datos más completos.
    - **B3**: `Order.canonicalOrderStatus`, `statusText`, `statusColor` y `_progressStep`/`_progressForStatus`/`_isTrackableStatus` soportan `pending_prescription_validation`.
    - **B4**: `cart_page.dart` y `checkout_page.dart` muestran banner "Requiere receta médica" + banner cadena de frío. Tras crear orden Rx el checkout navega a `PrescriptionUploadPage` antes de la pantalla de confirmación.
    - **B5**: `CommerceProduct` extendido con todos los campos farmacéuticos. `commerce_product_form_page.dart` reescrito con 3 secciones (comercial, farmacéutica, regulación) y 3 switches Rx/controlled/cold_chain con tipo de receta condicional. `commerce_product_service.dart` envía/recibe los nuevos campos al backend.
    - **B6**: `StoreProductRequest` y `UpdateProductRequest` validan los campos farmacéuticos con `Rule::in(...)` para `dosage_form`/`prescription_type` y `required_if:requires_prescription,1` para `prescription_type`.
    - **B7**: `Buyer/OrderController::cancelOrder` y `OrderService::cancelOrder` ahora aceptan `pending_prescription_validation` en la lista de estados cancelables (TTL de 5 minutos solo aplica a `pending_payment`).
    - **B8**: `OrderNotificationSubscriber` se suscribe a `PrescriptionUploaded/Validated/Rejected` y notifica al farmacéutico colegiado o al paciente según corresponda. Mapa de mensajes incluye `pending_prescription_validation`.
    - **B9**: `PharmacyService::baseQuery()` filtra `Commerce` por `business_type_id` perteneciente a tipos farmacéuticos (Farmacia, Farmacia 24h, Droguería, Boticario, Tienda salud, Óptica, Ortopedia, Pañalera).
    - **B10**: `DatabaseSeeder` invoca `RoleSeeder` antes que `BusinessTypeSeeder` y `ZonixDemoSeeder`.
    - **C1**: `ProductFactory` reescrito con datos farmacéuticos (principio activo, dosage_form, concentración, presentación, manufacturer, INHRR) + states `rx()`, `controlled()`, `coldChain()`. `OrderFactory` con states `withRx()` y `withColdChain()`.
    - **C2/C3**: Sweep masivo de copy "restaurante / comida / Zonix Eats" en `main_router.dart`, `buyer_shell.dart`, `restaurants_page.dart`, `restaurant_details_page.dart`, `commerce_share_qr_page.dart`, `cart_page.dart`, `checkout_page.dart`, `order_service.dart`, `app_strings.dart`, `onboarding_page3.dart`. Backend: `WebSocketController`, `Admin/ReportController`, `Web/Front/IndexController`, `LocationController`, `Buyer/SearchController`, `Analytics/AnalyticsController`, `Commerce/CommerceListController`, `routes/web.php`, `database/factories/NotificationFactory.php`, vistas legales `terms.blade.php`/`privacy.blade.php`.
    - **C4**: `tests/Feature/SeoTest.php` y `tests/Feature/AdminOperationalHardeningTest.php` con literales Pharma.
    - **C5**: pack `docs/Lanzamiento` Eats archivado en `docs/_archive_eats/Lanzamiento_Eats` (abr 2026); **carpeta `_archive_eats` eliminada del repo** jun 2026 — recuperable en historial git. Pack vivo: `docs/Lanzamiento/` (Pharma).
    - **D1**: Endpoint `POST /api/pharmacist/onboarding` (con `GET` para estado actual) en `Pharmacist/OnboardingController` + `StorePharmacistProfileRequest` (MPPS, licencia, foto título). El admin debe verificar manualmente antes de habilitar al farmacéutico para validar recetas.
    - **D2**: `create_profiles_table` ampliado con columnas opcionales sensibles: `allergies`, `medical_notes`, `emergency_contact_name`, `emergency_contact_phone`, `medical_consent_given`, `medical_consent_at`. UI buyer queda como follow-up.
    - **D3**: `buyer_shell` añade icono "Mis recetas médicas" (Icons.receipt_long) que abre `MyPrescriptionsPage`.
    - **D4**: Comentario obsoleto en `commerce_share_qr_page` corregido a `zonix://pharmacy/{id}`.

- **Validación pasada:**
    - `php -l` recursivo en `app/`, `database/`, `tests/`, `routes/`, `config/` → sin errores.
    - `flutter analyze` (vía ReadLints) en `lib/` y `test/` → sin errores.
    - Referencias rotas a `ProductExtra/Preference/extras()/preparationTime/allergens/...` → 0 ocurrencias en código de aplicación.
    - Strings residuales `Zonix Eats / com.zonix.eats / ZonixEats` en código activo → 0 (solo se mantiene 1 comentario intencional en `storefront_qr_parser.dart` que documenta el alias legacy del QR para QRs antiguos).

- **Próximos pasos sugeridos:**
    1. `php artisan migrate:fresh --seed` con BD destino lista (la consolidación de schema Pharma queda completa al correrlo).
    2. `php artisan test`.
    3. `flutter pub get` + `flutter analyze` + `flutter test`.
    4. UI follow-up no crítico (no bloquea MVP):
        - Pantalla `BuyerMedicalInfoPage` (paso opcional de onboarding) para llenar `allergies`, `medical_notes`, `emergency_contact_*`.
        - Pantalla `PharmacistOnboardingPage` con form (MPPS, licencia, foto título) que llama `POST /api/pharmacist/onboarding`.
        - `PrescriptionsHistoryPage` separado de `PendingValidationsPage` (ahora la pestaña 2 del shell pharmacist apunta a la misma).
        - Reescribir `ZonixDemoSeeder` con dataset Pharma completo (3 farmacias, 30 productos OTC, 5 Rx, 2 farmacéuticos colegiados, lotes con vencimientos variados).
    5. Operación: nuevo proyecto Firebase `zonix-pharma`, dominio `zonixpharma.com`, regenerar app icon con la lámina de marca, y, antes de go-live, verificación legal de farmacias y MPPS de los farmacéuticos colegiados.

### Histórico de la sesión anterior (migración inicial)

Ver entrada del 30 abril 2026 (primera sesión) más abajo para el detalle del fork destructivo y la migración inicial.

---

## Sesión anterior

- **Fecha:** 30 abril 2026 (primera sesión)
- **Resumen:** **Transformación Zonix Eats → Zonix Pharma (fork destructivo, MVP completo Rx).** Aplicada en una sola sesión por bloques:
    1. **Branding**: `Zonix Pharma`, `com.zonix.pharma`, `zonix://pharmacy/{id}`, canal FCM `zonix_pharma_fcm`, dominio `zonixpharma.com`. Ajustes en Android/iOS/web manifests, `pubspec.yaml`, `MaterialApp.title`, `AppConfig.appName`, mapas (`userAgentPackageName`), Blade del backend, `SeoHelper`, `PrivacyController`, `composer.json`.
    2. **Paleta y splash**: tokens `AppColors.brand*` Pharma (#1E2A5A, #0F4C5C, #56C7B8, #A8DCCB, #F5F7FA, #C7CFD9, #142033, #F2A65A) + alias legacy temporales. Tema light/dark con Plus Jakarta Sans. Splash actualizado a colores fríos.
    3. **Refactor dominio backend**:
        - Editado `create_products_table` con campos farmacéuticos (active_ingredient, dosage_form, concentration, presentation, manufacturer, health_registry INHRR, barcode, atc_code, requires_prescription, prescription_type, controlled_substance, cold_chain).
        - Editado `create_commerces_table` con `pharmacist_in_charge_profile_id`, `health_permit_number`, `health_permit_expires_at`, `night_shift_open`.
        - Editado `create_orders_table` con estado nuevo `pending_prescription_validation`, columnas `requires_prescription`, `prescription_id`, `prescription_validated_at`, `cold_chain_required`.
        - Eliminadas migraciones, factories, seeders y modelos `product_extras` / `product_preferences`.
        - Añadidas migraciones nuevas: `medicine_lots`, `pharmacist_profiles`, `prescriptions`.
        - Añadidos modelos `MedicineLot`, `Prescription`, `PharmacistProfile`. `Product`, `Order`, `Commerce` actualizados con nuevos campos y relaciones.
        - Reescrito `RoleSeeder` (rol `pharmacist`), `BusinessTypeSeeder`, `CategorySeeder` con catálogo farmacéutico.
    4. **Controllers y servicios backend**:
        - `OrderStateMachineService` con estado `pending_prescription_validation` y rol `pharmacist`.
        - `PrescriptionService` (upload, approve, reject, expirePending) y eventos broadcast `PrescriptionUploaded`, `PrescriptionValidated`, `PrescriptionRejected`.
        - Form Requests `StorePrescriptionRequest`, `RejectPrescriptionRequest`.
        - Controllers nuevos: `Buyer/PrescriptionController`, `Pharmacist/PrescriptionController`, `Pharmacist/DashboardController`, `Buyer/PharmacyController`.
        - `Buyer/RestaurantController` y `App\Services\RestaurantService` quedan como shim deprecado de `PharmacyController` y `PharmacyService` (alias `/api/buyer/restaurants` sigue funcionando).
        - `routes/api/pharmacist.php` registrado en `routes/api.php`.
        - `CartService` expone flags Rx/cold_chain en respuesta.
        - `config/zonix.php` con sección `pharma` (block*rx_without_prescription, prescription_validation_ttl_minutes, disallow_promotions_on_rx, require_cold_chain_handling) y `.env.example` con variables `ZONIX_PHARMA*\*`.
    5. **Refactor dominio frontend**: modelo `Product` extendido con campos farmacéuticos, modelos nuevos `Prescription` y `MedicineLot`, `CartItem` con flags Rx/cold_chain, `CartService` expone `requiresPrescription` / `prescriptionRequiredItems` / `coldChainRequired`. Modelo `Restaurant` mantenido como `typedef Pharmacy` para compatibilidad. Servicio `PrescriptionService` y registro en `MultiProvider`.
    6. **UI frontend**: pantallas nuevas `PrescriptionUploadPage`, `MyPrescriptionsPage`, `PharmacistDashboardPage`, `PendingValidationsPage`, `ValidationDetailPage`. Parser de QR `StorefrontQrParser` actualizado a `zonix://pharmacy/{id}` con compatibilidad legacy `zonix://restaurant/{id}`.
    7. **Documentación**: `docs/BRAND_ZONIX_PHARMA.md`, `docs/PLAN_RX_VALIDATION.md`, `docs/PLAN_REGULATORIO_PHARMA_VE.md`, `docs/audits/MIGRACION_EATS_PHARMA.md`. AGENTS.md y .cursorrules de ambos repos reescritos. Skills nuevas `zonix-prescriptions` y `zonix-medicine-catalog`.
    8. **Tests añadidos**:
        - Backend: `tests/Feature/PharmacyControllerTest.php`, `tests/Feature/PrescriptionFlowTest.php`, `tests/Unit/PrescriptionModelTest.php`, `tests/Unit/MedicineLotModelTest.php`. `tests/Feature/StorefrontLinkTest.php` actualizado a `zonix://pharmacy/`.
        - Frontend: `test/features/utils/storefront_qr_pharmacy_test.dart`, `test/models/prescription_model_test.dart`, `test/models/medicine_lot_model_test.dart`. `test/models/product_model_test.dart` y `test/models/cart_item_test.dart` actualizados con campos Pharma.
- **Áreas tocadas:** branding, paleta, modelo de datos, controllers, rutas, servicios, eventos, configuración, documentación, skills y tests. Detalle exhaustivo en [MIGRACION_EATS_PHARMA.md](audits/MIGRACION_EATS_PHARMA.md).
- **Próximos pasos sugeridos:**
    1. Correr `php artisan migrate:fresh --seed` con BD destino lista (consolida schema Pharma).
    2. Ejecutar `php artisan test` y `flutter test` + `flutter analyze` para confirmar que la suite sigue verde.
    3. Reemplazar `android/app/google-services.json` y `ios/Runner/GoogleService-Info.plist` con un proyecto Firebase nuevo `zonix-pharma`.
    4. Crear app Pusher dedicada Pharma y actualizar `.env`.
    5. Generar credenciales OAuth Google + Maps para `com.zonix.pharma`.
    6. Reemplazar logos en `assets/images/logo_login.png`, `splash_logo*.png`, `onboarding_pharma*.png` con la lámina de marca y regenerar app icon (`flutter_launcher_icons`).
    7. Implementar banners de "Requiere receta médica" en `cart_page.dart`, `checkout_page.dart` y badge en `product_detail_page.dart` y cards de `restaurants_page.dart` (consumiendo `cartService.requiresPrescription` y `product.requiresPrescription`).
    8. Build APK debug + smoke OTC (carrito sin Rx) y smoke Rx (carrito con Rx → bloqueo → upload → aprobación → checkout).

### Decisiones pendientes de operación (no de código)

- Crear proyecto Firebase Pharma y reemplazar credenciales.
- Comprar dominio `zonixpharma.com` y configurar DNS.
- Verificar farmacéuticos colegiados y permisos sanitarios antes del go-live.
- Definir DPO y procedimiento de incidentes (Ley Datos Personales VE 2025).

---

### Histórico (sesiones anteriores)

> El histórico Eats se conserva como referencia pero ya no aplica a este repo
> tras el fork destructivo. Para ver el histórico Eats consultar el repo
> original Zonix Eats.
