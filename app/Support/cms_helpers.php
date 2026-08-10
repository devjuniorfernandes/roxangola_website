<?php

use App\Models\ContentOverride;

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
