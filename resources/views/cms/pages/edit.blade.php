<x-cms-layout :title="'Página — '.$config['label']" subtitle="Modifique os textos PT/EN. Deixar igual ao original repõe a predefinição.">
    <x-slot name="actions">
        <div class="flex items-center gap-3">
            @if(!empty($config['route']))
                <a href="{{ route($config['route']) }}" target="_blank" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-gray-700 bg-white border border-gray-200 rounded-lg hover:bg-gray-50 transition-all shadow-2xs">
                    <span>Ver no site</span>
                    <svg class="w-3.5 h-3.5 text-[#C5A059]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
                </a>
            @endif
            <a href="{{ route('cms.pages.index') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-gray-600 hover:text-gray-900 transition-colors">
                ← Voltar às Páginas
            </a>
        </div>
    </x-slot>

    <form action="{{ route('cms.pages.update', $page) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')

        @foreach($groups as $section => $items)
            <div x-data="{ open: true }" class="bg-white rounded-xl border border-gray-200/80 shadow-2xs overflow-hidden">
                <button type="button" @click="open=!open" class="w-full flex items-center justify-between px-5 py-3.5 bg-gray-50/50 border-b border-gray-100 text-left hover:bg-gray-50 transition-colors">
                    <span class="text-xs font-bold text-gray-900 flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-[#C5A059]"></span>
                        {{ ucfirst(str_replace('_',' ',$section)) }}
                    </span>
                    <svg class="w-4 h-4 text-gray-400 transition-transform duration-200" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </button>
                <div x-show="open" class="divide-y divide-gray-100">
                    @foreach($items as $it)
                        <div class="p-5 hover:bg-gray-50/30 transition-colors">
                            <div class="flex items-center justify-between gap-3 mb-3">
                                <code class="text-[11px] text-gray-500 bg-gray-100 px-2 py-0.5 rounded font-mono">{{ $it['key'] }}</code>
                                @if($it['overridden'])
                                    <span class="text-[10px] uppercase tracking-wider font-semibold rounded-full bg-[#C5A059]/10 text-[#C5A059] px-2 py-0.5 border border-[#C5A059]/20">Personalizado</span>
                                @endif
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-[11px] font-semibold uppercase tracking-wider text-gray-600 mb-1">Português (PT)</label>
                                    <textarea name="pt[{{ $it['key'] }}]" rows="{{ mb_strlen($it['pt']) > 70 ? 3 : 1 }}" class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs">{{ $it['pt'] }}</textarea>
                                </div>
                                <div>
                                    <label class="block text-[11px] font-semibold uppercase tracking-wider text-gray-600 mb-1">Inglês (EN)</label>
                                    <textarea name="en[{{ $it['key'] }}]" rows="{{ mb_strlen($it['en']) > 70 ? 3 : 1 }}" class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs">{{ $it['en'] }}</textarea>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="sticky bottom-6 z-30 bg-[#0c0d0e]/95 backdrop-blur-md p-4 rounded-xl border border-white/10 shadow-xl flex items-center justify-between gap-4">
            <p class="text-xs text-gray-400 hidden sm:block">Altera os textos e clica para publicar instantaneamente no site.</p>
            <div class="flex items-center gap-3 w-full sm:w-auto justify-end">
                <a href="{{ route('cms.pages.index') }}" class="px-4 py-2 text-xs font-medium text-gray-300 hover:text-white transition-colors">Cancelar</a>
                <button class="rounded-lg bg-[#C5A059] px-5 py-2 text-xs font-bold tracking-wider text-[#0c0d0e] hover:bg-[#b08e49] shadow-md transition-all">
                    Guardar Alterações
                </button>
            </div>
        </div>
    </form>
</x-cms-layout>
