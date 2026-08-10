<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-medium text-2xl text-black">Conteúdo do Site (CMS)</h2>
            <a href="{{ route('dashboard') }}" class="text-sm text-gray-500 hover:text-black">← Voltar</a>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 bg-black text-white px-4 py-3 rounded-sm shadow-sm" role="alert">
            <span class="block sm:inline font-light text-sm">{{ session('success') }}</span>
        </div>
    @endif

    <p class="mb-6 text-sm text-gray-500 font-light">
        Edite o texto de qualquer página (português e inglês) e substitua as imagens principais.
        Deixar um campo igual ao original mantém o texto por defeito. Guardar aplica de imediato no site.
    </p>

    <form action="{{ route('admin.cms.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- ---------- IMAGENS ---------- --}}
        @foreach($imageGroups as $groupKey => $group)
            <details class="mb-4 bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden" open>
                <summary class="bg-gray-50 border-b border-gray-100 px-6 py-4 cursor-pointer font-medium text-black">
                    Imagens — {{ $group['label'] }}
                </summary>
                <div class="p-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                    @foreach($group['slots'] as $slotKey => $slot)
                        @php $current = $imageOverrides[$slotKey] ?? $slot['default']; @endphp
                        <div class="border border-gray-100 rounded-sm p-4">
                            <p class="text-sm font-medium text-gray-700 mb-2">{{ $slot['label'] }}</p>
                            <img src="{{ asset($current) }}" alt="" class="w-full h-32 object-cover rounded-sm mb-3 bg-gray-100">
                            <input type="file" name="image[{{ $slotKey }}]" accept="image/*" class="block w-full text-xs text-gray-600">
                            @if(isset($imageOverrides[$slotKey]))
                                <label class="mt-2 inline-flex items-center gap-2 text-xs text-red-600">
                                    <input type="checkbox" name="image_reset[{{ $slotKey }}]" value="1"> Repor imagem original
                                </label>
                            @endif
                        </div>
                    @endforeach
                </div>
            </details>
        @endforeach

        {{-- ---------- TEXTO ---------- --}}
        @foreach($pages as $file => $rows)
            <details class="mb-4 bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden" {{ $loop->first ? 'open' : '' }}>
                <summary class="bg-gray-50 border-b border-gray-100 px-6 py-4 cursor-pointer font-medium text-black capitalize flex items-center gap-2 select-none hover:bg-gray-100 transition-colors">
                    <span class="text-gray-400 text-xs">▶</span>
                    Texto — {{ $file }} <span class="text-xs text-gray-400 font-normal">({{ count($rows) }} campos)</span>
                </summary>
                <div class="p-6 space-y-6">
                    @foreach($rows as $row)
                        <div class="{{ $row['overridden'] ? 'border-l-2 border-black pl-4' : '' }}">
                            <label class="block text-xs font-medium text-gray-500 mb-2">
                                {{ $row['label'] }}
                                @if($row['overridden']) <span class="text-[10px] text-black">• editado</span> @endif
                            </label>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div>
                                    <span class="block text-[10px] uppercase tracking-wide text-gray-400 mb-1">Português</span>
                                    @if($row['long'])
                                        <textarea name="text[{{ $row['key'] }}][pt]" rows="3" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-3 py-2 text-sm">{{ $row['pt'] }}</textarea>
                                    @else
                                        <input type="text" name="text[{{ $row['key'] }}][pt]" value="{{ $row['pt'] }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-3 py-2 text-sm">
                                    @endif
                                </div>
                                <div>
                                    <span class="block text-[10px] uppercase tracking-wide text-gray-400 mb-1">English</span>
                                    @if($row['long'])
                                        <textarea name="text[{{ $row['key'] }}][en]" rows="3" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-3 py-2 text-sm">{{ $row['en'] }}</textarea>
                                    @else
                                        <input type="text" name="text[{{ $row['key'] }}][en]" value="{{ $row['en'] }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-3 py-2 text-sm">
                                    @endif
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </details>
        @endforeach

        <div class="sticky bottom-0 bg-white border-t border-gray-200 py-4 mt-6 flex justify-end">
            <button type="submit" class="bg-black text-white py-3 px-8 rounded hover:bg-gray-900 transition-colors uppercase tracking-widest text-sm font-medium">
                Guardar alterações
            </button>
        </div>
    </form>
</x-app-layout>
