<x-cms-layout :title="($mode === 'create' ? 'Novo' : 'Editar').' — '.$singular">
    <x-slot name="actions">
        <a href="{{ route('cms.'.$routeKey.'.index') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-gray-600 hover:text-gray-900 transition-colors">
            ← Voltar à lista
        </a>
    </x-slot>

    <form action="{{ $mode === 'create' ? route('cms.'.$routeKey.'.store') : route('cms.'.$routeKey.'.update', $item) }}"
          method="POST" enctype="multipart/form-data" class="bg-white rounded-xl border border-gray-200/80 shadow-2xs p-5 sm:p-6 space-y-5 max-w-3xl">
        @csrf
        @if($mode === 'edit') @method('PUT') @endif

        @foreach($fields as $f)
            @php $name = $f['name']; $type = $f['type'] ?? 'text'; $val = old($name, $item->{$name} ?? ''); @endphp
            <div class="space-y-1">
                <label for="f_{{ $name }}" class="block text-[11px] font-semibold uppercase tracking-wider text-gray-700">{{ $f['label'] ?? $name }}</label>

                @if($type === 'image')
                    @if(!empty($item->{$name}))
                        <div class="mb-2 p-2.5 bg-gray-50 rounded-lg border border-gray-200/80 flex items-center gap-3">
                            <img src="{{ img_src($item->{$name}) }}" alt="" class="h-16 w-24 object-cover rounded border border-gray-200">
                            <label class="inline-flex items-center gap-2 text-xs font-medium text-gray-600 cursor-pointer hover:text-red-600 transition-colors">
                                <input type="checkbox" name="{{ $name }}_remove" value="1" class="rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <span>Remover imagem atual</span>
                            </label>
                        </div>
                    @endif
                    <input id="f_{{ $name }}" type="file" name="{{ $name }}" accept="image/*"
                           class="block w-full text-xs text-gray-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-[#0c0d0e] file:text-white hover:file:bg-[#C5A059] hover:file:text-[#0c0d0e] file:transition-all">
                    <p class="text-[10px] text-gray-400 mt-0.5">Formatos aceites: JPG, PNG, WEBP, SVG.</p>

                @elseif($type === 'textarea')
                    <textarea id="f_{{ $name }}" name="{{ $name }}" rows="4"
                              class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs">{{ $val }}</textarea>

                @elseif($type === 'checkbox')
                    <div class="pt-1">
                        <label class="inline-flex items-center gap-2 cursor-pointer">
                            <input type="hidden" name="{{ $name }}" value="0">
                            <input id="f_{{ $name }}" type="checkbox" name="{{ $name }}" value="1" @checked(old($name, $item->{$name} ?? false)) class="w-4 h-4 rounded border-gray-300 text-[#0c0d0e] focus:ring-[#C5A059]">
                            <span class="text-xs font-bold text-gray-800">Ativar / Publicar registo no site</span>
                        </label>
                    </div>

                @elseif($type === 'number')
                    <input id="f_{{ $name }}" type="number" name="{{ $name }}" value="{{ $val }}"
                           class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs">

                @else
                    <input id="f_{{ $name }}" type="text" name="{{ $name }}" value="{{ $val }}"
                           class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs">
                @endif
                @error($name) <p class="text-xs text-red-600 mt-1">{{ $message }}</p> @enderror
            </div>
        @endforeach

        <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
            <a href="{{ route('cms.'.$routeKey.'.index') }}" class="px-4 py-2 text-xs font-medium text-gray-600 hover:text-gray-900 transition-colors">Cancelar</a>
            <button class="rounded-lg bg-[#C5A059] px-5 py-2 text-xs font-bold tracking-wider text-[#0c0d0e] hover:bg-[#b08e49] shadow-2xs transition-all">
                Guardar Registo
            </button>
        </div>
    </form>
</x-cms-layout>
