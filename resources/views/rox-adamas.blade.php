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
                        'bottom' => '<div class="flex gap-6 md:gap-12 text-left justify-center"><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Primeira classe</p><p class="text-sm md:text-base font-medium">Dois assentos zero-gravity</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Modos de assento</p><p class="text-sm md:text-base font-medium">Modo cama completa</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">8 airbags</p><p class="text-sm md:text-base font-medium">Massagem tipo Shiatsu</p></div><div><p class="text-xs text-gray-400 font-medium tracking-wider mb-2">Assentos</p><p class="text-sm md:text-base font-medium">Ventilação e aquecimento</p></div></div><p class="text-[9px] md:text-[10px] text-white/40 font-light italic mt-4 leading-snug">[Modo cama completa]: Sofá 7 lugares [8 airbags; massagem tipo Shiatsu]: Primeira classe 6 lugares</p>',
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
                <div class="adamas-specs-card relative flex-shrink-0 h-[420px] sm:h-[480px] lg:h-[580px] xl:h-[650px] overflow-hidden">
                    <img src="{{ asset('assets/' . $spec['img']) }}" alt="{{ $spec['title'] }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/10 to-transparent"></div>
                    <div class="absolute top-6 sm:top-8 md:top-10 lg:top-12 left-0 right-0 text-center px-4 sm:px-6">
                        <h4 class="text-base sm:text-lg lg:text-xl font-medium text-white">{{ $spec['title'] }}</h4>
                    </div>
                    <div class="absolute bottom-6 sm:bottom-8 lg:bottom-12 left-0 right-0 px-5 sm:px-8 lg:px-12 text-white">
                        {!! $spec['bottom'] !!}
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Arrow controls -->
            <button id="adamas-specs-prev" class="adamas-spec-arrow absolute top-1/2 -translate-y-1/2 z-10 w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14 rounded-full flex items-center justify-center text-white transition-all duration-300" style="background: rgba(0,0,0,0.45); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5m0 0l7-7m-7 7l7 7"/></svg>
            </button>
            <button id="adamas-specs-next" class="adamas-spec-arrow absolute top-1/2 -translate-y-1/2 z-10 w-10 h-10 sm:w-12 sm:h-12 lg:w-14 lg:h-14 rounded-full flex items-center justify-center text-white transition-all duration-300" style="background: rgba(0,0,0,0.45); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px);">
                <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0l-7-7m7 7l-7 7"/></svg>
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
            <video autoplay loop muted playsinline poster="{{ asset('assets/life.jpg') }}" class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4">
            </video>
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
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up cursor-pointer" id="terrain-card">
                        <img src="{{ asset('assets/seat-direita.avif') }}" alt="Terreno" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Comprovado Globalmente, Domínio Total em Qualquer Terreno</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
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

    <!-- Terrain Mastery Modal -->
    <div id="terrain-modal" class="fixed inset-0 z-[200] hidden" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(4px);">
        <div id="terrain-modal-panel" class="absolute inset-0 bg-white overflow-y-auto translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)]">
            <!-- Header -->
            <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="content-container flex items-center justify-between py-5">
                    <h2 class="text-base md:text-lg font-medium text-black tracking-wide">Comprovado Globalmente, Domínio Total em Qualquer Terreno</h2>
                    <button id="terrain-modal-close" class="w-8 h-8 flex items-center justify-center text-gray-500 hover:text-black transition-colors">
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
                    </div>
                </div>

                <!-- Item 2: Desempenho em Estrada -->
                <div class="grid grid-cols-1 md:grid-cols-2 overflow-hidden">
                    <div class="relative h-[280px] md:h-[420px] order-1">
                        <video autoplay loop muted playsinline poster="{{ asset('assets/adamas.jpg') }}" class="w-full h-full object-cover">
                            <source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4">
                        </video>
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
                            <p class="text-white text-xs font-medium tracking-wide">AUTO</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- 360 Viewer Section (Canvas Based) -->
    <section class="py-16 md:py-24 bg-white relative">
        <!-- Header: Title left + Tabs right -->
        <div class="content-container mb-10 md:mb-14">
            <div class="flex flex-col md:flex-row md:items-end md:justify-between gap-6">
                <div>
                    <p class="text-xs md:text-sm font-semibold tracking-wide text-black mb-3">A Escolha Definitiva para Entusiastas do Ar Livre em Todo o Mundo</p>
                    <h2 class="text-2xl md:text-[2.2rem] font-light text-black leading-snug">Design de Luxo, Presença Imponente</h2>
                </div>
                <div class="flex items-center gap-0">
                    <button class="viewer-tab text-sm font-medium text-black pb-2 px-4 border-b-2 border-black transition-all" data-tab="exterior">Exterior</button>
                    <button class="viewer-tab text-sm font-medium text-gray-400 pb-2 px-4 border-b-2 border-transparent hover:text-black transition-all" data-tab="interior">Interior</button>
                </div>
            </div>
        </div>

        <!-- Viewer -->
        <div class="content-container">
            <div class="relative w-full cursor-none select-none touch-pan-y overflow-hidden bg-[#F0F0EE] rounded-sm" id="viewer-container">
                <canvas id="viewer-canvas" class="w-full max-h-[70vh] object-contain mx-auto"></canvas>

                <div id="interior-viewer" class="hidden relative aspect-video w-full overflow-hidden bg-[#E8E1D8]">
                    <img id="interior-image" src="{{ asset('assets/rox_adamas/interior/First-Class 6-Seater/amethyst_purple.png') }}" alt="Interior ROX ADAMAS First-Class 6-Seater em Amethyst Purple" class="absolute inset-0 h-full w-full object-cover object-center">
                </div>

                <div id="icon-360" class="absolute flex flex-col items-center justify-center w-16 h-16 md:w-20 md:h-20 bg-[#2A2A2A]/90 backdrop-blur-sm rounded-full text-white transition-opacity duration-300 pointer-events-none shadow-xl z-50 opacity-0 transform -translate-x-1/2 -translate-y-1/2">
                    <span class="text-sm md:text-base font-medium tracking-wider mb-[-2px]">360&deg;</span>
                    <svg class="w-6 h-6 md:w-8 md:h-8 text-white mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M 6 13 A 7 3 0 0 0 18 13 M 15 16 L 18 13 L 15 10" />
                    </svg>
                </div>

                <div id="viewer-loading" class="absolute inset-0 flex items-center justify-center bg-[#F0F0EE] transition-opacity duration-300">
                    <div class="w-8 h-8 border-4 border-gray-200 border-t-black rounded-full animate-spin"></div>
                </div>
            </div>
        </div>

        <!-- Exterior color swatches -->
        <div class="content-container mt-6 md:mt-8" id="exterior-controls">
            <div class="border-t border-gray-100 pt-6 flex items-center gap-6 md:gap-8">
                <span class="text-sm md:text-base font-normal text-gray-400 tracking-wide whitespace-nowrap">Cores Exteriores</span>
                <div class="flex items-center gap-3 md:gap-4">
                    @php
                        $exteriorColors = [
                            ['key' => 'golden', 'name' => 'Desert Gold', 'swatch' => 'Desert Gold.png'],
                            ['key' => 'green', 'name' => 'Emerald Green', 'swatch' => 'Emerald Green.png'],
                            ['key' => 'gray', 'name' => 'Basalt Grey', 'swatch' => 'Basalt Grey.png'],
                            ['key' => 'white', 'name' => 'Polar White', 'swatch' => 'Polar White.png'],
                            ['key' => 'black', 'name' => 'Obsidian Black - Black Knight Edition', 'swatch' => 'Obsidian Black - Black Knight Edition.png'],
                        ];
                    @endphp
                    @foreach($exteriorColors as $color)
                        <div class="relative group">
                            <button
                                class="exterior-color-swatch w-10 h-10 md:w-11 md:h-11 overflow-hidden rounded-[3px] border-2 transition-all hover:border-gray-400 {{ $loop->first ? 'border-black active-color' : 'border-gray-200' }}"
                                data-color="{{ $color['key'] }}"
                                aria-label="{{ $color['name'] }}"
                                aria-pressed="{{ $loop->first ? 'true' : 'false' }}"
                            >
                                <img src="{{ asset('assets/rox_adamas/exterior_colors/' . $color['swatch']) }}" alt="" class="w-full h-full object-cover pointer-events-none">
                            </button>
                            <span class="pointer-events-none absolute left-1/2 top-full z-10 mt-2 w-max max-w-48 -translate-x-1/2 rounded bg-black px-2 py-1 text-center text-xs text-white opacity-0 transition-opacity duration-200 group-hover:opacity-100">{{ $color['name'] }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Interior configuration -->
        <div class="content-container mt-6 md:mt-8 hidden" id="interior-controls">
            <div class="flex flex-col gap-5 bg-[#F7F7F7] px-5 py-6 md:flex-row md:items-center md:justify-center md:gap-8 md:px-8">
                <div class="flex flex-wrap items-center gap-3 md:gap-5">
                    <span class="text-xs md:text-sm font-normal tracking-wide text-black whitespace-nowrap">Configuração dos bancos</span>
                    <div class="flex items-center gap-3 md:gap-4">
                        <button class="interior-layout-button border border-black bg-white px-4 py-2.5 text-xs tracking-wide text-black transition-none md:px-5" data-layout="first-class-6-seater" aria-pressed="true">First-Class 6-Seater</button>
                        <button class="interior-layout-button border border-gray-300 bg-white px-4 py-2.5 text-xs tracking-wide text-black transition-none md:px-5" data-layout="couch-7-seater" aria-pressed="false">Couch 7-Seater</button>
                    </div>
                </div>
                <div class="flex flex-wrap items-center gap-3 md:gap-5">
                    <span class="text-xs md:text-sm font-normal tracking-wide text-black whitespace-nowrap">Cor do interior</span>
                    <div class="flex items-center gap-3 md:gap-4">
                        @php
                            $interiorColors = [
                                ['key' => 'amethyst_purple', 'name' => 'Amethyst Purple', 'hex' => '#776D88'],
                                ['key' => 'amber_orange', 'name' => 'Amber Orange', 'hex' => '#D5804A'],
                                ['key' => 'pearl_black', 'name' => 'Pearl Black', 'hex' => '#292A2C'],
                                ['key' => 'jade_white', 'name' => 'Jade White', 'hex' => '#D5D5D5'],
                            ];
                        @endphp
                        @foreach($interiorColors as $color)
                            <div class="relative group">
                                <button class="interior-color-swatch h-8 w-8 border-2 transition-none {{ $loop->first ? 'border-black p-0.5' : 'border-transparent' }}" data-color="{{ $color['key'] }}" aria-label="{{ $color['name'] }}" aria-pressed="{{ $loop->first ? 'true' : 'false' }}">
                                    <span class="block h-full w-full" style="background-color: {{ $color['hex'] }};"></span>
                                </button>
                                <span class="pointer-events-none absolute left-1/2 top-full z-10 mt-2 w-max max-w-48 -translate-x-1/2 rounded bg-black px-2 py-1 text-center text-xs text-white opacity-0 transition-opacity duration-200 group-hover:opacity-100">{{ $color['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dark Features (Capacidade todo-o-terreno 2) -->
    <div class="feature-wrapper relative" style="height: 200vh;">
        <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
            <video autoplay loop muted playsinline poster="{{ asset('assets/life.jpg') }}" class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4">
            </video>
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
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up cursor-pointer" id="chassis-card-2">
                        <img src="{{ asset('assets/1.jpg') }}" alt="Arquitectura de Chassis" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Arquitectura de Chassis de Vanguarda</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                        </div>
                    </div>
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up cursor-pointer" id="terrain-card-2">
                        <img src="{{ asset('assets/seat-direita.avif') }}" alt="Terreno" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Comprovado Globalmente, Domínio Total em Qualquer Terreno</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                        </div>
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
                    <!--<a href="#" class="feature-title inline-block border border-white/60 text-white text-xs md:text-sm font-medium tracking-widest uppercase px-8 py-3 hover:bg-white hover:text-black transition-all duration-300" style="opacity: 0; transform: translateY(40px);">MAIS</a>-->
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
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up cursor-pointer" id="presence-card">
                        <img src="{{ asset('assets/adamas.jpg') }}" alt="Presença Imponente" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Presença Imponente a Qualquer Hora, em Qualquer Lugar</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                        </div>
                    </div>
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up cursor-pointer" id="details-card">
                        <img src="{{ asset('assets/banner1.jpg') }}" alt="Detalhes de Distinção" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Detalhes que Definem Distinção</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Dark Features (Interior Design) -->
    <div class="feature-wrapper relative" style="height: 200vh;">
        <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
            <video autoplay loop muted playsinline poster="{{ asset('assets/7.avif') }}" class="absolute inset-0 w-full h-full object-cover">
                <source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-black/30"></div>
            <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
                <div class="content-container w-full">
                    <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Design Interior</p>
                    <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-6 md:mb-8 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Requinte nos Detalhes, Luxo sem Esforço</h2>
                    <a href="{{ route('especificacoes', 'rox-adamas') }}" class="feature-title inline-block border border-white/60 text-white text-xs md:text-sm font-medium tracking-widest uppercase px-8 py-3 hover:bg-white hover:text-black transition-all duration-300" style="opacity: 0; transform: translateY(40px);">MAIS</a>
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
                <div class="relative h-[420px] md:h-[680px] overflow-hidden group mb-4 md:mb-6 animate-up cursor-pointer" id="cabin-main-card">
                    <img src="{{ asset('assets/seat-superior.avif') }}" alt="ROX ADAMAS configuração de seis lugares" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-1">Uma cabina luxuosa, concebida a pensar em si</h3>
                        </div>
                        <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                    <div class="relative h-[340px] md:h-[560px] overflow-hidden group animate-up cursor-pointer" id="cabin-space-card">
                        <img src="{{ asset('assets/6.avif') }}" alt="ROX ADAMAS configuração de sete lugares" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Espaço amplo, conforto supremo</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                        </div>
                    </div>
                    <div class="relative h-[340px] md:h-[560px] overflow-hidden group animate-up cursor-pointer" id="cabin-smart-card">
                        <img src="{{ asset('assets/b.avif') }}" alt="ROX ADAMAS acabamento interior premium" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Cabina versátil, envolvente e inteligente</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                        </div>
                    </div>
                </div>
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
                <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Tecnologia REEV Líder Mundial</p>
                <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-6 md:mb-8 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Desempenho e autonomia revolucionários para uma experiência de condução completa</h2>
                <a href="{{ route('especificacoes', 'rox-adamas') }}" class="feature-title inline-block border border-white/60 text-white text-xs md:text-sm font-medium tracking-widest uppercase px-8 py-3 hover:bg-white hover:text-black transition-all duration-300" style="opacity: 0; transform: translateY(40px);">MAIS</a>
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
                <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-6 md:mb-8 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Proteção de segurança ao nível de uma fortaleza</h2>
                <a href="{{ route('especificacoes', 'rox-adamas') }}" class="feature-title inline-block border border-white/60 text-white text-xs md:text-sm font-medium tracking-widest uppercase px-8 py-3 hover:bg-white hover:text-black transition-all duration-300" style="opacity: 0; transform: translateY(40px);">MAIS</a>
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
                <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Um ecossistema inteligente integrado</p>
                <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-6 md:mb-8 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Ecossistema Inteligente Líder</h2>
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
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up cursor-pointer" id="cockpit-card">
                        <img src="{{ asset('assets/1.jpg') }}" alt="Cockpit Inteligente" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Cockpit Inteligente: Intuitivo e Envolvente</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                        </div>
                    </div>
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up cursor-pointer" id="driving-card">
                        <img src="{{ asset('assets/banner-v.avif') }}" alt="Assistência à Condução" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Assistência Inteligente à Condução</h3>
                            </div>
                            <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
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
                        <img src="{{ asset('assets/kitchen.jpg') }}" alt="Sistema de Cozinha" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Sistema de Cozinha na Mala</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">Um aroma de cozinha, acrescentando calor à sua viagem</p>
                            </div>
                        </div>
                    </div>
                    <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                        <img src="{{ asset('assets/camping.jpg') }}" alt="Camping" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                        <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6">
                            <div class="text-white">
                                <h3 class="text-lg md:text-xl font-medium mb-1">Acampar a qualquer hora, em qualquer lugar</h3>
                                <p class="font-light text-xs md:text-sm text-gray-300">O Modo Camping mantém a energia ligada mesmo quando se afasta</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Presence Modal -->
    <div id="presence-modal" class="fixed inset-0 z-[200] hidden" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(4px);">
        <div id="presence-modal-panel" class="absolute inset-0 bg-white overflow-y-auto translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)]">
            <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="content-container flex items-center justify-between py-4 md:py-5">
                    <h2 class="text-lg md:text-xl font-medium text-black">Presença Imponente a Qualquer Hora, em Qualquer Lugar</h2>
                    <button id="presence-modal-close" class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-black transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            </div>
            <div class="content-container py-10 md:py-16 space-y-12 md:space-y-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="aspect-video"><video autoplay loop muted playsinline poster="{{ asset('assets/adamas.jpg') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4"></video></div>
                    <div class="bg-gray-100 flex items-center p-8 md:p-12"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Design Exterior Arrojado</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">O ROX ADAMAS combina linhas musculadas com acabamentos premium, criando uma presença imponente que se destaca em qualquer cenário, da cidade ao campo.</p></div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="bg-gray-100 flex items-center p-8 md:p-12 order-2 md:order-1"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Iluminação Distintiva</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Faróis LED com assinatura luminosa exclusiva e luzes diurnas que conferem ao ADAMAS uma identidade visual inconfundível, tanto de dia como de noite.</p></div></div>
                    <div class="aspect-video order-1 md:order-2"><video autoplay loop muted playsinline poster="{{ asset('assets/banner-adamas.avif') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/banner_p.mp4') }}" type="video/mp4"></video></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Details Modal -->
    <div id="details-modal" class="fixed inset-0 z-[200] hidden" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(4px);">
        <div id="details-modal-panel" class="absolute inset-0 bg-white overflow-y-auto translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)]">
            <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="content-container flex items-center justify-between py-4 md:py-5">
                    <h2 class="text-lg md:text-xl font-medium text-black">Detalhes que Definem Distinção</h2>
                    <button id="details-modal-close" class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-black transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            </div>
            <div class="content-container py-10 md:py-16 space-y-12 md:space-y-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="aspect-video"><video autoplay loop muted playsinline poster="{{ asset('assets/lichengbei.jpg') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4"></video></div>
                    <div class="bg-gray-100 flex items-center p-8 md:p-12"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Acabamentos Premium</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Cada detalhe do ROX ADAMAS foi concebido para transmitir exclusividade, desde os materiais nobres até à precisão de cada linha e superfície.</p></div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="bg-gray-100 flex items-center p-8 md:p-12 order-2 md:order-1"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Jantes Exclusivas</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Design de jantes exclusivo que combina elegância e robustez, preparado para qualquer tipo de terreno sem comprometer a estética premium.</p></div></div>
                    <div class="aspect-video order-1 md:order-2"><video autoplay loop muted playsinline poster="{{ asset('assets/keji.jpg') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4"></video></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cockpit Modal -->
    <div id="cockpit-modal" class="fixed inset-0 z-[200] hidden" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(4px);">
        <div id="cockpit-modal-panel" class="absolute inset-0 bg-white overflow-y-auto translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)]">
            <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="content-container flex items-center justify-between py-4 md:py-5">
                    <h2 class="text-lg md:text-xl font-medium text-black">Cockpit Inteligente: Intuitivo e Envolvente</h2>
                    <button id="cockpit-modal-close" class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-black transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            </div>
            <div class="content-container py-10 md:py-16 space-y-12 md:space-y-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="aspect-video"><video autoplay loop muted playsinline poster="{{ asset('assets/keji.jpg') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4"></video></div>
                    <div class="bg-gray-100 flex items-center p-8 md:p-12"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Ecrã Panorâmico Integrado</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">O ecrã panorâmico de alta resolução coloca toda a informação e entretenimento ao alcance do condutor, com uma interface intuitiva e fluida.</p></div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="bg-gray-100 flex items-center p-8 md:p-12 order-2 md:order-1"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Interacção por Voz</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Sistema de reconhecimento de voz inteligente que suporta múltiplos idiomas incluindo Português, Árabe, Inglês, Francês, Russo e Espanhol.</p></div></div>
                    <div class="aspect-video order-1 md:order-2"><video autoplay loop muted playsinline poster="{{ asset('assets/1.jpg') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/banner_p.mp4') }}" type="video/mp4"></video></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Driving Assistance Modal -->
    <div id="driving-modal" class="fixed inset-0 z-[200] hidden" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(4px);">
        <div id="driving-modal-panel" class="absolute inset-0 bg-white overflow-y-auto translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)]">
            <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="content-container flex items-center justify-between py-4 md:py-5">
                    <h2 class="text-lg md:text-xl font-medium text-black">Assistência Inteligente à Condução</h2>
                    <button id="driving-modal-close" class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-black transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            </div>
            <div class="content-container py-10 md:py-16 space-y-12 md:space-y-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="aspect-video"><video autoplay loop muted playsinline poster="{{ asset('assets/banner-v.avif') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4"></video></div>
                    <div class="bg-gray-100 flex items-center p-8 md:p-12"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Consciência de Precisão</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Sensores avançados e câmaras de alta definição proporcionam uma percepção envolvente de 360°, garantindo viagens confiantes em qualquer condição.</p></div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="bg-gray-100 flex items-center p-8 md:p-12 order-2 md:order-1"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Condução Autónoma Assistida</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Sistema de assistência à condução de nível avançado que combina cruise control adaptativo, manutenção de faixa e travagem de emergência automática.</p></div></div>
                    <div class="aspect-video order-1 md:order-2"><video autoplay loop muted playsinline poster="{{ asset('assets/adamas.jpg') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4"></video></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cabin Main Modal -->
    <div id="cabin-main-modal" class="fixed inset-0 z-[200] hidden" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(4px);">
        <div id="cabin-main-modal-panel" class="absolute inset-0 bg-white overflow-y-auto translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)]">
            <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="content-container flex items-center justify-between py-4 md:py-5">
                    <h2 class="text-lg md:text-xl font-medium text-black">Uma cabina luxuosa, concebida a pensar em si</h2>
                    <button id="cabin-main-modal-close" class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-black transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            </div>
            <div class="content-container py-10 md:py-16 space-y-12 md:space-y-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="aspect-video"><video autoplay loop muted playsinline poster="{{ asset('assets/seat-superior.avif') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4"></video></div>
                    <div class="bg-gray-100 flex items-center p-8 md:p-12"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Assentos Zero-Gravity de Primeira Classe</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Dois assentos de primeira classe com regulação eléctrica completa, ventilação, aquecimento e massagem tipo Shiatsu para o máximo conforto em qualquer viagem.</p></div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="bg-gray-100 flex items-center p-8 md:p-12 order-2 md:order-1"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Modo Cama Completa</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Os assentos reclinam completamente para criar uma superfície plana, transformando a cabina num espaço de descanso ideal para viagens longas ou campismo.</p></div></div>
                    <div class="aspect-video order-1 md:order-2"><video autoplay loop muted playsinline poster="{{ asset('assets/7.avif') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4"></video></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cabin Space Modal -->
    <div id="cabin-space-modal" class="fixed inset-0 z-[200] hidden" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(4px);">
        <div id="cabin-space-modal-panel" class="absolute inset-0 bg-white overflow-y-auto translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)]">
            <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="content-container flex items-center justify-between py-4 md:py-5">
                    <h2 class="text-lg md:text-xl font-medium text-black">Espaço amplo, conforto supremo</h2>
                    <button id="cabin-space-modal-close" class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-black transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            </div>
            <div class="content-container py-10 md:py-16 space-y-12 md:space-y-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="aspect-video"><video autoplay loop muted playsinline poster="{{ asset('assets/6.avif') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/banner_p.mp4') }}" type="video/mp4"></video></div>
                    <div class="bg-gray-100 flex items-center p-8 md:p-12"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Configuração 7 Lugares (2-3-2)</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">A configuração sofá de 7 lugares oferece espaço generoso para toda a família, com o banco central configurável para máximo conforto ou capacidade de carga.</p></div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="bg-gray-100 flex items-center p-8 md:p-12 order-2 md:order-1"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Entre-eixos de 3.010 mm</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">O generoso entre-eixos garante espaço amplo para pernas em todas as filas, proporcionando uma experiência de viagem confortável para cada passageiro.</p></div></div>
                    <div class="aspect-video order-1 md:order-2"><video autoplay loop muted playsinline poster="{{ asset('assets/seat-direita.avif') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4"></video></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Cabin Smart Modal -->
    <div id="cabin-smart-modal" class="fixed inset-0 z-[200] hidden" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(4px);">
        <div id="cabin-smart-modal-panel" class="absolute inset-0 bg-white overflow-y-auto translate-y-full transition-transform duration-700 ease-[cubic-bezier(0.25,0.1,0.25,1)]">
            <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                <div class="content-container flex items-center justify-between py-4 md:py-5">
                    <h2 class="text-lg md:text-xl font-medium text-black">Cabina versátil, envolvente e inteligente</h2>
                    <button id="cabin-smart-modal-close" class="w-10 h-10 flex items-center justify-center text-gray-400 hover:text-black transition-colors"><svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg></button>
                </div>
            </div>
            <div class="content-container py-10 md:py-16 space-y-12 md:space-y-20">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="aspect-video"><video autoplay loop muted playsinline poster="{{ asset('assets/b.avif') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4"></video></div>
                    <div class="bg-gray-100 flex items-center p-8 md:p-12"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Iluminação Ambiente Inteligente</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Sistema de iluminação ambiente com múltiplos modos que se adapta ao seu estado de espírito, criando uma atmosfera envolvente e personalizada na cabina.</p></div></div>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-0">
                    <div class="bg-gray-100 flex items-center p-8 md:p-12 order-2 md:order-1"><div><h3 class="text-lg md:text-xl font-medium text-black mb-3">Climatização Multizona</h3><p class="text-sm md:text-base text-gray-600 leading-relaxed">Sistema de climatização automática multizona que permite a cada passageiro definir a sua temperatura ideal, garantindo conforto personalizado em cada viagem.</p></div></div>
                    <div class="aspect-video order-1 md:order-2"><video autoplay loop muted playsinline poster="{{ asset('assets/keji.jpg') }}" class="w-full h-full object-cover"><source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4"></video></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Disclaimers -->
    <section class="bg-black py-12 md:py-16">
        <div class="content-container">
            <div class="space-y-3 text-[10px] md:text-xs text-white/40 leading-relaxed">
                <p>*Todos os dados de consumo de energia nesta página baseiam-se em condições de teste WLTC. O consumo real pode variar dependendo da utilização real.</p>
                <p>*O sistema de assistência à condução é apenas uma função auxiliar e não consegue lidar com todas as condições de trânsito, meteorológicas ou rodoviárias. O condutor deve manter sempre o controlo activo do veículo.</p>
                <p>*A tinta exterior preta está disponível apenas com as jantes starlight pretas.</p>
                <p>*Algumas funcionalidades poderão ser introduzidas através de futuras actualizações OTA ou upgrades pós-venda. Os detalhes do produto podem ter sido alterados desde a data de publicação e estão sujeitos a modificação sem aviso prévio.</p>
                <p>*As funcionalidades e especificações aqui descritas são fornecidas apenas para fins ilustrativos e podem variar dependendo do país ou região onde o veículo é comercializado.</p>
                <p>*A ROX não garante que as informações contidas neste material — incluindo imagens, descrições e funções apresentadas — sejam actuais, precisas ou completas.</p>
                <p>*Sujeito às leis e regulamentos aplicáveis, a ROX reserva-se o direito de modificar, actualizar ou rever os conteúdos deste material a qualquer momento sem aviso prévio.</p>
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
                            <p class="text-lg font-semibold text-black">1.226 km</p>
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
                    <img src="{{ asset('assets/adamas.png') }}" alt="ROX ADAMAS" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

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
                var centerW;
                if (vw < 640) centerW = vw * 0.92;
                else if (vw < 768) centerW = vw * 0.88;
                else if (vw < 1024) centerW = vw * 0.78;
                else if (vw < 1440) centerW = vw * 0.68;
                else centerW = vw * 0.60;
                cards.forEach(function(c) { c.style.width = centerW + 'px'; });

                var arrowInset = vw < 640 ? 12 : vw < 1024 ? 16 : 24;
                var cardLeft = (vw - centerW) / 2;
                prevBtn.style.left = (cardLeft + arrowInset) + 'px';
                nextBtn.style.right = (cardLeft + arrowInset) + 'px';

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
            const exteriorSwatches = document.querySelectorAll('.exterior-color-swatch');
            const viewerTabs = document.querySelectorAll('.viewer-tab');
            const exteriorControls = document.getElementById('exterior-controls');
            const interiorControls = document.getElementById('interior-controls');
            const interiorViewer = document.getElementById('interior-viewer');
            const interiorImage = document.getElementById('interior-image');
            const interiorLayoutButtons = document.querySelectorAll('.interior-layout-button');
            const interiorColorSwatches = document.querySelectorAll('.interior-color-swatch');
            const loading = document.getElementById('viewer-loading');
            const icon360 = document.getElementById('icon-360');
            
            // Frame numbers correspond to the image files available for each exterior color.
            let currentColor = 'golden';
            let currentFrame = 1;
            const colorFrameIndexes = {
                golden: Array.from({ length: 36 }, (_, index) => index + 1),
                green: [1, 3, 4, 12, 16, 23, 24, 26, 28, 30, 31, 34],
                gray: [1, 3, 4, 12, 16, 23, 24, 26, 28, 30, 31, 34],
                white: [1, 3, 4, 12, 16, 23, 24, 26, 28, 30, 31, 34],
                black: [1, 3, 4, 12, 16, 23, 24, 26, 28, 30, 31, 34]
            };
            let images = {}; // Cache images by color
            const loadedColors = new Set();
            const loadingColors = new Set();
            let isDragging = false;
            let startX = 0;
            let isLoaded = false;
            let isTouchDevice = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);
            let activeViewer = 'exterior';
            let currentInteriorLayout = 'first-class-6-seater';
            let currentInteriorColor = 'amethyst_purple';
            const interiorImageBase = @json(asset('assets/rox_adamas/interior'));
            const interiorLayouts = {
                'first-class-6-seater': 'First-Class 6-Seater',
                'couch-7-seater': 'Couch 7-Seater'
            };
            
            // Set internal resolution of canvas high for crispness
            canvas.width = 1920;
            canvas.height = 1080;
            
            function framePositionForAngle(color, angle) {
                const frameIndexes = colorFrameIndexes[color];
                let closestPosition = 0;
                let shortestDistance = Infinity;

                frameIndexes.forEach((frameNumber, index) => {
                    const distance = Math.abs(frameNumber - angle);
                    const circularDistance = Math.min(distance, 36 - distance);
                    if (circularDistance < shortestDistance) {
                        closestPosition = index;
                        shortestDistance = circularDistance;
                    }
                });

                return closestPosition + 1;
            }

            function currentAngle() {
                return colorFrameIndexes[currentColor][currentFrame - 1] || 1;
            }

            function completeColorLoad(color) {
                loadedColors.add(color);
                loadingColors.delete(color);

                // A color may finish loading after another one has been selected.
                // Only the active selection is allowed to draw on the canvas.
                if (color !== currentColor) return;

                drawFrame(currentFrame, color);
                loading.style.opacity = '0';
                loading.style.pointerEvents = 'none';
                isLoaded = true;
            }

            function loadImagesForColor(color, showLoader = true) {
                if (showLoader) {
                    loading.style.opacity = '1';
                    loading.style.pointerEvents = 'auto';
                    isLoaded = false;
                }

                if (loadedColors.has(color)) {
                    if (showLoader && color === currentColor) {
                        drawFrame(currentFrame, color);
                        loading.style.opacity = '0';
                        loading.style.pointerEvents = 'none';
                        isLoaded = true;
                    }
                    return;
                }

                // This color is already being preloaded; its existing completion
                // handler will render it when it becomes the active selection.
                if (loadingColors.has(color)) return;

                const frameIndexes = colorFrameIndexes[color];
                images[color] = [];
                loadingColors.add(color);
                let loadedCount = 0;

                frameIndexes.forEach((frameNumber, index) => {
                    const img = new Image();
                    const markComplete = () => {
                        loadedCount++;
                        if (loadedCount === frameIndexes.length) completeColorLoad(color);
                    };

                    img.onload = markComplete;
                    img.onerror = markComplete;
                    img.src = `/assets/rox_adamas/${color}_${frameNumber}.png`;
                    images[color][index] = img;
                });
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

            function getInteriorImagePath(layout, color) {
                return `${interiorImageBase}/${encodeURIComponent(interiorLayouts[layout])}/${color}.png`;
            }

            function updateInteriorImage() {
                interiorImage.src = getInteriorImagePath(currentInteriorLayout, currentInteriorColor);
                interiorImage.alt = `Interior ROX ADAMAS ${interiorLayouts[currentInteriorLayout]} em ${currentInteriorColor.replace('_', ' ')}`;
            }

            function preloadInteriorImages() {
                Object.keys(interiorLayouts).forEach(layout => {
                    ['amethyst_purple', 'amber_orange', 'pearl_black', 'jade_white'].forEach(color => {
                        const image = new Image();
                        image.src = getInteriorImagePath(layout, color);
                    });
                });
            }

            function preloadExteriorImages() {
                Object.keys(colorFrameIndexes).forEach(color => {
                    if (color !== currentColor) loadImagesForColor(color, false);
                });
            }
            
            // Initial load
            loadImagesForColor(currentColor);
            
            // Color Switching Logic
            exteriorSwatches.forEach(swatch => {
                swatch.addEventListener('click', (e) => {
                    exteriorSwatches.forEach(s => { s.classList.remove('border-black'); s.classList.add('border-gray-200'); });
                    exteriorSwatches.forEach(s => s.setAttribute('aria-pressed', 'false'));
                    const selectedSwatch = e.currentTarget;
                    selectedSwatch.classList.remove('border-gray-200');
                    selectedSwatch.classList.add('border-black');
                    selectedSwatch.setAttribute('aria-pressed', 'true');
                    const angle = currentAngle();
                    currentColor = selectedSwatch.getAttribute('data-color');
                    currentFrame = framePositionForAngle(currentColor, angle);
                    loadImagesForColor(currentColor);
                });
            });

            viewerTabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    activeViewer = tab.dataset.tab;
                    const isInterior = activeViewer === 'interior';

                    viewerTabs.forEach(item => {
                        const isActive = item === tab;
                        item.classList.toggle('text-black', isActive);
                        item.classList.toggle('text-gray-400', !isActive);
                        item.classList.toggle('border-black', isActive);
                        item.classList.toggle('border-transparent', !isActive);
                    });

                    canvas.classList.toggle('hidden', isInterior);
                    interiorViewer.classList.toggle('hidden', !isInterior);
                    exteriorControls.classList.toggle('hidden', isInterior);
                    interiorControls.classList.toggle('hidden', !isInterior);
                    container.classList.toggle('cursor-none', !isInterior);
                    container.classList.toggle('cursor-default', isInterior);
                    icon360.style.opacity = '0';
                    icon360.classList.toggle('hidden', isInterior);

                    if (isInterior) {
                        updateInteriorImage();
                    }
                });
            });

            interiorLayoutButtons.forEach(button => {
                button.addEventListener('click', () => {
                    currentInteriorLayout = button.dataset.layout;
                    interiorLayoutButtons.forEach(item => {
                        const isActive = item === button;
                        item.classList.toggle('border-black', isActive);
                        item.classList.toggle('border-gray-300', !isActive);
                        item.setAttribute('aria-pressed', String(isActive));
                    });
                    updateInteriorImage();
                });
            });

            interiorColorSwatches.forEach(swatch => {
                swatch.addEventListener('click', () => {
                    currentInteriorColor = swatch.dataset.color;
                    interiorColorSwatches.forEach(item => {
                        const isActive = item === swatch;
                        item.classList.toggle('border-black', isActive);
                        item.classList.toggle('border-transparent', !isActive);
                        item.classList.toggle('p-0.5', isActive);
                        item.setAttribute('aria-pressed', String(isActive));
                    });
                    updateInteriorImage();
                });
            });

            preloadInteriorImages();
            preloadExteriorImages();
            
            // Custom Cursor Logic
            container.addEventListener('mouseenter', () => {
                if(activeViewer === 'exterior' && !isDragging && !isTouchDevice && isLoaded) {
                    icon360.style.opacity = '1';
                }
            });

            container.addEventListener('mouseleave', () => {
                icon360.style.opacity = '0';
                isDragging = false;
            });
            
            // Interaction Logic
            function startDrag(x) {
                if(activeViewer !== 'exterior' || !isLoaded) return;
                isDragging = true;
                startX = x;
                icon360.style.opacity = '0'; // Hide 360 icon when user starts interacting
            }
            
            function onDrag(x, y, isMouse = false) {
                if (activeViewer !== 'exterior' || !isLoaded) return;
                
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
                    const totalFrames = colorFrameIndexes[currentColor].length;
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
                if(activeViewer === 'exterior' && !isTouchDevice) {
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
                    var centerW;
                    if (vw < 640) centerW = vw * 0.92;
                    else if (vw < 768) centerW = vw * 0.88;
                    else if (vw < 1024) centerW = vw * 0.78;
                    else if (vw < 1440) centerW = vw * 0.68;
                    else centerW = vw * 0.60;
                    specsCards.forEach(function (card) { card.style.width = centerW + 'px'; });

                    var arrowInset = vw < 640 ? 12 : vw < 1024 ? 16 : 24;
                    var cardLeft = (vw - centerW) / 2;
                    if (specsPrev) specsPrev.style.left = (cardLeft + arrowInset) + 'px';
                    if (specsNext) specsNext.style.right = (cardLeft + arrowInset) + 'px';

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

            // Slide-up modal helper
            function initModal(cardId, modalId, panelId, closeId) {
                var card = document.getElementById(cardId);
                var modal = document.getElementById(modalId);
                var panel = document.getElementById(panelId);
                var closeBtn = document.getElementById(closeId);
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
            }

            initModal('chassis-card', 'chassis-modal', 'chassis-modal-panel', 'chassis-modal-close');
            initModal('terrain-card', 'terrain-modal', 'terrain-modal-panel', 'terrain-modal-close');
            initModal('chassis-card-2', 'chassis-modal', 'chassis-modal-panel', 'chassis-modal-close');
            initModal('terrain-card-2', 'terrain-modal', 'terrain-modal-panel', 'terrain-modal-close');
            initModal('presence-card', 'presence-modal', 'presence-modal-panel', 'presence-modal-close');
            initModal('details-card', 'details-modal', 'details-modal-panel', 'details-modal-close');
            initModal('cockpit-card', 'cockpit-modal', 'cockpit-modal-panel', 'cockpit-modal-close');
            initModal('driving-card', 'driving-modal', 'driving-modal-panel', 'driving-modal-close');
            initModal('cabin-main-card', 'cabin-main-modal', 'cabin-main-modal-panel', 'cabin-main-modal-close');
            initModal('cabin-space-card', 'cabin-space-modal', 'cabin-space-modal-panel', 'cabin-space-modal-close');
            initModal('cabin-smart-card', 'cabin-smart-modal', 'cabin-smart-modal-panel', 'cabin-smart-modal-close');
        });
    </script>
</x-front-layout>
