<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Horse;
use Illuminate\Support\Facades\DB;

class HorseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('horses')->insert([
            'user_id' => \App\Models\User::all()->where('name', '<>', 'Superadmin')->where('name', '<>', 'Admin')->where('name', '<>', 'Encargado')->where('name', '<>', 'Blogger')->random()->id,
            'nombre' => "Nebur",
            'sexo' => "Macho",
            'raza' => "Appaloosa",
            'edad' => "12",
            'doma_id' => 3,
            'vacuna_id' => 2,
            'herraje_id' => 2,
            'imagen' => "20221111_appaloosa_johannes_plenio.jpg",
        ]);
        DB::table('horses')->insert([
            'user_id' => \App\Models\User::all()->where('name', '<>', 'Superadmin')->where('name', '<>', 'Admin')->where('name', '<>', 'Encargado')->where('name', '<>', 'Blogger')->random()->id,
            'nombre' => "Argoya",
            'sexo' => "Hembra",
            'raza' => "Burro de raya",
            'edad' => "7",
            'doma_id' => 1,
            'vacuna_id' => 1,
            'herraje_id' => 2,
            'imagen' => "20221111_burro_raya_chris_carroll.jpg",
        ]);
        DB::table('horses')->insert([
            'user_id' => \App\Models\User::all()->where('name', '<>', 'Superadmin')->where('name', '<>', 'Admin')->where('name', '<>', 'Encargado')->where('name', '<>', 'Blogger')->random()->id,
            'nombre' => "Batman",
            'sexo' => "Macho",
            'raza' => "Frison negro",
            'edad' => "5",
            'doma_id' => 4,
            'vacuna_id' => 1,
            'herraje_id' => 1,
            'imagen' => "20221111_frison_mali_maeder.jpg",
        ]);
        DB::table('horses')->insert([
            'user_id' => \App\Models\User::all()->where('name', '<>', 'Superadmin')->where('name', '<>', 'Admin')->where('name', '<>', 'Encargado')->where('name', '<>', 'Blogger')->random()->id,
            'nombre' => "Liber",
            'sexo' => "Hembra",
            'raza' => "Quarter Mille",
            'edad' => "9",
            'doma_id' => 2,
            'vacuna_id' => 1,
            'herraje_id' => 2,
            'imagen' => "20221111_guillermo_mota_quarter_mille.jpg",
        ]);
        DB::table('horses')->insert([
            'user_id' => \App\Models\User::all()->where('name', '<>', 'Superadmin')->where('name', '<>', 'Admin')->where('name', '<>', 'Encargado')->where('name', '<>', 'Blogger')->random()->id,
            'nombre' => "Lima",
            'sexo' => "Hembra",
            'raza' => "Español",
            'edad' => "11",
            'doma_id' => 4,
            'vacuna_id' => 1,
            'herraje_id' => 2,
            'imagen' => "20221111_helena_spanish.jpg",
        ]);
        DB::table('horses')->insert([
            'user_id' => \App\Models\User::all()->where('name', '<>', 'Superadmin')->where('name', '<>', 'Admin')->where('name', '<>', 'Encargado')->where('name', '<>', 'Blogger')->random()->id,
            'nombre' => "Hasan",
            'sexo' => "Macho",
            'raza' => "P.R. Árabe",
            'edad' => "4",
            'doma_id' => 1,
            'vacuna_id' => 1,
            'herraje_id' => 1,
            'imagen' => "20221111_laraine_davis_arabian.jpg",
        ]);
        DB::table('horses')->insert([
            'user_id' => \App\Models\User::all()->where('name', '<>', 'Superadmin')->where('name', '<>', 'Admin')->where('name', '<>', 'Encargado')->where('name', '<>', 'Blogger')->random()->id,
            'nombre' => "Gazpacho",
            'sexo' => "Macho",
            'raza' => "Percheron",
            'edad' => "14",
            'doma_id' => 3,
            'vacuna_id' => 1,
            'herraje_id' => 2,
            'imagen' => "20221111_percheron.jpg",
        ]);
        DB::table('horses')->insert([
            'user_id' => \App\Models\User::all()->where('name', '<>', 'Superadmin')->where('name', '<>', 'Admin')->where('name', '<>', 'Encargado')->where('name', '<>', 'Blogger')->random()->id,
            'nombre' => "Fujai",
            'sexo' => "Macho",
            'raza' => "P.R. Árabe",
            'edad' => "7",
            'doma_id' => 2,
            'vacuna_id' => 1,
            'herraje_id' => 2,
            'imagen' => "20221111_sarah_olive_arabian.jpg",
        ]);
        DB::table('horses')->insert([
            'user_id' => \App\Models\User::all()->where('name', '<>', 'Superadmin')->where('name', '<>', 'Admin')->where('name', '<>', 'Encargado')->where('name', '<>', 'Blogger')->random()->id,
            'nombre' => "Kiko",
            'sexo' => "Macho",
            'raza' => "Español",
            'edad' => "16",
            'doma_id' => 4,
            'vacuna_id' => 1,
            'herraje_id' => 1,
            'imagen' => "20221111_spanish.jpg",
        ]);
    }
}
