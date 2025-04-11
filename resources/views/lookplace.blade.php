<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Mobix - App Bar</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
    <style>
        #map {
            height: 92vh;
            width: 100%;
            z-index: 0;
        }
        .content {
            position: absolute;
            top: 0;
            right: 0;
            width: 350px;
            height: 92vh;
            z-index: 10;
            overflow-y: auto;
            background: linear-gradient(to bottom, rgba(32, 66, 91, 0.8), rgba(32, 66, 91, 0.8));            
            padding-top: 70px;
            color: white;
        }
        .search-bar input {
            flex: 1;
            border: none;
            outline: none;
            padding: 5px;
            font-size: 16px;
        }
        .search-bar button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 6px 12px;
            margin-left: 10px;
            border-radius: 25px;
            cursor: pointer;
        }
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 20;
        }
        .bottom-buttons {
            position: fixed;
            bottom: 30px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 20;
            display: flex;
            justify-content: space-between;
            width: 300px;
        }
        .bottom-buttons button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body class="bg-gray-100">

<!-- NUEVA BARRA DE NAVEGACIÓN -->
<nav class="p-4 flex justify-between items-center" style="background-color: rgb(39, 102, 138);">
    <div class="text-xl font-bold text-white">Mobix</div>
    <div class="w-10 h-10 rounded-full bg-gray-400 border-2 border-white flex items-center justify-center overflow-hidden">
        <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23666' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='8' r='5'/%3E%3Cpath d='M20 21a8 8 0 0 0-16 0'/%3E%3C/svg%3E" alt="User" class="w-full h-full object-cover" />
    </div>
</nav>

<!-- MAPA INTERACTIVO -->
<div id="map"></div>

<!-- PANEL LATERAL -->
<div class="content">
    <div class="cards-container bg-gradient-to-b from-rgba(32, 66, 91, 0.9) to-rgba(32, 66, 91, 0.5) p-4">
        <!-- Barra de búsqueda -->
        <div class="search-bar mb-4">
            <input type="text" placeholder="Buscar ubicación..." id="searchInput" class="mr-2 bg-white text-black w-40 rounded px-2 py-1">
            <button onclick="searchLocation()">Buscar</button>
        </div>

        <!-- Ubicaciones listadas -->
        <div id="location-1" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">Av. 20 de noviembre</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 22 min</p>
                    <p class="text-xs text-white">Av. 20 de noviembre cruce C. Progreso</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(1)">Seleccionar</button>
        </div>
        <!-- Más ubicaciones aquí... -->
         <!-- Ubicaciones listadas -->
        <div id="location-1" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">Av. 20 de noviembre</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 22 min</p>
                    <p class="text-xs text-white">Av. 20 de noviembre cruce C. Progreso</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(1)">Seleccionar</button>
        </div>

        <div id="location-2" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">C. Negrete</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 24 min</p>
                    <p class="text-xs text-white">C. Negrete cruce C. Patoni</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(2)">Seleccionar</button>
        </div>

        <div id="location-3" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">Pasteur</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 24 min</p>
                    <p class="text-xs text-white">Pasteur cruce Av. 20 de noviembre</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(3)">Seleccionar</button>
        </div>

        <div id="location-4" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">Pasteur</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 24 min</p>
                    <p class="text-xs text-white">Pasteur cruce Calle 5 de Febrero</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(4)">Seleccionar</button>
        </div>

        <div id="location-5" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">Francisco I. Madero</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 25 min</p>
                    <p class="text-xs text-white">Francisco I. Madero cruce Calle 5 de Febrero</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(5)">Seleccionar</button>
        </div>

        <div id="location-6" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">C. Pino Suarez</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 26 min</p>
                    <p class="text-xs text-white">C. Pino Suarez cruce Bruno Martínez</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(6)">Seleccionar</button>
        </div>

        <div id="location-7" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">Zaragoza</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 26 min</p>
                    <p class="text-xs text-white">Zaragoza cruce Calle 5 de Febrero</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(7)">Seleccionar</button>
        </div>

        <div id="location-8" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">Av. 20 de Noviembre</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 27 min</p>
                    <p class="text-xs text-white">Av. 20 de noviembre cruce Hidalgo</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(8)">Seleccionar</button>
        </div>

        <div id="location-9" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">C. Negrete</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 29 min</p>
                    <p class="text-xs text-white">C. Negrete cruce Hidalgo</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(9)">Seleccionar</button>
        </div>

        <div id="location-10" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">C. Independencia</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 29 min</p>
                    <p class="text-xs text-white">C. Independencia cruce Av. 20 de noviembre</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(10)">Seleccionar</button>
        </div>
    </div>
</div>
    </div>
</div>

<!-- BOTONES INFERIORES -->
<div class="flex justify-center items-center space-x-4 py-2" style="background-color: rgb(39, 102, 138);">
    <!-- Botón seleccionado: Parking lots -->
    <button class="bg-[#0056b3] text-white py-2 px-4 rounded-full flex items-center shadow-md">
        <span class="mr-2">Parking lots</span>
        <span class="bg-red-500 rounded-full p-1 flex items-center justify-center w-6 h-6">
            <i class="fas fa-car text-xs"></i>
        </span>
    </button>

    <!-- Botón que redirige a la pantalla "disabledparking" -->
    <button onclick="window.location.href='{{ route('disableparking') }}'" class="bg-[#007bff] text-white py-2 px-4 rounded-full flex items-center">
        <span class="mr-2">Disabled parking</span>
        <span class="bg-blue-500 rounded-full p-1 flex items-center justify-center w-6 h-6">
            <i class="fas fa-wheelchair text-xs"></i>
        </span>
    </button>
</div>

<!-- SCRIPT -->
<script>
    const locations = [
        { id: 1, name: "Av. 20 de noviembre", position: [24.02569806143195, -104.66485120276181], description: "Av. 20 de noviembre cruce C. Progreso" },
        { id: 2, name: "C. Negrete", position: [24.026474340454943, -104.66666914173935], description: "C. Negrete cruce C. Patoni" },
        { id: 3, name: "Pasteur", position: [24.02442444427342, -104.66742110586571], description: "Pasteur cruce Av. 20 de noviembre" },
        { id: 4, name: "Pasteur", position: [24.023196825655926, -104.66711294492808], description: "Pasteur cruce Calle 5 de Febrero" },
        { id: 5, name: "Francisco I. Madero", position: [24.024105313316817, -104.66849113203402], description: "Francisco I. Madero cruce Calle 5 de Febrero" },
        { id: 6, name: "C. Pino Suarez", position: [24.02200386488535, -104.67094705179677], description: "C. Pino Suarez cruce Bruno Martínez" },
        { id: 7, name: "Zaragoza", position: [24.022245006967683, -104.67183275703506], description: "Zaragoza cruce Calle 5 de Febrero" },
        { id: 8, name: "Av. 20 de Noviembre", position: [24.024216909957417, -104.67269291307171], description: "Av. 20 de noviembre cruce Hidalgo" },
        { id: 9, name: "C. Negrete", position: [24.025414816524624, -104.67303356893018], description: "C. Negrete cruce Hidalgo" },
        { id: 10, name: "C. Independencia", position: [24.023841175265552, -104.67412107613433], description: "C. Independencia cruce Av. 20 de noviembre" }
    ];
    
    // Inicializar el mapa
    const map = L.map('map').setView([24.0277, -104.6532], 13);
    
    // Capa del mapa
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
    
    // Icono para los sitios
    const siteIcon = L.icon({
        iconUrl: 'https://static.vecteezy.com/system/resources/thumbnails/024/831/288/small_2x/3d-render-red-pin-map-location-pointer-icon-png.png',
        iconSize: [40, 40],
        iconAnchor: [20, 40],
        popupAnchor: [0, -40]
    });
    
    // Crear marcadores de ubicaciones
    locations.forEach(location => {
        const marker = L.marker(location.position, { icon: siteIcon }).addTo(map);
        marker.bindPopup(`<b>${location.name}</b><br>${location.description}`);
    });

    let routingControl;

function selectLocation(locationId) {
    const selectedLocation = locations.find(location => location.id === locationId);

    if (!selectedLocation) {
        alert("Ubicación no encontrada.");
        return;
    }

    if (!navigator.geolocation) {
        alert("La geolocalización no está soportada por tu navegador.");
        return;
    }

    navigator.geolocation.getCurrentPosition(
        (position) => {
            const userLatLng = [position.coords.latitude, position.coords.longitude];

            if (routingControl) {
                map.removeControl(routingControl);
            }

            routingControl = L.Routing.control({
                waypoints: [
                    L.latLng(userLatLng),
                    L.latLng(selectedLocation.position)
                ],
                routeWhileDragging: true,
                showAlternatives: true,
                altLineOptions: {
                    styles: [
                        { color: 'black', opacity: 0.15, weight: 9 },
                        { color: 'white', opacity: 0.8, weight: 6 },
                        { color: 'blue', opacity: 0.5, weight: 2 }
                    ]
                },
                createMarker: function (i, waypoint, n) {
                    const markerOptions = { draggable: false };
                    if (i === 0) {
                        markerOptions.icon = L.icon({
                            iconUrl: 'https://cdn-icons-png.flaticon.com/512/684/684908.png',
                            iconSize: [30, 30]
                        });
                    } else if (i === n - 1) {
                        markerOptions.icon = siteIcon;
                    }
                    return L.marker(waypoint.latLng, markerOptions);
                }
            }).addTo(map);
        },
        (error) => {
            alert("No se pudo obtener tu ubicación actual.");
        }
    );
}

    // Función para buscar una ubicación
    function searchLocation() {
        const query = document.getElementById("searchInput").value.toLowerCase();
        const location = locations.find(loc =>
            loc.name.toLowerCase().includes(query) || loc.description.toLowerCase().includes(query)
        );

        if (location) {
            map.setView(location.position, 15);
            L.popup()
                .setLatLng(location.position)
                .setContent(`<b>${location.name}</b><br>${location.description}`)
                .openOn(map);
        } else {
            alert("Ubicación no encontrada.");
        }
    }
</script>
</body>
</html>