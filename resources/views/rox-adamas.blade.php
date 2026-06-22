<x-front-layout>
    <x-slot name="title">ROX Adamas - Todo-o-Terreno Premium</x-slot>

    <!-- Hero Section -->
    <section class="min-h-[80vh] md:h-[90vh] flex items-center px-6 md:px-[10%] relative overflow-hidden">
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0 pointer-events-none">
            <source src="{{ asset('assets/rox_adamas/banner_p.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-black/30 z-0 pointer-events-none"></div>
        <div class="max-w-[1400px] w-full text-white relative z-10 hero-animate pt-20 md:pt-0">
            <h1 class="mb-4 text-5xl md:text-7xl font-light tracking-widest uppercase">
                ROX ADAMAS
            </h1>
            <p class="text-lg md:text-3xl font-light max-w-2xl text-gray-200 tracking-wide">
                A combinação perfeita entre luxo e robustez extrema.
            </p>
        </div>
    </section>

    <!-- Interior Gallery / Comfort Section -->
    <section class="py-16 md:py-24 bg-[#f4f6f9]">
        <div class="max-w-[1400px] mx-auto px-6">
            <div class="text-center mb-12 md:mb-16">
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Interior Exclusivo</h2>
                <p class="text-gray-500 font-light max-w-2xl mx-auto text-sm md:text-base">Materiais de topo, acabamentos premium e tecnologia avançada para criar um ambiente de primeira classe onde quer que vá.</p>
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
        <div class="max-w-[1400px] mx-auto text-center px-4 md:px-6">
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

    <!-- Dark Features (Performance & Tech) -->
    <section class="relative bg-black text-white py-32 md:py-48 px-6 overflow-hidden">
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0 opacity-50 pointer-events-none">
            <source src="{{ asset('assets/rox_adamas/video.mp4') }}" type="video/mp4">
        </video>
        <div class="max-w-[1000px] mx-auto text-center animate-up relative z-10">
            <h3 class="text-xs md:text-sm font-medium tracking-[3px] uppercase text-gray-300 mb-4 md:mb-6">Performance Extrema</h3>
            <h2 class="text-3xl md:text-6xl font-medium mb-6 md:mb-10 leading-tight">Domínio Absoluto<br>Em Qualquer Piso</h2>
            <p class="text-gray-200 font-light text-base md:text-xl leading-relaxed max-w-3xl mx-auto">
                O ROX Adamas redefine o que é possível num Todo-o-Terreno de luxo. Concebido para superar limites, dispõe de suspensão adaptativa e uma robustez inigualável para desbravar as mais exigentes paisagens de Angola, com total conforto.
            </p>
        </div>
    </section>
    
    <!-- Lifestyle Image Grid -->
    <section class="py-1 bg-white">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-1 h-auto md:h-[800px]">
            <div class="relative overflow-hidden group h-[400px] md:h-full">
                <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105 pointer-events-none">
                    <source src="{{ asset('assets/rox_adamas/2_1.mp4') }}" type="video/mp4">
                </video>
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent z-10 pointer-events-none"></div>
                <div class="absolute bottom-8 md:bottom-12 left-8 md:left-12 text-white pr-6 z-20 pointer-events-none">
                    <h3 class="text-xl md:text-2xl font-medium mb-2">Aventuras Sem Limites</h3>
                    <p class="font-light text-xs md:text-sm text-gray-300">Capacidade de superação de obstáculos incomparável.</p>
                </div>
            </div>
            <div class="relative overflow-hidden group h-[400px] md:h-full">
                <img src="{{ asset('assets/banner1.jpg') }}" alt="Camping" class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
                <div class="absolute bottom-8 md:bottom-12 left-8 md:left-12 text-white pr-6">
                    <h3 class="text-xl md:text-2xl font-medium mb-2">Espaço Generoso</h3>
                    <p class="font-light text-xs md:text-sm text-gray-300">Alojamento espaçoso para toda a bagagem e equipamento.</p>
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
</x-front-layout>
