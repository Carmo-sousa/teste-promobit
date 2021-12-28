<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="table w-full min-w-max border-collapse mx-3">
                        <div class="table-header-group">
                            <div class="table-row text-lg text-left border border-gray-300 px-1">
                                <div class="table-cell">Tag</div>
                                <div class="table-cell">Quantidade de produtos</div>
                            </div>
                        </div>
                        @foreach($tags as $tag)
                        <div class="table-row-group my-3">
                            <div class="table-row">
                                <div class="table-cell text-left">{{ $tag->name }}</div>
                                <div class="table-cell text-left">{{ $tag->products->count() }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
