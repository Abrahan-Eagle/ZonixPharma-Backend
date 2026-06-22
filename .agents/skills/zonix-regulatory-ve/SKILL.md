---
name: zonix-regulatory-ve
description: Marco regulatorio Venezuela Zonix Pharma — MPPS, INHRR, Rx, farmacovigilancia, copy salud. Lente para docs Lanzamiento y producto. No dictamen legal; citar PLAN_REGULATORIO o [PENDIENTE].
metadata:
  auto_invoke: "Copy regulatorio / Rx en documentos"
---
# zonix-regulatory-ve

Lente regulatoria para marketplace farmacéutico **Venezuela**. Inspirado en [cs-quality-regulatory](https://github.com/alirezarezvani/claude-skills/blob/main/agents/ra-qm-team/cs-quality-regulatory.md) (ideas ISO/MDR), **no** HIPAA US. Fuente canónica: [docs/PLAN_REGULATORIO_PHARMA_VE.md](../../docs/PLAN_REGULATORIO_PHARMA_VE.md).

## Cuándo aplicar

- Redactar o auditar copy en pack Lanzamiento, BRAND, propuestas B2B/B2C.
- Revisar flujos Rx, controlados, cadena de frío, publicidad medicamentos.
- Due diligence inversor — sección regulación (con asesor humano).

## Cuándo NO usar sola

- Constitución empresa, SAFE, laboral → abogado + `zonix-lanzamiento-roles`.
- Cálculos fiscales → contador.
- Dictamen vinculante MPPS/INHRR → **asesor regulatorio farmacéutico externo**.

## Marco (resumen — ampliar en PLAN_REGULATORIO)

| Entidad / norma | Rol en Zonix |
|-----------------|--------------|
| **MPPS** | Rector sanitario; permisos establecimiento |
| **INHRR** | Registro sanitario productos; vigilancia |
| **Ley Ejercicio Farmacia** | Farmacéutico colegiado responsable en local |
| **Ley Medicamentos (2000)** | Registro, distribución, publicidad |
| **SENIAT** | Facturación digital (contador) |
| **Ley Protección Datos (2025)** | Recetas, alergias — DPO lens + abogado |

## Reglas de copy (Do / Don't)

### Do

- Información farmacéutica objetiva (principio activo, presentación, registro sanitario).
- «Requiere receta médica» / «Validación por farmacéutico colegiado».
- Advertencias cadena de frío y sustancias controladas.
- Remitir al establecimiento farmacia para dispensación.

### Don't

- Prometer curación, comparar eficacia vs competidor sin fuente aprobada.
- Publicidad abierta de Rx al público general (código ética farmacéutica).
- Descuentos en productos Rx si `disallow_promotions_on_rx` (config).
- Inventar números de registro MPPS/INHRR — usar `[PENDIENTE verificación]`.

## Operación marketplace (checklist agente)

- [ ] Cada `commerce` Farmacia: RIF, permiso sanitario, datos farmacéutico colegiado (PLAN_REGULATORIO §2)
- [ ] Rx: validación `pharmacist` antes de `pending_payment`
- [ ] Controlados: preferir pickup; identidad paciente según política asesor
- [ ] `cold_chain`: restricción delivery sin equipo
- [ ] Zonix **no** almacena ni despacha medicamentos — facilitador digital

## Farmacovigilancia (piloto)

Referencia operativa: [PLAN_MODULO_OPERATIVO_CLAVE.md](../../docs/Lanzamiento/PLAN_MODULO_OPERATIVO_CLAVE.md) §11.

- Canal de reporte de eventos adversos → asesor + procedimiento `[PENDIENTE]`
- No usar terminología MedDRA en copy usuario final sin capacitación

## Privacidad datos de salud

- Recetas y CI: minimización, cifrado, retención — PLAN_MODULO §14 + ESTRUCTURA §4.4
- Ideas de audit log desde lentes HIPAA **solo** como checklist técnico, no cumplimiento US

## Salida del agente

1. Lista de frases de riesgo en documento revisado.
2. Sugerencia de reemplazo conforme PLAN_REGULATORIO.
3. Items `[PENDIENTE asesor farmacéutico]` explícitos.

## Skills relacionadas

- `zonix-prescriptions` — implementación API/UI Rx
- `zonix-lanzamiento-roles` — RA + Medical Affairs
- `security` / `security-requirement-extraction` — datos sensibles
- `zonix-investor-materials` — sección regulación data room
