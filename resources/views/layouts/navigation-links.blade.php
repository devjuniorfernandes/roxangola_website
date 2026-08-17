<a href="{{ route('dashboard') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('dashboard') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
    <svg class="-ml-1 mr-3 h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2 7-7 7 7 2 2m-4-2v10a1 1 0 01-1 1H8a1 1 0 01-1-1V10" /></svg>
    <span>Dashboard</span>
</a>

{{-- CMS antigo removido. O novo CMS à medida será adicionado aqui. --}}
