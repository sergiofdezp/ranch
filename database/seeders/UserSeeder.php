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
        //superadmin
        DB::table('users')->insert([
            'name' => "Superadmin",
            'email' => "superadmin@ranch.com",
            'password' => Hash::make('superadmin')
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => "1",
            'model_type' => "App\Models\User",
            'model_id' => "1"
        ]);

        // admin 
        DB::table('users')->insert([
            'name' => "Admin",
            'email' => "admin@ranch.com",
            'password' => Hash::make('admin')
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => "2",
            'model_type' => "App\Models\User",
            'model_id' => "2"
        ]);

        // blogger 
        DB::table('users')->insert([
            'name' => "Blogger",
            'email' => "blogger@ranch.com",
            'password' => Hash::make('blogger')
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => "3",
            'model_type' => "App\Models\User",
            'model_id' => "3"
        ]);

        // domador
        DB::table('users')->insert([
            'name' => "Domador",
            'email' => "domador@ranch.com",
            'password' => Hash::make('domador')
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => "4",
            'model_type' => "App\Models\User",
            'model_id' => "4"
        ]);

        // herrador
        DB::table('users')->insert([
            'name' => "Herrador",
            'email' => "herrador@ranch.com",
            'password' => Hash::make('herrador')
        ]);
        DB::table('model_has_roles')->insert([
            'role_id' => "5",
            'model_type' => "App\Models\User",
            'model_id' => "5"
        ]);

        // dueños
        DB::table('users')->insert([
            'name' => "Jesús Colina",
            'email' => "jesus@colina.com",
            'password' => Hash::make('jesus')
        ]);
        DB::table('users')->insert([
            'name' => "Luis Álvarez",
            'email' => "aurora@alvarez.com",
            'password' => Hash::make('aurora')
        ]);
        DB::table('users')->insert([
            'name' => "Aitana González",
            'email' => "aitana@gonzalez.com",
            'password' => Hash::make('aitana')
        ]);
        DB::table('users')->insert([
            'name' => "Aurora Peláez",
            'email' => "aurora@pelaez.com",
            'password' => Hash::make('aurora')
        ]);
    }
}
