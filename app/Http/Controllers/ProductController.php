<?php

namespace App\Http\Controllers;

use App\Producto;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function procesarEditar()
    {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            $producto = Producto::where('id', $id)->first();

                $nombre = $_GET["nombre"];
                $descripcion = $_GET["descripcion"];
                $precio = $_GET["precio"];
                $rebajado = $_GET["rebajado"];
                $precioRebajado = $_GET["precio_rebajado"];
                $stock = $_GET["stock"];

                if ($nombre != "") {
                    $producto->nombre = $nombre;
                }
                if ($descripcion != "") {
                    $producto->descripcion = $descripcion;
                }
                if ($precio != "") {
                    $producto->precio = $precio;
                }
                if ($precioRebajado != "") {
                    $producto->precio_rebaja = $precioRebajado;
                }
                if ($stock != "") {
                    $producto->stock = $stock;
                }
                $producto->rebajado = $rebajado;
                $producto->save();

                return redirect('/tienda');
            } else {
                return redirect('/tienda');

        }
    }
}
