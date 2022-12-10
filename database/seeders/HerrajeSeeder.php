<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Herraje;
use Illuminate\Support\Facades\DB;

class HerrajeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('herrajes')->insert([
            'nombre' => "Herraduras de hierro",
        ]);
        DB::table('herrajes')->insert([
            'nombre' => "Zapatos de plástico",
        ]);
    }
}
