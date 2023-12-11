<?php

namespace App\Http\Controllers;

use App\Models\Amortizacion;
use Illuminate\Http\Request;
use App\Models\Prestamo;
use App\Models\Cliente;
use Illuminate\Database\QueryException;

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
        $prestamo = $amortizacion->prestamo;
        $plazo = $amortizacion->prestamo->plazo_id;
        $monto = $amortizacion->prestamo->monto_id;

        // try {
        //     if($plazo > 1){
        //         $plazo -= 1;
        //     }
        //     if($monto > 1){
        //         $monto -= 1;
        //     }
        //     $amortizacion->prestamo->update([
        //         'monto_id' => $monto,
        //         'plazo_id' => $plazo,
        //     ]);
        //     $amortizacion->delete();
        // } catch (QueryException $e) {
        //     return redirect()->route('prestamos.index')->with('status', 'Error en la base de datos: ' . $e->getMessage());
        // }

        $amortizacion->delete();
        // Verificar si es el último registro
        if ($prestamo->amortizaciones()->count() == 0) {
            return redirect()->route('prestamos.index')->with('status', __('Prestamo Saldado'));
        } else {
            return redirect()->route('prestamos.index')->with('status', __('Pago Realizado'));
        }
    }
}
