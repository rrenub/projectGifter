<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function mostrarTienda() {
        $productos = DB::table('productos')
                        ->join('productos_img', 'productos_img.id_producto','=','productos.id')
                        ->select('productos.*', 'productos_img.img')
                        ->get();

        $productos = Producto::select('productos.*',
                        DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
                        ->get();

        return view('catalogo')->with('productos', $productos);
    }
}
