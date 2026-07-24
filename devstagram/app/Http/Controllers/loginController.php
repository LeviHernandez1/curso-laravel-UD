<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }
    public function store(Request $request)
    {
        //Primero probamos si tenemos coneccion y el store() va sin variables
        //dd('Autenticando...');

        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        // Esta autenticacion nos dara un valor true o false por lo que se negara por si no esta autenticado por no cumplir dos validaciones
        if(!auth()->attempt($request->only('email', 'password'))) {
            // Redireccionamiento de no estar autenticado correctamente con back, con with introducimos el nombre de indentificacion del metodo y el mensaje que mostrar
            // Esto es una manera de mostrar informacion en la vista.
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        // De ser correcto lo redigirimos a su perfil solicitado
        return redirect()->route('posts.index');
    }
    
}
