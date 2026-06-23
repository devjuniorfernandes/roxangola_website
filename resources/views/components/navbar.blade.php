<!-- Desktop Navbar -->
<nav class="fixed w-full z-50 transition-all duration-300 {{ Request::is('/', 'rox-01', 'rox-adamas') ? 'nav-glass border-b text-white nav-transparent' : 'bg-white border-b border-gray-200 text-black' }}" id="navbar">
    <div class="max-w-[1600px] mx-auto px-6 md:px-8 flex items-center justify-between h-[60px]">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex-shrink-0">
            @if(Request::is('/', 'rox-01', 'rox-adamas'))
                <img src="{{ asset('assets/logo-w.svg') }}" alt="ROX" class="h-6 logo-default">
                <img src="{{ asset('assets/logo.svg') }}" alt="ROX" class="h-6 logo-hover hidden">
            @else
                <img src="{{ asset('assets/logo.svg') }}" alt="ROX" class="h-6">
            @endif
        </a>

        <!-- Menu items -->
        <div class="hidden md:flex items-center space-x-10 text-sm font-medium tracking-wide">
            <a href="{{ route('rox01') }}" class="relative hover:opacity-70 transition-opacity uppercase pb-1">ROX 01 @if(Request::is('rox-01'))<span class="absolute bottom-0 left-0 w-full h-px bg-current"></span>@endif</a>
            <a href="{{ route('rox-adamas') }}" class="relative hover:opacity-70 transition-opacity uppercase pb-1">ROX Adamas @if(Request::is('rox-adamas'))<span class="absolute bottom-0 left-0 w-full h-px bg-current"></span>@endif</a>
            <a href="{{ route('contactos') }}" class="relative hover:opacity-70 transition-opacity uppercase pb-1">Contactos @if(Request::is('contactos'))<span class="absolute bottom-0 left-0 w-full h-px bg-current"></span>@endif</a>
        </div>
        <button id="mobile-menu" aria-label="Abrir menu" class="md:hidden flex flex-col justify-center items-center gap-[5px] w-[25px] cursor-pointer">
            <span class="w-full h-[3px] bg-current transition-colors duration-300 bar"></span>
            <span class="w-full h-[3px] bg-current transition-colors duration-300 bar"></span>
            <span class="w-full h-[3px] bg-current transition-colors duration-300 bar"></span>
        </button>
    </div>
</nav>

<!-- Sidebar Overlay -->
<div id="sidebar-overlay" class="fixed inset-0 bg-black/50 z-[90] hidden opacity-0 transition-opacity duration-300"></div>

<!-- Mobile Sidebar -->
<div id="mobile-sidebar" class="fixed inset-y-0 left-0 w-[85%] max-w-sm bg-[#f4f6f9] z-[100] transform -translate-x-full transition-transform duration-300 flex flex-col justify-between shadow-2xl">
    <div>
        <div class="flex justify-between items-center p-6 bg-white">
            <button id="close-sidebar" aria-label="Fechar menu" class="text-gray-400 hover:text-black">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M6 18L18 6M6 6l12 12"></path></svg>
            </button>
            <img src="{{ asset('assets/logo.svg') }}" alt="ROX Logo" class="h-4">
            <div class="w-6"></div> <!-- spacer -->
        </div>
        <nav class="flex flex-col p-8 gap-8 bg-[#f4f6f9]">
            <a href="{{ route('rox01') }}" class="text-[13px] tracking-widest uppercase font-medium {{ Request::is('rox-01') ? 'text-black border-b border-black pb-1 inline-block' : 'text-black' }}">ROX 01</a>
            <a href="{{ route('rox-adamas') }}" class="text-[13px] tracking-widest uppercase font-medium {{ Request::is('rox-adamas') ? 'text-black border-b border-black pb-1 inline-block' : 'text-black' }}">ROX Adamas</a>
            <a href="{{ route('explorar') }}" class="text-[13px] tracking-widest uppercase font-medium {{ Request::is('explorar') ? 'text-black border-b border-black pb-1 inline-block' : 'text-black' }}">Explorar</a>
            <a href="{{ route('contactos') }}" class="text-[13px] tracking-widest uppercase font-medium {{ Request::is('contactos') ? 'text-black border-b border-black pb-1 inline-block' : 'text-black' }}">Contactos</a>
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
