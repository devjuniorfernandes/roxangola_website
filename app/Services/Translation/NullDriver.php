<?php

namespace App\Services\Translation;

use App\Contracts\TranslationDriver;

class NullDriver implements TranslationDriver
{
    public function translate(string $text, string $source = 'pt', string $target = 'en'): ?string
    {
        return $text;
    }
}
