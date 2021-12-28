<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tags') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="flex justify-between my-3 mx-3 border-b-2 py-3">
                        <h3 class="text-lg leading-6 text-gray-900">
                            {{ __('Tags') }}
                        </h3>
                        @if (session('success'))
                            <div class="absolute top-5 right-5 shadow bg-green-500 rounded p-3 transition-all duration-100 flex toast">
                                <span class="mx-3">{{ session('success') }}</span>
                                <svg class="w-6 h-6 text-white close" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        @endif
                        <div class="flex items-center">
                            <a href="{{ route('tags.create') }}" class="px-3 py-2 rounded-md text-sm font-medium leading-5 text-white bg-slate-800 hover:bg-slate-900 focus:outline-none focus:shadow-outline-indigo focus:border-indigo-700 active:bg-indigo-700 transition ease-in-out duration-150">
                                {{ __('Adicionar') }}
                            </a>
                        </div>
                    </div>
                    <div class="flex flex-1">
                        @if ($tags->count())
                        <div class="table w-full border-collapse mx-3">
                            <div class="table-header-group">
                              <div class="table-row text-lg text-center border border-gray-300">
                                <div class="table-cell">ID</div>
                                <div class="table-cell">Nome</div>
                                <div class="table-cell">Ação</div>
                              </div>
                            </div>
                            <div class="table-row-group">
                                @foreach ($tags as $tag)
                                <div class="table-row">
                                    <div class="table-cell text-left">{{ $tag->id }}</div>
                                    <div class="table-cell text-left">{{ $tag->name }}</div>
                                    <div class="table-cell my-2 py-3 text-right">
                                        <a href="{{ route('tags.edit', $tag->id) }}" class="border rounded-md my-2 p-2 text-white bg-slate-800 hover:bg-slate-900 transition ease-in-out duration-150 mx-2">
                                            {{ __('Editar') }}
                                        </a>
                                        <a href="{{ route('tags.delete', $tag['id']) }}" class="border rounded-md my-2 p-2 text-white bg-red-600 hover:bg-red-700 transition ease-in-out duration-150">
                                            {{ __('Excluir') }}
                                        </a>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                          </div>
                        @else
                        <div class="flex flex-1">
                            <div class="flex-1">
                                <div class="px-4 py-3 text-center text-gray-500">
                                    {{ __('Nenhuma tag cadastrada!') }}
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
