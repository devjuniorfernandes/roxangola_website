<?php

namespace App\Http\Controllers\Admin;

use App\Models\GalleryImage;

class GalleryImageController extends ResourceController
{
    protected function model(): string
    {
        return GalleryImage::class;
    }

    protected function routeKey(): string
    {
        return 'gallery-images';
    }

    protected function labelSingular(): string
    {
        return 'Imagem da galeria';
    }

    protected function labelPlural(): string
    {
        return 'Galeria do Showroom';
    }

    protected function orderBy(): array
    {
        return ['sort', 'asc'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'image', 'label' => 'Imagem', 'type' => 'image'],
            ['name' => 'label', 'label' => 'Legenda', 'type' => 'text', 'translatable' => true],
            ['name' => 'sort', 'label' => 'Ordem', 'type' => 'number'],
            ['name' => 'is_published', 'label' => 'Publicado', 'type' => 'checkbox'],
        ];
    }
}
