@extends('layouts.layout')

@section('content')
<h2>Añadir Canción</h2>
@if(session('success'))
    <div style="color: green;">{{ session('success') }}</div>
@endif
<form action="/add" method="POST">
    @csrf
    <label for="title">Título:</label>
    <input type="text" name="title" id="title" required><br>

    <label for="group">Grupo:</label>
    <input type="text" name="group" id="group" required><br>

    <label for="style">Estilo:</label>
    <input type="text" name="style" id="style" required><br>

    <label for="rating">Rating:</label>
    <input type="number" name="rating" id="rating" min="1" max="10" required><br>

    <button type="submit">Guardar Canción</button>
</form>
@endsection
