<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="ROX Angola - SUV Híbrido Premium Todo-o-Terreno. Redefina o padrão para veículos todo-o-terreno inteligentes de luxo.">
    <meta name="keywords" content="ROX, Angola, SUV Híbrido, Todo-o-Terreno, Carros de Luxo, ROX 01, ROX Adamas">
    <title>{{ $title ?? 'ROX Angola' }} - Redefina o padrão para veículos todo-o-terreno inteligentes de luxo</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/logo.svg') }}">
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        /* Custom animations & utilities */
        body { font-family: 'Inter', sans-serif; overflow-x: hidden; }

        .hero-bg { background-image: url('{{ asset('assets/banner.jpg') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; }
        .cap-bg { background-image: url('{{ asset('assets/banner1.jpg') }}'); background-size: cover; background-position: center; }
        .services-bg { background-image: url('{{ asset('assets/services.jpg') }}'); background-size: cover; background-position: center; }
        .life-bg { background-image: url('{{ asset('assets/life.jpg') }}'); background-size: cover; background-position: center; }
        .grid-item-1 { background-image: url('{{ asset('assets/88ef23f78d91433889df5e1459c58de2.jpg') }}'); background-size: cover; background-position: center; }
        .grid-item-2 { background-image: url('{{ asset('assets/e865962acc504b9398646156ef1cb147.jpg') }}'); background-size: cover; background-position: center; }
        .grid-item-3 { background-image: url('{{ asset('assets/46a3f85076a74688b40e66e5a515cb8f.jpg') }}'); background-size: cover; background-position: center; }

        .grid-overlay::before { content: ''; position: absolute; inset: 0; background: linear-gradient(to top, rgba(0, 0, 0, 0.7), transparent); z-index: 1; }
        .grid-content-z { z-index: 2; position: relative; }

        .animate-up { opacity: 0; transform: translateY(30px); transition: all 0.8s ease-out; }
        .animate-up.visible { opacity: 1; transform: translateY(0); }

        @keyframes fadeInUp { to { opacity: 1; transform: translateY(0); } }
        .hero-animate { opacity: 0; transform: translateY(20px); animation: fadeInUp 1s forwards 0.5s; }

        .tab-btn { position: relative; }
        .tab-btn::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 100%; height: 2px; background-color: transparent; transition: background-color 0.3s ease; }
        .tab-btn.active { color: #000; }
        .tab-btn.active::after { background-color: #000; }

        /* Glassmorphism navbar */
        .nav-glass { background: rgba(0, 0, 0, 0.1); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border-color: transparent; }
        #navbar.scrolled.nav-transparent { background: #fff; backdrop-filter: none; -webkit-backdrop-filter: none; border-color: #e5e7eb; }

        /* Align text inside full-width sections with the global container */
        .container-align-left { padding-left: max(1.5rem, calc((100vw - 1600px) / 2 + 2rem)); }
        .container-align-right { padding-right: max(1.5rem, calc((100vw - 1600px) / 2 + 2rem)); }

        /* When navbar is scrolled, always show dark logo */
        #navbar.scrolled .logo-default { display: none !important; }
        #navbar.scrolled .logo-hover { display: block !important; }
    </style>
</head>

<body class="bg-white text-gray-800 antialiased">

    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    <!-- Frontend logic -->
    <script src="{{ asset('js/main.js') }}"></script>
</body>
</html>
