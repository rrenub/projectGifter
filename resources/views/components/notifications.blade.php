<script src="{{ asset('js/app.js') }}"></script>
@if(session('exito') != null)
    <div id="notifications" class="bg-green-700 transition-all">
        <div class="max-w mx-auto py-3 px-3 sm:px-6 lg:px-8 flex justify-between items-center">
            <p class="font-medium text-white truncate">
                {{ session('exito') }}
            </p>
            <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                <button type="button" class="-mr-1 flex p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2"
                        onclick="document.getElementById('notifications').style.display = 'none';"
                >
                    <span class="sr-only">Dismiss</span>
                    <!-- Heroicon name: x -->
                    <svg class="h-6 w-6 text-white animate-pulse" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

@elseif(session('error') != null)
    <div id="notifications" class="bg-red-700">
        <div class="max-w mx-auto py-3 px-3 sm:px-6 lg:px-8 flex justify-between items-center transition-all">
            <p class="font-medium text-white truncate">
                {{ session('error') }}
            </p>
            <div class="order-2 flex-shrink-0 sm:order-3 sm:ml-3">
                <button type="button" class="-mr-1 flex p-2 rounded-md focus:outline-none focus:ring-2 focus:ring-white sm:-mr-2"
                        onclick="document.getElementById('notifications').style.display = 'none';"
                >
                    <span class="sr-only">Dismiss</span>
                    <!-- Heroicon name: x -->
                    <svg class="h-6 w-6 text-white animate-pulse" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

@endif

