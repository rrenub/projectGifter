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

<?php
$idProducto = $_GET['id'];
$producto = \App\Producto::where('id', $idProducto)->get();

?>

<main class="flex flex-col h-screen">
    <x-navigation-header></x-navigation-header>
    <section class="flex-grow grid rounded-2xl mx-48 mt-6 bg-gray-200 shadow-md">
        <div class="grid grid-cols-3">
            <div class="col-span-3">
                <h1 class="font-bold text-xl p-4 w-full justify-center border-t text-white rounded bg-yellow-500">DATOS DEL PRODUCTO</h1>
            </div>
        </div>
        <form name="formEdit" method="get" action="procesarEditar">
            <div class="grid grid-cols-3 px-4 py-3">
                <div class="flex col-span-1">
                    <h1 class="font-bold">Id del producto</h1>
                    <input type="hidden" name="id" value="{{$producto[0]['id']}}">
                </div>
                <div class="flex col-span-2">
                    <span>{{$producto[0]['id']}}</span>
                </div>
            </div>
            <div class="grid grid-cols-3 px-4 py-3">
                <div class="flex col-span-1">
                    <h1 class="font-bold">Nombre del producto</h1>
                </div>
                <div class="flex col-span-2">
                    <textarea rows="1" name="nombre" maxlength="100"  class="w-1/2 p-1 rounded-lg" placeholder="{{$producto[0]['nombre']}}"></textarea>
                </div>
            </div>
            <div class="grid grid-cols-3 px-4 py-3">
                <div class="flex col-span-1">
                    <h1 class="font-bold">Descripción</h1>
                </div>
                <div class="flex col-span-2">
                    <textarea rows="1" name="descripcion" maxlength="100"  class="w-full h-28 p-1 rounded-lg" placeholder="{{$producto[0]['descripcion']}}"></textarea>
                </div>
            </div>
            <div class="grid grid-cols-3 px-4 py-3">
                <div class="flex col-span-1">
                    <h1 class="font-bold">Precio</h1>
                </div>
                <div class="flex col-span-2">
                    <textarea rows="1" name="precio" maxlength="100"  class="w-1/4 p-1 rounded-lg" placeholder="{{$producto[0]['precio']}} €"></textarea>
                </div>
            </div>
            <div class="grid grid-cols-3 px-4 py-3">
                <div class="flex col-span-1">
                    <h1 class="font-bold">Rebajado</h1>
                </div>
                <div class="flex col-span-2">
                    <ul>
                        @if($producto[0]['rebajado'])
                            <li>
                                <input type="radio" name="rebajado" value="1" checked> Rebajado
                            </li>
                            <li>
                                <input type="radio" name="rebajado" value="0"> No rebajado
                            </li>
                        @else
                            <li>
                                <input type="radio" name="rebajado" value="1"> Rebajado
                            </li>
                            <li>
                                <input type="radio" name="rebajado" value="0" checked> No rebajado
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
            <div class="grid grid-cols-3 px-4 py-3">
                <div class="flex col-span-1">
                    <h1 class="font-bold">Precio rebajado</h1>
                </div>
                <div class="flex col-span-2">
                    <textarea rows="1" name="precio_rebajado" maxlength="100"  class="w-1/4 p-1 rounded-lg" placeholder="{{$producto[0]['precio_rebaja']}}"></textarea>
                </div>
            </div>
            <div class="grid grid-cols-3 px-4 py-3">
                <div class="flex col-span-1">
                    <h1 class="font-bold">Stock</h1>
                </div>
                <div class="flex col-span-2">
                    <textarea rows="1" name="stock" maxlength="100"  class="w-1/4 p-1 rounded-lg" placeholder="{{$producto[0]['stock']}} unidades"></textarea>
                </div>
            </div>
            <div class="justify-center text-right mr-8 block">
                <button type="submit" class="my-4 align-middle whitespace-nowrap inline-flex items-center justify-center px-2 py-2 border border-transparent rounded-md shadow-sm text-md font-medium text-white bg-yellow-500 duration-200 hover:bg-yellow-600">
                    Editar
                </button>
            </div>
        </form>
    </section>
    <x-footer></x-footer>
</main>
</body>
