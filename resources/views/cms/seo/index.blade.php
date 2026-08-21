<x-cms-layout title="Otimização SEO & Meta Tags" subtitle="Gestão de títulos, meta descriptions e cabeçalhos H1 das páginas">
    <div class="bg-white rounded-xl border border-gray-200/80 shadow-2xs overflow-hidden">
        @if($rows->isEmpty())
            <div class="p-12 text-center text-gray-500 text-xs">Sem páginas configuradas para SEO.</div>
        @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-100 text-xs">
                <thead class="bg-gray-50/50 text-gray-500 text-[10px] font-semibold uppercase tracking-wider">
                    <tr>
                        <th class="px-5 py-3 text-left">Página do Website</th>
                        <th class="px-5 py-3 text-left">Título Meta (PT)</th>
                        <th class="px-5 py-3 text-right">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($rows as $row)
                        <tr class="hover:bg-gray-50/50 transition-colors">
                            <td class="px-5 py-3 font-bold text-gray-900 flex items-center gap-2">
                                <span class="w-2 h-2 rounded-full bg-[#C5A059]"></span>
                                {{ $row->label ?: $row->page_key }}
                            </td>
                            <td class="px-5 py-3 text-gray-600 text-[11px] font-mono">{{ \Illuminate\Support\Str::limit($row->title_pt, 60) }}</td>
                            <td class="px-5 py-3 text-right">
                                <a href="{{ route('cms.seo.edit', $row) }}" class="inline-flex items-center px-3 py-1 text-xs font-medium text-gray-700 hover:text-[#0c0d0e] hover:bg-gray-100 rounded-lg transition-colors border border-gray-200">Editar SEO</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</x-cms-layout>
