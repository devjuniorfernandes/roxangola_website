<x-front-layout>
    <x-slot name="title">{{ __('showroom.title') }}</x-slot>

    <!-- Secção 1 — Hero -->
    <section class="relative h-[100svh] w-full overflow-hidden flex items-end">
        <img src="{{ asset('assets/showroom.jpg') }}" alt="Showroom ROX Motor Angola" class="absolute inset-0 w-full h-full object-cover">
        <div class="pointer-events-none absolute inset-x-0 bottom-0 z-30 h-[50%] bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
        <div class="relative z-40 pb-32 md:pb-36 w-full">
            <div class="site-container">
                <p class="text-sm sm:text-base md:text-lg font-light text-gray-200 tracking-wide mb-3 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">{{ __('showroom.hero.eyebrow') }}</p>
                <h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-medium text-white max-w-3xl opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">{{ __('showroom.hero.title') }}</h1>
            </div>
        </div>
    </section>

    <!-- Secção 2 — Apresentação -->
    <section class="bg-black text-white py-20 md:py-32 overflow-hidden">
        <div class="content-container animate-up">
            <h3 class="text-sm md:text-base font-semibold tracking-wide mb-6">Showroom</h3>
            <h4 class="text-sm md:text-base font-semibold tracking-wide mb-4">{{ __('showroom.intro.subtitle') }}</h4>
            <p class="text-xl md:text-[2.5rem] font-light leading-relaxed md:leading-[1.4] max-w-5xl">{{ __('showroom.intro.text') }}</p>
        </div>
    </section>

    <!-- Secção 3 — Galeria do Showroom -->
    <section class="py-16 md:py-24 bg-white overflow-hidden">
        <div class="content-container">
            <div class="mb-14 md:mb-20 animate-up">
                <p class="text-sm md:text-base font-semibold tracking-wide mb-4">{{ __('showroom.gallery.eyebrow') }}</p>
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide">{{ __('showroom.gallery.title') }}</h2>
            </div>

            @php
                $galeria = \App\Models\GalleryImage::published()->get();
            @endphp

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-5">
                @foreach($galeria as $i => $item)
                <div class="relative {{ $i === 0 ? 'md:col-span-2 h-[300px] md:h-[500px]' : 'h-[280px] md:h-[400px]' }} overflow-hidden group animate-up">
                    <img src="{{ img_src($item->image) }}" alt="{{ $item->tr('label') }}" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>
                    <div class="absolute bottom-5 md:bottom-6 left-5 md:left-6">
                        <p class="text-white text-sm md:text-base font-medium">{{ $item->tr('label') }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Secção 4 — Tour Virtual 360° -->
    <section class="bg-black text-white">
        <div class="content-container pt-20 md:pt-28 pb-10 md:pb-14">
            <div class="animate-up">
                <p class="text-sm md:text-base font-semibold tracking-wide mb-4">Tour Virtual</p>
                <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-4">Explore o nosso showroom sem sair de casa</h2>
                <p class="text-base md:text-lg text-gray-400 font-light max-w-3xl mb-8">Percorra virtualmente todos os espaços da concessionária e descubra os modelos ROX através de uma experiência interactiva em 360°.</p>
            </div>
        </div>

        <div class="relative animate-up" id="tour-wrapper">
            <link rel="stylesheet" href="{{ asset('vendor/pannellum/pannellum.css') }}">

            <div id="tour-panorama" style="width:100%; height:75vh; min-height:500px;"></div>

            <!-- Scene navigation -->
            <div class="absolute bottom-0 left-0 right-0 z-10 bg-gradient-to-t from-black/80 to-transparent">
                <div class="site-container py-4 md:py-6">
                    <div class="flex items-center gap-3 overflow-x-auto pb-2 scrollbar-hide">
                        <button type="button" class="tour-nav-btn flex-shrink-0 px-4 py-2 text-xs font-medium tracking-wide text-white/60 border border-white/10 rounded-full transition-all duration-300 hover:text-white hover:border-white/30 whitespace-nowrap" data-scene="vista-1" data-active>Vista 1</button>
                        <button type="button" class="tour-nav-btn flex-shrink-0 px-4 py-2 text-xs font-medium tracking-wide text-white/60 border border-white/10 rounded-full transition-all duration-300 hover:text-white hover:border-white/30 whitespace-nowrap" data-scene="vista-2">Vista 2</button>
                        <button type="button" class="tour-nav-btn flex-shrink-0 px-4 py-2 text-xs font-medium tracking-wide text-white/60 border border-white/10 rounded-full transition-all duration-300 hover:text-white hover:border-white/30 whitespace-nowrap" data-scene="vista-3">Vista 3</button>
                        <button type="button" class="tour-nav-btn flex-shrink-0 px-4 py-2 text-xs font-medium tracking-wide text-white/60 border border-white/10 rounded-full transition-all duration-300 hover:text-white hover:border-white/30 whitespace-nowrap" data-scene="vista-4">Vista 4</button>
                    </div>
                </div>
            </div>

            <!-- Fullscreen button -->
            <button type="button" id="tour-fullscreen" class="absolute top-4 right-4 z-10 w-10 h-10 bg-black/50 backdrop-blur-sm rounded-full flex items-center justify-center text-white/70 hover:text-white hover:bg-black/70 transition-all duration-300" aria-label="Ecrã inteiro">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
            </button>
        </div>

        <style>
            .tour-nav-btn[data-active] { color: #fff; border-color: rgba(255,255,255,0.5); background: rgba(255,255,255,0.1); }
            .scrollbar-hide::-webkit-scrollbar { display: none; }
            .scrollbar-hide { -ms-overflow-style: none; scrollbar-width: none; }
            #tour-wrapper:fullscreen #tour-panorama,
            #tour-wrapper:-webkit-full-screen #tour-panorama { height: 100vh; }
            #tour-wrapper:fullscreen .absolute.bottom-0,
            #tour-wrapper:-webkit-full-screen .absolute.bottom-0 { position: fixed; bottom: 0; left: 0; right: 0; }
            #tour-wrapper:fullscreen #tour-fullscreen,
            #tour-wrapper:-webkit-full-screen #tour-fullscreen { position: fixed; top: 1rem; right: 1rem; }
        </style>

        <script src="{{ asset('vendor/pannellum/pannellum.js') }}"></script>
        <script>
        document.addEventListener('DOMContentLoaded', function() {
            var basePath = '{{ asset("assets/showroom") }}/';

            var viewer = pannellum.viewer('tour-panorama', {
                default: {
                    firstScene: 'vista-1',
                    autoLoad: true,
                    showControls: false,
                    compass: false,
                    mouseZoom: true,
                    draggable: true,
                    friction: 0.15,
                    minHfov: 50,
                    maxHfov: 120,
                    autoRotate: -2,
                    autoRotateInactivityDelay: 3000
                },
                scenes: {
                    'vista-1': {
                        panorama: basePath + 'Gemini_Generated_Image_tvmk14tvmk14tvmk.png',
                        pitch: 0,
                        yaw: 0,
                        hfov: 100,
                        hotSpots: [
                            { pitch: -5, yaw: 90, type: 'scene', text: 'Vista 2', sceneId: 'vista-2' }
                        ]
                    },
                    'vista-2': {
                        panorama: basePath + 'Gemini_Generated_Image_qzc3l3qzc3l3qzc3.png',
                        pitch: 0,
                        yaw: 0,
                        hfov: 100,
                        hotSpots: [
                            { pitch: -5, yaw: -90, type: 'scene', text: 'Vista 1', sceneId: 'vista-1' },
                            { pitch: -5, yaw: 90, type: 'scene', text: 'Vista 3', sceneId: 'vista-3' }
                        ]
                    },
                    'vista-3': {
                        panorama: basePath + 'Gemini_Generated_Image_fnsi3zfnsi3zfnsi.png',
                        pitch: 0,
                        yaw: 0,
                        hfov: 100,
                        hotSpots: [
                            { pitch: -5, yaw: -90, type: 'scene', text: 'Vista 2', sceneId: 'vista-2' },
                            { pitch: -5, yaw: 90, type: 'scene', text: 'Vista 4', sceneId: 'vista-4' }
                        ]
                    },
                    'vista-4': {
                        panorama: basePath + 'Gemini_Generated_Image_bpajg6bpajg6bpaj.png',
                        pitch: 0,
                        yaw: 0,
                        hfov: 100,
                        hotSpots: [
                            { pitch: -5, yaw: -90, type: 'scene', text: 'Vista 3', sceneId: 'vista-3' },
                            { pitch: -5, yaw: 180, type: 'scene', text: 'Vista 1', sceneId: 'vista-1' }
                        ]
                    }
                }
            });

            var navBtns = document.querySelectorAll('.tour-nav-btn');

            function updateActiveBtn(sceneId) {
                navBtns.forEach(function(btn) {
                    if (btn.getAttribute('data-scene') === sceneId) {
                        btn.setAttribute('data-active', '');
                    } else {
                        btn.removeAttribute('data-active');
                    }
                });
            }

            navBtns.forEach(function(btn) {
                btn.addEventListener('click', function() {
                    var scene = btn.getAttribute('data-scene');
                    viewer.loadScene(scene);
                    updateActiveBtn(scene);
                });
            });

            viewer.on('scenechange', function(sceneId) {
                updateActiveBtn(sceneId);
            });

            document.getElementById('tour-fullscreen').addEventListener('click', function() {
                var wrapper = document.getElementById('tour-wrapper');
                if (wrapper.requestFullscreen) wrapper.requestFullscreen();
                else if (wrapper.webkitRequestFullscreen) wrapper.webkitRequestFullscreen();
                else if (wrapper.msRequestFullscreen) wrapper.msRequestFullscreen();
            });
        });
        </script>
    </section>
    <!-- Secção 5 — CTA + Formulário -->
    <section class="py-20 md:py-28 bg-black text-white">
        <div class="content-container">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 md:gap-20">
                <div class="animate-up">
                    <h2 class="text-3xl md:text-4xl font-normal tracking-wide mb-6">{{ __('showroom.form.title') }}</h2>
                    <p class="text-base md:text-lg text-gray-400 font-light leading-relaxed mb-4">{{ __('showroom.form.p1') }}</p>
                    <p class="text-base md:text-lg text-gray-400 font-light leading-relaxed">{{ __('showroom.form.p2') }}</p>
                </div>

                <div class="animate-up">
                    <form action="{{ route('showroom.store') }}" method="POST" class="space-y-5">
                        @csrf

                        @if(session('success'))
                            <div class="bg-green-900/30 border border-green-500/30 text-green-400 px-4 py-3 text-sm" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('showroom.form.name_full') }} <span class="text-red-400">*</span></label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors" required>
                            @error('name') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('common.forms.phone') }} <span class="text-red-400">*</span></label>
                                <input type="tel" id="phone" name="phone" value="{{ old('phone') }}" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors" required>
                                @error('phone') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('showroom.form.email') }} <span class="text-red-400">*</span></label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors" required>
                                @error('email') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                        </div>

                        <div>
                            <label for="model_interest" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('showroom.form.model') }} <span class="text-red-400">*</span></label>
                            <select id="model_interest" name="model_interest" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors appearance-none" required>
                                <option value="" disabled selected class="text-black">{{ __('showroom.form.model_placeholder') }}</option>
                                <option value="ROX 01" class="text-black" {{ old('model_interest') == 'ROX 01' ? 'selected' : '' }}>ROX 01</option>
                                <option value="ROX ADAMAS" class="text-black" {{ old('model_interest') == 'ROX ADAMAS' ? 'selected' : '' }}>ROX ADAMAS</option>
                                <option value="Ambos" class="text-black" {{ old('model_interest') == 'Ambos' ? 'selected' : '' }}>{{ __('showroom.form.both') }}</option>
                            </select>
                            @error('model_interest') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                            <div>
                                <label for="preferred_date" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('showroom.form.date') }}</label>
                                <input type="date" id="preferred_date" name="preferred_date" value="{{ old('preferred_date') }}" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors">
                                @error('preferred_date') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                            </div>
                            <div>
                                <label for="preferred_time" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('showroom.form.time') }}</label>
                                <select id="preferred_time" name="preferred_time" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors appearance-none">
                                    <option value="" class="text-black">{{ __('showroom.form.time_placeholder') }}</option>
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
                            <label for="observations" class="block text-sm font-medium text-gray-300 mb-1.5">{{ __('showroom.form.observations') }}</label>
                            <textarea id="observations" name="observations" rows="3" class="w-full bg-white/5 border border-white/10 text-white px-4 py-3 text-sm focus:outline-none focus:border-white/30 transition-colors resize-none">{{ old('observations') }}</textarea>
                            @error('observations') <p class="text-red-400 text-xs mt-1">{{ $message }}</p> @enderror
                        </div>

                        <button type="submit" class="w-full py-3 text-sm font-medium tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">{{ __('showroom.form.submit') }}</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-front-layout>
