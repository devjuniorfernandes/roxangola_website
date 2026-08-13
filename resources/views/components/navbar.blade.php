<!-- Desktop Navbar -->
<nav class="fixed w-full z-50 transition-all duration-300 {{ Request::is('/', 'rox-01', 'rox-adamas', 'catalogo', 'representante', 'showroom', 'revendedores', 'servicos', 'servicos/*', 'sobre/*', 'contactos') ? 'nav-glass border-b text-white nav-transparent' : 'bg-white border-b border-gray-200 text-black' }}" id="navbar">
    @php $navTransparent = Request::is('/', 'rox-01', 'rox-adamas', 'catalogo', 'representante', 'showroom', 'revendedores', 'servicos', 'servicos/*', 'sobre/*', 'contactos'); @endphp
    <div class="site-container flex items-center h-[60px] relative">
        <!-- Left: hambúrguer (mobile) + logo (desktop) + menu -->
        <div class="flex items-center gap-8 lg:gap-12">
            <!-- Hambúrguer (mobile, esquerda) -->
            <button id="mobile-menu" aria-label="Abrir menu" class="md:hidden flex flex-col justify-center gap-[6px] w-[26px] cursor-pointer">
                <span class="w-full h-[1.5px] bg-current transition-colors duration-300 bar"></span>
                <span class="w-full h-[1.5px] bg-current transition-colors duration-300 bar"></span>
                <span class="w-full h-[1.5px] bg-current transition-colors duration-300 bar"></span>
            </button>

            <!-- Logo (desktop, esquerda) -->
            <a href="{{ route('home') }}" class="hidden md:flex flex-shrink-0 items-center gap-3">
                @if($navTransparent)
                    <img src="{{ asset('assets/logo-full-w.svg') }}" alt="ROX" class="h-5 logo-default">
                    <img src="{{ asset('assets/logo-full.svg') }}" alt="ROX" class="h-5 logo-hover hidden">
                @else
                    <img src="{{ asset('assets/logo-full.svg') }}" alt="ROX" class="h-5">
                @endif
            </a>

            <!-- Menu items (desktop) -->
            <div class="hidden md:flex items-center space-x-8 lg:space-x-10 text-[13px] font-medium">
            <div class="relative nav-item" data-has-mega="modelos">
                <span class="group relative pb-1 cursor-pointer transition-colors">{{ __('common.nav.models') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('rox-01', 'rox-adamas', 'catalogo') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></span>
            </div>
            <div class="relative nav-item" data-has-mega="concessionaria">
                <span class="group relative pb-1 cursor-pointer transition-colors">{{ __('common.nav.concessionaria') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('representante', 'showroom') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></span>
            </div>
            <div class="relative nav-item" data-has-mega="servicos">
                <span class="group relative pb-1 cursor-pointer transition-colors">{{ __('common.nav.services') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('servicos', 'servicos/*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></span>
            </div>
            <div class="relative nav-item" data-has-mega="sobre">
                <span class="group relative pb-1 cursor-pointer transition-colors">{{ __('common.nav.about') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('sobre/*') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></span>
            </div>
            <a href="{{ route('contactos') }}" class="group relative pb-1 transition-colors nav-item">{{ __('common.nav.contacts') }} <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('contactos') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            </div>
        </div>

        <!-- Logo centrado (mobile) -->
        <a href="{{ route('home') }}" class="md:hidden absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2 flex items-center">
            @if($navTransparent)
                <img src="{{ asset('assets/logo-full-w.svg') }}" alt="ROX" class="h-5 logo-default">
                <img src="{{ asset('assets/logo-full.svg') }}" alt="ROX" class="h-5 logo-hover hidden">
            @else
                <img src="{{ asset('assets/logo-full.svg') }}" alt="ROX" class="h-5">
            @endif
        </a>

        <!-- Right (desktop): Test Drive + Switcher -->
        <div class="ml-auto hidden md:flex items-center gap-5 lg:gap-6">
            @if(Request::is('rox-01'))
                <a href="{{ route('contactos', ['modelo' => 'ROX 01', 'intencao' => 'Test Drive']) }}" class="px-5 py-2 text-xs tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">{{ __('common.nav.test_drive') }}</a>
            @elseif(Request::is('rox-adamas'))
                <a href="{{ route('contactos', ['modelo' => 'ROX ADAMAS', 'intencao' => 'Test Drive']) }}" class="px-5 py-2 text-xs tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">{{ __('common.nav.test_drive') }}</a>
            @endif
            <x-lang-switcher variant="header" />
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
            <a href="{{ route('representante') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-2 md:mb-3">
                    <img src="{{ asset('assets/dealer.jpg') }}" alt="OCTA Angola" class="w-full h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
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
                    <img src="{{ asset('assets/revisao.avif') }}" alt="Apoio Técnico" class="w-[160px] md:w-[180px] h-[100px] md:h-[130px] lg:h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
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

@php
    $mChevron = '<svg class="acc-chevron w-4 h-4 text-gray-500 transition-transform duration-300 flex-shrink-0" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5"/></svg>';
@endphp
<!-- Mobile Menu (full-screen) -->
<style>
    #mobile-sidebar .menu-row { opacity: 0; transform: translateY(16px); transition: opacity .5s ease, transform .5s cubic-bezier(0.16,1,0.3,1); }
    #mobile-sidebar.is-open .menu-row { opacity: 1; transform: translateY(0); }
    #mobile-sidebar.is-open .menu-row:nth-child(1){ transition-delay: .12s; }
    #mobile-sidebar.is-open .menu-row:nth-child(2){ transition-delay: .18s; }
    #mobile-sidebar.is-open .menu-row:nth-child(3){ transition-delay: .24s; }
    #mobile-sidebar.is-open .menu-row:nth-child(4){ transition-delay: .30s; }
    #mobile-sidebar.is-open .menu-row:nth-child(5){ transition-delay: .36s; }
    #mobile-sidebar.is-open .menu-row:nth-child(6){ transition-delay: .42s; }
</style>
<div id="mobile-sidebar" class="fixed inset-0 z-[100] bg-white -translate-y-full transition-transform duration-500 ease-[cubic-bezier(0.16,1,0.3,1)] flex flex-col md:hidden">
    <!-- Top bar: X + logo centrado -->
    <div class="relative flex items-center h-[60px] px-6 border-b border-gray-100 flex-shrink-0">
        <button id="close-sidebar" aria-label="Fechar menu" class="-ml-1 text-gray-800 hover:text-black">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
        </button>
        <a href="{{ route('home') }}" class="absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-1/2">
            <img src="{{ asset('assets/logo-full.svg') }}" alt="ROX" class="h-5">
        </a>
    </div>

    <!-- Itens (scroll) -->
    <div class="flex-1 overflow-y-auto">
        <!-- Modelos -->
        <div class="menu-row border-b border-gray-100">
            <button type="button" class="acc-toggle flex items-center justify-between w-full px-6 py-[18px]" data-target="m-modelos" aria-expanded="false">
                <span class="text-[17px] font-medium text-[#1a1a1a]">{{ __('common.nav.models') }}</span>
                {!! $mChevron !!}
            </button>
            <div id="m-modelos" class="acc-body overflow-hidden bg-[#f7f7f7]" style="max-height:0; transition:max-height .35s cubic-bezier(0.25,0.1,0.25,1);">
                <div class="px-6 py-1">
                    <a href="{{ route('rox-adamas') }}" class="flex items-center gap-4 py-4">
                        <img src="{{ asset('assets/banner-adamas.avif') }}" alt="ROX ADAMAS" class="w-[112px] h-[76px] object-cover flex-shrink-0">
                        <div><h3 class="text-[16px] font-medium text-[#1a1a1a] leading-tight">{{ __('common.nav.rox_adamas') }}</h3><p class="text-[13px] text-gray-500 leading-snug mt-1">{{ __('common.nav.rox_adamas_desc') }}</p></div>
                    </a>
                    <a href="{{ route('rox01') }}" class="flex items-center gap-4 py-4">
                        <img src="{{ asset('assets/banner2.jpg') }}" alt="ROX 01" class="w-[112px] h-[76px] object-cover flex-shrink-0">
                        <div><h3 class="text-[16px] font-medium text-[#1a1a1a] leading-tight">{{ __('common.nav.rox_01') }}</h3><p class="text-[13px] text-gray-500 leading-snug mt-1">{{ __('common.nav.rox_01_desc') }}</p></div>
                    </a>
                    <a href="{{ route('catalogo') }}" class="flex items-center gap-4 py-4">
                        <img src="{{ asset('assets/banner1.jpg') }}" alt="{{ __('common.nav.catalog_title') }}" class="w-[112px] h-[76px] object-cover flex-shrink-0">
                        <div><h3 class="text-[16px] font-medium text-[#1a1a1a] leading-tight">{{ __('common.nav.catalog_title') }}</h3><p class="text-[13px] text-gray-500 leading-snug mt-1">{{ __('common.nav.catalog_desc') }}</p></div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Representante -->
        <div class="menu-row border-b border-gray-100">
            <button type="button" class="acc-toggle flex items-center justify-between w-full px-6 py-[18px]" data-target="m-repr" aria-expanded="false">
                <span class="text-[17px] font-medium text-[#1a1a1a]">{{ __('common.nav.concessionaria') }}</span>
                {!! $mChevron !!}
            </button>
            <div id="m-repr" class="acc-body overflow-hidden bg-[#f7f7f7]" style="max-height:0; transition:max-height .35s cubic-bezier(0.25,0.1,0.25,1);">
                <div class="px-6 py-1">
                    <a href="{{ route('representante') }}" class="flex items-center gap-4 py-4">
                        <img src="{{ asset('assets/dealer.jpg') }}" alt="{{ __('common.nav.octa_mobil') }}" class="w-[112px] h-[76px] object-cover flex-shrink-0">
                        <div><h3 class="text-[16px] font-medium text-[#1a1a1a] leading-tight">{{ __('common.nav.octa_mobil') }}</h3><p class="text-[13px] text-gray-500 leading-snug mt-1">{{ __('common.nav.octa_mobil_desc') }}</p></div>
                    </a>
                    <a href="{{ route('showroom') }}" class="flex items-center gap-4 py-4">
                        <img src="{{ asset('assets/showroom.jpg') }}" alt="{{ __('common.nav.showroom') }}" class="w-[112px] h-[76px] object-cover flex-shrink-0">
                        <div><h3 class="text-[16px] font-medium text-[#1a1a1a] leading-tight">{{ __('common.nav.showroom') }}</h3><p class="text-[13px] text-gray-500 leading-snug mt-1">{{ __('common.nav.showroom_desc') }}</p></div>
                    </a>
                </div>
            </div>
        </div>
        <!-- Serviços -->
        <div class="menu-row border-b border-gray-100">
            <button type="button" class="acc-toggle flex items-center justify-between w-full px-6 py-[18px]" data-target="m-servicos" aria-expanded="false">
                <span class="text-[17px] font-medium text-[#1a1a1a]">{{ __('common.nav.services') }}</span>
                {!! $mChevron !!}
            </button>
            <div id="m-servicos" class="acc-body overflow-hidden bg-[#f7f7f7]" style="max-height:0; transition:max-height .35s cubic-bezier(0.25,0.1,0.25,1);">
                <div class="px-6 py-1">
                    <a href="{{ route('servicos.agendamento') }}" class="flex items-center gap-4 py-4">
                        <img src="{{ asset('assets/services.jpg') }}" alt="{{ __('common.nav.scheduling') }}" class="w-[112px] h-[76px] object-cover flex-shrink-0">
                        <div><h3 class="text-[16px] font-medium text-[#1a1a1a] leading-tight">{{ __('common.nav.scheduling') }}</h3><p class="text-[13px] text-gray-500 leading-snug mt-1">{{ __('common.nav.scheduling_desc') }}</p></div>
                    </a>
                    <a href="{{ route('servicos.apoio-tecnico') }}" class="flex items-center gap-4 py-4">
                        <img src="{{ asset('assets/revisao.avif') }}" alt="{{ __('common.nav.support') }}" class="w-[112px] h-[76px] object-cover flex-shrink-0">
                        <div><h3 class="text-[16px] font-medium text-[#1a1a1a] leading-tight">{{ __('common.nav.support') }}</h3><p class="text-[13px] text-gray-500 leading-snug mt-1">{{ __('common.nav.support_desc') }}</p></div>
                    </a>
                    <a href="{{ route('servicos.pecas-acessorios') }}" class="block py-3 text-[15px] {{ Request::is('servicos/pecas-acessorios') ? 'text-black font-medium' : 'text-gray-600' }}">{{ __('common.nav.parts') }}</a>
                    <a href="{{ route('servicos.manual-instrucoes') }}" class="block py-3 text-[15px] {{ Request::is('servicos/manual-instrucoes') ? 'text-black font-medium' : 'text-gray-600' }}">{{ __('common.nav.manual') }}</a>
                </div>
            </div>
        </div>
        <!-- Sobre -->
        <div class="menu-row border-b border-gray-100">
            <button type="button" class="acc-toggle flex items-center justify-between w-full px-6 py-[18px]" data-target="m-sobre" aria-expanded="false">
                <span class="text-[17px] font-medium text-[#1a1a1a]">{{ __('common.nav.about') }}</span>
                {!! $mChevron !!}
            </button>
            <div id="m-sobre" class="acc-body overflow-hidden bg-[#f7f7f7]" style="max-height:0; transition:max-height .35s cubic-bezier(0.25,0.1,0.25,1);">
                <div class="px-6 py-1">
                    <a href="{{ route('sobre.marca') }}" class="flex items-center gap-4 py-4">
                        <img src="{{ asset('assets/banner.jpg') }}" alt="{{ __('common.nav.brand') }}" class="w-[112px] h-[76px] object-cover flex-shrink-0">
                        <div><h3 class="text-[16px] font-medium text-[#1a1a1a] leading-tight">{{ __('common.nav.brand') }}</h3></div>
                    </a>
                    <a href="{{ route('sobre.historia') }}" class="block py-3 text-[15px] {{ Request::is('sobre/historia') ? 'text-black font-medium' : 'text-gray-600' }}">{{ __('common.nav.history') }}</a>
                    <a href="{{ route('sobre.comunidade') }}" class="block py-3 text-[15px] {{ Request::is('sobre/comunidade') ? 'text-black font-medium' : 'text-gray-600' }}">{{ __('common.nav.community') }}</a>
                </div>
            </div>
        </div>
        <!-- Contactos (link direto) -->
        <div class="menu-row border-b border-gray-100">
            <a href="{{ route('contactos') }}" class="block px-6 py-[18px] text-[17px] font-medium text-[#1a1a1a]">{{ __('common.nav.contacts') }}</a>
        </div>
        <!-- Idioma -->
        <div class="menu-row border-b border-gray-100">
            <button type="button" class="acc-toggle flex items-center justify-between w-full px-6 py-[18px]" data-target="m-lang" aria-expanded="false">
                <span class="text-[17px] font-medium text-[#1a1a1a]">{{ ucfirst(app()->getLocale()) }}</span>
                {!! $mChevron !!}
            </button>
            <div id="m-lang" class="acc-body overflow-hidden bg-[#f7f7f7]" style="max-height:0; transition:max-height .35s cubic-bezier(0.25,0.1,0.25,1);">
                <div class="px-6 py-1 flex flex-col">
                    <a href="{{ route('locale.switch', 'pt') }}" class="py-3 text-[15px] {{ app()->getLocale() === 'pt' ? 'text-black font-semibold' : 'text-gray-600' }}">Português</a>
                    <a href="{{ route('locale.switch', 'en') }}" class="py-3 text-[15px] {{ app()->getLocale() === 'en' ? 'text-black font-semibold' : 'text-gray-600' }}">English</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Rodapé -->
    <div class="px-6 py-5 bg-white border-t border-gray-100 flex flex-col gap-1.5 text-[13px] text-gray-500 font-medium tracking-wide flex-shrink-0">
        <a href="tel:+244945110222" class="hover:text-black transition-colors">(+244) 945 110 222</a>
        <a href="mailto:info@octamobil.com" class="hover:text-black transition-colors">info@octamobil.com</a>
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

<!-- Menu mobile: abrir/fechar + acordeões -->
<script>
(function () {
    var openBtn = document.getElementById('mobile-menu');
    var closeBtn = document.getElementById('close-sidebar');
    var menu = document.getElementById('mobile-sidebar');
    if (!menu) return;

    function openMenu() {
        menu.classList.remove('-translate-y-full');
        document.body.style.overflow = 'hidden';
        requestAnimationFrame(function () { menu.classList.add('is-open'); });
    }
    function closeMenu() {
        menu.classList.add('-translate-y-full');
        menu.classList.remove('is-open');
        document.body.style.overflow = '';
    }
    if (openBtn) openBtn.addEventListener('click', openMenu);
    if (closeBtn) closeBtn.addEventListener('click', closeMenu);

    // Acordeões
    var toggles = menu.querySelectorAll('.acc-toggle');
    toggles.forEach(function (btn) {
        btn.addEventListener('click', function () {
            var body = document.getElementById(btn.getAttribute('data-target'));
            var chev = btn.querySelector('.acc-chevron');
            var isOpen = btn.getAttribute('aria-expanded') === 'true';
            if (isOpen) {
                body.style.maxHeight = '0px';
                btn.setAttribute('aria-expanded', 'false');
                if (chev) chev.style.transform = 'rotate(0deg)';
            } else {
                body.style.maxHeight = body.scrollHeight + 'px';
                btn.setAttribute('aria-expanded', 'true');
                if (chev) chev.style.transform = 'rotate(180deg)';
            }
        });
    });

    // Recalcular altura de acordeões abertos ao mudar de tamanho
    window.addEventListener('resize', function () {
        toggles.forEach(function (btn) {
            if (btn.getAttribute('aria-expanded') === 'true') {
                var body = document.getElementById(btn.getAttribute('data-target'));
                body.style.maxHeight = body.scrollHeight + 'px';
            }
        });
    });
})();
</script>
