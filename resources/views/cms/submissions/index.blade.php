<x-cms-layout :title="$cfg['label']" subtitle="Submissões recebidas pelos formulários do site">
    {{-- Tabs de tipos --}}
    <div class="mb-5 flex flex-wrap gap-2">
        @foreach($types as $key => $t)
            <a href="{{ route('cms.submissions.index', $key) }}"
               class="rounded-full px-3.5 py-1.5 text-sm font-medium transition-colors {{ $key === $type ? 'bg-gray-900 text-white' : 'bg-white text-gray-600 ring-1 ring-gray-200 hover:bg-gray-50' }}">
                {{ $t['label'] }}
            </a>
        @endforeach
    </div>

    <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
        @if($items->isEmpty())
            <div class="p-10 text-center text-gray-500 text-sm">Ainda não há registos nesta caixa.</div>
        @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-100 text-sm">
                <thead class="bg-gray-50 text-gray-500">
                    <tr>
                        <th class="px-4 py-3 text-left font-medium w-4"></th>
                        @foreach($cfg['cols'] as $col => $label)
                            <th class="px-4 py-3 text-left font-medium">{{ $label }}</th>
                        @endforeach
                        <th class="px-4 py-3 text-left font-medium">Recebido</th>
                        <th class="px-4 py-3 text-right font-medium">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($items as $item)
                        <tr class="hover:bg-gray-50 {{ (isset($item->is_read) && ! $item->is_read) ? 'font-medium text-gray-900' : 'text-gray-600' }}">
                            <td class="px-4 py-2">
                                @if(isset($item->is_read) && ! $item->is_read)
                                    <span class="inline-block h-2 w-2 rounded-full bg-amber-500" title="Não lido"></span>
                                @endif
                            </td>
                            @foreach($cfg['cols'] as $col => $label)
                                <td class="px-4 py-2">{{ \Illuminate\Support\Str::limit((string) ($item->{$col} ?? '—'), 40) }}</td>
                            @endforeach
                            <td class="px-4 py-2 text-gray-400">{{ optional($item->created_at)->format('d/m/Y H:i') }}</td>
                            <td class="px-4 py-2 text-right whitespace-nowrap">
                                <a href="{{ route('cms.submissions.show', [$type, $item->id]) }}" class="text-gray-600 hover:text-black font-medium">Ver</a>
                                <form action="{{ route('cms.submissions.destroy', [$type, $item->id]) }}" method="POST" class="inline ml-3" onsubmit="return confirm('Remover este registo?')">
                                    @csrf @method('DELETE')
                                    <button class="text-red-500 hover:text-red-700 font-medium">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="px-4 py-3 border-t border-gray-100">{{ $items->links() }}</div>
        @endif
    </div>
</x-cms-layout>
