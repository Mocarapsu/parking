import './bootstrap';
import React from "react";
import ReactDOM from "react-dom";
import { MapContainer, TileLayer, Marker, Popup } from "react-leaflet";
import "leaflet/dist/leaflet.css";

// Define el componente MapComponent
const MapComponent = () => {
  return (
    <MapContainer
      center={[24.0277, -104.6532]} // Coordenadas de Durango, México
      zoom={15}
      style={{ height: "500px", width: "100%" }}
    >
      <TileLayer
        url="https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png"
        attribution='&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
      />
      <Marker position={[24.0277, -104.6532]}>
        <Popup>Durango, México</Popup>
      </Marker>
    </MapContainer>
  );
};

// Renderiza el componente MapComponent en el contenedor con id="map"
if (document.getElementById("map")) {
  ReactDOM.render(<MapComponent />, document.getElementById("map"));
}