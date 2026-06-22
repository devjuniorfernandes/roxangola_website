<x-front-layout>
    <x-slot name="title">ROX 01 - SUV Híbrido</x-slot>

    <!-- Hero Section -->
    <section class="h-[100svh] w-full bg-cover bg-center relative flex items-end" style="background-image: url('{{ asset('assets/banner1.jpg') }}')">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/10 to-transparent"></div>
        <div class="relative z-10 max-w-[1600px] mx-auto px-6 md:px-8 pb-12 sm:pb-16 md:pb-20 w-full hero-animate">
            <img src="{{ asset('assets/rox01-global.svg') }}" alt="ROX 01" class="h-8 sm:h-10 md:h-14 mb-2 sm:mb-3">
            <p class="text-sm sm:text-base md:text-xl font-light text-gray-200 tracking-wide">
                SUV Todo-o-Terreno de Luxo — Cenário Completo
            </p>
        </div>
    </section>

    <!-- Lifestyle Slider -->
    <section class="py-16 md:py-24 bg-white overflow-hidden">
        <div class="relative" id="lifestyle-slider">
            <!-- Custom Cursor -->
            <div id="slider-cursor" class="fixed w-14 h-14 rounded-full pointer-events-none z-[60] opacity-0 transition-opacity duration-300 flex items-center justify-center" style="background: rgba(0,0,0,0.5); backdrop-filter: blur(12px); -webkit-backdrop-filter: blur(12px); transform: translate(-50%, -50%);">
                <span class="text-white text-xs font-medium tracking-wide">mais</span>
            </div>

            <!-- Slides Track -->
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
                    <img src="{{ asset('assets/' . $slide['img']) }}" alt="{{ $slide['title'] }}" class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105">
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

            <!-- Navigation Arrows -->
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

    <!-- Interior Gallery / Comfort Section -->
    <section class="py-16 md:py-24 bg-[#f4f6f9]">
        <div class="max-w-[1600px] mx-auto px-6 md:px-8">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Conforto em Primeira Classe</h2>
                <p class="text-gray-500 font-light max-w-2xl mx-auto text-sm md:text-base">Habitáculo desenhado ao detalhe para uma experiência de condução imersiva e relaxante, com tecnologia inteligente a bordo.</p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                <div class="bg-gray-200 h-[250px] md:h-[500px] rounded flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('assets/banner2.jpg') }}" alt="Interior 1" class="w-full h-full object-cover">
                </div>
                <div class="bg-gray-200 h-[250px] md:h-[500px] rounded flex items-center justify-center overflow-hidden">
                    <img src="{{ asset('assets/banner3.jpg') }}" alt="Interior 2" class="w-full h-full object-cover">
                </div>
            </div>
        </div>
    </section>

    <!-- 360 Viewer Section (Canvas Based) -->
    <section class="py-16 md:py-32 bg-[#F8F9FA] relative">
        <div class="max-w-[1600px] mx-auto text-center px-6 md:px-8">
            <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-8 md:mb-10">Explorar ROX 01</h2>
            
            <div class="flex justify-center gap-4 md:gap-6 mb-8 md:mb-12">
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

    <!-- Dark Features (Performance & Tech) -->
    <section class="bg-black text-white py-20 md:py-40">
        <div class="max-w-[1600px] mx-auto px-6 md:px-8 text-center animate-up">
            <h3 class="text-xs md:text-sm font-medium tracking-[3px] uppercase text-gray-400 mb-4 md:mb-6">Performance</h3>
            <h2 class="text-3xl md:text-6xl font-medium mb-6 md:mb-10 leading-tight">Desempenho Off-Road<br>Imbatível</h2>
            <p class="text-gray-300 font-light text-base md:text-xl leading-relaxed max-w-3xl mx-auto">
                Com tração integral inteligente de série e motores duplos de alta eficiência, o ROX 01 adapta-se a qualquer terreno. Uma verdadeira obra-prima da engenharia que combina luxo absoluto e robustez para desbravar as exigentes paisagens de Angola.
            </p>
        </div>
    </section>
    
    <!-- Lifestyle Image Grid -->
    <section class="bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-1 h-auto md:h-[800px]">
            <div class="relative overflow-hidden group h-[400px] md:h-full">
                <img src="{{ asset('assets/banner4.jpg') }}" alt="Outdoor" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute bottom-8 md:bottom-12 left-0 right-0 container-align-left text-white">
                    <h3 class="text-xl md:text-2xl font-medium mb-2">Aventuras Sem Limites</h3>
                    <p class="font-light text-xs md:text-sm text-gray-300">Capacidade excecional em piso não alcatroado.</p>
                </div>
            </div>
            <div class="relative overflow-hidden group h-[400px] md:h-full">
                <img src="{{ asset('assets/banner1.jpg') }}" alt="Camping" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute bottom-8 md:bottom-12 left-0 right-0 px-6 text-white">
                    <h3 class="text-xl md:text-2xl font-medium mb-2">Design Adaptável</h3>
                    <p class="font-light text-xs md:text-sm text-gray-300">Espaço de bagageira configurável para as suas viagens.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Script for Canvas 360 Viewer -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const container = document.getElementById('viewer-container');
            const canvas = document.getElementById('viewer-canvas');
            const ctx = canvas.getContext('2d');
            const swatches = document.querySelectorAll('.color-swatch');
            const loading = document.getElementById('viewer-loading');
            const icon360 = document.getElementById('icon-360');
            
            let currentColor = 'white';
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
                    img.src = `/assets/rox_1/${color}_${i}.png`;
                    images[color][i-1] = img;
                }
            }
            
            function drawFrame(frameIndex, color) {
                if(!images[color] || !images[color][frameIndex-1]) return;
                const img = images[color][frameIndex-1];
                
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

    <!-- Lifestyle Slider Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const track = document.getElementById('slider-track');
            const prevBtn = document.getElementById('slider-prev');
            const nextBtn = document.getElementById('slider-next');
            const cursor = document.getElementById('slider-cursor');
            const sliderSection = document.getElementById('lifestyle-slider');
            const cards = document.querySelectorAll('.slider-card');
            const slideButtons = document.querySelectorAll('.slide-btn');
            let currentSlide = 0;
            const isTouchDev = ('ontouchstart' in window) || (navigator.maxTouchPoints > 0);
            const GAP = 16;

            function layout() {
                const vw = window.innerWidth;
                const isMobile = vw < 768;
                // 2 full cards + 2 half peeks + 3 gaps = viewport
                // cardW = (vw - GAP * 3) / 3  => half peek on each side = cardW/2
                const cardW = isMobile ? vw * 0.85 : (vw - GAP * 3) / 3;
                const cardH = isMobile ? 400 : 550;

                cards.forEach(function(card) {
                    card.style.width = cardW + 'px';
                    card.style.height = cardH + 'px';
                    card.style.marginRight = GAP + 'px';
                });

                slideTo(currentSlide);
            }

            function slideTo(index) {
                const vw = window.innerWidth;
                const isMobile = vw < 768;
                const cardW = cards[0].offsetWidth;
                const step = cardW + GAP;
                const maxIndex = Math.max(0, cards.length - 3);
                currentSlide = Math.max(-1, Math.min(index, maxIndex));

                // Start offset: negative half card so it peeks on the left
                var initialOffset = -(cardW / 2);
                var offset = initialOffset - currentSlide * step;

                track.style.transform = 'translateX(' + offset + 'px)';
            }

            prevBtn.addEventListener('click', function() { slideTo(currentSlide - 1); });
            nextBtn.addEventListener('click', function() { slideTo(currentSlide + 1); });

            layout();
            window.addEventListener('resize', layout);

            // Custom cursor
            if (!isTouchDev) {
                sliderSection.addEventListener('mousemove', function(e) {
                    cursor.style.left = e.clientX + 'px';
                    cursor.style.top = e.clientY + 'px';
                });

                cards.forEach(function(card) {
                    card.addEventListener('mouseenter', function() { cursor.style.opacity = '1'; });
                    card.addEventListener('mouseleave', function() { cursor.style.opacity = '0'; });
                });

                slideButtons.forEach(function(btn) {
                    btn.addEventListener('mouseenter', function() {
                        cursor.style.opacity = '0';
                        btn.style.cursor = 'pointer';
                    });
                    btn.addEventListener('mouseleave', function() { cursor.style.opacity = '1'; });
                });
            }

            // Touch swipe
            var touchStartX = 0, touchDiff = 0;
            track.addEventListener('touchstart', function(e) { touchStartX = e.touches[0].clientX; }, { passive: true });
            track.addEventListener('touchmove', function(e) { touchDiff = e.touches[0].clientX - touchStartX; }, { passive: true });
            track.addEventListener('touchend', function() {
                if (Math.abs(touchDiff) > 50) slideTo(currentSlide + (touchDiff > 0 ? -1 : 1));
                touchDiff = 0;
            });
        });
    </script>
</x-front-layout>
