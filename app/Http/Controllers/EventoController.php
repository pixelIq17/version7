<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;

class EventoController extends Controller
{

    public function index()
    {
        $eventos = Evento::all();
        return view('eventos.index', compact('eventos'));
    }

    public function create()
    {
        return view('eventos.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'fecha' => 'required|date',
            'descripcion' => 'required|string|min:5|max:255',
        ]);

        // Crear un nuevo evento usando el método `create` del modelo
        Evento::create($request->all());

        // Redireccionar a la vista de listado de eventos
        return redirect()->route('eventos.index');
    }

    public function show(string $id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.show', compact('evento'));
    }

    public function edit(string $id)
    {
        $evento = Evento::findOrFail($id);
        return view('eventos.edit', compact('evento'));
    }

    public function update(Request $request, string $id)
    {
        // Validar los datos del formulario
        $request->validate([
            'nombre' => 'required|string|min:5|max:255',
            'fecha' => 'required|date',
            'descripcion' => 'required|string|min:5|max:255',
        ]);

        // Buscar el evento por su ID
        $evento = Evento::findOrFail($id);

        // Actualizar los datos del evento
        $evento->update($request->all());

        // Redireccionar a la vista de listado de eventos
        return redirect()->route('eventos.index');
    }

    public function destroy(string $id)
    {
        $evento = Evento::findOrFail($id);

        $evento->delete();

        return redirect()->route('eventos.index');
    }
}
