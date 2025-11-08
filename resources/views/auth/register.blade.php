@extends('layouts.app')

@section('titulo')
    Regístrate en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/registrar.jpg') }}" alt="imagen registrar usuario">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <form action="">
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="name">
                        Nombre
                    </label>
                    <input id="name" name="name" placeholder="Tu nombre" type="text"
                        class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="username">
                        Username
                    </label>
                    <input id="username" name="username" placeholder="Tu nombre de usuario" type="text"
                        class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">
                        Email
                    </label>
                    <input id="email" name="email" placeholder="Tu email" type="email"
                        class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">
                        Contraseña
                    </label>
                    <input id="password" name="password" placeholder="Tu password" type="password"
                        class="border p-3 w-full rounded-lg">
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password_confimation">
                        Repetir Contraseña
                    </label>
                    <input id="password_confimation" name="password_confirmation" placeholder="Repite el password"
                        type="password" class="border p-3 w-full rounded-lg">
                </div>

                <input type="submit" value="Crear Cuenta"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
