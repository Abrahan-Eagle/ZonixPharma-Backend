# Plan regulatorio · Zonix Pharma Venezuela

> Documento de referencia para fundadores, legal y producto. Resume los
> requisitos básicos para operar un marketplace farmacéutico en Venezuela.
> No es asesoría legal vinculante; consultar abogado / contador / colegio
> farmacéutico antes del go-live.

## 1. Marco normativo de medicamentos en Venezuela

- **MPPS** (Ministerio del Poder Popular para la Salud): rector del sector
  farmacéutico. Otorga registro sanitario por producto a través del **INHRR**.
- **INHRR** (Instituto Nacional de Higiene "Rafael Rangel"): registro
  sanitario, vigilancia post-comercialización, control de calidad.
- **Ley del Ejercicio de la Farmacia**: define la figura del **farmacéutico
  colegiado responsable** y la obligatoriedad de su presencia en el
  establecimiento.
- **Ley de Medicamentos** (2000): regula registro, importación, distribución
  y publicidad de medicamentos.
- **SUNAGRO/SUNDEE**: precios regulados de medicamentos básicos y de
  consumo masivo.
- **SENIAT**: facturación digital obligatoria desde marzo 2026.
- **Ley de Protección de Datos Personales (2025)**: aplica a recetas y
  alergias del paciente.

## 2. Requisitos para una farmacia aliada

Antes de aprobar a un `Commerce` con `business_type = Farmacia`:

1. RIF activo del establecimiento.
2. Permiso sanitario del MPPS o sanidad municipal vigente.
3. Datos del **farmacéutico responsable colegiado**:
   - Nombre completo y cédula.
   - Número MPPS.
   - Número de colegiatura del Colegio de Farmacéuticos correspondiente.
   - Foto/escaneo del título profesional.
   - Fecha de vencimiento de la licencia.
4. Datos del establecimiento físico (dirección, geolocalización, horario,
   24h opcional).
5. Métodos de pago habilitados (pago móvil C2P, transferencia bancaria
   nacional, Zelle, Binance Pay, efectivo, tarjeta — según preferencia del
   establecimiento; Zonix Pharma NO actúa como intermediario de pagos).

## 3. Restricciones operativas relevantes

- **Publicidad**: el código de ética farmacéutica restringe la publicidad
  abierta de medicamentos Rx al público general. La app puede mostrar
  información farmacéutica (principio activo, presentación, registro
  sanitario) pero NO debe inducir uso fuera de prescripción.
- **Precios**: para medicamentos básicos regulados, mostrar precio máximo
  de venta al público (PMVP) si aplica.
- **Sustancias controladas**: receta retenida obligatoria. La entrega a
  domicilio de controlados puede requerir verificación de identidad
  presencial del paciente; Zonix Pharma sugiere por defecto el modo
  `pickup` cuando hay controlados en el carrito.
- **Cadena de frío**: insulinas, biológicos y vacunas requieren
  refrigeración 2–8°C. La app marca `cold_chain = true` y restringe modos
  de delivery sin equipo adecuado.
- **Promociones**: no aplicar descuentos a productos Rx (ver
  `ZONIX_PHARMA_DISALLOW_PROMOTIONS_ON_RX`).

## 4. Flujo de receta médica (Rx)

Ver [PLAN_RX_VALIDATION.md](PLAN_RX_VALIDATION.md) para detalles técnicos.

Resumen legal:

- La receta debe ser legible, contener nombre y datos del paciente, fecha,
  diagnóstico (cuando aplica), medicamento, dosis, vía y duración.
- La firma del médico (con MPPS) debe ser visible.
- Para receta retenida, en la práctica se necesita el original físico al
  despachar; la app puede pre-validar pero la entrega del controlado
  requiere recoger el original (preferencia: pickup).

## 5. Datos del paciente

- La receta y los datos de alergias son **datos sensibles de salud**.
- Cifrado en disco, acceso limitado al farmacéutico despachador y al
  administrador, retención limitada (default 90 días tras cerrar el
  pedido), audit log de accesos.
- Consentimiento explícito del paciente al subir información médica
  (checkbox en onboarding y en pantalla de upload).

### 5.1 Auditoría puntual · implementación vs §5 (abril 2026)

Revisión técnica no legal: estado del código y configuración frente a los requisitos del §5.

| Requisito (§5) | Estado | Evidencia / notas |
| ---------------- | ------ | ----------------- |
| Acceso limitado (paciente) | **Cumple** | Buyer: `PrescriptionController` filtra por `patient_profile_id` del perfil autenticado (`index`, `show`, `destroy`). |
| Acceso limitado (farmacéutico despachador) | **Cumple** | `Pharmacist/PrescriptionController`: `canAccess` acota por `commerce_id` vinculado al farmacéutico (`commerceIdsForPharmacist`). Rutas con `role:pharmacist`. |
| Cifrado en disco (recetas) | **Brecha** | Archivos en `Storage::disk('local')` → `prescriptions/` (`PrescriptionController::store`). No hay capa explícita de cifrado de blobs sensibles documentada en servicio; depender de cifrado del volumen del servidor (LUKS / cloud disk encryption) es decisión de ops, no sustituto de política app-level si el plan exige “cifrado en disco” como requisito de producto. **Pendiente:** política `FILESYSTEM_DISK` + SSE-KMS o paquete de cifrado por archivo para objetos de receta. |
| Retención limitada (p. ej. 90 días post-cierre) | **Parcial** | TTL de validación en `config/zonix.php` (`prescription_validation_ttl_minutes`); expiración de pedido pendiente. **No verificado en esta auditoría:** job de purga de archivos `image_url` / filas `prescriptions` tras N días del cierre de orden. Documentar e implementar si aplica Ley 2025. |
| Audit log de accesos a datos de salud | **Parcial / no mapeado** | Eventos de negocio (`PrescriptionUploaded`, etc.) y logs Laravel. **Pendiente:** trazabilidad inmutable (quién abrió qué receta, cuándo) si el compliance lo exige explícitamente. |
| Consentimiento explícito (checkbox) | **Requiere verificación UX** | Backend asume solicitud validada; confirmar en Flutter onboarding + `PrescriptionUploadPage` textos legales enlazados a política. |

**Conclusión:** el **control de acceso por rol y perfil** está alineado con §5. Las mayores brechas son **cifrado explícito de adjuntos**, **retención/purga documentada** y **audit trail de acceso** granular. Priorizar antes de go-live con asesoría legal/DPO.

## 6. Facturación y SENIAT

- Cada farmacia aliada emite su propia factura digital al paciente
  (modelo Yummy: el marketplace conecta, no es intermediario de la
  factura).
- Zonix Pharma genera su propia factura por **comisión** y/o
  **membresía** a la farmacia.
- Integración futura con proveedor SENIAT autorizado para emisión
  digital.

## 7. Checklist pre-launch

- [ ] Constitución legal de Zonix Pharma (C.A.) y RIF activo.
- [ ] Términos y Condiciones / Política de Privacidad publicados en web y app.
- [ ] DPO designado (oficial de protección de datos).
- [ ] Procedimiento documentado de tratamiento de datos sensibles.
- [ ] Mínimo 3 farmacias aliadas verificadas (RIF + permiso sanitario +
      farmacéutico colegiado).
- [ ] Mínimo 2 farmacéuticos colegiados onboarding completado.
- [ ] Aviso al MPPS/colegio farmacéutico de operación de la plataforma
      (consultar a abogado).
- [ ] Pólizas: responsabilidad civil profesional, ciberseguridad.
- [ ] Procedimiento de incidentes de datos (notificación 72h).
- [ ] Capacitación al equipo de soporte sobre datos sensibles.

## 8. Lo que NO somos

- NO somos farmacia: no almacenamos ni vendemos medicamentos.
- NO somos farmacéuticos: no asesoramos sobre indicación, dosis o
  interacciones; eso lo hace el médico tratante y, en última instancia,
  el farmacéutico colegiado de la farmacia despachadora.
- NO somos intermediarios de pago: las transacciones se realizan entre
  paciente y farmacia (modelo Yummy/Sudeban).
- NO sustituimos consulta médica.
