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
    <section class="flex-grow grid">
        <div class="grid grid-cols3 bg-blue-50">
            <div class="col-span-1">
                <h1>Id del producto</h1>
            </div>
            <div class="col-span-2">
                <span></span>
            </div>
        </div>
        <div class="grid grid-cols3 bg-blue-100">
            <div class="col-span-1">
                <h1>Nombre del producto</h1>
            </div>
            <div class="col-span-2">
                <span></span>
            </div>
        </div>
        <div class="grid grid-cols3 bg-blue-200">
            <div class="col-span-1">
                <h1>Descripción</h1>
            </div>
            <div class="col-span-2">
                <span></span>
            </div>
        </div>
        <div class="grid grid-cols3 bg-blue-300">
            <div class="col-span-1">
                <h1>Precio</h1>
            </div>
            <div class="col-span-2">
                <span></span>
            </div>
        </div>
        <div class="grid grid-cols3 bg-blue-400">
            <div class="col-span-1">
                <h1>Rebajado</h1>
            </div>
            <div class="col-span-2">
                <span></span>
            </div>
        </div>
        <div class="grid grid-cols3 bg-blue-500">
            <div class="col-span-1">
                <h1>Precio rebajado</h1>
            </div>
            <div class="col-span-2">
                <span></span>
            </div>
        </div>
    </section>
</main>
</body>
