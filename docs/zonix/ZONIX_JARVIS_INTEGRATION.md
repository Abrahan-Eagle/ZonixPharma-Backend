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
# export JARVIS_SKILLS_LIBRARY=<ruta-clon-jarvis-skills-library>
bash "$JARVIS_SKILLS_LIBRARY/scripts/init-jarvis.sh" --min c
```

## Manifest por repo

| Repo | Skills en manifest | Overlay clave |
|------|-------------------|---------------|
| Backend | 48 (Laravel + ops) | `jarvis-core` — Spec Kit **activo**, dominio `zonix-*` |
| Front | 45 (Flutter + ui-router + ui-ux-pro-max) | `jarvis-core` — `ui-router` → `zonix-ui-design` → `ui-ux-pro-max` |

**No incluir en manifest:** skills `zonix-*`, `documentar-avances`, `speckit-*` (global `~/.cursor/skills/` vía `install.sh`), `speckit-git-*` (local `.agents/skills/`), Stitch/React (Front capa 5/6).

## Sync post-pull library

```bash
cd ZonixPharma-Backend   # o ZonixPharma-Front
# export JARVIS_SKILLS_LIBRARY=<ruta-clon-jarvis-skills-library>
JARVIS_SKILLS_LIBRARY="${JARVIS_SKILLS_LIBRARY:?set path to jarvis-skills-library}" \
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

## Fase 2 — completada (jun 2026)

- `.cursor/skills/` **no se versiona** (`.gitignore`); duplicados speckit/ui-ux eliminados del repo.
- **Spec Kit core:** `bash jarvis-skills-library/scripts/install.sh --all` → `~/.cursor/skills/speckit-*`.
- **Spec Kit git hooks:** `.agents/skills/speckit-git-*` (local capa 5).
- **ui-ux-pro-max:** canon Zonix unificado — Backend `ZONIX.md` + Front `OVERLAY.md` (scripts globales en `~/.cursor/skills/ui-ux-pro-max`).

Tras clonar el repo, onboarding máquina (funciona **desde cualquier directorio**):

```bash
# Capa 0 — skills globales (~/.cursor/skills/)
# export JARVIS_SKILLS_LIBRARY=<ruta-clon-jarvis-skills-library>
bash "$JARVIS_SKILLS_LIBRARY/scripts/install.sh" --all

# Opcional — integración Cursor local en .cursor/skills/ (gitignored; no versionar)
cd /path/to/ZonixPharma-Backend
specify init . --force --integration cursor-agent --script sh
```

Si **ya estás dentro** de `jarvis-skills-library`, usa `bash scripts/install.sh --all` (sin prefijo).

## Referencias

- [MAINTENANCE_SKILLS.md](../../MAINTENANCE_SKILLS.md)
- [docs/zonix/ZONIX_WORKSPACE.md](ZONIX_WORKSPACE.md)
- Library: `jarvis-skills-library/docs/ZONIX_INTEGRATION.md` (clon local de la library)
