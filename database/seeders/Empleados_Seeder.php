<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Empleados_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cargo = DB::table('cargos')->where(['nombre'=>'Instructor'])->value('id');

        DB::table('empleados')->insert([
            'nombre'=> 'Dony Cardenas',
            'email' => 'cardenasdonny@gmail.com',
            'direccion' => 'calle 123456',
            'edad' => 36,
            'idCargo' => $cargo
        ]);
        DB::table('empleados')->insert([
            'nombre'=> 'Daniela Reyes',
            'email' => 'danielareyes@gmail.com',
            'direccion' => 'calle 4573',
            'edad' => 26,
            'idCargo' => 2
        ]);
        DB::table('empleados')->insert([
            'nombre'=> 'Camila Reyes',
            'email' => 'camilareyes12@gmail.com',
            'direccion' => 'calle 3489',
            'edad' => 22,
            'idCargo' => 3
        ]);
        
    }
}
