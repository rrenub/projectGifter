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
                        ->paginate(9);

        return view('catalogo')->with('productos', $productos);
    }

    public function mostrarInicio() {
        $productosOferta = Producto::select('productos.*',
            DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
            ->where('rebajado', 1)
            ->take(3)
            ->get();

        return view('index')->with('productos', $productosOferta);
    }

    public function filtrar() {
        $condicion = array();
        if(!(isset($_GET['oferta']) || isset($_GET['categoria']))) {
            redirect('/tienda')->with('error', 'No se ha seleccionado ningún filtro. Mostrando todos los artículos');
        }

        if(isset($_GET['oferta'])) {
            $condicion['rebajado'] = 1;
        }

        if(isset($_GET['categoria'])) {
            $condicion['categorias.nombre'] = $_GET['categoria'];

            $productos = DB::table('productos')
                ->join('categorias', 'categorias.id', '=', 'productos.id_categoria')
                ->where($condicion)
                ->select('productos.*', DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
                ->paginate(9);
        } else {
            $productos = Producto::select('productos.*',
                DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
                ->where($condicion)
                ->paginate(9);
        }

        return view('catalogo')->with('productos', $productos)
                                    ->with('filtro', $condicion);
    }

    public function ofertas() {
        return count(Producto::where('rebajado', 1)->get());
    }
}
