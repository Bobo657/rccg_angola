<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    #[DataProvider('pages')]
    public function test_page_loads_successfully(string $uri): void
    {
        $this->get($uri)->assertOk();
    }

    public function test_contact_page_shows_church_contact_details(): void
    {
        $this->get('/contact')
            ->assertSee(config('app.phone'))
            ->assertSee(config('app.email'))
            ->assertSee(config('app.address'));
    }

    public function test_pages_have_seo_basics(): void
    {
        $this->get('/visit')
            ->assertSee('<title>Plan your visit | RCCG Angola', false)
            ->assertSee('<meta name="description"', false)
            ->assertSee('<meta name="keywords"', false)
            ->assertSee('<link rel="canonical" href="http://localhost/visit">', false)
            ->assertSee('application/ld+json', false);
    }

    public function test_robots_and_sitemap_are_crawlable(): void
    {
        $this->get('/robots.txt')->assertOk()->assertSee('Sitemap: http://localhost/sitemap.xml');
        $this->get('/sitemap.xml')->assertOk()
            ->assertHeader('Content-Type', 'application/xml; charset=UTF-8')
            ->assertSee('http://localhost/gallery');
    }

    public function test_unknown_page_returns_404(): void
    {
        $this->get('/nope')->assertNotFound();
    }

    public static function pages(): array
    {
        return [
            'home' => ['/'],
            'contact' => ['/contact'],
            'visit' => ['/visit'],
            'about' => ['/about'],
            'gallery' => ['/gallery'],
            'our beliefs' => ['/our_beliefs'],
            'our history' => ['/our_history'],
        ];
    }
}
