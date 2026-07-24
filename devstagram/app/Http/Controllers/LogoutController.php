<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //
    public function store()
    {
        //Probando si tenemos coneccion 
        //dd('Cerrar sesión');

        //Helper mas metodo para poder cerrar la Sesión pero poco seguro
        //En la ruta web.php tenemos un metodo get para enviar una peticion pues enviar un request a una base de datos es inseguroPor lo que se cambia a post
        //Gracias a ese post podemos agregarle la directiva en el blade de @csrf
        auth()->logout();
        return redirect()->route('login');
    }
}
