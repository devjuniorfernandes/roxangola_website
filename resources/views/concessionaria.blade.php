<x-front-layout>
    <x-slot name="title">Concessionária</x-slot>

    <!-- Hero -->
    <section class="relative h-[100svh] w-full overflow-hidden flex items-end">
        <img src="{{ asset('assets/dealer.jpg') }}" alt="OCTA Mobil" class="absolute inset-0 w-full h-full object-cover">
        <div class="pointer-events-none absolute inset-x-0 bottom-0 z-30 h-[50%] bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
        <div class="relative z-40 pb-32 md:pb-36 w-full">
            <div class="site-container">
                <p class="text-sm sm:text-base md:text-lg font-light text-gray-200 tracking-wide mb-3 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">Octa Mobil</p>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-medium text-white max-w-3xl opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">O distribuidor oficial da ROX Motor em Angola</h1>
            </div>
        </div>
    </section>

    <!-- Octa Mobil Section (mesmo layout da homepage) -->
    <section class="bg-black text-white py-20 md:py-32 overflow-hidden">
        <div class="content-container animate-up">
            <h3 class="text-sm md:text-base font-semibold tracking-wide mb-6">OCTA Mobil</h3>
            <h4 class="text-sm md:text-base font-semibold tracking-wide mb-4">Distribuidor Oficial Exclusivo da ROX Motor em Angola</h4>
            <p class="text-xl md:text-[2.5rem] font-light leading-relaxed md:leading-[1.4] max-w-5xl">A Octa Mobil é a representante oficial da ROX Motor em Angola. Com sede em Talatona, Luanda, oferecemos uma experiência automóvel premium — desde a aquisição da viatura até ao acompanhamento pós-venda — com infra-estruturas, formação técnica e serviço especializado para garantir confiança e qualidade aos nossos clientes.</p>
        </div>
    </section>

    <!-- Os Nossos Serviços -->
    <section class="py-16 md:py-24 bg-white overflow-hidden">
        <div class="content-container">
            <div class="mb-14 md:mb-20 animate-up">
                <p class="text-sm md:text-base font-semibold tracking-wide mb-4">O Que Oferecemos</p>
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Os Nossos Serviços</h2>
                <p class="text-base md:text-lg text-gray-500 font-light max-w-3xl">O nosso compromisso é oferecer soluções de mobilidade premium, suportadas por uma equipa especializada e pelos padrões internacionais das marcas que representamos em Angola.</p>
            </div>

            @php
                $servicos = [
                    ['img' => 'banner-adamas.avif', 'title' => 'Venda de Automóveis', 'desc' => 'Somos o distribuidor oficial em Angola da ROX Motor e da SAIC Maxus. Oferecemos mode-los que combinam tecnologia, desempenho, segurança e inovação para diferentes neces-sidades de mobilidade.'],
                    ['img' => 'banner2.jpg', 'title' => 'Test Drive', 'desc' => 'Experimente os modelos ROX e Maxus antes de tomar a sua decisão. Agende uma sessão de Test Drive e descubra o desempenho, o conforto e a tecnologia que distinguem cada veículo.'],
                    ['img' => 'rox01.jpg', 'title' => 'Consultoria Comercial', 'desc' => 'A nossa equipa comercial presta aconselhamento personalizado para ajudar cada cliente a escolher o modelo, a versão e os equipamentos que melhor se adaptam às suas necessi-dades pessoais ou empresariais.'],
                    ['img' => 'services.jpg', 'title' => 'Serviço Pós-Venda', 'desc' => 'Prestamos um serviço pós-venda especializado, assegurando acompanhamento contínuo, apoio técnico e soluções para preservar o desempenho e a fiabilidade do veículo.'],
                    ['img' => 'banner1.jpg', 'title' => 'Assistência Técnica', 'desc' => 'Dispomos de uma oficina equipada com tecnologia de diagnóstico certificada pelos fabri-cantes e técnicos com formação oficial da ROX Motor e da SAIC Maxus, preparados para efectuar intervenções com elevados padrões de qualidade.'],
                    ['img' => 'life.jpg', 'title' => 'Agendamento de Serviços', 'desc' => 'Facilitamos o agendamento de revisões, manutenções e intervenções técnicas através dos nossos canais de atendimento, garantindo um serviço organizado e adaptado à disponibi-lidade de cada cliente.'],
                    ['img' => 'keji.jpg', 'title' => 'Apoio ao Cliente', 'desc' => 'A nossa equipa encontra-se disponível para prestar informações comerciais, assistência técnica, acompanhamento pós-venda e esclarecimento de quaisquer questões relaciona-das com os produtos e serviços da OCTA Mobil.'],
                ];
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-5">
                @foreach($servicos as $slide)
                <div class="relative h-[400px] md:h-[550px] overflow-hidden group animate-up">
                    <img src="{{ asset('assets/' . $slide['img']) }}" alt="{{ $slide['title'] }}" class="w-full h-full object-cover transition-transform duration-400 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-transparent via-black/50 to-black/70"></div>
                    <div class="absolute top-8 md:top-12 left-0 right-0 text-center text-white px-6">
                        <h3 class="text-2xl md:text-3xl font-medium mb-2">{{ $slide['title'] }}</h3>
                        <p class="font-light text-sm md:text-base text-gray-200 max-w-md mx-auto">{{ $slide['desc'] }}</p>
                    </div>
                    <a href="{{ route('contactos') }}" class="absolute bottom-6 md:bottom-8 right-6 md:right-8 flex items-center gap-2 bg-white/20 backdrop-blur-sm text-white text-sm font-medium px-5 py-2.5 rounded-full transition-all duration-300 hover:bg-white/40">
                        mais <span class="w-5 h-5 rounded-full bg-white text-black flex items-center justify-center text-xs font-bold">+</span>
                    </a>
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
