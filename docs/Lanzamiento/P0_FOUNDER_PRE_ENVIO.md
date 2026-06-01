# Checklist P0 — Founder antes de enviar pack a especialistas

> **Última actualización:** 1 junio 2026.  
> Completar **solo el founder** (la IA no inventa estos datos). Registro maestro: [REGISTRO_PENDIENTES_PACK.md](REGISTRO_PENDIENTES_PACK.md) § P0.

---

## Mínimo para ángel / especialistas (cerrar estos 3)

| ID | Ítem | Hecho | Evidencia / dónde volcar |
|----|------|:-----:|-------------------------|
| **P0-06** | Re-ejecutar tests backend y actualizar snapshot | [x] | VOLCADO §1.2 — **1 jun 2026**, commit **17f208e**, 399 tests OK *(re-ejecutar antes de cada reunión)* |
| **P0-02** | **% dedicación** Zonix Pharma vs CETIAC/otros (por escrito) | [ ] | VOLCADO §1 fila «Compromiso tiempo completo» |
| **P0-04** | **Aprobación founder** de este pack para envío externo | [ ] | Marcar fecha abajo § Aprobación |

### Comando P0-06 (copiar salida a VOLCADO §1.2)

```bash
cd /var/www/html/proyectos/AIPP/DESARROLLO/ZonixPharma/ZonixPharma-Backend
git rev-parse --short HEAD
php artisan test --parallel 2>&1 | tail -20
```

| Campo VOLCADO §1.2 | Valor (rellenar tras corrida) |
|--------------------|-------------------------------|
| Fecha corrida | **1 junio 2026** |
| Commit (short) | **17f208e** |
| Tests / assertions | **399 / 1649** |
| OK / fallos | **OK** |

---

## Si el destinatario es fondo / family office (cerrar también)

| ID | Ítem | Hecho |
|----|------|:-----:|
| P0-01 | URL GitHub u org, o acceso repo bajo NDA | [ ] |
| P0-03 | 2–3 referencias profesionales con permiso | [ ] |
| P0-05 | Demo en vivo — fecha programada | [ ] |
| P0-07 | NDA + data room cerrado | [ ] |
| P0-08 | Métricas tracción (solo si se citan en pitch) | [ ] |

---

## Plantilla % dedicación (P0-02 — copiar a VOLCADO §1)

> Declaro que mi dedicación a **Zonix Pharma** es de **[___]%** del tiempo laboral semanal, y el resto se distribuye en: **[CETIAC / otros — detallar]**. Compromiso de priorizar Zonix Pharma para hitos T+0 → Day-D del piloto.

---

## Aprobación pack (P0-04)

| Campo | Valor |
|-------|--------|
| Founder | Abrahan Pulido |
| Fecha aprobación envío externo | [PENDIENTE — firmar al enviar zip/Drive] |
| Versión pack | jun 2026 (post auditoría 360 + marketplace G3–G7) |
| Alcance aprobado | Data room según [DATA_ROOM_ZIP_GUIA.md](DATA_ROOM_ZIP_GUIA.md) |
| Excluido de envío | `_auditorias/`, CUESTIONARIO, REGISTRO (interno) |

**Firma / OK explícito:** [PENDIENTE]

---

## Después de marcar P0 mínimo

1. Generar zip: [DATA_ROOM_ZIP_GUIA.md](DATA_ROOM_ZIP_GUIA.md)  
2. Subir a Drive con [CARTA_CONTEXTO_ESPECIALISTAS.md](CARTA_CONTEXTO_ESPECIALISTAS.md) como primera página  
3. Abogado/asesor: solo [BRIEF_DICTAMEN_P3_ABOGADO_ASESOR.md](BRIEF_DICTAMEN_P3_ABOGADO_ASESOR.md) + docs §3 de ese brief
