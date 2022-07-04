<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' =>'Angel Ocampo',
            'email' => 'jocampo@w32.mx',
            'password' => bcrypt('Soporte.123')
        ])->assignRole('Administrador');

        User::create([
            'name' =>'Omar Valenzuela',
            'email' => 'ovalenzuela@w32.mx',
            'password' => bcrypt('Soporte.123')
        ])->assignRole('Administrador');
    }
}
