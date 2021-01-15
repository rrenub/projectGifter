<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>🎁 Gifter</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<main class="flex flex-col h-screen">
    <x-navigation-header></x-navigation-header>
    <section class="flex-grow grid">
        <!-- CONTENIDO -->
    <div class="grid grid-cols-3 mt-4">

        <!-- Galeria y opcion de compra -->

        <div class="col-span-1 rounded ml-8 mr-4 my-4">
            <x-gallery></x-gallery>
            <div class="w-full px-3 mt-8">
                <div class="flex">
                 <button class="block w-full max-w-xs mr-2 bg-gray-200 text-black rounded-lg px-3 py-3 font-semibold duration-200 hover:bg-yellow-500">Comprar</button>
                 <button class="block w-full max-w-xs ml-2 bg-gray-200 text-black rounded-lg px-3 py-3 font-semibold duration-200 hover:bg-yellow-500">Añadir al carrito</button>
                </div>
            </div>
        </div>

        <!-- Descripcion del articulo -->

        <div class="col-span-2 rounded mr-8 ml-4 my-4">
            <div class="flex text-4xl tracking-tight font-bold sm:text-3xl md:text-3xl py-2 px-4 border-b-4 border-gray-700">
                <h1>
                    <span class="block text-black xl:inline">Nombre de artículo</span>
                </h1>
                <div class="flex justify-right items-center ml-auto">
                    <div class="flex items-center">
                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="mx-1 w-4 h-4 fill-current text-yellow-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                        <svg class="mx-1 w-4 h-4 fill-current text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z"/></svg>
                    </div>
                </div>
            </div>
            <h1 class="text-xl tracking-tight font-bold sm:text-xl md:text-xl pt-6 px-4">
                <span class="block text-black xl:inline">Descripción del artículo</span>
            </h1>
            <div class="text-l tracking-tight sm:text-l md:text-l pt-2 px-4">
                <span class="block text-gray-600 xl:inline">En este apartado se escribirá la descripción del artículo</span>
            </div>
        </div>

        <!-- Articulos relacionados -->

        <div class="col-span-3 m-8">
            <h1 class="text-4xl tracking-tight font-bold sm:text-3xl md:text-3xl py-2 px-4 text-center border-b-4 border-gray-700">
                <span class="block text-black xl:inline">Artículos relacionados</span>
            </h1>
            <div class="justify-center flex flex-wrap">
                <x-card-item-home></x-card-item-home>
                <x-card-item-home></x-card-item-home>
                <x-card-item-home></x-card-item-home>
            </div>
        </div>
    </div>
    </section>
    <x-footer></x-footer>
</main>
</body>
