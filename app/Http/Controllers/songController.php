<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song; // Modelo Song

class SongController extends Controller
{
    // Muestra la página principal con la lista de canciones
    public function index(Request $request)
    {
        // Recuperar todos los estilos únicos de la base de datos
        $styles = Song::select('style')->distinct()->pluck('style');

        // Filtrar canciones si hay estilos seleccionados y agregar paginación
        $songs = Song::when($request->styles, function ($query) use ($request) {
            return $query->whereIn('style', $request->styles);
        })->paginate(5); // Paginar con 5 canciones por página

        // Pasar datos a la vista
        return view('home', compact('songs', 'styles'));
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

    // Muestra el formulario para actualizar canciones (con datos específicos o vacío)
    public function edit($id = null)
    {
        // Si se proporciona un ID, busca la canción. De lo contrario, deja el formulario vacío.
        $song = $id ? Song::findOrFail($id) : null;

        // Pasar la canción (si existe) a la vista de edición
        return view('update', compact('song'));
    }

    // Guarda una nueva canción en la base de datos
    public function store(Request $request)
    {
        // Validar los datos enviados desde el formulario
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'style' => 'required|string|max:50',
            'rating' => 'required|integer|min:1|max:10',
        ]);

        // Crear una nueva canción en la base de datos
        Song::create($validatedData);

        // Redirigir a la página principal con un mensaje de éxito
        return redirect('/home')->with('success', '¡Canción añadida correctamente!');
    }

    // Actualiza una canción existente en la base de datos
    public function update(Request $request)
    {
        // Validar los datos enviados desde el formulario
        $validatedData = $request->validate([
            'id' => 'required|exists:song,id', 
            'title' => 'required|string|max:255',
            'group' => 'required|string|max:255',
            'style' => 'required|string|max:50',
            'rating' => 'required|integer|min:1|max:10',
        ]);

        // Buscar la canción por ID
        $song = Song::findOrFail($validatedData['id']);

        // Actualizar la canción con los datos validados
        $song->update($validatedData);

        // Redirigir a la página principal con un mensaje de éxito
        return redirect('/home')->with('success', '¡Canción actualizada correctamente!');
    }

    // Elimina una canción existente de la base de datos
    public function destroy(Request $request)
    {
        // Validar el ID enviado desde el formulario
        $validatedData = $request->validate([
            'id' => 'required|exists:song,id',
        ]);

        // Buscar la canción por ID y eliminarla
        $song = Song::findOrFail($validatedData['id']);
        $song->delete();

        // Redirigir a la página principal con un mensaje de éxito
        return redirect('/home')->with('success', '¡Canción eliminada correctamente!');
    }

    // Marca o desmarca una canción como favorita
    public function toggleFavorite($id)
    {
        // Buscar la canción por ID
        $song = Song::findOrFail($id);

        // Cambiar el estado de favorito
        $song->is_favorite = !$song->is_favorite;
        $song->save();

        // Redirigir a la página principal con un mensaje de éxito
        return redirect('/home')->with('success', 'El estado de favorito ha sido actualizado.');
    }

    // Lista las canciones marcadas como favoritas
    public function favorites()
    {
        // Obtener todas las canciones marcadas como favoritas
        $favorites = Song::where('is_favorite', true)->get();

        // Pasar las canciones favoritas a la vista de favoritos
        return view('favorites', compact('favorites'));
    }
}
