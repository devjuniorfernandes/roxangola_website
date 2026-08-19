<?php

namespace App\Models\Concerns;

trait HasTranslations
{
    /**
     * Devolve o valor traduzido de um campo: <campo>_en quando o locale é en.
     * Se o campo _en estiver vazio, traduz automaticamente o campo PT para EN.
     * Senão devolve o campo PT original.
     */
    public function tr(string $field): ?string
    {
        $locale = app()->getLocale();

        if ($locale === 'en') {
            $en = $this->{$field . '_en'} ?? null;
            if ($en !== null && $en !== '') {
                return $en;
            }

            $original = $this->{$field} ?? null;
            if ($original !== null && $original !== '') {
                return translate_auto($original, 'en', 'pt');
            }
        }

        return $this->{$field} ?? null;
    }
}
