@extends('layouts.layout')

@section('content')
    <h2>Actualizar Canción</h2>
    <form action="/update" method="POST">
        @csrf
        <label for="id">ID de la canción:</label>
        <input type="number" id="id" name="id" required><br>

        <label for="title">Nuevo Título:</label>
        <input type="text" id="title" name="title" required><br>

        <label for="group">Nuevo Grupo:</label>
        <input type="text" id="group" name="group" required><br>

        <label for="style">Nuevo Estilo:</label>
        <input type="text" id="style" name="style" required><br>

        <label for="rating">Nuevo Rating:</label>
        <input type="number" id="rating" name="rating" min="1" max="10" required><br>

        <button type="submit">Actualizar Canción</button>
    </form>
@endsection
