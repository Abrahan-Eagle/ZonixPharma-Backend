---
name: zonix-fundraising-narrative
description: Narrativa fundraising Zonix Pharma — pitch bullets, email/WhatsApp inversor, Q&A SAFE pre-seed VE. Basado en MENSAJE_ENVIO y CONTEXTO_PITCH. Invocar zonix-startup-context primero.
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
