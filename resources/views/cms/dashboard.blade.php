<x-cms-layout title="Início" subtitle="Gestão de conteúdo do site ROX Angola">
    @php
        $cards = [
            ['Destaques (Homepage)', 'cms.highlights.index', $counts['highlights'] ?? 0, 'registos'],
            ['Galeria do Showroom', 'cms.gallery.index', $counts['gallery'] ?? 0, 'imagens'],
            ['Marcos da História', 'cms.milestones.index', $counts['milestones'] ?? 0, 'marcos'],
            ['Serviços', 'cms.services.index', $counts['services'] ?? 0, 'cards'],
            ['Páginas (textos)', 'cms.pages.index', null, 'Editar textos PT/EN'],
            ['Imagens', 'cms.content.index', null, 'Imagens do site'],
            ['SEO', 'cms.seo.index', null, 'Meta de cada página'],
        ];
    @endphp
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
        @foreach($cards as [$label, $route, $count, $hint])
            <a href="{{ route($route) }}" class="group block bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 p-5 hover:ring-gray-900/20 transition">
                <div class="flex items-start justify-between">
                    <h3 class="text-sm font-semibold text-gray-900">{{ $label }}</h3>
                    <span class="text-gray-300 group-hover:text-gray-500 transition">→</span>
                </div>
                <p class="mt-3 text-2xl font-semibold text-gray-900">{{ $count !== null ? $count : '' }}</p>
                <p class="text-xs text-gray-400">{{ $hint }}</p>
            </a>
        @endforeach
    </div>
</x-cms-layout>
