<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Default Translation Driver
    |--------------------------------------------------------------------------
    |
    | Supported drivers: "google", "null"
    |
    */
    'driver' => env('TRANSLATION_DRIVER', 'google'),

    /*
    |--------------------------------------------------------------------------
    | Source & Target Locales
    |--------------------------------------------------------------------------
    */
    'source_locale' => env('TRANSLATION_SOURCE_LOCALE', 'pt'),
    'target_locale' => env('TRANSLATION_TARGET_LOCALE', 'en'),

    /*
    |--------------------------------------------------------------------------
    | Cache Settings
    |--------------------------------------------------------------------------
    |
    | TTL in seconds for storing translations in cache (default: 30 days = 2592000s)
    |
    */
    'cache_ttl' => env('TRANSLATION_CACHE_TTL', 2592000),
    'cache_prefix' => 'auto_translation:',

    /*
    |--------------------------------------------------------------------------
    | Enable/Disable Auto-Translation
    |--------------------------------------------------------------------------
    */
    'enabled' => env('TRANSLATION_ENABLED', true),
];
