<?php

namespace App\Http\Controllers\Cms;

use Illuminate\Http\Request;
use App\Models\Highlight;

class HighlightController extends CrudController
{
    protected function model(): string    { return Highlight::class; }
    protected function routeKey(): string { return 'highlights'; }
    protected function singular(): string { return 'Destaque'; }
    protected function plural(): string   { return 'Destaques'; }

    protected function fields(): array
    {
        return [
            // ── CARD ──────────────────────────────────────────────────
            ['name' => '_section_card',  'label' => '— Miniatura do Card —',         'type' => 'section'],
            ['name' => 'image',          'label' => 'Imagem do card (miniatura)',      'type' => 'image'],
            ['name' => 'title',          'label' => 'Título',                          'type' => 'text',     'translatable' => true],
            ['name' => 'excerpt',        'label' => 'Resumo (subtítulo no card)',       'type' => 'textarea', 'translatable' => true],

            // ── POP-UP / ARTIGO ───────────────────────────────────────
            ['name' => '_section_popup', 'label' => '— Pop-up / Artigo Completo —',  'type' => 'section'],
            ['name' => 'modal_image',    'label' => 'Imagem do artigo (pop-up)',       'type' => 'image'],
            ['name' => 'body',           'label' => 'Corpo do artigo',                 'type' => 'textarea', 'translatable' => true],

            // ── META ──────────────────────────────────────────────────
            ['name' => '_section_meta',  'label' => '— Configurações —',             'type' => 'section'],
            ['name' => 'link',           'label' => 'Link externo (URL)',              'type' => 'url'],
            ['name' => 'published_at',   'label' => 'Data de publicação',              'type' => 'date'],
            ['name' => 'sort',           'label' => 'Ordem de exibição',               'type' => 'number'],
            ['name' => 'is_published',   'label' => 'Publicado',                       'type' => 'checkbox'],
        ];
    }

    protected function listColumns(): array { return ['title', 'is_published']; }

    // ── Override index to use dedicated view ──────────────────────────
    public function index()
    {
        $items = Highlight::orderBy('sort')->orderBy('id')->get();
        return view('cms.highlights.index', [
            'items'    => $items,
            'routeKey' => $this->routeKey(),
            'singular' => $this->singular(),
            'plural'   => $this->plural(),
        ]);
    }

    // ── Override create/edit to use dedicated form ────────────────────
    public function create()
    {
        return view('cms.highlights.form', [
            'item'     => new Highlight(),
            'mode'     => 'create',
            'routeKey' => $this->routeKey(),
            'singular' => $this->singular(),
            'plural'   => $this->plural(),
        ]);
    }

    public function edit($id)
    {
        return view('cms.highlights.form', [
            'item'     => Highlight::findOrFail($id),
            'mode'     => 'edit',
            'routeKey' => $this->routeKey(),
            'singular' => $this->singular(),
            'plural'   => $this->plural(),
        ]);
    }

    // ── Store & Update use the base fill() with additional image fields
    public function store(Request $request)
    {
        $item = new Highlight();
        $this->fillHighlight($item, $request);
        $item->save();
        return redirect()->route('cms.highlights.index')->with('status', 'Destaque criado.');
    }

    public function update(Request $request, $id)
    {
        $item = Highlight::findOrFail($id);
        $this->fillHighlight($item, $request);
        $item->save();
        return redirect()->route('cms.highlights.index')->with('status', 'Destaque actualizado.');
    }

    private function fillHighlight(Highlight $item, Request $request): void
    {
        // Text fields
        foreach (['title', 'title_en', 'excerpt', 'excerpt_en', 'body', 'body_en', 'link', 'sort'] as $col) {
            $item->{$col} = $request->input($col);
        }
        $item->published_at = $request->input('published_at') ?: null;
        $item->is_published = $request->boolean('is_published');

        // Image: card thumbnail
        if ($request->boolean('image_remove')) {
            $item->image = null;
        } elseif ($request->hasFile('image')) {
            $path = $request->file('image')->store('cms/highlights', 'public');
            $item->image = 'storage/' . $path;
        }

        // Image: modal / article
        if ($request->boolean('modal_image_remove')) {
            $item->modal_image = null;
        } elseif ($request->hasFile('modal_image')) {
            $path = $request->file('modal_image')->store('cms/highlights', 'public');
            $item->modal_image = 'storage/' . $path;
        }
    }
}
