<?php

use Illuminate\Database\Seeder;

class ProductImgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* PLANTILLA IMAGENES
        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = '';
        $prod1Img->img = '';
        $prod1Img->id_producto = ;
        $prod1Img->save();
        */

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = "Mascara de buceo";
        $prod1Img->img = 'https://contents.mediadecathlon.com/p1757574/k$f02ba6960897d7da2e1b64de341263e7/sq/M+scara+Snorkel+Superficie+Easybreath+500+Turquesa+Oscuro.webp?f=1000x1000';
        $prod1Img->id_producto = 1;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Mascara de buceo';
        $prod1Img->img = 'https://contents.mediadecathlon.com/p1757582/k$1250f6624c445a8d4986437a1a427f66/sq/M+scara+Snorkel+Superficie+Easybreath+500+Turquesa+Oscuro.webp?f=1000x1000';
        $prod1Img->id_producto = 1;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Mascara de buceo';
        $prod1Img->img = 'https://contents.mediadecathlon.com/p1757584/k$fc6e4a8c520a23c1b62fdf8aed134050/sq/M+scara+Snorkel+Superficie+Easybreath+500+Turquesa+Oscuro.webp?f=1000x1000';
        $prod1Img->id_producto = 1;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Fire Stick TV';
        $prod1Img->img = 'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_77576036/fee_325_225_png/Reproductor-multimedia---Fire-TV-Stick-Lite-2020--8GB--Bluetooth--Negro';
        $prod1Img->id_producto = 2;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Gorra McLaren';
        $prod1Img->img = 'https://www.neweracap.eu/globalassets/products/a8789_s24/12392948/12392948-left3.jpg/?w=425';
        $prod1Img->id_producto = 3;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Gorra McLaren';
        $prod1Img->img = 'https://fotografias.lasexta.com/clipping/cmsimages01/2019/10/26/A442E9B9-A00E-4C82-99EC-94CDD6EADC0C/69.jpg';
        $prod1Img->id_producto = 3;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'curso de surf';
        $prod1Img->img = 'https://www.escuelacantabradesurf.com/wp-content/uploads/2017/03/cursos-surf-iniciacion.jpg';
        $prod1Img->id_producto = 4;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'curso de surf';
        $prod1Img->img = 'https://www.xmigrations.com/wp-content/uploads/2019/05/Surf-Camp-de-Iniciaci%C3%B3n-Saludable-en-Caleta-de-Famara-Lanzarote-1.jpg';
        $prod1Img->id_producto = 4;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Robot de cocina Cecotec';
        $prod1Img->img = 'https://www.storececotec.com/7546-large_default/mambo-8090.jpg';
        $prod1Img->id_producto = 5;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Funko stan lee';
        $prod1Img->img = 'https://s1.thcdn.com///productimg/1600/1600/12737111-5204829554099995.jpg';
        $prod1Img->id_producto = 6;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Funko stan lee';
        $prod1Img->img = 'https://s1.thcdn.com///productimg/1600/1600/12737111-6644829554058628.jpg';
        $prod1Img->id_producto = 6;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Funko Pop thanos';
        $prod1Img->img = 'https://s1.thcdn.com//productimg/1600/1600/11564469-6214628968509612.png';
        $prod1Img->id_producto = 7;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Roomba';
        $prod1Img->img = 'https://images-na.ssl-images-amazon.com/images/I/71gfDv6UFRL._AC_SL1475_.jpg';
        $prod1Img->id_producto = 8;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Roomba';
        $prod1Img->img = 'https://images-na.ssl-images-amazon.com/images/I/81Owmp9YjkL._AC_SL1482_.jpg';
        $prod1Img->id_producto = 8;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Roomba';
        $prod1Img->img = 'https://images-na.ssl-images-amazon.com/images/I/71x1xglv3ML._AC_SL1500_.jpg';
        $prod1Img->id_producto = 8;
        $prod1Img->save();

        $prod1Img = new \App\ProductoImg();
        $prod1Img->nombre = 'Xiaomi band 5';
        $prod1Img->img = 'https://images-na.ssl-images-amazon.com/images/I/51TiRNejJOL._AC_SY879_.jpg';
        $prod1Img->id_producto = 9;
        $prod1Img->save();
    }
}
