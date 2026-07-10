#!/usr/bin/env python3
"""Verifica que existan los archivos del data room inversor (manifest_inversor.yaml)."""

from __future__ import annotations

import sys
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


def check_tier(name: str, tier: dict, *, strict_required: bool) -> tuple[list[str], list[str]]:
    missing_required: list[str] = []
    missing_optional: list[str] = []

    for entry in tier.get("paths", []):
        p = resolve(entry["path"])
        required = entry.get("required", True)
        if p.is_file():
            continue
        label = f"[{name}] {entry['path']}"
        if entry.get("note"):
            label += f" ({entry['note']})"
        if required and strict_required:
            missing_required.append(label)
        elif required:
            missing_required.append(label)
        else:
            missing_optional.append(label)

    for entry in tier.get("optional", []):
        path_str = entry if isinstance(entry, str) else entry.get("path", "")
        p = resolve(path_str)
        if not p.is_file():
            missing_optional.append(f"[{name}] {path_str} (optional)")

    return missing_required, missing_optional


def main() -> int:
    if not MANIFEST.is_file():
        print(f"ERROR: manifest not found: {MANIFEST}", file=sys.stderr)
        return 2

    data = load_manifest()
    tiers = data.get("tiers", {})

    all_missing_required: list[str] = []
    all_missing_optional: list[str] = []

    for tier_name, tier_body in tiers.items():
        req, opt = check_tier(tier_name, tier_body, strict_required=True)
        all_missing_required.extend(req)
        all_missing_optional.extend(opt)

    print(f"Manifest: {MANIFEST.relative_to(REPO)}")
    print(f"Repo root: {REPO}")

    if all_missing_required:
        print("\nMISSING (required):")
        for m in all_missing_required:
            print(f"  - {m}")

    if all_missing_optional:
        print("\nMISSING (optional / referencias externas):")
        for m in all_missing_optional:
            print(f"  - {m}")

    if all_missing_required:
        print("\nVERIFY FAIL: faltan archivos obligatorios del data room inversor.")
        return 1

    print("\nVERIFY OK: data room inversor — archivos obligatorios presentes.")
    if all_missing_optional:
        print(f"  ({len(all_missing_optional)} opcionales ausentes — OK para zip mínimo)")
    return 0


if __name__ == "__main__":
    sys.exit(main())
