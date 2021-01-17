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
<?php
    $sessionAbierta = session('user');
    $admin = "administrator";
    if(isset($sessionAbierta)&&$sessionAbierta==$admin){ ?>
    <div class="flex flex-col">
        <div class="my-4 overflow-x-auto sm:-mx-6 lg:mx-6">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow-md overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Descripcion
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Precio
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Rebaja
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Precio rebajado
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <a href="/tienda" class="mt-2 align-middle whitespace-nowrap inline-flex items-center justify-center px-2 py-2 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-yellow-600 duration-200 hover:bg-yellow-400">
                                    Añadir +
                                </a>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($productos as $producto)
                            <tr>
                                <td class="pl-6 pr-0 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            <img class="h-10 w-10 rounded-full" src="https://lh3.googleusercontent.com/proxy/IBKJ2siwf432QP7Jg_sBebLGCKFbt-HNiVYV52jZ54-0pXuI-t7M24I519w_aZqiv1Y7JEzLKxIKlNi7cEPDtmhDeCARAolHRh8317bokjfIj999CKouyA_u" alt="">
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 w-56 truncate">
                                                {{$producto->nombre}}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm text-gray-900 truncate w-80">{{$producto->descripcion}}</div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{$producto->precio}}€
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    @if($producto->rebajado)
                                        <span class="px-2 ml-3 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                            {{$producto->rebajado}}
                                        </span>
                                    @else
                                        <span class="px-2 ml-3 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-100 text-green-800">
                                            {{$producto->rebajado}}
                                        </span>
                                    @endif
                                </td>
                                @if($producto->precio_rebaja)
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        {{$producto->precio_rebaja}}€
                                    </td>
                                @else
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                        --
                                    </td>
                                @endif
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="#" class="text-indigo-600 hover:text-indigo-900">Borrar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
     <?php
    }else{ ?>
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
   <?php } ?>

    <x-footer></x-footer>
</main>
</body>
</html>
