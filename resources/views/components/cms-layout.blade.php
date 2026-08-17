@props(['title' => 'CMS'])
<!DOCTYPE html>
<html lang="pt" class="h-full bg-gray-100">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} — CMS ROX Angola</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-full">
<div x-data="{ open: false }" class="min-h-full">
    {{-- Sidebar (desktop) --}}
    <aside class="hidden md:flex md:w-64 md:flex-col md:fixed md:inset-y-0 bg-[#111317] text-gray-300">
        <div class="flex items-center h-16 px-6 border-b border-white/10">
            <a href="{{ route('cms.dashboard') }}" class="text-white font-semibold tracking-wide">ROX <span class="text-gray-400 font-normal">CMS</span></a>
        </div>
        <nav class="flex-1 overflow-y-auto px-3 py-4 space-y-1 text-sm">
            @include('cms.partials.nav')
        </nav>
        <div class="border-t border-white/10 p-4 text-xs">
            <div class="text-gray-400 mb-2">{{ auth()->user()->name ?? '' }}</div>
            <a href="{{ route('home') }}" target="_blank" class="block text-gray-400 hover:text-white transition-colors">Ver site →</a>
            <form method="POST" action="{{ route('logout') }}" class="mt-2">@csrf
                <button class="text-gray-400 hover:text-white transition-colors">Terminar sessão</button>
            </form>
        </div>
    </aside>

    {{-- Mobile top bar --}}
    <div class="md:hidden flex items-center justify-between h-14 px-4 bg-[#111317] text-white">
        <a href="{{ route('cms.dashboard') }}" class="font-semibold">ROX CMS</a>
        <button @click="open = !open" class="p-2" aria-label="Menu">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/></svg>
        </button>
    </div>
    {{-- Mobile drawer --}}
    <div x-show="open" x-cloak class="md:hidden fixed inset-0 z-40" style="display:none">
        <div class="absolute inset-0 bg-black/50" @click="open=false"></div>
        <div class="absolute left-0 top-0 bottom-0 w-64 bg-[#111317] text-gray-300 p-3 overflow-y-auto">
            <nav class="space-y-1 text-sm">@include('cms.partials.nav')</nav>
        </div>
    </div>

    {{-- Main --}}
    <div class="md:pl-64">
        <main class="py-8 px-4 sm:px-6 lg:px-10 max-w-6xl mx-auto">
            <div class="mb-6 flex items-center justify-between gap-4">
                <div>
                    <h1 class="text-xl font-semibold text-gray-900">{{ $title }}</h1>
                    @isset($subtitle)<p class="text-sm text-gray-500 mt-0.5">{{ $subtitle }}</p>@endisset
                </div>
                @isset($actions){{ $actions }}@endisset
            </div>

            @if(session('status'))
                <div class="mb-5 rounded-lg bg-green-50 border border-green-200 text-green-800 px-4 py-3 text-sm">{{ session('status') }}</div>
            @endif
            @if($errors->any())
                <div class="mb-5 rounded-lg bg-red-50 border border-red-200 text-red-800 px-4 py-3 text-sm">
                    <ul class="list-disc pl-5 space-y-0.5">@foreach($errors->all() as $e)<li>{{ $e }}</li>@endforeach</ul>
                </div>
            @endif

            {{ $slot }}
        </main>
    </div>
</div>
</body>
</html>
