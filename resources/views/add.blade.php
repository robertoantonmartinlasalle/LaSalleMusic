@extends('layouts.layout')

@section('content')
<div class="container mt-5">
    <!-- Título principal -->
    <h2 class="text-center mb-4">Añadir Canción</h2>

    <!-- Mensaje de éxito -->
    @if(session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <!-- Formulario para añadir una canción -->
    <div class="card shadow-sm">
        <div class="card-body">
            <form action="/add" method="POST">
                @csrf
                <!-- Campo para el título de la canción -->
                <div class="mb-3">
                    <label for="title" class="form-label">Título:</label>
                    <input type="text" name="title" id="title" class="form-control" placeholder="Introduce el título" required>
                </div>

                <!-- Campo para el grupo o artista -->
                <div class="mb-3">
                    <label for="group" class="form-label">Grupo:</label>
                    <input type="text" name="group" id="group" class="form-control" placeholder="Introduce el nombre del grupo o artista" required>
                </div>

                <!-- Campo para el estilo de la canción -->
                <div class="mb-3">
                    <label for="style" class="form-label">Estilo:</label>
                    <input type="text" name="style" id="style" class="form-control" placeholder="Introduce el estilo musical (ej: Rock, Blues)" required>
                </div>

                <!-- Campo para el rating de la canción -->
                <div class="mb-3">
                    <label for="rating" class="form-label">Rating:</label>
                    <input type="number" name="rating" id="rating" class="form-control" min="1" max="10" placeholder="Puntúa entre 1 y 10" required>
                </div>

                <!-- Botón para guardar la canción -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Guardar Canción</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
