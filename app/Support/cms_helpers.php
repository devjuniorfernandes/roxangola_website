<?php

use App\Models\ContentOverride;

if (! function_exists('img_src')) {
    /**
     * Resolve o URL de uma imagem: se for URL externo devolve tal e qual;
     * caso contrário (caminho em storage/ ou assets/) resolve com asset().
     */
    function img_src(?string $value): string
    {
        if (! $value) {
            return '';
        }
        if (str_starts_with($value, 'http://') || str_starts_with($value, 'https://')) {
            return $value;
        }

        return asset($value);
    }
}

if (! function_exists('cms_image')) {
    /**
     * Devolve o URL da imagem de um slot: o override do CMS, se existir; senão o default.
     * $default deve ser um URL já resolvido (ex.: asset('assets/x.jpg')).
     */
    function cms_image(string $key, string $default): string
    {
        $path = ContentOverride::imageFor($key);

        return $path ? asset($path) : $default;
    }
}
