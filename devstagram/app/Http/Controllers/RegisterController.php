<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            //Para poder obtener el Username en minusculas se puede hacer de la siguiente manera 
            //'username' =>Str::lower($request->username),
            //Para poder obtener el Username en minusculas y sin espacios se puede hacer de la siguiente manera como URL
            //'username' =>Str::slug($request->username), // Se perdio el unique y pemite registros con el mismo nombre de usuario
            'username' =>Str::lower($request->username),// Con lower logramos que no se pierda el unique y pero se pierde los guiones como url
            'email' => $request->email,
            //'password' => $request->password,
            'password' => Hash::make($request->password),
        ]);
    }
}