<?php

namespace Tests\Feature;

use App\Services\Translation\GoogleFreeDriver;
use App\Services\Translation\TranslationService;
use Tests\TestCase;

class GoogleTranslationIntegrationTest extends TestCase
{
    public function test_google_free_driver_translates_portuguese_to_english(): void
    {
        $driver = new GoogleFreeDriver();
        $translated = $driver->translate('Moradia moderna no Talatona', 'pt', 'en');

        $this->assertNotEmpty($translated);
        $this->assertStringContainsStringIgnoringCase('modern', $translated);
    }

    public function test_translation_service_integration_with_google_driver(): void
    {
        $service = app(TranslationService::class);
        $translated = $service->translate('Concessionário oficial de veículos em Luanda', 'en', 'pt');

        $this->assertNotEmpty($translated);
        $this->assertStringContainsStringIgnoringCase('official', $translated);
    }
}
