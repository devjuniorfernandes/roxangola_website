<a href="{{ route('dashboard') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('dashboard') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
    <svg class="-ml-1 mr-3 h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M3 12l2-2 7-7 7 7 2 2m-4-2v10a1 1 0 01-1 1H8a1 1 0 01-1-1V10" /></svg>
    <span>Dashboard</span>
</a>

<div class="pb-2 pt-6"><p class="px-3 text-xs font-semibold uppercase tracking-wider text-gray-500">Conteúdo</p></div>

<a href="{{ route('admin.cms.edit') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.cms.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
    <svg class="-ml-1 mr-3 h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6v12m6-6H6m14 0a8 8 0 11-16 0 8 8 0 0116 0z" /></svg>
    <span>CMS — Páginas</span>
</a>
<a href="{{ route('admin.vehicles.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.vehicles.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}">
    <svg class="-ml-1 mr-3 h-5 w-5 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 7h16M4 17h16M7 7l2-3m6 3-2-3M7 17l2 3m6-3-2 3" /></svg>
    <span>Veículos</span>
</a>
<a href="{{ route('admin.highlights.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.highlights.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Destaques</span></a>
<a href="{{ route('admin.gallery-images.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.gallery-images.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Galeria</span></a>
<a href="{{ route('admin.milestones.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.milestones.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Marcos</span></a>
<a href="{{ route('admin.services.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.services.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Serviços</span></a>

<div class="pb-2 pt-6"><p class="px-3 text-xs font-semibold uppercase tracking-wider text-gray-500">Operação</p></div>

<a href="{{ route('admin.contacts.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.contacts.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Contactos</span></a>
<a href="{{ route('admin.showroom-visits.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.showroom-visits.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Visitas ao Showroom</span></a>
<a href="{{ route('admin.service-bookings.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.service-bookings.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Marcações de Serviço</span></a>
<a href="{{ route('admin.dealer-applications.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.dealer-applications.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Candidaturas de Revendedor</span></a>
<a href="{{ route('admin.info-requests.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.info-requests.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Pedidos de Informação</span></a>
<a href="{{ route('admin.leads.index') }}" class="group flex items-center rounded-md px-3 py-2.5 text-sm font-medium transition-colors {{ request()->routeIs('admin.leads.*') ? 'bg-black text-white' : 'text-gray-300 hover:bg-gray-800 hover:text-white' }}"><span class="ml-8">Leads</span></a>
