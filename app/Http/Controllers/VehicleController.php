<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vehicle;
use Illuminate\Support\Facades\Auth;

class VehicleController extends Controller
{
    public function store(Request $request)
    {
        // Valida los datos del formulario
        $request->validate([
            'name' => 'required|string|max:255',
            'color' => 'required|string|max:255',
            'license_plate' => 'required|string|max:255|unique:vehicles,license_plate',
        ]);

        // Crea un nuevo vehículo para el usuario autenticado
        Vehicle::create([
            'user_id' => Auth::id(),
            'name' => $request->name,
            'color' => $request->color,
            'license_plate' => $request->license_plate,
        ]);

        return redirect()->route('parking')->with('success', 'Vehículo agregado correctamente.');
    }

    public function index()
    {
        $vehicles = Vehicle::where('user_id', Auth::id())->paginate(10);
        return view('vehicle', compact('vehicles'))->with('standalone', true);
    }
}
