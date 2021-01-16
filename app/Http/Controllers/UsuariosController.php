<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function procesarRegistro()
    {
        if (isset($_GET["nombre"], $_GET["apellidos"], $_GET["email"], $_GET['pass1'], $_GET['pass2'])) {

            $nombre = $_GET["nombre"];
            $apellidos = $_GET["apellidos"];
            $email = $_GET["email"];
            $pass1 = $_GET["pass1"];
            $pass2 = $_GET ["pass2"];

            if ($this->comprobarUser($email) == true) {
                return "<h3>Ya existe un usuario con ese email</h3>";
            } else {

                if ($pass2 == $pass1) {

                    $usuario = new Usuario();
                    $usuario->nombre = $nombre;
                    $usuario->apellidos = $apellidos;
                    $usuario->email = $email;
                    $usuario->contraseña = $pass1;
                    $usuario->save();

                    return view('login');

                } else {
                    echo "<h3>La contraseña es diferente</h3>";
                }
            }
        }
        else {
            echo "<h3>No se han introducido todos los parámmetros</h3>";
        }
    }


    public function procesarLogin(){

        if(isset($_GET["email"], $_GET["pass"])) {
            $email = $_GET ['email'];
            $password = $_GET ['pass'];

            if(!($this->comprobarUser('email'))) {
                return redirect('/');
            }

            $usuario = new Usuario();
            $usuario = Usuario::where('email',$email)->get();

            if($usuario[0]['email']==$email){
                if($usuario[0]['email']=="admin@admin.com"){
                    session(['user'=>'administrator']);
                    return redirect()->to('tienda');

                }else {
                    $id = $usuario[0]['id'];
                    $name = $usuario[0]['nombre'];

                    session(['user' => $id]);
                    session(['name' => $name]);

                    return redirect()->to('/');
                }
            }

        } else {
            echo "<h3>Rellene los datos</h3>";
        }
    }


    public function comprobarUser($usuarioExistente){
        return Usuario::where('email',$usuarioExistente)->exists();
    }

    public function cerrarSesion(){
        session()->flush();
        return redirect()->to('/');
    }

}
