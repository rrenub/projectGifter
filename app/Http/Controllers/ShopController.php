<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShopController extends Controller
{
    public function mostrarTienda() {
        $productos = Producto::select('productos.*',
                        DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
                        ->get();

        return view('catalogo')->with('productos', $productos);
    }

    public function filtrar() {
        $condicion = array();
        if(isset($_GET['oferta'])) {
            $condicion['rebajado'] = 1;
        }

        if(isset($_GET['categoria'])) {
            $condicion['categorias.nombre'] = $_GET['categoria'];

            $productos = DB::table('productos')
                ->join('categorias', 'categorias.id', '=', 'productos.id_categoria')
                ->where($condicion)
                ->select('productos.*', DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
                ->get();
        } else {
            $productos = Producto::select('productos.*',
                DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
                ->where($condicion)
                ->get();
        }
        
        return view('catalogo')->with('productos', $productos);
    }
}
