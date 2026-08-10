<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\File;
use App\Models\ContentOverride;

class CmsContentController extends Controller
{
    /** Ficheiros de tradução que NÃO são conteúdo do site. */
    private array $exclude = ['auth', 'passwords', 'pagination', 'validation', 'page_content'];

    /**
     * Lê os defaults (sem overrides) de um ficheiro de tradução, achatados (dot).
     */
    private function fileDefaults(string $file, string $locale): array
    {
        $path = lang_path("{$locale}/{$file}.php");
        if (! File::exists($path)) {
            return [];
        }
        $data = require $path;

        return is_array($data) ? Arr::dot($data) : [];
    }

    /** Lista de ficheiros de conteúdo (base = pt). */
    private function contentFiles(): array
    {
        $files = collect(File::files(lang_path('pt')))
            ->map(fn ($f) => $f->getFilenameWithoutExtension())
            ->reject(fn ($name) => in_array($name, $this->exclude, true))
            ->values()
            ->all();
        sort($files);

        return $files;
    }

    public function edit()
    {
        // Mapa de overrides de texto: [key => [pt=>, en=>]]
        $overrides = ContentOverride::where('type', 'text')->get()
            ->groupBy('key')
            ->map(fn ($g) => $g->pluck('value', 'locale')->all());

        $pages = [];
        foreach ($this->contentFiles() as $file) {
            $pt = $this->fileDefaults($file, 'pt');
            $en = $this->fileDefaults($file, 'en');
            $keys = array_keys($pt + $en);

            $rows = [];
            foreach ($keys as $dotKey) {
                $fullKey = "{$file}.{$dotKey}";
                $defPt = $pt[$dotKey] ?? '';
                $defEn = $en[$dotKey] ?? '';
                if (! is_string($defPt) && ! is_string($defEn)) {
                    continue;
                }
                $rows[] = [
                    'key' => $fullKey,
                    'label' => $dotKey,
                    'pt' => $overrides[$fullKey]['pt'] ?? $defPt,
                    'en' => $overrides[$fullKey]['en'] ?? $defEn,
                    'overridden' => isset($overrides[$fullKey]),
                    'long' => mb_strlen((string) $defPt) > 90,
                ];
            }

            $pages[$file] = $rows;
        }

        // Slots de imagem
        $imageOverrides = ContentOverride::where('type', 'image')->pluck('value', 'key')->all();
        $imageGroups = config('cms.images', []);

        return view('admin.cms.edit', compact('pages', 'imageGroups', 'imageOverrides'));
    }

    public function update(Request $request)
    {
        // ---- Texto ----
        $text = $request->input('text', []);
        // Pré-carrega defaults por ficheiro para comparar
        $defaultsCache = [];
        foreach ($text as $fullKey => $vals) {
            [$file] = explode('.', $fullKey, 2);
            $dotKey = substr($fullKey, strlen($file) + 1);

            foreach (['pt', 'en'] as $locale) {
                $value = $vals[$locale] ?? null;
                if ($value === null) {
                    continue;
                }
                $defaultsCache[$file][$locale] ??= $this->fileDefaults($file, $locale);
                $default = $defaultsCache[$file][$locale][$dotKey] ?? null;

                if ($value === '' || $value === $default) {
                    // Igual ao default (ou vazio) → remove override, volta ao original.
                    ContentOverride::where(['key' => $fullKey, 'locale' => $locale, 'type' => 'text'])->delete();
                } else {
                    ContentOverride::updateOrCreate(
                        ['key' => $fullKey, 'locale' => $locale, 'type' => 'text'],
                        ['value' => $value]
                    );
                }
            }
        }

        // ---- Imagens ----
        foreach ((array) $request->input('image_reset', []) as $slot => $on) {
            ContentOverride::where(['key' => $slot, 'type' => 'image'])->delete();
        }
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $slot => $file) {
                if (! $file) {
                    continue;
                }
                $stored = $file->store('cms', 'public');
                ContentOverride::updateOrCreate(
                    ['key' => $slot, 'locale' => null, 'type' => 'image'],
                    ['value' => 'storage/' . $stored]
                );
            }
        }

        return back()->with('success', 'Conteúdo do site atualizado com sucesso!');
    }
}
