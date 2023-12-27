<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Catalogo de Plazos') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('plazos.store') }}">
                        @csrf
                        <label class="block text-sm font-bold mb-2 dark:text-white text-black">Agregar Plazo:</label>
                        <textarea
                            name="plazo"
                            class="block w-full rounded-md border-gray-300 bg-white shadow-sm transition-colors duration-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:border-gray-600 dark:bg-gray-800 dark:text-white dark:focus:border-indigo-300 dark:focus:ring dark:focus:ring-indigo-200 dark:focus:ring-opacity-50"
                            placeholder="Plazo"
                        >{{ old('plazo') }}</textarea>
                        <x-input-error :messages="$errors->get('plazo')" class="mt-2"/>
                        <x-primary-button class="mt-4">Guardar</x-primary-button>
                        <x-secondary-button type="reset" class="mt-4" >Cancelar</x-secondary-button>
                    </form>
                </div>
            </div>

            <div class="mt-6 p-6 bg-white dark:bg-gray-800 shadow-sm rounded-lg divide-y dark:divide-gray-900 dark:text-white text-black">
                <table id="myTable" class="display table-hover table-sm text-center">
                        <caption>Registro de Plazos</caption>
                    <thead>
                        <tr>
                            <th class="col-sm-1 text-center">ID</th>
                            <th class="col-sm-1 text-center">Plazos</th>
                            <th class="col-sm-1 text-center">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($plazos as $plazo)
                        <tr>
                            <td>{{ $plazo->id }}</td>
                            <td>{{ $plazo->plazo }}</td>
                            <td class="no-datatables">
                                <button style="margin-right: 10px;">
                                    <a href="{{ route('plazos.edit', $plazo) }}">
                                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125"></path>
                                        </svg>
                                    </a>
                                </button>
                                <button>
                                    <form method="POST" action="{{ route('plazos.destroy', $plazo) }}">
                                        @csrf @method('DELETE')
                                        <a href="{{ route('plazos.destroy', $plazo) }}" onclick="event.preventDefault(); this.closest('form').submit();">
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
