<a href="{{ route('dashboard') }}" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('dashboard') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
    <svg class="flex-shrink-0 -ml-1 mr-3 h-5 w-5 {{ request()->routeIs('dashboard') ? 'text-white' : 'text-gray-400 group-hover:text-gray-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
    <span class="truncate">Dashboard</span>
</a>

<div class="pt-6 pb-2">
    <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Conteúdos</p>
</div>

<a href="{{ route('admin.pages.index') }}" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('admin.pages.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
    <svg class="flex-shrink-0 -ml-1 mr-3 h-5 w-5 {{ request()->routeIs('admin.pages.*') ? 'text-white' : 'text-gray-400 group-hover:text-gray-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9.5L18.5 7H20"></path></svg>
    <span class="truncate">Páginas</span>
</a>

<a href="{{ route('admin.vehicles.index') }}" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('admin.vehicles.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
    <svg class="flex-shrink-0 -ml-1 mr-3 h-5 w-5 {{ request()->routeIs('admin.vehicles.*') ? 'text-white' : 'text-gray-400 group-hover:text-gray-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4"></path></svg>
    <span class="truncate">Veículos</span>
</a>

<div class="pt-6 pb-2">
    <p class="px-3 text-xs font-semibold text-gray-500 uppercase tracking-wider">Interações</p>
</div>

<a href="{{ route('admin.contacts.index') }}" class="group flex items-center px-3 py-2.5 text-sm font-medium rounded-md transition-colors {{ request()->routeIs('admin.contacts.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
    <svg class="flex-shrink-0 -ml-1 mr-3 h-5 w-5 {{ request()->routeIs('admin.contacts.*') ? 'text-white' : 'text-gray-400 group-hover:text-gray-300' }}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
    <span class="truncate">Contactos</span>
    @php
        $unreadContactsCount = \App\Models\Contact::where('is_read', false)->count() ?? 0;
    @endphp
    @if($unreadContactsCount > 0)
        <span class="ml-auto bg-white text-black py-0.5 px-2 rounded-full text-xs font-bold">{{ $unreadContactsCount }}</span>
    @endif
</a>
