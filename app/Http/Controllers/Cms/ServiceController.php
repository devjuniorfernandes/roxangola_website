<?php
namespace App\Http\Controllers\Cms;
class ServiceController extends CrudController
{
    protected function model(): string { return \App\Models\Service::class; }
    protected function routeKey(): string { return 'services'; }
    protected function singular(): string { return 'Serviço'; }
    protected function plural(): string { return 'Serviços'; }
    protected function fields(): array {
        return [
            ['name' => 'image', 'label' => 'Imagem', 'type' => 'image'],
            ['name' => 'title', 'label' => 'Título', 'type' => 'text', 'translatable' => true],
            ['name' => 'desc', 'label' => 'Descrição', 'type' => 'textarea', 'translatable' => true],
            ['name' => 'link', 'label' => 'Link (URL)', 'type' => 'url'],
            ['name' => 'sort', 'label' => 'Ordem', 'type' => 'number'],
            ['name' => 'is_published', 'label' => 'Publicado', 'type' => 'checkbox'],
        ];
    }
    protected function listColumns(): array { return ['title', 'is_published']; }
}
