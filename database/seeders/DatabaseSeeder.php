<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        /*$admin = new \App\Models\Administrador();
        $admin->usuario = 'admin';
        $admin->nombre = 'Geovani';
        $admin->telefono = '9671582994';
        $admin->email = 'victorcruz.al@laselva.edu.mx';
        $admin->pass = Hash::make('admin');
        $admin->save();*/

        $cliente = new \App\Models\Cliente();
        $cliente->usuario = 'user';
        $cliente->nombre = 'Geovani';
        $cliente->telefono = '9671582994';
        $cliente->email = 'victorcruz.al@laselva.edu.mx';
        $cliente->pass = Hash::make('user');
        $cliente->direccion = 's/n';
        $cliente->colonia = 'centro';
        $cliente->ciudad = 'san cristobal'; 
        $cliente->municipio = 'san cristobal';
        $cliente->estado = 'chiapas';
        $cliente->save();
    }
}


