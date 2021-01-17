<?php
$sesionAbierta = session('user');
if(isset($sesionAbierta)){ ?>
<div>
    <div>
        <nav class="bg-gray-800">
            <div class="w-100 mx-auto px-4 px-8">
                <div class="flex items-center justify-between h-20">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/" class="flex flex-row items-center">
                                <img class="h-8 w-auto mr-2" src="/img/giftbox.svg" alt="Workflow">
                                <span class="text-white text-4xl font-bold">Gift</span>
                                <span class="text-yellow-300 text-4xl font-bold mr-2">er</span>
                            </a>
                        </div>
                        <div class="block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">Inicio</a>

                                <a href="/tienda" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">Tienda</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 duration-200 hover:text-white px-3 py-2 rounded-md text-base font-medium">Regalo personalizado</a>

                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <p class="whitespace-nowrap text-base font-medium text-white px-4 py-2 duration-200">
                                {{session('name')}}
                            </p>
                        <div class="flex flex-row cursor-pointer truncate p-2 rounded" onclick="openNav()">
                            <div></div>
                            <div class="flex flex-row-reverse ml-2 w-full">
                                <div slot="icon" class="relative">
                                    <?php
                                        $totalCarro = \App\Http\Controllers\ShoppingCartController::getNumeroElementosCarro();
                                    ?>
                                    <div class="absolute text-xs rounded-full -mt-1 -mr-2 px-2 font-bold top-0 right-0 bg-red-700 text-white">{{ $totalCarro }}</div>
                                    <div class="bg-yellow-600 px-4 pb-2 pt-0.5 rounded-lg">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-shopping-cart w-6 h-6 mt-2">
                                            <circle cx="9" cy="21" r="1"></circle>
                                            <circle cx="20" cy="21" r="1"></circle>
                                            <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="logOut" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-red-600 duration-200 hover:bg-red-800">
                                Cerrar sesión
                            </a>
                        </div>
                        <!-- <div class="ml-4 flex items-center md:ml-6">
                            <div class="ml-3 relative">
                                <div>
                                    <button class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </button>
                                </div>
                            </div>
                            <a href="#" class="ml-4 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Cerrar sesión</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </nav>
    </div>
<x-shopping-cart></x-shopping-cart>
</div>
<?php }else{ ?>
<div>
    <div>
        <nav class="bg-gray-800">
            <div class="w-100 mx-auto px-4 px-8">
                <div class="flex items-center justify-between h-20">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <a href="/" class="flex flex-row items-center">
                                <img class="h-8 w-auto mr-2" src="/img/giftbox.svg" alt="Workflow">
                                <span class="text-white text-4xl font-bold">Gift</span>
                                <span class="text-yellow-300 text-4xl font-bold mr-2">er</span>
                            </a>
                        </div>
                        <div class="block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <a href="/" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">Inicio</a>

                                <a href="/tienda" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-base font-medium">Tienda</a>

                                <a href="#" class="text-gray-300 hover:bg-gray-700 duration-200 hover:text-white px-3 py-2 rounded-md text-base font-medium">Regalo personalizado</a>

                            </div>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="hidden md:flex items-center justify-end md:flex-1 lg:w-0">
                            <a href="login" class="whitespace-nowrap text-base font-medium text-gray-300 px-3 py-2 duration-200 hover:text-white rounded">
                                Entrar
                            </a>
                            <a href="register" class="ml-8 whitespace-nowrap inline-flex items-center justify-center px-4 py-2 border border-transparent rounded-md shadow-sm text-base font-medium text-white bg-yellow-600 duration-200 hover:bg-yellow-800">
                                Regístrate
                            </a>
                        </div>
                        <!-- <div class="ml-4 flex items-center md:ml-6">
                            <div class="ml-3 relative">
                                <div>
                                    <button class="max-w-xs bg-gray-800 rounded-full flex items-center text-sm focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white" id="user-menu" aria-haspopup="true">
                                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </button>
                                </div>
                            </div>
                            <a href="#" class="ml-4 text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Cerrar sesión</a>
                        </div> -->
                    </div>
                </div>
            </div>
        </nav>
    </div>
</div>
<?php } ?>

<script>
    /* Set the width of the side navigation to 250px */
    function openNav() {
        document.getElementById("cart-sidebar").style.width = "350px";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("cart-sidebar").style.width = "0";
    }
</script>
