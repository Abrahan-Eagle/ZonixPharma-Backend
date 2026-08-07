#!/usr/bin/env python3
"""Verify Gabriel pack: anchors, disclaimers, no tech jargon."""
import re
import sys
from pathlib import Path

PACK = Path(__file__).resolve().parent.parent
MD_DIR = PACK / "md"

ANCHORS = [
    "237.412",
    "187.152",
    "159",
    "7,5",
    "7.5",
    "Gabriel",
]

# Cifras legacy que NO deben aparecer como ask vigente (histórico etiquetado OK)
LEGACY_ASK = [
    "111.988",
    "210.760",
    "174.102",
]

BANNED = [
    "generate_modelo",
    "verify_modelo",
    "merge_cols",
    "#00B050",
    "jarvis-core",
    "zonix-financial-model",
    "php artisan",
]

def has_disclaimer(text: str) -> bool:
    t = text.lower()
    return "no es solicitud" in t or "no solicitud" in t or "no es una solicitud" in t


def has_revisar_section(text: str) -> bool:
    t = text.lower()
    return (
        "qué revisar juntos" in t
        or "que revisar juntos" in t
        or "qué nos gustaría que revises" in t
        or "que nos gustaría que revises" in t
    )

DOC18_REQUIRED = ["Regla de oro", "Hoja3", "sección A"]


def read_all_md() -> str:
    parts = []
    for p in sorted(MD_DIR.glob("*.md")):
        parts.append(p.read_text(encoding="utf-8"))
    return "\n".join(parts)


def verify_file(path: Path) -> list[str]:
    errors = []
    text = path.read_text(encoding="utf-8")
    name = path.name
    is_mirror = "Espejo Pack Aliado" in text[:400]

    if not is_mirror and not has_disclaimer(text):
        errors.append(f"{name}: falta disclaimer 'no solicitud de inversión'")

    if not is_mirror:
        for b in BANNED:
            if b.lower() in text.lower():
                errors.append(f"{name}: contiene jargon técnico '{b}'")

    if name == "18_Guia_Modelo_Financiero.md" and not is_mirror:
        for req in DOC18_REQUIRED:
            if req not in text:
                errors.append(f"{name}: falta '{req}'")

    if not is_mirror and not has_revisar_section(text):
        errors.append(f"{name}: falta sección 'Qué revisar juntos'")

    return errors


def main():
    if not MD_DIR.exists():
        print("FAIL: md/ no existe")
        sys.exit(1)

    md_files = sorted(MD_DIR.glob("*.md"))
    if len(md_files) < 18:
        print(f"FAIL: esperados 18 md, hay {len(md_files)}")
        sys.exit(1)

    all_text = read_all_md()
    missing_anchors = [a for a in ANCHORS if a not in all_text]
    if missing_anchors:
        print(f"WARN: anclas no encontradas en pack completo: {missing_anchors}")

    # Legacy ask as vigente (sin etiqueta histórico/OBSOLETO en la misma línea)
    for legacy in LEGACY_ASK:
        for p in md_files:
            for i, line in enumerate(p.read_text(encoding="utf-8").splitlines(), 1):
                if legacy not in line:
                    continue
                low = line.lower()
                if any(x in low for x in ("histórico", "obsoleto", "no vigentes", "no usar", "prohibido", "legado")):
                    continue
                print(f"WARN: {p.name}:{i} cifra legacy sin etiqueta: {legacy}")

    errors = []
    for p in md_files:
        errors.extend(verify_file(p))

    if errors:
        print("VERIFY FAILED:")
        for e in errors:
            print(f"  - {e}")
        sys.exit(1)

    print(f"VERIFY OK: {len(md_files)} documentos")
    sys.exit(0)


if __name__ == "__main__":
    main()
