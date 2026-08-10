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
                $milestones = \App\Models\Milestone::published()->get();
            @endphp

            @foreach($milestones->reverse() as $milestone)
            <div class="animate-up">
                <div class="relative aspect-video overflow-hidden">
                    <img src="{{ img_src($milestone->image) }}" alt="{{ $milestone->tr('title') }}" class="w-full h-full object-cover" loading="lazy">
                </div>
                <div class="p-5 sm:p-10 bg-[#F8F9F9] text-[#191919] text-lg sm:text-2xl">
                    <div>{{ $milestone->date }}</div>
                    <div class="mt-1 sm:mt-2">{{ $milestone->tr('title') }}</div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-front-layout>
