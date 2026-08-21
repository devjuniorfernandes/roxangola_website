<x-front-layout>
    <x-slot name="title">{{ __('servicos_agendamento.title') }}</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-[60vh] md:h-[70vh] w-full overflow-hidden flex items-center justify-center">
        <img src="{{ cms_image('servicos.agendamento.hero_bg', asset('assets/services.jpg')) }}" alt="{{ __('servicos_agendamento.hero.title') }}" class="absolute inset-0 w-full h-full object-cover object-bottom">
        <div class="absolute inset-0 bg-black/40"></div>
        <div class="relative z-10 text-center text-white px-6">
            <h1 class="text-4xl md:text-5xl lg:text-6xl font-medium mb-4 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">{{ __('servicos_agendamento.hero.title') }}</h1>
            <p class="text-base md:text-lg font-light text-gray-200 max-w-2xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">{{ __('servicos_agendamento.hero.subtitle') }}</p>
        </div>
    </section>

    <!-- Secção 1 — Compromisso -->
    <section class="py-16 md:py-24 bg-white">
        <div class="content-container">
            <div class="max-w-4xl animate-up">
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-6">{{ __('servicos_agendamento.commitment.title') }}</h2>
                <p class="text-base md:text-lg text-gray-500 font-light leading-relaxed">{{ __('servicos_agendamento.commitment.description') }}</p>
            </div>
        </div>
    </section>

    <!-- Secção 2 — Formulário de Agendamento -->
    <section class="py-20 md:py-28 bg-black text-white">
        <div class="content-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 md:gap-20">
                <div class="animate-up">
                    <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-6">{{ __('servicos_agendamento.form_section.title') }}</h2>
                    <p class="text-base md:text-lg text-gray-400 font-light leading-relaxed mb-4">{{ __('servicos_agendamento.form_section.description') }}</p>
                    <p class="text-base md:text-lg text-gray-400 font-light leading-relaxed">{{ __('servicos_agendamento.form_section.note') }}</p>
                </div>

                <div class="animate-up">
                    <form action="{{ route('servicos.agendamento.store') }}" method="POST" class="space-y-5">
                        @csrf

                        @if(session('success'))
                            <div class="bg-green-900/30 border border-green-500/30 text-green-400 px-4 py-3 text-sm" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('servicos_agendamento.form.name') }} <span class="text-red-400">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors" required>
                            @error('name') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('servicos_agendamento.form.phone') }} <span class="text-red-400">*</span></label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors" required>
                                @error('phone') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('servicos_agendamento.form.email') }} <span class="text-red-400">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors" required>
                                @error('email') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="model" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('servicos_agendamento.form.model') }} <span class="text-red-400">*</span></label>
                                <select id="model" name="model" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors appearance-none" required>
                                    <option value="" disabled selected class="text-black">{{ __('servicos_agendamento.form.select_model') }}</option>
                                    <option value="ROX 01" class="text-black" {{ old('model') == 'ROX 01' ? 'selected' : '' }}>ROX 01</option>
                                    <option value="ROX ADAMAS" class="text-black" {{ old('model') == 'ROX ADAMAS' ? 'selected' : '' }}>ROX ADAMAS</option>
                                </select>
                                @error('model') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="plate" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('servicos_agendamento.form.plate') }}</label>
                                <input type="text" id="plate" name="plate" value="{{ old('plate') }}" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors" placeholder="{{ __('servicos_agendamento.form.plate_placeholder') }}">
                                @error('plate') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="service_type" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('servicos_agendamento.form.service_type') }} <span class="text-red-400">*</span></label>
                            <select id="service_type" name="service_type" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors appearance-none" required>
                                <option value="" disabled selected class="text-black">{{ __('servicos_agendamento.form.select_service') }}</option>
                                <option value="Acessórios ROX" class="text-black" {{ old('service_type') == 'Acessórios ROX' ? 'selected' : '' }}>{{ __('servicos_agendamento.form.services.acessorios') }}</option>
                                <option value="Manutenção Preventiva" class="text-black" {{ old('service_type') == 'Manutenção Preventiva' ? 'selected' : '' }}>{{ __('servicos_agendamento.form.services.preventiva') }}</option>
                                <option value="Manutenção Correctiva" class="text-black" {{ old('service_type') == 'Manutenção Correctiva' ? 'selected' : '' }}>{{ __('servicos_agendamento.form.services.correctiva') }}</option>
                                <option value="Diagnóstico" class="text-black" {{ old('service_type') == 'Diagnóstico' ? 'selected' : '' }}>{{ __('servicos_agendamento.form.services.diagnostico') }}</option>
                                <option value="Revisão Geral" class="text-black" {{ old('service_type') == 'Revisão Geral' ? 'selected' : '' }}>{{ __('servicos_agendamento.form.services.revisao') }}</option>
                                <option value="Outro" class="text-black" {{ old('service_type') == 'Outro' ? 'selected' : '' }}>{{ __('servicos_agendamento.form.services.outro') }}</option>
                            </select>
                            @error('service_type') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="preferred_date" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('servicos_agendamento.form.preferred_date') }}</label>
                                <input type="date" id="preferred_date" name="preferred_date" value="{{ old('preferred_date') }}" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors">
                                @error('preferred_date') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="preferred_time" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('servicos_agendamento.form.preferred_time') }}</label>
                                <select id="preferred_time" name="preferred_time" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors appearance-none">
                                    <option value="" disabled selected class="text-black">{{ __('servicos_agendamento.form.select_time') }}</option>
                                    <option value="08:00" class="text-black" {{ old('preferred_time') == '08:00' ? 'selected' : '' }}>08:00</option>
                                    <option value="09:00" class="text-black" {{ old('preferred_time') == '09:00' ? 'selected' : '' }}>09:00</option>
                                    <option value="10:00" class="text-black" {{ old('preferred_time') == '10:00' ? 'selected' : '' }}>10:00</option>
                                    <option value="11:00" class="text-black" {{ old('preferred_time') == '11:00' ? 'selected' : '' }}>11:00</option>
                                    <option value="12:00" class="text-black" {{ old('preferred_time') == '12:00' ? 'selected' : '' }}>12:00</option>
                                    <option value="14:00" class="text-black" {{ old('preferred_time') == '14:00' ? 'selected' : '' }}>14:00</option>
                                    <option value="15:00" class="text-black" {{ old('preferred_time') == '15:00' ? 'selected' : '' }}>15:00</option>
                                    <option value="16:00" class="text-black" {{ old('preferred_time') == '16:00' ? 'selected' : '' }}>16:00</option>
                                    <option value="17:00" class="text-black" {{ old('preferred_time') == '17:00' ? 'selected' : '' }}>17:00</option>
                                </select>
                                @error('preferred_time') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="observations" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('servicos_agendamento.form.observations') }}</label>
                            <textarea id="observations" name="observations" rows="3" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors resize-none">{{ old('observations') }}</textarea>
                            @error('observations') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="w-full py-3 text-sm font-medium tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">{{ __('servicos_agendamento.form_section.submit_btn') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
