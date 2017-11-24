<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::create([
        	'nombres'=>'Hugo',
        	'apellidos'=>'Barraza',
        	'contraseña'=>'123',
        	'nick'=>'brrz',
        	'tipo_usuario'=>'invitado',
        ]);
    }
}
