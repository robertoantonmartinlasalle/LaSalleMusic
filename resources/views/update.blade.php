@extends('layouts.layout')

@section('content')
<h2>Actualizar Canción</h2>
@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif
<form action="/update" method="POST">
    @csrf
    @method('PUT')
    <label for="id">ID de la canción:</label>
    <input type="text" name="id" id="id" required><br>

    <label for="title">Nuevo Título:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="group">Nuevo Grupo:</label>
    <input type="text" name="group" id="group" required><br>

    <label for="style">Nuevo Estilo:</label>
    <input type="text" name="style" id="style" required><br>

    <label for="rating">Nuevo Rating:</label>
    <input type="number" name="rating" id="rating" min="1" max="10" required><br>

    <button type="submit">Actualizar Canción</button>
</form>
@endsection
