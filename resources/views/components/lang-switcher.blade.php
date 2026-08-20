@props(['variant' => 'header'])

@php
    $locales = [
        'pt' => [
            'code' => 'PT',
            'name' => 'Português',
        ],
        'en' => [
            'code' => 'EN',
            'name' => 'English',
        ],
    ];
    $current = app()->getLocale();
    $currentInfo = $locales[$current] ?? ['code' => strtoupper($current), 'name' => strtoupper($current)];
@endphp

<div class="lang-switcher relative {{ $variant === 'footer' ? 'inline-block' : '' }}">
    <button type="button" class="lang-switcher-btn flex items-center gap-1.5 text-sm font-medium tracking-wide transition-all duration-200 hover:opacity-80 cursor-pointer py-1 px-2 rounded" aria-haspopup="true" aria-expanded="false">
        <svg class="flex-shrink-0" style="width: 18px; height: 18px; min-width: 18px; min-height: 18px;" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0 0c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m-9 9h18"/>
        </svg>
        <span class="font-semibold text-xs tracking-wider uppercase">{{ $currentInfo['code'] }}</span>
        <svg class="flex-shrink-0 opacity-70" style="width: 10px; height: 10px; min-width: 10px; min-height: 10px;" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/>
        </svg>
    </button>
    <div class="lang-switcher-panel absolute right-0 min-w-[150px] bg-white text-black shadow-xl rounded-md py-1.5 border border-gray-100 hidden z-[100] {{ $variant === 'footer' ? 'bottom-full mb-2' : 'top-full mt-2' }}">
        @foreach($locales as $code => $data)
        <a href="{{ route('locale.switch', $code) }}" class="flex items-center justify-between px-4 py-2.5 text-xs transition-colors hover:bg-gray-100 {{ $code === $current ? 'font-semibold text-black bg-gray-50' : 'text-gray-600' }}">
            <span>{{ $data['name'] }} ({{ $data['code'] }})</span>
            @if($code === $current)
            <svg class="w-3.5 h-3.5 text-black flex-shrink-0 ml-2" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5"/>
            </svg>
            @endif
        </a>
        @endforeach
    </div>
</div>

@once
<script>
(function () {
    document.addEventListener('click', function (e) {
        var btn = e.target.closest('.lang-switcher-btn');
        var openPanels = document.querySelectorAll('.lang-switcher-panel:not(.hidden)');
        if (btn) {
            e.stopPropagation();
            var panel = btn.parentElement.querySelector('.lang-switcher-panel');
            var wasHidden = panel.classList.contains('hidden');
            openPanels.forEach(function (p) { p.classList.add('hidden'); });
            if (wasHidden) { panel.classList.remove('hidden'); btn.setAttribute('aria-expanded', 'true'); }
            return;
        }
        openPanels.forEach(function (p) {
            p.classList.add('hidden');
            var b = p.parentElement.querySelector('.lang-switcher-btn');
            if (b) b.setAttribute('aria-expanded', 'false');
        });
    });
})();
</script>
@endonce
