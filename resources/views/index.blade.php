<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>🎁 Gifter</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Libreria js para escribir solo -->
    <script async src="https://unpkg.com/typer-dot-js@0.1.0/typer.js"></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- JQuery -->
</head>
<body>
    <x-navigation-header></x-navigation-header>
        <main>
                <div class="max-w flex flex-shrink-0 shadow-md">
                <div class="mx-10 px-8 mt-16 sm:text-center lg:text-left flex flex-col justify-start">
                    <div>
                        <h1 class="text-4xl tracking-tight font-extrabold sm:text-5xl md:text-6xl">
                            <span class="block text-gray-900 xl:inline">Sorprende a</span>
                            <div class="block text-yellow-500 xl:inline">
                                <span class="typer" id="main" data-words="tu familia,tu novia,tu perro 🐶,tus amigos,tu hija,a tu profesor" data-delay="100" data-deleteDelay="2000"></span>
                                <span class="cursor" data-owner="main"></span>
                            </div>
                        </h1>
                        <p class="mt-3 text-base text-gray-500 sm:mt-5 sm:text-lg sm:max-w-auto sm:mx-auto lg:mx-0">
                            Mediante un sistema de eCommerce, puedes realizar compras online desde nuestra tienda. ¿No terminas de decidirte? Filtra y busca según las diferentes categorías y precios de forma fácil y cómoda
                        </p>
                        <div class="mt-6 flex flex-shrink-0 justify-start items-baseline mb-8">
                            <x-search-bar></x-search-bar>
                        </div>
                    </div>
                </div>
                <div class="w-4/5" style="clip-path:polygon(10% 0, 100% 0%, 100% 100%, 0 100%)">
                    <img class="h-auto w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full mr-0" src="https://cdn.pixabay.com/photo/2017/12/13/00/23/christmas-3015776_1280.jpg" alt="">
                </div>
            </div>
            <div class="lg:text-center mt-8">
                <h2 class="text-lg text-yellow-500 font-semibold tracking-wide uppercase">Últimas ofertas</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    Aprovecha las últimas ofertas
                </p>
                <div class="justify-center px-8 py-4 flex flex-wrap">
                    @foreach($productos as $producto)
                        <x-card-item-sale
                            name="{{ $producto->nombre }}"
                            description="{{ $producto->descripcion }}"
                            price="{{ $producto->precio }}"
                            idProd="{{ $producto->id }}"
                            sale="{{ $producto->precio_rebaja }}"
                            img="{{ $producto->img }}">
                        </x-card-item-sale>
                    @endforeach
                </div>
                <a href="/tienda" class="mt-2 align-middle whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-yellow-600 duration-200 hover:bg-yellow-400">
                    Visita la tienda
                </a>
            </div>

            <x-footer></x-footer>
        </main>
</body>
</html>
