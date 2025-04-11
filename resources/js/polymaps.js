document.addEventListener("DOMContentLoaded", function () {
    // Crear el mapa
    var map = po.map()
        .container(document.getElementById("polymap").appendChild(po.svg("svg")))
        .center({ lat: 24.0277, lon: -104.6532 }) // Coordenadas de Durango, México
        .zoom(15)
        .add(po.interact());

    // Agregar una capa de mosaicos (tiles)
    map.add(po.image()
        .url(po.url("https://{S}.tile.openstreetmap.org/{Z}/{X}/{Y}.png")
        .hosts(["a", "b", "c"])));

    // Agregar un marcador
    var marker = po.geoJson()
        .features([{
            geometry: {
                type: "Point",
                coordinates: [-104.6532, 24.0277] // Coordenadas del marcador
            },
            properties: {
                title: "Durango, México"
            }
        }])
        .on("load", function (e) {
            e.features.forEach(function (f) {
                f.element.setAttribute("r", 5); // Tamaño del marcador
                f.element.setAttribute("fill", "red"); // Color del marcador
            });
        });

    map.add(marker);
});