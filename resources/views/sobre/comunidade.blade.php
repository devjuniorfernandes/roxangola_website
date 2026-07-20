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

    <!-- Receber mais informação -->
    <section class="bg-white py-20 md:py-[120px]">
        <div class="content-container">
            <div class="max-w-2xl mx-auto">
                <div class="mb-10 md:mb-12 text-center animate-up">
                    <p class="text-lg font-semibold tracking-[2px] text-[#191919] mb-3">Comunidade ROX</p>
                    <h2 class="text-2xl sm:text-4xl font-light text-[#191919] mb-4">Receba mais informação</h2>
                    <p class="text-base md:text-lg text-gray-500 font-light">Deixe os seus dados e mantenha-se a par das novidades, lançamentos, eventos e histórias da comunidade ROX Motor Angola.</p>
                </div>

                @if(session('success'))
                    <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-8" role="alert">
                        <span class="block sm:inline">{{ session('success') }}</span>
                    </div>
                @endif

                <form action="{{ route('sobre.comunidade.store') }}" method="POST" class="bg-[#F8F9F9] p-8 md:p-10 space-y-5 animate-up rounded-sm text-gray-800">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Nome <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
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
                    <button type="submit" class="w-full bg-black text-white py-3 px-4 rounded hover:bg-gray-900 transition-colors uppercase tracking-widest text-sm font-medium mt-2">Quero receber informação</button>
                </form>
            </div>
        </div>
    </section>
</x-front-layout>
