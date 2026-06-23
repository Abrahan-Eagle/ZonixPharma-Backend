#!/usr/bin/env python3
"""Export all md/ files to docx/."""
import subprocess
import sys
from pathlib import Path

TOOLS = Path(__file__).resolve().parent
subprocess.check_call([sys.executable, str(TOOLS / "md_to_docx.py")])
