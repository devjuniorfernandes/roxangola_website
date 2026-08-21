<x-cms-layout :title="$cfg['label'].' — #'.$item->id" subtitle="Detalhes completos da mensagem recebida">
    <x-slot name="actions">
        <a href="{{ route('cms.submissions.index', $type) }}" class="inline-flex items-center gap-1.5 px-3.5 py-2 text-xs font-medium text-gray-600 hover:text-gray-900 transition-colors">
            ← Voltar à lista
        </a>
    </x-slot>

    <div class="bg-white rounded-2xl border border-gray-200/80 shadow-xs p-6 sm:p-8 max-w-3xl">
        <dl class="divide-y divide-gray-100/80">
            @foreach($item->getAttributes() as $field => $value)
                @continue(in_array($field, ['id', 'updated_at', 'is_read']))
                <div class="py-4 grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <dt class="text-xs font-semibold uppercase tracking-wider text-gray-400">{{ str_replace('_', ' ', $field) }}</dt>
                    <dd class="sm:col-span-2 text-sm font-medium text-gray-900 whitespace-pre-wrap leading-relaxed">{{ $field === 'created_at' ? optional($item->created_at)->format('d/m/Y H:i') : ($value ?: '—') }}</dd>
                </div>
            @endforeach
        </dl>
        <div class="mt-8 pt-6 border-t border-gray-100 flex flex-wrap items-center gap-3">
            @if(!empty($item->email))
                <a href="mailto:{{ $item->email }}" class="inline-flex items-center gap-2 rounded-xl bg-[#0c0d0e] px-5 py-2.5 text-xs font-semibold tracking-wider text-white hover:bg-[#C5A059] hover:text-[#0c0d0e] transition-all shadow-md">
                    <span>Responder por Email</span>
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                </a>
            @endif
            @if(!empty($item->phone))
                <a href="tel:{{ $item->phone }}" class="inline-flex items-center gap-2 rounded-xl bg-gray-100 border border-gray-200/80 px-5 py-2.5 text-xs font-semibold text-gray-800 hover:bg-gray-200 transition-all">
                    <span>Ligar ({{ $item->phone }})</span>
                </a>
            @endif
            <form action="{{ route('cms.submissions.destroy', [$type, $item->id]) }}" method="POST" class="ml-auto" onsubmit="return confirm('Remover este registo?')">
                @csrf @method('DELETE')
                <button class="inline-flex items-center px-4 py-2.5 text-xs font-medium text-red-600 hover:text-red-700 hover:bg-red-50 rounded-xl transition-colors">Remover Registo</button>
            </form>
        </div>
    </div>
</x-cms-layout>
