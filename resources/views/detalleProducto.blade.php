<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="estilo/estilo.css">

    <title>🎁 Gifter</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>

<?php
    $sessionAbierta = session('user');

    $idProducto = $_GET['id'];
    $detalleProducto = \App\Producto::where('id', $idProducto)->get();

    $nombre = $detalleProducto[0]['nombre'];
    $descripcion = $detalleProducto[0]['descripcion'];
    $precioNormal = $detalleProducto[0]['precio'];
    $stock = $detalleProducto[0]['stock'];
    $rebaja = $detalleProducto[0]['rebajado'];
    $precioRebajado = $detalleProducto[0]['precio_rebaja'];
    $categoria = $detalleProducto[0]['id_categoria'];

    $imagenes = \App\ProductoImg::where('id_producto', $idProducto)->get();
    ?>

<main class="flex flex-col h-screen">
    <x-navigation-header></x-navigation-header>
    <section class="flex-grow grid">
        <!-- CONTENIDO -->
    <div class="grid grid-cols-3 mt-4">

        <!-- Galeria y opcion de compra -->

        <div class="col-span-1 rounded ml-8 mr-4 mt-4">
            <x-gallery
                :items="$imagenes">
            </x-gallery>
            <div class="w-full px-3 mt-8">
                <div class="flex">
                </div>
            </div>
        </div>

        <!-- Descripcion del articulo -->

        <div class="col-span-2 rounded mr-8 ml-4 mt-4">
            <div class="flex text-6xl tracking-tight font-bold px-4">
                <h1 class="w-4/6">
                    <span class="flex text-black xl:inline align-middle">{{$nombre}}</span>
                </h1>
                <h1 class="w-2/6 text-right">
                <?php
                if($rebaja == 0){ ?>
                    <span class="flex text-black xl:inline bg-yellow-500 px-2 py-1 rounded text-4xl">{{$precioNormal}}€</span>
                <?php
                }else{ ?>
                    <span class="flex text-red-600 line-through xl:inline px-2 rounded text-3xl">{{$precioNormal}}€</span>
                    <span class="flex text-black xl:inline bg-yellow-500 px-2 py-1 rounded text-4xl">{{$precioRebajado}}€</span>
                <?php } ?>
                </h1>
            </div>
            <h1 class="text-xl tracking-tight font-bold pt-6 px-4">
                <span class="block text-black xl:inline">Descripción del artículo</span>
            </h1>
            <div class="text-l tracking-tight sm:text-l md:text-l p-6 w-3/4 px-4">
                <span class="block text-gray-600 xl:inline">{{$descripcion}}</span>
                <form action="/tienda/añadirProductoCarrito" method="post" class="mt-6">
                    <?= csrf_field() ?>
                    <input type="hidden" name="prodID" value="{{ $idProducto }}">
                    <button class="flex py-2 px-4 gap-2 items-center bg-yellow-500 text-base text-gray-800 font-semibold rounded">
                        <span>Añadir al carrito</span>
                        <img src="/img/shopping_cart-24px.svg">
                    </button>
                </form>
            </div>
        </div>

        <!-- Articulos relacionados -->

        <?php
        $productosRelacionados = \App\Producto::select('productos.*',
            DB::raw('(SELECT img FROM productos_img WHERE id_producto = productos.id LIMIT 1) AS img'))
            ->where('id_categoria', $categoria)
            ->take(4)
            ->whereNotIn('id', [$idProducto])
            ->get();

        $cantidad = count($productosRelacionados);
        ?>

        <div class="col-span-3 mx-8">
            <h1 class="text-3xl tracking-tight font-bold py-4 text-center border-b-2 border-gray-700">
                <span class="block text-black xl:inline">Artículos relacionados</span>
            </h1>
            <div class="justify-center flex flex-wrap py-6">
                @if($cantidad==0)
                    <h1>Lo sentimos, no hay artículos relacionados</h1>
                @else
                @foreach($productosRelacionados as $producto)
                    @if($producto->rebajado)
                        <x-card-item-sale
                            name="{{ $producto->nombre }}"
                            description="{{ $producto->descripcion }}"
                            price="{{ $producto->precio }}"
                            idProd="{{ $producto->id }}"
                            sale="{{ $producto->precio_rebaja }}"
                            img="{{ $producto->img }}">
                        </x-card-item-sale>
                    @else
                        <x-card-item
                            name="{{ $producto->nombre }}"
                            description="{{ $producto->descripcion }}"
                            price="{{ $producto->precio }}"
                            idProd="{{ $producto->id }}"
                            img="{{ $producto->img }}">
                        </x-card-item>
                    @endif
                @endforeach
                    @endif
            </div>
        </div>

        <!-- Valoración del producto -->
        <div class="col-span-3 mx-8 my-4">
            <h1 class="text-3xl tracking-tight font-bold py-2 px-4 text-center border-b-2 border-gray-700">
                <span class="block text-black xl:inline">Valoración del producto</span>
            </h1>
        </div>

        @if(isset($sessionAbierta))
            <div class="col-span-1 rounded ml-12 mr-4 my-4 mt-8">
                <div class="grid grid-cols-2">
                    <div class="col-span-1 ml-8">
                        <svg class="estrella mx-1 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    </div>
                    <div  class="col-span-1">
                        <div class="mt-4">
                            <div class="flex justify-left font-bold text-md">1 Estrella:<p class="font-light ml-2">Muy malo</p></div>
                            <div class="flex justify-left font-bold text-md">2 Estrellas:<p class="font-light ml-2">Malo</p></div>
                            <div class="flex justify-left font-bold text-md">3 Estrellas:<p class="font-light ml-2">Normal</p></div>
                            <div class="flex justify-left font-bold text-md">4 Estrellas:<p class="font-light ml-2">Bueno</p></div>
                            <div class="flex justify-left font-bold text-md">5 Estrellas:<p class="font-light ml-2">Muy bueno</p></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-span-2 ml-4 mr-16 my-4">
                <form name="formValoracion" method="get" action="procesarReview">
                    <div class="mb-2">
                        <p class="float-left">Número de estrellas:</p>
                        <select class="ml-8 w-100 rounded border-2 border-gray-600" name="estrellas">
                            <option value="1">⭐️</option>
                            <option value="2">⭐️⭐️</option>
                            <option value="3">⭐️⭐️⭐️</option>
                            <option value="4">⭐️⭐️⭐️⭐️</option>
                            <option value="5">⭐️⭐️⭐️⭐️⭐️</option>
                        </select>
                    </div>
                    <div>
                        <textarea rows="5" name="valoracion" maxlength="500"  class="w-full h-32 rounded-lg border-2 border-gray-600 py-2 px-4" placeholder="Describa su opinión del producto (500 caracteres)"></textarea>
                    </div>
                    <input type="hidden" name="idUser" value="{{$sessionAbierta}}">
                    <input type="hidden" name="idProducto" value="{{$idProducto}}">
                    <button type="submit" class="block w-2/12 max-w-xs ml-auto bg-gray-200 text-black rounded-lg px-3 py-3 font-semibold duration-200 hover:bg-yellow-500">Enviar</button>
                </form>
            </div>
        @endif
    </div>

        <div class="grid grid-cols-4 mt-4">
            <div class="col-span-4 ml-16 mr-16 my-4">
                <?php
                $reviews = \App\Review::where('idProducto', $idProducto)
                    ->take(5)
                    ->get();
                $cantidad = count($reviews);
                ?>
                @if($cantidad==0)
                    <h1>No hay comentarios</h1>
                @else
                    @foreach($reviews as $review)
                        <x-comment
                            estrellas="{{$review->estrellas}}"
                            valoracion="{{$review->valoracion}}"
                            idUsuario="{{$review->idUser}}"
                            fecha="{{$review->created_at}}"
                            idProd="{{ $review->idProducto }}">
                        </x-comment>
                    @endforeach
                @endif
            </div>
        </div>
    </section>
    <x-footer></x-footer>
</main>
</body>
