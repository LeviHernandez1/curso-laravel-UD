<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    // Constructor instanciado de PostCOntroller
    /* public function __construct()
    {   
        // Esto protege que un usuario debe estar autenticado para poder ver el contenido
        $this->middleware('auth');
    } */

    public function index()
    {   
        // Mostramos los datos de user para mostrarlos en pantalla 
        //dd(auth()->user());
        return view('dashboard');
    }
}


