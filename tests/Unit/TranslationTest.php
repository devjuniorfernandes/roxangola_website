<?php

namespace Tests\Unit;

use App\Contracts\TranslationDriver;
use App\Models\Highlight;
use App\Models\PageSeo;
use App\Services\Translation\GoogleFreeDriver;
use App\Services\Translation\NullDriver;
use App\Services\Translation\TranslationService;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Cache;

use Tests\TestCase;

class TranslationTest extends TestCase
{
    use RefreshDatabase;

    public function test_translation_service_returns_original_when_same_locale(): void
    {
        $driver = $this->createMock(TranslationDriver::class);
        $driver->expects($this->never())->method('translate');

        $service = new TranslationService($driver);
        $result = $service->translate('Casa moderna', 'pt', 'pt');

        $this->assertEquals('Casa moderna', $result);
    }

    public function test_translation_service_caches_results(): void
    {
        $driver = $this->createMock(TranslationDriver::class);
        $driver->expects($this->once())
            ->method('translate')
            ->with('Moradia no Talatona', 'pt', 'en')
            ->willReturn('Modern house in Talatona');

        $service = new TranslationService($driver);

        // First call triggers driver
        $first = $service->translate('Moradia no Talatona', 'en', 'pt');
        $this->assertEquals('Modern house in Talatona', $first);

        // Second call uses cache (driver expectation is still 1 call)
        $second = $service->translate('Moradia no Talatona', 'en', 'pt');
        $this->assertEquals('Modern house in Talatona', $second);
    }

    public function test_translation_service_graceful_fallback_on_driver_failure(): void
    {
        $driver = $this->createMock(TranslationDriver::class);
        $driver->method('translate')->willReturn(null);

        $service = new TranslationService($driver);
        $result = $service->translate('Texto original em Português', 'en', 'pt');

        // Should return original Portuguese text on failure
        $this->assertEquals('Texto original em Português', $result);
    }

    public function test_has_translations_trait_uses_manual_en_field_when_present(): void
    {
        app()->setLocale('en');

        $highlight = new Highlight([
            'title' => 'Título em Português',
            'title_en' => 'Manual English Title',
        ]);

        $this->assertEquals('Manual English Title', $highlight->tr('title'));
    }

    public function test_has_translations_trait_auto_translates_when_en_field_is_empty(): void
    {
        app()->setLocale('en');

        // Mock translation driver to return expected translation
        $mockDriver = $this->createMock(TranslationDriver::class);
        $mockDriver->method('translate')
            ->with('Viatura de Luxo', 'pt', 'en')
            ->willReturn('Luxury Vehicle');

        $this->app->instance(TranslationDriver::class, $mockDriver);

        $highlight = new Highlight([
            'title' => 'Viatura de Luxo',
            'title_en' => null,
        ]);

        $this->assertEquals('Luxury Vehicle', $highlight->tr('title'));
    }

    public function test_has_translations_trait_returns_pt_when_locale_is_pt(): void
    {
        app()->setLocale('pt');

        $highlight = new Highlight([
            'title' => 'Título em Português',
            'title_en' => 'Manual English Title',
        ]);

        $this->assertEquals('Título em Português', $highlight->tr('title'));
    }

    public function test_page_seo_auto_translates_when_en_field_is_empty(): void
    {
        app()->setLocale('en');

        $mockDriver = $this->createMock(TranslationDriver::class);
        $mockDriver->method('translate')
            ->with('Contacto Concessionária', 'pt', 'en')
            ->willReturn('Dealership Contact');

        $this->app->instance(TranslationDriver::class, $mockDriver);

        $seo = new PageSeo([
            'page_key' => 'contactos',
            'title_pt' => 'Contacto Concessionária',
            'title_en' => null,
        ]);

        $this->assertEquals('Dealership Contact', $seo->title());
    }

    public function test_helper_function_translate_auto(): void
    {
        app()->setLocale('en');

        $mockDriver = $this->createMock(TranslationDriver::class);
        $mockDriver->method('translate')
            ->with('Serviço de Manutenção', 'pt', 'en')
            ->willReturn('Maintenance Service');

        $this->app->instance(TranslationDriver::class, $mockDriver);

        $this->assertEquals('Maintenance Service', translate_auto('Serviço de Manutenção'));
    }

    public function test_page_content_translator_auto_translates_untranslated_html_nodes(): void
    {
        app()->setLocale('en');

        $mockDriver = $this->createMock(TranslationDriver::class);
        $mockDriver->method('translate')
            ->with('Moradia moderna no Talatona', 'pt', 'en')
            ->willReturn('Modern house in Talatona');

        $this->app->instance(TranslationDriver::class, $mockDriver);

        $translator = new \App\Support\PageContentTranslator();
        $html = '<div class="card"><h1>Moradia moderna no Talatona</h1></div>';
        $result = $translator->translate($html);

        $this->assertStringContainsString('Modern house in Talatona', $result);
    }

    public function test_page_content_translator_auto_translates_multiline_html_nodes(): void
    {
        app()->setLocale('en');

        $mockDriver = $this->createMock(TranslationDriver::class);
        $mockDriver->method('translate')
            ->with('Cenário completo de aventura nas dunas de Angola', 'pt', 'en')
            ->willReturn('Full scenario dune adventure in Angola');

        $this->app->instance(TranslationDriver::class, $mockDriver);

        $translator = new \App\Support\PageContentTranslator();
        $html = "<section>\n  <h2>\n    Cenário completo de aventura nas dunas de Angola\n  </h2>\n</section>";
        $result = $translator->translate($html);

        $this->assertStringContainsString('Full scenario dune adventure in Angola', $result);
    }
}
