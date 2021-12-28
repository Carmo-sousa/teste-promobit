<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Novo produto') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('products.store') }}">
                        @csrf
                        <div>
                            <x-label for="name" :value="__('Nome')" />

                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus value="{{ old('name') }}" />
                        </div>
                        <div class="mt-3">
                            @if(count($errors) > 0 )
                                @foreach($errors->all() as $error)
                                    <div class="text-red-500 text-sm p-2 transition-opacity">{{$error}}</div>
                                @endforeach
                            @endif
                            <x-label for="tags" :value="__('Tags')" />
                            @foreach ($tags as $tag)
                                <div>
                                    <input type="checkbox" name="tags[]" value="{{ $tag->id }}" class="rounded">
                                    <label for="tags" class="text-slate-700">{{ $tag->name }}</label>
                                </div>
                            @endforeach
                        </div>
                        <div class="my-3 flex flex-1 justify-end">
                            <x-button class="ml-3">
                                {{ __('Salvar') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
