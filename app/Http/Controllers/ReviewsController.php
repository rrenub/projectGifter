<?php

namespace App\Http\Controllers;

use App\Review;
use Illuminate\Http\Request;

class ReviewsController extends Controller
{
    public function procesarReview()
    {
        $idUser = $_GET['idUser'];
        $idProducto = $_GET['idProducto'];

        if (isset($_GET["estrellas"], $_GET["valoracion"])) {

            $estrellas = $_GET["estrellas"];
            $valoracion = $_GET["valoracion"];

                    $review = new Review();
                    $review->estrellas = $estrellas;
                    $review->valoracion = $valoracion;
                    $review->idProducto = $idProducto;
                    $review->idUSer = $idUser;
                    $review->save();

            return redirect('/detalleProducto?id='.$idProducto);

        } else {
                    return redirect('/detalleProducto?id='.$idProducto);
                }
            }
    }

