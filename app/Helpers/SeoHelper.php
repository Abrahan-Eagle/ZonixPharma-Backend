<?php

namespace App\Helpers;

class SeoHelper
{
    protected static $data = [
        'title' => 'Zonix Pharma - Marketplace farmacéutico en Venezuela',
        'description' => 'Compra medicinas, vitaminas y productos de farmacia con delivery o retiro en farmacias aliadas en Caracas, Maracaibo, Valencia y más, con Zonix Pharma.',
        'keywords' => 'farmacia, medicinas, medicamentos, OTC, receta, venezuela, zonix, pharma, vitaminas, salud, delivery farmacia',
        'image' => 'assets/img/zonix-pharma-cover.jpg',
        'url' => '',
        'type' => 'website',
        'robots' => 'index, follow',
    ];

    public static function setTitle($title)
    {
        self::$data['title'] = $title.' | Zonix Pharma';
    }

    public static function setDescription($description)
    {
        self::$data['description'] = $description;
    }

    public static function setKeywords($keywords)
    {
        self::$data['keywords'] = $keywords;
    }

    public static function setImage($image)
    {
        self::$data['image'] = $image;
    }

    public static function setUrl($url)
    {
        self::$data['url'] = $url;
    }

    public static function setType($type)
    {
        self::$data['type'] = $type;
    }

    public static function meta()
    {
        if (empty(self::$data['url'])) {
            self::$data['url'] = url()->current();
        }

        if (! filter_var(self::$data['image'], FILTER_VALIDATE_URL)) {
            self::$data['image'] = asset(self::$data['image']);
        }

        return self::$data;
    }

    public static function jsonLd()
    {
        $data = self::meta();

        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebSite',
            'name' => 'Zonix Pharma',
            'url' => url('/'),
            'description' => $data['description'],
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    public static function generateAppSchema()
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'SoftwareApplication',
            'name' => 'Zonix Pharma',
            'applicationCategory' => 'HealthApplication',
            'operatingSystem' => 'Android, iOS',
            'offers' => [
                '@type' => 'Offer',
                'price' => '0',
                'priceCurrency' => 'USD',
            ],
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    public static function generateOrganizationSchema()
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'Organization',
            'name' => 'Zonix Pharma',
            'url' => url('/'),
            'logo' => asset('assets/img/logo.png'),
            'sameAs' => [
                'https://www.facebook.com/zonixpharma',
                'https://www.instagram.com/zonixpharma',
                'https://twitter.com/zonixpharma',
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'telephone' => '+58-412-1234567',
                'contactType' => 'customer service',
                'areaServed' => 'VE',
                'availableLanguage' => 'es',
            ],
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    public static function generateFaqSchema()
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'FAQPage',
            'mainEntity' => [
                [
                    '@type' => 'Question',
                    'name' => '¿Cuánto tarda en llegar mi pedido con Zonix Pharma?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'El tiempo de entrega depende de la farmacia aliada, tu ubicación y la logística disponible. Zonix Pharma prioriza condiciones óptimas y cadena de custodia.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => '¿Qué métodos de pago acepta Zonix Pharma?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Aceptamos pagos en Bolívares (Pago Móvil, Transferencia), Dólares (Efectivo, Zelle, Binance Pay), tarjetas y otros medios habilitados por la farmacia.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => '¿En qué ciudades de Venezuela opera Zonix Pharma?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Estamos en expansión gradual en Caracas, Maracaibo, Valencia, Barquisimeto, Maracay y Lechería, con más ciudades próximamente.',
                    ],
                ],
                [
                    '@type' => 'Question',
                    'name' => '¿Necesito receta médica para comprar medicamentos en Zonix Pharma?',
                    'acceptedAnswer' => [
                        '@type' => 'Answer',
                        'text' => 'Los productos de venta libre (OTC) no requieren receta. Los medicamentos bajo prescripción (Rx) requieren la carga de una receta válida que es revisada por el farmacéutico colegiado de la farmacia despachadora.',
                    ],
                ],
            ],
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }

    public static function generateWebPageSchema(string $name, string $description): string
    {
        $schema = [
            '@context' => 'https://schema.org',
            '@type' => 'WebPage',
            'name' => $name,
            'description' => $description,
            'url' => url()->current(),
            'isPartOf' => [
                '@type' => 'WebSite',
                'name' => 'Zonix Pharma',
                'url' => url('/'),
            ],
        ];

        return json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT);
    }
}
