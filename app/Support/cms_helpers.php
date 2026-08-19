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

if (! function_exists('rich_text')) {
    /**
     * Converte texto simples em HTML seguro para descrições:
     *  - Linhas começadas por "- ", "* " ou "• " tornam-se itens de uma lista (<ul>).
     *  - Linhas em branco separam parágrafos.
     *  - As restantes quebras de linha tornam-se <br>.
     * Todo o conteúdo é escapado (e()) — não é possível injectar HTML arbitrário.
     */
    function rich_text(?string $value): string
    {
        if ($value === null || $value === '') {
            return '';
        }

        // Normaliza fins de linha e percorre linha a linha.
        $normalized = str_replace(["\r\n", "\r"], "\n", $value);
        $lines = explode("\n", $normalized);

        $html = '';
        $inList = false;   // estamos dentro de um <ul>?
        $textBuffer = [];  // linhas de texto normal acumuladas

        $flushText = function () use (&$textBuffer, &$html) {
            if ($textBuffer === []) {
                return;
            }
            $joined = implode("\n", $textBuffer);
            if (trim($joined) !== '') {
                $html .= '<p>' . nl2br(e(trim($joined))) . '</p>';
            }
            $textBuffer = [];
        };

        foreach ($lines as $line) {
            // Só "-" e "•" criam bullets. O "*" fica como texto literal.
            if (preg_match('/^\s*[-•]\s+(.*)$/u', $line, $m)) {
                // Linha de lista: fecha texto pendente e abre <ul> se preciso.
                $flushText();
                if (! $inList) {
                    $html .= '<ul class="space-y-1">';
                    $inList = true;
                }
                // Bullet fixo à esquerda (alinhado com o heading); texto recuado e com hanging indent.
                $html .= '<li class="flex gap-2"><span class="text-gray-400 select-none leading-relaxed">•</span><span class="flex-1">' . e(trim($m[1])) . '</span></li>';
            } else {
                // Linha de texto normal: fecha a lista se estava aberta.
                if ($inList) {
                    $html .= '</ul>';
                    $inList = false;
                }
                $textBuffer[] = $line;
            }
        }

        if ($inList) {
            $html .= '</ul>';
        }
        $flushText();

        return $html;
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

if (! function_exists('translate_auto')) {
    /**
     * Traduz automaticamente um texto (PT -> EN) utilizando o TranslationService com cache.
     */
    function translate_auto(?string $text, ?string $target = null, string $source = 'pt'): string
    {
        $target = $target ?: app()->getLocale();

        return app(\App\Services\Translation\TranslationService::class)->translate($text, $target, $source);
    }
}
