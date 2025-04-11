<!DOCTYPE html>
    <html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Ruta hacia la ubicación</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://cdn.tailwindcss.com"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/leaflet-routing-machine@3.2.5/dist/leaflet-routing-machine.css"/>
        <script src="https://unpkg.com/leaflet-routing-machine@3.2.5/dist/leaflet-routing-machine.js"></script>
        <style>
            #map {
                height: 82vh;
                width: 100%;
            }
        </style>
    </head>
    <body>
        <!-- BARRA DE NAVEGACIÓN -->
        <nav class="p-4 flex justify-between items-center" style="background-color: rgb(39, 102, 138);">
            <div class="text-xl font-bold text-white">Mobix</div>
            <div class="w-10 h-10 rounded-full bg-gray-400 border-2 border-white flex items-center justify-center overflow-hidden">
                <img src="data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='none' stroke='%23666' stroke-width='2' stroke-linecap='round' stroke-linejoin='round'%3E%3Ccircle cx='12' cy='8' r='5'/%3E%3Cpath d='M20 21a8 8 0 0 0-16 0'/%3E%3C/svg%3E" alt="User" class="w-full h-full object-cover" />
            </div>
        </nav>

        <div id="map"></div>

        <!-- BOTONES INFERIORES -->
        <div class="flex justify-center items-center space-x-4 py-2" style="background-color: rgb(39, 102, 138);">
            <button class="bg-[#007bff] text-white py-2 px-8 rounded-full flex items-center">
                <span class="mr-2">Cancel</span>
            </button>
            <button class="bg-[#007bff] text-white py-2 px-8 rounded-full flex items-center">
                <span class="mr-2">Parked</span>
            </button>
        </div>

        <script>    
        window.addEventListener('load', () => {
            const number = window.location.pathname.split('/').filter(p => p)
            const id = number[number.length - 1]

            const locations = [
    { id: 1, name: "Av. 20 de noviembre", position: [24.02556466722218, -104.66584218892915], description: "Av. 20 de noviembre cruce C. Progreso" },
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

            const destino = locations.find(loc => loc.id === parseInt(id));
            console.log(destino, 'destino')
            const map = L.map('map').setView(destino.position, 15);

            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            const siteIcon = L.icon({
                iconUrl: 'https://images.emojiterra.com/google/noto-emoji/unicode-16.0/color/512px/1f4cd.png',
                iconSize: [40, 40],
                iconAnchor: [20, 40],
                popupAnchor: [0, -40]
            });

            const userIcon = L.icon({
                iconUrl: 'https://cdn3d.iconscout.com/3d/premium/thumb/porton-trasero-12702841-10330896.png',
                iconSize: [50, 50],
                iconAnchor: [17, 35],
                popupAnchor: [0, -35]
            });

            function dibujarRuta(origen, destino) {
                const ruta = L.Routing.control({
                    waypoints: [
                        L.latLng(origen),
                        L.latLng(destino)
                    ],
                    routeWhileDragging: true,
                    createMarker: function(i, waypoint, n) {
    if (i === 0) {
        return L.marker(waypoint.latLng, { icon: userIcon }).bindPopup("Tu ubicación");
    } else if (i === n - 1) {
        return L.marker(waypoint.latLng, { icon: siteIcon }).bindPopup(`<strong>${destino.name}</strong><br>${destino.description}`);
    }
}
                    routeOptions: {
                        // Desactiva las rutas alternativas de manera más estricta
                        alternatives: false,  // No generar rutas alternativas
                        travelMode: 'car' // Definir un modo de transporte para limitar el tipo de ruta (puedes cambiar 'car' a otro modo)
                    },
                    lineOptions: {
                        styles: [{ color: 'blue', weight: 5 }] // Estilo para la línea de la ruta
                    }
                }).addTo(map);

                map.fitBounds(ruta.getBounds()); // Ajustar el mapa a la ruta
            }

            function actualizarUbicacion(position) {
    const latlng = [position.coords.latitude, position.coords.longitude];
    console.log("Ubicación del usuario:", latlng); // Agrega este log
    map.setView(latlng, 17);
    dibujarRuta(latlng, destino.position);
}

            if ("geolocation" in navigator) {
                navigator.geolocation.getCurrentPosition(actualizarUbicacion, () => {
                    alert("No se pudo obtener tu ubicación.");
                }, { enableHighAccuracy: true });
            } else {
                alert("Tu navegador no soporta geolocalización.");
            }
        });
    </script>

 </body>
 </html>