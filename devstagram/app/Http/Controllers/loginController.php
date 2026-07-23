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
    }
}
