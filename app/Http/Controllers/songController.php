<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SongController extends Controller
{
    public function index()
    {
        return 'Página principal';
    }

    public function contact()
    {
        return 'Página de contacto';
    }

    public function create()
    {
        return 'Añadir canción';
    }

    public function edit()
    {
        return 'Modificar canción';
    }
}
