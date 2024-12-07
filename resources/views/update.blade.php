@extends('layouts.layout')

@section('content')
    <h2>Actualizar Canción</h2>
    @if(session('success'))
        <div style="color: green;">{{ session('success') }}</div>
    @endif

    <form action="/update" method="POST">
        @csrf
        @method('PUT')

        @if(isset($song))
            <!-- Si se accede desde el botón "Editar", el campo ID es oculto -->
            <input type="hidden" name="id" value="{{ $song->id }}">
        @else
            <!-- Si se accede desde el menú, el campo ID es visible -->
            <label for="id">ID de la canción:</label>
            <input type="text" name="id" id="id" required><br>
        @endif

        <label for="title">Nuevo Título:</label>
        <input type="text" name="title" id="title" value="{{ $song->title ?? '' }}" required><br>

        <label for="group">Nuevo Grupo:</label>
        <input type="text" name="group" id="group" value="{{ $song->group ?? '' }}" required><br>

        <label for="style">Nuevo Estilo:</label>
        <input type="text" name="style" id="style" value="{{ $song->style ?? '' }}" required><br>

        <label for="rating">Nuevo Rating:</label>
        <input type="number" name="rating" id="rating" value="{{ $song->rating ?? '' }}" min="1" max="10" required><br>

        <button type="submit">Actualizar Canción</button>
    </form>
@endsection
