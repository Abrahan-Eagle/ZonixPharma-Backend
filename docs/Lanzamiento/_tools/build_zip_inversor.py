#!/usr/bin/env python3
"""Genera zip del data room inversor según manifest_inversor.yaml."""

from __future__ import annotations

import argparse
import sys
import zipfile
from datetime import date
from pathlib import Path

try:
    import yaml
except ImportError:
    print("ERROR: PyYAML required (pip install pyyaml)", file=sys.stderr)
    sys.exit(2)

LANZAMIENTO = Path(__file__).resolve().parents[1]
DOCS = LANZAMIENTO.parent
REPO = DOCS.parent
MANIFEST = LANZAMIENTO / "manifest_inversor.yaml"


def load_manifest() -> dict:
    with MANIFEST.open(encoding="utf-8") as f:
        return yaml.safe_load(f)


def resolve(path_str: str) -> Path:
    if path_str.startswith("Lanzamiento/"):
        return DOCS / path_str
    return DOCS / path_str


def collect_paths(data: dict, tier: str, include_optional: bool) -> list[tuple[Path, str]]:
    tiers = data.get("tiers", {})
    out: list[tuple[Path, str]] = []
    seen: set[str] = set()

    def add_entry(path_str: str) -> None:
        if path_str in seen:
            return
        seen.add(path_str)
        src = resolve(path_str)
        if not src.is_file():
            return
        # Dentro del zip: carpeta plana bajo ZonixPharma_DataRoom/
        arcname = path_str.replace("Lanzamiento/", "")
        out.append((src, f"ZonixPharma_DataRoom/{arcname}"))

    if tier in ("minimo", "full"):
        body = tiers.get("zip_minimo", {})
        for entry in body.get("paths", []):
            add_entry(entry["path"])
        if include_optional:
            for entry in body.get("optional", []):
                path_str = entry if isinstance(entry, str) else entry.get("path", "")
                add_entry(path_str)

    if tier == "full":
        for tier_name in ("data_room_extendido", "dd_tecnica", "referencias_regulatorias"):
            body = tiers.get(tier_name, {})
            for entry in body.get("paths", []):
                add_entry(entry["path"])

    return out


def main() -> int:
    parser = argparse.ArgumentParser(description="Build investor data room zip")
    parser.add_argument(
        "--tier",
        choices=("minimo", "full"),
        default="minimo",
        help="minimo = zip ~30 min; full = data room extendido + DD",
    )
    parser.add_argument(
        "--no-optional",
        action="store_true",
        help="Excluir archivos opcionales del tier zip_minimo",
    )
    parser.add_argument(
        "-o",
        "--output",
        type=Path,
        default=None,
        help="Ruta del zip de salida",
    )
    args = parser.parse_args()

    if not MANIFEST.is_file():
        print(f"ERROR: manifest not found: {MANIFEST}", file=sys.stderr)
        return 2

    data = load_manifest()
    files = collect_paths(data, args.tier, include_optional=not args.no_optional)

    if not files:
        print("ERROR: no files to zip (¿manifest vacío o archivos ausentes?)", file=sys.stderr)
        return 1

    suffix = "minimo" if args.tier == "minimo" else "full"
    out = args.output or (LANZAMIENTO / f"ZonixPharma_DataRoom_{suffix}_{date.today().isoformat()}.zip")

    with zipfile.ZipFile(out, "w", compression=zipfile.ZIP_DEFLATED) as zf:
        for src, arcname in sorted(files, key=lambda x: x[1]):
            zf.write(src, arcname)
            print(f"  + {arcname}")

    print(f"\nZIP OK: {out} ({len(files)} archivos)")
    return 0


if __name__ == "__main__":
    sys.exit(main())
