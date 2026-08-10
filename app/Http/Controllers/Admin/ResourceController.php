<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

/**
 * CRUD guiado por schema. Cada recurso declara model()/fields()/routeKey()/labels
 * e o base trata de listar, criar, editar, apagar, validar e uploads.
 *
 * Tipos de campo: text, textarea, number, image, checkbox.
 * Flag 'translatable' => true gera automaticamente o par PT (<campo>) / EN (<campo>_en).
 */
abstract class ResourceController extends Controller
{
    /** @return class-string<\Illuminate\Database\Eloquent\Model> */
    abstract protected function model(): string;

    abstract protected function fields(): array;

    abstract protected function routeKey(): string;   // ex.: 'highlights' -> admin.highlights.*

    abstract protected function labelSingular(): string;

    abstract protected function labelPlural(): string;

    protected function orderBy(): array
    {
        return ['id', 'asc'];
    }

    protected function viewData(): array
    {
        return [
            'fields' => $this->fields(),
            'routeKey' => $this->routeKey(),
            'labelSingular' => $this->labelSingular(),
            'labelPlural' => $this->labelPlural(),
        ];
    }

    public function index()
    {
        $items = ($this->model())::orderBy(...$this->orderBy())->get();

        return view('admin.resource.index', array_merge($this->viewData(), [
            'items' => $items,
        ]));
    }

    public function create()
    {
        $model = $this->model();

        return view('admin.resource.form', array_merge($this->viewData(), [
            'item' => new $model,
            'mode' => 'create',
        ]));
    }

    public function store(Request $request)
    {
        $model = $this->model();
        $item = new $model;
        $this->fill($item, $request);
        $item->save();

        return redirect()
            ->route("admin.{$this->routeKey()}.index")
            ->with('success', $this->labelSingular() . ' criado com sucesso.');
    }

    public function edit($id)
    {
        $item = ($this->model())::findOrFail($id);

        return view('admin.resource.form', array_merge($this->viewData(), [
            'item' => $item,
            'mode' => 'edit',
        ]));
    }

    public function update(Request $request, $id)
    {
        $item = ($this->model())::findOrFail($id);
        $this->fill($item, $request);
        $item->save();

        return redirect()
            ->route("admin.{$this->routeKey()}.index")
            ->with('success', $this->labelSingular() . ' atualizado com sucesso.');
    }

    public function destroy($id)
    {
        ($this->model())::findOrFail($id)->delete();

        return back()->with('success', $this->labelSingular() . ' removido.');
    }

    /**
     * Preenche o modelo a partir do request, respeitando tipos e traduções.
     */
    protected function fill($item, Request $request): void
    {
        foreach ($this->fields() as $field) {
            $columns = ($field['translatable'] ?? false)
                ? [$field['name'], $field['name'] . '_en']
                : [$field['name']];

            foreach ($columns as $col) {
                switch ($field['type']) {
                    case 'image':
                        if ($request->hasFile($col)) {
                            $item->{$col} = 'storage/' . $request->file($col)->store('cms', 'public');
                        } elseif ($request->boolean($col . '_remove')) {
                            $item->{$col} = null;
                        }
                        break;
                    case 'checkbox':
                        $item->{$col} = $request->boolean($col);
                        break;
                    case 'number':
                        $val = $request->input($col);
                        $item->{$col} = $val === null || $val === '' ? null : $val;
                        break;
                    default:
                        $item->{$col} = $request->input($col);
                }
            }
        }
    }
}
