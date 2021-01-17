<?php

namespace App\Http\Controllers;

use App\Classes\ShoppingCartItem;
use App\Producto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ShoppingCartController extends Controller
{
    public static function carrito() {
        $datos = session()->all();
        $listaCarro = array();
        $totalPago = 0;
        foreach ($datos as $key => $cantidad) {
            if(substr($key, 0, 5) == 'PROD-') {
                $prodID = substr($key, 5);
                $producto = Producto::where('productos.id', $prodID)
                    ->select('productos.*',
                        DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
                    ->where('productos.id', $prodID)
                    ->get();
            if($producto[0]['rebajado']){
                $itemCarrito = new ShoppingCartItem(
                    $producto[0]['nombre'],
                    $producto[0]['descripcion'],
                    $producto[0]['precio_rebaja'],
                    $producto[0]['img'],
                    $cantidad,
                    $producto[0]['id']
                );
            }else{
                $itemCarrito = new ShoppingCartItem(
                    $producto[0]['nombre'],
                    $producto[0]['descripcion'],
                    $producto[0]['precio'],
                    $producto[0]['img'],
                    $cantidad,
                    $producto[0]['id']
                );
            }
                $listaCarro[] = $itemCarrito;

                $totalPago += $itemCarrito->getTotalPrice();
            }
            //En este array se almacena el total, y un array con cada elemento dentro del carrito
            $datos = ['total' => $totalPago, 'productos' => $listaCarro];
        }
        return $datos;
    }

    public function añadirProductoCarrito() {
        if(session('user') == null) {
            return redirect('/tienda')->with('error', 'Debe iniciar sesión para comprar productos de la tienda');
        }

        if(isset($_POST['prodID'])) {
            //Se comprueba si hay stock suficiente
            if($this->isProductAvailable($_POST['prodID'])) {
                return redirect('/tienda')->with('error', 'No hay suficientes unidades en stock');
            }

            $producto = "PROD-" . $_POST['prodID'];
            if(session($producto) != null) {
                $cantidadEnCarro = session($producto) + 1;
                session([$producto => $cantidadEnCarro]);
            } else {
                session([$producto => 1]);
            }
            return redirect('/tienda')->with('exito', 'Se han añadido ' . 1 . ' producto(s) al carro');
        }
        return redirect('/tienda')->with('error', 'Ha ocurrido un error al añadir el producto al carro');
    }

    public function vaciarCarrito() {
        $datos = session()->all();
        foreach ($datos as $producto => $cantidad) {
            if(substr($producto, 0, 5) == 'PROD-') {
                session()->forget($producto);
            }
        }
        return redirect('/tienda')->with('exito', 'Se ha eliminado el contenido del carrito');
    }

    public function isProductAvailable($prodID) {
        $producto = Producto::where('id', $prodID)->first();
        return ($producto->stock == 0);
    }

    public static function getNumeroElementosCarro() {
        $data = session()->all();
        $NelementosCarro = 0;
        foreach ($data as $key => $valor) {
            if($key[0]=='P') {
                $NelementosCarro += $valor;
            }
        }
        return $NelementosCarro;
    }

    public function eliminarProductoCarrito() {
        if(isset($_GET['id'])) {
            $datos = session()->all();
            foreach ($datos as $producto => $cantidad) {
                if(substr($producto, 0, 6) == 'PROD-'.$_GET['id']) {
                    session()->forget($producto);
                    return redirect('/tienda')->with('exito', 'Se ha eliminado el artículo del carrito');
                }
            }
            return redirect('/tienda')->with('error', 'No hay ningún item en el carrito con esa ID para eliminar');
        }
        return redirect('/tienda')->with('error', 'Ha ocurrido un error');
    }

}
