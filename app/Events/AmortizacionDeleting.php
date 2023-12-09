<?php

namespace App\Events;

use App\Models\Amortizacion;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AmortizacionDeleting
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $amortizacion;

    public function __construct(Amortizacion $amortizacion)
    {
        $this->amortizacion = $amortizacion;
    }
}
