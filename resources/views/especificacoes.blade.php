<x-front-layout>
    <x-slot name="title">Especificações ROX</x-slot>

    @php
        $models = [
            'rox-01' => ['name' => 'ROX 01', 'dimensoes' => '5.295 × 1.980 × 1.869 mm', 'potencia' => '350 kW / 740 N·m', 'autonomia_hibrida' => '1.115 km', 'carregamento_ac' => '8.6 h (0-100%)'],
            'rox-adamas' => ['name' => 'ROX ADAMAS', 'dimensoes' => '5.298 × 1.985 × 1.856 mm', 'potencia' => '350 kW / 740 N·m', 'autonomia_hibrida' => '1.226 km', 'carregamento_ac' => '8.8 h (0-100%)'],
        ];
        $initialModel = $modeloActivo ?? 'rox-01';

        $sections = [
            'cores' => [
                'title' => 'Cores Exteriores & Interiores',
                'rows' => [
                    ['subsection' => 'Cores Exteriores'],
                    ['label' => 'Gloaming Gray', 'color' => '#6b6b6b', '7' => '●', '6' => '●'],
                    ['label' => 'Polar White', 'color' => '#d4d4d0', '7' => '●', '6' => '●'],
                    ['label' => 'Black Knight Special Version — All Black Exterior Kit (incl. acabamento exterior em aço de tungsténio)', 'color' => '#2d2d2d', '7' => '○', '6' => '○'],
                    ['subsection' => 'Cores Interiores'],
                    ['label' => 'Amber Orange', 'color' => '#c8850f', '7' => '●', '6' => '●'],
                    ['label' => 'Jade White', 'color' => '#c4c0b0', '7' => '●', '6' => '●'],
                    ['label' => 'Pearl Black', 'color' => '#2d2d2d', '7' => '●', '6' => '●'],
                ],
            ],
            'parametros' => [
                'title' => 'Parâmetros Básicos',
                'rows' => [
                    ['label' => 'Dimensões do veículo', '7' => '__DIMENSOES__', '6' => '__DIMENSOES__', 'dynamic' => 'dimensoes'],
                    ['label' => 'Entre-eixos', '7' => '3.010 mm', '6' => '3.010 mm'],
                    ['label' => 'Peso em vazio', '7' => '2.735 kg', '6' => '2.735 kg'],
                    ['label' => 'Aceleração 0-100 km/h', '7' => '5.5 s', '6' => '5.5 s'],
                    ['label' => 'Velocidade máxima', '7' => '190 km/h', '6' => '190 km/h'],
                    ['label' => 'Modos de energia', '7' => 'Elétrico / Combustível / Híbrido', '6' => 'Elétrico / Combustível / Híbrido'],
                    ['label' => 'Extensor de Autonomia', '7' => '150 kW / 340 N·m', '6' => '150 kW / 340 N·m'],
                    ['label' => 'Pré Instalação para Kit de Reboque', '7' => '200 kW / 400 N·m', '6' => '200 kW / 400 N·m'],
                    ['label' => 'Potência/binário total do sistema', '7' => '__POTENCIA__', '6' => '__POTENCIA__', 'dynamic' => 'potencia'],
                    ['label' => 'Autonomia elétrica WLTC', '7' => '235 km', '6' => '235 km'],
                    ['label' => 'Autonomia híbrida WLTC', '7' => '1.115 km', '6' => '1.115 km', 'dynamic' => 'autonomia_hibrida'],
                    ['label' => 'Extensor de Autonomia', '7' => '1.5T quatro cilindros', '6' => '1.5T quatro cilindros'],
                    ['label' => 'Tipo de combustível', '7' => '95', '6' => '95'],
                    ['label' => 'Norma de emissões', '7' => 'Euro V', '6' => 'Euro V'],
                    ['label' => 'Capacidade do depósito', '7' => '70 L', '6' => '70 L'],
                    ['label' => 'Carregamento AC lento (7 kW)', '7' => '8.6 h (0-100%)', '6' => '8.6 h (0-100%)', 'dynamic' => 'carregamento_ac'],
                ],
            ],
            'chassis' => [
                'title' => 'Chassis',
                'rows' => [
                    ['label' => 'Suspensão dianteira', '7' => 'Liga de alumínio — duplo triângulo', '6' => 'Liga de alumínio — duplo triângulo'],
                    ['label' => 'Suspensão traseira', '7' => 'Liga de alumínio — multilink H-arm', '6' => 'Liga de alumínio — multilink H-arm'],
                    ['label' => 'Sub-quadros dianteiro e traseiro', '7' => 'Alumínio', '6' => 'Alumínio'],
                    ['label' => 'Tipo de amortecedor', '7' => 'DCC — Amortecimento variável contínuo', '6' => 'DCC — Amortecimento variável contínuo'],
                    ['label' => 'Discos ventilados nas 4 rodas', '7' => '●', '6' => '●'],
                    ['label' => 'Regeneração de energia na travagem', '7' => '●', '6' => '●'],
                    ['label' => 'Direção assistida elétrica', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Estrada', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Neve', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Rocha', '7' => '●', '6' => '●'],
                    ['label' => 'Modo Lama', '7' => '●', '6' => '●'],
                ],
            ],
            'jantes' => [
                'title' => 'Jantes e Pneus',
                'rows' => [
                    ['label' => 'Jantes 21" em dois tons e pneus para todas as estações (autonomia elétrica WLTC 235 km)', '7' => '● (275/45 R21)', '6' => '● (275/45 R21)'],
                    ['label' => 'Jantes 21" em preto e pneus para todas as estações (autonomia elétrica WLTC 235 km)', '7' => '● (275/45 R21)', '6' => '● (275/45 R21)'],
                    ['label' => 'Pneu suplente exterior tamanho completo (incl. capa)', '7' => '●', '6' => '●'],
                    ['label' => 'Pacote de reboque', '7' => '●', '6' => '●'],
                ],
            ],
            'seguranca' => [
                'title' => 'Proteção e Segurança',
                'rows' => [
                    ['label' => 'Programa de Estabilidade Eletrónica (ESP)', '7' => '●', '6' => '●'],
                    ['label' => 'Sistema Anti-bloqueio (ABS)', '7' => '●', '6' => '●'],
                    ['label' => 'Controlo de Arranque em Rampa (HHC)', '7' => '●', '6' => '●'],
                    ['label' => 'Controlo de Tração (TCS)', '7' => '●', '6' => '●'],
                    ['label' => 'Controlo Dinâmico do Veículo (VDC)', '7' => '●', '6' => '●'],
                    ['label' => 'Distribuição Eletrónica de Travagem (EBD)', '7' => '●', '6' => '●'],
                    ['label' => 'Sinal de paragem de emergência (HAZ)', '7' => '●', '6' => '●'],
                    ['label' => 'Airbags frontais condutor e passageiro', '7' => '●', '6' => '●'],
                    ['label' => 'Airbags laterais dianteiros', '7' => '●', '6' => '●'],
                    ['label' => 'Airbags de cortina', '7' => '●', '6' => '●'],
                ],
            ],
        ];
    @endphp

    <!-- Sticky Header Bar -->
    <div class="sticky top-[60px] z-20 bg-white border-b border-gray-200">
        <div class="site-container">
            <!-- Row 1: Model select + Download -->
            <div class="flex items-center justify-between py-3 border-b border-gray-100">
                <div class="relative" id="model-dropdown">
                    <button type="button" id="model-dropdown-btn" class="flex items-center gap-2 text-sm font-medium text-black pb-1 border-b border-gray-300 hover:border-black transition-colors cursor-pointer">
                        <span id="model-dropdown-label">{{ $models[$initialModel]['name'] }}</span>
                        <svg class="w-4 h-4 text-gray-500 transition-transform duration-200" id="model-dropdown-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </button>
                    <div id="model-dropdown-menu" class="hidden absolute left-0 top-full mt-1 w-48 bg-white shadow-lg border border-gray-100 z-30">
                        @foreach($models as $mKey => $mData)
                            <button type="button" class="model-switch-btn w-full flex items-center justify-between px-4 py-3 text-sm transition-colors hover:bg-gray-50 text-left" data-model="{{ $mKey }}" data-name="{{ $mData['name'] }}">
                                <span>{{ $mData['name'] }}</span>
                                <svg class="model-check w-4 h-4 {{ $mKey === $initialModel ? '' : 'hidden' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                            </button>
                        @endforeach
                    </div>
                </div>
                <a href="{{ route('especificacoes.pdf', $initialModel) }}" id="download-link" class="inline-flex items-center gap-2 text-sm font-medium text-gray-600 hover:text-black transition-colors">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Baixar Especificações
                </a>
            </div>

            <!-- Row 2: Legend + Column headers -->
            <div class="hidden md:grid grid-cols-12 gap-4 py-3">
                <div class="col-span-5 flex items-center gap-6 text-xs text-gray-500">
                    <span class="flex items-center gap-1.5"><span class="text-black text-sm">●</span> Padrão</span>
                    <span class="flex items-center gap-1.5"><span class="text-black text-sm">○</span> Opcional</span>
                    <span class="flex items-center gap-1.5"><span class="text-gray-400">—</span> Não disponível</span>
                </div>
                <div class="col-span-3">
                    <p class="text-sm font-medium text-black">Versão 7 lugares</p>
                    <p class="text-xs text-gray-400">(2-2-3)</p>
                </div>
                <div class="col-span-3">
                    <p class="text-sm font-medium text-black">Versão 6 lugares</p>
                    <p class="text-xs text-gray-400">(2-2-2)</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Title -->
    <section class="pt-32 pb-6 bg-white">
        <div class="site-container">
            <h1 class="text-2xl md:text-[2rem] font-medium text-black animate-up" id="page-title">Especificações do {{ $models[$initialModel]['name'] }}</h1>
        </div>
    </section>

    <!-- Section Navigation + Content -->
    <section class="pb-20 md:pb-28 bg-white">
        <div class="site-container">

            @foreach($sections as $key => $section)
                <div id="spec-{{ $key }}" class="scroll-mt-[180px] spec-section" data-section-key="{{ $key }}">
                    <div class="bg-[#f4f6f9] px-5 py-3.5 mt-2 flex items-center justify-between cursor-pointer relative spec-header sticky top-[175px] z-[15]" data-key="{{ $key }}">
                        <div class="flex items-center gap-2">
                            <h3 class="text-sm font-semibold text-black">{{ $section['title'] }}</h3>
                            <svg class="w-4 h-4 text-gray-400 transition-transform duration-200 spec-arrow" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </div>

                        <div class="spec-nav-dropdown hidden absolute left-0 top-full w-full md:w-[400px] bg-[#f4f6f9] shadow-lg z-30 border-t border-gray-200">
                            @foreach($sections as $navKey => $navSection)
                                <a href="#spec-{{ $navKey }}" class="spec-nav-link flex items-center justify-between px-5 py-3 text-sm hover:bg-gray-200/50 transition-colors {{ $navKey === $key ? 'font-semibold text-black' : 'text-gray-500' }}" data-target="{{ $navKey }}">
                                    {{ $navSection['title'] }}
                                    @if($navKey === $key)
                                        <svg class="w-4 h-4 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
                                    @endif
                                </a>
                            @endforeach
                        </div>
                    </div>

                    <div>
                        @foreach($section['rows'] as $row)
                            @if(isset($row['subsection']))
                                <div class="px-5 pt-6 pb-2">
                                    <h4 class="text-sm font-semibold text-black">{{ $row['subsection'] }}</h4>
                                </div>
                            @else
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-1 md:gap-4 py-4 px-5 border-b border-gray-100 text-sm">
                                    <div class="md:col-span-5 text-gray-600 font-light mb-1 md:mb-0 flex items-center gap-2.5">
                                        @if(isset($row['color']))
                                            <span class="w-4 h-4 rounded-full flex-shrink-0 border border-gray-200" style="background: {{ $row['color'] }};"></span>
                                        @endif
                                        {{ $row['label'] }}
                                    </div>
                                    <div class="md:col-span-3 text-black font-normal {{ isset($row['dynamic']) ? 'dynamic-val' : '' }}" {!! isset($row['dynamic']) ? 'data-field="'.$row['dynamic'].'"' : '' !!}>
                                        <span class="md:hidden text-xs text-gray-400">7 lug.: </span>{{ isset($row['dynamic']) ? $models[$initialModel][$row['dynamic']] : $row['7'] }}
                                    </div>
                                    <div class="md:col-span-3 text-black font-normal {{ isset($row['dynamic']) ? 'dynamic-val' : '' }}" {!! isset($row['dynamic']) ? 'data-field="'.$row['dynamic'].'"' : '' !!}>
                                        <span class="md:hidden text-xs text-gray-400">6 lug.: </span>{{ isset($row['dynamic']) ? $models[$initialModel][$row['dynamic']] : $row['6'] }}
                                    </div>
                                </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            @endforeach

            <!-- Bottom -->
            <div class="mt-16 pt-8 border-t border-gray-200 flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                <p class="text-xs text-gray-400">Todas as especificações estão sujeitas a alterações. Consulte o seu concessionário Octa Angola para informações atualizadas.</p>
                <a href="{{ route('especificacoes.pdf', $initialModel) }}" id="download-link-bottom" class="inline-flex items-center gap-2 px-6 py-3 text-xs font-medium tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110 flex-shrink-0" style="background: var(--rox-dune-yellow);">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                    Baixar PDF
                </a>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Model data for client-side switching
        var modelData = @json($models);
        var currentModel = '{{ $initialModel }}';
        var pdfBaseUrl = '{{ url("especificacoes") }}';

        // Model dropdown toggle
        var modelBtn = document.getElementById('model-dropdown-btn');
        var modelMenu = document.getElementById('model-dropdown-menu');
        var modelArrow = document.getElementById('model-dropdown-arrow');
        modelBtn.addEventListener('click', function() {
            modelMenu.classList.toggle('hidden');
            modelArrow.classList.toggle('rotate-180');
        });
        document.addEventListener('click', function(e) {
            if (!e.target.closest('#model-dropdown')) {
                modelMenu.classList.add('hidden');
                modelArrow.classList.remove('rotate-180');
            }
        });

        // Model switch (no page reload)
        document.querySelectorAll('.model-switch-btn').forEach(function(btn) {
            btn.addEventListener('click', function() {
                var newModel = btn.dataset.model;
                var newName = btn.dataset.name;
                if (newModel === currentModel) { modelMenu.classList.add('hidden'); return; }
                currentModel = newModel;

                // Update label
                document.getElementById('model-dropdown-label').textContent = newName;
                document.getElementById('page-title').textContent = 'Especificações do ' + newName;

                // Update checks
                document.querySelectorAll('.model-check').forEach(function(c) { c.classList.add('hidden'); });
                btn.querySelector('.model-check').classList.remove('hidden');

                // Update dynamic values
                document.querySelectorAll('.dynamic-val').forEach(function(el) {
                    var field = el.dataset.field;
                    var mobileLabel = el.querySelector('span');
                    var val = modelData[newModel][field];
                    if (mobileLabel) { el.innerHTML = ''; el.appendChild(mobileLabel); el.appendChild(document.createTextNode(val)); }
                    else { el.textContent = val; }
                });

                // Update download links
                document.getElementById('download-link').href = pdfBaseUrl + '/' + newModel + '/pdf';
                document.getElementById('download-link-bottom').href = pdfBaseUrl + '/' + newModel + '/pdf';

                // Update URL without reload
                history.replaceState(null, '', pdfBaseUrl + '/' + newModel);

                // Close dropdown
                modelMenu.classList.add('hidden');
                modelArrow.classList.remove('rotate-180');
            });
        });

        // Section dropdown navigation
        var headers = document.querySelectorAll('.spec-header');
        var sections = document.querySelectorAll('.spec-section');
        var activeDropdown = null;

        headers.forEach(function(header) {
            header.addEventListener('click', function(e) {
                if (e.target.closest('.spec-nav-link')) return;
                var dropdown = header.querySelector('.spec-nav-dropdown');
                var arrow = header.querySelector('.spec-arrow');
                if (activeDropdown && activeDropdown !== dropdown) {
                    activeDropdown.classList.add('hidden');
                    activeDropdown.closest('.spec-header').querySelector('.spec-arrow').classList.remove('rotate-180');
                }
                dropdown.classList.toggle('hidden');
                arrow.classList.toggle('rotate-180');
                activeDropdown = dropdown.classList.contains('hidden') ? null : dropdown;
            });
        });

        document.querySelectorAll('.spec-nav-link').forEach(function(link) {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                var target = document.getElementById('spec-' + link.dataset.target);
                if (target) target.scrollIntoView({ behavior: 'smooth', block: 'start' });
                if (activeDropdown) {
                    activeDropdown.classList.add('hidden');
                    activeDropdown.closest('.spec-header').querySelector('.spec-arrow').classList.remove('rotate-180');
                    activeDropdown = null;
                }
            });
        });

        document.addEventListener('click', function(e) {
            if (activeDropdown && !e.target.closest('.spec-header')) {
                activeDropdown.classList.add('hidden');
                activeDropdown.closest('.spec-header').querySelector('.spec-arrow').classList.remove('rotate-180');
                activeDropdown = null;
            }
        });

        // Update checkmarks on scroll
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    var activeKey = entry.target.dataset.sectionKey;
                    document.querySelectorAll('.spec-nav-link').forEach(function(link) {
                        var check = link.querySelector('svg');
                        if (link.dataset.target === activeKey) {
                            link.classList.add('font-semibold', 'text-black');
                            link.classList.remove('text-gray-500');
                            if (!check) link.insertAdjacentHTML('beforeend', '<svg class="w-4 h-4 text-black flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>');
                        } else {
                            link.classList.remove('font-semibold', 'text-black');
                            link.classList.add('text-gray-500');
                            if (check) check.remove();
                        }
                    });
                }
            });
        }, { rootMargin: '-180px 0px -60% 0px', threshold: 0 });

        sections.forEach(function(s) { observer.observe(s); });
    });
    </script>
</x-front-layout>
