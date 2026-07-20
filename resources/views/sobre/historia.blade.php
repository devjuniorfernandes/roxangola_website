<x-front-layout>
    <x-slot name="title">A História</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-screen w-full overflow-hidden flex items-start justify-center">
        <img src="{{ asset('assets/lichengbei.jpg') }}" alt="A História ROX" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative z-10 text-center text-white px-6 pt-[120px]">
            <p class="text-lg sm:text-xl font-semibold tracking-[2px] mb-3 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">Marcos da ROX</p>
            <h1 class="text-2xl sm:text-4xl font-light leading-snug max-w-3xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">No caminho da exploração, cada passo deixa a sua marca</h1>
        </div>
    </section>

    <!-- History Intro -->
    <section class="bg-white py-20 md:py-[120px]">
        <div class="content-container">
            <p class="text-lg font-semibold tracking-[2px] text-[#191919] mb-3 animate-up">História</p>
            <div class="text-2xl sm:text-4xl font-light text-[#191919] space-y-10 sm:space-y-20 mt-3 animate-up">
                <div>
                    <p>34 meses:</p>
                    <p>Da fundação da empresa à primeira entrega ao cliente</p>
                </div>
                <div>
                    <p>8 meses:</p>
                    <p>Da China para o mundo, a uma velocidade líder na indústria</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Milestones -->
    <section class="bg-white pb-20 md:pb-[120px]">
        <div class="content-container space-y-6">
            @php
                $milestones = [
                    ['date' => '2021.1', 'title' => 'ROX Motor fundada', 'img' => 'banner.jpg'],
                    ['date' => '2023.8', 'title' => 'Veículos ROX 01 de produção em série saem da linha de montagem', 'img' => 'banner2.jpg'],
                    ['date' => '2023.8', 'title' => 'ROX 01 lançado oficialmente', 'img' => 'banner1.jpg'],
                    ['date' => '2023.9', 'title' => 'Primeira loja nacional inaugurada', 'img' => 'life.jpg'],
                    ['date' => '2023.12', 'title' => 'Início das entregas do ROX 01', 'img' => 'outdoor.avif'],
                    ['date' => '2024.4', 'title' => 'ROX 01 estreia num salão automóvel internacional', 'img' => 'keji.jpg'],
                    ['date' => '2024.4', 'title' => 'ROX 01 estreia no Salão Automóvel de Pequim', 'img' => 'lichengbei.jpg'],
                    ['date' => '2024.4', 'title' => 'Parceria assinada com os EAU, marcando o início da expansão global', 'img' => 'shequ.jpg'],
                    ['date' => '2024.5', 'title' => 'ROX 01 estabelece recorde de segurança máxima no Instituto CIRI', 'img' => '1.jpg'],
                    ['date' => '2024.8', 'title' => 'Parcerias assinadas com Qatar, Kuwait, Azerbaijão, Filipinas e Egipto', 'img' => 'services.jpg'],
                    ['date' => '2024.10', 'title' => 'Parcerias assinadas com Cazaquistão, Iraque, Omã e Líbia', 'img' => 'services-ver.jpg'],
                    ['date' => '2024.10', 'title' => 'Mais de 10.000 veículos entregues e encomendados no exterior', 'img' => 'dealer.jpg'],
                    ['date' => '2024.10', 'title' => 'Lojas inauguradas nos EAU e nas Filipinas', 'img' => 'showroom.jpg'],
                    ['date' => '2024.12', 'title' => 'Lojas inauguradas no Cazaquistão e no Qatar', 'img' => 'life.jpg'],
                    ['date' => '2025.2', 'title' => 'Primeira marca chinesa de veículos eléctricos a participar na exposição LEAP na Arábia Saudita', 'img' => 'keji.jpg'],
                    ['date' => '2025.4', 'title' => '10.000.º ROX 01 entregue a um cliente nos EAU', 'img' => 'banner.jpg'],
                    ['date' => '2025.4', 'title' => 'Primeira "Conferência Global de Revendedores ROX" realizada', 'img' => 'lichengbei.jpg'],
                    ['date' => '2025.4', 'title' => 'Laboratório Conjunto de Veículos Leves Weiqiao-ROX Motor estabelecido', 'img' => 'outdoor.avif'],
                    ['date' => '2025.7', 'title' => 'Sede da ROX transferida para o Shanghai Innov Spring Plaza', 'img' => 'banner1.jpg'],
                    ['date' => '2025.7', 'title' => 'Inauguração do Showroom Flagship ROX em Jeddah, Arábia Saudita', 'img' => 'services.jpg'],
                    ['date' => '2025.9', 'title' => 'Estabelecimento do Laboratório Conjunto de Materiais Inovadores BOROUGE-ROX Motor', 'img' => '1.jpg'],
                    ['date' => '2025.10', 'title' => 'Conclusão do "Tour da Rota da Seda de 25.000 km"', 'img' => 'shequ.jpg'],
                    ['date' => '2025.10', 'title' => 'Estreia global do ROX ADAMAS em Abu Dhabi', 'img' => 'banner-adamas.avif'],
                    ['date' => '2025.12', 'title' => 'Lançamento nacional do ROX ADAMAS', 'img' => 'adamas.jpg'],
                    ['date' => '2026.2', 'title' => 'Parceria com Angola', 'img' => 'dealer.jpg'],
                ];
            @endphp

            @foreach(array_reverse($milestones) as $milestone)
            <div class="animate-up">
                <div class="relative aspect-video overflow-hidden">
                    <img src="{{ asset('assets/' . $milestone['img']) }}" alt="{{ $milestone['title'] }}" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="p-5 sm:p-10 bg-[#F8F9F9] text-[#191919] text-lg sm:text-2xl">
                    <div>{{ $milestone['date'] }}</div>
                    <div class="mt-1 sm:mt-2">{{ $milestone['title'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-front-layout>
