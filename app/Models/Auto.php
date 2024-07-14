<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;

    protected $table = 'autos';

    protected $fillable = ['Numero_placa', 'Modelo', 'Marca', 'Precio_auto', 'empleado_id'];

    public function cliente()
{
    return $this->belongsTo(Cliente::class);
}

public function empleado()
{
    return $this->belongsTo(Empleado::class);
}

}
