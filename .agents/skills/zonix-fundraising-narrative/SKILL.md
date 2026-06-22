---
name: zonix-fundraising-narrative
description: Narrativa fundraising Zonix Pharma — pitch bullets, email/WhatsApp inversor, Q&A SAFE pre-seed VE. Basado en MENSAJE_ENVIO y CONTEXTO_PITCH. Invocar zonix-startup-context primero.
metadata:
  auto_invoke: "Redactar pitch / email inversor"
---
# zonix-fundraising-narrative

Combina ideas de [pitch-deck](https://github.com/shawnpang/startup-founder-skills/tree/main/skills/pitch-deck), [fundraising-email](https://github.com/shawnpang/startup-founder-skills/tree/main/skills/fundraising-email) y lente CFO ([c-level-advisor](https://github.com/alirezarezvani/claude-skills/tree/main/c-level-advisor)). **Siempre** `zonix-startup-context` primero.

## Cuándo aplicar

- Redactar o pulir [MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md](../../docs/Lanzamiento/MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA.md).
- Preparar guion reunión 30 min (orden README pack).
- Q&A inversor: capital, SAFE, regulación, competencia, equipo.

## Fuentes canónicas (no contradecir)

| Documento | Contenido narrativo |
|-----------|---------------------|
| MENSAJE_ENVIO_Y_BULLETS_INVERSIONISTA | Texto corto listo para enviar |
| CONTEXTO_PITCH_Y_DECISIONES | Diferenciación, decisiones, earned secret |
| BRIEF_UNA_PAGINA | One-pager |
| CHECKLIST_PRE_INVERSOR | FAQ y objeciones |
| ESTRUCTURA_LEGAL_Y_EQUITY | SAFE, cap, vehículo VE |

## Estructura pitch (10–12 slides outline)

1. **Problema** — acceso farmacia Valencia, Rx, última milla
2. **Solución** — Zonix Pharma marketplace + validación farmacéutico colegiado
3. **Por qué ahora** — stack listo, regulación datos VE 2025, competencia digital
4. **Producto** — demo / capturas (no inventar features fuera de código)
5. **Modelo negocio** — ARPF + % GMV; pagos manuales
6. **Tracción / piloto** — Fase 0 T+90, farmacias objetivo SAM
7. **Mercado** — TAM/SAM citados PERFIL_MERCADO (con fuente)
8. **Unit economics** — CAC, LTV, payback (UNIT_ECONOMICS)
9. **Finanzas** — Lean 101k, M11 equilibrio, caja M12 ~42k
10. **Equipo** — piloto lean + externos
11. **Legal** — SAFE cap 600k, C.A. VE [PENDIENTE abogado]
12. **Ask** — wire 101k (o 118k recomendado) + uso de fondos

## Mensaje corto (WhatsApp / email)

Plantilla — rellenar solo desde pack:

```
Zonix Pharma — marketplace farmacéutico Valencia (OTC + Rx).
Pedimos USD [101|118|135]k pre-seed vía SAFE cap [600|650|720]k.
Stack en producción; piloto Day-D T+90. Data room: [enlace carpeta].
¿30 min esta semana?
```

Personalizar tono founder; **no** cambiar cifras sin actualizar README.

## Variantes email (adaptado fundraising-email / made-to-stick)

Usar al editar MENSAJE_ENVIO; **misma cifra** en las tres variantes.

### Corto (~80 palabras)

Asunto: `Zonix Pharma — pre-seed Valencia (SAFE)`

Cuerpo: problema en 1 frase → solución marketplace Rx/OTC → ask wire tier + cap → CTA 30 min + enlace carpeta `docs/Lanzamiento/README.md`.

### Medio (~150 palabras)

Añadir: earned secret (CONTEXTO_PITCH), 1 bullet tracción técnica (stack listo, ALINEACION), 1 bullet piloto (Day-D T+90, farmacias SAM).

### Largo (para data room previo)

Añadir: tabla use of funds en 3 líneas (Fase 0 / nómina / marketing desde PRESUPUESTO §2), link CHECKLIST_PRE_INVERSOR, disclaimer legal VE `[PENDIENTE abogado]`.

**SUCCES (made-to-stick)** para 1 bullet memorable en pitch: **Simple** — «marketplace farmacia con farmacéutico de cada local»; **Unexpected** — pagos manuales VE, sin ser banco; **Concrete** — USD 101k, 90 días a Day-D; **Credible** — tests/backend en ALINEACION; **Emotional** — acceso medicamentos Valencia; **Story** — founder con stack en producción.

## Posicionamiento (obviously-awesome — CONTEXTO_PITCH)

Plantilla de 1 párrafo al auditar CONTEXTO_PITCH:

1. **Competitive alternatives:** Farmatodo/Locatel digital, Rappi, WhatsApp informal.
2. **Unique attributes:** Rx con validación por farmacéutico de la farmacia; uni-pharmacy; VE payments manuales.
3. **Value:** pedido confiable OTC/Rx + tracking sin flota Zonix.
4. **Target customer:** farmacias independientes Valencia metro + paciente urbano.
5. **Market category:** marketplace farmacéutico digital (no «delivery de comida»).

## Tipos de propuesta de valor (UniMOOC M2 — Steve Blank)

Destilado curso [ANALISIS_FORENSE_CURSO_UNIMOOC_2026-06.md](../../docs/zonix/ANALISIS_FORENSE_CURSO_UNIMOOC_2026-06.md). Usar al editar **CONTEXTO_PITCH**, **BRIEF** o slide «Solución» — **no** inventar claims clínicos.

Blank distingue dos fuentes de valor que convergen en la propuesta:

| Fuente | Qué aporta | Ejemplo Zonix (cualitativo) |
|--------|------------|-----------------------------|
| **Conocimiento técnico** | Eficiencia, escala producto, menos fricción operativa | Stack Laravel+Flutter en prod; Rx + validación farmacéutico en app |
| **Conocimiento de mercado** | Distribución, marca, encaje segmento | Beachhead Valencia; Sales B2B físico; partners delivery |

**Ranking antes del pitch (M2):**

1. Listar **3 problemas** del cliente (farmacia / paciente) con citas mom-test — no features.
2. Listar **3 beneficios** medibles o observables (ej. «menos WhatsApp manual», «receta con estado visible»).
3. Elegir **un** mensaje puente para inversor: problema → atributo único → prueba (tests, piloto Day-D).

**Tipos narrativos para bullets MENSAJE (elegir 1 dominante por audiencia):**

| Tipo | Cuándo usar | Bullet Zonix (plantilla) |
|------|-------------|--------------------------|
| **Más eficiente / menos fricción** | Inversor tech | «Marketplace uni-pharmacy con Rx integrado vs agregador genérico» |
| **Nuevo acceso / canal** | Inversor GTM | «Demanda digital para farmacias independientes sin app propia» |
| **Costo total menor** | Comparables take-rate | «Cuota+GMV vs comisión 25–35% agregador — ver PROPUESTA B2B §2» |

**Anti-patrones pitch:** no mezclar los tres tipos en un mismo párrafo; no prometer PMV como producto «terminado» — piloto Day-D es validación.

## Cialdini — cierre inversor (influence)

Lente [founder-playbook `influence`](https://github.com/getagentseal/founder-playbook). Aplicar en MENSAJE_ENVIO, reunión y CHECKLIST §8 — **sin** manipulación ni cifras inventadas.

| Principio | Aplicación Zonix | Dónde en pack |
|-----------|------------------|---------------|
| **Reciprocity** | Compartir BRIEF + índice data room antes de pedir reunión; demo preparada | MENSAJE §2; README pack |
| **Social proof** | **399 tests** backend; comparable Farmalisto LatAm financiable | MENSAJE §1; PERFIL_MERCADO |
| **Scarcity** | Ronda Lean **101k** acotada; waiver **10 farmacias** piloto (no ilimitado) | README cifras; PROPUESTA B2B §11 |
| **Authority** | Founder stack ~4 años; LinkedIn; track record Corral X si aplica | VOLCADO §1; CONTEXTO_PITCH §1 |
| **Consistency** | SAFE estándar YC adaptado VE; decisiones documentadas en CONTEXTO | ESTRUCTURA_LEGAL |
| **Liking** | Español claro; explicar SAFE/cap; sin arrogancia técnica | Tono § abajo |

**En reunión (CHECKLIST §8):** cerrar con próximo paso concreto (SAFE en 14–21 días) y pedir feedback si rechaza (mantener relación).

## Q&A frecuente (respuestas ancladas)

| Pregunta | Dirección de respuesta | Fuente |
|----------|------------------------|--------|
| ¿Por qué farmacia digital VE? | Fragmentación, Rx, partners delivery | CONTEXTO_PITCH |
| ¿Regulación? | MPPS, INHRR, farmacéutico por farmacia | PLAN_REGULATORIO + asesor |
| ¿Pagos? | Manuales; Zonix no es banco | PLAN_METODOS_PAGO |
| ¿Competencia? | Farmatodo, Locatel, Farmalisto | PERFIL_MERCADO |
| ¿Runway? | 12m post-Day-D + Fase 0 | PROYECCION |
| ¿Dilución? | ~16,8% Lean ref. | ESTRUCTURA_LEGAL |
| ¿Riesgo founder? | Contingencia documentada ANALISIS_FORENSE | pack |

Marcar `[PENDIENTE asesor/abogado]` en temas sin dictamen.

## Tono y restricciones

- Español claro; evitar jerga VC sin explicar (SAFE, cap).
- **No** claims terapéuticos ni promesas de curación (regulatorio).
- **No** prometer ingresos garantizados a inversor.
- Historia = problema real Valencia + equipo ejecutor + números conservadores.

## Skills relacionadas

- `zonix-startup-context` (obligatoria)
- `zonix-investor-materials` (data room completo)
- `zonix-financial-model` (si preguntan tablas)
- `zonix-regulatory-ve` (preguntas MPPS/Rx)
- `zonix-lanzamiento-roles` (declarar lente IR + Legal)
- `zonix-lean-canvas` (bloque propuesta de valor)
