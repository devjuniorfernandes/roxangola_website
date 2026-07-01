<x-front-layout>
    <x-slot name="title">Sobre Nós</x-slot>

    <!-- Header Section -->
    <section class="pt-32 pb-20 px-6 bg-black text-white relative">
        <div class="max-w-[1280px] mx-auto text-center animate-up">
            <h1 class="text-4xl md:text-5xl font-medium mb-4">Sobre a ROX Angola</h1>
            <p class="text-lg font-light text-gray-400 max-w-2xl mx-auto">Trazemos a revolução off-road de luxo para o mercado angolano através da Octa Mobil.</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 px-6 bg-white text-gray-800">
        <div class="max-w-4xl mx-auto animate-up">
            <h2 class="text-3xl font-medium mb-6">A Nossa Missão</h2>
            <p class="text-gray-600 mb-8 leading-relaxed text-lg font-light">
                A ROX redefiniu o conceito de veículos todo-o-terreno inteligentes de luxo. Em Angola, representamos essa vanguarda tecnológica, oferecendo soluções de mobilidade que não fazem concessões entre luxo, potência e sustentabilidade híbrida.
            </p>

            <div class="grid md:grid-cols-2 gap-10 mt-16">
                <div>
                    <h3 class="text-xl font-medium mb-4">Inovação Híbrida</h3>
                    <p class="text-gray-500 font-light leading-relaxed">
                        Apostamos em viaturas que combinam as vantagens do motor de combustão para longas viagens com a eficiência dos motores elétricos de alta performance.
                    </p>
                </div>
                <div>
                    <h3 class="text-xl font-medium mb-4">Serviço Premium</h3>
                    <p class="text-gray-500 font-light leading-relaxed">
                        Através da Octa Mobil, garantimos uma assistência técnica especializada, peças originais e um atendimento que acompanha o prestígio da marca ROX.
                    </p>
                </div>
            </div>
            
            <div class="mt-20 text-center">
                <a href="{{ route('contactos') }}" class="inline-block px-8 py-3 text-sm font-medium tracking-wide uppercase border border-black text-black hover:bg-black hover:text-white transition-all duration-300 rounded-sm">Fale Connosco</a>
            </div>
        </div>
    </section>
</x-front-layout>
