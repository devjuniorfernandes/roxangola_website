<x-front-layout>
    <x-slot name="title">{{ __('servicos_manual_instrucoes.title') }}</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden flex items-center justify-center">
        <img src="{{ cms_image('servicos.manual_instrucoes.hero_bg', asset('assets/keji.jpg')) }}" alt="{{ __('servicos_manual_instrucoes.hero.title') }}" class="absolute inset-0 w-full h-full object-cover object-bottom">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium mb-4 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">{{ __('servicos_manual_instrucoes.hero.title') }}</h1>
            <p class="text-base md:text-lg font-light text-gray-200 max-w-2xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">{{ __('servicos_manual_instrucoes.hero.subtitle') }}</p>
        </div>
    </section>

    <!-- Manual do Usuário -->
    <section class="relative bg-black py-16 md:py-24">
        <div class="content-container">
            <div class="mb-12 md:mb-16 animate-up">
                <p class="text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white/60 mb-4">{{ __('servicos_manual_instrucoes.intro.eyebrow') }}</p>
                <h2 class="text-3xl md:text-4xl font-light text-white max-w-3xl leading-snug">{{ __('servicos_manual_instrucoes.intro.title') }}</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 sm:gap-6">
                <!-- ROX ADAMAS -->
                <div class="animate-up">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ cms_image('servicos.manual_instrucoes.adamas_img', asset('assets/adamasslider1.avif')) }}" alt="{{ __('servicos_manual_instrucoes.models.adamas.name') }}" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 h-80" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 100%);"></div>
                        <div class="absolute inset-0 flex flex-col justify-end text-white p-5 sm:p-10 z-10">
                            <div class="text-lg sm:text-2xl font-semibold">{{ __('servicos_manual_instrucoes.models.adamas.name') }}</div>
                            <div class="mt-1 sm:mt-2 text-sm sm:text-lg leading-normal">{{ __('servicos_manual_instrucoes.models.adamas.subtitle') }}</div>
                        </div>
                    </div>
                    <div class="w-full p-5 sm:p-10 text-white text-sm sm:text-lg leading-normal flex flex-col gap-5 bg-[#141414]">
                        <div class="flex items-center gap-6 justify-between">
                            <div class="flex-1 overflow-hidden flex items-center gap-2">
                                <span class="w-1 h-1 bg-white rounded-full flex-shrink-0"></span>
                                <a href="{{ asset('assets/ROX%20ADAMAS%20User%20Manual.pdf') }}" target="_blank" rel="noopener" class="line-clamp-1 hover:underline">{{ __('servicos_manual_instrucoes.models.adamas.doc_name') }}</a>
                            </div>
                            <a href="{{ asset('assets/ROX%20ADAMAS%20User%20Manual.pdf') }}" download aria-label="{{ __('servicos_manual_instrucoes.models.adamas.doc_name') }}" class="flex-shrink-0">
                                <svg class="w-6 h-6 cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="4 12 4 20 20 20 20 12" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round"/>
                                    <polyline points="16 11.5 12 15.5 8 11.5" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="12" y1="4" x2="12" y2="15.5" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- ROX 01 -->
                <div class="animate-up">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ cms_image('servicos.manual_instrucoes.rox01_img', asset('assets/banner2.jpg')) }}" alt="{{ __('servicos_manual_instrucoes.models.rox01.name') }}" class="w-full h-full object-cover">
                        <div class="absolute bottom-0 left-0 right-0 h-80" style="background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,0.7) 100%);"></div>
                        <div class="absolute inset-0 flex flex-col justify-end text-white p-5 sm:p-10 z-10">
                            <div class="text-lg sm:text-2xl font-semibold">{{ __('servicos_manual_instrucoes.models.rox01.name') }}</div>
                            <div class="mt-1 sm:mt-2 text-sm sm:text-lg leading-normal">{{ __('servicos_manual_instrucoes.models.rox01.subtitle') }}</div>
                        </div>
                    </div>
                    <div class="w-full p-5 sm:p-10 text-white text-sm sm:text-lg leading-normal flex flex-col gap-5 bg-[#141414]">
                        <div class="flex items-center gap-6 justify-between">
                            <div class="flex-1 overflow-hidden flex items-center gap-2">
                                <span class="w-1 h-1 bg-white rounded-full flex-shrink-0"></span>
                                <a href="{{ asset('assets/ROX%2001%20User%20Manual.pdf') }}" target="_blank" rel="noopener" class="line-clamp-1 hover:underline">{{ __('servicos_manual_instrucoes.models.rox01.doc_name') }}</a>
                            </div>
                            <a href="{{ asset('assets/ROX%2001%20User%20Manual.pdf') }}" download aria-label="{{ __('servicos_manual_instrucoes.models.rox01.doc_name') }}" class="flex-shrink-0">
                                <svg class="w-6 h-6 cursor-pointer" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="4 12 4 20 20 20 20 12" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round"/>
                                    <polyline points="16 11.5 12 15.5 8 11.5" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round"/>
                                    <line x1="12" y1="4" x2="12" y2="15.5" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
