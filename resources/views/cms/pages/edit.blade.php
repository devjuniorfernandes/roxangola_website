<x-cms-layout :title="'Página — '.$config['label']" subtitle="Edita o texto; deixa igual ao original para repor. Vazio também repõe.">
    <x-slot name="actions">
        <div class="flex items-center gap-3">
            @if(!empty($config['route']))
                <a href="{{ route($config['route']) }}" target="_blank" class="text-sm text-gray-500 hover:text-black">Ver página ↗</a>
            @endif
            <a href="{{ route('cms.pages.index') }}" class="text-sm text-gray-500 hover:text-black">← Voltar</a>
        </div>
    </x-slot>

    <form action="{{ route('cms.pages.update', $page) }}" method="POST" class="space-y-6">
        @csrf @method('PUT')

        @foreach($groups as $section => $items)
            <div x-data="{ open: true }" class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
                <button type="button" @click="open=!open" class="w-full flex items-center justify-between px-6 py-3.5 bg-gray-50 border-b border-gray-100">
                    <span class="text-sm font-semibold text-gray-800">{{ ucfirst(str_replace('_',' ',$section)) }}</span>
                    <svg class="w-4 h-4 text-gray-400 transition-transform" :class="open ? 'rotate-180' : ''" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>
                </button>
                <div x-show="open" class="divide-y divide-gray-100">
                    @foreach($items as $it)
                        <div class="px-6 py-4">
                            <div class="flex items-center gap-2 mb-2">
                                <code class="text-[11px] text-gray-400">{{ $it['key'] }}</code>
                                @if($it['overridden'])<span class="text-[10px] rounded-full bg-amber-50 text-amber-700 px-1.5 py-0.5">personalizado</span>@endif
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-3">
                                <div>
                                    <label class="block text-[11px] font-medium text-gray-400 mb-1">PT</label>
                                    <textarea name="pt[{{ $it['key'] }}]" rows="{{ mb_strlen($it['pt']) > 70 ? 3 : 1 }}" class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">{{ $it['pt'] }}</textarea>
                                </div>
                                <div>
                                    <label class="block text-[11px] font-medium text-gray-400 mb-1">EN</label>
                                    <textarea name="en[{{ $it['key'] }}]" rows="{{ mb_strlen($it['en']) > 70 ? 3 : 1 }}" class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">{{ $it['en'] }}</textarea>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach

        <div class="sticky bottom-4 flex items-center gap-3">
            <button class="rounded-lg bg-gray-900 px-6 py-2.5 text-sm font-medium text-white hover:bg-black shadow-lg transition-colors">Guardar alterações</button>
            <a href="{{ route('cms.pages.index') }}" class="text-sm text-gray-500 hover:text-black">Cancelar</a>
        </div>
    </form>
</x-cms-layout>
