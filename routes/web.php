<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//  - VISTAS -
Route::get('/', function () {
    return view('index');
});
Route::get('/tienda', [\App\Http\Controllers\ShopController::class, 'mostrarTienda']);
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/detalleProducto', function () {
    return view('detalleProducto');
});

//  - FUNCIONES -

Route::get('/logOut', 'UsuariosController@cerrarSesion');
Route::get('/procesarLogin', 'UsuariosController@procesarLogin');
Route::get('/procesarRegister', 'UsuariosController@procesarRegistro');

Route::get('/filtrar', [\App\Http\Controllers\ShopController::class, 'filtrar']);
