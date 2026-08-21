<x-cms-layout :title="($mode === 'create' ? 'Novo' : 'Editar') . ' — ' . $singular">
    <x-slot name="actions">
        <a href="{{ route('cms.'.$routeKey.'.index') }}" class="text-sm text-gray-500 hover:text-black">← Voltar</a>
    </x-slot>

    <form
        action="{{ $mode === 'create' ? route('cms.'.$routeKey.'.store') : route('cms.'.$routeKey.'.update', $item) }}"
        method="POST"
        enctype="multipart/form-data"
        class="space-y-8 max-w-5xl"
    >
        @csrf
        @if($mode === 'edit') @method('PUT') @endif

        @if($errors->any())
            <div class="rounded-lg bg-red-50 border border-red-200 px-4 py-3 text-sm text-red-800">
                <ul class="list-disc list-inside space-y-1">
                    @foreach($errors->all() as $e) <li>{{ $e }}</li> @endforeach
                </ul>
            </div>
        @endif

        {{-- ════════════════════════════════════════
             SECÇÃO 1 — CARD / MINIATURA
        ════════════════════════════════════════ --}}
        <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center gap-3">
                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-gray-900 text-white text-xs font-bold">1</span>
                <h2 class="text-sm font-semibold text-gray-900">Card (miniatura visível na página)</h2>
            </div>
            <div class="p-6 space-y-6">

                {{-- Imagem do card --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Imagem do card <span class="text-gray-400 font-normal">(miniatura exibida no slider)</span>
                    </label>
                    @if(!empty($item->image))
                        <div class="mb-3 flex items-start gap-4">
                            <img src="{{ img_src($item->image) }}" alt="" class="h-24 w-40 object-cover rounded-lg ring-1 ring-gray-200">
                            <label class="inline-flex items-center gap-2 text-sm text-gray-500 mt-1">
                                <input type="checkbox" name="image_remove" value="1" class="rounded border-gray-300"> Remover imagem
                            </label>
                        </div>
                    @endif
                    <input type="file" name="image" accept="image/*"
                           class="block w-full text-sm text-gray-600 file:mr-3 file:rounded-md file:border-0 file:bg-gray-900 file:px-3 file:py-2 file:text-white hover:file:bg-black">
                    <p class="mt-1 text-xs text-gray-400">Deixe vazio para manter a imagem actual.</p>
                </div>

                {{-- Título PT + EN --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="f_title" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Título <span class="ml-1 inline-flex items-center rounded bg-amber-100 px-1.5 py-0.5 text-[10px] font-semibold text-amber-800">PT</span>
                        </label>
                        <input id="f_title" type="text" name="title" value="{{ old('title', $item->title) }}"
                               class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900"
                               placeholder="Título em português">
                    </div>
                    <div>
                        <label for="f_title_en" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Title <span class="ml-1 inline-flex items-center rounded bg-blue-100 px-1.5 py-0.5 text-[10px] font-semibold text-blue-800">EN</span>
                        </label>
                        <input id="f_title_en" type="text" name="title_en" value="{{ old('title_en', $item->title_en) }}"
                               class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900"
                               placeholder="Title in English">
                    </div>
                </div>

                {{-- Resumo PT + EN --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="f_excerpt" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Resumo <span class="ml-1 inline-flex items-center rounded bg-amber-100 px-1.5 py-0.5 text-[10px] font-semibold text-amber-800">PT</span>
                            <span class="ml-1 text-xs text-gray-400 font-normal">— subtítulo no card</span>
                        </label>
                        <textarea id="f_excerpt" name="excerpt" rows="3"
                                  class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900"
                                  placeholder="Breve descrição em português...">{{ old('excerpt', $item->excerpt) }}</textarea>
                    </div>
                    <div>
                        <label for="f_excerpt_en" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Excerpt <span class="ml-1 inline-flex items-center rounded bg-blue-100 px-1.5 py-0.5 text-[10px] font-semibold text-blue-800">EN</span>
                            <span class="ml-1 text-xs text-gray-400 font-normal">— card subtitle</span>
                        </label>
                        <textarea id="f_excerpt_en" name="excerpt_en" rows="3"
                                  class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900"
                                  placeholder="Brief description in English...">{{ old('excerpt_en', $item->excerpt_en) }}</textarea>
                    </div>
                </div>

            </div>
        </div>

        {{-- ════════════════════════════════════════
             SECÇÃO 2 — POP-UP / ARTIGO COMPLETO
        ════════════════════════════════════════ --}}
        <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center gap-3">
                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-gray-900 text-white text-xs font-bold">2</span>
                <h2 class="text-sm font-semibold text-gray-900">Pop-up / Artigo completo</h2>
                <span class="text-xs text-gray-400">(abre ao clicar "MAIS" no card)</span>
            </div>
            <div class="p-6 space-y-6">

                {{-- Imagem do artigo (modal) --}}
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-2">
                        Imagem do artigo <span class="text-gray-400 font-normal">(exibida no interior do pop-up — pode ser diferente da miniatura)</span>
                    </label>
                    @if(!empty($item->modal_image))
                        <div class="mb-3 flex items-start gap-4">
                            <img src="{{ img_src($item->modal_image) }}" alt="" class="h-24 w-40 object-cover rounded-lg ring-1 ring-gray-200">
                            <label class="inline-flex items-center gap-2 text-sm text-gray-500 mt-1">
                                <input type="checkbox" name="modal_image_remove" value="1" class="rounded border-gray-300"> Remover imagem
                            </label>
                        </div>
                    @else
                        <p class="text-xs text-gray-400 mb-2">Sem imagem de artigo. Se deixar vazio, o pop-up usará a miniatura do card.</p>
                    @endif
                    <input type="file" name="modal_image" accept="image/*"
                           class="block w-full text-sm text-gray-600 file:mr-3 file:rounded-md file:border-0 file:bg-gray-900 file:px-3 file:py-2 file:text-white hover:file:bg-black">
                </div>

                {{-- Corpo do artigo PT + EN --}}
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="f_body" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Corpo do artigo <span class="ml-1 inline-flex items-center rounded bg-amber-100 px-1.5 py-0.5 text-[10px] font-semibold text-amber-800">PT</span>
                        </label>
                        @php
                            $defaultPtBody = "A ROX Motor Angola continua a construir uma nova referência de mobilidade premium, com soluções pensadas para responder às exigências de cada viagem.\n\nAcompanhe as novidades, os modelos e as experiências que aproximam a marca dos seus clientes em Angola. Para mais informações, a nossa equipa está disponível para o receber e esclarecer todas as questões.";
                            $defaultEnBody = "ROX Motor Angola continues to build a new benchmark for premium mobility, with solutions designed to meet the demands of every journey.\n\nFollow the news, models and experiences that bring the brand closer to its customers in Angola. For further information, our team is available to welcome you and answer any questions.";
                        @endphp
                        <textarea id="f_body" name="body" rows="10"
                                  class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900 font-mono leading-relaxed"
                                  placeholder="Texto completo do artigo em português.&#10;Cada parágrafo separado por uma linha vazia.">{{ old('body', $item->body ?: $defaultPtBody) }}</textarea>
                        <p class="mt-1 text-xs text-gray-400">Separe os parágrafos por uma linha em branco.</p>
                    </div>
                    <div>
                        <label for="f_body_en" class="block text-sm font-medium text-gray-700 mb-1.5">
                            Article body <span class="ml-1 inline-flex items-center rounded bg-blue-100 px-1.5 py-0.5 text-[10px] font-semibold text-blue-800">EN</span>
                        </label>
                        <textarea id="f_body_en" name="body_en" rows="10"
                                  class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900 font-mono leading-relaxed"
                                  placeholder="Full article text in English.&#10;Separate paragraphs with an empty line.">{{ old('body_en', $item->body_en ?: $defaultEnBody) }}</textarea>
                        <p class="mt-1 text-xs text-gray-400">Separate paragraphs with a blank line.</p>
                    </div>
                </div>

            </div>
        </div>

        {{-- ════════════════════════════════════════
             SECÇÃO 3 — CONFIGURAÇÕES
        ════════════════════════════════════════ --}}
        <div class="bg-white rounded-xl shadow-sm ring-1 ring-gray-900/5 overflow-hidden">
            <div class="px-6 py-4 border-b border-gray-100 flex items-center gap-3">
                <span class="flex h-7 w-7 items-center justify-center rounded-full bg-gray-900 text-white text-xs font-bold">3</span>
                <h2 class="text-sm font-semibold text-gray-900">Configurações</h2>
            </div>
            <div class="p-6 space-y-5">

                <div>
                    <label for="f_link" class="block text-sm font-medium text-gray-700 mb-1.5">Link externo (URL)</label>
                    <input id="f_link" type="text" name="link" value="{{ old('link', $item->link) }}"
                           class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900"
                           placeholder="https://...">
                    <p class="mt-1 text-xs text-gray-400">Opcional. Se preenchido, o botão "MAIS" levará a este URL em vez de abrir o pop-up.</p>
                </div>

                <div class="grid grid-cols-2 sm:grid-cols-3 gap-4">
                    <div>
                        <label for="f_published_at" class="block text-sm font-medium text-gray-700 mb-1.5">Data de publicação</label>
                        <input id="f_published_at" type="date" name="published_at"
                               value="{{ old('published_at', $item->published_at ? $item->published_at->format('Y-m-d') : '') }}"
                               class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">
                    </div>
                    <div>
                        <label for="f_sort" class="block text-sm font-medium text-gray-700 mb-1.5">Ordem de exibição</label>
                        <input id="f_sort" type="number" name="sort" value="{{ old('sort', $item->sort ?? 0) }}"
                               class="block w-full rounded-lg border-gray-300 shadow-sm text-sm focus:border-gray-900 focus:ring-gray-900">
                    </div>
                    <div class="flex items-end pb-1">
                        <label class="inline-flex items-center gap-2 cursor-pointer">
                            <input type="hidden" name="is_published" value="0">
                            <input id="f_is_published" type="checkbox" name="is_published" value="1"
                                   @checked(old('is_published', $item->is_published ?? false))
                                   class="h-4 w-4 rounded border-gray-300 text-gray-900 focus:ring-gray-900">
                            <span class="text-sm font-medium text-gray-700">Publicado</span>
                        </label>
                    </div>
                </div>

            </div>
        </div>

        {{-- Botões --}}
        <div class="flex items-center gap-4">
            <button type="submit"
                    class="rounded-lg bg-gray-900 px-6 py-2.5 text-sm font-medium text-white hover:bg-black transition-colors shadow-sm">
                Guardar
            </button>
            <a href="{{ route('cms.'.$routeKey.'.index') }}" class="text-sm text-gray-500 hover:text-black">
                Cancelar
            </a>
        </div>
    </form>
</x-cms-layout>
