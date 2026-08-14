<x-app-layout>
    <x-slot name="header">
        <div>
            <h2 class="text-2xl font-medium text-black">{{ $title }}</h2>
            <p class="mt-1 text-sm font-light text-gray-500">{{ $description }}</p>
        </div>
    </x-slot>

    <div class="overflow-x-auto rounded-sm border border-gray-100 bg-white shadow-sm">
        <table class="w-full text-left text-sm">
            <thead class="border-b border-gray-200 bg-gray-50 text-xs uppercase tracking-wider text-gray-400">
                <tr>
                    <th class="px-4 py-3">Recebido</th>
                    @foreach($columns as $label)<th class="px-4 py-3">{{ $label }}</th>@endforeach
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                @forelse($items as $item)
                    <tr class="align-top hover:bg-gray-50">
                        <td class="whitespace-nowrap px-4 py-3 text-gray-500">{{ $item->created_at?->format('d/m/Y H:i') }}</td>
                        @foreach($columns as $field => $label)
                            <td class="max-w-xs px-4 py-3 text-gray-700">{{ $item->{$field} ?? '—' }}</td>
                        @endforeach
                    </tr>
                @empty
                    <tr><td colspan="{{ count($columns) + 1 }}" class="px-4 py-12 text-center text-gray-400">Ainda não existem registos.</td></tr>
                @endforelse
            </tbody>
        </table>
    </div>
</x-app-layout>
