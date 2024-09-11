<?php

use App\Http\Controllers\ReservasController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/reservas',[ReservasController::class, 'index'])->name('reservas.index');
Route::get('/reservas/create', [ReservasController::class, 'create'])->name('reservas.create');
Route::post('/reservas', [ReservasController::class, 'store'])->name('reservas.store');
Route::get('/reservas/{reserva}', [ReservasController::class, 'show'])->name('reservas.show');
Route::get('/reservas/{reserva}/edit', [ReservasController::class, 'edit'])->name('reservas.edit');
Route::put('/reservas/{reserva}', [ReservasController::class, 'update'])->name('reservas.update');
Route::delete('/reservas/{reserva}', [ReservasController::class, 'destroy'])->name('reservas.destroy');
Route::get('/reservas-reporte', [ReservasController::class, 'generarReportePDF'])->name('reservas.reporte');
