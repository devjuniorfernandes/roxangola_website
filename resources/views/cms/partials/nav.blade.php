@php
    $link = fn($active) => 'group flex items-center gap-3 rounded-md px-3 py-2 transition-colors '
        . ($active ? 'bg-white/10 text-white' : 'text-gray-400 hover:bg-white/5 hover:text-white');
@endphp

<a href="{{ route('cms.dashboard') }}" class="{{ $link(request()->routeIs('cms.dashboard')) }}">Início</a>

<p class="px-3 pt-5 pb-1 text-[11px] font-semibold uppercase tracking-wider text-gray-500">Conteúdo</p>
<a href="{{ route('cms.highlights.index') }}" class="{{ $link(request()->routeIs('cms.highlights.*')) }}">Destaques (Homepage)</a>
<a href="{{ route('cms.gallery.index') }}" class="{{ $link(request()->routeIs('cms.gallery.*')) }}">Galeria do Showroom</a>
<a href="{{ route('cms.milestones.index') }}" class="{{ $link(request()->routeIs('cms.milestones.*')) }}">Marcos da História</a>
<a href="{{ route('cms.services.index') }}" class="{{ $link(request()->routeIs('cms.services.*')) }}">Serviços</a>

<p class="px-3 pt-5 pb-1 text-[11px] font-semibold uppercase tracking-wider text-gray-500">Site</p>
<a href="{{ route('cms.content.index') }}" class="{{ $link(request()->routeIs('cms.content.*')) }}">Textos &amp; Imagens</a>
<a href="{{ route('cms.seo.index') }}" class="{{ $link(request()->routeIs('cms.seo.*')) }}">SEO</a>
