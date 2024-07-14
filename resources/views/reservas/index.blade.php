<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Reservas List') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="bg-white border-b border-gray-200">

                    <div class="mb-4">
                        <a href="{{ route('reservas.create') }}" class="bg-cyan-500 hover:bg-cyan-600 text-white font-bold py-2 px-4 rounded">Create Reserva</a>
                    </div>

                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 text-gray-900 text-center">ID</th>
                                <th class="px-4 py-2 text-gray-900 text-center">User ID</th>
                                <th class="px-4 py-2 text-gray-900 text-center">Fecha</th>
                                <th class="px-4 py-2 text-gray-900 text-center">Comentario</th>
                                <th class="px-4 py-2 text-gray-900 text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reservas as $reserva)
                            <tr>
                                <td class="border px-4 py-2 text-gray-900 text-center">{{ $reserva->id }}</td>
                                <td class="border px-4 py-2 text-gray-900 text-center">{{ $reserva->iduser }}</td>
                                <td class="border px-4 py-2 text-gray-900 text-center">{{ $reserva->fecha }}</td>
                                <td class="border px-4 py-2 text-gray-900 text-center">{{ $reserva->comentario }}</td>

                                <td class="border px-4 py-2 text-center">
                                    <div class="flex justify-center">
                                        <a href="{{ route('reservas.edit', $reserva->id) }}" class="bg-violet-500 hover:bg-violet-600 text-white font-bold py-2 px-4 rounded mr-2">Edit</a>
                                        <button type="button" class="bg-pink-400 hover:bg-pink-500 text-white font-bold py-2 px-4 rounded" onclick="confirmDelete('{{ $reserva->id }}')">Delete</button>
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

<script>
    // Forma 1
    function confirmDelete(id) {
        alertify.confirm("¿Confirm delete record?",
        function(){
            let form = document.createElement('form');
                    form.method = 'POST';
                    form.action = '/reservas/' + id;
                    form.innerHTML = '@csrf @method("DELETE")';
                    document.body.appendChild(form);
                    form.submit();
            alertify.success('Ok');
        },
        function(){
            alertify.error('Cancel');
        });
    }

    // Forma 2
    /* function confirmDelete(id) {
        alertify.confirm("¿Confirm delete record?", function (e) {
            if (e) {
                let form = document.createElement('form');
                form.method = 'POST';
                form.action = '/reservas/' + id;
                form.innerHTML = '@csrf @method("DELETE")';
                document.body.appendChild(form);
                form.submit();
            } else {
                alertify.error('Cancel');
                return false;
            }
        });
    } */
</script>
