<?php

namespace App\Http\Controllers;

use App\Producto;
use App\ProductoImg;
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

    public function borrarProducto(){
        if (isset($_GET["id"])) {
            $id = $_GET["id"];
            Producto::where('id', $id)->delete();
            return redirect()->to('tienda');
        }
    }

    public function añadirProducto(){
        if(isset($_GET['nombre'], $_GET['descripcion'], $_GET['categoria'], $_GET['precio'], $_GET['stock'])){

            $nombre = $_GET['nombre'];
            $descripcion = $_GET['descripcion'];
            $precio = $_GET['precio'];
            $stock = $_GET['stock'];
            $categoria = $_GET['categoria'];

            $producto = new Producto();

            $producto->nombre = $nombre;
            $producto->descripcion = $descripcion;
            $producto->precio = $precio;
            $producto->id_categoria = $categoria;
            $producto->stock = $stock;
            if(isset($_GET['rebajado'])){
                $rebajado = $_GET['rebajado'];
                if($rebajado==1){
                    $producto->rebajado = 1;
                }
            }else{
                $producto->rebajado = 0;
            }
            if(isset($_GET['precio_rebajado'])){
                $precioRebajado = $_GET['precio_rebajado'];
                if($precioRebajado =! ""){
                    $producto->precio_rebaja = $_GET['precio_rebajado'];
                }
            }else{
                $producto->precio_rebaja = null;
            }
            $producto->save();

            $ultimo = $producto->id;
            $nombreUltimo = $producto->nombre;

            if(isset($_GET['img1'])){
                if($_GET['img1'] != "") {
                    $imgProducto = new ProductoImg();
                    $imgProducto->img = $_GET['img1'];
                    $imgProducto->id_producto = $ultimo;
                    $imgProducto->nombre = $nombreUltimo;
                    $imgProducto->save();
                }
            }
            if(isset($_GET['img2'])){
                if($_GET['img2'] != "") {
                    $imgProducto = new ProductoImg();
                    $imgProducto->img = $_GET['img2'];
                    $imgProducto->id_producto = $ultimo;
                    $imgProducto->nombre = $nombreUltimo;
                    $imgProducto->save();
                }
            }
            if(isset($_GET['img3'])){
                if($_GET['img3'] != "") {
                    $imgProducto = new ProductoImg();
                    $imgProducto->img = $_GET['img3'];
                    $imgProducto->id_producto = $ultimo;
                    $imgProducto->nombre = $nombreUltimo;
                    $imgProducto->save();
                }
            }
            if(isset($_GET['img4'])){
                if($_GET['img4'] != ""){
                    $imgProducto = new ProductoImg();
                    $imgProducto->img = $_GET['img4'];
                    $imgProducto->id_producto = $ultimo;
                    $imgProducto->nombre = $nombreUltimo;
                    $imgProducto->save();
                }
            }
            if(isset($_GET['img5'])){
                if($_GET['img5'] != "") {
                    $imgProducto = new ProductoImg();
                    $imgProducto->img = $_GET['img5'];
                    $imgProducto->id_producto = $ultimo;
                    $imgProducto->nombre = $nombreUltimo;
                    $imgProducto->save();
                }
            }

            return redirect('tienda');
        }
        return redirect('tienda')->with('error', 'No se ha podidodo insertar el articulo');
    }
}
