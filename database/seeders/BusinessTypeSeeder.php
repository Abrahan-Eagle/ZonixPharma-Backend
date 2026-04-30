<?php

namespace Database\Seeders;

use App\Models\BusinessType;
use Illuminate\Database\Seeder;

/**
 * Tipos de establecimiento farmacéutico para Zonix Pharma.
 * Iconos en `material_symbols_outlined` (compatible con UI actual).
 */
class BusinessTypeSeeder extends Seeder
{
    public function run(): void
    {
        $types = [
            [
                'name' => 'Farmacia',
                'icon' => 'local_pharmacy',
                'description' => 'Farmacia de venta al público con farmacéutico colegiado responsable.',
            ],
            [
                'name' => 'Farmacia 24h',
                'icon' => 'local_pharmacy',
                'description' => 'Farmacia con horario continuo de 24 horas o turno de madrugada.',
            ],
            [
                'name' => 'Droguería',
                'icon' => 'medication',
                'description' => 'Droguería: venta de medicamentos al detal y a granel a establecimientos.',
            ],
            [
                'name' => 'Boticario',
                'icon' => 'medication_liquid',
                'description' => 'Boticario / preparación magistral y fórmulas.',
            ],
            [
                'name' => 'Tienda de salud y bienestar',
                'icon' => 'health_and_safety',
                'description' => 'Vitaminas, suplementos, productos naturales y de bienestar.',
            ],
            [
                'name' => 'Óptica',
                'icon' => 'visibility',
                'description' => 'Lentes, productos para el cuidado ocular y soluciones para lentes de contacto.',
            ],
            [
                'name' => 'Ortopedia',
                'icon' => 'medical_services',
                'description' => 'Productos ortopédicos, dispositivos médicos y artículos de rehabilitación.',
            ],
            [
                'name' => 'Tienda infantil / pañalera',
                'icon' => 'child_care',
                'description' => 'Pañales, fórmulas infantiles y productos de cuidado infantil.',
            ],
        ];

        foreach ($types as $type) {
            BusinessType::updateOrCreate(['name' => $type['name']], $type);
        }
    }
}
