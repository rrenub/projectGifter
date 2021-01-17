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
                return redirect('/register')->with('error', 'Ya existe un usuario registrado con el email introducido');
            } else {

                if ($pass2 == $pass1) {

                    $usuario = new Usuario();
                    $usuario->nombre = $nombre;
                    $usuario->apellidos = $apellidos;
                    $usuario->email = $email;
                    $usuario->contraseña = $pass1;
                    $usuario->save();

                    return redirect('/login')->with('exito', 'Se ha registrado correctamente. Inicie sesión para comenzar a usar su cuenta');
                } else {
                    return redirect('/register')->with('error', 'Las contraseñas introducidas son diferentes');
                }
            }
        }
        else {
            return redirect('/register')->with('error', 'Debe rellenar todos los campos');
        }
    }


    public function procesarLogin(){

        if(isset($_GET["email"], $_GET["pass"])) {
            $email = $_GET ['email'];
            $password = $_GET ['pass'];

            if(!($this->comprobarUser($email))) {
                return redirect('/login')->with('error', 'El email o la contraseña es erróneo. Compruebe los campos introducidos');
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

                    return redirect('/')->with('exito', 'Ha iniciado sesión correctamente');
                }
            }

        } else {
            return redirect('/login')->with('error', 'Introduzca los campos correctamente');
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
