<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song; // Asegúrate de que el modelo Song esté correctamente importado

class SongController extends Controller
{
    // Muestra la página principal
    public function index()
    {
        return view('home'); // Apunta a home.blade.php
    }

    // Muestra la página de contacto
    public function contact()
    {
        return view('contact'); // Apunta a contact.blade.php
    }

    // Muestra el formulario para añadir canciones
    public function create()
    {
        return view('add'); // Apunta a add.blade.php
    }

    // Muestra el formulario para actualizar canciones
    public function edit()
    {
        return view('update'); // Apunta a update.blade.php
    }

    // Guarda una nueva canción en la base de datos
    public function store(Request $request)
    {
        // Validar los datos enviados desde el formulario
        $request->validate([
            'title' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'style' => 'required|string|max:50',
            'rating' => 'required|integer|min:1|max:10',
        ]);

        // Crear una nueva canción en la base de datos
        Song::create($request->all());

        // Redirigir a la página principal con un mensaje de éxito
        return redirect('/home')->with('success', 'Canción añadida correctamente');
    }

    // Actualiza una canción existente en la base de datos
    public function update(Request $request)
    {
        // Validar los datos enviados desde el formulario
        $request->validate([
            'id' => 'required|exists:songs,id', // Verifica que el ID exista en la tabla songs
            'title' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'style' => 'required|string|max:50',
            'rating' => 'required|integer|min:1|max:10',
        ]);

        // Buscar la canción por ID y actualizarla
        $song = Song::find($request->id);
        $song->update($request->only(['title', 'group', 'style', 'rating']));

        // Redirigir a la página principal con un mensaje de éxito
        return redirect('/home')->with('success', 'Canción actualizada correctamente');
    }
}
