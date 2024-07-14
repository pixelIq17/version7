<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Empleado;
use Illuminate\Http\Request;

class empleado_controller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json($empleados);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Codigo' => 'required|string',
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Cargo' => 'required|string',
        ]);

        $empleado = Empleado::create($request->all());

        return response()->json([
            "message" => "Registro Agregado Correctamente!",
            "empleado" => $empleado
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);
        if ($empleado) {
            return response()->json($empleado);
        } else {
            return response()->json([
                "message" => "El Registro no se encuentra."
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'Codigo' => 'required|string',
            'Nombre' => 'required|string',
            'Apellido' => 'required|string',
            'Cargo' => 'required|string',
        ]);

        $empleado = Empleado::find($id);
        if ($empleado) {
            $empleado->update($request->all());
            return response()->json([
                "message" => "Registro Actualizado Correctamente!",
                "empleado" => $empleado
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
    public function destroy($id)
    {
        $empleado = Empleado::find($id);
        if ($empleado) {
            $empleado->delete();
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
