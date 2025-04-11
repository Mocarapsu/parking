<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mobix - Parquímetro Durango</title>
        <script src="https://cdn.tailwindcss.com"></script>
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <script src="{{ asset('js/modal.js') }}" defer></script>
        <script src="{{ mix('js/app.js') }}"></script>
                <!-- Leaflet CSS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" integrity="sha256-o9N1j8z8fZp3q2z8z+u9eFz4z9z8z9z8z9z8z9z8z9z8=" crossorigin=""/>
        <!-- Leaflet JS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" integrity="sha256-o9N1j8z8fZp3q2z8z+u9eFz4z9z8z9z8z9z8z9z8z9z8=" crossorigin=""></script>
        
    </head>
    <body class="full-background bg-cover bg-center bg-gray-900 text-white"> 
        <div>
            <!-- Header -->
            <header class="p-4 flex justify-between items-center">
                <h1 class="text-white text-2xl font-bold">Mobix</h1>
                <div class="flex items-center gap-4">
                    <button id="openVehicleModal" class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
                        My Vehicle
                    </button>
                    <button id="openProfileModal" class="p-0 h-10 w-10 rounded-full bg-transparent border-none">
                        <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User profile" class="h-10 w-10 rounded-full object-cover">
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
                    <input 
                        type="text" 
                        id="searchBar" 
                        placeholder="Find a place..." 
                        class="bg-white/10 border-0 text-white placeholder:text-white/70 pl-4 pr-10 py-6 w-full rounded-lg"
                        oninput="showSuggestions(this.value)"
                    >
                    <svg class="absolute right-3 top-1/2 -translate-y-1/2 text-white/70 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 18a8 8 0 110-16 8 8 0 010 16zm0 0l4 4"></path>
                    </svg>
                    <!-- Contenedor para las sugerencias -->
                    <div id="suggestions" class="absolute bg-white text-gray-800 w-full mt-1 rounded-lg shadow-lg hidden">
                        <!-- Aquí se mostrarán las sugerencias -->
                    </div>
                </div>

                            <!-- Quick Searches -->
                <div class="bg-white/5 border-0 rounded-lg shadow-lg p-4">
                    <h3 class="text-white/90 text-sm mb-4">Búsquedas rápidas</h3>
                                       <button onclick="window.location.href='{{ route('pago_fisico', ['id' => 1]) }}'" class="w-full justify-start bg-white/10 hover:bg-white/20 text-white py-3 mb-3 rounded-lg">
                        Dónde pagar
                    </button>           
                    
                    
                          

                    <button onclick="window.location.href='{{ route('lookplace') }}'" class="w-full justify-start bg-white/10 hover:bg-white/20 text-white py-3 mb-3 rounded-lg">
                        Estacionamientos disponibles
                    </button>           

                    <button class="w-full justify-start bg-white/10 hover:bg-white/20 text-white py-3 mb-3 rounded-lg">
                        Estacionamiento para discapacitados
                    </button>
                </div>
                
                

        <!-- Modal de Vehículos -->
        <div id="vehicleModal" class="hidden absolute right-12 top-20 rounded-lg shadow-xl w-64 z-50" style="background-color: #DBE1EB;">
            <div class="rounded-lg shadow-xl p-9 w-full max-w-80 h-auto relative">
                <span class="modal-close absolute top-4 right-4 text-2xl cursor-pointer text-gray-600 hover:text-gray-800">&times;</span>
                <h2 class="text-2xl font-semibold text-center text-gray-800 mb-4">Mis Vehículos</h2>
                <div class="space-y-4 max-h-60 overflow-y-auto">
                    <!-- Lista de vehículos -->
                    @forelse ($vehicles as $vehicle)
                        <div class="flex items-center gap-4 px-6 py-4 bg-gray-100 rounded-lg shadow-sm">
                            <span class="text-lg font-medium text-gray-800">{{ $vehicle->name }} - {{ $vehicle->color }} - {{ $vehicle->license_plate }}</span>
                        </div>
                    @empty
                        <p class="text-center text-gray-600">No tienes vehículos registrados.</p>
                    @endforelse
                </div>
                <button id="openAddVehicleModal" class="mt-4 w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                    Agregar nuevo vehículo
                </button>
            </div>
        </div>

        <!-- Modal para agregar un nuevo vehículo --> 
            <div id="addVehicleModal" class="hidden absolute right-12 top-20 rounded-lg shadow-xl w-64 z-50" style="background-color: #DBE1EB;">
            <div class="rounded-lg shadow-xl p-9 w-full max-w-80 h-auto relative">
                <span class="modal-close absolute top-4 right-4 text-gray-600 text-xl cursor-pointer hover:text-gray-800">&times;</span>
                <h2 class="text-lg font-semibold text-gray-800 mb-4 text-center">Agregar Vehículo</h2>
                <form action="{{ route('vehicles.store') }}" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label for="name" class="block text-sm font-medium text-gray-700">Modelo del vehículo:</label>
                        <input type="text" name="name" id="name" placeholder="Ej: Toyota Corolla" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 text-gray-800" required>
                    </div>
                    <div>
                        <label for="color" class="block text-sm font-medium text-gray-700">Color del vehículo:</label>
                        <input type="text" name="color" id="color" placeholder="Ej: Rojo" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 text-gray-800" required>
                    </div>
                    <div>
                        <label for="license_plate" class="block text-sm font-medium text-gray-700">Placa del vehículo:</label>
                        <input type="text" name="license_plate" id="license_plate" placeholder="Ej: ABC-1234" class="w-full px-4 py-2 border rounded-lg focus:ring focus:ring-blue-300 text-gray-800" required>
                    </div>
                    <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-lg hover:bg-blue-700">
                        Guardar vehículo
                    </button>
                </form>
            </div>
        </div>

            <!-- Modal de Perfil -->
            <div class="relative">
                <div id="profileModal" class=" hidden flex-col items-center  absolute top-10 right-2 rounded-lg shadow-xl w-64 z-50" style="background-color: #DBE1EB;">                <!-- Overlay -->
                <div class="rounded-lg shadow-xl p-10 w-full max-w-80 h-auto relative">
            
                <!-- Contenido del modal -->
                <div class="p-4 text-center z-50 relative">
                    <span class="modal-close absolute top-4 right-4 text-gray-600 text-xl cursor-pointer hover:text-gray-800">&times;</span>
                    <img src="https://cdn-icons-png.flaticon.com/512/149/149071.png" alt="User profile" class="h-16 w-16 rounded-full mx-auto object-cover">
                    <h3 class="text-lg font-semibold text-gray-800 mt-2">{{ Auth::user()->name ?? 'Guest' }}</h3>
                    <button class="mt-4 w-full border border-blue-600 text-blue-600 py-2 rounded-lg hover:bg-blue-50">
                        Manage Account
                    </button>
                </div>
            
                <!-- Opciones adicionales -->
                <div class="border-t border-gray-200">
                    <button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Parking History</button>
                    <button onclick="window.location.href='{{ route('cards') }}'" class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Cards</button>                
                    <button class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Time Remaining</button>
                    <button onclick="window.location.href='{{ route('notifications') }}'"class="w-full text-left px-4 py-2 text-gray-700 hover:bg-gray-100">Notifications</button>
                    <button class="w-full text-left px-4 py-2 text-red-600 hover:bg-red-50">Log Out</button>
                </div>
            </div>
            </div> 
                                                <script>
                            async function showSuggestions(query) {
                                const suggestionsBox = document.getElementById('suggestions');
                                suggestionsBox.innerHTML = ''; // Limpiar sugerencias previas
                        
                                if (query.length < 2) {
                                    suggestionsBox.classList.add('hidden'); // Ocultar si no hay suficiente texto
                                    return;
                                }
                        
                                try {
                                    // Hacer una solicitud a la ruta de calles
                                    const response = await fetch('{{ route('streets') }}');
                                    const streets = await response.json();
                        
                                    // Filtrar las calles que coincidan con la consulta
                                    const filteredStreets = streets.filter(street => 
                                        street.toLowerCase().includes(query.toLowerCase())
                                    );
                        
                                    // Mostrar las sugerencias
                                    if (filteredStreets.length > 0) {
                                        filteredStreets.forEach(street => {
                                            const suggestion = document.createElement('div');
                                            suggestion.className = 'px-4 py-2 hover:bg-gray-200 cursor-pointer';
                                            suggestion.textContent = street;
                        
                                            // Manejar el clic en una sugerencia
                                            suggestion.onclick = () => {
                                                // Redirigir a la página del mapa con la calle seleccionada
                                                window.location.href = `{{ url('/map') }}?street=${encodeURIComponent(street)}`;
                                            };
                        
                                            suggestionsBox.appendChild(suggestion);
                                        });
                        
                                        suggestionsBox.classList.remove('hidden'); // Mostrar sugerencias
                                    } else {
                                        suggestionsBox.classList.add('hidden'); // Ocultar si no hay coincidencias
                                    }
                                } catch (error) {
                                    console.error('Error al cargar las sugerencias:', error);
                                }
                            }
                        </script>

             

        </body>
    </html>