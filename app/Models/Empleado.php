<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $table = 'empleados';

    protected $fillable = ['Codigo','Nombre','Apellido','Cargo'];
    public function clientes()
    {
        return $this->hasMany(Cliente::class);
    }

    // Relación uno a muchos con Autos
    public function autos()
    {
        return $this->hasMany(Auto::class);
    }

}
