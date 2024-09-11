<?php

namespace App\Http\Controllers;
use App\Models\Reserva;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ReservasController extends Controller
{
    public function index(){
        {
            $reservas = Reserva::paginate(10); 
            return view('reservas.index', compact('reservas'));
        }
    }
    public function create()
{
    return view('reservas.create');  
}

public function store(Request $request)
{
    $request->validate([
        'nombre_sala' => 'required|string|max:255',
        'fecha_reserva' => 'required|date',
        'hora_inicio' => 'required|integer|min:0|max:23',
        'hora_fin' => 'required|integer|min:0|max:23',
        'nombre_cliente' => 'required|string|max:255',
    ]);

    Reserva::create([
        'nombre_sala' => $request->nombre_sala,
        'fecha_reserva' => $request->fecha_reserva,
        'hora_inicio' => $request->hora_inicio,
        'hora_fin' => $request->hora_fin,
        'nombre_cliente' => $request->nombre_cliente,
    ]);

    return redirect()->route('reservas.index')->with('success', 'Reserva agregada con éxito');
    }

    public function show($id)
    {
    $reserva = Reserva::findOrFail($id);
    return view('reservas.show', compact('reserva'));
    }  
    public function edit($id)
    {
    $reserva = Reserva::findOrFail($id);

    return view('reservas.edit', compact('reserva'));
    }

public function update(Request $request, $id)
    {
    $request->validate([
        'nombre_sala' => 'required|string|max:255',
        'fecha_reserva' => 'required|date',
        'hora_inicio' => 'required|integer|min:0|max:23',
        'hora_fin' => 'required|integer|min:0|max:23',
        'nombre_cliente' => 'required|string|max:255',
    ]);

    $reserva = Reserva::findOrFail($id);
    $reserva->update([
        'nombre_sala' => $request->nombre_sala,
        'fecha_reserva' => $request->fecha_reserva,
        'hora_inicio' => $request->hora_inicio,
        'hora_fin' => $request->hora_fin,
        'nombre_cliente' => $request->nombre_cliente,
    ]);

    return redirect()->route('reservas.index')->with('success', 'Reserva actualizada con éxito');
    }
    public function destroy($id)
    {
    
    $reserva = Reserva::findOrFail($id);
    $reserva->delete();

    return redirect()->route('reservas.index')->with('success', 'Reserva eliminada correctamente');
    }
    public function generarReportePDF()
{
    // Obtener todas las reservas
    $reservas = Reserva::all();

    // Cargar la vista de reporte en HTML y pasar los datos de las reservas
    $pdf = Pdf::loadView('reservas.report', compact('reservas'));

    // Descargar el archivo PDF
    return $pdf->stream('reporte_reservas.pdf');
}

}

