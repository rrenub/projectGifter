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
    <script src="{{ asset('js/app.js') }}"></script>

</head>
<body>
<main class="flex flex-col h-screen">
    <x-navigation-header></x-navigation-header>
    <section class="flex-grow grid grid-cols-4 gap-4 m-4">
        <!-- CONTENIDO -->
        <aside>
            <div class="px-6 py-4 mb-2 mt-4 mb-8">
                <!--  PRECIO -->
                <div class="uppercase tracking-wide text-c2 mb-4">Precio</div>
                <div class="flex -mx-3 items-baseline">
                    <div class="w-1/2 px-3">
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                            <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-gray-500" placeholder="Desde">
                        </div>
                    </div>
                    <div class="w-1/2 px-3">
                        <div class="flex">
                            <div class="w-10 z-10 pl-1 text-center pointer-events-none flex items-center justify-center"><i class="mdi mdi-account-outline text-gray-400 text-lg"></i></div>
                            <input type="text" class="w-full -ml-10 pl-10 pr-3 py-2 rounded-lg border-2 border-gray-200 outline-none focus:border-gray-500" placeholder="Hasta">
                        </div>
                    </div>
                </div>


                <!--  CATEGORÍAS -->
                <div class="uppercase tracking-wide text-c2 mb-4 mt-6">Categorías</div>
                <div class="flex cursor-pointer border px-4 py-2 text-lg text-grey-darkest border-b-0">
                    <input type="checkbox" id="rango-50-euros" value="rango-50-euros">
                    <label for="rango-50-euros" class="ml-4">Deportes</label>
                </div>
                <div class="flex cursor-pointer border px-4 py-2 text-lg text-grey-darkest border-b-0">
                    <input type="checkbox" id="rango-50-euros" value="rango-50-euros">
                    <label for="rango-50-euros" class="ml-4">Decoración</label>
                </div>
                <div class="flex cursor-pointer border px-4 py-2 text-lg text-grey-darkest">
                    <input type="checkbox" id="rango-50-euros" value="rango-50-euros">
                    <label for="rango-50-euros" class="ml-4">Misceláneo</label>
                </div>

                <!--  CATEGORÍAS -->
                <div class="uppercase tracking-wide text-c2 mb-4 mt-6">En venta</div>
                <div class="flex cursor-pointer border px-4 py-2 text-lg text-grey-darkest">
                    <input type="checkbox" id="rango-50-euros" value="rango-50-euros">
                    <label for="rango-50-euros" class="ml-4">Ofertas</label>
                </div>

                <!--  CATEGORÍAS -->
                <hr/>
                <div class="font-bold tracking-wide text-c2 mb-4 mt-6">Ordenar por</div>
                <div class="mb-2">
                    <select class="w-100" name="cars" id="cars">
                        <option value="volvo">De mayor a menor precio</option>
                        <option value="saab">De menor a mayor precio</option>
                        <option value="saab">De la A a la Z</option>
                        <option value="saab">De la Z a la A</option>
                    </select>
                </div>

                <a href="#" class="mt-6 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-600 hover:bg-yellow-800">
                    Filtrar productos
                </a>

            </div>
        </aside>

        <aside class="col-span-3">
            <div class="flex m-4 justify-between font-bold">
                <div class="flex items-center">
                    <img class="w-8" src="/img/filter_alt-24px.svg">
                    <p>Filtrando por categoría: Deportes</p>
                </div>
            </div>
            <div class="justify-center flex flex-wrap">
               @foreach($productos as $producto)
                    <x-card-item
                        name="{{ $producto->nombre }}"
                        description="{{ $producto->descripcion }}"
                        price="{{ $producto->precio }}"
                        idProd="{{ $producto->id }}"
                        img="{{ $producto->img }}">
                    </x-card-item>
                @endforeach
            </div>
            <!--  PASAR PÁGINAS -->
            <x-paginator></x-paginator>
        </aside>




    </section>
    <x-footer></x-footer>
</main>
</body>
</html>
