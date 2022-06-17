<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\Cargos_Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(Cargos_Seeder::class);
    }
}
