<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $deportes = new \App\Categoria();
        $deportes->nombre = "Deportes";
        $deportes->save();

        $electronica = new \App\Categoria();
        $electronica->nombre = "Electrónica";
        $electronica->save();

        $ropa = new \App\Categoria();
        $ropa->nombre = "Ropa";
        $ropa->save();

        $experiencias = new \App\Categoria();
        $experiencias->nombre = "Experiencias";
        $experiencias->save();

        $hogar = new \App\Categoria();
        $hogar->nombre = "Hogar";
        $hogar->save();

        $coleccionismo = new \App\Categoria();
        $coleccionismo->nombre = "Coleccionismo";
        $coleccionismo->save();
    }
}
