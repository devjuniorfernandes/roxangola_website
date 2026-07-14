<x-front-layout>
    <x-slot name="title">ROX Adamas - Todo-o-Terreno Premium</x-slot>

    <!-- Hero Section -->
    <section class="h-[100svh] w-full relative flex items-start justify-center overflow-hidden">
        <img src="{{ asset('assets/banner-adamas.avif') }}" alt="ROX ADAMAS" class="absolute inset-0 w-full h-full object-cover">
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover" poster="{{ asset('assets/banner-adamas.avif') }}">
            <source src="{{ asset('assets/rox_adamas/banner_p.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/10"></div>
        <div class="relative z-10 text-center text-white pt-[14vh] sm:pt-[16vh] md:pt-[18vh]">
            <img src="{{ asset('assets/adamas.svg') }}" alt="ROX ADAMAS" class="h-6 sm:h-7 md:h-9 mx-auto mb-3 md:mb-4 opacity-0 translate-y-6" style="animation: heroSlideUp 0.8s ease-out 0.2s forwards;">
            <p class="text-sm sm:text-base md:text-lg font-light text-white/90 tracking-wide mb-3 md:mb-4 opacity-0 translate-y-6" style="animation: heroSlideUp 0.8s ease-out 0.4s forwards;">
                Novo SUV de Luxo Todo-o-Terreno
            </p>
            <a href="#" id="adamas-video-link" class="inline-flex items-center gap-2 text-xs sm:text-sm font-light text-white/80 hover:text-white tracking-wider transition-colors opacity-0 translate-y-6" style="animation: heroSlideUp 0.8s ease-out 0.6s forwards;">
                Assistir Vídeo Completo <span class="text-base">&#9654;</span>
            </a>
        </div>
    </section>

    <!-- Specs Slider Section -->
    <section class="bg-black text-white py-20 md:py-32 overflow-hidden" id="adamas-showcase-section">
        <!-- Title -->
        <div class="content-container mb-14 md:mb-20 animate-up">
            <h3 class="text-sm md:text-base font-semibold tracking-wide mb-6">Luxo em voo planado</h3>
            <p class="text-xl md:text-[2.5rem] font-light leading-relaxed md:leading-[1.4] max-w-5xl">O ROX ADAMAS redefine os SUV todo-o-terreno de luxo, proporcionando sensações de deslizamento, uma condução suave, inteligência avançada e experiências ao ar livre únicas.</p>
        </div>

        <!-- Slider -->
        <div class="relative" id="adamas-specs-slider">
            @php
                $adamasSpecSlides = [
                    [
                        'img'    => 'lichengbei.jpg',
                        'title'  => 'SUV Médio-Grande de Luxo de Referência',
                        'bottom' => '<div class="flex gap-8 md:gap-14 text-center justify-center flex-wrap"><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Comprimento</p><p class="text-sm md:text-lg font-mono font-medium">5.298 mm</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Largura</p><p class="text-sm md:text-lg font-mono font-medium">1.985 mm</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Altura</p><p class="text-sm md:text-lg font-mono font-medium">1.856 mm</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Entre eixos</p><p class="text-sm md:text-lg font-mono font-medium">3.010 mm</p></div></div>',
                    ],
                    [
                        'img'    => 'banner-adamas.avif',
                        'title'  => 'Fortaleza Móvel, Protecção Extrema',
                        'bottom' => '<div class="flex gap-6 md:gap-12 justify-center flex-wrap"><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Carroçaria em Aço de Alta Resistência</p><p class="text-xl md:text-2xl font-light tracking-wide">&gt;87%</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Aço de Boro Estampado a Quente</p><p class="text-xl md:text-2xl font-light tracking-wide">&gt;32%</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Resistência Recorde do Tecto</p><p class="text-xl md:text-2xl font-light tracking-wide">159.730 <span class="text-sm md:text-base font-light">N</span></p></div></div><p class="text-[9px] md:text-[10px] text-white/40 font-light italic mt-4 leading-snug">[Resistência recorde do tecto: 159.730 N] Mais alta nos testes C-IASI até setembro de 2025</p>',
                    ],
                    [
                        'img'    => 'life.jpg',
                        'title'  => 'Testado em Todo o Mundo, Mestre de Todos os Terrenos',
                        'bottom' => '<div class="text-center space-y-1"><p class="text-xs md:text-sm text-white/90 font-light">Suspensão pneumática de curso longo + algoritmos DCC</p><p class="text-xs md:text-sm text-white/90 font-light">Distância mínima ao solo <span class="font-medium">272 mm</span></p><p class="text-xs md:text-sm text-white/90 font-light">Ângulo de ataque <span class="font-medium">27.5°</span>, ângulo de saída <span class="font-medium">27.9°</span>, ângulo ventral <span class="font-medium">24.6°</span></p><p class="text-xs md:text-sm text-white/90 font-light">Profundidade máxima de travessia <span class="font-medium">770 mm</span></p></div><p class="text-[9px] md:text-[10px] text-white/40 font-light italic mt-4 leading-snug">Distância mínima ao solo 272mm, ângulo de ataque 27.5°, ângulo de saída 27.9°, ângulo ventral 24.6°, profundidade máxima de travessia 770mm; todos os valores representam desempenho em Modo de Recuperação.</p>',
                    ],
                    [
                        'img'    => 'keji.jpg',
                        'title'  => 'Assentos Versáteis, Cabine Espaçosa e Luxuosa',
                        'bottom' => '<div class="flex gap-6 md:gap-12 text-left justify-center flex-wrap"><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Primeira classe</p><p class="text-sm md:text-base font-medium">Dois assentos zero-gravity</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Modos de assento</p><p class="text-sm md:text-base font-medium">Modo cama completa</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">8 airbags</p><p class="text-sm md:text-base font-medium">Massagem tipo Shiatsu</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Assentos</p><p class="text-sm md:text-base font-medium">Ventilação e aquecimento</p></div></div><p class="text-[9px] md:text-[10px] text-white/40 font-light italic mt-4 leading-snug">[Modo cama completa]: Sofá 7 lugares [8 airbags; massagem tipo Shiatsu]: Primeira classe 6 lugares</p>',
                    ],
                    [
                        'img'    => '1.jpg',
                        'title'  => 'REEV Líder em Desempenho Potente e Autonomia Prolongada',
                        'bottom' => '<div class="flex gap-10 md:gap-16 justify-center"><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Autonomia total WLTC</p><p class="text-xl md:text-2xl font-light tracking-wide">1.226 <span class="text-sm md:text-base font-light">km</span></p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">0-100 km/h</p><p class="text-xl md:text-2xl font-light tracking-wide">5,5 <span class="text-sm md:text-base font-light">segundos</span></p></div></div>',
                    ],
                    [
                        'img'    => 'seat-direita.avif',
                        'title'  => 'Expansão Flexível, Prazer Máximo ao Ar Livre',
                        'bottom' => '<div class="flex gap-6 md:gap-10 justify-center flex-wrap"><div><p class="text-sm md:text-base font-medium">Bar de cozinha na mala</p></div><div><p class="text-sm md:text-base font-medium">Toldo 270°</p></div><div><p class="text-sm md:text-base font-medium">Descarga V2L 5,7 kW</p></div><div><p class="text-sm md:text-base font-medium">Qualificação legal de reboque</p></div></div><p class="text-[9px] md:text-[10px] text-white/40 font-light italic mt-4 leading-snug">[Descarga V2L 5,7 kW] V2L 3,5kW exterior + 2,2kW interior com tomada 220V</p>',
                    ],
                ];
                $allAdamasSpecSlides = array_merge([end($adamasSpecSlides)], $adamasSpecSlides, [$adamasSpecSlides[0]]);
            @endphp

            <div class="flex gap-4" id="adamas-specs-track">
                @foreach($allAdamasSpecSlides as $spec)
                <div class="adamas-specs-card relative flex-shrink-0 h-[480px] md:h-[650px] overflow-hidden">
                    <img src="{{ asset('assets/' . $spec['img']) }}" alt="{{ $spec['title'] }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/10 to-transparent"></div>
                    <div class="absolute top-8 md:top-12 left-0 right-0 text-center px-6">
                        <h4 class="text-lg md:text-xl font-medium text-white">{{ $spec['title'] }}</h4>
                    </div>
                    <div class="absolute bottom-8 md:bottom-12 left-0 right-0 px-8 md:px-12 text-white">
                        {!! $spec['bottom'] !!}
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Arrow controls -->
            <button id="adamas-specs-prev" class="adamas-spec-arrow absolute top-1/2 -translate-y-1/2 z-10 w-14 h-14 rounded-full flex items-center justify-center text-white transition-all duration-300" style="left: calc(50% - 28vw); background: rgba(0,0,0,0.45); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5m0 0l7-7m-7 7l7 7"/></svg>
            </button>
            <button id="adamas-specs-next" class="adamas-spec-arrow absolute top-1/2 -translate-y-1/2 z-10 w-14 h-14 rounded-full flex items-center justify-center text-white transition-all duration-300" style="right: calc(50% - 28vw); background: rgba(0,0,0,0.45); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0l-7-7m7 7l-7 7"/></svg>
            </button>

            <!-- Pagination dots -->
            <div class="flex justify-center gap-2 mt-10" id="adamas-specs-dots">
                @foreach($adamasSpecSlides as $idx => $spec)
                <button class="adamas-specs-dot w-10 h-[3px] transition-all duration-300 {{ $idx === 0 ? 'bg-white' : 'bg-gray-700' }}" data-index="{{ $idx }}"></button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Dark Features (Performance & Tech) -->
    <div class="feature-wrapper relative" style="height: 200vh;">
        <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section" id="performance-section">
            <img src="{{ asset('assets/life.jpg') }}" alt="Performance ROX ADAMAS" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
                <div class="content-container w-full">
                    <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Capacidade todo-o-terreno</p>
                    <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-4 md:mb-6 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Testado em todo o mundo, dominando todos os tipos de terreno com confiança</h2>
                    </div>
            </div>
        </div>
    </div>
    <section class="relative bg-black">
        <div class="relative pt-16 md:pt-24 pb-16 md:pb-24">
            <div class="absolute -top-40 left-0 right-0 h-40 bg-gradient-to-t from-black to-transparent"></div>
            <div class="content-container">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up cursor-pointer" id="chassis-card">
                        <img src="{{ asset('assets/1.jpg') }}" alt="Arquitectura de Chassis" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Arquitectura de Chassis de Vanguarda</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                        </div>
                    </div>
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/seat-direita.avif') }}" alt="Tração Integral" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Tração Integral</h3>
                                </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Chassis Architecture Modal -->
    <div id="chassis-modal" class="fixed inset-0 z-[200] hidden" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(4px);">
        <div id="chassis-modal-panel" class="absolute inset-0 bg-white overflow-y-auto translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)]">
            <!-- Header -->
            <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="content-container flex items-center justify-between py-5">
                    <h2 class="text-base md:text-lg font-medium text-black tracking-wide">Arquitectura de Chassis de Vanguarda</h2>
                    <button id="chassis-modal-close" class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-black transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                    </button>
                </div>
            </div>

            <!-- Content -->
            <div class="content-container py-10 md:py-16 space-y-6 md:space-y-8">
                <!-- Item 1: Capacidade Off-Road -->
                <div class="grid grid-cols-1 md:grid-cols-2 overflow-hidden">
                    <div class="flex flex-col justify-center px-8 md:px-14 py-10 md:py-16 bg-gray-100 order-2 md:order-1">
                        <h3 class="text-lg md:text-xl font-medium text-black mb-4 md:mb-6">Capacidade Off-Road Impecável</h3>
                        <p class="text-sm md:text-base text-gray-600 font-light leading-relaxed">No modo de recuperação, a altura do veículo aumenta 80 mm, atingindo uma distância mínima ao solo de 324 mm. Com um ângulo de ataque de 27,5°, um ângulo de saída de 27,9°, capacidade de subida de 100% (45°) e uma profundidade máxima de travessia de 770 mm, foi concebido para enfrentar as condições off-road mais exigentes com total confiança.</p>
                    </div>
                    <div class="relative h-[280px] md:h-[420px] order-1 md:order-2">
                        <video autoplay loop muted playsinline poster="{{ asset('assets/life.jpg') }}" class="w-full h-full object-cover">
                            <source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent px-6 pb-5 pt-10">
                            <p class="text-white text-xs font-medium tracking-wide mb-0.5">Armadura Inferior de Alta Resistência e Chassis em Alumínio</p>
                        </div>
                    </div>
                </div>

                <!-- Item 2: Desempenho em Estrada -->
                <div class="grid grid-cols-1 md:grid-cols-2 overflow-hidden">
                    <div class="relative h-[280px] md:h-[420px] order-1">
                        <video autoplay loop muted playsinline poster="{{ asset('assets/adamas.jpg') }}" class="w-full h-full object-cover">
                            <source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent px-6 pb-5 pt-10">
                            <p class="text-white text-xs font-medium tracking-wide mb-0.5">Controlo Dinâmico de Amortecimento</p>
                            <p class="text-white/70 text-[11px] font-light">Bloqueia oscilações em milissegundos para uma condução serena</p>
                        </div>
                    </div>
                    <div class="flex flex-col justify-center px-8 md:px-14 py-10 md:py-16 bg-gray-100 order-2">
                        <h3 class="text-lg md:text-xl font-medium text-black mb-4 md:mb-6">Desempenho Suave em Estrada</h3>
                        <p class="text-sm md:text-base text-gray-600 font-light leading-relaxed">Uma arquitectura de chassis de referência e uma afinação precisa proporcionam uma condução excepcionalmente suave e refinada. Com um raio de viragem reduzido de 5,98 m, navegar em ruas urbanas e fazer inversões de marcha torna-se intuitivo e sem esforço.</p>
                    </div>
                </div>

                <!-- Item 3: Modos Todo-o-Terreno -->
                <div class="grid grid-cols-1 md:grid-cols-2 overflow-hidden">
                    <div class="flex flex-col justify-center px-8 md:px-14 py-10 md:py-16 bg-gray-100 order-2 md:order-1">
                        <h3 class="text-lg md:text-xl font-medium text-black mb-4 md:mb-6">Modos Todo-o-Terreno</h3>
                        <p class="text-sm md:text-base text-gray-600 font-light leading-relaxed mb-6">7 modos de condução: Polivalente, Auto, Neve, Lama, Rocha, Areia e Travessia — dominando todos os terrenos e ambientes sem esforço.</p>
                        <div class="flex gap-4 text-gray-500">
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path d="M4 12h16M4 8h16M4 16h16"/></svg>
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path d="M3 17l4-4 4 4 4-4 4 4M5 7h14"/></svg>
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path d="M12 2L2 22h20L12 2z"/></svg>
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path d="M3 17c2-3 4-5 6-5s4 4 6 4 4-3 6-6M3 7h18"/></svg>
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path d="M4 20L8 8l4 8 4-12 4 16"/></svg>
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path d="M12 3c-3 4-6 6-6 10a6 6 0 1012 0c0-4-3-6-6-10z"/></svg>
                            <svg class="w-7 h-7" fill="none" stroke="currentColor" stroke-width="1.2" viewBox="0 0 24 24"><path d="M12 2v6m0 8v6M2 12h6m8 0h6"/></svg>
                        </div>
                    </div>
                    <div class="relative h-[280px] md:h-[420px] order-1 md:order-2">
                        <video autoplay loop muted playsinline poster="{{ asset('assets/banner-adamas.avif') }}" class="w-full h-full object-cover">
                            <source src="{{ asset('assets/rox_adamas/banner_p.mp4') }}" type="video/mp4">
                        </video>
                        <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent px-6 pb-5 pt-10">
                            <p class="text-white text-xs font-medium tracking-wide">POLIVALENTE</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Interior Gallery / Comfort Section -->
    <section class="py-16 md:py-24 bg-[#f4f6f9]" id="comfort-section">
        <div id="comfort-cursor" class="fixed w-14 h-14 rounded-full pointer-events-none z-[60] opacity-0 transition-opacity duration-300 flex items-center justify-center" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); transform: translate(-50%, -50%);">
            <span class="text-white text-xs font-medium tracking-wide">mais</span>
        </div>
        <div class="content-container">
            <div class="text-center mb-12 md:mb-16 animate-up">
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Interior Exclusivo</h2>
                <p class="text-gray-500 font-light max-w-2xl mx-auto text-sm md:text-base">Materiais de topo, acabamentos premium e tecnologia avançada para criar um ambiente de primeira classe onde quer que vá.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                <div class="comfort-card relative h-[300px] md:h-[500px] overflow-hidden group animate-up" style="cursor: none;">
                    <img src="{{ asset('assets/banner-ver.avif') }}" alt="Interior Premium" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
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
                    <img src="{{ asset('assets/b.avif') }}" alt="Tecnologia Inteligente" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
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

     <!-- Dark Features (Performance Extrema) -->
     <div class="feature-wrapper relative" style="height: 200vh;">
        <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
            <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-black/30"></div>
            <!-- Top text -->
            <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
                <div class="content-container w-full">
                    <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Design exterior</p>
                    <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-6 md:mb-8 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">A ROX ADAMAS redefine a estética do luxo ao ar livre</h2>
                    <!--<a href="#" class="feature-title inline-block border border-white/60 text-white text-xs md:text-sm font-medium tracking-widest uppercase px-8 py-3 hover:bg-white hover:text-black transition-all duration-300" style="opacity: 0; transform: translateY(40px);">MORE</a>-->
                </div>
            </div>
            <!-- Bottom text with left border -->
            <div class="absolute bottom-0 left-0 right-0 pb-12 md:pb-20">
                <div class="content-container w-full">
                    <div class="border-l-2 border-white/60 pl-4 md:pl-6">
                        <p class="feature-desc text-xl md:text-3xl font-light text-white/90 mb-1 leading-snug" style="opacity: 0; transform: translateY(40px);"></p>
                        <p class="feature-desc text-base md:text-xl font-light text-white/70" style="opacity: 0; transform: translateY(40px);"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cabin Comfort Slider -->
    <section class="relative bg-black text-white">
        <div id="cabin-comfort-slider" class="relative h-[112svh] min-h-[760px] md:min-h-[900px] w-full overflow-hidden">
            <div class="absolute inset-0">
            <div class="cabin-slide absolute inset-0 z-20 opacity-100 transition-opacity duration-[1400ms] ease-in-out" data-cabin-slide data-kicker="Conforto na cabina" data-heading="Uma experiência de luxo suave e confortável entre movimento e tranquilidade" data-caption="ROX ADAMAS - 6 Lugares - 2-2-2">
                <img src="{{ asset('assets/7.avif') }}" alt="ROX ADAMAS interior de seis lugares" class="h-full w-full object-cover">
            </div>
            <div class="cabin-slide absolute inset-0 z-10 opacity-0 transition-opacity duration-[1400ms] ease-in-out" data-cabin-slide data-kicker="Espaço premium" data-heading="Uma cabina refinada, concebida para oferecer conforto a cada passageiro" data-caption="ROX ADAMAS - 7 Lugares - 2-3-2">
                <img src="{{ asset('assets/6.avif') }}" alt="ROX ADAMAS interior de sete lugares" class="h-full w-full object-cover">
            </div>
        </div>
        <div class="pointer-events-none absolute inset-x-0 bottom-0 z-30 h-[46%] bg-gradient-to-t from-black/90 via-black/45 to-transparent"></div>
        <div class="pointer-events-none absolute inset-x-0 top-0 z-30 h-[28%] bg-gradient-to-b from-black/25 to-transparent"></div>
        <div class="absolute inset-x-0 top-[9.2rem] md:top-[8.7rem] z-40">
            <div class="mx-auto max-w-[1280px] px-6 md:px-8">
                <p id="cabin-kicker" class="mb-6 text-sm md:text-base font-semibold tracking-[0.08em] transition-opacity duration-500">Conforto na cabina</p>
                <h2 id="cabin-heading" class="max-w-[1050px] text-3xl md:text-[34px] font-light leading-tight tracking-[0.055em] transition-opacity duration-500">
                    Uma experiência de luxo suave e confortável entre movimento e tranquilidade
                </h2>
            </div>
        </div>
        <div class="absolute inset-x-0 bottom-[13.2rem] md:bottom-[11.2rem] z-40 px-6 text-center">
            <p id="cabin-caption" class="text-xl md:text-[22px] font-semibold tracking-[0.04em] transition-opacity duration-500">ROX ADAMAS - 6 Lugares - 2-2-2</p>
        </div>
        <div class="absolute inset-x-0 bottom-[8.5rem] md:bottom-[7.4rem] z-40 flex justify-center gap-3 px-6">
            <button type="button" class="cabin-progress h-px w-9 bg-white/45" data-cabin-progress aria-label="Mostrar slide 1">
                <span class="block h-full w-full origin-left scale-x-0 bg-white"></span>
            </button>
            <button type="button" class="cabin-progress h-px w-9 bg-white/45" data-cabin-progress aria-label="Mostrar slide 2">
                <span class="block h-full w-full origin-left scale-x-0 bg-white"></span>
            </button>
        </div>
        </div>

        
        <div class="relative pt-16 md:pt-24 pb-16 md:pb-24">
            <div class="absolute -top-40 left-0 right-0 h-40 bg-gradient-to-t from-black to-transparent"></div>
            <div class="content-container">
                <div class="relative h-[420px] md:h-[680px] overflow-hidden group mb-4 md:mb-6 animate-up">
                    <img src="{{ asset('assets/seat-superior.avif') }}" alt="ROX ADAMAS configuração de seis lugares" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-1">Uma cabina luxuosa, concebida a pensar em si</h3>
                        </div>
                        <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <div class="relative h-[340px] md:h-[560px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/6.avif') }}" alt="ROX ADAMAS configuração de sete lugares" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Espaço amplo, conforto supremo</h3>
                            </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
                    <div class="relative h-[340px] md:h-[560px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/b.avif') }}" alt="ROX ADAMAS acabamento interior premium" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Cabina versátil, envolvente e inteligente</h3>
                            </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 360 Viewer Section (Canvas Based) -->
    <section class="py-16 md:py-32 bg-[#F8F9FA] relative">
        <div class="max-w-[1280px] mx-auto text-center px-4 md:px-6">
            <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-8 md:mb-10">Explorar ROX Adamas</h2>
            
            <div class="flex flex-wrap justify-center gap-4 md:gap-6 mb-8 md:mb-12">
                <button class="color-swatch w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-300 shadow-sm transition-transform hover:scale-110 active-color ring-2 ring-offset-2 ring-black bg-[#C5A059]" data-color="golden" aria-label="Dourado"></button>
                <button class="color-swatch w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-300 shadow-sm transition-transform hover:scale-110 bg-[#E8E9EB]" data-color="white" aria-label="Branco"></button>
                <button class="color-swatch w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-300 shadow-sm transition-transform hover:scale-110 bg-[#1D1E20]" data-color="black" aria-label="Preto"></button>
                <button class="color-swatch w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-300 shadow-sm transition-transform hover:scale-110 bg-[#7B7C7F]" data-color="gray" aria-label="Cinzento"></button>
                <button class="color-swatch w-8 h-8 md:w-10 md:h-10 rounded-full border border-gray-300 shadow-sm transition-transform hover:scale-110 bg-[#283832]" data-color="green" aria-label="Verde"></button>
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

    <!-- Specs Slider Section -->
    <section class="bg-[#f4f6f9] text-black py-20 md:py-32 overflow-hidden">
        <div class="content-container mb-14 md:mb-20 animate-up">
            <h3 class="text-sm md:text-base font-semibold tracking-wide mb-6">Luxo Todo-o-Terreno</h3>
            <p class="text-xl md:text-[2.5rem] font-light leading-relaxed md:leading-[1.4] max-w-5xl">O ROX ADAMAS redefine o conceito de SUV de luxo todo-o-terreno, oferecendo sensações de condução excepcionais.</p>
        </div>

        <div class="relative" id="adamas-specs-slider">
            @php
                $specSlides = [
                    [
                        'img' => 'adamas.jpg',
                        'title' => 'Design Exclusivo',
                        'bottom' => '<p class="text-xs md:text-sm text-gray-400 mb-1">Acabamentos Premium</p><p class="text-lg md:text-xl font-medium">Luxo Incomparável</p>',
                    ],
                    [
                        'img' => 'lichengbei.jpg',
                        'title' => 'SUV Grande de Luxo',
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

            <div class="flex gap-4" id="adamas-specs-track">
                @php $allSlides = array_merge([end($specSlides)], $specSlides, [$specSlides[0]]); @endphp
                @foreach($allSlides as $idx => $spec)
                <div class="adamas-specs-card relative flex-shrink-0 h-[400px] md:h-[520px] overflow-hidden rounded-none">
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

            <div class="flex justify-center gap-1 mt-10">
                <button id="adamas-specs-prev" class="w-12 h-12 rounded-full border border-gray-300 bg-gray-100 text-gray-400 flex items-center justify-center transition-all duration-300 hover:bg-black hover:border-black hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                </button>
                <button id="adamas-specs-next" class="w-12 h-12 rounded-full border border-gray-300 bg-gray-100 text-gray-800 flex items-center justify-center transition-all duration-300 hover:bg-black hover:border-black hover:text-white">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                </button>
            </div>
        </div>
    </section>

 <!-- Dark Features (Performance Extrema) -->
 <div class="feature-wrapper relative" style="height: 200vh;">
    <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
        <video autoplay loop muted playsinline poster="{{ asset('assets/adamas.jpg') }}" class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/30"></div>
        <!-- Top text -->
        <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
            <div class="content-container w-full">
                <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Desempenho Off-Road Imbatível</p>
                <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-6 md:mb-8 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Desempenho e autonomia revolucionários para uma experiência de condução completa</h2>
                <!--<a href="#" class="feature-title inline-block border border-white/60 text-white text-xs md:text-sm font-medium tracking-widest uppercase px-8 py-3 hover:bg-white hover:text-black transition-all duration-300" style="opacity: 0; transform: translateY(40px);">MORE</a>-->
            </div>
        </div>
        <!-- Bottom text with left border -->
        <div class="absolute bottom-0 left-0 right-0 pb-12 md:pb-20">
            <div class="content-container w-full">
                <div class="border-l-2 border-white/60 pl-4 md:pl-6">
                    <p class="feature-desc text-xl md:text-3xl font-light text-white/90 mb-1 leading-snug" style="opacity: 0; transform: translateY(40px);"></p>
                    <p class="feature-desc text-base md:text-xl font-light text-white/70" style="opacity: 0; transform: translateY(40px);"></p>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Dark Features (Performance Extrema 2) -->
 <div class="feature-wrapper relative" style="height: 200vh;">
    <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
        <video autoplay loop muted playsinline poster="{{ asset('assets/adamas.jpg') }}" class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('assets/rox_adamas/banner_p.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/30"></div>
        <!-- Top text -->
        <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
            <div class="content-container w-full">
                <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Segurança ROX</p>
                <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-6 md:mb-8 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Proteção de segurança ao nível de uma fortaleza.</h2>
            </div>
        </div>
        <!-- Bottom text with left border -->
        <div class="absolute bottom-0 left-0 right-0 pb-12 md:pb-20">
            <div class="content-container w-full">
                <div class="border-l-2 border-white/60 pl-4 md:pl-6">
                    <p class="feature-desc text-xl md:text-3xl font-light text-white/90 mb-1 leading-snug" style="opacity: 0; transform: translateY(40px);"></p>
                    <p class="feature-desc text-base md:text-xl font-light text-white/70" style="opacity: 0; transform: translateY(40px);"></p>
                </div>
            </div>
        </div>
    </div>
</div>

 <!-- Dark Features (Performance Extrema 3 - vídeo) -->
 <div class="feature-wrapper relative" style="height: 200vh;">
    <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
        <video autoplay loop muted playsinline poster="{{ asset('assets/adamas.jpg') }}" class="absolute inset-0 w-full h-full object-cover">
            <source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/30"></div>
        <!-- Top text -->
        <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
            <div class="content-container w-full">
                <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Aventura sem limites</p>
                <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-6 md:mb-8 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Capacidade de superação de obstáculos incomparável.</h2>
            </div>
        </div>
        <!-- Bottom text with left border -->
        <div class="absolute bottom-0 left-0 right-0 pb-12 md:pb-20">
            <div class="content-container w-full">
                <div class="border-l-2 border-white/60 pl-4 md:pl-6">
                    <p class="feature-desc text-xl md:text-3xl font-light text-white/90 mb-1 leading-snug" style="opacity: 0; transform: translateY(40px);"></p>
                    <p class="feature-desc text-base md:text-xl font-light text-white/70" style="opacity: 0; transform: translateY(40px);"></p>
                </div>
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
                        <img src="{{ asset('assets/1.jpg') }}" alt="Aventura" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Terrenos Extremos</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">Supere qualquer obstáculo com total confiança.</p>
                            </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/banner-v.avif') }}" alt="Capacidade Off-Road" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Capacidade Off-Road</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">Tecnologia preparada para a aventura mais exigente.</p>
                            </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

 <!-- Dark Features (Performance Extrema 4 - imagem) -->
 <div class="feature-wrapper relative" style="height: 200vh;">
    <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
        <img src="{{ asset('assets/outdoor.avif') }}" alt="Espaço Generoso ROX ADAMAS" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/30"></div>
        <!-- Top text -->
        <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
            <div class="content-container w-full">
                <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Estilo de vida ao ar livre</p>
                <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-6 md:mb-8 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Um estilo de vida ao ar livre cheio de energia, criado pela ROX ADAMAS</h2>
            </div>
        </div>
        <!-- Bottom text with left border -->
        <div class="absolute bottom-0 left-0 right-0 pb-12 md:pb-20">
            <div class="content-container w-full">
                <div class="border-l-2 border-white/60 pl-4 md:pl-6">
                    <p class="feature-desc text-xl md:text-3xl font-light text-white/90 mb-1 leading-snug" style="opacity: 0; transform: translateY(40px);"></p>
                    <p class="feature-desc text-base md:text-xl font-light text-white/70" style="opacity: 0; transform: translateY(40px);"></p>
                </div>
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
                        <img src="{{ asset('assets/banner-ver.avif') }}" alt="Bagageira" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Bagageira Versátil</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">Espaço configurável para todas as suas viagens.</p>
                            </div>
                            <a href="#" class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm hover:bg-white hover:text-black transition-all duration-300">+</a>
                        </div>
                    </div>
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/b.avif') }}" alt="Conforto" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Conforto Total</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">Ambiente premium para todos os ocupantes.</p>
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
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-center animate-up">
                <!-- Left: Info -->
                <div>
                    <h2 class="text-2xl md:text-[2rem] font-medium text-black mb-6">Especificações do ROX ADAMAS</h2>
                    <a href="{{ route('especificacoes', 'rox-adamas') }}" class="inline-block px-6 py-2.5 text-xs font-medium tracking-widest uppercase border border-black text-black hover:bg-black hover:text-white transition-all duration-300 mb-12">Ver mais</a>

                    <div class="grid grid-cols-2 gap-x-10 gap-y-8">
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Autonomia (REEV)</p>
                            <p class="text-lg font-semibold text-black">1.115 km</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">Potência Total</p>
                            <p class="text-lg font-semibold text-black">380 kW / 780 N·m</p>
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
                    <img src="{{ asset('assets/adamas.png') }}" alt="ROX ADAMAS" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Page Scripts -->
    <script src="{{ asset('js/rox01.js') }}"></script>

    <!-- Play videos when they enter the viewport -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var videos = document.querySelectorAll('video[autoplay]');
            if (!('IntersectionObserver' in window)) return;

            var observer = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    var video = entry.target;
                    if (entry.isIntersecting) {
                        var p = video.play();
                        if (p !== undefined) { p.catch(function() {}); }
                    } else {
                        video.pause();
                    }
                });
            }, { threshold: 0.25 });

            videos.forEach(function(v) { observer.observe(v); });
        });
    </script>

    <!-- Script for Cabin Comfort Slider -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('cabin-comfort-slider');
            if (!slider) return;

            const slides = Array.from(slider.querySelectorAll('[data-cabin-slide]'));
            const progressButtons = Array.from(slider.querySelectorAll('[data-cabin-progress]'));
            const kicker = document.getElementById('cabin-kicker');
            const heading = document.getElementById('cabin-heading');
            const caption = document.getElementById('cabin-caption');
            const duration = 5200;
            const fadeDuration = 1400;
            let activeIndex = 0;
            let timerId;
            let transitionId;

            function resetProgress() {
                progressButtons.forEach((button) => {
                    const bar = button.querySelector('span');
                    bar.style.transition = 'none';
                    bar.style.transform = 'scaleX(0)';
                });
            }

            function startProgress(index) {
                const bar = progressButtons[index].querySelector('span');
                requestAnimationFrame(() => {
                    bar.style.transition = `transform ${duration}ms linear`;
                    bar.style.transform = 'scaleX(1)';
                });
            }

            function setCopy(index) {
                const slide = slides[index];
                const copyEls = [kicker, heading, caption];

                copyEls.forEach((el) => el.style.opacity = '0');

                window.setTimeout(() => {
                    kicker.textContent = slide.dataset.kicker;
                    heading.textContent = slide.dataset.heading;
                    caption.textContent = slide.dataset.caption;
                    copyEls.forEach((el) => el.style.opacity = '1');
                }, 180);
            }

            function showSlide(index) {
                const nextIndex = (index + slides.length) % slides.length;
                const previousIndex = activeIndex;

                slides.forEach((slide, i) => {
                    if (i !== previousIndex && i !== nextIndex) {
                        slide.classList.remove('z-20', 'z-10', 'opacity-100');
                        slide.classList.add('z-0', 'opacity-0');
                    }
                });

                slides[previousIndex].classList.remove('z-20', 'z-0', 'opacity-0');
                slides[previousIndex].classList.add('z-10', 'opacity-100');
                slides[nextIndex].classList.remove('z-10', 'z-0', 'opacity-0');
                slides[nextIndex].classList.add('z-20', 'opacity-100');

                window.clearTimeout(transitionId);
                transitionId = window.setTimeout(() => {
                    slides.forEach((slide, i) => {
                        if (i !== nextIndex) {
                            slide.classList.remove('z-20', 'z-10', 'opacity-100');
                            slide.classList.add('z-0', 'opacity-0');
                        }
                    });
                }, fadeDuration);

                activeIndex = nextIndex;
                setCopy(activeIndex);
                resetProgress();
                startProgress(activeIndex);
                window.clearTimeout(timerId);
                timerId = window.setTimeout(() => showSlide(activeIndex + 1), duration);
            }

            progressButtons.forEach((button, index) => {
                button.addEventListener('click', () => showSlide(index));
            });

            showSlide(0);
        });
    </script>

    <!-- Script for Adamas Specs Slider -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var track = document.getElementById('adamas-specs-track');
            var cards = document.querySelectorAll('.adamas-specs-card');
            var prevBtn = document.getElementById('adamas-specs-prev');
            var nextBtn = document.getElementById('adamas-specs-next');
            if (!track || !cards.length) return;

            var realCount = cards.length - 2;
            var domIndex = 1;
            var isAnimating = false;

            function layout() {
                var vw = window.innerWidth;
                var isMobile = vw < 768;
                var centerW = isMobile ? vw * 0.85 : vw * 0.50;
                cards.forEach(function(c) { c.style.width = centerW + 'px'; });
                track.style.transition = 'none';
                goTo(domIndex);
                void track.offsetWidth;
                track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
            }

            function goTo(idx) {
                domIndex = idx;
                var vw = window.innerWidth;
                var card = cards[domIndex];
                var offset = (vw / 2) - (card.offsetLeft + card.offsetWidth / 2);
                track.style.transform = 'translateX(' + offset + 'px)';
            }

            function snap() {
                if (domIndex === 0) {
                    track.style.transition = 'none';
                    goTo(realCount);
                    void track.offsetWidth;
                    track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
                }
                if (domIndex === realCount + 1) {
                    track.style.transition = 'none';
                    goTo(1);
                    void track.offsetWidth;
                    track.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
                }
                isAnimating = false;
            }

            track.addEventListener('transitionend', snap);

            function next() { if (isAnimating) return; isAnimating = true; goTo(domIndex + 1); }
            function prev() { if (isAnimating) return; isAnimating = true; goTo(domIndex - 1); }

            prevBtn.addEventListener('click', prev);
            nextBtn.addEventListener('click', next);

            layout();
            window.addEventListener('resize', layout);

            var touchStart = 0, touchDiff = 0;
            track.addEventListener('touchstart', function(e) { touchStart = e.touches[0].clientX; }, { passive: true });
            track.addEventListener('touchmove', function(e) { touchDiff = e.touches[0].clientX - touchStart; }, { passive: true });
            track.addEventListener('touchend', function() {
                if (touchDiff > 50) prev();
                else if (touchDiff < -50) next();
                touchDiff = 0;
            });
        });
    </script>

    <!-- Script for Canvas 360 Viewer -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('viewer-container');
            const canvas = document.getElementById('viewer-canvas');
            const ctx = canvas.getContext('2d');
            const swatches = document.querySelectorAll('.color-swatch');
            const loading = document.getElementById('viewer-loading');
            const icon360 = document.getElementById('icon-360');
            
            // Set default color to golden since it has all 36 frames loaded
            let currentColor = 'golden';
            let currentFrame = 1;
            const totalFrames = 36;
            let images = {}; // Cache images by color
            let isDragging = false;
            let startX = 0;
            let isLoaded = false;
            let isTouchDevice = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);
            
            // Set internal resolution of canvas high for crispness
            canvas.width = 1920;
            canvas.height = 1080;
            
            function loadImagesForColor(color) {
                loading.style.opacity = '1';
                loading.style.pointerEvents = 'auto';
                isLoaded = false;
                
                // If already cached, just render
                if (images[color] && images[color].length === totalFrames) {
                    drawFrame(currentFrame, color);
                    loading.style.opacity = '0';
                    loading.style.pointerEvents = 'none';
                    isLoaded = true;
                    return;
                }
                
                images[color] = [];
                let loadedCount = 0;
                
                for(let i = 1; i <= totalFrames; i++) {
                    const img = new Image();
                    img.onload = () => {
                        loadedCount++;
                        if(loadedCount === totalFrames) {
                            drawFrame(currentFrame, color);
                            loading.style.opacity = '0';
                            loading.style.pointerEvents = 'none';
                            isLoaded = true;
                        }
                    };
                    
                    // Basic fallback to prevent JS breaking if an image is missing
                    img.onerror = () => {
                        loadedCount++;
                        if(loadedCount === totalFrames) {
                            drawFrame(currentFrame, color);
                            loading.style.opacity = '0';
                            loading.style.pointerEvents = 'none';
                            isLoaded = true;
                        }
                    };
                    
                    img.src = `/assets/rox_adamas/${color}_${i}.png`;
                    images[color][i-1] = img;
                }
            }
            
            function drawFrame(frameIndex, color) {
                if(!images[color] || !images[color][frameIndex-1]) return;
                const img = images[color][frameIndex-1];
                
                // Ignore broken images in the sequence
                if(!img.complete || img.naturalWidth === 0) return;
                
                ctx.clearRect(0, 0, canvas.width, canvas.height);
                
                // Draw image centered and scaled to fit the canvas proportionally
                const hRatio = canvas.width / img.width;
                const vRatio = canvas.height / img.height;
                const ratio  = Math.min(hRatio, vRatio);
                const centerShift_x = (canvas.width - img.width*ratio) / 2;
                const centerShift_y = (canvas.height - img.height*ratio) / 2;  
                
                ctx.drawImage(img, 0,0, img.width, img.height,
                                   centerShift_x, centerShift_y, img.width*ratio, img.height*ratio);
            }
            
            // Initial load
            loadImagesForColor(currentColor);
            
            // Color Switching Logic
            swatches.forEach(swatch => {
                swatch.addEventListener('click', (e) => {
                    swatches.forEach(s => s.classList.remove('ring-2', 'ring-offset-2', 'ring-black'));
                    e.target.classList.add('ring-2', 'ring-offset-2', 'ring-black');
                    currentColor = e.target.getAttribute('data-color');
                    loadImagesForColor(currentColor);
                });
            });
            
            // Custom Cursor Logic
            container.addEventListener('mouseenter', () => {
                if(!isDragging && !isTouchDevice && isLoaded) {
                    icon360.style.opacity = '1';
                }
            });

            container.addEventListener('mouseleave', () => {
                icon360.style.opacity = '0';
                isDragging = false;
            });
            
            // Interaction Logic
            function startDrag(x) {
                if(!isLoaded) return;
                isDragging = true;
                startX = x;
                icon360.style.opacity = '0'; // Hide 360 icon when user starts interacting
            }
            
            function onDrag(x, y, isMouse = false) {
                if (!isLoaded) return;
                
                // Update custom cursor position if mouse
                if(isMouse && !isDragging && !isTouchDevice) {
                    icon360.style.opacity = '1';
                    const rect = container.getBoundingClientRect();
                    icon360.style.left = (x - rect.left) + 'px';
                    icon360.style.top = (y - rect.top) + 'px';
                }

                if (!isDragging) return;
                
                const diff = x - startX;
                // Sensitivity
                if (Math.abs(diff) > 12) {
                    if (diff > 0) {
                        currentFrame--;
                        if (currentFrame < 1) currentFrame = totalFrames;
                    } else {
                        currentFrame++;
                        if (currentFrame > totalFrames) currentFrame = 1;
                    }
                    drawFrame(currentFrame, currentColor);
                    startX = x;
                }
            }
            
            function stopDrag() {
                isDragging = false;
                if(!isTouchDevice) {
                    icon360.style.opacity = '1';
                }
            }
            
            // Mouse Events
            container.addEventListener('mousedown', (e) => startDrag(e.pageX));
            window.addEventListener('mousemove', (e) => onDrag(e.pageX, e.clientY, true));
            window.addEventListener('mouseup', stopDrag);
            
            // Touch Events (Mobile)
            container.addEventListener('touchstart', (e) => {
                icon360.style.opacity = '0'; // Never show custom cursor on touch
                startDrag(e.touches[0].pageX);
            });
            window.addEventListener('touchmove', (e) => onDrag(e.touches[0].pageX, e.touches[0].pageY, false), { passive: true });
            window.addEventListener('touchend', stopDrag);
        });
    </script>

    <!-- Adamas Specs Slider Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            (function () {
                var specsTrack = document.getElementById('adamas-specs-track');
                var specsCards = document.querySelectorAll('.adamas-specs-card');
                var specsDots = document.querySelectorAll('.adamas-specs-dot');
                var specsPrev = document.getElementById('adamas-specs-prev');
                var specsNext = document.getElementById('adamas-specs-next');
                if (!specsTrack || !specsCards.length) return;

                var realCount = specsDots.length;
                var domIndex = 1;
                var isAnimating = false;

                function layoutSpecs() {
                    var vw = window.innerWidth;
                    var centerW = vw < 768 ? vw * 0.90 : vw * 0.65;
                    specsCards.forEach(function (card) { card.style.width = centerW + 'px'; });
                    specsTrack.style.transition = 'none';
                    goTo(domIndex);
                    void specsTrack.offsetWidth;
                    specsTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
                }

                function goTo(idx) {
                    domIndex = idx;
                    var card = specsCards[domIndex];
                    var vw = window.innerWidth;
                    var offset = (vw / 2) - (card.offsetLeft + card.offsetWidth / 2);
                    specsTrack.style.transform = 'translateX(' + offset + 'px)';
                    updateDots();
                }

                function updateDots() {
                    var realIdx = domIndex - 1;
                    if (realIdx < 0) realIdx = realCount - 1;
                    if (realIdx >= realCount) realIdx = 0;
                    specsDots.forEach(function (d, i) {
                        d.classList.toggle('bg-white', i === realIdx);
                        d.classList.toggle('bg-gray-700', i !== realIdx);
                    });
                }

                function snapAfterLoop() {
                    if (domIndex === 0) {
                        specsTrack.style.transition = 'none';
                        goTo(realCount);
                        void specsTrack.offsetWidth;
                        specsTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
                    }
                    if (domIndex === realCount + 1) {
                        specsTrack.style.transition = 'none';
                        goTo(1);
                        void specsTrack.offsetWidth;
                        specsTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
                    }
                    isAnimating = false;
                }

                specsTrack.addEventListener('transitionend', snapAfterLoop);

                function next() { if (isAnimating) return; isAnimating = true; goTo(domIndex + 1); }
                function prev() { if (isAnimating) return; isAnimating = true; goTo(domIndex - 1); }

                specsPrev.addEventListener('click', prev);
                specsNext.addEventListener('click', next);
                specsDots.forEach(function (dot) {
                    dot.addEventListener('click', function () {
                        if (isAnimating) return;
                        isAnimating = true;
                        goTo(parseInt(dot.dataset.index) + 1);
                    });
                });

                layoutSpecs();
                window.addEventListener('resize', layoutSpecs);

                var sTouchStart = 0, sTouchDiff = 0;
                specsTrack.addEventListener('touchstart', function (e) { sTouchStart = e.touches[0].clientX; }, { passive: true });
                specsTrack.addEventListener('touchmove', function (e) { sTouchDiff = e.touches[0].clientX - sTouchStart; }, { passive: true });
                specsTrack.addEventListener('touchend', function () {
                    if (sTouchDiff > 50) prev();
                    else if (sTouchDiff < -50) next();
                    sTouchDiff = 0;
                });
            })();

            // Chassis Architecture Modal
            (function() {
                var card = document.getElementById('chassis-card');
                var modal = document.getElementById('chassis-modal');
                var panel = document.getElementById('chassis-modal-panel');
                var closeBtn = document.getElementById('chassis-modal-close');
                if (!card || !modal) return;

                function openModal() {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                    requestAnimationFrame(function() {
                        panel.classList.remove('translate-y-full');
                        panel.classList.add('translate-y-0');
                    });
                }

                function closeModal() {
                    panel.classList.remove('translate-y-0');
                    panel.classList.add('translate-y-full');
                    setTimeout(function() {
                        modal.classList.add('hidden');
                        document.body.style.overflow = '';
                    }, 700);
                }

                card.addEventListener('click', openModal);
                closeBtn.addEventListener('click', closeModal);
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) closeModal();
                });
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
                });
            })();
        });
    </script>
</x-front-layout>
