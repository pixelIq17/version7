<!-- resources/views/email-sent.blade.php -->
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Envío de Correo Exitoso') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 lg:p-8">
                <div class="text-center">
                    <h3 class="text-2xl font-bold text-green-600 mb-4">¡Correo enviado con éxito!</h3>
                    <p class="text-lg text-gray-700 mb-6">El correo electrónico se ha enviado correctamente.</p>
                    <a href="{{ route('dashboard') }}" class="text-white bg-blue-500 hover:bg-blue-600 py-2 px-4 rounded-lg">Volver al Dashboard</a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
