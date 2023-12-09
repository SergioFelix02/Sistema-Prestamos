<?php

namespace App\Listeners;

use App\Events\AmortizacionDeleting;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class AmortizacionDeletingListener
{
    public function handle(AmortizacionDeleting $event)
    {
        $amortizacion = $event->amortizacion;
        $prestamo = $amortizacion->prestamo;

        // Verifica si es la última amortización asociada al prestamo
        if ($prestamo->amortizaciones->count() === 1) {
            $prestamo->delete(); // Elimina el prestamo si es la última amortización
        }
    }
}
