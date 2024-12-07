<?php

use App\Http\Controllers\SongController;
use Illuminate\Support\Facades\Route;

Route::get('/', [SongController::class, 'index']); // Página principal
Route::get('/home', [SongController::class, 'index']); // Página principal
Route::get('/contact', [SongController::class, 'contact']); // Página de contacto
Route::get('/add', [SongController::class, 'create']); // Página de añadir canción
Route::get('/update', [SongController::class, 'edit']); // Página de actualizar canción

// Rutas para formularios
Route::post('/add', [SongController::class, 'store']);
Route::post('/update', [SongController::class, 'update']);