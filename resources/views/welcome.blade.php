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
            <div class="site-container">
                <img id="hero-logo" src="{{ asset('assets/adamas.svg') }}" alt="ROX Model" class="h-8 sm:h-10 md:h-12 mb-4 md:mb-5 transition-all duration-700 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">
                <p id="hero-subtitle" class="text-sm sm:text-base md:text-lg font-light text-gray-200 tracking-wide mb-6 md:mb-8 transition-all duration-700 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">All New Luxury All-terrain SUV</p>
                <a id="hero-link" href="{{ route('rox-adamas') }}" class="inline-block px-8 py-3 text-xs md:text-sm font-medium tracking-widest uppercase border border-white/60 text-white hover:bg-white hover:text-black transition-all duration-300 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.7s forwards;">MAIS</a>
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

    <!-- Explore Models Section -->
    <section class="py-20 md:py-28 bg-white overflow-hidden" id="explore-models">
        <div class="content-container">
            <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-10 md:mb-14 text-center animate-up">Explorar Modelos ROX</h2>

            <!-- Model Tabs -->
            <div class="flex justify-center gap-6 md:gap-12 mb-12 md:mb-16 animate-up">
                <button class="explore-tab active text-xs sm:text-sm md:text-base font-medium tracking-wider sm:tracking-widest uppercase pb-2 border-b-2 text-black transition-all duration-300" style="border-color: var(--rox-dune-yellow);" data-model="adamas">ROX Adamas</button>
                <button class="explore-tab text-xs sm:text-sm md:text-base font-medium tracking-wider sm:tracking-widest uppercase pb-2 border-b-2 border-transparent text-gray-400 transition-all duration-300 hover:text-gray-600" data-model="rox01">ROX 01</button>
            </div>

            <!-- Slider viewport -->
            <div class="relative overflow-hidden">
                <div class="flex transition-transform duration-500 ease-out" id="explore-track" style="width: 200%;">
                    <!-- Panel: ROX ADAMAS -->
                    <div class="w-1/2 flex-shrink-0">
                        <div class="flex flex-col items-center text-center">
                            <div class="relative w-full max-w-[1200px] mx-auto mb-8 md:mb-10">
                                <img src="{{ asset('assets/adamas.png') }}" alt="ROX ADAMAS" class="w-full h-auto object-contain">
                            </div>
                            <a href="{{ route('rox-adamas') }}" class="inline-block px-8 py-3 text-xs md:text-sm font-medium tracking-widest uppercase border border-black text-black hover:bg-black hover:text-white transition-all duration-300">Explorar ROX Adamas</a>
                        </div>
                    </div>
                    <!-- Panel: ROX 01 -->
                    <div class="w-1/2 flex-shrink-0">
                        <div class="flex flex-col items-center text-center">
                            <div class="relative w-full max-w-[1200px] mx-auto mb-8 md:mb-10">
                                <img src="{{ asset('assets/rox01.png') }}" alt="ROX 01" class="w-full h-auto object-contain">
                            </div>
                            <a href="{{ route('rox01') }}" class="inline-block px-8 py-3 text-xs md:text-sm font-medium tracking-widest uppercase border border-black text-black hover:bg-black hover:text-white transition-all duration-300">Explorar ROX 01</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Full-width Showcase Section -->
    <section class="relative bg-black" id="showcase-section">
        <div class="relative h-[100svh] w-full overflow-hidden">
            <video class="absolute inset-0 w-full h-full object-cover" autoplay loop muted playsinline poster="{{ asset('assets/banner.jpg') }}">
                <source src="{{ asset('Dealer Feed Video ADAMAS - Subtitle free version.mp4') }}" type="video/mp4">
            </video>
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
            <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
                <div class="content-container">
                    <p id="showcase-label" class="text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6 opacity-0 translate-y-6" style="transition: opacity 0.7s ease-out, transform 0.7s ease-out;">HISTÓRIA DA MARCA</p>
                    <h2 id="showcase-title" class="text-2xl md:text-4xl font-light text-white mb-4 md:mb-6 max-w-2xl leading-snug opacity-0 translate-y-6" style="transition: opacity 0.7s ease-out 0.15s, transform 0.7s ease-out 0.15s;">Criamos a experiência de viagem definitiva para os sonhadores apaixonados por viagens</h2>
                </div>
            </div>
        </div>

        <div class="relative pt-16 md:pt-24 pb-16 md:pb-24">
            <div class="absolute -top-40 left-0 right-0 h-40 bg-gradient-to-t from-black to-transparent"></div>
            <div class="content-container">
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

    <!-- Showcase Scroll Reveal Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var section = document.getElementById('showcase-section');
            if (!section) return;

            var els = [
                document.getElementById('showcase-label'),
                document.getElementById('showcase-title')
            ].filter(Boolean);
            var revealed = false;

            function onScroll() {
                var rect = section.getBoundingClientRect();
                var vh = window.innerHeight;
                if (rect.top < vh * 0.6 && !revealed) {
                    revealed = true;
                    els.forEach(function(el) { el.style.opacity = '1'; el.style.transform = 'translateY(0)'; });
                }
                if (rect.bottom < 0 || rect.top > vh) {
                    revealed = false;
                    els.forEach(function(el) { el.style.opacity = '0'; el.style.transform = 'translateY(24px)'; });
                }
            }

            window.addEventListener('scroll', onScroll, { passive: true });
            onScroll();
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


    <!-- Services Feature Section -->
    <div class="feature-wrapper relative" style="height: 200vh;">
        <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
            <img src="{{ asset('assets/services.jpg') }}" alt="Centro de Assistência ROX" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
                <div class="content-container w-full">
                    <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">Centro de assistência</p>
                    <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-4 md:mb-6 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Um parceiro fiável para guiar as suas aventuras ao ar livre</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- ROX Life Feature Section -->
    <div class="feature-wrapper relative" style="height: 200vh;">
        <div class="sticky top-0 w-full h-[100svh] overflow-hidden feature-section">
            <img src="{{ asset('assets/life.jpg') }}" alt="ROX Life" class="w-full h-full object-cover">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
            <div class="absolute top-0 left-0 right-0 pt-24 md:pt-32">
                <div class="content-container w-full">
                    <p class="feature-title text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white mb-4 md:mb-6" style="opacity: 0; transform: translateY(40px);">ROX Life</p>
                    <h2 class="feature-title text-2xl md:text-4xl font-light text-white mb-4 md:mb-6 max-w-2xl leading-snug" style="opacity: 0; transform: translateY(40px);">Para onde quer que vá, essa é a direção certa</h2>
                </div>
            </div>
        </div>
    </div>

    <!-- ROX App Section -->
    <section class="py-20 md:py-28 bg-white overflow-x-clip">
        <div class="content-container">
            <div class="mb-10 md:mb-14 animate-up">
                <p class="text-sm md:text-base font-semibold tracking-wide text-black mb-4">ROX App ROX Exploration, Forward Ever</p>
                <h2 class="text-xl sm:text-2xl md:text-[2.5rem] font-light leading-relaxed md:leading-[1.35] max-w-4xl text-black">Experimente o Controlo do Veículo, Chave Bluetooth, Introdução ao Modelo ROX e ROX LIFE das infinitas possibilidades que o ROX lhe traz.</h2>
            </div>

            <div class="bg-[#F8F9F9] py-16 md:py-[137px] px-[8%] mt-10 md:mt-20 relative hidden lg:block animate-up">
                <div class="flex flex-col w-[250px] items-center text-center">
                    <img src="{{ asset('assets/app-download.jpg') }}" alt="QR Code ROX App" class="w-[120px] md:w-[160px] h-auto mx-auto">
                    <p class="mt-4 text-lg leading-normal text-black">Digitalize o código QR para descarregar a aplicação.</p>
                </div>
                <img src="{{ asset('assets/app-en.png') }}" alt="ROX App Screenshots" class="absolute right-0 -top-[30px] xl:-top-[50px] w-[660px] xl:w-[640px] h-auto pointer-events-none">
            </div>

            <!-- Mobile fallback -->
            <div class="flex flex-col items-center text-center lg:hidden animate-up mt-10">
                <img src="{{ asset('assets/app-download.jpg') }}" alt="QR Code ROX App" class="w-[120px] h-auto mx-auto mb-4">
                <p class="text-base leading-normal text-black mb-8">Digitalize o código QR para descarregar a aplicação.</p>
                <img src="{{ asset('assets/app-en.png') }}" alt="ROX App Screenshots" class="max-w-[400px] w-full h-auto">
            </div>
        </div>
    </section>


</x-front-layout>
