<x-cms-layout :title="($mode === 'create' ? 'Novo' : 'Editar').' — '.$singular">
    <x-slot name="actions">
        <a href="{{ route('cms.'.$routeKey.'.index') }}" class="text-sm text-gray-500 hover:text-black">← Voltar</a>
    </x-slot>

    <form action="{{ $mode === 'create' ? route('cms.'.$routeKey.'.store') : route('cms.'.$routeKey.'.update', $item) }}"
          method="POST" enctype="multipart/form-data" class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 p-6 space-y-6 max-w-2xl">
        @csrf
        @if($mode === 'edit') @method('PUT') @endif

        @foreach($fields as $f)
            @php $name = $f['name']; $type = $f['type'] ?? 'text'; $val = old($name, $item->{$name} ?? ''); @endphp
            <div>
                <label for="f_{{ $name }}" class="block text-sm font-medium text-gray-700 mb-1.5">{{ $f['label'] ?? $name }}</label>

                @if($type === 'image')
                    @if(!empty($item->{$name}))
                        <div class="mb-2 flex items-center gap-3">
                            <img src="{{ img_src($item->{$name}) }}" alt="" class="h-20 w-32 object-cover rounded ring-1 ring-gray-200">
                            <label class="inline-flex items-center gap-2 text-sm text-gray-500">
                                <input type="checkbox" name="{{ $name }}_remove" value="1" class="rounded border-gray-300"> Remover
                            </label>
                        </div>
                    @endif
                    <input id="f_{{ $name }}" type="file" name="{{ $name }}" accept="image/*"
                           class="block w-full text-sm text-gray-600 file:mr-3 file:rounded-md file:border-0 file:bg-gray-900 file:px-3 file:py-2 file:text-white file:text-sm hover:file:bg-black">
                    <p class="mt-1 text-xs text-gray-400">Deixa vazio para manter a imagem atual. Ou usa um URL no campo de texto (não aplicável aqui).</p>

                @elseif($type === 'textarea')
                    <textarea id="f_{{ $name }}" name="{{ $name }}" rows="4"
                              class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">{{ $val }}</textarea>

                @elseif($type === 'checkbox')
                    <label class="inline-flex items-center gap-2">
                        <input type="hidden" name="{{ $name }}" value="0">
                        <input id="f_{{ $name }}" type="checkbox" name="{{ $name }}" value="1" @checked(old($name, $item->{$name} ?? false)) class="rounded border-gray-300 text-gray-900 focus:ring-gray-900">
                        <span class="text-sm text-gray-600">Ativar</span>
                    </label>

                @elseif($type === 'number')
                    <input id="f_{{ $name }}" type="number" name="{{ $name }}" value="{{ $val }}"
                           class="block w-40 rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">

                @else
                    <input id="f_{{ $name }}" type="{{ $type === 'url' ? 'text' : $type }}" name="{{ $name }}" value="{{ $val }}"
                           class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">
                @endif
            </div>
        @endforeach

        <div class="flex items-center gap-3 pt-2 border-t border-gray-100">
            <button class="rounded-lg bg-gray-900 px-5 py-2 text-sm font-medium text-white hover:bg-black transition-colors">Guardar</button>
            <a href="{{ route('cms.'.$routeKey.'.index') }}" class="text-sm text-gray-500 hover:text-black">Cancelar</a>
        </div>
    </form>
</x-cms-layout>
