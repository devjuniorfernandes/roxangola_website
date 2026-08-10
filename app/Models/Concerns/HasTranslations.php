<?php

namespace App\Models\Concerns;

trait HasTranslations
{
    /**
     * Devolve o valor traduzido de um campo: <campo>_en quando o locale é en
     * (com fallback para o campo PT), senão o campo PT.
     */
    public function tr(string $field): ?string
    {
        if (app()->getLocale() === 'en') {
            $en = $this->{$field . '_en'} ?? null;
            if ($en !== null && $en !== '') {
                return $en;
            }
        }

        return $this->{$field} ?? null;
    }
}
