<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Eventos List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white border-b border-gray-200">

                    <div class="mb-4">
                        <a href="{{ route('eventos.create') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">Create Evento</a>
                    </div>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 text-center">ID</th>
                                <th class="px-4 py-2 text-gray-900 text-center">Nombre</th>
                                <th class="px-4 py-2 text-gray-900 text-center">Fecha</th>
                                <th class="px-4 py-2 text-gray-900 text-center">Descripción</th>
                                <th class="px-4 py-2 text-gray-900 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($eventos as $evento)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 text-center">{{ $evento->id }}</td>
                                <td class="border px-4 py-2 text-gray-900 text-center">{{ $evento->nombre }}</td>
                                <td class="border px-4 py-2 text-gray-900 text-center">{{ $evento->fecha }}</td>
                                <td class="border px-4 py-2 text-gray-900 text-center">{{ $evento->descripcion }}</td>

                                <td class="border px-4 py-2 text-center">
                                    <div class="flex justify-center">
                                        <a href="{{ route('eventos.edit', $evento->id) }}" class="bg-violet-500 hover:bg-violet-600 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                        <button type="button" class="bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $evento->id }}')">Delete</button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
