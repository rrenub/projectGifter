<div>
    <div class="max-w-xs bg-white shadow-lg rounded-lg overflow-hidden my-2 mx-2">
        <a href='/detalleProducto?id={{ $idProd }}'>
            <img class="h-40 w-auto object-cover my-4 mx-auto rounded-xl" src="{{ $img }}" alt="Imagen del producto {{ $name }}">
        </a>
        <div class="px-4 py-2 bg-gray-800">
            <div class="mb-4">
                <a href='/detalleProducto?id={{ $idProd }}'>
                    <h1 class="text-white font-bold text-xl truncate hover:text-yellow-500 cursor-pointer">{{ $name }}</h1>
                </a>
                <p class="text-white text-sm mt-1 truncate">{{ $description }}</p>
            </div>
            <div class="flex items-center gap-4 justify-between">
                <div>
                    <h1 class="text-red-500 font-bold text-3xl mr-2 inline">€{{ $price }}</h1>
                    <h1 class="text-white line-through font-bold text-base inline">€{{ $sale }}</h1>
                </div>
                <div>
                    <form action="añadirProductoCarrito" method="post">
                        <?= csrf_field() ?>
                        <input type="hidden" name="prodID" value="{{ $idProd }}">
                            <button class="px-2 py-1 bg-yellow-500 text-sm text-gray-800 font-semibold rounded">
                                <img src="/img/shopping_cart-24px.svg">
                            </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
