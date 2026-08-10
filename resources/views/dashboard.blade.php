<x-app-layout>
    <x-slot name="header">
        <h1 class="text-2xl font-semibold text-gray-900">Dashboard</h1>
    </x-slot>

    <div class="mb-8">
        <p class="text-gray-500 font-light text-lg">Bem-vindo ao Painel de Administração da ROX Angola!</p>
    </div>

    <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-3">
        <!-- Contactos Card -->
        <div class="bg-white overflow-hidden shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl group relative">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-blue-50 text-blue-600 rounded-lg p-3 group-hover:bg-blue-600 group-hover:text-white transition-colors duration-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 13.5h3.86a2.25 2.25 0 012.012 1.244l.256.512a2.25 2.25 0 002.013 1.244h3.218a2.25 2.25 0 002.013-1.244l.256-.512a2.25 2.25 0 012.013-1.244h3.859m-18 0c-.828 0-1.5-.672-1.5-1.5V6c0-.828.672-1.5 1.5-1.5h19.5c.828 0 1.5.672 1.5 1.5v6c0 .828-.672 1.5-1.5 1.5m-18 0c0 .828.672 1.5 1.5 1.5h19.5c.828 0 1.5-.672 1.5-1.5"></path>
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Gerir Contactos</dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-semibold text-gray-900">Mensagens</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-3">
                <div class="text-sm">
                    <a href="{{ route('admin.contacts.index') }}" class="font-medium text-blue-600 hover:text-blue-500 flex items-center justify-between">
                        <span>Ver todas as mensagens</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
            <a href="{{ route('admin.contacts.index') }}" class="absolute inset-0"></a>
        </div>
        
        <!-- Veículos Card -->
        <div class="bg-white overflow-hidden shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl group relative">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-emerald-50 text-emerald-600 rounded-lg p-3 group-hover:bg-emerald-600 group-hover:text-white transition-colors duration-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 18.75a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h6m-9 0H3.375a1.125 1.125 0 01-1.125-1.125V14.25m17.25 4.5a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m3 0h1.125c.621 0 1.129-.504 1.09-1.124a17.902 17.902 0 00-3.213-9.193 2.056 2.056 0 00-1.58-.86H14.25M16.5 18.75h-2.25m0-11.177v-.958c0-.568-.422-1.048-.987-1.106a48.554 48.554 0 00-10.026 0 1.106 1.106 0 00-.987 1.106v7.635m12-6.677v6.677m0 4.5v-4.5m0 0h-12"></path>
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Frota ROX</dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-semibold text-gray-900">Veículos</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-3">
                <div class="text-sm">
                    <a href="{{ route('admin.vehicles.index') }}" class="font-medium text-emerald-600 hover:text-emerald-500 flex items-center justify-between">
                        <span>Gerir catálogo de veículos</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
            <a href="{{ route('admin.vehicles.index') }}" class="absolute inset-0"></a>
        </div>
        
        <!-- Páginas Card -->
        <div class="bg-white overflow-hidden shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl group relative">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-purple-50 text-purple-600 rounded-lg p-3 group-hover:bg-purple-600 group-hover:text-white transition-colors duration-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m2.25 0H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z"></path>
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Conteúdos Fixos</dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-semibold text-gray-900">Páginas</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-3">
                <div class="text-sm">
                    <a href="{{ route('admin.pages.index') }}" class="font-medium text-purple-600 hover:text-purple-500 flex items-center justify-between">
                        <span>Atualizar textos e banners</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
            <a href="{{ route('admin.pages.index') }}" class="absolute inset-0"></a>
        </div>

        <!-- Conteúdo do Site (CMS) Card -->
        <div class="bg-white overflow-hidden shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl group relative">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-amber-50 text-amber-600 rounded-lg p-3 group-hover:bg-amber-600 group-hover:text-white transition-colors duration-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10"></path>
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Texto e Imagens (PT/EN)</dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-semibold text-gray-900">Conteúdo do Site</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-3">
                <div class="text-sm">
                    <a href="{{ route('admin.cms.edit') }}" class="font-medium text-amber-600 hover:text-amber-500 flex items-center justify-between">
                        <span>Editar conteúdo de cada página</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
            <a href="{{ route('admin.cms.edit') }}" class="absolute inset-0"></a>
        </div>

        <!-- Destaques da Homepage (coleção) -->
        <div class="bg-white overflow-hidden shadow-sm ring-1 ring-gray-900/5 sm:rounded-xl group relative">
            <div class="p-6">
                <div class="flex items-center">
                    <div class="flex-shrink-0 bg-rose-50 text-rose-600 rounded-lg p-3 group-hover:bg-rose-600 group-hover:text-white transition-colors duration-300">
                        <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 15.75l5.159-5.159a2.25 2.25 0 013.182 0l5.159 5.159m-1.5-1.5l1.409-1.409a2.25 2.25 0 013.182 0l2.909 2.909m-18 3.75h16.5a1.5 1.5 0 001.5-1.5V6a1.5 1.5 0 00-1.5-1.5H3.75A1.5 1.5 0 002.25 6v12a1.5 1.5 0 001.5 1.5zm10.5-11.25h.008v.008h-.008V8.25zm.375 0a.375.375 0 11-.75 0 .375.375 0 01.75 0z"></path>
                        </svg>
                    </div>
                    <div class="ml-5 w-0 flex-1">
                        <dl>
                            <dt class="text-sm font-medium text-gray-500 truncate">Cards de notícias (PT/EN)</dt>
                            <dd class="flex items-baseline">
                                <div class="text-2xl font-semibold text-gray-900">Destaques</div>
                            </dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-6 py-3">
                <div class="text-sm">
                    <a href="{{ route('admin.highlights.index') }}" class="font-medium text-rose-600 hover:text-rose-500 flex items-center justify-between">
                        <span>Gerir destaques da homepage</span>
                        <span aria-hidden="true">&rarr;</span>
                    </a>
                </div>
            </div>
            <a href="{{ route('admin.highlights.index') }}" class="absolute inset-0"></a>
        </div>
    </div>
</x-app-layout>
