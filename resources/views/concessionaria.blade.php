<x-front-layout>
    <x-slot name="title">Concessionária</x-slot>

    <!-- Hero -->
    <section class="relative h-[100svh] w-full overflow-hidden flex items-center justify-left">
        <img src="{{ asset('assets/dealer.jpg') }}" alt="OCTA Mobil" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-black/20"></div>
        <div class="relative z-10 text-left text-white px-6">
            <p class="text-base md:text-lg font-light text-white/70 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">Octa Mobil</p>
            <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-medium mb-4 md:mb-5 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">O distribuidor oficial da ROX Motor em Angola</h1>
            
        </div>
    </section>

    <!-- Octa Mobil Section (mesmo layout da homepage) -->
    <section class="bg-black text-white py-20 md:py-32 overflow-hidden">
        <div class="content-container animate-up">
            <h3 class="text-sm md:text-base font-semibold tracking-wide mb-6">OCTA Mobil</h3>
            <h4 class="text-sm md:text-base font-semibold tracking-wide mb-4">Distribuidor Oficial Exclusivo da ROX Motor em Angola</h4>
            <p class="text-xl md:text-[1.5rem] font-light leading-relaxed md:leading-[1.4] max-w-5xl">A Octa Mobil é a representante oficial da ROX Motor em Angola, dedicada a proporcionar uma experiência automóvel premium, desde a aquisição da viatura até ao acompanhamento pós-venda.</p>
            <p class="text-xl md:text-[1.5rem] font-light leading-relaxed md:leading-[1.4] max-w-5xl mt-6 md:mt-8">Com sede em Talatona, Luanda, integramos conhecimento do mercado angolano, capacidade logística internacional e uma equipa especializada para oferecer soluções de mobilidade alinhadas com os mais elevados padrões da indústria automóvel.</p>
            <p class="text-xl md:text-[1.5rem] font-light leading-relaxed md:leading-[1.4] max-w-5xl mt-6 md:mt-8">A nossa concessionária investe em infra-estruturas, formação técnica e serviço especializado para garantir confiança, qualidade e tranquilidade aos seus clientes.</p>
        </div>
    </section>

    <!-- Os Nossos Serviços -->
    <section class="py-20 md:py-28 bg-[#f4f6f9]">
        <div class="content-container">
            <div class="mb-14 md:mb-20 animate-up">
                <p class="text-sm md:text-base font-semibold tracking-wide mb-4">O Que Oferecemos</p>
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Os Nossos Serviços</h2>
                <p class="text-base md:text-lg text-gray-500 font-light max-w-3xl">O nosso compromisso é oferecer soluções de mobilidade premium, suportadas por uma equipa especializada e pelos padrões internacionais das marcas que representamos em Angola.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">

                @php
                    $servicos = [
                        [
                            'titulo' => 'Venda de Automóveis',
                            'subtitulo' => 'ROX Motor e SAIC Maxus',
                            'descricao' => 'Somos o distribuidor oficial em Angola da ROX Motor e da SAIC Maxus. Oferecemos modelos que combinam tecnologia, desempenho, segurança e inovação para diferentes necessidades de mobilidade.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0H21M3.375 14.25h.008M21 14.25h-1.875M3.375 14.25V6.375c0-.621.504-1.125 1.125-1.125h9.75c.621 0 1.125.504 1.125 1.125v7.875m-12 0h12m0 0h3.375c.621 0 1.125.504 1.125 1.125V18M15.375 14.25V6.375"/>'
                        ],
                        [
                            'titulo' => 'Test Drive',
                            'subtitulo' => 'Experimente Antes de Decidir',
                            'descricao' => 'Experimente os modelos ROX e Maxus antes de tomar a sua decisão. Agende uma sessão de Test Drive e descubra o desempenho, o conforto e a tecnologia que distinguem cada veículo.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M15.59 14.37a6 6 0 01-5.84 7.38v-4.8m5.84-2.58a14.98 14.98 0 006.16-12.12A14.98 14.98 0 009.631 8.41m5.96 5.96a14.926 14.926 0 01-5.841 2.58m-.119-8.54a6 6 0 00-7.381 5.84h4.8m2.58-5.84a14.927 14.927 0 00-2.58 5.84m2.699 2.7c-.103.021-.207.041-.311.06a15.09 15.09 0 01-2.448-2.448 14.9 14.9 0 01.06-.312m-2.24 2.39a4.493 4.493 0 00-1.757 4.306 4.493 4.493 0 004.306-1.758M16.5 9a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z"/>'
                        ],
                        [
                            'titulo' => 'Consultoria Comercial',
                            'subtitulo' => 'Aconselhamento Personalizado',
                            'descricao' => 'A nossa equipa comercial presta aconselhamento personalizado para ajudar cada cliente a escolher o modelo, a versão e os equipamentos que melhor se adaptam às suas necessidades pessoais ou empresariais.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M20.25 8.511c.884.284 1.5 1.128 1.5 2.097v4.286c0 1.136-.847 2.1-1.98 2.193-.34.027-.68.052-1.02.072v3.091l-3-3c-1.354 0-2.694-.055-4.02-.163a2.115 2.115 0 01-.825-.242m9.345-8.334a2.126 2.126 0 00-.476-.095 48.64 48.64 0 00-8.048 0c-1.131.094-1.976 1.057-1.976 2.192v4.286c0 .837.46 1.58 1.155 1.951m9.345-8.334V6.637c0-1.621-1.152-3.026-2.76-3.235A48.455 48.455 0 0011.25 3c-2.115 0-4.198.137-6.24.402-1.608.209-2.76 1.614-2.76 3.235v6.226c0 1.621 1.152 3.026 2.76 3.235.577.075 1.157.14 1.74.194V21l4.155-4.155"/>'
                        ],
                        [
                            'titulo' => 'Serviço Pós-Venda',
                            'subtitulo' => 'Acompanhamento Contínuo',
                            'descricao' => 'Prestamos um serviço pós-venda especializado, assegurando acompanhamento contínuo, apoio técnico e soluções para preservar o desempenho e a fiabilidade do veículo.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z"/>'
                        ],
                        [
                            'titulo' => 'Assistência Técnica',
                            'subtitulo' => 'Oficina Especializada',
                            'descricao' => 'Dispomos de uma oficina equipada com tecnologia de diagnóstico certificada pelos fabricantes e técnicos com formação oficial da ROX Motor e da SAIC Maxus, preparados para efectuar intervenções com elevados padrões de qualidade.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17l-4.655 5.653a2.548 2.548 0 11-3.586-3.586l5.653-4.655m0 0a6.012 6.012 0 01-1.39-1.39L3 6l3-3 4.44 4.44m-.88 2.73l.88-.88m3.06 5.56l.88-.88m-1.39-1.39l1.39 1.39m0 0l4.655-5.653a2.548 2.548 0 113.586 3.586l-5.653 4.655m0 0a6.012 6.012 0 011.39 1.39L21 18l-3 3-4.44-4.44"/>'
                        ],
                        [
                            'titulo' => 'Agendamento de Serviços',
                            'subtitulo' => 'Revisões e Manutenções',
                            'descricao' => 'Facilitamos o agendamento de revisões, manutenções e intervenções técnicas através dos nossos canais de atendimento, garantindo um serviço organizado e adaptado à disponibilidade de cada cliente.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5"/>'
                        ],
                        [
                            'titulo' => 'Apoio ao Cliente',
                            'subtitulo' => 'Disponibilidade Total',
                            'descricao' => 'A nossa equipa encontra-se disponível para prestar informações comerciais, assistência técnica, acompanhamento pós-venda e esclarecimento de quaisquer questões relacionadas com os produtos e serviços da OCTA Mobil.',
                            'icon' => '<path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 003.741-.479 3 3 0 00-4.682-2.72m.94 3.198l.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0112 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 016 18.719m12 0a5.971 5.971 0 00-.941-3.197m0 0A5.995 5.995 0 0012 12.75a5.995 5.995 0 00-5.058 2.772m0 0a3 3 0 00-4.681 2.72 8.986 8.986 0 003.74.477m.94-3.197a5.971 5.971 0 00-.94 3.197M15 6.75a3 3 0 11-6 0 3 3 0 016 0zm6 3a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0zm-13.5 0a2.25 2.25 0 11-4.5 0 2.25 2.25 0 014.5 0z"/>'
                        ],
                    ];
                @endphp

                @foreach($servicos as $servico)
                <div class="bg-white p-8 md:p-10 animate-up group hover:shadow-lg transition-shadow duration-300">
                    <div class="w-12 h-12 rounded-full bg-[#f4f6f9] flex items-center justify-center mb-6 group-hover:bg-black transition-colors duration-300">
                        <svg class="w-6 h-6 text-black group-hover:text-white transition-colors duration-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">{!! $servico['icon'] !!}</svg>
                    </div>
                    <h3 class="text-lg font-medium text-black mb-1">{{ $servico['titulo'] }}</h3>
                    <p class="text-xs text-gray-400 font-medium tracking-wide uppercase mb-4">{{ $servico['subtitulo'] }}</p>
                    <p class="text-sm text-gray-500 font-light leading-relaxed">{{ $servico['descricao'] }}</p>
                </div>
                @endforeach

            </div>
        </div>
    </section>

    <!-- Contactos -->
    <section class="py-20 md:py-28 bg-black text-white">
        <div class="content-container">
            <div class="mb-14 md:mb-20 animate-up">
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Entre em contacto e viva essa nova experiência!</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 md:gap-6">

                <!-- Telefone -->
                <div class="animate-up">
                    <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"/></svg>
                    </div>
                    <p class="text-sm text-white/50 font-light mb-2">Telefone</p>
                    <a href="tel:+244945110222" class="text-base font-medium hover:text-[#C5A059] transition-colors">+244 945 110 222</a>
                </div>

                <!-- Email -->
                <div class="animate-up">
                    <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
                    </div>
                    <p class="text-sm text-white/50 font-light mb-2">Email</p>
                    <a href="mailto:info@octamobil.com" class="text-base font-medium hover:text-[#C5A059] transition-colors">info@octamobil.com</a>
                </div>

                <!-- Website -->
                <div class="animate-up">
                    <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m0 0A17.919 17.919 0 0112 16.5c-3.162 0-6.133-.815-8.716-2.247m0 0A9.015 9.015 0 013 12c0-1.605.42-3.113 1.157-4.418"/></svg>
                    </div>
                    <p class="text-sm text-white/50 font-light mb-2">Website</p>
                    <p class="text-base font-medium">www.roxmotor.ao</p>
                </div>

                <!-- Redes Sociais -->
                <div class="animate-up">
                    <div class="w-14 h-14 rounded-full border border-white/20 flex items-center justify-center mb-5">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M7.217 10.907a2.25 2.25 0 100 2.186m0-2.186c.18.324.283.696.283 1.093s-.103.77-.283 1.093m0-2.186l9.566-5.314m-9.566 7.5l9.566 5.314m0 0a2.25 2.25 0 103.935 2.186 2.25 2.25 0 00-3.935-2.186zm0-12.814a2.25 2.25 0 103.933-2.185 2.25 2.25 0 00-3.933 2.185z"/></svg>
                    </div>
                    <p class="text-sm text-white/50 font-light mb-3">Redes Sociais</p>
                    <div class="flex gap-4">
                        <a href="https://www.instagram.com/roxmotor.ao" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:border-[#C5A059] hover:text-[#C5A059] transition-all duration-300" aria-label="Instagram">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
                        </a>
                        <a href="https://www.facebook.com/roxmotor.ao" target="_blank" rel="noopener noreferrer" class="w-10 h-10 rounded-full border border-white/20 flex items-center justify-center hover:border-[#C5A059] hover:text-[#C5A059] transition-all duration-300" aria-label="Facebook">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
                        </a>
                    </div>
                </div>

            </div>

            <!-- CTA -->
            <div class="mt-16 animate-up">
                <a href="{{ route('contactos') }}" class="inline-block px-8 py-3 text-sm font-medium tracking-widest uppercase border border-white/30 text-white hover:bg-white hover:text-black transition-all duration-300">Contacte-nos</a>
            </div>
        </div>
    </section>
</x-front-layout>
