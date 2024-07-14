<?php
namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;


class AutoController extends Controller
{
    public function index()
    {
        $autos = Auto::all();
        return response()->json($autos);
    }

    public function store(Request $request)
    {
        $request->validate([
            'Numero_placa' => 'required|string',
            'Modelo' => 'required|string',
            'Marca' => 'required|string',
            'Precio_auto' => 'required|numeric',
            'cliente_id' => 'required|integer',
            'empleado_id' => 'required|integer',
        ]);
    
        try {
            $auto = Auto::create($request->all());
    
            return response()->json([
                "message" => "Registro Agregado Correctamente!",
                "auto" => $auto
            ], 201);
        } catch (\Exception $e) {
            Log::error($e->getMessage());
    
            return response()->json([
                "message" => "Error al agregar el registro.",
                "error" => $e->getMessage()
            ], 500);
        }
    }
    
    public function show($auto)
    {
        $auto = Auto::find($auto);
        if ($auto) {
            return response()->json($auto);
        } else {
            return response()->json([
                "message" => "El Registro no se encuentra."
            ], 404);
        }
    }

    public function update(Request $request, $auto)
    {
        $request->validate([
            'Numero_placa' => 'required|string',
            'Modelo' => 'required|string',
            'Marca' => 'required|string',
            'Precio_auto' => 'required|numeric',
        ]);

        $auto = Auto::find($auto);
        if ($auto) {
            $auto->update($request->all());
            return response()->json([
                "message" => "Registro Actualizado Correctamente!",
                "auto" => $auto
            ]);
        } else {
            return response()->json([
                "message" => "El Registro no se encuentra."
            ], 404);
        }
    }

    public function destroy($auto)
    {
        $auto = Auto::find($auto);
        if ($auto) {
            $auto->delete();
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
