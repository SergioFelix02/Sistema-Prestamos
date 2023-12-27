<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Amortizaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mt-6 p-6 bg-white dark:bg-gray-800 shadow-sm rounded-lg divide-y dark:divide-gray-900 dark:text-white text-black">
                <table id="myTable" class="display table-hover table-sm text-center">
                    <thead>
                        <tr>
                            <th class="col-sm-1 text-center">No. Pago</th>
                            <th class="col-sm-1 text-center">Fecha</th>
                            <th class="col-sm-1 text-center">Préstamo</th>
                            <th class="col-sm-1 text-center">Interés</th>
                            <th class="col-sm-1 text-center">Abono</th>
                            <th class="col-sm-1 text-center">Realizar Pago</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $totalPrestamo = 0;
                            $totalInteres = 0;
                            $totalAbono = 0;
                            $cliente = "";
                            $plazo = 0;
                        ?>
                        @foreach ($amortizaciones as $amortizacion)
                            <tr>
                                <td>{{ $amortizacion->pago }}</td>
                                <td>{{ $amortizacion->fecha}}</td>
                                <td>{{ '$' . number_format($amortizacion->abono - $amortizacion->interes, 2)}}</td>
                                <td>{{ '$' . $amortizacion->interes}}</td>
                                <td>{{ '$' . $amortizacion->abono }}</td>
                                <td>
                                    <form method="POST" action="{{ route('amortizaciones.destroy', $amortizacion) }}">
                                        @csrf @method('DELETE')
                                        <button :href="route('amortizaciones.destroy', $amortizacion)" onclick="event.preventDefault(); this.closest('form').submit();">
                                            <svg class="w-5 h-5 text-gray-500 dark:text-gray-300" fill="none" stroke="currentColor" stroke-width="1.5" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                                <path clip-rule="evenodd" fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.857-9.809a.75.75 0 00-1.214-.882l-3.483 4.79-1.88-1.88a.75.75 0 10-1.06 1.061l2.5 2.5a.75.75 0 001.137-.089l4-5.5z"></path>
                                                </svg>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            <?php
                                $totalPrestamo += ($amortizacion->abono - $amortizacion->interes);
                                $totalInteres += $amortizacion->interes;
                                $totalAbono += $amortizacion->abono;
                                $cliente = $amortizacion->prestamo->cliente->nombre;
                                $plazo = count($amortizaciones);
                            ?>
                        @endforeach
                        <caption>Cliente: {{$cliente}}</caption>
                        <caption>No. Pagos: {{$plazo}}</caption>
                    </tbody>
                    <!-- Fila de Totales -->
                    <tr>
                        <td colspan="2">Totales:</td>
                        <td>{{ '$' . number_format($totalPrestamo, 2) }}</td>
                        <td>{{ '$' . number_format($totalInteres, 2) }}</td>
                        <td>{{ '$' . number_format($totalAbono, 2) }}</td>
                    </tr>
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
