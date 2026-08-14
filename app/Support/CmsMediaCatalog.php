<?php

namespace App\Support;

use Illuminate\Support\Facades\File;

/**
 * Catálogo dos media estáticos usados nas vistas públicas.
 *
 * Evita manter uma lista manual e incompleta de imagens no painel: sempre que
 * uma vista usar asset('assets/...imagem'), ela surge automaticamente no CMS.
 */
class CmsMediaCatalog
{
    public static function groups(): array
    {
        static $groups = null;

        if ($groups !== null) {
            return $groups;
        }

        $groups = [];
        $seen = [];
        $extensions = 'avif|gif|jpe?g|png|svg|webp';

        foreach (File::allFiles(resource_path('views')) as $file) {
            if (! str_ends_with($file->getFilename(), '.blade.php')) {
                continue;
            }

            $contents = File::get($file->getPathname());
            preg_match_all("/asset\\(\\s*['\"]([^'\"]+\\.(?:{$extensions}))['\"]\\s*\\)/i", $contents, $matches);

            $relativeView = str_replace(['\\', '.blade.php'], ['/', ''], $file->getRelativePathname());
            if (str_starts_with($relativeView, 'admin/') || str_starts_with($relativeView, 'components/') || str_starts_with($relativeView, 'pdf/')) {
                continue;
            }
            $groupKey = str_replace('/', '.', $relativeView);

            foreach (array_unique($matches[1]) as $path) {
                if (isset($seen[$path])) {
                    continue;
                }
                $seen[$path] = true;

                $key = 'media.' . sha1($path);
                $groups[$groupKey]['label'] = str_replace(['.', '_'], [' / ', ' '], $relativeView);
                $groups[$groupKey]['slots'][$key] = [
                    'label' => pathinfo($path, PATHINFO_BASENAME),
                    'default' => $path,
                ];
            }
        }

        return $groups;
    }

    public static function defaults(): array
    {
        return collect(static::groups())
            ->flatMap(fn (array $group) => collect($group['slots'] ?? [])
                ->mapWithKeys(fn (array $slot, string $key) => [$key => $slot['default']]))
            ->all();
    }
}
