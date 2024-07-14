<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p>¡Bienvenido al panel de control!</p>
                <p>Aquí puedes gestionar tus eventos y más.</p>

                <!-- Botón para acceder a la lista de  -->
                <a href="{{ route('eventos.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mt-4">
                    Ver Eventos
                </a>
                
                
                </a>
            </div>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                <p>¡Bienvenido al panel de control!</p>
                <p>Aquí puedes gestionar tus reservas y más.</p>

                <!-- Botón para acceder a la lista de  -->
                <a href="{{ route('reservas.index') }}" class="inline-block bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded mt-4">
                    Ver Reservas
                </a>
                
                </a>
            </div>
        </div>
    </div>
</x-app-layout>

