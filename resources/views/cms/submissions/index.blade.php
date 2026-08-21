<x-cms-layout :title="$cfg['label']" subtitle="Mensagens e pedidos recebidos através dos formulários do site">
    {{-- Tabs de tipos --}}
    <div class="mb-5 flex flex-wrap gap-1.5 p-1 bg-gray-100 rounded-xl border border-gray-200/80 w-fit">
        @foreach($types as $key => $t)
            <a href="{{ route('cms.submissions.index', $key) }}"
               class="rounded-lg px-3.5 py-1.5 text-xs font-bold tracking-wider transition-all {{ $key === $type ? 'bg-[#0c0d0e] text-white shadow-2xs' : 'text-gray-600 hover:text-gray-900 hover:bg-white' }}">
                {{ $t['label'] }}
            </a>
        @endforeach
    </div>

    <div class="bg-white rounded-xl border border-gray-200/80 shadow-2xs overflow-hidden">
        @if($items->isEmpty())
            <div class="p-12 text-center">
                <div class="w-10 h-10 rounded-xl bg-gray-100 text-gray-400 mx-auto flex items-center justify-center mb-3">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                </div>
                <p class="text-xs font-bold text-gray-900">Sem submissões recebidas</p>
                <p class="text-[11px] text-gray-400 mt-0.5">A caixa de entrada para {{ strtolower($cfg['label']) }} está vazia.</p>
            </div>
        @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-100 text-xs">
                <thead class="bg-gray-50/50 text-gray-500 text-[10px] font-semibold uppercase tracking-wider">
                    <tr>
                        <th class="px-4 py-3 text-left w-6"></th>
                        @foreach($cfg['cols'] as $col => $label)
                            <th class="px-4 py-3 text-left">{{ $label }}</th>
                        @endforeach
                        <th class="px-4 py-3 text-left">Data de Envio</th>
                        <th class="px-4 py-3 text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($items as $item)
                        @php $isUnread = isset($item->is_read) && ! $item->is_read; @endphp
                        <tr class="hover:bg-gray-50/50 transition-colors {{ $isUnread ? 'bg-[#C5A059]/5' : '' }}">
                            <td class="px-4 py-3">
                                @if($isUnread)
                                    <span class="inline-block h-2 w-2 rounded-full bg-[#C5A059] ring-2 ring-[#C5A059]/20" title="Não lido"></span>
                                @endif
                            </td>
                            @foreach($cfg['cols'] as $col => $label)
                                <td class="px-4 py-3 {{ $isUnread ? 'font-bold text-gray-900' : 'text-gray-700' }}">
                                    {{ \Illuminate\Support\Str::limit((string) ($item->{$col} ?? '—'), 40) }}
                                </td>
                            @endforeach
                            <td class="px-4 py-3 text-[11px] text-gray-400 font-mono">{{ optional($item->created_at)->format('d/m/Y H:i') }}</td>
                            <td class="px-4 py-3 text-right whitespace-nowrap">
                                <a href="{{ route('cms.submissions.show', [$type, $item->id]) }}" class="inline-flex items-center px-2.5 py-1 text-xs font-medium text-gray-700 hover:text-[#0c0d0e] hover:bg-gray-100 rounded-lg transition-colors">Ver Detalhes</a>
                                <form action="{{ route('cms.submissions.destroy', [$type, $item->id]) }}" method="POST" class="inline ml-1" onsubmit="return confirm('Remover este registo?')">
                                    @csrf @method('DELETE')
                                    <button class="inline-flex items-center px-2.5 py-1 text-xs font-medium text-red-600 hover:text-red-700 hover:bg-red-50 rounded-lg transition-colors">Remover</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @if($items->hasPages())
            <div class="px-5 py-3 border-t border-gray-100">
                {{ $items->links() }}
            </div>
        @endif
        @endif
    </div>
</x-cms-layout>
