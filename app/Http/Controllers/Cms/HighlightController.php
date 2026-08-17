<?php
namespace App\Http\Controllers\Cms;
class HighlightController extends CrudController
{
    protected function model(): string { return \App\Models\Highlight::class; }
    protected function routeKey(): string { return 'highlights'; }
    protected function singular(): string { return 'Destaque'; }
    protected function plural(): string { return 'Destaques'; }
    protected function fields(): array {
        return [
            ['name' => 'image', 'label' => 'Imagem', 'type' => 'image'],
            ['name' => 'title', 'label' => 'Título', 'type' => 'text', 'translatable' => true],
            ['name' => 'link', 'label' => 'Link (URL)', 'type' => 'url'],
            ['name' => 'sort', 'label' => 'Ordem', 'type' => 'number'],
            ['name' => 'is_published', 'label' => 'Publicado', 'type' => 'checkbox'],
        ];
    }
    protected function listColumns(): array { return ['title', 'is_published']; }
}
