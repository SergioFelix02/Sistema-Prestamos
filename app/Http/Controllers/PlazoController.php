<?php

namespace App\Http\Controllers;

use App\Models\Plazo;
use Illuminate\Http\Request;

class PlazoController extends Controller
{
    public function index()
    {
        return view('plazos.index', [
            'plazos' => plazo::all()
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'plazo' => ['required', 'min:1', 'max:24', 'integer'],
        ]);

        plazo::create([
            'plazo' => $request->get('plazo')
        ]);

        return to_route('plazos.index')->with('status', __('Plazo Registrado'));
    }

    public function show(Plazo $plazo)
    {
        //
    }

    public function edit(Plazo $plazo)
    {
        return view('plazos.edit', [
            'plazo' => $plazo
        ]);
    }

    public function update(Request $request, Plazo $plazo)
    {
        $validated = $request->validate([
            'plazo' => ['required', 'min:1', 'max:24', 'integer'],
        ]);

        $plazo->update($validated);

        if ($plazo->wasChanged()) {
            return redirect()->route('plazos.index')->with('status', __('Plazo Actualizado'));
        } else {
            return redirect()->route('plazos.index')->with('status', __('No se realizaron cambios'));
        }
    }

    public function destroy(Plazo $plazo)
    {
        $plazo->delete();
        return to_route('plazos.index')->with('status', __('Plazo Eliminado'));
    }
}
