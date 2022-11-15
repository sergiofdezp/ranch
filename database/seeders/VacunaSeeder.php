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
            'nombre' => "Vacuna contra la gripe equina",
            'descripcion' => "La primera vacuna se debe administrar entre los 4 y 6 meses de edad, 
            será necesaria una segunda dosis al cabo de un mes y una dosis de refuerzo cada 6 meses. 
            En yeguas gestantes se debe administrar entre 4 y 6 semanas antes del parto.",
        ]);
        DB::table('vacunas')->insert([
            'nombre' => "Vacuna contra el tétanos",
            'descripcion' => "La primera vacuna debe administrarse entre los 4 y 6 meses de edad, 
            ofreciendo una segunda dosis en el mes posterior y una dosis de refuerzo cada 6 meses. 
            En yeguas gestantes se debe administrar 4 o 6 semanas antes del parto.",
        ]);
        DB::table('vacunas')->insert([
            'nombre' => "Vacuna contra la rinoneumonitis equina",
            'descripcion' => "La primera vacuna se administra entre los 4 y 6 meses de edad, 
            la segunda dosis debe administrarse un mes después y se requiere de una dosis de refuerzo cada 6 meses. 
            En yeguas gestantes debe administrarse en el quinto, séptimo y noveno mes de gestación.",
        ]);
    }
}
