<x-front-layout>
    <x-slot name="title">{{ __('home.title') }}</x-slot>

    @php
        $hero = \App\Models\SiteSection::where('section_name', 'hero')->get()->keyBy('key');
        $features = \App\Models\SiteSection::where('section_name', 'features')->get()->keyBy('key');
        $explore = \App\Models\SiteSection::where('section_name', 'explore_models')->get()->keyBy('key');
        
        $heroBg = isset($hero['banner_image']) && $hero['banner_image']->value ? asset($hero['banner_image']->value) : asset('assets/banner1.jpg');
        $exploreImg = isset($explore['car_image']) && $explore['car_image']->value ? asset($explore['car_image']->value) : asset('assets/rox01.png');
        
        $vehicles = \App\Models\Vehicle::where('is_active', true)->orderBy('created_at', 'asc')->get();
    @endphp

    <!-- Hero Slider Section -->
    <section class="relative h-[100svh] w-full overflow-hidden" id="hero-slider" data-duration="6000">
        <!-- Slide 1: ROX ADAMAS -->
        @php $adamasPoster = cms_image('home.hero.adamas', asset('assets/banner-adamas.avif')); @endphp
        <div class="hero-slide absolute inset-0 z-20 opacity-100 transition-opacity duration-[1400ms] ease-in-out" data-hero-slide data-logo="{{ asset('assets/adamas.svg') }}" data-subtitle="{{ __('home.hero.adamas_subtitle') }}" data-cta="{{ __('home.hero.adamas_cta') }}" data-link="{{ route('rox-adamas') }}">
            <video class="h-full w-full object-cover" muted loop playsinline poster="{{ $adamasPoster }}">
                <source src="{{ asset('Dealer Feed Video ADAMAS - Subtitle free version.mp4') }}" type="video/mp4">
                <img src="{{ $adamasPoster }}" alt="ROX ADAMAS" class="h-full w-full object-cover">
            </video>
        </div>
        <!-- Slide 2: ROX 01 -->
        <div class="hero-slide absolute inset-0 z-10 opacity-0 transition-opacity duration-[1400ms] ease-in-out" data-hero-slide data-logo="{{ asset('assets/rox01-global.svg') }}" data-subtitle="{{ __('home.hero.rox01_subtitle') }}" data-cta="{{ __('home.hero.rox01_cta') }}" data-link="{{ route('rox01') }}">
            <img src="{{ cms_image('home.hero.rox01', asset('assets/banner2.jpg')) }}" alt="ROX 01" class="h-full w-full object-cover">
        </div>

        <!-- Gradient overlays -->
        <div class="pointer-events-none absolute inset-x-0 bottom-0 z-30 h-[50%] bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-x-0 bottom-0 z-40 pb-32 md:pb-36">
            <div class="site-container">
                <img id="hero-logo" src="{{ asset('assets/adamas.svg') }}" alt="ROX Model" class="h-8 sm:h-10 md:h-12 mb-4 md:mb-5 transition-all duration-700 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">
                <p id="hero-subtitle" class="text-sm sm:text-base md:text-lg font-light text-gray-200 tracking-wide mb-6 md:mb-8 transition-all duration-700 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">{{ __('home.hero.adamas_subtitle') }}</p>
                <a id="hero-link" href="{{ route('rox-adamas') }}" class="inline-block px-8 py-3 text-xs md:text-sm font-medium tracking-widest uppercase border border-white/60 text-white hover:bg-white hover:text-black transition-all duration-300 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.7s forwards;">{{ __('home.hero.adamas_cta') }}</a>
            </div>
        </div>

        <!-- Progress bars -->
        <div class="absolute inset-x-0 bottom-16 md:bottom-20 z-40 flex justify-start gap-3 max-w-[1920px] site-container mx-auto left-0 right-0 opacity-0 translate-y-4" style="animation: heroSlideUp 0.8s ease-out 0.9s forwards;">
            <button type="button" class="hero-progress h-[2px] w-10 bg-white/30" data-hero-progress aria-label="Slide 1">
                <span class="block h-full w-full origin-left scale-x-0" style="background: var(--rox-dune-yellow);"></span>
            </button>
            <button type="button" class="hero-progress h-[2px] w-10 bg-white/30" data-hero-progress aria-label="Slide 2">
                <span class="block h-full w-full origin-left scale-x-0" style="background: var(--rox-dune-yellow);"></span>
            </button>
        </div>
    </section>

    <!-- Luxo Todo-o-Terreno Section -->
    <section class="bg-black text-white py-20 md:py-32 overflow-hidden">
        <!-- Title -->
        <div class="content-container mb-14 md:mb-20 animate-up">
            <h3 class="text-sm md:text-base font-semibold tracking-wide mb-6">{{ __('home.octa.brand') }}</h3>
            <h4 class="text-sm md:text-base font-semibold tracking-wide mb-4">{{ __('home.octa.subtitle') }}</h4>
            <p class="text-xl md:text-[2.5rem] font-light leading-relaxed md:leading-[1.4] max-w-5xl">{{ __('home.octa.text') }}</p>
        </div>

    </section>

    <!-- Explore Models Cards Section -->
    <section class="py-20 md:py-28 bg-white overflow-hidden">
        <div class="content-container">
            <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-12 md:mb-16 animate-up">{{ __('home.explore.title') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                <!-- ROX ADAMAS -->
                <div class="relative h-[300px] md:h-[460px] overflow-hidden group animate-up">
                    <img src="{{ cms_image('home.explore.adamas', asset('assets/banner-adamas.avif')) }}" alt="ROX ADAMAS" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex flex-col sm:flex-row sm:items-end sm:justify-between gap-3">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-1">{{ __('home.explore.adamas_name') }}</h3>
                            <p class="font-light text-xs md:text-sm text-gray-300">{{ __('home.explore.adamas_desc') }}</p>
                        </div>
                        <a href="{{ route('rox-adamas') }}" class="flex-shrink-0 border border-white/50 text-white text-xs font-medium tracking-widest uppercase px-4 py-2 hover:bg-white hover:text-black transition-all duration-300 text-center">{{ __('home.explore.adamas_cta') }}</a>
                    </div>
                </div>

                <!-- ROX 01 -->
                <div class="relative h-[300px] md:h-[460px] overflow-hidden group animate-up">
                    <img src="{{ cms_image('home.explore.rox01', asset('assets/banner2.jpg')) }}" alt="ROX 01" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex flex-col sm:flex-row sm:items-end sm:justify-between gap-3">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-1">{{ __('home.explore.rox01_name') }}</h3>
                            <p class="font-light text-xs md:text-sm text-gray-300">{{ __('home.explore.rox01_desc') }}</p>
                        </div>
                        <a href="{{ route('rox01') }}" class="flex-shrink-0 border border-white/50 text-white text-xs font-medium tracking-widest uppercase px-4 py-2 hover:bg-white hover:text-black transition-all duration-300 text-center">{{ __('home.explore.rox01_cta') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full-width Showcase Section -->
    <section class="relative bg-black pt-0 pb-16" id="showcase-section">

        <!-- Image Feature with Sticky Title -->
        <div class="feature-wrapper relative" style="height: 200vh;">
            <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
                <img src="{{ cms_image('home.showcase.bg', asset('assets/banner.jpg')) }}" alt="" class="absolute inset-0 w-full h-full object-cover">
                <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
                <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
                    <div class="content-container">
                        <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-4 md:mb-6 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">{{ __('home.showcase.title') }}</h2>
                    </div>
                </div>
            </div>
        </div>

        <!-- Specs Slider -->
        <div class="relative overflow-hidden animate-up" id="specs-slider">
            @php
                $showcaseSpecSlides = [
                    [
                        'img'    => cms_image('home.specs.slide1.img', asset('assets/sellingpoint.avif')),
                        'title'  => __('home.specs.reev_title'),
                        'bottom' => '<p class="text-lg md:text-xl font-light">' . __('home.specs.reev_text') . '</p>',
                    ],
                    [
                        'img'    => cms_image('home.specs.slide2.img', asset('assets/banner1_en.jfif')),
                        'title'  => __('home.specs.range_title'),
                        'bottom' => '<p class="text-lg md:text-xl font-light">' . __('home.specs.range_text') . '</p>',
                    ],
                    [
                        'img'    => cms_image('home.specs.slide3.img', asset('assets/rox01_global.jfif')),
                        'title'  => __('home.specs.terrain_title'),
                        'bottom' => '<p class="text-lg md:text-xl font-light">' . __('home.specs.terrain_text') . '</p>',
                    ],
                    [
                        'img'    => cms_image('home.specs.slide4.img', asset('assets/rox_1/interior/6-seater/Amber Orange.jpg')),
                        'title'  => __('home.specs.luxury_title'),
                        'bottom' => '<p class="text-lg md:text-xl font-light">' . __('home.specs.luxury_text') . '</p>',
                    ],
                    [
                        'img'    => cms_image('home.specs.slide5.img', asset('assets/banner3_global.jfif')),
                        'title'  => __('home.specs.safety_title'),
                        'bottom' => '<p class="text-lg md:text-xl font-light">' . __('home.specs.safety_text') . '</p>',
                    ],
                    [
                        'img'    => cms_image('home.specs.slide6.img', asset('assets/banner6_global.jfif')),
                        'title'  => __('home.specs.connect_title'),
                        'bottom' => '<p class="text-lg md:text-xl font-light">' . __('home.specs.connect_text') . '</p>',
                    ],
                ];
                $allShowcaseSpecSlides = array_merge([end($showcaseSpecSlides)], $showcaseSpecSlides, [$showcaseSpecSlides[0]]);
            @endphp

            <div class="flex gap-4" id="specs-track">
                @foreach($allShowcaseSpecSlides as $spec)
                <div class="specs-card relative flex-shrink-0 h-[500px] md:h-[680px] overflow-hidden">
                    <img src="{{ $spec['img'] }}" alt="{{ $spec['title'] }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute inset-x-0 bottom-0 h-2/3 bg-gradient-to-t from-black/90 via-black/50 to-transparent"></div>
                    <div class="absolute top-6 md:top-8 left-0 right-0 text-center px-6">
                        <h4 class="text-base md:text-lg font-medium text-white">{{ $spec['title'] }}</h4>
                    </div>
                    <div class="absolute bottom-6 md:bottom-8 left-6 md:left-8 right-6 md:right-8 text-white">
                        {!! $spec['bottom'] !!}
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Arrow controls -->
            <div class="content-container absolute inset-0 z-10 pointer-events-none">
                <div class="relative w-full h-full">
                    <button id="specs-prev" class="pointer-events-auto absolute top-1/2 -translate-y-1/2 left-0 w-10 h-10 sm:w-14 sm:h-14 rounded-full flex items-center justify-center text-white hover:scale-110 transition-all duration-200" style="background: rgba(0,0,0,0.45); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.15);">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5m0 0l7-7m-7 7l7 7"/></svg>
                    </button>
                    <button id="specs-next" class="pointer-events-auto absolute top-1/2 -translate-y-1/2 right-0 w-10 h-10 sm:w-14 sm:h-14 rounded-full flex items-center justify-center text-white hover:scale-110 transition-all duration-200" style="background: rgba(0,0,0,0.45); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.15);">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0l-7-7m7 7l-7 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- Pagination dots -->
            <div class="flex justify-center gap-2 mt-10" id="specs-dots">
                @foreach($showcaseSpecSlides as $idx => $spec)
                <button class="specs-dot w-10 h-[3px] transition-all duration-300 {{ $idx === 0 ? 'bg-white' : 'bg-gray-700' }}" data-index="{{ $idx }}"></button>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Catálogo ROX Motor Angola -->
    <section class="bg-white text-black py-20 md:py-28">
        <div class="content-container">
            <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-12 md:mb-16 animate-up">{{ __('home.catalog.title') }}</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <!-- Descarregar Catálogo PDF -->
                @php $catalogoPdf = cms_catalog_pdf(); @endphp
                <a href="{{ $catalogoPdf }}" onclick="openPdfModal('{{ $catalogoPdf }}', '{{ __('home.catalog.download_title') }}'); return false;" class="animate-up block group">
                    <div class="h-[220px] sm:h-[280px] md:h-[420px] overflow-hidden">
                        <img src="{{ cms_image('home.catalog.download_img', asset('assets/adamasslider1.avif')) }}" alt="{{ __('home.catalog.download_title') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#1a1a1a] text-white px-5 sm:px-6 md:px-8 h-[120px] sm:h-[130px] md:h-[140px] flex items-start pt-4 sm:pt-5 md:pt-6 justify-between gap-4">
                        <div>
                            <h3 class="text-base sm:text-lg md:text-xl font-semibold mb-2 sm:mb-3">{{ __('home.catalog.download_title') }}</h3>
                            <p class="text-xs md:text-sm text-gray-400 font-light leading-relaxed">{{ __('home.catalog.download_desc') }}</p>
                        </div>
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-400 group-hover:text-white transition-colors duration-200 flex-shrink-0 mt-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                    </div>
                </a>

                <!-- Visualizar Catálogo -->
                <a href="{{ $catalogoPdf }}" onclick="openPdfModal('{{ $catalogoPdf }}', '{{ __('home.catalog.view_title') }}'); return false;" class="animate-up block group">
                    <div class="h-[220px] sm:h-[280px] md:h-[420px] overflow-hidden">
                        <img src="{{ cms_image('home.catalog.view_img', asset('assets/banner2.jpg')) }}" alt="{{ __('home.catalog.view_title') }}" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#1a1a1a] text-white px-5 sm:px-6 md:px-8 h-[120px] sm:h-[130px] md:h-[140px] flex items-start pt-4 sm:pt-5 md:pt-6 justify-between gap-4">
                        <div>
                            <h3 class="text-base sm:text-lg md:text-xl font-semibold mb-2 sm:mb-3">{{ __('home.catalog.view_title') }}</h3>
                            <p class="text-xs md:text-sm text-gray-400 font-light leading-relaxed">{{ __('home.catalog.view_desc') }}</p>
                        </div>
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-400 group-hover:text-white transition-colors duration-200 flex-shrink-0 mt-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/></svg>
                    </div>
                </a>
            </div>

        </div>
    </section>

    <!-- Destaques ROX Section -->
    <section class="bg-white py-20 md:py-28 overflow-hidden" id="destaques-section">
        <div class="content-container mb-10 md:mb-14">
            <p class="text-sm md:text-base font-semibold tracking-wide mb-3 animate-up">{{ __('home.news.eyebrow') }}</p>
            <h2 class="text-2xl md:text-4xl font-light leading-snug animate-up">{{ __('home.news.title') }}</h2>
        </div>

        @php
            $destaques = \App\Models\Highlight::published()->get();
        @endphp

        <div class="relative overflow-hidden animate-up">
            <div class="flex gap-6" id="destaques-track" style="padding-left: max(var(--site-gutter), calc((100% - 1280px) / 2 + var(--site-gutter)));">
                @foreach($destaques as $item)
                <div class="destaques-card flex-shrink-0">
                    <div class="h-[200px] sm:h-[260px] md:h-[340px] overflow-hidden mb-4 sm:mb-6">
                        <img src="{{ img_src($item->image) }}" alt="{{ $item->tr('title') }}" class="w-full h-full object-cover">
                    </div>
                    <h3 class="text-sm sm:text-base md:text-lg font-normal leading-snug mb-2 sm:mb-3 pr-4">{{ $item->tr('title') }}</h3>
                    @if($item->tr('excerpt'))
                        <p class="text-xs sm:text-sm font-light text-gray-500 leading-relaxed mb-4 sm:mb-6 pr-4">{{ $item->tr('excerpt') }}</p>
                    @else
                        <div class="mb-4 sm:mb-6"></div>
                    @endif
                    <button type="button"
                        class="destaques-open inline-block px-5 sm:px-6 py-2 sm:py-2.5 text-[10px] sm:text-xs font-medium tracking-widest uppercase border border-black/80 text-black hover:bg-black hover:text-white transition-all duration-300"
                        data-title="{{ $item->tr('title') }}"
                        data-image="{{ img_src($item->image) }}"
                        data-modal-image="{{ $item->modal_image ? img_src($item->modal_image) : img_src($item->image) }}"
                        data-excerpt="{{ $item->tr('excerpt') }}"
                        data-body="{{ $item->tr('body') }}"
                        data-date="{{ $item->published_at ? $item->published_at->format('d/m/Y') : '' }}"
                        data-link="{{ $item->link ?? '' }}"
                    >{{ __('home.more') }}</button>
                </div>
                @endforeach
            </div>

            <!-- Arrows inside content-container overlay -->
            <div class="content-container absolute inset-0 z-10 pointer-events-none">
                <div class="relative w-full h-[200px] sm:h-[260px] md:h-[340px]">
                    <button id="destaques-prev" class="pointer-events-auto absolute top-1/2 -translate-y-1/2 left-0 w-11 h-11 sm:w-14 sm:h-14 rounded-full items-center justify-center text-white hover:scale-110 transition-all duration-200 hidden" style="background: rgba(0,0,0,0.45); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.15);">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19 12H5m0 0l7-7m-7 7l7 7"/></svg>
                    </button>
                    <button id="destaques-next" class="pointer-events-auto absolute top-1/2 -translate-y-1/2 w-11 h-11 sm:w-14 sm:h-14 rounded-full flex items-center justify-center text-white hover:scale-110 transition-all duration-200" style="right: -6vw; background: rgba(0,0,0,0.45); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); border: 1px solid rgba(255,255,255,0.15);">
                        <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14m0 0l-7-7m7 7l-7 7"/></svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Destaques article modal -->
    <style>
        #destaques-modal { opacity: 0; transform: translateY(32px); pointer-events: none; transition: opacity .8s ease-out, transform .8s ease-out; }
        #destaques-modal.is-open { opacity: 1; transform: translateY(0); pointer-events: auto; }
        #destaques-modal.is-closing { opacity: 0; transform: translateY(32px); pointer-events: none; }
    </style>
    <div id="destaques-modal" class="fixed inset-0 z-[200] hidden bg-white overflow-y-auto" role="dialog" aria-modal="true" aria-labelledby="destaques-modal-title">
        <header class="sticky top-0 z-10 h-20 border-b border-black/10 bg-white flex items-center justify-center px-6">
            <p class="text-sm md:text-base tracking-[0.12em] text-center">{{ __('home.news.eyebrow') }}</p>
            <button type="button" id="destaques-modal-close" class="absolute right-6 md:right-[8.5vw] w-10 h-10 flex items-center justify-center text-black hover:opacity-60 transition-opacity" aria-label="{{ __('home.news.close') }}">
                <svg class="w-7 h-7" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.25"><path d="M4 4l16 16M20 4L4 20"/></svg>
            </button>
        </header>
        <article class="max-w-[1200px] mx-auto px-6 md:px-0 py-12 md:py-16 pb-24 md:pb-32">
            <h2 id="destaques-modal-title" class="text-3xl md:text-[2.15rem] font-light tracking-wide leading-snug max-w-5xl"></h2>
            <p class="mt-5 text-sm tracking-[0.08em] text-gray-400" id="destaques-modal-date"></p>
            <p class="mt-4 text-base md:text-lg font-light text-gray-500 leading-relaxed max-w-4xl" id="destaques-modal-excerpt"></p>
            <div id="destaques-modal-body" class="mt-10 md:mt-12 space-y-6 max-w-5xl text-base md:text-lg tracking-[0.06em] font-light leading-relaxed text-[#262626]"></div>
            <img id="destaques-modal-image" src="" alt="" class="mt-12 md:mt-16 w-full h-auto max-h-[680px] object-cover">
            <div class="mt-20 md:mt-28 flex items-center gap-8 text-sm tracking-[0.08em]">
                <button type="button" id="destaques-modal-share" class="inline-flex items-center gap-2 hover:opacity-60 transition-opacity">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><path d="M8 4H4v4M16 4h4v4M8 20H4v-4M20 16v4h-4"/><path d="M8 8h3v3H8zM13 8h3v3h-3zM8 13h3v3H8zM13 13h3v3h-3z"/></svg>
                    <span>{{ __('home.news.share') }}</span>
                </button>
                <button type="button" id="destaques-modal-copy" class="inline-flex items-center gap-2 hover:opacity-60 transition-opacity">
                    <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.7"><rect x="8" y="7" width="11" height="13" rx="1.5"/><path d="M16 7V5.5A1.5 1.5 0 0014.5 4h-9A1.5 1.5 0 004 5.5v10A1.5 1.5 0 005.5 17H8"/></svg>
                    <span id="destaques-modal-copy-label">{{ __('home.news.copy_link') }}</span>
                </button>
            </div>
        </article>
    </div>

    <!-- Destaques Slider Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            (function () {
                var track = document.getElementById('destaques-track');
                var prevBtn = document.getElementById('destaques-prev');
                var nextBtn = document.getElementById('destaques-next');
                var cards = document.querySelectorAll('.destaques-card');
                if (!track || !cards.length) return;

                var currentSlide = 0;
                var GAP = 24;

                function layout() {
                    var vw = window.innerWidth;
                    var isMobile = vw < 768;
                    var gutter = parseFloat(getComputedStyle(document.documentElement).getPropertyValue('--site-gutter'));
                    var containerMax = 1280;
                    var pad = vw > containerMax + gutter * 2 ? (vw - containerMax) / 2 + gutter : gutter;
                    var availW = vw - pad;
                    var cardW = isMobile ? vw * 0.85 : (availW - GAP * 2) / 2.5;
                    cards.forEach(function (card) { card.style.width = cardW + 'px'; });
                    slideTo(currentSlide);
                }

                function updateArrows() {
                    var maxIndex = Math.max(0, cards.length - 2);
                    if (currentSlide > 0) {
                        prevBtn.classList.remove('hidden');
                        prevBtn.classList.add('flex');
                    } else {
                        prevBtn.classList.add('hidden');
                        prevBtn.classList.remove('flex');
                    }
                    if (currentSlide < maxIndex) {
                        nextBtn.classList.remove('hidden');
                        nextBtn.classList.add('flex');
                    } else {
                        nextBtn.classList.add('hidden');
                        nextBtn.classList.remove('flex');
                    }
                }

                function slideTo(index) {
                    var cardW = cards[0].offsetWidth;
                    var step = cardW + GAP;
                    var maxIndex = Math.max(0, cards.length - 2);
                    currentSlide = Math.max(0, Math.min(index, maxIndex));
                    track.style.transition = 'transform 0.5s cubic-bezier(0.25, 0.1, 0.25, 1)';
                    track.style.transform = 'translateX(-' + (currentSlide * step) + 'px)';
                    updateArrows();
                }

                prevBtn.addEventListener('click', function () { slideTo(currentSlide - 1); });
                nextBtn.addEventListener('click', function () { slideTo(currentSlide + 1); });

                layout();
                window.addEventListener('resize', layout);

                var touchStart = 0, touchDiff = 0;
                track.addEventListener('touchstart', function (e) { touchStart = e.touches[0].clientX; }, { passive: true });
                track.addEventListener('touchmove', function (e) { touchDiff = e.touches[0].clientX - touchStart; }, { passive: true });
                track.addEventListener('touchend', function () {
                    if (touchDiff > 50) slideTo(currentSlide - 1);
                    else if (touchDiff < -50) slideTo(currentSlide + 1);
                    touchDiff = 0;
                });
            })();
        });
    </script>

    <!-- Destaques modal script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var modal = document.getElementById('destaques-modal');
            var close = document.getElementById('destaques-modal-close');
            var title = document.getElementById('destaques-modal-title');
            var image = document.getElementById('destaques-modal-image');
            var date = document.getElementById('destaques-modal-date');
            var excerptEl = document.getElementById('destaques-modal-excerpt');
            var bodyEl = document.getElementById('destaques-modal-body');
            var share = document.getElementById('destaques-modal-share');
            var copy = document.getElementById('destaques-modal-copy');
            var copyLabel = document.getElementById('destaques-modal-copy-label');
            var lastTrigger = null;
            var activeTitle = '';
            if (!modal || !close || !title || !image || !date) return;

            var fallbackIntro = '{{ __('home.news.modal_intro') }}';
            var fallbackBody  = '{{ __('home.news.modal_body') }}';

            function closeModal() {
                modal.classList.remove('is-open');
                modal.classList.add('is-closing');
                document.body.classList.remove('overflow-hidden');
                window.setTimeout(function () {
                    modal.classList.add('hidden');
                    modal.classList.remove('is-closing');
                    if (lastTrigger) lastTrigger.focus();
                }, 800);
            }

            document.querySelectorAll('.destaques-open').forEach(function (button) {
                button.addEventListener('click', function () {
                    lastTrigger = button;
                    activeTitle = button.dataset.title || '';
                    title.textContent = activeTitle;

                    // Use modal-specific image, fall back to card image
                    var modalImg = button.dataset.modalImage || button.dataset.image || '';
                    if (modalImg) {
                        image.src = modalImg;
                        image.alt = activeTitle;
                        image.style.display = '';
                    } else {
                        image.style.display = 'none';
                    }

                    // Date: use published_at from DB, or today
                    var rawDate = button.dataset.date || '';
                    date.textContent = rawDate || new Intl.DateTimeFormat(document.documentElement.lang || 'pt-PT', { year: 'numeric', month: '2-digit', day: '2-digit' }).format(new Date());

                    // Excerpt
                    if (excerptEl) excerptEl.textContent = button.dataset.excerpt || '';

                    // Body: render paragraphs split by newline, or fallback
                    if (bodyEl) {
                        bodyEl.innerHTML = '';
                        var bodyText = button.dataset.body || '';
                        if (bodyText.trim()) {
                            bodyText.split(/\n+/).forEach(function (para) {
                                if (para.trim()) {
                                    var p = document.createElement('p');
                                    p.textContent = para.trim();
                                    bodyEl.appendChild(p);
                                }
                            });
                        } else {
                            // fallback to generic modal text
                            [fallbackIntro, fallbackBody].forEach(function (txt) {
                                var p = document.createElement('p');
                                p.textContent = txt;
                                bodyEl.appendChild(p);
                            });
                        }
                    }

                    modal.classList.remove('hidden', 'is-closing');
                    document.body.classList.add('overflow-hidden');
                    modal.scrollTop = 0;
                    window.requestAnimationFrame(function () {
                        modal.classList.add('is-open');
                        close.focus();
                    });
                });
            });

            close.addEventListener('click', closeModal);
            share.addEventListener('click', function () {
                if (navigator.share) navigator.share({ title: activeTitle, url: window.location.href }).catch(function () {});
            });
            copy.addEventListener('click', function () {
                if (!navigator.clipboard) return;
                navigator.clipboard.writeText(window.location.href).then(function () {
                    copyLabel.textContent = '{{ __('home.news.copied') }}';
                    window.setTimeout(function () { copyLabel.textContent = '{{ __('home.news.copy_link') }}'; }, 1800);
                });
            });
            document.addEventListener('keydown', function (event) {
                if (event.key === 'Escape' && !modal.classList.contains('hidden')) closeModal();
            });
        });
    </script>

    <!-- Specs Slider Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            (function () {
                var specsTrack = document.getElementById('specs-track');
                var specsCards = document.querySelectorAll('.specs-card');
                var specsDots = document.querySelectorAll('.specs-dot');
                var specsPrev = document.getElementById('specs-prev');
                var specsNext = document.getElementById('specs-next');
                if (!specsTrack || !specsCards.length) return;

                var realCount = specsDots.length;
                var domIndex = 1;
                var isAnimating = false;

                function layoutSpecs() {
                    var vw = window.innerWidth;
                    var centerW = vw < 768 ? vw * 0.85 : vw * 0.50;
                    specsCards.forEach(function (card) { card.style.width = centerW + 'px'; });
                    specsTrack.style.transition = 'none';
                    goTo(domIndex);
                    void specsTrack.offsetWidth;
                    specsTrack.style.transition = 'transform 0.6s cubic-bezier(0.25, 0.1, 0.25, 1)';
                }

                function goTo(idx) {
                    domIndex = idx;
                    var vw = window.innerWidth;
                    var card = specsCards[domIndex];
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
        });
    </script>

    <!-- Hero Slider Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var slider = document.getElementById('hero-slider');
            if (!slider) return;

            var slides = Array.from(slider.querySelectorAll('[data-hero-slide]'));
            var progressBtns = Array.from(slider.querySelectorAll('[data-hero-progress]'));
            var logoEl = document.getElementById('hero-logo');
            var subtitleEl = document.getElementById('hero-subtitle');
            var linkEl = document.getElementById('hero-link');
            var duration = parseInt(slider.dataset.duration, 10) || 6000;
            var fadeDuration = 1400;
            var activeIndex = 0;
            var timerId;
            var transitionId;

            function resetProgress() {
                progressBtns.forEach(function(btn) {
                    var bar = btn.querySelector('span');
                    bar.style.transition = 'none';
                    bar.style.transform = 'scaleX(0)';
                });
            }

            function startProgress(index) {
                var bar = progressBtns[index].querySelector('span');
                requestAnimationFrame(function() {
                    bar.style.transition = 'transform ' + duration + 'ms linear';
                    bar.style.transform = 'scaleX(1)';
                });
            }

            function syncVideos(activeIdx) {
                slides.forEach(function(slide, i) {
                    var video = slide.querySelector('video');
                    if (!video) return;
                    if (i === activeIdx) {
                        video.play().catch(function() {});
                    } else {
                        video.pause();
                    }
                });
            }

            function setCopy(index) {
                var slide = slides[index];
                var els = [logoEl, subtitleEl, linkEl];

                els.forEach(function(el) { el.style.opacity = '0'; });

                setTimeout(function() {
                    logoEl.src = slide.dataset.logo;
                    subtitleEl.textContent = slide.dataset.subtitle;
                    linkEl.href = slide.dataset.link;
                    if (slide.dataset.cta) { linkEl.textContent = slide.dataset.cta; }
                    els.forEach(function(el) { el.style.opacity = '1'; });
                }, 200);
            }

            function showSlide(index) {
                var nextIndex = (index + slides.length) % slides.length;
                var previousIndex = activeIndex;

                slides.forEach(function(s, i) {
                    if (i !== previousIndex && i !== nextIndex) {
                        s.classList.remove('z-20', 'z-10', 'opacity-100');
                        s.classList.add('z-0', 'opacity-0');
                    }
                });

                slides[previousIndex].classList.remove('z-20', 'z-0', 'opacity-0');
                slides[previousIndex].classList.add('z-10', 'opacity-100');
                slides[nextIndex].classList.remove('z-10', 'z-0', 'opacity-0');
                slides[nextIndex].classList.add('z-20', 'opacity-100');

                clearTimeout(transitionId);
                transitionId = setTimeout(function() {
                    slides.forEach(function(s, i) {
                        if (i !== nextIndex) {
                            s.classList.remove('z-20', 'z-10', 'opacity-100');
                            s.classList.add('z-0', 'opacity-0');
                        }
                    });
                }, fadeDuration);

                activeIndex = nextIndex;
                setCopy(activeIndex);
                syncVideos(activeIndex);
                resetProgress();
                startProgress(activeIndex);
                clearTimeout(timerId);
                timerId = setTimeout(function() { showSlide(activeIndex + 1); }, duration);
            }

            progressBtns.forEach(function(btn, index) {
                btn.addEventListener('click', function() { showSlide(index); });
            });

            showSlide(0);
        });
    </script>

    <!-- Explore Models Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var tabs = document.querySelectorAll('.explore-tab');
            var track = document.getElementById('explore-track');
            if (!tabs.length || !track) return;

            var models = ['adamas', 'rox01'];

            tabs.forEach(function(tab) {
                tab.addEventListener('click', function() {
                    var model = tab.dataset.model;
                    var idx = models.indexOf(model);
                    if (idx < 0) return;

                    tabs.forEach(function(t) {
                        t.classList.remove('active', 'text-black');
                        t.classList.add('border-transparent', 'text-gray-400');
                        t.style.borderColor = 'transparent';
                    });
                    tab.classList.add('active', 'text-black');
                    tab.classList.remove('border-transparent', 'text-gray-400');
                    tab.style.borderColor = 'var(--rox-dune-yellow)';

                    track.style.transform = 'translateX(-' + (idx * 50) + '%)';
                });
            });
        });
    </script>

    <!-- Feature Sections Scroll Reveal Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var wrappers = document.querySelectorAll('.feature-wrapper');
            if (!wrappers.length) return;

            function onScroll() {
                wrappers.forEach(function(wrapper) {
                    var section = wrapper.querySelector('.feature-section');
                    if (!section) return;

                    var titles = section.querySelectorAll('.feature-title');
                    var descs = section.querySelectorAll('.feature-desc');
                    var allEls = Array.from(titles).concat(Array.from(descs));

                    var wRect = wrapper.getBoundingClientRect();
                    var vh = window.innerHeight;
                    var totalScroll = wrapper.offsetHeight - vh;
                    var scrolled = -wRect.top;
                    var progress = Math.max(0, Math.min(1, scrolled / totalScroll));

                    allEls.forEach(function(el, i) {
                        var start = 0.05 + i * 0.1;
                        var end = start + 0.15;
                        var p = Math.max(0, Math.min(1, (progress - start) / (end - start)));
                        el.style.opacity = p;
                        el.style.transform = 'translateY(' + (40 * (1 - p)) + 'px)';
                    });
                });
            }

            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();
        });
    </script>

    <!-- CTA Test Drive Section -->
    <section class="relative h-[100svh] w-full overflow-hidden">
        <img src="{{ cms_image('home.cta.bg', asset('assets/cta.avif')) }}" alt="{{ __('home.cta.title') }}" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 flex flex-col items-center justify-start h-full text-center px-6 pt-32 md:pt-40">
            <h2 class="text-3xl sm:text-4xl md:text-5xl font-light text-white mb-4 md:mb-6 animate-up">{{ __('home.cta.title') }}</h2>
            <p class="text-base sm:text-lg md:text-xl font-light text-gray-200 mb-8 md:mb-10 animate-up">{{ __('home.cta.subtitle') }}</p>
        </div>
    </section>

    <!-- ROX App Section -->
    <section class="py-20 md:py-28 bg-white overflow-x-clip">
        <div class="content-container">
            <div class="mb-10 md:mb-14 animate-up">
                <p class="text-sm md:text-base font-semibold tracking-wide text-black mb-4">{{ __('home.app.eyebrow') }}</p>
                <h2 class="text-xl sm:text-2xl md:text-[2.5rem] font-light leading-relaxed md:leading-[1.35] max-w-4xl text-black">{{ __('home.app.title') }}</h2>
            </div>

            <div class="bg-[#F8F9F9] py-16 md:py-[137px] px-[8%] mt-10 md:mt-20 relative hidden lg:block animate-up">
                <div class="flex flex-col w-[250px] items-center text-center">
                    <img src="{{ asset('assets/app-download.jpg') }}" alt="QR Code ROX App" class="w-[120px] md:w-[160px] h-auto mx-auto">
                    <p class="mt-4 text-lg leading-normal text-black">{{ __('home.app.qr') }}</p>
                </div>
                <img src="{{ asset('assets/app-en.png') }}" alt="ROX App Screenshots" class="absolute right-0 -top-[30px] xl:-top-[50px] w-[660px] xl:w-[640px] h-auto pointer-events-none">
            </div>

            <!-- Mobile fallback -->
            <div class="flex flex-col items-center text-center lg:hidden animate-up mt-10">
                <img src="{{ asset('assets/app-download.jpg') }}" alt="QR Code ROX App" class="w-[120px] h-auto mx-auto mb-4">
                <p class="text-base leading-normal text-black mb-8">{{ __('home.app.qr') }}</p>
                <img src="{{ asset('assets/app-en.png') }}" alt="ROX App Screenshots" class="max-w-[400px] w-full h-auto">
            </div>
        </div>
    </section>


</x-front-layout>
