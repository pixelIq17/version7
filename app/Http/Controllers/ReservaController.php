<?php

namespace App\Http\Controllers;

use App\Models\Reserva;
use Illuminate\Http\Request;

class ReservaController extends Controller
{

    public function index()
    {
        $reservas = Reserva::all();
        return view('reservas.index', compact('reservas'));

        // Alternativas a compact
        // return view('reservas.index')->with('reservas', $reservas);
        // return view('reservas.index', ['reservas' => $reservas]);
    }

    public function create()
    {
        return view('reservas.create');
    }

    public function store(Request $request)
    {
        
        // Validar los datos del formulario
        $request->validate([
            'iduser' => 'required|integer',
            'fecha' => 'required|date',
            'comentario' => 'required|string|min:5|max:255',
            // Añade aquí las validaciones necesarias para otros campos
        ]);
        // Crear una nueva reserva usando el método `create` del modelo Reserva
        Reserva::create($request->all());
    
        // Redireccionar a la vista de listado de reservas o a donde sea necesario
        return redirect()->route('reservas.index');
    }
    public function show(string $id)
    {
        $reserva = Reserva::findOrFail($id);
        return view('reservas.show', compact('reserva'));
    }

    public function edit(string $id)
    {
        $reserva = Reserva::findOrFail($id);
        return view('reservas.edit', compact('reserva'));
    }

    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'iduser' => 'required|integer',
            'fecha' => 'required|date',
            'comentario' => 'required|string|min:5|max:255',
        ]);

        // Buscar la reserva por su ID
        $reserva = Reserva::findOrFail($id);

        // Actualizar los datos de la reserva
        $reserva->update($request->all());

        // Redireccionar a la vista de listado de reservas
        return redirect()->route('reservas.index');
    }

    public function destroy(string $id)
    {
        $reserva = Reserva::find($id);

        if (!$reserva) {
            // Manejar la situación donde no se encuentra la reserva
            return redirect()->route('reservas.index')->with('error', 'Reserva no encontrada.');
        }

        $reserva->delete();

        return redirect()->route('reservas.index')->with('success', 'Reserva eliminada correctamente.');
    }
}
