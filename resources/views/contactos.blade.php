<x-front-layout>
    <x-slot name="title">{{ __('contactos.title') }}</x-slot>

    <!-- Hero Section -->
    <section class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden flex items-end">
        <img src="{{ asset('assets/showroom.jpg') }}" alt="Contactos ROX Angola" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>
        <div class="relative z-10 content-container pb-12 md:pb-16 text-white">
            <h1 class="text-3xl md:text-5xl font-light mb-3 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">{{ __('contactos.hero.title') }}</h1>
            <p class="text-base md:text-lg font-light text-white/80 max-w-2xl opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">{{ __('contactos.hero.subtitle') }}</p>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-20 px-6 bg-white text-gray-800">
        <div class="max-w-4xl mx-auto grid md:grid-cols-2 gap-16">
            <div class="animate-up">
                <h2 class="text-2xl font-medium mb-8">{{ __('contactos.info.heading') }}</h2>
                <div class="space-y-6 text-gray-600 font-light">
                    <div>
                        <p class="font-medium text-black mb-1">{{ __('common.forms.phone') }}</p>
                        <a href="tel:+24494511022" class="hover:text-black transition-colors">(+244) 945 110 222</a>
                    </div>
                    <div>
                        <p class="font-medium text-black mb-1">{{ __('common.forms.email') }}</p>
                        <a href="mailto:info@octamobil.com" class="hover:text-black transition-colors">info@octamobil.com</a>
                    </div>
                    <div>
                        <p class="font-medium text-black mb-1">{{ __('common.forms.location') }}</p>
                        <p>{{ __('contactos.info.location_full') }}</p>
                    </div>
                </div>

                <div class="mt-12 pt-8 border-t border-gray-100">
                    <img src="{{ asset('assets/octa.png') }}" alt="Octa Angola" class="h-8">
                    <p class="text-sm text-gray-500 mt-4">{{ __('contactos.info.distributor') }}</p>
                </div>
            </div>

            <div class="bg-[#f4f6f9] p-8 animate-up rounded-sm">
                <h3 class="text-xl font-medium mb-6">{{ __('contactos.form.heading') }}</h3>
                <form action="{{ route('contactos.store') }}" method="POST" class="space-y-4">
                    @csrf
                    @if(session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                            <span class="block sm:inline">{{ session('success') }}</span>
                        </div>
                    @endif
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">{{ __('common.forms.name') }} <span class="text-red-500">*</span></label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                        @error('name') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">{{ __('common.forms.email') }} <span class="text-red-500">*</span></label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                        @error('email') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">{{ __('common.forms.phone') }} <span class="text-red-500">*</span></label>
                        <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                        @error('phone') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="model_interest" class="block text-sm font-medium text-gray-700 mb-1">{{ __('contactos.form.model_interest') }} <span class="text-red-500">*</span></label>
                        <select id="model_interest" name="model_interest" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                            @php $selectedModel = old('model_interest', request('modelo')); @endphp
                            <option value="" disabled {{ $selectedModel ? '' : 'selected' }}>{{ __('contactos.form.model_placeholder') }}</option>
                            <option value="ROX 01" {{ $selectedModel == 'ROX 01' ? 'selected' : '' }}>ROX 01</option>
                            <option value="ROX ADAMAS" {{ $selectedModel == 'ROX ADAMAS' ? 'selected' : '' }}>ROX ADAMAS</option>
                            <option value="Ambos" {{ $selectedModel == 'Ambos' ? 'selected' : '' }}>{{ __('contactos.form.both') }}</option>
                        </select>
                        @error('model_interest') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="intention" class="block text-sm font-medium text-gray-700 mb-1">{{ __('contactos.form.intention') }} <span class="text-red-500">*</span></label>
                        <select id="intention" name="intention" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>
                            @php $selectedIntention = old('intention', request('intencao')); @endphp
                            <option value="" disabled {{ $selectedIntention ? '' : 'selected' }}>{{ __('contactos.form.intention_placeholder') }}</option>
                            <option value="Quero ser contactado" {{ $selectedIntention == 'Quero ser contactado' ? 'selected' : '' }}>{{ __('contactos.form.intent_contact') }}</option>
                            <option value="Proposta comercial" {{ $selectedIntention == 'Proposta comercial' ? 'selected' : '' }}>{{ __('contactos.form.intent_proposal') }}</option>
                            <option value="Informação geral" {{ $selectedIntention == 'Informação geral' ? 'selected' : '' }}>{{ __('contactos.form.intent_info') }}</option>
                        </select>
                        @error('intention') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">{{ __('common.forms.message') }} <span class="text-red-500">*</span></label>
                        <textarea id="message" name="message" rows="4" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2" required>{{ old('message') }}</textarea>
                        @error('message') <p class="text-red-500 text-xs mt-1">{{ $message }}</p> @enderror
                    </div>
                    <button type="submit" class="w-full bg-black text-white py-3 px-4 rounded hover:bg-gray-900 transition-colors uppercase tracking-widest text-sm font-medium mt-4">{{ __('contactos.form.submit') }}</button>
                </form>
            </div>
        </div>
    </section>
</x-front-layout>
