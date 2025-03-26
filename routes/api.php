<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\BookController; // Asegúrate de importar el controlador

// Ruta GET para obtener todos los libros
Route::get('/books', [BookController::class, 'index']);

// Ruta GET para obtener un libro específico
Route::get('/books/{id}', [BookController::class, 'show']);

// Ruta POST para crear un nuevo libro
Route::post('/books', [BookController::class, 'store']);

// Ruta PUT para actualizar un libro específico
Route::put('/books/{id}', [BookController::class, 'update']);

// Ruta DELETE para eliminar un libro específico
Route::delete('/books/{id}', [BookController::class, 'destroy']);

