<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ __('common.meta.description') }}">
    <meta name="keywords" content="ROX, Angola, SUV Híbrido, Todo-o-Terreno, Carros de Luxo, ROX 01, ROX Adamas">
    <title>{{ $title ?? 'ROX Angola' }} - {{ __('common.meta.tagline') }}</title>
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/logo.svg') }}">
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        @font-face { font-family: 'TTNormsPro'; src: url('{{ asset('assets/fonts/TTNormsProRegular.otf') }}') format('opentype'); font-weight: 400; font-style: normal; font-display: swap; }
        @font-face { font-family: 'TTNormsPro'; src: url('{{ asset('assets/fonts/TTNormsProMedium.otf') }}') format('opentype'); font-weight: 500; font-style: normal; font-display: swap; }

        /* Custom animations & utilities */
        :root {
            --rox-dune-yellow: #C5A059;
            --site-gutter: clamp(1.5rem, 6vw, 10rem);
        }
        body { font-family: 'TTNormsPro', 'Segoe UI', 'Helvetica Neue', Arial, sans-serif; overflow-x: hidden; }
        .site-container { max-width: 1920px; margin-left: auto; margin-right: auto; padding-left: var(--site-gutter); padding-right: var(--site-gutter); }
        .content-container { max-width: 1280px; margin-left: auto; margin-right: auto; padding-left: var(--site-gutter); padding-right: var(--site-gutter); }

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
        @keyframes heroSlideUp { to { opacity: 1; transform: translateY(0); } }
        .hero-animate { opacity: 0; transform: translateY(20px); animation: fadeInUp 1s forwards 0.5s; }

        .tab-btn { position: relative; }
        .tab-btn::after { content: ''; position: absolute; bottom: -2px; left: 0; width: 100%; height: 2px; background-color: transparent; transition: background-color 0.3s ease; }
        .tab-btn.active { color: #000; }
        .tab-btn.active::after { background-color: #000; }

        /* Glassmorphism navbar */
        .nav-glass { background: rgba(0, 0, 0, 0.1); backdrop-filter: blur(16px); -webkit-backdrop-filter: blur(16px); border-color: transparent; }
        #navbar.scrolled.nav-transparent { background: #fff; backdrop-filter: none; -webkit-backdrop-filter: none; border-color: #e5e7eb; }

        /* Align text inside full-width sections with the global container */
        .container-align-left { padding-left: max(1.5rem, calc((100vw - 1920px) / 2 + 2rem)); }
        .container-align-right { padding-right: max(1.5rem, calc((100vw - 1920px) / 2 + 2rem)); }

        /* When navbar is scrolled or mega menu is open, show dark logo + white bg */
        #navbar.scrolled .logo-default { display: none !important; }
        #navbar.scrolled .logo-hover { display: block !important; }
        #navbar.mega-hover.nav-transparent { background: #fff; backdrop-filter: none; -webkit-backdrop-filter: none; border-color: #e5e7eb; color: #000; }
        #navbar.mega-hover .logo-default { display: none !important; }
        #navbar.mega-hover .logo-hover { display: block !important; }

        /* Spec slider arrows hover */
        .adamas-spec-arrow:hover { background: rgba(255,255,255,0.35) !important; }

        /* Page transition loader */
        #page-loader { position: fixed; inset: 0; z-index: 9999; background: #fff; display: flex; align-items: center; justify-content: center; transition: opacity 0.4s ease-out; }
        #page-loader.hide { opacity: 0; pointer-events: none; }
        .loader { width: 48px; height: 48px; border: 5px dotted var(--rox-dune-yellow); border-radius: 50%; display: inline-block; box-sizing: border-box; animation: rotation 2s linear infinite; }
        @keyframes rotation { 0% { transform: rotate(0deg); } 100% { transform: rotate(360deg); } }
    </style>
</head>

<body class="bg-white text-gray-800 antialiased">

    <!-- Page Transition Loader -->
    <div id="page-loader">
        <span class="loader"></span>
    </div>

    <x-navbar />

    <main>
        {{ $slot }}
    </main>

    <x-footer />

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/244945110222?text={{ urlencode('Olá, tenho interesse no ROX.') }}" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#25D366] rounded-full flex items-center justify-center shadow-lg hover:bg-[#20bd5a] hover:scale-110 transition-all duration-300" aria-label="Contactar via WhatsApp">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>

    <!-- Frontend logic -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        (function() {
            var loader = document.getElementById('page-loader');
            setTimeout(function() { loader.classList.add('hide'); }, 3000);
            document.querySelectorAll('a[href]').forEach(function(link) {
                if (link.hostname === window.location.hostname && !link.getAttribute('href').startsWith('#')) {
                    link.addEventListener('click', function() { loader.classList.remove('hide'); });
                }
            });
        })();
    </script>
</body>
</html>
