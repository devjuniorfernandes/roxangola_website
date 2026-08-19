<?php

namespace App\Support;

use App\Models\ContentOverride;
use App\Services\Translation\TranslationService;
use Illuminate\Support\Facades\Lang;

class PageContentTranslator
{
    public function translate(string $content): string
    {
        $locale = app()->getLocale();
        if ($locale !== 'en') {
            return $content;
        }

        // 1. Dicionário fixo + overrides do CMS
        $translations = Lang::get('page_content');
        $translations = is_array($translations) ? $translations : [];

        foreach (ContentOverride::textMap()[$locale] ?? [] as $key => $value) {
            if (str_starts_with($key, 'page_content.')) {
                $translations[substr($key, strlen('page_content.'))] = $value;
            }
        }

        // Substituir frases mais longas primeiro para evitar substituições parciais
        uksort($translations, static fn (string $a, string $b) => mb_strlen($b) <=> mb_strlen($a));
        $content = strtr($content, $translations);

        // 2. Imagens do CMS
        $images = ContentOverride::imageMap();
        foreach (CmsMediaCatalog::defaults() as $key => $default) {
            if (!empty($images[$key])) {
                $content = str_replace(asset($default), asset($images[$key]), $content);
            }
        }

        // 3. AUTO-TRADUÇÃO de texto em Português remanescente no HTML (incluindo nós multi-linha)
        if (! config('translation.enabled', true)) {
            return $content;
        }

        // Máscara rápida de <script> e <style> para não alterar código JS/CSS
        $masked = [];
        $maskedContent = preg_replace_callback(
            '/<(script|style)\b[^>]*>.*?<\/ \1>/is',
            function ($m) use (&$masked) {
                $k = '__MASK_' . count($masked) . '__';
                $masked[$k] = $m[0];
                return $k;
            },
            $content
        ) ?? $content;

        // Extrai todos os nós de texto entre tags HTML (suporta quebras de linha multi-linha)
        if (!preg_match_all('/>([^<>]+)</u', $maskedContent, $found)) {
            return $content;
        }

        $rawMap = [];
        foreach ($found[1] as $raw) {
            $trimmed = trim($raw);

            // Ignorar: vazio, menos de 2 caracteres, números, URLs, e código JS/CSS com chaves ou ponto e vírgula
            if ($trimmed === '' || mb_strlen($trimmed) < 2 || is_numeric($trimmed)) {
                continue;
            }
            if (!preg_match('/[\p{L}]/u', $trimmed)) {
                continue; // sem letras
            }
            if (str_contains($trimmed, '{') || str_contains($trimmed, '}') || str_contains($trimmed, ';') || str_starts_with($trimmed, 'function(')) {
                continue; // código JS/CSS
            }

            $rawMap[$trimmed][] = $raw;
        }

        if (empty($rawMap)) {
            return $content;
        }

        $uniqueTexts = array_keys($rawMap);
        $translatedMap = app(TranslationService::class)->translateMany($uniqueTexts, 'en', 'pt');

        $pairs = [];
        foreach ($translatedMap as $orig => $trans) {
            if ($orig !== $trans && $trans !== '') {
                foreach ($rawMap[$orig] as $raw) {
                    $pos = strpos($raw, $orig);
                    if ($pos !== false) {
                        $leading = substr($raw, 0, $pos);
                        $trailing = substr($raw, $pos + strlen($orig));
                        $newRaw = $leading . $trans . $trailing;
                        $pairs['>' . $raw . '<'] = '>' . $newRaw . '<';
                    }
                }
            }
        }

        if (!empty($pairs)) {
            uksort($pairs, static fn (string $a, string $b) => mb_strlen($b) <=> mb_strlen($a));
            $maskedContent = strtr($maskedContent, $pairs);
        }

        // Restaurar <script>/<style>
        if (!empty($masked)) {
            $maskedContent = strtr($maskedContent, $masked);
        }

        return $maskedContent;
    }
}
