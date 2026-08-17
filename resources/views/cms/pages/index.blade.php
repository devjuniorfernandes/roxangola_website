<x-cms-layout title="Páginas" subtitle="Editar os textos de cada página (PT/EN)">
    <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden divide-y divide-gray-100">
        @foreach($pages as $key => $p)
            <a href="{{ route('cms.pages.edit', $key) }}" class="flex items-center justify-between px-6 py-4 hover:bg-gray-50 transition-colors">
                <div>
                    <p class="text-sm font-medium text-gray-900">{{ $p['label'] }}</p>
                    <p class="text-xs text-gray-400">lang/…/{{ $p['file'] }}.php</p>
                </div>
                <span class="text-gray-300">→</span>
            </a>
        @endforeach
    </div>
</x-cms-layout>
