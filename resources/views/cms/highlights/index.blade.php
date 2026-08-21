<x-cms-layout :title="$plural">
    <x-slot name="actions">
        <a href="{{ route('cms.'.$routeKey.'.create') }}"
           class="inline-flex items-center gap-2 rounded-lg bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-black transition-colors">
            + Novo destaque
        </a>
    </x-slot>

    @if(session('status'))
        <div class="mb-6 rounded-lg bg-green-50 border border-green-200 px-4 py-3 text-sm text-green-800">
            {{ session('status') }}
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
        @if($items->isEmpty())
            <div class="p-10 text-center text-gray-500 text-sm">
                Ainda não há destaques. Clica em "+ Novo destaque".
            </div>
        @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-100 text-sm">
                <thead class="bg-gray-50 text-gray-500 text-xs uppercase tracking-wider">
                    <tr>
                        <th class="px-4 py-3 text-left w-20">Imagem</th>
                        <th class="px-4 py-3 text-left">Título</th>
                        <th class="px-4 py-3 text-left">Resumo</th>
                        <th class="px-4 py-3 text-left w-28">Data</th>
                        <th class="px-4 py-3 text-left w-28">Estado</th>
                        <th class="px-4 py-3 text-right w-32">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($items as $item)
                    <tr class="hover:bg-gray-50 group">
                        <td class="px-4 py-3">
                            @if(!empty($item->image))
                                <img src="{{ img_src($item->image) }}" alt=""
                                     class="h-12 w-20 object-cover rounded-md ring-1 ring-gray-200">
                            @else
                                <div class="h-12 w-20 rounded-md bg-gray-100 flex items-center justify-center text-gray-400">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909M3 19.5h18M3 4.5h18"/></svg>
                                </div>
                            @endif
                        </td>
                        <td class="px-4 py-3">
                            <p class="font-medium text-gray-900 leading-snug">{{ Str::limit($item->title, 55) }}</p>
                            @if($item->title_en)
                                <p class="text-xs text-gray-400 mt-0.5">EN: {{ Str::limit($item->title_en, 50) }}</p>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-gray-500">
                            {{ Str::limit(strip_tags($item->excerpt), 60) }}
                        </td>
                        <td class="px-4 py-3 text-gray-500">
                            {{ $item->published_at ? $item->published_at->format('d/m/Y') : '—' }}
                        </td>
                        <td class="px-4 py-3">
                            @if($item->is_published)
                                <span class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2.5 py-1 text-xs font-medium text-green-700">
                                    <span class="h-1.5 w-1.5 rounded-full bg-green-500"></span> Publicado
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1 rounded-full bg-gray-100 px-2.5 py-1 text-xs font-medium text-gray-500">
                                    <span class="h-1.5 w-1.5 rounded-full bg-gray-400"></span> Rascunho
                                </span>
                            @endif
                        </td>
                        <td class="px-4 py-3 text-right whitespace-nowrap">
                            <a href="{{ route('cms.'.$routeKey.'.edit', $item) }}"
                               class="text-gray-600 hover:text-black font-medium mr-3">Editar</a>
                            <form action="{{ route('cms.'.$routeKey.'.destroy', $item) }}" method="POST"
                                  class="inline" onsubmit="return confirm('Remover este destaque?')">
                                @csrf @method('DELETE')
                                <button class="text-red-500 hover:text-red-700 font-medium">Remover</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</x-cms-layout>
