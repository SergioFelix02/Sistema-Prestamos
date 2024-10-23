<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Prestamos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('prestamos.store') }}">
                        @csrf
                        <label class="block font-bold text-gray-800 dark:text-gray-200">Agregar Prestamo:</label>
                        <label for="cliente_id" class="block text-sm font-bold mb-2 mt-2 text-gray-800 dark:text-gray-200">Selecciona un Cliente:</label>
                        <div class="relative">
                            <select id="cliente_id" name="cliente_id" class="block appearance-none w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300 dark:text-white">
                                @foreach ($clientes as $cliente)
                                    <option value="{{ $cliente->id }}">{{ $cliente->nombre }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 7l5 5 5-5z"/></svg>
                            </div>
                        </div>
                        <label for="monto_id" class="block text-sm font-bold mb-2 mt-2 text-gray-800 dark:text-gray-200">Selecciona un Monto:</label>
                        <div class="relative">
                            <select id="monto_id" name="monto_id" class="block appearance-none w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300 dark:text-white">
                                @foreach ($montos as $monto)
                                    <option value="{{ $monto->id }}">{{ $monto->monto }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 7l5 5 5-5z"/></svg>
                            </div>
                        </div>
                        <label for="plazo_id" class="block text-sm font-bold mb-2 mt-2 text-gray-800 dark:text-gray-200">Selecciona un Plazo (Quincenal):</label>
                        <div class="relative">
                            <select id="plazo_id" name="plazo_id" class="block appearance-none w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-600 hover:border-gray-500 px-4 py-2 pr-8 rounded shadow leading-tight focus:outline-none focus:shadow-outline-blue focus:border-blue-300 dark:text-white">
                                @foreach ($plazos as $plazo)
                                    <option value="{{ $plazo->id }}">{{ $plazo->plazo }}</option>
                                @endforeach
                            </select>
                            <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M5 7l5 5 5-5z"/></svg>
                            </div>
                        </div>
                        <x-input-error :messages="$errors->get('prestamo')" class="mt-2"/>
                        <x-primary-button class="mt-4">Agregar Prestamo</x-primary-button>
                        <x-secondary-button type="reset" class="mt-4" >Cancelar</x-secondary-button>
                    </form>
                </div>
            </div>

            <div class="mt-6 p-6 bg-white dark:bg-gray-800 shadow-sm rounded-lg divide-y dark:divide-gray-900 dark:text-white text-black">
                <table id="myTable" class="display table-hover table-sm text-center">
                    <caption>Prestamos Activos</caption>
                    <thead>
                        <tr>
                            <th class="col-sm-1 text-center">ID</th>
                            <th class="col-sm-1 text-center">Cliente</th>
                            <th class="col-sm-1 text-center">Monto del Préstamo</th>
                            <th class="col-sm-1 text-center">Plazos</th>
                            <th class="col-sm-1 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prestamos as $prestamo)
                        <tr>
                            <td>{{ $prestamo->id }}</td>
                            <td>{{ $prestamo->cliente->nombre }}</td>
                            <td>{{ '$' . number_format(($prestamo->monto), 2)}}</td>
                            <td>{{ $prestamo->plazo }}</td>
                            <td class="no-datatables">
                                <button style="margin-right: 10px;">
                                    <a href="{{ route('amortizaciones.index', $prestamo) }}">
                                    <svg class="w-5 h-5 text-gray-500 dark:text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"></path>
                                    </svg>
                                </button>
                                <button style="margin-right: 10px;">
                                    <a href="{{ route('prestamos.edit', $prestamo) }}">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"></path>
                                        </svg>
                                    </a>
                                </button>
                                <button>
                                    <form method="POST" action="{{ route('prestamos.destroy', $prestamo) }}">
                                        @csrf @method('DELETE')
                                        <a href="{{ route('amortizaciones.destroy', $prestamo) }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0"></path>
                                            </svg>
                                        </a>
                                    </form>
                                </button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            {{-- <x-primary-button class="mt-4">
                Historial
            </x-primary-button> --}}

        </div>
    </div>

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>

    <script>
        let table = $('#myTable').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.25/i18n/Spanish.json"
            }
         });
    </script>

</x-app-layout>
