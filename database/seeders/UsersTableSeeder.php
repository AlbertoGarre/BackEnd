<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		
        User::create([
            'name'=> 'Alberto',
            'username'=> 'alga',
            'email'=> 'alga@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'García',
            'telefono'=> '612123123',
            'franquicia'=> '1',
            'Reparto'=> 'true',
            'Oficina'=> 'true',
            'Admin'=> 'true',
        ]);
        User::create([
            'name'=> 'Ana',
            'username'=> 'Angi',
            'email'=> 'angi@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'gil',
            'telefono'=> '968123456',
            'franquicia'=> '1',
            'Reparto'=> 'false',
            'Oficina'=> 'true',
            'Admin'=> 'false',
        ]);
        User::create([
            'name'=> 'Juan',
            'username'=> 'jupe',
            'email'=> 'jupe@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'Pérez',
            'telefono'=> '666123987',
            'franquicia'=> '1',
            'Reparto'=> 'true',
            'Oficina'=> 'false',
            'Admin'=> 'false',
        ]);
        User::create([
            'name'=> 'Ramón',
            'username'=> 'raga',
            'email'=> 'raga@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'Garrido',
            'telefono'=> '988123456',
            'franquicia'=> '1',
            'Reparto'=> 'true',
            'Oficina'=> 'false',
            'Admin'=> 'false',
        ]);
        User::create([
            'name'=> 'Luis',
            'username'=> 'luhe',
            'email'=> 'luhe@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'Heredia',
            'telefono'=> '611234567',
            'franquicia'=> '1',
            'Reparto'=> 'true',
            'Oficina'=> 'false',
            'Admin'=> 'false',
        ]);
        User::create([
            'name'=> 'Juan Manuel',
            'username'=> 'jumu',
            'email'=> 'jumu@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'Muñoz',
            'telefono'=> '611111222',
            'franquicia'=> '2',
            'Reparto'=> 'true',
            'Oficina'=> 'true',
            'Admin'=> 'true',
        ]);
        User::create([
            'name'=> 'María',
            'username'=> 'mahe',
            'email'=> 'mahe@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'Hernandez',
            'telefono'=> '611454545',
            'franquicia'=> '2',
            'Reparto'=> 'false',
            'Oficina'=> 'true',
            'Admin'=> 'false',
        ]);
        User::create([
            'name'=> 'Paco',
            'username'=> 'paza',
            'email'=> 'paza@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'Zamora',
            'telefono'=> '611999000',
            'franquicia'=> '2',
            'Reparto'=> 'true',
            'Oficina'=> 'false',
            'Admin'=> 'false',
        ]);
        User::create([
            'name'=> 'Jose Miguel',
            'username'=> 'jobu',
            'email'=> 'jobu@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'Buenavista',
            'telefono'=> '611343434',
            'franquicia'=> '2',
            'Reparto'=> 'true',
            'Oficina'=> 'false',
            'Admin'=> 'false',
        ]);
        User::create([
            'name'=> 'Jesús',
            'username'=> 'jefe',
            'email'=> 'jefe@contosox.com',
            'password'=> Hash::make('admin'),
            'apellidos'=> 'Fernandez',
            'telefono'=> '611234234',
            'franquicia'=> '2',
            'Reparto'=> 'true',
            'Oficina'=> 'false',
            'Admin'=> 'false',
        ]);













    }
}
