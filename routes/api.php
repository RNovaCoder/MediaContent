<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

Route::get('/{filename}', function ($filename) {
    $path = storage_path('app/media/' . $filename);
    
    // Verificar si el archivo existe
    if (!Storage::exists('media/' . $filename)) {
        abort(404);
    }

    // Permitir acceso desde cualquier origen (CORS)
    return response()->file($path);
})->where('filename', '.*');;
