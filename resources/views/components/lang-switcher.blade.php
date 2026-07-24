@props(['variant' => 'header'])

@php
    $locales = ['pt' => 'PT', 'en' => 'EN'];
    $current = app()->getLocale();
    $currentLabel = $locales[$current] ?? strtoupper($current);
@endphp

<div class="lang-switcher relative {{ $variant === 'footer' ? 'inline-block' : '' }}">
    <button type="button" class="lang-switcher-btn flex items-center gap-1.5 text-sm font-medium tracking-wide transition-opacity hover:opacity-80 cursor-pointer" aria-haspopup="true" aria-expanded="false">
        <svg class="w-[18px] h-[18px]" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21a9 9 0 100-18 9 9 0 000 18zm0 0c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m-9 9h18"/>
        </svg>
        <span>{{ $currentLabel }}</span>
    </button>
    <div class="lang-switcher-panel absolute right-0 min-w-[130px] bg-white text-black shadow-lg py-1 hidden z-[60] {{ $variant === 'footer' ? 'bottom-full mb-2' : 'top-full mt-2' }}">
        @foreach($locales as $code => $label)
        <a href="{{ route('locale.switch', $code) }}" class="block px-4 py-2 text-sm transition-colors hover:bg-gray-100 {{ $code === $current ? 'font-semibold text-black' : 'text-gray-500' }}">{{ $label }}</a>
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
