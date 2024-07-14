<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutosTableSeeder extends Seeder
{
    public function run()
    {
        $autos = [
            [
                'Numero_placa' => 'ABC123',
                'Modelo' => 'Modelo A',
                'Marca' => 'Marca 1',
                'Precio_auto' => 15000,
                'cliente_id' => rand(1, 7), // Cliente aleatorio
                'empleado_id' => rand(1, 5), // Empleado aleatorio
            ],
            [
                'Numero_placa' => 'DEF456',
                'Modelo' => 'Modelo B',
                'Marca' => 'Marca 2',
                'Precio_auto' => 20000,
                'cliente_id' => rand(1, 7),
                'empleado_id' => rand(1, 5),
            ],
            [
                'Numero_placa' => 'GHI789',
                'Modelo' => 'Modelo C',
                'Marca' => 'Marca 3',
                'Precio_auto' => 25000,
                'cliente_id' => rand(1, 7),
                'empleado_id' => rand(1, 5),
            ],
            [
                'Numero_placa' => 'JKL012',
                'Modelo' => 'Modelo D',
                'Marca' => 'Marca 4',
                'Precio_auto' => 30000,
                'cliente_id' => rand(1, 7),
                'empleado_id' => rand(1, 5),
            ],
            [
                'Numero_placa' => 'MNO345',
                'Modelo' => 'Modelo E',
                'Marca' => 'Marca 5',
                'Precio_auto' => 35000,
                'cliente_id' => rand(1, 7),
                'empleado_id' => rand(1, 5),
            ],
            [
                'Numero_placa' => 'PQR678',
                'Modelo' => 'Modelo F',
                'Marca' => 'Marca 6',
                'Precio_auto' => 40000,
                'cliente_id' => rand(1, 7),
                'empleado_id' => rand(1, 5),
            ],
            [
                'Numero_placa' => 'STU901',
                'Modelo' => 'Modelo G',
                'Marca' => 'Marca 7',
                'Precio_auto' => 45000,
                'cliente_id' => rand(1, 7),
                'empleado_id' => rand(1, 5),
            ],
        ];

        DB::table('autos')->insert($autos);
    }
}
