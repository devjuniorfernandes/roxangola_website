<x-front-layout>
    <x-slot name="title">{{ __('marca.title') }}</x-slot>

    <!-- HERO -->
    <section class="relative h-screen w-full overflow-hidden flex items-center">
        <video class="absolute inset-0 w-full h-full object-cover" autoplay muted loop playsinline preload="auto" poster="{{ asset('assets/marca/hero.jpg') }}">
            <source src="{{ asset('assets/rox-brand-hero.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 via-black/30 to-transparent"></div>
        <div class="relative z-10 w-full site-container text-white text-left">
            <p class="text-xs sm:text-sm font-semibold uppercase tracking-[3px] mb-4 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">{{ __('marca.hero.eyebrow') }}</p>
            <h1 class="text-5xl sm:text-7xl font-light uppercase tracking-wide mb-6 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">{{ __('marca.hero.title') }}</h1>
            <p class="text-base sm:text-lg font-light leading-relaxed max-w-md opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.7s forwards;">{{ __('marca.hero.subtitle') }}</p>
        </div>
    </section>

    <!-- ROX MANIFESTO -->
    <section class="bg-[#000000]">
        <div class="site-container py-20 md:py-28">
            <div class="grid grid-cols-1 md:grid-cols-2 items-stretch">
                <div class="relative w-full aspect-square overflow-hidden animate-up">
                    <img src="{{ asset('assets/brand-manifest.jpg') }}" alt="{{ __('marca.manifesto.eyebrow') }}" class="absolute inset-0 w-full h-full object-cover" loading="lazy">
                </div>
                <div class="text-white animate-up bg-[#1A1B1B] p-8 md:p-12 lg:p-16 flex flex-col justify-start">
                    <h2 class="text-2xl sm:text-3xl font-light uppercase tracking-wide mb-8">{{ __('marca.manifesto.eyebrow') }}</h2>
                    <div class="space-y-5 text-sm sm:text-base font-light leading-relaxed text-white/70">
                        <p>{{ __('marca.manifesto.p1') }}</p>
                        <p>{{ __('marca.manifesto.p2') }}</p>
                        <p>{{ __('marca.manifesto.p3') }}</p>
                        <p>{{ __('marca.manifesto.p4') }}</p>
                    </div>
                    <p class="mt-6 text-base sm:text-lg font-semibold uppercase tracking-wide text-white">{{ __('marca.manifesto.signature') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MISSÃO · OBJETIVO · VALORES -->
    <section class="bg-[#0c0d0e] border-t border-white/5">
        <div class="site-container py-16 md:py-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10 md:gap-14">
                <div class="animate-up">
                    <h3 class="text-lg sm:text-xl font-medium text-white mb-3">{{ __('marca.pillars.mission_label') }}</h3>
                    <p class="text-sm font-light leading-relaxed text-white/60">{{ __('marca.pillars.mission') }}</p>
                </div>
                <div class="animate-up">
                    <h3 class="text-lg sm:text-xl font-medium text-white mb-3">{{ __('marca.pillars.goal_label') }}</h3>
                    <p class="text-sm font-light leading-relaxed text-white/60">{{ __('marca.pillars.goal') }}</p>
                </div>
                <div class="animate-up">
                    <h3 class="text-lg sm:text-xl font-medium text-white mb-3">{{ __('marca.pillars.values_label') }}</h3>
                    <p class="text-sm font-light leading-relaxed text-white/60">{{ __('marca.pillars.values') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- MARCA GLOBAL -->
    <section class="relative bg-[#050608] overflow-hidden">
        <img src="{{ asset('assets/brand-global.jpg') }}" alt="{{ __('marca.global.title') }}" class="absolute right-0 top-1/2 -translate-y-1/2 h-full w-full md:w-2/3 object-cover object-right opacity-60 md:opacity-100 pointer-events-none">
        <div class="absolute inset-0 bg-gradient-to-r from-[#050608] via-[#050608]/80 to-transparent"></div>
        <div class="relative z-10 site-container py-20 md:py-28">
            <div class="max-w-xl text-white">
                <h2 class="text-4xl sm:text-6xl font-light uppercase tracking-wide leading-none mb-10 animate-up">{{ __('marca.global.title') }}</h2>
                <div class="space-y-5 text-sm font-light leading-relaxed text-white/70">
                    <p class="animate-up"><span class="font-semibold text-white">{{ __('marca.global.item1_title') }}:</span> {{ __('marca.global.item1_text') }}</p>
                    <p class="animate-up"><span class="font-semibold text-white">{{ __('marca.global.item2_title') }}:</span> {{ __('marca.global.item2_text') }}</p>
                    <p class="animate-up"><span class="font-semibold text-white">{{ __('marca.global.item3_title') }}:</span> {{ __('marca.global.item3_text') }}</p>
                    <p class="animate-up"><span class="font-semibold text-white">{{ __('marca.global.item4_title') }}:</span> {{ __('marca.global.item4_text') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CONCEITO REEV -->
    <section class="relative min-h-screen w-full overflow-hidden flex items-center">
        <img src="{{ asset('assets/tech-260325-desktop-up2.jpg') }}" alt="{{ __('marca.reev.title') }}" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-black/85 via-black/55 to-black/20"></div>
        <div class="relative z-10 w-full site-container text-white text-left py-24 md:py-32">
            <div class="max-w-2xl">
                <p class="text-xs sm:text-sm font-semibold uppercase tracking-[2px] mb-3 animate-up">{{ __('marca.reev.eyebrow') }}</p>
                <h2 class="text-4xl sm:text-6xl font-light leading-none mb-8 animate-up">{{ __('marca.reev.title') }}<sup class="text-xl align-super">**</sup></h2>
                <p class="text-sm sm:text-base font-light leading-relaxed text-white/85 mb-5 animate-up">{{ __('marca.reev.p1') }}</p>
                <p class="text-sm sm:text-base font-semibold uppercase leading-relaxed text-white mb-5 animate-up">{{ __('marca.reev.highlight') }}</p>
                <p class="text-sm font-light leading-relaxed text-white/70 animate-up">{{ __('marca.reev.definition') }}</p>
            </div>
        </div>
    </section>

    <!-- ESTILO DE VIDA OUTDOOR -->
    <section class="relative h-screen w-full overflow-hidden flex items-end">
        <img src="{{ asset('assets/life-style.jpg') }}" alt="{{ __('marca.lifestyle.title') }}" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/40 to-black/20"></div>
        <div class="relative z-10 w-full site-container text-white text-left pb-16 md:pb-24">
            <h2 class="text-4xl sm:text-6xl font-light uppercase tracking-wide leading-tight max-w-2xl mb-6 animate-up">{{ __('marca.lifestyle.title') }}</h2>
            <div class="max-w-xl space-y-4 text-sm sm:text-base font-light leading-relaxed text-white/85 animate-up">
                <p>{{ __('marca.lifestyle.p1') }}</p>
                <p>{{ __('marca.lifestyle.p2') }}</p>
            </div>
        </div>
    </section>
</x-front-layout>
