<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContentOverride extends Model
{
    protected $fillable = ['key', 'locale', 'type', 'value'];

    /**
     * Mapa de overrides de texto: [locale => [key => value]].
     * Em cache estática por request. Resiliente a falhas de BD.
     */
    public static function textMap(): array
    {
        static $map = null;

        if ($map === null) {
            try {
                $map = static::query()
                    ->where('type', 'text')
                    ->get(['key', 'locale', 'value'])
                    ->groupBy('locale')
                    ->map(fn ($group) => $group->pluck('value', 'key')->all())
                    ->all();
            } catch (\Throwable $e) {
                $map = [];
            }
        }

        return $map;
    }

    /**
     * Caminho da imagem substituída para um slot, ou null.
     */
    public static function imageFor(string $key): ?string
    {
        static $images = null;

        if ($images === null) {
            try {
                $images = static::query()
                    ->where('type', 'image')
                    ->get(['key', 'value'])
                    ->pluck('value', 'key')
                    ->all();
            } catch (\Throwable $e) {
                $images = [];
            }
        }

        return $images[$key] ?? null;
    }
}
