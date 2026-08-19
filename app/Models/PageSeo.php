<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Route;

class PageSeo extends Model
{
    protected $fillable = [
        'page_key', 'label',
        'title_pt', 'title_en',
        'description_pt', 'description_en',
        'h1_pt', 'h1_en',
        'keywords',
    ];

    /**
     * Devolve o valor de um campo para o locale atual, com fallback e auto-tradução para EN.
     */
    public function forLocale(string $field): ?string
    {
        $locale = app()->getLocale();
        $value = $this->{$field . '_' . $locale} ?? null;

        if ($value !== null && $value !== '') {
            return $value;
        }

        $pt = $this->{$field . '_pt'} ?? null;
        if ($locale === 'en' && $pt !== null && $pt !== '') {
            return translate_auto($pt, 'en', 'pt');
        }

        return $pt;
    }

    public function title(): ?string
    {
        return $this->forLocale('title');
    }

    public function description(): ?string
    {
        return $this->forLocale('description');
    }

    public function h1(): ?string
    {
        return $this->forLocale('h1');
    }

    /**
     * Resolve o registo de SEO da rota atual (cache por request).
     */
    public static function forCurrentRoute(): ?self
    {
        static $cache = [];

        $name = Route::currentRouteName();
        if (! $name) {
            return null;
        }

        if (! array_key_exists($name, $cache)) {
            try {
                $cache[$name] = static::where('page_key', $name)->first();
            } catch (\Throwable $e) {
                // BD indisponível ou tabela ainda não migrada — degrada para o SEO por omissão.
                $cache[$name] = null;
            }
        }

        return $cache[$name];
    }
}
