<?php

namespace App\Services\Cms;

use Illuminate\Translation\Translator;
use App\Models\ContentOverride;

class OverrideTranslator extends Translator
{
    /**
     * Antes de usar o ficheiro de tradução, verifica se há um override na BD.
     */
    public function get($key, array $replace = [], $locale = null, $fallback = true)
    {
        $locale = $locale ?: $this->locale;

        $map = ContentOverride::textMap();
        $value = $map[$locale][$key] ?? null;

        if ($value !== null && $value !== '') {
            return $this->makeReplacements($value, $replace);
        }

        return parent::get($key, $replace, $locale, $fallback);
    }
}
