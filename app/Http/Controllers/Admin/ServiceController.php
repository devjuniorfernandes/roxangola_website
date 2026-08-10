<?php

namespace App\Http\Controllers\Admin;

use App\Models\Service;

class ServiceController extends ResourceController
{
    protected function model(): string
    {
        return Service::class;
    }

    protected function routeKey(): string
    {
        return 'services';
    }

    protected function labelSingular(): string
    {
        return 'Serviço';
    }

    protected function labelPlural(): string
    {
        return 'Serviços (cards)';
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
            ['name' => 'desc', 'label' => 'Descrição', 'type' => 'textarea', 'translatable' => true],
            ['name' => 'link', 'label' => 'Link', 'type' => 'text', 'help' => 'Caminho de destino (ex.: /servicos/agendamento).'],
            ['name' => 'sort', 'label' => 'Ordem', 'type' => 'number'],
            ['name' => 'is_published', 'label' => 'Publicado', 'type' => 'checkbox'],
        ];
    }
}
