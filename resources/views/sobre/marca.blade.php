<x-front-layout>
    <x-slot name="title">A Marca</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-screen w-full overflow-hidden flex items-start justify-center">
        <img src="{{ asset('assets/banner.jpg') }}" alt="A Marca ROX" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative z-10 text-center text-white px-6 pt-[120px]">
            <p class="text-lg sm:text-xl font-semibold tracking-[2px] mb-3 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">A História da Marca</p>
            <h1 class="text-2xl sm:text-4xl font-light leading-snug max-w-3xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">Criando a experiência de viagem definitiva para aventureiros apaixonados</h1>
            <div class="mt-6 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.7s forwards;">
                <button class="inline-flex items-center gap-2 text-sm sm:text-lg text-white cursor-pointer transition-opacity hover:opacity-70">
                    Assistir Vídeo Completo
                    <svg class="w-5 h-5 sm:w-6 sm:h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M8 5v14l11-7z"/></svg>
                </button>
            </div>
        </div>
    </section>

    <!-- VISÃO GLOBAL -->
    <section class="relative h-screen w-full overflow-hidden">
        <img src="{{ asset('assets/life.jpg') }}" alt="Visão Global" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 content-container text-white pt-[120px]">
            <p class="text-lg font-semibold tracking-[2px] mb-3 animate-up">VISÃO GLOBAL</p>
            <h2 class="text-2xl sm:text-4xl font-light leading-normal max-w-3xl animate-up">Uma marca global robusta, inovadora e sustentável, com potencial infinito</h2>
            <div class="mt-8 animate-up">
                <button class="border border-white text-white text-sm font-normal px-8 py-2.5 tracking-[2px] transition-all duration-300 hover:bg-white hover:text-black">SABER MAIS</button>
            </div>
        </div>
    </section>

    <!-- ESTILO DE VIDA -->
    <section class="relative h-screen w-full overflow-hidden">
        <img src="{{ asset('assets/outdoor.avif') }}" alt="Estilo de Vida" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 content-container text-white pt-[120px]">
            <p class="text-lg font-semibold tracking-[2px] mb-3 animate-up">ESTILO DE VIDA</p>
            <h2 class="text-2xl sm:text-4xl font-light leading-normal max-w-3xl animate-up">Não se trata de conquista ou fama — mas sim de um desejo puro e autêntico</h2>
            <div class="mt-8 animate-up">
                <button class="border border-white text-white text-sm font-normal px-8 py-2.5 tracking-[2px] transition-all duration-300 hover:bg-white hover:text-black">SABER MAIS</button>
            </div>
        </div>
    </section>

    <!-- FORÇA DO PRODUTO -->
    <section class="relative h-screen w-full overflow-hidden">
        <img src="{{ asset('assets/keji.jpg') }}" alt="Força do Produto" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 content-container text-white pt-[120px]">
            <p class="text-lg font-semibold tracking-[2px] mb-3 animate-up">FORÇA DO PRODUTO</p>
            <h2 class="text-2xl sm:text-4xl font-light leading-normal max-w-3xl animate-up">Cada estilo de vida é sustentado por uma robusta capacidade tecnológica</h2>
            <div class="mt-8 animate-up">
                <button class="border border-white text-white text-sm font-normal px-8 py-2.5 tracking-[2px] transition-all duration-300 hover:bg-white hover:text-black">SABER MAIS</button>
            </div>
        </div>
    </section>

    <!-- VALOR DA MARCA -->
    <section class="relative h-screen w-full overflow-hidden">
        <img src="{{ asset('assets/lichengbei.jpg') }}" alt="Valor da Marca" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/20"></div>
        <div class="relative z-10 content-container text-white pt-[120px]">
            <p class="text-lg font-semibold tracking-[2px] mb-3 animate-up">VALOR DA MARCA</p>
            <h2 class="text-2xl sm:text-4xl font-light leading-normal max-w-3xl animate-up">Começa com a pedra mais pura — temperada pelo tempo...</h2>
            <div class="mt-8 animate-up">
                <button class="border border-white text-white text-sm font-normal px-8 py-2.5 tracking-[2px] transition-all duration-300 hover:bg-white hover:text-black">SABER MAIS</button>
            </div>
        </div>
    </section>
</x-front-layout>
