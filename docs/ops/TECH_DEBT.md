# Deuda técnica / operación — Zonix Pharma

Registro de ítems aplazados fuera del código de producto (no bloquean el MVP de auditoría).

## Firebase / Android

- **`google-services.json`**: no versionar credenciales de producción; colocar el archivo solo en entornos de build/CI y en máquinas de desarrollo según política interna. Pendiente: proyecto Firebase dedicado **Zonix Pharma** y descarga del JSON para flavor `release`.
- **Keystore de firma release**: generar y custodiar fuera del repo; configurar `key.properties` / CI sin commitear secretos.

## iOS

- **Push / capacidades**: revisar provisioning + APNs cuando el bundle `com.zonix.pharma` esté en App Store Connect.

## QA

- Smoke E2E manual post-deploy: flujo OTC, flujo Rx (`pending_prescription_validation` → subida → `pending_payment` → comprobante), carrito solo cadena de frío (solo pickup).
