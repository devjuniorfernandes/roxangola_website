<?php

namespace App\Services\Translation;

use App\Contracts\TranslationDriver;
use Illuminate\Support\Facades\Cache;

class TranslationService
{
    public function __construct(
        protected TranslationDriver $driver
    ) {}

    /**
     * Translate a given string automatically with caching and graceful fallback.
     *
     * @param string|null $text Text to translate
     * @param string $target Target locale (default: 'en')
     * @param string $source Source locale (default: 'pt')
     * @return string
     */
    public function translate(?string $text, string $target = 'en', string $source = 'pt'): string
    {
        if ($text === null || $text === '') {
            return '';
        }

        if ($source === $target || ! config('translation.enabled', true)) {
            return $text;
        }

        $trimmed = trim($text);
        if (is_numeric($trimmed) || filter_var($trimmed, FILTER_VALIDATE_URL) || filter_var($trimmed, FILTER_VALIDATE_EMAIL)) {
            return $text;
        }

        $cachePrefix = config('translation.cache_prefix', 'auto_translation:');
        $cacheKey = $cachePrefix . $source . ':' . $target . ':' . md5($trimmed);
        $ttl = (int) config('translation.cache_ttl', 2592000); // 30 days

        return Cache::remember($cacheKey, $ttl, function () use ($trimmed, $source, $target) {
            $translated = $this->driver->translate($trimmed, $source, $target);

            return ($translated !== null && $translated !== '') ? $translated : $trimmed;
        });
    }

    /**
     * Translate multiple strings in bulk with 1 cache query and batched HTTP requests for ultra-fast performance.
     *
     * @param array $texts Array of strings to translate
     * @param string $target Target locale
     * @param string $source Source locale
     * @return array Map of [original_text => translated_text]
     */
    public function translateMany(array $texts, string $target = 'en', string $source = 'pt'): array
    {
        if (empty($texts)) {
            return [];
        }

        if ($source === $target || ! config('translation.enabled', true)) {
            return array_combine($texts, $texts);
        }

        $results = [];
        $cacheMap = [];
        $cachePrefix = config('translation.cache_prefix', 'auto_translation:');
        $ttl = (int) config('translation.cache_ttl', 2592000);

        // 1. Filter out empty, numeric, URL or email strings
        foreach ($texts as $text) {
            $trimmed = trim($text);
            if ($trimmed === '' || is_numeric($trimmed) || filter_var($trimmed, FILTER_VALIDATE_URL) || filter_var($trimmed, FILTER_VALIDATE_EMAIL)) {
                $results[$text] = $text;
                continue;
            }

            $key = $cachePrefix . $source . ':' . $target . ':' . md5($trimmed);
            $cacheMap[$key] = $trimmed;
        }

        if (empty($cacheMap)) {
            return $results;
        }

        // 2. Bulk lookup in Cache (1 single database query!)
        $cachedValues = Cache::many(array_keys($cacheMap));

        $toTranslate = [];
        foreach ($cacheMap as $key => $trimmedText) {
            if (isset($cachedValues[$key]) && $cachedValues[$key] !== null) {
                $results[$trimmedText] = $cachedValues[$key];
            } else {
                $toTranslate[$trimmedText] = $trimmedText;
            }
        }

        // 3. Batch translate uncached items in 1 HTTP request
        if (! empty($toTranslate)) {
            $uniqueUncached = array_values($toTranslate);
            $batchChunks = array_chunk($uniqueUncached, 20);

            foreach ($batchChunks as $chunk) {
                $separator = "\n---TR_SEP---\n";
                $combined = implode($separator, $chunk);

                $translatedCombined = $this->driver->translate($combined, $source, $target);

                if ($translatedCombined !== null && $translatedCombined !== '') {
                    $parts = explode($separator, $translatedCombined);
                    if (count($parts) === count($chunk)) {
                        foreach ($chunk as $idx => $orig) {
                            $trans = trim($parts[$idx]);
                            $finalTrans = ($trans !== '') ? $trans : $orig;
                            $results[$orig] = $finalTrans;

                            $k = $cachePrefix . $source . ':' . $target . ':' . md5($orig);
                            Cache::put($k, $finalTrans, $ttl);
                        }
                        continue;
                    }
                }

                // Fallback for this chunk if batch separator failed
                foreach ($chunk as $orig) {
                    $trans = $this->driver->translate($orig, $source, $target);
                    $finalTrans = ($trans !== null && $trans !== '') ? $trans : $orig;
                    $results[$orig] = $finalTrans;

                    $k = $cachePrefix . $source . ':' . $target . ':' . md5($orig);
                    Cache::put($k, $finalTrans, $ttl);
                }
            }
        }

        return $results;
    }

    /**
     * Flush cache for a specific translation string.
     */
    public function forget(?string $text, string $target = 'en', string $source = 'pt'): void
    {
        if ($text === null || $text === '') {
            return;
        }

        $cachePrefix = config('translation.cache_prefix', 'auto_translation:');
        $cacheKey = $cachePrefix . $source . ':' . $target . ':' . md5(trim($text));
        Cache::forget($cacheKey);
    }
}
