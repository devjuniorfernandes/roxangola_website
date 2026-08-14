<?php

namespace App\Support;

use Illuminate\Support\Facades\Lang;
use App\Models\ContentOverride;

class PageContentTranslator
{
    public function translate(string $content): string
    {
        $locale = app()->getLocale();
        $translations = $locale === 'en' ? Lang::get('page_content') : [];
        $translations = is_array($translations) ? $translations : [];

        // Os conteúdos literais usam a própria cópia PT como chave. Os
        // overrides tornam essa cópia editável tanto em PT como em EN.
        foreach (ContentOverride::textMap()[$locale] ?? [] as $key => $value) {
            if (str_starts_with($key, 'page_content.')) {
                $translations[substr($key, strlen('page_content.'))] = $value;
            }
        }

        // Replace longer strings first so a short label cannot alter a longer sentence.
        uksort($translations, static fn (string $a, string $b) => mb_strlen($b) <=> mb_strlen($a));

        $content = strtr($content, $translations);

        // Substitui imagens estáticas sem obrigar cada card/modal a ter código
        // CMS próprio. Apenas slots do catálogo automático são considerados.
        $images = ContentOverride::imageMap();
        foreach (CmsMediaCatalog::defaults() as $key => $default) {
            if (!empty($images[$key])) {
                $content = str_replace(asset($default), asset($images[$key]), $content);
            }
        }

        return $content;
    }
}
