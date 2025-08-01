<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Insertar registros a la tabla

        DB::table('clientes')->insert([
            [
                'nombre'=> 'Tommy',
                'apellidos'=>'Choque Perez',
                'direccion'=> 'Bolivar esq. Potosi',
                'celular'=>'76543210',
                'nit'=> '3456789',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=> 'Aldo',
                'apellidos'=>'Chavez Rocha',
                'direccion'=> 'Sucre esq. Pagador',
                'celular'=>'65432109',
                'nit'=> '3210987',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
        ]);
    }
}
