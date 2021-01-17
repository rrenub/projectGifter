<div class="h-full w-0 fixed z-10 top-0 right-0 bg-white overflow-x-hidden pt-4 transition duration-500 ease-in-out shadow-md" id="cart-sidebar">
    <a href="javascript:void(0)" onclick="closeNav()" class="absolute top-2 right-8 text-4xl text-black ml-4 cursor-pointer" >&times;</a>
    <div class="w-full rounded-b border-t-0">
        <div class="w-100">
            <div class="uppercase tracking-wide text-c2 my-2 mx-4">Carrito</div>
            <?php
                $carrito = \App\Http\Controllers\ShoppingCartController::carrito();
                $productos = $carrito['productos'];
            ?>
            @if($productos != null)
                <div>
                    @foreach($productos as $producto)
                        <x-shopping-cart-item
                            name="{{ $producto->name }}"
                            description="{{ $producto->description }}"
                            price="{{ $producto->price }}"
                            idProd="{{ $producto->id }}"
                            img="{{ $producto->img }}"
                            cantidad="{{ $producto->quantity }}">
                        </x-shopping-cart-item>
                    @endforeach
                </div>

                <div class="uppercase tracking-wide text-c2 mt-4 mb-0 mx-4">Total:
                    <span class="font-black">{{ $carrito['total'] }} €</span>
                </div>

                <div class="flex flex-col">
                    <div class="mb-2 mt-4 justify-center flex">
                        <a href="/tienda/pagarPaypal" class="whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-blue-600 duration-200 hover:bg-blue-800">
                            Pagar con Paypal
                        </a>
                    </div>
                    <div class="justify-center flex">
                        <a href="/tienda/vaciarCarrito" class="mx-4 align-middle whitespace-nowrap inline-flex items-center justify-center px-4 py-1 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-red-700 duration-200 hover:bg-red-400">
                            Vaciar carrito
                        </a>
                    </div>
                </div>
            @else
                <p class="font-bold text-lg mx-4">El carrito está vacío</p>
            @endif
        </div>
    </div>
</div>
