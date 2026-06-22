<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-gray-50">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ROX Admin') }} - CMS</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        
        <style>
            body { font-family: 'Inter', sans-serif; }
            [x-cloak] { display: none !important; }
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full font-sans antialiased text-gray-900" x-data="{ sidebarOpen: false }">
        
        <!-- Mobile Sidebar backdrop -->
        <div x-show="sidebarOpen" class="relative z-40 lg:hidden" x-cloak>
            <div x-show="sidebarOpen" x-transition.opacity class="fixed inset-0 bg-gray-900/80"></div>
            
            <div class="fixed inset-0 flex z-40">
                <div x-show="sidebarOpen" x-transition:enter="transition ease-in-out duration-300 transform" x-transition:enter-start="-translate-x-full" x-transition:enter-end="translate-x-0" x-transition:leave="transition ease-in-out duration-300 transform" x-transition:leave-start="translate-x-0" x-transition:leave-end="-translate-x-full" class="relative flex-1 flex flex-col max-w-xs w-full bg-gray-900">
                    
                    <div class="absolute top-0 right-0 -mr-12 pt-2">
                        <button type="button" @click="sidebarOpen = false" class="ml-1 flex items-center justify-center h-10 w-10 rounded-full focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white">
                            <span class="sr-only">Fechar barra lateral</span>
                            <svg class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>

                    <div class="flex-1 h-0 pt-5 pb-4 overflow-y-auto">
                        <div class="flex-shrink-0 flex items-center px-4">
                            <a href="{{ route('dashboard') }}">
                                <img src="{{ asset('assets/logo-w.svg') }}" alt="ROX Logo" class="h-6">
                            </a>
                        </div>
                        <nav class="mt-8 px-4 space-y-1">
                            @include('layouts.navigation-links')
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!-- Desktop Sidebar -->
        <div class="hidden lg:flex lg:w-72 lg:flex-col lg:fixed lg:inset-y-0">
            <div class="flex-1 flex flex-col min-h-0 bg-gray-900">
                <div class="flex-1 flex flex-col pt-6 pb-4 overflow-y-auto">
                    <div class="flex items-center flex-shrink-0 px-6">
                        <a href="{{ route('dashboard') }}">
                            <img src="{{ asset('assets/logo-w.svg') }}" alt="ROX Logo" class="h-6">
                        </a>
                    </div>
                    <nav class="mt-8 flex-1 px-4 space-y-1">
                        @include('layouts.navigation-links')
                    </nav>
                </div>
                
                <div class="flex-shrink-0 flex bg-gray-800 p-4">
                    <form method="POST" action="{{ route('logout') }}" class="w-full">
                        @csrf
                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="flex-shrink-0 w-full group block text-gray-300 hover:text-white transition-colors">
                            <div class="flex items-center">
                                <div class="w-9 h-9 rounded-full bg-gray-700 text-white flex items-center justify-center text-sm font-bold uppercase shadow-inner">
                                    {{ substr(Auth::user()->name, 0, 1) }}
                                </div>
                                <div class="ml-3">
                                    <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
                                    <p class="text-xs font-medium text-gray-400 group-hover:text-gray-300 flex items-center gap-1">
                                        <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                        Terminar Sessão
                                    </p>
                                </div>
                            </div>
                        </a>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Column -->
        <div class="lg:pl-72 flex flex-col flex-1 h-screen">
            <!-- Top Header -->
            <div class="sticky top-0 z-10 flex-shrink-0 flex h-16 bg-white border-b border-gray-200 shadow-sm">
                <button type="button" @click="sidebarOpen = true" class="px-4 border-r border-gray-200 text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-black lg:hidden">
                    <span class="sr-only">Abrir barra lateral</span>
                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25H12" />
                    </svg>
                </button>
                <div class="flex-1 px-4 sm:px-6 lg:px-8 flex justify-between">
                    <div class="flex-1 flex items-center">
                        @isset($header)
                            {{ $header }}
                        @endisset
                    </div>
                    <div class="ml-4 flex items-center md:ml-6">
                        <a href="{{ route('home') }}" target="_blank" class="text-sm font-medium text-gray-500 hover:text-black flex items-center gap-2 transition-colors bg-white hover:bg-gray-50 py-1.5 px-3 rounded-md border border-gray-300 shadow-sm">
                            <svg class="w-4 h-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                            Ver Site
                        </a>
                    </div>
                </div>
            </div>

            <!-- Main Content -->
            <main class="flex-1 overflow-y-auto bg-gray-50">
                <div class="py-8 px-4 sm:px-6 lg:px-8 max-w-7xl mx-auto">
                    {{ $slot }}
                </div>
            </main>
        </div>

    </body>
</html>
