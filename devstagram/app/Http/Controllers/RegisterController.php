<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        // dd($request);
        // dd($request->get('username'));

        // Validacion
        // $this->validate($request, [
        //     'name' => 'required',
        // ]);
        $data = $request->validate([
            'name' => 'required|min:5|max:30',
            'username' => 'required|unique:users|min:3|max:20',
            'email' => 'required|unique:users|email|max:60',
            'password' => 'required|confirmed|min:6',
        ]);

        // dd('Creando usuario');
        // Esto es equivalente a INSERT IN TO , en la siguinete funcion
        User::create([
            // Arreglos asociativos para obtener informacion del objeto es con request
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password,
            //'password' => Hash::make($request->password),
        ]);
    }
}