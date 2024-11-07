<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

// Modifica la ruta principal para que apunte al controlador
Route::get('/', HomeController::class);

// // Rutas principales
// Route::get('/cursos', [CursoController::class, 'index']);
// Route::get('/cursos/create', [CursoController::class, 'create']);
// Route::get('/cursos/{curso}', [CursoController::class, 'show']);

// Podemos simplificar el código anterior con el método Route::controller
Route::controller(CursoController::class)->group(function() {
    Route::get('/cursos', 'index');
    Route::get('/cursos/create', 'create');
    Route::get('/cursos/{curso}', 'show');
});