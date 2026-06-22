<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-medium text-2xl text-black">
                Páginas do Site
            </h2>
        </div>
    </x-slot>

    @if(session('success'))
        <div class="mb-6 bg-black text-white px-4 py-3 rounded-sm shadow-sm" role="alert">
            <span class="block sm:inline font-light text-sm">{{ session('success') }}</span>
        </div>
    @endif

    <form action="{{ route('admin.pages.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="space-y-8">
            @foreach($sections as $sectionName => $items)
                <div class="bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden">
                    <div class="bg-gray-50 border-b border-gray-100 px-6 py-4">
                        <h3 class="text-lg font-medium text-black capitalize">Secção: {{ str_replace('_', ' ', $sectionName) }}</h3>
                    </div>
                    
                    <div class="p-6 space-y-6">
                        @foreach($items as $item)
                            <div>
                                <label for="field_{{ $item->id }}" class="block text-sm font-medium text-gray-700 mb-2 capitalize">
                                    {{ str_replace('_', ' ', $item->key) }}
                                </label>
                                
                                @if($item->type === 'text')
                                    @if(strlen($item->value) > 100)
                                        <textarea id="field_{{ $item->id }}" name="{{ $item->id }}" rows="4" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2">{{ $item->value }}</textarea>
                                    @else
                                        <input type="text" id="field_{{ $item->id }}" name="{{ $item->id }}" value="{{ $item->value }}" class="w-full border-gray-300 rounded shadow-sm focus:ring-black focus:border-black bg-white px-4 py-2">
                                    @endif
                                    
                                @elseif($item->type === 'image')
                                    @if($item->value)
                                        <div class="mb-3">
                                            <img src="{{ asset($item->value) }}" alt="Current Image" class="h-32 object-cover rounded border border-gray-200">
                                        </div>
                                    @endif
                                    <input type="file" id="field_{{ $item->id }}" name="{{ $item->id }}" accept="image/*" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-medium file:bg-gray-50 file:text-black hover:file:bg-gray-100 border border-gray-200 rounded p-1">
                                    
                                @elseif($item->type === 'video')
                                    @if($item->value)
                                        <div class="mb-3">
                                            <video src="{{ asset($item->value) }}" controls class="h-32 rounded border border-gray-200"></video>
                                        </div>
                                    @endif
                                    <input type="file" id="field_{{ $item->id }}" name="{{ $item->id }}" accept="video/mp4,video/webm" class="w-full text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 file:rounded file:border-0 file:text-sm file:font-medium file:bg-gray-50 file:text-black hover:file:bg-gray-100 border border-gray-200 rounded p-1">
                                @endif
                                
                            </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
        </div>

        <div class="mt-8 pt-4 border-t border-gray-200 flex justify-end">
            <button type="submit" class="bg-black text-white py-3 px-8 rounded hover:bg-gray-900 transition-colors uppercase tracking-widest text-sm font-medium">
                Guardar Alterações
            </button>
        </div>
    </form>
</x-app-layout>
