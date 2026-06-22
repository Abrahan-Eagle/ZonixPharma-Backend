# Zonix Pharma — integración JARVIS (jarvis-skills-library)

Guía operativa para alinear **ZonixPharma-Backend** y **ZonixPharma-Front** con la library global, replicando el patrón CorralX Paso C.

## Arquitectura de capas

```text
Capa 0 — Máquina (~/.cursor/skills/)
  jarvis-skills-library/scripts/install.sh --all

Capa 1 — Repo (.agents/skills/)
  .global-sync-manifest → sync-global-skills-from-library.sh
  OVERLAY.md (producto) + zonix-* (solo locales)
```

## Comando de arranque

```bash
# Desde chat Cursor (repo Zonix abierto)
init jarvis

# Terminal — verificación mínima Paso C
bash /var/www/html/proyectos/AIPP/jarvis-skills-library/scripts/init-jarvis.sh --min c
```

## Manifest por repo

| Repo | Skills en manifest | Overlay clave |
|------|-------------------|---------------|
| Backend | 48 (Laravel + ops) | `jarvis-core` — Spec Kit **activo**, dominio `zonix-*` |
| Front | 45 (Flutter + ui-router + ui-ux-pro-max) | `jarvis-core` — `ui-router` → `zonix-ui-design` → `ui-ux-pro-max` |

**No incluir en manifest:** skills `zonix-*`, `documentar-avances`, `speckit-*` (`.cursor/skills/`), Stitch/React (Front capa 5/6).

## Sync post-pull library

```bash
cd ZonixPharma-Backend   # o ZonixPharma-Front
JARVIS_SKILLS_LIBRARY=/var/www/html/proyectos/AIPP/jarvis-skills-library \
  ./scripts/sync-global-skills-from-library.sh
./scripts/check-global-skills-sync.sh
python3 .agents/skills/sync.sh
```

## Panel de expertos (coexistencia acordada)

1. **`jarvis-experts`** — roster global, declaración `> Roles:`.
2. **`zonix-jarvis-subagents-map`** — routing regulatorio VE, Rx, B2B farmacias, pack Lanzamiento.
3. **`zonix-lanzamiento-roles`** — panel roles humanos pack inversor.

Precedencia detallada: `.agents/skills/jarvis-core/OVERLAY.md`.

## Spec Kit vs Lanzamiento

| Ámbito | Herramienta |
|--------|-------------|
| Features producto API+Flutter | `.specify/` + `speckit-*` + `zonix-*` |
| Pack inversor / `docs/Lanzamiento/` | `zonix-lanzamiento-docs` — **no** Spec Kit |

## Fase 2 (fuera de scope actual)

- Migrar/eliminar `.cursor/skills/` versionado (speckit, ui-ux duplicados).
- Unificar `ui-ux-pro-max/ZONIX.md` (Backend capa 5) con `OVERLAY.md` (Front manifest).

## Referencias

- [MAINTENANCE_SKILLS.md](../MAINTENANCE_SKILLS.md)
- [docs/ZONIX_WORKSPACE.md](ZONIX_WORKSPACE.md)
- Library: [jarvis-skills-library/docs/ZONIX_INTEGRATION.md](file:///var/www/html/proyectos/AIPP/jarvis-skills-library/docs/ZONIX_INTEGRATION.md)
