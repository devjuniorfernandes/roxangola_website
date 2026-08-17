<?php
namespace App\Http\Controllers\Cms;
class MilestoneController extends CrudController
{
    protected function model(): string { return \App\Models\Milestone::class; }
    protected function routeKey(): string { return 'milestones'; }
    protected function singular(): string { return 'Marco'; }
    protected function plural(): string { return 'Marcos da História'; }
    protected function fields(): array {
        return [
            ['name' => 'date', 'label' => 'Data / Ano', 'type' => 'text'],
            ['name' => 'image', 'label' => 'Imagem', 'type' => 'image'],
            ['name' => 'title', 'label' => 'Título', 'type' => 'textarea', 'translatable' => true],
            ['name' => 'sort', 'label' => 'Ordem', 'type' => 'number'],
            ['name' => 'is_published', 'label' => 'Publicado', 'type' => 'checkbox'],
        ];
    }
    protected function listColumns(): array { return ['date', 'title']; }
}
