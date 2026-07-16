<x-front-layout>
    <x-slot name="title">Manual de Desmontagem</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden flex items-center justify-center">
        <img src="{{ asset('assets/seat-direita.avif') }}" alt="Manual de Desmontagem" class="absolute inset-0 w-full h-full object-cover object-bottom">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium mb-4 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">Manual de Desmontagem</h1>
            <p class="text-base md:text-lg font-light text-gray-200 max-w-2xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">Documentação Técnica</p>
        </div>
    </section>

    <!-- Manuais -->
    <section class="relative bg-black py-16 md:py-24">
        <div class="content-container">
            <div class="mb-12 md:mb-16 animate-up">
                <p class="text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white/60 mb-4">Documentação Técnica</p>
                <h2 class="text-3xl md:text-4xl font-light text-white max-w-3xl leading-snug">Aceda à documentação técnica oficial disponibilizada pela ROX Motor para apoio às operações de manutenção e reparação realizadas por profissionais qualificados.</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-3 sm:gap-6">
                <!-- ROX ADAMAS -->
                <div class="animate-up">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ asset('assets/banner-adamas.avif') }}" alt="ROX ADAMAS" class="w-full h-full object-cover">
                        <div class="absolute inset-0 flex flex-col justify-end z-10 text-white p-5 sm:p-10">
                            <div class="text-lg sm:text-2xl font-semibold">ROX ADAMAS</div>
                            <div class="mt-1 sm:mt-2 text-sm sm:text-lg leading-normal">Novo SUV de luxo todo-o-terreno</div>
                            <div class="mt-5 sm:mt-10 flex gap-3 sm:gap-6">
                                <a href="#" class="border border-white text-white text-sm font-normal px-4 py-2.5 text-center min-w-[118px] sm:min-w-[130px] tracking-[2px] transition-all duration-300 hover:bg-white hover:text-black">Download Manual</a>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- ROX 01 -->
                <div class="animate-up">
                    <div class="relative aspect-square overflow-hidden">
                        <img src="{{ asset('assets/banner2.jpg') }}" alt="ROX 01" class="w-full h-full object-cover">
                        <div class="absolute inset-0 flex flex-col justify-end z-10 text-white p-5 sm:p-10">
                            <div class="text-lg sm:text-2xl font-semibold">ROX 01</div>
                            <div class="mt-1 sm:mt-2 text-sm sm:text-lg leading-normal">SUV de luxo todo-o-terreno para cenário completo</div>
                            <div class="mt-5 sm:mt-10 flex gap-3 sm:gap-6">
                                <a href="#" class="border border-white text-white text-sm font-normal px-4 py-2.5 text-center min-w-[118px] sm:min-w-[130px] tracking-[2px] transition-all duration-300 hover:bg-white hover:text-black">Download Manual</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
