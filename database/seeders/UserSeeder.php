<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // superadmin 

        DB::table('users')->insert([
            'name' => "superadmin",
            'email' => "superadmin@admin.com",
            'password' => Hash::make('admin')
        ]);

        /*
        DB::table('model_has_roles')->insert([
            'role_id' => "1",
            'model_type' => "App\Models\User",
            'model_id' => "1"
        ]);
        */

        // dueños
        DB::table('users')->insert([
            'name' => "Jesús Colina",
            'email' => "jesus@colina.com",
            'password' => Hash::make('!jesusColina')
        ]);
        DB::table('users')->insert([
            'name' => "Luis Álvarez",
            'email' => "luis@alvarez.com",
            'password' => Hash::make('!luisAlvarez')
        ]);
        DB::table('users')->insert([
            'name' => "Franciso López",
            'email' => "francisco@lopez.com",
            'password' => Hash::make('!franciscoLopez')
        ]);
    }
}
