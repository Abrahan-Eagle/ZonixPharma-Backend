# Demo producto Rx — 3–5 min (post-rechazo 500)

> Guion de **grabación de pantalla** del happy path. Distinto del video caras 2 min ([GUION_VIDEO_2MIN.md](GUION_VIDEO_2MIN.md)).  
> Objetivo: evidencia consumible de “MVP/demo funcional” para inversores (500 y otros).  
> **No enviar** a 500 hasta [GATE_RECONTACTO_500.md](GATE_RECONTACTO_500.md) verde.  
> Fecha plantilla: 7 agosto 2026.

---

## Setup

| Item | Valor |
|------|--------|
| Duración | **3:00–5:00** |
| Formato | Screen record (OBS / SimpleScreenRecorder / teléfono con emulador) + voz en off opcional |
| Staging API | `https://pharma.aiblockweb.com` |
| Landing | `https://zonixpharma.com` |
| App | Flutter debug/release apuntando a staging **o** APK demo |
| Seed | `php artisan migrate:refresh --seed` en staging **solo** si el founder autoriza reset demo |
| Roles a mostrar | Buyer (paciente) · Pharmacist · Commerce (farmacia) |

### Cuentas demo (completar al grabar)

| Rol | Email / user | Notas |
|-----|--------------|-------|
| Buyer | | Pedido Rx |
| Pharmacist | | Aprobar receta |
| Commerce | | Ver orden / catálogo |

---

## Guion de pantalla (orden fijo)

| Min | Qué mostrar | Decir (voz opcional) |
|-----|-------------|----------------------|
| 0:00–0:20 | Logo / landing zonixpharma.com | “Zonix Pharma — marketplace de farmacia en Venezuela” |
| 0:20–1:20 | Buyer: catálogo → carrito con ítem Rx → checkout | “El paciente pide; si requiere receta, el pedido queda pendiente de validación” |
| 1:20–2:20 | Buyer: subir foto/PDF de receta | “Sube la receta desde el teléfono” |
| 2:20–3:20 | Pharmacist: cola pendiente → aprobar | “Farmacéutico colegiado valida en minutos” |
| 3:20–4:20 | Buyer/commerce: estado `pending_payment` / orden en panel farmacia | “Tras validar, el paciente paga; la farmacia despacha” |
| 4:20–5:00 | Cierre: mapa de roles (paciente–farmacia–farmacéutico) | “Producto vivo en staging; piloto Valencia en curso” |

**No decir en cámara:** montos de raise, % equity, nombres de fondos, “ya estamos en toda Venezuela” sin tracción.

---

## Checklist pre-grabación

- [ ] Staging responde (`/api/pharma-policy` OK)
- [ ] Flujo Rx permisivo o estricto según demo acordada
- [ ] Datos seed listos (1 farmacia, 1 SKU Rx, 1 pharmacist)
- [ ] Mic / sin notificaciones en pantalla
- [ ] Cronómetro ≤ 5:00

## Checklist post-grabación

- [ ] Subir a Drive o YouTube **no listado**
- [ ] Pegar URL en tabla abajo + [`NOTAS.md`](NOTAS.md)
- [ ] Opcional: 1 captura por bloque para deck

---

## Link del demo (pegar tras grabar)

| Campo | Valor |
|-------|--------|
| URL | **[PENDIENTE]** |
| Plataforma | Drive / YouTube |
| Fecha | |
| Duración | |

---

## Evidencias complementarias (adjuntar al update)

1. Staging: `https://pharma.aiblockweb.com`  
2. Smoke Rx doc: [`../../SMOKE_RX_E2E.md`](../../SMOKE_RX_E2E.md)  
3. Métricas piloto: [`PILOTO_FARMACIAS_VALENCIA.md`](PILOTO_FARMACIAS_VALENCIA.md) (cuando existan)

*Estado todo “demo-video”: artefacto listo para ejecución founder — grabación física pendiente de URL.*
