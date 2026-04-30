<?php

namespace Tests\Feature;

use Tests\TestCase;

class SeoTest extends TestCase
{
    /**
     * Test that the home page has the correct title and meta tags.
     *
     * @return void
     */
    public function test_home_page_has_seo_tags()
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        // Title general (puede venir de SeoHelper o de welcome.blade), basta con
        // verificar que el tag existe y que la marca es Zonix Pharma.
        $response->assertSee('<title>', false);
        $response->assertSee('Zonix Pharma', false);

        // Meta description
        $response->assertSee('name="description"', false);

        // Open Graph
        $response->assertSee('property="og:title"', false);
        $response->assertSee('property="og:type"', false);
        $response->assertSee('property="og:image"', false);

        // JSON-LD con marca Pharma
        $response->assertSee('application/ld+json', false);
        $response->assertSee('"@type": "WebSite"', false);
        $response->assertSee('"name": "Zonix Pharma"', false);
    }

    /**
     * Test that sitemap.xml returns valid XML.
     *
     * @return void
     */
    public function test_sitemap_returns_valid_xml()
    {
        $response = $this->get('/sitemap.xml');

        $response->assertStatus(200);
        $response->assertHeader('Content-Type', 'text/xml; charset=UTF-8');

        // Check for XML structure
        $response->assertSee('<?xml version="1.0" encoding="UTF-8"?>', false);
        $response->assertSee('<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"', false);

        // Check for home URL
        $response->assertSee(url('/'), false);
    }
}
