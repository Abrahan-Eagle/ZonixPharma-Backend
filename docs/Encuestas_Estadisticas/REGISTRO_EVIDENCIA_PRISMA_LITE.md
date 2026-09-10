# Registro PRISMA-lite — evidencia de negocio de farmacias

> **Objetivo:** dejar trazabilidad de búsquedas, cribado, calidad y cadenas de citas.  
> **No es:** una revisión sistemática PRISMA completa ni una estadística de mercado. Los motores usados no entregan siempre un total reproducible.  
> **Ámbito:** propietarios, socios, administradores, gerentes, regentes con autoridad operativa y responsables de compras de farmacias privadas/minoristas.  
> **Última ronda:** 29 agosto 2026.

## Resultado rápido

- Se promovieron cinco fuentes a fichas: [`EE-14`](FICHAS/EE-14_BR_FEBRAFAR_IFEPEC_2200.md), [`EE-15`](FICHAS/EE-15_VE_MERIDA_COOPERACION_80.md), [`EE-16`](FICHAS/EE-16_VE_TACHIRA_INCENTIVOS_53.md), [`EE-17`](FICHAS/EE-17_BO_LA_PAZ_SISTEMAS_215.md) y [`EE-18`](FICHAS/EE-18_PE_PIURA_INVENTARIO_46.md).
- No apareció una encuesta multisede reciente dirigida a dueños de farmacias de Valencia/Carabobo.
- Cavefar publica contexto sobre SICM/SIVERCOS e inventario electrónico, pero no una encuesta abierta a propietarios.
- El cuello de botella es evidencia primaria en Valencia: [`../Lanzamiento/PLAN_CAMPO_VALENCIA.md`](../Lanzamiento/PLAN_CAMPO_VALENCIA.md).

## Criterios de cribado

### Incluir como ficha

1. Fuente primaria accesible (PDF, DOI, handle o informe institucional).
2. Farmacia comunitaria/minorista privada.
3. Respondiente con autoridad empresarial u operativa identificable.
4. Muestra, geografía, método y resultado cuantitativo con denominador.
5. Independientes separables de pacientes, hospitales y cadenas.

### Clasificaciones auxiliares

| Estado | Uso |
|---|---|
| `INCLUDE` | Ficha `CLAIM-3P`, con límites explícitos |
| `CONTEXT` | Útil para contexto, pero no cumple todos los criterios |
| `LEAD` | Pista real pendiente de fuente primaria o tablas |
| `EXCLUDE` | Universo incorrecto, atribución falsa, duplicado o método inservible |

### Puntuación de calidad (0–12)

Puntuar 0–2 en: ajuste del respondiente, cercanía geográfica a Valencia, actualidad, transparencia muestral, separación independiente/cadena y trazabilidad de fuente. La puntuación orienta la cautela; **no convierte un proxy extranjero en evidencia venezolana**.

## Fuentes incluidas en esta ronda

| ID | Fuente | n | Calidad | Razón y límite principal |
|---|---|---:|---:|---|
| EE-14 | IFEPEC/FEBRAFAR, Brasil 2025 | 2.200 propietarios | 8/12 | Gran muestra y PDF primario; geo BR, selección/tasa de respuesta no publicadas |
| EE-15 | Cooperación interempresarial, Mérida 2007 | 80 | 9/12 | VE + respondiente correcto + denominador; histórico y fuera de Valencia |
| EE-16 | Incentivos laborales, San Cristóbal 2012 | 53 dueños o gerentes | 7/12 | 42 independientes separables; histórico y muestra mixta por tipo |
| EE-17 | UMSA, La Paz 2025 | 215 | 9/12 | Muestra reciente y tablas exactas; proxy BO y servidor primario intermitente |
| EE-18 | ULADECH, Piura 2015 | 46 | 7/12 | Tablas verificadas; conveniencia e inconsistencia de denominador |

## Contexto y leads venezolanos

| Disposición | Estudio | Resultado del cribado |
|---|---|---|
| `CONTEXT` | Estrategias de negocios de farmacias de Maracaibo (2008), n=219 encargados/gerentes | Muestra grande, pero mezcla independientes/cadenas/franquicias y no publica porcentajes por ítem en el artículo recuperado |
| `CONTEXT` | Farmacovigilancia en regentes de Caracas (2004), n=150 | Buen instrumento y rol; histórico y centrado en conocimiento regulatorio, no negocio |
| `CONTEXT` | Programa LUZ, siete farmacias de Jesús Enrique Lossada (datos 2015) | Cinco artículos reutilizan las **mismas siete farmacias**; contar como un conjunto, no cinco replicaciones |
| `LEAD` | Guía de emprendimiento, San Cristóbal (2017), n=9 | Fuente primaria localizada; porcentajes en prosa (“más de 75%”, “más de 55%”) sin tablas ni conteos |
| `LEAD` | Farmacia El Terminal C.A., Angulo y Navas (2023) | Solo antecedente citado en otra tesis; sin PDF primario, n ni tablas verificables |

### Carabobo revisado

| Disposición | Caso | Por qué no es estimación de mercado |
|---|---|---|
| `CONTEXT` | Farmacia Sotavento, Valencia (2022), n=7 | Una farmacia; solo 2/7 son gerentes y las respuestas están agregadas |
| `CONTEXT` | Farmacia Bien Star Sur, Valencia (2017), n=3 | Una franquicia; 1 gerente + 2 analistas |
| `CONTEXT` | Farmacia Oshamarket, San Diego (2024), n=10 | Trabajadores y gerente sin resultados separables |
| `EXCLUDE` | Farmacia Oriana Isabel, Morón (2015), n=5 | Empleados administrativos, sin decisor identificado |
| `EXCLUDE` | Farmacia Gran Victoria, Valencia (2019), n=4 | Entrevistas abiertas, sin resultados cuantitativos |
| `EXCLUDE` | Locatel Ciudad Alianza, Guacara (2018) | Roles/n no fiables e inconsistencias internas |
| `EXCLUDE` | Drosalud, Naguanagua | Respondientes: compradores/pacientes y médicos |
| `EXCLUDE` | Farmacia El Toronjal, Maracay | Inconsistencia entre muestra declarada y tablas |

## Fuentes pendientes recuperadas

| Lead original | Fuente primaria | Decisión |
|---|---|---|
| Perú, 25 MYPES | [ULADECH 20.500.13032/22841](https://hdl.handle.net/20.500.13032/22841) | `EXCLUDE` como cifras 90%/87,5%: tablas dicen 25/25 (100%) y 22/25 (88%); el resumen es aritméticamente incompatible |
| Perú, inventario n=46 | [ULADECH 20.500.13032/1044](https://hdl.handle.net/20.500.13032/1044) | `INCLUDE` con cautela → EE-18 |
| Bolivia, sistemas n=215 | [UMSA 123456789/44136](https://repositorio.umsa.bo/xmlui/handle/123456789/44136) | `INCLUDE` → EE-17 |
| Táchira, riesgos/gestión | [Hacer y Saber, artículo 19980](http://erevistas.saber.ula.ve/index.php/hacerysaber/article/view/19980) | `LEAD`: n=9 y resultados sin tabla |

## Exclusiones metodológicas recurrentes

- Veritas/Pedernales: trabajadores de farmacia de **hospital público**, no independientes.
- Encuestas a pacientes o consumidores sin bloque separable de decisores.
- Sell-in, sell-out y censos presentados como opinión del dueño.
- Artículos secundarios sin acceso al informe original.
- Claims de proveedores de software sin instrumento publicado.
- El mismo trabajo de campo publicado varias veces.
- Porcentajes sin denominador o incompatibles con el tamaño muestral.

## Fuentes y consultas ejecutadas

### Repositorios

- RIUC Universidad de Carabobo.
- RIUJAP/UJAP: se revisaron los 10 títulos recuperados por búsqueda `farmacia`.
- Saber UCV y Saber ULA.
- SciELO Venezuela, Redalyc y revistas institucionales.
- ULADECH/CONCYTEC (Perú) y UMSA (Bolivia).
- FEBRAFAR/IFEPEC (Brasil).

### Consultas base

```text
site:riuc.bc.uc.edu.ve farmacia Valencia encuesta gerente propietario administrador tesis
site:riujap.ujap.edu.ve farmacia Valencia encuesta gerente propietario administrador
"Farmacia El Terminal C.A." tesis OR investigación OR encuesta
"farmacias independientes" (dueños OR gerentes OR administradores OR regentes) Venezuela encuesta
site:saber.ula.ve farmacias gerentes encuesta Venezuela
site:ve.scielo.org farmacia Venezuela encuesta farmacéuticos comunitaria
("farmácias independentes" OR drogarias) (proprietários OR gestores) questionário
("boticas y farmacias independientes") (propietarios OR gerentes) software inventario
```

Excluir en búsqueda: `pacientes`, `usuarios`, `hospital`, `farmacia hospitalaria`, salvo para comprobar una atribución dudosa.

## Cadena de citas

1. Extraer título, autores, tutor, universidad, instrumento y bibliografía de cada ficha.
2. Buscar título exacto y citas posteriores en OpenAlex, LA Referencia, Lens/Scholar manual y repositorio de origen.
3. Revisar trabajos hermanos por tutor, colección y año.
4. Buscar frases exactas de preguntas/tablas para localizar el original.
5. Desde prensa o gremio: llegar a informe PDF y metodología antes de promover.

## Plantilla para la siguiente ronda

| Fecha | Fuente/consulta | Resultados revisados | ID duplicados | Incluidos | Excluidos y motivo | Responsable |
|---|---|---:|---:|---:|---|---|
| AAAA-MM-DD | URL o consulta exacta | 0 | 0 | 0 | — | — |

## Criterio de parada

Cerrar una ronda cuando dos iteraciones consecutivas no produzcan una fuente primaria de calidad nueva, se agoten los títulos del repositorio o solo aparezcan duplicados/pacientes/hospitales. Después de FEBRAFAR + Carabobo + fuentes pendientes, priorizar campo Valencia en vez de seguir acumulando proxies.
