<?php

namespace App\Http\Controllers\Buyer;

/**
 * @deprecated Renombrado a {@see \App\Http\Controllers\Buyer\PharmacyController}
 *             en la migración Eats → Pharma. Esta subclase queda como puente
 *             temporal: las rutas legacy `/api/buyer/restaurants` siguen
 *             funcionando con el contrato canónico de farmacias.
 */
class RestaurantController extends PharmacyController
{
}
