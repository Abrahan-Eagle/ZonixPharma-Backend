#!/usr/bin/env bash
# check_deck_overflow.sh — detecta si el cuerpo de una pagina del deck angel
# se solapa con el pie de pagina o desborda la pagina.
#
# Por que existe:
#   .foot esta en position:absolute (bottom:20px) y .body tiene flex:1, asi que
#   el cuerpo NO respeta al pie: crece por debajo y se monta encima. El solape
#   no rompe la compilacion ni lanza error; solo se ve mal en el PDF.
#   Ya ocurrio tres veces (p6, p9 y luego p7/p8/p9/p11).
#
# Uso:
#   bash docs/Lanzamiento/_tools/check_deck_overflow.sh
#   bash docs/Lanzamiento/_tools/check_deck_overflow.sh ruta/al/deck.pdf
#
# Salida: codigo 0 si todas las paginas estan dentro del limite, 1 si alguna no.

set -uo pipefail

PDF="${1:-docs/Lanzamiento/Zonix_Pharma_Pitch_Deck_Angel.pdf}"

# Geometria del deck (pagina 1280x720 px = 960x540 pt):
#   cuerpo debe terminar en      y <= 492 pt  (720 - 64 de padding-bottom)
#   borde superior del pie                509 pt
#   texto del pie                 513.5 - 527.2 pt
LIMITE_CUERPO=492.0
INICIO_FOOTER=509.0

if [[ ! -f "$PDF" ]]; then
  echo "ERROR: no existe el PDF: $PDF" >&2
  echo "Uso: bash $0 [ruta/al/deck.pdf]" >&2
  exit 2
fi

if ! command -v pdftotext >/dev/null 2>&1; then
  echo "ERROR: falta pdftotext (instala poppler-utils)." >&2
  exit 2
fi

if ! command -v python3 >/dev/null 2>&1; then
  echo "ERROR: falta python3." >&2
  exit 2
fi

TMP="$(mktemp -t deck_bbox.XXXXXX.xml)"
trap 'rm -f "$TMP"' EXIT

pdftotext -bbox "$PDF" "$TMP" || {
  echo "ERROR: pdftotext fallo sobre $PDF" >&2
  exit 2
}

LIMITE_CUERPO="$LIMITE_CUERPO" INICIO_FOOTER="$INICIO_FOOTER" PDF="$PDF" python3 - "$TMP" <<'PY'
import os
import re
import sys

limite = float(os.environ["LIMITE_CUERPO"])
inicio_footer = float(os.environ["INICIO_FOOTER"])
pdf = os.environ["PDF"]

xml = open(sys.argv[1], encoding="utf-8", errors="replace").read()
paginas = re.findall(r'<page width="([\d.]+)" height="([\d.]+)">(.*?)</page>', xml, re.S)

if not paginas:
    print("ERROR: no se pudo leer ninguna pagina del PDF.", file=sys.stderr)
    sys.exit(2)

PATRON = r'<word xMin="([\d.]+)" yMin="([\d.]+)" xMax="([\d.]+)" yMax="([\d.]+)">(.*?)</word>'

fallos = []
peor = 0.0

for numero, (ancho, alto, cuerpo) in enumerate(paginas, start=1):
    alto = float(alto)
    palabras = [
        (float(y0), float(y1), t)
        for _x0, y0, _x1, y1, t in re.findall(PATRON, cuerpo)
    ]
    # El texto del pie vive por debajo de INICIO_FOOTER: se analiza aparte.
    del_cuerpo = [p for p in palabras if p[0] <= inicio_footer]

    if not del_cuerpo:
        print(f"  p{numero:02d}  (sin texto)")
        continue

    y_max = max(p[1] for p in del_cuerpo)
    peor = max(peor, y_max)

    if y_max > limite:
        infractoras = sorted([p for p in del_cuerpo if p[1] > limite], key=lambda p: -p[1])
        # Extremo de pagina: el texto se imprime fuera del area visible.
        if y_max > alto:
            tipo = "DESBORDA LA PAGINA"
        else:
            tipo = "pisa el pie"
        texto = " ".join(t for _y0, _y1, t in infractoras)[:58]
        fallos.append((numero, y_max, tipo, texto))
        print(f"  p{numero:02d}  FALLA  +{y_max - limite:5.1f} pt  ({tipo})  {texto}")
    else:
        print(f"  p{numero:02d}  ok     yMax={y_max:6.1f}")

print()
print(f"limite del cuerpo: {limite:.1f} pt | borde del pie: {inicio_footer:.1f} pt")
print(f"peor yMax: {peor:.1f} pt | paginas: {len(paginas)}")

if fallos:
    print()
    print(f"RESULTADO: {len(fallos)} pagina(s) fuera del limite.")
    print()
    print("Como corregir (preferir recortar antes que encoger tipografia):")
    print("  - reducir padding de tablas/celdas y margenes entre bloques")
    print("  - bajar la altura de los SVG de los graficos")
    print("  - acortar el titular o quitar una linea de texto redundante")
    print("  - NO tocar cifras del pack")
    sys.exit(1)

print()
print("RESULTADO: todas las paginas dentro del limite.")
sys.exit(0)
PY
