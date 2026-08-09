---
name: zonix-legal-contracts-ve
description: Revisión checklist de contratos VE (marco farmacia B2B, SAFE, laboral). Salida [PENDIENTE abogado]. Invocar zonix-empresa-ve y zonix-regulatory-ve primero.
metadata:
  auto_invoke: "Revisar contrato marco farmacia / SAFE / laboral (checklist)"
---
# zonix-legal-contracts-ve

Skill para **preparar revisión** de documentos legales de Zonix Pharma en Venezuela. Patrones inspirados en [lawvable/awesome-legal-skills](https://github.com/lawvable/awesome-legal-skills) (Corporate, Commercial, Employment, Compliance) — **no sustituye** abogado ni asesor farmacéutico.

## Cuándo aplicar

- Borrador o revisión de **contrato marco** con farmacia afiliada.
- Checklist pre-firma SAFE o anexos laborales del piloto.
- Comparar versiones de T&C / privacidad (lente; abogado valida texto final).

## Obligatorio antes

1. `zonix-startup-context` — tiers SAFE/cap.
2. [ESTRUCTURA_LEGAL_Y_EQUITY.md](../../docs/Lanzamiento/ESTRUCTURA_LEGAL_Y_EQUITY.md)
3. [PROPUESTA_VALOR_CLIENTE_B2B.md](../../docs/Lanzamiento/PROPUESTA_VALOR_CLIENTE_B2B.md)
4. [PLAN_MODULO_OPERATIVO_CLAVE.md](../../docs/Lanzamiento/PLAN_MODULO_OPERATIVO_CLAVE.md) §14 (datos salud)

## Checklist contrato marco farmacia (B2B)

| Ítem | Pregunta para abogado | Agente marca |
|------|----------------------|--------------|
| Partes | RIF, representación, domicilio VE correctos | `[PENDIENTE abogado]` |
| Objeto | Marketplace digital; farmacia aporta farmacéutico colegiado | OK pack |
| Datos / recetas | Quién es responsable de tratamiento; retención; MPPS | `[PENDIENTE abogado]` + `zonix-regulatory-ve` |
| Pagos | Paciente paga a farmacia; Zonix no custodia fondos | `zonix-payments` / PLAN_METODOS_PAGO |
| Comisiones | Cuota + fee GMV alineado a PROPUESTA_VALOR | `zonix-financial-model` |
| Responsabilidad | Límites; productos Rx; cadena frío si aplica | `[PENDIENTE abogado]` |
| Terminación | Causas, preaviso, datos post-baja | `[PENDIENTE abogado]` |
| Propiedad intelectual | Panel, marca Zonix, contenidos | `[PENDIENTE abogado]` |

## Checklist SAFE (revisión con abogado)

Desde `zonix-startup-context` — no regenerar caps:

- Cap post-money coherente con tier (600k / 650k / 720k).
- Conversión, pro-rata, M&A — redacción no engañosa (ver ESTRUCTURA § FAQ).
- Jurisdicción y ley aplicable VE.

## Checklist laboral piloto

Roles: Co-CEO, Sales ×4, CS, Marketing, Coordinador logística (ver BRIEF).

- Tipo contrato (laboral vs honorarios).
- Confidencialidad y datos personales empleados.
- `[PENDIENTE abogado]` política local VE.

## Gobernanza / pacto socios (checklist genérico `[CH-ref]` → VE)

Canon: [EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md](../../docs/audits/EXTRACT_PDFS_DOCUMENTOS_KEEP_2026-08.md) §3. **No** copiar artículos suizos.

| Ítem | Pregunta | Agente |
|------|----------|--------|
| Roles | ¿Quién firma banco/contratos farmacia vs quién es solo socio? | Marcar en pacto / acta |
| Conflictos | ¿Socio o advisor vinculado a farmacia piloto? | Política declaración |
| Información | ¿Cadencia informe a inversor (KPIs, burn)? | Anexo SAFE / side letter |
| Documentos | ¿Estatutos C.A. + pacto socios + cap table actualizados? | Checklist pre-firma |

**Security gate (Founder's Playbook — overlay):** review **humano** de seguridad/datos/Rx antes de usuarios reales; AI scan ≠ compliance. Mapear a marco VE — `[PENDIENTE asesor]` si aplica.

Salida: `[PENDIENTE abogado]` — no redactar cláusulas vinculantes.

## Salida del agente

```markdown
## Revisión legal [tipo documento]
- Documento: ...
- Checklist: X/Y ítems con borrador interno OK
- Bloqueos: [PENDIENTE abogado] ...
- Bloqueos regulatorios: [PENDIENTE asesor RA] ...
```

## Reglas

1. **No redactar** cláusulas vinculantes ni plazos legales inventados.
2. **No citar** MPPS/INHRR como dictamen; usar `zonix-regulatory-ve`.
3. Comparación de versiones: marcar cambios; no asumir que el agente «aprueba» legalmente.

## Skills relacionadas

- `zonix-empresa-ve`
- `zonix-regulatory-ve`
- `zonix-b2b-sales`
- `zonix-investor-materials` (SAFE en data room)
