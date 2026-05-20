> **ARCHIVO HISTÓRICO — Zonix Eats (pre-fork abr 2026).** No indexar para **Zonix Pharma**. Canon migración: [MIGRACION_EATS_PHARMA.md](../../MIGRACION_EATS_PHARMA.md) · Pack inversor vivo: [docs/Lanzamiento/README.md](../../Lanzamiento/README.md).
>

# Mensaje para el equipo + bullets reunión con inversionista

> **Origen:** borrador operativo alineado al pack canónico en esta carpeta. El texto del cuestionario debe mantenerse coherente con [CUESTIONARIO_EQUIPO_PILOTO.md](CUESTIONARIO_EQUIPO_PILOTO.md); si hay divergencia, prevalece el cuestionario en repo.

---

## 1. Mensaje listo para el equipo (WhatsApp o correo)

**Asunto (correo):** Zonix Eats — datos piloto + una decisión (15–20 min)

**Cuerpo (copiar y ajustar firma y plazo):**

---

Equipo Creesca —

Necesitamos una sola pasada de datos para cerrar el brief del piloto y el plan maestro (secciones §2 y §11). Son 15–20 minutos; si falta un dato, mejor **estimación honesta** que dejar en blanco.

**1. Zona y fechas**

- Confirmamos piloto en Valencia — El Socorro y barrios colindantes (¿falta alguno en la lista o quitamos alguno?).
- Ventana inicio/fin del piloto (o “primera oleada”): ___ / ___

**2. Oferta**

- Comercios con compromiso (nombre o “mínimo N para fecha X”): ___
- Empresa de delivery acordada o en conversación: ___
- Si no hay delivery a tiempo: ¿aceptamos solo retiro en tienda en esta fase? Sí / No

**3. Métricas** (si existen; si no, estimación)

- De las órdenes que piden comprobante, ¿% validado en &lt; 30 min? ___
- % canceladas/expiradas en `pending_payment` vs creadas (última semana): ___
- Tiempo típico desde “listo para reparto” hasta “asignado” (si aplica): ___
- Top 3 fricciones en chat/disputas: ___ / ___ / ___
- ¿Qué frena más hoy: pocos comercios, poca demanda, o app/UX? (una opción)

**4. Una sola prioridad 2–4 semanas** (elegir una)

- Funnel / conversión (pagos y comprobantes)
- Operación / logística / soporte
- Producto / UX / bugs

**5. Negocio y cumplimiento**

- Facturación digital SENIAT (Zonix → clientes B2B): no iniciado / en curso / listo
- Membresía comercios/delivery: monto y si el piloto es gratis o pago: ___

**6. Canales y presupuesto**

- Presupuesto aprox. lanzamiento y mensual marketing: ___
- Canales preferidos (IG, WhatsApp, influencers locales, otros): ___

**7. Enlaces**

- Web y tiendas Android / iOS (URLs): ___

Con esto bajamos los `[PENDIENTE]` del plan y del brief de una página. **Respuestas:** pegar en el hilo o en [VOLCADO_RESPUESTAS_CUESTIONARIO.md](VOLCADO_RESPUESTAS_CUESTIONARIO.md) en la carpeta de lanzamiento.

**Responder antes del:** ___  
**Firma / remitente:** ___

---

## 2. Bullets para la reunión con inversionista (10–15 min + Q&A)

Orden según [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) (incluido §0 mínimo pre-reunión):

1. **Gancho (30 s):** Zonix Eats — pedidos en zona; comercios de barrio en Carabobo; piloto acotado (El Socorro + alrededores).
2. **Problema (1 min):** margen presionado por comisiones de super-apps; alternativa con **pago directo al comercio** y Zonix solo con **membresía B2B** (sin retener el pago del pedido).
3. **Solución (2 min):** qué hay hoy en producto (menú, pedido, off-platform, validación de comprobantes); **qué está listo** vs **qué desbloquea capital** (ops, legal, marketing local, infra).
4. **Mercado y foco (1–2 min):** El Socorro primero; Valencia/Carabobo más amplio = **fase 2**, no promesa inmediata.
5. **Modelo (2 min):** ingreso = membresía fija B2B (sin comisión sobre GMV). **Trial comercios:** 30 días **o** 20 pedidos completados, lo que ocurra primero — [CONTEXTO_PITCH_Y_DECISIONES.md](CONTEXTO_PITCH_Y_DECISIONES.md).
6. **Uso de fondos (3 min):** tabla por líneas (infra, legal/contable, ops, marketing digital, OOH, contingencia); **Estado:** estimado | cotizado | cerrado; al menos una cotización real o correo “en cotización” con fecha.
7. **Plan 12 meses (2 min):** hitos; **plan B** en una frase si solo hay runway 6 meses — [PRESUPUESTO_12_MESES_REFERENCIA.md](PRESUPUESTO_12_MESES_REFERENCIA.md) como **orden de magnitud**, no cifra oficial sin cotizar.
8. **Equipo (1 min):** quién hace qué; **hueco ops** día a día explícito y cómo se cubre (part-time, fee).
9. **Pedido concreto:** monto o rango, instrumento (préstamo, capital, mix), valor no monetario (red, validación).
10. **Riesgos (1 min):** captación comercios, delivery, SENIAT/legal — **mitigación** en una frase cada uno.

**Cierre sugerido (30 s):** el riesgo principal es **adopción en comercios** y **alineación con delivery**; con capital priorizamos **ops local**, **marketing en zona** y **marco legal/contable**; el éxito se mide en **comercios activos** y **pedidos**, no solo en “app lanzada” (alinear con [CHECKLIST_PRE_INVERSOR.md](CHECKLIST_PRE_INVERSOR.md) §5).

**FAQ preparada:** por qué vosotros; comercios comprometidos (si hoy 0: decirlo + plan 2–4 semanas post-cierre); unidad económica (honesto o “medimos en piloto”); competencia (apps globales, WhatsApp, informal); qué pasa sin capital (transparencia).

**Bullets adicionales (nuevos documentos abril 2026):**
- **Unit economics:** membresía $25/mes, CAC ~$19, LTV/CAC 10,9x, break-even 27 comercios → [UNIT_ECONOMICS.md](UNIT_ECONOMICS.md).
- **Proyección financiera:** 3 escenarios, flujo de caja 12 meses, break-even mensual mes 18–22 → [PROYECCION_FINANCIERA_12M.md](PROYECCION_FINANCIERA_12M.md).
- **Estructura legal:** C.A. recomendada, cap table borrador, instrumentos de inversión → [ESTRUCTURA_LEGAL_Y_EQUITY.md](ESTRUCTURA_LEGAL_Y_EQUITY.md).
- **Mercado piloto:** ~264 comercios en Valencia, 30–60 en zona piloto, pago móvil dominante → [PERFIL_MERCADO_PILOTO.md](PERFIL_MERCADO_PILOTO.md).
- **Propuesta de valor comercio:** comparación cuantificada Zonix vs Yummy vs WhatsApp, script de venta → [PROPUESTA_VALOR_COMERCIO.md](PROPUESTA_VALOR_COMERCIO.md).

---

## 3. Qué definir fuera del markdown (equipo)

| Tema | Por qué |
|------|---------|
| Fecha límite para que el equipo responda | No está fijada en los docs. |
| Quién firma el mensaje (tú, CEO, “equipo Creesca”) | Solo tono y responsabilidad. |
| Monto/rango e instrumento frente al inversionista | Lo define el equipo con asesoría; los docs guían el mensaje. |

---

**Última actualización:** abril 2026.
