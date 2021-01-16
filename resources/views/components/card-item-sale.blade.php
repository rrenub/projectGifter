<div>
    <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden my-2 mx-2">
        <img class="h-40 w-auto object-cover my-4 mx-auto" src="https://contents.mediadecathlon.com/p1576984/k$6a51b953b7ec1ecb9d41ef3da1cf4aff/sq/M+scara+Snorkel+Superficie+Easybreath+Ni+os+6+10+a+os+Talla+XS+Azul.jpg" alt="NIKE AIR">
        <div class="px-4 py-2 bg-gray-800">
            <div class="mb-4">
                <h1 class="text-white font-bold text-2xl">{{ $name }}</h1>
                <p class="text-white text-sm mt-1">{{ $description }}</p>
            </div>
            <div class="flex items-center gap-4 justify-between">
                <div>
                    <h1 class="text-white line-through font-bold text-base inline">€{{ $sale }}</h1>
                    <h1 class="text-red-600 font-bold ml-2 text-3xl inline">€{{ $price }}</h1>
                </div>
                <div>
                    <form action="añadirProductoAlCarro" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="idProducto" value="{{ $idProd }}">
                        <button class="px-3 py-1 bg-yellow-500 text-sm text-gray-800 font-semibold rounded">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
