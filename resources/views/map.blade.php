<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mapa de Estacionamientos</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js" crossorigin=""></script>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="bg-gray-100 text-gray-800">
    <div id="map" class="w-full h-screen"></div>
    <style>
  #map {
    height: 100vh;
    width: 100%;
  }
</style>


    <script>
        // Obtener la calle seleccionada de la URL
        const urlParams = new URLSearchParams(window.location.search);
        const street = urlParams.get('street');
        console.log("Calle seleccionada:", street); // Depuración

        // Inicializar el mapa
        const map = L.map('map').setView([24.0277, -104.6532], 15); // Coordenadas de Durango Centro

        // Agregar un mapa base (OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Coordenadas de calles
        const streetCoordinates = {
            "Calle Constitución": [24.0277, -104.6532],
            "Calle 5 de Febrero": [24.0251, -104.6599],
            "Calle Hidalgo": [24.02301246915027, -104.67339693495933],
            "Calle Juárez": [24.027121065978974, -104.67017941961588],
            "Calle Zaragoza": [24.028546237019345, -104.67247802972646],
            "Calle Victoria": [24.0265, -104.6538],
            "Calle Negrete": [24.025808899082996, -104.6697916368347],
            "Calle Gómez Palacio": [24.0278, -104.6525],
            "Calle Pino Suárez": [24.0267, -104.6543],
            "Calle Aquiles Serdán": [24.0282, -104.6530]
        };

        // Centrar el mapa en la calle seleccionada
        if (streetCoordinates[street]) {
            const [lat, lng] = streetCoordinates[street];
            console.log("Coordenadas encontradas:", lat, lng); // Depuración
            map.setView([lat, lng], 18);
            L.marker([lat, lng]).addTo(map).bindPopup(`Estás viendo: ${street}`).openPopup();
        } else {
            console.error('No se encontraron coordenadas para esta calle:', street); // Depuración
            alert('No se encontraron coordenadas para esta calle.');
        }
    </script>
</body>
</html>