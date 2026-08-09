# Flujo de pago y orden (paso a paso)

> **Zonix Pharma** — términos *comprador* / *comercio* = paciente / farmacia. Plan de métodos y regulación: [../Lanzamiento/PLAN_METODOS_PAGO.md](../Lanzamiento/PLAN_METODOS_PAGO.md); Rx: [../PLAN_RX_VALIDATION.md](../PLAN_RX_VALIDATION.md); roles: [logica-pagos-por-rol.md](logica-pagos-por-rol.md).

Flujo acordado: desde el carrito hasta que la farmacia **prepara / dispensa** el pedido.

---

## Rama Rx (antes o junto al pago)

- Si el carrito tiene ítems con `requires_prescription`:
  - Por defecto (modo permisivo): al crear la orden puede entrar en **`pending_prescription_validation`** hasta que el farmacéutico colegiado apruebe la receta (TTL configurable).
  - En modo estricto (`block_rx_without_prescription`): el checkout exige `prescription_id` aprobada antes de pagar.
- Tras validación Rx OK → estado **`pending_payment`** (o equivalente) y continúa el flujo de comprobante abajo.
- Detalle: [PLAN_RX_VALIDATION.md](../PLAN_RX_VALIDATION.md).

---

## 1. Comprador: ir a pagar

- El comprador está en **su carrito**.
- Toca el botón **“Ir a pagar”** (o similar) para pasar al checkout.

---

## 2. Comprador: verificar y confirmar

- En **checkout** el comprador:
  - Verifica medicamentos / cantidades.
  - Elige si **pickup** o **delivery** (respetar restricciones de cadena de frío / controlados).
  - Aplica **cupón** si tiene uno (no aplicar descuentos a líneas Rx si la regla Pharma lo prohíbe).
  - **Confirma el pedido**.

---

## 3. Pedido creado → detalle del recibo

- Se crea la orden (OTC: a menudo **Pendiente de pago**; Rx: ver rama arriba).
- Modal “¡Pedido creado!” → **detalle del recibo**.

---

## 4. Detalle del recibo: esperar a la farmacia

- El comprador espera a que la farmacia **lea la orden** (ítems, notas, receta si aplica).
- En esta etapa **aún no** aparece el botón “Subir comprobante” (salvo flujo simplificado documentado en código).

---

## 5. Farmacia: revisar y aceptar para pago

- La **farmacia** ve los **medicamentos / productos** pedidos.
- Si **falta stock**, hay duda de posología o de receta, usa **chat** con el paciente.
- Si **todo está bien**, **acepta** (“Aprobar para pago”).
- A partir de ahí el paciente puede transferir/pagar y subir comprobante.

---

## 6. Comprador: subir comprobante

- Cuando la farmacia **ya aceptó**, aparece **“Subir comprobante”**.
- El comprador elige método (transferencia, pago móvil, etc.), referencia e imagen/PDF.

---

## 7. Farmacia: conciliar el pago

- Aviso de comprobante subido.
- Farmacia valida datos, referencia y archivo → **Validar** o **Rechazar** con motivo.

---

## 8. Farmacia: preparar / dispensar

- Con pago validado, la orden pasa a **Pagado** (o estado equivalente).
- La farmacia **prepara el pedido** / **dispensa** (estado tipo “En preparación” / “Listo para pickup/delivery”).
- Sigue: listo → envío o recogida → entregado.

---

## Resumen del orden

| Paso | Quién | Acción |
|------|-------|--------|
| Rx   | Comprador / farmacéutico | Subir/validar receta si aplica → salir de `pending_prescription_validation` |
| 1–2  | Comprador | Carrito → checkout → confirmar |
| 3–4  | App / comprador | Pedido creado → detalle recibo; espera farmacia |
| 5    | Farmacia | Revisar ítems; chat si falta stock; **aceptar** para pago |
| 6    | Comprador | **Subir comprobante** |
| 7    | Farmacia | **Validar** o rechazar pago |
| 8    | Farmacia | **Preparar / dispensar** el pedido |

---

**Última actualización:** Agosto 2026 (lexicon Pharma + rama Rx)
