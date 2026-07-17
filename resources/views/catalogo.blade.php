<x-front-layout>
    <x-slot name="title">Catálogo</x-slot>

    <!-- Hero Slider -->
    <section class="relative h-[100svh] w-full overflow-hidden" id="catalogo-hero-slider" data-duration="6000">
        <!-- Slide 1 -->
        <div class="catalogo-slide absolute inset-0 z-20 opacity-100 transition-opacity duration-[1400ms] ease-in-out" data-catalogo-slide data-title="Catálogo ROX Motor Angola" data-subtitle="Explore todos os detalhes da gama ROX e descubra o equilíbrio perfeito entre luxo, tecnologia inteligente e capacidade todo-o-terreno.">
            <img src="{{ asset('assets/banner-adamas.avif') }}" alt="ROX ADAMAS" class="h-full w-full object-cover">
        </div>
        <!-- Slide 2 -->
        <div class="catalogo-slide absolute inset-0 z-10 opacity-0 transition-opacity duration-[1400ms] ease-in-out" data-catalogo-slide data-title="Catálogo ROX Motor Angola" data-subtitle="Consulte especificações, equipamentos e características que definem uma nova geração de SUV premium.">
            <img src="{{ asset('assets/banner.jpg') }}" alt="ROX Motor" class="h-full w-full object-cover">
        </div>
        <!-- Slide 3 -->
        <div class="catalogo-slide absolute inset-0 z-10 opacity-0 transition-opacity duration-[1400ms] ease-in-out" data-catalogo-slide data-title="Catálogo ROX Motor Angola" data-subtitle="Conheça em detalhe a nova geração de SUV premium da ROX Motor.">
            <img src="{{ asset('assets/rox01.jpg') }}" alt="ROX 01" class="h-full w-full object-cover">
        </div>

        <!-- Gradient overlays -->
        <div class="pointer-events-none absolute inset-x-0 bottom-0 z-30 h-[50%] bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-x-0 bottom-0 z-40 pb-32 md:pb-36">
            <div class="site-container">
                <h1 id="catalogo-hero-title" class="text-3xl sm:text-4xl md:text-5xl font-medium text-white mb-4 md:mb-5 transition-all duration-700 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">Catálogo ROX Motor Angola</h1>
                <p id="catalogo-hero-subtitle" class="text-sm sm:text-base md:text-lg font-light text-gray-200 tracking-wide max-w-2xl opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">Explore todos os detalhes da gama ROX e descubra o equilíbrio perfeito entre luxo, tecnologia inteligente e capacidade todo-o-terreno.</p>
            </div>
        </div>

        <!-- Progress bars -->
        <div class="absolute inset-x-0 bottom-16 md:bottom-20 z-40 flex justify-start gap-3 site-container mx-auto opacity-0 translate-y-4" style="animation: heroSlideUp 0.8s ease-out 0.9s forwards;">
            <button type="button" class="catalogo-progress h-[2px] w-10 bg-white/30" data-catalogo-progress aria-label="Slide 1">
                <span class="block h-full w-full origin-left scale-x-0" style="background: var(--rox-dune-yellow);"></span>
            </button>
            <button type="button" class="catalogo-progress h-[2px] w-10 bg-white/30" data-catalogo-progress aria-label="Slide 2">
                <span class="block h-full w-full origin-left scale-x-0" style="background: var(--rox-dune-yellow);"></span>
            </button>
            <button type="button" class="catalogo-progress h-[2px] w-10 bg-white/30" data-catalogo-progress aria-label="Slide 3">
                <span class="block h-full w-full origin-left scale-x-0" style="background: var(--rox-dune-yellow);"></span>
            </button>
        </div>
    </section>

    <!-- Catálogo ROX Motor Angola -->
    <section class="bg-black text-white py-20 md:py-28">
        <div class="content-container">
            <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-12 md:mb-16 animate-up">Catálogo ROX Motor Angola</h2>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 md:gap-8">
                <!-- Descarregar Catálogo PDF -->
                <a href="#" class="animate-up block group">
                    <div class="h-[220px] sm:h-[280px] md:h-[420px] overflow-hidden">
                        <img src="{{ asset('assets/banner-adamas.avif') }}" alt="ROX ADAMAS" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#1a1a1a] text-white px-5 sm:px-6 md:px-8 h-[120px] sm:h-[130px] md:h-[140px] flex items-start pt-4 sm:pt-5 md:pt-6 justify-between gap-4">
                        <div>
                            <h3 class="text-base sm:text-lg md:text-xl font-semibold mb-2 sm:mb-3">Descarregar Catálogo PDF</h3>
                            <p class="text-xs md:text-sm text-gray-400 font-light leading-relaxed">Conheça em detalhe a nova geração de SUV premium da ROX Motor.</p>
                        </div>
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-400 group-hover:text-white transition-colors duration-200 flex-shrink-0 mt-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                    </div>
                </a>

                <!-- Visualizar Catálogo -->
                <a href="#" class="animate-up block group">
                    <div class="h-[220px] sm:h-[280px] md:h-[420px] overflow-hidden">
                        <img src="{{ asset('assets/banner2.jpg') }}" alt="ROX 01" class="w-full h-full object-cover">
                    </div>
                    <div class="bg-[#1a1a1a] text-white px-5 sm:px-6 md:px-8 h-[120px] sm:h-[130px] md:h-[140px] flex items-start pt-4 sm:pt-5 md:pt-6 justify-between gap-4">
                        <div>
                            <h3 class="text-base sm:text-lg md:text-xl font-semibold mb-2 sm:mb-3">Visualizar Catálogo</h3>
                            <p class="text-xs md:text-sm text-gray-400 font-light leading-relaxed">Explore o catálogo oficial da ROX Motor Angola e conheça os modelos que unem luxo, inovação e desempenho para uma nova forma de conduzir.</p>
                        </div>
                        <svg class="w-5 h-5 sm:w-6 sm:h-6 text-gray-400 group-hover:text-white transition-colors duration-200 flex-shrink-0 mt-1" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"/></svg>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        var slides = document.querySelectorAll('[data-catalogo-slide]');
        var progressBars = document.querySelectorAll('[data-catalogo-progress]');
        var titleEl = document.getElementById('catalogo-hero-title');
        var subtitleEl = document.getElementById('catalogo-hero-subtitle');
        var total = slides.length;
        var current = 0;
        var duration = 6000;
        var timer = null;
        var progressAnim = null;

        function goTo(index) {
            slides[current].style.zIndex = 10;
            slides[current].style.opacity = 0;
            current = index;
            slides[current].style.zIndex = 20;
            slides[current].style.opacity = 1;

            var slide = slides[current];
            titleEl.textContent = slide.getAttribute('data-title');
            subtitleEl.textContent = slide.getAttribute('data-subtitle');

            progressBars.forEach(function(bar, i) {
                var fill = bar.querySelector('span');
                fill.style.transition = 'none';
                fill.style.transform = 'scaleX(0)';
                if (i === current) {
                    void fill.offsetWidth;
                    fill.style.transition = 'transform ' + duration + 'ms linear';
                    fill.style.transform = 'scaleX(1)';
                }
            });
        }

        function next() {
            goTo((current + 1) % total);
        }

        function startAutoplay() {
            clearInterval(timer);
            timer = setInterval(next, duration);
            var fill = progressBars[current].querySelector('span');
            fill.style.transition = 'none';
            fill.style.transform = 'scaleX(0)';
            void fill.offsetWidth;
            fill.style.transition = 'transform ' + duration + 'ms linear';
            fill.style.transform = 'scaleX(1)';
        }

        progressBars.forEach(function(bar, i) {
            bar.addEventListener('click', function() {
                goTo(i);
                clearInterval(timer);
                timer = setInterval(next, duration);
            });
        });

        startAutoplay();
    });
    </script>
</x-front-layout>
