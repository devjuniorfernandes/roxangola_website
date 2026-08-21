<x-cms-layout :title="'SEO — '.($row->label ?: $row->page_key)" subtitle="Configuração de metadados bilingues para motores de busca">
    <x-slot name="actions">
        <a href="{{ route('cms.seo.index') }}" class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-medium text-gray-600 hover:text-gray-900 transition-colors">
            ← Voltar à lista SEO
        </a>
    </x-slot>

    <form action="{{ route('cms.seo.update', $row) }}" method="POST" class="bg-white rounded-xl border border-gray-200/80 shadow-2xs p-5 sm:p-6 space-y-5 max-w-3xl">
        @csrf @method('PUT')

        @php
            $pair = function ($field, $label, $rows = 1) use ($row) {
                return [$field, $label, $rows];
            };
            $blocks = [
                ['title', 'Título Meta', 1],
                ['description', 'Descrição Meta', 3],
                ['h1', 'Cabeçalho H1 Principal', 2],
            ];
        @endphp

        @foreach($blocks as [$field, $label, $r])
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 pt-1">
                <div>
                    <label class="block text-[11px] font-semibold uppercase tracking-wider text-gray-700 mb-1">{{ $label }} (PT)</label>
                    @if($r > 1)
                        <textarea name="{{ $field }}_pt" rows="{{ $r }}" class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs">{{ old($field.'_pt', $row->{$field.'_pt'}) }}</textarea>
                    @else
                        <input type="text" name="{{ $field }}_pt" value="{{ old($field.'_pt', $row->{$field.'_pt'}) }}" class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs">
                    @endif
                </div>
                <div>
                    <label class="block text-[11px] font-semibold uppercase tracking-wider text-gray-700 mb-1">{{ $label }} (EN)</label>
                    @if($r > 1)
                        <textarea name="{{ $field }}_en" rows="{{ $r }}" class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs">{{ old($field.'_en', $row->{$field.'_en'}) }}</textarea>
                    @else
                        <input type="text" name="{{ $field }}_en" value="{{ old($field.'_en', $row->{$field.'_en'}) }}" class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs">
                    @endif
                </div>
            </div>
        @endforeach

        <div class="pt-1">
            <label class="block text-[11px] font-semibold uppercase tracking-wider text-gray-700 mb-1">Palavras-chave (separadas por vírgulas)</label>
            <input type="text" name="keywords" value="{{ old('keywords', $row->keywords) }}" class="block w-full rounded-lg border-gray-200 text-xs focus:border-[#C5A059] focus:ring-1 focus:ring-[#C5A059] transition-all bg-gray-50/30 hover:bg-white focus:bg-white shadow-2xs font-mono">
        </div>

        <div class="pt-4 border-t border-gray-100 flex items-center justify-end gap-3">
            <a href="{{ route('cms.seo.index') }}" class="px-4 py-2 text-xs font-medium text-gray-600 hover:text-gray-900 transition-colors">Cancelar</a>
            <button class="rounded-lg bg-[#C5A059] px-5 py-2 text-xs font-bold tracking-wider text-[#0c0d0e] hover:bg-[#b08e49] shadow-2xs transition-all">
                Guardar SEO
            </button>
        </div>
    </form>
</x-cms-layout>
