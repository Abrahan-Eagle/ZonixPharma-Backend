# MVT concierge — Zonix Pharma (beachhead Valencia)

> Framework: [Minimum Viable Testing (First Round / Biyani)](https://review.firstround.com/the-minimum-viable-testing-process-for-evaluating-startup-ideas/).  
> Acción: tests estrechos **antes/además** de más features. Fecha: 7 agosto 2026.  
> Canal principal: **WhatsApp + ops manual**; app/staging = capacidad latente (freeze de alcance).

---

## Promesa (value proposition)

Familias en Valencia piden OTC/Rx fácil; farmacias independientes venden online sin ceder el mostrador a un agregador caro.

## Hipótesis riesgosas + test mínimo

| # | Hipótesis | Atomic unit | Test (hacky) | Resultado (llenar) | Fecha |
|---|-----------|-------------|--------------|--------------------|-------|
| 1 | Demanda paciente: pagan/confirman pedido digital | 1 pedido completado | Landing/WA: 20–50 contactos beachhead; OTC primero | | |
| 2 | Supply: farmacia despacha recurrente | 1 farmacia activa 7 días | Contrato + catálogo hoja/WA o panel; medir SLA | | |
| 3 | Rx ops: farmacéutico valida en SLA útil | 1 receta E2E | Foto Rx → approve/reject; cronometrar | | |
| 4 | Unit economics | 1 pedido con P&L | Precio paciente vs costo farmacia + partner + tiempo humano | | |
| 5 | Cold chain (si aplica) | 1 entrega frío | 1 SKU + partner; check integridad | | |
| 6 | GTM | 1 ciclo B2B cerrado | N farmacias firmadas **antes** de paid Meta | | |

**Regla Biyani:** una hipótesis **primaria** por test; no preguntar “¿te gustaría?” — forzar tiempo o dinero.

---

## Protocolo concierge (semana tipo)

1. Lunes: elegir **1** fila de la tabla (hipótesis primaria).  
2. Mar–vie: ejecutar test sin construir UI nueva.  
3. Viernes: anotar resultado + “¿qué riesgo queda?”.  
4. Si falla: pivotar test o matar hipótesis con honestidad.  
5. Si pasa: **no** tratar revenue MVT como MoM growth — usar para confianza + piloto ([PILOTO_FARMACIAS_VALENCIA.md](PILOTO_FARMACIAS_VALENCIA.md)).

---

## Qué NO hacer (distracciones del email 500)

- Cursos Platzi / User on board / perks `bit.ly/Perks500Aplica` como prioridad.  
- Más módulos Flutter “porque 500 pidió MVP”.  
- Swag / branding prematuro.  
- Confiar solo en encuestas de farmacias.

## Qué SÍ hacer (PG)

- Recruit manual puerta a puerta / WhatsApp.  
- Delight: nota post-primer pedido.  
- Ser el software: matching delivery, chase pago VE, chase Rx a mano hasta automatizar el cuello real.

---

## Log de tests

| Fecha | Hipótesis # | Qué hicimos | Aprendizaje | Siguiente |
|-------|-------------|-------------|-------------|-----------|
| | | | | |

*Estado todo “mvt-whatsapp”: protocolo listo; ejecución de campo = founder/ops.*
