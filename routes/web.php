<?php

use App\Http\Controllers\SongController;

Route::get('/', [SongController::class, 'index']);
Route::get('/home', [SongController::class, 'index']);
Route::get('/contact', [SongController::class, 'contact']);
Route::get('/add', [SongController::class, 'create']);
Route::get('/update', [SongController::class, 'edit']);
