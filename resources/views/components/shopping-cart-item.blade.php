<div href="/detalleProducto?id={{ $idProd }}" class="px-6 px-8 bg-white hover:bg-gray-100 cursor-pointer border-b border-gray-100 flex items-center justify-between w-100">
        <div class="p-2 w-12 h-auto mr-2"><img src="{{ $img }}" alt="img product"></div>
        <div class="flex-auto text-sm w-32">
            <div class="font-bold">{{ $name }}</div>
            <div class="text-gray-400">Cantidad: {{ $cantidad }}</div>
        </div>
    <div class="flex flex-col font-medium items-end py-2">
        <a href="/tienda/eliminarProductoCarrito?id={{ $idProd }}" class="w-4 h-4 mb-6 hover:bg-red-200 rounded-full cursor-pointer text-red-700">
            <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="100%" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 ">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                <line x1="10" y1="11" x2="10" y2="17"></line>
                <line x1="14" y1="11" x2="14" y2="17"></line>
            </svg>
        </a>
        {{ $price }} €
    </div>
</div>

