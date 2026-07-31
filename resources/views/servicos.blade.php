<x-front-layout>
    <x-slot name="title">Serviços Disponíveis</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden flex items-center justify-center">
        <img src="{{ asset('assets/servicos.avif') }}" alt="Serviços Disponíveis" class="absolute inset-0 w-full h-full object-cover object-bottom">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium mb-4 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">Serviços Disponíveis</h1>
            <p class="text-base md:text-lg font-light text-gray-200 max-w-2xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">Serviço premium para guiar as suas aventuras</p>
        </div>
    </section>

    <!-- Serviços Disponíveis -->
    <section class="relative bg-black py-16 md:py-24">
        <div class="content-container">
            <div class="mb-10 md:mb-14 animate-up">
                <p class="text-xs md:text-sm font-semibold tracking-[3px] uppercase text-white/60 mb-4">Serviço & Apoio Técnico</p>
                <h2 class="text-3xl md:text-4xl font-light text-white max-w-2xl leading-snug">Serviços Disponíveis</h2>
            </div>

            @php
                $servicos = [
                    [
                        'img'   => 'services.jpg',
                        'title' => 'Serviço por Agendamento',
                        'desc'  => 'Agende o seu serviço de forma rápida e conveniente. A nossa equipa técnica está preparada para prestar assistência especializada, garantindo um atendimento eficiente e de acordo com os padrões de qualidade da ROX Motor.',
                        'link'  => route('servicos.agendamento'),
                    ],
                    [
                        'img'   => 'services-ver.jpg',
                        'title' => 'Apoio Técnico & Manutenção',
                        'desc'  => 'Por intermédio da OCTA Angola, disponibilizamos apoio técnico especializado, manutenção e assistência realizada por técnicos certificados, utilizando equipamentos de diagnóstico oficiais e seguindo os procedimentos definidos.',
                        'link'  => route('servicos.apoio-tecnico'),
                    ],
                    [
                        'img'   => '1.jpg',
                        'title' => 'Peças & Acessórios',
                        'desc'  => 'Mantenha a sua viatura com os elevados padrões de qualidade da ROX Motor. Disponibilizamos peças originais e acessórios desenvolvidos para garantir desempenho, segurança e total compatibilidade com o seu veículo, assegurando uma experiência de condução sempre fiável.',
                        'link'  => route('servicos.pecas-acessorios'),
                    ],
                    [
                        'img'   => 'keji.jpg',
                        'title' => 'Manual de Instruções',
                        'desc'  => 'Consulte os manuais oficiais da ROX Motor para conhecer todas as funcionalidades, sistemas e recomendações de utilização da sua viatura. Tenha acesso rápido às informações necessárias para tirar o máximo partido da tecnologia e dos equipamentos disponíveis.',
                        'link'  => route('servicos.manual-instrucoes'),
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                @foreach($servicos as $servico)
                @if($servico['link'])
                <a href="{{ $servico['link'] }}" class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up block">
                    <img src="{{ asset('assets/' . $servico['img']) }}" alt="{{ $servico['title'] }}" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between gap-4">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-2">{{ $servico['title'] }}</h3>
                            <p class="text-sm font-light text-gray-300 leading-relaxed">{{ $servico['desc'] }}</p>
                        </div>
                        <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                    </div>
                </a>
                @else
                <div class="relative h-[300px] md:h-[500px] overflow-hidden group animate-up">
                    <img src="{{ asset('assets/' . $servico['img']) }}" alt="{{ $servico['title'] }}" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/20 to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6 right-5 md:right-6 flex items-end justify-between gap-4">
                        <div class="text-white">
                            <h3 class="text-lg md:text-xl font-medium mb-2">{{ $servico['title'] }}</h3>
                            <p class="text-sm font-light text-gray-300 leading-relaxed">{{ $servico['desc'] }}</p>
                        </div>
                        <span class="flex-shrink-0 w-8 h-8 md:w-9 md:h-9 border border-white/50 flex items-center justify-center text-white text-sm group-hover:bg-white group-hover:text-black transition-all duration-300">+</span>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </section>

</x-front-layout>
