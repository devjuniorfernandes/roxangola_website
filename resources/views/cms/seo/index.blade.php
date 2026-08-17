<x-cms-layout title="SEO" subtitle="Título, descrição e H1 de cada página (PT/EN)">
    <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
        @if($rows->isEmpty())
            <div class="p-10 text-center text-gray-500 text-sm">Sem páginas configuradas.</div>
        @else
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-100 text-sm">
                <thead class="bg-gray-50 text-gray-500">
                    <tr>
                        <th class="px-4 py-3 text-left font-medium">Página</th>
                        <th class="px-4 py-3 text-left font-medium">Título (PT)</th>
                        <th class="px-4 py-3 text-right font-medium">Ações</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @foreach($rows as $row)
                        <tr class="hover:bg-gray-50">
                            <td class="px-4 py-2 font-medium text-gray-800">{{ $row->label ?: $row->page_key }}</td>
                            <td class="px-4 py-2 text-gray-600">{{ \Illuminate\Support\Str::limit($row->title_pt, 60) }}</td>
                            <td class="px-4 py-2 text-right">
                                <a href="{{ route('cms.seo.edit', $row) }}" class="text-gray-600 hover:text-black font-medium">Editar</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @endif
    </div>
</x-cms-layout>
