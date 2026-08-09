# Forense multi-LLM — `docs/` ZonixPharma-Backend (9 ago 2026)

> Alcance: Canon + Ingeniería + Lanzamiento + Inversionistas + Pack.  
> Método: fan-out lotes A–F (readonly) → juez consolidado.  
> **No inventar** P10/P90 ni cifras fuera Excel v4.

## LLMs

| Rol | Modelo | Notas |
|-----|--------|--------|
| Smoke activas | `composer-2.5-fast`, `cursor-grok-4.5-high` | Usables |
| Smoke inactivas | Gemini flash/pro, GPT mini/5.5/sol-max | `api_limit` |
| Map A/C/E | Grok 4.5 | |
| Map B/D/F | Composer | |
| Juez | Grok 4.5 | sol-max no disponible; confianza juez **4/5** |

## Veredicto juez (consolidado)

| Acción | Resultado |
|--------|-----------|
| **DELETE ola 4** | **Ninguno seguro** |
| **KEEP** | `Lanzamiento/RESUMEN_ALIADO_*` = SoT edición; Pack `md/01` espejo; Pack `docx/` envío |
| **MOVE candidato** | Spillover `Inversionistas/500-latam/` (DEMO_PRODUCTO_RX, piloto, MVT, prep, guion) → `Lanzamiento/`; opcional `PAQUETE_FORM_VELA` |
| **TRIM P1** | Pack `manifest.yaml` (111988→237.412); `manifest_inversor.yaml`; `active_context`; links rotos post-ola 3; lexicon Eats en `product/`; scores CRM stale |
| **NO TOCAR** | BRIEF, finanzas/Excel, Pack completo (contenido), CRM Inversionistas, `ROLES_SKILLS`, BRAND/Rx/regulatorio, Spec Kit / `roles_matrix` |

## Post-olas 1–3 (contexto)

- Ola 1: eliminado `docs/archive/` + basura local (`ef2c079`).
- Ola 2: `agents/`, snapshots audits, forenses zonix (`b9e8784`).
- Ola 3: raíz canon + moves JARVIS/WORKSPACE/MIGRACION; sin `.venv` en `_tools` (`74a2db1`).

## Aplicado tras OK founder (esta sesión)

1. Informe escrito (este archivo).
2. **TRIM P1:** anclas Pack `manifest.yaml` → Excel v4; `manifest_inversor.yaml` paths rotos + fecha; cabecera `active_context` + canon financiero + diario forense comprimido.
3. **MOVE 500-latam:** no aplicado (queda candidato).
4. Push commits docs: según OK del founder en la misma respuesta.

## Canon financiero (referencia)

SAFE **237.412** · Day-D **187.152** · equity **~39,57%** · %GMV **8/7/5** · ARPF **~52** · LTV/CAC **~7,5x** · Esc.1 cash M12 **246.231**.
