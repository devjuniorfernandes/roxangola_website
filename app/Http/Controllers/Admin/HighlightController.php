<?php

namespace App\Http\Controllers\Admin;

use App\Models\Highlight;

class HighlightController extends ResourceController
{
    protected function model(): string
    {
        return Highlight::class;
    }

    protected function routeKey(): string
    {
        return 'highlights';
    }

    protected function labelSingular(): string
    {
        return 'Destaque';
    }

    protected function labelPlural(): string
    {
        return 'Destaques da Homepage';
    }

    protected function orderBy(): array
    {
        return ['sort', 'asc'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Imagem', 'type' => 'image'],
            ['name' => 'title', 'label' => 'Título', 'type' => 'text', 'translatable' => true],
            ['name' => 'link', 'label' => 'Link (opcional)', 'type' => 'text', 'help' => 'URL de destino do botão "MAIS". Deixe vazio para #.'],
            ['name' => 'sort', 'label' => 'Ordem', 'type' => 'number'],
            ['name' => 'is_published', 'label' => 'Publicado', 'type' => 'checkbox'],
        ];
    }
}
