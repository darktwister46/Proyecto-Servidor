<?php

namespace App\Http\Controllers;

use App\Models\reservas;
use Illuminate\Http\Request;

class ReservasController extends Controller
{
    public function store(Request $request)
{
    // Valida los datos del formulario
    $validatedData = $request->validate([
        'nombre_completo' => 'required|max:255',
        'fecha_reserva' => 'required|date',
        'num_personas' => 'required|numeric',
    ]);

    // Crea una nueva reserva a partir de los datos válidos
    $reserva = new reservas();
    $reserva->nombre_completo = $validatedData['nombre_completo'];
    $reserva->fecha_reserva = $validatedData['fecha_reserva'];
    $reserva->num_personas = $validatedData['num_personas'];

    // Guarda la reserva en la base de datos
    $reserva->save();

    // Redirige al usuario a otra página o muestra un mensaje de éxito
    return redirect('/reserva')->with('success', 'Reserva creada con éxito');
}
}
