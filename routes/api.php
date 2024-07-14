<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\v1\cliente_controller;
use App\Http\Controllers\api\v1\empleado_controller;
use App\Http\Controllers\api\v1\AutoController;

Route::prefix('v1')->group(function () {


    Route::get('autos', [AutoController::class, 'index']);
    Route::post('autos', [AutoController::class, 'store']);
    Route::get('autos/{auto}', [AutoController::class, 'show']);
    Route::put('autos/{auto}', [AutoController::class, 'update']);
    Route::delete('autos/{auto}', [AutoController::class, 'destroy']);
    

    Route::get('clientes', [cliente_controller::class, 'index']);
    Route::post('clientes',[cliente_controller::class, 'store']);
    Route::get('clientes/{cliente}', [cliente_controller::class, 'show']);
    Route::put('clientes/{cliente}', [cliente_controller::class, 'update']);
    Route::delete('clientes/{cliente}',[cliente_controller::class, 'destroy']);

    Route::get('empleados',[empleado_controller::class, 'index']);
    Route::post('empleados',[empleado_controller::class, 'store']);
    Route::get('empleados/{empleado}',[empleado_controller::class, 'show']);
    Route::put('empleados/{empleado}',[empleado_controller::class, 'update']);
    Route::delete('empleados/{empleado}',[empleado_controller::class, 'destroy']);

    
});