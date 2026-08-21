<x-cms-layout :title="$plural">
    <x-slot name="actions">
        <a href="{{ route('cms.'.$routeKey.'.create') }}" class="inline-flex items-center gap-2 rounded-lg bg-[#C5A059] px-4 py-2 text-xs font-bold tracking-wider text-[#0c0d0e] hover:bg-[#b08e49] transition-all shadow-2xs">
            <span>+ Novo {{ $singular }}</span>
        </a>
    </x-slot>

    <div class="bg-white rounded-xl border border-gray-200/80 shadow-2xs overflow-hidden">
        @if($items->isEmpty())
            <div class="p-12 text-center">
                <div class="w-10 h-10 rounded-xl bg-gray-100 text-gray-400 mx-auto flex items-center justify-center mb-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                </div>
                <p class="text-xs font-bold text-gray-900">Nenhum registo encontrado</p>
                <p class="text-[11px] text-gray-400 mt-0.5">Clica no botão acima para adicionar o primeiro registo.</p>
            </div>
        @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-100 text-xs">
                <thead class="bg-gray-50/50 text-gray-500 text-[10px] font-semibold uppercase tracking-wider">
                    <tr>
                        <th class="px-5 py-3 text-left w-16">Imagem</th>
                        @foreach($listColumns as $col)
                            <th class="px-5 py-3 text-left">{{ ucfirst(str_replace('_',' ',$col)) }}</th>
                        @endforeach
                        <th class="px-5 py-3 text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($items as $item)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-5 py-2.5">
                                @if(!empty($item->image))
                                    <img src="{{ img_src($item->image) }}" alt="" class="h-8 w-12 object-cover rounded bg-gray-100 border border-gray-200">
                                @else
                                    <div class="h-8 w-12 rounded bg-gray-100 border border-gray-200/60 flex items-center justify-center text-gray-300">
                                        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
                                    </div>
                                @endif
                            </td>
                            @foreach($listColumns as $col)
                                <td class="px-5 py-2.5 text-gray-800 font-medium">
                                    @if($col === 'is_published')
                                        @if($item->is_published)
                                            <span class="inline-flex items-center gap-1 rounded-full bg-emerald-50 px-2 py-0.5 text-[10px] font-semibold text-emerald-700">
                                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span> Publicado
                                            </span>
                                        @else
                                            <span class="inline-flex items-center gap-1 rounded-full bg-gray-100 px-2 py-0.5 text-[10px] font-semibold text-gray-500">
                                                Rascunho
                                            </span>
                                        @endif
                                    @else
                                        {{ \Illuminate\Support\Str::limit((string) ($item->{$col} ?? '—'), 50) }}
                                    @endif
                                </td>
                            @endforeach
                            <td class="px-5 py-2.5 text-right whitespace-nowrap">
                                <a href="{{ route('cms.'.$routeKey.'.edit', $item->id) }}" class="inline-flex items-center px-2.5 py-1 text-xs font-medium text-gray-700 hover:text-[#0c0d0e] hover:bg-gray-100 rounded-lg transition-colors">Editar</a>
                                <form action="{{ route('cms.'.$routeKey.'.destroy', $item->id) }}" method="POST" class="inline ml-1" onsubmit="return confirm('Remover este item?')">
                                    @csrf @method('DELETE')
                                    <button class="inline-flex items-center px-2.5 py-1 text-xs font-medium text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg transition-colors">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if($items instanceof \Illuminate\Pagination\AbstractPaginator && $items->hasPages())
            <div class="px-5 py-3 border-t border-gray-100">
                {{ $items->links() }}
            </div>
        @endif
        @endif
    </div>
</x-cms-layout>
