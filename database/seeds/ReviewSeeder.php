<?php

use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "1";
        $review->estrellas = 5;
        $review->valoracion = "Este producto es muy bueno, la verdad que estoy muy contento con él. Lo recomiendo sin duda alguna";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "2";
        $review->estrellas = 3;
        $review->valoracion = "Este producto es  bueno, la verdad que estoy  contento con él. Lo recomiendo";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "3";
        $review->estrellas = 4;
        $review->valoracion = "Este producto es muy bueno, la verdad que estoy muy contento con él. Lo recomiendo sin duda alguna";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "4";
        $review->estrellas = 1;
        $review->valoracion = "Este producto es muy malo, la verdad que estoy muy decepcionado con él. No lo recomiendo sin duda alguna";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "5";
        $review->estrellas = 4;
        $review->valoracion = "Este producto es muy bueno, la verdad que estoy muy contento con él. Lo recomiendo sin duda alguna";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "6";
        $review->estrellas = 5;
        $review->valoracion = "Este producto es muy bueno, la verdad que estoy muy contento con él. Lo recomiendo sin duda alguna";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "6";
        $review->estrellas = 1;
        $review->valoracion = "Este producto es malísimo, la verdad que estoy muy enfadado. No lo recomiendo en absoluto";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "7";
        $review->estrellas = 3;
        $review->valoracion = "Este producto es bueno, estoy contento con él. Lo recomiendo a todo el mundo";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "9";
        $review->estrellas = 4;
        $review->valoracion = "Este producto es muy bueno, la verdad que estoy muy contento con él. Lo recomiendo sin duda alguna";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "2";
        $review->estrellas = 5;
        $review->valoracion = "Este producto es muy bueno, la verdad que estoy muy contento con él. Lo recomiendo sin duda alguna";
        $review->save();

        $review = new \App\Review();
        $review->idUser = "2";
        $review->idProducto = "1";
        $review->estrellas = 3;
        $review->valoracion = "Este producto es bueno, la verdad que estoy muy contento con él. Lo recomiendo";
        $review->save();
    }
}
