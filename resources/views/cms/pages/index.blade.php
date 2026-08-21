<x-cms-layout title="Páginas do Website" subtitle="Edição e gestão bilingue de textos (Português / Inglês)">
    <div class="bg-white rounded-xl border border-gray-200/80 shadow-2xs overflow-hidden">
        <div class="px-5 py-3.5 border-b border-gray-100 flex items-center justify-between bg-gray-50/50">
            <span class="text-xs font-bold text-gray-900 uppercase tracking-wider">Lista de Páginas</span>
            <span class="text-xs text-gray-400 font-medium">{{ count($pages) }} páginas ativas</span>
        </div>
        <div class="divide-y divide-gray-100">
            @foreach($pages as $key => $p)
                <a href="{{ route('cms.pages.edit', $key) }}" class="group flex items-center justify-between px-5 py-3.5 hover:bg-gray-50/80 transition-all">
                    <div class="flex items-center gap-3.5">
                        <div class="w-8 h-8 rounded-lg bg-gray-100 group-hover:bg-[#C5A059]/10 text-gray-700 group-hover:text-[#C5A059] flex items-center justify-center font-bold text-xs flex-shrink-0 transition-colors">
                            {{ strtoupper(substr($p['label'], 0, 2)) }}
                        </div>
                        <div>
                            <p class="text-xs font-bold text-gray-900 group-hover:text-[#0c0d0e] transition-colors">{{ $p['label'] }}</p>
                            <p class="text-[11px] text-gray-400 font-mono mt-0.5">lang/pt/{{ $p['file'] }}.php</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-2">
                        <span class="text-xs font-medium text-gray-400 group-hover:text-gray-900 transition-colors">Editar textos PT/EN</span>
                        <span class="text-xs text-gray-400 group-hover:text-[#0c0d0e] transition-colors">→</span>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</x-cms-layout>
