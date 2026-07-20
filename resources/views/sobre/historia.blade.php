<x-front-layout>
    <x-slot name="title">{{ __('historia.title') }}</x-slot>

    <!-- Banner Hero -->
    <section class="relative h-screen w-full overflow-hidden flex items-start justify-center">
        <img src="{{ asset('assets/lichengbei.jpg') }}" alt="A História ROX" class="absolute inset-0 w-full h-full object-cover">
        <div class="absolute inset-0 bg-black/30"></div>
        <div class="relative z-10 text-center text-white px-6 pt-[120px]">
            <p class="text-lg sm:text-xl font-semibold tracking-[2px] mb-3 opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.3s forwards;">{{ __('historia.hero.eyebrow') }}</p>
            <h1 class="text-2xl sm:text-4xl font-light leading-snug max-w-3xl mx-auto opacity-0 translate-y-8" style="animation: heroSlideUp 0.8s ease-out 0.5s forwards;">{{ __('historia.hero.title') }}</h1>
        </div>
    </section>

    <!-- History Intro -->
    <section class="bg-white py-20 md:py-[120px]">
        <div class="content-container">
            <p class="text-lg font-semibold tracking-[2px] text-[#191919] mb-3 animate-up">{{ __('historia.intro.eyebrow') }}</p>
            <div class="text-2xl sm:text-4xl font-light text-[#191919] space-y-10 sm:space-y-20 mt-3 animate-up">
                <div>
                    <p>{{ __('historia.intro.stat1_num') }}</p>
                    <p>{{ __('historia.intro.stat1_text') }}</p>
                </div>
                <div>
                    <p>{{ __('historia.intro.stat2_num') }}</p>
                    <p>{{ __('historia.intro.stat2_text') }}</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Milestones -->
    <section class="bg-white pb-20 md:pb-[120px]">
        <div class="content-container space-y-6">
            @php
                $milestones = [
                    ['date' => '2021.1', 'title' => __('historia.ms.m1'), 'img' => 'banner.jpg'],
                    ['date' => '2023.8', 'title' => __('historia.ms.m2'), 'img' => 'banner2.jpg'],
                    ['date' => '2023.8', 'title' => __('historia.ms.m3'), 'img' => 'banner1.jpg'],
                    ['date' => '2023.9', 'title' => __('historia.ms.m4'), 'img' => 'life.jpg'],
                    ['date' => '2023.12', 'title' => __('historia.ms.m5'), 'img' => 'outdoor.avif'],
                    ['date' => '2024.4', 'title' => __('historia.ms.m6'), 'img' => 'keji.jpg'],
                    ['date' => '2024.4', 'title' => __('historia.ms.m7'), 'img' => 'lichengbei.jpg'],
                    ['date' => '2024.4', 'title' => __('historia.ms.m8'), 'img' => 'shequ.jpg'],
                    ['date' => '2024.5', 'title' => __('historia.ms.m9'), 'img' => '1.jpg'],
                    ['date' => '2024.8', 'title' => __('historia.ms.m10'), 'img' => 'services.jpg'],
                    ['date' => '2024.10', 'title' => __('historia.ms.m11'), 'img' => 'services-ver.jpg'],
                    ['date' => '2024.10', 'title' => __('historia.ms.m12'), 'img' => 'dealer.jpg'],
                    ['date' => '2024.10', 'title' => __('historia.ms.m13'), 'img' => 'showroom.jpg'],
                    ['date' => '2024.12', 'title' => __('historia.ms.m14'), 'img' => 'life.jpg'],
                    ['date' => '2025.2', 'title' => __('historia.ms.m15'), 'img' => 'keji.jpg'],
                    ['date' => '2025.4', 'title' => __('historia.ms.m16'), 'img' => 'banner.jpg'],
                    ['date' => '2025.4', 'title' => __('historia.ms.m17'), 'img' => 'lichengbei.jpg'],
                    ['date' => '2025.4', 'title' => __('historia.ms.m18'), 'img' => 'outdoor.avif'],
                    ['date' => '2025.7', 'title' => __('historia.ms.m19'), 'img' => 'banner1.jpg'],
                    ['date' => '2025.7', 'title' => __('historia.ms.m20'), 'img' => 'services.jpg'],
                    ['date' => '2025.9', 'title' => __('historia.ms.m21'), 'img' => '1.jpg'],
                    ['date' => '2025.10', 'title' => __('historia.ms.m22'), 'img' => 'shequ.jpg'],
                    ['date' => '2025.10', 'title' => __('historia.ms.m23'), 'img' => 'banner-adamas.avif'],
                    ['date' => '2025.12', 'title' => __('historia.ms.m24'), 'img' => 'adamas.jpg'],
                    ['date' => '2026.2', 'title' => __('historia.ms.m25'), 'img' => 'dealer.jpg'],
                ];
            @endphp

            @foreach(array_reverse($milestones) as $milestone)
            <div class="animate-up">
                <div class="relative aspect-video overflow-hidden">
                    <img src="{{ asset('assets/' . $milestone['img']) }}" alt="{{ $milestone['title'] }}" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="p-5 sm:p-10 bg-[#F8F9F9] text-[#191919] text-lg sm:text-2xl">
                    <div>{{ $milestone['date'] }}</div>
                    <div class="mt-1 sm:mt-2">{{ $milestone['title'] }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-front-layout>
