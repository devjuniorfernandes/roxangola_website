<x-front-layout>
    <x-slot name="title">Comunidade ROX Motor Angola</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-screen w-full overflow-hidden flex items-start justify-center">
        <img src="{{ asset('assets/shequ.jpg') }}" alt="Comunidade ROX" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative z-10 text-center text-white px-6 pt-[120px]">
            <p class="text-lg sm:text-xl font-semibold tracking-[2px] mb-3 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">Comunidade ROX Motor Angola</p>
            <h1 class="text-2xl sm:text-4xl font-light leading-snug max-w-3xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">Conheça as últimas manchetes da marca, acompanhe lançamentos, eventos, histórias e conteúdos exclusivos sobre os modelos ROX</h1>
        </div>
    </section>

    <!-- Rox Owners Club -->
    <section class="bg-white py-20 md:py-[120px]">
        <div class="content-container">
            <p class="text-lg font-semibold tracking-[2px] text-[#191919] mb-3 animate-up">Clube de Proprietários ROX</p>
            <h2 class="text-2xl sm:text-4xl font-light text-[#191919] mt-3 animate-up">Fazer amigos através dos carros e partir com a ROX</h2>

            @php
                $comunidade = [
                    [
                        'title' => 'Convite de Recrutamento de Membros Elite',
                        'subtitle' => 'À procura de entusiastas com a mesma visão para embarcar na próxima viagem juntos',
                        'text' => 'O Clube Global de Proprietários ROX dedica-se a servir proprietários e entusiastas ROX em todo o mundo. Se adora partilhar a sua história ROX ou tem talento para unir pessoas, é o membro elite que procuramos! Junte-se a nós e partilhe a sua experiência única com o mundo.',
                        'img' => 'outdoor.avif',
                        'reversed' => false,
                    ],
                    [
                        'title' => 'Expedição de Inverno em Dunhuang',
                        'subtitle' => 'Expedição de Inverno da Família ROX em Dunhuang',
                        'text' => 'Os proprietários ROX rumaram a Dunhuang, enfrentando o deserto gelado. Derrapagens no deserto, cruzeiros em estrada aberta e travessias em tempestade de neve. Cada imagem captada está gravada com o espírito da aventura todo-o-terreno e paixão ardente.',
                        'img' => 'life.jpg',
                        'reversed' => true,
                    ],
                    [
                        'title' => 'Expedição ao Deserto de Alxa',
                        'subtitle' => 'Através do mar de areia, em busca dos lagos',
                        'text' => 'O Clube de Proprietários ROX partiu de Alxa Left Banner, rumo ao deserto com tanque cheio, carga completa e mais de 1.000 km de autonomia combinada. Pelo caminho, os proprietários chegaram ao Lago Guitarra, Lago Camelo e Lago Ulan, atravessando dunas e subindo encostas de 45°. Com força todo-o-terreno, conforto estável e a companhia dos colegas proprietários, a ROX transformou a travessia do deserto numa viagem de paixão e liberdade.',
                        'img' => 'banner.jpg',
                        'reversed' => false,
                    ],
                    [
                        'title' => 'Encontro Anual em Hainan',
                        'subtitle' => 'Proprietários reúnem-se, viagens começam',
                        'text' => 'Numa baía em Wanning, Hainan — lar de uma das mais notáveis praias de areia branca da China, frequentemente descrita como a "praia cantante" — os proprietários ROX reuniram-se para o evento anual. O cenário costeiro calmo tornou-se o ponto de encontro para proprietários unidos por um amor partilhado pela viagem, pela estrada e pelos lugares além.',
                        'img' => 'keji.jpg',
                        'reversed' => true,
                    ],
                    [
                        'title' => 'Explorar Motuo',
                        'subtitle' => 'Conduza até um dos lugares mais remotos do planeta',
                        'text' => 'Motuo — o último condado da China a ser ligado à rede rodoviária pública — aguarda exploradores aventureiros. Em apenas 50 km em linha recta, testemunhe paisagens que vão desde vistas polares geladas até florestas tropicais. Esta expedição organizada pela ROX criou memórias inesquecíveis para cada participante.',
                        'img' => 'lichengbei.jpg',
                        'reversed' => false,
                    ],
                    [
                        'title' => 'Viagem pelo Norte',
                        'subtitle' => 'Rumo ao norte para uma aventura de verão',
                        'text' => 'Xilin Gol, Ulagai, Arxan — traga a sua família e mergulhe nas intermináveis pradarias de verão. Encontre horizontes magníficos e experimente um autêntico estilo de vida nómada.',
                        'img' => 'services.jpg',
                        'reversed' => true,
                    ],
                    [
                        'title' => 'Aniversário da Travessia de Kashgar',
                        'subtitle' => 'A viagem do ano passado reforçou a nossa intenção original. Vamos iniciar uma nova viagem de milhares de quilómetros com a ROX',
                        'text' => '',
                        'img' => '1.jpg',
                        'reversed' => false,
                    ],
                ];
            @endphp

            <div class="mt-20 space-y-6">
                @foreach($comunidade as $item)
                <div class="animate-up">
                    <div class="flex flex-col lg:flex-row {{ $item['reversed'] ? 'lg:flex-row-reverse' : '' }} w-full lg:items-stretch">
                        <div class="lg:w-[57%] flex-shrink-0">
                            <div class="relative aspect-video lg:aspect-auto lg:h-full overflow-hidden">
                                <img src="{{ asset('assets/' . $item['img']) }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover" loading="lazy">
                            </div>
                        </div>
                        <div class="lg:w-6 flex-shrink-0"></div>
                        <div class="flex-1 bg-[#F8F9F9] flex flex-col justify-center px-6 py-8 lg:px-10 lg:py-10 text-[#191919] leading-normal">
                            <h3 class="text-xl xl:text-2xl font-normal">{{ $item['title'] }}</h3>
                            <p class="text-base xl:text-lg mt-2 text-gray-600">{{ $item['subtitle'] }}</p>
                            @if($item['text'])
                            <div class="mt-10 text-sm xl:text-base text-gray-700 leading-relaxed">
                                <p>{{ $item['text'] }}</p>
                            </div>
                            @endif
                            <div class="mt-10">
                                <button class="border border-black text-black text-sm font-normal px-8 py-2.5 tracking-[2px] transition-all duration-300 hover:bg-black hover:text-white cursor-pointer">SABER MAIS</button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- The ROX Guide -->
    <section class="bg-white pb-20 md:pb-[120px]">
        <div class="content-container">
            <p class="text-lg font-semibold tracking-[2px] text-[#191919] mb-3 animate-up">Guia ROX</p>
            <h2 class="text-2xl sm:text-4xl font-light text-[#191919] mt-3 animate-up">Desbloqueie a diversão ao volante com o Clube Global de Proprietários ROX</h2>

            <div class="mt-20 animate-up">
                <div class="flex flex-col lg:flex-row w-full lg:items-stretch">
                    <div class="lg:w-[57%] flex-shrink-0">
                        <div class="relative lg:h-full overflow-hidden">
                            <img src="{{ asset('assets/keji.jpg') }}" alt="Guia ROX" class="w-full h-full object-cover" loading="lazy">
                            <div class="absolute inset-0 flex items-center justify-center">
                                <h3 class="text-white text-2xl sm:text-3xl lg:text-4xl font-medium tracking-wide">Guia ROX</h3>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-6 flex-shrink-0"></div>
                    <div class="flex-1 bg-[#F8F9F9] flex flex-col justify-center px-6 py-8 lg:px-10 lg:py-10 text-[#191919] leading-normal">
                        <h3 class="text-xl xl:text-2xl font-normal">Guia ROX</h3>
                        <p class="text-base xl:text-lg mt-2 text-gray-600">Desbloqueie dicas práticas sobre o veículo, domine o seu ROX com facilidade</p>
                        <div class="mt-10">
                            <button class="border border-black text-black text-sm font-normal px-8 py-2.5 tracking-[2px] transition-all duration-300 hover:bg-black hover:text-white cursor-pointer">SABER MAIS</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Owner's Perspective -->
    <section class="bg-white py-20 md:py-[120px] overflow-hidden">
        <div class="content-container">
            <p class="text-lg font-semibold tracking-[2px] text-[#191919] mb-3 animate-up">Perspectiva do Proprietário</p>
            <h2 class="text-2xl sm:text-4xl font-light text-[#191919] mt-3 animate-up">A Distância Através das Lentes do Proprietário</h2>
            <p class="text-sm text-gray-400 mt-10 animate-up">*Agradecimento especial ao Sr. Sun, proprietário de um ROX 01, por protagonizar e documentar estes momentos notáveis</p>
        </div>

        @php
            $slides = [
                ['img' => 'outdoor.avif', 'video' => '', 'title' => 'Onde a natureza encontra a aventura', 'location' => 'China, Pradarias de Hulunbuir, Mongólia Interior'],
                ['img' => 'lichengbei.jpg', 'video' => '', 'title' => 'Pegadas na areia do tempo', 'location' => 'China, Deserto de Badain Jaran, Mongólia Interior'],
                ['img' => 'life.jpg', 'video' => '', 'title' => 'Atravessando o inverno gelado', 'location' => 'China, Dunhuang, Gansu'],
                ['img' => 'banner.jpg', 'video' => '', 'title' => 'Trilhos além do horizonte', 'location' => 'China, Deserto de Alxa, Mongólia Interior'],
                ['img' => 'shequ.jpg', 'video' => '', 'title' => 'Percorrendo os confins da Terra', 'location' => 'China, Grande Canyon de Anjihai, Xinjiang'],
            ];
            $startIndex = 2;
        @endphp

        <div class="relative mt-10 animate-up" id="owner-carousel">
            <div class="flex transition-transform duration-500 ease-in-out" id="owner-track">
                @foreach($slides as $i => $slide)
                <div class="owner-slide flex-shrink-0 px-2" style="width: 62%;">
                    <div class="relative overflow-hidden aspect-[16/10]">
                        @if($slide['video'])
                        <video class="w-full h-full object-cover" poster="{{ asset('assets/' . $slide['img']) }}" muted loop playsinline preload="metadata">
                            <source src="{{ asset('assets/' . $slide['video']) }}" type="video/mp4">
                            <img src="{{ asset('assets/' . $slide['img']) }}" alt="{{ $slide['title'] }}" class="w-full h-full object-cover">
                        </video>
                        @else
                        <img src="{{ asset('assets/' . $slide['img']) }}" alt="{{ $slide['title'] }}" class="w-full h-full object-cover">
                        @endif
                        <div class="absolute inset-0 bg-black/10"></div>
                        <p class="absolute top-6 left-0 right-0 text-center text-white text-lg sm:text-xl lg:text-2xl font-light tracking-wide">{{ $slide['title'] }}</p>
                        <p class="absolute bottom-5 left-0 right-0 text-center text-white/70 text-xs sm:text-sm flex items-center justify-center gap-2">
                            <svg class="w-3.5 h-3.5" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5a2.5 2.5 0 1 1 0-5 2.5 2.5 0 0 1 0 5z"/></svg>
                            {{ $slide['location'] }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>

            <!-- Arrows -->
            <button onclick="ownerSlide(-1)" class="absolute left-[22%] sm:left-[24%] top-1/2 -translate-y-1/2 z-10 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-black/30 hover:bg-black/50 flex items-center justify-center text-white transition-colors cursor-pointer">
                <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M15 4l-8 8 8 8"/></svg>
            </button>
            <button onclick="ownerSlide(1)" class="absolute right-[22%] sm:right-[24%] top-1/2 -translate-y-1/2 z-10 w-12 h-12 sm:w-14 sm:h-14 rounded-full bg-black/30 hover:bg-black/50 flex items-center justify-center text-white transition-colors cursor-pointer">
                <svg class="w-6 h-6 sm:w-7 sm:h-7" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path d="M9 4l8 8-8 8"/></svg>
            </button>
        </div>

        <!-- Dots -->
        <div class="flex items-center justify-center gap-3 mt-8">
            @foreach($slides as $i => $slide)
            <button onclick="ownerGoTo({{ $i }})" class="owner-dot w-8 h-[3px] transition-colors duration-300 cursor-pointer {{ $i === $startIndex ? 'bg-black' : 'bg-gray-300' }}"></button>
            @endforeach
        </div>

        <script>
        (function() {
            var current = {{ $startIndex }};
            var track = document.getElementById('owner-track');
            var slides = document.querySelectorAll('.owner-slide');
            var dots = document.querySelectorAll('.owner-dot');
            var total = slides.length;

            function updatePosition(animate) {
                if (animate === false) track.style.transition = 'none';
                else track.style.transition = 'transform 0.5s ease-in-out';

                var slideWidth = slides[0].offsetWidth;
                var containerWidth = track.parentElement.offsetWidth;
                var offset = (containerWidth - slideWidth) / 2;
                track.style.transform = 'translateX(' + (offset - current * slideWidth) + 'px)';
                dots.forEach(function(d, i) {
                    d.className = 'owner-dot w-8 h-[3px] transition-colors duration-300 cursor-pointer ' + (i === current ? 'bg-black' : 'bg-gray-300');
                });

                slides.forEach(function(s, i) {
                    var video = s.querySelector('video');
                    if (video) {
                        if (i === current) video.play();
                        else { video.pause(); video.currentTime = 0; }
                    }
                });
            }

            window.ownerSlide = function(dir) {
                current = (current + dir + total) % total;
                updatePosition(true);
            };

            window.ownerGoTo = function(i) {
                current = i;
                updatePosition(true);
            };

            updatePosition(false);
            if (track.offsetHeight) track.offsetHeight;
            window.addEventListener('resize', function() { updatePosition(false); });
        })();
        </script>
    </section>

    <!-- Álbum de Fotos -->
    <section class="bg-white py-20 md:py-[120px]">
        <div class="content-container">
            <p class="text-lg font-semibold tracking-[2px] text-[#191919] mb-3 animate-up">Álbum de Fotos dos Amigos ROX</p>
            <h2 class="text-2xl sm:text-4xl font-light text-[#191919] mt-3 animate-up">Registando cada partida e cada reencontro</h2>

            @php
                $album = [
                    [
                        'img' => 'outdoor.avif',
                        'text' => 'A ROX leva-me por montanhas e rios e nunca me desilude. Fácil de conduzir, e vamos ver ainda mais paisagens juntos.',
                        'author' => '@Dongnan-',
                    ],
                    [
                        'img' => 'life.jpg',
                        'text' => 'Ao cair do crepúsculo, o ROX ADAMAS leva-me dia e noite, transformando cada viagem numa paisagem para a alma.',
                        'author' => '@AngolaExplorer',
                    ],
                    [
                        'img' => 'lichengbei.jpg',
                        'text' => 'As pedras rasas do vale do Qinling não conseguem parar as rodas de avançar. O momento em que a água salpica é exactamente o tipo de emoção que os amantes do todo-o-terreno procuram.',
                        'author' => '@OffRoadAO',
                    ],
                    [
                        'img' => 'keji.jpg',
                        'text' => 'Depois de mais de 30.000 quilómetros juntos, a ROX levou-me por montanhas, rios e todas as estações com o seu chassis sólido e consumo estável — sempre com tranquilidade.',
                        'author' => '@LuandaDrive',
                    ],
                    [
                        'img' => 'banner.jpg',
                        'text' => 'Com o terreno aberto como palco e a poeira como nota de abertura, a ROX avança com verdadeira capacidade, transformando cada viagem na forma daquilo que amamos.',
                        'author' => '@ROXAngola01',
                    ],
                    [
                        'img' => 'shequ.jpg',
                        'text' => 'Viver na natureza com a ROX ao meu lado. Fazer do carro a minha casa, abrir a porta para a primavera, preparar chá junto à fogueira e desfrutar da tranquilidade da estação.',
                        'author' => '@NaturezaLivre',
                    ],
                ];
            @endphp

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 mt-16">
                @foreach($album as $item)
                <div class="flex gap-0 animate-up">
                    <div class="w-[45%] flex-shrink-0">
                        <img src="{{ asset('assets/' . $item['img']) }}" alt="{{ $item['author'] }}" class="w-full h-full object-cover" loading="lazy">
                    </div>
                    <div class="flex-1 bg-[#F8F9F9] flex flex-col justify-center px-6 py-6 lg:px-8">
                        <p class="text-sm lg:text-[15px] text-[#191919] leading-relaxed tracking-wide">{{ $item['text'] }}</p>
                        <p class="text-sm text-gray-500 mt-4">{{ $item['author'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-front-layout>
