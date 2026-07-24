<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>Devstagram - @yield('titulo')</title>
        <script src="{{ asset('js/app.js') }}" defer></script>
        @vite('resources/css/app.css')
    </head>
    <body>
        <header class="p-5 boder-b bg-white shadow-xl">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-3xl font-black">
                    DevStagram
                </h1>

                {{-- Directiva mas un helper --}}
                {{-- @if (auth()->user())
                    <p>Autenticado</p>
                @else
                    <p>No autenticado</p>
                @endif --}}

                {{-- Otra opcion, si ya esta autenticado se imprime esto--}}
                @auth
                    {{-- <p>Autenticado</p> --}}
                    <nav class="flex gap-2 items-center" >
                        <a class="font-bold text-gray-600 text-sm" href="#">
                            Hola: <span class="font-normal">{{ auth()->user()->username }}</span>
                        </a>

                        <form method="POST" action="{{route('logout')}}">
                            @csrf
                            <button type="submit" class="font-bold uppercase text-gray-600 text-sm">
                                Cerrar Sesión
                            </button>
                        </form>
                        
                    </nav>
                @endauth
                {{-- Si no esta autenticado mostramos la navegacion --}}
                @guest
                    {{-- <p>No Autenticado</p> --}}
                    <nav class="flex gap-2 items-center" >
                        <a class="font-bold uppercase text-gray-600 text-sm" href="#">
                            Login
                        </a>
                        <a href="{{route('register')}}" class="font-bold uppercase text-gray-600 text-sm">
                            Crear Cuenta
                        </a>
                    </nav>
                @endguest

            </div>        
        </header>
        <main class="p-5 bg-blue-100">
            <h2 class="font-black text-center text-3xl mb-10">
                @yield('titulo')
            </h2>
            @yield('contenido')
        </main>
        <footer class="mt-10 text-center p-5 text-gray-500 font-bold uppercase">
            DevStagram - Todos los derechos reservados 
            {{-- @php echo date ('Y') @endphp --}}
            {{ now()->year }}
        </footer>
    </body>
</html>