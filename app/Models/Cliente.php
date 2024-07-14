<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    protected $fillable = ['Nombre', 'Apellido', 'Telefono', 'empleado_id'];
    public function empleado()
    {
        return $this->belongsTo(Empleado::class);
    }
}
