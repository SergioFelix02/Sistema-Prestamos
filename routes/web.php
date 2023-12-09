<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MontoController;
use App\Http\Controllers\PlazoController;
use App\Http\Controllers\PrestamoController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AmortizacionController;
use Illuminate\Support\Facades\Route;
use App\Models\Cliente;

// DB::listen(function ($query){
//     dump($query->sql);
// });

Route::view('/', 'welcome')->name('welcome');


Route::middleware('auth')->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Clientes
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
    Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
    Route::get('/clientes/{cliente}/edit', [ClienteController::class, 'edit'])->name('clientes.edit');
    Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');
    Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

    //Montos
    Route::get('/montos', [MontoController::class, 'index'])->name('montos.index');
    Route::post('/montos', [MontoController::class, 'store'])->name('montos.store');
    Route::get('/montos/{monto}/edit', [MontoController::class, 'edit'])->name('montos.edit');
    Route::put('/montos/{monto}', [MontoController::class, 'update'])->name('montos.update');
    Route::delete('/montos/{monto}', [MontoController::class, 'destroy'])->name('montos.destroy');

    //Plazos
    Route::get('/plazos', [PlazoController::class, 'index'])->name('plazos.index');
    Route::post('/plazos', [PlazoController::class, 'store'])->name('plazos.store');
    Route::get('/plazos/{plazo}/edit', [PlazoController::class, 'edit'])->name('plazos.edit');
    Route::put('/plazos/{plazo}', [PlazoController::class, 'update'])->name('plazos.update');
    Route::delete('/plazos/{plazo}', [PlazoController::class, 'destroy'])->name('plazos.destroy');

    //Prestamos
    Route::get('/prestamos', [PrestamoController::class, 'index'])->name('prestamos.index');
    Route::post('/prestamos', [PrestamoController::class, 'store'])->name('prestamos.store');
    Route::get('/prestamos/{prestamo}/edit', [PrestamoController::class, 'edit'])->name('prestamos.edit');
    Route::put('/prestamos/{prestamo}', [PrestamoController::class, 'update'])->name('prestamos.update');
    Route::delete('/prestamos/{prestamo}', [PrestamoController::class, 'destroy'])->name('prestamos.destroy');


    Route::get('/amortizaciones/{prestamo}', [AmortizacionController::class, 'index'])->name('amortizaciones.index');
    Route::delete('/amortizaciones/{amortizacion}', [AmortizacionController::class, 'destroy'])->name('amortizaciones.destroy');

});

require __DIR__.'/auth.php';
