<!-- Desktop Navbar -->
<nav class="fixed w-full z-50 transition-all duration-300 {{ Request::is('/', 'rox-01', 'rox-adamas') ? 'nav-glass border-b text-white nav-transparent' : 'bg-white border-b border-gray-200 text-black' }}" id="navbar">
    <div class="site-container flex items-center justify-between h-[60px]">
        <!-- Logo + Angola -->
        <a href="{{ route('home') }}" class="flex-shrink-0 flex items-center gap-3">
            @if(Request::is('/', 'rox-01', 'rox-adamas'))
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
        <div class="hidden md:flex items-center space-x-10 text-[13px] font-medium">
            <div class="relative nav-item" data-has-mega="true">
                <span class="group relative pb-1 cursor-pointer transition-colors">Modelos <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('rox-01', 'rox-adamas') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></span>
            </div>
            <a href="{{ route('showroom') }}" class="group relative pb-1 transition-colors nav-item">Showroom <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('showroom') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            <a href="{{ route('contactos') }}" class="group relative pb-1 transition-colors nav-item">Contactos <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('contactos') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            @if(Request::is('rox-01'))
                <a href="{{ route('contactos', ['modelo' => 'ROX 01', 'intencao' => 'Test Drive']) }}" class="px-5 py-2 text-xs tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">Agendar Test Drive</a>
            @elseif(Request::is('rox-adamas'))
                <a href="{{ route('contactos', ['modelo' => 'ROX ADAMAS', 'intencao' => 'Test Drive']) }}" class="px-5 py-2 text-xs tracking-widest uppercase text-white transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">Agendar Test Drive</a>
            @endif
        </div>
        <button id="mobile-menu" aria-label="Abrir menu" class="md:hidden flex flex-col justify-center items-center gap-[5px] w-[25px] cursor-pointer">
            <span class="w-full h-[3px] bg-current transition-colors duration-300 bar"></span>
            <span class="w-full h-[3px] bg-current transition-colors duration-300 bar"></span>
            <span class="w-full h-[3px] bg-current transition-colors duration-300 bar"></span>
        </button>
    </div>
</nav>

<!-- Mega Menu Modelos -->
<div id="mega-menu" class="fixed top-[60px] left-0 w-full z-40 bg-gray-100 border-b border-gray-200 overflow-hidden pointer-events-none" style="max-height: 0; opacity: 0; transition: max-height 0.4s cubic-bezier(0.25, 0.1, 0.25, 1), opacity 0.3s ease;">
    <div class="site-container py-8">
        <div class="grid grid-cols-2 gap-6" style="max-width: 560px;">
            <!-- ROX ADAMAS -->
            <a href="{{ route('rox-adamas') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-3">
                    <img src="{{ asset('assets/banner-adamas.avif') }}" alt="ROX ADAMAS" class="w-full h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-[13px] font-normal text-black mb-0.5">ROX ADAMAS</h3>
                <p class="text-[11px] text-gray-400 font-light leading-snug">Novo SUV de luxo todo-o-terreno</p>
            </a>
            <!-- ROX 01 -->
            <a href="{{ route('rox01') }}" class="group block">
                <div class="overflow-hidden rounded-sm mb-3">
                    <img src="{{ asset('assets/banner2.jpg') }}" alt="ROX 01" class="w-full h-[140px] object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
                <h3 class="text-[13px] font-normal text-black mb-0.5">ROX 01</h3>
                <p class="text-[11px] text-gray-400 font-light leading-snug">SUV de luxo todo-o-terreno para cenário completo</p>
            </a>
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
            <div class="w-6"></div>
        </div>
        <nav class="flex flex-col p-8 gap-8 bg-[#f4f6f9]">
            <a href="{{ route('rox01') }}" class="group relative text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">ROX 01 <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('rox-01') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            <a href="{{ route('rox-adamas') }}" class="group relative text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">ROX Adamas <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('rox-adamas') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            <a href="{{ route('showroom') }}" class="group relative text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">Showroom <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('showroom') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            <a href="{{ route('contactos') }}" class="group relative text-[13px] tracking-widest uppercase font-medium text-black pb-1 inline-block">Contactos <span class="absolute bottom-0 left-0 w-full h-px transition-transform duration-300 origin-left {{ Request::is('contactos') ? 'scale-x-100' : 'scale-x-0 group-hover:scale-x-100' }}" style="background: var(--rox-dune-yellow);"></span></a>
            @if(Request::is('rox-01'))
                <a href="{{ route('contactos', ['modelo' => 'ROX 01', 'intencao' => 'Test Drive']) }}" class="mt-2 px-5 py-3 text-[13px] tracking-widest uppercase font-medium text-white text-center transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">Agendar Test Drive</a>
            @elseif(Request::is('rox-adamas'))
                <a href="{{ route('contactos', ['modelo' => 'ROX ADAMAS', 'intencao' => 'Test Drive']) }}" class="mt-2 px-5 py-3 text-[13px] tracking-widest uppercase font-medium text-white text-center transition-all duration-300 hover:brightness-110" style="background: var(--rox-dune-yellow);">Agendar Test Drive</a>
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
    var megaMenu = document.getElementById('mega-menu');
    var navbar = document.getElementById('navbar');
    var megaOpen = false;
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

    function openMega() {
        clearTimeout(closeTimer);
        if (megaOpen) return;
        megaOpen = true;
        megaMenu.style.pointerEvents = 'auto';
        megaMenu.style.maxHeight = '350px';
        megaMenu.style.opacity = '1';
    }

    function closeMega() {
        closeTimer = setTimeout(function() {
            megaOpen = false;
            megaMenu.style.pointerEvents = 'none';
            megaMenu.style.maxHeight = '0';
            megaMenu.style.opacity = '0';
        }, 150);
    }

    navItems.forEach(function(item) {
        item.addEventListener('mouseenter', function() {
            clearTimeout(hoverTimer);
            setWhite();
            if (item.getAttribute('data-has-mega') === 'true') {
                openMega();
            } else {
                closeMega();
            }
        });
        item.addEventListener('mouseleave', function() {
            if (item.getAttribute('data-has-mega') === 'true') {
                closeMega();
            }
            hoverTimer = setTimeout(function() {
                if (!megaOpen) unsetWhite();
            }, 150);
        });
    });

    megaMenu.addEventListener('mouseenter', function() {
        clearTimeout(closeTimer);
        clearTimeout(hoverTimer);
        setWhite();
    });
    megaMenu.addEventListener('mouseleave', function() {
        closeMega();
        hoverTimer = setTimeout(unsetWhite, 150);
    });
})();
</script>
