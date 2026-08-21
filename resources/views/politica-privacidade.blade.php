<x-front-layout>
    <x-slot name="title">{{ __('politica-privacidade.page_title') }}</x-slot>

    <!-- Header Section -->
    <section class="pt-32 pb-20 px-6 bg-black text-white relative">
        <div class="max-w-[1280px] mx-auto text-center animate-up">
            <h1 class="text-4xl md:text-5xl font-medium mb-4">{{ __('politica-privacidade.hero.title') }}</h1>
            <p class="text-lg font-light text-gray-400 max-w-2xl mx-auto">{{ __('politica-privacidade.hero.subtitle') }}</p>
        </div>
    </section>

    <!-- Content Section -->
    <section class="py-24 px-6 bg-white text-gray-800">
        <div class="max-w-4xl mx-auto animate-up">
            <p class="text-sm text-gray-400 mb-12">{{ __('politica-privacidade.last_updated') }} {{ date('d/m/Y') }}</p>

            <div class="space-y-12 text-gray-600 font-light leading-relaxed">

                <!-- 1 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_1.title') }}</h2>
                    <p>{!! __('politica-privacidade.section_1.text') !!}</p>
                    <p class="mt-2">{{ __('politica-privacidade.section_1.contact') }} <a href="mailto:info@octamobil.com" class="text-black underline hover:no-underline">info@octamobil.com</a>.</p>
                </div>

                <!-- 2 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_2.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_2.intro') }}</p>
                    <ul class="list-disc pl-6 mt-3 space-y-2">
                        <li>{!! __('politica-privacidade.section_2.item_1') !!}</li>
                        <li>{!! __('politica-privacidade.section_2.item_2') !!}</li>
                        <li>{!! __('politica-privacidade.section_2.item_3') !!}</li>
                        <li>{!! __('politica-privacidade.section_2.item_4') !!}</li>
                    </ul>
                </div>

                <!-- 3 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_3.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_3.intro') }}</p>
                    <ul class="list-disc pl-6 mt-3 space-y-2">
                        <li>{{ __('politica-privacidade.section_3.item_1') }}</li>
                        <li>{{ __('politica-privacidade.section_3.item_2') }}</li>
                        <li>{{ __('politica-privacidade.section_3.item_3') }}</li>
                        <li>{{ __('politica-privacidade.section_3.item_4') }}</li>
                        <li>{{ __('politica-privacidade.section_3.item_5') }}</li>
                    </ul>
                </div>

                <!-- 4 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_4.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_4.intro') }}</p>
                    <ul class="list-disc pl-6 mt-3 space-y-2">
                        <li>{!! __('politica-privacidade.section_4.item_1') !!}</li>
                        <li>{!! __('politica-privacidade.section_4.item_2') !!}</li>
                        <li>{!! __('politica-privacidade.section_4.item_3') !!}</li>
                    </ul>
                </div>

                <!-- 5 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_5.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_5.intro') }}</p>
                    <ul class="list-disc pl-6 mt-3 space-y-2">
                        <li>{!! __('politica-privacidade.section_5.item_1') !!}</li>
                        <li>{!! __('politica-privacidade.section_5.item_2') !!}</li>
                    </ul>
                    <p class="mt-3">{{ __('politica-privacidade.section_5.no_sell') }}</p>
                </div>

                <!-- 6 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_6.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_6.intro') }}</p>
                    <ul class="list-disc pl-6 mt-3 space-y-2">
                        <li>{!! __('politica-privacidade.section_6.item_1') !!}</li>
                        <li>{!! __('politica-privacidade.section_6.item_2') !!}</li>
                        <li>{!! __('politica-privacidade.section_6.item_3') !!}</li>
                    </ul>
                    <p class="mt-3">{{ __('politica-privacidade.section_6.manage') }}</p>
                </div>

                <!-- 7 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_7.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_7.text') }}</p>
                </div>

                <!-- 8 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_8.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_8.intro') }}</p>
                    <ul class="list-disc pl-6 mt-3 space-y-2">
                        <li>{!! __('politica-privacidade.section_8.item_1') !!}</li>
                        <li>{!! __('politica-privacidade.section_8.item_2') !!}</li>
                        <li>{!! __('politica-privacidade.section_8.item_3') !!}</li>
                        <li>{!! __('politica-privacidade.section_8.item_4') !!}</li>
                        <li>{!! __('politica-privacidade.section_8.item_5') !!}</li>
                    </ul>
                    <p class="mt-3">{{ __('politica-privacidade.section_8.contact') }} <a href="mailto:info@octamobil.com" class="text-black underline hover:no-underline">info@octamobil.com</a>.</p>
                </div>

                <!-- 9 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_9.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_9.text') }}</p>
                </div>

                <!-- 10 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_10.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_10.text') }}</p>
                </div>

                <!-- 11 -->
                <div>
                    <h2 class="text-xl font-medium text-black mb-4">{{ __('politica-privacidade.section_11.title') }}</h2>
                    <p>{{ __('politica-privacidade.section_11.intro') }}</p>
                    <div class="mt-4 bg-[#f4f6f9] p-6 rounded-sm">
                        <p class="font-medium text-black">{{ __('politica-privacidade.section_11.company') }}</p>
                        <p class="mt-1">{{ __('politica-privacidade.section_11.role') }}</p>
                        <p class="mt-1">{{ __('politica-privacidade.section_11.email_label') }} <a href="mailto:info@octamobil.com" class="text-black underline hover:no-underline">info@octamobil.com</a></p>
                        <p class="mt-1">{{ __('politica-privacidade.section_11.phone_label') }} <a href="tel:+24494511022" class="text-black underline hover:no-underline">(+244) 945 110 22</a></p>
                        <p class="mt-1">{{ __('politica-privacidade.section_11.location') }}</p>
                    </div>
                </div>

            </div>

            <div class="mt-20 text-center">
                <a href="{{ route('home') }}" class="inline-block px-8 py-3 text-sm font-medium tracking-wide uppercase border border-black text-black hover:bg-black hover:text-white transition-all duration-300 rounded-sm">{{ __('politica-privacidade.back_home') }}</a>
            </div>
        </div>
    </section>
</x-front-layout>
