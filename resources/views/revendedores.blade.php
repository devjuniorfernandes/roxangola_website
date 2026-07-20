<x-front-layout>
    <x-slot name="title">Revendedores Globais</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden flex items-center justify-center">
        <img src="{{ asset('assets/services.jpg') }}" alt="Revendedores Globais" class="absolute inset-0 w-full h-full object-cover object-bottom">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium mb-4 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">Revendedores Globais</h1>
            <p class="text-base md:text-lg font-light text-gray-200 max-w-2xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">Serviço premium para guiar as suas aventuras</p>
        </div>
    </section>

    <!-- Become a Dealer Section -->
    <section class="bg-white py-16 md:py-24">
        <div class="content-container">
            <div class="max-w-2xl mx-auto">
                <div class="mb-10 md:mb-12 text-center animate-up">
                    <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Seja Nosso Revendedor</h2>
                    <p class="text-base md:text-lg text-gray-500 font-light">Junte-se à rede global da ROX Motor. Preencha o formulário abaixo e a nossa equipa entrará em contacto para explorar uma parceria consigo.</p>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-8" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('revendedores.store') }}" method="POST" class="bg-[#f4f6f9] p-8 md:p-10 space-y-5 animate-up rounded-sm text-gray-800">
                    @csrf
                    <div>
                        <label for="company_name" class="block text-sm font-medium text-gray-700 mb-1">Nome da Empresa <span class="text-red-500">*</span></label>
                        <input type="text" id="company_name" name="company_name" value="{{ old('company_name') }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                        @error('company_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="contact_name" class="block text-sm font-medium text-gray-700 mb-1">Nome do Responsável <span class="text-red-500">*</span></label>
                        <input type="text" id="contact_name" name="contact_name" value="{{ old('contact_name') }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                        @error('contact_name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div class="grid sm:grid-cols-2 gap-5">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email <span class="text-red-500">*</span></label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                            @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Telefone <span class="text-red-500">*</span></label>
                            <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                            @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>
                    </div>
                    <div>
                        <label for="location" class="block text-sm font-medium text-gray-700 mb-1">Localização</label>
                        <input type="text" id="location" name="location" value="{{ old('location') }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2">
                        @error('location') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Mensagem <span class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="4" placeholder="Fale-nos sobre a sua empresa e o mercado que pretende representar" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="w-full bg-black text-white py-3 px-4 rounded hover:bg-gray-900 transition-colors uppercase tracking-widest text-sm font-medium mt-2">Enviar Candidatura</button>
                </form>
            </div>
        </div>
    </section>
</x-front-layout>
