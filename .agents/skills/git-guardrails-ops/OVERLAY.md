## Overlay ZonixPharma Backend

### Flujo ramas Zonix

| Rama | Destino |
|------|---------|
| `dev` | staging / test (p. ej. pharma.aiblockweb.com según deploy) |
| `main` | producción (`zonixpharma.com`) |

**Flujo:** `dev` → probar → merge `main` solo con orden explícita.

### Bloqueados sin OK explícito

`git push`, merge a `main`, `--force`, `git reset --hard`, `migrate:fresh` en entornos compartidos.

### Hook opcional

`.githooks/pre-push` — activación manual vía `git config core.hooksPath .githooks`.

Checklist push: orden usuario, rama correcta, tests pasaron, migraciones documentadas.
