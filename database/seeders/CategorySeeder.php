<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

/**
 * Categorías base del catálogo Zonix Pharma.
 *
 * Mezcla terapéuticas (analgésicos, antibióticos…) y comerciales
 * (cuidado infantil, higiene…) para reflejar tanto medicamentos
 * como productos de farmacia general.
 */
class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            // Medicamentos OTC y Rx (terapéuticas)
            ['name' => 'Analgésicos y antipiréticos', 'description' => 'Paracetamol, ibuprofeno, ácido acetilsalicílico y similares.'],
            ['name' => 'Antigripales y resfriado', 'description' => 'Antigripales combinados, descongestionantes y antitusivos.'],
            ['name' => 'Antialérgicos', 'description' => 'Antihistamínicos para alergias, rinitis y reacciones cutáneas.'],
            ['name' => 'Antibióticos', 'description' => 'Antibióticos sistémicos (Rx). Requieren receta médica vigente.'],
            ['name' => 'Antifúngicos', 'description' => 'Antimicóticos tópicos y sistémicos.'],
            ['name' => 'Antivirales', 'description' => 'Antivirales para herpes, gripe y otros (varios Rx).'],
            ['name' => 'Antihipertensivos', 'description' => 'Tratamiento de hipertensión arterial (Rx).'],
            ['name' => 'Antidiabéticos', 'description' => 'Hipoglucemiantes orales e insulinas (Rx, varios cadena de frío).'],
            ['name' => 'Cardiovasculares', 'description' => 'Antiagregantes, anticoagulantes y otros (Rx).'],
            ['name' => 'Sistema digestivo', 'description' => 'Antiácidos, antieméticos, antidiarreicos, laxantes.'],
            ['name' => 'Vitaminas y suplementos', 'description' => 'Multivitamínicos, hierro, calcio, vitamina C, vitamina D, omega 3.'],
            ['name' => 'Sistema respiratorio', 'description' => 'Broncodilatadores, mucolíticos e inhaladores.'],
            ['name' => 'Salud mental y nervioso', 'description' => 'Ansiolíticos, antidepresivos y otros (Rx, varios controlados).'],
            ['name' => 'Dermatológicos', 'description' => 'Cremas, lociones y tratamientos para la piel.'],
            ['name' => 'Salud sexual y reproductiva', 'description' => 'Anticonceptivos, pruebas de embarazo, lubricantes.'],
            ['name' => 'Salud ocular', 'description' => 'Lágrimas artificiales, soluciones para lentes, gotas.'],
            ['name' => 'Salud bucal', 'description' => 'Cremas dentales, enjuagues, hilo dental, anestésicos tópicos.'],
            ['name' => 'Primeros auxilios', 'description' => 'Vendas, gasas, antisépticos, alcohol, agua oxigenada.'],

            // Productos de farmacia general
            ['name' => 'Cuidado infantil', 'description' => 'Pañales, fórmulas infantiles, cuidado del bebé, pediátrico.'],
            ['name' => 'Higiene personal', 'description' => 'Jabones, champús, desodorantes, productos de aseo.'],
            ['name' => 'Cuidado femenino', 'description' => 'Productos de higiene íntima, toallas, copas menstruales.'],
            ['name' => 'Cuidado capilar', 'description' => 'Champús medicados, anti-caspa, tratamientos.'],
            ['name' => 'Dispositivos médicos', 'description' => 'Termómetros, tensiómetros, glucómetros, oxímetros.'],
            ['name' => 'Adulto mayor', 'description' => 'Pañales para adultos, suplementos y productos geriátricos.'],
            ['name' => 'Nutrición clínica', 'description' => 'Fórmulas nutricionales y suplementos de uso clínico.'],
            ['name' => 'Cuidado de heridas', 'description' => 'Apósitos, cicatrizantes y productos de curación.'],
        ];

        foreach ($categories as $category) {
            Category::updateOrCreate(['name' => $category['name']], $category);
        }
    }
}
