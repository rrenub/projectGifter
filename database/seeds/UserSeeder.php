<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new \App\Usuario();
        $usuario->nombre = "Administrador";
        $usuario->apellidos = "Administrador";
        $usuario->email = "admin@admin.com";
        $usuario->contraseña = "admin";
        $usuario->save();

        $usuario = new \App\Usuario();
        $usuario->nombre = "Usuario";
        $usuario->apellidos = "Prueba";
        $usuario->email = "usuarioPrueba@ulpgc.es";
        $usuario->contraseña = "userPrueba";
        $usuario->save();
    }
}
