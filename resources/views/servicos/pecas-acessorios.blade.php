<x-front-layout>
    <x-slot name="title">Peças & Acessórios</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden flex items-center justify-center">
        <img src="{{ asset('assets/1.jpg') }}" alt="Peças & Acessórios" class="absolute inset-0 w-full h-full object-cover object-bottom">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium mb-4 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">Peças & Acessórios</h1>
            <p class="text-base md:text-lg font-light text-gray-200 max-w-2xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">Serviço premium para guiar as suas aventuras</p>
        </div>
    </section>

    <!-- Cards -->
    <section class="relative bg-black py-16 md:py-24">
        <div class="content-container">
            <div class="mb-10 md:mb-14 animate-up">
                <p class="text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white/60 mb-4">Peças & Acessórios</p>
                <h2 class="text-3xl md:text-4xl font-light text-white max-w-3xl leading-snug">Mantenha a sua viatura com os elevados padrões de qualidade da ROX Motor</h2>
            </div>

            @php
                $cards = [
                    [
                        'img'   => 'pecas.avif',
                        'title' => 'Peças Originais',
                        'desc'  => 'As peças originais ROX são desenvolvidas para garantir total compatibilidade, desempenho e segurança. A sua utilização contribui para preservar a qualidade, a fiabilidade e a durabilidade da viatura.',
                    ],
                    [
                        'img'   => 'acessorios_oficiais.avif',
                        'title' => 'Acessórios Oficiais',
                        'desc'  => 'Personalize a sua experiência de condução com acessórios oficiais concebidos especificamente para os modelos ROX. Soluções desenvolvidas para aumentar o conforto, a funcionalidade e a versatilidade da sua viatura.',
                    ],
                    [
                        'img'   => 'encomenda.avif',
                        'title' => 'Encomenda de Peças Específicas',
                        'desc'  => 'Caso necessite de uma peça específica, a nossa equipa está disponível para prestar apoio na identificação e encomenda dos componentes adequados ao seu veículo.',
                    ],
                    [
                        'img'   => 'stock.avif',
                        'title' => 'Stock de peças disponíveis',
                        'desc'  => 'Mantemos stock local de diversas peças e componentes, permitindo uma resposta mais rápida às necessidades de manutenção e reduzindo o tempo de imobilização da sua viatura.',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                @foreach($cards as $card)
                <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                    <img src="{{ asset('assets/' . $card['img']) }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between gap-4">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-2">{{ $card['title'] }}</h3>
                            <p class="text-sm font-light text-gray-300 leading-relaxed">{{ $card['desc'] }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-front-layout>
