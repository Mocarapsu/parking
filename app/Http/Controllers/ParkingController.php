<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;

class ParkingController extends Controller
{
    public function showParking()
    {
        // Obtener todos los vehículos de la base de datos
        $vehicles = Vehicle::all();

        // Pasar los vehículos a la vista
        return view('parking', compact('vehicles'));
    }
}