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
        $role4 = Role::create(['name' => 'Veterinario']);
        $role5 = Role::create(['name' => 'Blogger']);

        //horses permissions
        Permission::create(['name' => 'horses.index', 'description' => 'Ver listado de caballos.'])->syncRoles([$role2, $role3]);
        Permission::create(['name' => 'horses.create', 'description' => 'Añadir un caballo.'])->syncRoles([$role2, $role3]);
        Permission::create(['name' => 'horses.edit', 'description' => 'Editar un caballo.'])->syncRoles([$role2, $role3]);
        Permission::create(['name' => 'horses.destroy', 'description' => 'Eliminar un caballo.'])->syncRoles([$role2]);

        //users permissions
        Permission::create(['name' => 'users.index', 'description' => 'Ver listado de usuarios.'])->syncRoles([$role2, $role3]);
        Permission::create(['name' => 'users.create', 'description' => 'Añadir un usuario.'])->syncRoles([$role2, $role3]);
        Permission::create(['name' => 'users.edit', 'description' => 'Editar un usuario.'])->syncRoles([$role2, $role3]);
        Permission::create(['name' => 'users.destroy', 'description' => 'Eliminar un usuario.'])->syncRoles([$role2]);

        //vacunas permissions
        Permission::create(['name' => 'vacunas.index', 'description' => 'Ver listado de vacunas.'])->syncRoles([$role2, $role4]);
        Permission::create(['name' => 'vacunas.create', 'description' => 'Añadir una vacuna.'])->syncRoles([$role2, $role4]);
        Permission::create(['name' => 'vacunas.edit', 'description' => 'Editar una vacuna.'])->syncRoles([$role2, $role4]);
        Permission::create(['name' => 'vacunas.destroy', 'description' => 'Eliminar una vacuna.'])->syncRoles([$role2]);

        //posts permissions
        Permission::create(['name' => 'posts.index', 'description' => 'Ver posts.'])->syncRoles([$role2, $role5]);
        Permission::create(['name' => 'posts.create', 'description' => 'Añadir un post.'])->syncRoles([$role2, $role5]);
        Permission::create(['name' => 'posts.edit', 'description' => 'Editar un post.'])->syncRoles([$role2, $role5]);
        Permission::create(['name' => 'posts.destroy', 'description' => 'Eliminar un post.'])->syncRoles([$role2]);

        //roles permissions
        Permission::create(['name' => 'roles.index', 'description' => 'Ver roles.'])->syncRoles([$role2]);
        Permission::create(['name' => 'roles.create', 'description' => 'Añadir un rol.'])->syncRoles([$role2]);
        Permission::create(['name' => 'roles.edit', 'description' => 'Editar un rol.'])->syncRoles([$role2]);
        Permission::create(['name' => 'roles.destroy', 'description' => 'Eliminar un rol.'])->syncRoles([$role2]);
    }
}
