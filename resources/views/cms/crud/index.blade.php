<x-cms-layout :title="$plural">
    <x-slot name="actions">
        <a href="{{ route('cms.'.$routeKey.'.create') }}" class="inline-flex items-center gap-2 rounded-lg bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-black transition-colors">+ Novo</a>
    </x-slot>

    <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
        @if($items->isEmpty())
            <div class="p-10 text-center text-gray-500 text-sm">Ainda não há registos. Clica em “+ Novo”.</div>
        @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-100 text-sm">
                <thead class="bg-gray-50 text-gray-500">
                    <tr>
                        <th class="px-4 py-3 text-left font-medium w-16">Imagem</th>
                        @foreach($listColumns as $col)
                            <th class="px-4 py-3 text-left font-medium">{{ ucfirst(str_replace('_',' ',$col)) }}</th>
                        @endforeach
                        <th class="px-4 py-3 text-right font-medium">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($items as $item)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2">
                                @if(!empty($item->image))
                                    <img src="{{ img_src($item->image) }}" alt="" class="h-10 w-16 object-cover rounded">
                                @else
                                    <div class="h-10 w-16 rounded bg-gray-100"></div>
                                @endif
                            </td>
                            @foreach($listColumns as $col)
                                <td class="px-4 py-2 text-gray-700">
                                    @if($col === 'is_published')
                                        @if($item->is_published)
                                            <span class="inline-flex items-center rounded-full bg-green-50 px-2 py-0.5 text-xs font-medium text-green-700">Publicado</span>
                                        @else
                                            <span class="inline-flex items-center rounded-full bg-gray-100 px-2 py-0.5 text-xs font-medium text-gray-500">Rascunho</span>
                                        @endif
                                    @else
                                        {{ Str::limit(strip_tags((string) $item->{$col}), 60) }}
                                    @endif
                                </td>
                            @endforeach
                            <td class="px-4 py-2 text-right whitespace-nowrap">
                                <a href="{{ route('cms.'.$routeKey.'.edit', $item) }}" class="text-gray-600 hover:text-black font-medium">Editar</a>
                                <form action="{{ route('cms.'.$routeKey.'.destroy', $item) }}" method="POST" class="inline ml-3" onsubmit="return confirm('Remover este registo?')">
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
