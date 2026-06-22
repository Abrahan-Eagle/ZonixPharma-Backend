# Guía de Mantenimiento de Skills y Coherencia — Zonix Pharma

Esta guía define las reglas para mantener la integridad y coherencia del sistema de documentación y lógica procedimental de **Zonix Pharma**. Es de lectura obligatoria para cualquier IA o humano que desee modificar las **Custom Skills**.

---

## 1. El Sistema de Skills (Por qué existe)

Las skills (`.agents/skills/*/SKILL.md`) no son simple documentación; son **guías procedimentales** para que la IA actúe como un experto especializado. Transforman a una IA genérica en un "Zonix Engineer" que conoce recetas Rx, cadena de frío, pagos VE y el sistema de diseño Pharma sin redescubrirlos cada vez.

---

## 2. Capas de skills y sync global (Paso C — jarvis-skills-library)

| Capa | Patrón | Ejemplos |
|------|--------|----------|
| 0 Máquina | `~/.cursor/skills/` vía `install.sh` | `jarvis-core`, `sdd-router`, `project-bootstrap-ops` |
| 0 Global-sync | `.global-sync-manifest` | `brainstorming-ops`, `verification-before-completion` |
| 1 Orquestación | `jarvis-*` | `jarvis-core`, `jarvis-experts` |
| 2 Proceso | `*-ops` | `task-pipeline-ops`, `git-guardrails-ops` |
| 3 Dominio Zonix | `zonix-*` | **solo locales** — nunca en manifest |
| 5 Solo local | no en manifest | `documentar-avances`, `ui-ux-pro-max` (ZONIX.md), `speckit-git-*` |

**Onboarding máquina + repo:**

```bash
# Capa 0 (máquina) — tras git pull en jarvis-skills-library
bash /var/www/html/proyectos/AIPP/jarvis-skills-library/scripts/install.sh --all

# Capa 1 (este repo) — tras pull en library
JARVIS_SKILLS_LIBRARY=/var/www/html/proyectos/AIPP/jarvis-skills-library \
  ./scripts/sync-global-skills-from-library.sh
JARVIS_SKILLS_LIBRARY=/var/www/html/proyectos/AIPP/jarvis-skills-library \
  ./scripts/check-global-skills-sync.sh
python3 .agents/skills/sync.sh

# Verificación bootstrap
bash $JARVIS_SKILLS_LIBRARY/scripts/init-jarvis.sh --min c
```

- **passthrough:** `SKILL.md` idéntico al canónico.
- **overlay:** editar solo `OVERLAY.md`; no parchear a mano el cuerpo canónico en `SKILL.md`.
- **`zonix-*`:** nunca en manifest — solo locales.
- **Spec Kit:** skills core en `~/.cursor/skills/` (`install.sh --all`); git hooks en `.agents/skills/speckit-git-*`. `.cursor/skills/` gitignored — ver [docs/ZONIX_JARVIS_INTEGRATION.md](docs/ZONIX_JARVIS_INTEGRATION.md).

Doc integración: [docs/ZONIX_JARVIS_INTEGRATION.md](docs/ZONIX_JARVIS_INTEGRATION.md) · Library: `jarvis-skills-library/docs/ZONIX_INTEGRATION.md`.

**CI:** workflow `.github/workflows/global-skills-sync-check.yml` en PR/push que toque `.agents/skills/`.

---

## 3. Precedencia de diseño y branding (obligatoria)

Al tocar UI, copy o CSS, aplicar este orden **sin excepción**:

```
1. docs/BRAND_ZONIX_PHARMA.md (canon de marca)
2. zonix-web-design (Blade/CSS) | zonix-ui-design (Flutter, Front)
3. zonix-brand-ops | zonix-design-enforcer
4. ui-ux-pro-max | frontend-design (genéricas — NO overridean tokens)
5. enhance-prompt / design-md (solo Stitch, no Flutter diario)
```

**Regla:** Las skills genéricas (`ui-ux-pro-max`, `frontend-design`) son **secundarias**. Nunca introducir HEX, gradientes purple AI-slop ni paletas fuera de tokens `brand*` / variables CSS en `zonix.css`.

Overlay Zonix para `ui-ux-pro-max`: [.agents/skills/ui-ux-pro-max/ZONIX.md](.agents/skills/ui-ux-pro-max/ZONIX.md) (local capa 5; Front usa `OVERLAY.md` vía manifest).

---

## 4. Terminología Estándar de Roles

Cualquier cambio en código o docs **DEBE** usar la nomenclatura Pharma (7 roles). Ver `AGENTS.md` sección Roles y rutas.

| Código en BD | Nombre Estándar |
| ------------ | --------------- |
| `users` | **Buyer** |
| `commerce` | **Pharmacy** |
| `pharmacist` | **Pharmacist** |
| `delivery_company` | **Delivery Company** |
| `delivery_agent` | **Delivery Agent** |
| `delivery` | **Delivery** (autónomo) |
| `admin` | **Admin** |

---

## 5. Reglas de Oro para Actualizaciones

### 4.1. Auditoría Previa (Mandatorio para IAs)

Antes de proponer un cambio en una skill o en `README.md`, la IA debe:

1. Leer skills custom afectadas y `AGENTS.md`.
2. Identificar impacto cross-dominio (ej: órdenes Rx → `zonix-order-lifecycle`, `zonix-prescriptions`).
3. Documentar impacto breve si el cambio es significativo.

### 4.2. Sincronización Cross-Project

Zonix Pharma se divide en `ZonixPharma-Backend` y `ZonixPharma-Front`.

- Skills de lógica compartida (ej: `zonix-order-lifecycle`) deben mantenerse alineadas en ambos repos.
- **`ui-ux-pro-max`:** actualizar con `uipro update --ai cursor` en cada repo; copia canónica Jarvis en `.agents/skills/ui-ux-pro-max/`; preservar `ZONIX.md` local tras updates.

### 4.3. Cross-References

Toda skill debe referenciar a otras si hay solapamiento.

---

## 6. Infraestructura Crítica (Inamovible)

1. **NO WebSockets:** Pusher Channels + FCM.
2. **Migraciones:** editar `create_*` en local; no acumular `add_*` sueltos (ver `.cursorrules`).
3. **Rx / pharma:** ver `docs/PLAN_RX_VALIDATION.md` y `config/zonix.php` sección `pharma`.

---

## 7. Cómo Hacer Cambios (IA Flow)

1. **Analizar:** Leer `AGENTS.md` y este archivo.
2. **Proponer:** Plan o diff acotado; esperar OK usuario en cambios de código.
3. **Ejecutar:** Aplicar cambios; subir versión de skill si aplica.
4. **Verificar:** Tests del dominio (`php artisan test`, `flutter test` según repo).

---

**Última actualización:** 21 junio 2026  
**Zonix Team**
