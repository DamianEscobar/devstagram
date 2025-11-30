<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Intervention\Image\Laravel\Facades\Image;

class ImagenController extends Controller
{
    public function store(Request $request)
    {
        $imagen = $request->file('file');

        $nombreImagen = Str::uuid() . "." . $imagen->extension();

        $imagenServidor = Image::read($imagen);
        $imagenServidor->cover(1000, 1000);


        $uploadsPath = public_path('uploads');

        if (!is_dir($uploadsPath)) {
            mkdir($uploadsPath, 0755, true); // true crea directorios anidados
        }

        $imagenPath = $uploadsPath . '/' . $nombreImagen;
        $imagenServidor->save($imagenPath);

        return response()->json(['imagen' => $nombreImagen]);
    }
}
