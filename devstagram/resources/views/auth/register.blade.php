@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center">
        <div class = "md:w-4/12">
            <p>Imagen Aquí</p>
        </div>

        <div class = "md:w-4/12">
            <form>
                <div class="md-5">
                    <label for="name" class="mb-2 block uppercase text-gray-500 font-bold">
                        Nombre
                    </label>

                    <input 
                        id="name"
                        name="name"
                        type="text"
                        placeholder="Tu Nombre"
                        class= "boder p-3 w-full rounded-lg"
                    />
                </div>
                <div class="md-5">
                    <label for="username" class="mb-2 block uppercase text-gray-500 font-bold">
                        Username
                    </label>

                    <input 
                        id="username"
                        name="username"
                        type="text"
                        placeholder="Tu Nombre de Usuario"
                        class= "boder p-3 w-full rounded-lg"
                    />
                </div>
                <div class="md-5">
                    <label for="email" class="mb-2 block uppercase text-gray-500 font-bold">
                        Email
                    </label>

                    <input 
                        id="email"
                        name="email"
                        type="email"
                        placeholder="Tu email de registro"
                        class= "boder p-3 w-full rounded-lg"
                    />
                </div>
                <div class="md-5">
                    <label for="password" class="mb-2 block uppercase text-gray-500 font-bold">
                        Pasword
                    </label>

                    <input 
                        id="password"
                        name="password"
                        type="text"
                        placeholder="Tu password de registro"
                        class= "boder p-3 w-full rounded-lg"
                    />
                </div>
                <div class="md-5">
                    <label for="password_confirmation" class="mb-2 block uppercase text-gray-500 font-bold">
                        Repetir Pasword
                    </label>

                    <input 
                        id="password_confirmation"
                        name="password_confirmation"
                        type="text"
                        placeholder="Repite tu password"
                        class= "boder p-3 w-full rounded-lg"
                    />
                </div>

                <input
                    type="submit"
                    value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full text-white rounded-lg"
                />
            </form>
        </div>
    </div>
@endsection