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
        $role1 = Role::create(['name' => 'Administrador']);
        $role2 = Role::create(['name' => 'Encargado']);
        $role3 = Role::create(['name' => 'Veterinario']);
        $role4 = Role::create(['name' => 'Blogger']);

        Permission::create(['name' => 'horses.index', 'description' => 'Ver listado de caballos.'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'horses.create', 'description' => 'Añadir un caballo.'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'horses.edit', 'description' => 'Editar un caballo.'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'horses.destroy', 'description' => 'Eliminar un caballo.'])->syncRoles([$role1]);

        Permission::create(['name' => 'users.index', 'description' => 'Ver listado de usuarios.'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.create', 'description' => 'Añadir un usuario.'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.edit', 'description' => 'Editar un usuario.'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'users.destroy', 'description' => 'Eliminar un usuario.'])->syncRoles([$role1]);

        Permission::create(['name' => 'vacunas.index', 'description' => 'Ver listado de vacunas.'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'vacunas.create', 'description' => 'Añadir una vacuna.'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'vacunas.edit', 'description' => 'Editar una vacuna.'])->syncRoles([$role1, $role3]);
        Permission::create(['name' => 'vacunas.destroy', 'description' => 'Eliminar una vacuna.'])->syncRoles([$role1]);

        Permission::create(['name' => 'posts.index', 'description' => 'Ver posts.'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'posts.create', 'description' => 'Añadir un post.'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'posts.edit', 'description' => 'Editar un post.'])->syncRoles([$role1, $role4]);
        Permission::create(['name' => 'posts.destroy', 'description' => 'Eliminar un post.'])->syncRoles([$role1]);
    }
}
