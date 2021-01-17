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
    <x-notifications></x-notifications>
    <section class="flex-grow grid grid-cols-4 gap-4 m-4">
        <!-- CONTENIDO -->
        <aside>
            <form method="get" action="filtrar" class="px-6 py-4 mb-2 mt-4 mb-8">

                <!--  CATEGORÍAS -->
                <div class="uppercase tracking-wide text-c2 mb-4">Categorías</div>
                @foreach ($categorias as $categoria)
                    <x-filter-checkbox value="{{ strtolower($categoria->nombre) }}"
                                       label="{{ $categoria->nombre }}">
                    </x-filter-checkbox>
                @endforeach


                <!--  CATEGORÍAS -->
                <div class="uppercase tracking-wide text-c2 mb-4 mt-6">En venta</div>
                <div class="flex cursor-pointer border px-4 py-2 text-lg text-grey-darkest">
                    <input type="radio" id="oferta" name="oferta" value="oferta">
                    <label for="oferta" class="ml-4">En oferta</label>
                </div>

                <!--  CATEGORÍAS
                <hr/>
                <div class="font-bold tracking-wide text-c2 mb-4 mt-6">Ordenar por</div>
                <div class="mb-2">
                    <select class="w-100" name="cars" id="cars">
                        <option value="mayor-menor-precio">De mayor a menor precio</option>
                        <option value="menor-mayor-precio">De menor a mayor precio</option>
                        <option value="A-Z-alfabetico">De la A a la Z</option>
                    </select>
                </div>
                -->

                <button type="submit" class="mt-8 px-4 py-2 bg-yellow-500 text-sm text-white font-semibold rounded">
                    Filtrar productos
                </button>
            </form>
        </aside>

        <aside class="col-span-3">
            @if(substr($_SERVER['REQUEST_URI'],0,8) == '/filtrar')
                <a href="/tienda" class="mx-4 mt-8 align-middle whitespace-nowrap inline-flex items-center justify-center px-4 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-gray-700 duration-200 hover:bg-gray-400">
                    Eliminar filtro
                </a>
            @endif
            <div class="justify-start flex flex-wrap my-6">
               @foreach($productos as $producto)
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
            </div>
            <!--  PASAR PÁGINAS -->
            <x-paginator
                :items="$productos">
            </x-paginator>
        </aside>
    </section>
    <x-footer></x-footer>
</main>
</body>
</html>
