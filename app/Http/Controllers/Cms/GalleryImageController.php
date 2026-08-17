<?php
namespace App\Http\Controllers\Cms;
class GalleryImageController extends CrudController
{
    protected function model(): string { return \App\Models\GalleryImage::class; }
    protected function routeKey(): string { return 'gallery'; }
    protected function singular(): string { return 'Imagem'; }
    protected function plural(): string { return 'Galeria do Showroom'; }
    protected function fields(): array {
        return [
            ['name' => 'image', 'label' => 'Imagem', 'type' => 'image'],
            ['name' => 'label', 'label' => 'Legenda', 'type' => 'text', 'translatable' => true],
            ['name' => 'sort', 'label' => 'Ordem', 'type' => 'number'],
            ['name' => 'is_published', 'label' => 'Publicado', 'type' => 'checkbox'],
        ];
    }
    protected function listColumns(): array { return ['label', 'is_published']; }
}
