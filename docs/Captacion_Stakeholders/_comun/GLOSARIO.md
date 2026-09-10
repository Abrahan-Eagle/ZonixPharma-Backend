# Glosario — captación stakeholders (español llano)

> **Para qué sirve:** entender las palabras de esta carpeta **antes** de leer los planes.  
> **Cómo usarlo:** si un documento dice una palabra rara, vuelve aquí.  
> **Canon:** pedimos **USD 237.412** (aún no cobrados) · techo de valuación SAFE **USD 1.582.747** (~15% si aplica) · menú farmacia **45/60/70 + %GMV**.

Cada término: **qué es** · **en la práctica** · **no confundir con**.

---

## Dinero e inversión

### SAFE
**Qué es:** contrato por el que un inversor pone plata hoy y recibe acciones **después**, cuando haya una ronda con precio.  
**En la práctica:** no es un préstamo ni una venta de acciones inmediata.  
**No confundir con:** el contrato de una farmacia que paga por usar la app.

### Ask
**Qué es:** la cantidad de capital que pedimos (Lean): **USD 237.412**.  
**En la práctica:** es una **meta**. Solo es “recaudado” cuando el dinero está en la cuenta tras firmar.  
**No confundir con:** ingresos de farmacias o ventas en la app.

### Cap (valuation cap / techo)
**Qué es:** techo de valuación del SAFE para calcular cuánto % le toca al inversor al convertir.  
**En la práctica (canon):** cap **USD 1.582.747** → ~**15%** si ese techo aplica (`237.412 / 1.582.747`).  
**No confundir con:** “Zonix vale exactamente 1,58M” (eso no es un appraisal de mercado).

### Wire
**Qué es:** la transferencia real del dinero del inversor a la empresa.  
**En la práctica:** sin wire no hay capital usable.  
**No confundir con:** “alguien mostró interés” o firmó un borrador.

### T+0
**Qué es:** el día cero del calendario financiado: condiciones de cierre cumplidas y wire usable.  
**En la práctica:** arranca la Fase 0 “de verdad” con caja.  
**No confundir con:** el día en que enviaste el pitch.

### Day-D
**Qué es:** hito del plan comercial (~90 días tras T+0) con metas de farmacias firmadas/activas.  
**En la práctica:** meta operativa del piloto Valencia.  
**No confundir con:** el cierre del SAFE (eso es T+0).

### Dilución
**Qué es:** el % de la empresa que dejas de tener cuando entra un inversor (o nuevas acciones).  
**En la práctica:** solo el método SAFE diluye; CrowdPharma y Alfa/Beta **no**.  
**No confundir con:** “perder control operativo” (son temas distintos).

### Use of funds
**Qué es:** explicación de **en qué** se usa el ask (hitos + Lean 50.260 / 172.152 / 15.000).  
**En la práctica:** ver [`07_QUE_COMPRA_EL_ASK.md`](07_QUE_COMPRA_EL_ASK.md). Los % “guía” no sustituyen el presupuesto.  
**No confundir con:** covenant rígido del SAFE (solo si lo pactas).

### Runway
**Qué es:** cuántos meses de operación te quedan con la caja y el burn actuales.  
**En la práctica:** el memo debe mostrar burn, caja inicial/final y gates de no escalar.  
**No confundir con:** el ask todavía no recaudado.

### Data room
**Qué es:** carpeta de documentos que ve el inversor en due diligence.  
**En la práctica:** vive en [`docs/Lanzamiento/`](../../Lanzamiento/); mapa en [`08_MAPA_DATA_ROOM.md`](08_MAPA_DATA_ROOM.md).  
**No confundir con:** esta carpeta Captación (playbook interno).

### North Star
**Qué es:** métricas clave con fórmula (activación, GMV, MRR, CAC…).  
**En la práctica:** tabla en [`05_CALENDARIO_Y_DASHBOARD.md`](05_CALENDARIO_Y_DASHBOARD.md).  
**No confundir con:** vanity metrics sin definición.

### CLAIM-3P
**Qué es:** dato de un **tercero** (ej. Carta, LAVCA) que no es resultado de Zonix.  
**En la práctica:** solo vía ficha `EXT_*` + revalidación URL; ver [`06_DECISIONES_ABIERTAS.md`](06_DECISIONES_ABIERTAS.md).  
**No confundir con:** tracción propia (`FACT`).

---

## Carriles (a quién le hablas)

### Carril A — Inversor
Persona o fondo que pone **capital** → firma **SAFE**.

### Carril B — Farmacia cliente
Dueño/decisor de farmacia que paga por **plataforma** → contrato / piloto / cuota.

### Carril C — Delivery / partner
Empresa de entrega u otro socio operativo → contrato + SLA.

### Carril D — Equipo / advisor
Quien trabaja o aconseja → contrato laboral o de servicios (no equity por defecto en piloto).

**Regla de oro:** la misma persona en dos roles = **dos contratos**. Ejemplo: Gabriel te presenta farmacias (aliado) y aparte podría invertir (SAFE) — nunca en el mismo papel.

---

## Cobro a farmacias (S0 / S1 / S2)

### S0
**Qué es:** escenario base de cobro (menú 45/60/70 + %GMV) sin el “regalo” del waiver.  
**En la práctica:** precio de lista.

### S1
**Qué es:** contrato con **waiver**: los primeros 2 meses la cuota fija puede ser USD 0 (máx. 10 farmacias); el %GMV hay que aclararlo (`CAP-P01`).  
**En la práctica:** oferta “fundadoras” / Beta.

### S2
**Qué es:** prepago anual (adelantar el año).  
**En la práctica:** **aún no aprobado**; solo después de cobro real y gates.  
**No confundir con:** el SAFE (S2 es ingreso de cliente, no capital).

### Waiver
**Qué es:** periodo corto sin cobrar (o cobrando menos) la cuota fija, para que la farmacia pruebe con contrato.  
**En la práctica:** 0×2 meses, máximo 10.  
**No confundir con:** “gratis para siempre” ni equity.

### %GMV
**Qué es:** porcentaje sobre las ventas que la farmacia hace **por la app**.  
**En la práctica:** parte del menú (8% / 7% / 5% según plan).  
**No confundir con:** la cuota fija mensual (45/60/70).

### LOI
**Qué es:** carta de intención (compromiso escrito, aún no es el contrato final).  
**En la práctica:** señal seria antes del contrato marco.

---

## Experimentos Café + Kleo

### Alfa
**Qué es:** hasta **10 farmacias prueban la app** (catálogo, Rx, pedido controlado) **antes** de tener el wire del inversor.  
**En la práctica:** aprendizaje; casi no hay cobro.  
**No confundir con:** ya ser “fundadora” con waiver.

### Beta
**Qué es:** las que **sí usaron** pasan a contrato S1 + waiver (máx. 10).  
**En la práctica:** cobro serio con reglas.  
**No confundir con:** pedirles que inviertan en el SAFE.

### Gamma
**Qué es:** paquete rechazado (lifetime, subir cap a 800k, exclusividad, sprint de 4 semanas).  
**En la práctica:** **no lo hagas**.

### Delta
**Qué es:** idea futura de prepago anual (S2) **después** de haber cobrado de verdad.  
**En la práctica:** ahora no.

### Mom-test
**Qué es:** entrevista corta al dueño de farmacia sobre su problema real (no pitch de venta).  
**En la práctica:** ≥5 antes de inventar mensajes de marketing.

---

## CrowdPharma (cupos B2B)

### CrowdPharma
**Qué es:** ofrecer un **cupo** de farmacia/socio a cambio de servicio (plataforma + onboarding), inspirado en “adopta un árbol → fruta”.  
**En la práctica:** el dinero es **ingreso/prepago**, no acciones.  
**No confundir con:** crowdfunding de inversores ni SAFE.

### Semilla / Fundadora / Anual / Socio Ruta
**Qué es:** nombres de paquetes comerciales del método CrowdPharma (entrada → S1 → futuro S2 → partner).  
**En la práctica:** ver el plan CrowdPharma; no diluyen.

---

## Decisiones que bloquean acción

### CAP-P09
**Qué es:** tu permiso explícito para hacer el **primer contacto real** (Alfa/Beta u outreach).  
**En la práctica:** sin esto, los documentos solo preparan; **nadie contacta**.

### CAP-P12
**Qué es:** decisión founder que fijó el **canon SAFE** en 15% @ 1.582.747 (26 ago 2026).  
**En la práctica:** ya está **DECIDIDO**; no hace falta “autorizar B” por candidato.  
**No confundir con:** `CAP-P09` (contacto real).

### CAP-P01
**Qué es:** decidir si durante el waiver también se cobra (o no) el **%GMV**.  
**En la práctica:** hay que cerrarlo **antes** de prometer Beta/Fundadora.

### PIIA
**Qué es:** acuerdo de propiedad intelectual: el código/marca deben quedar a nombre de la empresa antes del wire.  
**En la práctica:** condición de cierre del SAFE (con abogado).

### MFN (Most Favored Nation)
**Qué es:** si mañana das mejores términos de SAFE a otro, el primero puede pedir igualarse.  
**En la práctica:** cláusula típica del term sheet mejorado.

---

## Tres respuestas rápidas

1. **¿Capital?** → método SAFE Gabriel (carril A) @ **1.582.747 / ~15%**.  
2. **¿10 farmacias esta semana?** → Alfa (prueban app); no cobres Fundadora a ciegas.  
3. **¿Equity a farmacia que paga cupo?** → **No.** Cupo = cliente; equity = inversor (otro contrato).  
4. **¿Qué compran los 237.412?** → [`07_QUE_COMPRA_EL_ASK.md`](07_QUE_COMPRA_EL_ASK.md).  
5. **¿Dónde está el data room?** → [`08_MAPA_DATA_ROOM.md`](08_MAPA_DATA_ROOM.md) → Lanzamiento.  
6. **¿Cuál es la tesis del pitch?** → [`09_INVESTOR_CASE.md`](09_INVESTOR_CASE.md).  
7. **¿Riesgos antes de cerrar?** → [`10_RIESGOS_Y_CONTROLES.md`](10_RIESGOS_Y_CONTROLES.md).

Índice: [`../README.md`](../README.md) · Hub: [`00_QUE_HACER_AHORA.md`](00_QUE_HACER_AHORA.md) · Comparativa: [`04_COMPARATIVA_TRES_METODOS.md`](04_COMPARATIVA_TRES_METODOS.md)
