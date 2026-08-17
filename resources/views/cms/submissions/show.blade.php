<x-cms-layout :title="$cfg['label'].' — #'.$item->id">
    <x-slot name="actions">
        <a href="{{ route('cms.submissions.index', $type) }}" class="text-sm text-gray-500 hover:text-black">← Voltar</a>
    </x-slot>

    <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 p-6 max-w-2xl">
        <dl class="divide-y divide-gray-100">
            @foreach($item->getAttributes() as $field => $value)
                @continue(in_array($field, ['id', 'updated_at', 'is_read']))
                <div class="py-3 grid grid-cols-1 sm:grid-cols-3 gap-1">
                    <dt class="text-xs font-medium uppercase tracking-wide text-gray-400">{{ str_replace('_', ' ', $field) }}</dt>
                    <dd class="sm:col-span-2 text-sm text-gray-800 whitespace-pre-wrap">{{ $field === 'created_at' ? optional($item->created_at)->format('d/m/Y H:i') : ($value ?: '—') }}</dd>
                </div>
            @endforeach
        </dl>
        <div class="mt-5 pt-4 border-t border-gray-100 flex items-center gap-4">
            @if(!empty($item->email))
                <a href="mailto:{{ $item->email }}" class="rounded-lg bg-gray-900 px-4 py-2 text-sm font-medium text-white hover:bg-black">Responder por email</a>
            @endif
            @if(!empty($item->phone))
                <a href="tel:{{ $item->phone }}" class="text-sm text-gray-600 hover:text-black">Ligar</a>
            @endif
            <form action="{{ route('cms.submissions.destroy', [$type, $item->id]) }}" method="POST" class="ml-auto" onsubmit="return confirm('Remover este registo?')">
                @csrf @method('DELETE')
                <button class="text-sm text-red-500 hover:text-red-700 font-medium">Remover</button>
            </form>
        </div>
    </div>
</x-cms-layout>
