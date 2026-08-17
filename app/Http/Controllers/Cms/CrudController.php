<?php

namespace App\Http\Controllers\Cms;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

/**
 * Motor de CRUD guiado por schema para as coleções do CMS.
 * Cada coleção define apenas model(), routeKey(), labels e fields().
 */
abstract class CrudController extends Controller
{
    abstract protected function model(): string;         // FQCN do model
    abstract protected function routeKey(): string;       // ex.: 'highlights' -> cms.highlights.*
    abstract protected function singular(): string;
    abstract protected function plural(): string;

    /**
     * Lista de campos. Cada campo:
     *  ['name'=>'title','label'=>'Título','type'=>'text|textarea|number|image|checkbox|date|url','translatable'=>bool]
     */
    abstract protected function fields(): array;

    protected function orderBy(): string { return 'sort'; }

    /** Campos que aparecem como colunas na listagem (nomes). */
    protected function listColumns(): array
    {
        return array_slice(array_map(fn ($f) => $f['name'], $this->editableFields()), 0, 2);
    }

    // ---- helpers de schema ----
    protected function editableFields(): array
    {
        // expande campos traduzíveis em PT + EN
        $out = [];
        foreach ($this->fields() as $f) {
            $out[] = $f;
            if (! empty($f['translatable'])) {
                $out[] = array_merge($f, [
                    'name' => $f['name'].'_en',
                    'label' => ($f['label'] ?? $f['name']).' (EN)',
                    'translatable' => false,
                    '_en' => true,
                ]);
            }
        }
        return $out;
    }

    protected function columnNames(): array
    {
        $cols = [];
        foreach ($this->editableFields() as $f) $cols[] = $f['name'];
        return $cols;
    }

    protected function viewData(): array
    {
        return [
            'routeKey' => $this->routeKey(),
            'singular' => $this->singular(),
            'plural'   => $this->plural(),
            'fields'   => $this->editableFields(),
            'listColumns' => $this->listColumns(),
        ];
    }

    // ---- ações ----
    public function index()
    {
        $model = $this->model();
        $items = $model::orderBy($this->orderBy())->orderBy('id')->get();
        return view('cms.crud.index', array_merge($this->viewData(), ['items' => $items]));
    }

    public function create()
    {
        $model = $this->model();
        return view('cms.crud.form', array_merge($this->viewData(), [
            'item' => new $model(), 'mode' => 'create',
        ]));
    }

    public function store(Request $request)
    {
        $model = $this->model();
        $item = new $model();
        $this->fill($item, $request);
        $item->save();
        return redirect()->route("cms.{$this->routeKey()}.index")->with('status', $this->singular().' criado.');
    }

    public function edit($id)
    {
        $model = $this->model();
        $item = $model::findOrFail($id);
        return view('cms.crud.form', array_merge($this->viewData(), ['item' => $item, 'mode' => 'edit']));
    }

    public function update(Request $request, $id)
    {
        $model = $this->model();
        $item = $model::findOrFail($id);
        $this->fill($item, $request);
        $item->save();
        return redirect()->route("cms.{$this->routeKey()}.index")->with('status', $this->singular().' atualizado.');
    }

    public function destroy($id)
    {
        $model = $this->model();
        $model::findOrFail($id)->delete();
        return redirect()->route("cms.{$this->routeKey()}.index")->with('status', $this->singular().' removido.');
    }

    // ---- preenchimento ----
    protected function fill($item, Request $request): void
    {
        foreach ($this->editableFields() as $f) {
            $name = $f['name'];
            $type = $f['type'] ?? 'text';

            if ($type === 'image') {
                if ($request->boolean($name.'_remove')) {
                    $item->{$name} = null;
                } elseif ($request->hasFile($name)) {
                    $path = $request->file($name)->store('cms', 'public');
                    $item->{$name} = 'storage/'.$path;
                }
                // senão mantém o valor atual
                continue;
            }

            if ($type === 'checkbox') {
                $item->{$name} = $request->boolean($name);
                continue;
            }

            $item->{$name} = $request->input($name);
        }
    }
}
