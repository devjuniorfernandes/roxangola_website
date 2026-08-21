@php
    $link = fn($active) => 'group flex items-center justify-between gap-2.5 rounded-lg px-3 py-2 text-xs font-medium transition-all duration-150 '
        . ($active ? 'bg-[#C5A059]/15 text-[#C5A059] font-semibold border border-[#C5A059]/20' : 'text-gray-400 hover:bg-white/5 hover:text-gray-200 border border-transparent');
    
    $sectionHeader = fn($title) => '<p class="px-3 pt-4 pb-1 text-[10px] font-semibold uppercase tracking-widest text-gray-500">'.$title.'</p>';
    
    $unread = \App\Http\Controllers\Cms\SubmissionController::unreadCounts();
    $submTypes = \App\Http\Controllers\Cms\SubmissionController::types();
@endphp

{!! $sectionHeader('GERAL') !!}
<a href="{{ route('cms.dashboard') }}" class="{{ $link(request()->routeIs('cms.dashboard')) }}">
    <div class="flex items-center gap-2.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M3.75 6A2.25 2.25 0 016 3.75h2.25A2.25 2.25 0 0110.5 6v2.25a2.25 2.25 0 01-2.25 2.25H6a2.25 2.25 0 01-2.25-2.25V6zM3.75 15.75A2.25 2.25 0 016 13.5h2.25a2.25 2.25 0 012.25 2.25V18a2.25 2.25 0 01-2.25 2.25H6A2.25 2.25 0 013.75 18v-2.25zM13.5 6a2.25 2.25 0 012.25-2.25H18A2.25 2.25 0 0120.25 6v2.25A2.25 2.25 0 0118 10.5h-2.25a2.25 2.25 0 01-2.25-2.25V6zM13.5 15.75a2.25 2.25 0 012.25-2.25H18a2.25 2.25 0 012.25 2.25V18A2.25 2.25 0 0118 20.25h-2.25A2.25 2.25 0 0113.5 18v-2.25z"/></svg>
        <span>Início</span>
    </div>
</a>

{!! $sectionHeader('CONTEÚDO') !!}
<a href="{{ route('cms.pages.index') }}" class="{{ $link(request()->routeIs('cms.pages.*')) }}">
    <div class="flex items-center gap-2.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"/></svg>
        <span>Páginas</span>
    </div>
</a>
<a href="{{ route('cms.services.index') }}" class="{{ $link(request()->routeIs('cms.services.*')) }}">
    <div class="flex items-center gap-2.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M11.42 15.17L17.25 21A2.652 2.652 0 0021 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 01-3.601 0 2.548 2.548 0 010-3.601l5.653-4.655m5.101-2.396l-1.077-1.077M18.825 5.175a2.5 2.5 0 00-3.536 0l-1.077 1.077"/></svg>
        <span>Serviços</span>
    </div>
</a>
<a href="{{ route('cms.highlights.index') }}" class="{{ $link(request()->routeIs('cms.highlights.*')) }}">
    <div class="flex items-center gap-2.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385c.116.486-.412.87-.827.615l-4.706-2.905a.563.563 0 00-.585 0l-4.706 2.905c-.415.256-.943-.129-.827-.615l1.285-5.385a.563.563 0 00-.182-.557l-4.204-3.602c-.38-.325-.178-.948.32-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z"/></svg>
        <span>Destaques (Homepage)</span>
    </div>
</a>
<a href="{{ route('cms.milestones.index') }}" class="{{ $link(request()->routeIs('cms.milestones.*')) }}">
    <div class="flex items-center gap-2.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        <span>Marcos da História</span>
    </div>
</a>
<a href="{{ route('cms.gallery.index') }}" class="{{ $link(request()->routeIs('cms.gallery.*')) }}">
    <div class="flex items-center gap-2.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
        <span>Galeria</span>
    </div>
</a>
<a href="{{ route('cms.content.index') }}" class="{{ $link(request()->routeIs('cms.content.*')) }}">
    <div class="flex items-center gap-2.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"/></svg>
        <span>Ficheiros do Site</span>
    </div>
</a>
<a href="{{ route('cms.pages.index') }}" class="{{ $link(false) }}">
    <div class="flex items-center gap-2.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M7.5 8.25h9m-9 3H12m-9.75 1.51c0 1.6 1.123 2.994 2.707 3.227 1.129.166 2.27.293 3.423.379.35.026.67.21.865.501L12 21l2.755-4.133a1.14 1.14 0 01.865-.501 48.172 48.172 0 003.423-.379c1.584-.233 2.707-1.626 2.707-3.228V6.741c0-1.602-1.123-2.995-2.707-3.228A48.394 48.394 0 0012 3c-2.392 0-4.744.175-7.043.513C3.373 3.746 2.25 5.14 2.25 6.741v6.018z"/></svg>
        <span>Informações (Textos)</span>
    </div>
</a>
<a href="{{ route('cms.seo.index') }}" class="{{ $link(request()->routeIs('cms.seo.*')) }}">
    <div class="flex items-center gap-2.5">
        <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M12 21a9.004 9.004 0 008.716-6.747M12 21a9.004 9.004 0 01-8.716-6.747M12 21c2.485 0 4.5-4.03 4.5-9S14.485 3 12 3m0 18c-2.485 0-4.5-4.03-4.5-9S9.515 3 12 3m0 0a8.997 8.997 0 017.843 4.582M12 3a8.997 8.997 0 00-7.843 4.582m15.686 0A11.953 11.953 0 0112 10.5c-2.998 0-5.74-1.1-7.843-2.918m15.686 0A8.959 8.959 0 0121 12c0 .778-.099 1.533-.284 2.253m-18.432-6.506A8.959 8.959 0 003 12c0 .778.099 1.533.284 2.253"/></svg>
        <span>SEO</span>
    </div>
</a>

{!! $sectionHeader('SUBMISSÕES') !!}
@foreach($submTypes as $key => $t)
    @php
        $isActive = request()->routeIs('cms.submissions.*') && request('type', request()->route('type')) === $key;
    @endphp
    <a href="{{ route('cms.submissions.index', $key) }}" class="{{ $link($isActive) }}">
        <div class="flex items-center gap-2.5">
            <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75"/></svg>
            <span>{{ $t['label'] }}</span>
        </div>
        @if(($unread[$key] ?? 0) > 0)
            <span class="inline-flex items-center justify-center rounded-full bg-[#C5A059] text-[#0c0d0e] text-[9px] font-bold h-4 px-1.5">{{ $unread[$key] }}</span>
        @endif
    </a>
@endforeach
