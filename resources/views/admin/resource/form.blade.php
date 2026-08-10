<x-app-layout>
    <x-slot name="header">
        <h2 class="font-medium text-2xl text-black">
            {{ $mode === 'create' ? 'Novo' : 'Editar' }} — {{ $labelSingular }}
        </h2>
    </x-slot>

    @if($errors->any())
        <div class="mb-6 bg-red-50 border border-red-200 text-red-700 px-4 py-3 rounded-sm text-sm">
            <ul class="list-disc list-inside">
                @foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach
            </ul>
        </div>
    @endif

    <form action="{{ $mode === 'create' ? route('admin.' . $routeKey . '.store') : route('admin.' . $routeKey . '.update', $item) }}"
          method="POST" enctype="multipart/form-data"
          class="bg-white rounded-sm shadow-sm border border-gray-100 p-6 space-y-6 max-w-3xl">
        @csrf
        @if($mode === 'edit') @method('PUT') @endif

        @foreach($fields as $f)
            @php $translatable = $f['translatable'] ?? false; @endphp
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">{{ $f['label'] }}</label>

                @if($f['type'] === 'image')
                    @php $cur = $item->{$f['name']}; @endphp
                    @if($cur)
                        <img src="{{ img_src($cur) }}" alt="" class="w-40 h-28 object-cover rounded mb-2 bg-gray-100">
                    @endif
                    <input type="file" name="{{ $f['name'] }}" accept="image/*" class="block text-sm text-gray-600">
                    @if($cur)
                        <label class="text-xs text-red-600 inline-flex items-center gap-1 mt-2">
                            <input type="checkbox" name="{{ $f['name'] }}_remove" value="1"> remover imagem
                        </label>
                    @endif

                @elseif($f['type'] === 'checkbox')
                    <label class="inline-flex items-center gap-2 text-sm">
                        <input type="checkbox" name="{{ $f['name'] }}" value="1" {{ old($f['name'], $item->{$f['name']}) ? 'checked' : '' }}>
                        Ativo / Publicado
                    </label>

                @elseif($translatable)
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                        @foreach([['', 'Português'], ['_en', 'English']] as [$suffix, $langLabel])
                            @php $col = $f['name'] . $suffix; @endphp
                            <div>
                                <span class="block text-[10px] uppercase tracking-wide text-gray-400 mb-1">{{ $langLabel }}</span>
                                @if($f['type'] === 'textarea')
                                    <textarea name="{{ $col }}" rows="3" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black px-3 py-2 text-sm">{{ old($col, $item->{$col}) }}</textarea>
                                @else
                                    <input type="text" name="{{ $col }}" value="{{ old($col, $item->{$col}) }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black px-3 py-2 text-sm">
                                @endif
                            </div>
                        @endforeach
                    </div>

                @else
                    @php $col = $f['name']; @endphp
                    @if($f['type'] === 'textarea')
                        <textarea name="{{ $col }}" rows="3" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black px-3 py-2 text-sm">{{ old($col, $item->{$col}) }}</textarea>
                    @elseif($f['type'] === 'number')
                        <input type="number" step="any" name="{{ $col }}" value="{{ old($col, $item->{$col}) }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black px-3 py-2 text-sm">
                    @else
                        <input type="text" name="{{ $col }}" value="{{ old($col, $item->{$col}) }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black px-3 py-2 text-sm">
                    @endif
                @endif

                @if(!empty($f['help']))
                    <p class="text-xs text-gray-400 mt-1">{{ $f['help'] }}</p>
                @endif
            </div>
        @endforeach

        <div class="flex items-center gap-3 pt-2 border-t border-gray-100">
            <button type="submit" class="bg-black text-white py-2.5 px-6 rounded text-sm font-medium hover:bg-gray-900">Guardar</button>
            <a href="{{ route('admin.' . $routeKey . '.index') }}" class="text-sm text-gray-500 hover:text-black">Cancelar</a>
        </div>
    </form>
</x-app-layout>
