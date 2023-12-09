<?php

namespace App\Http\Controllers;

use App\Models\Monto;
use Illuminate\Http\Request;

class MontoController extends Controller
{
    public function index()
    {
        return view('montos.index', [
            'montos' => Monto::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'monto' => ['required', 'min:100', 'numeric'],
        ]);

        Monto::create([
            'monto' => $request->get('monto')
        ]);

        return to_route('montos.index')->with('status', __('Monto Registrado'));
    }

    public function show(Monto $monto)
    {
        //
    }

    public function edit(Monto $monto)
    {
        return view('montos.edit', [
            'monto' => $monto
        ]);
    }

    public function update(Request $request, Monto $monto)
    {
        $validated = $request->validate([
            'monto' => ['required', 'min:100', 'numeric'],
        ]);

        $monto->update($validated);

        if ($monto->wasChanged()) {
            return redirect()->route('montos.index')->with('status', __('Monto Actualizado'));
        } else {
            return redirect()->route('montos.index')->with('status', __('No se realizaron cambios'));
        }
    }

    public function destroy(Monto $monto)
    {
        $monto->delete();
        return to_route('montos.index')->with('status', __('Monto Eliminado'));
    }
}
