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
    <div class="flex flex-col flex-grow">
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
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                Stock
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <span class="sr-only">Editar</span>
                            </th>
                            <th scope="col" class="relative px-6 py-3">
                                <a href="/nuevoProducto" class="mt-2 align-middle whitespace-nowrap inline-flex items-center justify-center px-2 py-2 border border-transparent rounded-md shadow-sm text-xs font-medium text-white bg-yellow-500 duration-200 hover:bg-yellow-600">
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
                                            <img class="h-10 w-10 rounded-full" src="{{ $producto->img }}" alt="">
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
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                    {{$producto->stock}}
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="editarProducto?id={{$producto->id}}" class="text-indigo-600 hover:text-indigo-900">Editar</a>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <a href="borrarProducto?id={{$producto->id}}" class="text-indigo-600 hover:text-indigo-900">Borrar</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <x-paginator
                :items="$productos">
            </x-paginator>
        </div>
    </div>
    <x-footer></x-footer>
</main>
</body>
