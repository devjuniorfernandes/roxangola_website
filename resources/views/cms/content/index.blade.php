<x-cms-layout title="Imagens, Gráficos & Documentos" subtitle="Substituição e personalização dos recursos visuais e documentos do website">
    <form action="{{ route('cms.content.update') }}" method="POST" enctype="multipart/form-data" class="space-y-8">
        @csrf @method('PUT')

        {{-- ═══════════════════════════════════════════════════════════════════ --}}
        {{-- SECÇÃO: Documentos & Catálogos PDF                                  --}}
        {{-- ═══════════════════════════════════════════════════════════════════ --}}
        @if(count($fileGroups) > 0)
        <div>
            <div class="flex items-center gap-3 mb-4">
                <div class="w-1 h-6 rounded-full bg-[#C5A059]"></div>
                <h2 class="text-sm font-bold text-gray-900 tracking-tight">Documentos & Catálogos PDF</h2>
            </div>

            @foreach($fileGroups as $groupKey => $group)
            <div class="bg-white rounded-xl border border-gray-200/80 shadow-2xs overflow-hidden mb-4">
                <div class="px-5 py-3.5 border-b border-gray-100 bg-gray-50/50 flex items-center justify-between">
                    <h3 class="text-xs font-bold text-gray-900 tracking-tight flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#C5A059]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
                        {{ $group['label'] ?? $groupKey }}
                    </h3>
                    <span class="text-xs font-medium text-gray-400 font-mono">{{ count($group['slots'] ?? []) }} documentos</span>
                </div>
                <div class="divide-y divide-gray-100">
                    @foreach($group['slots'] as $key => $slot)
                        @php
                            $h        = md5($key);
                            $locale   = $slot['locale'] ?? '*';
                            $override = $fileMap[$locale][$key] ?? $fileMap['*'][$key] ?? null;
                            $hasFile  = ! is_null($override);
                            $fileName = $hasFile ? basename($override) : basename($slot['default']);
                        @endphp
                        <div class="p-5 flex flex-col sm:flex-row sm:items-center gap-5 hover:bg-gray-50/30 transition-colors">
                            {{-- Ícone PDF + badge de idioma --}}
                            <div class="relative flex-shrink-0 flex flex-col items-center gap-1.5">
                                <div class="h-16 w-16 flex items-center justify-center rounded-lg border {{ $hasFile ? 'border-[#C5A059] bg-[#C5A059]/10' : 'border-gray-200 bg-gray-50' }}">
                                    <svg class="w-8 h-8 {{ $hasFile ? 'text-[#C5A059]' : 'text-gray-400' }}" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/>
                                    </svg>
                                </div>
                                <span class="text-[10px] font-bold px-2 py-0.5 rounded-full {{ strtoupper($locale) === 'EN' ? 'bg-blue-100 text-blue-700' : 'bg-green-100 text-green-700' }}">
                                    {{ strtoupper($locale) }}
                                </span>
                            </div>

                            {{-- Info do ficheiro --}}
                            <div class="flex-1 min-w-0">
                                <p class="text-xs font-bold text-gray-900 mb-0.5">{{ $slot['label'] ?? $key }}</p>
                                <p class="text-[11px] text-gray-400 mb-2 font-mono truncate max-w-xs" title="{{ $fileName }}">
                                    {{ $hasFile ? '✔ ' . $fileName : '⚬ ' . $fileName . ' (padrão)' }}
                                </p>
                                <input type="file"
                                       name="file_{{ $h }}"
                                       accept="{{ $slot['accept'] ?? 'application/pdf' }}"
                                       class="block w-full text-xs text-gray-500
                                              file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0
                                              file:text-xs file:font-bold file:bg-[#0c0d0e] file:text-white
                                              hover:file:bg-[#C5A059] hover:file:text-[#0c0d0e] file:transition-all">
                            </div>

                            {{-- Botão de repor original --}}
                            @if($hasFile)
                            <label class="inline-flex items-center gap-2 text-xs font-medium text-gray-600 hover:text-red-600 cursor-pointer transition-colors flex-shrink-0 bg-gray-50 p-2 rounded-lg border border-gray-200/80">
                                <input type="checkbox" name="reset_file_{{ $h }}" value="1" class="rounded border-gray-300 text-red-600 focus:ring-red-500">
                                <span>Repor original</span>
                            </label>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
        @endif

        {{-- ═══════════════════════════════════════════════════════════════════ --}}
        {{-- SECÇÃO: Imagens & Gráficos                                          --}}
        {{-- ═══════════════════════════════════════════════════════════════════ --}}
        <div>
            <div class="flex items-center gap-3 mb-4">
                <div class="w-1 h-6 rounded-full bg-[#C5A059]"></div>
                <h2 class="text-sm font-bold text-gray-900 tracking-tight">Imagens & Gráficos</h2>
            </div>

            @forelse($groups as $groupKey => $group)
                <div class="bg-white rounded-xl border border-gray-200/80 shadow-2xs overflow-hidden mb-4">
                    <div class="px-5 py-3.5 border-b border-gray-100 bg-gray-50/50 flex items-center justify-between">
                        <h3 class="text-xs font-bold text-gray-900 tracking-tight flex items-center gap-2">
                            <span class="w-2 h-2 rounded-full bg-[#C5A059]"></span>
                            {{ $group['label'] ?? $groupKey }}
                        </h3>
                        <span class="text-xs font-medium text-gray-400 font-mono">{{ count($group['slots'] ?? []) }} slots</span>
                    </div>
                    <div class="divide-y divide-gray-100">
                        @foreach($group['slots'] as $key => $slot)
                            @php
                                $h = md5($key);
                                $override = $overrides[$key] ?? null;
                                $current = $override ? img_src($override) : asset($slot['default']);
                            @endphp
                            <div class="p-5 flex flex-col sm:flex-row sm:items-center gap-5 hover:bg-gray-50/30 transition-colors">
                                <div class="relative group flex-shrink-0">
                                    <img src="{{ $current }}" alt="" class="h-20 w-32 object-cover rounded-lg border border-gray-200 shadow-2xs bg-gray-100">
                                    @if($override)
                                        <span class="absolute top-1.5 right-1.5 text-[9px] font-bold bg-[#C5A059] text-[#0c0d0e] px-1.5 py-0.5 rounded shadow-2xs">Personalizado</span>
                                    @endif
                                </div>
                                <div class="flex-1 min-w-0">
                                    <p class="text-xs font-bold text-gray-900">{{ $slot['label'] ?? $key }}</p>
                                    <p class="text-[11px] text-gray-400 mt-0.5">
                                        {{ $override ? 'Imagem atualizada via CMS' : 'Imagem original por omissão' }}
                                    </p>
                                    <input type="file" name="img_{{ $h }}" accept="image/*"
                                           class="mt-2.5 block w-full text-xs text-gray-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-lg file:border-0 file:text-xs file:font-bold file:bg-[#0c0d0e] file:text-white hover:file:bg-[#C5A059] hover:file:text-[#0c0d0e] file:transition-all">
                                </div>
                                @if($override)
                                    <label class="inline-flex items-center gap-2 text-xs font-medium text-gray-600 hover:text-red-600 cursor-pointer transition-colors flex-shrink-0 bg-gray-50 p-2 rounded-lg border border-gray-200/80">
                                        <input type="checkbox" name="reset_{{ $h }}" value="1" class="rounded border-gray-300 text-red-600 focus:ring-red-500">
                                        <span>Repor original</span>
                                    </label>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            @empty
                <div class="bg-white rounded-xl border border-gray-200/80 p-8 text-center text-xs text-gray-400">
                    Nenhum slot de imagem configurado.
                </div>
            @endforelse
        </div>

        {{-- Barra de ação fixa --}}
        <div class="sticky bottom-6 z-30 bg-[#0c0d0e]/95 backdrop-blur-md p-4 rounded-xl border border-white/10 shadow-xl flex items-center justify-between gap-4">
            <p class="text-xs text-gray-400 hidden sm:block">Altera os ficheiros e clica para atualizar o site.</p>
            <button class="rounded-lg bg-[#C5A059] px-5 py-2 text-xs font-bold tracking-wider text-[#0c0d0e] hover:bg-[#b08e49] shadow-md transition-all ml-auto">
                Guardar Alterações
            </button>
        </div>
    </form>
</x-cms-layout>

