<!-- Desktop Navbar -->
<nav class="fixed w-full z-50 transition-all duration-300 {{ Request::is('/', 'rox-01', 'rox-adamas', 'catalogo', 'concessionaria', 'showroom', 'revendedores', 'servicos', 'servicos/*', 'sobre/*', 'contactos') ? 'nav-glass border-b text-white nav-transparent' : 'bg-white border-b border-gray-200 text-black' }}" id="navbar">
    <div class="site-container flex items-center justify-between h-[60px]">
        <!-- Left: Logo + Menu -->
        <div class="flex items-center gap-8 lg:gap-12">
            <!-- Logo + Angola -->
            <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3">
                @if(Request::is('/', 'rox-01', 'rox-adamas', 'catalogo', 'concessionaria', 'showroom', 'revendedores', 'servicos', 'servicos/*', 'sobre/*', 'contactos'))
                    <img src="{{ asset('assets/logo-full-w.svg') }}" alt="ROX" class="h-5 logo-default">
                    <img src="{{ asset('assets/logo-full.svg') }}" alt="ROX" class="h-5 logo-hover hidden">
                    <span class="text-[11px] font-medium tracking-[3px] uppercase opacity-70 logo-default">Angola</span>
                    <span class="text-[11px] font-medium tracking-[3px] uppercase text-gray-500 logo-hover hidden">Angola</span>
                @else
                    <img src="{{ asset('assets/logo-full.svg') }}" alt="ROX" class="h-5">
                    <span class="text-[11px] font-medium tracking-[3px] uppercase text-gray-500">Angola</span>
                @endif
            </a>

            <!-- Menu items -->
            <div class="hidden md:flex items-center space-x-8 lg:space-x-10 text-[13px] font-medium">
            <div class="relative nav-item" data-has-mega="modelos">
                <span class="group relative pb-1 cursor-pointer transition-colors">{{ __('common.nav.models') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('rox-01', 'rox-adamas', 'catalogo') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></span>
            </div>
            <div class="relative nav-item" data-has-mega="concessionaria">
                <span class="group relative pb-1 cursor-pointer transition-colors">{{ __('common.nav.concessionaria') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('concessionaria', 'showroom') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></span>
            </div>
            <a href="{{ route('revendedores') }}" class="group relative pb-1 transition-colors nav-item">{{ __('common.nav.dealers') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('revendedores') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            <div class="relative nav-item" data-has-mega="servicos">
                <span class="group relative pb-1 cursor-pointer transition-colors">{{ __('common.nav.services') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('servicos', 'servicos/*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></span>
            </div>
            <div class="relative nav-item" data-has-mega="sobre">
                <span class="group relative pb-1 cursor-pointer transition-colors">{{ __('common.nav.about') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('sobre/*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></span>
            </div>
            <a href="{{ route('contactos') }}" class="group relative pb-1 transition-colors nav-item">{{ __('common.nav.contacts') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('contactos') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            </div>
        </div>

        <!-- Right: Test Drive + Switcher + Mobile toggle -->
        <div class="flex items-center gap-5 lg:gap-6">
            <div class="hidden md:flex items-center gap-5 lg:gap-6">
                @if(Request::is('rox-01'))
                    <a href="{{ route('contactos', ['modelo' => 'ROX 01', 'intencao' => 'Test Drive']) }}" class="px-5 py-2 text-xs tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">{{ __('common.nav.test_drive') }}</a>
                @elseif(Request::is('rox-adamas'))
                    <a href="{{ route('contactos', ['modelo' => 'ROX ADAMAS', 'intencao' => 'Test Drive']) }}" class="px-5 py-2 text-xs tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">{{ __('common.nav.test_drive') }}</a>
                @endif
                <x-lang-switcher variant="header" />
            </div>
            <button id="mobile-menu" aria-label="Abrir menu" class="md:hidden flex flex-col justify-center items-center gap-[5px] w-[25px] cursor-pointer">
                <span class="w-full h-[3px] bg-current transition-colors duration-300 bar"></span>
                <span class="w-full h-[3px] bg-current transition-colors duration-300 bar"></span>
                <span class="w-full h-[3px] bg-current transition-colors duration-300 bar"></span>
            </button>
        </div>
    </div>
</nav>

<!-- Mega Menu Modelos -->
<div id="mega-modelos" class="mega-panel fixed top-[60px] left-0 w-full z-[49] bg-gray-100 border-b border-gray-200 overflow-hidden pointer-events-none" style="max-height: 0; opacity: 0; transition: max-height 0.4s cubic-bezier(0.25, 0.1, 0.25, 1), opacity 0.3s ease;">
    <div class="site-container py-6 md:py-8">
        <div class="grid grid-cols-3 gap-4 md:gap-6" style="max-width: 680px;">
            <a href="{{ route('rox-adamas') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-2 md:mb-3">
                    <img src="{{ asset('assets/banner-adamas.avif') }}" alt="ROX ADAMAS" class="w-full h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-xs md:text-[13px] font-normal text-black mb-0.5">{{ __('common.nav.rox_adamas') }}</h3>
                <p class="text-[10px] md:text-[11px] text-gray-400 font-light leading-snug">{{ __('common.nav.rox_adamas_desc') }}</p>
            </a>
            <a href="{{ route('rox01') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-2 md:mb-3">
                    <img src="{{ asset('assets/banner2.jpg') }}" alt="ROX 01" class="w-full h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-xs md:text-[13px] font-normal text-black mb-0.5">{{ __('common.nav.rox_01') }}</h3>
                <p class="text-[10px] md:text-[11px] text-gray-400 font-light leading-snug">{{ __('common.nav.rox_01_desc') }}</p>
            </a>
            <a href="{{ route('catalogo') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-2 md:mb-3">
                    <img src="{{ asset('assets/banner1.jpg') }}" alt="Catálogo" class="w-full h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-xs md:text-[13px] font-normal text-black mb-0.5">{{ __('common.nav.catalog_title') }}</h3>
                <p class="text-[10px] md:text-[11px] text-gray-400 font-light leading-snug">{{ __('common.nav.catalog_desc') }}</p>
            </a>
        </div>
    </div>
</div>

<!-- Mega Menu Concessionária -->
<div id="mega-concessionaria" class="mega-panel fixed top-[60px] left-0 w-full z-[49] bg-gray-100 border-b border-gray-200 overflow-hidden pointer-events-none" style="max-height: 0; opacity: 0; transition: max-height 0.4s cubic-bezier(0.25, 0.1, 0.25, 1), opacity 0.3s ease;">
    <div class="site-container py-6 md:py-8">
        <div class="grid grid-cols-2 gap-4 md:gap-6" style="max-width: 480px;">
            <a href="{{ route('concessionaria') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-2 md:mb-3">
                    <img src="{{ asset('assets/dealer.jpg') }}" alt="OCTA Mobil" class="w-full h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-xs md:text-[13px] font-normal text-black mb-0.5">{{ __('common.nav.octa_mobil') }}</h3>
                <p class="text-[10px] md:text-[11px] text-gray-400 font-light leading-snug">{{ __('common.nav.octa_mobil_desc') }}</p>
            </a>
            <a href="{{ route('showroom') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-2 md:mb-3">
                    <img src="{{ asset('assets/showroom.jpg') }}" alt="Showroom" class="w-full h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-xs md:text-[13px] font-normal text-black mb-0.5">{{ __('common.nav.showroom') }}</h3>
                <p class="text-[10px] md:text-[11px] text-gray-400 font-light leading-snug">{{ __('common.nav.showroom_desc') }}</p>
            </a>
        </div>
    </div>
</div>

<!-- Mega Menu Serviços -->
<div id="mega-servicos" class="mega-panel fixed top-[60px] left-0 w-full z-[49] bg-gray-100 border-b border-gray-200 overflow-hidden pointer-events-none" style="max-height: 0; opacity: 0; transition: max-height 0.4s cubic-bezier(0.25, 0.1, 0.25, 1), opacity 0.3s ease;">
    <div class="site-container py-6 md:py-8">
        <div class="flex gap-8 lg:gap-12">
            <a href="{{ route('servicos.agendamento') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-2 md:mb-3">
                    <img src="{{ asset('assets/services.jpg') }}" alt="Serviço por Agendamento" class="w-[160px] md:w-[180px] h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-xs md:text-[13px] font-normal text-black mb-0.5">{{ __('common.nav.scheduling') }}</h3>
                <p class="text-[10px] md:text-[11px] text-gray-400 font-light leading-snug">{{ __('common.nav.scheduling_desc') }}</p>
            </a>
            <a href="{{ route('servicos.apoio-tecnico') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-2 md:mb-3">
                    <img src="{{ asset('assets/services-ver.jpg') }}" alt="Apoio Técnico" class="w-[160px] md:w-[180px] h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-xs md:text-[13px] font-normal text-black mb-0.5">{{ __('common.nav.support') }}</h3>
                <p class="text-[10px] md:text-[11px] text-gray-400 font-light leading-snug">{{ __('common.nav.support_desc') }}</p>
            </a>
            <div class="flex flex-col gap-3 py-1">
                <a href="{{ route('servicos.pecas-acessorios') }}" class="text-[13px] font-medium text-gray-600 hover:text-black transition-colors">{{ __('common.nav.parts') }}</a>
                <a href="{{ route('servicos.manual-instrucoes') }}" class="text-[13px] font-medium text-gray-600 hover:text-black transition-colors">{{ __('common.nav.manual') }}</a>
            </div>
        </div>
    </div>
</div>

<!-- Mega Menu Sobre Nós -->
<div id="mega-sobre" class="mega-panel fixed top-[60px] left-0 w-full z-[49] bg-gray-100 border-b border-gray-200 overflow-hidden pointer-events-none" style="max-height: 0; opacity: 0; transition: max-height 0.4s cubic-bezier(0.25, 0.1, 0.25, 1), opacity 0.3s ease;">
    <div class="site-container py-6 md:py-8">
        <div class="flex gap-8 lg:gap-12">
            <a href="{{ route('sobre.marca') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-2 md:mb-3">
                    <img src="{{ asset('assets/banner.jpg') }}" alt="A Marca" class="w-[160px] md:w-[180px] h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-xs md:text-[13px] font-normal text-black">{{ __('common.nav.brand') }}</h3>
            </a>
            <div class="flex flex-col gap-3 py-1">
                <a href="{{ route('sobre.historia') }}" class="text-[13px] font-medium text-gray-600 hover:text-black transition-colors">{{ __('common.nav.history') }}</a>
                <a href="{{ route('sobre.comunidade') }}" class="text-[13px] font-medium text-gray-600 hover:text-black transition-colors">{{ __('common.nav.community') }}</a>
            </div>
        </div>
    </div>
</div>

<!-- Sidebar Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-[90] hidden opacity-0 transition-opacity duration-300"></div>

<!-- Mobile Sidebar -->
<div id="mobile-sidebar" class="fixed inset-y-0 left-0 w-[85%] max-w-sm bg-[#f4f6f9] z-[100] transform -translate-x-full transition-transform duration-300 flex flex-col justify-between shadow-2xl">
    <div>
        <div class="flex justify-between items-center p-6 bg-white">
            <button id="close-sidebar" aria-label="Fechar menu" class="text-gray-400 hover:text-black">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            <div class="flex items-center gap-2">
                <img src="{{ asset('assets/logo-full.svg') }}" alt="ROX Logo" class="h-4">
                <span class="text-[10px] font-medium tracking-[3px] uppercase text-gray-400">Angola</span>
            </div>
            <x-lang-switcher variant="header" />
        </div>
        <nav class="flex flex-col p-8 gap-8 bg-[#f4f6f9]">
            <!-- Modelos -->
            <div>
                <span class="text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">{{ __('common.nav.models') }}</span>
                <div class="flex flex-col gap-4 mt-4 pl-4 border-l border-gray-300">
                    <a href="{{ route('rox-adamas') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('rox-adamas') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.rox_adamas') }}</a>
                    <a href="{{ route('rox01') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('rox-01') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.rox_01') }}</a>
                    <a href="{{ route('catalogo') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('catalogo') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.catalog') }}</a>
                </div>
            </div>
            <!-- Concessionária -->
            <div>
                <span class="text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">{{ __('common.nav.concessionaria') }}</span>
                <div class="flex flex-col gap-4 mt-4 pl-4 border-l border-gray-300">
                    <a href="{{ route('concessionaria') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('concessionaria') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.octa_mobil') }}</a>
                    <a href="{{ route('showroom') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('showroom') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.showroom') }}</a>
                </div>
            </div>
            <a href="{{ route('revendedores') }}" class="group relative text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">{{ __('common.nav.dealers') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('revendedores') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            <!-- Serviços -->
            <div>
                <span class="text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">{{ __('common.nav.services') }}</span>
                <div class="flex flex-col gap-4 mt-4 pl-4 border-l border-gray-300">
                    <a href="{{ route('servicos.agendamento') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('servicos/agendamento') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.scheduling_short') }}</a>
                    <a href="{{ route('servicos.apoio-tecnico') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('servicos/apoio-tecnico') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.support_short') }}</a>
                    <a href="{{ route('servicos.pecas-acessorios') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('servicos/pecas-acessorios') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.parts') }}</a>
                    <a href="{{ route('servicos.manual-instrucoes') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('servicos/manual-instrucoes') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.manual') }}</a>
                </div>
            </div>
            <!-- Sobre Nós -->
            <div>
                <span class="text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">{{ __('common.nav.about') }}</span>
                <div class="flex flex-col gap-4 mt-4 pl-4 border-l border-gray-300">
                    <a href="{{ route('sobre.marca') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('sobre/marca') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.brand') }}</a>
                    <a href="{{ route('sobre.historia') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('sobre/historia') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.history') }}</a>
                    <a href="{{ route('sobre.comunidade') }}" class="text-[12px] tracking-widest uppercase font-medium {{ Request::is('sobre/comunidade') ? 'text-black' : 'text-gray-500' }} hover:text-black transition-colors">{{ __('common.nav.community') }}</a>
                </div>
            </div>
            <a href="{{ route('contactos') }}" class="group relative text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">{{ __('common.nav.contacts') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('contactos') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            @if(Request::is('rox-01'))
                <a href="{{ route('contactos', ['modelo' => 'ROX 01', 'intencao' => 'Test Drive']) }}" class="mt-2 px-5 py-3 text-[13px] tracking-widest uppercase font-medium text-white text-center transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">{{ __('common.nav.test_drive') }}</a>
            @elseif(Request::is('rox-adamas'))
                <a href="{{ route('contactos', ['modelo' => 'ROX ADAMAS', 'intencao' => 'Test Drive']) }}" class="mt-2 px-5 py-3 text-[13px] tracking-widest uppercase font-medium text-white text-center transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">{{ __('common.nav.test_drive') }}</a>
            @endif
        </nav>
    </div>
    <div class="p-8 bg-white border-t border-gray-200 flex flex-col gap-5">
        <img src="{{ asset('logo_octamobil.svg') }}" alt="Octa Mobil" class="h-6 object-contain self-start">
        <div class="flex flex-col gap-2 text-[13px] text-gray-500 font-medium tracking-wide">
            <a href="tel:+24494511022" class="hover:text-black transition-colors">(+244) 945 110 22</a>
            <a href="mailto:info@octamobil.com" class="hover:text-black transition-colors">info@octamobil.com</a>
        </div>
    </div>
</div>

<script>
(function() {
    var navItems = document.querySelectorAll('.nav-item');
    var megaPanels = document.querySelectorAll('.mega-panel');
    var navbar = document.getElementById('navbar');
    var activeMega = null;
    var hoverTimer = null;
    var closeTimer = null;

    function setWhite() {
        if (navbar.classList.contains('nav-transparent')) {
            navbar.classList.add('mega-hover');
        }
    }

    function unsetWhite() {
        navbar.classList.remove('mega-hover');
    }

    function openMega(id) {
        clearTimeout(closeTimer);
        var panel = document.getElementById('mega-' + id);
        if (!panel || activeMega === panel) return;
        megaPanels.forEach(function(p) {
            if (p !== panel) {
                p.style.pointerEvents = 'none';
                p.style.maxHeight = '0';
                p.style.opacity = '0';
            }
        });
        activeMega = panel;
        panel.style.pointerEvents = 'auto';
        panel.style.maxHeight = '350px';
        panel.style.opacity = '1';
    }

    function closeAllMega() {
        closeTimer = setTimeout(function() {
            activeMega = null;
            megaPanels.forEach(function(p) {
                p.style.pointerEvents = 'none';
                p.style.maxHeight = '0';
                p.style.opacity = '0';
            });
        }, 150);
    }

    navItems.forEach(function(item) {
        item.addEventListener('mouseenter', function() {
            clearTimeout(hoverTimer);
            setWhite();
            var megaId = item.getAttribute('data-has-mega');
            if (megaId) {
                openMega(megaId);
            } else {
                closeAllMega();
            }
        });
        item.addEventListener('mouseleave', function() {
            var megaId = item.getAttribute('data-has-mega');
            if (megaId) {
                closeAllMega();
            }
            hoverTimer = setTimeout(function() {
                if (!activeMega) unsetWhite();
            }, 150);
        });
    });

    megaPanels.forEach(function(panel) {
        panel.addEventListener('mouseenter', function() {
            clearTimeout(closeTimer);
            clearTimeout(hoverTimer);
            setWhite();
        });
        panel.addEventListener('mouseleave', function() {
            closeAllMega();
            hoverTimer = setTimeout(unsetWhite, 150);
        });
    });
})();
</script>
