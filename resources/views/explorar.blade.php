<x-front-layout>
    <x-slot name="title">Explorar Modelos</x-slot>

    <!-- Header Section -->
    <section class="pt-32 pb-20 px-6 bg-white text-black relative border-b border-gray-100">
        <div class="max-w-[1400px] mx-auto text-center animate-up">
            <h1 class="text-4xl md:text-5xl font-medium mb-4">Galeria e Modelos</h1>
            <p class="text-lg font-light text-gray-500 max-w-2xl mx-auto">Conheça a linha ROX Angola e descubra o modelo que melhor se adapta à sua aventura.</p>
        </div>
    </section>

    <!-- Models Grid -->
    <section class="py-20 px-6 bg-gray-50 text-gray-800">
        <div class="max-w-[1400px] mx-auto grid md:grid-cols-2 gap-8">
            <div class="bg-white overflow-hidden shadow-sm hover:shadow-md transition-shadow group cursor-pointer animate-up">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('assets/rox01.png') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="ROX 01">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-medium mb-2">ROX 01 Standard</h3>
                    <p class="text-gray-500 mb-6 font-light">Versatilidade híbrida para todos os dias.</p>
                    <a href="{{ route('rox01') }}" class="text-black font-medium border-b border-black pb-1 hover:opacity-70 transition-opacity uppercase tracking-wider text-sm">Ver Detalhes</a>
                </div>
            </div>

            <div class="bg-white overflow-hidden shadow-sm hover:shadow-md transition-shadow group cursor-pointer animate-up">
                <div class="h-64 overflow-hidden relative">
                    <img src="{{ asset('assets/services.jpg') }}" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="ROX Adamas">
                </div>
                <div class="p-8">
                    <h3 class="text-2xl font-medium mb-2">ROX Adamas Edition</h3>
                    <p class="text-gray-500 mb-6 font-light">Exclusividade e performance premium.</p>
                    <a href="{{ route('rox-adamas') }}" class="text-black font-medium border-b border-black pb-1 hover:opacity-70 transition-opacity uppercase tracking-wider text-sm">Ver Detalhes</a>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
