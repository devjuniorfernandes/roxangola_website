<?php

namespace App\Http\Controllers\Admin;

use App\Models\Milestone;

class MilestoneController extends ResourceController
{
    protected function model(): string
    {
        return Milestone::class;
    }

    protected function routeKey(): string
    {
        return 'milestones';
    }

    protected function labelSingular(): string
    {
        return 'Marco';
    }

    protected function labelPlural(): string
    {
        return 'Marcos da História';
    }

    protected function orderBy(): array
    {
        return ['sort', 'asc'];
    }

    protected function fields(): array
    {
        return [
            ['name' => 'date', 'label' => 'Data', 'type' => 'text', 'help' => 'Formato AAAA.M (ex.: 2026.2).'],
            ['name' => 'image', 'label' => 'Imagem', 'type' => 'image'],
            ['name' => 'title', 'label' => 'Título', 'type' => 'textarea', 'translatable' => true],
            ['name' => 'sort', 'label' => 'Ordem (cronológica)', 'type' => 'number'],
            ['name' => 'is_published', 'label' => 'Publicado', 'type' => 'checkbox'],
        ];
    }
}
