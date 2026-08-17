<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use App\Models\ContentOverride;
use Illuminate\Http\Request;

class PageTextController extends Controller
{
    public function index()
    {
        return view('cms.pages.index', ['pages' => config('cms.pages', [])]);
    }

    public function edit(string $page)
    {
        $config = config("cms.pages.$page");
        abort_unless($config, 404);

        $file = $config['file'];
        $pt = $this->flatten($this->loadLang('pt', $file), $file);
        $en = $this->flatten($this->loadLang('en', $file), $file);

        $overrides = ContentOverride::textMap();

        // Constrói os grupos por secção (2.º segmento da chave).
        $keys = array_keys($pt + $en);
        sort($keys);
        $groups = [];
        foreach ($keys as $key) {
            $parts = explode('.', $key);
            $section = $parts[1] ?? 'geral';
            $groups[$section][] = [
                'key'     => $key,
                'pt'      => $overrides['pt'][$key] ?? ($pt[$key] ?? ''),
                'en'      => $overrides['en'][$key] ?? ($en[$key] ?? ''),
                'default_pt' => $pt[$key] ?? '',
                'default_en' => $en[$key] ?? '',
                'overridden' => isset($overrides['pt'][$key]) || isset($overrides['en'][$key]),
            ];
        }

        return view('cms.pages.edit', [
            'page'   => $page,
            'config' => $config,
            'groups' => $groups,
        ]);
    }

    public function update(Request $request, string $page)
    {
        $config = config("cms.pages.$page");
        abort_unless($config, 404);

        $file = $config['file'];
        $defaults = [
            'pt' => $this->flatten($this->loadLang('pt', $file), $file),
            'en' => $this->flatten($this->loadLang('en', $file), $file),
        ];

        foreach (['pt', 'en'] as $locale) {
            $values = (array) $request->input($locale, []);
            foreach ($values as $key => $value) {
                $value = is_string($value) ? $value : '';
                $default = $defaults[$locale][$key] ?? '';

                if (trim($value) === '' || $value === $default) {
                    // Igual ao original (ou vazio) → remover override, volta ao valor de origem.
                    ContentOverride::where('key', $key)->where('locale', $locale)->where('type', 'text')->delete();
                } else {
                    ContentOverride::updateOrCreate(
                        ['key' => $key, 'locale' => $locale, 'type' => 'text'],
                        ['value' => $value]
                    );
                }
            }
        }

        return redirect()->route('cms.pages.edit', $page)->with('status', 'Página atualizada.');
    }

    // ---- helpers ----
    private function loadLang(string $locale, string $file): array
    {
        $path = lang_path("$locale/$file.php");
        return is_file($path) ? (array) require $path : [];
    }

    private function flatten(array $arr, string $prefix = ''): array
    {
        $out = [];
        foreach ($arr as $k => $v) {
            $key = $prefix === '' ? $k : "$prefix.$k";
            if (is_array($v)) {
                $out += $this->flatten($v, $key);
            } else {
                $out[$key] = (string) $v;
            }
        }
        return $out;
    }
}
