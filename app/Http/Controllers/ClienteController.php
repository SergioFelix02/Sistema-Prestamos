<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        return view('clientes.index', [
            'clientes' => Cliente::all()
        ]);
    }

    public function store(Request $request)
    {

        $validated = $request->validate([
            'nombre' => ['required', 'min:3', 'max:255'],
        ]);

        Cliente::create([
            'nombre' => $request->get('nombre')
        ]);

        return to_route('clientes.index')->with('status', __('Cliente Registrado'));
    }

    public function show(Cliente $cliente)
    {
        //
    }

    public function edit(Cliente $cliente)
    {
        return view('clientes.edit', [
            'cliente' => $cliente
        ]);
    }

    public function update(Request $request, Cliente $cliente)
    {
        $validated = $request->validate([
            'nombre' => ['required', 'min:3', 'max:255'],
        ]);

        $cliente->update($validated);

        if ($cliente->wasChanged()) {
            return redirect()->route('clientes.index')->with('status', __('Cliente Actualizado'));
        } else {
            return redirect()->route('clientes.index')->with('status', __('No se realizaron cambios'));
        }
    }

    public function destroy(Cliente $cliente)
    {
        $cliente->delete();

        return to_route('clientes.index')->with('status', __('Cliente Eliminado'));
    }
}
