#!/usr/bin/env python3
"""Genera MODELO_FINANCIERO_ZONIX_PHARMA.fods (Flat ODS) para conversión LibreOffice → xlsx."""
from __future__ import annotations
import xml.sax.saxutils as xu
from pathlib import Path

OUT = Path(__file__).resolve().parent.parent / "MODELO_FINANCIERO_ZONIX_PHARMA.fods"

# --- Datos ancla pack v3.8.2 (Lean) ---
MONTHS = list(range(1, 13))
FIRMADAS = [13, 13, 14, 15, 15, 16, 16, 16, 17, 17, 17, 16]
ACTIVAS = [40, 51, 62, 74, 85, 97, 108, 119, 130, 141, 151, 159]
REVENUE = [1500, 2168, 3100, 3700, 4250, 4850, 5400, 5950, 6500, 7050, 7550, 7950]
BURN = [8011, 8011, 8347, 8347, 8347, 8347, 7980, 7980, 7980, 7980, 7980, 7980]
CASH_INIT = [78153, 71642, 65799, 60552, 55905, 51808, 48311, 45731, 43701, 42221, 41291, 40861]
CASH_FINAL = [71642, 65799, 60552, 55905, 51808, 48311, 45731, 43701, 42221, 41291, 40861, 40831]

TIER_LEAN = 111988
TIER_BASE = 157268
TIER_GROWTH = 187478
FASE0_TOTAL = 33835
FASE0_0A = 17813
FASE0_0B = 8011
FASE0_0C = 8011
CAJA_DAYD = 78153
ONE_SHOTS = 14208
BURN_Y1 = 97290
RESERVA = 490
BURN_AVG = 8108
BURN_AVG_BASE = 10898
BURN_AVG_GROWTH = 12698
ONE_SHOTS_BASE = 15208
SAFE_CAP_LEAN = 600000
SAFE_CAP_BASE = 912814
SAFE_CAP_GROWTH = 1205345

FCF_YEARS = [-111988, -37322, 6000, 84000, 110000, 150000]  # año0..5
DISCOUNT = 0.25
EQUITY_INV = 0.1866


def esc(s: str) -> str:
    return xu.escape(str(s))


def cell(ref: str, val=None, formula: str | None = None, style: str | None = None, t: str = "float"):
    attrs = f'table:style-name="{style}" ' if style else ""
    if formula:
        inner = f'<table:formula>{esc(formula)}</table:formula>'
        if val is not None:
            inner += f'<text:p>{esc(val)}</text:p>'
        return f'<table:table-cell {attrs}table:formula="{esc(formula)}" office:value-type="float"><text:p>{esc(val if val is not None else "")}</text:p></table:table-cell>'
    if val is None or val == "":
        return f'<table:table-cell {attrs}/>'
    if isinstance(val, str):
        return f'<table:table-cell {attrs}office:value-type="string"><text:p>{esc(val)}</text:p></table:table-cell>'
    return f'<table:table-cell {attrs}office:value-type="float" office:value="{val}"><text:p>{val}</text:p></table:table-cell>'


def row(cells, rstyle=None):
    rs = f' table:style-name="{rstyle}"' if rstyle else ""
    return f"<table:table-row{rs}>" + "".join(cells) + "</table:table-row>"


def sheet(name: str, rows: list[str]) -> str:
    body = "\n".join(rows)
    return f"""<table:table table:name="{esc(name)}" table:style-name="ta1">
{body}
</table:table>"""


def build_supuestos() -> list[str]:
    rows = [
        row([cell("A1", "Zonix Pharma — Supuestos y Unit Economics"), cell("B1", "Valor"), cell("C1", "Fuente")]),
        row([cell("A3", "ARPF placeholder USD/mes"), cell("B3", 50), cell("C3", "UNIT_ECONOMICS")]),
        row([cell("A4", "CAC farmacia USD"), cell("B4", 139), cell("C4", "UNIT_ECONOMICS")]),
        row([cell("A5", "Churn mensual"), cell("B5", 0.05), cell("C5", "UNIT_ECONOMICS")]),
        row([cell("A6", "LTV USD"), cell("B6", 1000), cell("C6", "UNIT_ECONOMICS")]),
        row([cell("A7", "LTV/CAC"), cell("B7", 7.2), cell("C7", "UNIT_ECONOMICS")]),
        row([cell("A8", "Payback CAC (meses)"), cell("B8", 2.8), cell("C8", "UNIT_ECONOMICS")]),
        row([cell("A9", "Margen bruto plataforma"), cell("B9", 0.92), cell("C9", "UNIT_ECONOMICS")]),
        row([cell("A11", "Tier Lean capital USD"), cell("B11", TIER_LEAN), cell("C11", "PRESUPUESTO")]),
        row([cell("A12", "Tier Base capital USD"), cell("B12", TIER_BASE), cell("C12", "PRESUPUESTO")]),
        row([cell("A13", "Tier Growth capital USD"), cell("B13", TIER_GROWTH), cell("C13", "PRESUPUESTO")]),
        row([cell("A14", "SAFE cap Lean USD"), cell("B14", SAFE_CAP_LEAN), cell("C14", "ESTRUCTURA_LEGAL")]),
        row([cell("A15", "Equity ref. Lean"), cell("B15", EQUITY_INV), cell("C15", "ESTRUCTURA_LEGAL")]),
        row([cell("A16", "Burn prom. Lean USD/mes"), cell("B16", BURN_AVG), cell("C16", "PRESUPUESTO")]),
        row([cell("A17", "Tasa descuento VAN"), cell("B17", DISCOUNT), cell("C17", "SUPUESTO MODELO")]),
        row([cell("A18", "Caja Day-D USD"), cell("B18", CAJA_DAYD), cell("C18", "PROYECCION §0.1")]),
        row([cell("A19", "Caja cierre M12 USD"), cell("B19", 40831), cell("C19", "PROYECCION §1.3")]),
    ]
    return rows


def build_inversion() -> list[str]:
    rows = [
        row([cell("A1", "Inversión detallada y Fase 0 — Lean"), cell("D1", "Cant"), cell("E1", "USD/u"), cell("F1", "Total USD")]),
        row([cell("A3", "ONE-SHOTS FASE 0")]),
        row([cell("A4", "Legal + demo + visitas + reservas"), cell("D4", 1), cell("E4", 4458), cell("F4", 4458)]),
        row([cell("A5", "Depósito + amueblado HQ"), cell("D5", 1), cell("E5", 1250), cell("F5", 1250)]),
        row([cell("A6", "Adecuación HQ"), cell("D6", 1), cell("E6", 400), cell("F6", 400)]),
        row([cell("A7", "CapEx 4 PCs"), cell("D7", 4), cell("E7", 925), cell("F7", 3700)]),
        row([cell("A8", "TOTAL one-shots"), cell("F8", 9808, formula="of:=[Inversion.F4]+[Inversion.F5]+[Inversion.F6]+[Inversion.F7]")]),
        row([cell("A10", "OUTFLOW FASE 0")]),
        row([cell("A11", "Sub-fase 0a T+0-30"), cell("F11", FASE0_0A)]),
        row([cell("A12", "Sub-fase 0b T+30-60"), cell("F12", FASE0_0B)]),
        row([cell("A13", "Sub-fase 0c T+60-90"), cell("F13", FASE0_0C)]),
        row([cell("A14", "TOTAL Fase 0"), cell("F14", FASE0_TOTAL, formula="of:=[Inversion.F11]+[Inversion.F12]+[Inversion.F13]")]),
        row([cell("A15", f"Caja al Day-D ({TIER_LEAN} - Fase0)"), cell("F15", CAJA_DAYD, formula=f"of:={TIER_LEAN}-[Inversion.F14]")]),
        row([cell("A17", "USE OF FUNDS 12M")]),
        row([cell("A18", "One-shots"), cell("F18", ONE_SHOTS)]),
        row([cell("A19", "Burn M1-M12"), cell("F19", BURN_Y1)]),
        row([cell("A20", "Reserva"), cell("F20", RESERVA)]),
        row([cell("A21", "TOTAL Lean"), cell("F21", TIER_LEAN, formula="of:=[Inversion.F18]+[Inversion.F19]+[Inversion.F20]")]),
    ]
    return rows


def build_ano1() -> list[str]:
    headers = ["Mes", "Firmadas", "Activas", "Ingresos", "Egresos", "FCF mes", "FCF acum", "Cash ini", "Cash fin"]
    rows = [row([cell(f"{chr(65+i)}1", h) for i, h in enumerate(headers)])]
    for i, m in enumerate(MONTHS):
        r = i + 2
        fcf_formula = f"of:=[Ano1.D{r}]-[Ano1.E{r}]"
        if i == 0:
            acum_formula = f"of:=[Ano1.F{r}]"
        else:
            acum_formula = f"of:=[Ano1.G{r-1}]+[Ano1.F{r}]"
        cash_fin_formula = f"of:=[Ano1.H{r}]+[Ano1.D{r}]-[Ano1.E{r}]"
        if i == 0:
            h_cell = cell(f"H{r}", CASH_INIT[0])
        else:
            h_cell = cell(f"H{r}", CASH_INIT[i], formula=f"of:=[Ano1.I{r-1}]")
        rows.append(row([
            cell(f"A{r}", m),
            cell(f"B{r}", FIRMADAS[i]),
            cell(f"C{r}", ACTIVAS[i]),
            cell(f"D{r}", REVENUE[i]),
            cell(f"E{r}", BURN[i]),
            cell(f"F{r}", REVENUE[i] - BURN[i], formula=fcf_formula),
            cell(f"G{r}", REVENUE[i] - BURN[i] if i == 0 else None, formula=acum_formula),
            h_cell,
            cell(f"I{r}", CASH_FINAL[i], formula=cash_fin_formula),
        ]))
    r = 14
    rows.append(row([
        cell(f"A{r}", "TOTAL"),
        cell(f"D{r}", 59968, formula="of:=SUM([Ano1.D2:D13])"),
        cell(f"E{r}", 97290, formula="of:=SUM([Ano1.E2:E13])"),
        cell(f"F{r}", -37322, formula="of:=SUM([Ano1.F2:F13])"),
        cell(f"I{r}", 40831),
    ]))
    return rows


def build_sensibilidad() -> list[str]:
    rows = [
        row([cell("A1", "Sensibilidad tiers"), cell("B1", "Lean"), cell("C1", "Base"), cell("D1", "Growth")]),
        row([cell("A2", "Capital USD"), cell("B2", TIER_LEAN), cell("C2", TIER_BASE), cell("D2", TIER_GROWTH)]),
        row([cell("A3", "Burn prom/mes"), cell("B3", BURN_AVG), cell("C3", BURN_AVG_BASE), cell("D3", BURN_AVG_GROWTH)]),
        row([cell("A4", "One-shots"), cell("B4", ONE_SHOTS), cell("C4", ONE_SHOTS_BASE), cell("D4", ONE_SHOTS_BASE)]),
        row([cell("A5", "Activas equilibrio"), cell("B5", 159), cell("C5", 162), cell("D5", 174)]),
        row([cell("A7", "Escenarios P10/P50/P90")]),
        row([cell("A8", "Escenario"), cell("B8", "Activas M12"), cell("C8", "ARPF"), cell("D8", "Cash M12 ord.")]),
        row([cell("A9", "P10 pesimista"), cell("B9", 120), cell("C9", 40), cell("D9", "25-32k")]),
        row([cell("A10", "P50 base"), cell("B10", 159), cell("C10", 50), cell("D10", 40831)]),
        row([cell("A11", "P90 optimista"), cell("B11", 200), cell("C11", 55), cell("D11", "48-55k")]),
    ]
    return rows


def build_ano25() -> list[str]:
    years = ["Año 0", "Año 1", "Año 2", "Año 3", "Año 4", "Año 5"]
    activas = ["—", 159, 220, 440, 520, 600]
    revenue = [0, 59968, 102000, 192000, 240000, 300000]
    costs = [TIER_LEAN, BURN_Y1, 96000, 108000, 130000, 150000]
    fcf = FCF_YEARS
    rows = [
        row([cell("A1", "Proyección anual Año 0-5"), cell("B1", "Activas cierre"), cell("C1", "Revenue"), cell("D1", "Costos"), cell("E1", "FCF")]),
    ]
    for i, y in enumerate(years):
        r = i + 2
        act = activas[i]
        act_cell = cell(f"B{r}", act) if isinstance(act, int) else cell(f"B{r}", act)
        fcf_cell = cell(f"E{r}", fcf[i]) if i == 0 else cell(f"E{r}", fcf[i], formula=f"of:=[Ano2_5.C{r}]-[Ano2_5.D{r}]")
        rows.append(row([
            cell(f"A{r}", y),
            act_cell,
            cell(f"C{r}", revenue[i]),
            cell(f"D{r}", costs[i]),
            fcf_cell,
        ]))
    return rows


def build_flujo_total() -> list[str]:
    rows = [
        row([cell("A1", "Flujo consolidado + VAN"), cell("B1", "Año 0"), cell("C1", "Año 1"), cell("D1", "Año 2"), cell("E1", "Año 3"), cell("F1", "Año 4"), cell("G1", "Año 5")]),
        row([cell("A2", "FCF USD"), cell("B2", -111988), cell("C2", -37322), cell("D2", 6000), cell("E2", 84000), cell("F2", 110000), cell("G2", 150000)]),
        row([cell("A3", "Factor descuento 25%"), cell("B3", 1), cell("C3", 0.8), cell("D3", 0.64), cell("E3", 0.512), cell("F3", 0.4096), cell("G3", 0.32768)]),
        row([cell("A4", "VP flujo"), cell("B4", -111988), 
             cell("C4", None, formula="of:=[FlujoTotal.C2]*[FlujoTotal.C3]"),
             cell("D4", None, formula="of:=[FlujoTotal.D2]*[FlujoTotal.D3]"),
             cell("E4", None, formula="of:=[FlujoTotal.E2]*[FlujoTotal.E3]"),
             cell("F4", None, formula="of:=[FlujoTotal.F2]*[FlujoTotal.F3]"),
             cell("G4", None, formula="of:=[FlujoTotal.G2]*[FlujoTotal.G3]")]),
        row([cell("A6", "VAN(5) USD"), cell("B6", None, formula="of:=SUM([FlujoTotal.B4:G4])")]),
        row([cell("A7", "VAN(3) USD"), cell("B7", None, formula="of:=SUM([FlujoTotal.B4:D4])")]),
        row([cell("A9", "Reparto ilustrativo FCF Año 5")]),
        row([cell("A10", "Inversor SAFE 18,66%"), cell("B10", None, formula=f"of:=[FlujoTotal.G2]*{EQUITY_INV}")]),
        row([cell("A11", "Founder 81,34%"), cell("B11", None, formula=f"of:=[FlujoTotal.G2]*(1-{EQUITY_INV})")]),
        row([cell("A13", "NOTA: reparto ilustrativo — SAFE no reparte caja pre-conversión")]),
    ]
    return rows


def build_drivers() -> list[str]:
    rows = [
        row([cell("A1", "Drivers"), cell("B1", "M1"), cell("C1", "M6"), cell("D1", "M12")]),
        row([cell("A2", "Farmacias activas"), cell("B2", 40), cell("C2", 97), cell("D2", 159)]),
        row([cell("A3", "ARPF USD"), cell("B3", 50), cell("C3", 50), cell("D3", 50)]),
        row([cell("A4", "Revenue mensual"), cell("B4", 1500), cell("C4", 4850), cell("D4", 7950)]),
        row([cell("A6", "Crecimiento anual revenue %"), cell("B6", "A1→2"), cell("C6", 0.70), cell("D6", "SUPUESTO LP")]),
        row([cell("A7", ""), cell("B7", "A2→3"), cell("C7", 0.88)]),
        row([cell("A8", ""), cell("B8", "A3→4"), cell("C8", 0.25)]),
        row([cell("A9", ""), cell("B9", "A4→5"), cell("C9", 0.25)]),
    ]
    return rows


def main():
    sheets = [
        sheet("Supuestos", build_supuestos()),
        sheet("Inversion", build_inversion()),
        sheet("Ano1", build_ano1()),
        sheet("Sensibilidad", build_sensibilidad()),
        sheet("Ano2_5", build_ano25()),
        sheet("FlujoTotal", build_flujo_total()),
        sheet("Drivers", build_drivers()),
    ]
    content = f"""<?xml version="1.0" encoding="UTF-8"?>
<office:document xmlns:office="urn:oasis:names:tc:opendocument:xmlns:office:1.0"
 xmlns:table="urn:oasis:names:tc:opendocument:xmlns:table:1.0"
 xmlns:text="urn:oasis:names:tc:opendocument:xmlns:text:1.0"
 xmlns:of="urn:oasis:names:tc:opendocument:xmlns:of:1.2"
 office:version="1.2" office:mimetype="application/vnd.oasis.opendocument.spreadsheet">
<office:body>
<office:spreadsheet>
{"".join(sheets)}
</office:spreadsheet>
</office:body>
</office:document>
"""
    OUT.write_text(content, encoding="utf-8")
    print(f"Written: {OUT}")


if __name__ == "__main__":
    main()
