<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobix - Parquímetro Durango</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
    <script src="{{ asset('js/modal.js') }}"></script>
</head>
<body class=" full-background bg-cover bg-center bg-gray-900 text-white"> 
    <div class="">
        <!-- Header -->
        <header class="p-4 flex justify-between items-center">
            <h1 class="text-white text-2xl font-bold">Mobix</h1>
            <div class="flex items-center gap-4">
                        <button id="openVehicleModal" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                My Vehicle
            </button>
                <button class="p-0 h-10 w-10 rounded-full bg-transparent border-none">
                    <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-bDTuxYzd2rKqdCA11WB5MOsXPRxRX8.png" alt="User profile" class="h-10 w-10 rounded-full object-cover">
                </button>
            </div>
        </header>

        <!-- Main Content -->
        <main class="max-w-md mx-auto pt-20 px-4">
            <div class="text-center mb-12">
                <h2 class="text-white text-4xl font-bold mb-4">Welcome to Mobix</h2>
                <p class="text-blue-100 mb-6">
                    {{ Auth::user()->name ?? 'Guest' }}
                </p>
            </div>

            <!-- Search Section -->
            <div class="relative mb-6">
                <input type="text" placeholder="Find a place..." class="bg-white/10 border-0 text-white placeholder:text-white/70 pl-4 pr-10 py-6 w-full rounded-lg">
                <svg class="absolute right-3 top-1/2 -translate-y-1/2 text-white/70 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 18a8 8 0 110-16 8 8 0 010 16zm0 0l4 4"></path>
                </svg>
            </div>

            <!-- Quick Searches -->
            <div class="bg-white/5 border-0 rounded-lg shadow-lg p-4">
                <h3 class="text-white/90 text-sm mb-4">Búsquedas rápidas</h3>
                <button class="w-full justify-start bg-white/10 hover:bg-white/20 text-white py-3 mb-3 rounded-lg">
                    Dónde pagar
                </button>
                <button class="w-full justify-start bg-white/10 hover:bg-white/20 text-white py-3 mb-3 rounded-lg">
                    Estacionamiento cercano
                </button>
                <button class="w-full justify-start bg-white/10 hover:bg-white/20 text-white py-3 mb-3 rounded-lg">
                    Estacionamiento para discapacitados
                </button>
            </div>
        </main>
    </div>
    
<!-- parking.blade.php -->
</body>
</html>
