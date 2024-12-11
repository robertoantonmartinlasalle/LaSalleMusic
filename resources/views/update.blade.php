@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <!-- Título principal -->
    <h2 class="text-center mb-4">Actualizar Canción</h2>

    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario para actualizar una canción -->
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/update" method="POST">
                @csrf
                @method('PUT')

                <!-- Campo para el ID (oculto si se pasa el objeto canción) -->
                @if(isset($song))
                    <input type="hidden" name="id" value="{{ $song->id }}">
                @else
                    <div class="mb-3">
                        <label for="id" class="form-label">ID de la canción:</label>
                        <input type="text" name="id" id="id" class="form-control" placeholder="Introduce el ID de la canción" required>
                    </div>
                @endif

                <!-- Campo para el nuevo título -->
                <div class="mb-3">
                    <label for="title" class="form-label">Nuevo Título:</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Introduce el nuevo título" value="{{ $song->title ?? '' }}" required>
                </div>

                <!-- Campo para el nuevo grupo -->
                <div class="mb-3">
                    <label for="group" class="form-label">Nuevo Grupo:</label>
                    <input type="text" name="group" id="group" class="form-control" placeholder="Introduce el nuevo grupo o artista" value="{{ $song->group ?? '' }}" required>
                </div>

                <!-- Campo para el nuevo estilo -->
                <div class="mb-3">
                    <label for="style" class="form-label">Nuevo Estilo:</label>
                    <input type="text" name="style" id="style" class="form-control" placeholder="Introduce el nuevo estilo musical (ej: Rock, Blues)" value="{{ $song->style ?? '' }}" required>
                </div>

                <!-- Campo para el nuevo rating -->
                <div class="mb-3">
                    <label for="rating" class="form-label">Nuevo Rating:</label>
                    <input type="number" name="rating" id="rating" class="form-control" min="1" max="10" placeholder="Introduce el nuevo rating entre 1 y 10" value="{{ $song->rating ?? '' }}" required>
                </div>

                <!-- Botón para actualizar la canción -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Actualizar Canción</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
