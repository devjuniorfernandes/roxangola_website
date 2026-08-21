<x-front-layout>
    <x-slot name="title">{{ __('servicos_pecas_acessorios.title') }}</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden flex items-center justify-center">
        <img src="{{ cms_image('servicos.pecas_acessorios.hero_bg', asset('assets/1.jpg')) }}" alt="{{ __('servicos_pecas_acessorios.hero.title') }}" class="absolute inset-0 w-full h-full object-cover object-bottom">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium mb-4 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">{{ __('servicos_pecas_acessorios.hero.title') }}</h1>
            <p class="text-base md:text-lg font-light text-gray-200 max-w-2xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">{{ __('servicos_pecas_acessorios.hero.subtitle') }}</p>
        </div>
    </section>

    <!-- Cards -->
    <section class="relative bg-black py-16 md:py-24">
        <div class="content-container">
            <div class="mb-10 md:mb-14 animate-up">
                <p class="text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white/60 mb-4">{{ __('servicos_pecas_acessorios.intro.eyebrow') }}</p>
                <h2 class="text-3xl md:text-4xl font-light text-white max-w-3xl leading-snug">{{ __('servicos_pecas_acessorios.intro.title') }}</h2>
            </div>

            @php
                $cards = [
                    [
                        'img_key' => 'servicos.pecas_acessorios.card1',
                        'default' => 'assets/pecas.avif',
                        'title'   => __('servicos_pecas_acessorios.cards.0.title'),
                        'desc'    => __('servicos_pecas_acessorios.cards.0.desc'),
                    ],
                    [
                        'img_key' => 'servicos.pecas_acessorios.card2',
                        'default' => 'assets/acessorios_oficiais.avif',
                        'title'   => __('servicos_pecas_acessorios.cards.1.title'),
                        'desc'    => __('servicos_pecas_acessorios.cards.1.desc'),
                    ],
                    [
                        'img_key' => 'servicos.pecas_acessorios.card3',
                        'default' => 'assets/encomenda.avif',
                        'title'   => __('servicos_pecas_acessorios.cards.2.title'),
                        'desc'    => __('servicos_pecas_acessorios.cards.2.desc'),
                    ],
                    [
                        'img_key' => 'servicos.pecas_acessorios.card4',
                        'default' => 'assets/stock.avif',
                        'title'   => __('servicos_pecas_acessorios.cards.3.title'),
                        'desc'    => __('servicos_pecas_acessorios.cards.3.desc'),
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                @foreach($cards as $card)
                <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                    <img src="{{ cms_image($card['img_key'], asset($card['default'])) }}" alt="{{ $card['title'] }}" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
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
