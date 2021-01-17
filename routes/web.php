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
Route::get('/', [\App\Http\Controllers\ShopController::class, 'mostrarInicio']);

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
Route::get('/editarProducto', function () {
    return view('editarProducto');
});

//  - FUNCIONES -

Route::get('/logOut', 'UsuariosController@cerrarSesion');
Route::get('/procesarLogin', 'UsuariosController@procesarLogin');
Route::get('/procesarRegister', 'UsuariosController@procesarRegistro');

Route::get('/tienda/filtrar', [\App\Http\Controllers\ShopController::class, 'filtrar']);
Route::get('/ofertas', [\App\Http\Controllers\ShopController::class, 'ofertas']);
Route::get('/tienda/buscar', [\App\Http\Controllers\ShopController::class, 'buscar']);


Route::post('/tienda/añadirProductoCarrito', [\App\Http\Controllers\ShoppingCartController::class, 'añadirProductoCarrito']);
Route::get('/tienda/vaciarCarrito', [\App\Http\Controllers\ShoppingCartController::class, 'vaciarCarrito']);
Route::get('/tienda/eliminarProductoCarrito', [\App\Http\Controllers\ShoppingCartController::class, 'eliminarProductoCarrito']);


Route::get('/procesarReview', 'ReviewsController@procesarReview');

// - PAYPAL

Route::get('/tienda/pagarPaypal', 'PaypalController@payWithPayPal');
Route::get('/tienda/estadoPaypal', 'PaypalController@payPalStatus');
Route::get('/resultsPay', function (){
    return view('resultsPay');
});
