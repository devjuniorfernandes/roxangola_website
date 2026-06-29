<x-front-layout>
    <x-slot name="title">Contactos</x-slot>

    <!-- Header Section -->
    <section class="pt-32 pb-20 px-6 bg-[#f4f6f9] text-black relative">
        <div class="max-w-[1400px] mx-auto text-center animate-up">
            <h1 class="text-4xl md:text-5xl font-medium mb-4">Fale Connosco</h1>
            <p class="text-lg font-light text-gray-500 max-w-2xl mx-auto">Estamos aqui para responder a todas as suas questões e agendar o seu test drive exclusivo.</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-20 px-6 bg-white text-gray-800">
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-16">
            <div class="animate-up">
                <h2 class="text-2xl font-medium mb-8">Informações de Contacto</h2>
                <div class="space-y-6 text-gray-600 font-light">
                    <div>
                        <p class="font-medium text-black mb-1">Telefone</p>
                        <a href="tel:+24494511022" class="hover:text-black transition-colors">(+244) 945 110 222</a>
                    </div>
                    <div>
                        <p class="font-medium text-black mb-1">Email</p>
                        <a href="mailto:info@octamobil.com" class="hover:text-black transition-colors">info@octamobil.com</a>
                    </div>
                    <div>
                        <p class="font-medium text-black mb-1">Localização</p>
                        <p>Luanda, Angola</p>
                    </div>
                </div>
                
                <div class="mt-12 pt-8 border-t border-gray-100">
                    <img src="{{ asset('logo_octamobil.svg') }}" alt="Octa Mobil" class="h-8">
                    <p class="text-sm text-gray-500 mt-4">Distribuidor Oficial ROX em Angola</p>
                </div>
            </div>

            <div class="bg-[#f4f6f9] p-8 animate-up rounded-sm">
                <h3 class="text-xl font-medium mb-6">Envie-nos uma mensagem</h3>
                <form action="{{ route('contactos.store') }}" method="POST" class="space-y-4">
                    @csrf
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome</label>
                        <input type="text" id="name" name="name" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                        <input type="email" id="email" name="email" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Telefone</label>
                        <input type="tel" id="phone" name="phone" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2">
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensagem</label>
                        <textarea id="message" name="message" rows="4" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required></textarea>
                    </div>
                    <button type="submit" class="w-full bg-black text-white py-3 px-4 rounded hover:bg-gray-900 transition-colors uppercase tracking-widest text-sm font-medium mt-4">Enviar Mensagem</button>
                </form>
            </div>
        </div>
    </section>
</x-front-layout>
