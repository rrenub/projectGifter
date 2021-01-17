<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ShopController extends Controller
{
    public function mostrarTienda() {
        $categorias = \App\Categoria::all();

        $productos = Producto::select('productos.*',
                        DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
                        ->paginate(9);

        if(session('user') == 'administrator') {
            return view('tiendaAdmin')->with('productos', $productos);
        } else {
            return view('catalogo')->with('productos', $productos)
                ->with('categorias', $categorias);
        }
    }

    public function mostrarInicio() {
        $productosOferta = Producto::select('productos.*',
            DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
            ->where('rebajado', 1)
            ->take(4)
            ->get();

        return view('index')->with('productos', $productosOferta);
    }

    public function filtrar() {
        $condicion = array();
        if(!(isset($_GET['oferta']) || isset($_GET['categoria']))) {
            return back()->with('error', 'No se ha seleccionado ningún filtro. Mostrando todos los artículos')->with('filtrando', 1);
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

        Session::flash('filtrando', 1);
        return view('catalogo')->with('productos', $productos);
    }

    public function ofertas() {
        return count(Producto::where('rebajado', 1)->get());
    }

    public function buscar() {
        $productosBuscados = Producto::select('productos.*',
            DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
                                        ->where('nombre', 'LIKE', '%'. $_GET['buscar'] .'%')
                                        ->paginate(9);

        if(count($productosBuscados) == 0) {
            return redirect('/tienda')->with('error', 'No existe ningún artículo que coincida con la busqueda');
        } else {
            Session::flash('buscando', 1);
            return view('catalogo')->with('productos', $productosBuscados);
        }
    }
}
