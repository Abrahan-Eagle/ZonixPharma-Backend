<?php

namespace App\Http\Controllers\Web\Front;

use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    /**
     * Display the home page (one-page template).
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        \App\Helpers\SeoHelper::setTitle('Tu farmacia en minutos');
        \App\Helpers\SeoHelper::setDescription(
            'Medicamentos OTC y con receta, entrega a domicilio o retiro en farmacia en Caracas, Maracaibo, Valencia y más. '.
            'Precios claros y seguimiento con Zonix Pharma.'
        );

        $schema = [
            'app' => \App\Helpers\SeoHelper::generateAppSchema(),
            'organization' => \App\Helpers\SeoHelper::generateOrganizationSchema(),
            'faq' => \App\Helpers\SeoHelper::generateFaqSchema(),
        ];

        return view('front.welcome', compact('schema'));
    }
}
