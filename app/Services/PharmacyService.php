<?php

namespace App\Services;

use App\Models\BusinessType;
use App\Models\Commerce;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

/**
 * Servicio de catálogo público de farmacias (Zonix Pharma).
 *
 * Cada `Commerce` con `business_type` farmacéutico expone su catálogo a los
 * compradores. Los criterios de visibilidad son:
 *   - status = approved
 *   - open = true
 *   - business_type_id pertenece a una de las tipologías farmacéuticas
 *     declaradas en `BusinessTypeSeeder` (Farmacia, Farmacia 24h, Droguería,
 *     Boticario, etc.).
 *
 * **Nota sobre `medicine_lots`:** la tabla existe para trazabilidad demo y
 * relaciones en `Product::lots()`, pero este servicio no consulta lotes ni
 * aplica despacho FIFO. Los lotes son informativos hasta que exista un flujo
 * de dispensación por lote en commerce/delivery.
 */
class PharmacyService
{
    /**
     * Tipos de negocio considerados "farmacia" para el catálogo público.
     */
    public const PHARMACY_BUSINESS_TYPES = [
        'Farmacia',
        'Farmacia 24h',
        'Droguería',
        'Boticario',
        'Tienda de salud y bienestar',
        'Óptica',
        'Ortopedia',
        'Tienda infantil / pañalera',
    ];

    public function getAllPharmacies(int $perPage = 15): LengthAwarePaginator
    {
        return $this->baseQuery()->paginate($perPage);
    }

    public function getPharmacyById(int $id): ?Commerce
    {
        return Commerce::with(['profile', 'products.category', 'addresses', 'businessTypeRelation', 'phones'])
            ->find($id);
    }

    /**
     * Farmacia visible en catálogo público (aprobada, abierta y con
     * `business_type_id` farmacéutico).
     */
    public function getCatalogVisiblePharmacyById(int $id): ?Commerce
    {
        return $this->baseQuery()
            ->where('id', $id)
            ->with(['profile', 'products.category', 'addresses', 'businessTypeRelation', 'phones'])
            ->first();
    }

    /**
     * Construye la query base con los filtros Pharma. Si la tabla
     * `business_types` aún no fue seeded (entornos vacíos), no aplica el
     * filtro de tipo para no esconder TODO el catálogo en CI.
     */
    protected function baseQuery()
    {
        $pharmacyTypeIds = BusinessType::query()
            ->whereIn('name', self::PHARMACY_BUSINESS_TYPES)
            ->pluck('id')
            ->all();

        $query = Commerce::query()
            ->where('status', 'approved')
            ->where('open', true)
            ->with(['profile', 'addresses', 'businessTypeRelation', 'phones']);

        if (! empty($pharmacyTypeIds)) {
            $query->whereIn('business_type_id', $pharmacyTypeIds);
        }

        return $query;
    }
}
