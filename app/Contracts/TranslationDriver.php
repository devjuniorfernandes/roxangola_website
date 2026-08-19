<?php

namespace App\Contracts;

interface TranslationDriver
{
    /**
     * Translate a given text string from one language to another.
     *
     * @param string $text
     * @param string $source
     * @param string $target
     * @return string|null
     */
    public function translate(string $text, string $source = 'pt', string $target = 'en'): ?string;
}
