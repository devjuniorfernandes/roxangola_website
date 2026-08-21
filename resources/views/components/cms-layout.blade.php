@props(['title' => 'CMS', 'subtitle' => null])
<!DOCTYPE html>
<html lang="pt" class="h-full bg-[#f4f5f7] antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ $title }} — ROX CMS</title>

    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Font Awesome 6 Free -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <style>[x-cloak]{display:none!important}</style>

    <style>
        @font-face { font-family: 'TTNormsPro'; src: url('{{ asset('assets/fonts/TTNormsProRegular.otf') }}') format('opentype'); font-weight: 400; font-style: normal; font-display: swap; }
        @font-face { font-family: 'TTNormsPro'; src: url('{{ asset('assets/fonts/TTNormsProMedium.otf') }}') format('opentype'); font-weight: 500; font-style: normal; font-display: swap; }

        :root {
            --rox-dune: #C5A059;
            --rox-dark: #0c0d0e;
        }

        body {
            font-family: 'TTNormsPro', 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
            color: #0c0d0e;
            background-color: #f4f5f7;
            -webkit-font-smoothing: antialiased;
        }

        [x-cloak] { display: none !important; }

        /* Minimal scrollbar */
        ::-webkit-scrollbar { width: 5px; height: 5px; }
        ::-webkit-scrollbar-track { background: transparent; }
        ::-webkit-scrollbar-thumb { background: rgba(0, 0, 0, 0.12); border-radius: 2px; }
        ::-webkit-scrollbar-thumb:hover { background: rgba(0, 0, 0, 0.25); }
    </style>
</head>
<body class="h-full bg-[#f4f5f7] selection:bg-[#C5A059]/20 selection:text-[#0c0d0e]">
<div x-data="{ open: false }" class="min-h-screen bg-[#f4f5f7]">

    {{-- Sidebar (Desktop Layout matching Reference Image) --}}
    <aside class="hidden md:flex md:w-60 md:flex-col md:fixed md:inset-y-0 bg-[#0d0e10] text-gray-300 z-30 select-none border-r border-white/5">
        <!-- Header Brand -->
        <div class="flex items-center gap-3 h-16 px-6">
            <img src="{{ asset('assets/logo-w.svg') }}" alt="ROX Logo" class="h-4">
            <span class="text-sm font-bold tracking-wider text-white">Roxmotor</span>
        </div>

        <!-- Navigation Links -->
        <nav class="flex-1 overflow-y-auto px-3 py-2 space-y-5 text-xs tracking-wide">
            @include('cms.partials.nav')
        </nav>

        <!-- User Profile Footer matching Reference Image -->
        <div class="border-t border-white/5 p-4 bg-[#0a0b0c] flex flex-col gap-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center gap-2.5 min-w-0">
                    <div class="w-7 h-7 rounded-full bg-white/10 text-white flex items-center justify-center font-semibold text-xs flex-shrink-0">
                        {{ strtoupper(substr(auth()->user()->name ?? 'A', 0, 1)) }}
                    </div>
                    <div class="min-w-0">
                        <p class="text-xs font-medium text-white truncate">{{ auth()->user()->name ?? 'Administrador' }}</p>
                        <p class="text-[10px] text-gray-500 truncate">{{ auth()->user()->email ?? 'admin@roxangola.com' }}</p>
                    </div>
                </div>
                <form method="POST" action="{{ route('logout') }}" class="text-2xl">@csrf
                    <button title="Sair" class="text-gray-500 hover:text-white transition-colors text-5xl">
                       <img src="{{ asset('quit.png') }}" alt="logout-icon" class="w-8 h-8">
                    </button>
                </form>
            </div>
            
            <a href="{{ route('home') }}" target="_blank" class="text-[11px] text-gray-400 hover:text-white flex items-center gap-1 transition-colors">
                <span>Ver Website</span>
                <svg class="w-3 h-3 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/></svg>
            </a>
        </div>
    </aside>

    {{-- Mobile Header --}}
    <div class="md:hidden sticky top-0 z-40 flex items-center justify-between h-14 px-5 bg-[#0d0e10] border-b border-white/10 text-white">
        <a href="{{ route('cms.dashboard') }}" class="flex items-center gap-2">
            <img src="{{ asset('assets/logo-w.svg') }}" alt="ROX Logo" class="h-3.5">
            <span class="text-xs font-bold text-white">CMS</span>
        </a>
        <button @click="open = !open" class="p-1.5 text-gray-300 hover:text-white" aria-label="Menu">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5M3.75 17.25h16.5"/></svg>
        </button>
    </div>

    {{-- Mobile Drawer --}}
    <div x-show="open" x-cloak class="md:hidden fixed inset-0 z-50">
        <div class="fixed inset-0 bg-black/60 backdrop-blur-xs" @click="open=false" x-transition.opacity></div>
        <div class="fixed left-0 top-0 bottom-0 w-64 bg-[#0d0e10] text-gray-300 p-5 overflow-y-auto flex flex-col justify-between border-r border-white/10"
             x-transition:enter="transition ease-out duration-200 transform"
             x-transition:enter-start="-translate-x-full"
             x-transition:enter-end="translate-x-0"
             x-transition:leave="transition ease-in duration-150 transform"
             x-transition:leave-start="translate-x-0"
             x-transition:leave-end="-translate-x-full">
            <div>
                <div class="flex items-center justify-between pb-5 mb-5 border-b border-white/10">
                    <div class="flex items-center gap-2">
                        <img src="{{ asset('assets/logo-w.svg') }}" alt="ROX Logo" class="h-4">
                        <span class="text-xs font-bold text-white">CMS</span>
                    </div>
                    <button @click="open=false" class="text-gray-400 hover:text-white">✕</button>
                </div>
                <nav class="space-y-4 text-xs">
                    @include('cms.partials.nav')
                </nav>
            </div>
            
            <div class="pt-4 border-t border-white/10 mt-6 flex justify-between text-xs">
                <a href="{{ route('home') }}" target="_blank" class="text-gray-400 hover:text-white">Website ↗</a>
                <form method="POST" action="{{ route('logout') }}">@csrf
                    <button class="text-red-400 hover:text-red-300">Sair</button>
                </form>
            </div>
        </div>
    </div>

    {{-- Main Area --}}
    <div class="md:pl-60 flex flex-col min-h-screen bg-[#f4f5f7]">
        
        <!-- Header Top Bar matching Reference Image -->
        <header class="bg-white border-b border-gray-200/80 px-8 py-3.5 flex items-center justify-between gap-4 sticky top-0 z-20">
            <!-- Breadcrumb Header -->
            <div class="flex items-center gap-2 text-xs text-gray-400 font-medium">
                <span class="text-gray-600 font-medium">ROX CMS</span>
                <span>/</span>
                <span class="text-gray-900 font-medium">{{ $title }}</span>
            </div>

            <!-- Search, Notifications, Admin User -->
            <div class="flex items-center gap-4">
                <!-- Search Bar (live) -->
                <div class="relative hidden sm:block"
                     x-data="{
                        q: '',
                        results: [],
                        open: false,
                        loading: false,
                        timer: null,
                        searchUrl: '{{ route('cms.search') }}',
                        search() {
                            clearTimeout(this.timer);
                            if (this.q.length < 2) { this.results = []; this.open = false; return; }
                            this.loading = true;
                            this.timer = setTimeout(async () => {
                                const res = await fetch(this.searchUrl + '?q=' + encodeURIComponent(this.q), {
                                    headers: { 'X-Requested-With': 'XMLHttpRequest', 'Accept': 'application/json' }
                                });
                                this.results = await res.json();
                                this.open = this.results.length > 0;
                                this.loading = false;
                            }, 250);
                        },
                        go(url) { window.location.href = url; this.open = false; this.q = ''; },
                        close() { this.open = false; }
                     }"
                     @keydown.escape.window="close()"
                     @keydown.ctrl.k.window.prevent="$refs.searchInput.focus()"
                     @click.outside="close()"
                >
                    <span class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none text-gray-400">
                        <i x-show="!loading" class="fa-solid fa-magnifying-glass text-[11px]"></i>
                        <i x-show="loading" class="fa-solid fa-circle-notch fa-spin text-[11px] text-[#C5A059]"></i>
                    </span>
                    <input
                        x-ref="searchInput"
                        x-model="q"
                        @input="search()"
                        @focus="if(results.length) open = true"
                        type="text"
                        placeholder="Pesquisar..."
                        autocomplete="off"
                        class="w-48 lg:w-60 text-xs bg-gray-50 border border-gray-200 rounded-lg pl-8 pr-12 py-1.5 focus:bg-white focus:outline-none focus:ring-1 focus:ring-[#C5A059]/50 focus:border-[#C5A059]/60 transition-all"
                    >
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2.5 pointer-events-none text-[9px] text-gray-300 font-mono">Ctrl K</span>

                    {{-- Dropdown de resultados --}}
                    <div
                        x-show="open"
                        x-cloak
                        x-transition:enter="transition ease-out duration-100"
                        x-transition:enter-start="opacity-0 translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        class="absolute top-full left-0 mt-2 w-80 bg-white border border-gray-200/80 rounded-xl shadow-xl z-50 overflow-hidden"
                    >
                        <template x-if="results.length === 0 && q.length >= 2 && !loading">
                            <div class="p-4 text-xs text-gray-400 text-center">Nenhum resultado para "<span x-text="q"></span>"</div>
                        </template>

                        <template x-for="(item, i) in results" :key="i">
                            <button
                                @click="go(item.url)"
                                class="w-full flex items-center gap-3 px-4 py-2.5 hover:bg-gray-50 text-left transition-colors border-b border-gray-100 last:border-0"
                            >
                                <span class="w-7 h-7 rounded-lg bg-gray-100 flex items-center justify-center flex-shrink-0">
                                    <i :class="item.icon" class="text-gray-500 text-xs"></i>
                                </span>
                                <div class="min-w-0 flex-1">
                                    <p class="text-xs font-bold text-gray-900 truncate" x-text="item.label"></p>
                                    <p class="text-[10px] text-gray-400 mt-0.5" x-text="item.sub"></p>
                                </div>
                                <i class="fa-solid fa-arrow-right text-gray-300 text-[10px] flex-shrink-0"></i>
                            </button>
                        </template>
                    </div>
                </div>

                <!-- Notifications -->
                @php
                    $unreadTotal = array_sum(\App\Http\Controllers\Cms\SubmissionController::unreadCounts());
                @endphp
                <a href="{{ route('cms.submissions.index', 'contactos') }}" class="relative text-gray-500 hover:text-gray-900 p-1 transition-colors" title="Notificações">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.75" d="M14.857 17.082a2.37 2.37 0 01-4.286 0M12 4.87a4.24 4.24 0 00-4.24 4.24v3.52c0 .64-.26 1.25-.72 1.7L5.7 15.67c-.64.64-.19 1.73.72 1.73h11.16c.91 0 1.36-1.09.72-1.73l-1.34-1.34a2.41 2.41 0 01-.72-1.7V9.11c0-2.34-1.9-4.24-4.24-4.24z"/></svg>
                    @if($unreadTotal > 0)
                        <span class="absolute -top-1 -right-1 w-3.5 h-3.5 bg-[#C5A059] text-[#0c0d0e] rounded-full text-[9px] font-bold flex items-center justify-center">{{ $unreadTotal }}</span>
                    @endif
                </a>

                <!-- Page Actions slot (Novo, Voltar, etc.) -->
                @isset($actions)
                    <div class="flex items-center gap-2 border-l border-gray-200 pl-4">
                        {{ $actions }}
                    </div>
                @endisset

                <!-- User Badge -->
                <div class="flex items-center gap-2 border-l border-gray-200 pl-4 text-xs font-medium text-gray-800">
                    <span class="hidden lg:block">Administrador</span>
                    <div class="w-6 h-6 rounded-full bg-[#0c0d0e] text-white flex items-center justify-center text-[10px] font-bold">
                        A
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Body -->
        <main class="flex-1 py-5 px-6 max-w-[1536px] w-full mx-auto">
            
            @if(session('status'))
                <div class="mb-6 rounded-lg border-l-4 border-[#C5A059] bg-white p-4 text-xs text-gray-800 border-t border-r border-b border-gray-200/80 shadow-xs">
                    {{ session('status') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-6 rounded-lg border-l-4 border-red-500 bg-white p-4 text-xs text-red-700 border-t border-r border-b border-gray-200/80 shadow-xs">
                    <ul class="list-disc list-inside space-y-1">
                        @foreach($errors->all() as $e)
                            <li>{{ $e }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{ $slot }}
        </main>

        <!-- Simple Footer matching Reference Image -->
        <footer class="mt-auto border-t border-gray-200/60 py-3 px-6 flex items-center justify-between text-[11px] text-gray-400">
            <p>ROX CMS © {{ date('Y') }} Todos os direitos reservados.</p>
            <p>Versão 1.0.0</p>
        </footer>
    </div>
</div>
    @stack('scripts')
</body>
</html>
