<?php

namespace App\Services;

/**
 * @deprecated Renombrado a {@see \App\Services\PharmacyService} en la migración
 *             Eats → Pharma. Esta clase queda como puente para tests
 *             legacy (`RestaurantControllerTest`) hasta su retiro definitivo.
 */
class RestaurantService extends PharmacyService
{
    /** @deprecated usar {@see PharmacyService::getAllPharmacies()} */
    public function getAllRestaurants(int $perPage = 15)
    {
        return $this->getAllPharmacies($perPage);
    }

    /** @deprecated usar {@see PharmacyService::getPharmacyById()} */
    public function getRestaurantById(int $id)
    {
        return $this->getPharmacyById($id);
    }

    /** @deprecated usar {@see PharmacyService::getCatalogVisiblePharmacyById()} */
    public function getCatalogVisibleRestaurantById(int $id)
    {
        return $this->getCatalogVisiblePharmacyById($id);
    }
}
