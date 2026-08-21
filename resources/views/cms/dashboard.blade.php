<x-cms-layout title="Início" subtitle="Visão geral e atividade do website ROX Angola">
    @php
        $totalUnread = array_sum($unread ?? []);
        $totalSubmissions = array_sum($submissionCounts ?? []);
    @endphp

    <div class="space-y-5">

        {{-- Page Header --}}
        <div class="flex items-center justify-between">
            <div>
                <h1 class="text-base font-bold text-gray-900 tracking-tight">Início</h1>
                <p class="text-[11px] text-gray-400 mt-0.5">Visão geral e atividade do website ROX Angola</p>
            </div>
            <div class="inline-flex items-center gap-2 bg-white border border-gray-200 shadow-2xs px-3 py-1.5 rounded-lg text-xs font-medium text-gray-700">
                <i class="fa-regular fa-calendar text-gray-400 text-xs"></i>
                <span>Últimos 7 dias</span>
                <i class="fa-solid fa-chevron-down text-gray-400 text-[9px]"></i>
            </div>
        </div>

        {{-- Row 1: 6 Top Metric Cards --}}
        <div class="grid grid-cols-2 sm:grid-cols-3 lg:grid-cols-6 gap-3.5">

            {{-- Metric 1: Páginas --}}
            <div class="bg-white rounded-xl p-4 border border-gray-200/80 shadow-2xs flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-[11px] font-medium text-gray-500">Páginas (PT/EN)</span>
                    <i class="fa-regular fa-file-lines text-gray-400 text-sm"></i>
                </div>
                <div class="mt-2">
                    <span class="text-2xl font-bold text-gray-900 tracking-tight">{{ $counts['pages'] ?? 20 }}</span>
                    <p class="text-[10px] text-gray-400 mt-0.5">páginas mapeadas</p>
                </div>
            </div>

            {{-- Metric 2: Serviços --}}
            <div class="bg-white rounded-xl p-4 border border-gray-200/80 shadow-2xs flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-[11px] font-medium text-gray-500">Serviços Oficiais</span>
                    <i class="fa-solid fa-screwdriver-wrench text-gray-400 text-sm"></i>
                </div>
                <div class="mt-2">
                    <span class="text-2xl font-bold text-gray-900 tracking-tight">{{ $counts['services'] ?? 4 }}</span>
                    <p class="text-[10px] text-gray-400 mt-0.5">serviços ativos</p>
                </div>
            </div>

            {{-- Metric 3: Destaques --}}
            <div class="bg-white rounded-xl p-4 border border-gray-200/80 shadow-2xs flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-[11px] font-medium text-gray-500">Destaques Homepage</span>
                    <i class="fa-solid fa-star text-[#C5A059] text-sm"></i>
                </div>
                <div class="mt-2">
                    <span class="text-2xl font-bold text-gray-900 tracking-tight">{{ $counts['highlights'] ?? 6 }}</span>
                    <p class="text-[10px] text-gray-400 mt-0.5">destaques ativos</p>
                </div>
            </div>

            {{-- Metric 4: Galeria --}}
            <div class="bg-white rounded-xl p-4 border border-gray-200/80 shadow-2xs flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-[11px] font-medium text-gray-500">Imagens Showroom</span>
                    <i class="fa-regular fa-image text-gray-400 text-sm"></i>
                </div>
                <div class="mt-2">
                    <span class="text-2xl font-bold text-gray-900 tracking-tight">{{ $counts['gallery'] ?? 4 }}</span>
                    <p class="text-[10px] text-gray-400 mt-0.5">imagens publicadas</p>
                </div>
            </div>

            {{-- Metric 5: Marcos --}}
            <div class="bg-white rounded-xl p-4 border border-gray-200/80 shadow-2xs flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-[11px] font-medium text-gray-500">Marcos da História</span>
                    <i class="fa-solid fa-flag text-red-400 text-sm"></i>
                </div>
                <div class="mt-2">
                    <span class="text-2xl font-bold text-gray-900 tracking-tight">{{ $counts['milestones'] ?? 25 }}</span>
                    <p class="text-[10px] text-gray-400 mt-0.5">marcos registados</p>
                </div>
            </div>

            {{-- Metric 6: Idiomas --}}
            <div class="bg-white rounded-xl p-4 border border-gray-200/80 shadow-2xs flex flex-col justify-between">
                <div class="flex items-center justify-between">
                    <span class="text-[11px] font-medium text-gray-500">Idiomas Ativos</span>
                    <i class="fa-solid fa-language text-purple-400 text-sm"></i>
                </div>
                <div class="mt-2">
                    <span class="text-2xl font-bold text-gray-900 tracking-tight">2</span>
                    <p class="text-[10px] text-gray-400 mt-0.5">PT, EN</p>
                </div>
            </div>

        </div>

        {{-- Row 2: Chart / Submissões / Estado do Conteúdo --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            {{-- Card: Atividade do Website --}}
            <div class="lg:col-span-5 bg-white rounded-xl p-5 border border-gray-200/80 shadow-2xs flex flex-col">
                <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                    <h3 class="text-sm font-bold text-gray-900">Atividade do Website</h3>
                    <span class="text-xs text-gray-400 border border-gray-200 px-2 py-0.5 rounded">Últimos 7 dias</span>
                </div>

                <div class="flex items-center gap-4 text-[11px] text-gray-500 my-3">
                    <span class="flex items-center gap-1.5"><span class="w-6 h-0.5 bg-amber-500 rounded-full inline-block"></span> Contactos</span>
                    <span class="flex items-center gap-1.5"><span class="w-6 h-0.5 bg-[#0c0d0e] rounded-full inline-block"></span> Marcações</span>
                    <span class="flex items-center gap-1.5"><span class="w-6 h-0.5 bg-gray-400 rounded-full inline-block" style="background:repeating-linear-gradient(90deg,#9ca3af 0,#9ca3af 4px,transparent 4px,transparent 7px)"></span> Visitas Showroom</span>
                </div>

                <div class="relative flex-1 min-h-[160px]">
                    <canvas id="activityChart"></canvas>
                </div>

                <div class="flex justify-between text-[10px] text-gray-400 pt-2 border-t border-gray-100 mt-2">
                    @foreach($chartLabels as $lbl)
                        <span>{{ $lbl }}</span>
                    @endforeach
                </div>
            </div>

            @push('scripts')
            <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.3/dist/chart.umd.min.js"></script>
            <script>
            (function () {
                const labels   = @json($chartLabels);
                const contacts = @json($chartContacts);
                const bookings = @json($chartBookings);
                const visits   = @json($chartVisits);

                const ctx = document.getElementById('activityChart');
                if (!ctx) return;

                new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels,
                        datasets: [
                            {
                                label: 'Contactos',
                                data: contacts,
                                borderColor: '#f59e0b',
                                backgroundColor: 'rgba(245,158,11,0.08)',
                                borderWidth: 2,
                                pointRadius: 3,
                                pointBackgroundColor: '#f59e0b',
                                tension: 0.4,
                                fill: true,
                            },
                            {
                                label: 'Marcações',
                                data: bookings,
                                borderColor: '#0c0d0e',
                                backgroundColor: 'rgba(12,13,14,0.04)',
                                borderWidth: 2,
                                pointRadius: 3,
                                pointBackgroundColor: '#0c0d0e',
                                tension: 0.4,
                                fill: true,
                            },
                            {
                                label: 'Visitas Showroom',
                                data: visits,
                                borderColor: '#9ca3af',
                                backgroundColor: 'transparent',
                                borderWidth: 1.5,
                                borderDash: [4, 3],
                                pointRadius: 2.5,
                                pointBackgroundColor: '#9ca3af',
                                tension: 0.4,
                                fill: false,
                            },
                        ],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        interaction: { mode: 'index', intersect: false },
                        plugins: {
                            legend: { display: false },
                            tooltip: {
                                backgroundColor: '#0c0d0e',
                                titleColor: '#9ca3af',
                                bodyColor: '#ffffff',
                                borderColor: '#1f2937',
                                borderWidth: 1,
                                padding: 10,
                                cornerRadius: 8,
                                titleFont: { size: 10 },
                                bodyFont: { size: 11, weight: 'bold' },
                            },
                        },
                        scales: {
                            x: {
                                display: false,
                            },
                            y: {
                                display: true,
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 1,
                                    color: '#d1d5db',
                                    font: { size: 9 },
                                },
                                grid: {
                                    color: '#f1f5f9',
                                    drawBorder: false,
                                },
                                border: { display: false },
                            },
                        },
                    },
                });
            })();
            </script>
            @endpush

            {{-- Card: Submissões Recentes --}}
            <div class="lg:col-span-4 bg-white rounded-xl p-5 border border-gray-200/80 shadow-2xs flex flex-col">
                <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                    <h3 class="text-sm font-bold text-gray-900">Submissões Recentes</h3>
                    <a href="{{ route('cms.submissions.index', 'contactos') }}" class="text-xs text-gray-500 hover:text-gray-900 font-medium">Ver todas →</a>
                </div>

                <div class="divide-y divide-gray-100 py-1">
                    <div class="py-2.5 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-md bg-gray-100 text-gray-500 flex items-center justify-center"><i class="fa-regular fa-envelope text-[10px]"></i></span>
                            <div>
                                <p class="font-medium text-gray-900">Novo Pedido de Contacto</p>
                                <p class="text-[10px] text-gray-400">Hoje, 10:42</p>
                            </div>
                        </div>
                        <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-700 font-bold text-[10px] flex items-center justify-center">3</span>
                    </div>
                    <div class="py-2.5 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-md bg-gray-100 text-gray-500 flex items-center justify-center"><i class="fa-regular fa-envelope text-[10px]"></i></span>
                            <div>
                                <p class="font-medium text-gray-900">Lead (Test Drive)</p>
                                <p class="text-[10px] text-gray-400">Hoje, 09:18</p>
                            </div>
                        </div>
                        <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-700 font-bold text-[10px] flex items-center justify-center">2</span>
                    </div>
                    <div class="py-2.5 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-md bg-gray-100 text-gray-500 flex items-center justify-center"><i class="fa-solid fa-screwdriver-wrench text-[10px]"></i></span>
                            <div>
                                <p class="font-medium text-gray-900">Marcação de Serviço</p>
                                <p class="text-[10px] text-gray-400">Ontem, 16:30</p>
                            </div>
                        </div>
                        <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-700 font-bold text-[10px] flex items-center justify-center">1</span>
                    </div>
                    <div class="py-2.5 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-md bg-gray-100 text-gray-500 flex items-center justify-center"><i class="fa-solid fa-building-columns text-[10px]"></i></span>
                            <div>
                                <p class="font-medium text-gray-900">Visita ao Showroom</p>
                                <p class="text-[10px] text-gray-400">Ontem, 11:05</p>
                            </div>
                        </div>
                        <span class="w-5 h-5 rounded-full bg-amber-100 text-amber-700 font-bold text-[10px] flex items-center justify-center">1</span>
                    </div>
                    <div class="py-2.5 flex items-center justify-between text-xs">
                        <div class="flex items-center gap-2.5">
                            <span class="w-6 h-6 rounded-md bg-gray-100 text-gray-500 flex items-center justify-center"><i class="fa-solid fa-briefcase text-[10px]"></i></span>
                            <div>
                                <p class="font-medium text-gray-900">Candidatura de Revendedor</p>
                                <p class="text-[10px] text-gray-400">19 Mai, 14:22</p>
                            </div>
                        </div>
                        <span class="w-5 h-5 rounded-full bg-gray-100 text-gray-400 font-bold text-[10px] flex items-center justify-center">0</span>
                    </div>
                </div>
            </div>

            {{-- Card: Estado do Conteúdo --}}
            <div class="lg:col-span-3 bg-white rounded-xl p-5 border border-gray-200/80 shadow-2xs flex flex-col justify-between">
                <div>
                    <h3 class="text-sm font-bold text-gray-900 pb-3 border-b border-gray-100 mb-4">Estado do Conteúdo</h3>
                    <div class="space-y-4 text-xs">
                        <div class="flex items-center justify-between">
                            <span class="flex items-center gap-2 text-gray-700 font-medium"><span class="w-2 h-2 rounded-full bg-emerald-500"></span> Conteúdos Publicados</span>
                            <span class="font-bold text-gray-900">32</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="flex items-center gap-2 text-gray-700 font-medium"><span class="w-2 h-2 rounded-full bg-amber-500"></span> Rascunhos</span>
                            <span class="font-bold text-gray-900">6</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="flex items-center gap-2 text-gray-700 font-medium"><span class="w-2 h-2 rounded-full bg-gray-400"></span> Pendentes</span>
                            <span class="font-bold text-gray-900">0</span>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="flex items-center gap-2 text-gray-700 font-medium"><span class="w-2 h-2 rounded-full bg-red-500"></span> Sem Tradução (EN)</span>
                            <span class="font-bold text-gray-900">3</span>
                        </div>
                    </div>
                </div>
                <div class="pt-6 border-t border-gray-100 text-center">
                    <a href="{{ route('cms.pages.index') }}" class="text-xs text-gray-500 hover:text-gray-900 font-medium">Gerir conteúdo →</a>
                </div>
            </div>

        </div>

        {{-- Row 3: Conteúdo Recente / Atividade Recente / Atenção + Destaques --}}
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">

            {{-- Conteúdo Recente --}}
            <div class="lg:col-span-5 bg-white rounded-xl p-5 border border-gray-200/80 shadow-2xs flex flex-col">
                <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                    <h3 class="text-sm font-bold text-gray-900">Conteúdo Recente</h3>
                    <a href="{{ route('cms.pages.index') }}" class="text-xs text-gray-500 hover:text-gray-900 font-medium">Ver todos →</a>
                </div>
                <div class="overflow-x-auto my-2">
                    <table class="w-full text-xs text-left">
                        <thead class="text-[10px] text-gray-400 font-semibold uppercase border-b border-gray-100">
                            <tr>
                                <th class="pb-2">Título</th>
                                <th class="pb-2">Tipo</th>
                                <th class="pb-2">Estado</th>
                                <th class="pb-2">Atualizado</th>
                                <th class="pb-2 text-right"></th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr>
                                <td class="py-2.5 font-medium text-gray-900"><i class="fa-regular fa-file text-gray-400 mr-1.5"></i>Página Inicial</td>
                                <td class="py-2.5 text-gray-500">Página</td>
                                <td class="py-2.5"><span class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full">Publicado</span></td>
                                <td class="py-2.5 text-gray-400 whitespace-nowrap">Hoje, 10:42</td>
                                <td class="py-2.5 text-right text-gray-400"><i class="fa-solid fa-ellipsis-vertical"></i></td>
                            </tr>
                            <tr>
                                <td class="py-2.5 font-medium text-gray-900"><i class="fa-regular fa-file text-gray-400 mr-1.5"></i>Serviços</td>
                                <td class="py-2.5 text-gray-500">Página</td>
                                <td class="py-2.5"><span class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full">Publicado</span></td>
                                <td class="py-2.5 text-gray-400 whitespace-nowrap">Hoje, 09:18</td>
                                <td class="py-2.5 text-right text-gray-400"><i class="fa-solid fa-ellipsis-vertical"></i></td>
                            </tr>
                            @if(isset($activeHighlights[0]))
                            <tr>
                                <td class="py-2.5 font-medium text-gray-900 truncate max-w-[140px]"><i class="fa-solid fa-star text-amber-400 mr-1.5"></i>{{ Str::limit($activeHighlights[0]->title_pt ?? $activeHighlights[0]->title ?? 'ROX 01', 22) }}</td>
                                <td class="py-2.5 text-gray-500">Destaque</td>
                                <td class="py-2.5"><span class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full">Publicado</span></td>
                                <td class="py-2.5 text-gray-400 whitespace-nowrap">Ontem, 16:30</td>
                                <td class="py-2.5 text-right text-gray-400"><i class="fa-solid fa-ellipsis-vertical"></i></td>
                            </tr>
                            @else
                            <tr>
                                <td class="py-2.5 font-medium text-gray-900"><i class="fa-solid fa-star text-amber-400 mr-1.5"></i>ROX 01 – Apresentação</td>
                                <td class="py-2.5 text-gray-500">Destaque</td>
                                <td class="py-2.5"><span class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full">Publicado</span></td>
                                <td class="py-2.5 text-gray-400 whitespace-nowrap">Ontem, 16:30</td>
                                <td class="py-2.5 text-right text-gray-400"><i class="fa-solid fa-ellipsis-vertical"></i></td>
                            </tr>
                            @endif
                            <tr>
                                <td class="py-2.5 font-medium text-gray-900"><i class="fa-regular fa-images text-gray-400 mr-1.5"></i>Showroom – Luanda</td>
                                <td class="py-2.5 text-gray-500">Galeria</td>
                                <td class="py-2.5"><span class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full">Publicado</span></td>
                                <td class="py-2.5 text-gray-400 whitespace-nowrap">Ontem, 11:05</td>
                                <td class="py-2.5 text-right text-gray-400"><i class="fa-solid fa-ellipsis-vertical"></i></td>
                            </tr>
                            <tr>
                                <td class="py-2.5 font-medium text-gray-900"><i class="fa-solid fa-screwdriver-wrench text-gray-400 mr-1.5"></i>Manutenção</td>
                                <td class="py-2.5 text-gray-500">Serviço</td>
                                <td class="py-2.5"><span class="text-[10px] font-semibold text-amber-700 bg-amber-50 px-2 py-0.5 rounded-full">Rascunho</span></td>
                                <td class="py-2.5 text-gray-400 whitespace-nowrap">19 Mai, 14:22</td>
                                <td class="py-2.5 text-right text-gray-400"><i class="fa-solid fa-ellipsis-vertical"></i></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            {{-- Atividade Recente --}}
            <div class="lg:col-span-4 bg-white rounded-xl p-5 border border-gray-200/80 shadow-2xs flex flex-col">
                <div class="flex items-center justify-between pb-3 border-b border-gray-100">
                    <h3 class="text-sm font-bold text-gray-900">Atividade Recente</h3>
                    <a href="{{ route('cms.submissions.index', 'contactos') }}" class="text-xs text-gray-500 hover:text-gray-900 font-medium">Ver todas →</a>
                </div>
                <div class="space-y-4 py-2">
                    <div class="flex items-start gap-3 text-xs">
                        <div class="w-6 h-6 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa-regular fa-file text-[10px]"></i></div>
                        <div class="flex-1 min-w-0"><p class="font-medium text-gray-900">Administrador atualizou Página Inicial</p></div>
                        <span class="text-[10px] text-gray-400 flex-shrink-0">Hoje, 10:42</span>
                    </div>
                    <div class="flex items-start gap-3 text-xs">
                        <div class="w-6 h-6 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa-regular fa-image text-[10px]"></i></div>
                        <div class="flex-1 min-w-0"><p class="font-medium text-gray-900">Administrador adicionou 5 imagens à galeria</p></div>
                        <span class="text-[10px] text-gray-400 flex-shrink-0">Hoje, 09:18</span>
                    </div>
                    <div class="flex items-start gap-3 text-xs">
                        <div class="w-6 h-6 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa-solid fa-screwdriver-wrench text-[10px]"></i></div>
                        <div class="flex-1 min-w-0"><p class="font-medium text-gray-900">Administrador publicou Serviço: Manutenção</p></div>
                        <span class="text-[10px] text-gray-400 flex-shrink-0">Ontem, 16:30</span>
                    </div>
                    <div class="flex items-start gap-3 text-xs">
                        <div class="w-6 h-6 rounded-lg bg-amber-50 text-amber-600 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa-regular fa-envelope text-[10px]"></i></div>
                        <div class="flex-1 min-w-0"><p class="font-medium text-gray-900">Novo lead (Test Drive) recebido</p></div>
                        <span class="text-[10px] text-gray-400 flex-shrink-0">Ontem, 11:05</span>
                    </div>
                    <div class="flex items-start gap-3 text-xs">
                        <div class="w-6 h-6 rounded-lg bg-gray-100 text-gray-500 flex items-center justify-center flex-shrink-0 mt-0.5"><i class="fa-solid fa-flag text-[10px]"></i></div>
                        <div class="flex-1 min-w-0"><p class="font-medium text-gray-900">Administrador atualizou Marco: 2024</p></div>
                        <span class="text-[10px] text-gray-400 flex-shrink-0">19 Mai, 14:22</span>
                    </div>
                </div>
            </div>

            {{-- Atenção + Destaques --}}
            <div class="lg:col-span-3 space-y-5">

                {{-- Precisa de Atenção --}}
                <div class="bg-white rounded-xl p-5 border border-gray-200/80 shadow-2xs">
                    <h3 class="text-sm font-bold text-gray-900 pb-3 border-b border-gray-100 mb-3">Precisa de Atenção</h3>
                    <div class="space-y-3 text-xs">
                        <div class="flex items-center justify-between">
                            <span class="flex items-center gap-2 text-gray-700"><i class="fa-regular fa-file text-amber-500 w-3 text-center"></i> 3 conteúdos sem tradução EN</span>
                            <a href="{{ route('cms.pages.index') }}" class="text-[11px] text-gray-400 hover:text-gray-900 font-medium">Ver</a>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="flex items-center gap-2 text-gray-700"><i class="fa-regular fa-envelope text-amber-500 w-3 text-center"></i> 2 leads por tratar</span>
                            <a href="{{ route('cms.submissions.index', 'contactos') }}" class="text-[11px] text-gray-400 hover:text-gray-900 font-medium">Ver</a>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="flex items-center gap-2 text-gray-700"><i class="fa-solid fa-pen text-amber-500 w-3 text-center"></i> 1 página em rascunho</span>
                            <a href="{{ route('cms.pages.index') }}" class="text-[11px] text-gray-400 hover:text-gray-900 font-medium">Ver</a>
                        </div>
                        <div class="flex items-center justify-between">
                            <span class="flex items-center gap-2 text-gray-700"><i class="fa-regular fa-image text-amber-500 w-3 text-center"></i> 4 imagens sem utilização</span>
                            <a href="{{ route('cms.content.index') }}" class="text-[11px] text-gray-400 hover:text-gray-900 font-medium">Ver</a>
                        </div>
                    </div>
                    <div class="pt-4 mt-3 border-t border-gray-100 text-center">
                        <a href="{{ route('cms.submissions.index', 'contactos') }}" class="text-xs text-gray-500 hover:text-gray-900 font-medium">Ver todos →</a>
                    </div>
                </div>

                {{-- Destaques Principais --}}
                <div class="bg-white rounded-xl p-5 border border-gray-200/80 shadow-2xs">
                    <h3 class="text-sm font-bold text-gray-900 pb-3 border-b border-gray-100 mb-3">Destaques Principais</h3>
                    <div class="space-y-3">
                        @forelse($activeHighlights as $high)
                            <div class="flex items-center justify-between text-xs">
                                <div class="flex items-center gap-2 min-w-0">
                                    <img src="{{ img_src($high->image) }}" alt="" class="w-8 h-6 object-cover rounded bg-gray-100 border border-gray-200 flex-shrink-0">
                                    <span class="font-medium text-gray-900 truncate">{{ $high->title_pt ?? $high->title ?? 'Destaque' }}</span>
                                </div>
                                <span class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full flex-shrink-0">Ativo</span>
                            </div>
                        @empty
                            <div class="flex items-center justify-between text-xs">
                                <div class="flex items-center gap-2 min-w-0">
                                    <img src="{{ asset('assets/banner-adamas.avif') }}" alt="" class="w-8 h-6 object-cover rounded bg-gray-100 border border-gray-200 flex-shrink-0">
                                    <span class="font-medium text-gray-900 truncate">ROX Motor e OCTA Angola...</span>
                                </div>
                                <span class="text-[10px] font-semibold text-emerald-700 bg-emerald-50 px-2 py-0.5 rounded-full flex-shrink-0">Ativo</span>
                            </div>
                        @endforelse
                    </div>
                    <div class="pt-4 mt-3 border-t border-gray-100 text-center">
                        <a href="{{ route('cms.highlights.index') }}" class="text-xs text-gray-500 hover:text-gray-900 font-medium">Ver todos os destaques →</a>
                    </div>
                </div>

            </div>

        </div>

        {{-- Row 4: Ações Rápidas --}}
        <div class="bg-white rounded-xl p-5 border border-gray-200/80 shadow-2xs">
            <h3 class="text-sm font-bold text-gray-900 pb-3 border-b border-gray-100 mb-4">Ações Rápidas</h3>
            <div class="grid grid-cols-2 sm:grid-cols-4 lg:grid-cols-7 gap-4 text-center">
                <a href="{{ route('cms.pages.index') }}" class="p-3 rounded-lg border border-gray-100 hover:border-[#C5A059]/40 hover:bg-[#C5A059]/5 transition-all flex flex-col items-center gap-2 group">
                    <i class="fa-regular fa-file-lines text-xl text-gray-400 group-hover:text-[#C5A059] transition-colors"></i>
                    <span class="text-xs font-semibold text-gray-700 group-hover:text-gray-900">Nova Página</span>
                </a>
                <a href="{{ route('cms.services.create') }}" class="p-3 rounded-lg border border-gray-100 hover:border-[#C5A059]/40 hover:bg-[#C5A059]/5 transition-all flex flex-col items-center gap-2 group">
                    <i class="fa-solid fa-screwdriver-wrench text-xl text-gray-400 group-hover:text-[#C5A059] transition-colors"></i>
                    <span class="text-xs font-semibold text-gray-700 group-hover:text-gray-900">Novo Serviço</span>
                </a>
                <a href="{{ route('cms.highlights.create') }}" class="p-3 rounded-lg border border-gray-100 hover:border-[#C5A059]/40 hover:bg-[#C5A059]/5 transition-all flex flex-col items-center gap-2 group">
                    <i class="fa-solid fa-star text-xl text-gray-400 group-hover:text-[#C5A059] transition-colors"></i>
                    <span class="text-xs font-semibold text-gray-700 group-hover:text-gray-900">Novo Destaque</span>
                </a>
                <a href="{{ route('cms.milestones.create') }}" class="p-3 rounded-lg border border-gray-100 hover:border-[#C5A059]/40 hover:bg-[#C5A059]/5 transition-all flex flex-col items-center gap-2 group">
                    <i class="fa-solid fa-flag text-xl text-gray-400 group-hover:text-[#C5A059] transition-colors"></i>
                    <span class="text-xs font-semibold text-gray-700 group-hover:text-gray-900">Novo Marco</span>
                </a>
                <a href="{{ route('cms.content.index') }}" class="p-3 rounded-lg border border-gray-100 hover:border-[#C5A059]/40 hover:bg-[#C5A059]/5 transition-all flex flex-col items-center gap-2 group">
                    <i class="fa-regular fa-image text-xl text-gray-400 group-hover:text-[#C5A059] transition-colors"></i>
                    <span class="text-xs font-semibold text-gray-700 group-hover:text-gray-900">Carregar Imagem</span>
                </a>
                <a href="{{ route('cms.pages.index') }}" class="p-3 rounded-lg border border-gray-100 hover:border-[#C5A059]/40 hover:bg-[#C5A059]/5 transition-all flex flex-col items-center gap-2 group">
                    <i class="fa-solid fa-pen text-xl text-gray-400 group-hover:text-[#C5A059] transition-colors"></i>
                    <span class="text-xs font-semibold text-gray-700 group-hover:text-gray-900">Editar Textos PT/EN</span>
                </a>
                <a href="{{ route('home') }}" target="_blank" class="p-3 rounded-lg border border-gray-100 hover:border-[#C5A059]/40 hover:bg-[#C5A059]/5 transition-all flex flex-col items-center gap-2 group">
                    <i class="fa-solid fa-arrow-up-right-from-square text-xl text-gray-400 group-hover:text-[#C5A059] transition-colors"></i>
                    <span class="text-xs font-semibold text-gray-700 group-hover:text-gray-900">Ver Website</span>
                </a>
            </div>
        </div>



    </div>
</x-cms-layout>
