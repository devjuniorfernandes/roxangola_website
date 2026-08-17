<x-cms-layout :title="'SEO — '.($row->label ?: $row->page_key)">
    <x-slot name="actions">
        <a href="{{ route('cms.seo.index') }}" class="text-sm text-gray-500 hover:text-black">← Voltar</a>
    </x-slot>

    <form action="{{ route('cms.seo.update', $row) }}" method="POST" class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 p-6 space-y-6 max-w-3xl">
        @csrf @method('PUT')

        @php
            $pair = function ($field, $label, $rows = 1) use ($row) {
                return [$field, $label, $rows];
            };
            $blocks = [
                ['title', 'Título', 1],
                ['description', 'Descrição', 3],
                ['h1', 'H1', 2],
            ];
        @endphp

        @foreach($blocks as [$field, $label, $r])
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ $label }} (PT)</label>
                    @if($r > 1)
                        <textarea name="{{ $field }}_pt" rows="{{ $r }}" class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">{{ old($field.'_pt', $row->{$field.'_pt'}) }}</textarea>
                    @else
                        <input type="text" name="{{ $field }}_pt" value="{{ old($field.'_pt', $row->{$field.'_pt'}) }}" class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">
                    @endif
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1.5">{{ $label }} (EN)</label>
                    @if($r > 1)
                        <textarea name="{{ $field }}_en" rows="{{ $r }}" class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">{{ old($field.'_en', $row->{$field.'_en'}) }}</textarea>
                    @else
                        <input type="text" name="{{ $field }}_en" value="{{ old($field.'_en', $row->{$field.'_en'}) }}" class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">
                    @endif
                </div>
            </div>
        @endforeach

        <div>
            <label class="block text-sm font-medium text-gray-700 mb-1.5">Palavras-chave</label>
            <input type="text" name="keywords" value="{{ old('keywords', $row->keywords) }}" class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">
        </div>

        <div class="flex items-center gap-3 pt-2 border-t border-gray-100">
            <button class="rounded-lg bg-gray-900 px-5 py-2 text-sm font-medium text-white hover:bg-black transition-colors">Guardar</button>
            <a href="{{ route('cms.seo.index') }}" class="text-sm text-gray-500 hover:text-black">Cancelar</a>
        </div>
    </form>
</x-cms-layout>
