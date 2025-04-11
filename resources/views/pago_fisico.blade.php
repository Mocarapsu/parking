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
            height: 100vh;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="map"></div>
    <script>
        const id = {{ $id }}; 
        const locations = [
            { id: 1, name: "AV. 20 de Noviembre", position: [24.0275, -104.6532], description: "Av. 20 de noviembre cruce Pastores Madero" },
            { id: 2, name: "Francisco y Madero", position: [24.0276, -104.6533], description: "Francisco y Madero cruce Av. 20 de Noviembre" },
            { id: 3, name: "Victoria Sur", position: [24.0277, -104.6534], description: "Victoria sur cruce Av. 20 de Noviembre" },
            { id: 4, name: "Victoria Sur", position: [24.025111, -104.668167], description: "Victoria sur cruce Av. 20 de Noviembre" }
        ];

        const destino = locations.find(loc => loc.id === id);
        const map = L.map('map').setView(destino.position, 15);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '© OpenStreetMap contributors'
        }).addTo(map);

        // Función para dibujar la ruta entre dos puntos
        function dibujarRuta(origen, destino) {
            const ruta = L.Routing.control({
                waypoints: [
                    L.latLng(origen),
                    L.latLng(destino)
                ],
                routeWhileDragging: true, 
            }).addTo(map);

            map.fitBounds(ruta.getBounds());
        }

        function actualizarUbicacion(position) {
            const latlng = [position.coords.latitude, position.coords.longitude];
            dibujarRuta(latlng, destino.position);
        }

        if ("geolocation" in navigator) {
            navigator.geolocation.getCurrentPosition(actualizarUbicacion, () => {
                alert("No se pudo obtener tu ubicación.");
            }, { enableHighAccuracy: true });
        } else {
            alert("Tu navegador no soporta geolocalización.");
        }
    </script>
</body>
</html>