<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Editar Prestamo') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('prestamos.update', $prestamo) }}">
                        @csrf @method('put')
                        <label for="cliente_id" class="block text-gray-700 text-sm font-bold mb-2">Selecciona un cliente:</label>
                        <div class="relative">
                            <select id="cliente_id" name="cliente_id" class="block appearance-none w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300 dark:text-white">
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}" @if ($cliente->id === $prestamo->cliente_id) selected @endif>
                                        {{ $cliente->nombre }}
                                    </option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 7l5 5 5-5z"/></svg>
                            </div>
                            <label for="monto_id" class="block text-gray-700 text-sm font-bold mb-2">Selecciona un monto:</label>
                            <div class="relative">
                                <select id="monto_id" name="monto_id" class="block appearance-none w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300 dark:text-white">
                                    @foreach ($montos as $monto)
                                        <option value="{{ $monto->id }}" @if ($monto->id  === $prestamo->monto_id) selected @endif>
                                            {{ $monto->monto }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 7l5 5 5-5z"/></svg>
                                </div>
                            </div>

                            <label for="plazo_id" class="block text-gray-700 text-sm font-bold mb-2">Selecciona un plazo:</label>
                            <div class="relative">
                                <select id="plazo_id" name="plazo_id" class="block appearance-none w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300 dark:text-white">
                                    @foreach ($plazos as $plazo)
                                        <option value="{{ $plazo->id }}" @if ($plazo->id  === $prestamo->plazo_id) selected @endif>
                                            {{ $plazo->plazo }}
                                        </option>
                                    @endforeach
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 7l5 5 5-5z"/></svg>
                                </div>
                            </div>
                            <x-input-error :messages="$errors->get('prestamo')" class="mt-2"/>
                            <x-primary-button class="mt-4">Guardar Cambios</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
