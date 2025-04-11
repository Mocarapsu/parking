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
    <!-- Contenedor con fondo degradado -->
    <div class="cards-container bg-gradient-to-b from-rgba(32, 66, 91, 0.9) to-rgba(32, 66, 91, 0.5) p-4">
        <!-- Barra de búsqueda -->
        <div class="search-bar mb-4">
        <input type="text" placeholder="Buscar ubicación..." id="searchInput" class="mr-2 bg-white text-black w-40 rounded px-2 py-1">
        <button onclick="searchLocation()">Buscar</button>
        </div>

        <div id="location-11" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">C. Lic. Benito Juarez</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 25 min</p>
                    <p class="text-xs text-white">C. Lic. Benito Juarez cruce Av. 20 de noviembre</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(11)">Seleccionar</button>
        </div>

        <div id="location-12" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">C. Coronado</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 26 min</p>
                    <p class="text-xs text-white">C. Coronado cruce Bruno Martinez</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(12)">Seleccionar</button>
        </div>

        <div id="location-13" class="p-4 mb-2 rounded-md bg-[#20425b] shadow-lg">
            <h3 class="font-semibold text-white">Bruno Martinez</h3>
            <div class="flex items-center mt-2">
                <img src="https://www.pngarts.com/files/3/Blue-Hyundai-PNG-Picture.png" alt="Car" class="w-28 h-16 object-cover">
                <div>
                    <p class="text-sm text-white">Sitio a: 26 min</p>
                    <p class="text-xs text-white">Bruno Martinez cruce Av. 20 de noviembre</p>
                </div>
            </div>
            <button class="w-full bg-[#007bff] text-white text-sm py-1 px-3 mt-2 rounded" onclick="selectLocation(13)">Seleccionar</button>
        </div>
    </div>
</div>


<!-- BOTONES INFERIORES -->
<div class="flex justify-center items-center space-x-4 py-2" style="background-color: rgb(39, 102, 138);">
    <!-- Botón que redirige a "lookplace" -->
    <button onclick="window.location.href='lookplace'" class="bg-[#007bff] text-white py-2 px-4 rounded-full flex items-center">
        <span class="mr-2">Parking lots</span>
        <span class="bg-red-500 rounded-full p-1 flex items-center justify-center w-6 h-6">
            <i class="fas fa-car text-xs"></i>
        </span>
    </button>

    <!-- Botón seleccionado: Disabled parking -->
    <button class="bg-[#0056b3] text-white py-2 px-4 rounded-full flex items-center shadow-md">
        <span class="mr-2">Disabled parking</span>
        <span class="bg-blue-500 rounded-full p-1 flex items-center justify-center w-6 h-6">
            <i class="fas fa-wheelchair text-xs"></i>
        </span>
    </button>
</div>



<!-- SCRIPT -->
<script>
    const locations = [  
        { id: 11, name: "C. Lic. Benito Juarez", position: [24.025135359339455, -104.66996293961213], description: "C. Lic. Benito Juarez cruce Av. 20 de noviembre" },
        { id: 12, name: "C. Coronado", position: [24.022857399810423, -104.6713133664805], description: "C. Coronado cruce Bruno Martinez" },
        { id: 13, name: "Bruno Martinez", position: [24.02458073554163, -104.67138560953549], description: "Bruno Martinez cruce Av. 20 de noviembre" },
    ];

    const map = L.map('map').setView([24.0277, -104.6532], 13); // Centrado inicial

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

    const markers = {};

    // Crear marcadores de ubicaciones
    locations.forEach(location => {
        const marker = L.marker(location.position, { icon: siteIcon }).addTo(map);
        marker.bindPopup(location.name + "<br>" + location.description);
        
        // Redirigir al hacer clic
        marker.on('click', () => {
            window.location.href = /roadguide/${location.id};
        });

        markers[location.id] = marker;
    });

    // Buscador de ubicaciones predefinidas
    function selectLocation(id) {
        const location = locations.find(loc => loc.id === id);
        map.setView(location.position, 18);
        markers[id].openPopup();
        window.location.href = /roadguide/${id};
    }

    // Búsqueda por texto en la lista de ubicaciones predefinidas
    function searchLocation() {
        const query = document.getElementById("searchInput").value.toLowerCase();
        const location = locations.find(loc =>
            loc.name.toLowerCase().includes(query) || loc.description.toLowerCase().includes(query)
        );

        if (location) {
            selectLocation(location.id);
        } else {
            alert("Ubicación no encontrada.");
        }
    }

    // Geolocalización del usuario
    let markerUsuario = null;

    function actualizarUbicacion(position) {
        const latlng = [position.coords.latitude, position.coords.longitude];

        const carIcon = L.icon({
            iconUrl: 'https://cdn3d.iconscout.com/3d/premium/thumb/porton-trasero-12702841-10330896.png',
            iconSize: [40, 40],
            iconAnchor: [20, 40],
            popupAnchor: [0, -40]
        });

        if (markerUsuario) {
            markerUsuario.setLatLng(latlng);
        } else {
            markerUsuario = L.marker(latlng, { icon: carIcon }).addTo(map).bindPopup("Estás aquí").openPopup();
        }

        if (map.getZoom() === map.options.minZoom) {
            map.setView(latlng, 18);
        }
    }

    function errorUbicacion(err) {
        console.error("Error obteniendo ubicación:", err);
        alert("No se pudo obtener tu ubicación.");
    }

    if ("geolocation" in navigator) {
        navigator.geolocation.watchPosition(actualizarUbicacion, errorUbicacion, { enableHighAccuracy: true });
    } else {
        alert("Geolocalización no es soportada por tu navegador.");
    }
</script>
</body>
</html>