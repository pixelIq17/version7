<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class cliente_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        return response()->json($clientes);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'Nombre'=> 'required|string',
        'Apellido'=> 'required|string',
        'Telefono'=>'required|string',
        'empleado_id' => 'required|exists:empleados,id', // Validar el empleado
    ]);

    $clientes = Cliente::create($request->all());
    
    return response()->json([
        "message" => "Registro Agregado Correctamente!"
    ]);
}


    /**
     * Display the specified resource.
     */
    public function show($cliente)
    {
        $cliente = Cliente::find($cliente);
        if ($cliente) {
            return response()->json($cliente);
        } else {
            return response()->json([
                "message" => "El Registro no se encuentra."
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $cliente)
    {
        $request->validate([
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Telefono' => 'required|string',
        ]);
    
        $cliente = Cliente::find($cliente);
        if ($cliente) {
            $cliente->update($request->all());
            return response()->json([
                "message" => "Registro Actualizado Correctamente!",
                "cliente" => $cliente
            ]);
        } else {
            return response()->json([
                "message" => "El Registro no se encuentra."
            ], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($cliente)
    {
        $cliente = Cliente::find($cliente);
        if ($cliente) {
            $cliente->delete();
            return response()->json([
                "message" => "Registro Eliminado Correctamente!"
            ]);
        } else {
            return response()->json([
                "message" => "El Registro no se encuentra."
            ], 404);
        }
    }
}
