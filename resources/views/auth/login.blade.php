@extends('layouts.app')

@section('titulo')
    Iniciar Sesión en DevStagram
@endsection

@section('contenido')
    <div class="md:flex md:justify-center md:gap-10 md:items-center">
        <div class="md:w-6/12 p-5">
            <img src="{{ asset('img/login.jpg') }}" alt="imagen login usuario">
        </div>

        <div class="md:w-4/12 bg-white p-6 rounded-lg shadow-lg">
            <form action="{{ route('login') }}" method="POST">
                @csrf

                @if (session('mensaje'))
                    <p class="bg-red-500 text-white rounded-lg text-sm p-1 text-center mt-1">
                        {{ session('mensaje') }}
                    </p>
                @endif

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="email">
                        Email
                    </label>
                    <input id="email" name="email" placeholder="Tu email" type="email"
                        class="border p-3 w-full rounded-lg @error('email')
                                                                border-red-500
                                                            @enderror"
                        value= "{{ old('email') }}">
                    @error('email')
                        <p class="bg-red-500 text-white rounded-lg text-sm p-1 text-center mt-1">
                            {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="password">
                        Contraseña
                    </label>
                    <input id="password" name="password" placeholder="Tu password" type="password"
                        class="border p-3 w-full rounded-lg @error('password')
                                                                border-red-500
                                                            @enderror">
                    @error('password')
                        <p class="bg-red-500 text-white rounded-lg text-sm p-1 text-center mt-1">
                            {{ $message }}</p>
                    @enderror
                </div>

                <div class="mb-5">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember" class=" text-gray-500 text-base">
                        Mantener mi sesión abierta
                    </label>
                </div>

                <input type="submit" value="Iniciar Sesión"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
