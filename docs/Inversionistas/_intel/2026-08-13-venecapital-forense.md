# Intel forense — VeneCapital (venecapital.org)

> **Tipo:** bitácora / forense URL (no data room).  
> **Fecha:** 13 agosto 2026  
> **Fuente:** SPA Angular + API pública `https://api.venecapital.org` + render Chrome headless de vistas públicas.  
> **Disclaimer:** análisis founder interno; no es asesoría legal ni financiera. **No contactar** ni enviar forms sin OK.  
> **Ask Zonix (canon):** Lean **USD 237.412** SAFE — VeneCapital **no** es el cheque.

---

## 1. Veredicto ejecutivo (orquestador)

| Lente | Resultado |
|-------|-----------|
| ¿Es LP / escribe cheque SAFE? | **No** — Asociación Civil de capital privado |
| Score rúbrica T/S/E/V/C/R (como capital) | **46/100 → descartar** como candidata a caja |
| Valor para Zonix | **Canal de red / visibilidad** (E alto): directorio, eventos, HealthTech, reporte pharma, puente a Epakon/Impulsa/Torbar |
| Acción recomendada | Intel **KEEP**; alta CRM solo como **hub/red** (no Plan A caja). Postular ecosistema / membresía **solo con OK** + precio/T&C |

**Una línea:** gremio VE útil para networking y señalización; el raise Lean sigue yendo a Epakon / Casa212 / ALGEN.

---

## 2. Identidad

| Campo | Valor verificado |
|-------|------------------|
| Nombre comercial | **Venecápital** / VeneCapital |
| Razón social (Términos) | **Asociación Venezolana de Capital Privado**, Asociación Civil |
| Tipo | Asociación **sin fines de lucro**, apolítica (About) |
| Fundación (claim home) | **2019** |
| Sede | Caracas, Venezuela |
| Contacto | `info@venecapital.org` · +58 424 345 4334 |
| Social | [Instagram](https://www.instagram.com/venecapital_/) · [LinkedIn](https://www.linkedin.com/company/venecapital/) · Facebook |
| Stack | Angular SPA · API Express en GCP · Firebase `pagina-web-venecapital` · Analytics `G-JEF87S62BM` |

**Pilares:** Fomentar · Conectar · Educar.  
**Verticales de capital privado que promueven:** Capital de Riesgo · Capital de Inversión · Deuda Privada · Inversión de Impacto.

---

## 3. Mapa de rutas (SPA)

| Cluster | Paths | Hallazgo |
|---------|-------|----------|
| Core | `/home`, `/about-us`, `/venezuela` | Pitch asociación + Why Venezuela + stats |
| Ecosistema | `/ecosystem`, `/ecosystem/postulate`, `/actors-directory`, `/actor-detail/:id` | Market map / startups; form postulate |
| Membresía | `/membership`, `/directory`, `/member-detail/:id` | Tipos de miembro; directorio paginado |
| Contenido | `/events`, `/events/:id`, `/info`, `/info/:id` | Eventos + publicaciones |
| Legal/auth | `/contact`, `/privacy-policy`, `/terms-of-service`, `/login/:portal`, `/profile`, `/reset-password` | Forms; login miembro/actor |
| Admin | `/admin/*` | Superficie admin — **no** se forzó login |

`robots.txt` / `sitemap.xml` devuelven el mismo shell SPA (catch-all).

---

## 4. Hallazgos por lote (fan-out)

### W1 — Home / About / Venezuela

- Home: “Asociación Venezolana de capital privado”; claim **+100 miembros activos**; CTAs Miembro / Actor; próximos eventos (Startup Summit Caracas 2026, LAVCA Week NY).
- About: gobernanza = asamblea + junta (~28) + comité ejecutivo + gerencia; “voz y punto de encuentro del capital privado en Venezuela”.
- Venezuela: narrativa frontera (petróleo/gas/agua); cuatro futuros (energético, agro, **tecnológico**, inmobiliario/turismo); CTA descargar PDF Why Venezuela.

### W2 — Ecosistema / Postulate / Membership

- Ecosistema: claims UI **+33 / +190 actores** (inconsistente entre vistas) y **95 startups** registrados.
- Postulate (campos, **no enviado**): organización, tipo actor (Capital Humano / Finanzas / Política / Soporte / **Startup**), IG, LinkedIn, web, persona contacto, cargo, móvil, email, descripción.
- Membresías: Asociados · Embajadores internacionales · Académicos · Aliados Institucionales. Beneficios = networking, info, posicionamiento. **Sin precio público** → CTA Contáctanos.

### W3 — Directory / Actors

- Directorio miembros (página 1, muestra): Advantis, Amagi, Amicorp, **Andromeda Ventures**, Araquereyna, BNC, Baker Tilly, Mercantil, Baquero Sanz, Caja Caracas, Compass, Comtrade, Grupo Conroy, D'Empaire, Deloitte, **EY**, Ecoanalítica, **Epakon Capital**, Eurobuilding, Federico Fernández, Financorp, Fivenca, Greincor, IFG Capital, …
- Clasificaciones API incluyen **Salud**, Fondos de inversión, Aceleradoras, Abogados, etc.
- Actores API (muestra): ARMI, DeporteApp, En La Parada, FLETY, Muney App, **Ridery**, Widú Legal, tiigre, Hoolox, AcademiaVEN, … Categorías incluyen **HealthTech & Life Sciencies**, **Marketplace**.
- API `/users/actors/:id` → **403** en probe; `/users/members/:id` público puede incluir `adminContact` (**no versionar PII personal**).

### W4 — Events

API `/events` count **17**. Ejemplos: Pitch day Venecápital; Open Talks valoración startups; UNIMET Pitchday; InnovEYtion Summit; Caracas Tech Meetup; debate dolarización; **Startup Venezuela Summit 2026** (Miami); **LAVCA Week 2026** (NY); VC LATAM Summit.

### W5 — Contact / Info / Legal

- Contacto: form Nombre/Apellido/Email/Teléfono/Mensaje + datos institucionales arriba.
- Publicaciones: 24 posts; categorías Académicos / Noticias / Opiniones / Reportes. Destaca **“Mercado Farmacéutico Venezuela 2025”** (Advantis) y Market Map startups VE.
- Privacy: cita **Ley Federal mexicana** de datos (desalineada con jurisdicción VE) — gap docs.
- Terms: VENECAPITAL como admin del sitio `venecapital.org`.

### W6 — API / Social / Opacidad

| Endpoint | Estado |
|----------|--------|
| `GET /` | `API de Venecapital` |
| `/events`, `/events/home`, `/posts`, `/categories`, `/categories/verticals` | 200 público |
| `/users/members`, `/users/actors`, board/gerency/committee | 200 público |
| `/config/public/member-classifications`, `actor-categories` | 200 |
| `/config/public` | 403 |
| Social IG/LinkedIn/FB | 200 |

Anti-homónimo: es el **gremio** VeneCapital VE — no confundir con fondos homónimos extranjeros sin verificar.

---

## 5. Gobernanza (junta / comité / gerencia) — muestra

Junta (API): entre otros — **Morelia Quintero (Impulsa VC)**; **Esteban Torbar (Rainforest Capital Partners)**; Ignacio Pulido (Advantis, VP Comunicaciones); Victoria Nogueroles (BNC); Roberto Mas (D'Empaire, Secretario General); Jonathan Roye (Grupo Conroy, CEO); Alex Gómez (Innoven, VP Comités); bancos Mercantil/BNC; Nexia (tesorero); etc.

Comité ejecutivo y gerencia operativa (Manuela Galantón — Gerente de Operaciones) listados en About.

---

## 6. Cruzamientos CRM Zonix (ya existentes)

| Actor | Relación VeneCapital | CRM Zonix |
|-------|----------------------|-----------|
| **Epakon Capital** | En directorio de miembros | `epakon/` — Plan A caja ~70 |
| **Impulsa VC** | Morelia Quintero en junta | `impulsa-vc/` ~52 nurture |
| **Esteban Torbar** | Junta (Rainforest) | Ligado a `startup-venezuela-summit/` (evento, no LP) |
| Advantis | Miembro + VP Comunicaciones + reporte pharma | Sin ficha CRM propia |

---

## 7. Score preliminar vs ask Lean 237.412

| Código | Peso | Pts | Nota |
|--------|------|-----|------|
| T | 20 | **3** | No escribe el cheque Lean |
| S | 20 | **4** | Sin SAFE/instrumento; membresía sin precio |
| E | 15 | **13** | Red + HealthTech + pharma report + puente Epakon |
| V | 15 | **5** | Solo contacto / forms |
| C | 15 | **11** | No diluye; fricción membresía opaca |
| R | 15 | **10** | Actor legítimo; privacy MX; PII API |
| **Total** | 100 | **46** | **descartar como LP** · **nurture como canal** |

---

## 8. Recomendaciones (sin ejecutar)

1. **No** tratar VeneCapital como ask de capital ni Plan A de caja.  
2. Documentar como hub (este archivo). ¿Alta CRM slug `venecapital/` tipo **red/evento** (como SVS), no LP? → **preguntar founder**.  
3. Postular **Startup / HealthTech** al ecosistema o pedir membresía **solo con OK** + claridad de fee.  
4. Usar directorio: Epakon ya es miembro → posible **warm path** (sin contactar aún).  
5. Leer / archivar internamente el reporte *Mercado Farmacéutico Venezuela 2025* (Advantis) como intel sector — no sustituye pack.

---

## 9. Fuentes

- https://venecapital.org/home · /about-us · /venezuela · /ecosystem · /ecosystem/postulate · /membership · /directory · /actors-directory · /events · /contact · /info · /privacy-policy · /terms-of-service  
- https://api.venecapital.org/{events,posts,users/members,users/actors,users/board-members,…}  
- Bundle `main-*.js` (rutas Angular)

---

*Forense fan-out W1–W6 + jueces A/B — JARVIS 2026-08-13*
