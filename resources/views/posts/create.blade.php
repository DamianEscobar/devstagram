@extends('layouts.app')

@section('titulo')
    Crea una nueva Publicación
@endsection

@push('styles')
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
@endpush

@section('contenido')
    <div class="md:flex md:items-center">
        <div class="md:w-1/2 px-10">
            <form id="dropzone"
                class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col justify-center items-center"
                action="{{ route('imagenes.store') }}" method="POST">
                @csrf

            </form>
        </div>
        <div class="md:w-1/2
                bg-white p-6 rounded-lg shadow-lg mt-10 mx-5 md:mt-0 md:mx-0">
            <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="titulo">
                        Titulo
                    </label>
                    <input id="titulo" name="titulo" placeholder="Titulo de la publicación" type="text"
                        class="border p-3 w-full rounded-lg @error('name')
                                                                border-red-500
                                                            @enderror"
                        value= "{{ old('titulo') }}">
                    @error('titulo')
                        <p class="bg-red-500 text-white rounded-lg text-sm p-1 text-center mt-1">
                            {{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-5">
                    <label class="mb-2 block uppercase text-gray-500 font-bold" for="descripcion">
                        Descripción
                    </label>
                    <textarea id="descripcion" name="descripcion" placeholder="Descripción de la publicación"
                        class="border p-3 w-full rounded-lg @error('name')
                                                                border-red-500
                                                            @enderror">{{ old('titulo') }}</textarea>
                    @error('titulo')
                        <p class="bg-red-500 text-white rounded-lg text-sm p-1 text-center mt-1">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <input type="submit" value="Crear Publicación"
                    class="bg-sky-600 hover:bg-sky-700 transition-colors cursor-pointer uppercase font-bold w-full p-3 text-white rounded-lg">
            </form>
        </div>
    </div>
@endsection
