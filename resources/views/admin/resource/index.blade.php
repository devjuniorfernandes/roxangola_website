<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-medium text-2xl text-black">{{ $labelPlural }}</h2>
            <a href="{{ route('admin.' . $routeKey . '.create') }}" class="bg-black text-white px-4 py-2 rounded text-sm font-medium hover:bg-gray-900">+ Novo</a>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 bg-black text-white px-4 py-3 rounded-sm text-sm">{{ session('success') }}</div>
    @endif

    <div class="bg-white rounded-sm shadow-sm border border-gray-100 overflow-x-auto">
        <table class="w-full text-sm">
            <thead class="bg-gray-50 text-left text-gray-500">
                <tr>
                    @foreach($fields as $f)
                        <th class="px-4 py-3 font-medium">{{ $f['label'] }}</th>
                    @endforeach
                    <th class="px-4 py-3 text-right font-medium">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($items as $item)
                    <tr class="border-t border-gray-100 align-top">
                        @foreach($fields as $f)
                            <td class="px-4 py-3">
                                @if($f['type'] === 'image')
                                    @php $src = $item->{$f['name']}; @endphp
                                    @if($src)
                                        <img src="{{ img_src($src) }}" alt="" class="w-16 h-12 object-cover rounded bg-gray-100">
                                    @else
                                        <span class="text-gray-300">—</span>
                                    @endif
                                @elseif($f['type'] === 'checkbox')
                                    <span class="{{ $item->{$f['name']} ? 'text-green-600' : 'text-gray-400' }}">{{ $item->{$f['name']} ? 'Sim' : 'Não' }}</span>
                                @else
                                    <span class="text-gray-700">{{ \Illuminate\Support\Str::limit((string) $item->{$f['name']}, 70) }}</span>
                                @endif
                            </td>
                        @endforeach
                        <td class="px-4 py-3 text-right whitespace-nowrap">
                            <a href="{{ route('admin.' . $routeKey . '.edit', $item) }}" class="text-blue-600 hover:underline">Editar</a>
                            <form action="{{ route('admin.' . $routeKey . '.destroy', $item) }}" method="POST" class="inline" onsubmit="return confirm('Remover este registo?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline ml-3">Remover</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="{{ count($fields) + 1 }}" class="px-4 py-10 text-center text-gray-400">Sem registos. Clique em “+ Novo”.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-6">
        <a href="{{ route('dashboard') }}" class="text-sm text-gray-500 hover:text-black">← Voltar ao painel</a>
    </div>
</x-app-layout>
