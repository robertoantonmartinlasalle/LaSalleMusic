@extends('layouts.layout')

@section('content')
    <h2>Añadir Canción</h2>
    <form action="/add" method="POST">
        @csrf
        <label for="title">Título:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="group">Grupo:</label>
        <input type="text" id="group" name="group" required><br>

        <label for="style">Estilo:</label>
        <input type="text" id="style" name="style" required><br>

        <label for="rating">Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="10" required><br>

        <button type="submit">Guardar Canción</button>
    </form>
@endsection
