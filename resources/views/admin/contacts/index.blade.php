<x-app-layout>
    <x-slot name="header">
        <h2 class="font-medium text-2xl text-black">
            Gestão de Contactos
        </h2>
    </x-slot>

    <div class="bg-white rounded-sm shadow-sm border border-gray-100">
        <div class="p-8">
            
            @if($contacts->isEmpty())
                <div class="text-center py-10">
                    <svg class="mx-auto h-12 w-12 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                    <p class="text-gray-500 font-light text-lg">Ainda não existem mensagens recebidas.</p>
                </div>
            @else
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="border-b border-gray-200">
                                <th class="pb-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Data</th>
                                <th class="pb-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Nome</th>
                                <th class="pb-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Contacto</th>
                                <th class="pb-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Modelo</th>
                                <th class="pb-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Intenção</th>
                                <th class="pb-3 text-xs font-semibold text-gray-400 uppercase tracking-wider">Mensagem</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            @foreach($contacts as $contact)
                                <tr class="hover:bg-gray-50 transition-colors {{ $contact->is_read ? 'opacity-60' : '' }}">
                                    <td class="py-4 pr-6 whitespace-nowrap text-sm text-gray-500 font-light">
                                        {{ $contact->created_at->format('d/m/Y H:i') }}
                                    </td>
                                    <td class="py-4 pr-6 whitespace-nowrap">
                                        <div class="text-sm font-medium text-black">{{ $contact->name }}</div>
                                    </td>
                                    <td class="py-4 pr-6 whitespace-nowrap">
                                        <div class="text-sm text-black">{{ $contact->email }}</div>
                                        <div class="text-xs text-gray-500 mt-1">{{ $contact->phone }}</div>
                                    </td>
                                    <td class="py-4 pr-6 whitespace-nowrap text-sm text-gray-600">
                                        {{ $contact->model_interest ?? '—' }}
                                    </td>
                                    <td class="py-4 pr-6 whitespace-nowrap text-sm text-gray-600">
                                        {{ $contact->intention ?? '—' }}
                                    </td>
                                    <td class="py-4 text-sm text-gray-600 font-light max-w-md">
                                        {{ $contact->message }}
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif

        </div>
    </div>
</x-app-layout>
