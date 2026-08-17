@php
    $link = fn($active) => 'group flex items-center justify-between gap-3 rounded-md px-3 py-2 transition-colors '
        . ($active ? 'bg-white/10 text-white' : 'text-gray-400 hover:bg-white/5 hover:text-white');
    $section = fn($t) => '<p class="px-3 pt-5 pb-1 text-[11px] font-semibold uppercase tracking-wider text-gray-500">'.$t.'</p>';
    $unread = \App\Http\Controllers\Cms\SubmissionController::unreadCounts();
    $submTypes = \App\Http\Controllers\Cms\SubmissionController::types();
@endphp

{!! $section('Operação') !!}
<a href="{{ route('cms.dashboard') }}" class="{{ $link(request()->routeIs('cms.dashboard')) }}"><span>Início</span></a>
@foreach($submTypes as $key => $t)
    <a href="{{ route('cms.submissions.index', $key) }}" class="{{ $link(request()->routeIs('cms.submissions.*') && request('type', request()->route('type')) === $key) }}">
        <span>{{ $t['label'] }}</span>
        @if(($unread[$key] ?? 0) > 0)
            <span class="inline-flex items-center justify-center rounded-full bg-amber-500 text-white text-[10px] font-semibold min-w-[18px] h-[18px] px-1">{{ $unread[$key] }}</span>
        @endif
    </a>
@endforeach

{!! $section('Conteúdo') !!}
<a href="{{ route('cms.highlights.index') }}" class="{{ $link(request()->routeIs('cms.highlights.*')) }}"><span>Destaques</span></a>
<a href="{{ route('cms.gallery.index') }}" class="{{ $link(request()->routeIs('cms.gallery.*')) }}"><span>Galeria</span></a>
<a href="{{ route('cms.milestones.index') }}" class="{{ $link(request()->routeIs('cms.milestones.*')) }}"><span>Marcos</span></a>
<a href="{{ route('cms.services.index') }}" class="{{ $link(request()->routeIs('cms.services.*')) }}"><span>Serviços</span></a>

{!! $section('Site') !!}
<a href="{{ route('cms.pages.index') }}" class="{{ $link(request()->routeIs('cms.pages.*')) }}"><span>Páginas (textos)</span></a>
<a href="{{ route('cms.content.index') }}" class="{{ $link(request()->routeIs('cms.content.*')) }}"><span>Imagens</span></a>
<a href="{{ route('cms.seo.index') }}" class="{{ $link(request()->routeIs('cms.seo.*')) }}"><span>SEO</span></a>
