<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @php
        $pageSeo = \App\Models\PageSeo::forCurrentRoute();
        $seoTitle = $pageSeo?->title()
            ?: (app(\App\Support\PageContentTranslator::class)->translate((string) ($title ?? 'ROX Angola')) . ' - ' . __('common.meta.tagline'));
        $seoDescription = $pageSeo?->description() ?: __('common.meta.description');
        $seoKeywords = $pageSeo?->keywords ?: 'ROX, Angola, SUV Híbrido, Todo-o-Terreno, Carros de Luxo, ROX 01, ROX Adamas';
    @endphp
    <meta name="description" content="{{ $seoDescription }}">
    <meta name="keywords" content="{{ $seoKeywords }}">
    <title>{{ $seoTitle }}</title>
    <link rel="alternate" hreflang="pt" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="en" href="{{ url()->current() }}">
    <link rel="alternate" hreflang="x-default" href="{{ url()->current() }}">
    <link rel="icon" type="image/svg+xml" href="{{ asset('assets/logo.svg') }}">
    
    <!-- Scripts & Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- PDF.js library for rendering PDFs natively in HTML canvas modal -->
    <script src="{{ asset('js/pdf.min.js') }}"></script>
    <script>if(window.pdfjsLib) pdfjsLib.GlobalWorkerOptions.workerSrc = "{{ asset('js/pdf.worker.min.js') }}";</script>
    <!-- StPageFlip library for Heyzine 3D page flipbook magazine experience -->
    <script src="{{ asset('js/page-flip.browser.js') }}"></script>

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
        /* Conteúdo dos modais mais largo (só dentro dos painéis de modal) */
        [id$="-modal-panel"] .content-container { max-width: 1680px; padding-left: clamp(1.5rem, 4vw, 4rem); padding-right: clamp(1.5rem, 4vw, 4rem); }
        /* ADAMAS specs slider (telemóvel): specs em lista vertical à esquerda */
        .adamas-spec-mobile-body > div { display: block !important; text-align: left !important; }
        .adamas-spec-mobile-body > div > div { margin-bottom: 1.1rem; }
        .adamas-spec-mobile-body > div > div:last-child { margin-bottom: 0; }
        .adamas-spec-mobile-body p { text-align: left !important; }
        /* Robustez dos modais no telemóvel: scroll suave iOS + header/fechar sempre visíveis */
        [id$="-modal-panel"] { -webkit-overflow-scrolling: touch; }
        [id$="-modal-panel"] .sticky { position: -webkit-sticky; position: sticky; top: 0; }
        /* Padrão 60/40 (imagem larga / texto) em todas as linhas dos modais */
        @media (min-width: 768px) {
            [id$="-modal-panel"] .grid.md\:grid-cols-2 { grid-template-columns: repeat(5, minmax(0, 1fr)); }
            [id$="-modal-panel"] .grid.md\:grid-cols-2 > .aspect-video { grid-column: span 3 / span 3; }
            [id$="-modal-panel"] .grid.md\:grid-cols-2 > .bg-gray-100 { grid-column: span 2 / span 2; }
        }

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
        {!! app(\App\Support\PageContentTranslator::class)->translate($slot->toHtml()) !!}
    </main>

    @if(Request::is('rox-01'))
        <script src="{{ asset('js/rox01.js') }}?v={{ filemtime(public_path('js/rox01.js')) }}"></script>
    @endif

    <x-footer />

    <!-- WhatsApp Floating Button -->
    <a href="https://wa.me/244945110222?text={{ urlencode('Olá, tenho interesse no ROX.') }}" target="_blank" rel="noopener noreferrer" class="fixed bottom-6 right-6 z-50 w-14 h-14 bg-[#25D366] rounded-full flex items-center justify-center shadow-lg hover:bg-[#20bd5a] hover:scale-110 transition-all duration-300" aria-label="Contactar via WhatsApp">
        <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
    </a>

    <!-- Lead capture popup: shown once per browser session. -->
    <div id="lead-popup" class="fixed inset-0 z-[200] hidden items-center justify-center p-5 opacity-0 transition-opacity duration-300" style="background: rgba(0, 0, 0, 0.6); backdrop-filter: blur(4px);" role="dialog" aria-modal="true" aria-labelledby="lead-popup-title">
        <div class="lead-popup-panel relative w-full max-w-md translate-y-8 bg-white p-8 opacity-0 transition-all duration-300 md:p-10">
            <button type="button" id="lead-popup-close" class="absolute right-4 top-4 text-gray-400 transition-colors hover:text-black" aria-label="{{ __('common.lead_popup.close') }}">
                <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12" /></svg>
            </button>
            <div class="mb-6 text-center">
                <h3 id="lead-popup-title" class="mb-2 text-xl font-medium text-black md:text-2xl">{{ __('common.lead_popup.title') }}</h3>
                <p class="text-sm font-light text-gray-500">{{ __('common.lead_popup.description') }}</p>
            </div>
            <form id="lead-popup-form" class="space-y-4">
                <div>
                    <label for="lead-name" class="mb-1 block text-sm font-medium text-gray-700">{{ __('common.forms.name') }}</label>
                    <input type="text" id="lead-name" name="name" autocomplete="name" class="w-full rounded border-gray-300 bg-white px-4 py-2 shadow-sm focus:border-black focus:ring-black" required>
                </div>
                <div>
                    <label for="lead-phone" class="mb-1 block text-sm font-medium text-gray-700">{{ __('common.forms.phone') }}</label>
                    <input type="tel" id="lead-phone" name="phone" autocomplete="tel" class="w-full rounded border-gray-300 bg-white px-4 py-2 shadow-sm focus:border-black focus:ring-black" required>
                </div>
                <p id="lead-popup-error" class="hidden text-sm text-red-600" role="alert">{{ __('common.lead_popup.error') }}</p>
                <button type="submit" class="w-full px-4 py-3 text-sm font-medium uppercase tracking-widest text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">{{ __('common.lead_popup.submit') }}</button>
            </form>
            <div id="lead-popup-success" class="hidden py-6 text-center" role="status">
                <svg class="mx-auto mb-3 h-12 w-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" /></svg>
                <p class="text-lg font-medium text-black">{{ __('common.lead_popup.success_title') }}</p>
                <p class="mt-1 text-sm text-gray-500">{{ __('common.lead_popup.success_description') }}</p>
            </div>
        </div>
    </div>

    <!-- Dedicated 3D Flipbook Magazine Pop-up Viewer Modal -->
    <div id="pdf-modal" class="fixed inset-0 z-[9999] bg-black/95 backdrop-blur-md flex flex-col transition-all duration-300 opacity-0 pointer-events-none" style="display: none;" role="dialog" aria-modal="true">
        <!-- Top Fixed Header Bar (Always Top 0, Full Width, Fixed 56px) -->
        <header class="w-full h-[56px] min-h-[56px] bg-[#1c1c1c] border-b border-white/10 flex items-center justify-between px-3 sm:px-6 flex-shrink-0 z-50 text-white shadow-xl">
            <!-- Title & Subtitle -->
            <div class="flex items-center gap-2.5 sm:gap-3 min-w-0">
              
                <div class="min-w-0">
                    <h3 id="pdf-modal-title" class="text-xs sm:text-sm font-bold text-white tracking-wide truncate max-w-[120px] sm:max-w-none">Catálogo ROX</h3>
                    <p id="pdf-modal-subtitle" class="text-[11px] text-[#C5A059] font-medium hidden sm:block">Revista Digital 3D Interativa</p>
                </div>
            </div>

            <!-- Center Page Controls -->
            <div id="pdf-nav-controls" class="flex items-center gap-1 sm:gap-2 bg-white/5 border border-white/10 px-2 sm:px-3 py-1 rounded-lg text-xs">
                <button type="button" onclick="pdfPrevPage()" class="p-1 hover:bg-white/10 rounded text-gray-300 hover:text-white transition-colors" title="Página Anterior">
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                </button>
                <span class="text-gray-300 font-mono text-[11px] sm:text-xs px-1 sm:px-2 whitespace-nowrap"><span id="pdf-current-page" class="text-white font-bold">1</span> / <span id="pdf-total-pages" class="text-gray-400">0</span></span>
                <button type="button" onclick="pdfNextPage()" class="p-1 hover:bg-white/10 rounded text-gray-300 hover:text-white transition-colors" title="Próxima Página">
                    <svg class="w-3.5 h-3.5 sm:w-4 sm:h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                </button>
            </div>

            <!-- Right Action Buttons -->
            <div class="flex items-center gap-1.5 sm:gap-3 flex-shrink-0">
                <!-- Zoom Buttons -->
                <div class="flex items-center bg-white/5 border border-white/10 rounded-lg p-0.5 text-xs text-gray-300">
                    <button type="button" onclick="pdfZoom(-0.25)" class="px-1.5 sm:px-2 py-0.5 hover:bg-white/10 rounded transition-colors font-bold text-xs sm:text-sm" title="Reduzir Tamanho">-</button>
                    <span id="pdf-zoom-val" class="px-1 sm:px-1.5 font-mono text-[10px] sm:text-[11px] font-bold text-[#C5A059]">100%</span>
                    <button type="button" onclick="pdfZoom(0.25)" class="px-1.5 sm:px-2 py-0.5 hover:bg-white/10 rounded transition-colors font-bold text-xs sm:text-sm" title="Aumentar Tamanho (Zoom)">+</button>
                </div>

                <button type="button" onclick="togglePdfFullscreen()" class="hidden md:flex items-center gap-1.5 px-3 py-1.5 rounded-lg bg-white/10 hover:bg-white/20 text-gray-300 hover:text-white text-xs transition-colors" title="Ecrã Inteiro">
                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3.75v4.5m0-4.5h4.5m-4.5 0L9 9M3.75 20.25v-4.5m0 4.5h4.5m-4.5 0L9 15M20.25 3.75h-4.5m4.5 0v4.5m0-4.5L15 9m5.25 11.25h-4.5m4.5 0v-4.5m0 4.5L15 15"/></svg>
                    <span class="hidden lg:inline">Ecrã Inteiro</span>
                </button>

                <a id="pdf-modal-download" href="#" download class="inline-flex items-center gap-1.5 p-2 sm:px-3.5 sm:py-1.5 rounded-lg bg-[#C5A059] text-[#0c0d0e] text-xs font-bold hover:bg-[#b08e49] transition-all shadow-xs" title="Descarregar PDF">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M3 16.5v2.25A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75V16.5M16.5 12L12 16.5m0 0L7.5 12m4.5 4.5V3"/></svg>
                    <span class="hidden sm:inline">Descarregar</span>
                </a>

                <button type="button" onclick="closePdfModal()" class="w-7 h-7 sm:w-8 sm:h-8 rounded-lg bg-white/10 hover:bg-red-500 hover:text-white text-gray-300 flex items-center justify-center transition-all" title="Fechar (Esc)">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>
        </header>

        <!-- Main Viewport Body (Takes 100% of remaining height below header) -->
        <div id="pdf-modal-body" class="relative flex-1 w-full bg-[#0b0b0b] overflow-hidden flex flex-col items-center justify-center select-none">
            <!-- Loader -->
            <div id="pdf-modal-loader" class="my-auto flex flex-col items-center gap-3 text-gray-400 py-12">
                <div class="loader"></div>
                <p class="text-xs tracking-wider uppercase font-medium text-gray-300">A gerar revista digital 3D interativa...</p>
            </div>

            <!-- Stage Viewports -->
            <div id="pdf-stage-viewport" class="w-full h-full flex flex-col relative hidden overflow-hidden">
                <!-- Navigation Arrow Left -->
                <button type="button" onclick="pdfPrevPage()" id="pdf-arrow-prev" class="absolute left-2 sm:left-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-black/70 hover:bg-[#C5A059] text-white hover:text-black flex items-center justify-center transition-all shadow-2xl backdrop-blur-md group" title="Página Anterior">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 transform group-hover:-translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5"/></svg>
                </button>

                <!-- Main 3D Render Area -->
                <div id="pdf-render-area" class="w-full h-full flex overflow-auto p-2 sm:p-4"></div>

                <!-- Navigation Arrow Right -->
                <button type="button" onclick="pdfNextPage()" id="pdf-arrow-next" class="absolute right-2 sm:right-6 top-1/2 -translate-y-1/2 z-30 w-10 h-10 sm:w-12 sm:h-12 rounded-full bg-black/70 hover:bg-[#C5A059] text-white hover:text-black flex items-center justify-center transition-all shadow-2xl backdrop-blur-md group" title="Próxima Página">
                    <svg class="w-5 h-5 sm:w-6 sm:h-6 transform group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" stroke-width="2.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5"/></svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Frontend logic -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script>
        let pdfDocInstance = null;
        let pdfTotalPages = 0;
        let pdfCurrentPageNum = 1;
        let pdfZoomScale = 1.0;
        let pdfPageCanvases = [];
        let pageFlipInstance = null;
        let pdfSessionId = 0;

        window.openPdfModal = function(pdfUrl, title) {
            var modal = document.getElementById('pdf-modal');
            var downloadLink = document.getElementById('pdf-modal-download');
            var modalTitle = document.getElementById('pdf-modal-title');
            var loader = document.getElementById('pdf-modal-loader');
            var viewport = document.getElementById('pdf-stage-viewport');

            if (!modal) return;

            if (downloadLink) downloadLink.href = pdfUrl;
            if (title && modalTitle) modalTitle.textContent = title;

            if (viewport) viewport.classList.add('hidden');
            if (loader) loader.classList.remove('hidden');

            pdfCurrentPageNum = 1;
            pdfZoomScale = 1.0;
            updatePdfZoomDisplay();

            modal.style.display = 'flex';
            setTimeout(function() {
                modal.classList.remove('pointer-events-none');
                modal.classList.replace('opacity-0', 'opacity-100');
            }, 10);

            document.body.style.overflow = 'hidden';

            loadPdf(pdfUrl);
        };

        function loadPdf(url) {
            var loader = document.getElementById('pdf-modal-loader');
            var viewport = document.getElementById('pdf-stage-viewport');
            var renderArea = document.getElementById('pdf-render-area');

            var pdfLib = window.pdfjsLib || window['pdfjs-dist/build/pdf'] || window.pdfjs;

            function fallbackIframe() {
                if (loader) loader.classList.add('hidden');
                if (viewport) viewport.classList.remove('hidden');
                if (renderArea) {
                    renderArea.innerHTML = '<iframe src="' + url + '" class="w-full h-full border-0 bg-white rounded-xl shadow-2xl"></iframe>';
                }
            }

            if (!pdfLib) {
                fallbackIframe();
                return;
            }

            var currentSession = ++pdfSessionId;
            var RENDER_SCALE = 2.0; // 2x gives crisp typography with 56% less memory/load time
            var INITIAL_PAGES = 2;   // Render cover + first spread to open instantly

            pdfLib.getDocument({ url: url, disableRange: false, disableStream: false }).promise.then(function(pdf) {
                if (currentSession !== pdfSessionId) return;

                pdfDocInstance = pdf;
                pdfTotalPages = pdf.numPages;

                var totalEl = document.getElementById('pdf-total-pages');
                var currEl  = document.getElementById('pdf-current-page');
                if (totalEl) totalEl.textContent = pdfTotalPages;
                if (currEl)  currEl.textContent  = pdfCurrentPageNum;

                pdfPageCanvases = new Array(pdfTotalPages).fill(null);

                // Phase 1: Render first 2 pages to open viewer immediately (< 1.5s)
                var initialCount = Math.min(INITIAL_PAGES, pdfTotalPages);
                var initialPromises = [];
                for (var i = 1; i <= initialCount; i++) {
                    initialPromises.push(renderPage(pdf, i, RENDER_SCALE));
                }

                Promise.all(initialPromises).then(function(results) {
                    if (currentSession !== pdfSessionId) return;

                    results.forEach(function(r) {
                        pdfPageCanvases[r.pageNum - 1] = r;
                    });

                    if (loader) loader.classList.add('hidden');
                    if (viewport) viewport.classList.remove('hidden');

                    setTimeout(function() {
                        if (currentSession !== pdfSessionId) return;
                        render3DFlipbook();
                    }, 50);

                    // Phase 2: Stream remaining pages in background without blocking UI
                    loadRemainingPages(pdf, initialCount + 1, pdfTotalPages, RENDER_SCALE, currentSession);

                }).catch(function(err) {
                    console.error('Render error, using fallback:', err);
                    fallbackIframe();
                });

            }).catch(function(err) {
                console.error('PDF Load Error, using fallback:', err);
                fallbackIframe();
            });
        }

        function renderPage(pdf, pageNum, scale) {
            return pdf.getPage(pageNum).then(function(page) {
                var v = page.getViewport({ scale: scale });
                var canvas = document.createElement('canvas');
                var ctx = canvas.getContext('2d');
                canvas.height = v.height;
                canvas.width  = v.width;
                return page.render({ canvasContext: ctx, viewport: v }).promise.then(function() {
                    return { pageNum: pageNum, canvas: canvas, aspect: v.width / v.height };
                });
            });
        }

        function loadRemainingPages(pdf, from, total, scale, session) {
            if (from > total || session !== pdfSessionId) return;

            renderPage(pdf, from, scale).then(function(result) {
                if (session !== pdfSessionId) return;

                pdfPageCanvases[result.pageNum - 1] = result;

                // Update canvas directly in the live flipbook DOM
                var canvasEl = document.getElementById('pdf-page-canvas-' + result.pageNum);
                if (canvasEl) {
                    canvasEl.width = result.canvas.width;
                    canvasEl.height = result.canvas.height;
                    var ctx = canvasEl.getContext('2d');
                    ctx.drawImage(result.canvas, 0, 0);
                }

                // Next page with small delay to keep animations 60fps smooth
                setTimeout(function() {
                    loadRemainingPages(pdf, from + 1, total, scale, session);
                }, 60);
            }).catch(function(err) {
                console.warn('Erro a renderizar página ' + from + ':', err);
                setTimeout(function() {
                    loadRemainingPages(pdf, from + 1, total, scale, session);
                }, 60);
            });
        }

        function updatePdfZoomDisplay() {
            var el = document.getElementById('pdf-zoom-val');
            if (el) el.textContent = Math.round(pdfZoomScale * 100) + '%';
        }

        window.pdfZoom = function(delta) {
            pdfZoomScale = Math.min(3.0, Math.max(0.75, pdfZoomScale + delta));
            updatePdfZoomDisplay();
            render3DFlipbook();
        };

        function render3DFlipbook() {
            var renderArea = document.getElementById('pdf-render-area');
            var bodyEl = document.getElementById('pdf-modal-body');
            if (!renderArea || !pdfPageCanvases.length) return;

            if (pageFlipInstance) {
                try { pageFlipInstance.destroy(); } catch(e) {}
                pageFlipInstance = null;
            }

            renderArea.innerHTML = '';

            var bookContainer = document.createElement('div');
            bookContainer.id = 'st-flipbook-container';
            bookContainer.className = 'm-auto flex items-center justify-center flex-shrink-0';
            renderArea.appendChild(bookContainer);

            // Default aspect ratio from first available rendered page or standard A4
            var firstReady = pdfPageCanvases.find(function(p) { return p !== null; });
            var pageAspect = firstReady ? firstReady.aspect : (1 / 1.414);
            var refW = firstReady ? firstReady.canvas.width : 1200;
            var refH = firstReady ? firstReady.canvas.height : 1697;

            for (var i = 1; i <= pdfTotalPages; i++) {
                var pageDiv = document.createElement('div');
                pageDiv.className = 'page-slide bg-white overflow-hidden shadow-2xl rounded-sm';
                pageDiv.id = 'pdf-page-slide-' + i;

                var c = document.createElement('canvas');
                c.id = 'pdf-page-canvas-' + i;
                c.style.width = '100%';
                c.style.height = '100%';
                c.style.objectFit = 'contain';

                var p = pdfPageCanvases[i - 1];
                if (p && p.canvas) {
                    c.width = p.canvas.width;
                    c.height = p.canvas.height;
                    c.getContext('2d').drawImage(p.canvas, 0, 0);
                } else {
                    c.width = refW;
                    c.height = refH;
                    var ctx = c.getContext('2d');
                    ctx.fillStyle = '#f8f8f8';
                    ctx.fillRect(0, 0, refW, refH);
                    ctx.fillStyle = '#999999';
                    ctx.font = '28px sans-serif';
                    ctx.textAlign = 'center';
                    ctx.fillText('Página ' + i, refW / 2, refH / 2);
                }

                pageDiv.appendChild(c);
                bookContainer.appendChild(pageDiv);
            }

            if (window.St && window.St.PageFlip) {
                var stageH = (bodyEl && bodyEl.clientHeight > 200) ? bodyEl.clientHeight : (window.innerHeight * 0.82);
                var stageW = (bodyEl && bodyEl.clientWidth > 300) ? bodyEl.clientWidth : (window.innerWidth * 0.92);

                var isMobile = window.innerWidth < 768;

                var maxAvailH = Math.max(400, stageH - 40);
                var maxAvailW = Math.max(300, stageW - (isMobile ? 20 : 80));

                var pw, ph;
                if (isMobile) {
                    ph = maxAvailH;
                    pw = ph * pageAspect;
                    if (pw > maxAvailW) {
                        pw = maxAvailW;
                        ph = pw / pageAspect;
                    }
                } else {
                    // Desktop: 2 pages side-by-side spread
                    ph = maxAvailH;
                    pw = ph * pageAspect;
                    var totalSpreadW = pw * 2;
                    if (totalSpreadW > maxAvailW) {
                        pw = maxAvailW / 2;
                        ph = pw / pageAspect;
                    }
                }

                pw = Math.round(pw * pdfZoomScale);
                ph = Math.round(ph * pdfZoomScale);

                pageFlipInstance = new St.PageFlip(bookContainer, {
                    width: pw,
                    height: ph,
                    size: 'fixed',
                    minWidth: 200,
                    maxWidth: 2500,
                    minHeight: 300,
                    maxHeight: 3500,
                    maxShadowOpacity: 0.7,
                    showCover: true,
                    mobileScrollSupport: false,
                    useMouseEvents: true,
                    swipeDistance: 30
                });

                pageFlipInstance.loadFromHTML(document.querySelectorAll('#st-flipbook-container .page-slide'));
                pageFlipInstance.flip(pdfCurrentPageNum - 1);

                pageFlipInstance.on('flip', function(e) {
                    pdfCurrentPageNum = e.data + 1;
                    var el = document.getElementById('pdf-current-page');
                    if (el) el.textContent = pdfCurrentPageNum;
                });
            }
        }

        window.pdfPrevPage = function() {
            if (pageFlipInstance) pageFlipInstance.flipPrev();
        };

        window.pdfNextPage = function() {
            if (pageFlipInstance) pageFlipInstance.flipNext();
        };

        window.togglePdfFullscreen = function() {
            var panel = document.getElementById('pdf-modal-panel');
            if (!document.fullscreenElement) {
                if (panel.requestFullscreen) panel.requestFullscreen();
            } else {
                if (document.exitFullscreen) document.exitFullscreen();
            }
        };

        window.closePdfModal = function() {
            var modal = document.getElementById('pdf-modal');
            var renderArea = document.getElementById('pdf-render-area');

            pdfSessionId++; // Invalidate ongoing background page renders

            if (!modal) return;

            if (document.fullscreenElement && document.exitFullscreen) {
                document.exitFullscreen().catch(function() {});
            }

            modal.classList.replace('opacity-100', 'opacity-0');
            document.body.style.overflow = '';

            setTimeout(function() {
                modal.style.display = 'none';
                modal.classList.add('pointer-events-none');
                if (renderArea) renderArea.innerHTML = '';
                if (pageFlipInstance) {
                    try { pageFlipInstance.destroy(); } catch(e) {}
                    pageFlipInstance = null;
                }
            }, 300);
        };


        document.addEventListener('DOMContentLoaded', function() {
            var modal = document.getElementById('pdf-modal');
            if (modal) {
                modal.addEventListener('click', function(e) {
                    if (e.target === modal) closePdfModal();
                });
            }
            document.addEventListener('keydown', function(e) {
                if (e.key === 'Escape' && modal && !modal.classList.contains('pointer-events-none')) {
                    closePdfModal();
                }
                if (modal && !modal.classList.contains('pointer-events-none')) {
                    if (e.key === 'ArrowLeft') pdfPrevPage();
                    if (e.key === 'ArrowRight') pdfNextPage();
                }
            });
            window.addEventListener('resize', function() {
                var modal = document.getElementById('pdf-modal');
                if (modal && modal.style.display !== 'none' && !modal.classList.contains('pointer-events-none')) {
                    render3DFlipbook();
                }
            });
        });

        (function() {
            var loader = document.getElementById('page-loader');
            setTimeout(function() { loader.classList.add('hide'); }, 3000);
            document.querySelectorAll('a[href]').forEach(function(link) {
                var href = link.getAttribute('href') || '';
                if (link.hostname === window.location.hostname && !href.startsWith('#') && !href.endsWith('.pdf') && link.target !== '_blank' && !link.hasAttribute('onclick')) {
                    link.addEventListener('click', function() { loader.classList.remove('hide'); });
                }
            });
        })();
        (function() {
            var popup = document.getElementById('lead-popup');
            var closeButton = document.getElementById('lead-popup-close');
            var form = document.getElementById('lead-popup-form');
            var panel = popup.querySelector('.lead-popup-panel');
            var success = document.getElementById('lead-popup-success');
            var error = document.getElementById('lead-popup-error');
            var dismissedKey = 'rox-lead-popup-dismissed';

            function hidePopup() {
                sessionStorage.setItem(dismissedKey, 'true');
                popup.classList.replace('opacity-100', 'opacity-0');
                panel.classList.replace('translate-y-0', 'translate-y-8');
                panel.classList.replace('opacity-100', 'opacity-0');
                window.setTimeout(function() {
                    popup.classList.add('hidden');
                    popup.classList.remove('flex');
                }, 300);
            }

            function showPopup() {
                if (sessionStorage.getItem(dismissedKey) === 'true') return;
                popup.classList.remove('hidden');
                popup.classList.add('flex');
                window.requestAnimationFrame(function() {
                    popup.classList.replace('opacity-0', 'opacity-100');
                    panel.classList.replace('translate-y-8', 'translate-y-0');
                    panel.classList.replace('opacity-0', 'opacity-100');
                    closeButton.focus();
                });
            }

            // Abre o modal APENAS quando o utilizador tenta sair da página (exit-intent),
            // e nunca ao carregar a página.
            var triggered = false;
            function triggerExitIntent() {
                if (triggered || sessionStorage.getItem(dismissedKey) === 'true') return;
                triggered = true;
                showPopup();
            }
            // Desktop: o rato sai pelo topo da janela (em direção à barra/fechar do navegador).
            document.addEventListener('mouseout', function(event) {
                if (event.clientY <= 0 && !event.relatedTarget) {
                    triggerExitIntent();
                }
            });
            // Mobile/tablet (sem rato): o separador fica oculto — troca de app/aba ou botão voltar.
            document.addEventListener('visibilitychange', function() {
                if (document.visibilityState === 'hidden') triggerExitIntent();
            });

            closeButton.addEventListener('click', hidePopup);
            popup.addEventListener('click', function(event) { if (event.target === popup) hidePopup(); });
            document.addEventListener('keydown', function(event) { if (event.key === 'Escape' && !popup.classList.contains('hidden')) hidePopup(); });

            form.addEventListener('submit', function(event) {
                event.preventDefault();
                error.classList.add('hidden');
                fetch('{{ route("leads.store") }}', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json', 'Accept': 'application/json', 'X-CSRF-TOKEN': '{{ csrf_token() }}' },
                    body: JSON.stringify({ name: document.getElementById('lead-name').value, phone: document.getElementById('lead-phone').value })
                }).then(function(response) {
                    if (!response.ok) throw new Error('Lead submission failed');
                    form.classList.add('hidden');
                    success.classList.remove('hidden');
                    window.setTimeout(hidePopup, 2500);
                }).catch(function() { error.classList.remove('hidden'); });
            });
        })();
    </script>
</body>
</html>
