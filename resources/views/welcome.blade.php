<x-front-layout>
    <x-slot name="title">Página Inicial</x-slot>

    @php
        $hero = \App\Models\SiteSection::where('section_name', 'hero')->get()->keyBy('key');
        $features = \App\Models\SiteSection::where('section_name', 'features')->get()->keyBy('key');
        $explore = \App\Models\SiteSection::where('section_name', 'explore_models')->get()->keyBy('key');
        
        $heroBg = isset($hero['banner_image']) && $hero['banner_image']->value ? asset($hero['banner_image']->value) : asset('assets/banner1.jpg');
        $exploreImg = isset($explore['car_image']) && $explore['car_image']->value ? asset($explore['car_image']->value) : asset('assets/rox01.png');
        
        $vehicles = \App\Models\Vehicle::where('is_active', true)->orderBy('created_at', 'asc')->get();
    @endphp

    <!-- Hero Slider Section -->
    <section class="relative h-[100svh] w-full overflow-hidden" id="hero-slider">
        <!-- Slide 1: ROX ADAMAS -->
        <div class="hero-slide absolute inset-0 z-20 opacity-100 transition-opacity duration-[1400ms] ease-in-out" data-hero-slide data-logo="{{ asset('assets/adamas.svg') }}" data-subtitle="All New Luxury All-terrain SUV" data-link="{{ route('rox-adamas') }}">
            <img src="{{ asset('assets/banner-adamas.avif') }}" alt="ROX ADAMAS" class="h-full w-full object-cover">
        </div>
        <!-- Slide 2: ROX 01 -->
        <div class="hero-slide absolute inset-0 z-10 opacity-0 transition-opacity duration-[1400ms] ease-in-out" data-hero-slide data-logo="{{ asset('assets/rox01-global.svg') }}" data-subtitle="SUV Todo-o-Terreno de Luxo — Cenário Completo" data-link="{{ route('rox01') }}">
            <img src="{{ asset('assets/banner2.jpg') }}" alt="ROX 01" class="h-full w-full object-cover">
        </div>

        <!-- Gradient overlays -->
        <div class="pointer-events-none absolute inset-x-0 bottom-0 z-30 h-[50%] bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>

        <!-- Content -->
        <div class="absolute inset-x-0 bottom-0 z-40 pb-32 md:pb-36">
            <div class="max-w-[1600px] mx-auto px-6 md:px-8">
                <img id="hero-logo" src="{{ asset('assets/adamas.svg') }}" alt="ROX Model" class="h-8 sm:h-10 md:h-12 mb-4 md:mb-5 transition-opacity duration-500 hero-animate">
                <p id="hero-subtitle" class="text-sm sm:text-base md:text-lg font-light text-gray-200 tracking-wide mb-6 md:mb-8 transition-opacity duration-500 hero-animate">All New Luxury All-terrain SUV</p>
                <a id="hero-link" href="{{ route('rox-adamas') }}" class="inline-block px-8 py-3 text-xs md:text-sm font-medium tracking-widest uppercase border border-white/60 text-white hover:bg-white hover:text-black transition-all duration-300 hero-animate">MAIS</a>
            </div>
        </div>

        <!-- Progress bars -->
        <div class="absolute inset-x-0 bottom-16 md:bottom-20 z-40 flex justify-start gap-3 px-6 md:px-8 max-w-[1600px] mx-auto left-0 right-0">
            <button type="button" class="hero-progress h-[2px] w-10 bg-white/30" data-hero-progress aria-label="Slide 1">
                <span class="block h-full w-full origin-left scale-x-0 bg-white"></span>
            </button>
            <button type="button" class="hero-progress h-[2px] w-10 bg-white/30" data-hero-progress aria-label="Slide 2">
                <span class="block h-full w-full origin-left scale-x-0 bg-white"></span>
            </button>
        </div>
    </section>

    <!-- Explore Models Section -->
    <section class="py-24 px-6 bg-white">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-3xl font-normal mb-10 tracking-wide animate-up">{{ $explore['title']->value ?? 'Explorar Modelos ROX' }}</h2>
            <div class="flex justify-center gap-10 mb-12 animate-up" id="vehicle-tabs">
                @foreach($vehicles as $index => $vehicle)
                    <button class="tab-btn {{ $index === 0 ? 'active border-b-2 border-black text-black' : 'text-gray-400' }} pb-2 text-base transition-colors font-medium" data-image="{{ asset($vehicle->image) }}" data-link="/{{ $vehicle->slug }}">
                        {{ $vehicle->name }}
                    </button>
                @endforeach
            </div>
            <div class="mb-12 animate-up min-h-[300px] flex items-center justify-center">
                <img src="{{ $vehicles->first() ? asset($vehicles->first()->image) : $exploreImg }}" alt="ROX Model" id="car-image" loading="lazy" class="max-w-full h-auto mx-auto hover:scale-[1.02] transition-transform duration-500">
            </div>
            <a href="{{ $vehicles->first() ? '/'.$vehicles->first()->slug : route('rox01') }}" id="explore-btn" class="inline-block px-8 py-3 text-sm font-medium tracking-wide uppercase border border-black text-black hover:bg-black hover:text-white transition-all duration-300 hover:scale-105 rounded-sm animate-up">{{ $explore['button_text']->value ?? 'Explorar' }}</a>
        </div>
    </section>

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
            var duration = 6000;
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

            function setCopy(index) {
                var slide = slides[index];
                var els = [logoEl, subtitleEl, linkEl];

                els.forEach(function(el) { el.style.opacity = '0'; });

                setTimeout(function() {
                    logoEl.src = slide.dataset.logo;
                    logoEl.alt = slide.querySelector('img').alt;
                    subtitleEl.textContent = slide.dataset.subtitle;
                    linkEl.href = slide.dataset.link;
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

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const tabs = document.querySelectorAll('#vehicle-tabs .tab-btn');
            const carImage = document.getElementById('car-image');
            const exploreBtn = document.getElementById('explore-btn');

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    // Remove active from all
                    tabs.forEach(t => {
                        t.classList.remove('active', 'border-b-2', 'border-black', 'text-black');
                        t.classList.add('text-gray-400');
                    });
                    
                    // Add active to clicked
                    tab.classList.add('active', 'border-b-2', 'border-black', 'text-black');
                    tab.classList.remove('text-gray-400');

                    // Update Image with fade effect
                    carImage.style.opacity = '0';
                    setTimeout(() => {
                        carImage.src = tab.getAttribute('data-image');
                        carImage.style.opacity = '1';
                    }, 300);

                    // Update Link
                    exploreBtn.href = tab.getAttribute('data-link');
                });
            });
        });
    </script>

    <!-- Brand/Capabilities Section -->
    <section class="h-[80vh] cap-bg flex flex-col justify-center px-6 md:px-[10%] text-white">
        <div class="animate-up">
            <h3 class="text-base font-light tracking-[2px] mb-2">ROX Angola</h3>
            <h2 class="text-4xl md:text-5xl font-medium mb-5 leading-tight">SUV Híbrido Premium Todo-o-Terreno</h2>
            <p class="text-lg mb-10 max-w-[600px] font-light">Redefina o padrão para veículos todo-o-terreno inteligentes de luxo</p>
            <a href="#" class="inline-block px-8 py-3 text-sm font-medium tracking-wide uppercase border border-white text-white hover:bg-white hover:text-black transition-all duration-300 hover:scale-105 rounded-sm">Saber mais</a>
        </div>
    </section>

    <!-- Features Grid Section -->
    <section class="p-1 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-1 grid-rows-[auto] md:grid-rows-[500px_400px]">
            <div class="md:col-span-2 grid-item-1 relative overflow-hidden text-white flex items-end p-10 cursor-pointer group grid-overlay h-[400px] md:h-auto">
                <div class="grid-content-z w-full">
                    <h3 class="text-2xl font-medium mb-2 group-hover:-translate-y-1 transition-transform duration-300">Tecnologia Inteligente</h3>
                    <p class="text-sm font-light mb-5 max-w-[80%]">Cobertura de condução inteligente em todos os cenários e um habitáculo rico em entretenimento</p>
                    <a href="#" class="absolute right-0 bottom-0 w-10 h-10 border border-white rounded-full flex items-center justify-center text-xl transition-colors duration-300 group-hover:bg-white group-hover:text-black">+</a>
                </div>
            </div>
            <div class="grid-item-2 relative overflow-hidden text-white flex items-end p-10 cursor-pointer group grid-overlay h-[400px] md:h-auto">
                <div class="grid-content-z w-full">
                    <h3 class="text-2xl font-medium mb-2 group-hover:-translate-y-1 transition-transform duration-300">Capacidade Todo-o-Terreno</h3>
                    <p class="text-sm font-light mb-5 max-w-[80%]">Tração integral com motor duplo de série, adapta-se a todos os terrenos</p>
                    <a href="#" class="absolute right-0 bottom-0 w-10 h-10 border border-white rounded-full flex items-center justify-center text-xl transition-colors duration-300 group-hover:bg-white group-hover:text-black">+</a>
                </div>
            </div>
            <div class="grid-item-3 relative overflow-hidden text-white flex items-end p-10 cursor-pointer group grid-overlay h-[400px] md:h-auto">
                <div class="grid-content-z w-full">
                    <h3 class="text-2xl font-medium mb-2 group-hover:-translate-y-1 transition-transform duration-300">Visão Geral do ROX 01</h3>
                    <p class="text-sm font-light mb-5 max-w-[80%]">Saiba mais sobre o ROX 01</p>
                    <a href="#" class="absolute right-0 bottom-0 w-10 h-10 border border-white rounded-full flex items-center justify-center text-xl transition-colors duration-300 group-hover:bg-white group-hover:text-black">+</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="h-[60vh] services-bg flex flex-col justify-start pt-24 px-6 md:px-[10%] text-white relative">
        <div class="animate-up">
            <p class="text-sm uppercase tracking-[2px] mb-5">Centro de assistência</p>
            <h2 class="text-3xl md:text-4xl font-normal mb-10 max-w-[800px]">Um parceiro fiável para guiar as suas aventuras ao ar livre</h2>
            <a href="#" class="text-white border-b border-white pb-1 hover:opacity-70 transition-opacity">Saber mais</a>
        </div>
    </section>

    <!-- ROX Life Section -->
    <section class="h-[60vh] life-bg flex flex-col justify-start pt-24 px-6 md:px-[10%] text-white relative">
        <div class="animate-up">
            <p class="text-sm uppercase tracking-[2px] mb-5">ROX Life</p>
            <h2 class="text-3xl md:text-4xl font-normal mb-10 max-w-[800px]">Para onde quer que vá, essa é a direção certa</h2>
            <a href="#" class="inline-block px-8 py-3 text-sm font-medium tracking-wide uppercase border border-white text-white hover:bg-white hover:text-black transition-all duration-300 hover:scale-105 rounded-sm">Saber mais</a>
        </div>
    </section>

    <!-- Video Section -->
    <section class="w-full">
        @php
            $videoUrl = isset($hero['video_url']) && $hero['video_url']->value ? asset($hero['video_url']->value) : asset('Dealer Feed Video ADAMAS - Subtitle free version.mp4');
        @endphp
        <video class="w-full h-auto object-cover" autoplay loop muted playsinline poster="{{ asset('assets/banner1.jpg') }}">
            <source src="{{ $videoUrl }}" type="video/mp4">
            O seu navegador não suporta a tag de vídeo.
        </video>
    </section>

</x-front-layout>
