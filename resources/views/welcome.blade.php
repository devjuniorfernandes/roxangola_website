<x-front-layout>
    <x-slot name="title">Página Inicial</x-slot>

    @php
        $hero = \App\Models\SiteSection::where('section_name', 'hero')->get()->keyBy('key');
        $features = \App\Models\SiteSection::where('section_name', 'features')->get()->keyBy('key');
        $explore = \App\Models\SiteSection::where('section_name', 'explore_models')->get()->keyBy('key');
        
        $heroBg = isset($hero['banner_image']) && $hero['banner_image']->value ? asset($hero['banner_image']->value) : asset('assets/banner.jpg');
        $exploreImg = isset($explore['car_image']) && $explore['car_image']->value ? asset($explore['car_image']->value) : asset('assets/rox01.png');
        
        $vehicles = \App\Models\Vehicle::where('is_active', true)->orderBy('created_at', 'asc')->get();
    @endphp

    <!-- Hero Section -->
    <section class="h-screen bg-cover bg-center flex items-center px-6 md:px-12 relative" style="background-image: url('{{ $heroBg }}')">
        <div class="max-w-[1400px] mx-auto w-full text-white hero-animate">
            <h1 class="mb-5 text-4xl md:text-6xl font-medium tracking-wide">
                {{ $hero['title']->value ?? 'ROX Angola' }}
            </h1>
            <p class="text-lg md:text-2xl mb-8 font-light max-w-2xl">
                {{ $hero['subtitle']->value ?? 'O Futuro da Mobilidade Premium.' }}
            </p>
            <a href="#" class="inline-block px-8 py-3 text-sm font-medium tracking-wide uppercase border border-white text-white hover:bg-white hover:text-black transition-all duration-300 hover:scale-105 rounded-sm">Saber mais</a>
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
