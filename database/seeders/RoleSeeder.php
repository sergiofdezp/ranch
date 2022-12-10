<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //superadmin
        $role1 = Role::create(['name' => 'Superadmin']);
        //admin
        $role2 = Role::create(['name' => 'Administrador']);
        //other roles
        $role3 = Role::create(['name' => 'Encargado']);
        $role4 = Role::create(['name' => 'Blogger']);
        $role5 = Role::create(['name' => 'Domador']);
        $role6 = Role::create(['name' => 'Herrador']);

        //horses permissions
        Permission::create(['name' => 'horses.index', 'description' => 'Ver listado de caballos.'])->syncRoles([$role2, $role3]);
        Permission::create(['name' => 'horses.create', 'description' => 'Añadir un caballo.'])->syncRoles([$role2, $role3]);
        Permission::create(['name' => 'horses.edit', 'description' => 'Editar un caballo.'])->syncRoles([$role2, $role3]);

        //vacunas permissions
        Permission::create(['name' => 'vacunas.index', 'description' => 'Ver listado de vacunas.'])->syncRoles([$role2]);
        Permission::create(['name' => 'vacunas.create', 'description' => 'Añadir una vacuna.'])->syncRoles([$role2]);
        Permission::create(['name' => 'vacunas.edit', 'description' => 'Editar una vacuna.'])->syncRoles([$role2]);

        //posts permissions
        Permission::create(['name' => 'posts.index', 'description' => 'Ver posts.'])->syncRoles([$role2, $role4]);
        Permission::create(['name' => 'posts.create', 'description' => 'Añadir un post.'])->syncRoles([$role2, $role4]);
        Permission::create(['name' => 'posts.edit', 'description' => 'Editar un post.'])->syncRoles([$role2, $role4]);
        Permission::create(['name' => 'posts.destroy', 'description' => 'Eliminar un post.'])->syncRoles([$role2]);

        //domas permissions
        Permission::create(['name' => 'domas.index', 'description' => 'Ver domas.'])->syncRoles([$role2, $role5]);
        Permission::create(['name' => 'domas.create', 'description' => 'Añadir una doma.'])->syncRoles([$role2, $role5]);
        Permission::create(['name' => 'domas.edit', 'description' => 'Editar una doma.'])->syncRoles([$role2, $role5]);

        //herrajes permissions
        Permission::create(['name' => 'herraje.index', 'description' => 'Ver domas.'])->syncRoles([$role2, $role6]);
        Permission::create(['name' => 'herraje.create', 'description' => 'Añadir una doma.'])->syncRoles([$role2, $role6]);
        Permission::create(['name' => 'herraje.edit', 'description' => 'Editar una doma.'])->syncRoles([$role2, $role6]);
    }
}
