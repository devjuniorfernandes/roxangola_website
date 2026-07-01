<x-front-layout>
    <x-slot name="title">Showroom</x-slot>

    <!-- Header -->
    <section class="pt-32 pb-20 px-6 bg-black text-white relative">
        <div class="max-w-[1280px] mx-auto text-center animate-up">
            <h1 class="text-4xl md:text-5xl font-medium mb-4">Visite o Nosso Showroom</h1>
            <p class="text-lg font-light text-gray-400 max-w-2xl mx-auto">Descubra a gama ROX pessoalmente. Agende a sua visita e conheça o futuro da mobilidade todo-o-terreno de luxo.</p>
        </div>
    </section>

    <!-- Map + Info -->
    <section class="bg-white">
        <!-- Google Maps Embed -->
        <div class="w-full h-[400px] md:h-[500px]">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31442.42!2d13.23!3d-8.84!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1a51f15c3a4bbc6b%3A0x3cfe98b8d63b2b42!2sLuanda%2C%20Angola!5e0!3m2!1spt-PT!2sao!4v1" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <!-- Info Cards -->
        <div class="site-container py-16 md:py-24">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 md:gap-12">

                <!-- Address -->
                <div class="animate-up">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-[#f4f6f9] flex items-center justify-center">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z"></path></svg>
                        </div>
                        <h3 class="text-base font-medium text-black">Endereço</h3>
                    </div>
                    <div class="pl-[52px] text-sm text-gray-600 font-light leading-relaxed">
                        <p class="font-medium text-black mb-1">Octa Mobil — Showroom ROX</p>
                        <p>Luanda, Angola</p>
                    </div>
                </div>

                <!-- Opening Hours -->
                <div class="animate-up">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-[#f4f6f9] flex items-center justify-center">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                        </div>
                        <h3 class="text-base font-medium text-black">Horário de Funcionamento</h3>
                    </div>
                    <div class="pl-[52px] text-sm text-gray-600 font-light">
                        <table class="w-full">
                            <tr><td class="py-1.5">Segunda a Sexta</td><td class="py-1.5 text-right font-medium text-black">08:00 — 18:00</td></tr>
                            <tr><td class="py-1.5">Sábado</td><td class="py-1.5 text-right font-medium text-black">09:00 — 13:00</td></tr>
                            <tr><td class="py-1.5">Domingo e Feriados</td><td class="py-1.5 text-right font-medium text-black">Encerrado</td></tr>
                        </table>
                    </div>
                </div>

                <!-- Contact + Directions -->
                <div class="animate-up">
                    <div class="flex items-center gap-3 mb-4">
                        <div class="w-10 h-10 rounded-full bg-[#f4f6f9] flex items-center justify-center">
                            <svg class="w-5 h-5 text-black" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z"></path></svg>
                        </div>
                        <h3 class="text-base font-medium text-black">Contacto</h3>
                    </div>
                    <div class="pl-[52px] text-sm text-gray-600 font-light space-y-2">
                        <p><a href="tel:+24494511022" class="hover:text-black transition-colors">(+244) 945 110 22</a></p>
                        <p><a href="mailto:info@octamobil.com" class="hover:text-black transition-colors">info@octamobil.com</a></p>
                        <a href="https://maps.google.com/?q=Luanda+Angola" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-1.5 mt-3 text-black font-medium hover:opacity-70 transition-opacity">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.5 6H5.25A2.25 2.25 0 003 8.25v10.5A2.25 2.25 0 005.25 21h10.5A2.25 2.25 0 0018 18.75V10.5m-10.5 6L21 3m0 0h-5.25M21 3v5.25"></path></svg>
                            Como chegar
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-16 md:py-20 bg-[#f4f6f9]">
        <div class="site-container text-center animate-up">
            <h2 class="text-2xl md:text-3xl font-medium text-black mb-4">Agende a Sua Visita</h2>
            <p class="text-sm text-gray-500 font-light max-w-xl mx-auto mb-8">Marque um test drive ou venha conhecer os modelos ROX pessoalmente no nosso showroom em Luanda.</p>
            <a href="{{ route('contactos', ['intencao' => 'Test Drive']) }}" class="inline-block px-8 py-3 text-sm font-medium tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">Agendar Test Drive</a>
        </div>
    </section>
</x-front-layout>
