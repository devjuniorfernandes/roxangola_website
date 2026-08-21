<x-front-layout>
    <x-slot name="title">ROX 01 - SUV Todo-o-Terreno de Luxo</x-slot>

    <!-- Hero Section -->
    <section class="h-[100svh] w-full relative flex items-end overflow-hidden">
        <img src="{{ cms_image('rox01.hero.bg', asset('assets/banner2.jpg')) }}" alt="ROX 01" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="relative z-10 site-container pb-12 sm:pb-16 md:pb-20 w-full">
            <img src="{{ asset('assets/rox01-global.svg') }}" alt="ROX 01"
                class="h-8 sm:h-10 md:h-14 mb-2 sm:mb-3 opacity-0 translate-y-8"
                style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">
            <p class="text-sm sm:text-base md:text-xl font-light text-gray-200 tracking-wide opacity-0 translate-y-8"
                style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">
                {{ __('rox01.hero.subtitle') }}
            </p>
        </div>
    </section>

    <!-- Highlights Slider Section -->
    <section class="bg-white py-10 md:py-16 overflow-hidden">
        @php
            $highlights = [
                [
                    'title' => __('rox01.highlights.0.title'),
                    'img' => 'Extra-large.avif',
                    'video' => '',
                    'stats' => __('rox01.highlights.0.stats'),
                ],
                [
                    'title' => __('rox01.highlights.1.title'),
                    'img' => '',
                    'video' => 'rox_1/bancos.mp4',
                    'overlay' => true,
                    'stats' => __('rox01.highlights.1.stats'),
                ],
                [
                    'title' => __('rox01.highlights.2.title'),
                    'img' => '',
                    'video' => 'rox_1/Autonomy.mp4',
                    'stats' => __('rox01.highlights.2.stats'),
                ],
                [
                    'title' => __('rox01.highlights.3.title'),
                    'img' => '',
                    'video' => 'rox_1/conducoa-assistida.mp4',
                    'stats' => __('rox01.highlights.3.stats'),
                ],
                [
                    'title' => __('rox01.highlights.4.title'),
                    'img' => '',
                    'video' => 'rox_1/protaction.mp4',
                    'stats' => __('rox01.highlights.4.stats'),
                ],
            ];
        @endphp

        <div class="relative w-full">
            <div class="flex items-stretch" id="hl-track">
                @foreach($highlights as $i => $hl)
                    <div class="hl-slide flex-shrink-0 transition-opacity duration-500">
                        <div class="relative aspect-[16/9] overflow-hidden bg-black">
                            @if($hl['video'])
                                <video class="w-full h-full object-cover" poster="{{ asset('assets/' . $hl['img']) }}" autoplay
                                    muted loop playsinline>
                                    <source src="{{ asset('assets/' . $hl['video']) }}" type="video/mp4">
                                </video>
                            @else
                                <img src="{{ asset('assets/' . $hl['img']) }}" alt="{{ $hl['title'] }}"
                                    class="w-full h-full object-cover">
                            @endif

                            {{-- Overlay + texto sobreposto: só em ecrãs md+ --}}
                            <div class="hidden md:block">
                                @if(!empty($hl['overlay']))
                                    <!-- Overlays ovais (elipses pretas) para legibilidade do título e das especificações -->
                                    <div class="absolute inset-x-0 top-0 h-2/5 pointer-events-none"
                                        style="background: radial-gradient(120% 105% at 50% 0%, rgba(0,0,0,0.6) 0%, rgba(0,0,0,0.28) 45%, transparent 75%);">
                                    </div>
                                    <div class="absolute inset-x-0 bottom-0 h-3/5 pointer-events-none"
                                        style="background: radial-gradient(120% 105% at 50% 100%, rgba(0,0,0,0.62) 0%, rgba(0,0,0,0.3) 45%, transparent 75%);">
                                    </div>
                                @endif

                                <!-- Title top center -->
                                <div class="absolute top-6 md:top-10 left-0 right-0 px-8 text-center">
                                    <h3 class="text-lg md:text-2xl lg:text-3xl font-light text-white drop-shadow-md">
                                        {{ $hl['title'] }}</h3>
                                </div>

                                <!-- Stats bottom -->
                                <div
                                    class="absolute bottom-6 md:bottom-8 lg:bottom-10 left-0 right-0 px-6 md:px-8 lg:px-14">
                                    <div class="flex flex-wrap md:flex-nowrap gap-x-5 lg:gap-x-10 gap-y-3">
                                        @foreach($hl['stats'] as $stat)
                                            <div class="text-white basis-[45%] md:basis-0 md:flex-1 md:min-w-0">
                                                <p class="text-[11px] lg:text-sm font-light text-gray-200 mb-1">
                                                    {{ $stat['label'] }}</p>
                                                <p class="text-xs md:text-sm lg:text-base font-semibold leading-snug">
                                                    {{ $stat['value'] }}@if($stat['unit']) <span
                                                    class="font-normal">{{ $stat['unit'] }}</span>@endif</p>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Telemóvel: imagem em cima, detalhes dentro de um card (fundo igual às descrições dos modais)
                        --}}
                        <div class="hl-body md:hidden bg-[#F6F7F8] p-5 min-h-[172px] flex flex-col">
                            <h3 class="text-base font-medium text-black mb-3 leading-snug">{{ $hl['title'] }}</h3>
                            <div class="grid grid-cols-2 gap-x-4 gap-y-3">
                                @foreach($hl['stats'] as $stat)
                                    <div>
                                        <p class="text-[11px] font-light text-gray-400 mb-0.5">{{ $stat['label'] }}</p>
                                        <p class="text-sm font-semibold text-black leading-snug">
                                            {{ $stat['value'] }}@if($stat['unit']) <span
                                            class="font-normal text-gray-600">{{ $stat['unit'] }}</span>@endif</p>
                                    </div>
                                @endforeach
                            </div>
                            <p class="text-[11px] font-light text-gray-400 leading-snug mt-auto pt-4">{{ __('rox01.highlights.specs_note') }}
                            </p>
                        </div>
                        <p class="hidden md:block text-[11px] md:text-xs text-gray-400 font-light mt-3">{{ __('rox01.highlights.specs_note') }}</p>
                    </div>
                @endforeach
            </div>
        </div>

        <!-- Dots (telemóvel) -->
        <div id="hl-dots" class="flex md:hidden justify-center items-center gap-1.5 mt-6"></div>

        <!-- Arrows (desktop) -->
        <div class="hidden md:flex justify-center items-center gap-4 mt-6 md:mt-8">
            <button id="hl-prev"
                class="w-11 h-11 md:w-12 md:h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-700 hover:border-black hover:text-black transition-colors cursor-pointer"
                aria-label="Anterior">
                <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                </svg>
            </button>
            <button id="hl-next"
                class="w-11 h-11 md:w-12 md:h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-700 hover:border-black hover:text-black transition-colors cursor-pointer"
                aria-label="Seguinte">
                <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="1.5"
                    viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                </svg>
            </button>
        </div>
    </section>

    <!-- 360 Viewer Section -->
    <section class="pt-20 pb-14 md:pt-24 md:pb-24 bg-[#F5F6F7] relative overflow-hidden">
        <div class="relative z-10 max-w-[1600px] mx-auto px-6 md:px-8 mb-8 md:mb-10">
            <div class="flex flex-col md:flex-row md:items-start md:justify-between gap-6">
                <h2
                    class="text-2xl md:text-3xl lg:text-[2rem] font-semibold tracking-tight text-[#191919] max-w-md animate-up">
                    {{ __('rox01.viewer.title') }}</h2>
                <div class="flex flex-col md:items-end gap-4 animate-up">
                    <div class="flex gap-6">
                        <button id="viewer-tab-ext"
                            class="text-sm md:text-base pb-1 border-b-2 border-black text-black font-medium transition-colors cursor-pointer">{{ __('rox01.viewer.tab_exterior') }}</button>
                        <button id="viewer-tab-int"
                            class="text-sm md:text-base pb-1 border-b-2 border-transparent text-gray-400 hover:text-gray-600 transition-colors cursor-pointer">{{ __('rox01.viewer.tab_interior') }}</button>
                    </div>
                    <div class="flex flex-nowrap gap-3 md:gap-4" id="exterior-swatches">
                        @php
                            $isEn = app()->getLocale() === 'en';
                            $rox01ExteriorColors = [
                                ['key' => 'white', 'name' => __('rox01.viewer.color_white'), 'swatch' => 'white exterior.png'],
                                ['key' => 'gray',  'name' => __('rox01.viewer.color_gray'),  'swatch' => 'grey exterior.png'],
                                ['key' => 'black', 'name' => __('rox01.viewer.color_black'), 'swatch' => 'black exterior.png'],
                            ];
                        @endphp
                        @foreach($rox01ExteriorColors as $color)
                            <div class="relative group">
                                <button
                                    class="exterior-color-swatch h-8 w-8 overflow-hidden rounded-full border-2 transition-none md:h-9 md:w-9 {{ $loop->first ? 'border-black p-0.5' : 'border-transparent' }}"
                                    data-color="{{ $color['key'] }}" aria-label="{{ $color['name'] }}"
                                    aria-pressed="{{ $loop->first ? 'true' : 'false' }}">
                                    <img src="{{ asset('assets/rox_1/interior/swatches/' . $color['swatch']) }}" alt=""
                                        class="h-full w-full rounded-full object-cover pointer-events-none">
                                </button>
                                <span
                                    class="pointer-events-none absolute left-1/2 top-full z-10 mt-2 w-max max-w-[220px] whitespace-normal text-center leading-snug -translate-x-1/2 rounded bg-black px-2 py-1 text-xs text-white opacity-0 transition-opacity duration-200 group-hover:opacity-100">{{ $color['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="hidden flex flex-nowrap items-center justify-end gap-4 md:gap-6" id="interior-controls">
                        <button
                            class="interior-layout-button shrink-0 border border-black bg-[#191919] px-5 py-2.5 text-xs font-medium tracking-wide text-white transition-none"
                            data-layout="6-seater" aria-pressed="true">{{ __('rox01.viewer.interior_layout_6') }}</button>
                        <button
                            class="interior-layout-button shrink-0 border border-black bg-transparent px-5 py-2.5 text-xs font-medium tracking-wide text-black transition-none"
                            data-layout="7-seater" aria-pressed="false">{{ __('rox01.viewer.interior_layout_7') }}</button>
                        @php
                            $rox01InteriorColors = [
                                ['key' => 'Amber Orange', 'name' => __('rox01.viewer.color_int_orange'), 'swatch' => 'orange interior.png'],
                                ['key' => 'Jade White',   'name' => __('rox01.viewer.color_int_white'),  'swatch' => 'white interior.png'],
                                ['key' => 'Pearl Black',  'name' => __('rox01.viewer.color_int_black'),  'swatch' => 'black interior.png'],
                            ];
                        @endphp
                        @foreach($rox01InteriorColors as $color)
                            <div class="relative group">
                                <button
                                    class="interior-color-swatch h-9 w-9 shrink-0 overflow-hidden rounded-full border-2 transition-none {{ $loop->first ? 'border-[#E5793C] p-0.5' : 'border-transparent' }}"
                                    data-color="{{ $color['key'] }}" aria-label="{{ $color['name'] }}"
                                    aria-pressed="{{ $loop->first ? 'true' : 'false' }}">
                                    <img src="{{ asset('assets/rox_1/interior/swatches/' . $color['swatch']) }}" alt=""
                                        class="h-full w-full rounded-full object-cover pointer-events-none">
                                </button>
                                <span
                                    class="pointer-events-none absolute left-1/2 top-full z-10 mt-2 w-max max-w-[220px] whitespace-normal text-center leading-snug -translate-x-1/2 rounded bg-black px-2 py-1 text-xs text-white opacity-0 transition-opacity duration-200 group-hover:opacity-100">{{ $color['name'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div class="relative mx-auto w-full max-w-[1600px] cursor-none select-none touch-pan-y overflow-hidden"
            id="viewer-container">
            <div id="exterior-viewer-decor">
                <div
                    class="absolute inset-x-0 bottom-0 h-2/5 bg-gradient-to-t from-[#E9EBED] to-transparent pointer-events-none">
                </div>
                <div
                    class="absolute left-1/2 -translate-x-1/2 bottom-[16%] w-[58%] max-w-[760px] aspect-[3.6/1] rounded-[50%] border border-gray-300/50 pointer-events-none">
                </div>
            </div>
            <canvas id="viewer-canvas" class="relative mx-auto block w-full max-h-[76vh] object-contain"></canvas>
            <div id="interior-viewer" class="hidden relative aspect-[1.92/1] w-full overflow-hidden bg-black">
                <img id="interior-image" src="{{ asset('assets/rox_1/interior/6-seater/Amber Orange.jpg') }}"
                    alt="Interior ROX 01 6-seater em Amber Orange"
                    class="absolute inset-0 h-full w-full object-cover object-center">
            </div>
            <div id="icon-360"
                class="absolute flex flex-col items-center justify-center w-16 h-16 md:w-20 md:h-20 bg-[#2A2A2A]/90 backdrop-blur-sm rounded-full text-white transition-opacity duration-300 pointer-events-none shadow-xl z-50 opacity-0 transform -translate-x-1/2 -translate-y-1/2">
                <span class="text-sm md:text-base font-medium tracking-wider mb-[-2px]">360&deg;</span>
                <svg class="w-6 h-6 md:w-8 md:h-8 text-white mt-1" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M 6 13 A 7 3 0 0 0 18 13 M 15 16 L 18 13 L 15 10" />
                </svg>
            </div>
            <div id="viewer-loading"
                class="absolute inset-0 flex items-center justify-center bg-[#F5F6F7] transition-opacity duration-300 z-40">
                <div class="w-8 h-8 border-4 border-gray-200 border-t-black rounded-full animate-spin"></div>
            </div>
        </div>
    </section>

    <!-- Design Features Section -->
    <section class="bg-white">
        @php
            $designFeatures = [
                [
                    'title' => __('rox01.design.0.title'),
                    'desc'  => __('rox01.design.0.desc'),
                    'video' => 'Box-shaped design.mp4',
                    'img'   => '',
                ],
                [
                    'title' => __('rox01.design.1.title'),
                    'desc'  => __('rox01.design.1.desc'),
                    'img'   => '',
                    'video' => 'Headlights inspired by the Chinese character (stone).mp4',
                ],
                [
                    'title' => __('rox01.design.2.title'),
                    'desc'  => __('rox01.design.2.desc'),
                    'img'   => 'showroom.jpg',
                    'video' => '',
                ],
            ];
        @endphp

        @foreach($designFeatures as $i => $feature)
            <div class="relative h-[70vh] md:h-screen w-full overflow-hidden">
                @if($feature['video'])
                    <video class="absolute inset-0 w-full h-full object-cover"
                        poster="{{ asset('assets/' . ($feature['img'] ?? $feature['video'])) }}" autoplay muted loop
                        playsinline>
                        <source src="{{ asset('assets/rox_1/' . $feature['video']) }}" type="video/mp4">
                    </video>
                @else
                    <img src="{{ asset('assets/' . $feature['img']) }}" alt="{{ $feature['title'] }}"
                        class="absolute inset-0 w-full h-full object-cover">
                @endif
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                <div class="absolute bottom-0 left-0 right-0 pb-12 md:pb-20">
                    <div class="content-container">
                        <h2 class="text-2xl md:text-4xl font-light text-white mb-3 animate-up">{{ $feature['title'] }}</h2>
                        <p class="text-sm md:text-base font-light text-gray-300 max-w-xl animate-up">{{ $feature['desc'] }}
                        </p>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <!-- All-terrain Capabilities Section -->
    <section class="bg-white">
        <!-- Wide landscape background with overlay heading -->
        <div class="relative w-full h-[78svh] md:h-auto md:aspect-[16/6] overflow-hidden">
            <img src="{{ cms_image('rox01.terrain.section', asset('assets/banner1_en.jfif')) }}" alt="{{ __('rox01.terrain.section_title') }}"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
            <div class="absolute bottom-8 md:bottom-14 left-0 right-0">
                <div class="content-container">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-light text-white mb-2 md:mb-3">{{ __('rox01.terrain.section_title') }}</h2>
                    <p class="text-sm md:text-base font-light text-white/90">{{ __('rox01.terrain.section_subtitle') }}</p>
                </div>
            </div>
        </div>

        @php
            $terrainCards = [
                [
                    'title' => __('rox01.terrain.cards.0.title'),
                    'desc'  => __('rox01.terrain.cards.0.desc'),
                    'img'   => 'banner2_global.jfif',
                    'blocks' => [
                        ['img' => 'performence-fallback2.avif', 'video' => 'performance.mp4',     'heading' => __('rox01.terrain.cards.0.blocks.0.heading'), 'desc' => __('rox01.terrain.cards.0.blocks.0.desc')],
                        ['img' => 'performance2.avif',          'video' => '',                    'heading' => __('rox01.terrain.cards.0.blocks.1.heading'), 'desc' => __('rox01.terrain.cards.0.blocks.1.desc')],
                        ['img' => 'performance3.avif',          'video' => '',                    'heading' => __('rox01.terrain.cards.0.blocks.2.heading'), 'desc' => __('rox01.terrain.cards.0.blocks.2.desc')],
                        ['img' => 'performance-fallbck.avif',   'video' => '',                    'heading' => __('rox01.terrain.cards.0.blocks.3.heading'), 'desc' => __('rox01.terrain.cards.0.blocks.3.desc')],
                        ['img' => 'performance-fallback1.avif', 'video' => 'performance_video.mp4','heading' => __('rox01.terrain.cards.0.blocks.4.heading'), 'desc' => __('rox01.terrain.cards.0.blocks.4.desc')],
                        ['img' => 'performance5.avif',          'video' => 'performance_video4.mp4','heading' => __('rox01.terrain.cards.0.blocks.5.heading'), 'desc' => __('rox01.terrain.cards.0.blocks.5.desc')],
                        ['img' => 'performance6.avif',          'video' => 'performance_video6.mp4','heading' => __('rox01.terrain.cards.0.blocks.6.heading'), 'desc' => __('rox01.terrain.cards.0.blocks.6.desc')],
                        ['img' => 'performance7.avif',          'video' => '',                    'heading' => __('rox01.terrain.cards.0.blocks.7.heading'), 'desc' => __('rox01.terrain.cards.0.blocks.7.desc')],
                    ],
                ],
                [
                    'title' => __('rox01.terrain.cards.1.title'),
                    'desc'  => __('rox01.terrain.cards.1.desc'),
                    'img'   => 'banner3_safety.jfif',
                    'blocks' => [
                        ['img' => 'safety1.avif', 'video' => '',             'heading' => __('rox01.terrain.cards.1.blocks.0.heading'), 'desc' => __('rox01.terrain.cards.1.blocks.0.desc')],
                        ['img' => 'safety2.avif', 'video' => 'safety_video1.mp4', 'heading' => __('rox01.terrain.cards.1.blocks.1.heading'), 'desc' => __('rox01.terrain.cards.1.blocks.1.desc')],
                        ['img' => 'safety3.avif', 'video' => '',             'heading' => __('rox01.terrain.cards.1.blocks.2.heading'), 'desc' => __('rox01.terrain.cards.1.blocks.2.desc')],
                    ],
                ],
            ];
        @endphp

        <div class="max-w-[1600px] mx-auto px-0 md:px-6 py-6 md:py-10 overflow-hidden">
            <div id="terrain-track" class="flex md:grid md:grid-cols-2 md:gap-8">
                @foreach($terrainCards as $card)
                    <div class="terrain-slide flex-shrink-0 w-full md:w-auto px-4 md:px-0">
                        <div class="card-more group cursor-pointer md:cursor-none relative"
                            data-title="{{ $card['title'] }}" data-subtitle="{{ $card['desc'] }}">
                            <div class="relative aspect-[16/10] md:aspect-[4/3] overflow-hidden">
                                @if(!empty($card['video']))
                                    <video
                                        class="w-full h-full object-cover md:group-hover:scale-105 transition-transform duration-700"
                                        @if(!empty($card['img'])) poster="{{ asset('assets/' . $card['img']) }}" @endif autoplay
                                        muted loop playsinline>
                                        <source src="{{ asset('assets/' . $card['video']) }}" type="video/mp4">
                                    </video>
                                @else
                                    <img src="{{ asset('assets/' . $card['img']) }}" alt="{{ $card['title'] }}"
                                        class="w-full h-full object-cover md:group-hover:scale-105 transition-transform duration-700">
                                @endif
                                {{-- Desktop: título + descrição sobrepostos --}}
                                <div class="hidden md:block">
                                    <div class="absolute inset-0 bg-black/10"></div>
                                    <div class="absolute top-8 md:top-12 left-0 right-0 px-6 text-center text-white">
                                        <h3 class="text-2xl md:text-3xl font-medium mb-2 drop-shadow">{{ $card['title'] }}
                                        </h3>
                                        <p class="text-sm md:text-base font-light text-white/90 drop-shadow">
                                            {!! nl2br(e($card['desc'])) !!}</p>
                                    </div>
                                    <div class="absolute bottom-6 md:bottom-8 left-0 right-0 flex justify-center">
                                        <span
                                            class="flex items-center gap-2 bg-white/25 backdrop-blur-sm text-white text-xs md:text-sm font-medium pl-4 pr-1.5 py-1.5 rounded-full group-hover:bg-white/40 transition-colors">
                                            {{ __('rox01.terrain.more_btn') }}
                                            <span
                                                class="w-5 h-5 md:w-6 md:h-6 rounded-full bg-white/30 flex items-center justify-center">
                                                <svg class="w-3 h-3 md:w-3.5 md:h-3.5" fill="none" stroke="currentColor"
                                                    stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {{-- Telemóvel: corpo do card (fundo igual aos modais, tamanho uniforme) --}}
                            <div class="md:hidden bg-[#F6F7F8] p-5 min-h-[172px] flex flex-col">
                                <h3 class="text-lg font-semibold text-black mb-2">{{ $card['title'] }}</h3>
                                <p class="text-sm font-light text-gray-500 leading-relaxed">{!! nl2br(e($card['desc'])) !!}
                                </p>
                                <span
                                    class="inline-flex items-center gap-2 text-sm font-medium text-black mt-auto pt-4">{{ __('rox01.terrain.more_btn') }}
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg></span>
                            </div>
                            <!-- Hidden detail content for modal -->
                            <div class="card-detail hidden">
                                @foreach($card['blocks'] as $block)
                                    <div>
                                        <div class="w-full overflow-hidden">
                                            @if(!empty($block['video']))
                                                <video class="w-full h-auto block" @if(!empty($block['img']))
                                                poster="{{ asset('assets/' . $block['img']) }}" @endif autoplay muted loop
                                                    playsinline>
                                                    <source src="{{ asset('assets/' . $block['video']) }}" type="video/mp4">
                                                </video>
                                            @else
                                                <img src="{{ asset('assets/' . $block['img']) }}" alt="{{ $block['heading'] }}"
                                                    class="w-full h-auto">
                                            @endif
                                        </div>
                                        <div class="bg-[#F6F7F8] px-5 md:px-7 py-5 md:py-6">
                                            <h3 class="text-base md:text-xl font-medium text-[#191919] mb-2">
                                                {{ $block['heading'] }}</h3>
                                            <div class="text-sm md:text-base font-light text-gray-500 space-y-3">
                                                {!! rich_text($block['desc']) !!}</div>
                                        </div>
                                    </div>
                                @endforeach
                                <p class="text-xs md:text-sm font-light text-gray-400 px-6 md:px-10 py-6">{{ __('rox01.terrain.disclaimer') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div id="terrain-dots" class="flex md:hidden justify-center items-center gap-1.5 mt-6"></div>
        </div>
    </section>

    <!-- Versatile for Every Occasion Section -->
    <section class="bg-white">
        <!-- Wide lifestyle image with overlay heading -->
        <div class="relative w-full h-[78svh] md:h-auto md:aspect-[16/7] overflow-hidden">
            <img src="{{ cms_image('rox01.versatile.section', asset('assets/banner1_g.jfif')) }}" alt="{{ __('rox01.versatile.section_title') }}"
                class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent"></div>
            <div class="absolute bottom-8 md:bottom-14 left-0 right-0">
                <div class="content-container">
                    <h2 class="text-3xl md:text-4xl lg:text-5xl font-light text-white mb-2 md:mb-3">{{ __('rox01.versatile.section_title') }}</h2>
                    <p class="text-sm md:text-base font-light text-white/90">{{ __('rox01.versatile.section_subtitle') }}</p>
                </div>
            </div>
        </div>

        @php
            $versatileCards = [
                [
                    'title' => __('rox01.versatile.cards.0.title'),
                    'desc'  => __('rox01.versatile.cards.0.desc'),
                    'img'   => 'banner3_global.jfif',
                    'blocks' => [
                        ['img' => 'comfort.jfif',  'video' => '',          'heading' => __('rox01.versatile.cards.0.blocks.0.heading'), 'desc' => __('rox01.versatile.cards.0.blocks.0.desc')],
                        ['img' => 'comfort2.avif', 'video' => '',          'heading' => __('rox01.versatile.cards.0.blocks.1.heading'), 'desc' => __('rox01.versatile.cards.0.blocks.1.desc')],
                        ['img' => 'comfort3.avif', 'video' => '',          'heading' => __('rox01.versatile.cards.0.blocks.2.heading'), 'desc' => __('rox01.versatile.cards.0.blocks.2.desc')],
                        ['img' => 'comfort4.avif', 'video' => '',          'heading' => __('rox01.versatile.cards.0.blocks.3.heading'), 'desc' => __('rox01.versatile.cards.0.blocks.3.desc')],
                        ['img' => 'comfort5.avif', 'video' => 'comfort5.mp4', 'heading' => __('rox01.versatile.cards.0.blocks.4.heading'), 'desc' => __('rox01.versatile.cards.0.blocks.4.desc')],
                    ],
                ],
                [
                    'title' => __('rox01.versatile.cards.1.title'),
                    'desc'  => __('rox01.versatile.cards.1.desc'),
                    'img'   => 'banner4_global.jfif',
                    'blocks' => [
                        ['img' => 'expansive.jfif',  'video' => '',            'heading' => __('rox01.versatile.cards.1.blocks.0.heading'), 'desc' => __('rox01.versatile.cards.1.blocks.0.desc')],
                        ['img' => 'expansive2.avif', 'video' => '',            'heading' => __('rox01.versatile.cards.1.blocks.1.heading'), 'desc' => __('rox01.versatile.cards.1.blocks.1.desc')],
                        ['img' => 'expansive3.avif', 'video' => '',            'heading' => __('rox01.versatile.cards.1.blocks.2.heading'), 'desc' => __('rox01.versatile.cards.1.blocks.2.desc')],
                        ['img' => 'expansive4.avif', 'video' => '',            'heading' => __('rox01.versatile.cards.1.blocks.3.heading'), 'desc' => __('rox01.versatile.cards.1.blocks.3.desc')],
                        ['img' => 'expansive5.avif', 'video' => 'expansive5.mp4', 'heading' => __('rox01.versatile.cards.1.blocks.4.heading'), 'desc' => __('rox01.versatile.cards.1.blocks.4.desc')],
                        ['img' => 'expansive6.avif', 'video' => '',            'heading' => __('rox01.versatile.cards.1.blocks.5.heading'), 'desc' => __('rox01.versatile.cards.1.blocks.5.desc')],
                    ],
                ],
                [
                    'title' => __('rox01.versatile.cards.2.title'),
                    'desc'  => __('rox01.versatile.cards.2.desc'),
                    'img'   => 'banner5_global.jfif',
                    'blocks' => [
                        ['img' => 'versatility.jfif',  'video' => '',  'heading' => __('rox01.versatile.cards.2.blocks.0.heading'), 'desc' => __('rox01.versatile.cards.2.blocks.0.desc')],
                        ['img' => 'versatility2.png',  'video' => '',  'heading' => __('rox01.versatile.cards.2.blocks.1.heading'), 'desc' => __('rox01.versatile.cards.2.blocks.1.desc')],
                        ['img' => 'versatility3.avif', 'video' => '',  'heading' => __('rox01.versatile.cards.2.blocks.2.heading'), 'desc' => __('rox01.versatile.cards.2.blocks.2.desc')],
                        ['img' => 'versatility4.jfif', 'video' => '',  'heading' => __('rox01.versatile.cards.2.blocks.3.heading'), 'desc' => __('rox01.versatile.cards.2.blocks.3.desc')],
                        ['img' => 'versatility5.avif', 'video' => '',  'heading' => __('rox01.versatile.cards.2.blocks.4.heading'), 'desc' => __('rox01.versatile.cards.2.blocks.4.desc')],
                    ],
                ],
                [
                    'title' => __('rox01.versatile.cards.3.title'),
                    'desc'  => __('rox01.versatile.cards.3.desc'),
                    'img'   => 'banner6_global.jfif',
                    'blocks' => [
                        ['img' => 'cockpit.avif',  'video' => 'cockpit.mp4',  'heading' => __('rox01.versatile.cards.3.blocks.0.heading'), 'desc' => __('rox01.versatile.cards.3.blocks.0.desc')],
                        ['img' => 'comfort2.jfif', 'video' => '',              'heading' => __('rox01.versatile.cards.3.blocks.1.heading'), 'desc' => __('rox01.versatile.cards.3.blocks.1.desc')],
                        ['img' => 'cockpit5.avif', 'video' => 'cockpit2.mp4', 'heading' => __('rox01.versatile.cards.3.blocks.2.heading'), 'desc' => __('rox01.versatile.cards.3.blocks.2.desc')],
                    ],
                ],
            ];
        @endphp

        <div class="py-6 md:py-10 overflow-hidden">
            <div class="flex px-0 md:px-6" id="vers-track">
                @foreach($versatileCards as $card)
                    <div class="vers-slide flex-shrink-0 px-4 md:px-3">
                        <div class="card-more group cursor-pointer md:cursor-none relative"
                            data-title="{{ $card['title'] }}" data-subtitle="{{ $card['desc'] }}">
                            <div class="relative aspect-[16/10] md:aspect-[4/3] overflow-hidden">
                                @if(!empty($card['video']))
                                    <video
                                        class="w-full h-full object-cover md:group-hover:scale-105 transition-transform duration-700"
                                        @if(!empty($card['img'])) poster="{{ asset('assets/' . $card['img']) }}" @endif autoplay
                                        muted loop playsinline>
                                        <source src="{{ asset('assets/' . $card['video']) }}" type="video/mp4">
                                    </video>
                                @else
                                    <img src="{{ asset('assets/' . $card['img']) }}" alt="{{ $card['title'] }}"
                                        class="w-full h-full object-cover md:group-hover:scale-105 transition-transform duration-700">
                                @endif
                                {{-- Desktop: overlay + título + descrição + botão --}}
                                <div class="hidden md:block">
                                    <div class="absolute inset-0 bg-black/10"></div>
                                    <div class="absolute inset-x-0 top-0 h-1/2 pointer-events-none"
                                        style="background: radial-gradient(120% 100% at 50% 0%, rgba(0,0,0,0.55) 0%, rgba(0,0,0,0.25) 42%, transparent 72%);">
                                    </div>
                                    <div class="absolute top-8 md:top-12 left-0 right-0 px-6 text-center text-white">
                                        <h3 class="text-2xl md:text-3xl font-medium mb-2 drop-shadow">{{ $card['title'] }}
                                        </h3>
                                        <p
                                            class="text-sm md:text-base font-light text-white/90 drop-shadow max-w-md mx-auto">
                                            {!! nl2br(e($card['desc'])) !!}</p>
                                    </div>
                                    <div class="absolute bottom-6 md:bottom-8 left-0 right-0 flex justify-center">
                                        <span
                                            class="flex items-center gap-2 bg-white/25 backdrop-blur-sm text-white text-xs md:text-sm font-medium pl-4 pr-1.5 py-1.5 rounded-full group-hover:bg-white/40 transition-colors">
                                            {{ __('rox01.versatile.more_btn') }}
                                            <span
                                                class="w-5 h-5 md:w-6 md:h-6 rounded-full bg-white/30 flex items-center justify-center">
                                                <svg class="w-3 h-3 md:w-3.5 md:h-3.5" fill="none" stroke="currentColor"
                                                    stroke-width="2" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M12 4.5v15m7.5-7.5h-15" />
                                                </svg>
                                            </span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {{-- Telemóvel: corpo do card (fundo igual aos modais, tamanho uniforme) --}}
                            <div class="md:hidden bg-[#F6F7F8] p-5 min-h-[172px] flex flex-col">
                                <h3 class="text-lg font-semibold text-black mb-2">{{ $card['title'] }}</h3>
                                <p class="text-sm font-light text-gray-500 leading-relaxed">{!! nl2br(e($card['desc'])) !!}
                                </p>
                                <span
                                    class="inline-flex items-center gap-2 text-sm font-medium text-black mt-auto pt-4">{{ __('rox01.versatile.more_btn') }}
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="1.5"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                    </svg></span>
                            </div>
                            <!-- Hidden detail content for modal -->
                            <div class="card-detail hidden">
                                @foreach($card['blocks'] as $block)
                                    <div>
                                        <div class="w-full overflow-hidden">
                                            @if(!empty($block['video']))
                                                <video class="w-full h-auto block" @if(!empty($block['img']))
                                                poster="{{ asset('assets/' . $block['img']) }}" @endif autoplay muted loop
                                                    playsinline>
                                                    <source src="{{ asset('assets/' . $block['video']) }}" type="video/mp4">
                                                </video>
                                            @else
                                                <img src="{{ asset('assets/' . $block['img']) }}" alt="{{ $block['heading'] }}"
                                                    class="w-full h-auto">
                                            @endif
                                        </div>
                                        <div class="bg-[#F6F7F8] px-5 md:px-7 py-5 md:py-6">
                                            <h3 class="text-base md:text-xl font-medium text-[#191919] mb-2">
                                                {{ $block['heading'] }}</h3>
                                            <div class="text-sm md:text-base font-light text-gray-500 space-y-3">
                                                {!! rich_text($block['desc']) !!}</div>
                                        </div>
                                    </div>
                                @endforeach
                                <p class="text-xs md:text-sm font-light text-gray-400 px-6 md:px-10 py-6">{{ __('rox01.versatile.disclaimer') }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Dots (telemóvel) -->
            <div id="vers-dots" class="flex md:hidden justify-center items-center gap-1.5 mt-6"></div>

            <!-- Arrows (desktop) -->
            <div class="hidden md:flex justify-center items-center gap-4 mt-6 md:mt-8">
                <button id="vers-prev"
                    class="w-11 h-11 md:w-12 md:h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-700 hover:border-black hover:text-black transition-colors cursor-pointer"
                    aria-label="Anterior">
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
                    </svg>
                </button>
                <button id="vers-next"
                    class="w-11 h-11 md:w-12 md:h-12 rounded-full border border-gray-300 flex items-center justify-center text-gray-700 hover:border-black hover:text-black transition-colors cursor-pointer"
                    aria-label="Seguinte">
                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                    </svg>
                </button>
            </div>
        </div>
    </section>

    <!-- Specs Comparison Section -->
    <section class="py-16 md:py-24 bg-[#F4F5F6]">
        <div class="content-container">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 md:gap-16 items-start animate-up">
                <div>
                    <h2 class="text-2xl md:text-[2rem] font-medium text-black mb-6">{{ __('rox01.specs.title') }}</h2>
                    <a href="{{ route('especificacoes.rox01', 'rox-01') }}"
                        class="inline-block px-6 py-2.5 text-xs font-medium tracking-widest uppercase border border-black text-black hover:bg-black hover:text-white transition-all duration-300 mb-12">{{ __('rox01.specs.view_more') }}</a>
                    <div class="grid grid-cols-2 gap-x-10 gap-y-8">
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">{{ __('rox01.specs.wheelbase_label') }}</p>
                            <p class="text-lg font-semibold text-black">{{ __('rox01.specs.wheelbase_val') }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">{{ __('rox01.specs.battery_label') }}</p>
                            <p class="text-lg font-semibold text-black">{{ __('rox01.specs.battery_val') }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">{{ __('rox01.specs.range_label') }}</p>
                            <p class="text-lg font-semibold text-black">{{ __('rox01.specs.range_val') }}</p>
                        </div>
                        <div>
                            <p class="text-xs text-gray-400 font-light mb-1">{{ __('rox01.specs.ev_range_label') }}</p>
                            <p class="text-lg font-semibold text-black">{{ __('rox01.specs.ev_range_val') }}</p>
                        </div>
                    </div>
                </div>
                <div>
                    <img src="{{ cms_image('rox01.specs.car', asset('assets/car1.avif')) }}" alt="ROX 01" class="w-full h-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Fullscreen Video Player Modal -->
    <div id="video-modal" class="fixed inset-0 z-[200] bg-black hidden items-center justify-center">
        <button id="video-modal-close"
            class="absolute top-6 right-6 text-white hover:text-gray-300 transition-colors z-10 cursor-pointer">
            <svg class="w-8 h-8" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
        <video id="video-player" class="w-full h-full object-contain" controls>
            <source src="{{ asset('Dealer Feed Video ADAMAS - Subtitle free version.mp4') }}" type="video/mp4">
        </video>
    </div>

    <!-- Card Detail Modal -->
    <div id="card-modal" class="fixed inset-0 z-[200] hidden">
        <div class="absolute inset-0 bg-black/50 backdrop-blur-sm"></div>
        <div class="relative h-full flex items-start md:items-center justify-center p-3 md:p-6">
            <div id="card-modal-dialog"
                class="relative bg-white w-full max-w-[1120px] max-h-[88vh] md:max-h-[85vh] overflow-y-auto shadow-2xl">
                <!-- Barra fixa (título + subtítulo) -->
                <div class="sticky top-0 z-10 bg-white border-b border-gray-200">
                    <div class="relative px-12 md:px-16 py-4 md:py-5 text-center">
                        <h2 id="card-modal-title" class="text-lg md:text-2xl font-medium text-[#191919] leading-snug">
                        </h2>
                        <p id="card-modal-subtitle" class="text-xs md:text-sm font-light text-gray-500 mt-1"></p>
                        <button id="card-modal-close"
                            class="absolute top-1/2 -translate-y-1/2 right-4 md:right-6 text-gray-500 hover:text-black transition-colors cursor-pointer">
                            <svg class="w-6 h-6 md:w-7 md:h-7" fill="none" stroke="currentColor" stroke-width="1.5"
                                viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>
                <!-- Corpo (scroll) -->
                <div class="px-4 md:px-7 py-6 md:py-8">
                    <div id="card-modal-body" class="space-y-6 md:space-y-8"></div>
                </div>
            </div>
        </div>
    </div>

    <!-- Custom "mais" cursor -->
    <div id="more-cursor"
        class="fixed z-[150] pointer-events-none opacity-0 -translate-x-1/2 -translate-y-1/2 w-12 h-12 md:w-14 md:h-14 rounded-full bg-black/40 backdrop-blur-md border border-white/40 flex items-center justify-center text-white text-xs font-medium tracking-wide shadow-lg transition-opacity duration-200">
        {{ __('rox01.terrain.more_btn') }}</div>

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

            // Dots (telemóvel)
            var dotsWrap = document.getElementById('hl-dots');
            var dots = [];
            if (dotsWrap) {
                for (var d = 0; d < realCount; d++) {
                    (function (rk) {
                        var b = document.createElement('button');
                        b.type = 'button';
                        b.setAttribute('aria-label', 'Ir para ' + (rk + 1));
                        b.className = 'transition-all duration-300 cursor-pointer';
                        b.style.height = '2px';
                        b.addEventListener('click', function () { if (!isAnimating) { isAnimating = true; goTo(rk + 1); } });
                        dotsWrap.appendChild(b);
                        dots.push(b);
                    })(d);
                }
            }
            function updateDots() {
                var realIndex = (domIndex - 1 + realCount) % realCount;
                dots.forEach(function (b, k) {
                    var active = k === realIndex;
                    b.style.width = active ? '28px' : '20px';
                    b.style.background = active ? '#111111' : '#d1d5db';
                });
            }

            function slideWidth() {
                var vw = window.innerWidth;
                return vw < 768 ? vw * 0.86 : vw * 0.66;
            }

            function updateActive() {
                slides.forEach(function (s, i) { s.style.opacity = (i === domIndex) ? '1' : '0.4'; });
                updateDots();
            }

            function goTo(idx) {
                domIndex = idx;
                var vw = window.innerWidth;
                var s = slides[domIndex];
                var offset = (vw / 2) - (s.offsetLeft + s.offsetWidth / 2);
                track.style.transform = 'translateX(' + offset + 'px)';
                updateActive();
            }

            // Igualar a altura dos corpos (mesma altura independentemente do conteúdo)
            var bodies = Array.prototype.slice.call(track.querySelectorAll('.hl-body'));
            function equalizeBodies() {
                bodies.forEach(function (b) { b.style.height = ''; });
                if (window.innerWidth >= 768) return;
                var max = 0;
                bodies.forEach(function (b) { max = Math.max(max, b.offsetHeight); });
                bodies.forEach(function (b) { b.style.height = max + 'px'; });
            }

            function layout() {
                var w = slideWidth();
                slides.forEach(function (s) { s.style.width = w + 'px'; s.style.marginRight = GAP + 'px'; });
                equalizeBodies();
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

            // Dots de paginação (telemóvel)
            var dotsWrap = document.getElementById('vers-dots');
            var dots = [];
            if (dotsWrap) {
                slides.forEach(function (s, k) {
                    var b = document.createElement('button');
                    b.type = 'button';
                    b.setAttribute('aria-label', 'Ir para ' + (k + 1));
                    b.className = 'transition-all duration-300 cursor-pointer';
                    b.style.height = '2px';
                    b.addEventListener('click', function () { go(k); });
                    dotsWrap.appendChild(b);
                    dots.push(b);
                });
            }
            function updateDots() {
                dots.forEach(function (b, k) {
                    var active = k === idx;
                    b.style.width = active ? '28px' : '20px';
                    b.style.background = active ? '#111111' : '#d1d5db';
                });
            }

            function slideW() { var vw = window.innerWidth; return vw < 768 ? vw : vw * 0.46; }
            function maxIndex() { var vis = Math.max(1, Math.floor(window.innerWidth / slideW())); return Math.max(0, slides.length - vis); }

            function go(i) {
                idx = Math.max(0, Math.min(i, maxIndex()));
                track.style.transform = 'translateX(' + (-idx * slideW()) + 'px)';
                if (prevBtn) prevBtn.style.opacity = idx === 0 ? '0.4' : '1';
                if (nextBtn) nextBtn.style.opacity = idx >= maxIndex() ? '0.4' : '1';
                updateDots();
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

        // Terrain cards slider (telemóvel; grelha 2-cols no desktop)
        (function () {
            var track = document.getElementById('terrain-track');
            if (!track) return;
            var slides = Array.prototype.slice.call(track.querySelectorAll('.terrain-slide'));
            if (!slides.length) return;
            var dotsWrap = document.getElementById('terrain-dots');
            var idx = 0, dots = [];

            function isMobile() { return window.innerWidth < 768; }

            if (dotsWrap) {
                slides.forEach(function (s, k) {
                    var b = document.createElement('button');
                    b.type = 'button';
                    b.setAttribute('aria-label', 'Ir para ' + (k + 1));
                    b.className = 'transition-all duration-300 cursor-pointer';
                    b.style.height = '2px';
                    b.addEventListener('click', function () { go(k); });
                    dotsWrap.appendChild(b);
                    dots.push(b);
                });
            }
            function updateDots() {
                dots.forEach(function (b, k) {
                    var active = k === idx;
                    b.style.width = active ? '28px' : '20px';
                    b.style.background = active ? '#111111' : '#d1d5db';
                });
            }
            function go(i) {
                idx = Math.max(0, Math.min(i, slides.length - 1));
                if (isMobile()) { track.style.transform = 'translateX(' + (-idx * track.clientWidth) + 'px)'; }
                updateDots();
            }
            function layout() {
                if (isMobile()) {
                    track.style.transition = 'transform 0.5s cubic-bezier(0.25, 0.1, 0.25, 1)';
                    slides.forEach(function (s) { s.style.width = track.clientWidth + 'px'; });
                    go(idx);
                } else {
                    track.style.transform = '';
                    slides.forEach(function (s) { s.style.width = ''; });
                }
            }
            layout();
            window.addEventListener('resize', layout);

            var tsx = 0, tdx = 0;
            track.addEventListener('touchstart', function (e) { tsx = e.touches[0].clientX; }, { passive: true });
            track.addEventListener('touchmove', function (e) { tdx = e.touches[0].clientX - tsx; }, { passive: true });
            track.addEventListener('touchend', function () {
                if (!isMobile()) return;
                if (tdx > 50) go(idx - 1); else if (tdx < -50) go(idx + 1);
                tdx = 0;
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