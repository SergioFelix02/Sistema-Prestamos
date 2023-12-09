<?php

namespace App\Http\Controllers;

use App\Models\Amortizacion;
use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Cliente;

class AmortizacionController extends Controller
{
    public function index($prestamo_id)
    {
        $prestamos = Prestamo::all();
        $clientes = Cliente::all();
        $amortizaciones = Amortizacion::where('prestamo_id', $prestamo_id)->get();
        return view('amortizaciones.index', compact('amortizaciones', 'prestamos', 'clientes'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(amortizacion $amortizacion)
    {

    }

    public function edit(amortizacion $amortizacion)
    {
        //
    }

    public function update(Request $request, amortizacion $amortizacion)
    {
        //
    }

    public function destroy(Amortizacion $amortizacion)
    {
        $amortizacion->delete();
        return to_route('prestamos.index')->with('status', __('Pago Realizado'));
    }
}
