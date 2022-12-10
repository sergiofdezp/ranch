<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            VacunaSeeder::class,
            DomaSeeder::class,
            HerrajeSeeder::class,
            HorseSeeder::class,
            PostSeeder::class
        ]);
    }
}
