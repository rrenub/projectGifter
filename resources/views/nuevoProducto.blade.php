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
    <section class="flex-grow">
        <!-- CONTENIDO -->

        <div class="m-8">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-6 mr-2 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Añadir un nuevo producto</h3>
                        <p class="mt-1 text-sm text-gray-600">
                            Introduzca la información para añadir un nuevo producto a la tienda. Posteriormente se puede editar y eliminar su información.
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:mt-0 md:col-span-2">
                    <form action="#" method="POST">
                        <div class="shadow overflow-hidden sm:rounded-md">
                            <div class="px-4 py-5 bg-white sm:p-6">
                                <div class="grid grid-cols-6 gap-6">
                                    <div class="col-span-6">
                                        <label for="first_name" class="block text-sm font-medium text-gray-700">Nombre del producto</label>
                                        <input type="text" name="first_name" id="first_name" autocomplete="given-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-6 sm:col-span-4">
                                        <label for="email_address" class="block text-sm font-medium text-gray-700">Email address</label>
                                        <textarea rows="10" cols="50" name="email_address" id="email_address" autocomplete="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full p-2 shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="500 caracteres máx."></textarea>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="country" class="block text-sm font-medium text-gray-700">Country / Region</label>
                                        <select id="country" name="country" autocomplete="country" class="mt-1 block w-full py-2 px-3 border border-gray-300 bg-white rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                                            <?php
                                                $categorias = \App\Categoria::all();
                                            ?>
                                                @foreach ($categorias as $categoria)
                                                    <option>{{ $categoria->nombre }}</option>
                                                @endforeach
                                        </select>
                                    </div>

                                    <div class="col-span-6">
                                        <label for="street_address" class="block text-sm font-medium text-gray-700">Imágenes (mínimo 1 - máximo 5)</label>
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 my-4 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Imagen principal (obligatoria)">
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 my-4 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Segunda imagen">
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 my-4 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Tercera imagen">
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 my-4 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Cuarta imagen">
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 my-4 p-2 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" placeholder="Quinta imagen">
                                    </div>

                                    <div class="col-span-3">
                                        <label for="street_address" class="block text-sm font-medium text-gray-700">Precio</label>
                                        <input type="text" name="street_address" id="street_address" autocomplete="street-address" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-3">
                                        <label for="last_name" class="text-sm font-medium text-gray-700">Cantidad en stock</label>
                                        <input type="text" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-1 flex items-center justify-start">
                                        <label for="last_name" class="block text-sm font-medium text-gray-700 flex-grow">Oferta</label>
                                        <input type="checkbox" name="last_name" id="last_name" autocomplete="family-name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>

                                    <div class="col-span-2">
                                        <label for="city" class="block text-sm font-medium text-gray-700">Precio rebajado</label>
                                        <input type="text" name="city" id="city" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                    </div>


                                </div>
                            </div>
                            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                                <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-yellow-600 hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-yellow-500">
                                    Añadir nuevo producto
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </section>
    <x-footer></x-footer>
</main>
</body>
