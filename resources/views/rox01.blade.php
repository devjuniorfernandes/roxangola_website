<x-front-layout>
    <x-slot name="title">ROX 01 - SUV Todo-o-Terreno de Luxo</x-slot>

    <!-- Hero Section -->
    <section class="h-[100svh] w-full relative flex items-end overflow-hidden">
        <img src="{{ asset('assets/banner2.jpg') }}" alt="ROX 01" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="relative z-10 site-container pb-12 sm:pb-16 md:pb-20 w-full">
            <img src="{{ asset('assets/rox01-global.svg') }}" alt="ROX 01" class="h-8 sm:h-10 md:h-14 mb-2 sm:mb-3 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">
            <p class="text-sm sm:text-base md:text-xl font-light text-gray-200 tracking-wide opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">
                SUV Todo-o-Terreno de Luxo — Cenário Completo
            </p>
        </div>
    </section>

    <!-- Highlights Slider Section -->
    <section class="bg-white py-10 md:py-16 overflow-hidden">
        @php
            $highlights = [
                [
                    'title' => 'Design imponente e carroçaria robusta',
                    'img' => 'Extra-large.avif',
                    'video' => '',
                    'stats' => [
                        ['label' => 'Comprimento', 'value' => '5.295', 'unit' => 'mm'],
                        ['label' => 'Largura', 'value' => '1.980', 'unit' => 'mm'],
                        ['label' => 'Altura', 'value' => '1.869', 'unit' => 'mm'],
                        ['label' => 'Entre-eixos', 'value' => '3.010', 'unit' => 'mm'],
                    ],
                ],
                [
                    'title' => 'Assentos luxuosos para uma experiência extraordinária',
                    'img' => 'assentos.avif',
                    'video' => '',
                    'stats' => [
                        ['label' => 'Bilateral', 'value' => 'Assentos Zero-Gravidade', 'unit' => ''],
                        ['label' => 'Dez Airbags', 'value' => 'Sistema de Relaxamento Lombar e Dorsal', 'unit' => ''],
                        ['label' => 'Três Fases', 'value' => 'Ventilação dos Assentos', 'unit' => ''],
                        ['label' => 'Três Fases', 'value' => 'Aquecimento dos Assentos', 'unit' => ''],
                    ],
                ],
                [
                    'title' => 'Grande Autonomia, Potência Emocionante',
                    'img' => 'capacidade.avif',
                    'video' => '',
                    'stats' => [
                        ['label' => 'Autonomia Híbrida WLTC', 'value' => '1.115', 'unit' => 'km'],
                        ['label' => 'Autonomia Eléctrica WLTC', 'value' => '235', 'unit' => 'km'],
                        ['label' => 'Aceleração 0-100 km/h', 'value' => '5.5', 'unit' => 's'],
                        ['label' => 'Saída V2L', 'value' => '4.4（2.2kW V2L + 2.2kW 220V）', 'unit' => 'kW'],
                    ],
                ],
                [
                    'title' => 'Condução Assistida Completa para Viagens Sem Limites',
                    'img' => 'conducao.avif',
                    'video' => '',
                    'stats' => [
                        ['label' => 'Desempenho Inteligente', 'value' => 'Em qualquer terreno', 'unit' => ''],
                    ],
                ],
                [
                    'title' => 'Protecção Inabalável para Segurança Total',
                    'img' => 'proteccao.avif',
                    'video' => '',
                    'stats' => [
                        ['label' => 'Carroçaria', 'value' => 'Aço de alta resistência', 'unit' => '>80%'],
                        ['label' => 'Estrutura', 'value' => 'Aço boro conformado a quente', 'unit' => '>25%'],
                        ['label' => 'Resistência máxima do tejadilho', 'value' => 'Resistência máxima', 'unit' => '59.730 N'],
                    ],
                ],
            ];
        @endphp

        <div class="relative w-full">
            <div class="flex items-stretch" id="hl-track">
                @foreach($highlights as $i => $hl)
                <div class="hl-slide flex-shrink-0 transition-opacity duration-500">
                    <div class="relative aspect-[16/9] overflow-hidden bg-black">
                        @if($hl['video'])
                        <video class="w-full h-full object-cover" poster="{{ asset('assets/' . $hl['img']) }}" autoplay muted loop playsinline>
                            <source src="{{ asset('assets/' . $hl['video']) }}" type="video/mp4">
                        </video>
                        @else
                        <img src="{{ asset('assets/' . $hl['img']) }}" alt="{{ $hl['title'] }}" class="w-full h-full object-cover">
                        @endif

                        <!-- Title top center -->
                        <div class="absolute top-6 md:top-10 left-0 right-0 px-8 text-center">
                            <h3 class="text-lg md:text-2xl lg:text-3xl font-light text-white drop-shadow-md">{{ $hl['title'] }}</h3>
                        </div>

                        <!-- Stats bottom -->
                        <div class="absolute bottom-6 md:bottom-8 lg:bottom-10 left-0 right-0 px-6 md:px-8 lg:px-14">
                            <div class="flex flex-wrap md:flex-nowrap gap-x-5 lg:gap-x-10 gap-y-3">
                                @foreach($hl['stats'] as $stat)
                                <div class="text-white basis-[45%] md:basis-0 md:flex-1 md:min-w-0">
                                    <p class="text-[11px] lg:text-sm font-light text-gray-200 mb-1">{{ $stat['label'] }}</p>
                                    <p class="text-xs md:text-sm lg:text-base font-semibold leading-snug">{{ $stat['value'] }}@if($stat['unit']) <span class="font-normal">{{ $stat['unit'] }}</span>@endif</p>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <p class="text-[11px] md:text-xs text-gray-400 font-light mt-3">*As especificações variam consoante a versão do modelo. Consulte a tabela de especificações para mais detalhes.</p>
                </div>
                @endforeach
            </div>
        </div>

        <!-- Arrows -->
        <div class="flex justify-center items-center gap-4 mt-6 md:mt-8">
            <button id="hl-prev" class="w-11 h-11 md:w-12 md:h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-700 hover:border-black hover:text-black transition-colors cursor-pointer" aria-label="Anterior">
                <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
            </button>
            <button id="hl-next" class="w-11 h-11 md:w-12 md:h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-700 hover:border-black hover:text-black transition-colors cursor-pointer" aria-label="Seguinte">
                <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
            </button>
        </div>
    </section>

    <!-- 360 Viewer Section -->
    <section class="pt-20 pb-14 md:pt-24 md:pb-24 bg-[#F5F6F7] relative overflow-hidden">
        <div class="relative z-10 max-w-[1600px] mx-auto px-6 md:px-8 mb-8 md:mb-10">
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6">
                <h2 class="text-2xl md:text-3xl lg:text-[2rem] font-semibold tracking-tight text-[#191919] max-w-md animate-up">SUV de Luxo Todo-o-Terreno para Cenário Completo</h2>
                <div class="flex flex-col md:items-end gap-4 animate-up">
                    <div class="flex gap-6">
                        <button id="viewer-tab-ext" class="text-sm md:text-base pb-1 border-b-2 border-black text-black font-medium transition-colors cursor-pointer">Exterior</button>
                        <button id="viewer-tab-int" class="text-sm md:text-base pb-1 border-b-2 border-transparent text-gray-400 hover:text-gray-600 transition-colors cursor-pointer">Interior</button>
                    </div>
                    <div class="flex flex-nowrap gap-3 md:gap-4" id="exterior-swatches">
                        @php
                            $rox01ExteriorColors = [
                                ['key' => 'white', 'name' => 'Polar White', 'swatch' => 'white exterior.png'],
                                ['key' => 'gray', 'name' => 'Gloaming Gray', 'swatch' => 'grey exterior.png'],
                                ['key' => 'black', 'name' => 'Starlit Night Black', 'swatch' => 'black exterior.png'],
                            ];
                        @endphp
                        @foreach($rox01ExteriorColors as $color)
                            <div class="relative group">
                                <button class="exterior-color-swatch h-8 w-8 overflow-hidden rounded-full border-2 transition-none md:h-9 md:w-9 {{ $loop->first ? 'border-black p-0.5' : 'border-transparent' }}" data-color="{{ $color['key'] }}" aria-label="{{ $color['name'] }}" aria-pressed="{{ $loop->first ? 'true' : 'false' }}">
                                    <img src="{{ asset('assets/rox_1/interior/swatches/' . $color['swatch']) }}" alt="" class="h-full w-full rounded-full object-cover pointer-events-none">
                                </button>
                                <span class="pointer-events-none absolute left-1/2 top-full z-10 mt-2 w-max -translate-x-1/2 rounded bg-black px-2 py-1 text-xs text-white opacity-0 transition-opacity duration-200 group-hover:opacity-100">{{ $color['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="hidden flex flex-nowrap items-center justify-end gap-4 md:gap-6" id="interior-controls">
                        <button class="interior-layout-button shrink-0 border border-black bg-[#191919] px-5 py-2.5 text-xs font-medium tracking-wide text-white transition-none" data-layout="6-seater" aria-pressed="true">6-seater</button>
                        <button class="interior-layout-button shrink-0 border border-black bg-transparent px-5 py-2.5 text-xs font-medium tracking-wide text-black transition-none" data-layout="7-seater" aria-pressed="false">7-seater</button>
                        @php
                            $rox01InteriorColors = [
                                ['key' => 'Amber Orange', 'name' => 'Amber Orange', 'swatch' => 'orange interior.png'],
                                ['key' => 'Jade White', 'name' => 'Jade White', 'swatch' => 'white interior.png'],
                                ['key' => 'Pearl Black', 'name' => 'Pearl Black', 'swatch' => 'black interior.png'],
                            ];
                        @endphp
                        @foreach($rox01InteriorColors as $color)
                            <div class="relative group">
                                <button class="interior-color-swatch h-9 w-9 shrink-0 overflow-hidden rounded-full border-2 transition-none {{ $loop->first ? 'border-[#E5793C] p-0.5' : 'border-transparent' }}" data-color="{{ $color['key'] }}" aria-label="{{ $color['name'] }}" aria-pressed="{{ $loop->first ? 'true' : 'false' }}">
                                    <img src="{{ asset('assets/rox_1/interior/swatches/' . $color['swatch']) }}" alt="" class="h-full w-full rounded-full object-cover pointer-events-none">
                                </button>
                                <span class="pointer-events-none absolute left-1/2 top-full z-10 mt-2 w-max -translate-x-1/2 rounded bg-black px-2 py-1 text-xs text-white opacity-0 transition-opacity duration-200 group-hover:opacity-100">{{ $color['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="relative mx-auto w-full max-w-[1600px] cursor-none select-none touch-pan-y overflow-hidden" id="viewer-container">
            <div id="exterior-viewer-decor">
                <div class="absolute inset-x-0 bottom-0 h-2/5 bg-gradient-to-t from-[#E9EBED] to-transparent pointer-events-none"></div>
                <div class="absolute left-1/2 -translate-x-1/2 bottom-[16%] w-[58%] max-w-[760px] aspect-[3.6/1] rounded-[50%] border border-gray-300/50 pointer-events-none"></div>
            </div>
            <canvas id="viewer-canvas" class="relative mx-auto block w-full max-h-[76vh] object-contain"></canvas>
            <div id="interior-viewer" class="hidden relative aspect-[1.92/1] w-full overflow-hidden bg-black">
                <img id="interior-image" src="{{ asset('assets/rox_1/interior/6-seater/Amber Orange.jpg') }}" alt="Interior ROX 01 6-seater em Amber Orange" class="absolute inset-0 h-full w-full object-cover object-center">
            </div>
            <div id="icon-360" class="absolute flex flex-col items-center justify-center w-16 h-16 md:w-20 md:h-20 bg-[#2A2A2A]/90 backdrop-blur-sm rounded-full text-white transition-opacity duration-300 pointer-events-none shadow-xl z-50 opacity-0 transform -translate-x-1/2 -translate-y-1/2">
                <span class="text-sm md:text-base font-medium tracking-wider mb-[-2px]">360&deg;</span>
                <svg class="w-6 h-6 md:w-8 md:h-8 text-white mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M 6 13 A 7 3 0 0 0 18 13 M 15 16 L 18 13 L 15 10" />
                </svg>
            </div>
            <div id="viewer-loading" class="absolute inset-0 flex items-center justify-center bg-[#F5F6F7] transition-opacity duration-300 z-40">
                <div class="w-8 h-8 border-4 border-gray-200 border-t-black rounded-full animate-spin"></div>
            </div>
        </div>
    </section>

    <!-- Design Features Section -->
    <section class="bg-white">
        @php
            $designFeatures = [
                [
                    'title' => 'Design robusto de linhas clássicas',
                    'desc' => 'O veículo apresenta linhas de carroçaria nítidas e um tecto recto, criando uma silhueta ousada e clássica que transmite uma presença forte e poderosa.',
                    'img' => 'boxed.avif',
                    'video' => '',
                ],
                [
                    'title' => 'Faróis inspirados no carácter chinês "石" (pedra)',
                    'desc' => 'Inspirados na forma do carácter chinês "石" (pedra), os faróis dianteiros e traseiros incorporam elementos tridimensionais, criando uma estética espacial distinta.',
                    'img' => 'banner2.avif',
                    'video' => '',
                ],
                [
                    'title' => 'Porta traseira com fecho suave eléctrico',
                    'desc' => 'Para viagens que desafiam os elementos, a porta traseira desliza com suavidade, selando poeira e detritos, preservando a pureza da sua aventura.',
                    'img' => 'showroom.jpg',
                    'video' => '',
                ],
            ];
        @endphp

        @foreach($designFeatures as $i => $feature)
        <div class="relative h-[70vh] md:h-screen w-full overflow-hidden">
            @if($feature['video'])
            <video class="absolute inset-0 w-full h-full object-cover" poster="{{ asset('assets/' . $feature['img']) }}" autoplay muted loop playsinline>
                <source src="{{ asset('assets/' . $feature['video']) }}" type="video/mp4">
            </video>
            @else
            <img src="{{ asset('assets/' . $feature['img']) }}" alt="{{ $feature['title'] }}" class="absolute inset-0 w-full h-full object-cover">
            @endif
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <div class="absolute bottom-0 left-0 right-0 pb-12 md:pb-20">
                <div class="content-container">
                    <h2 class="text-2xl md:text-4xl font-light text-white mb-3 animate-up">{{ $feature['title'] }}</h2>
                    <p class="text-sm md:text-base font-light text-gray-300 max-w-xl animate-up">{{ $feature['desc'] }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <!-- All-terrain Capabilities Section -->
    <section class="bg-white">
        <!-- Wide landscape background with overlay heading -->
        <div class="relative w-full aspect-[16/7] md:aspect-[16/6] overflow-hidden">
            <img src="{{ asset('assets/banner1_en.jfif') }}" alt="Capacidades Todo-o-Terreno" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
            <div class="absolute bottom-8 md:bottom-14 left-0 right-0">
                <div class="content-container">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-light text-white mb-2 md:mb-3">Capacidades Todo-o-Terreno</h2>
                    <p class="text-sm md:text-base font-light text-white/90">Potenciando cada viagem com possibilidades infinitas.</p>
                </div>
            </div>
        </div>

        @php
            $terrainCards = [
                [
                    'title' => 'Performance',
                    'desc' => 'Além das expectativas, liberdade sem limites.',
                    'img' => 'banner2_global.jfif',
                    'blocks' => [
                        [ 
                        'img' => 'performence-fallback2.avif',
                        'video' => 'performance.mp4',
                        'heading' => 'Confiança a longo prazo', 
                        'desc' => '- Bateria de grande capacidade (56 kWh) e depósito de combustível extragrande (70 litros)
                        - Autonomia híbrida WLTC: 1 115 km
                        - Autonomia elétrica WLTC: 235 km

                        * As especificações variam consoante a versão do modelo. Consulte a tabela de especificações para obter mais detalhes', 
                        
                    ],
                        ['img' => 'performance2.avif', 
                        'heading' => 'Tração integral com dois motores de alto desempenho', 
                        'desc' => '- Binário máximo: 740 N·m
                        - Potência máxima: 350 kW
                        - Aceleração de 0 a 100 km/h: 5,5 s'
                        ],

                        ['img' => 'performance3.avif', 
                        'heading' => 'Chassis totalmente em alumínio', 
                        'desc' => 'O veículo possui um chassis totalmente em alumínio, o que reduz o peso total, oferecendo, ao mesmo tempo, uma resistência, ductilidade, resistência à corrosão e condutividade térmica excecionais. Estas características melhoram significativamente o desempenho, a segurança e a durabilidade do veículo em todos os tipos de terreno, ao mesmo tempo que melhoram a experiência de condução dos ocupantes.'
                        ],

                         ['img' => 'performance-fallbck.avif', 
                        'heading' => 'Suspensão dianteira de braços duplos + suspensão traseira multibraço com braço em H', 
                        'desc' => '- As suspensões dianteira e traseira, inteiramente em alumínio, reduzem significativamente a massa não suspensa, melhorando tanto a manobrabilidade como o conforto durante a condução.
                        - A suspensão dianteira utiliza um sistema de braços duplos, enquanto a traseira recorre a uma estrutura multibraço com braços em H. Esta combinação garante um controlo preciso do ângulo das rodas e um melhor contacto dos pneus com a superfície da estrada.
                        - Com a sua extraordinária flexibilidade de ajuste, o ROX 01 oferece uma vasta gama de configurações de suspensão, permitindo aos utilizadores enfrentar sem esforço terrenos diversos e exigentes.'
                        ],

                        ['img' => 'performance-fallback1.avif', 
                        'video' => 'performance_video.mp4',
                        'heading' => 'Suspensão dianteira de braços duplos + suspensão traseira multibraço com braço em H', 
                        'desc' => '- As suspensões dianteira e traseira, inteiramente em alumínio, reduzem significativamente a massa não suspensa, melhorando tanto a manobrabilidade como o conforto durante a condução.
                        - A suspensão dianteira utiliza um sistema de braços duplos, enquanto a traseira recorre a uma estrutura multibraço com braços em H. Esta combinação garante um controlo preciso do ângulo das rodas e um melhor contacto dos pneus com a superfície da estrada.
                        - Com a sua extraordinária flexibilidade de ajuste, o ROX 01 oferece uma vasta gama de configurações de suspensão, permitindo aos utilizadores enfrentar sem esforço terrenos diversos e exigentes.'
                        ],

                         ['img' => 'performance5.avif', 
                        'video' => 'performance_video4.mp4',
                        'heading' => 'Excelente capacidade todo-o-terreno', 
                        'desc' => '- Ângulo de aproximação: 22,2°, Ângulo de saída: 25,1°, Ângulo de rampa: 19,7°
                        - Distância ao solo do conjunto de baterias: 255 mm
                        - Inclinação máxima de subida: 100% (Ângulo máximo de subida: 45°)
                        - Profundidade máxima de travessia: 700 mm
                        - Curso máximo entre eixos: 600 mm'
                        ],

                         ['img' => 'performance6.avif', 
                        'video' => 'performance_video6.mp4',
                        'heading' => 'Modos especiais de terreno', 
                        'desc' => 'Seja em areia, água, neve, lama ou terrenos montanhosos, o veículo ajusta de forma inteligente a distribuição de potência, as configurações do chassis e a lógica do ESP, tornando a exploração e a aventura mais fáceis e seguras.'
                        ],
                         ['img' => 'performance7.avif', 
                        'video' => '',
                        'heading' => 'Raio mínimo de viragem: 5,98 m', 
                        'desc' => 'Seja em areia, água, neve, lama ou terrenos montanhosos, o veículo ajusta de forma inteligente a distribuição de potência, as configurações do chassis e a lógica do ESP, tornando a exploração e a aventura mais fáceis e seguras.'
                        ],
                    ],
                ],
                [
                    'title' => 'Segurança',
                    'desc' => 'Um escudo protector em todos os terrenos',
                    'img' => 'banner3_safety.jfif',
                    'blocks' => [
                        ['img' => 'safety1.avif', 
                        'heading' => 'Carroçaria de alta resistência', 
                        'desc' => '- Mais de 87 % da carroçaria é constituída por aço de alta resistência, sendo que mais de 32 % é fabricada em aço ao boro moldado a quente.
                        - Desfrute de uma segurança inigualável com o ROX 01, que obteve uma classificação de cinco estrelas no C-NCAP e uma pontuação perfeita no teste de colisão do CIRI.'
                        ],

                        ['img' => 'safety2.avif',
                        'video' => 'safety_video1.mp4', 
                        'heading' => 'Telhado de alta resistência', 
                        'desc' => '- Resistência máxima do tejadilho de 159 730 N, estabelecendo um novo recorde nos ensaios de colisão do CIRI.
                        - Em caso de capotamento, garante a integridade da cabina, proporcionando mais espaço de sobrevivência a todos os ocupantes.
                        * Estes dados batem o recorde do CIRI a 16 de agosto de 2024.'],

                        ['img' => 'safety3.avif', 
                        'heading' => 'Segurança Avançada das Baterias', 
                        'desc' => 'A bateria de lítio ternário da série 5 da CATL oferece um controlo de temperatura superior e funcionalidades de segurança melhoradas. Inclui isolamento ignífugo, sistemas direcionais de alívio de pressão e de escape, arrefecimento ativo inteligente, corte rápido com fusíveis inteligentes, monitorização dinâmica abrangente do BMS e alertas ativos baseados em big data. Estas tecnologias garantem a conformidade com a norma de segurança «sem chama aberta».'],
                    ],
                ],
            ];
        @endphp

        <div class="content-container py-6 md:py-10">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                @foreach($terrainCards as $card)
                <div class="card-more relative aspect-[16/11] overflow-hidden group md:cursor-none" data-title="{{ $card['title'] }}" data-subtitle="{{ $card['desc'] }}">
                    @if(!empty($card['video']))
                    <video class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" @if(!empty($card['img'])) poster="{{ asset('assets/' . $card['img']) }}" @endif autoplay muted loop playsinline>
                        <source src="{{ asset('assets/' . $card['video']) }}" type="video/mp4">
                    </video>
                    @else
                    <img src="{{ asset('assets/' . $card['img']) }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    @endif
                    <div class="absolute inset-0 bg-black/10"></div>
                    <!-- Title + desc top center -->
                    <div class="absolute top-8 md:top-12 left-0 right-0 px-6 text-center text-white">
                        <h3 class="text-2xl md:text-3xl font-medium mb-2 drop-shadow">{{ $card['title'] }}</h3>
                        <p class="text-sm md:text-base font-light text-white/90 drop-shadow">{!! nl2br(e($card['desc'])) !!}</p>
                    </div>
                    <!-- More button bottom center -->
                    <div class="absolute bottom-6 md:bottom-8 left-0 right-0 flex justify-center">
                        <span class="flex items-center gap-2 bg-white/25 backdrop-blur-sm text-white text-xs md:text-sm font-medium pl-4 pr-1.5 py-1.5 rounded-full group-hover:bg-white/40 transition-colors">
                            mais
                            <span class="w-5 h-5 md:w-6 md:h-6 rounded-full bg-white/30 flex items-center justify-center">
                                <svg class="w-3 h-3 md:w-3.5 md:h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                            </span>
                        </span>
                    </div>
                    <!-- Hidden detail content for modal -->
                    <div class="card-detail hidden">
                        @foreach($card['blocks'] as $block)
                        <div>
                            <div class="w-full overflow-hidden">
                                @if(!empty($block['video']))
                                <video class="w-full h-auto block" @if(!empty($block['img'])) poster="{{ asset('assets/' . $block['img']) }}" @endif autoplay muted loop playsinline>
                                    <source src="{{ asset('assets/' . $block['video']) }}" type="video/mp4">
                                </video>
                                @else
                                <img src="{{ asset('assets/' . $block['img']) }}" alt="{{ $block['heading'] }}" class="w-full h-auto">
                                @endif
                            </div>
                            <div class="bg-[#F6F7F8] px-5 md:px-7 py-5 md:py-6">
                                <h3 class="text-base md:text-xl font-medium text-[#191919] mb-2">{{ $block['heading'] }}</h3>
                                <div class="text-sm md:text-base font-light text-gray-500 space-y-3">{!! rich_text($block['desc']) !!}</div>
                            </div>
                        </div>
                        @endforeach
                        <p class="text-xs md:text-sm font-light text-gray-400 px-6 md:px-10 py-6">* As imagens são meramente ilustrativas, podendo o veículo efetivamente entregue diferir.</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Versatile for Every Occasion Section -->
    <section class="bg-white">
        <!-- Wide lifestyle image with overlay heading -->
        <div class="relative w-full aspect-[16/8] md:aspect-[16/7] overflow-hidden">
            <img src="{{ asset('assets/banner1_g.jfif') }}" alt="Versatilidade para Cada Ocasião" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
            <div class="absolute bottom-8 md:bottom-14 left-0 right-0">
                <div class="content-container">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-light text-white mb-2 md:mb-3">Versatilidade para Cada Ocasião</h2>
                    <p class="text-sm md:text-base font-light text-white/90">Embarque em viagens com a sua família, criando momentos inesquecíveis juntos.</p>
                </div>
            </div>
        </div>

        @php
            $versatileCards = [
                [
                    'title' => 'Conforto', 
                    'desc' => 'Diga adeus à fadiga ao volante e aproveite a viagem.', 
                    'img' => 'banner3_global.jfif',
                    'blocks' => [
                        ['img' => 'comfort.jfif', 
                        'heading' => 'Seleção de materiais de luxo para os bancos', 
                        'desc' => 'Os bancos são estofados em couro Nappa de grão integral de alta qualidade, proporcionando uma sensação de elegância suave e requintada. Complementados por acabamentos em madeira de freixo branco com texturas naturais, conferem um toque de frescura e requinte à experiência de viagem.'],

                        ['img' => 'comfort2.avif', 
                        'heading' => 'Assentos com função de massagem', 
                        'desc' => 'Equipado com um sistema de relaxamento lombar e das costas com 10 airbags: incluindo apoio lombar elétrico de 2 pontos e massagem completa das costas em 8 pontos. Diga adeus à fadiga ao volante e desfrute de uma viagem confortável.'
                        ],

                        ['img' => 'comfort3.avif', 
                        'heading' => 'Bancos ventilados', 
                        'desc' => 'Os bancos ventilados de 3 níveis mantêm-no fresco e confortável durante as viagens de verão.'
                        ],
                         
                        ['img' => 'comfort4.avif', 
                        'heading' => 'Bancos aquecidos', 
                        'desc' => 'O sistema de aquecimento dos bancos de 3 níveis mantém-no quente e confortável nas viagens de carro durante o inverno frio.'
                        ],

                        ['img' => 'comfort5.avif', 
                        'video' => 'comfort5.mp4',
                        'heading' => 'Assentos bilaterais de gravidade zero', 
                        'desc' => 'Com um clique, desfrute de uma experiência de primeira classe para duas pessoas, que oferece luxo e conforto inigualáveis.'
                        ],
                    ],
                ],
                [
                    'title' => 'Espaço Amplo', 'desc' => 'Experimente liberdade sem limites e conforto absoluto no interior.', 'img' => 'banner4_global.jfif',
                    'blocks' => [
                        ['img' => 'expansive.jfif', 
                        'heading' => 'Uma ampla área total de janelas de 6,54 metros quadrados', 
                        'desc' => 'Desfrute de vistas infinitas que transformam cada viagem de carro numa viagem visual.'
                        ],

                        ['img' => 'expansive2.avif',
                         'heading' => 'Conforto em todos os lugares', 
                         'desc' => 'Espaço total para passageiros: 2 693 mm
                            - Espaço para as pernas na 1.ª fila: até 1 100 mm
                            - Espaço para as pernas na 2.ª fila: até 1 180 mm
                            - Espaço para as pernas na 3.ª fila: até 1 030 mm
                            *As especificações e os dados aplicam-se apenas à versão de 6 lugares.'
                        ],

                        ['img' => 'expansive3.avif',
                         'heading' => '2,95 metros quadrados de área útil plana', 
                         'desc' => '- Ligação perfeita entre a 2.ª e a 3.ª filas para uma viagem sem obstáculos.
                            - Diga adeus aos bancos apertados: a terceira fila já não é um «lugar temporário».'
                        ],

                        ['img' => 'expansive4.avif',
                         'heading' => 'Um corredor central extra-largo na 2.ª fila', 
                         'desc' => 'The spacious and convenient aisle makes boarding and exiting effortless, ideal for family trips.

                        * As especificações e os dados aplicam-se apenas à versão de 7 lugares.'
                        ],

                        ['img' => 'expansive5.avif',
                        'video' => 'expansive5.mp4',
                         'heading' => 'Modo de cama individual e modo de cama king-size', 
                         'desc' => '- Modo de cama individual: Pode ser facilmente transformada numa cama para um descanso rápido e repousante.
                                    - Modo de cama king-size: Com apenas um toque, transforma-se numa cama de dois metros, permitindo-lhe relaxar em qualquer lugar.
                                   
                                    * As especificações e os dados aplicam-se apenas à versão de 7 lugares.'            
                        ],

                         ['img' => 'expansive6.avif',
                         'heading' => 'Porta-bagagens de grande capacidade', 
                         'desc' => '- Capacidade total: Cabe facilmente uma bagagem de porão de 28 polegadas, duas bagagens de mão de 20 polegadas e várias malas de viagem.
                        - 3.ª fila rebatida: Aumenta a profundidade da bagageira para 1,2 metros, oferecendo espaço amplo para o equipamento de campismo de toda a família.
                        - 2.ª e 3.ª filas rebatidas: Aumenta a profundidade da bagageira para 2,07 metros, acomodando facilmente todo o seu equipamento de atividades ao ar livre.
                        
                        *As especificações e os dados aplicam-se apenas à versão de 7 lugares.'            
                        ],
                    ],
                ],
                [
                    'title' => 'Versatilidade', 'desc' => 'Conduza com liberdade, onde a alegria da viagem vai além do veículo.', 'img' => 'banner5_global.jfif',
                    'blocks' => [
                        ['img' => 'versatility.jfif', 
                        'heading' => 'Modo de acampamento', 
                        'desc' => 'Configuração da cama com um único toque e alarme ao nascer do sol.
                        
                        * As especificações variam consoante a versão do modelo. Consulte a tabela de especificações para obter mais detalhes.'],


                        [
                        
                        'img' => 'versatility2.jfif', 
                        'heading' => 'Fortaleza da Energia', 
                        'desc' => '- Com uma bateria de grande capacidade de 56 kWh, um depósito de combustível de grande capacidade com 70 litros e 10 kW de geração de energia no local, desfrutará de total liberdade para alimentar as suas aventuras.
                        - As duas portas de saída V2L de 2,2 kW podem funcionar em simultâneo, fornecendo um total de 4,4 kW de potência.
                        
                        *As especificações variam consoante a versão do modelo. Consulte a tabela de especificações para obter mais detalhes.'
                        
                        ],

                        [
                        
                        'img' => 'versatility3.avif', 
                        'heading' => 'Bar de cozinha para festas no parque de estacionamento', 
                        'desc' => '- Dispensador de água quente instantânea (aquece em 3 segundos): Escolha entre água à temperatura ambiente, morna ou a ferver.
                        - Bancada iluminada: Compatível com fogões de indução, fritadeiras sem óleo e outros eletrodomésticos, proporcionando uma cozinha flexível para preparar refeições deliciosas a qualquer hora.
                        
                       *Disponível para compra através de revendedores locais.'
                        ],

                         [
                        
                        'img' => 'versatility4.jfif', 
                        'heading' => 'Toldo para carro em forma de L de montagem rápida', 
                        'desc' => '- Este toldo para automóvel de 270° pode ser aberto ou recolhido por uma única pessoa em apenas 5 minutos.
                        - O toldo de 13 metros quadrados acomoda confortavelmente entre 6 e 7 pessoas.
                        - Tecido com revestimento prateado que protege do sol, capaz de resistir a ventos de nível 7.
                       
                       *Disponível para compra através de revendedores locais.'
                        ],

                        [
                        
                        'img' => 'versatility5.avif', 
                        'heading' => 'Barra de tejadilho', 
                        'desc' => 'Aumenta o espaço de arrumação leve no tejadilho para responder às diversas necessidades de viagem.
                        
                        * Disponível para compra através de revendedores locais.'
                        ],

                          [
                        
                        'img' => 'cockpit.avif', 
                        'heading' => 'Barra de tejadilho', 
                        'desc' => 'Aumenta o espaço de arrumação leve no tejadilho para responder às diversas necessidades de viagem.
                        
                        * Disponível para compra através de revendedores locais.'
                        ],
                    ],
                ],
                [
                    'title' => 'Cockpit Inteligente', 
                    'desc' => 'Acompanhando cada viagem, revelando diversão sem limites.', 
                    'img' => 'banner6_global.jfif',

                    'blocks' => [
                        ['img' => 'cockpit.avif',
                        'video' => 'cockpit.mp4',
                        'heading' => 'Interação no cockpit inteligente com quatro ecrãs', 
                        'desc' => '- Ecrã de controlo central ultra-nítido de 15,7 polegadas com resolução 3K, painel de instrumentos de alta definição de 12,3 polegadas e ecrã HD de 15,6 polegadas para os passageiros da segunda fila.
                        - Espelho retrovisor com ecrã de 9 polegadas e transmissão em direto, com alternância entre dois modos de visualização.
                        - Equipado com o processador automóvel Qualcomm Snapdragon 8155, que permite uma integração perfeita entre vários ecrãs de alta definição.'
                        ],

                        [

                        'img' => 'comfort2.jfif', 
                        'heading' => 'Compatível com CarPlay e Screen Mirroring', 
                        'desc' => '- Ligue o seu smartphone ao seu veículo de forma integrada para desfrutar de uma navegação precisa, entretenimento envolvente e comunicação prática — tudo ao alcance dos seus dedos.
                        - Transforme cada viagem numa combinação perfeita de tecnologia inteligente e conforto máximo.
                        
                        *A interface efetiva pode variar consoante o estado do veículo entregue.'
                        
                        ],

                         [

                        'img' => 'cockpit5.avif', 
                        'video' => 'cockpit2.mp4',
                        'heading' => 'Sistema de som premium com 14 altifalantes', 
                        'desc' => 'O sistema de som surround de 7.1 canais realça a profundidade espacial e proporciona um áudio rico e envolvente, dando vida a cada viagem com uma qualidade de som excecional. Desfrute de um novo nível de experiência musical na estrada.'
                        
                        ],
                    ],
                ],
                
            ];
        @endphp

        <div class="py-6 md:py-10 overflow-hidden">
            <div class="flex px-4 md:px-6" id="vers-track">
                @foreach($versatileCards as $card)
                <div class="vers-slide flex-shrink-0 px-2 md:px-3">
                    <div class="card-more relative aspect-[16/11] overflow-hidden group md:cursor-none" data-title="{{ $card['title'] }}" data-subtitle="{{ $card['desc'] }}">
                        @if(!empty($card['video']))
                        <video class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" @if(!empty($card['img'])) poster="{{ asset('assets/' . $card['img']) }}" @endif autoplay muted loop playsinline>
                            <source src="{{ asset('assets/' . $card['video']) }}" type="video/mp4">
                        </video>
                        @else
                        <img src="{{ asset('assets/' . $card['img']) }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        @endif
                        <div class="absolute inset-0 bg-black/10"></div>
                        <div class="absolute top-8 md:top-12 left-0 right-0 px-6 text-center text-white">
                            <h3 class="text-2xl md:text-3xl font-medium mb-2 drop-shadow">{{ $card['title'] }}</h3>
                            <p class="text-sm md:text-base font-light text-white/90 drop-shadow max-w-md mx-auto">{!! nl2br(e($card['desc'])) !!}</p>
                        </div>
                        <div class="absolute bottom-6 md:bottom-8 left-0 right-0 flex justify-center">
                            <span class="flex items-center gap-2 bg-white/25 backdrop-blur-sm text-white text-xs md:text-sm font-medium pl-4 pr-1.5 py-1.5 rounded-full group-hover:bg-white/40 transition-colors">
                                mais
                                <span class="w-5 h-5 md:w-6 md:h-6 rounded-full bg-white/30 flex items-center justify-center">
                                    <svg class="w-3 h-3 md:w-3.5 md:h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15"/></svg>
                                </span>
                            </span>
                        </div>
                        <!-- Hidden detail content for modal -->
                        <div class="card-detail hidden">
                            @foreach($card['blocks'] as $block)
                            <div>
                                <div class="w-full overflow-hidden">
                                    @if(!empty($block['video']))
                                    <video class="w-full h-auto block" @if(!empty($block['img'])) poster="{{ asset('assets/' . $block['img']) }}" @endif autoplay muted loop playsinline>
                                        <source src="{{ asset('assets/' . $block['video']) }}" type="video/mp4">
                                    </video>
                                    @else
                                    <img src="{{ asset('assets/' . $block['img']) }}" alt="{{ $block['heading'] }}" class="w-full h-auto">
                                    @endif
                                </div>
                                <div class="bg-[#F6F7F8] px-5 md:px-7 py-5 md:py-6">
                                    <h3 class="text-base md:text-xl font-medium text-[#191919] mb-2">{{ $block['heading'] }}</h3>
                                    <div class="text-sm md:text-base font-light text-gray-500 space-y-3">{!! rich_text($block['desc']) !!}</div>
                                </div>
                            </div>
                            @endforeach
                            <p class="text-xs md:text-sm font-light text-gray-400 px-6 md:px-10 py-6">* As imagens são meramente ilustrativas, podendo o veículo efetivamente entregue diferir.</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Arrows -->
            <div class="flex justify-center items-center gap-4 mt-6 md:mt-8">
                <button id="vers-prev" class="w-11 h-11 md:w-12 md:h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-700 hover:border-black hover:text-black transition-colors cursor-pointer" aria-label="Anterior">
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18"/></svg>
                </button>
                <button id="vers-next" class="w-11 h-11 md:w-12 md:h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-700 hover:border-black hover:text-black transition-colors cursor-pointer" aria-label="Seguinte">
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3"/></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Specs Comparison Section -->
    <section class="py-16 md:py-24 bg-[#F4F5F6]">
        <div class="content-container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-start animate-up">
                <div>
                    <h2 class="text-2xl md:text-[2rem] font-medium text-black mb-6">Especificações do ROX 01</h2>
                    <a href="{{ route('especificacoes', 'rox-01') }}" class="inline-block px-6 py-2.5 text-xs font-medium tracking-widest uppercase border border-black text-black hover:bg-black hover:text-white transition-all duration-300 mb-12">Ver mais</a>
                    <div class="grid grid-cols-2 gap-x-10 gap-y-8">
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Entre-eixos</p>
                            <p class="text-lg font-semibold text-black">3.010 mm</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Capacidade da bateria</p>
                            <p class="text-lg font-semibold text-black">56,01 kWh</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Autonomia WLTC</p>
                            <p class="text-lg font-semibold text-black">1.115 km</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Autonomia eléctrica WLTC</p>
                            <p class="text-lg font-semibold text-black">235 km</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ asset('assets/car1.avif') }}" alt="ROX 01" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Fullscreen Video Player Modal -->
    <div id="video-modal" class="fixed inset-0 z-[200] bg-black hidden items-center justify-center">
        <button id="video-modal-close" class="absolute top-6 right-6 text-white hover:text-gray-300 transition-colors z-10 cursor-pointer">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
        </button>
        <video id="video-player" class="w-full h-full object-contain" controls>
            <source src="{{ asset('Dealer Feed Video ADAMAS - Subtitle free version.mp4') }}" type="video/mp4">
        </video>
    </div>

    <!-- Card Detail Modal -->
    <div id="card-modal" class="fixed inset-0 z-[200] hidden">
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
        <div class="relative h-full flex items-start md:items-center justify-center p-3 md:p-6">
            <div id="card-modal-dialog" class="relative bg-white w-full max-w-[760px] max-h-[88vh] md:max-h-[85vh] overflow-y-auto shadow-2xl">
                <div class="sticky top-0 z-10 flex justify-end pt-3 pr-3 md:pt-4 md:pr-4 pointer-events-none">
                    <button id="card-modal-close" class="pointer-events-auto text-gray-700 hover:text-black transition-colors cursor-pointer">
                        <svg class="w-5 h-5 md:w-6 md:h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
                <div class="px-4 md:px-7 pb-6 md:pb-8 -mt-3 md:-mt-4">
                    <div class="text-center mb-5 md:mb-7">
                        <h2 id="card-modal-title" class="text-xl md:text-3xl font-medium text-[#191919] mb-2"></h2>
                        <p id="card-modal-subtitle" class="text-sm font-light text-gray-500 max-w-xl mx-auto"></p>
                    </div>
                    <div id="card-modal-body" class="space-y-6 md:space-y-8"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom "mais" cursor -->
    <div id="more-cursor" class="fixed z-[150] pointer-events-none opacity-0 -translate-x-1/2 -translate-y-1/2 w-16 h-16 md:w-20 md:h-20 rounded-full bg-black/40 backdrop-blur-md border border-white/40 flex items-center justify-center text-white text-sm font-medium tracking-wide shadow-lg transition-opacity duration-200">mais</div>

    <!-- Page Scripts -->
    <script>
    // Highlights Slider (centered with side peeks, infinite loop)
    (function () {
        var track = document.getElementById('hl-track');
        var prevBtn = document.getElementById('hl-prev');
        var nextBtn = document.getElementById('hl-next');
        if (!track) return;

        var originals = Array.prototype.slice.call(track.children);
        var realCount = originals.length;
        if (!realCount) return;

        // Clone last -> prepend, first -> append for seamless looping
        track.insertBefore(originals[realCount - 1].cloneNode(true), originals[0]);
        track.appendChild(originals[0].cloneNode(true));

        var slides = Array.prototype.slice.call(track.children); // realCount + 2
        var GAP = 20;
        var domIndex = 1; // first real slide
        var isAnimating = false;

        function slideWidth() {
            var vw = window.innerWidth;
            return vw < 768 ? vw * 0.86 : vw * 0.66;
        }

        function updateActive() {
            slides.forEach(function (s, i) { s.style.opacity = (i === domIndex) ? '1' : '0.4'; });
        }

        function goTo(idx) {
            domIndex = idx;
            var vw = window.innerWidth;
            var s = slides[domIndex];
            var offset = (vw / 2) - (s.offsetLeft + s.offsetWidth / 2);
            track.style.transform = 'translateX(' + offset + 'px)';
            updateActive();
        }

        function layout() {
            var w = slideWidth();
            slides.forEach(function (s) { s.style.width = w + 'px'; s.style.marginRight = GAP + 'px'; });
            track.style.transition = 'none';
            goTo(domIndex);
            void track.offsetWidth;
            track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
        }

        function snap() {
            if (domIndex === 0) {
                track.style.transition = 'none';
                goTo(realCount);
                void track.offsetWidth;
                track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
            } else if (domIndex === realCount + 1) {
                track.style.transition = 'none';
                goTo(1);
                void track.offsetWidth;
                track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
            }
            isAnimating = false;
        }
        track.addEventListener('transitionend', function (e) {
            if (e.target !== track || e.propertyName !== 'transform') return;
            snap();
        });

        function next() { if (isAnimating) return; isAnimating = true; goTo(domIndex + 1); }
        function prev() { if (isAnimating) return; isAnimating = true; goTo(domIndex - 1); }
        if (nextBtn) nextBtn.addEventListener('click', next);
        if (prevBtn) prevBtn.addEventListener('click', prev);

        layout();
        window.addEventListener('resize', layout);

        var sx = 0, dx = 0;
        track.addEventListener('touchstart', function (e) { sx = e.touches[0].clientX; }, { passive: true });
        track.addEventListener('touchmove', function (e) { dx = e.touches[0].clientX - sx; }, { passive: true });
        track.addEventListener('touchend', function () {
            if (dx > 50) prev(); else if (dx < -50) next();
            dx = 0;
        });
    })();

    // Versatile cards slider (bounded, cards with side peek)
    (function () {
        var track = document.getElementById('vers-track');
        var prevBtn = document.getElementById('vers-prev');
        var nextBtn = document.getElementById('vers-next');
        if (!track) return;
        var slides = Array.prototype.slice.call(track.querySelectorAll('.vers-slide'));
        if (!slides.length) return;
        var idx = 0;

        function slideW() { var vw = window.innerWidth; return vw < 768 ? vw * 0.86 : vw * 0.46; }
        function maxIndex() { var vis = Math.max(1, Math.floor(window.innerWidth / slideW())); return Math.max(0, slides.length - vis); }

        function go(i) {
            idx = Math.max(0, Math.min(i, maxIndex()));
            track.style.transform = 'translateX(' + (-idx * slideW()) + 'px)';
            if (prevBtn) prevBtn.style.opacity = idx === 0 ? '0.4' : '1';
            if (nextBtn) nextBtn.style.opacity = idx >= maxIndex() ? '0.4' : '1';
        }
        function layout() {
            slides.forEach(function (s) { s.style.width = slideW() + 'px'; });
            go(idx);
        }

        track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
        if (nextBtn) nextBtn.addEventListener('click', function () { go(idx + 1); });
        if (prevBtn) prevBtn.addEventListener('click', function () { go(idx - 1); });
        layout();
        window.addEventListener('resize', layout);

        var vsx = 0, vdx = 0;
        track.addEventListener('touchstart', function (e) { vsx = e.touches[0].clientX; }, { passive: true });
        track.addEventListener('touchmove', function (e) { vdx = e.touches[0].clientX - vsx; }, { passive: true });
        track.addEventListener('touchend', function () {
            if (vdx > 50) go(idx - 1); else if (vdx < -50) go(idx + 1);
            vdx = 0;
        });
    })();

    // Custom "mais" cursor + card detail modal
    (function () {
        var cursor = document.getElementById('more-cursor');
        var modal = document.getElementById('card-modal');
        var dialog = document.getElementById('card-modal-dialog');
        var closeBtn = document.getElementById('card-modal-close');
        var titleEl = document.getElementById('card-modal-title');
        var subEl = document.getElementById('card-modal-subtitle');
        var bodyEl = document.getElementById('card-modal-body');
        var cards = document.querySelectorAll('.card-more');
        if (!modal || !cards.length) return;

        var isTouch = ('ontouchstart' in window) || navigator.maxTouchPoints > 0;

        cards.forEach(function (card) {
            if (!isTouch && cursor) {
                card.addEventListener('mouseenter', function () { cursor.style.opacity = '1'; });
                card.addEventListener('mouseleave', function () { cursor.style.opacity = '0'; });
                card.addEventListener('mousemove', function (e) {
                    cursor.style.left = e.clientX + 'px';
                    cursor.style.top = e.clientY + 'px';
                });
            }
            card.addEventListener('click', function () {
                var detail = card.querySelector('.card-detail');
                titleEl.textContent = card.getAttribute('data-title') || '';
                subEl.textContent = card.getAttribute('data-subtitle') || '';
                bodyEl.innerHTML = detail ? detail.innerHTML : '';
                modal.classList.remove('hidden');
                if (dialog) dialog.scrollTop = 0;
                document.body.style.overflow = 'hidden';
                if (cursor) cursor.style.opacity = '0';
            });
        });

        function close() {
            modal.classList.add('hidden');
            document.body.style.overflow = '';
        }
        if (closeBtn) closeBtn.addEventListener('click', close);
        // Close when clicking outside the dialog card
        modal.addEventListener('click', function (e) {
            if (dialog && !dialog.contains(e.target)) close();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) close();
        });
    })();
    </script>
</x-front-layout>
