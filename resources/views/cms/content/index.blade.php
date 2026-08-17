<x-cms-layout title="Textos & Imagens" subtitle="Substituir imagens do site (mais páginas em breve)">
    <form action="{{ route('cms.content.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf @method('PUT')

        @forelse($groups as $groupKey => $group)
            <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
                <div class="px-6 py-4 border-b border-gray-100">
                    <h3 class="text-sm font-semibold text-gray-900">{{ $group['label'] ?? $groupKey }}</h3>
                </div>
                <div class="divide-y divide-gray-100">
                    @foreach($group['slots'] as $key => $slot)
                        @php
                            $h = md5($key);
                            $override = $overrides[$key] ?? null;
                            $current = $override ? img_src($override) : asset($slot['default']);
                        @endphp
                        <div class="p-6 flex flex-col sm:flex-row sm:items-center gap-5">
                            <img src="{{ $current }}" alt="" class="h-20 w-32 flex-shrink-0 object-cover rounded ring-1 ring-gray-200 bg-gray-100">
                            <div class="flex-1 min-w-0">
                                <p class="text-sm font-medium text-gray-800">{{ $slot['label'] ?? $key }}</p>
                                <p class="text-xs text-gray-400">
                                    {{ $override ? 'Imagem personalizada' : 'A usar a imagem por omissão' }}
                                </p>
                                <input type="file" name="img_{{ $h }}" accept="image/*"
                                       class="mt-2 block w-full text-sm text-gray-600 file:mr-3 file:rounded-md file:border-0 file:bg-gray-900 file:px-3 file:py-1.5 file:text-white file:text-sm hover:file:bg-black">
                            </div>
                            @if($override)
                                <label class="inline-flex items-center gap-2 text-sm text-gray-500 flex-shrink-0">
                                    <input type="checkbox" name="reset_{{ $h }}" value="1" class="rounded border-gray-300"> Repor por omissão
                                </label>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        @empty
            <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 p-10 text-center text-gray-500 text-sm">Sem slots de imagem configurados.</div>
        @endforelse

        @if(!empty($groups))
            <div class="flex items-center gap-3">
                <button class="rounded-lg bg-gray-900 px-5 py-2 text-sm font-medium text-white hover:bg-black transition-colors">Guardar alterações</button>
            </div>
        @endif
    </form>
</x-cms-layout>
