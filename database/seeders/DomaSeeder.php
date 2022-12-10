<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Doma;
use Illuminate\Support\Facades\DB;

class DomaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('domas')->insert([
            'nombre' => "Doma natural",
        ]);
        DB::table('domas')->insert([
            'nombre' => "Doma vaquera",
        ]);
        DB::table('domas')->insert([
            'nombre' => "Doma clásica",
        ]);
        DB::table('domas')->insert([
            'nombre' => "Sin domar",
        ]);
    }
}
