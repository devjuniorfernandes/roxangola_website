<?php

namespace App\Support;

use Illuminate\Support\Facades\Lang;

class PageContentTranslator
{
    public function translate(string $content): string
    {
        if (app()->getLocale() !== 'en') {
            return $content;
        }

        $translations = Lang::get('page_content');

        if (!is_array($translations) || $translations === []) {
            return $content;
        }

        // Replace longer strings first so a short label cannot alter a longer sentence.
        uksort($translations, static fn (string $a, string $b) => mb_strlen($b) <=> mb_strlen($a));

        return strtr($content, $translations);
    }
}
