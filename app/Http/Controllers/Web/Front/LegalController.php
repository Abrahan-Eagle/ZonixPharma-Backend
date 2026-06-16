<?php

namespace App\Http\Controllers\Web\Front;

use App\Helpers\SeoHelper;
use App\Http\Controllers\Controller;

class LegalController extends Controller
{
    public function terms()
    {
        SeoHelper::setTitle('Términos y Condiciones');
        SeoHelper::setDescription(
            'Términos y condiciones de uso de Zonix Pharma: pedidos farmacéuticos, pagos, cancelaciones y responsabilidad de dispensación.'
        );

        return view('front.pages.legal.terms', [
            'pageSchema' => SeoHelper::generateWebPageSchema(
                'Términos y Condiciones',
                'Términos y condiciones de uso de la plataforma Zonix Pharma.'
            ),
        ]);
    }

    public function privacy()
    {
        SeoHelper::setTitle('Política de Privacidad');
        SeoHelper::setDescription(
            'Cómo Zonix Pharma recopila, usa y protege tus datos personales en pedidos de medicamentos y productos farmacéuticos.'
        );

        return view('front.pages.legal.privacy', [
            'pageSchema' => SeoHelper::generateWebPageSchema(
                'Política de Privacidad',
                'Política de privacidad y protección de datos de Zonix Pharma.'
            ),
        ]);
    }

    public function cookies()
    {
        SeoHelper::setTitle('Política de Cookies');
        SeoHelper::setDescription(
            'Información sobre cookies esenciales y de rendimiento utilizadas en el sitio web de Zonix Pharma.'
        );

        return view('front.pages.legal.cookies', [
            'pageSchema' => SeoHelper::generateWebPageSchema(
                'Política de Cookies',
                'Información sobre el uso de cookies en Zonix Pharma.'
            ),
        ]);
    }

    public function security()
    {
        SeoHelper::setTitle('Seguridad');
        SeoHelper::setDescription(
            'Medidas de seguridad, encriptación y recomendaciones para proteger tu cuenta en Zonix Pharma.'
        );

        return view('front.pages.legal.security', [
            'pageSchema' => SeoHelper::generateWebPageSchema(
                'Seguridad Integral',
                'Medidas de seguridad y protección en Zonix Pharma.'
            ),
        ]);
    }
}
