<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    /**
     * Muestra el formulario de inicio de sesión.
     */
    public function showLoginForm()
    {
        return view('login'); // Asegúrate de que la vista esté en resources/views/login.blade.php
    }

    /**
     * Maneja el inicio de sesión del usuario.
     */
    public function login(Request $request)
    {
        // Validar los datos ingresados
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($request->only('email', 'password'))) {
            // Regenerar la sesión para evitar problemas de sesión fija
            $request->session()->regenerate();

            // Redirigir al usuario a la página de Parking
            return redirect()->route('parking')->with('success', 'Welcome back!');
        }

        // Si la autenticación falla, redirigir con un mensaje de error
        return back()->withErrors([
            'email' => 'Las credenciales no coinciden con nuestros registros.',
        ]);
    }

    /**
     * Maneja el cierre de sesión del usuario.
     */
    public function logout(Request $request)
    {
        // Cerrar la sesión del usuario
        Auth::logout();

        // Invalidar la sesión actual
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // Redirigir al usuario a la página de inicio
        return redirect()->route('homepage')->with('success', 'Logged out successfully.');
    }
    protected function redirectTo()
{
    return route('parking'); // Redirige a la página de estacionamiento
}
}
