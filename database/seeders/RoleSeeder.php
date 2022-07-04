<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $role1 = Role::create(['name' =>'Administrador']);
        $role2 = Role::create(['name' => 'Consulta']);

        Permission::create(['name' =>'Ver calendario'])->syncRoles([$role1, $role2]);

        Permission::create(['name' =>'Listado de consultores'])->syncRoles([$role1]);
        Permission::create(['name' =>'Crear consultor'])->syncRoles([$role1]);
        Permission::create(['name' =>'Detalle consultor'])->syncRoles([$role1]);
        Permission::create(['name' =>'Editar consultor'])->syncRoles([$role1]);
        Permission::create(['name' =>'Eliminar consultor'])->syncRoles([$role1]);

        Permission::create(['name' =>'Listado de tiempos'])->syncRoles([$role1]);
        Permission::create(['name' =>'Crear tiempo'])->syncRoles([$role1]);
        Permission::create(['name' =>'Detalle tiempo'])->syncRoles([$role1]);
        Permission::create(['name' =>'Editar tiempo'])->syncRoles([$role1]);
        Permission::create(['name' =>'Eliminar tiempo'])->syncRoles([$role1]);

        Permission::create(['name' =>'Listado de roles'])->syncRoles([$role1]);
        Permission::create(['name' =>'Crear rol'])->syncRoles([$role1]);
        Permission::create(['name' =>'Detalle de rol'])->syncRoles([$role1]);
        Permission::create(['name' =>'Editar rol'])->syncRoles([$role1]);
        Permission::create(['name' =>'Eliminar rol'])->syncRoles([$role1]);
        
        Permission::create(['name' =>'Listado de usuarios'])->syncRoles([$role1]);
        Permission::create(['name' =>'Crear usuario'])->syncRoles([$role1]);
        Permission::create(['name' =>'Detalle usuario'])->syncRoles([$role1]);
        Permission::create(['name' =>'Actualizar usuario'])->syncRoles([$role1]);
        Permission::create(['name' =>'Eliminar usuario'])->syncRoles([$role1]);
        
    }
}
