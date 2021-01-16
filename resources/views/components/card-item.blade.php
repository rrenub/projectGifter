<div>
    <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden my-2 mx-2">
        <img class="h-40 w-auto object-cover my-4 mx-auto rounded-lg" src="{{ $img }}" alt="NIKE AIR">
        <div class="px-4 py-2 bg-gray-800">
            <div class="mb-4">
                <h1 class="text-white font-bold text-xl truncate">{{ $name }}</h1>
                <p class="text-white text-sm mt-1m truncate">{{ $description }}</p>
            </div>
            <div class="flex items-center gap-4 justify-between">
                <div>
                    <h1 class="text-white font-bold ml-2 text-3xl inline">€{{ $price }}</h1>
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
