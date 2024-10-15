<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    // Método para mostrar el formulario de login
    public function showLoginForm()
    {
        return view('login'); // Asegúrate de que esta vista exista
    }

    // Método para manejar el inicio de sesión
    public function login(Request $request)
    {
        // Validar las credenciales del usuario
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt($request->only('email', 'password'))) {
            // Redirigir al usuario a la vista de omni_canal
            return redirect()->route('omni_canal');
        }

        // Si las credenciales son incorrectas, redirigir de nuevo al login
        return back()->withErrors([
            'email' => 'Las credenciales proporcionadas son incorrectas.',
        ]);
    }

    // Método para cerrar sesión
    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/login');
    }
}