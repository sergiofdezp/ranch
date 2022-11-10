<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Vacuna;
use Illuminate\Support\Facades\DB;

class VacunaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('vacunas')->insert([
            'nombre' => "Sin vacunar",
            'descripcion' => "Sin vacunar",
        ]);
        DB::table('vacunas')->insert([
            'nombre' => "Vacuna 1",
            'descripcion' => "Vacuna contra la gripe equina",
        ]);
        DB::table('vacunas')->insert([
            'nombre' => "Vacuna 2",
            'descripcion' => "Vacuna contra el tétanos",
        ]);
    }
}
