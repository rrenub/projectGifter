<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        ==== PLANTILLA PARA AÑADIR PRODUCTOS ====
        $prod1 = new \App\Producto();
        $prod1->nombre = "";
        $prod1->descripcion = "";
        $prod1->precio = "";
        $prod1->rebajado = "";
        $prod1->precio_rebaja = "";
        $prod1->id_categoria = "";
        */

        $prod1 = new \App\Producto();
        $prod1->nombre = "Máscara de buceo";
        $prod1->descripcion = "Hemos creado la máscara Easybreath 500, la 2ª generación de nuestra máscara facial, para ofrecer una mejor experiencia al ver y respirar dentro y fuera del agua ";
        $prod1->precio = 24.99;
        $prod1->stock = 40;
        $prod1->rebajado = false;
        $prod1->id_categoria = 1;
        $prod1->save();

        $prod2 = new \App\Producto();
        $prod2->nombre = "Fire Stick TV";
        $prod2->descripcion = "Nuestro Fire TV Stick más asequible: reproducción en streaming rápida y con calidad Full HD. Viene con el mando por voz Alexa";
        $prod2->precio = 29.99;
        $prod2->stock = 40;
        $prod2->rebajado = true;
        $prod2->precio_rebaja = 25.99;
        $prod2->id_categoria = 2;
        $prod2->save();

        $prod3 = new \App\Producto();
        $prod3->nombre = "Gorra McLaren - Lando Norris";
        $prod3->descripcion = "Gorra del piloto Lando Norris con el número 4 de la temporada 2020/2021 con el equipo McLaren Renault Racing Team";
        $prod3->precio = 29.99;
        $prod3->stock = 40;
        $prod3->rebajado = false;
        $prod3->id_categoria = 3;
        $prod3->save();

        $prod4 = new \App\Producto();
        $prod4->nombre = "Curso de Surf iniciación";
        $prod4->descripcion = "La escuela Surfeando ofrece un curso de surf de 4 horas para iniciarse en el mundo de coger olas";
        $prod4->precio = 100;
        $prod4->stock = 40;
        $prod4->rebajado = true;
        $prod4->precio_rebaja = 65;
        $prod4->id_categoria = 4;
        $prod4->save();

        $prod5 = new \App\Producto();
        $prod5->nombre = "Robot de cocica CecoTec";
        $prod5->descripcion = "Prepárate para disfrutar con tu familia y amigos de exquisitos menús de la manera más rápida y sencilla. Ahora, además, cuenta con báscula incorporada para trabajar con cantidades exactas y no dejar nada a la improvisación. El único robot de cocina con exclusiva cuchara MamboMix que remueve y amasa para conseguir resultados excelentes en las elaboraciones";
        $prod5->precio = 229.99;
        $prod5->stock = 40;
        $prod5->rebajado = false;
        $prod5->id_categoria = 5;
        $prod5->save();

        $prod6 = new \App\Producto();
        $prod6->nombre = "Figura Funko Pop! - Stan Lee ";
        $prod6->descripcion = "Figura Funko Pop! Exclusivo SDCC20 - Stan Lee Cameo - Iron Man.";
        $prod6->precio = 16.95;
        $prod6->stock = 40;
        $prod6->rebajado = false;
        $prod6->id_categoria = 6;
        $prod6->save();

        $prod7 = new \App\Producto();
        $prod7->nombre = "Figura Funko Pop! - Thanos ";
        $prod7->descripcion = "Figura Funko Pop! - Thanos 10 pulgadas / 25cm - Marvel: Vengadores";
        $prod7->precio = 26.95;
        $prod7->stock = 40;
        $prod7->rebajado = true;
        $prod7->precio_rebaja = 9.99;
        $prod7->id_categoria = 6;
        $prod7->save();

        $prod8 = new \App\Producto();
        $prod8->nombre = "Robot aspirador iRobot Roomba";
        $prod8->descripcion = "Acaba con la suciedad - Experimenta una limpieza completa con el potente sistema de limpieza que levanta la suciedad, los restos y el pelo de mascotas, se escondan donde se escondan ";
        $prod8->precio = 479;
        $prod8->stock = 40;
        $prod8->rebajado = true;
        $prod8->precio_rebaja = 449;
        $prod8->id_categoria = 5;
        $prod8->save();

        $prod9 = new \App\Producto();
        $prod9->nombre = "Xiaomi Nuevo Band 5 ";
        $prod9->descripcion = "Xiaomi Nuevo Band 5 - Monitor de frecuencia cardíaca, Monitor de sueño, Salud Femenina, 11 Modos de Entrenamiento, 50 Metros a Prueba de Agua, Negro (MI 3) ";
        $prod9->precio = 33.95;
        $prod9->stock = 40;
        $prod9->rebajado = false;
        $prod9->id_categoria = 1;
        $prod9->save();
    }
}
