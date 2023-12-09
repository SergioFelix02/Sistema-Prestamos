<?php

namespace App\Http\Controllers;

use App\Models\Amortizacion;
use App\Models\Prestamo;
use App\Models\Cliente;
use App\Models\Monto;
use App\Models\Plazo;

use Illuminate\Http\Request;

class PrestamoController extends Controller
{
    public function index()
    {
        $amortizaciones = Amortizacion::all();
        $prestamos = Prestamo::all();
        $clientes = Cliente::all();
        $montos = Monto::all();
        $plazos = Plazo::all();

        return view('prestamos.index', compact('clientes', 'prestamos', 'montos', 'plazos'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'cliente_id' => 'required',
            'monto_id' => 'required',
            'plazo_id' => 'required',
        ]);

        $prestamo = new Prestamo();
        $prestamo->cliente_id = $validatedData['cliente_id'];
        $prestamo->monto_id = $validatedData['monto_id'];
        $prestamo->plazo_id = $validatedData['plazo_id'];
        $prestamo->save();

        $cant = floatval($prestamo->monto->monto);
        $pago = $prestamo->plazo->plazo;
        $fecha = $prestamo->created_at;
        $fecha = date("Y/m/d",strtotime($fecha."+ 2 week"));

        for ($i = 1; $i<=$pago; $i++){
            $amortizacion = new Amortizacion();
            $amortizacion->pago = $i;
            $amortizacion->fecha = $fecha;
            $amortizacion->prestamo_id = $prestamo->id;
            $amortizacion->interes = ($cant/$pago) * 0.11;
            $amortizacion->abono = ($cant/$pago) * 1.11;
            $amortizacion->save();
            $fecha = date("Y/m/d",strtotime($fecha."+ 2 week"));
        }
        return to_route('prestamos.index')->with('status', __('Prestamo Registrado'));
    }

    public function show(Prestamo $prestamo)
    {
        //
    }

    public function edit($id)
    {
        $prestamo = Prestamo::find($id);
        $clientes = Cliente::all();
        $montos = Monto::all();
        $plazos = Plazo::all();
        return view('prestamos.edit', compact('prestamo', 'clientes', 'montos', 'plazos'));
    }

    public function update(Request $request, Prestamo $prestamo)
    {

        $prestamo->delete();

        $validatedData = $request->validate([
            'cliente_id' => 'required',
            'monto_id' => 'required',
            'plazo_id' => 'required',
        ]);

        $prestamo = new Prestamo();
        $prestamo->cliente_id = $validatedData['cliente_id'];
        $prestamo->monto_id = $validatedData['monto_id'];
        $prestamo->plazo_id = $validatedData['plazo_id'];
        $prestamo->save();

        $cant = floatval($prestamo->monto->monto);
        $pago = $prestamo->plazo->plazo;
        $fecha = $prestamo->created_at;
        $fecha = date("Y/m/d",strtotime($fecha."+ 2 week"));

        for ($i = 1; $i<=$pago; $i++){
            $amortizacion = new Amortizacion();
            $amortizacion->pago = $i;
            $amortizacion->fecha = $fecha;
            $amortizacion->prestamo_id = $prestamo->id;
            $amortizacion->interes = ($cant/$pago) * 0.11;
            $amortizacion->abono = ($cant/$pago) * 1.11;
            $amortizacion->save();
            $fecha = date("Y/m/d",strtotime($fecha."+ 2 week"));
        }

        return redirect()->route('prestamos.index')->with('status', __('Prestamo Actualizado'));

    }

    public function destroy(Prestamo $prestamo)
    {
        $prestamo->delete();
        return to_route('prestamos.index')->with('status', __('Prestamo Eliminado'));
    }
}
