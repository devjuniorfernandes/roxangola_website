<?php

namespace App\Services\Translation;

use App\Contracts\TranslationDriver;
use Illuminate\Support\Facades\Log;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Throwable;

class GoogleFreeDriver implements TranslationDriver
{
    /**
     * Instância reutilizável do GoogleTranslate (evita criação por cada chamada).
     */
    private ?GoogleTranslate $instance = null;

    private function getTranslator(string $source, string $target): GoogleTranslate
    {
        if ($this->instance === null) {
            $this->instance = new GoogleTranslate();
        }

        $this->instance->setSource($source);
        $this->instance->setTarget($target);

        return $this->instance;
    }

    public function translate(string $text, string $source = 'pt', string $target = 'en'): ?string
    {
        if (trim($text) === '') {
            return $text;
        }

        try {
            $translated = $this->getTranslator($source, $target)->translate($text);

            if ($translated !== null && $translated !== '') {
                return $translated;
            }
        } catch (Throwable $e) {
            Log::warning('Google Translation API failed', [
                'text'  => mb_substr($text, 0, 100),
                'error' => $e->getMessage(),
            ]);
        }

        return null;
    }
}
