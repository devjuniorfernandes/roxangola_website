<x-front-layout>
    <x-slot name="title">ROX 01 - SUV Híbrido</x-slot>

    <!-- Hero Section -->
    <section class="h-[100svh] w-full bg-cover bg-center relative flex items-end" style="background-image: url('{{ asset('assets/banner2.jpg') }}')">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="relative z-10 site-container pb-12 sm:pb-16 md:pb-20 w-full hero-animate">
            <img src="{{ asset('assets/rox01-global.svg') }}" alt="ROX 01" class="h-8 sm:h-10 md:h-14 mb-2 sm:mb-3">
            <p class="text-sm sm:text-base md:text-xl font-light text-gray-200 tracking-wide">
                SUV Todo-o-Terreno de Luxo — Cenário Completo
            </p>
        </div>
    </section>

    <!-- Specs Slider Section -->
    <section class="bg-black text-white py-20 md:py-32 overflow-hidden">
        <!-- Title -->
        <div class="content-container mb-14 md:mb-20 animate-up">
            <h3 class="text-sm md:text-base font-semibold tracking-wide mb-6">Luxo Todo-o-Terreno</h3>
            <p class="text-xl md:text-[2.5rem] font-light leading-relaxed md:leading-[1.4] max-w-5xl">O ROX 01 redefine o conceito de SUV de luxo todo-o-terreno, oferecendo sensações de condução excepcionais.</p>
        </div>

        <!-- Slider -->
        <div class="relative" id="specs-slider">
            @php
                $specSlides = [
                    [
                        'img' => 'rox01.jpg',
                        'title' => 'Protecção de Nível Superior',
                        'bottom' => '<p class="text-xs md:text-sm text-gray-400 mb-1">Resistência Recorde do Tecto</p><p class="text-lg md:text-xl font-medium">59.730 N</p>',
                    ],
                    [
                        'img' => 'lichengbei.jpg',
                        'title' => 'SUV Médio-Grande de Luxo',
                        'bottom' => '<div class="flex gap-6 md:gap-10 text-center justify-center flex-wrap"><div><p class="text-xs text-gray-400 font-medium tracking-wider uppercase mb-1">Comprimento</p><p class="text-sm md:text-base font-mono font-medium">5.298 mm</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider uppercase mb-1">Largura</p><p class="text-sm md:text-base font-mono font-medium">1.985 mm</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider uppercase mb-1">Altura</p><p class="text-sm md:text-base font-mono font-medium">1.856 mm</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider uppercase mb-1">Entre eixos</p><p class="text-sm md:text-base font-mono font-medium">3.010 mm</p></div></div>',
                    ],
                    [
                        'img' => 'banner1.jpg',
                        'title' => 'Testado em Todo o Mundo',
                        'bottom' => '<p class="text-xs md:text-sm text-gray-400 mb-1">Distância mínima ao solo 272mm</p><p class="text-lg md:text-xl font-medium">Ângulo de ataque 27.5°</p>',
                    ],
                    [
                        'img' => 'keji.jpg',
                        'title' => 'Cockpit Digital Imersivo',
                        'bottom' => '<p class="text-xs md:text-sm text-gray-400 mb-1">Ecrã panorâmico integrado</p><p class="text-lg md:text-xl font-medium">Conectividade total</p>',
                    ],
                ];
            @endphp

            <div class="flex gap-4" id="specs-track">
                @php $allSlides = array_merge([end($specSlides)], $specSlides, [$specSlides[0]]); @endphp
                @foreach($allSlides as $idx => $spec)
                <div class="specs-card relative flex-shrink-0 h-[400px] md:h-[520px] overflow-hidden">
                    <img src="{{ asset('assets/' . $spec['img']) }}" alt="{{ $spec['title'] }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent"></div>
                    <div class="absolute top-6 md:top-8 left-0 right-0 text-center px-6">
                        <h4 class="text-base md:text-lg font-medium text-white">{{ $spec['title'] }}</h4>
                    </div>
                    <div class="absolute bottom-6 md:bottom-8 left-6 md:left-8 right-6 md:right-8 text-white">
                        {!! $spec['bottom'] !!}
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Glassmorphism arrow controls inside center card -->
            <button id="specs-prev" class="absolute top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full flex items-center justify-center text-white hover:scale-110 transition-all duration-200" style="left: calc(50% - 20vw); background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
            </button>
            <button id="specs-next" class="absolute top-1/2 -translate-y-1/2 z-10 w-11 h-11 rounded-full flex items-center justify-center text-white hover:scale-110 transition-all duration-200" style="right: calc(50% - 20vw); background: rgba(255,255,255,0.15); backdrop-filter: blur(10px); -webkit-backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.2);">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
            </button>

            <!-- Pagination bars -->
            <div class="flex justify-center gap-2 mt-10" id="specs-dots">
                @foreach($specSlides as $idx => $spec)
                <button class="specs-dot w-10 h-[3px] transition-all duration-300 {{ $idx === 0 ? 'bg-white' : 'bg-gray-700' }}" data-index="{{ $idx }}"></button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Interior Gallery / Comfort Section -->
    <section class="py-16 md:py-24 bg-[#f4f6f9]" id="comfort-section">
        <!-- Custom Cursor -->
        <div id="comfort-cursor" class="fixed w-14 h-14 rounded-full pointer-events-none z-[60] opacity-0 transition-opacity duration-300 flex items-center justify-center" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); transform: translate(-50%, -50%);">
            <span class="text-white text-xs font-medium tracking-wide">mais</span>
        </div>
        <div class="content-container">
            <div class="text-center mb-12 md:mb-16 animate-up">
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Conforto em Primeira Classe</h2>
                <p class="text-gray-500 font-light max-w-2xl mx-auto text-sm md:text-base">Habitáculo desenhado ao detalhe para uma experiência de condução imersiva e relaxante, com tecnologia inteligente a bordo.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                <div class="comfort-card relative h-[300px] md:h-[500px] overflow-hidden group animate-up" style="cursor: none;">
                    <img src="{{ asset('assets/banner2.jpg') }}" alt="Interior Premium" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-1">Interior Premium</h3>
                            <p class="font-light text-xs md:text-sm text-gray-300">Materiais nobres e acabamentos de excelência.</p>
                        </div>
                        <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                    </div>
                </div>
                <div class="comfort-card relative h-[300px] md:h-[500px] overflow-hidden group animate-up" style="cursor: none;">
                    <img src="{{ asset('assets/keji.jpg') }}" alt="Tecnologia Inteligente" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-1">Tecnologia Inteligente</h3>
                            <p class="font-light text-xs md:text-sm text-gray-300">Painel digital imersivo e conectividade total.</p>
                        </div>
                        <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full-width Showcase Section -->
    <section class="relative bg-black" id="showcase-section">
        <!-- Video -->
        <div class="relative h-[100svh] w-full overflow-hidden">
            <video class="absolute inset-0 w-full h-full object-cover" autoplay loop muted playsinline poster="{{ asset('assets/banner.jpg') }}">
                <source src="{{ asset('Dealer Feed Video ADAMAS - Subtitle free version.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
                <div class="content-container">
                    <p id="showcase-label" class="text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6 opacity-0 translate-y-6" style="transition: opacity 0.7s ease-out, transform 0.7s ease-out;">ROX 01</p>
                    <h2 id="showcase-title" class="text-2xl md:text-4xl font-light text-white mb-4 md:mb-6 max-w-2xl leading-snug opacity-0 translate-y-6" style="transition: opacity 0.7s ease-out 0.15s, transform 0.7s ease-out 0.15s;">Feito para conquistar qualquer terreno com elegância</h2>
                </div>
            </div>
        </div>

        <!-- Cards below video -->
        <div class="relative pt-16 md:pt-24 pb-16 md:pb-24">
            <div class="absolute -top-40 left-0 right-0 h-40 bg-gradient-to-t from-black to-transparent"></div>
            <div class="content-container">
                <!-- Top: Full-width card -->
                <div class="relative h-[300px] md:h-[500px] overflow-hidden group mb-4 md:mb-6 animate-up">
                    <img src="{{ asset('assets/banner2.jpg') }}" alt="Tecnologia Inteligente" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-1">Tecnologia Inteligente</h3>
                            <p class="font-light text-xs md:text-sm text-gray-300">Inteligência total que coloca a tecnologia ao serviço de cada viagem.</p>
                        </div>
                        <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                    </div>
                </div>

                <!-- Bottom: Two cards side by side -->
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <div class="relative h-[250px] md:h-[400px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/keji.jpg') }}" alt="Comunidade ROX" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Comunidade ROX</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">A ROX leva-o em viagens por montanhas e mares.</p>
                            </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
                    <div class="relative h-[250px] md:h-[400px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/rox01.jpg') }}" alt="Marcos ROX" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Marcos ROX</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">No caminho da exploração, cada passo deixa a sua marca.</p>
                            </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
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

    <!-- 360 Viewer Section (Canvas Based) -->
    <section class="py-16 md:py-32 bg-[#F8F9FA] relative">
        <div class="max-w-[1280px] mx-auto text-center px-6 md:px-8">
            <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-8 md:mb-10 animate-up">Explorar ROX 01</h2>
            
            <div class="flex justify-center gap-4 md:gap-6 mb-8 md:mb-12 animate-up">
                <button class="color-swatch w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-300 shadow-sm transition-transform hover:scale-110 active-color ring-2 ring-offset-2 ring-black bg-[#E8E9EB]" data-color="white" aria-label="Branco"></button>
                <button class="color-swatch w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-300 shadow-sm transition-transform hover:scale-110 bg-[#7B7C7F]" data-color="gray" aria-label="Cinzento"></button>
                <button class="color-swatch w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-300 shadow-sm transition-transform hover:scale-110 bg-[#1D1E20]" data-color="black" aria-label="Preto"></button>
            </div>
        </div>

        <div class="relative w-full cursor-none select-none touch-pan-y overflow-hidden" id="viewer-container">
            <!-- 360 Canvas -->
            <canvas id="viewer-canvas" class="w-full max-h-[80vh] object-contain mx-auto"></canvas>
            
            <!-- 360 Custom Cursor Icon -->
            <div id="icon-360" class="absolute flex flex-col items-center justify-center w-16 h-16 md:w-20 md:h-20 bg-[#2A2A2A]/90 backdrop-blur-sm rounded-full text-white transition-opacity duration-300 pointer-events-none shadow-xl z-50 opacity-0 transform -translate-x-1/2 -translate-y-1/2">
                <span class="text-sm md:text-base font-medium tracking-wider mb-[-2px]">360&deg;</span>
                <svg class="w-6 h-6 md:w-8 md:h-8 text-white mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M 6 13 A 7 3 0 0 0 18 13 M 15 16 L 18 13 L 15 10" />
                </svg>
            </div>
            
            <!-- Loading Indicator -->
            <div id="viewer-loading" class="absolute inset-0 flex items-center justify-center bg-[#F8F9FA] transition-opacity duration-300">
                <div class="w-8 h-8 border-4 border-gray-200 border-t-black rounded-full animate-spin"></div>
            </div>
        </div>
    </section>

    <!-- Lifestyle Image Grid -->
    <section class="py-16 md:py-24 bg-white">
        <div class="content-container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                    <img src="{{ asset('assets/shequ.jpg') }}" alt="Aventuras Sem Limites" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-1">Aventuras Sem Limites</h3>
                            <p class="font-light text-xs md:text-sm text-gray-300">Capacidade excecional em piso não alcatroado.</p>
                        </div>
                        <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                    </div>
                </div>
                <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                    <img src="{{ asset('assets/banner1.jpg') }}" alt="Design Adaptável" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-1">Design Adaptável</h3>
                            <p class="font-light text-xs md:text-sm text-gray-300">Espaço de bagageira configurável para as suas viagens.</p>
                        </div>
                        <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lifestyle Slider -->
    <section class="py-16 md:py-24 bg-white overflow-hidden">
        <div class="relative" id="lifestyle-slider">
            <div id="slider-cursor" class="fixed w-14 h-14 rounded-full pointer-events-none z-[60] opacity-0 transition-opacity duration-300 flex items-center justify-center" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); transform: translate(-50%, -50%);">
                <span class="text-white text-xs font-medium tracking-wide">mais</span>
            </div>
            <div class="flex transition-transform duration-500 ease-out" id="slider-track">
                @php
                    $slides = [
                        ['img' => 'life.jpg', 'title' => 'Espaço Amplo', 'desc' => 'Liberdade sem limites e conforto absoluto no interior.'],
                        ['img' => 'banner1.jpg', 'title' => 'Versatilidade', 'desc' => 'Conduza com liberdade, onde a viagem vai além do veículo.'],
                        ['img' => 'services.jpg', 'title' => 'Aventura', 'desc' => 'Preparado para qualquer terreno, feito para explorar.'],
                        ['img' => 'banner2.jpg', 'title' => 'Tecnologia', 'desc' => 'Inovação inteligente ao serviço da sua condução.'],
                    ];
                @endphp
                @foreach($slides as $slide)
                <div class="slider-card relative flex-shrink-0 overflow-hidden group" style="cursor: none;">
                    <img src="{{ asset('assets/' . $slide['img']) }}" alt="{{ $slide['title'] }}" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/40 via-transparent to-transparent"></div>
                    <div class="absolute top-8 md:top-12 left-0 right-0 text-center text-white px-6">
                        <h3 class="text-2xl md:text-3xl font-medium mb-2">{{ $slide['title'] }}</h3>
                        <p class="font-light text-sm md:text-base text-gray-200 max-w-md mx-auto">{{ $slide['desc'] }}</p>
                    </div>
                    <a href="#" class="slide-btn absolute bottom-6 md:bottom-8 right-6 md:right-8 flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full transition-all duration-300 hover:bg-white/40">
                        mais <span class="w-5 h-5 rounded-full bg-white text-black flex items-center justify-center text-xs font-bold">+</span>
                    </a>
                </div>
                @endforeach
            </div>
            <div class="flex justify-center gap-1 mt-10">
                <button id="slider-prev" class="w-12 h-12 rounded-full border border-gray-300 bg-gray-100 text-gray-400 flex items-center justify-center transition-all duration-300 hover:bg-black hover:border-black hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                </button>
                <button id="slider-next" class="w-12 h-12 rounded-full border border-gray-300 bg-gray-100 text-gray-800 flex items-center justify-center transition-all duration-300 hover:bg-black hover:border-black hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Full-screen Feature Sections -->
    @php
        $features = [
            [
                'img' => 'lichengbei.jpg',
                'title' => 'Design robusto e imponente',
                'desc' => 'Linhas musculadas e proporções equilibradas que transmitem força e elegância em qualquer cenário.',
            ],
            [
                'img' => 'keji.jpg',
                'title' => 'Interior pensado ao detalhe',
                'desc' => 'Cada superfície, cada textura e cada comando foi desenhado para oferecer uma experiência de condução premium.',
            ],
            [
                'img' => 'shequ.jpg',
                'title' => 'Feito para a aventura em grupo',
                'desc' => 'Conquiste os terrenos mais exigentes ao lado de quem partilha a mesma paixão pela exploração.',
            ],
        ];
    @endphp

    @foreach($features as $i => $feature)
    <div class="feature-wrapper relative" style="height: 200vh;">
        <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
            <img src="{{ asset('assets/' . $feature['img']) }}" alt="{{ $feature['title'] }}" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <div class="absolute inset-0 flex items-end pb-[20%] md:pb-[15%]">
                <div class="content-container w-full">
                    <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-3 leading-snug max-w-2xl" style="opacity: 0; transform: translateY(40px);">{{ $feature['title'] }}</h2>
                    <p class="feature-desc text-sm md:text-base font-light text-gray-300 max-w-xl" style="opacity: 0; transform: translateY(40px);">{{ $feature['desc'] }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach

    <!-- Dark Features (Performance & Tech) -->
    <div class="feature-wrapper relative" style="height: 200vh;">
        <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section" id="performance-section">
            <img src="{{ asset('assets/banner1.jpg') }}" alt="Performance ROX 01" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
                <div class="content-container w-full">
                    <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Performance</p>
                    <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-4 md:mb-6 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Desempenho Off-Road Imbatível</h2>
                    <p class="feature-desc text-sm md:text-base font-light text-gray-300 max-w-xl" style="opacity: 0; transform: translateY(40px);">Com tração integral inteligente e motores duplos de alta eficiência, o ROX 01 adapta-se a qualquer terreno.</p>
                </div>
            </div>
        </div>
    </div>
    <section class="relative bg-black">
        <div class="relative pt-16 md:pt-24 pb-16 md:pb-24">
            <div class="absolute -top-40 left-0 right-0 h-40 bg-gradient-to-t from-black to-transparent"></div>
            <div class="content-container">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/services.jpg') }}" alt="Potência Híbrida" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Potência Híbrida</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">Motores duplos de alta eficiência para máximo desempenho.</p>
                            </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/a7ccada87a9d45759a34a5897348c89f.jpg') }}" alt="Tração Integral" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Tração Integral</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">Domínio absoluto em qualquer superfície e condição.</p>
                            </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Compare Section -->
    <section class="py-20 md:py-28 bg-[#f4f6f9] border-t border-gray-200">
        <div class="content-container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-start animate-up">
                <!-- Left: Info -->
                <div>
                    <h2 class="text-2xl md:text-[2rem] font-medium text-black mb-6">Especificações do ROX 01</h2>
                    <a href="{{ route('especificacoes', 'rox-01') }}" class="inline-block px-6 py-2.5 text-xs font-medium tracking-widest uppercase border border-black text-black hover:bg-black hover:text-white transition-all duration-300 mb-12">Ver mais</a>

                    <div class="grid grid-cols-2 gap-x-10 gap-y-8">
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Autonomia (REEV)</p>
                            <p class="text-lg font-semibold text-black">1.115 km</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Potência Total</p>
                            <p class="text-lg font-semibold text-black">350 kW / 740 N·m</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Capacidade de Vadeamento</p>
                            <p class="text-lg font-semibold text-black">770 mm</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Ground Clearance</p>
                            <p class="text-lg font-semibold text-black">272 mm</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Car image (dimensions in image) -->
                <div>
                    <img src="{{ asset('assets/car1.avif') }}" alt="ROX 01" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- ROX 01 Page Scripts -->
    <script src="{{ asset('js/rox01.js') }}"></script>
</x-front-layout>
