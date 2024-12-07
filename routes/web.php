<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SongController::class, 'index']); // Página principal
Route::get('/home', [SongController::class, 'index']); // Página principal
Route::get('/contact', [SongController::class, 'contact']); // Página de contacto
Route::get('/add', [SongController::class, 'create']); // Página de añadir canción
Route::get('/update/{id?}', [SongController::class, 'edit'])->name('song.edit'); // Página de actualizar canción
Route::put('/update', [SongController::class, 'update']); // Actualizar canción

Route::post('/delete', [SongController::class, 'destroy']); // Página para eliminar canciones
// Rutas para formularios
Route::post('/add', [SongController::class, 'store']);
Route::put('/update', [SongController::class, 'update']); // Cambiar a PUT para actualizar
